<?php

namespace NB\CoreBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BienType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeDeBien', ChoiceType::class, array(
                'choices' => array(
                    'Appartement' => 'Appartement',
                    'Maison individuelle' => 'Maison individuelle',
                    'Studio' => 'Studio',
                    'Local professionnel' => 'Local professionnel',
                    'Commerce' => 'Commerce',
                    'Bureaux' => 'Bureaux',
                    'Chambre' => 'Chambre',
                    'Entrepot' => 'Entreprot',
                    'Atelier' => 'Atelier',
                    'Chalet' => 'Chalet',
                    'Bureau partagé' => 'Bureau partagé'
                ),
                'expanded' => false,
                'required' => true,
                'placeholder' => '---',
            ))
            ->add('quartier', ChoiceType::class, array(
                'choices' => array(
                    'Hamdallaye ACI' => 'Hamdallaye ACI',

                ),
                'expanded' => false,
                'required' => true,
                'placeholder' => '---',
            ))
            ->add('identifiant',TextType::class,array(
                'required' =>true
            ))
            ->add('adresse',TextareaType::class,array(
                'required' =>true
            ))
            ->add('batiment',TextType::class,array(
                'required' =>false
            ))
            ->add('escalier',TextType::class,array(
                'required' =>false
            ))
            ->add('etage',TextType::class,array(
                'required' =>false
            ))
            ->add('numPorte',TextType::class,array(
                'required' =>false
            ))
            ->add('ville', ChoiceType::class, array(
                'choices' => array(
                    'Bamako' => 'Bamako',

                ),
                'expanded' => false,
                'required' => true,
                'placeholder' => '---',
            ))
            ->add('codePostal',TextType::class,array(
                'required' =>false
            ))
            ->add('superficie',TextType::class,array(
                'required' =>false
            ))
            ->add('nbreDePiece',IntegerType::class,array(
                'required' =>false
            ))
            ->add('nbreDeChambre',IntegerType::class,array(
                'required' =>false
            ))
            ->add('anneeDeConstruction',TextType::class,array(
                'required' =>false
            ))
            ->add('description', TextareaType::class, array(

            ))
            ->add('note', TextareaType::class, array(

            ))
            ->add('typeDeLocationPropose', ChoiceType::class,array(
                'choices' => array(
                    'Meublée' => 'Meublée',
                    'vide' => 'vide',
                    'Saisonnière' => 'Saisonnière',
                ),

                'required' =>false
            ))
            ->add('dureeMinimaleDeLocation',IntegerType::class,array(
                'required' =>false
            ))
            ->add('loyerHc',TextType::class,array(
                'required' =>false
            ))
            ->add('charge',TextType::class,array(
                'required' =>false
            ))
            ->add('typeHabitat', ChoiceType::class,array(
                'choices' => array(
                    'Immeuble collectif' => 'Immeuble collectif',
                    'Immeuble individuel' => 'Immeuble individuel',
                ),

                'required' => false,
                'expanded' => true,
            ))

            ->add('regimeJuridique', ChoiceType::class,array(
                'choices' => array(
                    'Copropriété' => 'Copropriété',
                    'Mono propriété' => 'Mono propriété',
                ),
                'expanded' => true,
                'required' => false
            ))
            ->add('designationsDesParties', EntityType::class, [
                'class'        => 'NBCoreBundle:DesignationPartie',
                'choice_label' => 'identifiant',
                'expanded'     => true,
                'multiple'     => true,
            ])
            ->add('nomDuCentreImpot',TextType::class,array(
                'required' =>false
            ))
            ->add('adresses',TextareaType::class,array(
                'required' =>false
            ))



            ->add('proprietaire', EntityType::class, array(
                'class' => 'NBCoreBundle:Agent',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.prenom', 'ASC');
                },
                'choice_label' => 'fullName',
                'placeholder' => 'Choisisser un proprietaire',
            ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NB\CoreBundle\Entity\Bien'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nb_corebundle_bien';
    }


}
