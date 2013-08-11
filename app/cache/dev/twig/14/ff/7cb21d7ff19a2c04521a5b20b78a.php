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

                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "search_error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "                    <div class=\"error\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </form>
        </div>

        <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 41
            echo "
                        ";
            // line 42
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 43
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 45
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 49
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 57
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
            </div>

            <div class=\"sorting\">
                <div class=\"heading\">
                    Last:
                </div>

                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "daysCountOptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["daysCountOption"]) {
            // line 68
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "daysCountOption"), "selected")) {
                // line 69
                echo "                        <div class=\"wrapper\">
                            <div class=\"item selected\">
                                ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "daysCountOption"), "label"), "html", null, true);
                echo "
                            </div>
                        </div>
                    ";
            } else {
                // line 75
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_with_params", array("days" => $this->getAttribute($this->getContext($context, "daysCountOption"), "value"), "page" => $this->getContext($context, "currentPage"))), "html", null, true);
                echo "\">
                            <div class=\"wrapper\">
                                <div class=\"item active\">
                                    ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "daysCountOption"), "label"), "html", null, true);
                echo "
                                </div>
                            </div>
                        </a>
                    ";
            }
            // line 83
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['daysCountOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>

        <div class=\"posts\">
            ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 91
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 92
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                 width=\"80\" height=\"80\" />
                        ";
            } else {
                // line 95
                echo "                            <div class=\"no-avatar\">No avatar</div>
                        ";
            }
            // line 97
            echo "                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 101
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 102
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " reposted ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } else {
                // line 104
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 106
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 109
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 110
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 111
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 112
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 114
                echo "                            ";
            } else {
                // line 115
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 117
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        ";
            // line 121
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
        // line 127
        echo "        </div>

        <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 133
            echo "
                        ";
            // line 134
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 135
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 137
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 141
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 144
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 149
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                </div>
            </div>
        </div>

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
        return array (  342 => 151,  335 => 149,  327 => 144,  320 => 141,  313 => 137,  309 => 135,  307 => 134,  304 => 133,  300 => 132,  293 => 127,  281 => 121,  275 => 117,  267 => 115,  264 => 114,  256 => 112,  254 => 111,  247 => 110,  245 => 109,  240 => 106,  234 => 104,  226 => 102,  224 => 101,  218 => 97,  214 => 95,  207 => 92,  205 => 91,  201 => 89,  197 => 88,  191 => 84,  185 => 83,  177 => 78,  170 => 75,  163 => 71,  159 => 69,  156 => 68,  152 => 67,  142 => 59,  135 => 57,  127 => 52,  120 => 49,  113 => 45,  109 => 43,  107 => 42,  104 => 41,  100 => 40,  92 => 34,  83 => 31,  80 => 30,  76 => 29,  60 => 16,  55 => 13,  52 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
