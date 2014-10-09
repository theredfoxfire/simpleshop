<?php

namespace Ss\SsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SsSsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function loginAction()
    {
		$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $session = $request->getSession();
        $id = $session->get('id');
        
		$countqty = $em->getRepository('SsSsBundle:Cart')->getCountCart($id);
		$countcart = $em->getRepository('SsSsBundle:Cart')->getCart($id);
        $males = $em->getRepository('SsSsBundle:Category')->getGenderMale();
		$females = $em->getRepository('SsSsBundle:Category')->getGenderFemale();
		
		if($countqty['qty']==""){
			$countqty['qty']= 0;
			}
 
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render('SsSsBundle:Default:login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            'countqty' => $countqty,
            'countcart' => $countcart,
            'males' => $males,
            'females' => $females,
        ));
    }
}
