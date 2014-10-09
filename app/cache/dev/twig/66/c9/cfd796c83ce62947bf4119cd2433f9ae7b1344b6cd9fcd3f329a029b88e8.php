<?php

/* SsSsBundle:Product:list.html.twig */
class __TwigTemplate_66c9cfd796c83ce62947bf4119cd2433f9ae7b1344b6cd9fcd3f329a029b88e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"breadcrumb\" class=\"desktop\">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Home</a> — 
\t<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("ss_product_search");
        echo "\" class=\"active\">Pencarian</a>
</div>
<h1>Hasil Pencarian</h1>
<!--END BREADCRUMB--><section class=\"product-grid twelve columns alpha omega\" style=\"border-bottom: 1px solid #E8E8E8;\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 9
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 11
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 13
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 15
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), "slug"), "product" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 22
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 23
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 25
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</section>
<br class=\"clear\">
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 26,  95 => 25,  91 => 23,  89 => 22,  83 => 19,  79 => 18,  72 => 17,  68 => 16,  65 => 15,  61 => 13,  57 => 11,  53 => 9,  50 => 8,  33 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
