<?php

/* ::base.html.twig */
class __TwigTemplate_b8aefb9075af7c25b69e1689b2dca875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  191 => 71,  172 => 61,  159 => 58,  103 => 41,  20 => 1,  139 => 51,  79 => 32,  126 => 39,  119 => 34,  116 => 33,  112 => 46,  99 => 39,  94 => 6,  91 => 36,  74 => 33,  82 => 24,  68 => 18,  61 => 16,  42 => 10,  54 => 1,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 53,  131 => 42,  122 => 48,  102 => 12,  92 => 25,  84 => 33,  76 => 35,  72 => 19,  69 => 11,  51 => 13,  48 => 7,  35 => 7,  29 => 5,  205 => 70,  199 => 69,  190 => 66,  182 => 62,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 56,  138 => 44,  123 => 38,  117 => 42,  108 => 31,  83 => 41,  71 => 19,  64 => 10,  55 => 13,  114 => 22,  109 => 45,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 18,  28 => 4,  39 => 16,  110 => 20,  89 => 28,  65 => 14,  63 => 13,  58 => 25,  34 => 4,  26 => 6,  98 => 33,  88 => 35,  80 => 23,  46 => 12,  44 => 11,  36 => 6,  43 => 7,  57 => 2,  50 => 2,  47 => 12,  38 => 5,  27 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 65,  173 => 63,  162 => 59,  158 => 56,  155 => 55,  152 => 50,  142 => 52,  136 => 50,  133 => 44,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 22,  75 => 20,  60 => 16,  53 => 5,  40 => 6,  32 => 8,  24 => 1,  25 => 3,  22 => 4,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 53,  157 => 48,  149 => 56,  146 => 55,  140 => 46,  137 => 54,  129 => 50,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 37,  97 => 32,  93 => 18,  90 => 21,  81 => 38,  70 => 23,  66 => 13,  62 => 11,  59 => 6,  56 => 13,  52 => 12,  49 => 9,  45 => 6,  41 => 9,  37 => 11,  33 => 6,  30 => 3,);
    }
}
