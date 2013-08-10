<?php

/* NtechBoardBundle:Authorization:login.html.twig */
class __TwigTemplate_36ca68571375655afd5eb9bf692934b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NtechBoardBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NtechBoardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    NTech Board - login
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    Authorization
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/authorization/login.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->getContext($context, "error")) {
            // line 18
            echo "        <div id=\"login-error\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 22
        echo "
    <div id=\"login\">
        <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-row top-margin\">
                <div class=\"left\"><label for=\"username\">Username:</label></div>
                <div class=\"right\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" class=\"input\" /></div>
            </div>

            <div class=\"form-row\">
                <div class=\"left\"><label for=\"password\">Password:</label></div>
                <div class=\"right\"><input type=\"password\" id=\"password\" name=\"_password\" class=\"input\" /></div>
            </div>

            <div class=\"form-row\">
                <button type=\"submit\" class=\"submit\">Login</button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Authorization:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  80 => 24,  76 => 22,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  55 => 13,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
