<?php

namespace App\Form;

use App\Form\ApplicationType;
use App\Entity\PreRegistration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdminPreRegistrationType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, $this->getConfiguration('Prénom', 'Entrez le Prénom....'))
            ->add('lastname', TextType::class, $this->getConfiguration('Nom', 'Entrez le Nom de famille...'))
            ->add('birthday', DateType::class, [
                'widget' => 'single_text',
                'label' => 'date de naissance'
                ])
            ->add('email', TextType::class, $this->getConfiguration('Email','Entrez un email valide...'))
            ->add('aptSport', ChoiceType::class, [
                'choices'  => [
                    'apte' => null,
                    'Oui' => true,
                    'Non' => false
                ],
                ])
            ->add('lastnameResponsable', TextType::class, $this->getConfiguration('Nom du Responsable légale', 'Entrez le nom...'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PreRegistration::class,
        ]);
    }
}
