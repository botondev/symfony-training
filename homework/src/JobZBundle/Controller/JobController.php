<?php

namespace JobZBundle\Controller;

use JobZBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Job controller.
 *
 * @Route("job")
 */
class JobController extends Controller
{
    /**
     * Lists all job entities.
     *
     * @Route("/", name="job_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jobs = $em->getRepository('JobZBundle:Job')->findAll();

        return $this->render('job/index.html.twig', array(
            'jobs' => $jobs,
        ));
    }

    /**
     * Creates a new job entity.
     * @Security("has_role('ROLE_USER')")
     * @Route("/new", name="job_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $user = $this->getUser();
        $job->setUser($user);
        $form = $this->createForm('JobZBundle\Form\JobType', $job);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_show', array('id' => $job->getId()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a job entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{id}/show", name="job_show")
     * @Method("GET")
     */
    public function showAction(Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a job entity.
     * @Security("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * @Route("/{id}", name="job_display")
     * @Method("GET")
     */
    public function displayAction(Job $job)
    {
        return $this->render('job/display.html.twig', array(
            'job' => $job
        ));
    }

    /**
     * Displays a form to edit an existing job entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{id}/edit", name="job_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('JobZBundle\Form\JobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('job_edit', array('id' => $job->getId()));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a job entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{id}", name="job_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Job $job)
    {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('job_index');
    }

    /**
     * Creates a form to delete a job entity.
     *
     * @param Job $job The job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Job $job)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('job_delete', array('id' => $job->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
