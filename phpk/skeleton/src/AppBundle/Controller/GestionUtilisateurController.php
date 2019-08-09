<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Bundle\Repository\DdqCampagneRepository;
use AppBundle\Entity\DdqCampagne;
use AppBundle\Table\TableAgentParking;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of GestionUtilisateurController
 *
 * @author FANTINO-02926
 */
class GestionUtilisateurController extends AbstractController
{
    //put your code here
    //
    public function GestionUtilisateurParkingAction(Request $request)
    {

        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        $idCampagne = 43;

        $tableau = $this->get('phpk_core.tableau')->get(new TableAgentParking());
        $tableau->getDataHandler()->setRepository($qpRepo)
            //->setRepositoryMethod('getCampagnesUtilisateur')
            ->setRepositoryMethod('getCampagnesUtilisateurQueryBuilder')
            ->setRepositoryMethodParameters(array($idCampagne));
        return $this->render(' AppBundle:GestionUtilisateur:UtilisateurParking.html.twig', array(
            //           "maVariable" => $maVariable,
            'TableAgentParking' => $tableau, $idCampagne
        ));
        //  return $this->redirectToRoute('utilisateur_parking', array('idCampagne' => $idCampagne));


    }

    public function UserParkingAction($idCampagne)
    {
        $qpRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:DdqQuestionnaireParking');
        //$idCampagne= 43;
        $tableau = $this->get('phpk_core.tableau')->get(new TableAgentParking());
        $tableau->getDataHandler()->setRepository($qpRepo)
            //->setRepositoryMethod('getCampagnesUtilisateur')
            ->setRepositoryMethod('findByCampagnesUtilisateurQueryBuilder')
            ->setRepositoryMethodParameters(array($idCampagne));
        return $this->render('AppBundle:GestionUtilisateur:UtilisateurParking.html.twig', array(
            //           "maVariable" => $maVariable,
            'TableAgentParking' => $tableau, $idCampagne
        ));
        //  return $this->redirectToRoute('utilisateur_parking', array('idCampagne' => $idCampagne));


    }

    public function getUserParkingAction($idCampagne)
    {
        $campagne = new DdqCampagne();
        $em = $this->getDoctrine()->getManager();
        $campagneRepo = $em->getRepository('AppBundle:DdqCampagne');
        $formBuilder = $this->get('form.factory')->createBuilder();
        $formBuilder
            ->add('libelle', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'label' => 'Campagne :',
                'class' => ' AppBundle:DdqCampagne',
                'choice_label' => 'libelle',
                'query_builder' => function (DdqCampagneRepository $campagneRepo) {
                    return $campagneRepo->getByCategorieQueryBuilder('Parking');
                }
            ))
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'label' => 'Valider',
                'role' => 'Action',
                'attr' => array('class' => 'bouton', 'img' => 'valider'),
                'predefined' => Bouton::PREDEFINED_VALIDER,));
        $form = $formBuilder->getForm();
        if ($form->handleRequest($request)->isValid()) {

            try {
                $data = $form->getData();
                $idCampagne = $data['libelle']->getId();
                return $this->redirectToRoute('resultats_parking_campagne', array('idCampagne' => $idCampagne));
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. La campagne n\'a pas pu être sélectionnée', 'error');
                return $this->render(' AppBundle:Default:index.html.twig');
            }
        }

        return $this->render(' AppBundle:Administration:SelectionCampagne.html.twig',
            array('formCampagne' => $form->createView()
            ));


    }
}
