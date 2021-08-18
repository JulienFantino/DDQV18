<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DdqCampagne;
use AppBundle\Repository\DdqCampagneRepository;
use AppBundle\Table\TableMesCampagnes;
use AppBundle\Table\TableRttAgent;
use AppBundle\Table\TableTpAgent;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;
use Exception;

class AdministrationController extends AbstractController
{

    private const FORM_FACTORY = 'form.factory';
    private const APP_BUNDLE_FORM_DDQ_CAMPAGNE_TYPE = 'AppBundle\Form\DdqCampagneType';
    private const NOUVELLE = 'nouvelle';
    //Permet de faire des tests avec les services si nécessaire
    private const JULIEN_FANTINO_ASSURANCE_MALADIE_FR = 'administrationdupersonnel.cpam-ain@assurance-maladie.fr';
    private const TOUS_CPAM_011 = 'tous-cpam011.cpam-ain@assurance-maladie.fr';
    private const PHPK_CORE_TABLEAU = 'phpk_core.tableau';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT = 'AppBundle:DdqQuestionnaireRtt';
    private const APP_BUNDLE_AGENT = 'AppBundle:Agent';
    private const APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG = 'AppBundle:MesCampagnes:MesCampagnesRtt.html.twig';
    private const AGENT = 'agent';
    private const TAB_AGENT_QUESTIONNAIRE = 'tabAgentQuestionnaire';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_RTT_TYPE = 'AppBundle\Form\DdqQuestionnaireRttType';
    private const APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE = 'AppBundle\Form\DdqQuestionnaireTpType';
    private const APP_BUNDLE_ADMINISTRATION_CONSULTATION_QUESTIONNAIRE_RTT_HTML_TWIG = 'AppBundle:Administration:consultation_questionnaire.html.twig';
    private const APP_BUNDLE_ADMINISTRATION_CONSULTATION_QUESTIONNAIRE_TP_HTML_TWIG = 'AppBundle:Administration:consultation_questionnaire_Tp.html.twig';
    private const APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_TP_HTML_TWIG = 'AppBundle:MesCampagnes:MesCampagnesTp.html.twig';
    private const QUESTIONNAIRE = 'questionnaire';
    private const FORM = 'form';
    private const VALID_FORM = 'validForm';
    private const SERVEUR_WEB_CPAM_AIN_ASSURANCE_MALADIE_FR = 'serveur-web.cpam-ain@assurance-maladie.fr';
    private const APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG = 'AppBundle:Default:notification.html.twig';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_TP = 'AppBundle:DdqQuestionnaireTp';

    public function nouvelleCampagneAction(Request $request, \Swift_Mailer $mailer)
    {
        /* Création d'une entité agent ou récupération d'une existante */
        $campagne = new DdqCampagne();


        $form = $this->get(self::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_CAMPAGNE_TYPE, $campagne);

        /** Ajout d'un seul bouton au formulaire */
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
                $campagne->setStatut(self::NOUVELLE);
                $em->persist($campagne);
                $em->flush();

                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));
                //  $correspondant = self::JULIEN_FANTINO_ASSURANCE_MALADIE_FR;
                $correspondant = self:: TOUS_CPAM_011;
                $mail = (new \Swift_Message('CampagneRH - Notification - Nouvelle Campagne - Ne pas répondre'))
                    //->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    ->setFrom(self::SERVEUR_WEB_CPAM_AIN_ASSURANCE_MALADIE_FR)
                    ///*** set l'adresse à 'tous' ***/
                    ->setTo($correspondant)
                    ->setBody(
                        $this->renderView('Emails/NotificationCreationCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailer->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, votre nouvelle campagne a bien été créée', 'success');
                return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être créée', 'error');
                return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
            }
        }
        return $this->render('AppBundle:Administration:NouvelleCampagne.html.twig', array('formCampagne' => $form->createView()));
    }

    public function clotureCampagneAction(Request $request, \Swift_Mailer $mailer)
    {

        $campagne = new DdqCampagne();
        $em = $this->getDoctrine()->getManager();
        $campagneRepo = $em->getRepository('AppBundle:DdqCampagne');
        $formBuilder = $this->get(self::FORM_FACTORY)->createBuilder();
        $formBuilder
            ->add('libelle', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'label' => 'Campagne :',
                'class' => 'AppBundle:DdqCampagne',
                'choice_label' => 'libelle',
                'query_builder' => function (DdqCampagneRepository $campagneRepo) {
                    return $campagneRepo->findByStatutQueryBuilder('terminée');
                }
            ))
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
                $campagne->setStatut('terminée');
                $em->persist($campagne);
                $em->flush();
                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailers = (new \Swift_Mailer($transport));

                $mail = (new \Swift_Message('DDQ - Notification - Clôture Campagne - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@cpam-ain.cnamts.fr')
                    /*** set l'adresse à 'tous' ***/
                    //    ->setTo($agent->getMail())
                    ->setTo(self::TOUS_CPAM_011)
                    ->setBody(
                        $this->renderView('Emails/NotificationClotureCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailers->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, la campagne a bien été clôturée', 'success');
                return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être clôturée', 'error');
                return $this->render(self::APP_BUNDLE_DEFAULT_NOTIFICATION_HTML_TWIG);
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig', array('formCampagne' => $form->createView(),
            'titre' => 'Clôture d\'une campagne'));
    }

    public function GetDataGlobalAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findAll')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function GetData39h00FixeAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy39hJoursFixes')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function GetData39h00QuadrimestreAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy39hQuadrimestre')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function GetData37h00AgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy37h00')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function GetData36h00AgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findBy36h00')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function GetDataNonValideAgentRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableRttAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByNonValide')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }

    public function ConsultationRttN1Action($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);
        $qrtt = $qrttRepo->find($idQuestionnaire);
        /* Récup de l'agent concerné */
        $agent = $qrtt->getIdAgent();
        /* Création du formulaire */
        $form = $this->get(self::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_RTT_TYPE, $qrtt, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->getForm();
        return $this->render(self::APP_BUNDLE_ADMINISTRATION_CONSULTATION_QUESTIONNAIRE_RTT_HTML_TWIG, array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qrtt,
            self::FORM => $form->createView(),
            self::VALID_FORM => $validForm->createView()
        ));
    }

    public function ConsultationTpN1Action($idQuestionnaire, Request $request)
    {
        /* Récup du questionnaire */
        $qtpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);
        $qtp = $qtpRepo->find($idQuestionnaire);
        /* Récup de l'agent concerné */
        $agent = $qtp->getIdAgent();
        /* Création du formulaire */
        $form = $this->get(self::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_TP_TYPE, $qtp, array('disabled' => true));
        /* Création formulaire de validation/invalidation */
        $validForm = $this->createFormBuilder()
            ->getForm();
        return $this->render(self::APP_BUNDLE_ADMINISTRATION_CONSULTATION_QUESTIONNAIRE_TP_HTML_TWIG, array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qtp,
            self::FORM => $form->createView(),
            self::VALID_FORM => $validForm->createView()
        ));
    }

    public function GetDataGlobalAgentTpAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableTpAgent());

        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisAdmin')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_TP_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));

    }
}
