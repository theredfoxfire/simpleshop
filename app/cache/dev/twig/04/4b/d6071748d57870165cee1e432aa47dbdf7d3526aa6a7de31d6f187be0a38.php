<?php

/* SsSsBundle:Cart:null.html.twig */
class __TwigTemplate_044bd6071748d57870165cee1e432aa47dbdf7d3526aa6a7de31d6f187be0a38 extends Twig_Template
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<!--START BREADCRUMB-->
<div id=\"breadcrumb\" class=\"desktop\">
\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ss_product", array());
        echo "\">Home</a> —
\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ss_cart_show", array());
        echo "\" class=\"active\">Keranjang</a>
</div>
<!--END BREADCRUMB-->
<h1>Keranjang Ku</h1>
<section id=\"cart\">
\t
\t<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ss_cart_update");
        echo "\" method=\"get\">
\t\t<!--START CART CONTENTS-->
\t\t<div class=\"twelve columns alpha omega\">
\t\t\t<!-- START HEADERS-->
\t\t\t<div class=\"headers clearfix\">
\t\t\t\t<div class=\"six columns alpha description\">
\t\t\t\t\tDeskripsi
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns price desktop\">
\t\t\t\t\tHarga
\t\t\t\t</div>
\t\t\t\t<div class=\"one columns quantity desktop\">
\t\t\t\t\tJumlah
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\t<span>Sub Total</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END HEADERS-->
\t\t\tKeranjang mu masih kosong, 
\t\t</div>
\t\t<!--END CART CONTENTS-->
\t\t<br class=\"clear\">
\t\t<!--START TOTAL-->
\t\t<div class=\"twelve columns alpha omega row\">
\t\t\t<div class=\"six columns alpha continue-shopping\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ss_product", array());
        echo "\">« Lanjutkan belanja</a></div>
\t\t\t<div class=\"six columns omega cart total\"><h2>Total tagihan: Rp 0</h2></div>
\t\t</div>
\t\t<!--END TOTAL-->
\t\t<br class=\"clear\">
\t\t<!-- START ACTIONS -->
\t\t<div class=\"twelve columns alpha omega\">
\t\t\t<div class=\"six columns alpha\">
\t\t\t\t<textarea id=\"note\" name=\"note\" placeholder=\"Tambahkan catatan untuk pesanan Anda...\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"six columns omega actions\">
\t\t \t\t<input id=\"update\" name=\"update\" value=\"Update\" type=\"submit\" disabled=\"disabled\">
\t\t\t</div>
\t\t</div>
\t\t<!-- END ACTIONS <input id=\"checkout\" name=\"checkout\" value=\"Check Out\" type=\"submit\"> -->
\t</form>
\t
</section>
\t\t\t<br class=\"clear\">
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Cart:null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  55 => 17,  46 => 11,  42 => 10,  37 => 7,  34 => 6,  29 => 3,);
    }
}
