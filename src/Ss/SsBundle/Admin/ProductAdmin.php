<?php
namespace Ss\SsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ss\SsBundle\Entity\Product;

class ProductAdmin extends Admin
{
	protected $datagridValues = array(
		'_sort_order' => 'DESC',
		'_sort_by' => 'created_at'
	);
	
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('nama')
			->add('file', 'file', array('label' => 'Gambar produk', 'required' => false))
            ->add('description')
            ->add('harga')
            ->add('stock')
            ->add('ongkir')
            ->add('categories')
		;
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('nama')
            ->add('description')
            ->add('harga')
            ->add('stock')
            ->add('ongkir')
            ->add('is_publish')
		;
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('nama')
			->add('description')
            ->add('harga')
            ->add('stock')
            ->add('ongkir')
            ->add('categories')
            ->add('is_publish')
            ->add('_action', 'actions', array(
				'actions' => array(
					'show' => array(),
					'edit' => array(),
					'delete' => array(),
				)
            ))
		;
	}
	
	protected function configureShowField(ShowMapper $showMapper)
	{
		$showMapper
			->add('nama')
			->add('webPath', 'string', array('template' => 'SsSsBundle:ProductAdmin:list_image.html.twig'))
            ->add('description')
            ->add('harga')
            ->add('stock')
            ->add('ongkir')
            ->add('is_publish')
            ->add('token')
		;
	}
}
