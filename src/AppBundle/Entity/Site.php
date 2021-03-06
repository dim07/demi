<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Site
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
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     * @Assert\NotBlank()
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="metaKeywords", type="string", length=255)
     */
    private $metaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="metaDescription", type="text")
     */
    private $metaDescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBackImg", type="boolean")
     */
    private $isBackImg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBackSlideShow", type="boolean")
     */
    private $isBackSlideShow;

    /**
     * @var string
     *
     * @ORM\Column(name="GoogleFont", type="string", length=255)
     */
    private $googleFont;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fixMainMenu", type="boolean")
     */
    private $fixMainMenu;
    
    /**
     * @ORM\ManyToMany(targetEntity="Page")
     */
    protected $pages;

    public function __construct()
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Site
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Site
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
     * Set host
     *
     * @param string $host
     * @return Site
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Site
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
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return Site
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return Site
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set isBackImg
     *
     * @param boolean $isBackImg
     * @return Site
     */
    public function setIsBackImg($isBackImg)
    {
        $this->isBackImg = $isBackImg;

        return $this;
    }

    /**
     * Get isBackImg
     *
     * @return boolean 
     */
    public function getIsBackImg()
    {
        return $this->isBackImg;
    }

    /**
     * Set isBackSlideShow
     *
     * @param boolean $isBackSlideShow
     * @return Site
     */
    public function setIsBackSlideShow($isBackSlideShow)
    {
        $this->isBackSlideShow = $isBackSlideShow;

        return $this;
    }

    /**
     * Get isBackSlideShow
     *
     * @return boolean 
     */
    public function getIsBackSlideShow()
    {
        return $this->isBackSlideShow;
    }

    /**
     * Set googleFont
     *
     * @param string $googleFont
     * @return Site
     */
    public function setGoogleFont($googleFont)
    {
        $this->googleFont = $googleFont;

        return $this;
    }

    /**
     * Get googleFont
     *
     * @return string 
     */
    public function getGoogleFont()
    {
        return $this->googleFont;
    }

    /**
     * Set fixMainMenu
     *
     * @param boolean $fixMainMenu
     * @return Site
     */
    public function setFixMainMenu($fixMainMenu)
    {
        $this->fixMainMenu = $fixMainMenu;

        return $this;
    }

    /**
     * Get fixMainMenu
     *
     * @return boolean 
     */
    public function getFixMainMenu()
    {
        return $this->fixMainMenu;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Site
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
     * Add pages
     *
     * @param \AppBundle\Entity\Page $pages
     * @return Site
     */
    public function addPage(\AppBundle\Entity\Page $pages)
    {
        $this->pages[] = $pages;

        return $this;
    }

    /**
     * Remove pages
     *
     * @param \AppBundle\Entity\Page $pages
     */
    public function removePage(\AppBundle\Entity\Page $pages)
    {
        $this->pages->removeElement($pages);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPages()
    {
        return $this->pages;
    }
}
