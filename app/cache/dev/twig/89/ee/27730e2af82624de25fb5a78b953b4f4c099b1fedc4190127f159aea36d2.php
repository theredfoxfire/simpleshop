<?php

/* SsSsBundle:Product:search.html.twig */
class __TwigTemplate_89ee27730e2af82624de25fb5a78b953b4f4c099b1fedc4190127f159aea36d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SsSsBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SsSsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $this->env->loadTemplate("SsSsBundle:Product:list.html.twig")->display(array_merge($context, array("products" => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")))));
        // line 6
        echo "\t";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Product:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}
