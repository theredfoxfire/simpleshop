<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PesananDetail
 */
class PesananDetail
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
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Ss\SsBundle\Entity\Pesanan
     */
    private $pesanans;

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
     * Set qty
     *
     * @param integer $qty
     * @return PesananDetail
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
     * @return PesananDetail
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
     * @return PesananDetail
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
     * @return PesananDetail
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
     * Set pesanans
     *
     * @param \Ss\SsBundle\Entity\Pesanan $pesanans
     * @return PesananDetail
     */
    public function setPesanans(\Ss\SsBundle\Entity\Pesanan $pesanans = null)
    {
        $this->pesanans = $pesanans;

        return $this;
    }

    /**
     * Get pesanans
     *
     * @return \Ss\SsBundle\Entity\Pesanan 
     */
    public function getPesanans()
    {
        return $this->pesanans;
    }

    /**
     * Set products
     *
     * @param \Ss\SsBundle\Entity\Product $products
     * @return PesananDetail
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
        return $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function setTokenValue()
    {
        $st = date('Y-m-d H:i:s');
		$st = $st.$this->getPesanans()->getId();
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
