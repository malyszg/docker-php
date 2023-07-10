<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OthersType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                'Opcja1' => '1',
                'Opcja2' => '2',
                'Opcja3' => '3',
                'Opcja4' => '4'
            ],
            'expanded' => true,
            'multiple' => true
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }
}