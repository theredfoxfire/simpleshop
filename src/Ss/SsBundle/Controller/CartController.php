<?php

namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ss\SsBundle\Entity\Cart;
use Ss\SsBundle\Form\CartType;
use Ss\SsBundle\Entity\Product;
use Ss\SsBundle\Form\ProductType;

/**
 * Cart controller.
 *
 */
class CartController extends Controller
{

    /**
     * Lists all Cart entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SsSsBundle:Cart')->findAll();

        return $this->render('SsSsBundle:Cart:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Cart entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Cart();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_cart_show', array('id' => $entity->getId())));
        }

        return $this->render('SsSsBundle:Cart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cart entity.
     *
     * @param Cart $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cart $entity)
    {
        $form = $this->createForm(new CartType(), $entity, array(
            'action' => $this->generateUrl('ss_cart_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cart entity.
     *
     */
    public function newAction()
    {
        $entity = new Cart();
        $form   = $this->createCreateForm($entity);

        return $this->render('SsSsBundle:Cart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cart entity.
     *
     */
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$id = $session->get('id');
		
        $countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		$bill = 0;
		$ongkir = 0;
		foreach($countcart as $l){
			$ongkir = $ongkir + ( $l->getProducts()->getOngkir() * $l->getQty() );
			$bill = $bill + $l->getTotal();
			}
		$bill = $ongkir + $bill;
		$bill = number_format($bill, 0, ',', '.');
		$ongkir = number_format($ongkir, 0, ',', '.');
		$session->set('bill', $bill);
		$session->set('ongkir', $ongkir);

        if (!$countcart) {
            return $this->render('SsSsBundle:Cart:null.html.twig', array(
            'males' => $males,
            'females' => $females,
            'countqty' => $countqty,
        ));
        }

        return $this->render('SsSsBundle:Cart:show.html.twig', array(
            'countcart'      => $countcart,
            'countqty' => $countqty,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
            'ongkir' => $ongkir,
        ));
    }
    
    /**
     * Displays a form to edit an existing Cart entity.
     *
     */
    public function editAction($token)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Cart')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cart entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($token);

        return $this->render('SsSsBundle:Cart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cart entity.
    *
    * @param Cart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cart $entity)
    {
        $form = $this->createForm(new CartType(), $entity, array(
            'action' => $this->generateUrl('ss_cart_update', array('token' => $entity->getToken())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cart entity.
     *
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $sid = $session->get('id');
        
		$js = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
        
		$la = $this->getRequest()->get('lanjut');
		$up = $this->getRequest()->get('update');
		if($up){
        foreach($js as $j){
			$qty = $this->getRequest()->get($j->getToken());
			$entity = $em->getRepository('SsSsBundle:Cart')->findOneByToken($j->getToken());
			$cqty = $entity->getQty();
			$cstock = $entity->getStock();
			$cstock = $cqty + $cstock;
			if (!$entity) {
				throw $this->createNotFoundException('Unable to find Pesanan entity.');
			}
			if ($qty <= 0){
				$this->get('session')->getFlashBag()->add('qty','Update jumlah '.$entity->getProducts()->getNama().' gagal, karena jumlah yang anda masukan kurang dari jumlah minimal ( 1 ).');
				return $this->redirect($this->generateUrl('ss_cart_show'));
			}
			elseif($qty > $cstock){
				$this->get('session')->getFlashBag()->add('qty','Update jumlah '.$entity->getProducts()->getNama().' gagal, karena jumlah yang anda masukan melebihi stok yang tersisa. Sisa stok untuk '.$entity->getProducts()->getNama().': '.$cstock);
				return $this->redirect($this->generateUrl('ss_cart_show'));
			}
			else{
				$s = $entity->getStock() - $qty + $cqty;
				$entity->setStock($s);
				$entity->setQty($qty);
			}
		$em->persist($entity);
        $em->flush();
		}

		}
		if($la){
			$note = $this->getRequest()->get('note');
			if($note){
			$session->set('note', $note);
			}
			return $this->redirect($this->generateUrl('ss_orderer_newemail'));
		}

        return $this->redirect($this->generateUrl('ss_cart_show'));
    }
    /**
     * Deletes a Cart entity.
     *
     */
    public function deleteAction(Request $request, $token, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SsSsBundle:Cart')->findOneByToken($token);
        $product = $em->getRepository('SsSsBundle:Product')->findOneById($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cart entity.');
        }

        $em->remove($entity);
        $em->flush();
        

        return $this->redirect($this->generateUrl('ss_product_show', array('id' => $product->getId(),
             'category' => $product->getCategories()->getSlug(), 
             'product' => $product->getNamaSlug())
             ));
    }
    
    public function removeAction(Request $request, $token, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SsSsBundle:Cart')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cart entity.');
        }

        $em->remove($entity);
        $em->flush();
        

        return $this->redirect($this->generateUrl('ss_cart_show'));
    }

    /**
     * Creates a form to delete a Cart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_cart_delete', array('token' => $token)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
