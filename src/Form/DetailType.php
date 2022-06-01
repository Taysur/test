<?php

namespace App\Form;


use App\Entity\Propr;
use App\Entity\Demande;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Shapecode\Bundle\HiddenEntityTypeBundle\Form\Type\HiddenEntityType;

class DetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            
     


        ->add('email', TextType::class,   [
               
            'attr' => [ 'placeholder' => 'Email',
          
           
           

            ],
        ])
           

          


            ->add('message' , TextareaType::class,[       
                
                'row_attr' => array('cols' => '5', 'rows' => '5') ,
                
                'attr' => [ 'placeholder' => 'Message',
                ]   ,
                
                
             ] ) 



            ->add('propriete', HiddenEntityType::class, array(
                'class' => Propr::class
                
                ) )


            
        ;


       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
