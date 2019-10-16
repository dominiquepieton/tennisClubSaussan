<?php

namespace App\Form;

use App\Form\ApplicationType;
use App\Entity\ResgistrationStage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AdminRegistrationStageType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, $this->getConfiguration('prénom', "Entrez le prénom de l'adhérent..."))
            ->add('lastname', TextType::class, $this->getConfiguration('nom', "Entrez le nom de l'adhérent..."))
            ->add('age', IntegerType::class, $this->getConfiguration('age', "Entrez l'age de l'enfant..."))
            ->add('titleStage', TextType::class, $this->getConfiguration('titre du stage', "Entrez le titre du stage..."))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResgistrationStage::class,
        ]);
    }
}
