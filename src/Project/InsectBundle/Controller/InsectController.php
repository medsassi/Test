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
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use Nelmio\CorsBundle\NelmioCorsBundle;
use Project\InsectBundle\Entity\Insect;

/**
 * Description of InsectController
 *
 * @author MeD
 */
class InsectController  extends Controller
{
 
 
    /**
     @Rest\Get("/api/friends")
    */
    public function getListAction()
    {
       //  $em = $this->getDoctrine()->getManager();
      //  $insect = $em->getRepository('ProjectInsectBundle:Insect')->find(24);
        // $insect = $this->get('security.token_storage')->getToken()->getUser();;  
         
       //  $insect = $em->getRepository('ProjectInsectBundle:Insect')->find(24);   
         $insect = $this->getUser();
        $insectFriends = $insect->getFriends();
        
        $formatted = [];
        foreach ($insectFriends as $insectFriend) {
            $formatted[] = [
                'id' => $insectFriend->getId(),
               'name' => $insectFriend->getUserName(),
              
            ];
        }

         $viewHandler = $this->get('fos_rest.view_handler');

        // Création d'une vue FOSRestBundle
        $view = View::create($formatted);
        $view->setFormat('json');
        // Gestion de la réponse
        return $viewHandler->handle($view);

         // Récupération du view handler
    //    $viewHandler = $this->get('fos_rest.view_handler');

        // Création d'une vue FOSRestBundle
      //  $view = View::create($insectFriends);
     //   $view->setFormat('json');

        // Gestion de la réponse
     //   return $viewHandler->handle($view);
        /*return $this->render('ProjectInsectBundle:Insect:InsectList.html.twig', array(
            'entities' => $insectFriends,
        )); */
        
    }
    
     /**
     @Rest\Get("/api/list")
    */
    public function getListAllAction()
    {
         $em = $this->getDoctrine()->getManager();
       $insectFriends = $em->getRepository('ProjectInsectBundle:Insect')->findAll();
      
        
        $formatted = [];
        foreach ($insectFriends as $insectFriend) {
            $formatted[] = [
                'id' => $insectFriend->getId(),
               'name' => $insectFriend->getUserName(),
              
            ];
        }

         $viewHandler = $this->get('fos_rest.view_handler');

        // Création d'une vue FOSRestBundle
        $viewALL = View::create($formatted);
        $viewALL->setFormat('json');
        //$view->headers->set('Access-Control-Allow-Origin', '*');
        // Gestion de la réponse
        return $viewHandler->handle($viewALL);

         // Récupération du view handler
    //    $viewHandler = $this->get('fos_rest.view_handler');

        // Création d'une vue FOSRestBundle
      //  $view = View::create($insectFriends);
     //   $view->setFormat('json');

        // Gestion de la réponse
     //   return $viewHandler->handle($view);
        /*return $this->render('ProjectInsectBundle:Insect:InsectList.html.twig', array(
            'entities' => $insectFriends,
        )); */
        
    }
    
    public function searchAction(Request $request)
    {
        $entities = new ArrayCollection(); // resultat de la recherche pour les insectes amis
        $insects = new ArrayCollection(); // resultat de la recherche pour les autres insectes
        $insect = $this->getUser();
        $insectFriends = $insect->getFriends();
        
        if ('POST' === $request->getMethod()) {
        $username = $request->get('search');
        }
        
        $em = $this->getDoctrine()->getManager();
        $search = $em->getRepository('ProjectInsectBundle:Insect')->createQueryBuilder('s')
                                                                   ->Where('s.username LIKE :string')
                                                                   ->setParameter('string',"%$username%")
                                                                   ->getQuery()
                                                                   ->getResult();
        foreach ($search as &$user) {
            if(in_array($user, $insectFriends))
            {
                $entities->add($user);
            }
            else {
                $insects->add($user);
            }
        }
        return $this->render('ProjectInsectBundle:Insect:InsectListSearch.html.twig', array(
            'entities' => $entities,
            'insects' => $insects,
        ));
        
    }
    
     /**
     @Rest\Post("/api/addFriend")
    */
    public function addAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $data = json_decode($request->getContent(), true);
        $insectToAdd = $em->getRepository('ProjectInsectBundle:Insect')->find($data);
     /*   $friendRequests = $insect->getFriendRequests();
        
        //recherche de la demande d'ami
        foreach ($friendRequests as &$friendRequest) {
        if(($friendRequest->getFriendOf() == $insect)&&($friendRequest->getFriendTo()== $id))
        {
        $request = $friendRequest;
        }
        } */
        
        //ajout d'ami et changement statut demande
        $insect->addFriend($insectToAdd);
    //    $request->setIsFriend('accepted');
        $em->persist($insect);
    //    $em->persist($request);
        $em->flush();
        
        
        
       return $this->redirect($this->generateUrl('project_insect_list'));
        
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $insectToRemove = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
   //     $friendRequests = $insect->getFriendRequests();
        
        //recherche de la demande d'ami
/*        foreach ($friendRequests as &$friendRequest) {
        if(($friendRequest->getFriendOf() == $insect)&&($friendRequest->getFriendTo()== $id))
        {
        $request = $friendRequest;
        }
        } */
        
        $insect->removeFriend($insectToRemove);
  //      $insect->removeFriendRequest($request);
        $em->persist($insect);
    //    $em->persist($request);
        $em->flush();
       
        
        
        

      return $this->redirect($this->generateUrl('project_insect_list'));
        
    }
}
