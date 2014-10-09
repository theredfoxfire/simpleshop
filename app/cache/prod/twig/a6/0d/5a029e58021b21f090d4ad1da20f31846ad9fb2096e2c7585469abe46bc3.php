<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_a60d5a029e58021b21f090d4ad1da20f31846ad9fb2096e2c7585469abe46bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

    ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "top")) > 0)) {
            // line 21
            echo "        <div class=\"row\">
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "top"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "class"), "html", null, true);
                echo "\">
                    ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row\">
        ";
        // line 31
        $context["has_center"] = false;
        // line 32
        echo "
        <div class=\"";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "center")) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "left"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 35
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>

        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "center")) > 0)) {
            // line 40
            echo "            <div class=\"col-md-4\">
                ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "center"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 42
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        }
        // line 46
        echo "
        <div class=\"";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "center")) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "right"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 49
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>

    ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "bottom")) > 0)) {
            // line 55
            echo "        <div class=\"row\">
            ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "bottom"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 57
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "class"), "html", null, true);
                echo "\">
                    ";
                // line 58
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "


    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 314,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 306,  965 => 305,  962 => 304,  956 => 302,  954 => 301,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 292,  932 => 291,  928 => 264,  922 => 261,  919 => 260,  916 => 259,  913 => 258,  909 => 285,  904 => 282,  896 => 277,  891 => 275,  887 => 273,  885 => 272,  881 => 270,  875 => 268,  873 => 267,  869 => 265,  867 => 258,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 254,  842 => 327,  840 => 291,  835 => 288,  833 => 254,  830 => 253,  827 => 252,  822 => 244,  819 => 243,  815 => 242,  811 => 240,  805 => 239,  800 => 236,  794 => 235,  782 => 233,  779 => 232,  775 => 231,  769 => 230,  762 => 227,  758 => 226,  750 => 224,  744 => 223,  741 => 222,  738 => 221,  735 => 220,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 215,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 205,  678 => 204,  672 => 203,  669 => 202,  665 => 201,  662 => 200,  659 => 199,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 246,  613 => 243,  610 => 198,  608 => 197,  605 => 196,  602 => 182,  599 => 181,  593 => 247,  591 => 181,  587 => 179,  584 => 178,  577 => 329,  571 => 250,  569 => 178,  566 => 177,  563 => 176,  555 => 165,  552 => 164,  544 => 158,  533 => 151,  530 => 150,  526 => 147,  496 => 140,  490 => 138,  486 => 136,  470 => 131,  467 => 130,  446 => 128,  443 => 127,  438 => 125,  432 => 123,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 111,  385 => 107,  382 => 106,  372 => 103,  364 => 101,  361 => 100,  353 => 96,  346 => 93,  338 => 112,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 50,  175 => 74,  20 => 1,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 182,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 252,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 157,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 132,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 112,  367 => 102,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 72,  237 => 66,  231 => 63,  205 => 53,  202 => 58,  185 => 61,  180 => 50,  127 => 182,  118 => 49,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 94,  342 => 91,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 78,  279 => 77,  276 => 67,  271 => 78,  263 => 58,  257 => 56,  233 => 48,  222 => 60,  211 => 56,  194 => 66,  146 => 33,  76 => 27,  12 => 36,  150 => 61,  195 => 49,  184 => 45,  139 => 51,  181 => 44,  178 => 80,  170 => 44,  167 => 56,  165 => 75,  148 => 49,  137 => 29,  104 => 18,  96 => 90,  90 => 38,  100 => 40,  188 => 88,  155 => 39,  129 => 44,  114 => 50,  83 => 32,  65 => 27,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 76,  259 => 75,  242 => 69,  161 => 50,  157 => 51,  153 => 48,  120 => 42,  84 => 38,  37 => 17,  97 => 39,  81 => 31,  70 => 29,  522 => 145,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 126,  433 => 96,  391 => 109,  389 => 162,  386 => 239,  330 => 92,  326 => 91,  321 => 90,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 181,  113 => 40,  110 => 42,  34 => 15,  190 => 54,  152 => 62,  145 => 53,  134 => 55,  126 => 55,  77 => 29,  74 => 26,  58 => 22,  52 => 21,  53 => 23,  23 => 12,  480 => 134,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 124,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 113,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 104,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 173,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 79,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 57,  177 => 65,  169 => 33,  140 => 30,  132 => 57,  128 => 47,  111 => 39,  107 => 37,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 58,  217 => 63,  208 => 55,  204 => 72,  179 => 84,  159 => 41,  143 => 56,  135 => 53,  131 => 31,  119 => 25,  108 => 42,  102 => 175,  71 => 31,  67 => 25,  63 => 16,  59 => 23,  47 => 18,  94 => 34,  89 => 33,  85 => 31,  79 => 28,  75 => 33,  68 => 30,  56 => 21,  50 => 20,  201 => 92,  196 => 51,  183 => 62,  171 => 57,  166 => 32,  163 => 42,  158 => 56,  156 => 64,  151 => 30,  142 => 59,  138 => 57,  136 => 47,  123 => 52,  121 => 50,  117 => 178,  115 => 47,  105 => 44,  101 => 42,  91 => 39,  69 => 24,  62 => 24,  49 => 17,  28 => 14,  87 => 38,  72 => 31,  66 => 27,  55 => 22,  41 => 19,  31 => 15,  38 => 18,  26 => 13,  25 => 12,  24 => 13,  35 => 17,  29 => 14,  21 => 11,  19 => 11,  98 => 35,  93 => 39,  88 => 37,  78 => 34,  46 => 19,  44 => 17,  32 => 5,  27 => 14,  22 => 12,  43 => 18,  40 => 17,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 63,  187 => 53,  182 => 51,  176 => 58,  173 => 35,  168 => 69,  164 => 55,  162 => 54,  154 => 71,  149 => 73,  147 => 52,  144 => 48,  141 => 58,  133 => 46,  130 => 43,  125 => 46,  122 => 45,  116 => 41,  112 => 176,  109 => 19,  106 => 26,  103 => 43,  99 => 17,  95 => 41,  92 => 38,  86 => 33,  82 => 33,  80 => 25,  73 => 27,  64 => 24,  60 => 23,  57 => 20,  54 => 23,  51 => 22,  48 => 21,  45 => 18,  42 => 17,  39 => 16,  36 => 14,  33 => 16,  30 => 15,);
    }
}
