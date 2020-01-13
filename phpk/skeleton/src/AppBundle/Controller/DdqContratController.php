<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DdqContrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ddqcontrat controller.
 *
 */
class DdqContratController extends AbstractController
{
    /**
     * Lists all ddqContrat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ddqContrats = $em->getRepository('AppBundle:DdqContrat')->findAll();

        return $this->render('ddqcontrat/index.html.twig', array(
            'ddqContrats' => $ddqContrats,
        ));
    }

    /**
     * Creates a new ddqContrat entity.
     *
     */
    public function newAction(Request $request)
    {
        $ddqContrat = new Ddqcontrat();
        $form = $this->createForm('AppBundle\Form\DdqContratType', $ddqContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ddqContrat);
            $em->flush();

            return $this->redirectToRoute('ddqcontrat_show', array('id' => $ddqContrat->getId()));
        }

        return $this->render('ddqcontrat/new.html.twig', array(
            'ddqContrat' => $ddqContrat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ddqContrat entity.
     *
     */
    public function showAction(DdqContrat $ddqContrat)
    {
        $deleteForm = $this->createDeleteForm($ddqContrat);

        return $this->render('ddqcontrat/show.html.twig', array(
            'ddqContrat' => $ddqContrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ddqContrat entity.
     *
     */
    public function editAction(Request $request, DdqContrat $ddqContrat)
    {
        $deleteForm = $this->createDeleteForm($ddqContrat);
        $editForm = $this->createForm('AppBundle\Form\DdqContratType', $ddqContrat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ddqcontrat_edit', array('id' => $ddqContrat->getId()));
        }

        return $this->render('ddqcontrat/edit.html.twig', array(
            'ddqContrat' => $ddqContrat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ddqContrat entity.
     *
     */
    public function deleteAction(Request $request, DdqContrat $ddqContrat)
    {
        $form = $this->createDeleteForm($ddqContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ddqContrat);
            $em->flush();
        }

        return $this->redirectToRoute('ddqcontrat_index');
    }

    /**
     * Creates a form to delete a ddqContrat entity.
     *
     * @param DdqContrat $ddqContrat The ddqContrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DdqContrat $ddqContrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ddqcontrat_delete', array('id' => $ddqContrat->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
