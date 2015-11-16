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

use Zogs\UtilsBundle\Form\DataTransformer\DateToDatetimeTransformer;

class DeviceType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','text',array(
                'label' => "Type de l'équipement",
                'attr' => array(
                    'placeholder' => "Sonde, Pluvio, Abri, ...",
                    )
                ))
            ->add('code','text',array(
                'label' => "Code d'itentification",     
                'attr' => array(
                    'placeholder' => "SRH001,ABRI002,...",
                    )         
                ))
            ->add('model','text',array(
                'label' => "Modèle",   
                'required' => false,  
                'attr' => array(
                    'placeholder' => "",
                    )         
                ))
            ->add('status','text',array(
                'label' => "Statut", 
                'required' => false,    
                'attr' => array(
                    'placeholder' => "libre,reserved,repairing,...",
                    )         
                ))
            ->add('comment','textarea',array(
                'label'=>"Commentaire sur l'appareil ou l'utilisation",
                'required' => false,
                'attr' => array(
                    'placeholder' => "Appareil en bon état, sur le terrain pour projet NOMPROJET",
                    )
                ))      
           ->add('submit','submit',array(
                'label' => "Envoyer"
                ))
        ;

    }

        /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crc\ReservBundle\Entity\Device'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'device_form';
    }
}
