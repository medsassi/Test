<?php

namespace Project\InsectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectInsectBundle:Home:home.html.twig');
    }
}
