<?php

namespace AppBundle\Controller;

use AppBundle\Table\TableReponses;

class ListeController extends AbstractController
{
    private const PHPK_CORE_TABLEAU = 'phpk_core.tableau';
    private const APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG = 'AppBundle:Liste:Questionnaires.html.twig';
    private const TAB_QUESTIONNAIRES = 'tabQuestionnaires';
    private const APP_BUNDLE_AGENT = 'AppBundle:Agent';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT = 'AppBundle:DdqQuestionnaireRtt';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS = 'findByQuestionnairesRemplis';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_TP = 'AppBundle:DdqQuestionnaireTp';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS_N_1 = 'findByQuestionnairesRemplisN1';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_DIRECTION = 'findByQuestionnairesRemplisN1BrancheDirection';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_PROD = 'findByQuestionnairesRemplisN1BrancheProd';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_RESSOURCES = 'findByQuestionnairesRemplisN1BrancheRessources';
    private const FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_N_2 = 'findByQuestionnairesRemplisN1N2';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING = 'AppBundle:DdqQuestionnaireParking';

    public function getListeParkingRemplisAction()
    {

        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS);

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);
        //dump( $valideur = $repository->findOneByNomium($nomium));
        //($valideurN1 = $valideur->getNomResponsable());

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS)
            ->setRepositoryMethodParameters(array($valideur->getid()));
        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1N2Action()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);
        //  ($valideurN1 = $valideur->getNomResponsable());
        ($sigleEnt = $valideur->getSigleEnt());
        // ($valideur2 = $repository->findOneByNom($valideurN1));
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);
        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_N_2)
            ->setRepositoryMethodParameters(array($sigleEnt));
        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1Action()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1)
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1BrancheRessourceAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_RESSOURCES)
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1BrancheSanteAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheSante')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1BrancheProdAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_PROD)
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1BrancheFinanciereAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheFinance')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeRttRemplisN1BrancheDirectionAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_BRANCHE_DIRECTION)
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeTpRemplisAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qtpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qtpRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS)
            ->setRepositoryMethodParameters(array($valideur->getNomentabrege()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeTpRemplisN1Action()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);

        $qtpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qtpRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1)
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }

    public function getListeTpRemplisN1N2Action()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $valideur = $repository->findOneByNomium($nomium);
        // ($valideurN1 = $valideur->getNomResponsable());
        ($sigleEnt = $valideur->getSigleEnt());
        // ($valideur2 = $repository->findOneByNom($valideurN1));
        $qTpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qTpRepo)
            ->setRepositoryMethod(self::FIND_BY_QUESTIONNAIRES_REMPLIS_N_1_N_2)
            ->setRepositoryMethodParameters(array($sigleEnt));
        return $this->render(self::APP_BUNDLE_LISTE_QUESTIONNAIRES_HTML_TWIG, array(self::TAB_QUESTIONNAIRES => $tableau));
    }
}

