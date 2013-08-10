<?php

/* NtechBoardBundle:Main:main.html.twig */
class __TwigTemplate_14ff7cb21d7ff19a2c04521a5b20b78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NtechBoardBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/main/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    Latest posts
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"main\">

        <div class=\"search\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("search_user");
        echo "\" method=\"get\">
                <div class=\"legend\">
                    Search for user:
                </div>

                <div class=\"input-field\">
                    <input type=\"text\" name=\"username\" value=\"\" class=\"input\" />
                </div>

                <div class=\"button\">
                    <input type=\"submit\" class=\"submit\" value=\"Search\" />
                </div>
            </form>
        </div>

        <div class=\"posts\">
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 35
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 36
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                 width=\"80\" height=\"80\" />
                        ";
            } else {
                // line 39
                echo "                            <div class=\"no-avatar\">No avatar</div>
                        ";
            }
            // line 41
            echo "                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 45
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 46
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " reposted ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } else {
                // line 48
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 50
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 53
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 54
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 55
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 56
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 58
                echo "                            ";
            } else {
                // line 59
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 61
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgo"), "html", null, true);
            echo "
                    </div>
                </div>

                <div class=\"separator\"></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Main:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  163 => 65,  157 => 61,  149 => 59,  146 => 58,  138 => 56,  136 => 55,  129 => 54,  127 => 53,  122 => 50,  116 => 48,  108 => 46,  106 => 45,  100 => 41,  96 => 39,  89 => 36,  87 => 35,  83 => 33,  79 => 32,  60 => 16,  55 => 13,  52 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
