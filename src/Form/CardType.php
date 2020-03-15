<?php

namespace App\Form;

use App\Entity\Card;
use App\Entity\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('Attack')
            ->add('Healthpoint')
            ->add('Defense')
            ->add('Cost')
            ->add('Type', EntityType::class, [
                'class'=> Type::class,
                'choice_label' =>'TypeName'
            ])
            ->add('add', SubmitType::class, [
                'label'=> 'Create Card',
                'attr' => [
                    'class'=>'btn btn-primary'
                ]
            ])   
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }
}