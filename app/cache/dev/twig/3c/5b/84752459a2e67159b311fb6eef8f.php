<?php

/* NtechBoardBundle:Header:authorized.html.twig */
class __TwigTemplate_3c5b84752459a2e67159b311fb6eef8f extends Twig_Template
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
        <div class=\"menu-element\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("myboard");
        echo "\">My Board</a>
        </div>

        <div class=\"menu-element\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("my_followers");
        echo "\">My Followers</a>
        </div>
    </div>

    <div class=\"right\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
    </div>
</div>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/header/authorized.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Header:authorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 2,  57 => 1,  50 => 21,  42 => 16,  35 => 12,  27 => 7,  22 => 4,  20 => 1,);
    }
}
