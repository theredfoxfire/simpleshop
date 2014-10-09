<?php

/* SsSsBundle:Product:index.html.twig */
class __TwigTemplate_f3277bf21c6aeca58275d8ac4f3f91777717e54a9fcb2245f3eec73c7d878f37 extends Twig_Template
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
        echo "<section class=\"product-grid twelve columns alpha omega\">
\t\t";
        // line 6
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
            // line 7
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 8
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2) == 0)) {
                // line 10
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 12
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 14
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categories"), "slug"), "product" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 21
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 22
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 24
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
        // line 25
        echo "</section>
\t";
    }

    // line 27
    public function block_page($context, array $blocks = array())
    {
        // line 28
        echo "\t<div class=\"navigation\">
\t\t";
        // line 29
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : null));
        echo "
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  81 => 17,  70 => 15,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 173,  288 => 172,  236 => 129,  218 => 114,  191 => 89,  160 => 74,  124 => 51,  113 => 46,  110 => 45,  34 => 11,  190 => 51,  152 => 40,  145 => 65,  134 => 35,  126 => 31,  77 => 19,  74 => 16,  58 => 19,  52 => 7,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 55,  128 => 49,  111 => 25,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 28,  108 => 36,  102 => 32,  71 => 30,  67 => 14,  63 => 12,  59 => 10,  47 => 10,  94 => 38,  89 => 22,  85 => 18,  79 => 18,  75 => 27,  68 => 16,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 41,  151 => 68,  142 => 59,  138 => 37,  136 => 56,  123 => 30,  121 => 50,  117 => 48,  115 => 43,  105 => 40,  101 => 26,  91 => 21,  69 => 24,  62 => 14,  49 => 14,  28 => 3,  87 => 33,  72 => 16,  66 => 24,  55 => 8,  41 => 15,  31 => 4,  38 => 6,  26 => 6,  25 => 5,  24 => 3,  35 => 6,  29 => 4,  21 => 2,  19 => 1,  98 => 25,  93 => 22,  88 => 6,  78 => 34,  46 => 14,  44 => 9,  32 => 5,  27 => 4,  22 => 1,  43 => 6,  40 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 48,  176 => 64,  173 => 65,  168 => 47,  164 => 45,  162 => 44,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 38,  133 => 55,  130 => 33,  125 => 44,  122 => 29,  116 => 27,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 20,  80 => 19,  73 => 28,  64 => 10,  60 => 13,  57 => 19,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 14,  33 => 6,  30 => 7,);
    }
}
