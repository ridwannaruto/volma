<?php

/* MoraspiritStyleBundle:Base:Base.html.twig */
class __TwigTemplate_f9b3f2b06489852c1b9b5dcaf71d142c322a2f7ac144a141ebcc6f801cf8e0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/img/favicon.ico"), "html", null, true);
        echo "\">
        <title>Bundle | Moraspirit</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Volunteer Management System for Moraspirit\">
        <meta name=\"author\" content=\"Ridwan Shariffdeen\">

        <!-- The styles -->
        <link id=\"bs-css\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/bootstrap-simplex.css"), "html", null, true);
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
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/bootstrap-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">
        <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">
        <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo " rel=\"stylesheet\">
        <link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/fullcalendar.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/fullcalendar.print.css"), "html", null, true);
        echo " rel='stylesheet'  media='print'>
        <link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/chosen.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/uniform.default.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/colorbox.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.cleditor.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.noty.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/noty_theme_default.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/elfinder.min.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/elfinder.theme.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.iphone.toggle.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/opa-icons.css"), "html", null, true);
        echo " rel='stylesheet'>
        <link href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/uploadify.css"), "html", null, true);
        echo " rel='stylesheet'>


        ";
        // line 41
        $this->displayBlock('css', $context, $blocks);
        // line 43
        echo "        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->


    </head>

    <body>
        <!-- messages -->
       ";
        // line 53
        if (array_key_exists("type", $context)) {
            // line 54
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 55
                echo "        <script type=\"text/javascript\">
            window.onload = function() {
                noty(jQuery.parseJSON('{\"text\":\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"error\"}'));

            }
        </script>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "S")) {
                // line 64
                echo "        <script type=\"text/javascript\">
            window.onload = function() {
                noty(jQuery.parseJSON('{\"text\":\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

            }
        </script>
        ";
            }
            // line 71
            echo "                            ";
        }
        // line 72
        echo "
        <!-- topbar starts -->
        <div class=\"navbar\">
            <div class=\"navbar-inner\">            \t
                <div class=\"container-fluid\">   
            
  <table width=\"100%\"><tr>
                            <td width=\"25%\"></td>
                            <td width=\"35%\">
                                <div class=\"top-nav center\">
                                 <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/img/header.png"), "html", null, true);
        echo "\"/>
                                </div><!--/.nav-collapse -->
                            </td>
                            <td width=\"22%\">
                    <div class=\"pull-right\" >
                                    ";
        // line 87
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "user"), "method")) {
            // line 88
            echo "                                
                        <div class=\"btn-group pull-right\" >
                            <a data-toggle=\"dropdown\" href=\"#\">
                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-user\"></i><span class=\"hidden-phone\"> &nbsp;&nbsp;";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "</span></button>

                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"ajax-link\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))), "html", null, true);
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Profile</span></a></li>
                               <li><a class=\"ajax-link\" href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("moraspirit_account");
            echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Account Settings</span></a></li>
                               
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("moraspirit_site_logout");
            echo "\">Logout</a></li>
                            </ul>
                        </div>
                         
                            <div class=\"btn-group pull-right\" >
                            <a data-toggle=\"dropdown\" href=\"#\">
                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-bell\"></i>&nbsp;&nbsp;Notifications<span class=\"hidden-phone\"> </span>\t</button>
                                
                            ";
            // line 107
            $context["noOfNotification"] = 0;
            // line 108
            echo "    \t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 109
                echo "    \t\t\t\t";
                $context["noOfNotification"] = ((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) + 1);
                // line 110
                echo "    \t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
    \t\t\t    ";
            // line 111
            if (((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) > 0)) {
                echo "    
\t\t\t    <span class=\"notification red\">";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")), "html", null, true);
                echo "</span>\t
\t\t\t    ";
            }
            // line 114
            echo "                            </a>
                            <ul class=\"dropdown-menu span6 center\">
                                <div class=\"row-fluid\">
                        ";
            // line 117
            if (((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")) != null)) {
                // line 118
                echo "                        <div class=\"box-content alerts\">
                            ";
                // line 119
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 120
                    echo "                             ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                        // line 121
                        echo "                                
                                <a href=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"><li>
\t\t\t\t
                                ";
                    } else {
                        // line 125
                        echo "                          
                                <a href=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"> <li>
                                
                                ";
                    }
                    // line 129
                    echo "                            
                           
                             ";
                    // line 131
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                        // line 132
                        echo "                            <div class=\"alert alert-error\">
                                <button url=\"";
                        // line 133
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                <div class = \"pull-right\">
                                ";
                        // line 135
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                </div>

                                <strong><h5>";
                        // line 138
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>
                                
                                ";
                        // line 140
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "
                                <br>
                            </div>

                            ";
                    }
                    // line 145
                    echo "
                              ";
                    // line 146
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                        // line 147
                        echo "                            <div class=\"alert alert-success\">
                                <button url=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
 \t\t\t\t<div class = \"pull-right\">
                                ";
                        // line 150
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                </div>
                                <strong><h5>";
                        // line 152
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>
                               
                                ";
                        // line 154
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>
                               
                               
                                
                            </div>

                            ";
                    }
                    // line 161
                    echo "
                              ";
                    // line 162
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                        // line 163
                        echo "                            <div class=\"alert alert-heading\">
                                <button url=\"";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                        // line 166
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                </div>
                                <strong><h5>";
                        // line 168
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>
                          
                                ";
                        // line 170
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>
                            </div>

                            ";
                    }
                    // line 174
                    echo "                              ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                        // line 175
                        echo "                            <div class=\"alert alert-info\">
                                <button url=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                        // line 178
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                </div>
                                <strong><h5>";
                        // line 180
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>
                         
                                ";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>

                            </div>

                            ";
                    }
                    // line 187
                    echo "\t\t\t\t</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                        </div>\t
                        ";
            } else {
                // line 191
                echo "                        <li align =\"center\">
                            no new notifications
                        </li></a>
                        ";
            }
            // line 195
            echo "

                    </div><!--/span-->
                                <li class=\"divider\"></li>
                                 <li align=\"center\"><a href=\"";
            // line 199
            echo $this->env->getExtension('routing')->getPath("moraspirit_allnotification");
            echo "\">see all</a></li>
                              
                            </ul>
                        </div>
                        
                                  ";
        } else {
            // line 205
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("moraspirit_site_login");
            echo "\"><button class=\"btn btn-mini btn-success\"> Login</button></a>

                                    ";
        }
        // line 208
        echo "                    </div>
                    
                    </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        
         ";
        // line 218
        $this->displayBlock('dashboard', $context, $blocks);
        // line 246
        echo "                <!-- left menu ends -->

        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
\t\t\t\t

                <noscript>
                <div class=\"alert alert-block span10\">
                    <h4 class=\"alert-heading\">Warning!</h4>
                    <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>
                
               
                ";
        // line 260
        $this->displayBlock('content', $context, $blocks);
        // line 262
        echo "                    
               <div class=\"modal hide fade\" id=\"comment\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Notification?                          \t\t
        </p>


    </div>
    <div class=\"modal-footer\">

        <form action=\"empty\" id = \"continue-form\" method=\"POST\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
        </form>

    </div>
</div>
\t\t
            </div>
        </div>
                
                ";
        // line 288
        $this->displayBlock('delete', $context, $blocks);
        // line 290
        echo "        
        <hr>
        <footer>
            <p class=\"pull-left\"><strong>Moraspirit </strong>&copy; 2014
        </footer>

    </div><!--/.fluid-container-->

    <!-- external javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 301
        $this->displayBlock('javascripts', $context, $blocks);
        // line 303
        echo "    <!-- jQuery -->
    <script src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
    <!-- jQuery UI -->
    <script src=";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
    <!-- transition / effect library -->
    <script src=";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
    <!-- alert enhancer library -->
    <script src=";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
    <!-- modal / dialog library -->
    <script src=";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
    <!-- custom dropdown library -->
    <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
    <!-- scrolspy library -->
    <script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
    <!-- library for creating tabs -->
    <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
    <!-- library for advanced tooltip -->
    <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
    <!-- popover effect library -->
    <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
    <!-- button enhancer library -->
    <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
    <!-- accordion library (optional, not used in demo) -->
    <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
    <!-- carousel slideshow library (optional, not used in demo) -->
    <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
    <!-- autocomplete library -->
    <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
    <!-- tour library -->
    <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
    <!-- library for cookie management -->
    <script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <!-- calander plugin -->
    <script src=";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
    <!-- data table plugin -->
    <script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

    <!-- chart libraries start -->
    <script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/excanvas.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
    <!-- chart libraries end -->

    <!-- select or dropdown enhancer -->
    <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
    <!-- checkbox, radio, and file input styler -->
    <script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
    <!-- plugin for gallery image view -->
    <script src=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
    <!-- rich text editor library -->
    <script src=";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
    <!-- notification plugin -->
    <script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.noty.js"), "html", null, true);
        echo "></script>
    <!-- file manager library -->
    <script src=";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
    <!-- star rating plugin -->
    <script src=";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
    <!-- for iOS style toggle switch -->
    <script src=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
    <!-- autogrowing textarea plugin -->
    <script src=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
    <!-- multiple file upload plugin -->
    <script src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src=";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.history.js"), "html", null, true);
        echo "></script>
    <!-- application script for Charisma demo -->
    <script src=";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/charisma.js"), "html", null, true);
        echo "></script>


</body>
</html>";
    }

    // line 41
    public function block_css($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 218
    public function block_dashboard($context, array $blocks = array())
    {
        // line 219
        echo "        
                <div class=\"span2 main-menu-span\">
                    
               
               
                   
                    <div class=\"well nav-collapse sidebar-nav\">
                         <p align=\"center\">
                        <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                        <br><br><strong>";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
                    </p>
                        <ul class=\"nav nav-tabs nav-stacked main-menu\">
                            
                            <li class=\"nav-header hidden-tablet\">Dashboard</li>
                            <li><a class=\"ajax-link\" href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("moraspirit_homepage");
        echo "\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>

                            <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Opportunities</span></a></li>
                           
                            <li><a class=\"ajax-link\" href=\"";
        // line 237
        echo $this->env->getExtension('routing')->getPath("moraspirit_project_index");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Projects</span></a></li>
                            <li><a class=\"ajax-link\" href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("moraspirit_task_index");
        echo "\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Tasks</span></a></li>
                            <li><a class=\"ajax-link\" href=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("moraspirit_members");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Spiriters</span></a></li>
                            
                            
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                        ";
    }

    // line 260
    public function block_content($context, array $blocks = array())
    {
        // line 261
        echo "\t\t\t";
    }

    // line 288
    public function block_delete($context, array $blocks = array())
    {
        // line 289
        echo "\t\t\t";
    }

    // line 301
    public function block_javascripts($context, array $blocks = array())
    {
        // line 302
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MoraspiritStyleBundle:Base:Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 302,  790 => 301,  786 => 289,  783 => 288,  779 => 261,  776 => 260,  765 => 239,  761 => 238,  757 => 237,  750 => 233,  742 => 228,  738 => 227,  728 => 219,  725 => 218,  721 => 42,  718 => 41,  709 => 371,  704 => 369,  699 => 367,  694 => 365,  689 => 363,  684 => 361,  679 => 359,  674 => 357,  669 => 355,  664 => 353,  659 => 351,  654 => 349,  647 => 345,  643 => 344,  639 => 343,  635 => 342,  631 => 341,  625 => 338,  620 => 336,  615 => 334,  610 => 332,  605 => 330,  600 => 328,  595 => 326,  590 => 324,  585 => 322,  580 => 320,  575 => 318,  570 => 316,  565 => 314,  560 => 312,  555 => 310,  550 => 308,  545 => 306,  540 => 304,  537 => 303,  535 => 301,  522 => 290,  520 => 288,  492 => 262,  490 => 260,  474 => 246,  472 => 218,  460 => 208,  453 => 205,  444 => 199,  438 => 195,  432 => 191,  428 => 189,  421 => 187,  413 => 182,  408 => 180,  403 => 178,  396 => 176,  393 => 175,  390 => 174,  383 => 170,  378 => 168,  373 => 166,  366 => 164,  363 => 163,  361 => 162,  358 => 161,  348 => 154,  343 => 152,  338 => 150,  331 => 148,  328 => 147,  326 => 146,  323 => 145,  315 => 140,  310 => 138,  304 => 135,  297 => 133,  294 => 132,  292 => 131,  288 => 129,  282 => 126,  279 => 125,  273 => 122,  270 => 121,  267 => 120,  263 => 119,  260 => 118,  258 => 117,  253 => 114,  248 => 112,  244 => 111,  236 => 110,  233 => 109,  228 => 108,  226 => 107,  215 => 99,  209 => 96,  205 => 95,  198 => 91,  193 => 88,  191 => 87,  183 => 82,  171 => 72,  168 => 71,  160 => 66,  156 => 64,  154 => 63,  151 => 62,  143 => 57,  139 => 55,  136 => 54,  134 => 53,  122 => 43,  120 => 41,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 23,  42 => 14,  32 => 7,  24 => 1,  85 => 35,  79 => 32,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  37 => 5,  34 => 4,  29 => 2,);
    }
}
