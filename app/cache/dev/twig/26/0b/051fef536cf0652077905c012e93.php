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
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
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
                            <button type=\"button\" class=\"submit\"
                                    id=\"message-response-form-submit\">Add</button>
                        </div>

                        <div class=\"loading\" id=\"message-response-form-loading\">
                        </div>
                    </div>

                </form>
            </div>

            <div id=\"header\">
                ";
        // line 104
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 105
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:authorized.html.twig")->display($context);
            // line 106
            echo "                ";
        } else {
            // line 107
            echo "                    ";
            $this->env->loadTemplate("NtechBoardBundle:Header:unauthorized.html.twig")->display($context);
            // line 108
            echo "                ";
        }
        // line 109
        echo "            </div>

            <div id=\"content\">
                <div id=\"page-header\">
                    <h1>
                        ";
        // line 114
        $this->displayBlock('header', $context, $blocks);
        // line 116
        echo "                    </h1>
                </div>

                ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 122
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
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/shared/replies.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/overlay.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/modal_loading.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/ajax.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/form_tools.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/html_tools.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/js/initialize.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 114
    public function block_header($context, array $blocks = array())
    {
        // line 115
        echo "                        ";
    }

    // line 119
    public function block_content($context, array $blocks = array())
    {
        // line 120
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
        return array (  229 => 120,  226 => 119,  222 => 115,  219 => 114,  213 => 23,  209 => 22,  205 => 21,  201 => 20,  197 => 19,  193 => 18,  188 => 17,  185 => 16,  179 => 13,  174 => 12,  171 => 11,  166 => 6,  163 => 5,  155 => 122,  153 => 119,  148 => 116,  146 => 114,  139 => 109,  136 => 108,  133 => 107,  130 => 106,  127 => 105,  125 => 104,  44 => 25,  42 => 16,  39 => 15,  37 => 11,  32 => 8,  30 => 5,  24 => 1,);
    }
}
