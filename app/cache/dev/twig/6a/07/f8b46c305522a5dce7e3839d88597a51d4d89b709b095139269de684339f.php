<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_6a07f8b46c305522a5dce7e3839d88597a51d4d89b709b095139269de684339f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>
";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "method"), "html", null, true);
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  24 => 12,  21 => 11,  127 => 54,  124 => 53,  116 => 50,  109 => 48,  103 => 46,  101 => 45,  98 => 44,  94 => 43,  90 => 41,  82 => 36,  77 => 33,  75 => 32,  72 => 31,  68 => 30,  63 => 28,  59 => 26,  56 => 25,  50 => 23,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  34 => 12,  31 => 15,  28 => 13,);
    }
}
