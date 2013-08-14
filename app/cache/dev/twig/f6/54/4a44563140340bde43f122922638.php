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

       <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 23
            echo "
                        ";
            // line 24
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 25
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 31
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myboard_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 34
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 39
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
            </div>

            <div class=\"sorting\">
                <div class=\"heading\">
                    Last:
                </div>

                ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "daysCountOptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["daysCountOption"]) {
            // line 50
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "daysCountOption"), "selected")) {
                // line 51
                echo "                        <div class=\"wrapper\">
                            <div class=\"item selected\">
                                ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "daysCountOption"), "label"), "html", null, true);
                echo "
                            </div>
                        </div>
                    ";
            } else {
                // line 57
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myboard_with_params", array("days" => $this->getAttribute($this->getContext($context, "daysCountOption"), "value"), "page" => $this->getContext($context, "currentPage"))), "html", null, true);
                echo "\">
                            <div class=\"wrapper\">
                                <div class=\"item active\">
                                    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "daysCountOption"), "label"), "html", null, true);
                echo "
                                </div>
                            </div>
                        </a>
                    ";
            }
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['daysCountOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>

            <div class=\"add-button\">
                <div class=\"wrapper\"
                     onclick=\"form_tools.new_message_form.show()\">
                    <div class=\"name\">
                        <span class=\"add-char\">+</span>New message
                    </div>
                </div>
            </div>
        </div>

        <div class=\"posts\">
            ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 80
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 82
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 83
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                 width=\"80\" height=\"80\" />
                        ";
            } else {
                // line 86
                echo "                            <div class=\"no-avatar\">No avatar</div>
                        ";
            }
            // line 88
            echo "                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 92
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 93
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " reposted ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 95
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " replied to ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " post
                            ";
            } else {
                // line 97
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 99
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 102
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 103
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 104
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 105
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 107
                echo "                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 108
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "text"), "html", null, true);
                echo "
                                <br>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " replied: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            } else {
                // line 111
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 113
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"label\">
                            ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoLabel"), "html", null, true);
            echo "
                        </div>

                        <div class=\"sublabel\">
                            ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoSublabel"), "html", null, true);
            echo "
                        </div>
                    </div>

                    ";
            // line 126
            if (((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage")) || ($this->getAttribute($this->getContext($context, "message"), "replyToMessage") && (!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))))) {
                // line 130
                echo "                        <div class=\"separator\">
                        </div>

                        <div class=\"footer\">
                            <div class=\"follow-status\">
                                ";
                // line 135
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))) {
                    // line 136
                    echo "                                    <span onclick=\"ajax.process('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_followed_by_me_status", array("userId" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"))), "html", null, true);
                    echo "',
                                                                false,
                                                                'modal_no_confirmation')\" class=\"update-follow-status-";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"), "html", null, true);
                    echo "\">
                                        ";
                    // line 139
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isFollowedByLoggedUser")) {
                        // line 140
                        echo "                                            Unfollow
                                        ";
                    } else {
                        // line 142
                        echo "                                            Follow
                                        ";
                    }
                    // line 144
                    echo "                                    </span>
                                ";
                }
                // line 146
                echo "                            </div>

                            ";
                // line 148
                if (((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser")) && (!$this->getAttribute($this->getContext($context, "message"), "replyToMessage")))) {
                    // line 149
                    echo "                                <div class=\"repost\"
                                     data-original-message-text=\"";
                    // line 150
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text")) : ($this->getAttribute($this->getContext($context, "message"), "text"))), "html", null, true);
                    echo "\"
                                     data-original-message-username=\"";
                    // line 151
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                    echo "\"
                                     data-repost-url=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repost_message", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))), "redirectToRouteAfterRepost" => "myboard")), "html", null, true);
                    // line 153
                    echo "\">
                                    ";
                    // line 154
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 155
                        echo "                                        <span onclick=\"ajax.process('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_if_message_already_reposted", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))))), "html", null, true);
                        // line 156
                        echo "',
                                                                    this,
                                                                    'modal_no_confirmation')\">
                                            Repost
                                        </span>
                                    ";
                    } else {
                        // line 162
                        echo "                                        <span onclick=\"alert('Please login to repost messages')\">
                                            Repost
                                        </span>
                                    ";
                    }
                    // line 166
                    echo "                                </div>
                            ";
                } else {
                    // line 168
                    echo "                                <div class=\"repost\">
                                </div>
                            ";
                }
                // line 171
                echo "
                            ";
                // line 172
                if ((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage"))) {
                    // line 173
                    echo "                                <div class=\"replies-count\">
                                    <span class=\"highlight count\">
                                        ";
                    // line 175
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "repliesCount"), "html", null, true);
                    echo "
                                    </span>
                                    <span class=\"label\">
                                        ";
                    // line 178
                    if (($this->getAttribute($this->getContext($context, "message"), "repliesCount") == 1)) {
                        // line 179
                        echo "                                            Reply
                                        ";
                    } else {
                        // line 181
                        echo "                                            Replies
                                        ";
                    }
                    // line 183
                    echo "                                    </span>
                                </div>
                                <div class=\"toogle-replies\"
                                     data-action=\"show\"
                                     data-load-replies-url=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("load_replies", array("messageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                    echo "\"
                                     onclick=\"html_tools.replies_list.toogle(";
                    // line 188
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
                    echo ", this)\">
                                    Show
                                </div>
                                <div class=\"add-reply\">
                                    ";
                    // line 192
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 193
                        echo "                                        <span onclick=\"form_tools.message_response_form.load_reply_form('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reply_to_message", array("originalMessageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 194
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 195
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                        echo "',
                                                                                                        this)\">
                                            Add reply
                                        </span>
                                    ";
                    } else {
                        // line 200
                        echo "                                        <span onclick=\"alert('Please login to reply to messages.')\">
                                            Add reply
                                        </span>
                                    ";
                    }
                    // line 204
                    echo "                                </div>
                            ";
                }
                // line 206
                echo "                        </div>
                    ";
            }
            // line 208
            echo "                </div>

                <div class=\"replies-wrapper\" id=\"replies-to-message-";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
            echo "\" style=\"display: none\"></div>

                <div class=\"separator\"></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "        </div>

       <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 220
            echo "
                        ";
            // line 221
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 222
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 224
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 228
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myboard_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 231
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 236
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                </div>
            </div>
        </div>

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
        return array (  521 => 238,  514 => 236,  506 => 231,  499 => 228,  492 => 224,  488 => 222,  486 => 221,  483 => 220,  479 => 219,  472 => 214,  462 => 210,  458 => 208,  454 => 206,  450 => 204,  444 => 200,  436 => 195,  432 => 194,  427 => 193,  425 => 192,  418 => 188,  414 => 187,  408 => 183,  404 => 181,  400 => 179,  398 => 178,  392 => 175,  388 => 173,  386 => 172,  383 => 171,  378 => 168,  374 => 166,  368 => 162,  360 => 156,  357 => 155,  355 => 154,  352 => 153,  350 => 152,  346 => 151,  342 => 150,  339 => 149,  337 => 148,  333 => 146,  329 => 144,  325 => 142,  321 => 140,  319 => 139,  315 => 138,  309 => 136,  307 => 135,  300 => 130,  298 => 126,  291 => 122,  284 => 118,  277 => 113,  269 => 111,  262 => 109,  255 => 108,  252 => 107,  244 => 105,  242 => 104,  235 => 103,  233 => 102,  228 => 99,  222 => 97,  214 => 95,  206 => 93,  204 => 92,  198 => 88,  194 => 86,  187 => 83,  185 => 82,  181 => 80,  177 => 79,  162 => 66,  156 => 65,  148 => 60,  141 => 57,  134 => 53,  130 => 51,  127 => 50,  123 => 49,  113 => 41,  106 => 39,  98 => 34,  91 => 31,  84 => 27,  80 => 25,  78 => 24,  75 => 23,  71 => 22,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
