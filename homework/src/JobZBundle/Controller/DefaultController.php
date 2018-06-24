<?php

namespace JobZBundle\Controller;

use JobZBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $jobs = $this->getDoctrine()->getRepository('JobZBundle:Job')->findLatest(10);
        $jobsByCategories = array();
        /**
         * @var Job $job
         */
        foreach ($jobs as $job)
        {
            $catName = $job->getCategory()->getName();
            if(isset($jobsByCategories[$catName]))
            {
                $jobsByCategories[$catName][] = $job;
            } else {
                $jobsByCategories[$catName] = array($job);
            }
        }

        ksort($jobsByCategories);

        return $this->render('JobZBundle:Default:index.html.twig', array(
            "jobsByCategories" => $jobsByCategories
        ));
    }
}
