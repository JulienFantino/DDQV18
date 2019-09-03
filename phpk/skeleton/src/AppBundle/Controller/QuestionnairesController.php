<?php

namespace AppBundle\Controller;

use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\ContactService;


class QuestionnairesController extends AbstractController
{
    public function getQuestionnaireParkingAction($campagne, Request $request, \Swift_Mailer $mailer)
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        /*Recup du questionnaire */
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
        ($formule = $qrtt->getFormule());
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt);
        //
        // dump($qrtt);
        ($data = $form->getData());

        if ($qrtt->getStatut() !== 'validé N+1' && $qrtt->getStatut() !== 'validé N+2') {
            /** Ajout d'un seul bouton au formulaire */

            $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                    'collection' => array(
                        'annuler' => array(
                            'label' => 'Annuler',
                            'predefined' => Bouton::PREDEFINED_RETABLIR,
                        ),
                        'ajouter' => array(
                            'label' => 'Suivant',
                            'predefined' => Bouton::PREDEFINED_VALIDER,
                        ),
                    ),
                )
            );

        } elseif ($qrtt->getStatut() == 'validé N+1' && $qrtt->getStatut() == 'validé N+2') {
            /* Création du formulaire */
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt, array('disabled' => true));
        }


        if ($form->handleRequest($request)->isValid() && $form->isSubmitted()) {
            //dump ($data = $form->getData());
            //$em = $this->getDoctrine()->getManager();

            if ($qrtt->getStatut() == 'etape1' && $qrtt->getRepriseTp() == true) {

                try {
                    $em = $this->getDoctrine()->getManager();
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
            } elseif ($qrtt->getStatut() == 'etape1' && $qrtt->getRepriseTp() == false) {


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
                $qrtt->setFormule(false);
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


            } elseif ($qrtt->getStatut() == 'etape3' && $formule == true) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape4');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);

            } elseif ($qrtt->getStatut() == 'etape3' && $formule == false) {
                $em = $this->getDoctrine()->getManager();
                $qrtt->setStatut('etape4');
                $em->persist($qrtt);
                $em->flush();
                return $this->redirectToRoute('questionnaire_rtt', ['campagne' => $campagne]);

            } elseif ($qrtt->getStatut() == 'etape4') {
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
        if ($qrtt->getStatut() == 'etape1') {
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

        } elseif ($qrtt->getStatut() == 'etape4') {
            return $this->render('AppBundle:Questionnaires/RTT:QuestionnaireRttEtape4.html.twig', array(
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

        } elseif ($qrtt->getStatut() == 'validé N+2') {
            return $this->render('AppBundle:Questionnaires:QuestionnaireRttEtapeTransmission.html.twig', array(
                'agent' => $agent,
                'campagne' => $campagne,
                'questionnaire' => $qrtt,
                'contrats' => $contrats,
                'form' => $form->createView()
            ));

        } else {
            return $this->render('AppBundle:Questionnaires:QuestionnaireRttEtapeTransmission.html.twig', array(
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
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');
        $qtp = $qtpRepo->findOneByAgentByCampagne($agent, $campagne);
        /*********************************création des boutons du formulaire********************************************/
//        $boutonValider = new Bouton();
//        $boutonValider->setText('Valider');
//        $boutonValider->setPredefined(Bouton::PREDEFINED_VALIDER);
//        $boutonValider->setType(Bouton::TYPE_SUBMIT);
//        $boutonRetablir = new Bouton();
//        $boutonRetablir->setText('Rétablir');
//        $boutonRetablir->setPredefined(Bouton::PREDEFINED_RETABLIR);
//        $boutonRetablir->setType(Bouton::TYPE_RESET);
        /************************************************************************************************************************/
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp);

        if ($qtp->getStatut() !== 'validé N+1' && $qtp->getStatut() !== 'validé N+2') {
            /** Ajout d'un seul bouton au formulaire */
            $form
//                ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType', 
//                    array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))));

                ->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                    'collection' => array(
                        'annuler' => array(
                            'label' => 'Annuler',
                            'predefined' => Bouton::PREDEFINED_FERMERMODALE,
                            'type' => Bouton::TYPE_RESET,
                        ),
                        'ajouter' => array(
                            'label' => 'Ajouter',
                            'predefined' => Bouton::PREDEFINED_VALIDER,
                            'type' => Bouton::TYPE_SUBMIT,
                        ),
                    ),
                ));
            if ($form->handleRequest($request)->isValid()) {

                $em = $this->getDoctrine()->getManager();

                try {
                    $qtp->setStatut('modifiable');
                    $em->persist($qtp);
                    $em->flush();
                    /******** Envoi des notifications par mail *********************/
                    //création d'un objet transport
                    $transport = new \Swift_SmtpTransport();
                    //création d'un objet mailer
                    $mailer = (new \Swift_Mailer($transport));
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
        } else {
            /* Création du formulaire */
            $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp, array('disabled' => true));
        }

        /* Recup de l'a date du jour'année en cours */
        $year = date('Y');
        return $this->render('AppBundle:Questionnaires:QuestionnaireTp.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qtp,
            'year' => $year,
            'form' => $form->createView()
        ));
    }
}