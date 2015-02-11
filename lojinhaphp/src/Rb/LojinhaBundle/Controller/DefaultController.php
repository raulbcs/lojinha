<?php

namespace Rb\LojinhaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RbLojinhaBundle:Default:index.html.twig', array('name' => $name));
    }
}
