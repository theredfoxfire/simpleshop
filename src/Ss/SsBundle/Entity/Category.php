<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ss\SsBundle\Utils\Slug as Slug;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affiliates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiliates = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add products
     *
     * @param \Ss\SsBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\Ss\SsBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Ss\SsBundle\Entity\Product $products
     */
    public function removeProduct(\Ss\SsBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add affiliates
     *
     * @param \Ss\SsBundle\Entity\Affiliate $affiliates
     * @return Category
     */
    public function addAffiliate(\Ss\SsBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates[] = $affiliates;

        return $this;
    }

    /**
     * Remove affiliates
     *
     * @param \Ss\SsBundle\Entity\Affiliate $affiliates
     */
    public function removeAffiliate(\Ss\SsBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates->removeElement($affiliates);
    }

    /**
     * Get affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }
    /**
     * @ORM\PrePersist
     */
    public function setSlugValue()
    {
        return $this->slug = Slug::slugify($this->getName());
    }
    
    public function __toString()
	{
		return $this->name;
	}
    /**
     * @var integer
     */
    private $gender;


    /**
     * Set gender
     *
     * @param integer $gender
     * @return Category
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    public static function getTypes()
    {
		return array('1' => 'Pria', '2' => 'Wanita');
	}
	
	public static function getTypeValues()
	{
		return array_keys(self::getTypes());
	}
}
