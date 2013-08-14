<?php

/* NtechBoardBundle:Board:myfollowers.html.twig */
class __TwigTemplate_a0ce3e38eb8aac449736112082b7381f extends Twig_Template
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
        echo "    NTech Board - My Followers
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/board/myfollowers.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    My followers
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"myfollowers\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userFollowers"));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 19
            echo "            <div class=\"follower\">
                <div class=\"wrapper\">

                    <div class=\"left\">
                        <div class=\"avatar\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getContext($context, "follower"), "username"))), "html", null, true);
            echo "\">
                                ";
            // line 25
            if ($this->getAttribute($this->getContext($context, "follower"), "avatar")) {
                // line 26
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getContext($context, "follower"), "avatar"))), "html", null, true);
                echo "\"
                                         width=\"80\" height=\"80\" />
                                ";
            } else {
                // line 29
                echo "                                    <div class=\"no-avatar\">
                                        No avatar
                                    </div>
                                ";
            }
            // line 33
            echo "                            </a>
                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"heading\">
                           <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getContext($context, "follower"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follower"), "username"), "html", null, true);
            echo "</a>
                        </div>

                        <div class=\"stats\">
                            Messages: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follower"), "newMessagesCount"), "html", null, true);
            echo "
                            Reposts: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follower"), "repostsCount"), "html", null, true);
            echo "
                            Replies: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follower"), "repliesCount"), "html", null, true);
            echo "
                        </div>
                    </div>

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        ";
        // line 53
        if (twig_test_empty($this->getContext($context, "userFollowers"))) {
            // line 54
            echo "           <div class=\"no-followers\">
               You have no followers yet.
           </div>
        ";
        }
        // line 58
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Board:myfollowers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 58,  140 => 54,  138 => 53,  135 => 52,  122 => 45,  118 => 44,  114 => 43,  105 => 39,  97 => 33,  91 => 29,  84 => 26,  82 => 25,  78 => 24,  71 => 19,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
