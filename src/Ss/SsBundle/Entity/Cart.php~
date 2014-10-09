<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 */
class Cart
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $session_id;

    /**
     * @var integer
     */
    private $qty;

    /**
     * @var string
     */
    private $token;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set session_id
     *
     * @param string $sessionId
     * @return Cart
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
     * Set qty
     *
     * @param integer $qty
     * @return Cart
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
     * @return Cart
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Cart
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
     * @return Cart
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
     * @return Cart
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function setTokenValue()
    {
        if(!$this->getToken())
        {
			$st = date('Y-m-d H:i:s');
			$this->token = sha1($st.rand(11111, 99999));
		}
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }
    /**
     * @var integer
     */
    private $stock;


    /**
     * Set stock
     *
     * @param integer $stock
     * @return Cart
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }
    
    public function getTotal()
    {
		$total = $this->getProducts()->getHarga() * $this->getQty();
		return $total;
	}
	
	public function getTotalCost()
    {
		$costform = $this->getTotal();
		$cost = number_format($costform, 0, ',', '.');
		return $cost;
	}
}
