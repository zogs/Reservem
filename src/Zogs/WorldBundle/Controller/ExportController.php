<?php

namespace Zogs\WorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Zogs\WorldBundle\Entity\City;
use Zogs\WorldBundle\Entity\Location;

class ExportController extends Controller
{
 
    public function indexAction(Request $request)
    {
        $file_url = false;

        $form = $this->createFormBuilder()
            ->add('countries','entity',array(
                    'multiple'=> true,
                    'expanded'=> true,
                    'class' => 'ZogsWorldBundle:Country',
                    'property' => 'name',
                    'mapped'=> true,
                    'label' => "Select countries you want to export:",
                ))
            ->add('skipdrop','checkbox',array(
                'required'=> false,
                'label' => 'Skip drop table ?',
                ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            //get form data
            $countries = $form->get('countries')->getData();
            $skipdrop = $form->get('skipdrop')->getData();
            //get exporter
            $exporter = $this->container->get('world.exporter.sql');
            //set options
            if(true == $skipdrop) $exporter->addOption('skip-add-drop-table');
            //export and get file url
            $file_url = $exporter->exportCountries($countries);

        }

        return $this->render('ZogsWorldBundle:Export:index.html.twig',array(
            'form'=>$form->createView(),
            'file_url' => $file_url,

            ));
    }

}
