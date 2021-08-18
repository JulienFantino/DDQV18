<?php


namespace AppBundle\Controller;

use AppBundle\Entity\DdqCampagne;
use AppBundle\Table\TableReponses;
use AppBundle\Table\TableServiceRrh;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\DdqCampagneRepository;
use AppBundle\Table\TableMesCampagnes;
use AppBundle\Table\TableRttAgent;
use AppBundle\Table\TableTpAgent;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Exception;

class RecensementController extends AbstractController
{
    private const QUESTIONNAIRE = 'questionnaire';
    private const CONTRATS = 'contrats';
    private const FORM = 'form';
    private const AGENT = 'agent';
    private const CAMPAGNE = 'campagne';

    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING = 'AppBundle:DdqQuestionnaireParking';
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

    private const APP_BUNDLE_QUESTIONNAIRES_QUESTIONNAIRE_PARKING_HTML_TWIG = 'AppBundle:Questionnaires:QuestionnaireParking.html.twig';
    private const APP_BUNDLE_AGENT = 'AppBundle:Agent';

    private const APP_BUNDLE_FORM_DDQ_CAMPAGNE_TYPE = 'AppBundle\Form\DdqCampagneRecensementType';
    private const NOUVELLE = 'nouvelle';
    //Permet de faire des tests avec les services si nécessaire
    private const JULIEN_FANTINO_ASSURANCE_MALADIE_FR = 'julien.fantino@assurance-maladie.fr';
    private const TOUS_CPAM_011 = 'tous-cpam011.cpam-ain@assurance-maladie.fr';
    private const PHPK_CORE_TABLEAU = 'phpk_core.tableau';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_RRH = 'AppBundle:DdqQuestionnaireRrh';
    private const SERVEUR_WEB_CPAM_AIN_ASSURANCE_MALADIE_FR = 'serveur-web.cpam-ain@assurance-maladie.fr';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_TP = 'AppBundle:DdqQuestionnaireTp';
    private const APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG = 'AppBundle:Liste:QuestionnaireServicesRrh.html.twig';
    private const TAB_QUESTIONNAIRES = 'tabQuestionnaires';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS = 'findByQuestionnairesRemplis';


    public function nouveauRecensementAction(Request $request, \Swift_Mailer $mailer)
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
                $correspondant = self::JULIEN_FANTINO_ASSURANCE_MALADIE_FR;
                // $correspondant = self:: TOUS_CPAM_011;
                $mail = (new \Swift_Message('CampagneRH - Notification - Nouvelle Campagne de recensement- Ne pas répondre'))
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
        return $this->render('AppBundle:Administration:NouvelleCampagneRecensement.html.twig', array('form' => $form->createView()));
    }

    public function getAgentAction()
    {
        /* Identification de l'agent*/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);


        /* Création du formulaire */


        return $this->render('AppBundle:Validation:QuestionnaireRecensement.html.twig', array(
            'agent' => $agent
        ));
    }

    public function getRecensementAction()
    {

    }

    public function getQuestionnaireRrhHistoriqueAction($campagne, Request $request)
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
        $form = $this->get(self::FORM_FACTORY)->create(self::APP_BUNDLE_FORM_DDQ_QUESTIONNAIRE_PARKING_TYPE, $qp, array('disabled' => true));


        return $this->render(self::APP_BUNDLE_QUESTIONNAIRES_QUESTIONNAIRE_PARKING_HTML_TWIG, array(
            self::AGENT => $agent,
            self::QUESTIONNAIRE => $qp,
            self::FORM => $form->createView()
        ));
    }

    public function getListeServiceRrhRemplisAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);
        //dump( $valideur = $repository->findOneByNomium($nomium));
        //($valideurN1 = $valideur->getNomResponsable());

        $qrrhRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RRH);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableServiceRrh());
        $tableau->getDataHandler()->setRepository($qrrhRepo)
            ->setRepositoryMethod('findByServiceRrh');


        if ($tableau->exportRequested()) {
            return $tableau->export($this->container, 'export');
        }
        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));


        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur
         * $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
         * $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
         * $valideur = $repository->findOneByNomium($nomium);
         *
         * $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);
         *
         * $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
         * $tableau->getDataHandler()->setRepository($qrttRepo)
         * ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_RESSOURCES)
         * ->setRepositoryMethodParameters(array($valideur->getSigleent()));
         *
         * return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau)); **/
    }
}