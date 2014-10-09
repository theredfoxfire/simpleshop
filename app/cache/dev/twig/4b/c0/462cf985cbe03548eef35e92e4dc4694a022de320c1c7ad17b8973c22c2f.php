<?php

/* SsSsBundle:Orderer:new.html.twig */
class __TwigTemplate_4bc0462cf985cbe03548eef35e92e4dc4694a022de320c1c7ad17b8973c22c2f extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"twelve columns alpha omega\" style=\"border-bottom: 1px solid #E8E8E8;\">
  <div class=\"row\" style=\"border-bottom: 1px solid #E8E8E8;\">
    <h1>Anda membeli...</h1>
    <table id=\"thumbs\" cellpadding=\"0\" cellspacing=\"0\">
      <tbody>
      ";
        // line 9
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
      ";
            // line 10
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 6) == 1)) {
                // line 11
                echo "      <tr class=\"desktop\">
      ";
            }
            // line 13
            echo "            <td>
                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "\" >
\t\t\t\t<h3 class=\"plisthead\" title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo " <br/> [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qty"), "html", null, true);
            echo "&nbsp;x Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
            echo "]<br>Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
            echo "</h3>
            </td>
      ";
            // line 17
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 6) == 0)) {
                // line 18
                echo "      </tr>
      ";
            }
            // line 20
            echo "      ";
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
        // line 21
        echo "      ";
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
      ";
            // line 22
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 1)) {
                // line 23
                echo "      <tr class=\"mobile\">
      ";
            }
            // line 25
            echo "            <td>
                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/products/mini_"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "foto"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "\" >
\t\t\t\t<h3 class=\"plisthead\" title=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "nama"), "html", null, true);
            echo " <br/> [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "qty"), "html", null, true);
            echo "&nbsp;x Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "products"), "cost"), "html", null, true);
            echo "]<br>Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalcost"), "html", null, true);
            echo "</h3>
            </td>
      ";
            // line 29
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 30
                echo "      </tr>
      ";
            }
            // line 32
            echo "      ";
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
        // line 33
        echo "    </tbody></table>
  </div>
\t<br class=\"clear\">
\t\t\t<div class=\"six columns alpha continue-shopping\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ss_product", array());
        echo "\">« Lanjutkan belanja</a></div>
\t\t\t<div class=\"six columns omega cart total\">
\t\t\t\t<h2 align=\"right\">Ongkos kirim: Rp ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["ongkir"]) ? $context["ongkir"] : $this->getContext($context, "ongkir")), "html", null, true);
        echo "</h2>
\t\t\t\t<h2 align=\"right\">Total tagihan: Rp ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["bill"]) ? $context["bill"] : $this->getContext($context, "bill")), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t</div>
  <br class=\"clear\">
    <h1>Form pemesanan:</h1>

    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nama"), 'label');
        echo "
\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nama"), 'errors');
        echo "
\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nama"), 'widget');
        echo "
\t\t
\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
\t\t
\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo " <a href=\"#\" onmouseover=\"mess()\">Apa ini?</a>
\t\t<div id=\"whats\"> </div>
\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "
\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t
\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
\t\t
\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alamat"), 'label');
        echo "
\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alamat"), 'errors');
        echo "
\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alamat"), 'widget');
        echo "
\t\t
\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kode_pos"), 'label');
        echo "
\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kode_pos"), 'errors');
        echo "
\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kode_pos"), 'widget', array("attr" => array("onkeypress" => "return harusangka(event)")));
        echo "
\t\t<br/><br/>
\t\t<input id=\"lanjut\" name=\"lanjut\" value=\"Pesan\" type=\"submit\" class=\"btn\"> &nbsp; <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("ss_cart_show", array());
        echo "\">Kembali</a>
    ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <ul class=\"record_actions\">
    <li>
    </li>
</ul>
<script language=\"JavaScript\">
\tfunction mess(){
\t\tdocument.getElementById(\"whats\").innerHTML= \"Kata sandi ini akan anda gunakan untuk melihat pesanan Anda,<br>seperti melakukan konfirmasi pembayaran, atau melihat status pengriman barang.<br><a href='#' onmouseover='tutup()' id='close'>Tutup</a>\";
\t}
\tfunction tutup(){
\t\tdocument.getElementById(\"whats\").innerHTML=\"\";
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Orderer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 72,  281 => 71,  276 => 69,  272 => 68,  268 => 67,  263 => 65,  259 => 64,  255 => 63,  250 => 61,  246 => 60,  242 => 59,  237 => 57,  233 => 56,  228 => 54,  223 => 52,  219 => 51,  215 => 50,  210 => 48,  206 => 47,  202 => 46,  198 => 45,  189 => 39,  185 => 38,  180 => 36,  175 => 33,  161 => 32,  157 => 30,  155 => 29,  142 => 27,  135 => 26,  132 => 25,  128 => 23,  126 => 22,  106 => 21,  92 => 20,  88 => 18,  86 => 17,  73 => 15,  66 => 14,  63 => 13,  59 => 11,  57 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
