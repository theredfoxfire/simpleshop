<?php

/* SsSsBundle:Orderer:firstthanks.html.twig */
class __TwigTemplate_5685b2557d619301d017d2d093de1e2dde7e6b64b17778da31d98155624e2854 extends Twig_Template
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
\t <p>Terima kasih telah melakukan pemesanan di toko kami SimpleShop.com.
\t <br>Kami telah mengirim email ke alamat email Anda.  
\t <br/> Silahkan cek email Anda dan lakukan konfirmasi atas pesanan Anda, dengan cara mengklik url yang ada di dalam email tersebut.</p>
\t <p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">Lanjutkan belanja</a></p>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Orderer:firstthanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
