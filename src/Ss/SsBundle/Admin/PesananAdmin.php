<?php
namespace Ss\SsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ss\SsBundle\Entity\Product;

class PesananAdmin extends Admin
{
	protected $datagridValues = array(
		'_sort_order' => 'DESC',
		'_sort_by' => 'created_at'
	);
	
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('notes')
            ->add('session')
            ->add('orderers')
            ->add('is_payyed')
		;
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
            ->add('orderers')
            ->add('notes')
            ->add('is_payyed')
		;
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('orderers')
			->add('notes')
            ->add('is_payyed')
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
			->add('notes')
            ->add('orderers')
            ->add('is_payyed')
            ->add('token')
		;
	}
}

