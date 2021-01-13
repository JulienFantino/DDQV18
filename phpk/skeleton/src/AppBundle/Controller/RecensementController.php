<?php


namespace AppBundle\Controller;


class RecensementController extends AbstractController
{
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


}