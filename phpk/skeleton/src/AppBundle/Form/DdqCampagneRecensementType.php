<?php

namespace AppBundle\Form;

use AppBundle\Repository\DdqCategorieRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DdqCampagneRecensementType extends AbstractType
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
                'query_builder' => function (DdqCategorieRepository $er) {
                    return $er->createQueryBuilder('u')->Where('u.id=4');

                },
                'choice_label' => 'libelle', 'label' => 'Type de campagne', 'choice_value' => 'ID'
            ))
            ->add('syndicat', 'Symfony\Component\Form\Extension\Core\Type\TextType', array('label' => 'syndicat', 'required' => true))
            ->add('journee', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('required' => false,))
            ->add('demijournee', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('value' => 1, 'required' => false))
            ->add('heure', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('value' => 1, 'required' => false));

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
        return 'cnamts_AppBundle_DdqcampagneRecensement';
    }

}