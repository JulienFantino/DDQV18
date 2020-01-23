<?php

namespace AppBundle\Controller;

use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;

class ValidationController extends AbstractController
{
    public function validationParkingAction($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        $qp = $qpRepo->find($idQuestionnaire);
        /* Récup de l'agent concerné */
        $agent = $qp->getIdAgent();
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireParkingType', $qp, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->add('avis', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices' => array('Accord' => true, 'Refus' => false),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'predefined' => Bouton::PREDEFINED_VALIDER,
                'label' => 'Valider',
            ))
            ->getForm();

        /* Traitement du formulaire */
        if ($validForm->handleRequest($request)->isValid()) {
            $data = $validForm->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                if ($data['avis']) {
                    $qp->setStatut('validé');
                } else {
                    $qp->setStatut('invalidé');
                }
                $em->persist($qp);
                $em->flush();
                /*** on paramètre le mail à envoyer ***/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Réponse à votre ' . $qp->getLibelle() . ' - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@cpam-ain.cnamts.fr')
                    /* ligne à supprimer */
                    //->setTo('florian.bardet@cpam-ain.cnamts.fr')
                    /* ligne à décommenter */
                    ->setTo($agent->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValidation.html.twig', array(
                            'questionnaire' => $qp,
                            'agent' => $agent,
                            'statut' => $qp->getStatut()
                        )),
                        'text/html'
                    );
                /*** envoi du mail ***/
                $mailer->send($mailToAgent);

                $this->notification('Merci, votre validation pour la Demande de ' . $agent->getPrenom() . ' ' . $agent->getNom() . ' pour le Parking Mourey a bien été enregistrée.', 'success');
                return $this->redirectToRoute('liste_questionnaires_parking');
            } catch (Exception $e) {
                $this->notification('Votre demande n\'a pas été prise en compte. Une erreur s\'est produite.', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }
        return $this->render('AppBundle:Validation:QuestionnaireParking.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qp,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }

    public function validationRttAction($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');
        $qrtt = $qrttRepo->find($idQuestionnaire);
        /* Récup du Repo Agent */
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        /* Récup de l'agent concerné */
        $agent = $qrtt->getIdAgent();
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->add('avis', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices' => array('Avis Favorable' => true, 'Avis Défavorable' => false),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'predefined' => Bouton::PREDEFINED_VALIDER,
                'label' => 'Valider',
                'highlight' => true,
            ))
            ->getForm();

        /* Traitement du formulaire */
        if ($validForm->handleRequest($request)->isValid()) {
            $data = $validForm->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                if ($data['avis']) {
                    $qrtt->setStatut('validé N+1');
//                    $qrtt->setStatut('modifiable');
                } else {
                    $qrtt->setStatut('invalidé N+1');
                }
                $em->persist($qrtt);
                $em->flush();
                /*** on paramètre le mail à envoyer ***/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Réponse à votre ' . $qrtt->getLibelle() . ' - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    /* ligne à supprimer */
                    ->setTo('julien.fantino@assurance-maladie.fr')
                    /* ligne à décommenter */
//                    ->setTo($agent->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValidation.html.twig', array(
                            'questionnaire' => $qrtt,
                            'agent' => $agent,
                            'statut' => $qrtt->getStatut()
                        )),
                        'text/html'
                    );
                /*** on paramètre le mail à envoyer au directeur de branche ***/
                // recup du sigleent
                $sigleent = explode("/", $agent->getSigleent());
                $branche = '/' . $sigleent[1] . '/' . $sigleent[2];
                // recup du directeur de branche
                $dirBranche = $agentRepo->findOneBy(array('sigleent' => $branche));

                $mailToDirBranche = (new \Swift_Message('DDQ001 - Notification - ' . $qrtt->getLibelle() . ' à valider'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    ->setTo($dirBranche->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValider.html.twig', array(
                            'questionnaire' => $qrtt,
                            'agent' => $agent
                        )),
                        'text/html'
                    );
                /*** envoi des mails ***/
                $mailer->send($mailToAgent);
//                $mailer->send($mailToDirBranche);

                $this->notification('Merci, votre validation pour la Demande de ' . $agent->getPrenom() . ' ' . $agent->getNom() . ' pour le choix de formule RTT a bien été enregistrée.', 'success');
                return $this->redirectToRoute('liste_questionnaires_rtt');
            } catch (Exception $e) {
                $this->notification('Votre demande n\'a pas été prise en compte. Une erreur s\'est produite.', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }

        return $this->render('AppBundle:Validation:QuestionnaireRtt.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qrtt,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }

    public function validationRttN1Action($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');
        $qrtt = $qrttRepo->find($idQuestionnaire);
        /* Récup de l'agent concerné */
        $agent = $qrtt->getIdAgent();
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireRttType', $qrtt, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->add('avis', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices' => array('Avis Favorable' => true, 'Avis Défavorable' => false),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'predefined' => Bouton::PREDEFINED_VALIDER,
                'label' => 'Valider',
                'highlight' => true,

            ))
            ->getForm();

        /* Traitement du formulaire */
        if ($validForm->handleRequest($request)->isValid()) {
            $data = $validForm->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                if ($data['avis']) {
                    $qrtt->setStatut('validé N+2');
                } else {
                    $qrtt->setStatut('invalidé N+2');
                }
                $em->persist($qrtt);
                $em->flush();
                /*** on paramètre le mail à envoyer ***/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Réponse à votre ' . $qrtt->getLibelle() . ' - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    /* ligne à supprimer */
                    ->setTo('julien.fantino@assurance-maladie.fr')
                    /* ligne à décommenter */
//                    ->setTo($agent->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValidation.html.twig', array(
                            'questionnaire' => $qrtt,
                            'agent' => $agent,
                            'statut' => $qrtt->getStatut()
                        )),
                        'text/html'
                    );
                /*** envoi du mail ***/
                $mailer->send($mailToAgent);

                $this->notification('Merci, votre validation pour la Demande de ' . $agent->getPrenom() . ' ' . $agent->getNom() . ' pour le choix de formule RTT a bien été enregistrée.', 'success');
                return $this->redirectToRoute('liste_questionnaires_rttN+1');
            } catch (Exception $e) {
                $this->notification('Votre demande n\'a pas été prise en compte. Une erreur s\'est produite.', 'error');
                return $this->render(' AppBundle:Default:notification.html.twig');
            }
        }

        return $this->render('AppBundle:Validation:QuestionnaireRttN+1.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qrtt,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }

    public function validationTpAction($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');
        $qtp = $qtpRepo->find($idQuestionnaire);
        /* Récup du Repo Agent */
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        /* Récup de l'agent concerné */
        $agent = $qtp->getIdAgent();
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->add('avis', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices' => array('Avis Favorable' => true, 'Avis Défavorable' => false),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'predefined' => Bouton::PREDEFINED_VALIDER,
                'label' => 'Valider',
                'highlight' => true,
                'attr' => array(
                    'accesskey' => 'l',
                )))
            ->getForm();

        /* Traitement du formulaire */
        if ($validForm->handleRequest($request)->isValid()) {
            $data = $validForm->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                if ($data['avis']) {
                    $qtp->setStatut('validé N+1');
                } else {
                    $qtp->setStatut('invalidé N+1');
                }
                $em->persist($qtp);
                $em->flush();
                /*** on paramètre le mail à envoyer ***/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Réponse à votre ' . $qtp->getLibelle() . ' - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    /* ligne à supprimer */
                    ->setTo('julien.fantino@assurance-maladie.fr')
                    /* ligne à décommenter */
//                    ->setTo($agent->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValidation.html.twig', array(
                            'questionnaire' => $qtp,
                            'agent' => $agent,
                            'statut' => $qtp->getStatut()
                        )),
                        'text/html'
                    );
                /*** on paramètre le mail à envoyer au directeur de branche ***/
                // recup du sigleent
                $sigleent = explode("/", $agent->getSigleent());
                $branche = '/' . $sigleent[1] . '/' . $sigleent[2];
                // recup du directeur de branche
                $dirBranche = $agentRepo->findBy(array('sigleent' => $branche));
                foreach ($dirBranche as $dirBranches) {
                    dump($dirBranches->getMail());
                    $mailToDirBranche = (new \Swift_Message('DDQ001 - Notification - ' . $qtp->getLibelle() . ' à valider'))
                        ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                        ->setTo('julien.fantino@assurance-maladie.fr')
                        //  ->setTo($dirBranches->getMail())
                        ->setBody(
                            $this->renderView('Emails/NotificationValider.html.twig', array(
                                'questionnaire' => $qtp,
                                'agent' => $agent
                            )),
                            'text/html'
                        );
                    /*** envoi des mails ***/
                    $mailer->send($mailToAgent);
//               $mailer->send($mailToDirBranche);

                }



                $this->notification('Merci, votre validation pour la Demande de temps partiel de ' . $agent->getPrenom() . ' ' . $agent->getNom() . ' a bien été enregistrée.', 'success');
                return $this->redirectToRoute('liste_questionnaires_tp');
            } catch (Exception $e) {
                $this->notification('Votre demande n\'a pas été prise en compte. Une erreur s\'est produite.', 'error');
                return $this->render(' AppBundle:Default:notification.html.twig');
            }
        }

        /* Recup de l'année en cours */
        $year = date('Y');

        return $this->render('AppBundle:Validation:QuestionnaireTp.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qtp,
            'year' => $year,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }

    public function validationTpN1Action($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');
        $qtp = $qtpRepo->find($idQuestionnaire);
        /* Récup de l'agent concerné */
        $agent = $qtp->getIdAgent();
        /* Création du formulaire */
        $form = $this->get('form.factory')->create('AppBundle\Form\DdqQuestionnaireTpType', $qtp, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->add('avis', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices' => array('Accord' => true, 'Refus' => false),
                'choices_as_values' => true,
                'expanded' => true,
                'multiple' => false
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'predefined' => Bouton::PREDEFINED_VALIDER,
                'label' => 'Valider',
                'highlight' => true,))
            ->getForm();
        /* Traitement du formulaire */
        if ($validForm->handleRequest($request)->isValid()) {
            $data = $validForm->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                /******** Envoi des notifications par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                if ($data['avis']) {
                    $qtp->setStatut('validé N+2');
                } else {
                    $qtp->setStatut('invalidé N+2');
                }
                $em->persist($qtp);
                $em->flush();
                /*** on paramètre le mail à envoyer ***/
                $mailToAgent = (new \Swift_Message('DDQ001 - Notification - Réponse à votre ' . $qtp->getLibelle() . ' - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    /* ligne à supprimer */
                    ->setTo('julien.fantino@assurance-maladie.fr')
                    /* ligne à décommenter */
//                    ->setTo($agent->getMail())
                    ->setBody(
                        $this->renderView('Emails/NotificationValidation.html.twig', array(
                            'questionnaire' => $qtp,
                            'agent' => $agent,
                            'statut' => $qtp->getStatut()
                        )),
                        'text/html'
                    );
                /*** envoi du mail ***/
                $mailer->send($mailToAgent);

                $this->notification('Merci, votre validation pour la Demande de temps partiel de ' . $agent->getPrenom() . ' ' . $agent->getNom() . ' a bien été enregistrée.', 'success');
                return $this->redirectToRoute('liste_questionnaires_tpN+1');
            } catch (Exception $e) {
                $this->notification('Votre demande n\'a pas été prise en compte. Une erreur s\'est produite.', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }

        /* Recup de l'année en cours */
        $year = date('Y');
        return $this->render('AppBundle:Validation:QuestionnaireTpN+1.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qtp,
            'year' => $year,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }
}
