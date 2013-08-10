<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_a63f8f8734f739aeee85ed9dbbaf84a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  110 => 22,  102 => 17,  175 => 71,  146 => 58,  127 => 28,  100 => 41,  20 => 1,  134 => 52,  129 => 54,  53 => 11,  118 => 34,  90 => 32,  63 => 27,  76 => 17,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 56,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 29,  70 => 19,  67 => 18,  61 => 12,  38 => 6,  94 => 34,  89 => 36,  85 => 25,  75 => 35,  68 => 14,  56 => 11,  87 => 35,  21 => 2,  26 => 9,  93 => 6,  88 => 31,  78 => 26,  46 => 7,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 65,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 56,  136 => 55,  121 => 46,  117 => 19,  105 => 18,  91 => 31,  62 => 23,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 4,  246 => 32,  157 => 61,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 20,  115 => 33,  111 => 16,  108 => 19,  101 => 37,  98 => 11,  96 => 39,  83 => 33,  74 => 14,  66 => 28,  55 => 13,  52 => 10,  50 => 2,  43 => 7,  41 => 5,  35 => 5,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 59,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 39,  122 => 50,  116 => 48,  112 => 42,  109 => 41,  106 => 45,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 27,  82 => 28,  80 => 38,  73 => 16,  64 => 13,  60 => 16,  57 => 12,  54 => 1,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 16,  36 => 5,  33 => 3,  30 => 3,);
    }
}
