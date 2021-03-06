<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;


class ApplicationType extends AbstractType {

     /**
     *  permet d'avoir une configuration de base d'un champ
     * 
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    protected function getConfiguration ($label, $placeholder){
        return [
            'label' => $label,
            'attr'  => [
                'placeholder' => $placeholder
            ]
        ];
    }


    
}