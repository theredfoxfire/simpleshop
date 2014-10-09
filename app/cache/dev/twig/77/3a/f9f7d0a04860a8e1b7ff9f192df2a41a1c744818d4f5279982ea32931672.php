<?php

/* SsSsBundle:Product:hide.html.twig */
class __TwigTemplate_773af9f7d0a04860a8e1b7ff9f192df2a41a1c744818d4f5279982ea32931672 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\tfunction loadjs()
\t{
\t\tdocument.getElementById(\"js\").innerHTML= \"<script src='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "' type='text/javascript'></script><script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ssss/js/search.js"), "html", null, true);
        echo "' type='text/javascript'></script>\";
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Product:hide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,  612 => 253,  609 => 252,  605 => 249,  602 => 248,  595 => 12,  592 => 11,  555 => 323,  540 => 311,  536 => 310,  532 => 309,  528 => 308,  524 => 307,  520 => 306,  516 => 305,  512 => 304,  461 => 255,  459 => 252,  455 => 250,  453 => 248,  416 => 214,  404 => 204,  393 => 202,  389 => 201,  384 => 199,  366 => 183,  355 => 181,  351 => 180,  346 => 178,  304 => 139,  299 => 137,  283 => 124,  277 => 123,  273 => 122,  256 => 108,  252 => 107,  246 => 104,  235 => 95,  226 => 88,  207 => 83,  201 => 80,  191 => 77,  185 => 74,  174 => 70,  170 => 69,  167 => 68,  163 => 66,  159 => 64,  157 => 63,  150 => 59,  146 => 58,  137 => 55,  134 => 54,  130 => 52,  106 => 48,  96 => 44,  83 => 36,  76 => 31,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  36 => 14,  34 => 11,  22 => 1,  129 => 33,  126 => 50,  123 => 49,  118 => 29,  104 => 28,  100 => 45,  98 => 25,  92 => 42,  88 => 21,  81 => 20,  77 => 19,  74 => 30,  70 => 16,  66 => 14,  62 => 12,  59 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,);
    }
}
