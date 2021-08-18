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
    /*
      * CONSTANTES Modifiables
      */
    private const NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR = 'ne-pas-repondre@assurance-maladie.fr';
    private const UNE_ERREUR_S_EST_PRODUITE_VOTRE_DEMANDE_N_A_PAS_PU_ÊTRE_ENREGISTRÉE = 'Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée';
    private const RESSOURCESHUMAINES_CPAM_AIN_ASSURANCE_MALADIE_FR = 'ressourceshumaines.cpam-ain@assurance-maladie.fr';
    private const DDQ_NOTIFICATION_NE_PAS_RÉPONDRE = 'DDQ - Notification - Ne pas répondre';
    private const DDQ_NOTIFICATION = 'DDQ - Notification - ';
    private const À_VALIDER = ' à valider';
    private const MERCI_VOTRE_DEMANDE_A_BIEN_ÉTÉ_ENREGISTRÉE = 'Merci, votre demande a bien été enregistrée';
    /*
     * ETAPES DES QUESTIONNAIRES ,peut être modifié avec quelques modifications en base de données
     */
    private const ETAPE_3 = 'etape3';
    private const VALIDÉ = 'validé';
    private const INVALIDÉ = 'invalidé';
    private const VALIDÉ_N_2 = 'validé N+2';
    private const ETAPE_6 = 'etape6';
    private const VALIDÉ_N_1 = 'validé N+1';
    private const NOUVEAU = 'nouveau';
    private const INVALIDÉ_N_1 = 'invalidé N+1';
    private const INVALIDÉ_N_2 = 'invalidé N+2';
    private const ETAPE_2 = 'etape2';
    private const MODIFIABLE = 'modifiable';
    private const ETAPE_4 = 'etape4';
    private const ETAPE_5 = 'etape5';
    /*
   * CONSTANTES NON MODIFIABLES
   */
    private const QUESTIONNAIRE = 'questionnaire';
    private const CONTRATS = 'contrats';
    private const FORM = 'form';
    private const AGENT = 'agent';
    private const CAMPAGNE = 'campagne';
    private const QUESTIONNAIRE_RTT = 'questionnaire_rtt';
    private const APP_BUNDLE_DDQ_CONTRAT_REPARTITION = 'AppBundle:DdqContratRepartition';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE = 'AppBundle\Form\DdqQuestionnaireTpType';
    private const QUESTIONNAIRE_TP = 'questionnaire_tp';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING = 'AppBundle:DdqQuestionnaireParking';
    private const HORRAIRE = 'horraire';
    private const YEAR = 'year';
    private const DDQ_001_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG = 'DDQ001Bundle:Default:notification.html.twig';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_PARKING_TYPE = 'AppBundle\Form\DdqQuestionnaireParkingType';
    private const CNAMTS_PHPK_CORE_BUNDLE_FORM_TYPE_COLLECTION_BUTTON_TYPE = 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType';
    private const TEXT_HTML = 'text/html';
    private const EMAILS_NOTIFICATION_VALIDER_HTML_TWIG = 'Emails/NotificationValider.html.twig';
    private const EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG = 'Emails/NotificationSoumission.html.twig';
    private const SUCCESS = 'success';
    private const ERROR = 'error';
    private const FORM_FACTORY = 'form.factory';
    private const APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG = 'AppBundle:Default:notification.html.twig';
    private const CAMPAGNES_PARKING = 'campagnes_parking';
    private const APP_BUNDLE_QUESTIONNAIRES_QUESTIONNAIRE_PARKING_HTML_TWIG = 'AppBundle:Questionnaires:QuestionnaireParking.html.twig';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT = 'AppBundle:DdqQuestionnaireRtt';
    private const APP_BUNDLE_DDQ_CONTRAT = 'AppBundle:DdqContrat';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_RTT_TYPE = 'AppBundle\Form\DdqQuestionnaireRttType';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_2_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape2.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_3_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape3.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_4_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_4_QUADRIMESTRE_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4Quadrimestre.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_5_F_1_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F1.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_5_F_2_HTML_TWIG = 'AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F2.html.twig';
    private const APP_BUNDLE_AGENT = 'AppBundle:Agent';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_TP = 'AppBundle:DdqQuestionnaireTp';
    private const APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_3_HTML_TWIG = 'AppBundle:Questionnaires\TP:QuestionnaireTPEtape3.html.twig';
    private const APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_4_HTML_TWIG = 'AppBundle:Questionnaires\TP:QuestionnaireTPEtape4.html.twig';
    private const CAMPAGNES_TP = 'campagnes_tp';
    private const APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_3_HTML_TWIG1 = 'AppBundle:Questionnaires/TP:QuestionnaireTPEtape3.html.twig';


    public function getQuestionnaireParkingAction($campagne, Request $request, \Swift_Mailer $mailer)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */

        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);
        if ($qp->getStatut() !== self::VALIDÉ && $qp->getStatut() !== self::INVALIDÉ) {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_PARKING_TYPE, $qp);
            $form->add('boutons', self::CNAMTS_PHPK_CORE_BUNDLE_FORM_TYPE_COLLECTION_BUTTON_TYPE, array(
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
                    $qp->setStatut(self::MODIFIABLE);
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
                            array(self::QUESTIONNAIRE => $qp, self::AGENT => $agent)), self::TEXT_HTML);
                    /******** mail à destination des RH ****************/
                    $mailToRH = (new \Swift_Message(self::DDQ_NOTIFICATION . $qp->getLibelle() . self::À_VALIDER))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser les bons mails ici
                        //->setTo('florian.bardet@cpam-ain.cnamts.fr')
                        ->setTo(self::RESSOURCESHUMAINES_CPAM_AIN_ASSURANCE_MALADIE_FR)
                        ->setBody($this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG,
                            array(self::QUESTIONNAIRE => $qp, self::AGENT => $agent)), self::TEXT_HTML);
                    $mailer->send($mailToAgent);
                    $mailer->send($mailToRH);
                    /*****************************************************************************/
                    $this->notification(self::MERCI_VOTRE_DEMANDE_A_BIEN_ÉTÉ_ENREGISTRÉE, self::SUCCESS);
                    return $this->redirectToRoute(self::CAMPAGNES_PARKING);
                } catch (Exception $e) {
                    $this->notification(self::UNE_ERREUR_S_EST_PRODUITE_VOTRE_DEMANDE_N_A_PAS_PU_ÊTRE_ENREGISTRÉE, self::ERROR);
                    return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
                }
            }
        } else {
            /* Création du formulaire */
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_PARKING_TYPE, $qp, array('disabled' => true));
        }

        return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_QUESTIONNAIRE_PARKING_HTML_TWIG, array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qp,
            self::FORM => $form->createView()
        ));
    }

    public function getQuestionnaireParkingHistoriqueAction($campagne, Request $request)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */
        $CamapgneRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $CamapgneStatut = $CamapgneRepo->findOneByNomium($nomium);
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);


        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_PARKING_TYPE, $qp, array('disabled' => true));


        return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_QUESTIONNAIRE_PARKING_HTML_TWIG, array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qp,
            self::FORM => $form->createView()
        ));
    }

    public function getQuestionnaireRttAction($campagne, Request $request, \Swift_Mailer $mailer, ContactService $test)
    {

        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        /*Recup du questionnaire */
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);
        $qrtt = $qrttRepo->findOneByAgentByCampagne($agent, $campagne);
        /* Recup des contrats temps plein */
        $contratRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_CONTRAT);
        $contrats = $contratRepo->findByTempsPlein();
        $formule = $qrtt->getFormule();
        $formule1j = $qrtt->getFormule1j();
        $qrtt->getStatut();
        $signature = $qrtt->getSignature();
        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_RTT_TYPE, $qrtt);
        ($data = $form->getData());
        if ($qrtt->getStatut() !== self::VALIDÉ_N_1 && $qrtt->getStatut() !== self::VALIDÉ_N_2 && $qrtt->getStatut() !== self::ETAPE_6) {
            /** Ajout d'un seul bouton au formulaire */

            $form->add('boutons', self::CNAMTS_PHPK_CORE_BUNDLE_FORM_TYPE_COLLECTION_BUTTON_TYPE, array(
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
            $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_RTT_TYPE, $qrtt, array('disabled' => true));
        } elseif ($qrtt->getStatut() == self::ETAPE_5) {
            $form->add('boutons', self::CNAMTS_PHPK_CORE_BUNDLE_FORM_TYPE_COLLECTION_BUTTON_TYPE, array(
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
                            self::TEXT_HTML
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message(self::DDQ_NOTIFICATION . $qrtt->getLibelle() . self::À_VALIDER))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qrtt,
                                self::AGENT => $agent,

                            )),
                            self::TEXT_HTML
                        );

                    $mailer->send($mailToAgent);
                    // dump($mailToResponsableService);
                    $mailer->send($mailToResponsableService);
                    /*****************************************************************************/

                    $this->notification(self::MERCI_VOTRE_DEMANDE_A_BIEN_ÉTÉ_ENREGISTRÉE, self::SUCCESS);
                    //    return $this->redirectToRoute('campagnes_rtt');
                    return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);
                } catch (Exception $e) {
                    $this->notification(self::UNE_ERREUR_S_EST_PRODUITE_VOTRE_DEMANDE_N_A_PAS_PU_ÊTRE_ENREGISTRÉE, self::ERROR);
                    return $this->render(self::DDQ_001_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
                }
            } elseif (($qrtt->getStatut() == self::NOUVEAU || $qrtt->getStatut() == self::INVALIDÉ_N_1 || $qrtt->getStatut() == self::INVALIDÉ_N_2) && $qrtt->getRepriseTp() == false) {


                try {
                    $em = $this->getDoctrine()->getManager();
                    $qrtt->setStatut(self::ETAPE_2);
                    $em->persist($qrtt);
                    $em->flush();
                    return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);
                } catch (Exception $e) {
                    $this->notification(self::UNE_ERREUR_S_EST_PRODUITE_VOTRE_DEMANDE_N_A_PAS_PU_ÊTRE_ENREGISTRÉE, self::ERROR);

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
                        self::TEXT_HTML
                    );
                /******** mail à destination du responsable de service ****************/
                /*** on recup le mail du responsable de service ***/
                $respId = $agent->getIdresponsable();

                $mailToResponsableService = (new \Swift_Message(self::DDQ_NOTIFICATION . $qrtt->getLibelle() . self::À_VALIDER))
                    ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                    // il faudra préciser le bon mail ici
                    ->setTo($agentRepo->find($respId)->getMail())
                    ->setBody(
                        $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                            self::QUESTIONNAIRE => $qrtt,
                            self::AGENT => $agent,

                        )),
                        self::TEXT_HTML
                    );

                $mailer->send($mailToAgent);
                // dump($mailToResponsableService);
                $mailer->send($mailToResponsableService);
                /*****************************************************************************/

                $this->notification(self::MERCI_VOTRE_DEMANDE_A_BIEN_ÉTÉ_ENREGISTRÉE, self::SUCCESS);
                //    return $this->redirectToRoute('campagnes_rtt');
                return $this->redirectToRoute(self::QUESTIONNAIRE_RTT, [self::CAMPAGNE => $campagne]);


            }
        }
        //CONSTRUCTION  DES VUES SELON L'ETAPE
        if ($qrtt->getStatut() == self::NOUVEAU) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_2) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_2_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_3) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_3_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_4 && $qrtt->getFormule() == true) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_4_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_4 && $qrtt->getFormule() == false) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_4_QUADRIMESTRE_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_5 && $qrtt->getFormule() == true) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_5_F_1_HTML_TWIG, array(
                self::AGENT => $agent,
                self::CAMPAGNE => $campagne,
                self::QUESTIONNAIRE => $qrtt,
                self::CONTRATS => $contrats,
                self::FORM => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == self::ETAPE_5 && $qrtt->getFormule() == false) {
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_ETAPE_5_F_2_HTML_TWIG, array(
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
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_HTML_TWIG, array(
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
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_RTT_QUESTIONNAIRE_RTT_HTML_TWIG, array(
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
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        /*Recup du questionnaire */
        $repartationRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $contratRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_CONTRAT);
        $contrats = $contratRepo->findByTempsPartiel();
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);
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
        $nbJoursVerif = 0;
        /*********************************création des boutons du formulaire********************************************/
        ($contratID = ($qtp->getidddqContrat()->getid()));
        ($contratHoraire = ($qtp->getidddqContrat()->gethorairecontrat()));
        /************************************************************************************************************************/
        /* Création du formulaire */
        $form = $this->get(QuestionnairesController::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE, $qtp);
        $RepartitionRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_CONTRAT_REPARTITION);
        $data = $form->getData();
        if ($qtp->getStatut() !== self::VALIDÉ_N_1 && $qtp->getStatut() !== self::VALIDÉ_N_2) {
            /** Ajout d'un seul bouton au formulaire */
            /************************************************************************************************************************/
            $form->add('boutons', self::CNAMTS_PHPK_CORE_BUNDLE_FORM_TYPE_COLLECTION_BUTTON_TYPE, array(
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
        // PERMET DE PASSER L'ETAPE4
        if ($qtp->getStatut() == self::ETAPE_4) {
            $nbjours = $qtp->getIdDdqContrat()->getNbjours();
            $nbJoursInteger = (int)$nbjours;
            ($nbJoursVerif = $nbJoursInteger);
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
                /* Varibales de vérifications  des jours */
                if ($data->getLundi()) {
                    $lundi = 1;
                }
                if ($data->getMardi()) {
                    $mardi = 1;
                }
                if ($data->getMercredi()) {
                    $mercredi = 1;
                }
                if ($data->getJeudi()) {
                    $jeudi = 1;
                }
                if ($data->getVendredi()) {
                    $vendredi = 1;
                }
                $nbJoursVerif = $lundi + $mardi + $mercredi + $jeudi + $vendredi;


                if ($nbJoursVerif != $nbJoursInteger) {
                    $em = $this->getDoctrine()->getManager();
                    $qtp->setStatut(self::ETAPE_3);
                    $em->persist($qtp);
                    $em->flush();
                    $this->notification('Merci, le nombre de jours sélectionnés n\'est pas correct', self::ERROR);
                    return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_3_HTML_TWIG, array(
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
                /* Varibales de vérifications  des demis journées matin */
                if ($data->getLundiM()) {
                    $lundiM = 1;
                }
                if ($data->getMardiM()) {
                    $mardiM = 1;
                }
                if ($data->getMercrediM()) {
                    $mercrediM = 1;
                }
                if ($data->getJeudiM()) {
                    $jeudiM = 1;
                }
                if ($data->getVendrediM()) {
                    $vendrediM = 1;
                }
                /* Varibales de vérifications  des demis journées Après midi */
                if ($data->getLundiAm()) {
                    $lundiAm = 1;
                }
                if ($data->getMardiAm()) {
                    $mardiAm = 1;
                }
                if ($data->getMercrediAm()) {
                    $mercrediAm = 1;
                }
                if ($data->getJeudiAm()) {
                    $jeudiAm = 1;
                }
                if ($data->getVendrediAm()) {
                    $vendrediAm = 1;
                }
                /* Somme des varibale  de vérifications pour comparaison avec ce que l'on a choisi en contrat */

                ($nbDemiJoursVerif = $lundiM + $lundiAm + $mardiM + $mardiAm + $mercrediM + $mercrediAm + $jeudiM + $jeudiAm + $vendrediM + $vendrediAm);
                if ($nbDemiJoursVerif != $nbdemijournee) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($qtp);
                    $em->flush();
                    $this->notification('Merci de renseigner correctement le nombre de demi-journées', self::ERROR);
                    return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_4_HTML_TWIG, array(
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
                    $qtp->setStatut(self::MODIFIABLE);
                    $em->persist($qtp);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
                    $transport = new \Swift_SmtpTransport();
                    //création d'un objet mailer
                    $mailers = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message(self::DDQ_NOTIFICATION_NE_PAS_RÉPONDRE))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        ->setTo($agent->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_SOUMISSION_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qtp,
                                self::AGENT => $agent
                            )),
                            self::TEXT_HTML
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message(self::DDQ_NOTIFICATION . $qtp->getLibelle() . self::À_VALIDER))
                        ->setFrom(self::NE_PAS_REPONDRE_ASSURANCE_MALADIE_FR)
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView(self::EMAILS_NOTIFICATION_VALIDER_HTML_TWIG, array(
                                self::QUESTIONNAIRE => $qtp,
                                self::AGENT => $agent
                            )),
                            self::TEXT_HTML
                        );

                    $mailers->send($mailToAgent);
                    $mailer->send($mailToResponsableService);
                    /*****************************************************************************/
                    $this->notification(self::MERCI_VOTRE_DEMANDE_A_BIEN_ÉTÉ_ENREGISTRÉE, self::SUCCESS);
                    return $this->redirectToRoute(self::CAMPAGNES_TP);
                } catch (Exception $e) {
                    $this->notification(self::UNE_ERREUR_S_EST_PRODUITE_VOTRE_DEMANDE_N_A_PAS_PU_ÊTRE_ENREGISTRÉE, self::ERROR);
                    return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
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
            return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_TP_QUESTIONNAIRE_TP_ETAPE_3_HTML_TWIG1, array(
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