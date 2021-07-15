<?php
/**
 * Created by PhpStorm.
 * User: sidibea
 * Date: 7/15/21
 * Time: 15:52
 */

namespace NB\AdminBundle\Controller;


use NB\CoreBundle\Entity\Bien;
use NB\CoreBundle\Form\BienType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BienController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('NBCoreBundle:Bien')->findAll();

        return $this->render('NBAdminBundle:bien:index.html.twig', [
            'list' => $list
        ]);
    }

    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bien = new Bien();

        $form = $this->createForm(BienType::class, $bien);

        if($form->handleRequest($request)->isValid())
        {
            $bien->setCreatedAt(new \datetime);
            $bien->setUpdateAt(new \datetime);

            $em->persist($bien);
            $em->flush();

            return $this->redirectToRoute('admin_bien_index');

        }


        return $this->render('NBAdminBundle:bien:new.html.twig', [
            'form' => $form->createView()
        ]);



    }

    public function editAction(Bien $bien, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(BienType::class, $bien);

        if($form->handleRequest($request)->isValid())
        {
            $bien->setUpdateAt(new \datetime);

            $em->flush();

            return $this->redirectToRoute('admin_bien_index');

        }


        return $this->render('NBAdminBundle:bien:edit.html.twig', [
            'form' => $form->createView()
        ]);



    }

}