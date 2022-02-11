<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Entrez votre prénom']
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom de famille',
                'attr' => ['placeholder' => 'Entrez votre nom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'Entrez votre email']
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => ['placeholder' => 'Entrez votre mot de passe']

            ])
            ->add('date_naissance', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'
            ])
            ->add('secu_social', TextType::class, [
                'label' => 'Secu Sociale',
                'attr' => ['placeholder' => 'Entrez votre numero de secu sociale']

            ])
            ->add('numero_tel', TextType::class, [
                'label' => 'Telephone',
                'attr' => ['placeholder' => 'Entrez votre numero de téléphone']

            ])
            ->add('sexe',  ChoiceType::class, [
                'choices'  => [
                    'Choisir' => null,
                    'Femme' => true,
                    'Homme' => false,
                    'Autre' => false,
                ],
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Inscription',
                'attr' => ['class' => 'btn mb-2 mb-md-0 btn-outline-dark btn-block']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
