<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Project\InsectBundle\Entity;

/**
 * Description of Friendship
 *
 * @author MeD
 */
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="friendship")
 */

class Friendship {
     
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    // ...
    /**
     * @var Insect
     * @ORM\ManyToOne(targetEntity="Insect", inversedBy="friendRequests")
     * @ORM\JoinColumn(name="friend_of", referencedColumnName="id")
     */
    private $friendOf;
    
   
    /**
     * @ORM\Column(type="integer")
     */
    private $friendTo;
    /**
     * @var string
     *
     * @ORM\Column(type="string",length=255)
     */
    private $isFriend ='waiting';
 
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friendSince", type="datetime")
     */
    private $friendSince;
    
    function getId() {
        return $this->id;
    }

    function getIsFriend() {
        return $this->isFriend;
    }

    function getFriendSince() {
        return $this->friendSince;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIsFriend($isFriend) {
        $this->isFriend = $isFriend;
    }

    function setFriendSince(\DateTime $friendSince) {
        $this->friendSince = $friendSince;
    }
    
    function getFriendOf() {
        return $this->friendOf;
    }

    function getFriendTo() {
        return $this->friendTo;
    }

    function setFriendOf($friendOf) {
        $this->friendOf = $friendOf;
    }

    function setFriendTo($friendTo) {
        $this->friendTo = $friendTo;
    }



}
