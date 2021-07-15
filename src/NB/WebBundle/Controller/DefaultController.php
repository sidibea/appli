<?php

namespace NB\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NBWebBundle:Default:index.html.twig');
    }
}
