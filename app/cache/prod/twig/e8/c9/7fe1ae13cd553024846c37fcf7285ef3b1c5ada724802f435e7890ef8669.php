<?php

/* MoraspiritSiteBundle:Authentication:register.html.twig */
class __TwigTemplate_e8c97fe1ae13cd553024846c37fcf7285ef3b1c5ada724802f435e7890ef8669 extends Twig_Template
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
        return "MoraspiritSiteBundle:Authentication:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 210,  420 => 207,  415 => 205,  410 => 203,  403 => 199,  399 => 198,  393 => 195,  385 => 190,  381 => 189,  375 => 186,  367 => 181,  363 => 180,  357 => 177,  348 => 171,  344 => 170,  338 => 167,  330 => 162,  326 => 161,  320 => 158,  311 => 152,  307 => 151,  301 => 148,  293 => 143,  289 => 142,  283 => 139,  275 => 134,  271 => 133,  265 => 130,  257 => 125,  253 => 124,  247 => 121,  239 => 116,  235 => 115,  229 => 112,  221 => 107,  217 => 106,  211 => 103,  203 => 98,  199 => 97,  193 => 94,  183 => 87,  179 => 86,  173 => 83,  165 => 78,  161 => 77,  155 => 74,  147 => 69,  143 => 68,  137 => 65,  128 => 59,  124 => 58,  118 => 55,  110 => 50,  106 => 49,  100 => 46,  92 => 41,  88 => 40,  82 => 37,  77 => 34,  70 => 30,  66 => 28,  64 => 27,  59 => 25,  37 => 5,  34 => 4,  29 => 2,);
    }
}
