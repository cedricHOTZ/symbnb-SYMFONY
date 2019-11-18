<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;


class ApplicationType extends AbstractType
{

/**
 * permet d'ajouter le label et placeholder
 */
protected function getConfiguration($label,$placeholder,$options = []){

    return array_merge([
        'label' =>$label,
        'attr' =>[
            'placeholder' => $placeholder
          ]
        ],$options);
    }
}