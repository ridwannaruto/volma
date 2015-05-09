<?php

/* CoreBundle:Base:basic2.html.twig */
class __TwigTemplate_9628014e647ccadadce0cca2945617d702a0c28632e2d6a0296b048d9ced32f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t
\t<meta charset=\"utf-8\">
           <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/img/favicon.ico"), "html", null, true);
        echo "\">
\t
\t<title>Volma</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"Volunteer Management System\">
\t<meta name=\"author\" content=\"Ridwan Shariffdeen\">
        
\t<!-- The style -->
\t<link id=\"bs-css\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/bootstrap-simplex.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t<style type=\"text/css\">
\t  body {
\t\tpadding-bottom: 40px;
\t  }
\t  .sidebar-nav {
\t\tpadding: 9px 0;
\t  }
\t</style>
\t<link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/bootstrap-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t<link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t<link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t<link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/fullcalendar.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/fullcalendar.print.css"), "html", null, true);
        echo " rel='stylesheet'  media='print'>
\t<link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/chosen.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/uniform.default.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/colorbox.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.cleditor.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.noty.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/noty_theme_default.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/elfinder.min.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/elfinder.theme.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/jquery.iphone.toggle.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/opa-icons.css"), "html", null, true);
        echo " rel='stylesheet'>
\t<link href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/css/uploadify.css"), "html", null, true);
        echo " rel='stylesheet'>


        ";
        // line 41
        $this->displayBlock('css', $context, $blocks);
        // line 43
        echo "\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- The fav icon -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/img/favicon.png"), "html", null, true);
        echo "\">
\t\t
</head>

<script>
        FB.init({
           // appId      : '878518675507348',
            cookie     : true,  // enable cookies to allow the server to access
            // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.0' // use version 2.0
        });
</script>
<body>
";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
<!-- external javascript
\t================================================== -->
\t<!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "\t<!-- jQuery -->
\t<script src=";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
\t<!-- jQuery UI -->
\t<script src=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
\t<!-- transition / effect library -->
\t<script src=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
\t<!-- alert enhancer library -->
\t<script src=";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
\t<!-- modal / dialog library -->
\t<script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
\t<!-- custom dropdown library -->
\t<script src=";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
\t<!-- scrolspy library -->
\t<script src=";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
\t<!-- library for creating tabs -->
\t<script src=";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
\t<!-- library for advanced tooltip -->
\t<script src=";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
\t<!-- popover effect library -->
\t<script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
\t<!-- button enhancer library -->
\t<script src=";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
\t<!-- accordion library (optional, not used in demo) -->
\t<script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
\t<!-- carousel slideshow library (optional, not used in demo) -->
\t<script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
\t<!-- autocomplete library -->
\t<script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
\t<!-- tour library -->
\t<script src=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
\t<!-- library for cookie management -->
\t<script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
\t<!-- calander plugin -->
\t<script src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
\t<!-- data table plugin -->
\t<script src=";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

\t<!-- chart libraries start -->
\t<script src=";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/excanvas.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
\t<!-- chart libraries end -->

\t<!-- select or dropdown enhancer -->
\t<script src=";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
\t<!-- checkbox, radio, and file input styler -->
\t<script src=";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
\t<!-- plugin for gallery image view -->
\t<script src=";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
\t<!-- rich text editor library -->
\t<script src=";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
\t<!-- notification plugin -->
\t<script src=";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.noty.js"), "html", null, true);
        echo "></script>
\t<!-- file manager library -->
\t<script src=";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
\t<!-- star rating plugin -->
\t<script src=";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
\t<!-- for iOS style toggle switch -->
\t<script src=";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
\t<!-- autogrowing textarea plugin -->
\t<script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
\t<!-- multiple file upload plugin -->
\t<script src=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
\t<!-- history.js for cross-browser state change on ajax -->
\t<script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/jquery.history.js"), "html", null, true);
        echo "></script>
\t<!-- application script for Charisma demo -->
\t<script src=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/charisma.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/fblogin.js"), "html", null, true);
        echo "></script>
    <script src=\"https://apis.google.com/js/plusone.js\"></script>
    <script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/js/gplus.js"), "html", null, true);
        echo "></script>

</body>
</html>
";
    }

    // line 41
    public function block_css($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "    ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "        ";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Base:basic2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 41,  261 => 112,  249 => 109,  233 => 102,  218 => 96,  213 => 94,  188 => 84,  178 => 80,  153 => 69,  104 => 36,  76 => 29,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 170,  622 => 165,  617 => 163,  609 => 158,  604 => 156,  591 => 151,  588 => 150,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 132,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 115,  502 => 114,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 379,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 127,  287 => 123,  272 => 117,  267 => 338,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 39,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 148,  293 => 143,  271 => 133,  265 => 113,  253 => 110,  239 => 116,  211 => 103,  165 => 78,  161 => 77,  155 => 71,  124 => 58,  110 => 38,  100 => 35,  77 => 34,  70 => 28,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 166,  620 => 164,  615 => 364,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 401,  412 => 203,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 191,  369 => 183,  364 => 181,  357 => 177,  353 => 63,  350 => 175,  348 => 171,  345 => 368,  332 => 141,  326 => 161,  315 => 158,  310 => 156,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 144,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 111,  207 => 106,  186 => 88,  160 => 64,  137 => 65,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 289,  589 => 286,  585 => 352,  577 => 280,  568 => 273,  557 => 137,  552 => 135,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 75,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 168,  354 => 166,  349 => 42,  342 => 161,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 152,  300 => 139,  295 => 137,  291 => 135,  286 => 133,  279 => 130,  277 => 119,  256 => 119,  248 => 113,  237 => 108,  232 => 106,  228 => 100,  223 => 98,  216 => 99,  210 => 97,  205 => 94,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 41,  84 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 225,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 137,  314 => 99,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 146,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 332,  247 => 330,  241 => 77,  229 => 112,  220 => 70,  214 => 98,  177 => 74,  169 => 73,  140 => 55,  132 => 51,  128 => 49,  107 => 37,  61 => 18,  273 => 128,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 115,  230 => 318,  227 => 81,  224 => 117,  221 => 107,  219 => 76,  217 => 106,  208 => 92,  204 => 72,  179 => 234,  159 => 61,  143 => 55,  135 => 54,  119 => 42,  102 => 36,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  93 => 36,  88 => 32,  78 => 30,  38 => 4,  28 => 3,  201 => 93,  196 => 90,  183 => 82,  171 => 74,  166 => 72,  163 => 74,  158 => 72,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 42,  117 => 44,  105 => 40,  91 => 33,  62 => 26,  49 => 19,  26 => 6,  87 => 32,  46 => 12,  44 => 14,  31 => 4,  94 => 34,  89 => 20,  85 => 35,  75 => 29,  68 => 27,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 28,  69 => 25,  47 => 8,  40 => 14,  37 => 5,  22 => 1,  246 => 90,  157 => 68,  145 => 63,  139 => 53,  131 => 52,  123 => 44,  120 => 43,  115 => 39,  111 => 38,  108 => 37,  101 => 32,  98 => 35,  96 => 34,  83 => 31,  74 => 29,  66 => 27,  55 => 24,  52 => 23,  50 => 17,  43 => 8,  41 => 5,  35 => 5,  32 => 7,  29 => 6,  209 => 107,  203 => 90,  199 => 97,  193 => 86,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 78,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 65,  144 => 63,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 38,  109 => 34,  106 => 37,  103 => 36,  99 => 35,  95 => 34,  92 => 33,  86 => 32,  82 => 31,  80 => 30,  73 => 19,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
