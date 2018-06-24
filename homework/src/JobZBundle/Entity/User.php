<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 13:25
 */

namespace JobZBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use JobZBundle\Entity\Job;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Job", mappedBy="user", cascade={"persist"})
     */
    private $jobs;

    /**
     * @return array
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @param array $jobs
     */
    public function setJobs($jobs)
    {
        $this->jobs = $jobs;
    }

    public function __construct()
    {
        parent::__construct();

        $this->jobs = new ArrayCollection();
    }
}