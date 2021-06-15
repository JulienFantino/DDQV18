<?php

namespace AppBundle\Controller;

use AppBundle\Table\TableReponses;

class ListeController extends AbstractController
{
    public function getListeParkingRemplisAction()
    {

        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qpRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplis');

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);
        //dump( $valideur = $repository->findOneByNomium($nomium));
        ($valideurN1 = $valideur->getNomResponsable());
        ($sigleEnt = $valideur->getSigleEnt());
        ($valideur2 = $repository->findOneByNom($valideurN1));
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            //  ->setRepositoryMethod('findByQuestionnairesRemplis')
            ->setRepositoryMethod('findByQuestionnairesRemplis')
            // ->setRepositoryMethodParameters(array($valideur->getNomentabrege()));
            //->setRepositoryMethodParameters(array($valideur->getNomcomplet()));
            ->setRepositoryMethodParameters(array($valideur->getid()));
        //  ->setRepositoryMethodParameters(array($sigleEnt));
        //  dump($valideur->getid());
        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1N2Action()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);
        //dump( $valideur = $repository->findOneByNomium($nomium));
        ($valideurN1 = $valideur->getNomResponsable());
        ($sigleEnt = $valideur->getSigleEnt());
        ($valideur2 = $repository->findOneByNom($valideurN1));
        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            //  ->setRepositoryMethod('findByQuestionnairesRemplis') findByQuestionnairesRemplisN1N2($sigleent)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1N2')
            // ->setRepositoryMethodParameters(array($valideur->getNomentabrege()));
            //->setRepositoryMethodParameters(array($valideur->getNomcomplet()));
            // ->setRepositoryMethodParameters(array($valideur->getid()));
            ->setRepositoryMethodParameters(array($sigleEnt));
        //  dump($valideur->getid());
        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1Action()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1BrancheRessourceAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheRessources')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1BrancheSanteAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheSante')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1BrancheProdAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheProd')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1BrancheFinanciereAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheFinance')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeRttRemplisN1BrancheDirectionAction()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qrttRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireRtt');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qrttRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1BrancheDirection')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeTpRemplisAction()
    {
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qtpRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplis')
            ->setRepositoryMethodParameters(array($valideur->getNomentabrege()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }

    public function getListeTpRemplisN1Action()
    {
        /*** il faut ajouter un getUser pour authentifier le valideur **/
        /*** ensuite ajouter à la méthode getQuestionnairesRemplis le paramètre idAgent **/
        /*** de cette manière on précisera dans la requête qu on veut uniquement la liste des agent de la branche du valideur **/
        $nomium = $this->getUser()->getNom() . '-' . $this->getUser()->getChrono();
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Agent');
        $valideur = $repository->findOneByNomium($nomium);

        $qtpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireTp');

        $tableau = $this->get('phpk_core.tableau')->get(new TableReponses());
        $tableau->getDataHandler()->setRepository($qtpRepo)
            ->setRepositoryMethod('findByQuestionnairesRemplisN1')
            ->setRepositoryMethodParameters(array($valideur->getSigleent()));

        return $this->render('AppBundle:Liste:Questionnaires.html.twig', array('tabQuestionnaires' => $tableau));
    }
}

