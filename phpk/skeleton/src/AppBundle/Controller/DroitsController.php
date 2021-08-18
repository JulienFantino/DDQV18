<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Droits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Droit controller.
 *
 * @Route("droits")
 */
class DroitsController extends AbstractController
{
    /**
     * Lists all droit entities.
     *
     * @Route("/", name="droits_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $droits = $em->getRepository('AppBundle:Droits')->findAll();

        return $this->render('droits/index.html.twig', array(
            'droits' => $droits,
        ));
    }

    /**
     * Creates a new droit entity.
     *
     * @Route("/new", name="droits_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $droit = new Droit();
        $form = $this->createForm('AppBundle\Form\DroitsType', $droit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($droit);
            $em->flush();

            return $this->redirectToRoute('droits_show', array('id' => $droit->getId()));
        }

        return $this->render('droits/new.html.twig', array(
            'droit' => $droit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a droit entity.
     *
     * @Route("/{id}", name="droits_show")
     * @Method("GET")
     */
    public function showAction(Droits $droit)
    {
        $deleteForm = $this->createDeleteForm($droit);

        return $this->render('droits/show.html.twig', array(
            'droit' => $droit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing droit entity.
     *
     * @Route("/{id}/edit", name="droits_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Droits $droit)
    {
        $deleteForm = $this->createDeleteForm($droit);
        $editForm = $this->createForm('AppBundle\Form\DroitsType', $droit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('droits_edit', array('id' => $droit->getId()));
        }

        return $this->render('droits/edit.html.twig', array(
            'droit' => $droit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a droit entity.
     *
     * @Route("/{id}", name="droits_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Droits $droit)
    {
        $form = $this->createDeleteForm($droit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($droit);
            $em->flush();
        }

        return $this->redirectToRoute('droits_index');
    }

    /**
     * Creates a form to delete a droit entity.
     *
     * @param Droits $droit The droit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Droits $droit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('droits_delete', array('id' => $droit->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
