<?php

namespace Zogs\CronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Zogs\CronBundle\Entity\CronTask;


class CronTaskController extends Controller
{

    public function testAction()
    {
        $entity = new CronTask();

        $entity
            ->setName('Example asset symlinking task')
            ->setInterval(3600) // Run once every hour
            ->setCommands(array(
                'assets:install --symlink web'
            ));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return new Response('OK!');
    }
}