<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 16:08
 */

namespace JobZBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use JobZBundle\Entity\Category;

class Categories extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 30;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName("Design");
        $category2 = new Category();
        $category2->setName("Programming");
        $category3 = new Category();
        $category3->setName("Marketing");

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);

        $manager->flush();
    }
}