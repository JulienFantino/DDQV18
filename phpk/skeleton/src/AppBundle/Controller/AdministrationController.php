<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DdqCampagne;
use AppBundle\Repository\DdqCampagneRepository;
use CNAMTS\PHPK\CoreBundle\Generator\Form\Bouton;
use Symfony\Component\HttpFoundation\Request;

class AdministrationController extends AbstractController
{
    public function nouvelleCampagneAction(Request $request)
    {
        /* Création d'une entité agent ou récupération d'une existante */
        $campagne = new DdqCampagne();

//        $boutonValider = new Bouton();
//        $boutonValider->setText('Valider');
//        $boutonValider->setPredefined(Bouton::PREDEFINED_VALIDER);
//        $boutonValider->setType(Bouton::TYPE_SUBMIT);
//        $boutonRetablir = new Bouton();
//        $boutonRetablir->setText('Rétablir');
//        $boutonRetablir->setPredefined(Bouton::PREDEFINED_RETABLIR);
//        $boutonRetablir->setType(Bouton::TYPE_RESET);

        $form = $this->get('form.factory')->create('AppBundle\Form\DdqCampagneType', $campagne);

        /** Ajout d'un seul bouton au formulaire */
//        $form->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType',
//                array('attr' => array(boutons => array($boutonRetablir, $boutonValider))));
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
                $campagne->setStatut('nouvelle');
                $em->persist($campagne);
                $em->flush();

                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                $mail = (new \Swift_Message('DDQ001 - Notification - Nouvelle Campagne - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@assurance-maladie.fr')
                    /*** set l'adresse à 'tous' ***/
                    ->setTo('julien.fantino@assurance-maladie.fr')
                    ->setBody(
                        $this->renderView('Emails/NotificationCreationCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailer->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, votre nouvelle campagne a bien été créée', 'success');
                return $this->render('AppBundle:Default:notification.html.twig');
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être créée', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }
        return $this->render('AppBundle:Administration:NouvelleCampagne.html.twig', array('formCampagne' => $form->createView()));
    }

    public function clotureCampagneAction(Request $request)
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
                    return $campagneRepo->findByStatutQueryBuilder('terminée');
                }
            ))
//            ->add('button', 'CNAMTS\PHPK\CoreBundle\Form\Type\BoutonsType',
//                array('attr' => array('boutons' => array($boutonRetablir, $boutonValider))))
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
//                var_dump($campagne);
//                return $this->render('AppBundle:Default:blank.html.twig');
//                $campagne = $campagneRepo->find($idCampagne);
                $campagne->setStatut('terminée');
                $em->persist($campagne);
                $em->flush();
                /******** Envoi d'une notification par mail *********************/
                //création d'un objet transport
                $transport = new \Swift_SmtpTransport();
                //création d'un objet mailer
                $mailer = (new \Swift_Mailer($transport));

                $mail = (new \Swift_Message('DDQ001 - Notification - Clôture Campagne - Ne pas répondre'))
                    ->setFrom('ne-pas-repondre@cpam-ain.cnamts.fr')
                    /*** set l'adresse à 'tous' ***/
                    //    ->setTo($agent->getMail())
                    ->setTo('julien.fantino@cpam-ain.cnamts.fr')
                    ->setBody(
                        $this->renderView('Emails/NotificationClotureCampagne.html.twig', array('campagne' => $campagne)),
                        'text/html'
                    );
                $mailer->send($mail);
                /*****************************************************************************/
                $this->notification('Merci, la campagne a bien été clôturée', 'success');
                return $this->render('AppBundle:Default:notification.html.twig');
            } catch (Exception $e) {
                $this->notification('Une erreur s\'est produite. Votre campagne n\'a pas pu être clôturée', 'error');
                return $this->render('AppBundle:Default:notification.html.twig');
            }
        }

        return $this->render('AppBundle:Administration:SelectionCampagne.html.twig', array('formCampagne' => $form->createView(),
            'titre' => 'Clôture d\'une campagne'));
    }
}
