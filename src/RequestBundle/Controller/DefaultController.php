<?php

namespace RequestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RequestBundle:Default:index.html.twig');
    }
}
