<?php

/* CoreBundle:Base:base.html.twig */
class __TwigTemplate_17d8a6738a81e530ea7ee41bc63bcb45bf7b2e92bf9eb87a4a82989a7265875c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'additional_css' => array($this, 'block_additional_css'),
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
            'additional_javascripts' => array($this, 'block_additional_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/img/favicon.ico"), "html", null, true);
        echo "\">
    <title>Volma | Moraspirit</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Volunteer Management System for Moraspirit\">
    <meta name=\"author\" content=\"Ridwan Shariffdeen\">

    <!-- The styles -->
    <link id=\"bs-css\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap-simplex.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <style type=\"text/css\">
        body {
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/fullcalendar.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/fullcalendar.print.css"), "html", null, true);
        echo " rel='stylesheet' media='print'>
    <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/chosen.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/uniform.default.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/colorbox.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/jquery.cleditor.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/jquery.noty.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/noty_theme_default.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/elfinder.min.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/elfinder.theme.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/jquery.iphone.toggle.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/opa-icons.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/uploadify.css"), "html", null, true);
        echo " rel='stylesheet'>


    ";
        // line 42
        $this->displayBlock('additional_css', $context, $blocks);
        // line 44
        echo "    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->


</head>

<body>
<!-- messages -->
";
        // line 54
        if (array_key_exists("type", $context)) {
            // line 55
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 56
                echo "    <script type=\"text/javascript\">
        window.onload = function () {
            noty(jQuery.parseJSON('{\"text\":\"";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"error\"}'));

        }
    </script>
";
            }
            // line 63
            echo "
";
            // line 64
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "S")) {
                // line 65
                echo "    <script type=\"text/javascript\">
        window.onload = function () {
            noty(jQuery.parseJSON('{\"text\":\"";
                // line 67
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

        }
    </script>
";
            }
        }
        // line 73
        echo "
<!-- topbar starts -->
<div class=\"navbar\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\"
               data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>

            <table width=\"100%\">
                <tr>
                    <td width=\"5%\">
                        <img class=\"center\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/icon.png"), "html", null, true);
        echo " \" width=\"40px\"/>

                    </td>
                    <td width=\"64%\">
                        <div class=\"top-nav nav-collapse\">
                            <ul class=\"nav\">
                                <li>
                                    <form class=\"navbar-search pull-left\">
                                        <input placeholder=\"type your keyword to search\" class=\"search-query span7\"
                                               name=\"query\" type=\"text\">&nbsp;&nbsp;&nbsp;<i class=\"icon-search\"></i>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </td>
                    <td width=\"22%\">
                        <div class=\"pull-right\">
                            ";
        // line 106
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "user_id"), "method")) {
            // line 107
            echo "
                                <div class=\"btn-group pull-right\">
                                    <a data-toggle=\"dropdown\" href=\"#\">
                                        <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-user\"></i><span
                                                    class=\"hidden-phone\"> &nbsp;&nbsp;";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "</span>
                                        </button>

                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"ajax-link\"
                                               href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method"))), "html", null, true);
            echo "\"><i
                                                        class=\"icon-user\"></i><span
                                                        class=\"hidden-tablet\"> Profile</span></a></li>
                                        <li><a class=\"ajax-link\" href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("account");
            echo "\"><i
                                                        class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Account Settings</span></a>
                                        </li>

                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("auth_logout");
            echo "\">Logout</a></li>
                                    </ul>
                                </div>

                                <div class=\"btn-group pull-right\">
                                    <a data-toggle=\"dropdown\" href=\"#\">
                                        <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-bell\"></i>&nbsp;&nbsp;Notifications<span
                                                    class=\"hidden-phone\"> </span></button>

                                        ";
            // line 134
            $context["noOfNotification"] = 0;
            // line 135
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) ? $context["notificationList"] : $this->getContext($context, "notificationList")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 136
                echo "                                            ";
                $context["noOfNotification"] = ((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) + 1);
                // line 137
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                        ";
            if (((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) > 0)) {
                // line 139
                echo "                                            <span class=\"notification red\">";
                echo twig_escape_filter($this->env, (isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 141
            echo "                                    </a>
                                    <ul class=\"dropdown-menu span6 center\">
                                        <div class=\"row-fluid\">
                                            ";
            // line 144
            if (((isset($context["notificationList"]) ? $context["notificationList"] : $this->getContext($context, "notificationList")) != null)) {
                // line 145
                echo "                        <div class=\"box-content alerts\">
                            ";
                // line 146
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) ? $context["notificationList"] : $this->getContext($context, "notificationList")));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 147
                    echo "                                                ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                        // line 148
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_detail_notification", array("projectId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"><li>

                                                ";
                    } else {
                        // line 151
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_detail_notification", array("taskId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"> <li>

                                                ";
                    }
                    // line 154
                    echo "

                                                ";
                    // line 156
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                        // line 157
                        echo "                                                    <div class=\"alert alert-error\">
                                                        <button url=\"";
                        // line 158
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_see", array("notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"
                                                                id=\"";
                        // line 159
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\" type=\"button\"
                                                                class=\" close btn-comment\">×
                                                        </button>
                                                        <div class=\"pull-right\">
                                                            ";
                        // line 163
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                        </div>

                                                        <strong><h5>";
                        // line 166
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                        ";
                        // line 168
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "
                                                        <br>
                                                    </div>

                                                ";
                    }
                    // line 173
                    echo "
                                                ";
                    // line 174
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                        // line 175
                        echo "                                                    <div class=\"alert alert-success\">
                                                        <button url=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_see", array("notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"
                                                                id=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\" type=\"button\"
                                                                class=\" close btn-comment\">×
                                                        </button>
                                                        <div class=\"pull-right\">
                                                            ";
                        // line 181
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                        </div>
                                                        <strong><h5>";
                        // line 183
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                        ";
                        // line 185
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>


                                                    </div>

                                                ";
                    }
                    // line 191
                    echo "
                                                ";
                    // line 192
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                        // line 193
                        echo "                                                    <div class=\"alert alert-heading\">
                                                        <button url=\"";
                        // line 194
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_see", array("notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"
                                                                id=\"";
                        // line 195
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\" type=\"button\"
                                                                class=\" close btn-comment\">×
                                                        </button>
                                                        <div class=\"pull-right\">
                                                            ";
                        // line 199
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                        </div>
                                                        <strong><h5>";
                        // line 201
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                        ";
                        // line 203
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>
                                                    </div>

                                                ";
                    }
                    // line 207
                    echo "                                                ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                        // line 208
                        echo "                                                    <div class=\"alert alert-info\">
                                                        <button url=\"";
                        // line 209
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_see", array("notificationId" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"
                                                                id=\"";
                        // line 210
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\" type=\"button\"
                                                                class=\" close btn-comment\">×
                                                        </button>
                                                        <div class=\"pull-right\">
                                                            ";
                        // line 214
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                        </div>
                                                        <strong><h5>";
                        // line 216
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                        ";
                        // line 218
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>

                                                    </div>

                                                ";
                    }
                    // line 223
                    echo "                                                </li></a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "                        </div>\t
                        ";
            } else {
                // line 227
                echo "                        <li align =\"center\">
                            no new notifications
                        </li></a>
                        ";
            }
            // line 231
            echo "

                                        </div>
                                        <!--/span-->
                                        <li class=\"divider\"></li>
                                        <li align=\"center\"><a href=\"";
            // line 236
            echo $this->env->getExtension('routing')->getPath("allnotification");
            echo "\">see all</a></li>

                                    </ul>
                                </div>

                            ";
        } else {
            // line 242
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("auth_login");
            echo "\">
                                    <button class=\"btn btn-mini btn-success\"> Login</button>
                                </a>

                            ";
        }
        // line 247
        echo "                        </div>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- topbar ends -->

";
        // line 257
        $this->displayBlock('dashboard', $context, $blocks);
        // line 289
        echo "<!-- left menu ends -->

<div class=\"container-fluid\">
    <div class=\"row-fluid\">


        <noscript>
            <div class=\"alert alert-block span10\">
                <h4 class=\"alert-heading\">Warning!</h4>

                <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>


        ";
        // line 305
        $this->displayBlock('content', $context, $blocks);
        // line 307
        echo "
        <div class=\"modal hide fade\" id=\"comment\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                <h3>Confirm</h3>
            </div>
            <div class=\"modal-body\">
                <p align=\"center\">Are you sure you want to delete this Notification?
                </p>


            </div>
            <div class=\"modal-footer\">

                <form action=\"empty\" id=\"continue-form\" method=\"POST\">
                    <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\"/>
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
                </form>

            </div>
        </div>

    </div>
</div>

";
        // line 333
        $this->displayBlock('delete', $context, $blocks);
        // line 335
        echo "
<hr>
<footer>
    <p class=\"pull-left\"><strong>Moraspirit </strong>&copy; 2014
</footer>

</div><!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery -->
<script src=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
<!-- jQuery UI -->
<script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
<!-- transition / effect library -->
<script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
<!-- alert enhancer library -->
<script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
<!-- modal / dialog library -->
<script src=";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
<!-- custom dropdown library -->
<script src=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
<!-- scrolspy library -->
<script src=";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
<!-- library for creating tabs -->
<script src=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
<!-- library for advanced tooltip -->
<script src=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
<!-- popover effect library -->
<script src=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
<!-- button enhancer library -->
<script src=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
<!-- accordion library (optional, not used in demo) -->
<script src=";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src=";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
<!-- autocomplete library -->
<script src=";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
<!-- tour library -->
<script src=";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
<!-- library for cookie management -->
<script src=";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
<!-- calander plugin -->
<script src=";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
<!-- data table plugin -->
<script src=";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

<!-- chart libraries start -->
<script src=";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/excanvas.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src=";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
<!-- checkbox, radio, and file input styler -->
<script src=";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
<!-- plugin for gallery image view -->
<script src=";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
<!-- rich text editor library -->
<script src=";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
<!-- notification plugin -->
<script src=";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.noty.js"), "html", null, true);
        echo "></script>
<!-- file manager library -->
<script src=";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
<!-- star rating plugin -->
<script src=";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
<!-- for iOS style toggle switch -->
<script src=";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
<!-- autogrowing textarea plugin -->
<script src=";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
<!-- multiple file upload plugin -->
<script src=";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.history.js"), "html", null, true);
        echo "></script>
<!-- application script for Charisma demo -->
<script src=";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/charisma.js"), "html", null, true);
        echo "></script>

";
        // line 417
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 419
        echo "

</body>
</html>";
    }

    // line 42
    public function block_additional_css($context, array $blocks = array())
    {
        // line 43
        echo "    ";
    }

    // line 257
    public function block_dashboard($context, array $blocks = array())
    {
        // line 258
        echo "
    <div class=\"span2 main-menu-span\">


        <div class=\"well nav-collapse sidebar-nav\">
            <p align=\"center\">
                <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                <br><br><strong>";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
            </p>
            <ul class=\"nav nav-tabs nav-stacked main-menu\">

                <li class=\"nav-header hidden-tablet\">Dashboard</li>
                <li><a class=\"ajax-link\" href=\"";
        // line 270
        echo $this->env->getExtension('routing')->getPath("user_home");
        echo "\"><i class=\"icon-home\"></i><span
                                class=\"hidden-tablet\"> Home</span></a></li>

                <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span
                                class=\"hidden-tablet\"> Opportunities</span></a></li>

                <li><a class=\"ajax-link\" href=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("project_index");
        echo "\"><i class=\"icon-edit\"></i><span
                                class=\"hidden-tablet\"> Projects</span></a></li>
                <li><a class=\"ajax-link\" href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("task_index");
        echo "\"><i class=\"icon-list-alt\"></i><span
                                class=\"hidden-tablet\"> Tasks</span></a></li>
                <li><a class=\"ajax-link\" href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("members");
        echo "\"><i class=\"icon-user\"></i><span
                                class=\"hidden-tablet\"> Spiriters</span></a></li>


            </ul>
        </div>
        <!--/.well -->
    </div><!--/span-->
";
    }

    // line 305
    public function block_content($context, array $blocks = array())
    {
        // line 306
        echo "        ";
    }

    // line 333
    public function block_delete($context, array $blocks = array())
    {
    }

    // line 417
    public function block_additional_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  832 => 417,  827 => 333,  823 => 306,  820 => 305,  807 => 280,  802 => 278,  797 => 276,  788 => 270,  780 => 265,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  670 => 386,  666 => 385,  660 => 382,  655 => 380,  650 => 378,  645 => 376,  640 => 374,  635 => 372,  630 => 370,  625 => 368,  620 => 366,  615 => 364,  610 => 362,  605 => 360,  600 => 358,  595 => 356,  590 => 354,  585 => 352,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  530 => 307,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  461 => 225,  454 => 223,  446 => 218,  441 => 216,  436 => 214,  429 => 210,  425 => 209,  422 => 208,  419 => 207,  412 => 203,  407 => 201,  402 => 199,  395 => 195,  391 => 194,  388 => 193,  386 => 192,  383 => 191,  374 => 185,  369 => 183,  364 => 181,  357 => 177,  353 => 176,  350 => 175,  348 => 174,  345 => 173,  337 => 168,  332 => 166,  326 => 163,  319 => 159,  315 => 158,  312 => 157,  310 => 156,  306 => 154,  299 => 151,  292 => 148,  289 => 147,  285 => 146,  282 => 145,  280 => 144,  275 => 141,  269 => 139,  266 => 138,  260 => 137,  257 => 136,  252 => 135,  250 => 134,  238 => 125,  230 => 120,  224 => 117,  215 => 111,  209 => 107,  207 => 106,  186 => 88,  169 => 73,  160 => 67,  156 => 65,  154 => 64,  151 => 63,  143 => 58,  139 => 56,  137 => 55,  135 => 54,  123 => 44,  121 => 42,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  42 => 14,  32 => 7,  24 => 1,);
    }
}
