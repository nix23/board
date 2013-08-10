<?php

/* NtechBoardBundle::layout.html.twig */
class __TwigTemplate_260b051fef536cf0652077905c012e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>

        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>

    <body>
        <div id=\"body-wrapper\">

            <div id=\"header\">
                ";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 24
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:authorized.html.twig")->display($context);
            // line 25
            echo "                ";
        } else {
            // line 26
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:unauthorized.html.twig")->display($context);
            // line 27
            echo "                ";
        }
        // line 28
        echo "            </div>

            <div id=\"content\">
                <div id=\"page-header\">
                    <h1>
                        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "                    </h1>
                </div>

                ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                NTech Board - Latest posts
            ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "                        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                    Main page
                ";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  119 => 34,  116 => 33,  112 => 16,  99 => 11,  94 => 6,  91 => 5,  74 => 33,  82 => 24,  68 => 18,  61 => 26,  42 => 15,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 43,  131 => 42,  122 => 37,  102 => 12,  92 => 25,  84 => 21,  76 => 35,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  205 => 70,  199 => 69,  190 => 66,  182 => 62,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 47,  138 => 44,  123 => 38,  117 => 36,  108 => 31,  83 => 41,  71 => 19,  64 => 27,  55 => 24,  114 => 22,  109 => 15,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 28,  28 => 4,  39 => 14,  110 => 20,  89 => 28,  65 => 14,  63 => 13,  58 => 25,  34 => 4,  26 => 6,  98 => 33,  88 => 27,  80 => 23,  46 => 12,  44 => 17,  36 => 6,  43 => 7,  57 => 11,  50 => 12,  47 => 11,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 66,  173 => 63,  162 => 58,  158 => 56,  155 => 55,  152 => 50,  142 => 47,  136 => 44,  133 => 44,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 22,  75 => 20,  60 => 12,  53 => 19,  40 => 6,  32 => 8,  24 => 1,  25 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 53,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 38,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 23,  49 => 9,  45 => 6,  41 => 9,  37 => 11,  33 => 4,  30 => 5,);
    }
}
