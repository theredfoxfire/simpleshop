<?php

/* SsSsBundle:Default:confirm.html.twig */
class __TwigTemplate_378bc2a087c06ecf88f71ab29f8e608d72b09e6300ac5c9dc9790d8868aff6e5 extends Twig_Template
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
        echo "    <h1>Tolong Konfirmasi Pesanan Anda</h1>
    <p>Hai, selamat datang pelanggan baru SimpleShop.com. Untuk mengecek pesanan, tolong lakukan konfirmasi atas pesanan Anda terlebih dahulu.<br/>
\tSilahkan buka email Anda, dan klik url konfirmasi yang sudah kami kirim ke alamat email Anda. Terima Kasih.
    </p>
    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ss_pesanan_check");
        echo "\">Cek Pesanan Mu</a></p>

";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Default:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,);
    }
}
