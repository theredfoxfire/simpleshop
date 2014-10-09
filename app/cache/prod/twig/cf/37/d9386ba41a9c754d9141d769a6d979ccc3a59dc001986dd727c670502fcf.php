<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_cf37d9386ba41a9c754d9141d769a6d979ccc3a59dc001986dd727c670502fcf extends Twig_Template
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
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) ? $context["filterFieldName"] : null), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["field"]) ? $context["field"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) ? $context["selectedField"] : null) == (isset($context["field"]) ? $context["field"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) ? $context["selectedValue"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) ? $context["filterValueName"] : null), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "button"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  188 => 88,  155 => 75,  129 => 64,  114 => 39,  83 => 28,  65 => 20,  318 => 136,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 49,  153 => 48,  120 => 34,  84 => 48,  37 => 5,  97 => 52,  81 => 47,  70 => 15,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 74,  124 => 62,  113 => 44,  110 => 26,  34 => 26,  190 => 51,  152 => 74,  145 => 65,  134 => 35,  126 => 63,  77 => 33,  74 => 24,  58 => 19,  52 => 9,  53 => 18,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 65,  128 => 35,  111 => 25,  107 => 25,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 28,  108 => 36,  102 => 32,  71 => 30,  67 => 26,  63 => 12,  59 => 11,  47 => 18,  94 => 30,  89 => 28,  85 => 38,  79 => 25,  75 => 43,  68 => 23,  56 => 35,  50 => 10,  201 => 92,  196 => 90,  183 => 62,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 41,  151 => 68,  142 => 59,  138 => 69,  136 => 39,  123 => 30,  121 => 61,  117 => 48,  115 => 43,  105 => 35,  101 => 37,  91 => 29,  69 => 40,  62 => 19,  49 => 14,  28 => 3,  87 => 49,  72 => 15,  66 => 39,  55 => 17,  41 => 11,  31 => 25,  38 => 10,  26 => 6,  25 => 3,  24 => 4,  35 => 6,  29 => 4,  21 => 2,  19 => 1,  98 => 22,  93 => 22,  88 => 30,  78 => 17,  46 => 13,  44 => 12,  32 => 7,  27 => 5,  22 => 3,  43 => 12,  40 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 45,  162 => 44,  154 => 58,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 33,  125 => 44,  122 => 29,  116 => 27,  112 => 42,  109 => 34,  106 => 39,  103 => 34,  99 => 46,  95 => 21,  92 => 42,  86 => 27,  82 => 20,  80 => 19,  73 => 23,  64 => 38,  60 => 22,  57 => 11,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 10,  36 => 14,  33 => 5,  30 => 7,);
    }
}
