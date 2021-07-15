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
        $headers = [
            "Accept: application/json",
            "Content-Type: application/json",

        ];

        $data = [
            "email" => "admin@admin.com",
            "password" => "123456",
            "device_token" => "kd",
            "role" => "admin"
        ];


        $ch = curl_init("http://api.assanti.ml/mobileapp_api/SuperAdmin/login" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $return = curl_exec($ch);
        $json_data = json_decode($return, true);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $data = $json_data['msg'];


        dump($json_data); exit;

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