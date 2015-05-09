<?php

/* MoraspiritUserBundle:Profile:profile.html.twig */
class __TwigTemplate_c37997bc8e0bbe2ec1ff60da957feaae6d6a2df530623527aa3470e60afc82c7 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row-fluid\">

        <noscript>
        <div class=\"alert alert-block span12\">
            <h4 class=\"alert-heading\">Warning!</h4>
            <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>
         <div id=\"content\" class=\"span10 \">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
      
<div class=\"box span4\">                                
        
        <div class=\"box-content \">
             
           <p align=\"center\">
                        ";
        // line 24
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path") != null)) {
            // line 25
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path"), "html", null, true);
            echo "\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                        ";
        } else {
            // line 27
            echo "                        <img src=\"/web/bundles/User/Photo/default.jpg\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                        ";
        }
        // line 29
        echo "           </p>
        </div>
    </div>
                           
   
<div class=\"box span8\">                                
        
        <div class=\"box-content \">
            <div id=\"content\" class=\"span12\">
               
                ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
            // line 40
            echo "                    <div class=\"pull-right\"> 
                        <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("moraspirit_profile_edit");
            echo " \"><button  class=\"btn btn-small btn-account\">edit profile</button></a>
                         <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("moraspirit_profile_picture");
            echo " \"><button  class=\"btn btn-small btn-account\">change profile picture</button></a>
                        
                         
                    </div>
                ";
        }
        // line 47
        echo "                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Head")) {
            echo "   
             <h2 align=\"center\">Pillar Head</h2><br>
             ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            // line 49
            echo "  
             <h2 align=\"center\">CXO</h2><br><br>
                    ";
        }
        // line 52
        echo "             
             ";
        // line 53
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "   
             <br><br>
             ";
        }
        // line 56
        echo "                <table>
                    
                    
                    <tr>
                        
                        <td width=\"40%\">
                            
                    <p align=\"right\">
                        <strong>Full Name</strong>: <br>
                         <strong>Gender</strong>: <br>
                          <strong>Batch</strong>: <br>
                           <strong>Department</strong>: <br>
                           <strong>NIC</strong>: <br>
                           
                           <br>
                           <strong>Address</strong>:<br>
                           <strong>City</strong>:<br>
                           <strong>Country</strong>:<br>
                           <strong>Email</strong>:<br>
                           <strong>Mobile Number</strong>:<br>
                           <strong>Phone Number</strong>:<br>                          
                           ";
        // line 77
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin")) {
            echo "  
                            <strong>Pillar</strong><br><br>
                            ";
        }
        // line 80
        echo "                            ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            echo "  
                            <br>
                            ";
        }
        // line 83
        echo "                             ";
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "    
                            <strong>Rating</strong><br>
                            ";
        }
        // line 86
        echo "                    </p>
                        </td>
                        <td width=\"1%\">
                        </td>
                            <td width=\"40%\">
                                
                    <p align=\"left\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "<br>
                       ";
        // line 94
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender") == "M")) {
            // line 95
            echo "                        Male
                        ";
        } else {
            // line 97
            echo "                        Female
                        ";
        }
        // line 99
        echo "                        <br>
                         ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "batch"), "html", null, true);
        echo "<br>
                         ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "department"), "html", null, true);
        echo "<br>
                         ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "<br>
                        <br>
                    
                          ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "<br>
                          ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo " <br>
                          ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo " <br>
                           ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo " <br>
                          ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo " <br>
                          ";
        // line 110
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber") == null)) {
            // line 111
            echo "                        null
                        ";
        } else {
            // line 113
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
            echo "
                        ";
        }
        // line 114
        echo "<br>     
                           
                           ";
        // line 116
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin")) {
            echo "  
                        <span class=\"label label-inverse\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pillar"), "html", null, true);
            echo "</span> <br><br>  
                             ";
        }
        // line 119
        echo "                         
                          ";
        // line 120
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            echo "  
                            <br>
                            ";
        }
        // line 123
        echo "                             ";
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "   
                          <span class=\"label label-important\">";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "html", null, true);
            echo "</span><br>
                           ";
        }
        // line 126
        echo "                         </p>
                        </td>
                         <td width=\"3%\">
                        </td>
                        
                       
                </tr>
                </table>
                
              
                
            </div>
        </div>
    </div>
                                               
    ";
        // line 141
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "       
                           
                            
                            <div class=\"row-fluid\">
                            <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Skills </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
          
                ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "skills"));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 156
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", null, true);
                echo "
                <br>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                <br><br>
            </div>
                                        
                                        </div>
                            </div></div>
        <div class=\"row-fluid\">
              <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Projects </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
             
                 <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Project</th>
                            <th width=\"30%\">Objectives</th>
                            <th width=\"40%\">Description</th>
                            <th width=\"15%\">Expected End Date</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 189
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
                echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "objectives"), "html", null, true);
                echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
                echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "due"), "html", null, true);
                echo "
                            </td>
                                                                 
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                    </tbody>
                </table>  
            </div></div></div></div>
        <div class=\"row-fluid\">
          <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Ongoing Tasks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
                
                  <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                            <th width=\"10%\">Due Date</th>
                            <th width=\"60%\">Details</th>
                            <th width=\"15%\">Type</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 234
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 235
                echo "                                                           ";
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "completed") == 0)) {
                    // line 236
                    echo "                        <tr>
                            <td>
                                <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                    echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 247
                    if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                        // line 248
                        echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                        // line 250
                        echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                        // line 252
                        echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                        // line 254
                        echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                    }
                    // line 256
                    echo "
                            </td>                                       
                        </tr>
                            ";
                }
                // line 260
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                    </tbody>
                </table>          
            </div></div></div></div>
        <div class=\"row-fluid\">
          <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Completed Tasks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
               
                  <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                            <th width=\"10%\">Due Date</th>
                            <th width=\"60%\">Details</th>
                            <th width=\"15%\">Type</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 288
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 289
                echo "                                                            ";
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "completed") == 1)) {
                    // line 290
                    echo "                        <tr>
                            <td>
                                <a href=\"";
                    // line 292
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                    echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                    // line 295
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 298
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 301
                    if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                        // line 302
                        echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                        // line 304
                        echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                        // line 306
                        echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                        // line 308
                        echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                    }
                    // line 310
                    echo "
                            </td>                                       
                        </tr>
                            ";
                }
                // line 314
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                    </tbody>
                </table>          
                
            </div>
        </div>
    </div>
    </div></div>
  
\t\t<div class=\"row-fluid\">
<div class=\"box span12\">
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Feedbacks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t <ul class=\"dashboard-list\">
                    ";
            // line 331
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["feedbacks"]) ? $context["feedbacks"] : $this->getContext($context, "feedbacks")));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 332
                echo "                    <li>
                        <a href=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 0, array(), "array"))), "html", null, true);
                echo "\">
                              ";
                // line 334
                if (($this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 2, array(), "array") != null)) {
                    // line 335
                    echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 2, array(), "array"), "html", null, true);
                    echo "\">  

                        ";
                } else {
                    // line 338
                    echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
                }
                // line 340
                echo "   
                        <strong>";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 1, array(), "array"), "html", null, true);
                echo "</strong>
                        </a>
                        <br>
                        ";
                // line 344
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 3, array(), "array"), "html", null, true);
                echo "<br>
                        <br>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                    
                    
                </ul>

\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
                                
                </div>
                        
                           ";
        }
        // line 358
        echo "</div>



";
    }

    public function getTemplateName()
    {
        return "MoraspiritUserBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  601 => 338,  594 => 335,  592 => 334,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  551 => 310,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  506 => 289,  502 => 288,  473 => 261,  467 => 260,  461 => 256,  457 => 254,  453 => 252,  449 => 250,  445 => 248,  443 => 247,  437 => 244,  431 => 241,  423 => 238,  419 => 236,  416 => 235,  412 => 234,  383 => 207,  371 => 201,  364 => 197,  358 => 194,  350 => 191,  346 => 189,  342 => 188,  311 => 159,  301 => 156,  297 => 155,  280 => 141,  263 => 126,  258 => 124,  253 => 123,  247 => 120,  244 => 119,  239 => 117,  235 => 116,  231 => 114,  225 => 113,  221 => 111,  219 => 110,  215 => 109,  211 => 108,  207 => 107,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  185 => 100,  182 => 99,  178 => 97,  174 => 95,  172 => 94,  166 => 93,  157 => 86,  150 => 83,  143 => 80,  137 => 77,  114 => 56,  108 => 53,  105 => 52,  100 => 49,  93 => 47,  85 => 42,  81 => 41,  78 => 40,  76 => 39,  64 => 29,  60 => 27,  54 => 25,  52 => 24,  31 => 5,  28 => 4,);
    }
}
