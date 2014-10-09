<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_a98ee73ba6e84d08d06dac3a93dcd9b972b9fd0d6c514298f24960d64ee6dd6e extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn delete_link btn-small\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-remove\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  77 => 33,  65 => 29,  62 => 28,  37 => 19,  28 => 17,  49 => 17,  43 => 19,  89 => 24,  84 => 39,  81 => 38,  75 => 36,  59 => 27,  56 => 26,  53 => 18,  50 => 27,  46 => 25,  44 => 24,  40 => 20,  38 => 16,  35 => 17,  32 => 15,  30 => 13,  24 => 13,  21 => 11,  34 => 18,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  427 => 89,  424 => 88,  418 => 113,  415 => 112,  413 => 100,  409 => 98,  407 => 88,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  384 => 130,  382 => 127,  379 => 126,  374 => 123,  360 => 122,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  314 => 85,  312 => 84,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  278 => 74,  275 => 73,  258 => 72,  255 => 71,  252 => 70,  246 => 66,  240 => 65,  237 => 64,  233 => 62,  229 => 61,  224 => 60,  218 => 59,  206 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  177 => 48,  174 => 47,  172 => 46,  168 => 44,  162 => 40,  159 => 39,  155 => 38,  151 => 36,  148 => 35,  143 => 26,  136 => 155,  133 => 154,  131 => 153,  128 => 152,  122 => 149,  119 => 148,  116 => 147,  112 => 145,  110 => 144,  107 => 143,  105 => 80,  102 => 79,  100 => 70,  97 => 69,  95 => 32,  92 => 34,  87 => 32,  82 => 31,  79 => 30,  76 => 29,  74 => 28,  71 => 31,  69 => 33,  64 => 32,  61 => 31,  58 => 22,  52 => 23,  47 => 17,  45 => 21,  42 => 15,  39 => 14,);
    }
}
