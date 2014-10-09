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
        if (((isset($context["gender"]) ? $context["gender"] : null) == 1)) {
            // line 8
            echo "\t\t\t";
            if ((isset($context["category"]) ? $context["category"] : null)) {
                // line 9
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "gender") == 1)) {
                    // line 10
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "mens", "id" => "1")), "html", null, true);
                    echo "\">Pria</a> —
\t\t\t\t\t<a class=\"active\" href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "gender" => "mens", "genid" => "1")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo " </a>
\t\t\t\t";
                }
                // line 13
                echo "\t\t\t";
            } else {
                // line 14
                echo "\t\t\t<a class=\"active\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "mens", "id" => "1")), "html", null, true);
                echo "\">Pria</a>
\t\t\t";
            }
            // line 16
            echo "\t\t";
        } else {
            // line 17
            echo "\t\t\t";
            if ((isset($context["category"]) ? $context["category"] : null)) {
                // line 18
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "gender") == 2)) {
                    // line 19
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                    echo "\">Wanita</a> —
\t\t\t\t\t<a class=\"active\" href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "gender" => "womens", "genid" => "2")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo " </a>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t";
            } else {
                // line 23
                echo "\t\t\t<a class=\"active\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                echo "\">Wanita</a>
\t\t\t";
            }
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "</div>
<!--END BREADCRUMB-->
<section class=\"product-grid twelve columns alpha omega\">
\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
            // line 30
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 31
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2) == 0)) {
                // line 33
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 35
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 37
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categories"), "slug"), "product" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 44
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 45
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 47
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
        // line 48
        echo "</section>
\t";
    }

    // line 50
    public function block_page($context, array $blocks = array())
    {
        // line 51
        echo "\t<div class=\"navigation\">
\t\t";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : null));
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
        return array (  190 => 51,  152 => 40,  145 => 39,  134 => 35,  126 => 31,  77 => 19,  74 => 18,  58 => 19,  52 => 11,  53 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 13,  47 => 10,  94 => 38,  89 => 22,  85 => 25,  79 => 18,  75 => 27,  68 => 16,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 41,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  123 => 30,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 26,  91 => 27,  69 => 24,  62 => 14,  49 => 17,  28 => 3,  87 => 33,  72 => 16,  66 => 24,  55 => 15,  41 => 8,  31 => 4,  38 => 6,  26 => 6,  25 => 5,  24 => 3,  35 => 6,  29 => 4,  21 => 2,  19 => 1,  98 => 25,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 9,  32 => 5,  27 => 4,  22 => 2,  43 => 6,  40 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 48,  176 => 64,  173 => 65,  168 => 47,  164 => 45,  162 => 44,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 38,  133 => 55,  130 => 33,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 20,  80 => 19,  73 => 19,  64 => 10,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
