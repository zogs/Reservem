<?php

namespace Zogs\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZogsCommentBundle:Default:index.html.twig', array('name' => $name));
    }
}
