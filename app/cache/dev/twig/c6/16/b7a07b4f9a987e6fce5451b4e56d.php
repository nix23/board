<?php

/* NtechBoardBundle:Header:unauthorized.html.twig */
class __TwigTemplate_c616b7a07b4f9a987e6fce5451b4e56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<div class=\"header\">
    <div class=\"left\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\">nTech board</a>
    </div>

    <div class=\"center\">
        <div class=\"intro-text\">Welcome to messages board</div>
    </div>

    <div class=\"right\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login</a> or <a href=\"";
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register</a>
    </div>
</div>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/header/unauthorized.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Header:unauthorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  38 => 15,  27 => 7,  22 => 4,  20 => 1,  125 => 39,  122 => 38,  118 => 34,  115 => 33,  111 => 16,  108 => 15,  101 => 12,  98 => 11,  93 => 6,  90 => 5,  82 => 41,  80 => 38,  75 => 35,  73 => 33,  66 => 28,  63 => 27,  60 => 26,  57 => 25,  54 => 24,  52 => 23,  44 => 17,  37 => 11,  32 => 8,  30 => 5,  24 => 1,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 1,  42 => 15,  39 => 14,  34 => 4,  31 => 3,);
    }
}
