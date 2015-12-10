<?php

namespace Crc\ReservBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Security\Core\SecurityContext;


class AddDevicesType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('department','entity',array(
                'class' => 'CrcReservBundle:Department',
                'choice_label' => 'name'
                ))
            ->add('type','text',array(
                'label' => "Type de l'équipement",
                'attr' => array(
                    'placeholder' => "Sonde, Pluvio, Abri, ...",
                    )
                ))
            ->add('model','text',array(
                'label' => "Modèle",
                'required' => false,
                'attr' => array(
                    'placeholder' => "Sonde, Pluvio, Abri, ...",
                    )
                ))
            ->add('code','text',array(
                'label' => "Code d'identification",     
                'attr' => array(
                    'placeholder' => "Abbreviation entre 3 et 5 lettres",
                    )         
                ))
            ->add('description','textarea',array(
                'label'=>"Description",
                'required' => false,
                'attr' => array(
                    'placeholder' => "Description de l'équipement",
                    )  
                ))   
            ->add('quantity','text',array(
                'label' => 'Quantité',
                'mapped' => false,
                'attr' => array(
                    'placeholder' => "Quantité à créer",
                    )  
                ))   
          
        ;

    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'add_devices_form';
    }
}
