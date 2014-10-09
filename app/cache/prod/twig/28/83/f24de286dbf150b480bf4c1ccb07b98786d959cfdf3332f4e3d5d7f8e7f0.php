<?php

/* knp_menu.html.twig */
class __TwigTemplate_2883f24de286dbf150b480bf4c1ccb07b98786d959cfdf3332f4e3d5d7f8e7f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu_base.html.twig");

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes");
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 36
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth")))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth") - 1)));
        }
        // line 40
        if (((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth") > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "matchingDepth") - 1)));
        }
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 54
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth")), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0)))) {
                // line 69
                echo "        ";
                if (((!twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class"))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class")));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ((!twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class")))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class")));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 77
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 83
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
        }
    }

    // line 3
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (((!(null === (isset($context["value"]) ? $context["value"] : null))) && (!((isset($context["value"]) ? $context["value"] : null) === false)))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : null), ((((isset($context["value"]) ? $context["value"] : null) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 5,  207 => 91,  244 => 111,  216 => 99,  210 => 97,  200 => 94,  186 => 81,  174 => 85,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 314,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 306,  965 => 305,  962 => 304,  956 => 302,  954 => 301,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 292,  932 => 291,  928 => 264,  922 => 261,  919 => 260,  916 => 259,  913 => 258,  909 => 285,  904 => 282,  896 => 277,  891 => 275,  887 => 273,  885 => 272,  881 => 270,  875 => 268,  873 => 267,  869 => 265,  867 => 258,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 254,  842 => 327,  840 => 291,  835 => 288,  833 => 254,  830 => 253,  827 => 252,  822 => 244,  819 => 243,  815 => 242,  811 => 240,  805 => 239,  800 => 236,  794 => 235,  782 => 233,  779 => 232,  775 => 231,  769 => 230,  762 => 227,  758 => 226,  750 => 224,  744 => 223,  741 => 222,  738 => 221,  735 => 220,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 215,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 205,  678 => 204,  672 => 203,  669 => 202,  665 => 201,  662 => 200,  659 => 199,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 246,  613 => 243,  610 => 198,  608 => 197,  605 => 196,  602 => 182,  599 => 181,  593 => 247,  591 => 181,  587 => 179,  584 => 178,  577 => 329,  571 => 250,  569 => 178,  566 => 177,  563 => 176,  555 => 165,  552 => 164,  544 => 158,  533 => 151,  530 => 150,  526 => 147,  496 => 140,  490 => 138,  486 => 136,  470 => 131,  467 => 130,  446 => 128,  443 => 127,  438 => 125,  432 => 123,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 111,  385 => 107,  382 => 106,  372 => 103,  364 => 101,  361 => 100,  353 => 96,  346 => 93,  338 => 112,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 90,  175 => 74,  20 => 1,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 182,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 252,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 157,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 132,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 112,  367 => 102,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 113,  237 => 109,  231 => 99,  205 => 90,  202 => 58,  185 => 61,  180 => 50,  127 => 59,  118 => 49,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 94,  342 => 91,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 78,  279 => 77,  276 => 67,  271 => 78,  263 => 4,  257 => 56,  233 => 107,  222 => 60,  211 => 56,  194 => 66,  146 => 58,  76 => 27,  12 => 36,  150 => 71,  195 => 84,  184 => 87,  139 => 54,  181 => 77,  178 => 80,  170 => 71,  167 => 56,  165 => 69,  148 => 49,  137 => 52,  104 => 45,  96 => 90,  90 => 38,  100 => 43,  188 => 88,  155 => 39,  129 => 44,  114 => 51,  83 => 31,  65 => 27,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 76,  259 => 118,  242 => 101,  161 => 50,  157 => 51,  153 => 48,  120 => 42,  84 => 36,  37 => 17,  97 => 41,  81 => 31,  70 => 29,  522 => 145,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 126,  433 => 96,  391 => 109,  389 => 162,  386 => 239,  330 => 92,  326 => 91,  321 => 90,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 89,  160 => 57,  124 => 57,  113 => 40,  110 => 42,  34 => 15,  190 => 54,  152 => 72,  145 => 68,  134 => 51,  126 => 55,  77 => 31,  74 => 26,  58 => 22,  52 => 19,  53 => 14,  23 => 12,  480 => 134,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 124,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 113,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 104,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 173,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 79,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 131,  229 => 105,  220 => 70,  214 => 57,  177 => 86,  169 => 33,  140 => 30,  132 => 57,  128 => 47,  111 => 44,  107 => 47,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 47,  227 => 104,  224 => 103,  221 => 77,  219 => 58,  217 => 63,  208 => 96,  204 => 72,  179 => 76,  159 => 66,  143 => 56,  135 => 53,  131 => 60,  119 => 54,  108 => 42,  102 => 44,  71 => 31,  67 => 22,  63 => 16,  59 => 23,  47 => 17,  94 => 43,  89 => 40,  85 => 31,  79 => 28,  75 => 33,  68 => 30,  56 => 22,  50 => 18,  201 => 92,  196 => 51,  183 => 78,  171 => 57,  166 => 32,  163 => 42,  158 => 56,  156 => 64,  151 => 61,  142 => 59,  138 => 57,  136 => 47,  123 => 52,  121 => 50,  117 => 53,  115 => 47,  105 => 44,  101 => 42,  91 => 41,  69 => 26,  62 => 19,  49 => 17,  28 => 14,  87 => 35,  72 => 25,  66 => 27,  55 => 15,  41 => 19,  31 => 15,  38 => 12,  26 => 13,  25 => 12,  24 => 13,  35 => 11,  29 => 14,  21 => 11,  19 => 11,  98 => 35,  93 => 39,  88 => 37,  78 => 28,  46 => 9,  44 => 8,  32 => 5,  27 => 14,  22 => 12,  43 => 18,  40 => 13,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 53,  182 => 51,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 68,  154 => 63,  149 => 60,  147 => 52,  144 => 48,  141 => 55,  133 => 61,  130 => 48,  125 => 46,  122 => 56,  116 => 41,  112 => 176,  109 => 48,  106 => 26,  103 => 43,  99 => 17,  95 => 41,  92 => 38,  86 => 37,  82 => 34,  80 => 33,  73 => 27,  64 => 25,  60 => 23,  57 => 20,  54 => 23,  51 => 12,  48 => 10,  45 => 18,  42 => 7,  39 => 16,  36 => 4,  33 => 3,  30 => 15,);
    }
}
