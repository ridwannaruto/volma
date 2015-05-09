<?php

/* CoreBundle:Authentication:register.html.twig */
class __TwigTemplate_d68241468b4aefdc397db5c396feb8ebda4fb9302288121912b88670b236a3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle:Base:base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle:Base:base.html.twig";
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
                
                <h2><i class=\"icon-locked\"></i> Sign Up Form</h2>
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
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mobile Number"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date of Birth"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                                <span class=\"help-inline\">";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'errors');
        echo "</span>
                            </div>
                        </div>


                        <div class=\"control-group primary\">
                                    ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Department"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "department"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Batch"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "batch"), 'errors');
        echo "</span>
                            </div>
                        </div>


                        <div class=\"control-group primary\">
                                    ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Pillar"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Skills"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                                    ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Password"));
        echo "

                            <div class=\"controls\">
                                    ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "</span>
                            </div>
                        </div>

                                    ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accesslevel"), 'widget', array("type" => "hidden"));
        echo "
                        <div class=\"control-group primary\">         
                                ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "   
                            <div class=\"controls\">
                                 ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span4")));
        echo "                           
                            </div></div>

                       ";
        // line 210
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
        return "CoreBundle:Authentication:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 151,  301 => 148,  293 => 143,  271 => 133,  265 => 130,  253 => 124,  239 => 116,  211 => 103,  165 => 78,  161 => 77,  155 => 74,  124 => 58,  110 => 50,  100 => 46,  77 => 34,  70 => 30,  832 => 417,  827 => 333,  823 => 306,  820 => 305,  807 => 280,  802 => 278,  797 => 276,  788 => 270,  780 => 265,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 382,  655 => 380,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 368,  620 => 366,  615 => 364,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 218,  441 => 216,  436 => 214,  425 => 209,  422 => 208,  419 => 207,  412 => 203,  395 => 195,  391 => 194,  388 => 193,  386 => 192,  383 => 191,  369 => 183,  364 => 181,  357 => 177,  353 => 176,  350 => 175,  348 => 171,  345 => 173,  332 => 166,  326 => 161,  315 => 158,  310 => 156,  306 => 154,  299 => 151,  292 => 148,  289 => 142,  282 => 145,  280 => 144,  275 => 134,  266 => 138,  260 => 137,  257 => 125,  250 => 134,  215 => 111,  207 => 106,  186 => 88,  160 => 67,  137 => 65,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 331,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 320,  652 => 317,  648 => 316,  640 => 374,  632 => 305,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 290,  594 => 289,  589 => 286,  585 => 352,  577 => 280,  568 => 273,  557 => 268,  552 => 266,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 232,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 216,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 194,  397 => 190,  385 => 190,  363 => 180,  358 => 168,  354 => 166,  349 => 164,  342 => 161,  340 => 160,  336 => 159,  331 => 156,  327 => 155,  319 => 159,  311 => 152,  300 => 139,  295 => 137,  291 => 135,  286 => 133,  279 => 130,  277 => 129,  256 => 119,  248 => 113,  237 => 108,  232 => 106,  228 => 104,  223 => 102,  216 => 99,  210 => 97,  205 => 94,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 55,  84 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 225,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 189,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 168,  322 => 101,  314 => 99,  312 => 157,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 146,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 135,  247 => 121,  241 => 77,  229 => 112,  220 => 70,  214 => 98,  177 => 65,  169 => 73,  140 => 55,  132 => 51,  128 => 59,  107 => 37,  61 => 18,  273 => 128,  269 => 139,  254 => 92,  243 => 88,  240 => 86,  238 => 125,  235 => 115,  230 => 120,  227 => 81,  224 => 117,  221 => 107,  219 => 76,  217 => 106,  208 => 68,  204 => 72,  179 => 86,  159 => 61,  143 => 68,  135 => 54,  119 => 42,  102 => 40,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  93 => 36,  88 => 40,  78 => 21,  38 => 4,  28 => 3,  201 => 93,  196 => 90,  183 => 87,  171 => 74,  166 => 72,  163 => 62,  158 => 67,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 42,  117 => 44,  105 => 40,  91 => 33,  62 => 23,  49 => 19,  26 => 6,  87 => 32,  46 => 12,  44 => 7,  31 => 4,  94 => 28,  89 => 20,  85 => 35,  75 => 29,  68 => 14,  56 => 9,  24 => 1,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 16,  69 => 25,  47 => 8,  40 => 8,  37 => 5,  22 => 1,  246 => 90,  157 => 68,  145 => 46,  139 => 56,  131 => 52,  123 => 44,  120 => 40,  115 => 39,  111 => 38,  108 => 36,  101 => 32,  98 => 38,  96 => 31,  83 => 31,  74 => 14,  66 => 28,  55 => 24,  52 => 14,  50 => 13,  43 => 8,  41 => 5,  35 => 5,  32 => 7,  29 => 2,  209 => 107,  203 => 98,  199 => 97,  193 => 94,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 83,  168 => 72,  164 => 59,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 63,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 49,  103 => 36,  99 => 35,  95 => 34,  92 => 41,  86 => 33,  82 => 37,  80 => 31,  73 => 19,  64 => 27,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
