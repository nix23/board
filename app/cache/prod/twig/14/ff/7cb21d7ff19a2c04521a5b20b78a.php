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
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 35
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if ($this->getAttribute($this->getAttribute($_message_, "user"), "avatar")) {
                // line 36
                echo "                            <img src=\"";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($_message_, "user"), "avatar"))), "html", null, true);
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
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if ($this->getAttribute($_message_, "originalMessage")) {
                // line 46
                echo "                                ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                echo " reposted ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_message_, "originalMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } else {
                // line 48
                echo "                                ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 50
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 53
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if ($this->getAttribute($_message_, "originalMessage")) {
                // line 54
                echo "                                ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_message_, "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 55
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                if ($this->getAttribute($_message_, "text")) {
                    // line 56
                    echo "                                    <br>";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_message_, "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 58
                echo "                            ";
            } else {
                // line 59
                echo "                                ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_message_, "user"), "username"), "html", null, true);
                echo " wrote: ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "text"), "html", null, true);
                echo "
                            ";
            }
            // line 61
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        ";
            // line 65
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_message_, "timeAgo"), "html", null, true);
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
        return array (  191 => 71,  172 => 61,  159 => 58,  103 => 41,  20 => 1,  139 => 51,  79 => 32,  126 => 39,  119 => 34,  116 => 33,  112 => 46,  99 => 39,  94 => 6,  91 => 36,  74 => 33,  82 => 24,  68 => 18,  61 => 16,  42 => 8,  54 => 1,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 53,  131 => 42,  122 => 48,  102 => 12,  92 => 25,  84 => 33,  76 => 35,  72 => 19,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  205 => 70,  199 => 69,  190 => 66,  182 => 62,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 56,  138 => 44,  123 => 38,  117 => 42,  108 => 31,  83 => 41,  71 => 19,  64 => 17,  55 => 13,  114 => 22,  109 => 45,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 18,  28 => 4,  39 => 16,  110 => 20,  89 => 28,  65 => 14,  63 => 13,  58 => 25,  34 => 4,  26 => 6,  98 => 33,  88 => 35,  80 => 23,  46 => 12,  44 => 8,  36 => 6,  43 => 7,  57 => 2,  50 => 2,  47 => 9,  38 => 5,  27 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 65,  173 => 63,  162 => 59,  158 => 56,  155 => 55,  152 => 50,  142 => 52,  136 => 50,  133 => 44,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 22,  75 => 20,  60 => 16,  53 => 12,  40 => 6,  32 => 8,  24 => 1,  25 => 3,  22 => 4,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 53,  157 => 48,  149 => 56,  146 => 55,  140 => 46,  137 => 54,  129 => 50,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 37,  97 => 32,  93 => 18,  90 => 21,  81 => 38,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 13,  52 => 12,  49 => 9,  45 => 6,  41 => 9,  37 => 11,  33 => 4,  30 => 3,);
    }
}
