<?php

/* SsSsBundle:ProductAdmin:list_image.html.twig */
class __TwigTemplate_5a2984441b16409f6c3f0ec3e8b85bf1cfd43ada6c68116f11efafc283d2e7a9 extends Twig_Template
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
        // line 1
        echo "<tr>
\t<th>Foto</th>
\t<td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPathMini")), "html", null, true);
        echo "\"></td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:ProductAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
