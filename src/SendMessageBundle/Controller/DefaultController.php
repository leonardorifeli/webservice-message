<?php

namespace SendMessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SendMessageBundle:Default:index.html.twig');
    }
}
