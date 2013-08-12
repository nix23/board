<?php

namespace Ntech\BoardBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messages;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $followedByMe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $myFollowers;

	 private $newMessagesCount = 0;
	 private $repostsCount = 0;
	 private $repliesCount = 0;

	 private $isCurrentLoggedUser = false;
	 private $isFollowedByLoggedUser = false;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->followedByMe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->myFollowers = new \Doctrine\Common\Collections\ArrayCollection();
    }

	 public function setAsCurrentLoggedUser()
	 {
		 $this->isCurrentLoggedUser = true;
	 }

	 public function isCurrentLoggedUser()
	 {
		 return $this->isCurrentLoggedUser;
	 }

	 public function setAsFollowedByLoggedUser()
	 {
		 $this->isFollowedByLoggedUser = true;
	 }

	 public function isFollowedByLoggedUser()
	 {
		 return $this->isFollowedByLoggedUser;
	 }

	 public function setNewMessagesCount($newMessagesCount)
	 {
		 $this->newMessagesCount = $newMessagesCount;
	 }

	 public function getNewMessagesCount()
	 {
		 return $this->newMessagesCount;
	 }

	 public function setRepostsCount($repostsCount)
	 {
		 $this->repostsCount = $repostsCount;
	 }

	 public function getRepostsCount()
	 {
		 return $this->repostsCount;
	 }

	 public function setRepliesCount($repliesCount)
	 {
		 $this->repliesCount = $repliesCount;
	 }

	 public function getRepliesCount()
	 {
		 return $this->repliesCount;
	 }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Add messages
     *
     * @param \Ntech\BoardBundle\Entity\Message $messages
     * @return User
     */
    public function addMessage(\Ntech\BoardBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
    
        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Ntech\BoardBundle\Entity\Message $messages
     */
    public function removeMessage(\Ntech\BoardBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add followedByMe
     *
     * @param \Ntech\BoardBundle\Entity\User $followedByMe
     * @return User
     */
    public function addFollowedByMe(\Ntech\BoardBundle\Entity\User $followedByMe)
    {
        $this->followedByMe[] = $followedByMe;
    
        return $this;
    }

    /**
     * Remove followedByMe
     *
     * @param \Ntech\BoardBundle\Entity\User $followedByMe
     */
    public function removeFollowedByMe(\Ntech\BoardBundle\Entity\User $followedByMe)
    {
        $this->followedByMe->removeElement($followedByMe);
    }

    /**
     * Get followedByMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFollowedByMe()
    {
        return $this->followedByMe;
    }

    /**
     * Add myFollowers
     *
     * @param \Ntech\BoardBundle\Entity\User $myFollowers
     * @return User
     */
    public function addMyFollower(\Ntech\BoardBundle\Entity\User $myFollowers)
    {
        $this->myFollowers[] = $myFollowers;
    
        return $this;
    }

    /**
     * Remove myFollowers
     *
     * @param \Ntech\BoardBundle\Entity\User $myFollowers
     */
    public function removeMyFollower(\Ntech\BoardBundle\Entity\User $myFollowers)
    {
        $this->myFollowers->removeElement($myFollowers);
    }

    /**
     * Get myFollowers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMyFollowers()
    {
        return $this->myFollowers;
    }

	 public function getRoles()
	 {
		 return array('ROLE_USER');
	 }

	 public function getSalt()
	 {
		 return null;
	 }

	 public function eraseCredentials()
	 {
		 ;
	 }

	 public function equals(UserInterface $user)
	 {
		 return $user->getUsername() == $this->getUsername();
	 }
}