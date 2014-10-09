<?php

namespace Ss\SsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductFotoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('token')
            ->add('created_at')
            ->add('updated_at')
            ->add('products')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ss\SsBundle\Entity\ProductFoto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ss_ssbundle_productfoto';
    }
}
