<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_c49751d8a63efba28e4e932ac2e19450a45760c396f101e7468bc85cb81efb10 extends Twig_Template
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
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  57 => 27,  54 => 26,  33 => 16,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 170,  681 => 169,  678 => 168,  673 => 165,  671 => 164,  668 => 163,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  599 => 128,  592 => 126,  589 => 124,  587 => 123,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  574 => 113,  570 => 112,  565 => 109,  562 => 108,  556 => 104,  552 => 102,  550 => 101,  544 => 99,  539 => 96,  522 => 92,  519 => 91,  505 => 88,  477 => 82,  474 => 80,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  446 => 75,  443 => 74,  437 => 70,  435 => 69,  429 => 66,  425 => 64,  423 => 63,  421 => 62,  412 => 60,  410 => 59,  402 => 58,  399 => 56,  397 => 55,  389 => 51,  383 => 49,  381 => 48,  377 => 47,  373 => 46,  370 => 45,  365 => 41,  362 => 39,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  337 => 27,  330 => 23,  328 => 22,  326 => 21,  321 => 18,  300 => 13,  298 => 12,  295 => 11,  290 => 7,  287 => 5,  285 => 4,  282 => 3,  273 => 317,  270 => 316,  268 => 300,  265 => 299,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  247 => 273,  245 => 270,  242 => 269,  235 => 250,  232 => 249,  230 => 244,  227 => 243,  222 => 238,  219 => 237,  217 => 232,  214 => 231,  212 => 224,  209 => 223,  207 => 216,  199 => 212,  196 => 211,  194 => 197,  191 => 196,  188 => 194,  181 => 185,  178 => 184,  176 => 178,  173 => 177,  171 => 173,  169 => 168,  166 => 167,  164 => 163,  161 => 162,  156 => 157,  154 => 153,  149 => 148,  146 => 147,  144 => 144,  141 => 143,  139 => 139,  134 => 133,  129 => 122,  126 => 121,  124 => 108,  121 => 107,  114 => 91,  111 => 90,  109 => 87,  106 => 86,  104 => 74,  101 => 73,  96 => 53,  94 => 45,  91 => 44,  86 => 36,  99 => 54,  90 => 27,  73 => 24,  66 => 10,  63 => 22,  55 => 18,  27 => 14,  25 => 12,  67 => 19,  77 => 25,  65 => 29,  62 => 28,  37 => 19,  28 => 17,  49 => 17,  43 => 21,  89 => 37,  84 => 33,  81 => 32,  75 => 36,  59 => 27,  56 => 26,  53 => 18,  50 => 25,  46 => 25,  44 => 24,  40 => 20,  38 => 18,  35 => 22,  32 => 21,  30 => 17,  24 => 13,  21 => 11,  34 => 18,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  609 => 129,  598 => 188,  594 => 127,  586 => 184,  581 => 182,  575 => 114,  573 => 179,  567 => 110,  558 => 172,  554 => 103,  548 => 100,  545 => 169,  541 => 97,  536 => 95,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 87,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 71,  427 => 65,  424 => 88,  418 => 113,  415 => 112,  413 => 100,  409 => 98,  407 => 88,  404 => 87,  401 => 86,  396 => 141,  394 => 54,  388 => 132,  384 => 130,  382 => 127,  379 => 126,  374 => 123,  360 => 38,  351 => 121,  334 => 26,  329 => 119,  327 => 118,  323 => 19,  320 => 115,  317 => 17,  314 => 16,  312 => 84,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  278 => 331,  275 => 330,  258 => 72,  255 => 284,  252 => 283,  246 => 66,  240 => 263,  237 => 262,  233 => 62,  229 => 61,  224 => 241,  218 => 59,  206 => 58,  204 => 215,  201 => 213,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 190,  183 => 189,  180 => 49,  177 => 48,  174 => 47,  172 => 46,  168 => 44,  162 => 40,  159 => 158,  155 => 38,  151 => 152,  148 => 35,  143 => 26,  136 => 138,  133 => 154,  131 => 132,  128 => 152,  122 => 149,  119 => 95,  116 => 94,  112 => 145,  110 => 144,  107 => 143,  105 => 80,  102 => 79,  100 => 70,  97 => 69,  95 => 32,  92 => 34,  87 => 32,  82 => 31,  79 => 26,  76 => 25,  74 => 16,  71 => 15,  69 => 11,  64 => 3,  61 => 2,  58 => 19,  52 => 17,  47 => 17,  45 => 21,  42 => 13,  39 => 12,);
    }
}
