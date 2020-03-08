<?php

namespace App\Form;

use App\Entity\AccueilEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AccueilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name' , TextType::class, [
                'label' => false,
                'attr' => ["placeholder" => "Votre nom"]
            ])
            ->add('submit',SubmitType::class, [
                'attr'=> ["class" => 'btn btn-primary']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Accueil::class,
        ]);
    }
}
