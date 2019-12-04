<?php

namespace AppBundle\Form;
//use AppBundle\Repository\DdqRepartitionRepository;
use AppBundle\Entity\DdqContratRepartition;
use AppBundle\Entity\DdqQuestionnaireTp;
use AppBundle\Entity\DdqRepartition;
use AppBundle\Repository\DdqContratRepository;
use AppBundle\Repository\DdqRepartitionRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class DdqQuestionnaireTpType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();
            ($contrat = $data->getIdDdqContrat()->getId());
            ($EtapeQuestionnaire = $data->getStatut());
            // dump($nbdemijournée = $data->getIdDdqRepartition());
            //  dump($nbdemijournée = $data->getIdDdqRepartition()->getNbjours());
            //  dump($nbdemijournée = $data->getIdDdqRepartition()->getNbdemiesjournees());
            if ($EtapeQuestionnaire == 'modifiable') {
                $form->add('dateenfant1', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant2', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant3', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant4', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('motif', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array('attr' => array('placeholder' => 'Expliquez votre demande de contrat à temps partiel. 255 caractères max...')));
            }
            if ($EtapeQuestionnaire == 'modifiable') {
                $form->add('lundi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Lundi', 'required' => false))
                    ->add('mardi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mardi', 'required' => false))
                    ->add('mercredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mercredi', 'required' => false))
                    ->add('jeudi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Jeudi', 'required' => false))
                    ->add('vendredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Vendredi', 'required' => false));
            }
            if ($EtapeQuestionnaire == 'modifiable') {
                $form->add('idDdqContrat', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'class' => 'AppBundle:DdqContrat',
                'choice_label' => 'nbheures',
                'label' => 'Contrat : Heures Hebdo',
                'placeholder' => '',
                'query_builder' => function (DdqContratRepository $repo) {
                    return $repo->getByTempsPartielQueryBuilder(true);
                }
                ), array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'horairecontrat',
                    'label' => 'coucou : Heures Hebdo',
                    'placeholder' => '',
                    'query_builder' => function (DdqContratRepository $repo) {
                        return $repo->getByTempsPartielQueryBuilder(true);
                    }
                ));
            }

            ####REPARTITION###
            if ($EtapeQuestionnaire == 'modifiable') {

                /*         $form ->add('idDdqRepartition', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                             'class' => 'AppBundle:DdqContrat',
                             'choice_label' => 'nbjours',
                             'label' => 'Contrat : Nombre de jours',
                             'placeholder' => '',
                             'query_builder' => function (DdqContratRepository $repo) {

                                 return $repo->getByTempsPartielQueryBuilder(true);
                             }
                         ));*/

//                $form ->add('idDdqContrat', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
//                    'class' => 'AppBundle:DdqRepartition',
//                    'choice_label' => 'nbjours',
//                    'label' => 'Contrat : Heures Hebdo',
//                    'placeholder' => '',
//                    'query_builder' => function (DdqContratRepartitionRepository $repo) {
//                        $data = $repo->getData();
//                        ($contrat = $data->getIdDdqContrat()->getId());
//                        return $repo->findByRepartition($contrat);
//                    }
//                ));

                /*  $form ->add('idDdqRepartition', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                      'class' => 'AppBundle:DdqRepartition',
                      'choice_label' => 'repartition',
                      'label' => 'Repartition contrat : ',
                      'placeholder' => '',
                      'query_builder' => function (DdqRepartitionRepository $repo) {
                          return $repo->createQueryBuilder('s')
                              ->select('s.id');
                          // return $repo->findByRepartitionQueryBuilder(0);

                      }
                  ));*/

                //  $form->add('idDdqRepartition', 'Symfony\Component\Form\Extension\Core\Type\IntegerType',(array('label'=>'COUCOU')));
            }
            if ($EtapeQuestionnaire == 'modifiable') {
                $form->add('lundim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('lundiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('mardim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('mardiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('mercredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('mercrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('jeudim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('jeudiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('vendredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('vendrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Signature', 'value' => 'toto', 'required' => true));

            }
        });
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DdqQuestionnaireTp'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cnamts_AppBundle_ddqquestionnairetp';
    }


}
