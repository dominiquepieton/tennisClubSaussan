<?php

namespace App\Form;

use App\Entity\Adherent;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends ApplicationType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, $this->getConfiguration("Prénom", "Votre prénom..."))
            ->add('lastName',TextType::class, $this->getConfiguration("Nom", "Votre nom de famille..."))
            ->add('email',EmailType::class, $this->getConfiguration("Nom", "Votre adresse email..."))
            ->add('picture',UrlType::class, $this->getConfiguration("Avatar de profil", "Url de votre avatar..."))
            ->add('hash',PasswordType::class, $this->getConfiguration("Mot de passe", "Choisissez un bon mot de passe..."))
            ->add('passwordConfirm', PasswordType::class, $this->getConfiguration("Confirmation du mot de passe", "Veuillez confirmez votre mot de passe..."));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adherent::class,
        ]);
    }
}
