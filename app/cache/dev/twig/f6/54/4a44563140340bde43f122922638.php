<?php

/* NtechBoardBundle:Board:myboard.html.twig */
class __TwigTemplate_f6544a44563140340bde43f122922638 extends Twig_Template
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
        echo "    NTech Board - My Board
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/board/myboard.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    My board
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"myboard\">

        <div class=\"posts\">
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 23
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 24
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                 width=\"80\" height=\"80\" />
                        ";
            } else {
                // line 27
                echo "                            <div class=\"no-avatar\">No avatar</div>
                        ";
            }
            // line 29
            echo "                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 33
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 34
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " reposted ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 36
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " replied to ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } else {
                // line 38
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 40
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 43
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 44
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 45
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 46
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 48
                echo "                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 49
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "text"), "html", null, true);
                echo "
                                <br>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "text"), "html", null, true);
                echo "
                            ";
            } else {
                // line 52
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 54
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        ";
            // line 58
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
        // line 64
        echo "        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Board:myboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  173 => 58,  167 => 54,  159 => 52,  154 => 50,  147 => 49,  144 => 48,  136 => 46,  134 => 45,  127 => 44,  125 => 43,  120 => 40,  114 => 38,  106 => 36,  98 => 34,  96 => 33,  90 => 29,  86 => 27,  79 => 24,  77 => 23,  73 => 21,  69 => 20,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
