<?php

/* SsSsBundle:Cart:show.html.twig */
class __TwigTemplate_65be485fc01155c4af399c4afc41f9d7939fa214a848e324f19815cfe70e8b38 extends Twig_Template
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
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "qty"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "\t\t\t\t\t\t<div class=\"flash_notice\">
\t\t\t\t\t\t\t<b><font color=\"red\">";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</font></b>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<section id=\"cart\">
\t
\t<form action=\"";
        // line 22
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
\t\t\t";
        // line 41
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
            echo "   
\t\t\t<!-- START ROW-->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"six columns alpha description\">
\t\t\t\t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<div class=\"mobile\" align=\"right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_remove", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "id"))), "html", null, true);
            echo "\"><font color=\"bd0f0f\" size=\"5\">x</font></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_product_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "id"), "category" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "categories"), "slug"), "product" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "namaslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<h4>";
            // line 51
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "categories"), "gender") == 1)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\tPria
\t\t\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t\t\tWanita
\t\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns price desktop\">
\t\t\t\t\tRp ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"one columns quantity tr\">
\t\t\t\t\t<input name=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qty"), "html", null, true);
            echo "\" type=\"text\" onkeypress='return harusangka(event)'>
\t\t\t\t\t<p class=\"mobile\">x Rp ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
            echo " = Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t<input type=\"hidden\" id=\"c";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total"), "html", null, true);
            echo "\">
\t\t\t\t\t<span> Rp ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"one column remove omega desktop\">
\t\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_remove", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token"), "id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "id"))), "html", null, true);
            echo "\"><font color=\"bd0f0f\" size=\"5\">x</font></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END ROW-->
\t\t\t";
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
        // line 78
        echo "\t\t</div>
\t\t<!--END CART CONTENTS-->
\t\t<br class=\"clear\">
\t\t<!--START TOTAL-->
\t\t
\t\t<div class=\"twelve columns alpha omega row\">
\t\t\t<div class=\"six columns alpha continue-shopping\"><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("ss_product", array());
        echo "\">« Lanjutkan belanja</a></div>
\t\t\t<div class=\"six columns omega cart total\">
\t\t\t<h2 align=\"right\" >Ongkos kirim: Rp ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["ongkir"]) ? $context["ongkir"] : $this->getContext($context, "ongkir")), "html", null, true);
        echo "</h2>
\t\t\t<h2>Total tagihan: Rp ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["bill"]) ? $context["bill"] : $this->getContext($context, "bill")), "html", null, true);
        echo "</h2></div>
\t\t</div>
\t\t<!--END TOTAL-->
\t\t<br class=\"clear\">
\t\t<!-- START ACTIONS -->
\t\t<div class=\"twelve columns alpha omega\">
\t\t\t<div class=\"six columns alpha\">
\t\t\t\t<textarea id=\"note\" name=\"note\" placeholder=\"Tambahkan catatan untuk pesanan Anda...\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"six columns omega actions\">
\t\t \t\t<input id=\"update\" name=\"update\" value=\"Update\" type=\"submit\">
\t\t \t\t<input id=\"lanjut\" name=\"lanjut\" value=\"Check out\" type=\"submit\">
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
        return "SsSsBundle:Cart:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 87,  224 => 86,  219 => 84,  211 => 78,  192 => 73,  186 => 70,  180 => 69,  172 => 66,  164 => 65,  158 => 62,  150 => 57,  147 => 56,  143 => 54,  139 => 52,  137 => 51,  131 => 50,  126 => 48,  117 => 45,  95 => 41,  73 => 22,  69 => 20,  60 => 17,  57 => 16,  53 => 15,  46 => 11,  42 => 10,  37 => 7,  34 => 6,  29 => 3,);
    }
}
