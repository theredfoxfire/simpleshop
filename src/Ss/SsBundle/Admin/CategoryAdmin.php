<?php
namespace Ss\SsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Ss\SsBundle\Entity\Category;

class CategoryAdmin extends Admin
{
	protected $datagridValues = array(
		'_sort_order' => 'ASC',
		'_sort_by' => 'name'
	);
	
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('name')
			->add('gender', 'choice', array('label'=>'Gender (Pria/Wanita)','choices' => Category::getTypes(), 'expanded' => true))
			;
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('name')
		;
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('name')
			->add('slug')
		;
	}
}
