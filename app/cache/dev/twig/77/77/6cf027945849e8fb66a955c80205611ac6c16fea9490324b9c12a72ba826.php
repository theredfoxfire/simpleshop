<?php

/* SsSsBundle:Orderer:thanks.html.twig */
class __TwigTemplate_77776cf027945849e8fb66a955c80205611ac6c16fea9490324b9c12a72ba826 extends Twig_Template
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
        echo "<div id=\"breadcrumb\" class=\"desktop\">
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Home</a> — 
\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ss_product_search");
        echo "\" class=\"active\">Terima Kasih</a>
</div>

<h1>Terima Kasih</h1>
\t<section class=\"product-grid twelve columns alpha omega\">
\t <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo ", terima kasih telah melakukan pemesanan di toko kami SimpleShop.com.<br> Untuk melihat detail pesanan dan melakukan konfirmasi pembayaran klik <a href=\"";
        echo $this->env->getExtension('routing')->getPath("ss_pesanan_check");
        echo "\">di sini</a>.</p>
\t <p><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Lanjutkan belanja</a></p>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Orderer:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 11,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
