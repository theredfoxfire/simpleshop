<?php

/* SsSsBundle:Pesanan:check.html.twig */
class __TwigTemplate_0d5c7aa13378ad963091a6d82e982f65b399e4d469454b56f2f8381ca904abda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SsSsBundle::layoutmember.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SsSsBundle::layoutmember.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Member Area</h1>
\t<p>Selamat datang ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "disname"), "html", null, true);
        echo ", berikut ini adalah daftar pesanan Anda:</p>
<section id=\"cart\">
\t<form>
\t<div class=\"twelve columns alpha omega\">
\t\t\t<!-- START HEADERS-->
\t\t\t<div class=\"headers clearfix\">
\t\t\t\t<div class=\"one columns quantity tr\">
\t\t\t\t\tNo
\t\t\t\t\t<p class=\"mobile\">No</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns quantity tr\">
\t\t\t\t\tTanggal
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns quantity tr\">
\t\t\t\t\tStatus Bayar
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns quantity tr\">
\t\t\t\t\tStatus Konfirmasi
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\t<span>Aksi</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "pesanans"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "   
\t\t\t<!-- START ROW-->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"one columns total desktop\">
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "
\t\t\t\t\t<p class=\"mobile\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d-m-Y"), "html", null, true);
            echo "
\t\t\t\t\t<p class=\"mobile\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\tBELUM
\t\t\t\t\t<p class=\"mobile\">BELUM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\tBELUM
\t\t\t\t\t<p class=\"mobile\">BELUM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"two columns total desktop\">
\t\t\t\t\t<span>Tampilkan Detail</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- END ROW-->
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</div>
\t</form>
</section>
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Pesanan:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  96 => 37,  92 => 36,  86 => 33,  82 => 32,  60 => 28,  34 => 5,  31 => 4,  28 => 3,);
    }
}
