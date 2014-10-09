<?php

namespace Ss\SsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Orderer
 */
class Orderer implements UserInterface
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
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $alamat;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $is_activated;

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
    private $pesanans;
    private $username;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pesanans = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Orderer
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
     * Set email
     *
     * @param string $email
     * @return Orderer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Orderer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alamat
     *
     * @param string $alamat
     * @return Orderer
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string 
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Orderer
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
     * Set is_activated
     *
     * @param boolean $isActivated
     * @return Orderer
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;

        return $this;
    }

    /**
     * Get is_activated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Orderer
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
     * @return Orderer
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
     * Add pesanans
     *
     * @param \Ss\SsBundle\Entity\Pesanan $pesanans
     * @return Orderer
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
        return $this->updated_at = new \DateTime();
    }
    
    public function __toString()
	{
		return $this->nama;
	}
    /**
     * @var integer
     */
    private $kode_pos;


    /**
     * Set kode_pos
     *
     * @param integer $kodePos
     * @return Orderer
     */
    public function setKodePos($kodePos)
    {
        $this->kode_pos = $kodePos;

        return $this;
    }

    /**
     * Get kode_pos
     *
     * @return integer 
     */
    public function getKodePos()
    {
        return $this->kode_pos;
    }
    private $password;


    /**
     * Set password
     *
     * @param string $password
     * @return Orderer
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
    
    public function getRoles()
    {
        return array('ROLE_MEMBER');
    }
 
    public function getSalt()
    {
        return null;
    }
 
    public function eraseCredentials()
    {
		
    }
 
    public function equals(User $user)
    {
        return $user->getUsername() == $this->getUsername();
    }
    
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
    
    public function getUsername()
    {
        return $this->username = $this->getEmail();
    }
    
    private $disname;
    
    public function getDisname()
    {
		return $this->disname = ucwords($this->getNama());
	}
}
