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

            <div class=\"add-button\">
                ";
        // line 87
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 88
            echo "                    <div class=\"wrapper\"
                         onclick=\"form_tools.new_message_form.show()\">
                        <div class=\"name\">
                            <span class=\"add-char\">+</span>New message
                        </div>
                    </div>
                ";
        } else {
            // line 95
            echo "                    <div class=\"wrapper\"
                         onclick=\"alert('Please login to post new messages.')\">
                        <div class=\"name\">
                            <span class=\"add-char\">+</span>New message
                        </div>
                    </div>
                ";
        }
        // line 102
        echo "            </div>
        </div>

        <div class=\"posts\">
            ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
            echo "\">
                            ";
            // line 110
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 111
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                     width=\"80\" height=\"80\" />
                            ";
            } else {
                // line 114
                echo "                                <div class=\"no-avatar\">No avatar</div>
                            ";
            }
            // line 116
            echo "                        </a>
                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 121
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 122
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "</a>
                                reposted
                                <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo "</a> post
                            ";
            } else {
                // line 126
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "</a> added new post
                            ";
            }
            // line 128
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 131
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 132
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 133
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 134
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 136
                echo "                            ";
            } else {
                // line 137
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 139
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"label\">
                            ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoLabel"), "html", null, true);
            echo "
                        </div>

                        <div class=\"sublabel\">
                            ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoSublabel"), "html", null, true);
            echo "
                        </div>
                    </div>

                    <div class=\"separator\">
                    </div>

                    <div class=\"footer\">
                        <div class=\"follow-status\">
                            ";
            // line 157
            if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))) {
                // line 158
                echo "                                ";
                if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                    // line 159
                    echo "                                    <span onclick=\"ajax.process('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_followed_by_me_status", array("userId" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"))), "html", null, true);
                    echo "',
                                                                false,
                                                                'modal_no_confirmation')\" class=\"update-follow-status-";
                    // line 161
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"), "html", null, true);
                    echo "\">
                                        ";
                    // line 162
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isFollowedByLoggedUser")) {
                        // line 163
                        echo "                                            Unfollow
                                        ";
                    } else {
                        // line 165
                        echo "                                            Follow
                                        ";
                    }
                    // line 167
                    echo "                                    </span>
                                ";
                } else {
                    // line 169
                    echo "                                    <span onclick=\"alert('Please login to follow users')\">
                                        Follow
                                    </span>
                                ";
                }
                // line 173
                echo "                            ";
            }
            // line 174
            echo "                        </div>

                        ";
            // line 176
            if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))) {
                // line 177
                echo "                            <div class=\"repost\"
                                 data-original-message-text=\"";
                // line 178
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text")) : ($this->getAttribute($this->getContext($context, "message"), "text"))), "html", null, true);
                echo "\"
                                 data-original-message-username=\"";
                // line 179
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\"
                                 data-repost-url=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repost_message", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))), "redirectToRouteAfterRepost" => "main")), "html", null, true);
                // line 181
                echo "\">
                                ";
                // line 182
                if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                    // line 183
                    echo "                                    <span onclick=\"ajax.process('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_if_message_already_reposted", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))))), "html", null, true);
                    // line 184
                    echo "',
                                                                this,
                                                                'modal_no_confirmation')\">
                                        Repost
                                    </span>
                                ";
                } else {
                    // line 190
                    echo "                                    <span onclick=\"alert('Please login to repost messages')\">
                                        Repost
                                    </span>
                                ";
                }
                // line 194
                echo "                            </div>
                        ";
            } else {
                // line 196
                echo "                            <div class=\"repost\">
                            </div>
                        ";
            }
            // line 199
            echo "
                        <div class=\"replies-count\">
                            <span class=\"highlight count\">
                                ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "repliesCount"), "html", null, true);
            echo "
                            </span>
                            <span class=\"label\">
                                ";
            // line 205
            if (($this->getAttribute($this->getContext($context, "message"), "repliesCount") == 1)) {
                // line 206
                echo "                                    Reply
                                ";
            } else {
                // line 208
                echo "                                    Replies
                                ";
            }
            // line 210
            echo "                            </span>
                        </div>
                        <div class=\"toogle-replies\"
                             data-action=\"show\"
                             data-load-replies-url=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("load_replies", array("messageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
            echo "\"
                             onclick=\"html_tools.replies_list.toogle(";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
            echo ", this)\">
                            Show
                        </div>
                        <div class=\"add-reply\">
                            ";
            // line 219
            if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                // line 220
                echo "                                <span onclick=\"form_tools.message_response_form.load_reply_form('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reply_to_message", array("originalMessageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                echo "',
                                                                                                '";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "',
                                                                                                '";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "',
                                                                                                this)\">
                                    Add reply
                                </span>
                            ";
            } else {
                // line 227
                echo "                                <span onclick=\"alert('Please login to reply to messages.')\">
                                    Add reply
                                </span>
                            ";
            }
            // line 231
            echo "                        </div>
                    </div>
                </div>

                <div class=\"replies-wrapper\" id=\"replies-to-message-";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
            echo "\" style=\"display: none\"></div>

                <div class=\"separator\"></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "
            ";
        // line 240
        if (twig_test_empty($this->getContext($context, "messages"))) {
            // line 241
            echo "               <div class=\"no-results\">
                   No messages yet per selected period.
               </div>
            ";
        }
        // line 245
        echo "        </div>

        <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 250
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 251
            echo "
                        ";
            // line 252
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 253
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 255
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 259
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 262
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 267
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
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
        return array (  567 => 269,  560 => 267,  552 => 262,  545 => 259,  538 => 255,  534 => 253,  532 => 252,  529 => 251,  525 => 250,  518 => 245,  512 => 241,  510 => 240,  507 => 239,  497 => 235,  491 => 231,  485 => 227,  477 => 222,  473 => 221,  468 => 220,  466 => 219,  459 => 215,  455 => 214,  449 => 210,  445 => 208,  441 => 206,  439 => 205,  433 => 202,  428 => 199,  423 => 196,  419 => 194,  413 => 190,  405 => 184,  402 => 183,  400 => 182,  397 => 181,  395 => 180,  391 => 179,  387 => 178,  384 => 177,  382 => 176,  378 => 174,  375 => 173,  369 => 169,  365 => 167,  361 => 165,  357 => 163,  355 => 162,  351 => 161,  345 => 159,  342 => 158,  340 => 157,  328 => 148,  321 => 144,  314 => 139,  306 => 137,  303 => 136,  295 => 134,  293 => 133,  286 => 132,  284 => 131,  279 => 128,  271 => 126,  264 => 124,  256 => 122,  254 => 121,  247 => 116,  243 => 114,  236 => 111,  234 => 110,  230 => 109,  226 => 107,  222 => 106,  216 => 102,  207 => 95,  198 => 88,  196 => 87,  191 => 84,  185 => 83,  177 => 78,  170 => 75,  163 => 71,  159 => 69,  156 => 68,  152 => 67,  142 => 59,  135 => 57,  127 => 52,  120 => 49,  113 => 45,  109 => 43,  107 => 42,  104 => 41,  100 => 40,  92 => 34,  83 => 31,  80 => 30,  76 => 29,  60 => 16,  55 => 13,  52 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
