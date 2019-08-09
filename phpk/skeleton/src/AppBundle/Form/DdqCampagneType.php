<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DdqCampagneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'Symfony\Component\Form\Extension\Core\Type\TextType', array('label' => 'Libellé'))
            ->add('datedebut', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('label' => 'Date de début', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('datefin', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('label' => 'Date de fin', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('idDdqCategorie', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'class' => 'AppBundle:DdqCategorie',
                'choice_label' => 'libelle', 'label' => 'Type de campagne'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DdqCampagne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cnamts_AppBundle_Ddqcampagne';
    }


}
