<?php

namespace App\Form;

use App\Entity\Contact;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminContactType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, $this->getConfiguration('prénom','Entrez votre prénom...'))
            ->add('lastname',TextType::class, $this->getConfiguration('nom','Entrez votre nom...'))
            ->add('email',EmailType::class, $this->getConfiguration('email','Entrez votre email...'))
            ->add('message',TextareaType::class, $this->getConfiguration('message : 255 mots maximun', 'entrez votre message...'))
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'date du jour'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
