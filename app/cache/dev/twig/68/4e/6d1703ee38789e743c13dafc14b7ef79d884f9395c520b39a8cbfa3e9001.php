<?php

/* SsSsBundle:Default:login.html.twig */
class __TwigTemplate_684e6d1703ee38789e743c13dafc14b7ef79d884f9395c520b39a8cbfa3e9001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SsSsBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SsSsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Member Login</h1>
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t<b>Email:</b><br>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
 
\t\t\t\t<b>Password:</b><br>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
 
\t\t\t\t<input type=\"submit\" class=\"btn\" value=\"Login\">
\t\t</form>

";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
