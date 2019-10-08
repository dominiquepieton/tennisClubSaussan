<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ReservationType extends AbstractType
{
    /**
     *  permet d'avoir une configuration de base d'un champ
     * 
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    private function getConfiguration ($label, $placeholder){
        return [
            'label' => $label,
            'attr'  => [
                'placeholder' => $placeholder
            ]
        ];
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, $this->getConfiguration("Nom :", "Entrez votre nom"))
            ->add('jour',IntegerType::class, $this->getConfiguration('Jour :',"Entrez la date du jour"))
            ->add('semaine',IntegerType::class, $this->getConfiguration("Semaine", "Entrez le numero de semaine"))
            ->add('heureDebut',IntegerType::class, $this->getConfiguration("Heure de début :", "Entrez l'heure de début"))
            ->add('heureFin',IntegerType::class, $this->getConfiguration("Heure de fin :", "Entrez l'heure de fin"))
            ->add('terrain',IntegerType::class, $this->getConfiguration("Terrain","Entrez le numero du terrain"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
