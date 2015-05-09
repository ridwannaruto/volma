<?php

/* UserBundle:Profile:profile.html.twig */
class __TwigTemplate_adc6431a52ecf78b4987b9b909f984e48d6c04c5d0dfa9e397d57f327a127fe1 extends Twig_Template
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
        return "UserBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 340,  601 => 338,  592 => 334,  581 => 331,  563 => 315,  551 => 310,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  513 => 292,  509 => 290,  473 => 261,  467 => 260,  445 => 248,  443 => 247,  431 => 241,  416 => 235,  263 => 126,  244 => 119,  174 => 95,  172 => 94,  370 => 184,  359 => 179,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 114,  195 => 96,  129 => 64,  97 => 45,  81 => 41,  225 => 113,  197 => 94,  185 => 100,  346 => 189,  261 => 112,  249 => 123,  233 => 102,  218 => 106,  213 => 105,  188 => 84,  178 => 97,  153 => 69,  104 => 36,  76 => 39,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 358,  622 => 165,  617 => 163,  609 => 341,  604 => 156,  591 => 151,  588 => 333,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 201,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 155,  287 => 123,  272 => 117,  267 => 132,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 56,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 156,  293 => 143,  271 => 133,  265 => 113,  253 => 123,  239 => 117,  211 => 108,  165 => 78,  161 => 77,  155 => 74,  124 => 58,  110 => 50,  100 => 49,  77 => 34,  70 => 30,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 348,  620 => 164,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 236,  412 => 234,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 207,  369 => 183,  364 => 197,  357 => 177,  353 => 63,  350 => 191,  348 => 174,  345 => 368,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 141,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 109,  207 => 107,  186 => 88,  160 => 64,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 332,  577 => 280,  568 => 273,  557 => 314,  552 => 135,  548 => 264,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 250,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 194,  354 => 166,  349 => 42,  342 => 188,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 159,  300 => 139,  295 => 145,  291 => 144,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 99,  210 => 97,  205 => 100,  192 => 87,  150 => 83,  148 => 64,  134 => 58,  126 => 53,  118 => 55,  84 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 209,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 160,  314 => 155,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 124,  252 => 332,  247 => 120,  241 => 118,  229 => 112,  220 => 70,  214 => 98,  177 => 84,  169 => 73,  140 => 55,  132 => 51,  128 => 59,  107 => 41,  61 => 35,  273 => 135,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 116,  230 => 318,  227 => 81,  224 => 117,  221 => 111,  219 => 110,  217 => 106,  208 => 92,  204 => 72,  179 => 86,  159 => 76,  143 => 80,  135 => 54,  119 => 42,  102 => 36,  71 => 28,  67 => 31,  63 => 29,  59 => 25,  93 => 47,  88 => 40,  78 => 40,  38 => 4,  28 => 4,  201 => 99,  196 => 90,  183 => 87,  171 => 81,  166 => 93,  163 => 78,  158 => 72,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 46,  117 => 44,  105 => 52,  91 => 33,  62 => 26,  49 => 19,  26 => 6,  87 => 40,  46 => 12,  44 => 14,  31 => 5,  94 => 34,  89 => 41,  85 => 42,  75 => 29,  68 => 27,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 28,  69 => 25,  47 => 18,  40 => 14,  37 => 5,  22 => 1,  246 => 90,  157 => 86,  145 => 63,  139 => 53,  131 => 52,  123 => 44,  120 => 43,  115 => 54,  111 => 38,  108 => 53,  101 => 47,  98 => 35,  96 => 34,  83 => 31,  74 => 29,  66 => 37,  55 => 24,  52 => 24,  50 => 17,  43 => 9,  41 => 5,  35 => 5,  32 => 7,  29 => 2,  209 => 107,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 64,  173 => 83,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 63,  141 => 64,  133 => 55,  130 => 46,  125 => 44,  122 => 59,  116 => 41,  112 => 43,  109 => 34,  106 => 49,  103 => 36,  99 => 39,  95 => 34,  92 => 41,  86 => 33,  82 => 37,  80 => 30,  73 => 39,  64 => 29,  60 => 27,  57 => 24,  54 => 25,  51 => 14,  48 => 20,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
