<?php

/* SsSsBundle:Category:category.html.twig */
class __TwigTemplate_cacb8bd0fc9c8c5b35348012e3a2812a22cd3997992509f612edf0f07d07b094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SsSsBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page' => array($this, 'block_page'),
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
        echo "<div id=\"breadcrumb\" class=\"desktop\">
\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Home</a> —
\t\t";
        // line 7
        if (((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")) == 1)) {
            // line 8
            echo "\t\t\t";
            if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
                // line 9
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "gender") == 1)) {
                    // line 10
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "mens", "id" => "1")), "html", null, true);
                    echo "\">Pria</a> —
\t\t\t\t\t<a class=\"active\" href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), "gender" => "mens", "genid" => "1")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo " </a>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!--END BREADCRUMB-->
\t\t\t\t\t<h1>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo "</h1>
\t\t\t\t";
                }
                // line 17
                echo "\t\t\t";
            } else {
                // line 18
                echo "\t\t\t<a class=\"active\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "mens", "id" => "1")), "html", null, true);
                echo "\">Pria</a>
\t\t\t</div>
\t\t\t<!--END BREADCRUMB-->
\t\t\t<h1>Pria</h1>
\t\t\t";
            }
            // line 23
            echo "\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
                // line 25
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "gender") == 2)) {
                    // line 26
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                    echo "\">Wanita</a> —
\t\t\t\t\t<a class=\"active\" href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), "gender" => "womens", "genid" => "2")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo " </a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--END BREADCRUMB-->
\t\t\t\t\t<h1>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo "</h1>
\t\t\t\t";
                }
                // line 32
                echo "\t\t\t";
            } else {
                // line 33
                echo "\t\t\t<a class=\"active\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                echo "\">Wanita</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--END BREADCRUMB-->
\t\t\t\t\t<h1>Wanita</h1>
\t\t\t";
            }
            // line 38
            echo "\t\t";
        }
        // line 39
        echo "<section class=\"product-grid twelve columns alpha omega\">
\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
            // line 41
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 42
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 44
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 46
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 48
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), "slug"), "product" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 55
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 56
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 58
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
        // line 59
        echo "</section>
\t";
    }

    // line 61
    public function block_page($context, array $blocks = array())
    {
        // line 62
        echo "\t<div class=\"navigation\">
\t\t";
        // line 63
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 63,  207 => 62,  204 => 61,  199 => 59,  185 => 58,  181 => 56,  179 => 55,  173 => 52,  169 => 51,  162 => 50,  158 => 49,  155 => 48,  151 => 46,  147 => 44,  143 => 42,  140 => 41,  123 => 40,  120 => 39,  117 => 38,  108 => 33,  105 => 32,  100 => 30,  92 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  69 => 18,  66 => 17,  61 => 15,  52 => 11,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
