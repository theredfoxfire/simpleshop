<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_454ea1e06ed25ecd483622c511aa74d37ae4a25cb49fcc417787741ca09fe213 extends Twig_Template
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
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"text-center\">
            <ul class=\"pagination\">
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 58,  206 => 54,  267 => 5,  207 => 91,  244 => 111,  216 => 60,  210 => 97,  200 => 94,  186 => 81,  174 => 85,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 314,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 306,  965 => 305,  962 => 304,  956 => 302,  954 => 301,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 292,  932 => 291,  928 => 264,  922 => 261,  919 => 260,  916 => 259,  913 => 258,  909 => 285,  904 => 282,  896 => 277,  891 => 275,  887 => 273,  885 => 272,  881 => 270,  875 => 268,  873 => 267,  869 => 265,  867 => 258,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 254,  842 => 327,  840 => 291,  835 => 288,  833 => 254,  830 => 253,  827 => 252,  822 => 244,  819 => 243,  815 => 242,  811 => 240,  805 => 239,  800 => 236,  794 => 235,  782 => 233,  779 => 232,  775 => 231,  769 => 230,  762 => 227,  758 => 226,  750 => 224,  744 => 223,  741 => 222,  738 => 221,  735 => 220,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 215,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 205,  678 => 204,  672 => 203,  669 => 202,  665 => 201,  662 => 200,  659 => 199,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 246,  613 => 243,  610 => 198,  608 => 197,  605 => 196,  602 => 182,  599 => 181,  593 => 247,  591 => 181,  587 => 179,  584 => 178,  577 => 329,  571 => 250,  569 => 178,  566 => 177,  563 => 176,  555 => 165,  552 => 164,  544 => 158,  533 => 151,  530 => 150,  526 => 147,  496 => 140,  490 => 138,  486 => 136,  470 => 131,  467 => 130,  446 => 128,  443 => 127,  438 => 125,  432 => 123,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 111,  385 => 107,  382 => 106,  372 => 103,  364 => 101,  361 => 100,  353 => 96,  346 => 93,  338 => 112,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 90,  175 => 74,  20 => 1,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 182,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 252,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 157,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 132,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 112,  367 => 102,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 113,  237 => 109,  231 => 99,  205 => 90,  202 => 58,  185 => 61,  180 => 50,  127 => 59,  118 => 46,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 94,  342 => 91,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 78,  279 => 77,  276 => 67,  271 => 78,  263 => 4,  257 => 56,  233 => 107,  222 => 60,  211 => 56,  194 => 66,  146 => 58,  76 => 27,  12 => 36,  150 => 71,  195 => 51,  184 => 47,  139 => 30,  181 => 46,  178 => 80,  170 => 71,  167 => 41,  165 => 40,  148 => 49,  137 => 29,  104 => 45,  96 => 90,  90 => 34,  100 => 43,  188 => 88,  155 => 39,  129 => 26,  114 => 51,  83 => 31,  65 => 27,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 76,  259 => 118,  242 => 101,  161 => 50,  157 => 51,  153 => 48,  120 => 47,  84 => 19,  37 => 17,  97 => 41,  81 => 31,  70 => 29,  522 => 145,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 126,  433 => 96,  391 => 109,  389 => 162,  386 => 239,  330 => 92,  326 => 91,  321 => 90,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 89,  160 => 57,  124 => 57,  113 => 23,  110 => 22,  34 => 15,  190 => 54,  152 => 72,  145 => 60,  134 => 28,  126 => 55,  77 => 31,  74 => 26,  58 => 22,  52 => 23,  53 => 10,  23 => 13,  480 => 134,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 124,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 113,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 104,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 173,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 79,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 131,  229 => 105,  220 => 70,  214 => 57,  177 => 45,  169 => 33,  140 => 30,  132 => 27,  128 => 47,  111 => 40,  107 => 47,  61 => 28,  273 => 96,  269 => 6,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 61,  227 => 104,  224 => 103,  221 => 77,  219 => 58,  217 => 63,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 53,  131 => 60,  119 => 24,  108 => 42,  102 => 44,  71 => 29,  67 => 22,  63 => 27,  59 => 12,  47 => 17,  94 => 43,  89 => 40,  85 => 32,  79 => 31,  75 => 15,  68 => 31,  56 => 11,  50 => 9,  201 => 52,  196 => 51,  183 => 78,  171 => 43,  166 => 32,  163 => 42,  158 => 56,  156 => 64,  151 => 36,  142 => 31,  138 => 57,  136 => 58,  123 => 48,  121 => 50,  117 => 53,  115 => 45,  105 => 44,  101 => 37,  91 => 38,  69 => 14,  62 => 13,  49 => 17,  28 => 14,  87 => 35,  72 => 25,  66 => 30,  55 => 25,  41 => 19,  31 => 17,  38 => 12,  26 => 2,  25 => 12,  24 => 13,  35 => 5,  29 => 16,  21 => 11,  19 => 11,  98 => 36,  93 => 21,  88 => 33,  78 => 16,  46 => 19,  44 => 21,  32 => 4,  27 => 14,  22 => 12,  43 => 18,  40 => 13,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 51,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 39,  154 => 37,  149 => 62,  147 => 34,  144 => 48,  141 => 55,  133 => 61,  130 => 57,  125 => 46,  122 => 25,  116 => 41,  112 => 176,  109 => 48,  106 => 26,  103 => 38,  99 => 17,  95 => 41,  92 => 38,  86 => 37,  82 => 36,  80 => 17,  73 => 27,  64 => 25,  60 => 26,  57 => 20,  54 => 23,  51 => 21,  48 => 10,  45 => 8,  42 => 20,  39 => 19,  36 => 4,  33 => 3,  30 => 15,);
    }
}
