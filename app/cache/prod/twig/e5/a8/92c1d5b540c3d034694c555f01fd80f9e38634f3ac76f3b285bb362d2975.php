<?php

/* MoraspiritSiteBundle:Home:volunteer.html.twig */
class __TwigTemplate_e5a892c1d5b540c3d034694c555f01fd80f9e38634f3ac76f3b285bb362d2975 extends Twig_Template
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
 
 \t    <div class=\"span1\"></div>

            
                
                 <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"#\">CXO</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CXOX"]) ? $context["CXOX"] : $this->getContext($context, "CXOX")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 20
            echo "                      
                        <li>
                                        
                            <p >
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 25
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 26
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 29
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 31
            echo "   
                             
                                <h3>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                    </ul>
                </div>
            </div>
            </div>

<div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Cooperate Development"));
        echo "\">Cooperate Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cooperate"]) ? $context["cooperate"] : $this->getContext($context, "cooperate")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 54
            echo "                       <li>
                                        
                            <p >
                                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 58
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 59
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 62
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 64
            echo "   
                             
                                <h3>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><a><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span></a>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </ul>
                </div>
            </div>
             <div class=\"row-fluid\">
             <div class=\"span1\"></div>


            <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Editorial"));
        echo "\">Editorial Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                       ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 88
            echo "                         <li>
                                        
                            <p >
                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 92
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 93
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 96
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 98
            echo "   
                             
                                <h3>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </ul>
                </div>
            </div>
            
             <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Technical Pillar"));
        echo "\">Technical Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technical"]) ? $context["technical"] : $this->getContext($context, "technical")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 118
            echo "                        <li>
                                        
                            <p >
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 122
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 123
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 126
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 128
            echo "   
                             
                                <h3>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                    </ul>
                </div>
            </div>

           
            
            </div>
             <div class=\"row-fluid\">
             <div class=\"span1\"></div>

            <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Human Resource"));
        echo "\"> Human Resource Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["HR"]) ? $context["HR"] : $this->getContext($context, "HR")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 154
            echo "                         <li>
                                        
                            <p >
                                <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 158
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 159
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 162
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 164
            echo "   
                             
                                <h3>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </ul>
                </div>
            </div>
            
             <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Organizational Development"));
        echo "\"> Organizational Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">

                        ";
        // line 184
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizational"]) ? $context["organizational"] : $this->getContext($context, "organizational")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 185
            echo "                        <li>
                                        
                            <p >
                                <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 189
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 190
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 193
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 195
            echo "   
                             
                                <h3>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "
                    </ul>
                </div>
            </div>
            </div>
             <div 
            
       
             <div class=\"row-fluid\">
             <div class=\"span1\"></div>


            <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "News Operation"));
        echo "\">News Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 222
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 223
            echo "                         <li>
                                        
                            <p >
                                <a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 227
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 228
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 231
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 233
            echo "   
                             
                                <h3>";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
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
            
            
            <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2><a href=\"";
        // line 248
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Marketing Pillar"));
        echo "\"> Marketing</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                         ";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 254
            echo "                       <li>
                                        
                            <p >
                                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 258
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 259
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 262
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 264
            echo "   
                             
                                <h3>";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                    </ul>
                </div>
            </div>
            </div>

       

           

            <div class=\"box span5\">
                <div class=\"box-header well\">
                    <h2> <a href=\"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("moraspirit_pillar", array("pillarName" => "Special Project"));
        echo "\">Special Projects Pillar</a></h2>

                </div>
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 288
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) ? $context["special"] : $this->getContext($context, "special")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 289
            echo "                      <li>
                                        
                            <p >
                                <a href=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 293
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") != null)) {
                // line 294
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 297
                echo "                            <img  class=\"dashboard-avatar\" width=\"50\" height=\"50\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 299
            echo "   
                             
                                <h3>";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo "</a><span class=\"label label-success pull-right\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "overallrating"), "html", null, true);
            echo "</h3></span>&nbsp;&nbsp;&nbsp;
                               
                             
                            </p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                    </ul>
                </div>
            </div>

            
        

            
        </div>


    <div class=\"row-fluid\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Incomplete Tasks </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 329
        if (((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")) != null)) {
            // line 330
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
            // line 340
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 341
                echo "                        <tr>
                            <td width=\"20%\">
                                <a href=\"";
                // line 343
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                echo "</a>
                            </td>
                            <td width=\"10%\" class=\"center\">
                                ";
                // line 346
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"60%\" class=\"center\"> 
                                ";
                // line 349
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                ";
                // line 352
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                    // line 353
                    echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                    // line 355
                    echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                    // line 357
                    echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                    // line 359
                    echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                }
                // line 361
                echo "
                            </td>                                       
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "
                    </tbody>
                </table>                 

                ";
        } else {
            // line 371
            echo "                <p align =\"center\">
                    you have no task to complete
                </p>

                ";
        }
        // line 376
        echo "            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>



";
    }

    public function getTemplateName()
    {
        return "MoraspiritSiteBundle:Home:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 376,  710 => 371,  703 => 366,  693 => 361,  689 => 359,  685 => 357,  681 => 355,  677 => 353,  675 => 352,  669 => 349,  663 => 346,  655 => 343,  651 => 341,  647 => 340,  635 => 330,  633 => 329,  609 => 307,  595 => 301,  591 => 299,  586 => 297,  579 => 294,  577 => 293,  573 => 292,  568 => 289,  564 => 288,  556 => 283,  543 => 272,  529 => 266,  525 => 264,  520 => 262,  513 => 259,  511 => 258,  507 => 257,  502 => 254,  498 => 253,  490 => 248,  481 => 241,  467 => 235,  463 => 233,  458 => 231,  451 => 228,  449 => 227,  445 => 226,  440 => 223,  436 => 222,  428 => 217,  412 => 203,  398 => 197,  394 => 195,  389 => 193,  382 => 190,  380 => 189,  376 => 188,  371 => 185,  367 => 184,  358 => 178,  350 => 172,  336 => 166,  332 => 164,  327 => 162,  320 => 159,  318 => 158,  314 => 157,  309 => 154,  305 => 153,  297 => 148,  283 => 136,  269 => 130,  265 => 128,  260 => 126,  253 => 123,  251 => 122,  247 => 121,  242 => 118,  238 => 117,  230 => 112,  222 => 106,  208 => 100,  204 => 98,  199 => 96,  192 => 93,  190 => 92,  186 => 91,  181 => 88,  177 => 87,  168 => 81,  157 => 72,  143 => 66,  139 => 64,  134 => 62,  127 => 59,  125 => 58,  121 => 57,  116 => 54,  112 => 53,  104 => 48,  94 => 40,  79 => 33,  75 => 31,  70 => 29,  63 => 26,  61 => 25,  57 => 24,  51 => 20,  47 => 19,  31 => 5,  28 => 4,);
    }
}
