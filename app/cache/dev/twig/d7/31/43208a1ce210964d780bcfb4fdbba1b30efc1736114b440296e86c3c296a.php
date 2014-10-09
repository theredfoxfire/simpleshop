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
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "gender") == 1)) {
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
\t\t\t\t\t<a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), "gender" => "mens", "genid" => "1")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo " </a> — <a href=\"\" class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
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
            if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
                // line 18
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "gender") == 2)) {
                    // line 19
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
                    echo "\">Wanita</a> —
\t\t\t\t\t<a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"), "gender" => "womens", "genid" => "2")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo " </a> — <a href=\"\" class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
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
<h1>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), "name"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo "</h1>
<div itemscope=\"\" itemtype=\"http://schema.org/Product\" class=\"twelve columns alpha omega\">
\t<!-- START PRODUCT IMAGES-->
\t<section id=\"images\" class=\"seven columns alpha\">
\t\t<!-- START ZOOM IMAGE-->
    
\t\t<img id=\"feature-image\" class=\"desktop\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/zoom_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "\" alt=\"Product Image\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/zoom_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "?v=1373479045\">
\t\t<img class=\"mobile\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/grande_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo "\">
\t\t<!-- END ZOOM IMAGE-->
\t\t<!-- START GALLERY-->
\t\t<section id=\"gallery\">
\t\t\t<a rel=\"gallery\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/grande_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "?v=1373479045\" class=\"fancybox-media \">
\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t</section>
\t\t<!-- END GALLERY-->
\t</section>
\t<!-- END PRODUCT IMAGES-->
\t<!--START BUY-->
\t<section id=\"buy\" class=\"five columns omega\">
\t\t";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "contact-form")));
        echo "
\t\t\t<h1>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo "</h1>
\t\t\t<h2><span class=\"product-price\">Rp ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cost"), "html", null, true);
        echo "</span></h2>
\t\t\t<div id=\"product-variants\" class=\" hidden\">
\t\t       <div class=\"selector-wrapper\"><select id=\"product-select-option-0\" data-option=\"option1\" class=\"single-option-selector\">
\t\t       <option selected=\"selected\" value=\"\"></option></select></div><select style=\"display: none;\" id=\"product-select\" name=\"id\" class=\"hidden\">
\t\t       <option selected=\"selected\" value=\"\"></option>
\t\t       </select>
\t\t    </div>        
\t\t\t";
        // line 58
        if ((((isset($context["cartqty"]) ? $context["cartqty"] : $this->getContext($context, "cartqty")) == null) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock") == 0))) {
            // line 59
            echo "\t\t\t\tStok: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock"), "html", null, true);
            echo "</br>
\t\t\t\t";
            // line 60
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock") == "0")) {
                // line 61
                echo "\t\t\t\t\t<input style=\"opacity: 1;\" value=\"Habis Terjual\" id=\"add\" class=\"btn add-to-cart disabled\" disabled=\"disabled\" type=\"submit\">\t
\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t<input style=\"opacity: 1;\" value=\"Masukan Ke Keranjang\" id=\"add\" class=\"btn add-to-cart\" type=\"submit\">\t
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\tStok: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cartqty"]) ? $context["cartqty"] : $this->getContext($context, "cartqty")), "stock"), "html", null, true);
            echo "</br>
\t\t\t\t";
            // line 67
            if (($this->getAttribute((isset($context["cartqty"]) ? $context["cartqty"] : $this->getContext($context, "cartqty")), "stock") == "0")) {
                // line 68
                echo "\t\t\t\t\t<input style=\"opacity: 1;\" value=\"Habis Terjual\" id=\"add\" class=\"btn add-to-cart disabled\" disabled=\"disabled\" type=\"submit\">\t
\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t<input style=\"opacity: 1;\" value=\"Masukan Ke Keranjang\" id=\"add\" class=\"btn add-to-cart\" type=\"submit\">\t
\t\t\t\t";
            }
            // line 72
            echo "\t\t\t";
        }
        // line 73
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
\t    \t<li class=\"first\"><a class=\"active\" href=\"#tab1\">Deskripsi produk</a></li>
\t    \t<li><a href=\"#tab2\">Metode pemesanan, pembayaran, dan pengiriman barang</a></li>
\t  \t</ul>
\t\t<div id=\"tab1\">
\t\t\t<div class=\"wysiwyg\">
\t\t    <p>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo ".</p>
<p>&nbsp;</p>
\t\t\t</div>
\t\t </div>
\t\t <div style=\"display: none;\" id=\"tab2\">
\t\t   \t<div class=\"wysiwyg\">
\t\t    <p>
\t\t    Metode pembayaran dan pengiriman produk.&nbsp;</br>
\t\t    Pengirimin produk yang anda beli akan kami lakukan dengan menggunakan jasa <br> pengiriman JNE.
\t\t    Pembayaran dapat langsung di bayarkan ke rekening kami:<br>
\t\t    BNI : <br>
\t\t    BRI : <br>
\t\t    Mandiri: <br>
\t\t    BCA : <br>
\t\t    atau pembayaran melalui ATM Bersama:
\t\t    </p>
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
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) ? $context["others"] : $this->getContext($context, "others")));
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
            // line 137
            echo "\t\t";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 138
                echo "\t\t<div class=\"four columns omega\">
\t\t";
            } elseif ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 140
                echo "\t\t<div class=\"four columns \">
\t\t";
            } else {
                // line 142
                echo "\t\t<div class=\"four columns alpha\">
\t\t";
            }
            // line 144
            echo "\t\t\t<!---<a href=\"http://simpletheme.myshopify.com/collections/all-products/products/blue-ripped-jeans\" id=\"product-1\" class=\"animated fadeInUpBig\">-->
\t\t\t<a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "id"), "category" => $this->getAttribute($this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "categories"), "slug"), "product" => $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "namaslug"))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/index_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "nama"), "html", null, true);
            echo "\" class=\"product\">
\t\t\t\t<h3>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "nama"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4>Rp ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "cost"), "html", null, true);
            echo " </h4>
\t\t\t</a>
\t\t</div>
\t\t";
            // line 151
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                // line 152
                echo "\t\t<br class=\"clear\">
\t\t";
            }
            // line 154
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
        // line 155
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
        return array (  365 => 155,  351 => 154,  347 => 152,  345 => 151,  339 => 148,  335 => 147,  328 => 146,  324 => 145,  321 => 144,  317 => 142,  313 => 140,  309 => 138,  306 => 137,  289 => 136,  255 => 105,  219 => 73,  216 => 72,  212 => 70,  208 => 68,  206 => 67,  201 => 66,  198 => 65,  194 => 63,  190 => 61,  188 => 60,  183 => 59,  181 => 58,  171 => 51,  167 => 50,  163 => 49,  149 => 41,  144 => 40,  134 => 36,  126 => 35,  115 => 29,  110 => 26,  107 => 25,  101 => 23,  98 => 22,  89 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  69 => 14,  66 => 13,  57 => 11,  52 => 10,  49 => 9,  46 => 8,  44 => 7,  40 => 6,  37 => 5,  34 => 4,  29 => 2,);
    }
}
