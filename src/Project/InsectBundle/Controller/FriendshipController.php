<?php

namespace Project\InsectBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Project\InsectBundle\Entity\Friendship;
/**
 * Friendship controller.
 *
 */
class FriendshipController extends Controller
{

    /**
     * Lists all Friendship entities.
     *
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = new ArrayCollection();
        $insect = $this->getUser();
        $friendRequests = $insect->getFriendRequests();
        foreach ($friendRequests as &$friendRequest) {
        if($friendRequest->getIsFriend()== 'waiting')
        {
        $id = $friendRequest->getFriendTo();
        $user = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $entities->add($user);
        }
        }
        
        return $this->render('ProjectInsectBundle:Friendship:list.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Deletes a Request.s
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $friendRequests = $insect->getFriendRequests();
        
        //recherche de la demande d'ami
        foreach ($friendRequests as &$friendRequest) {
        if(($friendRequest->getFriendOf() == $insect)&&($friendRequest->getFriendTo()== $id))
        {
        $request = $friendRequest;
        }
        }
          

            $em->remove($request);
            $em->flush();
       

        return $this->redirect($this->generateUrl('project_insect_listRequest'));
    }
    
    public function sendAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $insect = $this->getUser();
        $insectToBeFriend = $em->getRepository('ProjectInsectBundle:Insect')->find($id);
        $request = new Friendship();
        $request->setFriendOf($insectToBeFriend);
        $request->setFriendTo($insect->getId());
        $em->persist($request);
        $em->flush();
       
       
        return $this->redirect($this->generateUrl('project_insect_homepage'));
    }
}