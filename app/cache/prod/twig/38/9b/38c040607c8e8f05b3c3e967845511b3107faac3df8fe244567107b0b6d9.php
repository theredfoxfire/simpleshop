<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_389b38c040607c8e8f05b3c3e967845511b3107faac3df8fe244567107b0b6d9 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null))) {
                // line 47
                echo "
                    <a  href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                // line 59
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 68
            echo "            </span>

            ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
                // line 71
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                    title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 80
            echo "        </span>

        ";
            // line 82
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
            // line 83
            echo "    </div>

    ";
            // line 85
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 186,  553 => 184,  543 => 179,  537 => 176,  528 => 173,  518 => 170,  511 => 167,  508 => 165,  501 => 161,  487 => 156,  455 => 141,  442 => 134,  436 => 132,  403 => 117,  380 => 107,  320 => 92,  308 => 86,  272 => 81,  249 => 74,  676 => 385,  666 => 382,  641 => 368,  635 => 365,  631 => 364,  615 => 354,  540 => 308,  529 => 299,  524 => 297,  504 => 292,  500 => 291,  495 => 158,  482 => 285,  452 => 268,  434 => 256,  400 => 116,  344 => 193,  310 => 171,  296 => 167,  226 => 131,  215 => 126,  358 => 103,  347 => 134,  301 => 117,  251 => 101,  228 => 88,  213 => 69,  1102 => 321,  1096 => 318,  1086 => 376,  1079 => 374,  1076 => 372,  1054 => 369,  1037 => 368,  1035 => 367,  1033 => 366,  1023 => 359,  1003 => 344,  974 => 321,  968 => 318,  958 => 310,  941 => 307,  918 => 305,  915 => 304,  905 => 300,  901 => 299,  895 => 296,  872 => 284,  863 => 281,  859 => 280,  855 => 279,  851 => 278,  831 => 271,  825 => 269,  818 => 267,  813 => 265,  810 => 264,  799 => 258,  790 => 254,  788 => 253,  784 => 251,  781 => 250,  766 => 248,  763 => 247,  760 => 246,  757 => 245,  755 => 244,  724 => 233,  721 => 232,  682 => 227,  677 => 226,  674 => 225,  611 => 211,  585 => 200,  561 => 171,  549 => 182,  542 => 189,  534 => 186,  531 => 185,  525 => 172,  517 => 179,  514 => 168,  491 => 157,  489 => 167,  475 => 163,  466 => 159,  460 => 143,  454 => 156,  450 => 155,  426 => 126,  420 => 123,  417 => 243,  414 => 144,  411 => 120,  376 => 129,  369 => 125,  366 => 106,  351 => 135,  345 => 117,  325 => 94,  319 => 124,  316 => 107,  307 => 105,  280 => 94,  172 => 59,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 370,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  983 => 308,  981 => 307,  979 => 323,  975 => 305,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  888 => 270,  884 => 267,  879 => 264,  876 => 263,  843 => 257,  837 => 272,  826 => 247,  824 => 246,  812 => 238,  808 => 263,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 255,  791 => 226,  789 => 225,  786 => 224,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  732 => 238,  728 => 192,  726 => 191,  723 => 190,  717 => 186,  714 => 185,  704 => 230,  701 => 180,  699 => 179,  696 => 178,  692 => 399,  690 => 174,  687 => 229,  683 => 393,  673 => 165,  671 => 224,  668 => 163,  663 => 160,  661 => 380,  658 => 158,  654 => 216,  652 => 376,  649 => 153,  645 => 369,  643 => 149,  640 => 148,  636 => 145,  629 => 141,  627 => 140,  624 => 139,  617 => 135,  609 => 129,  594 => 205,  592 => 126,  589 => 124,  579 => 332,  576 => 196,  574 => 195,  570 => 112,  567 => 173,  565 => 324,  562 => 108,  556 => 104,  550 => 101,  548 => 313,  539 => 96,  536 => 306,  477 => 82,  465 => 77,  463 => 158,  439 => 133,  429 => 149,  425 => 64,  412 => 60,  397 => 55,  394 => 54,  373 => 46,  370 => 45,  357 => 37,  339 => 191,  323 => 125,  295 => 11,  290 => 7,  275 => 330,  260 => 104,  255 => 284,  245 => 270,  232 => 249,  197 => 119,  212 => 224,  206 => 70,  267 => 78,  207 => 216,  244 => 140,  216 => 70,  210 => 97,  200 => 73,  186 => 82,  174 => 59,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 310,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 303,  965 => 305,  962 => 304,  956 => 302,  954 => 300,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 306,  932 => 291,  928 => 286,  922 => 261,  919 => 260,  916 => 280,  913 => 258,  909 => 301,  904 => 277,  896 => 277,  891 => 271,  887 => 293,  885 => 272,  881 => 290,  875 => 268,  873 => 267,  869 => 259,  867 => 282,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 277,  842 => 275,  840 => 255,  835 => 252,  833 => 251,  830 => 250,  827 => 252,  822 => 268,  819 => 244,  815 => 239,  811 => 240,  805 => 262,  800 => 236,  794 => 235,  782 => 221,  779 => 216,  775 => 231,  769 => 249,  762 => 227,  758 => 226,  750 => 242,  744 => 223,  741 => 222,  738 => 240,  735 => 239,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 187,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 169,  678 => 390,  672 => 203,  669 => 202,  665 => 220,  662 => 200,  659 => 217,  656 => 378,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 212,  613 => 243,  610 => 198,  608 => 210,  605 => 209,  602 => 208,  599 => 207,  593 => 247,  591 => 181,  587 => 123,  584 => 122,  577 => 329,  571 => 194,  569 => 325,  566 => 177,  563 => 188,  555 => 185,  552 => 168,  544 => 99,  533 => 151,  530 => 150,  526 => 147,  496 => 176,  490 => 287,  486 => 286,  470 => 278,  467 => 130,  446 => 75,  443 => 154,  438 => 152,  432 => 150,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 118,  395 => 135,  385 => 225,  382 => 131,  372 => 127,  364 => 122,  361 => 207,  353 => 96,  346 => 33,  338 => 130,  333 => 93,  327 => 126,  311 => 87,  297 => 84,  289 => 82,  256 => 74,  248 => 100,  239 => 97,  234 => 64,  225 => 87,  192 => 85,  175 => 77,  20 => 11,  648 => 236,  637 => 214,  633 => 144,  625 => 361,  620 => 213,  614 => 133,  612 => 225,  607 => 349,  597 => 342,  590 => 338,  586 => 212,  583 => 334,  581 => 198,  575 => 328,  572 => 208,  568 => 207,  564 => 206,  560 => 187,  554 => 103,  545 => 200,  541 => 97,  538 => 197,  535 => 196,  532 => 174,  527 => 186,  523 => 171,  520 => 180,  516 => 294,  513 => 142,  510 => 293,  506 => 161,  499 => 159,  494 => 175,  483 => 127,  479 => 126,  472 => 79,  468 => 121,  464 => 275,  459 => 273,  456 => 118,  424 => 170,  421 => 244,  419 => 118,  415 => 121,  410 => 59,  401 => 137,  399 => 56,  367 => 102,  359 => 120,  348 => 118,  343 => 132,  334 => 26,  331 => 96,  328 => 111,  317 => 91,  291 => 80,  265 => 106,  253 => 85,  250 => 274,  237 => 262,  231 => 133,  205 => 90,  202 => 77,  185 => 66,  180 => 66,  127 => 76,  118 => 43,  392 => 107,  383 => 49,  377 => 47,  354 => 101,  352 => 94,  349 => 34,  342 => 116,  335 => 100,  332 => 88,  324 => 179,  315 => 173,  302 => 168,  299 => 116,  293 => 113,  287 => 5,  284 => 70,  282 => 161,  279 => 77,  276 => 67,  271 => 108,  263 => 89,  257 => 103,  233 => 71,  222 => 238,  211 => 81,  194 => 197,  146 => 49,  76 => 27,  12 => 36,  150 => 65,  195 => 51,  184 => 68,  139 => 60,  181 => 61,  178 => 184,  170 => 74,  167 => 57,  165 => 72,  148 => 64,  137 => 46,  104 => 67,  96 => 36,  90 => 27,  100 => 42,  188 => 83,  155 => 52,  129 => 57,  114 => 71,  83 => 37,  65 => 30,  318 => 83,  304 => 85,  300 => 13,  281 => 110,  277 => 109,  274 => 125,  270 => 157,  266 => 90,  262 => 105,  259 => 149,  242 => 269,  161 => 54,  157 => 57,  153 => 55,  120 => 45,  84 => 39,  37 => 16,  97 => 63,  81 => 30,  70 => 24,  522 => 181,  519 => 91,  515 => 238,  512 => 237,  505 => 88,  502 => 87,  449 => 138,  445 => 286,  441 => 153,  433 => 130,  391 => 109,  389 => 133,  386 => 239,  330 => 23,  326 => 21,  321 => 109,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 196,  160 => 70,  124 => 41,  113 => 44,  110 => 48,  34 => 16,  190 => 69,  152 => 51,  145 => 54,  134 => 59,  126 => 42,  77 => 27,  74 => 34,  58 => 19,  52 => 21,  53 => 10,  23 => 18,  480 => 166,  474 => 150,  469 => 160,  461 => 290,  457 => 289,  453 => 288,  444 => 263,  440 => 148,  437 => 70,  435 => 151,  430 => 255,  427 => 65,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 48,  379 => 130,  374 => 217,  368 => 99,  365 => 141,  362 => 39,  360 => 104,  355 => 145,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 106,  309 => 120,  305 => 119,  298 => 12,  294 => 81,  285 => 111,  283 => 95,  278 => 160,  268 => 107,  264 => 84,  258 => 86,  252 => 283,  247 => 273,  241 => 131,  229 => 105,  220 => 128,  214 => 231,  177 => 61,  169 => 74,  140 => 47,  132 => 58,  128 => 49,  111 => 41,  107 => 52,  61 => 2,  273 => 92,  269 => 6,  254 => 147,  246 => 99,  243 => 98,  240 => 72,  238 => 84,  235 => 250,  230 => 82,  227 => 81,  224 => 241,  221 => 77,  219 => 84,  217 => 75,  208 => 124,  204 => 78,  179 => 107,  159 => 70,  143 => 59,  135 => 81,  131 => 55,  119 => 95,  108 => 48,  102 => 38,  71 => 15,  67 => 27,  63 => 20,  59 => 23,  47 => 19,  94 => 35,  89 => 40,  85 => 32,  79 => 37,  75 => 27,  68 => 31,  56 => 40,  50 => 20,  201 => 213,  196 => 68,  183 => 189,  171 => 102,  166 => 100,  163 => 42,  158 => 53,  156 => 68,  151 => 56,  142 => 61,  138 => 57,  136 => 138,  123 => 54,  121 => 75,  117 => 51,  115 => 50,  105 => 47,  101 => 25,  91 => 34,  69 => 50,  62 => 29,  49 => 20,  28 => 14,  87 => 33,  72 => 33,  66 => 29,  55 => 22,  41 => 19,  31 => 22,  38 => 32,  26 => 13,  25 => 12,  24 => 13,  35 => 16,  29 => 21,  21 => 12,  19 => 11,  98 => 44,  93 => 34,  88 => 60,  78 => 36,  46 => 15,  44 => 15,  32 => 12,  27 => 13,  22 => 12,  43 => 18,  40 => 19,  209 => 223,  203 => 122,  199 => 212,  193 => 83,  189 => 65,  187 => 69,  182 => 80,  176 => 77,  173 => 177,  168 => 62,  164 => 72,  162 => 71,  154 => 67,  149 => 148,  147 => 90,  144 => 62,  141 => 143,  133 => 61,  130 => 57,  125 => 47,  122 => 25,  116 => 42,  112 => 49,  109 => 40,  106 => 86,  103 => 46,  99 => 37,  95 => 43,  92 => 61,  86 => 33,  82 => 28,  80 => 36,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 23,  51 => 38,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 11,  30 => 15,);
    }
}
