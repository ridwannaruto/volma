<?php

/* CoreBundle:Base:base2.html.twig */
class __TwigTemplate_33716490ebdbad9b8fe8586f7f1061ddf6d8920d5dd4f188be6097a6b458cd7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageInfo' => array($this, 'block_pageInfo'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pageInfo', $context, $blocks);
        // line 4
        echo "<html>
<head>

    <!------------------Meta Data ------------------------->
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Volunteer Management System for National Volunteer Secretariat\">
    <meta name=\"author\" content=\"Ridwan Shariffdeen\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-------------------------StyleSheets------------------->
    <link id=\"bs-css\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-simplex.css"), "html", null, true);
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/fullcalendar.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/fullcalendar.print.css"), "html", null, true);
        echo " rel='stylesheet'  media='print'>
    <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/chosen.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/uniform.default.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/colorbox.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.cleditor.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.noty.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/noty_theme_default.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/elfinder.min.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/elfinder.theme.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.iphone.toggle.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/opa-icons.css"), "html", null, true);
        echo " rel='stylesheet'>
    <link href=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/uploadify.css"), "html", null, true);
        echo " rel='stylesheet'>

    <!--Additional Styles Sheets for extending pages-->
    ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "
</head>
<body>

<!---------------Content --------------------------------->
<!-- messages -->

";
        // line 53
        if (array_key_exists("type", $context)) {
            // line 54
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 55
                echo "    <script type=\"text/javascript\">
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
                echo "    <script type=\"text/javascript\">
        window.onload = function() {
            noty(jQuery.parseJSON('{\"text\":\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

        }
    </script>
";
            }
        }
        // line 72
        echo "
<!-- topbar starts -->
";
        // line 74
        $this->displayBlock('header', $context, $blocks);
        // line 234
        $this->displayBlock('dashboard', $context, $blocks);
        // line 273
        echo "
<!-- left menu ends -->

<div class=\"container-fluid\">
    <div class=\"row-fluid\">


        <noscript>
            <div class=\"alert alert-block span10\">
                <h4 class=\"alert-heading\">Warning!</h4>
                <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>


        ";
        // line 288
        $this->displayBlock('content', $context, $blocks);
        // line 290
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

                <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                    <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
                </form>

            </div>
        </div>

    </div>
</div>

";
        // line 316
        $this->displayBlock('delete', $context, $blocks);
        // line 318
        echo "
<hr>
<footer>
    <p class=\"center\"><strong>National Volunteering Secretariat, Sri Lanka </strong>&copy; 2014
</footer>

</div>

<!------------------------JavaScripts --------------------------------!>
   <!-- jQuery -->
<script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
<!-- jQuery UI -->
<script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
<!-- transition / effect library -->
<script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
<!-- alert enhancer library -->
<script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
<!-- modal / dialog library -->
<script src=";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
<!-- custom dropdown library -->
<script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
<!-- scrolspy library -->
<script src=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
<!-- library for creating tabs -->
<script src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
<!-- library for advanced tooltip -->
<script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
<!-- popover effect library -->
<script src=";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
<!-- button enhancer library -->
<script src=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
<!-- accordion library (optional, not used in demo) -->
<script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
<!-- autocomplete library -->
<script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
<!-- tour library -->
<script src=";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
<!-- library for cookie management -->
<script src=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
<!-- calander plugin -->
<script src=";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
<!-- data table plugin -->
<script src=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

<!-- chart libraries start -->
<script src=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/excanvas.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src=";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
<!-- checkbox, radio, and file input styler -->
<script src=";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
<!-- plugin for gallery image view -->
<script src=";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
<!-- rich text editor library -->
<script src=";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
<!-- notification plugin -->
<script src=";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.noty.js"), "html", null, true);
        echo "></script>
<!-- file manager library -->
<script src=";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
<!-- star rating plugin -->
<script src=";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
<!-- for iOS style toggle switch -->
<script src=";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
<!-- autogrowing textarea plugin -->
<script src=";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
<!-- multiple file upload plugin -->
<script src=";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.history.js"), "html", null, true);
        echo "></script>
<!-- application script for Charisma demo -->
<script src=";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/charisma.js"), "html", null, true);
        echo "></script>

<!--Additional Java Scripts for extending pages-->
";
        // line 398
        $this->displayBlock('javascripts', $context, $blocks);
        // line 401
        echo "</body>
</html>
";
    }

    // line 1
    public function block_pageInfo($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "National Volunteer Hub";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 45
        echo "    ";
    }

    // line 74
    public function block_header($context, array $blocks = array())
    {
        // line 75
        echo "    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">


                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>

                <table width=\"100%\"><tr>
                        <td width=\"5%\">
                            <img class=\"center\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/icon.png"), "html", null, true);
        echo " \" width = \"40px\"/>

                        </td>
                        <td width=\"64%\">
                            <div class=\"top-nav nav-collapse\">
                                <ul class=\"nav\">
                                    <li>
                                        <form class=\"navbar-search pull-left\">
                                            <input placeholder=\"type your keyword to search\" class=\"search-query span7\" name=\"query\" type=\"text\">&nbsp;&nbsp;&nbsp;<i class=\"icon-search\"></i>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </td>
                        <td width=\"22%\">
                            <div class=\"pull-right\" >
                                ";
        // line 105
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 106
            echo "
                                    <div class=\"btn-group pull-right\" >
                                        <a data-toggle=\"dropdown\" href=\"#\">
                                            <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-user\"></i><span class=\"hidden-phone\"> &nbsp;&nbsp;";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span></button>

                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                                            <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Change Password</a></li>
                                            <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Account Settings</a></li>
                                        </ul>

                                    </div>

                                    ";
            // line 120
            if (array_key_exists("Notifications", $context)) {
                // line 121
                echo "                                        <div class=\"btn-group pull-right\" >
                                            <a data-toggle=\"dropdown\" href=\"#\">
                                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-bell\"></i> Notifications<span class=\"hidden-phone\"> </span>\t</button>

                                                ";
                // line 125
                $context["noOfNotification"] = 0;
                // line 126
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 127
                    echo "                                                    ";
                    $context["noOfNotification"] = ((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) + 1);
                    // line 128
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                                ";
                if (((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) > 0)) {
                    // line 130
                    echo "                                                    <span class=\"notification red\">";
                    echo twig_escape_filter($this->env, (isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")), "html", null, true);
                    echo "</span>
                                                ";
                }
                // line 132
                echo "                                            </a>
                                            <ul class=\"dropdown-menu span6 center\">
                                                <div class=\"row-fluid\">
                                                    ";
                // line 135
                if (((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")) != null)) {
                    // line 136
                    echo "                                                        <div class=\"box-content alerts\">
                                                            ";
                    // line 137
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                        // line 138
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                            // line 139
                            echo "
                                                            <a href=\"";
                            // line 140
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\"><li>

                                                        ";
                        } else {
                            // line 143
                            echo "
                                                            <a href=\"";
                            // line 144
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\"> <li>

                                                        ";
                        }
                        // line 147
                        echo "

                                                        ";
                        // line 149
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                            // line 150
                            echo "                                                            <div class=\"alert alert-error\">
                                                                <button url=\"";
                            // line 151
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                <div class = \"pull-right\">
                                                                    ";
                            // line 153
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                </div>

                                                                <strong><h5>";
                            // line 156
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                ";
                            // line 158
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "
                                                                <br>
                                                            </div>

                                                        ";
                        }
                        // line 163
                        echo "
                                                        ";
                        // line 164
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                            // line 165
                            echo "                                                            <div class=\"alert alert-success\">
                                                                <button url=\"";
                            // line 166
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                <div class = \"pull-right\">
                                                                    ";
                            // line 168
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                </div>
                                                                <strong><h5>";
                            // line 170
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                ";
                            // line 172
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>



                                                            </div>

                                                        ";
                        }
                        // line 179
                        echo "
                                                        ";
                        // line 180
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                            // line 181
                            echo "                                                            <div class=\"alert alert-heading\">
                                                                <button url=\"";
                            // line 182
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                <div class = \"pull-right\">
                                                                    ";
                            // line 184
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                </div>
                                                                <strong><h5>";
                            // line 186
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                ";
                            // line 188
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>
                                                            </div>

                                                        ";
                        }
                        // line 192
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                            // line 193
                            echo "                                                            <div class=\"alert alert-info\">
                                                                <button url=\"";
                            // line 194
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                <div class = \"pull-right\">
                                                                    ";
                            // line 196
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                </div>
                                                                <strong><h5>";
                            // line 198
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                ";
                            // line 200
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>

                                                            </div>

                                                        ";
                        }
                        // line 205
                        echo "                                                        </li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo "                                                        </div>
                                                    ";
                } else {
                    // line 209
                    echo "                                                        <li align =\"center\">
                                                            no new notifications
                                                        </li></a>
                                                    ";
                }
                // line 213
                echo "

                                                </div><!--/span-->
                                                <li class=\"divider\"></li>
                                                <li align=\"center\"><a href=\"";
                // line 217
                echo $this->env->getExtension('routing')->getPath("ridwan_allnotification");
                echo "\">see all</a></li>

                                            </ul>
                                        </div>
                                    ";
            }
            // line 222
            echo "
                                ";
        }
        // line 224
        echo "                            </div>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- topbar ends -->
";
    }

    // line 234
    public function block_dashboard($context, array $blocks = array())
    {
        // line 235
        echo "
    <div class=\"span2 main-menu-span\">
        <div class=\"well nav-collapse sidebar-nav\">
            <p align=\"center\">
                ";
        // line 239
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 240
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                ";
        } else {
            // line 242
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                ";
        }
        // line 244
        echo "                <br><br><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
            </p>
            <ul class=\"nav nav-tabs nav-stacked main-menu\">

                ";
        // line 248
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "ADMINISTRATOR")) {
            // line 249
            echo "
                    <li class=\"nav-header hidden-tablet\">Dashboard</li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Special 1</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Special 2</span></a></li>
                ";
        }
        // line 254
        echo "
                <li class=\"nav-header hidden-tablet\">Dashboard</li>
                <li><a class=\"ajax-link\" href=\"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("ridwan_site_home");
        echo "\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>
                <li><a class=\"ajax-link\" href=\"";
        // line 257
        echo $this->env->getExtension('routing')->getPath("ridwan_opportunity_index");
        echo "\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Opportunities</span></a></li>

                ";
        // line 259
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "ADMINISTRATOR") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "NVS"))) {
            // line 260
            echo "                    <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("ridwan_opportunity_assignment_index");
            echo "\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Assignments</span></a></li>
                    <li><a class=\"ajax-link\" href=\"";
            // line 261
            echo $this->env->getExtension('routing')->getPath("ridwan_admin_users");
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Users</span></a></li>
                    <li><a class=\"ajax-link\" href=\"";
            // line 262
            echo $this->env->getExtension('routing')->getPath("isuru_stat_homepage");
            echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Statistics</span></a></li>
                ";
        } else {
            // line 264
            echo "                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Resources</span></a></li>

                ";
        }
        // line 267
        echo "

            </ul>
        </div><!--/.well -->
    </div><!--/span-->
";
    }

    // line 288
    public function block_content($context, array $blocks = array())
    {
        // line 289
        echo "        ";
    }

    // line 316
    public function block_delete($context, array $blocks = array())
    {
    }

    // line 398
    public function block_javascripts($context, array $blocks = array())
    {
        // line 399
        echo "
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Base:base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 170,  622 => 165,  617 => 163,  609 => 158,  604 => 156,  591 => 151,  588 => 150,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 132,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 115,  502 => 114,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 379,  366 => 377,  361 => 375,  356 => 373,  333 => 365,  317 => 358,  302 => 352,  297 => 350,  287 => 346,  272 => 340,  267 => 338,  262 => 336,  242 => 328,  200 => 290,  198 => 288,  181 => 273,  114 => 39,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 354,  301 => 148,  293 => 143,  271 => 133,  265 => 130,  253 => 124,  239 => 116,  211 => 103,  165 => 78,  161 => 77,  155 => 62,  124 => 58,  110 => 38,  100 => 46,  77 => 34,  70 => 28,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 166,  620 => 164,  615 => 364,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 401,  412 => 203,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 191,  369 => 183,  364 => 181,  357 => 177,  353 => 176,  350 => 175,  348 => 171,  345 => 368,  332 => 166,  326 => 161,  315 => 158,  310 => 156,  306 => 154,  299 => 151,  292 => 348,  289 => 142,  282 => 344,  280 => 144,  275 => 134,  266 => 138,  260 => 137,  257 => 334,  250 => 134,  215 => 111,  207 => 106,  186 => 88,  160 => 64,  137 => 65,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 289,  589 => 286,  585 => 352,  577 => 280,  568 => 273,  557 => 137,  552 => 135,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 75,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 180,  358 => 168,  354 => 166,  349 => 369,  342 => 161,  340 => 160,  336 => 159,  331 => 156,  327 => 362,  319 => 159,  311 => 152,  300 => 139,  295 => 137,  291 => 135,  286 => 133,  279 => 130,  277 => 342,  256 => 119,  248 => 113,  237 => 108,  232 => 106,  228 => 316,  223 => 102,  216 => 99,  210 => 97,  205 => 94,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 40,  84 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 225,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 367,  337 => 366,  322 => 360,  314 => 99,  312 => 356,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 146,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 332,  247 => 330,  241 => 77,  229 => 112,  220 => 70,  214 => 98,  177 => 74,  169 => 73,  140 => 55,  132 => 51,  128 => 44,  107 => 37,  61 => 18,  273 => 128,  269 => 139,  254 => 92,  243 => 88,  240 => 86,  238 => 125,  235 => 115,  230 => 318,  227 => 81,  224 => 117,  221 => 107,  219 => 76,  217 => 106,  208 => 68,  204 => 72,  179 => 234,  159 => 61,  143 => 55,  135 => 54,  119 => 42,  102 => 36,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  93 => 36,  88 => 40,  78 => 30,  38 => 4,  28 => 3,  201 => 93,  196 => 90,  183 => 87,  171 => 74,  166 => 72,  163 => 62,  158 => 63,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 42,  117 => 44,  105 => 40,  91 => 33,  62 => 26,  49 => 19,  26 => 6,  87 => 32,  46 => 12,  44 => 14,  31 => 4,  94 => 34,  89 => 20,  85 => 35,  75 => 29,  68 => 14,  56 => 9,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 16,  69 => 25,  47 => 8,  40 => 13,  37 => 5,  22 => 1,  246 => 90,  157 => 68,  145 => 46,  139 => 53,  131 => 52,  123 => 44,  120 => 40,  115 => 39,  111 => 38,  108 => 36,  101 => 32,  98 => 35,  96 => 31,  83 => 31,  74 => 29,  66 => 27,  55 => 24,  52 => 14,  50 => 17,  43 => 8,  41 => 5,  35 => 5,  32 => 7,  29 => 4,  209 => 107,  203 => 98,  199 => 97,  193 => 94,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 72,  168 => 72,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 57,  144 => 63,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 34,  106 => 37,  103 => 36,  99 => 35,  95 => 34,  92 => 41,  86 => 32,  82 => 31,  80 => 31,  73 => 19,  64 => 27,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
