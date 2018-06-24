<?php

namespace JobZBundle\Controller;

use JobZBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $keyword = $request->query->get('keyword');
        $repo = $this->getDoctrine()->getRepository('JobZBundle:Job');
        $jobs = array();
        if($keyword) {
            $jobs = $repo->findByKeyword($keyword);
        } else {
            $jobs = $repo->findLatest(10);
        }

        $jobsByCategories = $this->groupJobsByCategories($jobs);

        return $this->render('JobZBundle:Default:index.html.twig', array(
            "jobsByCategories" => $jobsByCategories
        ));
    }

    private function groupJobsByCategories($jobs)
    {
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

        return $jobsByCategories;
    }

    public function _renderInfosAction($position)
    {
        $infos = $this->getDoctrine()->getRepository('JobZBundle:Info')
            ->findBy(
                array('displayAt' => $position),
                array('positionOrder' => 'ASC')
                );

        return $this->render('JobZBundle:Default:_renderInfos.html.twig', array(
            "infos" => $infos
        ));
    }
}
