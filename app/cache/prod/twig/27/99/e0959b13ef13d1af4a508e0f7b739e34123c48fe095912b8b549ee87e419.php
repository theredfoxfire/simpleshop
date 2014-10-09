<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_2799e0959b13ef13d1af4a508e0f7b739e34123c48fe095912b8b549ee87e419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 58,  206 => 54,  267 => 5,  207 => 91,  244 => 111,  216 => 60,  210 => 97,  200 => 94,  186 => 81,  174 => 85,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 314,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 306,  965 => 305,  962 => 304,  956 => 302,  954 => 301,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 292,  932 => 291,  928 => 264,  922 => 261,  919 => 260,  916 => 259,  913 => 258,  909 => 285,  904 => 282,  896 => 277,  891 => 275,  887 => 273,  885 => 272,  881 => 270,  875 => 268,  873 => 267,  869 => 265,  867 => 258,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 254,  842 => 327,  840 => 291,  835 => 288,  833 => 254,  830 => 253,  827 => 252,  822 => 244,  819 => 243,  815 => 242,  811 => 240,  805 => 239,  800 => 236,  794 => 235,  782 => 233,  779 => 232,  775 => 231,  769 => 230,  762 => 227,  758 => 226,  750 => 224,  744 => 223,  741 => 222,  738 => 221,  735 => 220,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 215,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 205,  678 => 204,  672 => 203,  669 => 202,  665 => 201,  662 => 200,  659 => 199,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 246,  613 => 243,  610 => 198,  608 => 197,  605 => 196,  602 => 182,  599 => 181,  593 => 247,  591 => 181,  587 => 179,  584 => 178,  577 => 329,  571 => 250,  569 => 178,  566 => 177,  563 => 176,  555 => 165,  552 => 164,  544 => 158,  533 => 151,  530 => 150,  526 => 147,  496 => 140,  490 => 138,  486 => 136,  470 => 131,  467 => 130,  446 => 128,  443 => 127,  438 => 125,  432 => 123,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 111,  385 => 107,  382 => 106,  372 => 103,  364 => 101,  361 => 100,  353 => 96,  346 => 93,  338 => 112,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 90,  175 => 74,  20 => 1,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 182,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 252,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 157,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 132,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 112,  367 => 102,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 113,  237 => 109,  231 => 99,  205 => 90,  202 => 58,  185 => 61,  180 => 50,  127 => 59,  118 => 46,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 94,  342 => 91,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 78,  279 => 77,  276 => 67,  271 => 78,  263 => 4,  257 => 56,  233 => 107,  222 => 60,  211 => 56,  194 => 66,  146 => 58,  76 => 27,  12 => 36,  150 => 71,  195 => 51,  184 => 47,  139 => 30,  181 => 46,  178 => 80,  170 => 71,  167 => 41,  165 => 40,  148 => 49,  137 => 29,  104 => 45,  96 => 90,  90 => 27,  100 => 43,  188 => 88,  155 => 39,  129 => 26,  114 => 51,  83 => 31,  65 => 27,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 76,  259 => 118,  242 => 101,  161 => 50,  157 => 51,  153 => 48,  120 => 47,  84 => 19,  37 => 17,  97 => 41,  81 => 26,  70 => 29,  522 => 145,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 126,  433 => 96,  391 => 109,  389 => 162,  386 => 239,  330 => 92,  326 => 91,  321 => 90,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 89,  160 => 57,  124 => 57,  113 => 23,  110 => 22,  34 => 15,  190 => 54,  152 => 72,  145 => 60,  134 => 28,  126 => 55,  77 => 25,  74 => 26,  58 => 19,  52 => 17,  53 => 10,  23 => 13,  480 => 134,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 124,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 113,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 104,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 173,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 79,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 131,  229 => 105,  220 => 70,  214 => 57,  177 => 45,  169 => 33,  140 => 30,  132 => 27,  128 => 47,  111 => 40,  107 => 47,  61 => 28,  273 => 96,  269 => 6,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 61,  227 => 104,  224 => 103,  221 => 77,  219 => 58,  217 => 63,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 53,  131 => 60,  119 => 24,  108 => 42,  102 => 44,  71 => 29,  67 => 22,  63 => 22,  59 => 12,  47 => 17,  94 => 43,  89 => 40,  85 => 32,  79 => 31,  75 => 15,  68 => 31,  56 => 11,  50 => 9,  201 => 52,  196 => 51,  183 => 78,  171 => 43,  166 => 32,  163 => 42,  158 => 56,  156 => 64,  151 => 36,  142 => 31,  138 => 57,  136 => 58,  123 => 48,  121 => 50,  117 => 53,  115 => 45,  105 => 44,  101 => 37,  91 => 38,  69 => 14,  62 => 13,  49 => 17,  28 => 14,  87 => 35,  72 => 25,  66 => 23,  55 => 18,  41 => 19,  31 => 17,  38 => 12,  26 => 2,  25 => 12,  24 => 13,  35 => 22,  29 => 16,  21 => 11,  19 => 11,  98 => 36,  93 => 21,  88 => 33,  78 => 16,  46 => 19,  44 => 21,  32 => 21,  27 => 16,  22 => 11,  43 => 18,  40 => 13,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 51,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 39,  154 => 37,  149 => 62,  147 => 34,  144 => 48,  141 => 55,  133 => 61,  130 => 57,  125 => 46,  122 => 25,  116 => 41,  112 => 176,  109 => 48,  106 => 26,  103 => 38,  99 => 30,  95 => 41,  92 => 38,  86 => 37,  82 => 36,  80 => 17,  73 => 24,  64 => 25,  60 => 26,  57 => 20,  54 => 23,  51 => 21,  48 => 10,  45 => 8,  42 => 13,  39 => 12,  36 => 4,  33 => 3,  30 => 17,);
    }
}
