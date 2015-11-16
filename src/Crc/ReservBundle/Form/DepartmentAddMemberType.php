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
use Doctrine\ORM\EntityRepository;

use Zogs\UtilsBundle\Form\DataTransformer\DateToDatetimeTransformer;
use Zogs\UserBundle\Entity\User;

class DepartmentAddMemberType extends AbstractType
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
        $builder->add('user','entity',array(
                'class' => 'ZogsUserBundle:User',
                'choice_label' => 'username',
                'mapped' => false,               
            ))
            ->add('save','submit',array(
                        'label' => 'Ajouter cet utilisateur',
                        'attr' => array(
                                'class' => 'btn btn-primary'
                            )
                ))
        ;

        $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onSetData'));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));

    }

    public function onSetData(FormEvent $event) 
    {
        $form = $event->getForm();
        $user = $event->getData();


    }

     public function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'allow_extra_fields' => true,
        ));
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'department_add_member';
    }
}
