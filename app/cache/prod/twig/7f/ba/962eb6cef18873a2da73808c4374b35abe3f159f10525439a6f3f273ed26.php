<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_7fba962eb6cef18873a2da73808c4374b35abe3f159f10525439a6f3f273ed26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle::standard_layout.html.twig");

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  648 => 236,  637 => 234,  633 => 233,  625 => 230,  620 => 228,  614 => 226,  612 => 225,  607 => 222,  597 => 218,  590 => 214,  586 => 212,  583 => 211,  581 => 210,  575 => 209,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 204,  545 => 200,  541 => 198,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 171,  516 => 170,  513 => 169,  510 => 168,  506 => 161,  499 => 159,  494 => 129,  483 => 127,  479 => 126,  472 => 122,  468 => 121,  464 => 120,  459 => 119,  456 => 118,  424 => 132,  421 => 131,  419 => 118,  415 => 116,  410 => 94,  401 => 173,  399 => 168,  367 => 149,  359 => 146,  348 => 141,  343 => 138,  334 => 134,  331 => 93,  328 => 92,  317 => 87,  291 => 80,  265 => 76,  253 => 71,  250 => 70,  237 => 66,  231 => 65,  205 => 59,  202 => 58,  185 => 52,  180 => 50,  127 => 182,  118 => 49,  392 => 107,  383 => 104,  377 => 153,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 78,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 61,  194 => 40,  146 => 33,  76 => 33,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 51,  181 => 44,  178 => 80,  170 => 44,  167 => 43,  165 => 75,  148 => 69,  137 => 29,  104 => 43,  96 => 40,  90 => 38,  100 => 43,  188 => 88,  155 => 55,  129 => 56,  114 => 50,  83 => 37,  65 => 29,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 72,  242 => 67,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 39,  37 => 20,  97 => 38,  81 => 38,  70 => 29,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 160,  449 => 287,  445 => 286,  441 => 285,  433 => 96,  391 => 243,  389 => 162,  386 => 239,  330 => 194,  326 => 91,  321 => 89,  303 => 175,  292 => 129,  288 => 79,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 181,  113 => 46,  110 => 45,  34 => 14,  190 => 54,  152 => 61,  145 => 53,  134 => 28,  126 => 55,  77 => 32,  74 => 30,  58 => 25,  52 => 22,  53 => 24,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 95,  427 => 143,  423 => 142,  413 => 95,  409 => 132,  407 => 93,  402 => 130,  398 => 129,  393 => 164,  387 => 159,  384 => 158,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 147,  360 => 109,  355 => 145,  341 => 137,  337 => 135,  322 => 101,  314 => 86,  312 => 98,  309 => 83,  305 => 77,  298 => 132,  294 => 81,  285 => 89,  283 => 170,  278 => 86,  268 => 77,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 62,  177 => 65,  169 => 33,  140 => 30,  132 => 57,  128 => 47,  111 => 46,  107 => 44,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 68,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 64,  217 => 63,  208 => 60,  204 => 72,  179 => 84,  159 => 40,  143 => 56,  135 => 53,  131 => 48,  119 => 44,  108 => 42,  102 => 75,  71 => 31,  67 => 30,  63 => 16,  59 => 25,  47 => 19,  94 => 40,  89 => 39,  85 => 36,  79 => 34,  75 => 32,  68 => 30,  56 => 25,  50 => 27,  201 => 92,  196 => 56,  183 => 62,  171 => 81,  166 => 32,  163 => 42,  158 => 56,  156 => 39,  151 => 30,  142 => 59,  138 => 187,  136 => 186,  123 => 47,  121 => 50,  117 => 178,  115 => 47,  105 => 45,  101 => 42,  91 => 39,  69 => 33,  62 => 28,  49 => 17,  28 => 14,  87 => 38,  72 => 31,  66 => 17,  55 => 23,  41 => 25,  31 => 15,  38 => 14,  26 => 14,  25 => 12,  24 => 12,  35 => 15,  29 => 15,  21 => 11,  19 => 11,  98 => 41,  93 => 39,  88 => 37,  78 => 35,  46 => 20,  44 => 16,  32 => 14,  27 => 14,  22 => 11,  43 => 20,  40 => 17,  209 => 82,  203 => 78,  199 => 57,  193 => 55,  189 => 47,  187 => 53,  182 => 51,  176 => 48,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 188,  133 => 185,  130 => 43,  125 => 46,  122 => 45,  116 => 43,  112 => 176,  109 => 43,  106 => 26,  103 => 43,  99 => 41,  95 => 41,  92 => 38,  86 => 35,  82 => 33,  80 => 25,  73 => 33,  64 => 32,  60 => 15,  57 => 20,  54 => 19,  51 => 22,  48 => 21,  45 => 21,  42 => 19,  39 => 15,  36 => 16,  33 => 16,  30 => 13,);
    }
}
