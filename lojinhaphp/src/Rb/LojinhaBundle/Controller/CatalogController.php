<?php

namespace Rb\LojinhaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function indexAction()
    {


        return $this->render('RbLojinhaBundle:Catalog:index.html.twig');
    }
}
