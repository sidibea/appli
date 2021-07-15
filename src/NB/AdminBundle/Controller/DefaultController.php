<?php

namespace NB\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NBAdminBundle:Default:index.html.twig');
    }
}
