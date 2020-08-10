<?php

namespace AppBundle\Form;

use AppBundle\Repository\DdqContratRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;


class DdqQuestionnaireRttType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            // ... adding the name field if needed
            $form = $event->getForm();
            $data = $event->getData();
            ($contrat = $data->getIdDdqContrat()->getId());
            ($EtapeQuestionnaire = $data->getStatut());
            ($reprisetp = $data->getReprisetp());
            ($formuleQuestionnaire = $data->getFormule());
            // $contrat1 = $data->getByTempsPartielQueryBuilder();
            //dump($contrat1);
            //$choix = null === $contrat ? array() :$contrat->getAvaiblePositions();
            //$choix = null === $contrat ? array() :$contrat->getAvaiblePositions();
            if ($EtapeQuestionnaire == "nouveau" || $EtapeQuestionnaire == 'modifiable') {

                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,

                    )
                );
//                           $form ->add('idDdqContrat', EntityType::class, array(
//                    'class' => 'AppBundle:DdqContrat',
//                    'choice_label' => 'nbheures',
////                    'disabled'=> 'true',
////                    'hidden'=> 'true' ,
//                    'label' => 'Contrat : Heures Hebdo',
//                    'required' => false,
//                    'query_builder' => function(DdqContratRepository $repo) {
//                      return $repo->getByTempsPartielQueryBuilder(false);
//                    }
//                ));    
//
            } //pour les tests
            elseif ($EtapeQuestionnaire == "nouveau" || $EtapeQuestionnaire == "invalidé N+1" || $EtapeQuestionnaire == "invalidé N+2") {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => false
                    )
                );
            } ##########################################################
            elseif ($EtapeQuestionnaire == "etape2" || $EtapeQuestionnaire == 'modifiable') {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => true,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
            } ##########################################################
            elseif ($EtapeQuestionnaire == "etape3" && $contrat == '2') {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => true,
                    'disabled' => true,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array('Première Formule = Jour fixe' => true, 'Deuxième Formule = Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'required' => true
                    )
                );
            } elseif ($EtapeQuestionnaire == "etape3" && $contrat != '2') {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => true,
                    'disabled' => true,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array(' Deuxième Formule : Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'required' => true
                    )
                );

            } elseif ($EtapeQuestionnaire == "etape4" && $formuleQuestionnaire == true) {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    )
                )
                    ->add('idDdqContrat', EntityType::class, array(
                        'class' => 'AppBundle:DdqContrat',
                        'choice_label' => 'nbheures',
                        'label' => 'Contrat : Heures Hebdo',
                        'required' => true,
                        'disabled' => true,
                        'query_builder' => function (DdqContratRepository $repo) {
                            return $repo->getByTempsPartielQueryBuilder(false);
                        }
                    ))
                    ->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array('choices' => array(' Première Formule : Jour Fixe' => true),
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        )
                    )
                    ->add('formule1s', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Semaine 1' => true, 'Semaine 2' => false),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'required' => true
                        )
                    )
                    ->add('formule1j', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Lundi' => 'Lundi', 'Mercredi' => 'Mercredi', 'Vendredi' => 'Vendredi'),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'required' => true
                        )
                    );

            } elseif ($EtapeQuestionnaire == "etape4" && $formuleQuestionnaire == false) {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => true,
                    'disabled' => true,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array(' Deuxième Formule : Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'required' => true
                    )
                );

            } elseif ($EtapeQuestionnaire == "etape5" && $formuleQuestionnaire == true) {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    ))
                    ->add('idDdqContrat', EntityType::class, array(
                        'class' => 'AppBundle:DdqContrat',
                        'choice_label' => 'nbheures',
                        'label' => 'Contrat : Heures Hebdo',
                        'required' => true,
                        'disabled' => true,
                        'query_builder' => function (DdqContratRepository $repo) {
                            return $repo->getByTempsPartielQueryBuilder(false);
                        }
                    ))
                    ->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array('choices' => array('Première Formule = Jour fixe coucou' => true, ' Deuxième Formule : Gestion au quadrimestre' => false),
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        ))
                    ->add('formule1s', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Semaine 1' => true, 'Semaine 2' => false),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        ))
                    ->add('formule1j', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Lundi' => 'Lundi', 'Mercredi' => 'Mercredi', 'Vendredi' => 'Vendredi'),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        ))
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array(
                            'widget' => 'single_text',
                            'format' => 'dd/MM/yyyy',
                            'data' => new \DateTime(),
                            'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'required' => true));

            } elseif ($EtapeQuestionnaire == "etape5" && $formuleQuestionnaire == false && $contrat != '2') {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    ))
                    ->add('idDdqContrat', EntityType::class, array(
                        'class' => 'AppBundle:DdqContrat',
                        'choice_label' => 'nbheures',
                        'label' => 'Contrat : Heures Hebdo',
                        'required' => true,
                        'disabled' => true,
                        'query_builder' => function (DdqContratRepository $repo) {
                            return $repo->getByTempsPartielQueryBuilder(false);
                        }
                    ))
                    ->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array('choices' => array(' Deuxième Formule : Gestion au quadrimestre' => false),
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        ))
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array(
                            'widget' => 'single_text',
                            'format' => 'dd/MM/yyyy',
                            'data' => new \DateTime(),
                            'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'required' => true));

            } elseif ($EtapeQuestionnaire == "etape5" && $formuleQuestionnaire == false && $contrat == '2') {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    ))
                    ->add('idDdqContrat', EntityType::class, array(
                        'class' => 'AppBundle:DdqContrat',
                        'choice_label' => 'nbheures',
                        'label' => 'Contrat : Heures Hebdo',
                        'required' => true,
                        'disabled' => true,
                        'query_builder' => function (DdqContratRepository $repo) {
                            return $repo->getByTempsPartielQueryBuilder(false);
                        }
                    ))
                    ->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array('choices' => array(' Deuxième Formule : Gestion au quadrimestre' => false),
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        ))
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array(
                            'widget' => 'single_text',
                            'format' => 'dd/MM/yyyy',
                            'data' => new \DateTime(),
                            'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'value' => true,
                        'required' => true));

            } elseif ($EtapeQuestionnaire == "etape6" && $reprisetp == true) {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true
                    ))
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array(
                            'widget' => 'single_text',
                            'format' => 'dd/MM/yyyy',
                            'data' => new \DateTime(),
                            'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'disabled' => true,
                        'required' => true));

            } elseif ($EtapeQuestionnaire == "etape6" && $reprisetp == false) {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true

                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => false,
                    'disabled' => true,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array('Première Formule = Jour fixe' => true, ' Deuxième Formule : Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'disabled' => true,
                        'required' => true
                    ))
                    ->add('formule1s', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Semaine 1' => true, 'Semaine 2' => false),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,
                            'required' => true
                        )
                    )
                    ->add('formule1j', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Lundi' => 'Lundi', 'Mercredi' => 'Mercredi', 'Vendredi' => 'Vendredi'),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => true,

                            'required' => true
                        )
                    )
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'disabled' => true,
                        'required' => true));

            } /*elseif ($etapeQuestionnaire="invalidé N+2" or $etapeQuestionnaire = "invalidé N+1" )
            {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => false

                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => false,
                    'disabled' => false,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array('Première Formule = Jour fixe' => true, ' Deuxième Formule : Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'disabled' => false,
                        'required' => true
                    ))
                    ->add('formule1s', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Semaine 1' => true, 'Semaine 2' => false),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => false,
                            'required' => true
                        )
                    )
                    ->add('formule1j', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Lundi' => 'Lundi', 'Mercredi' => 'Mercredi', 'Vendredi' => 'Vendredi'),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => false,

                            'required' => true
                        )
                    )
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'disabled' => false,
                        'required' => true));
            }*/
            else {
                $form->add('reprisetp', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                    array('label' => 'Si reprise à temps partiel au 1er Octobre, cocher la case',
                        'required' => false,
                        'disabled' => true

                    )
                );
                $form->add('idDdqContrat', EntityType::class, array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',
                    'required' => false,
                    'disabled' => false,
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(false);
                    }
                ));
                $form->add('formule', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                    array('choices' => array('Première Formule = Jour fixe' => true, ' Deuxième Formule : Gestion au quadrimestre' => false),
                        'expanded' => true,
                        'multiple' => false,
                        'disabled' => false,
                        'required' => true
                    ))
                    ->add('formule1s', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Semaine 1' => true, 'Semaine 2' => false),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => false,
                            'required' => true
                        )
                    )
                    ->add('formule1j', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                        array(
                            'choices' => array('Lundi' => 'Lundi', 'Mercredi' => 'Mercredi', 'Vendredi' => 'Vendredi'),
                            'choices_as_values' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'disabled' => false,

                            'required' => true
                        )
                    )
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType',
                        array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => false))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                        'label' => 'Signature',
                        'disabled' => false,
                        'required' => true));

            }


        });

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DdqQuestionnaireRtt'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cnamts_AppBundle_ddqquestionnairertt';
    }


}
