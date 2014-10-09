<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_4b04895dcb41dced9e0865c7c19af0ad759fe6ae863c1e6858918d8a449c5627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig");

        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        // line 15
        echo "    <tr class=\"sonata-ba-view-title\">
        <th colspan=\"3\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "html", null, true);
        echo "
        </th>
    </tr>
";
    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        // line 23
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), (isset($context["object"]) ? $context["object"] : null), (isset($context["object_compare"]) ? $context["object_compare"] : null));
            echo "
        ";
        }
        // line 27
        echo "    </tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 65,  104 => 51,  96 => 48,  90 => 46,  100 => 33,  188 => 88,  155 => 75,  129 => 64,  114 => 39,  83 => 44,  65 => 35,  318 => 136,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 49,  153 => 48,  120 => 57,  84 => 48,  37 => 5,  97 => 52,  81 => 47,  70 => 15,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 50,  124 => 62,  113 => 55,  110 => 38,  34 => 16,  190 => 51,  152 => 74,  145 => 65,  134 => 45,  126 => 63,  77 => 33,  74 => 39,  58 => 27,  52 => 25,  53 => 30,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 42,  111 => 25,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  131 => 61,  119 => 40,  108 => 36,  102 => 32,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  47 => 23,  94 => 30,  89 => 28,  85 => 38,  79 => 25,  75 => 31,  68 => 36,  56 => 35,  50 => 24,  201 => 92,  196 => 90,  183 => 62,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 41,  151 => 70,  142 => 59,  138 => 69,  136 => 39,  123 => 58,  121 => 61,  117 => 48,  115 => 39,  105 => 35,  101 => 37,  91 => 29,  69 => 19,  62 => 19,  49 => 21,  28 => 14,  87 => 49,  72 => 15,  66 => 39,  55 => 31,  41 => 25,  31 => 15,  38 => 18,  26 => 14,  25 => 12,  24 => 18,  35 => 16,  29 => 14,  21 => 2,  19 => 11,  98 => 22,  93 => 47,  88 => 30,  78 => 17,  46 => 13,  44 => 22,  32 => 15,  27 => 14,  22 => 12,  43 => 18,  40 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 47,  141 => 70,  133 => 55,  130 => 43,  125 => 59,  122 => 29,  116 => 27,  112 => 42,  109 => 34,  106 => 37,  103 => 34,  99 => 36,  95 => 21,  92 => 42,  86 => 45,  82 => 35,  80 => 43,  73 => 23,  64 => 17,  60 => 22,  57 => 11,  54 => 34,  51 => 33,  48 => 13,  45 => 30,  42 => 12,  39 => 17,  36 => 17,  33 => 13,  30 => 15,);
    }
}
