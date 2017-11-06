<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\InsectBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use Nelmio\CorsBundle\NelmioCorsBundle;
use Project\InsectBundle\Entity\Insect;
use FOS\RestBundle\Controller\Annotations\RequestParam;

/**
 * Description of InsectController
 *
 * @author MeD
 */
class InsectController  extends Controller
{
 
    /**
     * @Rest\Post("/api/login")
     */
    public function postLoginAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $password = $data["password"];
        $login = $data["login"];
        $factory = $this->get('security.encoder_factory');
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('ProjectInsectBundle:Insect')->findBy(array('username' => $login));
        if(count($users) == 0) {
            return new JsonResponse();
        }
        $encoder = $factory->getEncoder($users[0]);
        $bool = ($encoder->isPasswordValid($users[0]->getPassword(), $password, $users[0]->getSalt())) ? "true" : "false";
        //return new JsonResponse($bool ? array('token' => base64_encode($login)) : 'nothing') ;
        if($bool && count($users) == 1) {
            $user = [
                'id' => $users[0]->getId(),
                'name' => $users[0]->getUserName(),
                'email' => $users[0]->getEmail(),
                'password' => $users[0]->getPassword(),
            ];
            return new JsonResponse(array('token' => base64_encode(json_encode($user))));
        }
        return new JsonResponse($bool);
    }
    
    /**
     @Rest\Get("/api/friends")
    */
    public function getListAction(Request $request)
    {
        $user = $this->getConnected($request->headers->get('token'));
        if ($user == null) {
            return new Response("", Codes::HTTP_FORBIDDEN);
        }
        
        $em = $this->getDoctrine()->getManager();
        $CurrentUser = $em->getRepository('ProjectInsectBundle:Insect')->find($user['id']);
        
        $insectFriends = $CurrentUser->getFriends();
        
        $formatted = [];
        foreach ($insectFriends as $insectFriend) {
            $formatted[] = [
                'id' => $insectFriend->getId(),
               'name' => $insectFriend->getUserName(),
              
            ];
        }

        $viewHandler = $this->get('fos_rest.view_handler');
        $view = View::create($formatted);
        $view->setFormat('json');
        return $viewHandler->handle($view);
    }
    
     /**
     @Rest\Get("/api/list")
    */
    public function getListAllAction(Request $request)
    {
         $user = $this->getConnected($request->headers->get('token'));
        if ($user == null) {
            return new Response("", Codes::HTTP_FORBIDDEN);
        }
        $em = $this->getDoctrine()->getManager();
        $CurrentUser = $em->getRepository('ProjectInsectBundle:Insect')->find($user['id']);
        $insectFriends =  $CurrentUser->getFriends();
        $users = $em->getRepository('ProjectInsectBundle:Insect')->findAll();
      
        
        $formatted = [];
        foreach ($users as $user) {
            if(!in_array($user, $insectFriends))
            {
            $formatted[] = [
                'id' => $user->getId(),
               'name' => $user->getUserName(),
              
            ];
            }
        }

        $viewHandler = $this->get('fos_rest.view_handler');
        $viewALL = View::create($formatted);
        $viewALL->setFormat('json');
        return $viewHandler->handle($viewALL);

        
    }
    
    /**
     * @Rest\Post("/api/addFriend")
     */
    public function addAction(Request $request)
    {
       
        $user = $this->getConnected($request->headers->get('token'));
        if ($user == null) {
            return new Response("", Codes::HTTP_FORBIDDEN);
        }
        
        $em = $this->getDoctrine()->getManager();
        $CurrentUser = $em->getRepository('ProjectInsectBundle:Insect')->find($user['id']);
        
        $body = $request->getContent();
        $data = json_decode($body, true);
        $id = $data['id'] ;
        $insectToAdd = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $CurrentUser->addFriend($insectToAdd);
        $em->persist($CurrentUser);
        $em->flush();
        
        return new Response("ajoute");

    }
    
   /**
     * @Rest\DELETE("/api/deleteFriend/{id}")
     */
    public function deleteAction($id,Request $request)
    {
         $user = $this->getConnected($request->headers->get('token'));
        if ($user == null) {
            return new Response("", Codes::HTTP_FORBIDDEN);
        }
        
        $em = $this->getDoctrine()->getManager();
        $CurrentUser = $em->getRepository('ProjectInsectBundle:Insect')->find($user['id']);
        $insectToRemove = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $CurrentUser->removeFriend($insectToRemove);
        $em->persist($CurrentUser);
        $em->flush();


        return new Response("supprime");

    }
    
     /**
     * @Rest\Get("/api/connectedUser")
     */
    public function getConnectedUserAction(Request $request) {
        $token = $request->headers->all()['token'];
        $user = $this->getConnected($token[0]);
        return new JsonResponse($user);
    }
    private function getConnected($token) {
        $em = $this->getDoctrine()->getManager();
        $username = json_decode(base64_decode($token))->{'name'};
        $users = $em->getRepository('ProjectInsectBundle:Insect')->findBy(array('username' => $username));
        if(count($users) != 1) {
            return null;
        }
        return [
            'id' => $users[0]->getId(),
            'name' => $users[0]->getUserName(),
            'email' => $users[0]->getEmail(),
            'password' => $users[0]->getPassword(),
        ];
    }

}
