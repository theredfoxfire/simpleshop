<?php

/* SsSsBundle:Orderer:pesananfirst.txt.twig */
class __TwigTemplate_f7728d02e8b194884638023f282b80f0e014dc88c651b6daa5f2422f9f0f4d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Terima kasih, telah memesan barang melalui SimpleShop.com
berikut adalah daftar pesanan Anda:
1. Sandal Melly Red
2. Sepatu Kulit
3. Jaket Sport
4. Tas Tangan
5. Sandal Swallow
6. Kemeja Batik

Silahkan klik url ini untuk melakukan konfirmasi pembelian Anda. http://localhost/simpleshop/web/app_dev.php/ss_orderer/";
        // line 10
        echo (isset($context["pesanan"]) ? $context["pesanan"] : $this->getContext($context, "pesanan"));
        echo "/confirm
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Orderer:pesananfirst.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
