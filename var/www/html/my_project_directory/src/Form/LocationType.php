<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Required;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('postcode', TextType::class, [
                'label' => 'Kod pocztowy',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '__-___'
                ],
                'constraints' => [
                    new Regex('/^[0-9]{2,2}\-[0-9]{3,3}$/', 'Nieprawidłowy format kodu pocztowego'),
                    new NotBlank(null,' Pole nie może być puste'),
                ]
            ])
            ->add('country', ChoiceType::class, [
                    'choices' => $this->getCountryList(),
                    'label' => 'Kraj',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add('voivodeship', ChoiceType::class, [
                    'choices' => ['--wybierz--' => null],
                    'label' => 'Województwo',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add('city_district', ChoiceType::class, [
                    'choices' => ['--wybierz--' => null],
                    'label' => 'Miasto/Gmina',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add('others', OthersType::class, [
                    'label' => 'Opcje',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add('submit', SubmitType::class, [
                'label' => 'Wyślij',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

    private function getCountryList()
    {
        return [
            'Polska' => "PL",
            'Ukraina' => "UKR"
        ];
    }
}
