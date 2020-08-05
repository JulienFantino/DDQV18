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

                $form->add('dateenfant1', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant2', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant3', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('dateenfant4', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                    ->add('motif', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array('attr' => array('placeholder' => 'Expliquez votre demande de contrat à temps partiel. 255 caractères max...')));


            if ($EtapeQuestionnaire == 'etape5' || $EtapeQuestionnaire == 'etape4' || $EtapeQuestionnaire == 'etape3' || $EtapeQuestionnaire == 'modifiable' || $EtapeQuestionnaire == 'validé N+1' || $EtapeQuestionnaire == 'validé N+2') {
                $form->add('lundi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Lundi', 'required' => false))
                    ->add('mardi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mardi', 'required' => false))
                    ->add('mercredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Mercredi', 'required' => false))
                    ->add('jeudi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Jeudi', 'required' => false))
                    ->add('vendredi', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Vendredi', 'required' => false));
            }

            if ($EtapeQuestionnaire == 'etape5' || $EtapeQuestionnaire == 'etape4' || $EtapeQuestionnaire == 'etape3' || $EtapeQuestionnaire == 'etape2' || $EtapeQuestionnaire == 'modifiable' || $EtapeQuestionnaire == 'validé N+1' || $EtapeQuestionnaire == 'validé N+2') {
                $form->add('idDdqContrat', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'class' => 'AppBundle:DdqContrat',
                    'choice_label' => 'nbheures',
                    'label' => 'Contrat : Heures Hebdo',

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


            if ($EtapeQuestionnaire == 'etape5' || $EtapeQuestionnaire == 'etape4' || $EtapeQuestionnaire == 'modifiable' || $EtapeQuestionnaire == 'validé N+1' || $EtapeQuestionnaire == 'validé N+2') {
                $form->add('lundim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('lundiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('mardim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('mardiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('mercredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('mercrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('jeudim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('jeudiam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false))
                    ->add('vendredim', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Matin', 'value' => 1, 'required' => false))
                    ->add('vendrediam', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Après-midi', 'value' => 1, 'required' => false));


            }
            if ($EtapeQuestionnaire == 'etape5' || $EtapeQuestionnaire == 'modifiable' || $EtapeQuestionnaire == 'validé N+1' || $EtapeQuestionnaire == 'validé N+2') {
                $form->add('datemodif', 'Symfony\Component\Form\Extension\Core\Type\DateType', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'data' => new \DateTime(), 'disabled' => true))
                    ->add('signature', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array('label' => 'Signature', 'value' => 'toto', 'required' => true));
            }
            /*if ($EtapeQuestionnaire == 'modifiable' || $EtapeQuestionnaire == 'validé N+1') {
                $form->add('CommentaireValideurN1', 'Symfony\Component\Form\Extension\Core\Type\TextAreaType', array('label' => 'commentaire'));

            }*/
            if ($EtapeQuestionnaire == 'validé N+1' || $EtapeQuestionnaire == 'validé N+2') {
                $form->add('CommentaireValideurN2', 'Symfony\Component\Form\Extension\Core\Type\TextAreaType', array('label' => 'commentaire'));
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
