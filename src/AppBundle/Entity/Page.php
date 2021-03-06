<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Page
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isCarusel", type="boolean")
     * @Assert\NotBlank()
     */
    private $isCarusel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isServises", type="boolean")
     */
    private $isServises;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isProducts", type="boolean")
     */
    private $isProducts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isTeam", type="boolean")
     */
    private $isTeam;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isContact", type="boolean")
     */
    private $isContact;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isMap", type="boolean")
     */
    private $isMap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isSkills", type="boolean")
     */
    private $isSkills;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFooter", type="boolean")
     */
    private $isFooter;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\ManyToMany(targetEntity="Site")
     */
    protected $sates;

    public function __construct()
    {
        $this->sates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->created_at = new \DateTime("now");
    }

    public function __toString()
    {
        return $this->getName();
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
     * @return Page
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
     * Set title
     *
     * @param string $title
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isCarusel
     *
     * @param boolean $isCarusel
     * @return Page
     */
    public function setIsCarusel($isCarusel)
    {
        $this->isCarusel = $isCarusel;

        return $this;
    }

    /**
     * Get isCarusel
     *
     * @return boolean 
     */
    public function getIsCarusel()
    {
        return $this->isCarusel;
    }

    /**
     * Set isServises
     *
     * @param boolean $isServises
     * @return Page
     */
    public function setIsServises($isServises)
    {
        $this->isServises = $isServises;

        return $this;
    }

    /**
     * Get isServises
     *
     * @return boolean 
     */
    public function getIsServises()
    {
        return $this->isServises;
    }

    /**
     * Set isProducts
     *
     * @param boolean $isProducts
     * @return Page
     */
    public function setIsProducts($isProducts)
    {
        $this->isProducts = $isProducts;

        return $this;
    }

    /**
     * Get isProducts
     *
     * @return boolean 
     */
    public function getIsProducts()
    {
        return $this->isProducts;
    }

    /**
     * Set isTeam
     *
     * @param boolean $isTeam
     * @return Page
     */
    public function setIsTeam($isTeam)
    {
        $this->isTeam = $isTeam;

        return $this;
    }

    /**
     * Get isTeam
     *
     * @return boolean 
     */
    public function getIsTeam()
    {
        return $this->isTeam;
    }

    /**
     * Set isContact
     *
     * @param boolean $isContact
     * @return Page
     */
    public function setIsContact($isContact)
    {
        $this->isContact = $isContact;

        return $this;
    }

    /**
     * Get isContact
     *
     * @return boolean 
     */
    public function getIsContact()
    {
        return $this->isContact;
    }

    /**
     * Set isMap
     *
     * @param boolean $isMap
     * @return Page
     */
    public function setIsMap($isMap)
    {
        $this->isMap = $isMap;

        return $this;
    }

    /**
     * Get isMap
     *
     * @return boolean 
     */
    public function getIsMap()
    {
        return $this->isMap;
    }

    /**
     * Set isSkills
     *
     * @param boolean $isSkills
     * @return Page
     */
    public function setIsSkills($isSkills)
    {
        $this->isSkills = $isSkills;

        return $this;
    }

    /**
     * Get isSkills
     *
     * @return boolean 
     */
    public function getIsSkills()
    {
        return $this->isSkills;
    }

    /**
     * Set isFooter
     *
     * @param boolean $isFooter
     * @return Page
     */
    public function setIsFooter($isFooter)
    {
        $this->isFooter = $isFooter;

        return $this;
    }

    /**
     * Get isFooter
     *
     * @return boolean 
     */
    public function getIsFooter()
    {
        return $this->isFooter;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Page
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
     * Add sates
     *
     * @param \AppBundle\Entity\Site $sates
     * @return Page
     */
    public function addSate(\AppBundle\Entity\Site $sates)
    {
        $this->sates[] = $sates;

        return $this;
    }

    /**
     * Remove sates
     *
     * @param \AppBundle\Entity\Site $sates
     */
    public function removeSate(\AppBundle\Entity\Site $sates)
    {
        $this->sates->removeElement($sates);
    }

    /**
     * Get sates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSates()
    {
        return $this->sates;
    }
}
