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

class ExtendType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add($builder->create('date_end', 'text', array(
                'mapped' => true,
                'required'=>true,
                'attr' => array('class' => 'with_date_picker'),
                ))->addModelTransformer(new DateToDatetimeTransformer('d/m/Y'))
            )            
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
        return 'extend_reservation_form';
    }
}
