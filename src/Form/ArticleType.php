<?php

namespace App\Form;

use App\Entity\Article;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, $this->getConfiguration("Titre", "Entrez un titre"))
            ->add('slug',TextType::class, $this->getConfiguration("evenement", "nom d'evenement"))
            ->add('intro',TextType::class, $this->getConfiguration("Introduction limite de 255 caractéres maximun", "Entrez un résumé de l'article"))
            ->add('content',TextareaType::class, $this->getConfiguration("contenu", "Entrez votre texte pour l'article"))
            ->add('dateCreated',DateType::class, [
                'widget' => 'single_text',
                'label' => 'date du jour'
                ])
            ->add('image',UrlType::class, $this->getConfiguration("Image :", "Entrez une url des votre image"));
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
