<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_86734c0dbe1c31d791090649a1b73b91aac5b84369806655c7f7ea2f485d94d3 extends Twig_Template
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
    }

    // line 1
    public function getrender_groups($_admin = null, $_form = null, $_groups = null, $_has_tab = null)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $_admin,
            "form" => $_form,
            "groups" => $_groups,
            "has_tab" => $_has_tab,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
                echo "<div class=\"row\">";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 4
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"), (isset($context["code"]) ? $context["code"] : null), array(), "array");
                // line 5
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class"), "html", null, true);
                echo "\"> ";
                // line 6
                echo "            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "name"), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 13
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 15
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description") != false)) {
                    // line 16
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description");
                    echo "</p>
                        ";
                }
                // line 18
                echo "
                        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 20
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                        // line 21
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 23
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 24
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </div>
                </div>
                ";
                // line 29
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
                echo "</div>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  392 => 107,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  324 => 85,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  263 => 58,  257 => 56,  233 => 48,  222 => 44,  211 => 41,  194 => 40,  146 => 33,  76 => 18,  12 => 36,  150 => 35,  195 => 49,  184 => 45,  139 => 52,  181 => 44,  178 => 80,  170 => 77,  167 => 36,  165 => 75,  148 => 69,  137 => 29,  104 => 40,  96 => 30,  90 => 24,  100 => 61,  188 => 88,  155 => 55,  129 => 25,  114 => 39,  83 => 20,  65 => 26,  318 => 83,  304 => 135,  300 => 133,  281 => 127,  277 => 126,  274 => 125,  270 => 123,  266 => 121,  262 => 119,  259 => 118,  242 => 117,  161 => 50,  157 => 56,  153 => 48,  120 => 46,  84 => 48,  37 => 5,  97 => 24,  81 => 20,  70 => 22,  522 => 241,  519 => 240,  515 => 238,  512 => 237,  505 => 12,  502 => 11,  449 => 287,  445 => 286,  441 => 285,  433 => 283,  391 => 243,  389 => 106,  386 => 239,  330 => 194,  326 => 86,  321 => 191,  303 => 175,  292 => 129,  288 => 128,  236 => 129,  218 => 114,  191 => 89,  160 => 57,  124 => 47,  113 => 44,  110 => 29,  34 => 16,  190 => 38,  152 => 61,  145 => 54,  134 => 28,  126 => 24,  77 => 33,  74 => 39,  58 => 23,  52 => 6,  53 => 15,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 290,  457 => 289,  453 => 288,  444 => 149,  440 => 148,  437 => 284,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 237,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  360 => 109,  355 => 106,  341 => 196,  337 => 90,  322 => 101,  314 => 99,  312 => 98,  309 => 79,  305 => 77,  298 => 132,  294 => 90,  285 => 89,  283 => 170,  278 => 86,  268 => 61,  264 => 84,  258 => 81,  252 => 53,  247 => 78,  241 => 131,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 33,  140 => 30,  132 => 65,  128 => 42,  111 => 25,  107 => 52,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 47,  227 => 81,  224 => 45,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  131 => 61,  119 => 112,  108 => 36,  102 => 64,  71 => 30,  67 => 15,  63 => 13,  59 => 13,  47 => 23,  94 => 30,  89 => 28,  85 => 38,  79 => 25,  75 => 18,  68 => 36,  56 => 16,  50 => 14,  201 => 92,  196 => 90,  183 => 62,  171 => 81,  166 => 32,  163 => 58,  158 => 56,  156 => 41,  151 => 70,  142 => 59,  138 => 69,  136 => 39,  123 => 58,  121 => 61,  117 => 48,  115 => 40,  105 => 65,  101 => 41,  91 => 37,  69 => 16,  62 => 14,  49 => 21,  28 => 14,  87 => 23,  72 => 28,  66 => 39,  55 => 12,  41 => 6,  31 => 15,  38 => 5,  26 => 14,  25 => 12,  24 => 1,  35 => 2,  29 => 14,  21 => 1,  19 => 11,  98 => 22,  93 => 47,  88 => 28,  78 => 19,  46 => 8,  44 => 18,  32 => 15,  27 => 14,  22 => 12,  43 => 7,  40 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 52,  189 => 47,  187 => 46,  182 => 85,  176 => 64,  173 => 35,  168 => 80,  164 => 45,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 32,  141 => 70,  133 => 49,  130 => 43,  125 => 51,  122 => 44,  116 => 111,  112 => 109,  109 => 43,  106 => 26,  103 => 34,  99 => 36,  95 => 28,  92 => 23,  86 => 21,  82 => 35,  80 => 26,  73 => 17,  64 => 17,  60 => 22,  57 => 9,  54 => 34,  51 => 33,  48 => 5,  45 => 4,  42 => 17,  39 => 17,  36 => 4,  33 => 15,  30 => 2,);
    }
}
