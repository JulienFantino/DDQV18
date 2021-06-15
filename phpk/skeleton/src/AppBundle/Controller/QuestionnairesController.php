<?php

namespace AppBundle\Controller;

use AppBundle\Repository\DdqContratRepository;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\ContactService;
use AppBundle\Entity\DdqRepartition;
use Exception;

class QuestionnairesController extends AbstractController
{
    const AGENT_BUNDLE = 'AppBundle:Agent';
    const FORM_FACTORY = 'form.factory';
    const NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR = 'ne-pas-repondre@assurance-maladie.fr';
    const APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING = 'AppBundle:DdqQuestionnaireParking';
    const ETAPE_3 = 'etape3';
    const VALIDÉ = 'validé';
    const INVALIDÉ = 'invalidé';
    const RESSOURCESHUMAINES_CPAM_AIN_ASSURANCE_MALADIE_FR = 'ressourceshumaines.cpam-ain@assurance-maladie.fr';
    private const EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG = 'Emails/NotificationSoumission.html.twig';
    private const VALIDÉ_N_2 = 'validé N+2';
    private const ETAPE_6 = 'etape6';
    private const VALIDÉ_N_1 = 'validé N+1';
    private const EMAILS_NOTIFICATION_VALIDER_HTML_TWIG = 'Emails/NotificationValider.html.twig';
    private const CAMPAGNE = 'campagne';
    private const ETAPE_2 = 'etape2';
    private const QUESTIONNAIRE_RTT = 'questionnaire_rtt';
    private const ETAPE_4 = 'etape4';
    private const ETAPE_5 = 'etape5';
    private const QUESTIONNAIRE = 'questionnaire';
    private const CONTRATS = 'contrats';
    private const FORM = 'form';
    private const AGENT = 'agent';
    private const NOUVEAU = 'nouveau';
    private const INVALIDÉ_N_1 = 'invalidé N+1';
    private const INVALIDÉ_N_2 = 'invalidé N+2';
    private const DDQ_NOTIFICATION_NE_PAS_RÉPONDRE = 'DDQ - Notification - Ne pas répondre';
    private const APP_BUNDLE_DDQ_CONTRAT_REPARTITION = 'AppBundle:DdqContratRepartition';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE = 'AppBundle\Form\DdqQuestionnaireTpType';
    private const QUESTIONNAIRE_TP = 'questionnaire_tp';
    private const HORRAIRE = 'horraire';
    private const YEAR = 'year';


    public function getQuestionnaireParkingAction($campagne, Request $request, \Swift_Mailer $mailer)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(QuestionnairesController::AGENT_BUNDLE);
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */

        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);
        if ($qp->getStatut() !== self::VALIDÉ && $qp->getStatut() !== self::INVALIDÉ) {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp);
            $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                'collection' => array(
                    'retablir' => array(
                        'label' => 'Rétablir',
                        'predefined' => Bouton::PREDEFINED_RETABLIR,
                        'type' => Bouton::TYPE_RESET,
                        'highlight' => true,
                        'attr' => array('class' => 'btn_retablir', 'image' => 'retablir',),
                    ),
                    'ajouter' => array(
                        'label' => 'Ajouter',
                        'predefined' => Bouton::PREDEFINED_VALIDER,
                    ),
                ),
            ));

            if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                try {
                    $qp->setStatut('modifiable');
                    $em->persist($qp);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
//                        $transport = new \Swift_SmtpTransport();
//                        //création d'un objet mailer
//                        $mailer = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message(self::DDQ_NOTIFICATION_NE_PAS_RÉPONDRE))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        ->setTo($agent->getMail())
                        ->setBody($this->renderView(self::EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG,
                            array(self::QUESTIONNAIRE => $qp, self::AGENT => $agent)), 'text/html');
                    /******** mail à destination des RH ****************/
                    $mailToRH = (new \Swift_Message('DDQ - Notification - ' . $qp->getLibelle() . ' à valider'))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser les bons mails ici
                        //->setTo('florian.bardet@cpam-ain.cnamts.fr')
                        ->setTo(self::RESSOURCESHUMAINES_CPAM_AIN_ASSURANCE_MALADIE_FR)
                        ->setBody($this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG,
                            array(self::QUESTIONNAIRE => $qp, self::AGENT => $agent)), 'text/html');
                    $mailer->send($mailToAgent);
                    $mailer->send($mailToRH);
                    /*****************************************************************************/
                    $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                    return $this->redirectToRoute('campagnes_parking');
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');
                    return $this->render('AppBundle:Default:notification.html.twig');
                }
            }
        } else {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp, array('disabled' => true));
        }

        return $this->render('AppBundle:Questionnaires:QuestionnaireParking.html.twig', array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qp,
            self::FORM => $form->createView()
        ));
    }

    public function getQuestionnaireParkingHistoriqueAction($campagne, Request $request)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(QuestionnairesController::AGENT_BUNDLE);
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */
        // $campagne =$this->get->getStatut();
        // dump($campagne);
        $CamapgneRepo = $this->getDoctrine()->getManager()->getRepository(self::AGENT_BUNDLE);
        $CamapgneStatut = $CamapgneRepo->findOneByNomium($nomium);
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);


        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp, array('disabled' => true));


        return $this->render('AppBundle:Questionnaires:QuestionnaireParking.html.twig', array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qp,
            self::FORM => $form->createView()
        ));
    }

    public function getQuestionnaireRttAction($campagne, Request $request, \Swift_Mailer $mailer, ContactService $test)
    {

        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(QuestionnairesController::AGENT_BUNDLE);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        /*Recup du questionnaire */
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');
        $qrtt = $qrttRepo->findOneByAgentByCampagne($agent, $campagne);
        /* Recup des contrats temps plein */
        $contratRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqContrat');
        $contrats = $contratRepo->findByTempsPlein();
        $formule = $qrtt->getFormule();
        $formule1j = $qrtt->getFormule1j();
        $qrtt->getStatut();
        $signature = $qrtt->getSignature();
        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt);
        //
        // dump($qrtt);
        ($data = $form->getData());

        if ($qrtt->getStatut() !== self::VALIDÉ_N_1 && $qrtt->getStatut() !== self::VALIDÉ_N_2 && $qrtt->getStatut() !== self::ETAPE_6) {
            /** Ajout d'un seul bouton au formulaire */

            $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                    'collection' => array(
                        'annuler' => array(
                            'label' => 'Annuler',
                            'formnovalidate' => false,
                            'predefined' => Bouton::PREDEFINED_RETABLIR,
                        ),
                        'ajouter' => array(
                            'label' => 'Suivant',
                            'formnovalidate' => false,
                            'predefined' => Bouton::PREDEFINED_VALIDER,
                        ),
                    ),
                )
            );

        } elseif ($qrtt->getStatut() == self::VALIDÉ_N_1 && $qrtt->getStatut() == self::VALIDÉ_N_2) {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt, array('disabled' => true));
        } elseif ($qrtt->getStatut() == self::ETAPE_5) {
            $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                    'collection' => array(
                        'annuler' => array(
                            'label' => 'Annuler',
                            'formnovalidate' => false,
                            'predefined' => Bouton::PREDEFINED_RETABLIR,
                        ),
                        'ajouter' => array(
                            'label' => 'Terminé',
                            'formnovalidate' => false,
                            'predefined' => Bouton::PREDEFINED_VALIDER,
                        ),
                    ),
                )
            );

        }


        if ($form->handleRequest($request)->isValid() && $form->isSubmitted()) {
            //dump ($data = $form->getData());
            //$em = $this->getDoctrine()->getManager();

            if (($qrtt->getStatut() == self::NOUVEAU || $qrtt->getStatut() == self::INVALIDÉ_N_1 || $qrtt->getStatut() == self::INVALIDÉ_N_2) && $qrtt->getRepriseTp() == true) {

                try {
                    $em = $this->getDoctrine()->getManager();
                    // $qrtt->setIdDdqContrat(24);
                    $qrtt->setStatut(self::ETAPE_6);
                    $qrtt->setSignature(true);
                    $em->persist($qrtt);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
                    // $transport = new \Swift_SmtpTransport('smtp.ramage','25', 'tls');
                    //création d'un objet mailer
                    //$mailer = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message(self::DDQ_NOTIFICATION_NE_PAS_RÉPONDRE))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        ->setTo($agent->getMail())
                        ->setBody($this->renderView(self::EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG,
                            array(
                                self::QUESTIONNAIRE => $qrtt,
                                self::AGENT => $agent
                            )
                        ),
                            'text/html'
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message('DDQ - Notification - ' . $qrtt->getLibelle() . ' à valider'))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qrtt,
                                self::AGENT => $agent,

                            )),
                            'text/html'
                        );

                    $mailer->send($mailToAgent);
                    // dump($mailToResponsableService);
                    $mailer->send($mailToResponsableService);
                    /*****************************************************************************/

                    $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                    //    return $this->redirectToRoute('campagnes_rtt');
                    return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');
                    return $this->render('DDQ001Bundle:Default:notification.html.twig');
                }
            } elseif (($qrtt->getStatut() == self::NOUVEAU || $qrtt->getStatut() == self::INVALIDÉ_N_1 || $qrtt->getStatut() == self::INVALIDÉ_N_2) && $qrtt->getRepriseTp() == false) {


                try {
                    $em = $this->getDoctrine()->getManager();
                    $qrtt->setStatut(self::ETAPE_2);
                    $em->persist($qrtt);
                    $em->flush();
                    return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');

                }

            } elseif ($qrtt->getStatut() == self::ETAPE_2 && $contrats != 2) {
                $em = $this->getDoctrine()->getManager();
                // $qrtt->setFormule(false);

                $qrtt->setDatemodif($this->date = new \Datetime());
                $qrtt->setStatut(self::ETAPE_3);
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);
                // return $this->redirectToRoute('campagnes_rtt');
            } elseif ($qrtt->getStatut() == self::ETAPE_2 && $contrats == '2') {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('' . self::ETAPE_3 . '');
                $em->persist($qrtt);
                $em->flush();

                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);


            } elseif ($qrtt->getStatut() == self::ETAPE_3) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut(self::ETAPE_4);
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);

            } elseif ($qrtt->getStatut() == self::ETAPE_4 && $formule == false) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut(self::ETAPE_5);
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);

            } elseif ($qrtt->getStatut() == self::ETAPE_4 && $formule == true) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut(self::ETAPE_5);
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);

            } elseif ($qrtt->getStatut() == self::ETAPE_5) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut(self::ETAPE_6);
                $em->persist($qrtt);
                $em->flush();
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                // $transport = new \Swift_SmtpTransport('smtp.ramage','25', 'tls');
                //création d'un objet mailer
                //$mailer = (new \Swift_Mailer($transport));
                /******** mail à destination de l'agent ****************/
                $mailToAgent = (new \Swift_Message(self::DDQ_NOTIFICATION_NE_PAS_RÉPONDRE))
                    ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                    ->setTo($agent->getMail())
                    ->setBody($this->renderView(self::EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG,
                        array(
                            self::QUESTIONNAIRE => $qrtt,
                            self::AGENT => $agent
                        )
                    ),
                        'text/html'
                    );
                /******** mail à destination du responsable de service ****************/
                /*** on recup le mail du responsable de service ***/
                $respId = $agent->getIdresponsable();

                $mailToResponsableService = (new \Swift_Message('DDQ - Notification - ' . $qrtt->getLibelle() . ' à valider'))
                    ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                    // il faudra préciser le bon mail ici
                    ->setTo($agentRepo->find($respId)->getMail())
                    ->setBody(
                        $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                            self::QUESTIONNAIRE => $qrtt,
                            self::AGENT => $agent,

                        )),
                        'text/html'
                    );

                $mailer->send($mailToAgent);
                // dump($mailToResponsableService);
                $mailer->send($mailToResponsableService);
                /*****************************************************************************/

                $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                //    return $this->redirectToRoute('campagnes_rtt');
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);


            }
        }
        //CONSTRUCTION  DES VUES SELON L'ETAPE
        if ($qrtt->getStatut() == self::NOUVEAU) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_2) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape2.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_3) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape3.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_4 && $qrtt->getFormule() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_4 && $qrtt->getFormule() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4Quadrimestre.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_5 && $qrtt->getFormule() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F1.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_5 && $qrtt->getFormule() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F2.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_6 && $qrtt->getReprisetp() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape6.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_6 && $qrtt->getReprisetp() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape6SansReprise.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::VALIDÉ_N_1) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::INVALIDÉ_N_1) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::VALIDÉ_N_2) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::INVALIDÉ_N_2) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));
        } else {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        }
    }

    public function getQuestionnaireTpAction($campagne, Request $request, \Swift_Mailer $mailer)
    {
        /* Identification de l'agent*/

        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        /*Recup du questionnaire */
        $repartationRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $contratRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqContrat');
        $contrats = $contratRepo->findByTempsPartiel();
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');
        $qtp = $qtpRepo->findOneByAgentByCampagne($agent, $campagne);

        $lundi = 0;
        $mardi = 0;
        $mercredi = 0;
        $jeudi = 0;
        $vendredi = 0;
        $lundiM = 0;
        $mardiM = 0;
        $mercrediM = 0;
        $jeudiM = 0;
        $vendrediM = 0;
        $lundiAm = 0;
        $mardiAm = 0;
        $mercrediAm = 0;
        $jeudiAm = 0;
        $vendrediAm = 0;
        $year = date('Y');
        $EtapeQuestionnaire = $qtp->getStatut();
        /* Varibales de vérifications  des jours */
        if ($qtp->getLundi()) {
            $lundi = 1;
        }
        if ($qtp->getMardi()) {
            $mardi = 1;
        }
        if ($qtp->getMercredi()) {
            $mercredi = 1;
        }
        if ($qtp->getJeudi()) {
            $jeudi = 1;
        }
        if ($qtp->getVendredi()) {
            $vendredi = 1;
        }
        /* Varibales de vérifications  des demis journées matin */
        if ($qtp->getLundiM()) {
            $lundiM = 1;
        }
        if ($qtp->getMardiM()) {
            $mardiM = 1;
        }
        if ($qtp->getMercrediM()) {
            $mercrediM = 1;
        }
        if ($qtp->getJeudiM()) {
            $jeudiM = 1;
        }
        if ($qtp->getVendrediM()) {
            $vendrediM = 1;
        }
        /* Varibales de vérifications  des demis journées Après midi */
        if ($qtp->getLundiAm()) {
            $lundiAm = 1;
        }
        if ($qtp->getMardiAm()) {
            $mardiAm = 1;
        }
        if ($qtp->getMercrediAm()) {
            $mercrediAm = 1;
        }
        if ($qtp->getJeudiAm()) {
            $jeudiAm = 1;
        }
        if ($qtp->getVendrediAm()) {
            $vendrediAm = 1;
        }

        /* Somme des varibale  de vérifications pour comparaison avec ce que l'on a choisi en contrat */
        $nbDemiJoursVerif = 0;
        $nbDemiJoursVerif = $lundiM + $lundiAm + $mardiM + $mardiAm + $mercrediM + $mercrediAm + $jeudiM + $jeudiAm + $vendrediM + $vendrediAm;
        $nbJoursVerif = $lundi + $mardi + $mercredi + $jeudi + $vendredi;
        /*********************************création des boutons du formulaire********************************************/


        ($contratID = ($qtp->getidddqContrat()->getid()));
        ($contratHoraire = ($qtp->getidddqContrat()->gethorairecontrat()));
        /************************************************************************************************************************/
        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE, $qtp);
        $RepartitionRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_CONTRAT_REPARTITION);
        if ($qtp->getStatut() !== self::VALIDÉ_N_1 && $qtp->getStatut() !== self::VALIDÉ_N_2) {
            /** Ajout d'un seul bouton au formulaire */
            /************************************************************************************************************************/
            $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                'collection' => array(
                    'annuler' => array(
                        'label' => 'Annuler',
                        'predefined' => Bouton::PREDEFINED_FERMERMODALE,
                        'type' => Bouton::TYPE_RESET,
                    ),
                    'ajouter' => array(
                        'label' => 'Valider',
                        'formnovalidate' => false,
                        'predefined' => Bouton::PREDEFINED_VALIDER,
                        'type' => Bouton::TYPE_SUBMIT,
                    ),
                ),
            ));
        } else {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE, $qtp, array('disabled' => true));
        }

        if ($form->handleRequest($request)->isValid() && $form->isSubmitted()) {

            if (($EtapeQuestionnaire == self::NOUVEAU || $EtapeQuestionnaire == self::INVALIDÉ_N_1 || $EtapeQuestionnaire == self::INVALIDÉ_N_2) && $qtp->getMotif() != '') {
                $em = $this->getDoctrine()->getManager();
                $qtp->setStatut(self::ETAPE_2);
                $em->persist($qtp);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_TP, [self::CAMPAGNE => $campagne]);
            } elseif ($EtapeQuestionnaire == self::ETAPE_2 && $qtp->getMotif() != '') {
                $em = $this->getDoctrine()->getManager();
                $qtp->setStatut(self::ETAPE_3);
                $em->persist($qtp);
                $em->flush();
                return $this->redirectToRoute(self::QUESTIONNAIRE_TP, [self::CAMPAGNE => $campagne]);
            } elseif ($EtapeQuestionnaire == self::ETAPE_3 && $contratID != '') {
                $nbjours = $qtp->getIdDdqContrat()->getNbjours();
                $nbJoursInteger = (int)$nbjours;
                ($nbdemijournee = $qtp->getIdDdqContrat()->getNbdemiesjournees());
                dump($nbJoursVerif);
                if ($nbJoursVerif != $nbJoursInteger) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($qtp);
                    $em->flush();
                    $this->notification('Merci, le nombre de jours sélectionnés n\'est pas correct', 'error');
                    return $this->render('AppBundle:Questionnaires\TP:QuestionnaireTPEtape3.html.twig', array(
                        self::AGENT => $agent,
                        self::HORRAIRE => $contratHoraire,
                        self::QUESTIONNAIRE => $qtp,
                        self::YEAR => $year,
                        self::FORM => $form->createView()
                    ));
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $qtp->setStatut(self::ETAPE_4);
                    $em->persist($qtp);
                    $em->flush();
                    return $this->redirectToRoute(self::QUESTIONNAIRE_TP, [self::CAMPAGNE => $campagne]);
                }
            } elseif ($EtapeQuestionnaire == self::ETAPE_4 && $nbJoursVerif != 0) {
                ($nbdemijournee = $qtp->getIdDdqContrat()->getNbdemiesjournees());
                if ($nbDemiJoursVerif != $nbdemijournee) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($qtp);
                    $em->flush();
                    $this->notification('Merci de renseigner correctement le nombre de demi-journées', 'error');
                    return $this->render('AppBundle:Questionnaires\TP:QuestionnaireTPEtape4.html.twig', array(
                        self::AGENT => $agent,
                        self::HORRAIRE => $contratHoraire,
                        self::QUESTIONNAIRE => $qtp,
                        self::YEAR => $year,
                        self::FORM => $form->createView()
                    ));
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $qtp->setStatut(self::ETAPE_5);
                    $em->persist($qtp);
                    $em->flush();
                    return $this->redirectToRoute(self::QUESTIONNAIRE_TP, [self::CAMPAGNE => $campagne]);
                }
            } elseif ($EtapeQuestionnaire == self::ETAPE_5 and $qtp->getSignature() == true) {
                try {
                    $em = $this->getDoctrine()->getManager();
                    //$qtp->setIdDdqRepartition(  $qtpRepartition);
                    $qtp->setStatut('modifiable');
                    $em->persist($qtp);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
                    $transport = new \Swift_SmtpTransport();
                    //création d'un objet mailer
                    $mailer = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message(self::DDQ_NOTIFICATION_NE_PAS_RÉPONDRE))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        ->setTo($agent->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qtp,
                                self::AGENT => $agent
                            )),
                            'text/html'
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message('DDQ - Notification - ' . $qtp->getLibelle() . ' à valider'))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qtp,
                                self::AGENT => $agent
                            )),
                            'text/html'
                        );

                    $mailer->send($mailToAgent);
                    //  dump($mailToResponsableService);
                    //$mailer->send($mailToResponsableService);
                    /*****************************************************************************/
                    $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                    return $this->redirectToRoute('campagnes_tp');
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');
                    return $this->render('AppBundle:Default:notification.html.twig');
                }
            }


        }
############################ NAVIGATION DU FORMULAIRE ############################################
        if ($EtapeQuestionnaire == self::NOUVEAU || $EtapeQuestionnaire == self::INVALIDÉ_N_1 || $EtapeQuestionnaire == self::INVALIDÉ_N_2) {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape1.html.twig', array(
                self::AGENT => $agent,
                self::HORRAIRE => $contratHoraire,
                self::QUESTIONNAIRE => $qtp,
                self::CONTRATS => $contrats,
                self::YEAR => $year,
                self::FORM => $form->createView()
            ));
        } elseif ($EtapeQuestionnaire == self::ETAPE_2) {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig', array(
                self::AGENT => $agent,
                self::HORRAIRE => $contratHoraire,
                self::QUESTIONNAIRE => $qtp,
                self::YEAR => $year,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($EtapeQuestionnaire == self::ETAPE_3) {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape3.html.twig', array(
                self::AGENT => $agent,
                self::HORRAIRE => $contratHoraire,
                self::QUESTIONNAIRE => $qtp,
                self::YEAR => $year,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($EtapeQuestionnaire == self::ETAPE_4) {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig', array(
                self::AGENT => $agent,
                self::HORRAIRE => $contratHoraire,
                self::QUESTIONNAIRE => $qtp,
                self::YEAR => $year,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } else {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig', array(
                self::AGENT => $agent,
                self::HORRAIRE => $contratHoraire,
                self::QUESTIONNAIRE => $qtp,
                self::YEAR => $year,
                self::FORM => $form->createView()
            ));
        }

    }


        /* Recup de l'a date du jour'année en cours
        $year = date('Y');
        return $this->render('AppBundle:Questionnaires:QuestionnaireTp.html.twig', array(
            'agent' => $agent,
            'horraire' => $contratHoraire,
            'questionnaire' => $qtp,
            'year' => $year,
            'form' => $form->createView()
        ));*/


}