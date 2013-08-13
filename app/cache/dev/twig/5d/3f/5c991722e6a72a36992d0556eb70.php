<?php

/* NtechBoardBundle:Shared:replies.html.twig */
class __TwigTemplate_5d3f5c991722e6a72a36992d0556eb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"replies\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "replies"));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 3
            echo "        <div class=\"reply\">
            <div class=\"left\">
                ";
            // line 5
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "reply"), "user"), "avatar")) {
                // line 6
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "reply"), "user"), "avatar"))), "html", null, true);
                echo "\"
                         width=\"80\" height=\"80\" />
                ";
            } else {
                // line 9
                echo "                    <div class=\"no-avatar\">No avatar</div>
                ";
            }
            // line 11
            echo "            </div>

            <div class=\"center\">
                <div class=\"top\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "reply"), "user"), "username"), "html", null, true);
            echo " replied:
                </div>

                <div class=\"bottom\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reply"), "text"), "html", null, true);
            echo "
                </div>
            </div>

            <div class=\"right\">
                <div class=\"label\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reply"), "timeAgoLabel"), "html", null, true);
            echo "
                </div>

                <div class=\"sublabel\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reply"), "timeAgoSublabel"), "html", null, true);
            echo "
                </div>
            </div>
        </div>

        <div class=\"reply-separator\">
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    <div class=\"reply-bottom-separator\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:Shared:replies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  72 => 29,  65 => 25,  56 => 19,  49 => 15,  43 => 11,  39 => 9,  32 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
