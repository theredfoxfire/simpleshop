<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ss\SsBundle\Utils\Slug as Slug;
use Gregwar\Image\Image;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $harga;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var integer
     */
    private $ongkir;

    /**
     * @var boolean
     */
    private $is_publish;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $carts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pesanans;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fotos;

    /**
     * @var \Ss\SsBundle\Entity\Category
     */
    private $categories;
    
    public $file;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pesanans = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fotos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nama
     *
     * @param string $nama
     * @return Product
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set harga
     *
     * @param integer $harga
     * @return Product
     */
    public function setHarga($harga)
    {
        $this->harga = $harga;

        return $this;
    }

    /**
     * Get harga
     *
     * @return integer 
     */
    public function getHarga()
    {
        return $this->harga;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Product
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
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

    /**
     * Set ongkir
     *
     * @param integer $ongkir
     * @return Product
     */
    public function setOngkir($ongkir)
    {
        $this->ongkir = $ongkir;

        return $this;
    }

    /**
     * Get ongkir
     *
     * @return integer 
     */
    public function getOngkir()
    {
        return $this->ongkir;
    }

    /**
     * Set is_publish
     *
     * @param boolean $isPublish
     * @return Product
     */
    public function setIsPublish($isPublish)
    {
        $this->is_publish = $isPublish;

        return $this;
    }

    /**
     * Get is_publish
     *
     * @return boolean 
     */
    public function getIsPublish()
    {
        return $this->is_publish;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * Add carts
     *
     * @param \Ss\SsBundle\Entity\Cart $carts
     * @return Product
     */
    public function addCart(\Ss\SsBundle\Entity\Cart $carts)
    {
        $this->carts[] = $carts;

        return $this;
    }

    /**
     * Remove carts
     *
     * @param \Ss\SsBundle\Entity\Cart $carts
     */
    public function removeCart(\Ss\SsBundle\Entity\Cart $carts)
    {
        $this->carts->removeElement($carts);
    }

    /**
     * Get carts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCarts()
    {
        return $this->carts;
    }

    /**
     * Add pesanans
     *
     * @param \Ss\SsBundle\Entity\Pesanan $pesanans
     * @return Product
     */
    public function addPesanan(\Ss\SsBundle\Entity\Pesanan $pesanans)
    {
        $this->pesanans[] = $pesanans;

        return $this;
    }

    /**
     * Remove pesanans
     *
     * @param \Ss\SsBundle\Entity\Pesanan $pesanans
     */
    public function removePesanan(\Ss\SsBundle\Entity\Pesanan $pesanans)
    {
        $this->pesanans->removeElement($pesanans);
    }

    /**
     * Get pesanans
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPesanans()
    {
        return $this->pesanans;
    }

    /**
     * Add fotos
     *
     * @param \Ss\SsBundle\Entity\ProductFoto $fotos
     * @return Product
     */
    public function addFoto(\Ss\SsBundle\Entity\ProductFoto $fotos)
    {
        $this->fotos[] = $fotos;

        return $this;
    }

    /**
     * Remove fotos
     *
     * @param \Ss\SsBundle\Entity\ProductFoto $fotos
     */
    public function removeFoto(\Ss\SsBundle\Entity\ProductFoto $fotos)
    {
        $this->fotos->removeElement($fotos);
    }

    /**
     * Get fotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set categories
     *
     * @param \Ss\SsBundle\Entity\Category $categories
     * @return Product
     */
    public function setCategories(\Ss\SsBundle\Entity\Category $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Ss\SsBundle\Entity\Category 
     */
    public function getCategories()
    {
        return $this->categories;
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
		$st = $st.$this->getNama();
        return $this->token = sha1($st.rand(11111, 99999));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        return $this->created_at = new \DateTime();
    }
    
    public function getCost()
    {
		$costform = $this->getHarga();
		$cost = number_format($costform, 0, ',', '.');
		return $cost;
	}
	
	public function getNamaSlug()
	{
		return Slug::slugify($this->getNama());
	}
	
	protected function getUploadDir()
	{
		return 'uploads/products';
	}
	
	protected function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public function getWebPath()
	{
		return null === $this->foto ? null : $this->getUploadDir().'/'.$this->foto;
	}
	
	public function getWebPathMini()
	{
		return null === $this->foto ? null : $this->getUploadDir().'/mini_'.$this->foto;
	}
	
	public function getAbsolutePath()
	{
		return null === $this->foto ? null : $this->getUploadRootDir().'/'.$this->foto;
	}
    

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->file){
				$this->foto = uniqid().'.'.$this->file->guessExtension();
			}
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file){
			return;
		} 
		$this->file->move($this->getUploadRootDir(), $this->foto);
		
		Image::open($this->getUploadRootDir().'/'.$this->foto)
		->scaleResize(300, 480, $background = 0xffffff)
		->save($this->getUploadRootDir().'/index_'.$this->foto);
		
		Image::open($this->getUploadRootDir().'/'.$this->foto)
		->scaleResize(750, 1200, $background = 0xffffff)
		->save($this->getUploadRootDir().'/grande_'.$this->foto);
		
		Image::open($this->getUploadRootDir().'/'.$this->foto)
		->scaleResize(150, 240, $background = 0xffffff)
		->save($this->getUploadRootDir().'/mini_'.$this->foto);
		
		Image::open($this->getUploadRootDir().'/'.$this->foto)
		->scaleResize(1280, 2048, $background = 0xffffff)
		->save($this->getUploadRootDir().'/zoom_'.$this->foto);
		
		$rmfile = $this->getAbsolutePath();
        if(file_exists($rmfile)) {
			unlink($rmfile);
		}
		
		unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
		$file = $this->getAbsolutePath();
        if(file_exists($file)) {
			unlink($file);
		}
    }
    
    public function __toString()
	{
		return $this->nama;
	}
	
	static public function getLuceneIndex()
    {
        if (file_exists($index = self::getLuceneIndexFile())) {
            return \Zend_Search_Lucene::open($index);
        }
 
        return \Zend_Search_Lucene::create($index);
    }
 
    static public function getLuceneIndexFile()
    {
        return __DIR__.'/../../../../web/data/product.index';
    }

    /**
     * @ORM\PostPersist
     */
    public function updateLuceneIndex()
    {
         $index = self::getLuceneIndex();
 
        // remove existing entries
        foreach ($index->find('pk:'.$this->getId()) as $hit)
        {
          $index->delete($hit->id);
        }
 
        // don't index expired and non-activated jobs
        if (!$this->getIsPublish())
        {
          return;
        }
 
        $doc = new \Zend_Search_Lucene_Document();
 
        // store job primary key to identify it in the search results
        $doc->addField(\Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));
 
        // index job fields
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('categories', $this->getCategories(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('nama', $this->getNama(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('description', $this->getDescription(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('harga', $this->getHarga(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('stock', $this->getStock(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('ongkir', $this->getOngkir(), 'utf-8'));
 
        // add job to the index
        $index->addDocument($doc);
        $index->commit();
    }

    /**
     * @ORM\PostRemove
     */
    public function deleteLuceneIndex()
    {
         $index = self::getLuceneIndex();
 
        foreach ($index->find('pk:'.$this->getId()) as $hit) {
            $index->delete($hit->id);
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function removeUploaded()
    {
        if (null === $this->file){
			return;
		}
		
		$rmfilei = $this->getUploadRootDir().'/index_'.$this->getFoto();
		$rmfilem = $this->getUploadRootDir().'/mini_'.$this->getFoto();
		$rmfileg = $this->getUploadRootDir().'/grande_'.$this->getFoto();
		$rmfilez = $this->getUploadRootDir().'/zoom_'.$this->getFoto();
        if(file_exists($rmfilei)) {
			unlink($rmfilei);
		}
		if(file_exists($rmfilem)) {
			unlink($rmfilem);
		}
		if(file_exists($rmfileg)) {
			unlink($rmfileg);
		}
		if(file_exists($rmfilez)) {
			unlink($rmfilez);
		}
    }

    /**
     * @ORM\PrePersist
     */
    public function setIsPublishValue()
    {
        return $this->is_publish = 1;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $details;


    /**
     * Add details
     *
     * @param \Ss\SsBundle\Entity\PesananDetail $details
     * @return Product
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
}
