<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ReservationType extends ApplicationType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, $this->getConfiguration("Nom :", "Entrez votre nom"))
            ->add('jour',DateType::class, [
                'widget' => 'single_text',
                'label' => 'date du jour'
                ])
            ->add('heureDebut',IntegerType::class, $this->getConfiguration("Heure de début :", "Entrez l'heure de début"))
            ->add('heureFin',IntegerType::class, $this->getConfiguration("Heure de fin :", "Entrez l'heure de fin"))
            ->add('terrain',IntegerType::class, $this->getConfiguration("Terrain","Entrez le numero du terrain de 1 à 3"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
