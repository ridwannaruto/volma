<?php

/* MoraspiritSiteBundle:Home:admin.html.twig */
class __TwigTemplate_a4ef344810c5f5a6a95b2b20f1f6a2b40b63d0cf118c160aebf8bdfba6ca8ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"span10\"> <div class=\"row-fluid\">
                
                 <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"#\">CXO</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CXOX"]) ? $context["CXOX"] : $this->getContext($context, "CXOX")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "                      
                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 20
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 21
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 24
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 26
            echo "   
                                <br>
                                <strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                    </ul>
                </div>
            </div>

<div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Cooperate Development"));
        echo "\">Cooperate</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cooperate"]) ? $context["cooperate"] : $this->getContext($context, "cooperate")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 48
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 52
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 53
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 56
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 58
            echo "   
                                <br>
                                <strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Editorial"));
        echo "\">Editorial</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                       ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 80
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 84
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 85
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 88
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 90
            echo "   
                                <br>
                                <strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Fund Raising"));
        echo "\">Fund Raising</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fund"]) ? $context["fund"] : $this->getContext($context, "fund")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 111
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 115
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 116
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 119
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 121
            echo "   
                                <br>
                                <strong>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Human Resource"));
        echo "\"> Human Resource</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["HR"]) ? $context["HR"] : $this->getContext($context, "HR")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 142
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 146
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 147
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 150
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 152
            echo "   
                                <br>
                                <strong>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                    </ul>
                </div>
            </div>

            
        </div>
            <div class=\"row-fluid\">
            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Marketing Pillar"));
        echo "\"> Marketing</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 176
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 180
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 181
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 184
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 186
            echo "   
                                <br>
                                <strong>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                    </ul>
                </div>
            </div>


            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "News Operation"));
        echo "\">News</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 208
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 212
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 213
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 216
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 218
            echo "   
                                <br>
                                <strong>";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Organizational Development"));
        echo "\"> Organizational</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                        ";
        // line 239
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizational"]) ? $context["organizational"] : $this->getContext($context, "organizational")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 240
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 244
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 245
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 248
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 250
            echo "   
                                <br>
                                <strong>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "
                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Technical Pillar"));
        echo "\">Technical</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technical"]) ? $context["technical"] : $this->getContext($context, "technical")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 272
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 276
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 277
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 280
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 282
            echo "   
                                <br>
                                <strong>";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Special Projects"));
        echo "\">Special Projects</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 302
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) ? $context["special"] : $this->getContext($context, "special")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 303
            echo "                      <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 306
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 307
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 308
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 311
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 313
            echo "   
                                <br>
                                <strong>";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                    </ul>
                </div>
            </div>

            
        </div>

    
    <div class=\"row-fluid \">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Ongoing Tasks </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 341
        if (((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")) != null)) {
            // line 342
            echo "                <table class=\"table table-striped bootstrap-datatable datatable table-bordered\">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Due Date</th>
                            <th>Details</th>
                            <th>Pillar</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        ";
            // line 352
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 353
                echo "                        <tr>
                            <td width=\"20%\">
                                <a href=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                echo "</a>
                            </td>
                            <td width=\"10%\" class=\"center\">
                                ";
                // line 358
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"60%\" class=\"center\"> 
                                ";
                // line 361
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                
                                <span class=\"label label-info\">";
                // line 365
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "pillar"), "html", null, true);
                echo "</span>   
                              

                            </td>                                       
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "
                    </tbody>
                </table>                 

                ";
        } else {
            // line 377
            echo "                <p align =\"center\">
                    you have no task to complete
                </p>

                ";
        }
        // line 382
        echo "            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>



";
    }

    public function getTemplateName()
    {
        return "MoraspiritSiteBundle:Home:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 382,  749 => 377,  742 => 372,  729 => 365,  722 => 361,  716 => 358,  708 => 355,  704 => 353,  700 => 352,  688 => 342,  686 => 341,  665 => 322,  654 => 317,  649 => 315,  645 => 313,  640 => 311,  633 => 308,  631 => 307,  627 => 306,  622 => 303,  618 => 302,  610 => 297,  602 => 291,  591 => 286,  586 => 284,  582 => 282,  577 => 280,  570 => 277,  568 => 276,  564 => 275,  559 => 272,  555 => 271,  547 => 266,  538 => 259,  527 => 254,  522 => 252,  518 => 250,  513 => 248,  506 => 245,  504 => 244,  500 => 243,  495 => 240,  491 => 239,  482 => 233,  474 => 227,  463 => 222,  458 => 220,  454 => 218,  449 => 216,  442 => 213,  440 => 212,  436 => 211,  431 => 208,  427 => 207,  419 => 202,  410 => 195,  399 => 190,  394 => 188,  390 => 186,  385 => 184,  378 => 181,  376 => 180,  372 => 179,  367 => 176,  363 => 175,  355 => 170,  344 => 161,  333 => 156,  328 => 154,  324 => 152,  319 => 150,  312 => 147,  310 => 146,  306 => 145,  301 => 142,  297 => 141,  289 => 136,  281 => 130,  270 => 125,  265 => 123,  261 => 121,  256 => 119,  249 => 116,  247 => 115,  243 => 114,  238 => 111,  234 => 110,  226 => 105,  218 => 99,  207 => 94,  202 => 92,  198 => 90,  193 => 88,  186 => 85,  184 => 84,  180 => 83,  175 => 80,  171 => 79,  162 => 73,  154 => 67,  143 => 62,  138 => 60,  134 => 58,  129 => 56,  122 => 53,  120 => 52,  116 => 51,  111 => 48,  107 => 47,  99 => 42,  90 => 35,  79 => 30,  74 => 28,  70 => 26,  65 => 24,  58 => 21,  56 => 20,  52 => 19,  46 => 15,  42 => 14,  31 => 5,  28 => 4,);
    }
}
