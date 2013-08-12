<?php

/* NtechBoardBundle:Main:searchResults.html.twig */
class __TwigTemplate_d1fdf50606baee727e284567bf31c5bd extends Twig_Template
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
        echo "    NTech Board - Search Results
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/main/searchResults.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    Search results
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"search-results\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <div class=\"user\">
                <div class=\"wrapper\">

                    <div class=\"left\">
                        <div class=\"avatar\">
                            ";
            // line 24
            if ($this->getAttribute($this->getContext($context, "user"), "avatar")) {
                // line 25
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getContext($context, "user"), "avatar"))), "html", null, true);
                echo "\"
                                     width=\"80\" height=\"80\" />
                            ";
            } else {
                // line 28
                echo "                                <div class=\"no-avatar\">
                                    No avatar
                                </div>
                            ";
            }
            // line 32
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"heading\">
                           ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "
                        </div>

                        <div class=\"stats\">
                            Messages: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "newMessagesCount"), "html", null, true);
            echo "
                            Reposts: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "repostsCount"), "html", null, true);
            echo "
                            Replies: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "repliesCount"), "html", null, true);
            echo "
                        </div>
                    </div>

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        ";
        // line 51
        if (twig_test_empty($this->getContext($context, "users"))) {
            // line 52
            echo "           <div class=\"no-results\">
               No users found.
           </div>
        ";
        }
        // line 56
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Main:searchResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  133 => 52,  131 => 51,  128 => 50,  115 => 43,  111 => 42,  107 => 41,  100 => 37,  93 => 32,  87 => 28,  80 => 25,  78 => 24,  71 => 19,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
