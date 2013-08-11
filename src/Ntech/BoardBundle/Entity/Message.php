<?php

namespace Ntech\BoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ntech\BoardBundle\Utils\DatetimeUtils as DatetimeUtils;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $addedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reposts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $replies;

    /**
     * @var \Ntech\BoardBundle\Entity\User
     */
    private $user;

    /**
     * @var \Ntech\BoardBundle\Entity\Message
     */
    private $originalMessage;

    /**
     * @var \Ntech\BoardBundle\Entity\Message
     */
    private $replyToMessage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reposts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->replies = new \Doctrine\Common\Collections\ArrayCollection();
    }

	 public function getTimeAgo()
	 {
		 return DatetimeUtils::get_time_ago($this->addedAt->format("Y-m-d H:m:s"));
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
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     * @return Message
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
    
        return $this;
    }

    /**
     * Get addedAt
     *
     * @return \DateTime 
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * Add reposts
     *
     * @param \Ntech\BoardBundle\Entity\Message $reposts
     * @return Message
     */
    public function addRepost(\Ntech\BoardBundle\Entity\Message $reposts)
    {
        $this->reposts[] = $reposts;
    
        return $this;
    }

    /**
     * Remove reposts
     *
     * @param \Ntech\BoardBundle\Entity\Message $reposts
     */
    public function removeRepost(\Ntech\BoardBundle\Entity\Message $reposts)
    {
        $this->reposts->removeElement($reposts);
    }

    /**
     * Get reposts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReposts()
    {
        return $this->reposts;
    }

    /**
     * Add replies
     *
     * @param \Ntech\BoardBundle\Entity\Message $replies
     * @return Message
     */
    public function addReplie(\Ntech\BoardBundle\Entity\Message $replies)
    {
        $this->replies[] = $replies;
    
        return $this;
    }

    /**
     * Remove replies
     *
     * @param \Ntech\BoardBundle\Entity\Message $replies
     */
    public function removeReplie(\Ntech\BoardBundle\Entity\Message $replies)
    {
        $this->replies->removeElement($replies);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set user
     *
     * @param \Ntech\BoardBundle\Entity\User $user
     * @return Message
     */
    public function setUser(\Ntech\BoardBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Ntech\BoardBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set originalMessage
     *
     * @param \Ntech\BoardBundle\Entity\Message $originalMessage
     * @return Message
     */
    public function setOriginalMessage(\Ntech\BoardBundle\Entity\Message $originalMessage = null)
    {
        $this->originalMessage = $originalMessage;
    
        return $this;
    }

    /**
     * Get originalMessage
     *
     * @return \Ntech\BoardBundle\Entity\Message 
     */
    public function getOriginalMessage()
    {
        return $this->originalMessage;
    }

    /**
     * Set replyToMessage
     *
     * @param \Ntech\BoardBundle\Entity\Message $replyToMessage
     * @return Message
     */
    public function setReplyToMessage(\Ntech\BoardBundle\Entity\Message $replyToMessage = null)
    {
        $this->replyToMessage = $replyToMessage;
    
        return $this;
    }

    /**
     * Get replyToMessage
     *
     * @return \Ntech\BoardBundle\Entity\Message 
     */
    public function getReplyToMessage()
    {
        return $this->replyToMessage;
    }
    /**
     * @ORM\PrePersist
     */
    public function setAddedAtValue()
    {
		 if(!$this->getAddedAt())
		 {
          $this->addedAt = new \DateTime();
		 }
    }
}