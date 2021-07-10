<?php
/**
 * Created by PhpStorm.
 * User: sidibea
 * Date: 7/10/21
 * Time: 14:14
 */

namespace NB\AdminBundle\Controller;


use NB\CoreBundle\Entity\Agent;
use NB\CoreBundle\Form\AgentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AgentController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('NBCoreBundle:Agent')->findAll();


        return $this->render('NBAdminBundle:agent:list.html.twig', [
            'list' => $list
        ]);

    }


    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $agent = new Agent();

        $form = $this->createForm(AgentType::class, $agent);

        if($form->handleRequest($request)->isValid()){
            $agent->setCreatedAt(new \datetime);
            $agent->setUpdatedAt(new \datetime);

            $em->persist($agent);
            $em->flush();

            return $this->redirectToRoute('admin_agent_index');
        }



        return $this->render('NBAdminBundle:agent:new.html.twig', [
            'form' => $form->createView()
        ]);
    }
    public function editAction(Agent $agent, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $form = $this->createForm(AgentType::class, $agent);

        if($form->handleRequest($request)->isValid()){
            $agent->setUpdatedAt(new \datetime);

            $em->flush();

            return $this->redirectToRoute('admin_agent_index');
        }



        return $this->render('NBAdminBundle:agent:edit.html.twig', [
            'form' => $form->createView(),
            'agent' => $agent
        ]);
    }

    public function deleteAction(Agent $agent, Request $request){

        $em = $this->getDoctrine()->getManager();

        $em->remove($agent);
        $em->flush();
        return $this->redirectToRoute('admin_agent_index');


    }

}