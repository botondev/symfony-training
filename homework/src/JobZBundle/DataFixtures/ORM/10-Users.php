<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 13:56
 */

namespace JobZBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Users extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface $container
     */
    protected $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }


    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var \JobZBundle\Entity\User $u1*/
        $u1 = $userManager->createUser();
        $u1->setUsername('David');
        $u1->addRole('ROLE_USER');
        $u1->setEmail('david@jobz.com');
        $u1->setPlainPassword('david');
        $u1->setEnabled(true);
        $userManager->updateUser($u1);

        /** @var \JobZBundle\Entity\User $u1*/
        $u2 = $userManager->createUser();
        $u2->setUsername('Eddie');
        $u2->addRole('ROLE_USER');
        $u2->setEmail('eddie@jobz.com');
        $u2->setPlainPassword('eddie');
        $u2->setEnabled(true);
        $userManager->updateUser($u2);

        /** @var \JobZBundle\Entity\User $u1*/
        $u3 = $userManager->createUser();
        $u3->setUsername('admin');
        $u3->addRole('ROLE_ADMIN');
        $u3->setEmail('admin@jobz.com');
        $u3->setPlainPassword('admin');
        $u3->setEnabled(true);
        $userManager->updateUser($u3);

        /** @var \JobZBundle\Entity\User $u1*/
        $u4 = $userManager->createUser();
        $u4->setUsername('botondev');
        $u4->addRole('ROLE_ADMIN');
        $u4->setEmail('botondev@jobz.com');
        $u4->setPlainPassword('botondev');
        $u4->setEnabled(true);
        $userManager->updateUser($u4);
    }

}