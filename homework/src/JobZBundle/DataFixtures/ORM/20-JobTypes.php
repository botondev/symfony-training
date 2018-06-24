<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 15:57
 */

namespace JobZBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use JobZBundle\Entity\JobType;

class JobTypes extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 20;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $jobType1 = new JobType();
        $jobType1->setName("full-time");
        $jobType2 = new JobType();
        $jobType2->setName("part-time");
        $jobType3 = new JobType();
        $jobType3->setName("freelance");

        $manager->persist($jobType1);
        $manager->persist($jobType2);
        $manager->persist($jobType3);

        $manager->flush();
    }
}