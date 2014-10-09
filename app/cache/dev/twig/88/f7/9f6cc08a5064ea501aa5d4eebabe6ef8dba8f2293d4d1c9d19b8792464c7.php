<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_88f79f6cc08a5064ea501aa5d4eebabe6ef8dba8f2293d4d1c9d19b8792464c7 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show")) > 0))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 158,  507 => 157,  504 => 156,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  480 => 128,  477 => 127,  470 => 149,  464 => 147,  462 => 146,  459 => 145,  453 => 142,  450 => 141,  448 => 140,  443 => 138,  427 => 136,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  381 => 115,  371 => 113,  358 => 106,  355 => 105,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  323 => 92,  321 => 91,  316 => 89,  308 => 88,  304 => 86,  294 => 83,  288 => 81,  283 => 79,  269 => 75,  266 => 74,  251 => 67,  247 => 66,  244 => 65,  235 => 63,  233 => 62,  225 => 58,  220 => 57,  205 => 56,  200 => 55,  194 => 53,  188 => 49,  184 => 47,  178 => 45,  173 => 42,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  121 => 29,  118 => 28,  115 => 27,  107 => 24,  79 => 14,  76 => 13,  64 => 183,  57 => 154,  49 => 111,  44 => 73,  42 => 61,  39 => 60,  37 => 53,  34 => 52,  32 => 13,  29 => 11,  312 => 143,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  280 => 131,  274 => 77,  265 => 126,  260 => 70,  256 => 121,  248 => 116,  242 => 113,  236 => 109,  230 => 61,  219 => 101,  214 => 99,  209 => 96,  197 => 54,  192 => 88,  187 => 87,  185 => 86,  182 => 85,  176 => 82,  170 => 79,  165 => 77,  160 => 76,  158 => 75,  153 => 72,  147 => 69,  144 => 33,  141 => 67,  138 => 61,  136 => 60,  132 => 59,  128 => 58,  123 => 30,  120 => 56,  110 => 25,  104 => 23,  86 => 43,  72 => 198,  54 => 153,  51 => 24,  35 => 16,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  374 => 114,  368 => 112,  365 => 95,  362 => 94,  354 => 92,  352 => 104,  349 => 90,  342 => 88,  337 => 87,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  309 => 76,  305 => 74,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  268 => 127,  263 => 125,  246 => 51,  240 => 64,  234 => 48,  231 => 47,  227 => 46,  224 => 103,  218 => 43,  216 => 100,  203 => 93,  186 => 38,  183 => 37,  180 => 36,  175 => 43,  157 => 41,  150 => 27,  143 => 26,  126 => 25,  122 => 23,  119 => 22,  112 => 26,  109 => 108,  105 => 106,  103 => 64,  95 => 20,  93 => 58,  90 => 18,  88 => 36,  85 => 35,  83 => 22,  80 => 41,  74 => 18,  71 => 17,  69 => 197,  66 => 15,  62 => 165,  55 => 12,  52 => 112,  46 => 21,  43 => 20,  41 => 6,  38 => 17,  36 => 4,  30 => 15,  24 => 13,  101 => 22,  98 => 21,  92 => 19,  87 => 17,  84 => 16,  81 => 15,  78 => 40,  75 => 39,  73 => 24,  70 => 33,  67 => 184,  59 => 164,  53 => 16,  50 => 15,  47 => 74,  12 => 34,);
    }
}
