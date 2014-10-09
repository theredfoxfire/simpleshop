<?php

/* SsSsBundle:Cart:index.html.twig */
class __TwigTemplate_d4cbc3a8990be32d4d37b3ff78477e8350a6eece57acb667645be1bce351fc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Cart list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Session_id</th>
                <th>Qty</th>
                <th>Token</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sessionid"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "qty"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "token"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ss_cart_edit", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "token"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ss_cart_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "SsSsBundle:Cart:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  318 => 136,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 49,  153 => 48,  120 => 34,  84 => 19,  37 => 5,  97 => 24,  81 => 18,  70 => 15,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 240,  386 => 239,  330 => 194,  326 => 193,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 74,  124 => 51,  113 => 44,  110 => 26,  34 => 8,  190 => 51,  152 => 40,  145 => 65,  134 => 35,  126 => 31,  77 => 19,  74 => 16,  58 => 19,  52 => 20,  53 => 18,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 196,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 55,  128 => 35,  111 => 25,  107 => 25,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 28,  108 => 36,  102 => 32,  71 => 30,  67 => 14,  63 => 12,  59 => 10,  47 => 10,  94 => 33,  89 => 18,  85 => 18,  79 => 26,  75 => 16,  68 => 14,  56 => 9,  50 => 10,  201 => 92,  196 => 90,  183 => 62,  171 => 57,  166 => 71,  163 => 62,  158 => 67,  156 => 41,  151 => 68,  142 => 59,  138 => 37,  136 => 39,  123 => 30,  121 => 50,  117 => 48,  115 => 43,  105 => 40,  101 => 23,  91 => 21,  69 => 24,  62 => 14,  49 => 14,  28 => 3,  87 => 33,  72 => 15,  66 => 13,  55 => 21,  41 => 15,  31 => 4,  38 => 6,  26 => 6,  25 => 5,  24 => 3,  35 => 6,  29 => 7,  21 => 2,  19 => 1,  98 => 22,  93 => 22,  88 => 30,  78 => 17,  46 => 8,  44 => 12,  32 => 5,  27 => 4,  22 => 2,  43 => 6,  40 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 71,  187 => 50,  182 => 48,  176 => 64,  173 => 65,  168 => 47,  164 => 45,  162 => 44,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 40,  133 => 55,  130 => 33,  125 => 44,  122 => 29,  116 => 27,  112 => 42,  109 => 34,  106 => 39,  103 => 32,  99 => 31,  95 => 21,  92 => 20,  86 => 28,  82 => 20,  80 => 19,  73 => 25,  64 => 10,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 14,  33 => 6,  30 => 7,);
    }
}
