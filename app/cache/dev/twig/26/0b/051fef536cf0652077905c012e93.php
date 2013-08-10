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
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
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
        return array (  125 => 39,  122 => 38,  118 => 34,  115 => 33,  111 => 16,  108 => 15,  101 => 12,  98 => 11,  93 => 6,  90 => 5,  82 => 41,  80 => 38,  75 => 35,  73 => 33,  66 => 28,  63 => 27,  60 => 26,  57 => 25,  54 => 24,  52 => 23,  44 => 17,  37 => 11,  32 => 8,  30 => 5,  24 => 1,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 15,  39 => 14,  34 => 4,  31 => 3,);
    }
}
