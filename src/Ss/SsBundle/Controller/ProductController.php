<?php
namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\SessionStorage\SessionStorageInterface;

use Ss\SsBundle\Entity\Product;
use Ss\SsBundle\Entity\Category;
use Ss\SsBundle\Form\ProductType;
use Ss\SsBundle\Entity\Cart;
use Ss\SsBundle\Form\CartType;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{

    /**
     * Lists all Product entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
		$query = $em->getRepository('SsSsBundle:Product')->getProductList();
		
		if(!$session->get('id')){
			$st = date('Y-m-d H:i:s');
			$st = sha1($st.rand(11111, 99999));
			$session->set('id', $st);
		}
		$sid = $session->get('id');
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($sid);
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$query,
			$this->get('request')->query->get('page', 1),
			18
		);
		
		$males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();

        return $this->render('SsSsBundle:Product:index.html.twig', array(
            'entities' => $pagination,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
            'countqty' => $countqty,
        ));
    }
    /**
     * Creates a new Product entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Product();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setIsPublish(1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_product_show', array('id' => $entity->getId(),
             'category' => $entity->getCategories()->getSlug(), 
             'product' => $entity->getNamaSlug())
             ));
        }

        return $this->render('SsSsBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('ss_product_create'),
            'method' => 'POST',
        ));

        $form->add('file', 'file', array('label' => 'Gambar produk', 'required' => true));
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Product entity.
     *
     */
    public function newAction()
    {
        $entity = new Product();
        $form   = $this->createCreateForm($entity);

        return $this->render('SsSsBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Product entity.
     *
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        $entity = $em->getRepository('SsSsBundle:Product')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Sorry, you are just need a bit of luck (entity).');
        }
        $others = $em->getRepository('SsSsBundle:Product')->getGenderAll($entity->getCategories()->getGender(), $entity->getCategories(), 1, $entity->getId());
        if(!$session->get('id')){
			$st = date('Y-m-d H:i:s');
			$st = sha1($st.rand(11111, 99999));
			$session->set('id', $st);
		}
		
		$sid = $session->get('id');
		$cartqty = $em->getRepository('SsSsBundle:Cart')->getCartQty($entity->getId(), $sid);
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($sid);
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
		$males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
        
        $cart = new Cart();
        
        $form = $this->createCartForm($request, $cart, $entity);
        $form->handleRequest($request);

        if ($form->isValid() and ($entity->getStock() > 0)) {
			if($cartqty){
				$qty = $cartqty->getQty();
				$qty = $qty+1;
				$cartqty->setQty($qty);
				$stock = $cartqty->getStock();
				$stock = $stock-1;
				$cartqty->setStock($stock);
				$em->persist($cartqty);
				$em->flush();
				}
			else{
				$stock = $entity->getStock();
				$stock = $stock-1;
				$cart->setStock($stock);
				$em->flush();
				$em = $this->getDoctrine()->getManager();
				$cart->setQty(1);
				$cart->setSessionId($session->get('id'));
				$cart->setProducts($entity);
				$em->persist($cart);
				$em->flush();
			}

            return $this->redirect($this->generateUrl('ss_product_show', array('id' => $entity->getId(),
             'category' => $entity->getCategories()->getSlug(), 
             'product' => $entity->getNamaSlug())
             ));
        }
        
        $category = $entity->getCategories();
        $gender = $entity->getCategories()->getGender();

        return $this->render('SsSsBundle:Product:show.html.twig', array(
            'entity'      => $entity,
            'form'   => $form->createView(),
            'countqty' => $countqty,
            'cartqty' => $cartqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
            'gender' => $gender,
            'category' => $category,
            'others' => $others,
        ));
    }
    
    private function createCartForm(Request $request, Cart $cart, $entity)
    {
		$form = $this->createForm(new CartType(), $cart, array(
            'action' => $this->generateUrl('ss_product_show', array('id' => $entity->getId(),
             'category' => $entity->getCategories()->getSlug(), 
             'product' => $entity->getNamaSlug())
             ),
            'method' => 'POST',
        ));
        
        return $form;
	}

    /**
     * Displays a form to edit an existing Product entity.
     *
     */
    public function editAction($token)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Product')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($token);

        return $this->render('SsSsBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Product entity.
    *
    * @param Product $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('ss_product_update', array('token' => $entity->getToken())),
            'method' => 'PUT',
        ));

        $form->add('file', 'file', array('label' => 'Gambar produk', 'required' => false));
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Product entity.
     *
     */
    public function updateAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Product')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($token);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ss_product_edit', array('token' => $token)));
        }

        return $this->render('SsSsBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Product entity.
     *
     */
    public function deleteAction(Request $request, $token)
    {
        $form = $this->createDeleteForm($token);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SsSsBundle:Product')->findOneByToken($token);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss_product'));
    }

    /**
     * Creates a form to delete a Product entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_product_delete', array('token' => $token)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $this->getRequest()->get('query');
        $session = $request->getSession();
        
        $sid = $session->get('id');
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($sid);
        $countcart = $em->getRepository('SsSsBundle:Cart')->getCart($sid);
		$males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
 
        if(!$query) {
            if(!$request->isXmlHttpRequest()) {
                return $this->redirect($this->generateUrl('ss_product'));
            } else {
                return new Response('Coba keyword lain.');
            }
        }
 
        $products = $em->getRepository('SsSsBundle:Product')->getForLuceneQuery($query);
        
        if($request->isXmlHttpRequest()) {
			if('*' == $query || !$products || $query == '') {
                return new Response('Coba keyword lain.');
            }
            return $this->render('SsSsBundle:Product:list.html.twig', array('products' => $products));
        }
 
        return $this->render('SsSsBundle:Product:search.html.twig', array(
        'products' => $products,
        'males' => $males,
        'females' => $females,
        'countqty' => $countqty,
        'countcart' => $countcart,
        ));
    }
}
