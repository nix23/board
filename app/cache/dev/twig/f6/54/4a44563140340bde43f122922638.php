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
                        <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
            echo "\">
                            ";
            // line 83
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar")) {
                // line 84
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ntechboard/img/uploads/" . $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "avatar"))), "html", null, true);
                echo "\"
                                     width=\"80\" height=\"80\" />
                            ";
            } else {
                // line 87
                echo "                                <div class=\"no-avatar\">No avatar</div>
                            ";
            }
            // line 89
            echo "                        </a>
                    </div>

                    <div class=\"center\">
                        <div class=\"top\">
                            ";
            // line 94
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 95
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "</a>
                                reposted
                                <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo "</a> post
                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 99
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "</a>
                                replied to
                                <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo "</a> post
                            ";
            } else {
                // line 103
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_profile", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo "</a> added new post
                            ";
            }
            // line 105
            echo "                        </div>

                        <div class=\"bottom\">
                            ";
            // line 108
            if ($this->getAttribute($this->getContext($context, "message"), "originalMessage")) {
                // line 109
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text"), "html", null, true);
                echo "
                                ";
                // line 110
                if ($this->getAttribute($this->getContext($context, "message"), "text")) {
                    // line 111
                    echo "                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                    echo " wrote: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                    echo "
                                ";
                }
                // line 113
                echo "                            ";
            } elseif ($this->getAttribute($this->getContext($context, "message"), "replyToMessage")) {
                // line 114
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "replyToMessage"), "text"), "html", null, true);
                echo "
                                <br>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " replied: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            } else {
                // line 117
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                echo " wrote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                echo "
                            ";
            }
            // line 119
            echo "                        </div>
                    </div>

                    <div class=\"right\">
                        <div class=\"label\">
                            ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoLabel"), "html", null, true);
            echo "
                        </div>

                        <div class=\"sublabel\">
                            ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "timeAgoSublabel"), "html", null, true);
            echo "
                        </div>
                    </div>

                    ";
            // line 132
            if (((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage")) || ($this->getAttribute($this->getContext($context, "message"), "replyToMessage") && (!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))))) {
                // line 136
                echo "                        <div class=\"separator\">
                        </div>

                        <div class=\"footer\">
                            <div class=\"follow-status\">
                                ";
                // line 141
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser"))) {
                    // line 142
                    echo "                                    <span onclick=\"ajax.process('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_followed_by_me_status", array("userId" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"))), "html", null, true);
                    echo "',
                                                                false,
                                                                'modal_no_confirmation')\" class=\"update-follow-status-";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "id"), "html", null, true);
                    echo "\">
                                        ";
                    // line 145
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isFollowedByLoggedUser")) {
                        // line 146
                        echo "                                            Unfollow
                                        ";
                    } else {
                        // line 148
                        echo "                                            Follow
                                        ";
                    }
                    // line 150
                    echo "                                    </span>
                                ";
                }
                // line 152
                echo "                            </div>

                            ";
                // line 154
                if (((!$this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "isCurrentLoggedUser")) && (!$this->getAttribute($this->getContext($context, "message"), "replyToMessage")))) {
                    // line 155
                    echo "                                <div class=\"repost\"
                                     data-original-message-text=\"";
                    // line 156
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "text")) : ($this->getAttribute($this->getContext($context, "message"), "text"))), "html", null, true);
                    echo "\"
                                     data-original-message-username=\"";
                    // line 157
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "user"), "username")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"))), "html", null, true);
                    echo "\"
                                     data-repost-url=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repost_message", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))), "redirectToRouteAfterRepost" => "myboard")), "html", null, true);
                    // line 159
                    echo "\">
                                    ";
                    // line 160
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 161
                        echo "                                        <span onclick=\"ajax.process('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_if_message_already_reposted", array("originalMessageId" => (($this->getAttribute($this->getContext($context, "message"), "originalMessage")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "message"), "originalMessage"), "id")) : ($this->getAttribute($this->getContext($context, "message"), "id"))))), "html", null, true);
                        // line 162
                        echo "',
                                                                    this,
                                                                    'modal_no_confirmation')\">
                                            Repost
                                        </span>
                                    ";
                    } else {
                        // line 168
                        echo "                                        <span onclick=\"alert('Please login to repost messages')\">
                                            Repost
                                        </span>
                                    ";
                    }
                    // line 172
                    echo "                                </div>
                            ";
                } else {
                    // line 174
                    echo "                                <div class=\"repost\">
                                </div>
                            ";
                }
                // line 177
                echo "
                            ";
                // line 178
                if ((!$this->getAttribute($this->getContext($context, "message"), "replyToMessage"))) {
                    // line 179
                    echo "                                <div class=\"replies-count\">
                                    <span class=\"highlight count\">
                                        ";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "repliesCount"), "html", null, true);
                    echo "
                                    </span>
                                    <span class=\"label\">
                                        ";
                    // line 184
                    if (($this->getAttribute($this->getContext($context, "message"), "repliesCount") == 1)) {
                        // line 185
                        echo "                                            Reply
                                        ";
                    } else {
                        // line 187
                        echo "                                            Replies
                                        ";
                    }
                    // line 189
                    echo "                                    </span>
                                </div>
                                <div class=\"toogle-replies\"
                                     data-action=\"show\"
                                     data-load-replies-url=\"";
                    // line 193
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("load_replies", array("messageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                    echo "\"
                                     onclick=\"html_tools.replies_list.toogle(";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
                    echo ", this)\">
                                    Show
                                </div>
                                <div class=\"add-reply\">
                                    ";
                    // line 198
                    if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                        // line 199
                        echo "                                        <span onclick=\"form_tools.message_response_form.load_reply_form('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reply_to_message", array("originalMessageId" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 200
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "user"), "username"), "html", null, true);
                        echo "',
                                                                                                        '";
                        // line 201
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "text"), "html", null, true);
                        echo "',
                                                                                                        this)\">
                                            Add reply
                                        </span>
                                    ";
                    } else {
                        // line 206
                        echo "                                        <span onclick=\"alert('Please login to reply to messages.')\">
                                            Add reply
                                        </span>
                                    ";
                    }
                    // line 210
                    echo "                                </div>
                            ";
                }
                // line 212
                echo "                        </div>
                    ";
            }
            // line 214
            echo "                </div>

                <div class=\"replies-wrapper\" id=\"replies-to-message-";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "id"), "html", null, true);
            echo "\" style=\"display: none\"></div>

                <div class=\"separator\"></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "
            ";
        // line 221
        if (twig_test_empty($this->getContext($context, "messages"))) {
            // line 222
            echo "               <div class=\"no-results\">
                   No messages yet per selected period.
               </div>
            ";
        }
        // line 226
        echo "        </div>

       <div class=\"controls\">
            <div class=\"pagination\">
                <div class=\"wrapper\">
                    ";
        // line 231
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 232
            echo "
                        ";
            // line 233
            if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                // line 234
                echo "                            <div class=\"page selected\">
                                <span class=\"number\">
                                    ";
                // line 236
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                </span>
                            </div>
                        ";
            } else {
                // line 240
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myboard_with_params", array("days" => $this->getContext($context, "daysCountCurrentValue"), "page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">
                                <div class=\"page active\">
                                    <span class=\"number\">
                                        ";
                // line 243
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "
                                    </span>
                                </div>
                            </a>
                        ";
            }
            // line 248
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
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
        return array (  553 => 250,  546 => 248,  538 => 243,  531 => 240,  524 => 236,  520 => 234,  518 => 233,  515 => 232,  511 => 231,  504 => 226,  498 => 222,  496 => 221,  493 => 220,  483 => 216,  479 => 214,  475 => 212,  471 => 210,  465 => 206,  457 => 201,  453 => 200,  448 => 199,  446 => 198,  439 => 194,  435 => 193,  429 => 189,  425 => 187,  421 => 185,  419 => 184,  413 => 181,  409 => 179,  407 => 178,  404 => 177,  399 => 174,  395 => 172,  389 => 168,  381 => 162,  378 => 161,  376 => 160,  373 => 159,  371 => 158,  367 => 157,  363 => 156,  360 => 155,  358 => 154,  354 => 152,  350 => 150,  346 => 148,  342 => 146,  340 => 145,  336 => 144,  330 => 142,  328 => 141,  321 => 136,  319 => 132,  312 => 128,  305 => 124,  298 => 119,  290 => 117,  283 => 115,  276 => 114,  273 => 113,  265 => 111,  263 => 110,  256 => 109,  254 => 108,  249 => 105,  241 => 103,  234 => 101,  226 => 99,  219 => 97,  211 => 95,  209 => 94,  202 => 89,  198 => 87,  191 => 84,  189 => 83,  185 => 82,  181 => 80,  177 => 79,  162 => 66,  156 => 65,  148 => 60,  141 => 57,  134 => 53,  130 => 51,  127 => 50,  123 => 49,  113 => 41,  106 => 39,  98 => 34,  91 => 31,  84 => 27,  80 => 25,  78 => 24,  75 => 23,  71 => 22,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
