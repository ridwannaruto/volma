<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_ce3efedfac54ebedec58c9e69fdf4a8f3412b090883babf621053c4304348f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoraspiritStyleBundle:Base:Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid\">
    <div class=\"row-fluid\">

        <noscript>
        <div class=\"alert alert-block span12\">
            <h4 class=\"alert-heading\">Warning!</h4>
            <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>
        <div id=\"content\" class=\"span2\">

        </div>
        <div id=\"content\" class=\"span7\">
            <!-- content starts -->

            <div class=\"row-fluid\">
                
                <h2><i class=\"icon-locked\"></i> Edit Profile</h2>
                        <hr>

                        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        
                                    ";
        // line 27
        if (array_key_exists("details", $context)) {
            // line 28
            echo "                        <br><br>
                        <div class=\"alert alert-info\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "html", null, true);
            echo "
                        </div>
                        <br><br>
                ";
        }
        // line 34
        echo "                        

                        <div class=\"control-group primary\">
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Username"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "First Name"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Last Name"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "</span>
                            </div>
                        </div>


                        <div class=\"control-group primary\">
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namewithinitials"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Name with Initials"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namewithinitials"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namewithinitials"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Gender"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nic"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "NIC Number"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nic"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nic"), 'errors');
        echo "</span>
                            </div>
                        </div>



                  

                        <div class=\"control-group primary\">
                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mobile Number"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date of Birth"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                                <span class=\"help-inline\">";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'errors');
        echo "</span>
                            </div>
                        </div>


                        <div class=\"control-group primary\">
                                    ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Department"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Batch"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'errors');
        echo "</span>
                            </div>
                        </div>



                        <div class=\"control-group primary\">
                                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Skills"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">         
                                ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "   
                            <div class=\"controls\">
                                 ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("label" => "Update", "attr" => array("class" => "btn btn-success span4")));
        echo "                           
                            </div></div>

                       ";
        // line 184
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    

                
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 184,  359 => 179,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 114,  195 => 96,  129 => 64,  97 => 45,  81 => 37,  225 => 111,  197 => 94,  185 => 88,  346 => 41,  261 => 112,  249 => 123,  233 => 102,  218 => 106,  213 => 105,  188 => 84,  178 => 80,  153 => 69,  104 => 36,  76 => 29,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 170,  622 => 165,  617 => 163,  609 => 158,  604 => 156,  591 => 151,  588 => 150,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 132,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 115,  502 => 114,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 379,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 127,  287 => 123,  272 => 117,  267 => 132,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 39,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 148,  293 => 143,  271 => 133,  265 => 113,  253 => 110,  239 => 116,  211 => 101,  165 => 78,  161 => 77,  155 => 74,  124 => 58,  110 => 50,  100 => 46,  77 => 34,  70 => 30,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 166,  620 => 164,  615 => 364,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 401,  412 => 203,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 191,  369 => 183,  364 => 181,  357 => 177,  353 => 63,  350 => 175,  348 => 174,  345 => 368,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 144,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 111,  207 => 106,  186 => 88,  160 => 64,  137 => 65,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 289,  589 => 286,  585 => 352,  577 => 280,  568 => 273,  557 => 137,  552 => 135,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 75,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 168,  354 => 166,  349 => 42,  342 => 171,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 152,  300 => 139,  295 => 145,  291 => 144,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 99,  210 => 97,  205 => 100,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 55,  84 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 225,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 160,  314 => 155,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 332,  247 => 330,  241 => 118,  229 => 112,  220 => 70,  214 => 98,  177 => 84,  169 => 73,  140 => 55,  132 => 51,  128 => 59,  107 => 41,  61 => 18,  273 => 135,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 115,  230 => 318,  227 => 81,  224 => 117,  221 => 107,  219 => 108,  217 => 106,  208 => 92,  204 => 72,  179 => 86,  159 => 76,  143 => 68,  135 => 54,  119 => 42,  102 => 36,  71 => 28,  67 => 31,  63 => 29,  59 => 25,  93 => 43,  88 => 40,  78 => 30,  38 => 4,  28 => 4,  201 => 99,  196 => 90,  183 => 87,  171 => 81,  166 => 72,  163 => 78,  158 => 72,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 46,  117 => 44,  105 => 49,  91 => 33,  62 => 26,  49 => 19,  26 => 6,  87 => 40,  46 => 12,  44 => 14,  31 => 5,  94 => 34,  89 => 41,  85 => 35,  75 => 29,  68 => 27,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 28,  69 => 25,  47 => 18,  40 => 14,  37 => 5,  22 => 1,  246 => 90,  157 => 68,  145 => 63,  139 => 53,  131 => 52,  123 => 44,  120 => 43,  115 => 54,  111 => 38,  108 => 37,  101 => 47,  98 => 35,  96 => 34,  83 => 31,  74 => 29,  66 => 28,  55 => 24,  52 => 21,  50 => 17,  43 => 9,  41 => 5,  35 => 5,  32 => 7,  29 => 2,  209 => 107,  203 => 90,  199 => 97,  193 => 92,  189 => 90,  187 => 84,  182 => 79,  176 => 64,  173 => 83,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 63,  141 => 64,  133 => 55,  130 => 46,  125 => 44,  122 => 59,  116 => 41,  112 => 43,  109 => 34,  106 => 49,  103 => 36,  99 => 39,  95 => 34,  92 => 41,  86 => 33,  82 => 37,  80 => 30,  73 => 19,  64 => 27,  60 => 25,  57 => 24,  54 => 10,  51 => 14,  48 => 20,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
