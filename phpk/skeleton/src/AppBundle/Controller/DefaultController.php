<?php

namespace AppBundle\Controller;

class DefaultController extends AbstractController
{

    public function indexAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $agent = $repository->findOneByNomium($nomium);

        return $this->render('AppBundle:Default:index.html.twig', array('agent' => $agent));
    }

    public function errorAction()
    {
        $this->notification('Une erreur s\'est produite.', 'error');
        return $this->render('AppBundle:Default:notification.html.twig');
    }
}
