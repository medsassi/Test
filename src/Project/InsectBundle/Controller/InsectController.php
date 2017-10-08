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

/**
 * Description of InsectController
 *
 * @author MeD
 */
class InsectController  extends Controller
{
    public function listAction()
    {
        
        $insect = $this->getUser();
        $insectFriends = $insect->getFriends();
        return $this->render('ProjectInsectBundle:Insect:InsectList.html.twig', array(
            'entities' => $insectFriends,
        ));
        
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
    
    public function addAction($id)
    {
    
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $insectToAdd = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $friendRequests = $insect->getFriendRequests();
        
        //recherche de la demande d'ami
        foreach ($friendRequests as &$friendRequest) {
        if(($friendRequest->getFriendOf() == $insect)&&($friendRequest->getFriendTo()== $id))
        {
        $request = $friendRequest;
        }
        }
        
        //ajout d'ami et changement statut demande
        $insect->addFriend($insectToAdd);
        $request->setIsFriend('accepted');
        $em->persist($insect);
        $em->persist($request);
        $em->flush();
        
        $insectFriends = $insect->getFriends();
        
        return $this->render('ProjectInsectBundle:Insect:InsectList.html.twig', array(
            'entities' => $insectFriends,
        ));
        
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $insectToRemove = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $friendRequests = $insect->getFriendRequests();
        
        //recherche de la demande d'ami
        foreach ($friendRequests as &$friendRequest) {
        if(($friendRequest->getFriendOf() == $insect)&&($friendRequest->getFriendTo()== $id))
        {
        $request = $friendRequest;
        }
        }
        
        $insect->removeFriend($insectToRemove);
        $insect->removeFriendRequest($request);
        $em->persist($insect);
        $em->persist($request);
        $em->flush();
       
        
        $insectFriends = $insect->getFriends();
        

        return $this->render('ProjectInsectBundle:Insect:InsectList.html.twig', array(
            'entities' => $insectFriends,
        ));
        
    }
}
