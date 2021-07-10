<?php
/**
 * Created by PhpStorm.
 * User: sidibea
 * Date: 7/10/21
 * Time: 13:59
 */

namespace NB\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('NBAdminBundle::index.html.twig');
    }

}