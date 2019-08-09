<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DdqCampagne;
use AppBundle\Repository\DdqCampagneRepository;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use CNAMTS\PHPK\CoreBundle\Generator\Graphe\GrapheGenerator;
use Symfony\Component\HttpFoundation\Request;

class ResultatsController extends AbstractController
{
    public function ResultatsParkingAction(Request $request)
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
                    return $campagneRepo->findByCategorieQueryBuilder('Parking');
                }
            ))
//            ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType', 
//                array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))))
//            ;
//            ->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
//            'collection' => array(
//                'retablir' => array(
//                    'label' => 'Rétablir',
//                    'predefined' => Bouton::PREDEFINED_RETABLIR,
//                    'type'=>Bouton::TYPE_RESET,
//                ),
//                'valider' => array(
//                    'label' => 'Valider',
//                    'predefined' => Bouton::PREDEFINED_VALIDER,
//                ),
//            ),
//        )); 
            ->add('bouton', 'Symfony\Component\Form\Extension\Core\Type\ButtonType', array(
                'label' => 'Valider',
                'role' => 'Action',
                'attr' => array('class' => 'bouton', 'img' => 'valider'
                ),
                'predefined' => Bouton::PREDEFINED_VALIDER,

            ));
        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {

            try {
                $data = $form->getData();
                $idCampagne = $data['libelle']->getId();
                return $this->redirectToRoute('resultats_parking_campagne', array('idCampagne' => $idCampagne));
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. La campagne n\'a pas pu être sélectionnée', 'error');
                return $this->render('AppBundle:Default:index.html.twig');
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig',
            array('formCampagne' => $form->createView()
            ));
    }

    public function ResultatsRttAction(Request $request)
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
                    return $campagneRepo->findByCategorieQueryBuilder('RTT');
                }
            ))
//            ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType', 
//                array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))))
            ->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                'collection' => array(
                    'annuler' => array(
                        'label' => 'Annuler',
                        'predefined' => Bouton::PREDEFINED_RETABLIR,
                    ),
                    'ajouter' => array(
                        'label' => 'Valider',
                        'predefined' => Bouton::PREDEFINED_VALIDER,
                    ),
                ),
            ));


        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {

            try {
                $data = $form->getData();
                $idCampagne = $data['libelle']->getId();
                return $this->redirectToRoute('resultats_rtt_campagne', array('idCampagne' => $idCampagne));
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. La campagne n\'a pas pu être sélectionnée', 'error');
                return $this->render('AppBundle:Default:index.html.twig');
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig',
            array('formCampagne' => $form->createView()
            ));
    }

    public function ResultatsTpAction(Request $request)
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
                    return $campagneRepo->findByCategorieQueryBuilder('Temps_partiel');
                }
            ))
//            ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType', 
//                array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))));
            ->add('boutons', 'CNAMTS\PHPK\CoreBundle\Form\Type\CollectionButtonType', array(
                'collection' => array(
                    'annuler' => array(
                        'label' => 'Annuler',
                        'predefined' => Bouton::PREDEFINED_RETABLIR,
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
                $data = $form->getData();
                $idCampagne = $data['libelle']->getId();
                return $this->redirectToRoute('resultats_tp_campagne', array('idCampagne' => $idCampagne));
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. La campagne n\'a pas pu être sélectionnée', 'error');
                return $this->render('AppBundle:Default:index.html.twig');
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig',
            array('formCampagne' => $form->createView()
            ));
    }

    public function getResultatsParkingAction($idCampagne)
    {
        $em = $this->getDoctrine()->getManager();
        $qr = $em->getRepository('AppBundle:DdqQuestionnaireParking');
        $cr = $em->getRepository('AppBundle:DdqCampagne');
        $campagne = $cr->find($idCampagne);

        // nombre total de questionnaires pour cette campagne
        $nbTotal = $qr->countByNbTotal($idCampagne);
        // nombre de questionnaires validés par les RH
        $valid = $qr->countByValid($idCampagne);
        // nombre de questionnaires invalidés par les RH
        $invalid = $qr->countByInvalid($idCampagne);
        // nombre de questionnaires qui n'ont pas été remplis
        $none = $nbTotal - $valid - $invalid;

        $dataPie = new GrapheGenerator();
        $dataPie->setId('graphePie');
        $dataPie->setGraphiqueType(GrapheGenerator::GRAPHIQUE_TYPE_PIE);
        $dataPie->setGraphiqueLegend(GrapheGenerator::GRAPHIQUE_LEGEND_INSIDE);
        $dataPie->setTableDisplay(true);
        $dataPie->addData('Demandes rejetées', $invalid, array('color' => '#BC1531'));//rouge
        $dataPie->addData('Demandes validées', $valid, array('color' => '#40A447'));//bleu
        $dataPie->addData('Questionnaires non soumis', $none, array('color' => '#000000'));//noir

        // nombre de questionnaires au motif enfants à charge
        $nbEnfants = $qr->countByNbEnfants($idCampagne);
        // nombre de questionnaires au motif handicap
        $nbHandicap = $qr->countByNbHandicap($idCampagne);
        // nombre de questionnaires au motif emploi
        $nbEmploi = $qr->countByNbEmploi($idCampagne);


        return $this->render('AppBundle:Resultats:Parking.html.twig', array(
            'dataPie' => $dataPie,
            'enfants' => $nbEnfants,
            'handicap' => $nbHandicap,
            'emploi' => $nbEmploi,
            'campagne' => $campagne));
    }

    public function getResultatsRttAction($idCampagne)
    {
        $em = $this->getDoctrine()->getManager();
        $qr = $em->getRepository('AppBundle:DdqQuestionnaireRtt');
        $cr = $em->getRepository('AppBundle:DdqCampagne');
        $campagne = $cr->find($idCampagne);

        // nombre total de questionnaires pour cette campagne
        $nbTotal = $qr->countByNbTotal($idCampagne);
        // nombre de questionnaires validés N+2
        $valid = $qr->countByValid($idCampagne);
        // nombre de questionnaires invalidés N+1 OU N+2
        $invalid = $qr->countByInvalid($idCampagne);
        // nombre de questionnaires qui n'ont pas été remplis
        $none = $nbTotal - $valid - $invalid;

        $dataPie = new GrapheGenerator();
        $dataPie->setId('graphePie');
        $dataPie->setGraphiqueType(GrapheGenerator::GRAPHIQUE_TYPE_PIE);
        $dataPie->setGraphiqueLegend(GrapheGenerator::GRAPHIQUE_LEGEND_INSIDE);
        $dataPie->setTableDisplay(true);
        $dataPie->addData('Demandes rejetées', $invalid, array('color' => '#BC1531'));//rouge
        $dataPie->addData('Demandes validées', $valid, array('color' => '#40A447'));//bleu
        $dataPie->addData('Questionnaires non soumis', $none, array('color' => '#000000'));//noir

        return $this->render('AppBundle:Resultats:Rtt.html.twig', array(
            'dataPie' => $dataPie,
            'campagne' => $campagne));
    }

    public function getResultatsTpAction($idCampagne)
    {
        $em = $this->getDoctrine()->getManager();
        $qr = $em->getRepository('AppBundle:DdqQuestionnaireTp');
        $cr = $em->getRepository('AppBundle:DdqCampagne');
        $campagne = $cr->find($idCampagne);

        // nombre total de questionnaires pour cette campagne
        $nbTotal = $qr->countByNbTotal($idCampagne);
        // nombre de questionnaires validés N+2
        $valid = $qr->countByValid($idCampagne);
        // nombre de questionnaires invalidés N+1 OU N+2
        $invalid = $qr->countByInvalid($idCampagne);
        // nombre de questionnaires qui n'ont pas été remplis
        $none = $nbTotal - $valid - $invalid;

        $dataPie = new GrapheGenerator();
        $dataPie->setId('graphePie');
        $dataPie->setGraphiqueType(GrapheGenerator::GRAPHIQUE_TYPE_PIE);
        $dataPie->setGraphiqueLegend(GrapheGenerator::GRAPHIQUE_LEGEND_INSIDE);
        $dataPie->setTableDisplay(true);
        $dataPie->addData('Demandes rejetées', $invalid, array('color' => '#BC1531'));//rouge
        $dataPie->addData('Demandes validées', $valid, array('color' => '#40A447'));//bleu
        $dataPie->addData('Questionnaires non soumis', $none, array('color' => '#000000'));//noir

        return $this->render('AppBundle:Resultats:Tp.html.twig', array(
            'dataPie' => $dataPie,
            'campagne' => $campagne));
    }
}