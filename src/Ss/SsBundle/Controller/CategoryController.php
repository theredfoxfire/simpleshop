<?php

namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ss\SsBundle\Entity\Category;
use Ss\SsBundle\Form\CategoryType;


/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SsSsBundle:Category')->findAll();

        return $this->render('SsSsBundle:Category:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Category entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Category();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_category_show', array('id' => $entity->getId())));
        }

        return $this->render('SsSsBundle:Category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Category entity.
     *
     * @param Category $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('ss_category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Category entity.
     *
     */
    public function newAction()
    {
        $entity = new Category();
        $form   = $this->createCreateForm($entity);

        return $this->render('SsSsBundle:Category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Category entity.
     *
     */
    public function showAction(Request $request, $id, $genid)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $query = $em->getRepository('SsSsBundle:Product')->getGenderAll(null, $id);
        
        $sid = $session->get('id');
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($sid);
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
		$males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		$category = $em->getRepository('SsSsBundle:Category')->findOneById($id);
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$query,
			$this->get('request')->query->get('page', 1),
			27
		);

        return $this->render('SsSsBundle:Category:category.html.twig', array(
            'entities'      => $pagination,
            'gender' => $genid,
            'category' => $category,
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
        ));
    }

    /**
     * Displays a form to edit an existing Category entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:Category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Category entity.
    *
    * @param Category $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('ss_category_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Category entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ss_category_edit', array('id' => $id)));
        }

        return $this->render('SsSsBundle:Category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Category entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SsSsBundle:Category')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Category entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss_category'));
    }

    /**
     * Creates a form to delete a Category entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function genderAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $query = $em->getRepository('SsSsBundle:Product')->getGenderAll($id);
        
        $sid = $session->get('id');
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($sid);
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
		$males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$query,
			$this->get('request')->query->get('page', 1),
			27
		);

        return $this->render('SsSsBundle:Category:category.html.twig', array(
            'entities'      => $pagination,
            'gender' => $id,
            'category' => null,
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
        ));
    }
}
