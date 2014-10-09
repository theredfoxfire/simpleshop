<?php

/* SsSsBundle:Category:show.html.twig */
class __TwigTemplate_d41c0782760f79def547700c41899f9dd4095bbed0acf869816e5ee458ac9a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Category</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "slug"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ss_category");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 173,  288 => 172,  236 => 129,  218 => 114,  191 => 89,  160 => 74,  124 => 51,  113 => 46,  110 => 45,  34 => 11,  190 => 51,  152 => 40,  145 => 65,  134 => 35,  126 => 31,  77 => 19,  74 => 18,  58 => 19,  52 => 11,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 55,  128 => 49,  111 => 37,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 30,  67 => 15,  63 => 25,  59 => 13,  47 => 10,  94 => 38,  89 => 22,  85 => 38,  79 => 18,  75 => 27,  68 => 16,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 41,  151 => 68,  142 => 59,  138 => 37,  136 => 56,  123 => 30,  121 => 50,  117 => 48,  115 => 43,  105 => 40,  101 => 26,  91 => 27,  69 => 24,  62 => 14,  49 => 17,  28 => 3,  87 => 33,  72 => 16,  66 => 24,  55 => 15,  41 => 15,  31 => 4,  38 => 6,  26 => 6,  25 => 5,  24 => 3,  35 => 6,  29 => 4,  21 => 2,  19 => 1,  98 => 25,  93 => 44,  88 => 6,  78 => 34,  46 => 14,  44 => 9,  32 => 5,  27 => 4,  22 => 1,  43 => 6,  40 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 48,  176 => 64,  173 => 65,  168 => 47,  164 => 45,  162 => 44,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 38,  133 => 55,  130 => 33,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 32,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 20,  80 => 19,  73 => 28,  64 => 10,  60 => 13,  57 => 19,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 14,  33 => 6,  30 => 7,);
    }
}
