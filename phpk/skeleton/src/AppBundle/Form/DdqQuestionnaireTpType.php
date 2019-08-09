<?php

namespace AppBundle\Form;

use AppBundle\Repository\DdqContratRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DdqQuestionnaireTpType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateenfant1', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('dateenfant2', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('dateenfant3', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('dateenfant4', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('motif', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array('attr' => array('placeholder' => 'Expliquez votre demande de contrat à temps partiel. 255 caractères max...')))
            ->add('lundi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Lundi', 'required' => false))
            ->add('mardi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mardi', 'required' => false))
            ->add('mercredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mercredi', 'required' => false))
            ->add('jeudi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Jeudi', 'required' => false))
            ->add('vendredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Vendredi', 'required' => false))
            ->add('idDdqContrat', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'class' => 'AppBundle:DdqContrat',
                'choice_label' => 'nbheures',
                'label' => 'Contrat : Heures Hebdo',
                'placeholder' => '',
                'query_builder' => function (DdqContratRepository $repo) {
                    return $repo->getByTempsPartielQueryBuilder(true);
                }
            ))
            ->add('lundim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'required' => false))
            ->add('lundiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'required' => false))
            ->add('mardim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'required' => false))
            ->add('mardiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'required' => false))
            ->add('mercredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'required' => false))
            ->add('mercrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'required' => false))
            ->add('jeudim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'required' => false))
            ->add('jeudiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'required' => false))
            ->add('vendredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'required' => false))
            ->add('vendrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'required' => false))
            ->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => true))
            ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Signature'));
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
