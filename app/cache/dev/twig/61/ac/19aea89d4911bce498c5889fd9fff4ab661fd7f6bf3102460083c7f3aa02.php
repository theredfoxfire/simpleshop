<?php

/* SsSsBundle:Orderer:pesananfirst.html.twig */
class __TwigTemplate_61ac19aea89d4911bce498c5889fd9fff4ab661fd7f6bf3102460083c7f3aa02 extends Twig_Template
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
        echo "Terima kasih, telah berbelanja di SimpleShop.com, berikut adalah daftar pesanan Anda:<br/><br/>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) ? $context["carts"] : $this->getContext($context, "carts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "products"), "nama"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "qty"), "html", null, true);
            echo " x Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "products"), "cost"), "html", null, true);
            echo " = Rp ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalcost"), "html", null, true);
            echo "<br>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<br/>
Ongkos kirim: Rp ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ongkir"]) ? $context["ongkir"] : $this->getContext($context, "ongkir")), "html", null, true);
        echo "<br>
Total tagihan: Rp ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["bill"]) ? $context["bill"] : $this->getContext($context, "bill")), "html", null, true);
        echo "<br><br/><br/>
Silahkan klik url ini untuk melakukan konfirmasi atas pesanan Anda. http://localhost/simpleshop/web/app_dev.php/ss_orderer/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["pesanan"]) ? $context["pesanan"] : $this->getContext($context, "pesanan")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["orderer"]) ? $context["orderer"] : $this->getContext($context, "orderer")), "html", null, true);
        echo "/confirm
";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Orderer:pesananfirst.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  70 => 6,  66 => 5,  63 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
