<?php

namespace AppBundle\Controller;


use AppBundle\Table\TableMesCampagnes;
use AppBundle\Table\TableMonHistorique;

class MonHistoriqueController extends AbstractController
{
    public function getHistoriqueParkingAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        $tableau = $this->get('phpk_core.tableau')->get(new TableMonHistorique());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByMesCampagnesTerminees')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MonHistorique:MesCampagnesParkingHistorique.html.twig', array('agent' => $agent, 'tabAgentQuestionnaireHistorique' => $tableau));
    }

    public function getHistoriqueRttAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableMesCampagnes());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByMesCampagnesTerminees')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesRtt.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));
    }

    public function getHistoriqueTpAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $agentRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $agentRepo->findOneByNomium($nomium);
        $idAgent = $agent->getId();
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');

        $tableau = $this->get('phpk_core.tableau')->get(new TableMesCampagnes());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByMesCampagnesTerminees')
            ->setRepositoryMethodParameters(array($idAgent));

        return $this->render('AppBundle:MesCampagnes:MesCampagnesTp.html.twig', array('agent' => $agent, 'tabAgentQuestionnaire' => $tableau));
    }
}