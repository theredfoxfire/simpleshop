<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderNote
 */
class OrderNote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $notice;

    /**
     * @var string
     */
    private $token;

    /**
     * @var integer
     */
    private $orderer_id;

    /**
     * @var string
     */
    private $session_id;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Ss\SsBundle\Entity\Orderer
     */
    private $orderers;


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
     * Set notice
     *
     * @param string $notice
     * @return OrderNote
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return string 
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return OrderNote
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set orderer_id
     *
     * @param integer $ordererId
     * @return OrderNote
     */
    public function setOrdererId($ordererId)
    {
        $this->orderer_id = $ordererId;

        return $this;
    }

    /**
     * Get orderer_id
     *
     * @return integer 
     */
    public function getOrdererId()
    {
        return $this->orderer_id;
    }

    /**
     * Set session_id
     *
     * @param string $sessionId
     * @return OrderNote
     */
    public function setSessionId($sessionId)
    {
        $this->session_id = $sessionId;

        return $this;
    }

    /**
     * Get session_id
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return OrderNote
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return OrderNote
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set orderers
     *
     * @param \Ss\SsBundle\Entity\Orderer $orderers
     * @return OrderNote
     */
    public function setOrderers(\Ss\SsBundle\Entity\Orderer $orderers = null)
    {
        $this->orderers = $orderers;

        return $this;
    }

    /**
     * Get orderers
     *
     * @return \Ss\SsBundle\Entity\Orderer 
     */
    public function getOrderers()
    {
        return $this->orderers;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        return $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function setTokenValue()
    {
        $st = date('Y-m-d H:i:s');
		$st = $st.$this->getOrderers();
        return $this->token = sha1($st.rand(11111, 99999));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        return $this->updated_at = new \DateTime();
    }
}
