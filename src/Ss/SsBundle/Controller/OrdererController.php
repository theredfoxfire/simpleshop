<?php

namespace Ss\SsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ss\SsBundle\Entity\Orderer;
use Ss\SsBundle\Entity\Product;
use Ss\SsBundle\Entity\PesananDetail;
use Ss\SsBundle\Entity\Pesanan;
use Ss\SsBundle\Form\OrdererType;
use Ss\SsBundle\Form\EmailType;

/**
 * Orderer controller.
 *
 */
class OrdererController extends Controller
{

    /**
     * Lists all Orderer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SsSsBundle:Orderer')->findAll();

        return $this->render('SsSsBundle:Orderer:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Orderer entity.
     *
     */
    public function createAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$id = $session->get('id');
		$bill = $session->get('bill');
		$note = $session->get('note');
		$ongkir = $session->get('ongkir');
		
        $entity = new Orderer();
		$pesanans = new Pesanan();
		
        $carts = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
			$session->set('email', $entity->getEmail());
			$session->set('nama', $entity->getNama());
			$session->set('phone', $entity->getPhone());
			$session->set('alamat', $entity->getAlamat());
			$session->set('kode_pos', $entity->getKodePos());

				$newemail = $entity->getEmail();
				$plainpass = $entity->getPassword();
				$factory = $this->get('security.encoder_factory');
				$encoder = $factory->getEncoder($entity);
				$encodedPassword = $encoder->encodePassword($plainpass, $entity->getSalt());
				$entity->setPassword($encodedPassword);
				$em->persist($entity);
				$em->flush();
				
				$pesanans->setOrderers($entity);
				$pesanans->setSession($id);
				if($note){
					$pesanans->setNotes($note);
				}
				$em->persist($pesanans);
				$em->flush();
				
				foreach($carts as $cart){
					$p = $cart->getProducts()->getToken();
					$product = $em->getRepository('SsSsBundle:Product')->findOneByToken($p);
					$product->setStock($cart->getStock());
					
					$details = new PesananDetail();
					$pesanan = $em->getRepository('SsSsBundle:Pesanan')->findOneBySession($cart->getSessionId());
					$details->setPesanans($pesanan);
					$details->setProducts($cart->getProducts());
					$details->setQty($cart->getQty());
					
					$em->persist($product);
					$em->persist($details);
				} $em->flush();
				
				$new = $em->getRepository('SsSsBundle:Orderer')->findOneByEmail($session->get('email'));
				$psn = $em->getRepository('SsSsBundle:Pesanan')->findOneBySession($id);
				$message = \Swift_Message::newInstance()
				->setSubject('Pesanan Anda Melalui SimpleShop.com')
				->setFrom(array('app@voincamagazine.com' => 'Pesanan Baru'))
				->setTo($new->getEmail())
				->setBody(
					$this->renderView('SsSsBundle:Orderer:pesananfirst.html.twig', array(
					'carts' => $carts,
					'ongkir' => $ongkir,  
					'bill' => $bill,
					'pesanan' => $psn->getToken(),
					'orderer' => $new->getToken())), 'text/html')
					;
					
				$this->get('mailer')->send($message);
				
				$session->set('id', null);
				$session->set('note', null);

            return $this->redirect($this->generateUrl('ss_orderer_thanks'));
        }
        
        $countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();

        return $this->render('SsSsBundle:Orderer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'countqty' => $countqty,
            'countcart' => $carts,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
            'ongkir' => $ongkir,
        ));
    }
    
    
    public function oldemailAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$id = $session->get('id');
		$bill = $session->get('bill');
		$ongkir = $session->get('ongkir');
		$note = $session->get('note');
		
		$pesanans = new Pesanan();
		
        $carts = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $email = $this->getRequest()->get('email');
		$session->set('email', $email);

        if ($email) {
			$filled = $em->getRepository('SsSsBundle:Orderer')->findOneByEmail($email);
			if($filled){
				$pesanans->setOrderers($filled);
				$pesanans->setSession($id);
				if($note){
					$pesanans->setNotes($note);
				}
				$em->persist($pesanans);
				$em->flush();
				
				foreach($carts as $cart){
					$p = $cart->getProducts()->getToken();
					$product = $em->getRepository('SsSsBundle:Product')->findOneByToken($p);
					$product->setStock($cart->getStock());
					
					$details = new PesananDetail();
					$pesanan = $em->getRepository('SsSsBundle:Pesanan')->findOneBySession($cart->getSessionId());
					$details->setPesanans($pesanan);
					$details->setProducts($cart->getProducts());
					$details->setQty($cart->getQty());
					
					$em->persist($product);
					$em->persist($details);
				} $em->flush();
				
				$new = $em->getRepository('SsSsBundle:Orderer')->findOneByEmail($session->get('email'));
				$psn = $em->getRepository('SsSsBundle:Pesanan')->findOneBySession($id);
				$message = \Swift_Message::newInstance()
				->setSubject('Pesanan Anda Melalui SimpleShop.com')
				->setFrom(array('app@voincamagazine.com' => 'Pesanan Baru'))
				->setTo($new->getEmail())
				->setBody(
					$this->renderView('SsSsBundle:Orderer:pesananfirst.html.twig', array(
					'carts' => $carts,
					'ongkir' => $ongkir,  
					'bill' => $bill,
					'pesanan' => $psn->getToken(),
					'orderer' => $new->getToken())), 'text/html')
					;
					
				$this->get('mailer')->send($message);
				
				$session->set('id', null);
				$session->set('note', null);
			}else{
				return $this->redirect($this->generateUrl('ss_orderer_new'));
			}

            return $this->redirect($this->generateUrl('ss_orderer_thanks'));
        }
        
        $countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();

        return $this->render('SsSsBundle:Orderer:newemail.html.twig', array(
            'countqty' => $countqty,
            'countcart' => $carts,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
            'ongkir' => $ongkir,
        ));
    }

    /**
     * Creates a form to create a Orderer entity.
     *
     * @param Orderer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Orderer $entity)
    {
        $session = $this->getRequest()->getSession();
        $form = $this->createForm(new OrdererType(), $entity, array(
            'action' => $this->generateUrl('ss_orderer_create'),
            'method' => 'POST',
        ));
        
        $form->add('nama', 'text', array('attr'=>array('value'=>$session->get('nama'))));
        $form->add('password', 'password', array('label' => 'Pilih Kata Sandi (panjang maksimal: 20 karakter)','attr'=>array('maxlength'=>'20')));
        $form->add('email', 'email', array('attr'=>array('value'=>$session->get('email'))));
        $form->add('phone', 'text', array('label'=>'Nomor Hp','attr'=>array('value'=>$session->get('phone'))));
        $form->add('alamat', 'textarea', array('label'=>'Alamat Pengriman','data'=>$session->get('alamat')));
        $form->add('kode_pos', 'text', array('label'=>'Kode Pos','attr'=>array('value'=>$session->get('kode_pos'))));

        return $form;
    }

    /**
     * Displays a form to create a new Orderer entity.
     *
     */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$id = $session->get('id');
		$bill = $session->get('bill');
		$ongkir = $session->get('ongkir');
		
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
        $entity = new Orderer();
        $form   = $this->createCreateForm($entity);
        
        if(!$countcart){
				return $this->redirect($this->generateUrl('ss_product'));
			}

        return $this->render('SsSsBundle:Orderer:new.html.twig', array(
            'entity' => $entity,
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
            'ongkir' => $ongkir,
            'form'   => $form->createView(),
        ));
    }
    
    public function emailAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$id = $session->get('id');
		$email = $session->get('email');
		$bill = $session->get('bill');
		$ongkir = $session->get('ongkir');
		
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
        
        if(!$countcart){
				return $this->redirect($this->generateUrl('ss_product'));
			}

        return $this->render('SsSsBundle:Orderer:newemail.html.twig', array(
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
            'ongkir' => $ongkir,
            'email' => $email,
        ));
    }

    /**
     * Finds and displays a Orderer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Orderer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:Orderer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Orderer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Orderer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SsSsBundle:Orderer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Orderer entity.
    *
    * @param Orderer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Orderer $entity)
    {
        $form = $this->createForm(new OrdererType(), $entity, array(
            'action' => $this->generateUrl('ss_orderer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Orderer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SsSsBundle:Orderer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ss_orderer_edit', array('id' => $id)));
        }

        return $this->render('SsSsBundle:Orderer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Orderer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SsSsBundle:Orderer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Orderer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss_orderer'));
    }

    /**
     * Creates a form to delete a Orderer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ss_orderer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function confirmAction($pesanan, $orderer)
    {
		$em = $this->getDoctrine()->getManager();
		$session = $this->getRequest()->getSession();
		if(!$session->get('id')){
			$st = date('Y-m-d H:i:s');
			$st = sha1($st.rand(11111, 99999));
			$session->set('id', $st);
		}
		$id = $session->get('id');
		
		$bill = $session->get('bill');
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		$entity = $em->getRepository('SsSsBundle:Orderer')->findOneByToken($orderer);
		$psn = $em->getRepository('SsSsBundle:Pesanan')->findOneByToken($pesanan);
		
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		if (!$entity) {
                throw $this->createNotFoundException('Sorry, you are need a bit of luck.');
            }
		if (!$psn) {
				throw $this->createNotFoundException('Sorry, you are need a bit of luck.');
			}
		$entity->setIsActivated('1');
		$em->persist($entity);
		$em->flush();
		$psn->setIsConfirm('1');
		$em->persist($psn);
		$em->flush();
		
		return $this->render('SsSsBundle:Orderer:thanks.html.twig', array(
            'entity'      => $entity,
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
            'bill' => $bill,
        ));
	}
	
	public function thanksAction()
    {
		$em = $this->getDoctrine()->getManager();
		$session = $this->getRequest()->getSession();
		if(!$session->get('id')){
			$st = date('Y-m-d H:i:s');
			$st = sha1($st.rand(11111, 99999));
			$session->set('id', $st);
		}
		$id = $session->get('id');
		
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
		
		return $this->render('SsSsBundle:Orderer:firstthanks.html.twig', array(
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
        ));
	}
}
