<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_801f2f0e8f72397d76d20359c74f854daa478f639c36a7290a134e329e9e068f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "        <li>";
            $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
            echo "</li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 25
    public function block_list_table($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

            ";
        // line 30
        $this->displayBlock('list_header', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 33
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 34
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 35
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\">
                ";
            }
            // line 38
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 39
            $this->displayBlock('table_header', $context, $blocks);
            // line 75
            echo "
                        ";
            // line 76
            $this->displayBlock('table_body', $context, $blocks);
            // line 85
            echo "
                        ";
            // line 86
            $this->displayBlock('table_footer', $context, $blocks);
            // line 176
            echo "                    </table>
                ";
            // line 177
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 178
                echo "                </form>
                ";
            }
            // line 180
            echo "            ";
        } else {
            // line 181
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 185
        echo "
            ";
        // line 186
        $this->displayBlock('list_footer', $context, $blocks);
        // line 187
        echo "
            ";
        // line 188
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "


        </div>
    </div>
";
    }

    // line 30
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 39
    public function block_table_header($context, array $blocks = array())
    {
        // line 40
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 44
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 48
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 52
                echo "                                            ";
                // line 53
                echo "                                        ";
            } else {
                // line 54
                echo "                                            ";
                $context["sortable"] = false;
                // line 55
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 56
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 57
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method");
                    // line 58
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter"), "_sort_by")));
                    // line 59
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 60
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 61
                    echo "                                            ";
                }
                // line 62
                echo "
                                            ";
                // line 63
                ob_start();
                // line 64
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 66
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain")), "method"), "html", null, true);
                echo "
                                                    ";
                // line 67
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 68
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 70
                echo "                                        ";
            }
            // line 71
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 76
    public function block_table_body($context, array $blocks = array())
    {
        // line 77
        echo "                            <tbody>
                                ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 79
            echo "                                    <tr>
                                        ";
            // line 80
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 81
            echo "                                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        ";
    }

    // line 86
    public function block_table_footer($context, array $blocks = array())
    {
        // line 87
        echo "                            <tfoot>
                                <tr>
                                    <th colspan=\"";
        // line 89
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                        <div class=\"form-inline\">
                                            ";
        // line 91
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
            // line 92
            echo "                                                ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 93
                echo "                                                    ";
                $this->displayBlock('batch', $context, $blocks);
                // line 134
                echo "                                                ";
            }
            // line 135
            echo "
                                                <div class=\"pull-right\">
                                                    ";
            // line 137
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 138
                echo "                                                        <div class=\"btn-group\">
                                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                                <i class=\"glyphicon glyphicon-export\"></i>
                                                                ";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                                <span class=\"caret\"></span>
                                                            </button>
                                                            <ul class=\"dropdown-menu\">
                                                                ";
                // line 145
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 146
                    echo "                                                                    <li>
                                                                        <a href=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : null)))), "method"), "html", null, true);
                    echo "\">
                                                                            <i class=\"glyphicon glyphicon-download\"></i>
                                                                            ";
                    // line 149
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
                    echo "
                                                                        </a>
                                                                    <li>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                                            </ul>
                                                        </div>

                                                        &nbsp;-&nbsp;
                                                    ";
            }
            // line 158
            echo "
                                                    ";
            // line 159
            $this->displayBlock('pager_results', $context, $blocks);
            // line 162
            echo "                                                </div>
                                            ";
        }
        // line 164
        echo "                                        </div>
                                    </th>
                                </tr>

                                ";
        // line 168
        $this->displayBlock('pager_links', $context, $blocks);
        // line 173
        echo "
                            </tfoot>
                        ";
    }

    // line 93
    public function block_batch($context, array $blocks = array())
    {
        // line 94
        echo "                                                        <script>
                                                            ";
        // line 95
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 116
        echo "                                                        </script>

                                                        ";
        // line 118
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 131
        echo "
                                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                    ";
    }

    // line 95
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 96
        echo "                                                                jQuery(document).ready(function (\$) {
                                                                    \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                        \$(this)
                                                                            .closest('table')
                                                                            .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                            .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                        ;
                                                                    });

                                                                    \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                        .on('ifChanged', function () {
                                                                            \$(this)
                                                                                .closest('tr')
                                                                                .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                            ;
                                                                        })
                                                                        .trigger('ifChanged')
                                                                    ;
                                                                });
                                                            ";
    }

    // line 118
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 119
        echo "                                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                                ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                                 (";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                            </label>

                                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                                ";
        // line 126
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 127
            echo "                                                                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label"), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                                            </select>
                                                        ";
    }

    // line 159
    public function block_pager_results($context, array $blocks = array())
    {
        // line 160
        echo "                                                        ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 161
        echo "                                                    ";
    }

    // line 168
    public function block_pager_links($context, array $blocks = array())
    {
        // line 169
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 170
            echo "                                        ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 171
            echo "                                    ";
        }
        // line 172
        echo "                                ";
    }

    // line 186
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 195
    public function block_list_filters($context, array $blocks = array())
    {
        // line 196
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 197
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "filter"), "method")));
            // line 198
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 200
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 204
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 205
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 206
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 207
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 208
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 210
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array()));
                // line 211
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " sonata-filter-option"))));
                // line 212
                echo "
                                    <div>
                                        ";
                // line 214
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "
                                    </div>

                                    <div>
                                        ";
                // line 218
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 225
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 226
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 233
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 234
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : null), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                </form>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 228,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 209,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 198,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 170,  513 => 169,  510 => 168,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 122,  468 => 121,  464 => 120,  459 => 119,  456 => 118,  424 => 132,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 168,  367 => 149,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 70,  237 => 66,  231 => 65,  205 => 59,  202 => 58,  185 => 52,  180 => 50,  127 => 182,  118 => 32,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 78,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 61,  194 => 40,  146 => 33,  76 => 31,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 51,  181 => 44,  178 => 80,  170 => 44,  167 => 43,  165 => 75,  148 => 69,  137 => 29,  104 => 40,  96 => 37,  90 => 36,  100 => 39,  188 => 88,  155 => 55,  129 => 49,  114 => 44,  83 => 32,  65 => 26,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 72,  242 => 67,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 34,  37 => 18,  97 => 38,  81 => 33,  70 => 22,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 285,  433 => 96,  391 => 243,  389 => 162,  386 => 239,  330 => 194,  326 => 91,  321 => 89,  303 => 175,  292 => 129,  288 => 79,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 181,  113 => 42,  110 => 86,  34 => 18,  190 => 54,  152 => 61,  145 => 53,  134 => 28,  126 => 48,  77 => 30,  74 => 30,  58 => 25,  52 => 23,  53 => 15,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 130,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 137,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 89,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 62,  177 => 65,  169 => 33,  140 => 30,  132 => 65,  128 => 47,  111 => 43,  107 => 85,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 64,  217 => 63,  208 => 60,  204 => 72,  179 => 84,  159 => 40,  143 => 56,  135 => 53,  131 => 48,  119 => 44,  108 => 42,  102 => 75,  71 => 28,  67 => 15,  63 => 25,  59 => 13,  47 => 17,  94 => 40,  89 => 34,  85 => 38,  79 => 32,  75 => 31,  68 => 27,  56 => 22,  50 => 21,  201 => 92,  196 => 56,  183 => 62,  171 => 81,  166 => 32,  163 => 42,  158 => 56,  156 => 39,  151 => 30,  142 => 59,  138 => 187,  136 => 186,  123 => 47,  121 => 180,  117 => 178,  115 => 177,  105 => 76,  101 => 37,  91 => 39,  69 => 28,  62 => 25,  49 => 23,  28 => 13,  87 => 35,  72 => 30,  66 => 26,  55 => 24,  41 => 20,  31 => 16,  38 => 18,  26 => 14,  25 => 12,  24 => 13,  35 => 2,  29 => 15,  21 => 1,  19 => 11,  98 => 36,  93 => 47,  88 => 38,  78 => 32,  46 => 22,  44 => 16,  32 => 15,  27 => 14,  22 => 12,  43 => 21,  40 => 19,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 47,  187 => 53,  182 => 51,  176 => 48,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 188,  133 => 185,  130 => 43,  125 => 46,  122 => 45,  116 => 43,  112 => 176,  109 => 43,  106 => 26,  103 => 38,  99 => 38,  95 => 28,  92 => 36,  86 => 33,  82 => 35,  80 => 31,  73 => 17,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 24,  48 => 22,  45 => 21,  42 => 15,  39 => 14,  36 => 16,  33 => 15,  30 => 2,);
    }
}
