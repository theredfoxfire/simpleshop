<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_2cb60b77906c66f9c1eca85a58ddb0dfd23f969775bf4d34b33c60c244276abb extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 14,  23 => 12,  19 => 11,  32 => 12,  27 => 13,  25 => 12,  20 => 1,  179 => 72,  173 => 71,  169 => 69,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  124 => 52,  121 => 51,  117 => 50,  110 => 46,  106 => 44,  102 => 42,  100 => 41,  94 => 39,  89 => 37,  82 => 33,  78 => 31,  75 => 30,  65 => 26,  62 => 25,  50 => 22,  38 => 19,  29 => 15,  26 => 13,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 203,  701 => 202,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 273,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 224,  608 => 223,  605 => 222,  603 => 194,  599 => 192,  596 => 189,  593 => 188,  588 => 179,  584 => 174,  575 => 170,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 160,  539 => 157,  533 => 156,  521 => 154,  518 => 153,  514 => 152,  509 => 150,  506 => 149,  504 => 148,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 143,  482 => 142,  476 => 141,  473 => 140,  470 => 139,  467 => 137,  460 => 136,  457 => 135,  451 => 134,  448 => 133,  443 => 132,  440 => 131,  437 => 130,  431 => 129,  425 => 175,  423 => 166,  419 => 164,  416 => 163,  413 => 130,  411 => 129,  407 => 127,  404 => 126,  399 => 124,  392 => 120,  386 => 119,  381 => 118,  378 => 117,  371 => 182,  367 => 180,  365 => 179,  362 => 178,  360 => 126,  357 => 125,  355 => 124,  352 => 123,  350 => 117,  343 => 115,  341 => 114,  330 => 105,  327 => 104,  317 => 101,  310 => 80,  304 => 79,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 72,  279 => 70,  274 => 68,  270 => 67,  266 => 66,  260 => 63,  256 => 61,  250 => 60,  242 => 59,  238 => 57,  235 => 56,  228 => 52,  224 => 51,  220 => 49,  205 => 38,  203 => 37,  198 => 35,  193 => 33,  189 => 32,  184 => 30,  181 => 29,  178 => 28,  172 => 22,  163 => 68,  157 => 64,  154 => 103,  143 => 98,  140 => 97,  123 => 95,  99 => 91,  96 => 90,  93 => 89,  87 => 87,  85 => 86,  80 => 84,  74 => 56,  71 => 29,  69 => 28,  60 => 24,  57 => 23,  55 => 20,  49 => 17,  47 => 21,  43 => 14,  41 => 20,  37 => 16,  170 => 55,  165 => 281,  159 => 186,  153 => 62,  150 => 101,  146 => 99,  138 => 46,  135 => 55,  131 => 43,  125 => 42,  119 => 93,  116 => 92,  112 => 47,  109 => 37,  107 => 36,  103 => 34,  97 => 33,  91 => 38,  88 => 30,  84 => 29,  76 => 82,  73 => 27,  67 => 26,  64 => 25,  61 => 24,  58 => 23,  53 => 19,  51 => 18,  45 => 15,  42 => 17,  39 => 12,  34 => 18,  28 => 14,);
    }
}
