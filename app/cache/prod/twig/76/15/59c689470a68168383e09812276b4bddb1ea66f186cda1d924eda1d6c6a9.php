<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_761559c689470a68168383e09812276b4bddb1ea66f186cda1d924eda1d6c6a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_widget($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : null))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : null);
            echo "</span>
    ";
        }
    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 32
    public function block_form_label($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "
    ";
        // line 35
        $context["label_class"] = "";
        // line 36
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 37
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["label_class"] = " control-label";
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 44
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : null))));
            // line 45
            echo "
        ";
            // line 46
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 47
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 48
                echo "        ";
            }
            // line 49
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 50
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 51
                echo "        ";
            }
            // line 52
            echo "
        ";
            // line 53
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 54
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : null)) && array_key_exists("widget", $context))) {
                // line 58
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 59
                echo (isset($context["widget"]) ? $context["widget"] : null);
                echo "
                <span>
                    ";
                // line 61
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 66
                echo "                </span>
            </label>
        ";
            } else {
                // line 69
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 70
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 73
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 75
                echo "            </label>
        ";
            }
            // line 77
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"
        ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            if (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : null))) {
            echo "class=\"list-unstyled\"";
        }
        // line 86
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 93
            echo "            <li>
                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 95
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 102
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 103
        ob_start();
        // line 104
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 105
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo "            <li>
                ";
                // line 108
                ob_start();
                // line 109
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 110
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 111
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : null)) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        </ul>
    ";
        } else {
            // line 116
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method")))) {
                // line 117
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 120
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 121
                echo "            <option value=\"\">
                ";
                // line 122
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 127
                echo "            </option>
        ";
            }
            // line 129
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 130
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 131
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 132
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0)) {
                    // line 133
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
            ";
                }
                // line 135
                echo "        ";
            }
            // line 136
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 137
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_form_row($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["label_class"] = "";
        // line 145
        echo "    ";
        $context["div_class"] = "";
        // line 146
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 147
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 148
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        ";
            $context["label_class"] = "control-label";
            // line 151
            echo "    ";
        }
        // line 152
        echo "
    ";
        // line 153
        if ((((!array_key_exists("sonata_admin", $context)) || (!(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null))) || (!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")))) {
            // line 154
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 156
            if (((isset($context["label"]) ? $context["label"] : null) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 158
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 159
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 163
            echo "            </div>
        </div>
    ";
        } else {
            // line 166
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 167
            $this->displayBlock('label', $context, $blocks);
            // line 174
            echo "
            ";
            // line 175
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!((isset($context["label"]) ? $context["label"] : null) === false)));
            // line 176
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!(isset($context["has_label"]) ? $context["has_label"] : null))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 179
            echo "
                ";
            // line 180
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 181
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 182
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 185
            echo "
                ";
            // line 186
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help")) {
                // line 187
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 189
            echo "            </div>
        </div>
    ";
        }
    }

    // line 167
    public function block_label($context, array $blocks = array())
    {
        // line 168
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : null))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 171
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : null))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 173
        echo "            ";
    }

    // line 194
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 197
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 198
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 200
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 208
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : null);
            // line 209
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars"), "name"), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 213
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 217
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 218
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 220
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 224
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 225
        echo "    ";
        ob_start();
        // line 226
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 230
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 238
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

            ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
        echo "

            ";
        // line 244
        $context["div_class"] = "";
        // line 245
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 246
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 247
            echo "            ";
        }
        // line 248
        echo "
            <div class=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 251
        echo "            </div>

            ";
        // line 253
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 254
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 255
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 258
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 262
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 263
        ob_start();
        // line 264
        echo "
    ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'widget');
        echo "

    ";
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 268
            echo "        ";
            if ((!$this->getAttribute((isset($context["child"]) ? $context["child"] : null), "rendered"))) {
                // line 269
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
                echo "
        ";
            }
            // line 271
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), "vars"), "id"), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
        echo "\",
                allowClear: ";
        // line 278
        echo (((isset($context["required"]) ? $context["required"] : null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 279
        echo (((isset($context["disabled"]) ? $context["disabled"] : null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 280
        echo (((isset($context["read_only"]) ? $context["read_only"] : null)) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : null), "html", null, true);
        echo ",
                multiple: ";
        // line 282
        echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 284
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : null)) ? ((isset($context["url"]) ? $context["url"] : null)) : ($this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "name"), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters"), array())) : (array()))))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : null), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : null), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : null), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : null), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "uniqid"), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "code"), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 304
        if ((!twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : null)))) {
            echo ",";
            // line 305
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 306
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "js"), "html", null, true);
                echo "\"";
                // line 307
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 310
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 318
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 321
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : null), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "id"), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "full_name"), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "id"), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 366
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 367
            echo "data = [";
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels"));
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
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 369
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "identifiers"), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["label_text"]) ? $context["label_text"] : null), "js"), "html", null, true);
                echo "'}";
                // line 370
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 374
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "identifiers"), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels"), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 376
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<div class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</div>'";
    }

    // line 321
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1102 => 321,  1096 => 318,  1086 => 376,  1079 => 374,  1076 => 372,  1054 => 369,  1037 => 368,  1035 => 367,  1033 => 366,  1023 => 359,  1003 => 344,  974 => 321,  968 => 318,  958 => 310,  941 => 307,  918 => 305,  915 => 304,  905 => 300,  901 => 299,  895 => 296,  872 => 284,  863 => 281,  859 => 280,  855 => 279,  851 => 278,  831 => 271,  825 => 269,  818 => 267,  813 => 265,  810 => 264,  799 => 258,  790 => 254,  788 => 253,  784 => 251,  781 => 250,  766 => 248,  763 => 247,  760 => 246,  757 => 245,  755 => 244,  724 => 233,  721 => 232,  682 => 227,  677 => 226,  674 => 225,  611 => 211,  585 => 200,  561 => 171,  549 => 167,  542 => 189,  534 => 186,  531 => 185,  525 => 182,  517 => 179,  514 => 178,  491 => 174,  489 => 167,  475 => 163,  466 => 159,  460 => 157,  454 => 156,  450 => 155,  426 => 148,  420 => 146,  417 => 145,  414 => 144,  411 => 143,  376 => 129,  369 => 125,  366 => 123,  351 => 119,  345 => 117,  325 => 110,  319 => 108,  316 => 107,  307 => 105,  280 => 94,  172 => 59,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 370,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  983 => 308,  981 => 307,  979 => 323,  975 => 305,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  888 => 270,  884 => 267,  879 => 264,  876 => 263,  843 => 257,  837 => 272,  826 => 247,  824 => 246,  812 => 238,  808 => 263,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 255,  791 => 226,  789 => 225,  786 => 224,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  732 => 238,  728 => 192,  726 => 191,  723 => 190,  717 => 186,  714 => 185,  704 => 230,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 229,  683 => 170,  673 => 165,  671 => 224,  668 => 163,  663 => 160,  661 => 218,  658 => 158,  654 => 216,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  629 => 141,  627 => 140,  624 => 139,  617 => 135,  609 => 129,  594 => 205,  592 => 126,  589 => 124,  579 => 197,  576 => 196,  574 => 195,  570 => 112,  567 => 173,  565 => 109,  562 => 108,  556 => 104,  550 => 101,  548 => 100,  539 => 96,  536 => 187,  477 => 82,  465 => 77,  463 => 158,  439 => 71,  429 => 149,  425 => 64,  412 => 60,  397 => 55,  394 => 54,  373 => 46,  370 => 45,  357 => 37,  339 => 28,  323 => 19,  295 => 11,  290 => 7,  275 => 330,  260 => 293,  255 => 284,  245 => 270,  232 => 249,  197 => 72,  212 => 224,  206 => 70,  267 => 5,  207 => 216,  244 => 111,  216 => 60,  210 => 97,  200 => 73,  186 => 190,  174 => 64,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 310,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 303,  965 => 305,  962 => 304,  956 => 302,  954 => 300,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 306,  932 => 291,  928 => 286,  922 => 261,  919 => 260,  916 => 280,  913 => 258,  909 => 301,  904 => 277,  896 => 277,  891 => 271,  887 => 293,  885 => 272,  881 => 290,  875 => 268,  873 => 267,  869 => 259,  867 => 282,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 277,  842 => 275,  840 => 255,  835 => 252,  833 => 251,  830 => 250,  827 => 252,  822 => 268,  819 => 244,  815 => 239,  811 => 240,  805 => 262,  800 => 236,  794 => 235,  782 => 221,  779 => 216,  775 => 231,  769 => 249,  762 => 227,  758 => 226,  750 => 242,  744 => 223,  741 => 222,  738 => 240,  735 => 239,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 187,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 169,  678 => 168,  672 => 203,  669 => 202,  665 => 220,  662 => 200,  659 => 217,  656 => 198,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 212,  613 => 243,  610 => 198,  608 => 210,  605 => 209,  602 => 208,  599 => 207,  593 => 247,  591 => 181,  587 => 123,  584 => 122,  577 => 116,  571 => 194,  569 => 178,  566 => 177,  563 => 176,  555 => 169,  552 => 168,  544 => 99,  533 => 151,  530 => 150,  526 => 147,  496 => 176,  490 => 138,  486 => 136,  470 => 78,  467 => 130,  446 => 75,  443 => 154,  438 => 152,  432 => 150,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 135,  385 => 107,  382 => 131,  372 => 127,  364 => 122,  361 => 121,  353 => 96,  346 => 33,  338 => 114,  333 => 93,  327 => 91,  311 => 85,  297 => 84,  289 => 81,  256 => 74,  248 => 71,  239 => 68,  234 => 64,  225 => 61,  192 => 90,  175 => 74,  20 => 1,  648 => 236,  637 => 214,  633 => 144,  625 => 230,  620 => 213,  614 => 133,  612 => 225,  607 => 222,  597 => 206,  590 => 214,  586 => 212,  583 => 211,  581 => 198,  575 => 114,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 103,  545 => 200,  541 => 97,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 180,  516 => 143,  513 => 142,  510 => 141,  506 => 161,  499 => 159,  494 => 175,  483 => 127,  479 => 126,  472 => 79,  468 => 121,  464 => 129,  459 => 119,  456 => 118,  424 => 170,  421 => 62,  419 => 118,  415 => 116,  410 => 59,  401 => 137,  399 => 56,  367 => 102,  359 => 120,  348 => 118,  343 => 138,  334 => 26,  331 => 93,  328 => 111,  317 => 17,  291 => 80,  265 => 299,  253 => 85,  250 => 274,  237 => 262,  231 => 99,  205 => 90,  202 => 58,  185 => 66,  180 => 66,  127 => 59,  118 => 46,  392 => 107,  383 => 49,  377 => 47,  354 => 95,  352 => 94,  349 => 34,  342 => 116,  335 => 100,  332 => 88,  324 => 85,  315 => 82,  302 => 103,  299 => 102,  293 => 98,  287 => 5,  284 => 70,  282 => 3,  279 => 77,  276 => 67,  271 => 78,  263 => 89,  257 => 291,  233 => 83,  222 => 238,  211 => 73,  194 => 197,  146 => 147,  76 => 27,  12 => 36,  150 => 71,  195 => 51,  184 => 68,  139 => 139,  181 => 185,  178 => 184,  170 => 71,  167 => 41,  165 => 61,  148 => 55,  137 => 51,  104 => 74,  96 => 36,  90 => 27,  100 => 42,  188 => 194,  155 => 39,  129 => 122,  114 => 43,  83 => 37,  65 => 27,  318 => 83,  304 => 104,  300 => 13,  281 => 127,  277 => 93,  274 => 125,  270 => 316,  266 => 90,  262 => 76,  259 => 118,  242 => 269,  161 => 162,  157 => 57,  153 => 55,  120 => 45,  84 => 33,  37 => 17,  97 => 41,  81 => 32,  70 => 29,  522 => 181,  519 => 91,  515 => 238,  512 => 237,  505 => 88,  502 => 87,  449 => 287,  445 => 286,  441 => 153,  433 => 96,  391 => 109,  389 => 133,  386 => 239,  330 => 23,  326 => 21,  321 => 109,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 196,  160 => 57,  124 => 108,  113 => 23,  110 => 22,  34 => 15,  190 => 69,  152 => 72,  145 => 54,  134 => 50,  126 => 121,  77 => 35,  74 => 16,  58 => 28,  52 => 17,  53 => 10,  23 => 13,  480 => 166,  474 => 80,  469 => 160,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 70,  435 => 151,  430 => 95,  427 => 65,  423 => 147,  413 => 95,  409 => 132,  407 => 93,  402 => 58,  398 => 136,  393 => 164,  387 => 132,  384 => 158,  381 => 48,  379 => 130,  374 => 104,  368 => 99,  365 => 41,  362 => 39,  360 => 38,  355 => 145,  341 => 173,  337 => 27,  322 => 101,  314 => 16,  312 => 106,  309 => 83,  305 => 77,  298 => 12,  294 => 81,  285 => 4,  283 => 95,  278 => 331,  268 => 91,  264 => 84,  258 => 86,  252 => 283,  247 => 273,  241 => 131,  229 => 105,  220 => 70,  214 => 231,  177 => 61,  169 => 168,  140 => 52,  132 => 27,  128 => 48,  111 => 41,  107 => 47,  61 => 2,  273 => 92,  269 => 6,  254 => 92,  246 => 68,  243 => 88,  240 => 263,  238 => 84,  235 => 250,  230 => 82,  227 => 81,  224 => 241,  221 => 77,  219 => 237,  217 => 75,  208 => 71,  204 => 215,  179 => 62,  159 => 158,  143 => 53,  135 => 53,  131 => 49,  119 => 95,  108 => 40,  102 => 38,  71 => 15,  67 => 22,  63 => 22,  59 => 12,  47 => 17,  94 => 35,  89 => 33,  85 => 32,  79 => 28,  75 => 15,  68 => 31,  56 => 11,  50 => 16,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 42,  158 => 56,  156 => 58,  151 => 56,  142 => 31,  138 => 57,  136 => 138,  123 => 46,  121 => 107,  117 => 44,  115 => 45,  105 => 39,  101 => 73,  91 => 34,  69 => 11,  62 => 13,  49 => 17,  28 => 14,  87 => 35,  72 => 25,  66 => 23,  55 => 18,  41 => 19,  31 => 17,  38 => 20,  26 => 2,  25 => 12,  24 => 13,  35 => 19,  29 => 16,  21 => 11,  19 => 2,  98 => 36,  93 => 21,  88 => 33,  78 => 16,  46 => 15,  44 => 21,  32 => 18,  27 => 16,  22 => 7,  43 => 14,  40 => 13,  209 => 223,  203 => 89,  199 => 212,  193 => 83,  189 => 70,  187 => 69,  182 => 64,  176 => 178,  173 => 177,  168 => 62,  164 => 163,  162 => 60,  154 => 57,  149 => 148,  147 => 34,  144 => 144,  141 => 143,  133 => 61,  130 => 57,  125 => 47,  122 => 25,  116 => 94,  112 => 176,  109 => 87,  106 => 86,  103 => 43,  99 => 37,  95 => 41,  92 => 38,  86 => 32,  82 => 36,  80 => 36,  73 => 26,  64 => 3,  60 => 21,  57 => 20,  54 => 23,  51 => 25,  48 => 24,  45 => 23,  42 => 13,  39 => 12,  36 => 4,  33 => 3,  30 => 17,);
    }
}
