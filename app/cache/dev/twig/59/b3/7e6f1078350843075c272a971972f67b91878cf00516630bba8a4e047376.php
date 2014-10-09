<?php

/* SsSsBundle::layout.html.twig */
class __TwigTemplate_59b37e6f1078350843075c272a971972f67b91878cf00516630bba8a4e047376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><!--<![endif]-->
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <title>
    SimpleShop.com-Belanja online, simple aja!
  </title>
\t<meta charset=\"utf-8\">
\t
\t   <meta name=\"description\" content=\"simpleshop.com\">
\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <!--<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/shopify_stats.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>-->
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/dc.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/jquery_002.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/jquery_004.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/option_selection.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/jquery_003.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
</head>

<div id=\"js\">
\t
</div>
<body id=\"simple-ecommerce-theme-demo-store\" class=\"template-index\">
\t<div id=\"cart-animation\">1</div>
\t<!--START DRAWER-->
\t";
        // line 30
        if (($this->getAttribute((isset($context["countqty"]) ? $context["countqty"] : $this->getContext($context, "countqty")), "qty") == 0)) {
            // line 31
            echo "\t<div id=\"drawer\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"sixteen columns description\">
\t\t\t\t<center><p class=\"empty\">Keranjang mu masih kosong.</p></center>
\t\t\t\t<font color=\"333333\">";
            // line 36
            $this->env->loadTemplate("SsSsBundle:Product:hide.html.twig")->display($context);
            echo "</font>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
        } else {
            // line 42
            echo "\t<div id=\"drawer\">
\t\t<div class=\"container\">
\t\t\t<font color=\"333333\">";
            // line 44
            $this->env->loadTemplate("SsSsBundle:Product:hide.html.twig")->display($context);
            echo "</font>
\t\t\t<form action=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("ss_cart_update");
            echo "\" method=\"get\">
\t\t\t\t
\t\t\t\t<!-- START ROW-->
\t\t\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countcart"]) ? $context["countcart"] : $this->getContext($context, "countcart")));
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
                // line 49
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 50
                    echo "\t\t\t\t<div class=\"row first\">
\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t<div class=\"row\">
\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t<div class=\"nine columns description\">
\t\t\t\t\t\t<img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "foto"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "id"), "category" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "categories"), "slug"), "product" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "namaslug"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t  \t\t";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
                echo "
\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<h4>";
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "categories"), "gender") == 1)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\tPria
\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\tWanita
\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "description"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"mobile\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qty"), "html", null, true);
                echo " x Rp ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
                echo "<br>Rp ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"two columns price desktop\">
\t\t\t\t\t\t@ Rp ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"two columns quantity desktop\">
\t\t\t\t\t\t<input name=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qty"), "html", null, true);
                echo "\" type=\"text\" onkeypress='return harusangka(event)'> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\t\tRp ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"one column remove desktop\">
\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_delete", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "id"))), "html", null, true);
                echo "\" /><font size=\"4\">X</font></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- END ROW-->
\t\t\t\t";
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
            // line 88
            echo "\t\t\t\t<!-- START ACTIONS -->
\t\t\t\t<div class=\"actions desktop\"><input type=\"submit\" value=\"update\" name=\"update\"></div>
\t\t\t\t<!-- END ACTIONS -->
\t\t\t</form>
\t\t</div>
\t</div>
\t";
        }
        // line 95
        echo "\t<!--END DRAWER-->
   <!--START HEADER-->
\t<header>
\t\t<!--START CONTAINER-->
\t\t<div class=\"container upper\">
\t\t\t<!--START SIDEBAR-->
\t\t\t<div class=\"three columns product-search-wrapper\">
\t\t\t\t<div id=\"product-search\">
\t\t\t\t\t
\t\t\t\t\t<form action=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("ss_product_search");
        echo "\" method=\"get\" class=\"search-form\" role=\"search\">
\t\t\t\t\t\t<input name=\"type\" value=\"product\" type=\"hidden\">
\t\t\t\t\t\t<input id=\"search-submit\" class=\"icon \" type=\"submit\">
\t\t\t\t\t\t<input class=\"search\" placeholder=\"Cari\" name=\"query\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" type=\"text\" onKeypress=\"loadjs()\">
\t\t\t\t\t\t<img id=\"loader\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/loader.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
\t\t\t\t\t</form>
\t\t\t\t\t<br class=\"clear\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--END SIDEBAR f4f4f4-->
\t\t\t<!--START TOP NAV-->
\t\t\t<div class=\"seven columns offset-by-one desktop\">
\t\t\t\t
\t\t\t</div>
\t\t\t<!--END TOP NAV-->
\t\t\t<!--START MINICART-->
\t\t\t<div class=\"five columns minicart-wrapper\">
\t\t\t\t<div id=\"minicart\">
\t\t\t\t\t<a href=\"#\" class=\"toggle-drawer cart desktop \">Keranjang Ku <span id=\"cart-target-desktop\" class=\"count cart-target\">(";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["countqty"]) ? $context["countqty"] : $this->getContext($context, "countqty")), "qty"), "html", null, true);
        echo ")</span></a>
\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("ss_cart_show");
        echo "\" class=\"cart mobile  cart-target\">My Cart <span id=\"cart-target-mobile\" class=\"count\">(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["countqty"]) ? $context["countqty"] : $this->getContext($context, "countqty")), "qty"), "html", null, true);
        echo ")</span></a>
\t\t\t\t\t<a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("ss_cart_show");
        echo "\" class=\"checkout\">Check Out</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--END MINI CART-->
\t\t</div>
\t\t<!--END CONTAINER-->

\t\t<!--START CONTAINER-->
\t\t<div class=\"container lower\">
\t\t\t<div class=\"sixteen columns\">
\t\t\t\t<div class=\"table logo-tagline\">
\t\t\t\t\t<div class=\"table-cell\">
\t\t\t\t\t\t<h1 id=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/logo.png"), "html", null, true);
        echo "\" alt=\"SimpleShop.com\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"table-cell\">
\t\t\t\t\t\t<div id=\"tagline\" class=\"desktop\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tGeratis biaya pengiriman untuk pesanan diatas Rp 948.000
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</header>
  \t<!--START HEADER-->
\t<!--START CONTAINER-->
\t<div class=\"container\">
\t\t<!--START SIDEBAR-->
\t\t<div id=\"sidebar\" class=\"three columns\">
\t\t\t<nav>

\t\t\t\t<a href=\"#\" id=\"toggle-menu\" class=\"mobile\"><span>Menu</span></a>

\t\t\t\t<ul id=\"main-menu\" class=\"accordion\">
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"accordion-button\">Pria
\t\t\t\t\t\t\t\t\t<span>+</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "mens", "id" => "1")), "html", null, true);
        echo "\" class=\"first\">Semuanya</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["males"]) ? $context["males"] : $this->getContext($context, "males")));
        foreach ($context['_seq'] as $context["_key"] => $context["male"]) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["male"]) ? $context["male"] : $this->getContext($context, "male")), "id"), "slug" => $this->getAttribute((isset($context["male"]) ? $context["male"] : $this->getContext($context, "male")), "slug"), "gender" => "mens", "genid" => "1")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["male"]) ? $context["male"] : $this->getContext($context, "male")), "name"), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['male'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"accordion-button\">Wanita
\t\t\t\t\t\t\t\t\t<span>+</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_gender", array("gender" => "womens", "id" => "2")), "html", null, true);
        echo "\" class=\"first\">Semuanya</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["females"]) ? $context["females"] : $this->getContext($context, "females")));
        foreach ($context['_seq'] as $context["_key"] => $context["female"]) {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_show", array("id" => $this->getAttribute((isset($context["female"]) ? $context["female"] : $this->getContext($context, "female")), "id"), "slug" => $this->getAttribute((isset($context["female"]) ? $context["female"] : $this->getContext($context, "female")), "slug"), "gender" => "womens", "genid" => "2")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["female"]) ? $context["female"] : $this->getContext($context, "female")), "name"), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['female'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"http://simpleshop.com/blogs/news\">Blog</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("ss_pesanan_check");
        echo "\">Cek Pesanan Mu</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"http://simpleshop.com/pages/contact-us\">Hubungi Kami</a></li>
\t\t\t\t\t\t
\t\t\t\t\t



\t\t\t\t</ul>
\t\t\t\t<div id=\"social\">


\t\t\t\t\t<a href=\"http://www.facebook.com/shopify\" target=\"_blank\" class=\"facebook \"></a>
\t\t\t\t\t<a href=\"http://www.twitter.com/shopify\" target=\"_blank\" class=\"twitter \"></a>
\t\t\t\t\t<a href=\"http://www.instagram.com/shopify\" target=\"_blank\" class=\"instagram \"></a>
\t\t\t\t\t<a href=\"http://www.pinterest.com/shopify\" target=\"_blank\" class=\"pinterest \"></a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<a href=\"http://simpleshop.com/blogs/news.atom\" target=\"_blank\" class=\"rss \"></a>


\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<!--END SIDEBAR-->
\t\t
\t\t<!--START MAIN-->
\t\t<div id=\"main\" class=\"twelve columns offset-by-one\">
\t\t\t
\t\t\t<div id=\"page-content\">  
<br>
<div id=\"products\">
</div>
";
        // line 248
        $this->displayBlock('content', $context, $blocks);
        // line 250
        echo "
<center><h1>
";
        // line 252
        $this->displayBlock('page', $context, $blocks);
        // line 255
        echo "

</h1></center>
\t\t\t<br class=\"clear\">
\t\t\t</div>
\t\t</div>
\t\t<!--END MAIN-->
\t\t<br class=\"clear\">
\t\t<!--START FOOTER-->
\t\t<footer>
\t\t\t<section class=\"upper\">

\t\t\t\t<!--START NAV-->
\t\t\t\t<div class=\"three columns \">
\t\t\t\t\t<nav>
\t\t\t\t\t\t<h2></h2>
\t\t\t\t\t\t
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<!--END NAV-->

\t\t\t\t<!--START PAGE CONTENT-->
\t\t\t\t<div class=\"eight offset-by-one columns\">
\t\t\t\t\t<div id=\"footer-content\">

\t\t\t\t\t\t
\t\t\t\t\t\t<h2>Panduan mengenai hak dan perlindungan pembeli</h2>
\t\t\t\t\t\t<div><p>Kami menjamin kenyamanan anda sebagai pelanggan dalam bertransaksi di toko online kami, klik <a href=\"http://simpleshop.com/pages/pelanggan\" target=\"_blank\">di sini</a> untuk mengetahui lebih lanjut mengenai hak dan kewajiban Anda. <br>
\t\t\t\t\t\tJika anda ingin mengetahui kebijakan dan ketentuan kami, lihat <a href=\"http://simpleshop.com/pages/privacy-policy\" title=\"Ketentuan & Privasi\" target=\"_blank\">Ketentuan & Privasi</a>.&nbsp;</p>
\t\t\t\t\t\t
<p class=\"adr\"><span class=\"street-address\">Atau datanglah ke kantor kami di, <br>
Jalan Kesuksesan No. 88</span><br><span class=\"locality\">Bandung</span>,&nbsp;
<span class=\"region\">Jawa Barat</span><br><span class=\"postal-code\">40256</span> <span class=\"country-name\">Indonesia</span>,
<span class=\"tel\">Telephon:&nbsp;(555) 867 5309</span>
<span class=\"tel\">Mobile (Indosat IM3):&nbsp;0856 2488 9988</span>
</p></div>

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--END PAGE CONTENT-->

\t\t\t\t<!--START MAILING LIST / OR CREDIT CARDS-->
\t\t\t\t<div class=\"three columns offset-by-one\">
\t\t\t\t\t
\t\t\t\t\t
<div id=\"payment-methods\">
<img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-amex.png"), "html", null, true);
        echo "\" alt=\"We accept Amex\">
<img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-discover.png"), "html", null, true);
        echo "\" alt=\"We accept Discover\">
<img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-visa.png"), "html", null, true);
        echo "\" alt=\"We accept Visa\">
 <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-mastercard.png"), "html", null, true);
        echo "\" alt=\"We accept Mastercard\">
<img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-maestro.png"), "html", null, true);
        echo "\" alt=\"We accept Maestro\">
<img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-cirrus.png"), "html", null, true);
        echo "\" alt=\"We accept Cirrus\">
<img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-paypal.png"), "html", null, true);
        echo "\" alt=\"You can check out using Paypal\">
<img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-google.png"), "html", null, true);
        echo "\" alt=\"You can check out using Google Wallet\">
</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--END MAILING LIST / CREDIT CARDS-->

\t\t\t\t<br class=\"clear\">
\t\t\t</section>
\t\t\t<section class=\"lower\">
\t\t\t\t<div class=\"nine columns\">
\t\t\t\t\t<div class=\"legals\">
\t\t\t\t\t\tCopyright © ";
        // line 323
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SimpleShop.com <a href=\"http://www.shopify.ca/\" target=\"_blank\">Ecommerce template design by Shopify</a>.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"six columns offset-by-one\">
\t\t\t\t\t
\t\t\t\t\t<nav>
\t\t\t\t\t\t
\t\t\t\t\t        <a href=\"http://simpleshop.com/search\" title=\"Cari\">Cari</a>
\t\t\t\t\t    
\t\t\t\t\t        <a href=\"http://simpleshop.com/pages/about-us\" title=\"Tentang Kami\">Tentang Kami</a>
\t\t\t\t\t    
\t\t\t\t\t        <a href=\"http://simpleshop.com/pages/privacy-policy\" title=\"Ketentuan & Privasi\">Ketentuan & Privasi</a>
\t\t\t\t\t    
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<br class=\"clear\">
\t\t</footer>
\t\t<!--END FOOTER-->
\t</div>
\t<!-- END CONTAINER-->
<script language=\"JavaScript\">
function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
</script>
</body></html>
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 248
    public function block_content($context, array $blocks = array())
    {
        // line 249
        echo "\t";
    }

    // line 252
    public function block_page($context, array $blocks = array())
    {
        // line 253
        echo "
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 253,  609 => 252,  605 => 249,  602 => 248,  595 => 12,  592 => 11,  555 => 323,  540 => 311,  536 => 310,  532 => 309,  528 => 308,  524 => 307,  520 => 306,  516 => 305,  512 => 304,  461 => 255,  459 => 252,  455 => 250,  453 => 248,  416 => 214,  404 => 204,  393 => 202,  389 => 201,  384 => 199,  366 => 183,  355 => 181,  351 => 180,  346 => 178,  304 => 139,  299 => 137,  283 => 124,  277 => 123,  273 => 122,  256 => 108,  252 => 107,  246 => 104,  235 => 95,  226 => 88,  207 => 83,  201 => 80,  191 => 77,  185 => 74,  174 => 70,  170 => 69,  167 => 68,  163 => 66,  159 => 64,  157 => 63,  150 => 59,  146 => 58,  137 => 55,  134 => 54,  130 => 52,  106 => 48,  96 => 44,  83 => 36,  76 => 31,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  36 => 14,  34 => 11,  22 => 1,  129 => 33,  126 => 50,  123 => 49,  118 => 29,  104 => 28,  100 => 45,  98 => 25,  92 => 42,  88 => 21,  81 => 20,  77 => 19,  74 => 30,  70 => 16,  66 => 14,  62 => 12,  59 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,);
    }
}
