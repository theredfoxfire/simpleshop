<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pesanan
 */
class Pesanan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $qty;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $is_payyed;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Ss\SsBundle\Entity\Product
     */
    private $products;

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
     * Set qty
     *
     * @param integer $qty
     * @return Pesanan
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Pesanan
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
     * Set is_payyed
     *
     * @param boolean $isPayyed
     * @return Pesanan
     */
    public function setIsPayyed($isPayyed)
    {
        $this->is_payyed = $isPayyed;

        return $this;
    }

    /**
     * Get is_payyed
     *
     * @return boolean 
     */
    public function getIsPayyed()
    {
        return $this->is_payyed;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Pesanan
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
     * @return Pesanan
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
     * Set products
     *
     * @param \Ss\SsBundle\Entity\Product $products
     * @return Pesanan
     */
    public function setProducts(\Ss\SsBundle\Entity\Product $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \Ss\SsBundle\Entity\Product 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set orderers
     *
     * @param \Ss\SsBundle\Entity\Orderer $orderers
     * @return Pesanan
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
		$st = $st.$this->getProducts();
        return $this->token = sha1($st.rand(11111, 99999));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        return $this->updated_at = new \DateTime();
    }
    /**
     * @var string
     */
    private $session_id;


    /**
     * Set session_id
     *
     * @param string $sessionId
     * @return Pesanan
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
     * @var string
     */
    private $notes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $details;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->details = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Pesanan
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add details
     *
     * @param \Ss\SsBundle\Entity\PesananDetail $details
     * @return Pesanan
     */
    public function addDetail(\Ss\SsBundle\Entity\PesananDetail $details)
    {
        $this->details[] = $details;

        return $this;
    }

    /**
     * Remove details
     *
     * @param \Ss\SsBundle\Entity\PesananDetail $details
     */
    public function removeDetail(\Ss\SsBundle\Entity\PesananDetail $details)
    {
        $this->details->removeElement($details);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * @var string
     */
    private $session;


    /**
     * Set session
     *
     * @param string $session
     * @return Pesanan
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string 
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * @var boolean
     */
    private $is_confirm;


    /**
     * Set is_confirm
     *
     * @param boolean $isConfirm
     * @return Pesanan
     */
    public function setIsConfirm($isConfirm)
    {
        $this->is_confirm = $isConfirm;

        return $this;
    }

    /**
     * Get is_confirm
     *
     * @return boolean 
     */
    public function getIsConfirm()
    {
        return $this->is_confirm;
    }
}
