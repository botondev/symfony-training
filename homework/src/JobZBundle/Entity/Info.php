<?php

namespace JobZBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Info
 *
 * @ORM\Table(name="info")
 * @ORM\Entity(repositoryClass="JobZBundle\Repository\InfoRepository")
 */
class Info
{
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="displayAt", type="string", length=255)
     */
    private $displayAt;

    /**
     * @var int
     *
     * @ORM\Column(name="positionOrder", type="integer")
     */
    private $positionOrder;


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
     * Set title
     *
     * @param string $title
     *
     * @return Info
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
     * Set description
     *
     * @param string $description
     *
     * @return Info
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
     * Set displayAt
     *
     * @param string $displayAt
     *
     * @return Info
     */
    public function setDisplayAt($displayAt)
    {
        $this->displayAt = $displayAt;

        return $this;
    }

    /**
     * Get displayAt
     *
     * @return string
     */
    public function getDisplayAt()
    {
        return $this->displayAt;
    }

    /**
     * Set positionOrder
     *
     * @param integer $positionOrder
     *
     * @return Info
     */
    public function setPositionOrder($positionOrder)
    {
        $this->positionOrder = $positionOrder;

        return $this;
    }

    /**
     * Get positionOrder
     *
     * @return int
     */
    public function getPositionOrder()
    {
        return $this->positionOrder;
    }
}

