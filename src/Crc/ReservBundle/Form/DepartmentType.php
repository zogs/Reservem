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


class DepartmentType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array(
                'label' => "Nom complet de la composante",
                ))
            ->add('acronyme','text',array(
                'label' => "Acronyme",                     
                ))
            ->add('address','text',array(
                'label' => "Adresse",        
                ))
            ->add('description','textarea',array(
                'label'=>"Description",
                ))
           ->add('logo','image_type',array(

                ))
           ->add('submit','submit',array(
                'label' => "Envoyer"
                ))
        ;

    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'department_form';
    }
}
