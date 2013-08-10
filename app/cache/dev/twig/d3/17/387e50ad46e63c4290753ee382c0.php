<?php

/* NtechBoardBundle:Authorization:registration.html.twig */
class __TwigTemplate_d317387e50ad46e63c4290753ee382c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NtechBoardBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
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
        echo "    NTech Board - Registration
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/authorization/registration.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    Registration
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"registration\">
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            <div class=\"errors\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>

            <div class=\"form-row top-margin\">
                <div class=\"left\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label');
        echo ":</div>
                <div class=\"right\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "input")));
        echo "</div>
            </div>
            <div class=\"error-row\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "
            </div>

           <div class=\"form-row\">
                <div class=\"left\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "password"), 'label');
        echo ":</div>
                <div class=\"right\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "password"), 'widget');
        echo "</div>
            </div>
            <div class=\"error-row\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "password"), 'errors');
        echo "
            </div>

           <div class=\"form-row\">
                <div class=\"left\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "confirm"), 'label');
        echo ":</div>
                <div class=\"right\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "confirm"), 'widget');
        echo "</div>
            </div>
            <div class=\"error-row\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "confirm"), 'errors');
        echo "
            </div>

            <div class=\"form-row\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "register"), 'row', array("attr" => array("class" => "submit")));
        echo "
            </div>
        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Authorization:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  130 => 48,  123 => 44,  117 => 41,  113 => 40,  106 => 36,  100 => 33,  96 => 32,  89 => 28,  83 => 25,  79 => 24,  72 => 20,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
