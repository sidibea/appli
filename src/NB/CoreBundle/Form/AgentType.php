<?php

namespace NB\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('type', ChoiceType::class, [
                'placeholder' => "Selectionnez",
                'choices' => [
                    'Entreprise' => 'Entreprise',
                    'Particulier' => 'Particulier',
                ],
            ])
            ->add('raisonSociale')
            ->add('description', TextareaType::class, [
                'required' => false
            ])
            ->add('adresse', TextareaType::class)
            ->add('telephone')
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NB\CoreBundle\Entity\Agent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nb_corebundle_agent';
    }


}
