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
        // line 23
        echo "    </head>

    <body>
        <div id=\"body-wrapper\">

            <div id=\"overlay\">
            </div>

            <div id=\"overlay-loading\">
                <div class=\"wrapper\">
                    <div class=\"message\">
                    </div>

                    <div class=\"icon\">
                    </div>
                </div>
            </div>

            <div id=\"message-response-form\">
                <form name=\"message-response-form\">

                    <div class=\"heading\">
                        <div class=\"legend\">
                            <div class=\"label\">
                            </div>
                        </div>

                        <div class=\"close\">
                            <span class=\"button\"
                                  onclick=\"form_tools.message_response_form.hide()\">
                                Close
                            </span>
                        </div>
                    </div>

                    <div class=\"element-row first-row\">
                        <div class=\"left\">
                            <div class=\"legend\">
                            </div>

                            <div class=\"sublabel\">
                            </div>
                        </div>

                        <div class=\"right\">
                            <textarea name=\"message[messageText]\" class=\"textarea\"
                                      id=\"message-response-form-message-text\" readonly></textarea>
                        </div>
                    </div>

                    <div class=\"element-row second-row\">
                        <div class=\"left\">
                            <div class=\"legend\">
                            </div>

                            <div class=\"sublabel\">
                            </div>
                        </div>

                        <div class=\"right\">
                            <textarea name=\"message[responseText]\" class=\"textarea\"
                                      id=\"message-response-form-response-text\" ></textarea>
                        </div>
                    </div>

                    <div class=\"footer\">
                        <div class=\"save\">
                            <button type=\"button\" class=\"submit\">Add</button>
                        </div>

                        <div class=\"loading\" id=\"message-response-form-loading\">
                        </div>
                    </div>

                </form>
            </div>

            <div id=\"header\">
                ";
        // line 101
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 102
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:authorized.html.twig")->display($context);
            // line 103
            echo "                ";
        } else {
            // line 104
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:unauthorized.html.twig")->display($context);
            // line 105
            echo "                ";
        }
        // line 106
        echo "            </div>

            <div id=\"content\">
                <div id=\"page-header\">
                    <h1>
                        ";
        // line 111
        $this->displayBlock('header', $context, $blocks);
        // line 113
        echo "                    </h1>
                </div>

                ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 119
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
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/overlay.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/modal_loading.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/ajax.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/form_tools.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/initialize.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 111
    public function block_header($context, array $blocks = array())
    {
        // line 112
        echo "                        ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
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
        return array (  220 => 117,  217 => 116,  213 => 112,  210 => 111,  204 => 21,  200 => 20,  196 => 19,  192 => 18,  188 => 17,  183 => 16,  180 => 15,  173 => 12,  165 => 6,  162 => 5,  154 => 119,  147 => 113,  145 => 111,  138 => 106,  132 => 104,  129 => 103,  126 => 102,  124 => 101,  42 => 15,  39 => 14,  37 => 11,  32 => 8,  24 => 1,  426 => 194,  419 => 192,  411 => 187,  404 => 184,  397 => 180,  393 => 178,  391 => 177,  388 => 176,  384 => 175,  377 => 170,  366 => 164,  360 => 160,  352 => 154,  349 => 153,  347 => 152,  343 => 151,  339 => 150,  335 => 149,  330 => 146,  327 => 145,  321 => 141,  317 => 139,  313 => 137,  309 => 135,  307 => 134,  303 => 133,  297 => 131,  294 => 130,  292 => 129,  281 => 121,  275 => 117,  267 => 115,  264 => 114,  256 => 112,  254 => 111,  247 => 110,  245 => 109,  240 => 106,  234 => 104,  226 => 102,  224 => 101,  218 => 97,  214 => 95,  207 => 92,  205 => 91,  201 => 89,  197 => 88,  191 => 84,  185 => 83,  177 => 78,  170 => 11,  163 => 71,  159 => 69,  156 => 68,  152 => 116,  142 => 59,  135 => 105,  127 => 52,  120 => 49,  113 => 45,  109 => 43,  107 => 42,  104 => 41,  100 => 40,  92 => 34,  83 => 31,  80 => 30,  76 => 29,  60 => 16,  55 => 13,  52 => 12,  47 => 9,  44 => 23,  38 => 5,  33 => 4,  30 => 5,);
    }
}
