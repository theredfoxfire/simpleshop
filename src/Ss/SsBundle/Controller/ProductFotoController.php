<?php

namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ss\SsBundle\Entity\ProductFoto;
use Ss\SsBundle\Form\ProductFotoType;

/**
 * ProductFoto controller.
 *
 */
class ProductFotoController extends Controller
{

    /**
     * Lists all ProductFoto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SsSsBundle:ProductFoto')->findAll();

        return $this->render('SsSsBundle:ProductFoto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ProductFoto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ProductFoto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_foto_show', array('id' => $entity->getId())));
        }

        return $this->render('SsSsBundle:ProductFoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ProductFoto entity.
     *
     * @param ProductFoto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProductFoto $entity)
    {
        $form = $this->createForm(new ProductFotoType(), $entity, array(
            'action' => $this->generateUrl('ss_foto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ProductFoto entity.
     *
     */
    public function newAction()
    {
        $entity = new ProductFoto();
        $form   = $this->createCreateForm($entity);

        return $this->render('SsSsBundle:ProductFoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProductFoto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:ProductFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductFoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:ProductFoto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProductFoto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:ProductFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductFoto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:ProductFoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ProductFoto entity.
    *
    * @param ProductFoto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ProductFoto $entity)
    {
        $form = $this->createForm(new ProductFotoType(), $entity, array(
            'action' => $this->generateUrl('ss_foto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ProductFoto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:ProductFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductFoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ss_foto_edit', array('id' => $id)));
        }

        return $this->render('SsSsBundle:ProductFoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ProductFoto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SsSsBundle:ProductFoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProductFoto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss_foto'));
    }

    /**
     * Creates a form to delete a ProductFoto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_foto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
