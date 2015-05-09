<?php

/* MoraspiritSiteBundle:Home:head.html.twig */
class __TwigTemplate_d06efca8b0de9649b9ee1d9f1826c6300aaa21f9aad7af8288c41e506bd8dd28 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">
 <div class=\"row-fluid\">

            
                
                 <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"#\">CXO</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CXOX"]) ? $context["CXOX"] : $this->getContext($context, "CXOX")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 18
            echo "                      
                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 23
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 24
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 27
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 29
            echo "   
                                <br>
                                <strong>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                    </ul>
                </div>
            </div>

<div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Cooperate Development"));
        echo "\">Cooperate</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cooperate"]) ? $context["cooperate"] : $this->getContext($context, "cooperate")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 51
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 55
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 56
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 59
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 61
            echo "   
                                <br>
                                <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Editorial"));
        echo "\">Editorial</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                       ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 83
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 87
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 88
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 91
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 93
            echo "   
                                <br>
                                <strong>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Fund Raising"));
        echo "\">Fund Raising</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fund"]) ? $context["fund"] : $this->getContext($context, "fund")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 114
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 118
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 119
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 122
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 124
            echo "   
                                <br>
                                <strong>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Human Resource"));
        echo "\"> Human Resource</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["HR"]) ? $context["HR"] : $this->getContext($context, "HR")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 145
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 149
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 150
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 153
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 155
            echo "   
                                <br>
                                <strong>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                    </ul>
                </div>
            </div>

            
        </div>
            <div class=\"row-fluid\">
            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Marketing Pillar"));
        echo "\"> Marketing</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 178
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 179
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 183
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 184
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 187
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 189
            echo "   
                                <br>
                                <strong>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                    </ul>
                </div>
            </div>


            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "News Operation"));
        echo "\">News</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 210
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 211
            echo "                         <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 215
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 216
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 219
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 221
            echo "   
                                <br>
                                <strong>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Organizational Development"));
        echo "\"> Organizational</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                        ";
        // line 242
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizational"]) ? $context["organizational"] : $this->getContext($context, "organizational")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 243
            echo "                       <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 247
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 248
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 251
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 253
            echo "   
                                <br>
                                <strong>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 269
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Technical Pillar"));
        echo "\">Technical</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 274
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technical"]) ? $context["technical"] : $this->getContext($context, "technical")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 275
            echo "                        <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 279
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 280
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 283
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 285
            echo "   
                                <br>
                                <strong>";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                    </ul>
                </div>
            </div>

            <div class=\"box span2\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 300
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Special Projects"));
        echo "\">Special Projects</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 305
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) ? $context["special"] : $this->getContext($context, "special")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 306
            echo "                      <li>
                                        
                            <p align=\"center\">
                                <a href=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 310
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 311
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 314
                echo "                            <img width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 316
            echo "   
                                <br>
                                <strong>";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " </strong></a>    <br>
                                 
                                <span class=\"label label-success\"> <strong>";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</strong></span>   <br> 
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                    </ul>
                </div>
            </div>

            
        </div>


    <div class=\"row-fluid\">
        <div class=\"box span12\">                                
            
            <div class=\"box-content \">
                <div id=\"content\" class=\"span12\">

                    
                </div>
            </div>
        </div>
    </div><div class=\"row-fluid\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i> Member Activities</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 356
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 357
            echo "                        <li>

                            <div class =\"pull-right\">
                                ";
            // line 360
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 361
                echo "                                <span class=\"label label-warning\">Pending</span>   <br><br>
                                <button url=\"";
                // line 362
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Activate", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>\t
                                <button url=\"";
                // line 363
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Reject", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>                           
                                ";
            } else {
                // line 365
                echo "                                <span class=\"label label-success\">Activated</span>   <br><br>
                                ";
            }
            // line 367
            echo "                            </div>
                            <a href=\"";
            // line 368
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">
                                                                                ";
            // line 369
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") == null)) {
                // line 370
                echo "                                <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 372
                echo "                                <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">

                                                                                ";
            }
            // line 375
            echo "                                <strong>Name:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                            </a><br>
                            <strong>Department:</strong> ";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "department"), "html", null, true);
            echo "
                            <br>
                            <strong>Last Login:</strong> ";
            // line 379
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastlogin"), "Y-m-d  H:i:s"), "html", null, true);
            echo "<br><br>
                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div>
    <div class=\"row-fluid sortable\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Ongoing Pillar Tasks </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 400
        if (((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")) != null)) {
            // line 401
            echo "                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Due Date</th>
                            <th>Details</th>
                            <th>Type</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        ";
            // line 411
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 412
                echo "                        <tr>
                            <td width=\"20%\">
                                <a href=\"";
                // line 414
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                echo "</a>
                            </td>
                            <td width=\"10%\" class=\"center\">
                                ";
                // line 417
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"60%\" class=\"center\"> 
                                ";
                // line 420
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                ";
                // line 423
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                    // line 424
                    echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                    // line 426
                    echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                    // line 428
                    echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                    // line 430
                    echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                }
                // line 432
                echo "
                            </td>                                       
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "
                    </tbody>
                </table>                 

                ";
        } else {
            // line 442
            echo "                <p align =\"center\">
                    you have no task to complete
                </p>

                ";
        }
        // line 447
        echo "            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>


<div class=\"modal hide fade\" id=\"delete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this User?<br>His/Her account will be deleted from the System.                         \t\t
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

<div class=\"modal hide fade\" id=\"complete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure this is a member of your pillar?                           \t\t
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

";
    }

    public function getTemplateName()
    {
        return "MoraspiritSiteBundle:Home:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 447,  871 => 442,  864 => 437,  854 => 432,  850 => 430,  846 => 428,  842 => 426,  838 => 424,  836 => 423,  830 => 420,  824 => 417,  816 => 414,  812 => 412,  808 => 411,  796 => 401,  794 => 400,  774 => 382,  765 => 379,  760 => 377,  752 => 375,  745 => 372,  741 => 370,  739 => 369,  735 => 368,  732 => 367,  728 => 365,  721 => 363,  715 => 362,  712 => 361,  710 => 360,  705 => 357,  701 => 356,  668 => 325,  657 => 320,  652 => 318,  648 => 316,  643 => 314,  636 => 311,  634 => 310,  630 => 309,  625 => 306,  621 => 305,  613 => 300,  605 => 294,  594 => 289,  589 => 287,  585 => 285,  580 => 283,  573 => 280,  571 => 279,  567 => 278,  562 => 275,  558 => 274,  550 => 269,  541 => 262,  530 => 257,  525 => 255,  521 => 253,  516 => 251,  509 => 248,  507 => 247,  503 => 246,  498 => 243,  494 => 242,  485 => 236,  477 => 230,  466 => 225,  461 => 223,  457 => 221,  452 => 219,  445 => 216,  443 => 215,  439 => 214,  434 => 211,  430 => 210,  422 => 205,  413 => 198,  402 => 193,  397 => 191,  393 => 189,  388 => 187,  381 => 184,  379 => 183,  375 => 182,  370 => 179,  366 => 178,  358 => 173,  347 => 164,  336 => 159,  331 => 157,  327 => 155,  322 => 153,  315 => 150,  313 => 149,  309 => 148,  304 => 145,  300 => 144,  292 => 139,  284 => 133,  273 => 128,  268 => 126,  264 => 124,  259 => 122,  252 => 119,  250 => 118,  246 => 117,  241 => 114,  237 => 113,  229 => 108,  221 => 102,  210 => 97,  205 => 95,  201 => 93,  196 => 91,  189 => 88,  187 => 87,  183 => 86,  178 => 83,  174 => 82,  165 => 76,  157 => 70,  146 => 65,  141 => 63,  137 => 61,  132 => 59,  125 => 56,  123 => 55,  119 => 54,  114 => 51,  110 => 50,  102 => 45,  93 => 38,  82 => 33,  77 => 31,  73 => 29,  68 => 27,  61 => 24,  59 => 23,  55 => 22,  49 => 18,  45 => 17,  31 => 5,  28 => 4,);
    }
}
