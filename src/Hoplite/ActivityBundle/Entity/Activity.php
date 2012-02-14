<?php

namespace Hoplite\ActivityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hoplite\ActivityBundle\Entity\Activity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hoplite\ActivityBundle\Entity\ActivityRepository")
 */
class Activity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var datetime $scheduled_from
     *
     * @ORM\Column(name="scheduled_from", type="datetime")
     */
    private $scheduled_from;

    /**
     * @var datetime $scheduled_to
     *
     * @ORM\Column(name="scheduled_to", type="datetime")
     */
    private $scheduled_to;

    /**
     * @var text $objectives
     *
     * @ORM\Column(name="objectives", type="text")
     */
    private $objectives;

    /**
     * @var text $results
     *
     * @ORM\Column(name="results", type="text")
     */
    private $results;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    public function __construct()
    {
      $this->created_at = $this->updated = new \DateTime('now');
    }

    /**
     * @PreUpdate
     */
    public function updated()
    {
      $this->updated_at = new \DateTime('now');
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set scheduled_from
     *
     * @param datetime $scheduledFrom
     */
    public function setScheduledFrom($scheduledFrom)
    {
        $this->scheduled_from = $scheduledFrom;
    }

    /**
     * Get scheduled_from
     *
     * @return datetime
     */
    public function getScheduledFrom()
    {
        return $this->scheduled_from;
    }

    /**
     * Set scheduled_to
     *
     * @param datetime $scheduledTo
     */
    public function setScheduledTo($scheduledTo)
    {
        $this->scheduled_to = $scheduledTo;
    }

    /**
     * Get scheduled_to
     *
     * @return datetime
     */
    public function getScheduledTo()
    {
        return $this->scheduled_to;
    }

    /**
     * Set objectives
     *
     * @param text $objectives
     */
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;
    }

    /**
     * Get objectives
     *
     * @return text
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Set results
     *
     * @param text $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * Get results
     *
     * @return text
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}