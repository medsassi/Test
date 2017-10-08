<?php

namespace  Project\InsectBundle\Entity;

/**
 * Description of Insect
 *
 * @author MeD
 */

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="insect")
 */

class Insect extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
   /**
        * @ORM\Column(type="string",length=255)
     */
     private $description;
     
     
    /**
     * @ORM\ManyToMany(targetEntity="Insect")
      @ORM\JoinTable(name="friends",
 *      joinColumns={@ORM\JoinColumn(name="friendof", referencedColumnName="id")},
 *      inverseJoinColumns={@ORM\JoinColumn(name="friendto", referencedColumnName="id")},
 *      )
     *  @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $friends;
    
    
     /**
     * @ORM\OneToMany(targetEntity="Friendship", mappedBy="friendOf")
     */
   private $friendRequests;
    
   
    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function __construct() {
        
        parent::__construct();
        $this->friends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->friendRequests = new \Doctrine\Common\Collections\ArrayCollection();
        
    }

     /**
     * @return array
     */
    public function getFriends()
    {
        return $this->friends->toArray();
    }
    
     /**
     * @return array
     */
    public function getFriendRequests()
    {
        return $this->friendRequests->toArray();
    }

    /**
     * @param  Insect $Insect
     * @return void
     */
    public function addFriend(Insect $Insect)
    {
        if (!$this->friends->contains($Insect)) {
            $this->friends->add($Insect);
            $Insect->addFriend($this);
        }
    }
    
     /**
     * @param  User $Insect
     * @return void
     */
    public function addFriendRequest(Friendship $Friendship)
    {
        if (!$this->friendRequests->contains($Friendship)) {
            $this->friendRequests->add(Friendship);
        }
    }
    
    /**
     * @param  User $Insect
     * @return void
     */
    public function removeFriend(Insect $Insect)
    {
        if ($this->friends->contains($Insect)) {
            $this->friends->removeElement($Insect);
            $Insect->removeFriend($this);
        }
    }
    
    /**
     * @param  Friendship $Friendship
     * @return void
     */
    public function removeFriendRequest(Friendship $Friendship)
    {
        if ($this->friendRequests->contains($Friendship)) {
            $this->friendRequests->removeElement($Friendship);
        }
    }
    
    

}
