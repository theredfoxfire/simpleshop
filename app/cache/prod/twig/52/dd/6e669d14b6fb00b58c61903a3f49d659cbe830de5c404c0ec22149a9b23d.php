<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_52dd6e669d14b6fb00b58c61903a3f49d659cbe830de5c404c0ec22149a9b23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1102 => 321,  1096 => 318,  1086 => 376,  1079 => 374,  1076 => 372,  1054 => 369,  1037 => 368,  1035 => 367,  1033 => 366,  1023 => 359,  1003 => 344,  974 => 321,  968 => 318,  958 => 310,  941 => 307,  918 => 305,  915 => 304,  905 => 300,  901 => 299,  895 => 296,  872 => 284,  863 => 281,  859 => 280,  855 => 279,  851 => 278,  831 => 271,  825 => 269,  818 => 267,  813 => 265,  810 => 264,  799 => 258,  790 => 254,  788 => 253,  784 => 251,  781 => 250,  766 => 248,  763 => 247,  760 => 246,  757 => 245,  755 => 244,  724 => 233,  721 => 232,  682 => 227,  677 => 226,  674 => 225,  611 => 211,  585 => 200,  561 => 171,  549 => 167,  542 => 189,  534 => 186,  531 => 185,  525 => 182,  517 => 179,  514 => 178,  491 => 174,  489 => 167,  475 => 163,  466 => 159,  460 => 157,  454 => 156,  450 => 155,  426 => 148,  420 => 146,  417 => 145,  414 => 144,  411 => 143,  376 => 129,  369 => 125,  366 => 123,  351 => 119,  345 => 117,  325 => 110,  319 => 108,  316 => 107,  307 => 105,  280 => 94,  172 => 59,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 370,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  983 => 308,  981 => 307,  979 => 323,  975 => 305,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  888 => 270,  884 => 267,  879 => 264,  876 => 263,  843 => 257,  837 => 272,  826 => 247,  824 => 246,  812 => 238,  808 => 263,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 255,  791 => 226,  789 => 225,  786 => 224,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  732 => 238,  728 => 192,  726 => 191,  723 => 190,  717 => 186,  714 => 185,  704 => 230,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 229,  683 => 170,  673 => 165,  671 => 224,  668 => 163,  663 => 160,  661 => 218,  658 => 158,  654 => 216,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  629 => 141,  627 => 140,  624 => 139,  617 => 135,  609 => 129,  594 => 205,  592 => 126,  589 => 124,  579 => 197,  576 => 196,  574 => 195,  570 => 112,  567 => 173,  565 => 109,  562 => 108,  556 => 104,  550 => 101,  548 => 100,  539 => 96,  536 => 187,  477 => 82,  465 => 77,  463 => 158,  439 => 71,  429 => 149,  425 => 64,  412 => 60,  397 => 55,  394 => 54,  373 => 46,  370 => 45,  357 => 37,  339 => 28,  323 => 19,  295 => 11,  290 => 7,  275 => 330,  260 => 293,  255 => 284,  245 => 270,  232 => 249,  197 => 72,  212 => 224,  206 => 70,  267 => 5,  207 => 216,  244 => 111,  216 => 60,  210 => 97,  200 => 73,  186 => 190,  174 => 64,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 310,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 303,  965 => 305,  962 => 304,  956 => 302,  954 => 300,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 306,  932 => 291,  928 => 286,  922 => 261,  919 => 260,  916 => 280,  913 => 258,  909 => 301,  904 => 277,  896 => 277,  891 => 271,  887 => 293,  885 => 272,  881 => 290,  875 => 268,  873 => 267,  869 => 259,  867 => 282,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 277,  842 => 275,  840 => 255,  835 => 252,  833 => 251,  830 => 250,  827 => 252,  822 => 268,  819 => 244,  815 => 239,  811 => 240,  805 => 262,  800 => 236,  794 => 235,  782 => 221,  779 => 216,  775 => 231,  769 => 249,  762 => 227,  758 => 226,  750 => 242,  744 => 223,  741 => 222,  738 => 240,  735 => 239,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 187,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 169,  678 => 168,  672 => 203,  669 => 202,  665 => 220,  662 => 200,  659 => 217,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 212,  613 => 243,  610 => 198,  608 => 210,  605 => 209,  602 => 208,  599 => 207,  593 => 247,  591 => 181,  587 => 123,  584 => 122,  577 => 116,  571 => 194,  569 => 178,  566 => 177,  563 => 176,  555 => 169,  552 => 168,  544 => 99,  533 => 151,  530 => 150,  526 => 147,  496 => 176,  490 => 138,  486 => 136,  470 => 78,  467 => 130,  446 => 75,  443 => 154,  438 => 152,  432 => 150,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 135,  385 => 107,  382 => 131,  372 => 127,  364 => 122,  361 => 121,  353 => 96,  346 => 33,  338 => 114,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 90,  175 => 74,  20 => 1,  648 => 236,  637 => 214,  633 => 144,  625 => 230,  620 => 213,  614 => 133,  612 => 225,  607 => 222,  597 => 206,  590 => 214,  586 => 212,  583 => 211,  581 => 198,  575 => 114,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 103,  545 => 200,  541 => 97,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 180,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 175,  483 => 127,  479 => 126,  472 => 79,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 62,  419 => 118,  415 => 116,  410 => 59,  401 => 137,  399 => 56,  367 => 102,  359 => 120,  348 => 118,  343 => 138,  334 => 26,  331 => 93,  328 => 111,  317 => 17,  291 => 80,  265 => 299,  253 => 85,  250 => 274,  237 => 262,  231 => 99,  205 => 90,  202 => 58,  185 => 66,  180 => 66,  127 => 59,  118 => 46,  392 => 107,  383 => 49,  377 => 47,  354 => 95,  352 => 94,  349 => 34,  342 => 116,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 103,  299 => 102,  293 => 98,  287 => 5,  284 => 70,  282 => 3,  279 => 77,  276 => 67,  271 => 78,  263 => 89,  257 => 291,  233 => 83,  222 => 238,  211 => 73,  194 => 197,  146 => 147,  76 => 27,  12 => 36,  150 => 71,  195 => 51,  184 => 68,  139 => 139,  181 => 185,  178 => 184,  170 => 71,  167 => 41,  165 => 61,  148 => 55,  137 => 51,  104 => 74,  96 => 36,  90 => 27,  100 => 42,  188 => 194,  155 => 39,  129 => 59,  114 => 43,  83 => 37,  65 => 27,  318 => 83,  304 => 104,  300 => 13,  281 => 127,  277 => 93,  274 => 125,  270 => 316,  266 => 90,  262 => 76,  259 => 118,  242 => 269,  161 => 162,  157 => 57,  153 => 55,  120 => 45,  84 => 40,  37 => 17,  97 => 47,  81 => 32,  70 => 29,  522 => 181,  519 => 91,  515 => 238,  512 => 237,  505 => 88,  502 => 87,  449 => 287,  445 => 286,  441 => 153,  433 => 96,  391 => 109,  389 => 133,  386 => 239,  330 => 23,  326 => 21,  321 => 109,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 196,  160 => 57,  124 => 108,  113 => 23,  110 => 22,  34 => 15,  190 => 69,  152 => 72,  145 => 54,  134 => 50,  126 => 121,  77 => 36,  74 => 34,  58 => 28,  52 => 23,  53 => 10,  23 => 13,  480 => 166,  474 => 80,  469 => 160,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 70,  435 => 151,  430 => 95,  427 => 65,  423 => 147,  413 => 95,  409 => 132,  407 => 93,  402 => 58,  398 => 136,  393 => 164,  387 => 132,  384 => 158,  381 => 48,  379 => 130,  374 => 104,  368 => 99,  365 => 41,  362 => 39,  360 => 38,  355 => 145,  341 => 173,  337 => 27,  322 => 101,  314 => 16,  312 => 106,  309 => 83,  305 => 77,  298 => 12,  294 => 81,  285 => 4,  283 => 95,  278 => 331,  268 => 91,  264 => 84,  258 => 86,  252 => 283,  247 => 273,  241 => 131,  229 => 105,  220 => 70,  214 => 231,  177 => 61,  169 => 168,  140 => 52,  132 => 27,  128 => 48,  111 => 41,  107 => 52,  61 => 2,  273 => 92,  269 => 6,  254 => 92,  246 => 68,  243 => 88,  240 => 263,  238 => 84,  235 => 250,  230 => 82,  227 => 81,  224 => 241,  221 => 77,  219 => 237,  217 => 75,  208 => 71,  204 => 215,  179 => 62,  159 => 158,  143 => 53,  135 => 53,  131 => 49,  119 => 95,  108 => 40,  102 => 38,  71 => 15,  67 => 22,  63 => 22,  59 => 12,  47 => 17,  94 => 35,  89 => 43,  85 => 32,  79 => 37,  75 => 15,  68 => 31,  56 => 11,  50 => 16,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 42,  158 => 56,  156 => 58,  151 => 56,  142 => 31,  138 => 57,  136 => 138,  123 => 46,  121 => 107,  117 => 57,  115 => 45,  105 => 51,  101 => 49,  91 => 44,  69 => 31,  62 => 27,  49 => 17,  28 => 14,  87 => 35,  72 => 33,  66 => 29,  55 => 24,  41 => 19,  31 => 14,  38 => 20,  26 => 2,  25 => 12,  24 => 13,  35 => 19,  29 => 16,  21 => 11,  19 => 2,  98 => 36,  93 => 45,  88 => 33,  78 => 16,  46 => 15,  44 => 18,  32 => 18,  27 => 16,  22 => 7,  43 => 14,  40 => 13,  209 => 223,  203 => 89,  199 => 212,  193 => 83,  189 => 70,  187 => 69,  182 => 64,  176 => 178,  173 => 177,  168 => 62,  164 => 163,  162 => 60,  154 => 57,  149 => 148,  147 => 34,  144 => 144,  141 => 143,  133 => 61,  130 => 57,  125 => 47,  122 => 25,  116 => 94,  112 => 176,  109 => 53,  106 => 86,  103 => 50,  99 => 37,  95 => 41,  92 => 38,  86 => 41,  82 => 39,  80 => 36,  73 => 26,  64 => 28,  60 => 26,  57 => 25,  54 => 23,  51 => 25,  48 => 24,  45 => 23,  42 => 13,  39 => 17,  36 => 16,  33 => 3,  30 => 17,);
    }
}
