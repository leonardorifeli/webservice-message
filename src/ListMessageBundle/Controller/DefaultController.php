<?php

namespace ListMessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ListMessageBundle:Default:index.html.twig');
    }
}
