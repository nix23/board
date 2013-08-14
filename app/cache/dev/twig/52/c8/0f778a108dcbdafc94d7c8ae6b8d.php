<?php

/* NtechBoardBundle:User:profile.html.twig */
class __TwigTemplate_52c80f778a108dcbdafc94d7c8ae6b8d extends Twig_Template
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
        echo "    NTech Board - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo " profile
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ntechboard/css/user/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo " profile
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"profile\">
        <!-- User -->
        <div class=\"user\">

            <div class=\"left\">
                <div class=\"avatar\">
                    ";
        // line 23
        if ($this->getAttribute($this->getContext($context, "user"), "avatar")) {
            // line 24
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getContext($context, "user"), "avatar"))), "html", null, true);
            echo "\"
                             width=\"80\" height=\"80\" />
                    ";
        } else {
            // line 27
            echo "                        <div class=\"no-avatar\">
                            No avatar
                        </div>
                    ";
        }
        // line 31
        echo "                </div>

                <div class=\"info\">
                    <div class=\"heading\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "
                    </div>

                    <div class=\"follow-status\">
                        ";
        // line 39
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 40
            echo "                            ";
            if ((!$this->getAttribute($this->getContext($context, "user"), "isCurrentLoggedUser"))) {
                // line 41
                echo "                                <span onclick=\"ajax.process('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_followed_by_me_status", array("userId" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
                echo "',
                                                            false,
                                                            'modal_no_confirmation')\" class=\"update-follow-status-";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
                echo " active\">
                                   ";
                // line 44
                if ($this->getAttribute($this->getContext($context, "user"), "isFollowedByLoggedUser")) {
                    // line 45
                    echo "                                       Unfollow
                                   ";
                } else {
                    // line 47
                    echo "                                       Follow
                                   ";
                }
                // line 49
                echo "                                </span>
                            ";
            } else {
                // line 51
                echo "                                Your profile
                            ";
            }
            // line 53
            echo "                        ";
        } else {
            // line 54
            echo "                            nTech board user
                        ";
        }
        // line 56
        echo "                    </div>
                </div>
            </div>

            <div class=\"right\">
                <div class=\"stat\">
                    <div class=\"label\">
                        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "newMessagesCount"), "html", null, true);
        echo "
                    </div>

                    <div class=\"sublabel\">
                        ";
        // line 67
        if (($this->getAttribute($this->getContext($context, "user"), "newMessagesCount") == 1)) {
            // line 68
            echo "                            Message
                        ";
        } else {
            // line 70
            echo "                            Messages
                        ";
        }
        // line 72
        echo "                    </div>
                </div>

                <div class=\"stat\">
                    <div class=\"label\">
                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "repostsCount"), "html", null, true);
        echo "
                    </div>

                    <div class=\"sublabel\">
                        ";
        // line 81
        if (($this->getAttribute($this->getContext($context, "user"), "repostsCount") == 1)) {
            // line 82
            echo "                            Repost
                        ";
        } else {
            // line 84
            echo "                            Reposts
                        ";
        }
        // line 86
        echo "                    </div>
                </div>

                <div class=\"stat\">
                    <div class=\"label\">
                        ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "repliesCount"), "html", null, true);
        echo "
                    </div>

                    <div class=\"sublabel\">
                        ";
        // line 95
        if (($this->getAttribute($this->getContext($context, "user"), "repliesCount") == 1)) {
            // line 96
            echo "                            Reply
                        ";
        } else {
            // line 98
            echo "                            Replies
                        ";
        }
        // line 100
        echo "                    </div>
                </div>
            </div>

        </div>
        <!-- User END -->

        <!-- Controls -->
        <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 112
            echo "
                        ";
            // line 113
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 114
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 116
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 120
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("page" => $this->getContext($context, "page"), "username" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 123
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 128
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </div>
            </div>
        </div>
        <!-- Controls END -->

        <!-- Posts -->
        <div class=\"posts\">
            ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 138
            echo "                <div class=\"post\">
                    <div class=\"left\">
                        ";
            // line 140
            if ($this->getAttribute($this->getContext($context, "user"), "avatar")) {
                // line 141
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getContext($context, "user"), "avatar"))), "html", null, true);
                echo "\"
                                 width=\"80\" height=\"80\" />
                        ";
            } else {
                // line 144
                echo "                            <div class=\"no-avatar\">No avatar</div>
                        ";
            }
            // line 146
            echo "                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 150
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 151
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                echo " reposted
                                <a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo "</a> post
                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 154
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                echo " replied to
                                <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo "</a> post
                            ";
            } else {
                // line 157
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                echo " added new post
                            ";
            }
            // line 159
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 162
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 163
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 164
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 165
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 167
                echo "                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 168
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "text"), "html", null, true);
                echo "
                                <br>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                echo " replied: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            } else {
                // line 171
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 173
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"label\">
                            ";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoLabel"), "html", null, true);
            echo "
                        </div>

                        <div class=\"sublabel\">
                            ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoSublabel"), "html", null, true);
            echo "
                        </div>
                    </div>

                    ";
            // line 186
            if ((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage"))) {
                // line 187
                echo "                        <div class=\"separator\">
                        </div>

                        <div class=\"footer\">
                            <div class=\"follow-status\">
                            </div>

                            ";
                // line 194
                if (((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser")) && (!$this->getAttribute($this->getContext($context, "message"), "replyToMessage")))) {
                    // line 195
                    echo "                                <div class=\"repost\"
                                     data-original-message-text=\"";
                    // line 196
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text")) : ($this->getAttribute($this->getContext($context, "message"), "text"))), "html", null, true);
                    echo "\"
                                     data-original-message-username=\"";
                    // line 197
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                    echo "\"
                                     data-repost-url=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repost_message", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))), "redirectToRouteAfterRepost" => "myboard")), "html", null, true);
                    // line 199
                    echo "\">
                                    ";
                    // line 200
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 201
                        echo "                                        <span onclick=\"ajax.process('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_if_message_already_reposted", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))))), "html", null, true);
                        // line 202
                        echo "',
                                                                    this,
                                                                    'modal_no_confirmation')\">
                                            Repost
                                        </span>
                                    ";
                    } else {
                        // line 208
                        echo "                                        <span onclick=\"alert('Please login to repost messages')\">
                                            Repost
                                        </span>
                                    ";
                    }
                    // line 212
                    echo "                                </div>
                            ";
                } else {
                    // line 214
                    echo "                                <div class=\"repost\">
                                </div>
                            ";
                }
                // line 217
                echo "
                            ";
                // line 218
                if ((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage"))) {
                    // line 219
                    echo "                                <div class=\"replies-count\">
                                    <span class=\"highlight count\">
                                        ";
                    // line 221
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "repliesCount"), "html", null, true);
                    echo "
                                    </span>
                                    <span class=\"label\">
                                        ";
                    // line 224
                    if (($this->getAttribute($this->getContext($context, "message"), "repliesCount") == 1)) {
                        // line 225
                        echo "                                            Reply
                                        ";
                    } else {
                        // line 227
                        echo "                                            Replies
                                        ";
                    }
                    // line 229
                    echo "                                    </span>
                                </div>
                                <div class=\"toogle-replies\"
                                     data-action=\"show\"
                                     data-load-replies-url=\"";
                    // line 233
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("load_replies", array("messageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                    echo "\"
                                     onclick=\"html_tools.replies_list.toogle(";
                    // line 234
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
                    echo ", this)\">
                                    Show
                                </div>
                                <div class=\"add-reply\">
                                    ";
                    // line 238
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 239
                        echo "                                        <span onclick=\"form_tools.message_response_form.load_reply_form('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reply_to_message", array("originalMessageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 240
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 241
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                        echo "',
                                                                                                        this)\">
                                            Add reply
                                        </span>
                                    ";
                    } else {
                        // line 246
                        echo "                                        <span onclick=\"alert('Please login to reply to messages.')\">
                                            Add reply
                                        </span>
                                    ";
                    }
                    // line 250
                    echo "                                </div>
                            ";
                }
                // line 252
                echo "                        </div>
                    ";
            }
            // line 254
            echo "                </div>

                <div class=\"replies-wrapper\" id=\"replies-to-message-";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
            echo "\" style=\"display: none\"></div>

                <div class=\"separator\"></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "
            ";
        // line 261
        if (twig_test_empty($this->getContext($context, "messages"))) {
            // line 262
            echo "               <div class=\"no-results\">
                   No messages yet per selected period.
               </div>
            ";
        }
        // line 266
        echo "        </div>
        <!-- Posts END -->

        <!-- Controls -->
        <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 273
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 274
            echo "
                        ";
            // line 275
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 276
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 278
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 282
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("page" => $this->getContext($context, "page"), "username" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 285
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 290
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                </div>
            </div>
        </div>
        <!-- Controls END -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "NtechBoardBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 292,  612 => 290,  604 => 285,  597 => 282,  590 => 278,  586 => 276,  584 => 275,  581 => 274,  577 => 273,  568 => 266,  562 => 262,  560 => 261,  557 => 260,  547 => 256,  543 => 254,  539 => 252,  535 => 250,  529 => 246,  521 => 241,  517 => 240,  512 => 239,  510 => 238,  503 => 234,  499 => 233,  493 => 229,  489 => 227,  485 => 225,  483 => 224,  477 => 221,  473 => 219,  471 => 218,  468 => 217,  463 => 214,  459 => 212,  453 => 208,  445 => 202,  442 => 201,  440 => 200,  437 => 199,  435 => 198,  431 => 197,  427 => 196,  424 => 195,  422 => 194,  413 => 187,  411 => 186,  404 => 182,  397 => 178,  390 => 173,  382 => 171,  375 => 169,  368 => 168,  365 => 167,  357 => 165,  355 => 164,  348 => 163,  346 => 162,  341 => 159,  335 => 157,  328 => 155,  323 => 154,  316 => 152,  311 => 151,  309 => 150,  303 => 146,  299 => 144,  292 => 141,  290 => 140,  286 => 138,  282 => 137,  273 => 130,  266 => 128,  258 => 123,  251 => 120,  244 => 116,  240 => 114,  238 => 113,  235 => 112,  231 => 111,  218 => 100,  214 => 98,  210 => 96,  208 => 95,  201 => 91,  194 => 86,  190 => 84,  186 => 82,  184 => 81,  177 => 77,  170 => 72,  166 => 70,  162 => 68,  160 => 67,  153 => 63,  144 => 56,  140 => 54,  137 => 53,  133 => 51,  129 => 49,  125 => 47,  121 => 45,  119 => 44,  115 => 43,  109 => 41,  106 => 40,  104 => 39,  97 => 35,  91 => 31,  85 => 27,  78 => 24,  76 => 23,  68 => 17,  65 => 16,  58 => 13,  55 => 12,  49 => 9,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
