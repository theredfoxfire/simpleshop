<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_573b0551eb9553c453e1f5a2bdf880903deb2a676a91ed199f50a170f1f497eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 228,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 209,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 198,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 170,  513 => 169,  510 => 168,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 122,  468 => 121,  464 => 120,  459 => 119,  456 => 118,  424 => 132,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 168,  367 => 149,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 70,  237 => 66,  231 => 65,  205 => 59,  202 => 58,  185 => 52,  180 => 50,  127 => 182,  118 => 32,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 78,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 61,  194 => 40,  146 => 33,  76 => 35,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 51,  181 => 44,  178 => 80,  170 => 44,  167 => 43,  165 => 75,  148 => 69,  137 => 29,  104 => 40,  96 => 44,  90 => 36,  100 => 39,  188 => 88,  155 => 55,  129 => 56,  114 => 50,  83 => 15,  65 => 29,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 72,  242 => 67,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 34,  37 => 18,  97 => 38,  81 => 33,  70 => 22,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 285,  433 => 96,  391 => 243,  389 => 162,  386 => 239,  330 => 194,  326 => 91,  321 => 89,  303 => 175,  292 => 129,  288 => 79,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 181,  113 => 42,  110 => 86,  34 => 17,  190 => 54,  152 => 61,  145 => 53,  134 => 28,  126 => 55,  77 => 13,  74 => 30,  58 => 25,  52 => 24,  53 => 18,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 130,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 137,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 89,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 62,  177 => 65,  169 => 33,  140 => 30,  132 => 57,  128 => 47,  111 => 30,  107 => 48,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 64,  217 => 63,  208 => 60,  204 => 72,  179 => 84,  159 => 40,  143 => 56,  135 => 53,  131 => 48,  119 => 44,  108 => 42,  102 => 75,  71 => 31,  67 => 19,  63 => 17,  59 => 26,  47 => 25,  94 => 40,  89 => 17,  85 => 38,  79 => 32,  75 => 21,  68 => 24,  56 => 24,  50 => 23,  201 => 92,  196 => 56,  183 => 62,  171 => 81,  166 => 32,  163 => 42,  158 => 56,  156 => 39,  151 => 30,  142 => 59,  138 => 187,  136 => 186,  123 => 47,  121 => 52,  117 => 178,  115 => 177,  105 => 26,  101 => 46,  91 => 39,  69 => 19,  62 => 28,  49 => 22,  28 => 14,  87 => 35,  72 => 30,  66 => 32,  55 => 25,  41 => 25,  31 => 15,  38 => 18,  26 => 13,  25 => 13,  24 => 14,  35 => 20,  29 => 15,  21 => 11,  19 => 11,  98 => 36,  93 => 47,  88 => 38,  78 => 36,  46 => 22,  44 => 16,  32 => 14,  27 => 14,  22 => 11,  43 => 19,  40 => 20,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 47,  187 => 53,  182 => 51,  176 => 48,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 188,  133 => 185,  130 => 43,  125 => 46,  122 => 45,  116 => 43,  112 => 176,  109 => 43,  106 => 26,  103 => 38,  99 => 23,  95 => 19,  92 => 43,  86 => 33,  82 => 38,  80 => 25,  73 => 34,  64 => 19,  60 => 16,  57 => 15,  54 => 22,  51 => 23,  48 => 15,  45 => 20,  42 => 19,  39 => 20,  36 => 18,  33 => 16,  30 => 2,);
    }
}
