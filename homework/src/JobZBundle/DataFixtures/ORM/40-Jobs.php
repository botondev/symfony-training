<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 15:04
 */

namespace JobZBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JobZBundle\Entity\Category;
use JobZBundle\Entity\JobType;
use JobZBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use JobZBundle\Entity\Job;

class Jobs extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        return 40;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $fulltime = $this->getJobType($manager, "full-time");
        $parttime = $this->getJobType($manager, "part-time");
        $freelance = $this->getJobType($manager, "freelance");

        $design = $this->getCategory($manager, "Design");
        $programming = $this->getCategory($manager, "Programming");
        $marketing = $this->getCategory($manager, "Marketing");

        $david = $this->getUser($manager, "David");
        $eddie = $this->getUser($manager, "Eddie");

        $job1 = new Job();
        $job1->setJobType($parttime);
        $job1->setCategory($design);
        $job1->setUser($david);
        $job1->setUrl(null);
        $job1->setPosition("Web Developer");
        $job1->setLocation("Paris, France");
        $job1->setDescription("You've already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $job1->setHowToApply("Send your resume to fabien.potencier@sensio.com");
        $job1->setCompany("Sensio Labs");

        $job2 = new Job();
        $job2->setJobType($freelance);
        $job2->setCategory($programming);
        $job2->setUser($eddie);
        $job2->setUrl('http://www.eddiem.com');
        $job2->setPosition("Web Developer");
        $job2->setLocation("Sheffield, UK");
        $job2->setDescription("You've already developed websites with asp.net and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with C# .NET and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $job2->setHowToApply("Send your resume to eddie.murphy@movies.com");
        $job2->setCompany("Eddie Murphy hobby projects");

        $job3 = new Job();
        $job3->setJobType($fulltime);
        $job3->setCategory($marketing);
        $job3->setUser($eddie);
        $job3->setUrl('http://www.optimonk.com');
        $job3->setPosition("OptiMonk T-Shaped Marketer");
        $job3->setLocation("Debrecen, Hungary");
        $job3->setDescription("Egy igazi, belevaló online marketingest, T-Shaped Marketert keresünk az OptiMonk csapatába.

Az OptiMonk az INNONIC Group Zrt. tagja, amely Debrecen első Startup Studiója. 2006 óta foglalkozunk IT fejlesztéssel. 
Számos sikeres cég és termék köthető a nevünkhöz az e-kereskedelem világában, és az egyiknek Te is a részese lehetsz.

Az OptiMonk (www.optimonk.com) egy debreceni székhellyel rendelkező Startup, mely 2014-ben indult. Szoftverünk egy olyan marketing eszköztárat biztosít elsősorban webáruház tulajdonosok számára, melyek segítségével az értékes látogatókból minél több vásárlót lehet nyerni. Az elsődleges célunk az oldalak konverziójának javítása, amelyet a látogatói adatok megszerzésével vagy a látogatók megfelelő oldalra való átirányításával érünk el. Hogyan segítheti ezt egy T- Shaped Marketer?

Mit csinál nálunk egy T-Shaped Marketer?

Szövegírás (magyarul és angolul) - blog cikkek, hírlevelek, e-bookok, landoló oldalak, stb.
Email marketing, hírlevelek küldése
Közösségi oldalak menedzselése
PPC hirdetések menedzselése (Facebook, AdWords)
Marketing kampányok koordinálása
Bannerek, landoló oldalak megtervezése a grafikus csapattal együttműködve
Új \"growth hacking\" eszközök kipróbálása, tesztelése");
        $job3->setHowToApply("Na, de lássuk: Miért éri meg jelentkezned?

Az elvárásokhoz és felelősséghez passzoló fizetés
Egy 160 országban ismert nemzetközi projekt tagja lehetsz
Része lehetsz egy igazán vidám, fiatal csapatnak
Debreceni munkavégzés minden igényt kielégítő irodánkban
Egészséges életmód maximális támogatása
Folyamatos tanulási, és fejlődési lehetőség
10+1 indok, amiért érdemes nálunk dolgozni


Ha úgy érzed, hogy ez a lehetőség Neked szól, jelentkezz mielőbb! A kiválasztás ugyanis folyamatos, így ha megtaláljuk a megfelelő jelöltet, nem hezitálunk sokáig, az új munkatárs akár azonnal tud kezdeni.");
        $job3->setCompany("Optimonk");

        $job4 = new Job();
        $job4->setJobType($parttime);
        $job4->setCategory($programming);
        $job4->setUser($eddie);
        $job4->setUrl('http://www.eddiem.com');
        $job4->setPosition("Web Developer");
        $job4->setLocation("Budapest, Hungary");
        $job4->setDescription("As a Junior you've already developed websites with asp.net or PHP and you want to work with Open-Source technologies. You do not any commercial experience in web development, but you have your own projects and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $job4->setHowToApply("Send your resume to eddie.murphy@movies.com titled: Junior Dev");
        $job4->setCompany("Eddie Murphy hobby projects");

        $manager->persist($job1);
        $manager->persist($job2);
        $manager->persist($job3);
        $manager->persist($job4);

        $manager->flush();
    }

    /**
     * Get an Author
     *
     * @param ObjectManager $manager
     * @param string $username
     *
     * @return User
     */
    private function getUser(ObjectManager $manager, $username)
    {
        return $manager->getRepository('JobZBundle:User')->findOneBy(
            array(
                'username' => $username
            )
        );
    }

    /**
     * Get a JobType
     *
     * @param ObjectManager $manager
     * @param string $name
     *
     * @return JobType
     */
    private function getJobType(ObjectManager $manager, $name)
    {
        return $manager->getRepository('JobZBundle:JobType')->findOneBy(
            array(
                'name' => $name
            )
        );
    }

    /**
     * Get a job Category
     *
     * @param ObjectManager $manager
     * @param string $name
     *
     * @return User
     */
    private function getCategory(ObjectManager $manager, $name)
    {
        return $manager->getRepository('JobZBundle:Category')->findOneBy(
            array(
                'name' => $name
            )
        );
    }
}