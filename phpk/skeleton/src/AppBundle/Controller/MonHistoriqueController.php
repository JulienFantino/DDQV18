<?php

namespace AppBundle\Controller;


use AppBundle\Table\TableMesCampagnes;
use AppBundle\Table\TableMonHistorique;

class MonHistoriqueController extends AbstractController
{
    private const APP_BUNDLE_AGENT = 'AppBundle:Agent';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING = 'AppBundle:DdqQuestionnaireParking';
    private const PHPK_CORE_TABLEAU = 'phpk_core.tableau';
    private const FIND_BY_MES_CAMPAGNES_TERMINEES = 'findByMesCampagnesTerminees';
    private const APP_BUNDLE_MON_HISTORIQUE_MES_CAMPAGNES_PARKING_HISTORIQUE_HTML_TWIG = 'AppBundle:MonHistorique:MesCampagnesParkingHistorique.html.twig';
    private const AGENT = 'agent';
    private const TAB_AGENT_QUESTIONNAIRE_HISTORIQUE = 'tabAgentQuestionnaireHistorique';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT = 'AppBundle:DdqQuestionnaireRtt';
    private const APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG = 'AppBundle:MesCampagnes:MesCampagnesRtt.html.twig';
    private const TAB_AGENT_QUESTIONNAIRE = 'tabAgentQuestionnaire';
    private const APP_BUNDLE_DDQ_QUESTIONNAIRE_TP = 'AppBundle:DdqQuestionnaireTp';
    private const APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_TP_HTML_TWIG = 'AppBundle:MesCampagnes:MesCampagnesTp.html.twig';

    public function getHistoriqueParkingAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_PARKING);
        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableMonHistorique());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod(self::FIND_BY_MES_CAMPAGNES_TERMINEES)
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MON_HISTORIQUE_MES_CAMPAGNES_PARKING_HISTORIQUE_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE_HISTORIQUE => $tableau));
    }

    public function getHistoriqueRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_RTT);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableMesCampagnes());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod(self::FIND_BY_MES_CAMPAGNES_TERMINEES)
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_RTT_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));
    }

    public function getHistoriqueTpAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_AGENT);
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository(self::APP_BUNDLE_DDQ_QUESTIONNAIRE_TP);

        $tableau = $this->get(self::PHPK_CORE_TABLEAU)->get(new TableMesCampagnes());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod(self::FIND_BY_MES_CAMPAGNES_TERMINEES)
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render(self::APP_BUNDLE_MES_CAMPAGNES_MES_CAMPAGNES_TP_HTML_TWIG, array(self::AGENT => $agent, self::TAB_AGENT_QUESTIONNAIRE => $tableau));
    }
}