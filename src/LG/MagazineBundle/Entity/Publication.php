<?php

namespace LG\MagazineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Publication
 *
 * @ORM\Table(name="publication")
 * @ORM\Entity(repositoryClass="LG\MagazineBundle\Repository\PublicationRepository")
 */
class Publication
{
    
    /**
     *
     * @var type ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Issue", mappedBy="publication")
     */
    private $issues; 
    
    public function __construct() {
        $this->issues = new ArrayCollection();
    }

        /**
     * @var int
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Publication
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
     * Add issue
     *
     * @param \LG\MagazineBundle\Entity\Issue $issue
     *
     * @return Publication
     */
    public function addIssue(\LG\MagazineBundle\Entity\Issue $issue)
    {
        $this->issues[] = $issue;

        return $this;
    }

    /**
     * Remove issue
     *
     * @param \LG\MagazineBundle\Entity\Issue $issue
     */
    public function removeIssue(\LG\MagazineBundle\Entity\Issue $issue)
    {
        $this->issues->removeElement($issue);
    }

    /**
     * Get issues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIssues()
    {
        return $this->issues;
    }
    
    /**
     * Render a Publication as a String
     * 
     * @return type String
     */
    public function __toString(){
        return $this->getName();
    }
}
