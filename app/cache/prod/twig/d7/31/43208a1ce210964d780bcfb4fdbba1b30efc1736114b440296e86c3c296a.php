<?php

/* SsSsBundle:Product:show.html.twig */
class __TwigTemplate_d73143208a1ce210964d780bcfb4fdbba1b30efc1736114b440296e86c3c296a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SsSsBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"breadcrumb\" class=\"desktop\">
\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Home</a> —
\t\t";
        // line 7
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "gender") == 1)) {
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
\t\t\t\t\t<a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "gender" => "mens", "genid" => "1")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo " </a> — <a href=\"\" class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                }
                // line 13
                echo "\t\t\t";
            } else {
                // line 14
                echo "\t\t\t<a href=\"";
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
\t\t\t\t\t<a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "gender" => "womens", "genid" => "2")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo " </a> — <a href=\"\" class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
                    echo "</a>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t";
            } else {
                // line 23
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                echo "\">Wanita</a>
\t\t\t";
            }
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "</div>

<!--START PRODUCT-->
<div itemscope=\"\" itemtype=\"http://schema.org/Product\" class=\"twelve columns alpha omega\">
\t<!-- START PRODUCT IMAGES-->
\t<section id=\"images\" class=\"seven columns alpha\">
\t\t<!-- START ZOOM IMAGE-->
    
\t\t<img id=\"feature-image\" class=\"desktop\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/zoom_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
        echo "\" alt=\"Product Image\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/zoom_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
        echo "?v=1373479045\">
\t\t<img class=\"mobile\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/grande_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
        echo "\" alt=\"Magenta skirt\">
\t\t<!-- END ZOOM IMAGE-->
\t\t<!-- START GALLERY-->
\t\t<section id=\"gallery\">
\t\t\t<a rel=\"gallery\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/grande_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
        echo "?v=1373479045\" class=\"fancybox-media \">
\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto"), "html", null, true);
        echo "\" alt=\"Magenta skirt\">
\t\t\t</a>
\t\t</section>
\t\t<!-- END GALLERY-->
\t</section>
\t<!-- END PRODUCT IMAGES-->
\t<!--START BUY-->
\t<section id=\"buy\" class=\"five columns omega\">
\t\t";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "contact-form")));
        echo "
\t\t\t<h1>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nama"), "html", null, true);
        echo "</h1>
\t\t\t<h2><span class=\"product-price\">Rp ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cost"), "html", null, true);
        echo "</span></h2>
\t\t\t<div id=\"product-variants\" class=\" hidden\">
\t\t       <div class=\"selector-wrapper\"><select id=\"product-select-option-0\" data-option=\"option1\" class=\"single-option-selector\">
\t\t       <option selected=\"selected\" value=\"\"></option></select></div><select style=\"display: none;\" id=\"product-select\" name=\"id\" class=\"hidden\">
\t\t       <option selected=\"selected\" value=\"\"></option>
\t\t       </select>
\t\t    </div>        
\t\t\t";
        // line 57
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock") > 0)) {
            echo "Stok: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stock"), "html", null, true);
            echo "</br>
\t\t\t<input style=\"opacity: 1;\" value=\"Masukan Ke Keranjang\" id=\"add\" class=\"btn add-to-cart\" type=\"submit\">\t
\t\t\t";
        } else {
            // line 60
            echo "\t\t     <input style=\"opacity: 1;\" value=\"Habis Terjual\" id=\"add\" class=\"btn add-to-cart disabled\" disabled=\"disabled\" type=\"submit\">\t
\t\t    ";
        }
        // line 62
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t    <!-- START SHARE-->
\t<section id=\"share\" class=\"clearfix\">
\t<div class=\"google\">
\t\t
\t\t
\t</div>
\t<div class=\"twitter\">
\t\t
\t</div>
\t<div class=\"pinterest\">
\t\t
\t</div>
\t<div class=\"facebook\">
\t\t
\t</div>
</section>
<!-- END SHARE-->
\t\t
\t</section>
\t<!--END BUY-->
\t<br class=\"clear\">
\t
\t<!--START PRODUCT INFO-->
\t<section id=\"product-info\">
\t\t
\t\t<ul class=\"tabs clearfix\">
\t    \t<li class=\"first\"><a class=\"active\" href=\"#tab1\">Product description</a></li>
\t    \t<li><a href=\"#tab2\">Shipping info</a></li>
\t  \t</ul>
\t\t<div id=\"tab1\">
\t\t\t<div class=\"wysiwyg\">
\t\t    <p>This area is populated by the product description. If you ever 
run out of things to say about what you're selling then take a look at <a href=\"http://www.shopify.ca/blog/8211159-9-simple-ways-to-write-product-descriptions-that-sell\" target=\"_blank\">9 ways to write compelling product descriptions</a>. In Theme Settings you can also change render the product description to the write of the product images.</p>
<p>&nbsp;</p>
\t\t\t</div>
\t\t </div>
\t\t <div style=\"display: none;\" id=\"tab2\">
\t\t   \t<div class=\"wysiwyg\">
\t\t    <p>You can embed any other page on your store here. It's perfect for things like displaying shipping rates.&nbsp;</p>
\t\t\t</div>
\t\t</div>
\t\t
\t</section>
\t<!--END PRODUCT INFO-->
\t
\t
\t\t
\t

\t
\t\t<!--START PRODUCT GRID-->
\t\t<section id=\"related-products\" class=\"product-grid twelve columns alpha omega\">
\t\t<h2>Produk lain yang anda sukai</h2>

\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) ? $context["others"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 118
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 119
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2) == 0)) {
                // line 121
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 123
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 125
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["other"]) ? $context["other"] : null), "categories"), "slug"), "product" => $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : null), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 132
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                // line 133
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 135
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t</section>
\t\t<!--END PRODUCT GRID-->
\t\t<br class=\"clear\">
\t

</div>
<!--END PRODUCT-->


\t\t\t<br class=\"clear\">

";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 136,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 49,  153 => 48,  120 => 34,  84 => 19,  37 => 5,  97 => 24,  81 => 18,  70 => 15,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 74,  124 => 51,  113 => 46,  110 => 26,  34 => 4,  190 => 51,  152 => 40,  145 => 65,  134 => 35,  126 => 31,  77 => 19,  74 => 16,  58 => 19,  52 => 10,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 55,  128 => 35,  111 => 25,  107 => 25,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 28,  108 => 36,  102 => 32,  71 => 30,  67 => 14,  63 => 12,  59 => 10,  47 => 10,  94 => 38,  89 => 20,  85 => 18,  79 => 18,  75 => 16,  68 => 16,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 62,  171 => 57,  166 => 71,  163 => 62,  158 => 67,  156 => 41,  151 => 68,  142 => 59,  138 => 37,  136 => 39,  123 => 30,  121 => 50,  117 => 48,  115 => 43,  105 => 40,  101 => 23,  91 => 21,  69 => 14,  62 => 14,  49 => 9,  28 => 3,  87 => 33,  72 => 16,  66 => 13,  55 => 8,  41 => 15,  31 => 4,  38 => 6,  26 => 6,  25 => 5,  24 => 3,  35 => 6,  29 => 2,  21 => 2,  19 => 1,  98 => 22,  93 => 22,  88 => 6,  78 => 17,  46 => 8,  44 => 7,  32 => 5,  27 => 4,  22 => 1,  43 => 6,  40 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 48,  176 => 64,  173 => 65,  168 => 47,  164 => 45,  162 => 44,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 40,  133 => 55,  130 => 33,  125 => 44,  122 => 29,  116 => 27,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 20,  80 => 19,  73 => 28,  64 => 10,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 14,  33 => 6,  30 => 7,);
    }
}
