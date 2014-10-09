<?php

/* SsSsBundle::layoutmember.html.twig */
class __TwigTemplate_3926609e26eb85a874731c64608d032ee674cc03a5c3a302d6e8c3aa70ace7e7 extends Twig_Template
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
\t
   <!--START HEADER-->
\t<header>
\t\t<!--START CONTAINER-->
\t\t<!--START CONTAINER-->
\t\t<div class=\"container upper\">
\t\t\t<!--START SIDEBAR-->
\t\t\t<div class=\"three columns product-search-wrapper\">
\t\t\t\t<div id=\"product-search\">
\t\t\t\t\t
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
\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"mobile\">Log Out</a>
\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"desktop\">Log Out</a>
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
        // line 64
        echo $this->env->getExtension('routing')->getPath("ss_product");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/logo.png"), "html", null, true);
        echo "\" alt=\"SimpleShop.com\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"table-cell\">
\t\t\t\t\t\t<div id=\"tagline\" class=\"desktop\">
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
\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("ss_pesanan_check");
        echo "\">Konfirmasi Pembayaran</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("ss_pesanan_check");
        echo "\">Pengembalian Barang</a></li>
\t\t\t\t\t\t<li><a href=\"http://simpleshop.com/blogs/news\">Blog</a></li>
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
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "
<center><h1>
";
        // line 131
        $this->displayBlock('page', $context, $blocks);
        // line 134
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
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-amex.png"), "html", null, true);
        echo "\" alt=\"We accept Amex\">
<img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-discover.png"), "html", null, true);
        echo "\" alt=\"We accept Discover\">
<img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-visa.png"), "html", null, true);
        echo "\" alt=\"We accept Visa\">
 <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-mastercard.png"), "html", null, true);
        echo "\" alt=\"We accept Mastercard\">
<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-maestro.png"), "html", null, true);
        echo "\" alt=\"We accept Maestro\">
<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-cirrus.png"), "html", null, true);
        echo "\" alt=\"We accept Cirrus\">
<img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/images/cc-paypal.png"), "html", null, true);
        echo "\" alt=\"You can check out using Paypal\">
<img src=\"";
        // line 191
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
        // line 203
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

    // line 127
    public function block_content($context, array $blocks = array())
    {
        // line 128
        echo "\t";
    }

    // line 131
    public function block_page($context, array $blocks = array())
    {
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle::layoutmember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 132,  346 => 131,  342 => 128,  339 => 127,  332 => 12,  329 => 11,  292 => 203,  277 => 191,  273 => 190,  269 => 189,  265 => 188,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  197 => 134,  195 => 131,  191 => 129,  189 => 127,  151 => 92,  147 => 91,  119 => 66,  114 => 64,  98 => 51,  94 => 50,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  36 => 14,  34 => 11,  22 => 1,);
    }
}
