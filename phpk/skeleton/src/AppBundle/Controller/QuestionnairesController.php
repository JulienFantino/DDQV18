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
    public function getQuestionnaireParkingAction($campagne, Request $request, \Swift_Mailer $mailer)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */
        // $campagne =$this->get->getStatut();
        // dump($campagne);
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);
        if ($qp->getStatut() !== 'validé' && $qp->getStatut() !== 'invalidé') {
            /* Création du formulaire */
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp);
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
                    $mailToAgent = (new \Swift_Message('DDQ - Notification - Ne pas répondre'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        ->setTo($agent->getMail())
                        ->setBody($this->renderView('Emails/NotificationSoumission.html.twig',
                            array('questionnaire' => $qp, 'agent' => $agent)), 'text/html');
                    /******** mail à destination des RH ****************/
                    $mailToRH = (new \Swift_Message('DDQ001 - Notification - ' . $qp->getLibelle() . ' à valider'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        // il faudra préciser les bons mails ici
                        //->setTo('florian.bardet@cpam-ain.cnamts.fr')
                        ->setTo('ressourceshumaines.cpam-ain@assurance-maladie.fr')
                        ->setBody($this->renderView('Emails/NotificationValider.html.twig',
                            array('questionnaire' => $qp, 'agent' => $agent)), 'text/html');
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
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp, array('disabled' => true));
        }

        return $this->render('AppBundle:Questionnaires:QuestionnaireParking.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qp,
            'form' => $form->createView()
        ));
    }

    public function getQuestionnaireParkingHistoriqueAction($campagne, Request $request)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */
        // $campagne =$this->get->getStatut();
        // dump($campagne);
        $CamapgneRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $CamapgneStatut = $CamapgneRepo->findOneByNomium($nomium);
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        $qp = $qpRepo->findOneByAgentByCampagne($agent, $campagne);


        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp, array('disabled' => true));


        return $this->render('AppBundle:Questionnaires:QuestionnaireParking.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qp,
            'form' => $form->createView()
        ));
    }

    public function getQuestionnaireRttAction($campagne, Request $request, \Swift_Mailer $mailer, ContactService $test)
    {
        /*   dump($request);
           $toto = $test->getHappyMessage();
           $this->addFlash('success', $toto);*/
        /* Identification de l'agent*/
//        $nomium = $this->getUser()->getNom().'-'.$this->getUser()->getChrono();
//        $agentRepo = $this->getDoctrine()->getManager()->getRepository(' AppBundle:Agent');
//        $agent = $agentRepo->findByNomium($nomium);
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
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
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt);
        //
        // dump($qrtt);
        ($data = $form->getData());

        if ($qrtt->getStatut() !== 'validé N+1' && $qrtt->getStatut() !== 'validé N+2' && $qrtt->getStatut() !== 'etape6') {
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

        } elseif ($qrtt->getStatut() == 'validé N+1' && $qrtt->getStatut() == 'validé N+2') {
            /* Création du formulaire */
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt, array('disabled' => true));
        } elseif ($qrtt->getStatut() == 'etape5') {
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

            if (($qrtt->getStatut() == 'nouveau' || $qrtt->getStatut() == 'invalidé N+1' || $qrtt->getStatut() == 'invalidé N+2') && $qrtt->getRepriseTp() == true) {

                try {
                    $em = $this->getDoctrine()->getManager();
                    // $qrtt->setIdDdqContrat(24);
                    $qrtt->setStatut('etape6');
                    $qrtt->setSignature(true);
                    $em->persist($qrtt);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
                    // $transport = new \Swift_SmtpTransport('smtp.ramage','25', 'tls');
                    //création d'un objet mailer
                    //$mailer = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Ne pas répondre'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        ->setTo($agent->getMail())
                        ->setBody($this->renderView('Emails/NotificationSoumission.html.twig',
                            array(
                                'questionnaire' => $qrtt,
                                'agent' => $agent
                            )
                        ),
                            'text/html'
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message('DDQ001 - Notification - ' . $qrtt->getLibelle() . ' à valider'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView('Emails/NotificationValider.html.twig', array(
                                'questionnaire' => $qrtt,
                                'agent' => $agent,

                            )),
                            'text/html'
                        );

                    $mailer->send($mailToAgent);
                    // dump($mailToResponsableService);
                    $mailer->send($mailToResponsableService);
                    /*****************************************************************************/

                    $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                    //    return $this->redirectToRoute('campagnes_rtt');
                    return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');
                    return $this->render('DDQ001Bundle:Default:notification.html.twig');
                }
            } elseif (($qrtt->getStatut() == 'nouveau' || $qrtt->getStatut() == 'invalidé N+1' || $qrtt->getStatut() == 'invalidé N+2') && $qrtt->getRepriseTp() == false) {


                try {
                    $em = $this->getDoctrine()->getManager();
                    $qrtt->setStatut('etape2');
                    $em->persist($qrtt);
                    $em->flush();
                    return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);
                } catch (Exception $e) {
                    $this->notification('Une erreur s\'est produite. Votre demande n\'a pas pu être enregistrée', 'error');

                }

            } elseif ($qrtt->getStatut() == 'etape2' && $contrats != 2) {
                $em = $this->getDoctrine()->getManager();
                // $qrtt->setFormule(false);

                $qrtt->setDatemodif($this->date = new \Datetime());
                $qrtt->setStatut('etape3');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);
                // return $this->redirectToRoute('campagnes_rtt');
            } elseif ($qrtt->getStatut() == 'etape2' && $contrats == '2') {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape3');
                $em->persist($qrtt);
                $em->flush();

                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);


            } elseif ($qrtt->getStatut() == 'etape3') {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape4');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);

            } elseif ($qrtt->getStatut() == 'etape4' && $formule == false) {
                $em = $this->getDoctrine()->getManager();
                //dump($formule);
                //var_dump('toto');
                $qrtt->setStatut('etape5');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);

            } elseif ($qrtt->getStatut() == 'etape4' && $formule == true) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape5');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);

            } elseif ($qrtt->getStatut() == 'etape5') {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape6');
                $em->persist($qrtt);
                $em->flush();
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                // $transport = new \Swift_SmtpTransport('smtp.ramage','25', 'tls');
                //création d'un objet mailer
                //$mailer = (new \Swift_Mailer($transport));
                /******** mail à destination de l'agent ****************/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    ->setTo($agent->getMail())
                    ->setBody($this->renderView('Emails/NotificationSoumission.html.twig',
                        array(
                            'questionnaire' => $qrtt,
                            'agent' => $agent
                        )
                    ),
                        'text/html'
                    );
                /******** mail à destination du responsable de service ****************/
                /*** on recup le mail du responsable de service ***/
                $respId = $agent->getIdresponsable();

                $mailToResponsableService = (new \Swift_Message('DDQ001 - Notification - ' . $qrtt->getLibelle() . ' à valider'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    // il faudra préciser le bon mail ici
                    ->setTo($agentRepo->find($respId)->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValider.html.twig', array(
                            'questionnaire' => $qrtt,
                            'agent' => $agent,

                        )),
                        'text/html'
                    );

                $mailer->send($mailToAgent);
                // dump($mailToResponsableService);
                $mailer->send($mailToResponsableService);
                /*****************************************************************************/

                $this->notification('Merci, votre demande a bien été enregistrée', 'success');
                //    return $this->redirectToRoute('campagnes_rtt');
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);


            }
        }
        //CONSTRUCTION  DES VUES SELON L'ETAPE
        if ($qrtt->getStatut() == 'nouveau') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape2') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape2.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape3') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape3.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape4' && $qrtt->getFormule() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape4' && $qrtt->getFormule() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4Quadrimestre.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape5' && $qrtt->getFormule() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F1.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape5' && $qrtt->getFormule() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape5_F2.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape6' && $qrtt->getReprisetp() == true) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape6.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'etape6' && $qrtt->getReprisetp() == false) {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape6SansReprise.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'validé N+1') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'invalidé N+1') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'validé N+2') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($qrtt->getStatut() == 'invalidé N+2') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRtt.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));
        } else {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtapeTransmission.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
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
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp);
        $RepartitionRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqContratRepartition');
        if ($qtp->getStatut() !== 'validé N+1' && $qtp->getStatut() !== 'validé N+2') {
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
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp, array('disabled' => true));
        }

        if ($form->handleRequest($request)->isValid() && $form->isSubmitted()) {

            if (($EtapeQuestionnaire == 'nouveau' || $EtapeQuestionnaire == 'invalidé N+1' || $EtapeQuestionnaire == 'invalidé N+2') && $qtp->getMotif() != '') {
                $em = $this->getDoctrine()->getManager();
                $qtp->setStatut('etape2');
                $em->persist($qtp);
                $em->flush();
                return $this->redirectToRoute('questionnaire_tp', ['campagne' => $campagne]);
            } elseif ($EtapeQuestionnaire == 'etape2' && $qtp->getMotif() != '') {
                $em = $this->getDoctrine()->getManager();
                $qtp->setStatut('etape3');
                $em->persist($qtp);
                $em->flush();
                return $this->redirectToRoute('questionnaire_tp', ['campagne' => $campagne]);
            } elseif ($EtapeQuestionnaire == 'etape3' && $contratID != '') {
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
                        'agent' => $agent,
                        'horraire' => $contratHoraire,
                        'questionnaire' => $qtp,
                        'year' => $year,
                        'form' => $form->createView()
                    ));
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $qtp->setStatut('etape4');
                    $em->persist($qtp);
                    $em->flush();
                    return $this->redirectToRoute('questionnaire_tp', ['campagne' => $campagne]);
                }
            } elseif ($EtapeQuestionnaire == 'etape4' && $nbJoursVerif != 0) {
                ($nbdemijournee = $qtp->getIdDdqContrat()->getNbdemiesjournees());
                if ($nbDemiJoursVerif != $nbdemijournee) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($qtp);
                    $em->flush();
                    $this->notification('Merci de renseigner correctement le nombre de demi-journées', 'error');
                    return $this->render('AppBundle:Questionnaires\TP:QuestionnaireTPEtape4.html.twig', array(
                        'agent' => $agent,
                        'horraire' => $contratHoraire,
                        'questionnaire' => $qtp,
                        'year' => $year,
                        'form' => $form->createView()
                    ));
                } else {
                    $em = $this->getDoctrine()->getManager();
                    $qtp->setStatut('etape5');
                    $em->persist($qtp);
                    $em->flush();
                    return $this->redirectToRoute('questionnaire_tp', ['campagne' => $campagne]);
                }
            } elseif ($EtapeQuestionnaire == 'etape5' and $qtp->getSignature() == true) {
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
                    $mailers = (new \Swift_Mailer($transport));
                    /******** mail à destination de l'agent ****************/
                    $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Ne pas répondre'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        ->setTo($agent->getMail())
                        ->setBody(
                            $this->renderView('Emails/NotificationSoumission.html.twig', array(
                                'questionnaire' => $qtp,
                                'agent' => $agent
                            )),
                            'text/html'
                        );
                    /******** mail à destination du responsable de service ****************/
                    /*** on recup le mail du responsable de service ***/
                    $respId = $agent->getIdresponsable();

                    $mailToResponsableService = (new \Swift_Message('DDQ - Notification - ' . $qtp->getLibelle() . ' à valider'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        // il faudra préciser le bon mail ici
                        ->setTo($agentRepo->find($respId)->getMail())
                        ->setBody(
                            $this->renderView('Emails/NotificationValider.html.twig', array(
                                'questionnaire' => $qtp,
                                'agent' => $agent
                            )),
                            'text/html'
                        );

                    $mailers->send($mailToAgent);
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
        if ($EtapeQuestionnaire == 'nouveau' || $EtapeQuestionnaire == 'invalidé N+1' || $EtapeQuestionnaire == 'invalidé N+2') {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape1.html.twig', array(
                'agent' => $agent,
                'horraire' => $contratHoraire,
                'questionnaire' => $qtp,
                'contrats' => $contrats,
                'year' => $year,
                'form' => $form->createView()
            ));
        } elseif ($EtapeQuestionnaire == 'etape2') {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig', array(
                'agent' => $agent,
                'horraire' => $contratHoraire,
                'questionnaire' => $qtp,
                'year' => $year,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($EtapeQuestionnaire == 'etape3') {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape3.html.twig', array(
                'agent' => $agent,
                'horraire' => $contratHoraire,
                'questionnaire' => $qtp,
                'year' => $year,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } elseif ($EtapeQuestionnaire == 'etape4') {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig', array(
                'agent' => $agent,
                'horraire' => $contratHoraire,
                'questionnaire' => $qtp,
                'year' => $year,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } else {

            $year = date('Y');
            return $this->render('AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig', array(
                'agent' => $agent,
                'horraire' => $contratHoraire,
                'questionnaire' => $qtp,
                'year' => $year,
                'form' => $form->createView()
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
