<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_fa4ba43b93c5832e8398b3b3279fce9c00823a3857f4ed26f47ddee92122edab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : null)), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 16
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 17
            echo "              >
            ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
                // line 19
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 20
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                </div>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

            ";
            // line 67
            $this->displayBlock('formactions', $context, $blocks);
            // line 109
            echo "        </form>
    ";
        }
        // line 111
        echo "
    ";
        // line 112
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 25
        echo "                <div class=\"row\">
            ";
    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs")) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs")), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs")) > 1));
        // line 30
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 32
        if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
            // line 33
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs"));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 36
                echo "                                    <li";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => array(), 2 => $this->getAttribute((isset($context["form_tab"]) ? $context["form_tab"] : null), "translation_domain")), "method"), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs"));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 41
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                        <div class=\"box-body\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 44
                if (($this->getAttribute((isset($context["form_tab"]) ? $context["form_tab"] : null), "description") != false)) {
                    // line 45
                    echo "                                                    <p>";
                    echo $this->getAttribute((isset($context["form_tab"]) ? $context["form_tab"] : null), "description");
                    echo "</p>
                                                ";
                }
                // line 47
                echo "
                                                ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : null), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["form"]) ? $context["form"] : null), 2 => $this->getAttribute((isset($context["form_tab"]) ? $context["form_tab"] : null), "groups", array(), "array"), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : null)), "method"), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 56
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : null), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["form"]) ? $context["form"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs"), "default", array(), "array"), "groups"), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : null)), "method"), "html", null, true);
            echo "
                    ";
        }
        // line 58
        echo "                </div>
            ";
    }

    // line 61
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 62
        echo "                </div>
            ";
    }

    // line 67
    public function block_formactions($context, array $blocks = array())
    {
        // line 68
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 69
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isxmlhttprequest")) {
            // line 70
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 71
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 75
            echo "                    ";
        } else {
            // line 76
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode")) {
                // line 77
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 82
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 85
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 86
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 88
                echo "
                            ";
                // line 89
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 90
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 95
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 97
                echo "                        ";
            } else {
                // line 98
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 99
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 101
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 102
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 104
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 106
            echo "                    ";
        }
        // line 107
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  392 => 107,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 41,  194 => 40,  146 => 33,  76 => 18,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 52,  181 => 44,  178 => 80,  170 => 77,  167 => 36,  165 => 75,  148 => 69,  137 => 29,  104 => 40,  96 => 30,  90 => 24,  100 => 61,  188 => 88,  155 => 55,  129 => 25,  114 => 39,  83 => 27,  65 => 26,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 48,  37 => 5,  97 => 60,  81 => 20,  70 => 22,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 106,  386 => 239,  330 => 194,  326 => 86,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 47,  113 => 44,  110 => 67,  34 => 16,  190 => 38,  152 => 61,  145 => 54,  134 => 28,  126 => 24,  77 => 33,  74 => 39,  58 => 23,  52 => 11,  53 => 15,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  360 => 109,  355 => 106,  341 => 196,  337 => 90,  322 => 101,  314 => 99,  312 => 98,  309 => 79,  305 => 77,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 61,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 33,  140 => 30,  132 => 65,  128 => 42,  111 => 25,  107 => 52,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  131 => 61,  119 => 112,  108 => 36,  102 => 64,  71 => 30,  67 => 26,  63 => 25,  59 => 13,  47 => 23,  94 => 30,  89 => 28,  85 => 38,  79 => 25,  75 => 29,  68 => 36,  56 => 16,  50 => 14,  201 => 92,  196 => 90,  183 => 62,  171 => 81,  166 => 32,  163 => 58,  158 => 56,  156 => 41,  151 => 70,  142 => 59,  138 => 69,  136 => 39,  123 => 58,  121 => 61,  117 => 48,  115 => 40,  105 => 65,  101 => 41,  91 => 37,  69 => 16,  62 => 14,  49 => 21,  28 => 14,  87 => 23,  72 => 28,  66 => 39,  55 => 12,  41 => 6,  31 => 15,  38 => 5,  26 => 14,  25 => 12,  24 => 1,  35 => 16,  29 => 14,  21 => 2,  19 => 11,  98 => 22,  93 => 47,  88 => 28,  78 => 19,  46 => 8,  44 => 18,  32 => 15,  27 => 14,  22 => 12,  43 => 7,  40 => 17,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 47,  187 => 46,  182 => 85,  176 => 64,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 70,  133 => 49,  130 => 43,  125 => 51,  122 => 44,  116 => 111,  112 => 109,  109 => 43,  106 => 34,  103 => 34,  99 => 36,  95 => 28,  92 => 27,  86 => 45,  82 => 35,  80 => 26,  73 => 17,  64 => 17,  60 => 22,  57 => 11,  54 => 34,  51 => 33,  48 => 13,  45 => 37,  42 => 17,  39 => 17,  36 => 4,  33 => 15,  30 => 2,);
    }
}
