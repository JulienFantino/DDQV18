<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DdqCampagne;
use AppBundle\Repository\DdqCampagneRepository;
use AppBundle\Table\TableMesCampagnes;
use AppBundle\Table\TableRttAgent;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;
use Exception;

class AdministrationController extends AbstractController
{

    public function nouvelleCampagneAction(Request $request, \Swift_Mailer $mailer)
    {
        /* Création d'une entité agent ou récupération d'une existante */
        $campagne = new DdqCampagne();


        $form = $this->get('form.factory')->create('AppBundle\Form\DdqCampagneType', $campagne);

        /** Ajout d'un seul bouton au formulaire */
//        $form->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType',
//                array('attr' => array(boutons => array($boutonRetablir, $boutonValider))));
        $form->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
            'collection' => array(
                'annuler' => array(
                    'label' => 'Annuler',
                    'predefined' => Bouton::PREDEFINED_FERMERMODALE,
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
                // on set le statut de la campagne à 'nouvelle'
                $campagne->setStatut('nouvelle');
                $em->persist($campagne);
                $em->flush();

                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailers = (new \Swift_Mailer($transport));
                $correspondant = 'julien.fantino@assurance-maladie.fr';
                // $correspondant = 'tous-cpam011.cpam-ain@assurance-maladie.fr';
                $mail = (new \Swift_Message('CampagneRH - Notification - Nouvelle Campagne - Ne pas répondre'))
                    //->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    ->setFrom('serveur-web.cpam-ain@assurance-maladie.fr')
                    ///*** set l'adresse à 'tous' ***/
                    ->setTo($correspondant)
                    ->setBody(
                        $this->renderView('Emails/NotificationCreationCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailers->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, votre nouvelle campagne a bien été créée', 'success');
                return $this->render('AppBundle:Default:notification.html.twig');
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être créée', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }
        return $this->render('AppBundle:Administration:NouvelleCampagne.html.twig', array('formCampagne' => $form->createView()));
    }

    public function clotureCampagneAction(Request $request, \Swift_Mailer $mailer)
    {

        $campagne = new DdqCampagne();
        $em = $this->getDoctrine()->getManager();
        $campagneRepo = $em->getRepository('AppBundle:DdqCampagne');

//        $boutonValider = new Bouton();
//        $boutonValider->setText('Valider');
//        $boutonValider->setPredefined(Bouton::PREDEFINED_VALIDER);
//        $boutonValider->setType(Bouton::TYPE_SUBMIT);
//        $boutonRetablir = new Bouton();
//        $boutonRetablir->setText('Rétablir');
//        $boutonRetablir->setPredefined(Bouton::PREDEFINED_RETABLIR);
//        $boutonRetablir->setType(Bouton::TYPE_RESET);

        $formBuilder = $this->get('form.factory')->createBuilder();

        $formBuilder
            ->add('libelle', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'label' => 'Campagne :',
                'class' => 'AppBundle:DdqCampagne',
                'choice_label' => 'libelle',
                'query_builder' => function (DdqCampagneRepository $campagneRepo) {
                    return $campagneRepo->findByStatutQueryBuilder('terminée');
                }
            ))
//            ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType',
//                array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))))
            ->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                'collection' => array(
                    'annuler' => array(
                        'label' => 'Annuler',
                        'predefined' => Bouton::PREDEFINED_FERMERMODALE,
                        'type' => Bouton::TYPE_SUBMIT,

                    ),
                    'ajouter' => array(
                        'label' => 'Ajouter',
                        'predefined' => Bouton::PREDEFINED_VALIDER,
                    ),
                ),
            ));


        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            try {
                $tab = $form->getData();
                $campagne = $tab['libelle'];
//                var_dump($campagne);
//                return $this->render('AppBundle:Default:blank.html.twig');
//                $campagne = $campagneRepo->find($idCampagne);
                $campagne->setStatut('terminée');
                $em->persist($campagne);
                $em->flush();
                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                $mail = (new \Swift_Message('DDQ001 - Notification - Clôture Campagne - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@cpam-ain.cnamts.fr')
                    /*** set l'adresse à 'tous' ***/
                    //    ->setTo($agent->getMail())
                    ->setTo('tous-capm011.cpam-ain@assurance-maladie.fr')
                    ->setBody(
                        $this->renderView('Emails/NotificationClotureCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailer->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, la campagne a bien été clôturée', 'success');
                return $this->render('AppBundle:Default:notification.html.twig');
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être clôturée', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig', array('formCampagne' => $form->createView(),
            'titre' => 'Clôture d\'une campagne'));
    }

    public function GetDataGlobalAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findAll')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function GetData39h00FixeAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy39hJoursFixes')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function GetData39h00QuadrimestreAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy39hQuadrimestre')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function GetData37h00AgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy37h00')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function GetData36h00AgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy36h00')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function GetDataNonValideAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByNonValide')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));

    }

    public function ConsultationRttN1Action($idQuestionnaire, Request $request)
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
            ->getForm();
        return $this->render('AppBundle:Administration:consultation_questionnaire.html.twig', array(
            'agent' => $agent,
            'questionnaire' => $qrtt,
            'form' => $form->createView(),
            'validForm' => $validForm->createView()
        ));
    }
}
