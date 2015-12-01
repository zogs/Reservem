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
use Zogs\UserBundle\Entity\User;

class ReservationDevicesType extends AbstractType
{
     public function __construct(SecurityContext $secu)
    {
        $this->user = $secu->getToken()->getUser();
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array(
                'attr' => array(
                    'placeholder' => "Donner un nom à votre réservation",
                    'autocomplete' => 'off',
                    )
                ))
            ->add('comment','text',array(
                'required' => true,
                'attr' => array(
                    'placeholder' => "Descriptif du projet, localisation des équipements, etc...",
                    'autocomplete' => 'off',
                    )
                ))

            ->add($builder->create('date_begin', 'text', array(
                'required'=>true,
                'attr' => array(
                    'class' => 'with_date_picker',
                    'autocomplete' => 'off',
                    ),
                ))->addModelTransformer(new DateToDatetimeTransformer('d/m/Y'))
            )
           ->add($builder->create('date_end', 'text', array(
                'required'=>true,
                'attr' => array(
                    'class' => 'with_date_picker',
                    'autocomplete' => 'off',
                    ),
                ))->addModelTransformer(new DateToDatetimeTransformer('d/m/Y'))
            )      

        ;

        $builder->addEventListener(FormEvents::POST_SUBMIT, array($this, 'onPostSubmit'));

    }

     public function onPostSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $reserv = $event->getData();

        if( $this->user instanceof User) {
            //Set the current user 
            $reserv->setUser($this->user);
            
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crc\ReservBundle\Entity\Reservation'
        ));
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'reservation_form';
    }
}
