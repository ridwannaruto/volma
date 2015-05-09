<?php

/* NewsBundle:News:news.html.twig */
class __TwigTemplate_e0adf51a899bba9c9fe75de095808b1c3ff4636eba1fa4547ddb9fbe2be9d78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/slider/engine1/style.css"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/slider/engine1/jquery.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container-fluid\">
    
        <noscript>
        <div class=\"alert alert-block span12\">
            <h4 class=\"alert-heading\">Warning!</h4>
            <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>
        <div id=\"content\" class=\"span10\">
            <!-- content starts -->
            <div class=\"row-fluid\">

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Cooperate Development"));
        echo "\">Cooperate</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cooperate"]) ? $context["cooperate"] : $this->getContext($context, "cooperate")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 28
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 32
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 33
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 36
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 38
            echo "   
                                <br>
                                <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </ul>
                </div>
            </div>
                
                 <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Creative Pillar"));
        echo "\">Creative</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creative"]) ? $context["creative"] : $this->getContext($context, "creative")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 59
            echo "                      
                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 64
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 65
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 68
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 70
            echo "   
                                <br>
                                <strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                    </ul>
                </div>
            </div>


            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Editorial"));
        echo "\">Editorial</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                       ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 94
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 98
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 99
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 102
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 104
            echo "   
                                <br>
                                <strong>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Fund Raising"));
        echo "\">Fund Raising</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fund"]) ? $context["fund"] : $this->getContext($context, "fund")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 125
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 129
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 130
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 133
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 135
            echo "   
                                <br>
                                <strong>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Human Resource"));
        echo "\"> Human Resource</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["HR"]) ? $context["HR"] : $this->getContext($context, "HR")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 156
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 160
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 161
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 164
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 166
            echo "   
                                <br>
                                <strong>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                    </ul>
                </div>
            </div>

            
        </div>
            <div class=\"row-fluid\">
            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Marketing Pillar"));
        echo "\"> Marketing</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 190
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 194
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 195
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 198
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 200
            echo "   
                                <br>
                                <strong>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                    </ul>
                </div>
            </div>


            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "News Operation"));
        echo "\">News</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 221
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 222
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 226
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 227
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 230
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 232
            echo "   
                                <br>
                                <strong>";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Organizational Development"));
        echo "\"> Organizational</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                        ";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizational"]) ? $context["organizational"] : $this->getContext($context, "organizational")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 254
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 258
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 259
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 262
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 264
            echo "   
                                <br>
                                <strong>";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "
                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Technical Pillar"));
        echo "\">Technical</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 285
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technical"]) ? $context["technical"] : $this->getContext($context, "technical")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 286
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 290
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 291
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 294
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 296
            echo "   
                                <br>
                                <strong>";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 311
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Special Projects"));
        echo "\">Special Projects</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 316
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) ? $context["special"] : $this->getContext($context, "special")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 317
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 321
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 322
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 325
                echo "                            <img width=\"50\" height=\"50\" alt=\"Usman\" src=\"/moraspirit/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 327
            echo "   
                                <br>
                                <strong>";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                    </ul>
                </div>
            </div>

            
        </div>


        <div class=\"row-fluid\">\t\t
            <div class=\"box span12\">
                <div class=\"box-header well\">
                    <h2> Upcoming Events</h2>

                </div>
                <div class=\"box-content\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Date </th>
                                <th>Details</th>
                                <th>Status</th>                                          
                            </tr>
                        </thead>   
                        <tbody>
                            <tr>
                                <td>World Conference Youth</td>
                                <td class=\"center\">2014/05/07</td>
                                <td class=\"center\">
                                    World Conference on Youth 2014 will take place from 6th to 10th May, 2014 at Bandaranaike Memorial International Conference Hall in Colombo, Sri Lanka. </td>
                                <td class=\"center\">
                                    <span class=\"label label-success\">On going</span>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Gift a Smile</td>
                                <td class=\"center\">2014/05/14</td>
                                <td class=\"center\">Gift a Smile by Rotaract Club, will take place at Negombo on the 14th of May from 3 pm onward</td>
                                <td class=\"center\">
                                    <span class=\"label label-important\">Scheduled</span>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>LEO Conference</td>
                                <td class=\"center\">2014/06/01</td>
                                <td class=\"center\">Conference on environmental protection by LEO Sri Lanka will take palce at Youth Center, Maharagama</td>
                                <td class=\"center\">
                                    <span class=\"label label-important\">Scheduled</span>
                                </td>                                        
                            </tr>
                            <tr>
                                <td>Soyuru Sathkaraya</td>
                                <td class=\"center\">2014/06/21</td>
                                <td class=\"center\">Reconciliation program for  School children at Vavuniya organized by SLWT</td>
                                <td class=\"center\">
                                    <span class=\"label label-warning\">Pending</span>
                                </td>                                       
                            </tr>
                            <tr>
                                <td>Beach Clean</td>
                                <td class=\"center\">2014/06/25</td>
                                <td class=\"center\">Full beach clean out from wellawatte to Mount Lavinia, organized by a group of people in the nearby area</td>
                                <td class=\"center\">
                                    <span class=\"label \">Inactive</span>
                                </td>                                        
                            </tr>                                   
                        </tbody>
                    </table> 
                    <div class=\"pagination pagination-centered\">
                        <ul>
                            <li><a href=\"#\">Prev</a></li>
                            <li class=\"active\">
                                <a href=\"#\">1</a>
                            </li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">Next</a></li>
                        </ul>
                    </div>     
                </div>


            </div>

        </div>


        <!--/span-->


        </div></div>  </div>

";
    }

    // line 431
    public function block_javascripts($context, array $blocks = array())
    {
        // line 432
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/slider/engine1/wowslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/slider/engine1/script.js"), "html", null, true);
        echo "\"></script>
 ";
    }

    public function getTemplateName()
    {
        return "NewsBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 331,  679 => 329,  675 => 327,  670 => 325,  663 => 322,  661 => 321,  657 => 320,  652 => 317,  648 => 316,  640 => 311,  632 => 305,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 291,  598 => 290,  594 => 289,  589 => 286,  585 => 285,  577 => 280,  568 => 273,  557 => 268,  552 => 266,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 257,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 232,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 216,  429 => 204,  424 => 202,  420 => 200,  415 => 198,  408 => 195,  406 => 194,  397 => 190,  385 => 184,  363 => 170,  358 => 168,  354 => 166,  349 => 164,  342 => 161,  340 => 160,  336 => 159,  331 => 156,  327 => 155,  319 => 150,  311 => 144,  300 => 139,  295 => 137,  291 => 135,  286 => 133,  279 => 130,  277 => 129,  256 => 119,  248 => 113,  237 => 108,  232 => 106,  228 => 104,  223 => 102,  216 => 99,  210 => 97,  205 => 94,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 47,  84 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 222,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 193,  398 => 129,  393 => 189,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 175,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 98,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 42,  61 => 13,  273 => 128,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 27,  67 => 15,  63 => 22,  59 => 14,  93 => 36,  88 => 6,  78 => 21,  38 => 4,  28 => 3,  201 => 93,  196 => 90,  183 => 82,  171 => 74,  166 => 72,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  26 => 6,  87 => 25,  46 => 7,  44 => 7,  31 => 4,  94 => 28,  89 => 20,  85 => 25,  75 => 28,  68 => 14,  56 => 9,  24 => 4,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 68,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 70,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 33,  82 => 22,  80 => 31,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
