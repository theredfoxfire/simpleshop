<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_fc2905f4d47001a0f7fc8d7607478f439a5c3820a9d867b26312ea4b8a46fa4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === (isset($context["value"]) ? $context["value"] : null)))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "currency"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  392 => 107,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 41,  194 => 40,  146 => 33,  76 => 18,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 52,  181 => 44,  178 => 80,  170 => 77,  167 => 36,  165 => 75,  148 => 69,  137 => 29,  104 => 40,  96 => 30,  90 => 24,  100 => 61,  188 => 88,  155 => 55,  129 => 25,  114 => 39,  83 => 36,  65 => 26,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 48,  37 => 20,  97 => 41,  81 => 20,  70 => 22,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 106,  386 => 239,  330 => 194,  326 => 86,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 47,  113 => 44,  110 => 29,  34 => 18,  190 => 38,  152 => 61,  145 => 54,  134 => 28,  126 => 24,  77 => 34,  74 => 33,  58 => 23,  52 => 6,  53 => 15,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  360 => 109,  355 => 106,  341 => 196,  337 => 90,  322 => 101,  314 => 99,  312 => 98,  309 => 79,  305 => 77,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 61,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 33,  140 => 30,  132 => 65,  128 => 42,  111 => 25,  107 => 52,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  131 => 61,  119 => 112,  108 => 45,  102 => 43,  71 => 32,  67 => 15,  63 => 29,  59 => 13,  47 => 23,  94 => 40,  89 => 28,  85 => 38,  79 => 25,  75 => 18,  68 => 36,  56 => 16,  50 => 14,  201 => 92,  196 => 90,  183 => 62,  171 => 81,  166 => 32,  163 => 58,  158 => 56,  156 => 41,  151 => 70,  142 => 59,  138 => 69,  136 => 39,  123 => 58,  121 => 61,  117 => 48,  115 => 40,  105 => 44,  101 => 41,  91 => 39,  69 => 31,  62 => 14,  49 => 23,  28 => 14,  87 => 23,  72 => 28,  66 => 30,  55 => 12,  41 => 20,  31 => 15,  38 => 18,  26 => 14,  25 => 12,  24 => 13,  35 => 2,  29 => 15,  21 => 1,  19 => 11,  98 => 22,  93 => 47,  88 => 38,  78 => 19,  46 => 22,  44 => 18,  32 => 16,  27 => 14,  22 => 12,  43 => 21,  40 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 47,  187 => 46,  182 => 85,  176 => 64,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 70,  133 => 49,  130 => 43,  125 => 51,  122 => 44,  116 => 111,  112 => 109,  109 => 43,  106 => 26,  103 => 34,  99 => 42,  95 => 28,  92 => 23,  86 => 37,  82 => 35,  80 => 35,  73 => 17,  64 => 17,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 5,  45 => 4,  42 => 17,  39 => 17,  36 => 17,  33 => 16,  30 => 2,);
    }
}