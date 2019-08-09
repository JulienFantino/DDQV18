<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class DdqQuestionnaireParkingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enfants', CheckboxType::class, array('label' => 'Au titre des enfants à charge de moins de 19 ans', 'required' => false))
            ->add('handicap', CheckboxType::class, array('label' => 'Au titre du statut de travailleur handicapé', 'required' => false))
            ->add('emploi', CheckboxType::class, array('label' => 'Au titre de l\'emploi d\'agent d\'accueil', 'required' => false))
            ->add('adresse', TextareaType::class, array('attr' => array('placeholder' => 'votre adresse postale')))
            ->add('enfant1', TextType::class, array('required' => false, 'attr' => array('placeholder' => 'Nom Prénom')))
            ->add('datenaissance1', DateType::class, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('enfant2', TextType::class, array('required' => false, 'attr' => array('placeholder' => 'Nom Prénom')))
            ->add('datenaissance2', DateType::class, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('enfant3', TextType::class, array('required' => false, 'attr' => array('placeholder' => 'Nom Prénom')))
            ->add('datenaissance3', DateType::class, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('enfant4', TextType::class, array('required' => false, 'attr' => array('placeholder' => 'Nom Prénom')))
            ->add('datenaissance4', DateType::class, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('datemodif', DateType::class, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime()))
            ->add('signature', CheckboxType::class, array('label' => 'Signature'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DdqQuestionnaireParking'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cnamts_appbundle_Ddqquestionnaireparking';
    }


}
