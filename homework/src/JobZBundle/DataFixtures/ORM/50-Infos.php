<?php
/**
 * Created by PhpStorm.
 * User: botondev
 * Date: 2018.06.24.
 * Time: 17:45
 */

namespace JobZBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use JobZBundle\Entity\Info;

class Infos extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 50;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $aboutUs = new Info();
        $aboutUs->setTitle("About us");
        $aboutUs->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac eros non nisl tempus euismod sed vitae odio. Integer egestas lectus in massa placerat scelerisque. Vivamus tempus sem eget sem tincidunt efficitur. Fusce bibendum tellus aliquet turpis porta, non consectetur nunc luctus. Fusce neque quam, pulvinar eget dignissim eu, tempor non orci. Vivamus vitae nunc id elit sollicitudin finibus imperdiet vitae mauris. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut hendrerit rutrum porttitor. Nulla facilisi. Fusce vitae magna neque. Proin in posuere purus. Proin euismod ex placerat lorem viverra, quis maximus est imperdiet. Phasellus ultricies leo eu erat pretium auctor. Vestibulum lorem eros, auctor in nisl quis, porttitor pellentesque tortor. Phasellus a ex non ipsum ornare efficitur id non massa. Nunc lacus odio, facilisis ut tempor in, fringilla nec nibh. Nullam mi mauris, molestie et elementum a, sagittis eget neque. Sed vitae lectus ullamcorper, venenatis velit ut, volutpat libero. Nulla cursus quis est vitae facilisis. Donec viverra ac tortor ac mollis. Sed eget dictum justo, nec porta est. Fusce tincidunt, lacus vel accumsan vehicula, metus neque pulvinar erat, a rhoncus leo dolor eget odio. Vestibulum eget dui sed odio malesuada condimentum id a turpis. Cras cursus, quam nec convallis vulputate, lectus nulla volutpat nibh, vitae pharetra enim magna quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.");
        $aboutUs->setDisplayAt("header");
        $aboutUs->setPositionOrder(1);

        $about = new Info();
        $about->setTitle("About us");
        $about->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac eros non nisl tempus euismod sed vitae odio. Integer egestas lectus in massa placerat scelerisque. Vivamus tempus sem eget sem tincidunt efficitur. Fusce bibendum tellus aliquet turpis porta, non consectetur nunc luctus. Fusce neque quam, pulvinar eget dignissim eu, tempor non orci. Vivamus vitae nunc id elit sollicitudin finibus imperdiet vitae mauris. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut hendrerit rutrum porttitor. Nulla facilisi. Fusce vitae magna neque. Proin in posuere purus. Proin euismod ex placerat lorem viverra, quis maximus est imperdiet. Phasellus ultricies leo eu erat pretium auctor. Vestibulum lorem eros, auctor in nisl quis, porttitor pellentesque tortor. Phasellus a ex non ipsum ornare efficitur id non massa. Nunc lacus odio, facilisis ut tempor in, fringilla nec nibh. Nullam mi mauris, molestie et elementum a, sagittis eget neque. Sed vitae lectus ullamcorper, venenatis velit ut, volutpat libero. Nulla cursus quis est vitae facilisis. Donec viverra ac tortor ac mollis. Sed eget dictum justo, nec porta est. Fusce tincidunt, lacus vel accumsan vehicula, metus neque pulvinar erat, a rhoncus leo dolor eget odio. Vestibulum eget dui sed odio malesuada condimentum id a turpis. Cras cursus, quam nec convallis vulputate, lectus nulla volutpat nibh, vitae pharetra enim magna quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.");
        $about->setDisplayAt("footer");
        $about->setPositionOrder(1);

        $contact = new Info();
        $contact->setTitle("Contact");
        $contact->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac eros non nisl tempus euismod sed vitae odio. Integer egestas lectus in massa placerat scelerisque. Vivamus tempus sem eget sem tincidunt efficitur. Fusce bibendum tellus aliquet turpis porta, non consectetur nunc luctus. Fusce neque quam, pulvinar eget dignissim eu, tempor non orci. Vivamus vitae nunc id elit sollicitudin finibus imperdiet vitae mauris. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut hendrerit rutrum porttitor. Nulla facilisi. Fusce vitae magna neque. Proin in posuere purus. Proin euismod ex placerat lorem viverra, quis maximus est imperdiet. Phasellus ultricies leo eu erat pretium auctor. Vestibulum lorem eros, auctor in nisl quis, porttitor pellentesque tortor. Phasellus a ex non ipsum ornare efficitur id non massa. Nunc lacus odio, facilisis ut tempor in, fringilla nec nibh. Nullam mi mauris, molestie et elementum a, sagittis eget neque. Sed vitae lectus ullamcorper, venenatis velit ut, volutpat libero. Nulla cursus quis est vitae facilisis. Donec viverra ac tortor ac mollis. Sed eget dictum justo, nec porta est. Fusce tincidunt, lacus vel accumsan vehicula, metus neque pulvinar erat, a rhoncus leo dolor eget odio. Vestibulum eget dui sed odio malesuada condimentum id a turpis. Cras cursus, quam nec convallis vulputate, lectus nulla volutpat nibh, vitae pharetra enim magna quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.");
        $contact->setDisplayAt("footer");
        $contact->setPositionOrder(2);

        $jobZApi = new Info();
        $jobZApi->setTitle("JobZ API");
        $jobZApi->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac eros non nisl tempus euismod sed vitae odio. Integer egestas lectus in massa placerat scelerisque. Vivamus tempus sem eget sem tincidunt efficitur. Fusce bibendum tellus aliquet turpis porta, non consectetur nunc luctus. Fusce neque quam, pulvinar eget dignissim eu, tempor non orci. Vivamus vitae nunc id elit sollicitudin finibus imperdiet vitae mauris. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut hendrerit rutrum porttitor. Nulla facilisi. Fusce vitae magna neque. Proin in posuere purus. Proin euismod ex placerat lorem viverra, quis maximus est imperdiet. Phasellus ultricies leo eu erat pretium auctor. Vestibulum lorem eros, auctor in nisl quis, porttitor pellentesque tortor. Phasellus a ex non ipsum ornare efficitur id non massa. Nunc lacus odio, facilisis ut tempor in, fringilla nec nibh. Nullam mi mauris, molestie et elementum a, sagittis eget neque. Sed vitae lectus ullamcorper, venenatis velit ut, volutpat libero. Nulla cursus quis est vitae facilisis. Donec viverra ac tortor ac mollis. Sed eget dictum justo, nec porta est. Fusce tincidunt, lacus vel accumsan vehicula, metus neque pulvinar erat, a rhoncus leo dolor eget odio. Vestibulum eget dui sed odio malesuada condimentum id a turpis. Cras cursus, quam nec convallis vulputate, lectus nulla volutpat nibh, vitae pharetra enim magna quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.");
        $jobZApi->setDisplayAt("footer");
        $jobZApi->setPositionOrder(3);

        $affiliates = new Info();
        $affiliates->setTitle("Affiliates");
        $affiliates->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac eros non nisl tempus euismod sed vitae odio. Integer egestas lectus in massa placerat scelerisque. Vivamus tempus sem eget sem tincidunt efficitur. Fusce bibendum tellus aliquet turpis porta, non consectetur nunc luctus. Fusce neque quam, pulvinar eget dignissim eu, tempor non orci. Vivamus vitae nunc id elit sollicitudin finibus imperdiet vitae mauris. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut hendrerit rutrum porttitor. Nulla facilisi. Fusce vitae magna neque. Proin in posuere purus. Proin euismod ex placerat lorem viverra, quis maximus est imperdiet. Phasellus ultricies leo eu erat pretium auctor. Vestibulum lorem eros, auctor in nisl quis, porttitor pellentesque tortor. Phasellus a ex non ipsum ornare efficitur id non massa. Nunc lacus odio, facilisis ut tempor in, fringilla nec nibh. Nullam mi mauris, molestie et elementum a, sagittis eget neque. Sed vitae lectus ullamcorper, venenatis velit ut, volutpat libero. Nulla cursus quis est vitae facilisis. Donec viverra ac tortor ac mollis. Sed eget dictum justo, nec porta est. Fusce tincidunt, lacus vel accumsan vehicula, metus neque pulvinar erat, a rhoncus leo dolor eget odio. Vestibulum eget dui sed odio malesuada condimentum id a turpis. Cras cursus, quam nec convallis vulputate, lectus nulla volutpat nibh, vitae pharetra enim magna quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.");
        $affiliates->setDisplayAt("footer");
        $affiliates->setPositionOrder(4);

        $manager->persist($aboutUs);
        $manager->persist($about);
        $manager->persist($contact);
        $manager->persist($jobZApi);
        $manager->persist($affiliates);

        $manager->flush();
    }
}