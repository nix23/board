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
        if (isset($context["userFollowers"])) { $_userFollowers_ = $context["userFollowers"]; } else { $_userFollowers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_userFollowers_);
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 19
            echo "            <div class=\"follower\">
                <div class=\"wrapper\">

                    <div class=\"left\">
                        <div class=\"avatar\">
                            ";
            // line 24
            if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
            if ($this->getAttribute($_follower_, "avatar")) {
                echo "}
                                <img src=\"";
                // line 25
                if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($_follower_, "avatar"))), "html", null, true);
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
            if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_follower_, "username"), "html", null, true);
            echo "
                        </div>

                        <div class=\"stats\">
                            Messages: ";
            // line 41
            if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_follower_, "newMessagesCount"), "html", null, true);
            echo "
                            Reposts: ";
            // line 42
            if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_follower_, "repostsCount"), "html", null, true);
            echo "
                            Replies: ";
            // line 43
            if (isset($context["follower"])) { $_follower_ = $context["follower"]; } else { $_follower_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_follower_, "repliesCount"), "html", null, true);
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
        // line 50
        echo "
        ";
        // line 51
        if (isset($context["userFollowers"])) { $_userFollowers_ = $context["userFollowers"]; } else { $_userFollowers_ = null; }
        if (twig_test_empty($_userFollowers_)) {
            // line 52
            echo "           <div class=\"no-followers\">
               You have no followers yet.
           </div>
        ";
        }
        // line 56
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
        return array (  139 => 51,  79 => 24,  126 => 39,  119 => 34,  116 => 33,  112 => 41,  99 => 11,  94 => 6,  91 => 28,  74 => 33,  82 => 24,  68 => 18,  61 => 16,  42 => 8,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 43,  131 => 42,  122 => 43,  102 => 12,  92 => 25,  84 => 25,  76 => 35,  72 => 19,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  205 => 70,  199 => 69,  190 => 66,  182 => 62,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 56,  138 => 44,  123 => 38,  117 => 42,  108 => 31,  83 => 41,  71 => 19,  64 => 17,  55 => 24,  114 => 22,  109 => 15,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 18,  28 => 4,  39 => 7,  110 => 20,  89 => 28,  65 => 14,  63 => 13,  58 => 25,  34 => 4,  26 => 6,  98 => 33,  88 => 27,  80 => 23,  46 => 12,  44 => 17,  36 => 6,  43 => 7,  57 => 11,  50 => 12,  47 => 9,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 66,  173 => 63,  162 => 58,  158 => 56,  155 => 55,  152 => 50,  142 => 52,  136 => 50,  133 => 44,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 22,  75 => 20,  60 => 12,  53 => 12,  40 => 6,  32 => 8,  24 => 1,  25 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 53,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 37,  97 => 32,  93 => 18,  90 => 21,  81 => 38,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 13,  52 => 23,  49 => 9,  45 => 6,  41 => 9,  37 => 11,  33 => 4,  30 => 5,);
    }
}
