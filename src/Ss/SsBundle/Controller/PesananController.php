<?php

namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ss\SsBundle\Entity\Pesanan;
use Ss\SsBundle\Form\PesananType;

/**
 * Pesanan controller.
 *
 */
class PesananController extends Controller
{

    /**
     * Lists all Pesanan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SsSsBundle:Pesanan')->findAll();

        return $this->render('SsSsBundle:Pesanan:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pesanan entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pesanan();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_pesanan_show', array('id' => $entity->getId())));
        }

        return $this->render('SsSsBundle:Pesanan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Pesanan entity.
     *
     * @param Pesanan $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pesanan $entity)
    {
        $form = $this->createForm(new PesananType(), $entity, array(
            'action' => $this->generateUrl('ss_pesanan_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pesanan entity.
     *
     */
    public function newAction()
    {
        $entity = new Pesanan();
        $form   = $this->createCreateForm($entity);

        return $this->render('SsSsBundle:Pesanan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pesanan entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Pesanan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pesanan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:Pesanan:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pesanan entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Pesanan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pesanan entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:Pesanan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pesanan entity.
    *
    * @param Pesanan $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pesanan $entity)
    {
        $form = $this->createForm(new PesananType(), $entity, array(
            'action' => $this->generateUrl('ss_pesanan_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pesanan entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Pesanan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pesanan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ss_pesanan_edit', array('id' => $id)));
        }

        return $this->render('SsSsBundle:Pesanan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pesanan entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SsSsBundle:Pesanan')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pesanan entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss_pesanan'));
    }

    /**
     * Creates a form to delete a Pesanan entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_pesanan_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function checkAction()
    {
		$em = $this->getDoctrine()->getManager();
		$usr = $this->get('security.context')->getToken()->getUser();
		$u = $usr->getUsername();
		
		$m = $em->getRepository('SsSsBundle:Orderer')->findOneByEmail($u);
		
		if(!$m){
			throw $this->createNotFoundException('Sorry, you are just need a bit of luck (entity) SimpleShop.com');
		}
		
		$session = $this->getRequest()->getSession();
        $id = $session->get('id');
        $is = $m->getIsActivated();        
        
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		
		if($is != 1){
			$this->get('security.context')->setToken(null);
			//$this->get('request')->getSession()->invalidate();
			return $this->render('SsSsBundle:Default:confirm.html.twig', array(
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
			));
		}
		
		return $this->render('SsSsBundle:Pesanan:check.html.twig', array(
		'm' => $m,
		));
	}
}
