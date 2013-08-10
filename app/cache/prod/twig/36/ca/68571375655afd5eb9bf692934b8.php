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
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 18
            echo "        <div id=\"login-error\">
            ";
            // line 19
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
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
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
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
        return array (  82 => 24,  68 => 18,  61 => 16,  42 => 8,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 43,  131 => 42,  122 => 37,  102 => 28,  92 => 25,  84 => 21,  76 => 19,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  205 => 70,  199 => 69,  190 => 66,  182 => 62,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 47,  138 => 44,  123 => 42,  117 => 36,  108 => 31,  83 => 24,  71 => 19,  64 => 17,  55 => 13,  114 => 22,  109 => 21,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 9,  28 => 4,  39 => 7,  110 => 20,  89 => 28,  65 => 14,  63 => 13,  58 => 10,  34 => 4,  26 => 6,  98 => 33,  88 => 27,  80 => 23,  46 => 12,  44 => 9,  36 => 6,  43 => 7,  57 => 11,  50 => 12,  47 => 11,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 66,  173 => 63,  162 => 58,  158 => 56,  155 => 55,  152 => 50,  142 => 47,  136 => 44,  133 => 44,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 22,  75 => 20,  60 => 12,  53 => 19,  40 => 6,  32 => 4,  24 => 4,  25 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 53,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
