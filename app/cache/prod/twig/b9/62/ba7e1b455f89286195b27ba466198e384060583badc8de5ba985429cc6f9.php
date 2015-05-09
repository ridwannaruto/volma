<?php

/* MoraspiritProjectBundle:Projects:details.html.twig */
class __TwigTemplate_b962ba7e1b455f89286195b27ba466198e384060583badc8de5ba985429cc6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
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
        <div class=\"box span12\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Project Details</h2>
                    <hr>
                     ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager"))) {
            // line 15
            echo "                    <div class=\"pull-right\">
                        ";
            // line 16
            if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 0)) {
                // line 17
                echo "                         <button class=\"btn btn-small btn-complete btn-success\" url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_complete", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
                echo "\" >complete </button>

                        
                         ";
            }
            // line 21
            echo "                        <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_edit", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
            echo "\"><button  class=\"btn btn-small btn-inverse\">edit</button></a>
                        <button class=\"btn btn-small btn-danger btn-delete\" url=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_delete", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
            echo "\" > delete </button>

                        <br>
                    </div>
                ";
        }
        // line 27
        echo "
                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td width =\"55%\" align=\"justify\">
                                <h3>Project</h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "name"), "html", null, true);
        echo "<br><br>                                
                                <h3>Objectives</h3>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "objectives"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "description"), "html", null, true);
        echo "<br><br>
                                
                                
                            </td>
                            <td width=\"5%\">

                            </td>
                            <td width =\"35%\">
                                <h3>Manager</h3><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Started</h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "start"), "html", null, true);
        echo "<br><br>
                                <h3>Due</h3>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "due"), "html", null, true);
        echo "<br><br>
                                 <h3>Status</h3>
                                ";
        // line 47
        if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 1)) {
            // line 48
            echo "                                 <span class=\"label label-success\">Completed</span>   <br><br>
                                 <h3>Ended</h3>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "end"), "Y-m-d"), "html", null, true);
            echo "<br><br>
                                ";
        } else {
            // line 51
            echo "                                <span class=\"label label-warning\">Not Completed</span>  <br>

                                ";
        }
        // line 54
        echo "                            

                            </td>
                        </tr>
                       
                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>

    <div class=\"row-fluid\">
        <div class=\"box span12\">
            <div class=\"box-header well\">
                <h2><i class=\"icon-list-alt\"></i> Project Tasks</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 84
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Head") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager")))) {
            // line 85
            echo "                        <div class=\"row-fluid\">
                            <div class=\"pull-right\">
                                <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("moraspirit_task_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add Task </button></a>

                            </div>
                        </div><br>
                       ";
        }
        // line 92
        echo "                        <table class=\"records_list\" width=\"100%\">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Type</th>
                                    <th>Assigned To</th>
                                    <th>Manager</th>
                                    <th>Status </th>                              
                               
                                </tr>
                            </thead>
                            <tbody>
                                    ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 105
            echo "  <tr>
                                    <td align=\"center\"><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 0, array(), "array"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 2, array(), "array"), "html", null, true);
            echo "</a></td>
                                    <td align=\"center\">
                                         ";
            // line 108
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 1)) {
                // line 109
                echo "                                        <span class=\"label label-info\">Normal</span>   
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 2)) {
                // line 111
                echo "                                        <span class=\"label label-warning\">Important</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 3)) {
                // line 113
                echo "                                        <span class=\"label label-inverse\">Can Wait</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 4)) {
                // line 115
                echo "                                        <span class=\"label label-important\">Urgent</span>  
                                ";
            }
            // line 117
            echo "
                                    </td>
                                    <td align=\"center\"><a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 4, array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 5, array(), "array"), "html", null, true);
            echo "</a>

                                    </td>   
                                    <td align=\"center\"><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 6, array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 7, array(), "array"), "html", null, true);
            echo "</a>

                                    </td> 
                                    <td align=\"center\">
                                    ";
            // line 126
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 1, array(), "array") == 1)) {
                // line 127
                echo "                                        <span class=\"label label-success\">Completed</span>   
                                ";
            } else {
                // line 129
                echo "                                        <span class=\"label label-warning\">Not Completed</span>  

                                ";
            }
            // line 132
            echo "                                    </td> 
                                  
                                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            </tbody>
                        </table>
                    </ul>

                </div></div>
        </div>
    </div>
    
    <div class=\"row-fluid \">
        <div class=\"box span12\">                               
             <div class=\"box-header well\">
                <h2><i class=\"icon-user\"></i> Members Involved</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content \">              
                <ul class=\"dashboard-list\">
                    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Members"]) ? $context["Members"] : $this->getContext($context, "Members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 157
            echo "                    <li>
                        <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 0, array(), "array"))), "html", null, true);
            echo "\">
                             ";
            // line 159
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array") != null)) {
                // line 160
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 163
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 165
            echo " 
                     
                        <strong>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 1, array(), "array"), "html", null, true);
            echo "</strong></a><br>
                        <span class=\"label label-inverse\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 2, array(), "array"), "html", null, true);
            echo "</span>  
                        <br>
                        <br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                    
                </ul>


            </div>
        </div>



    </div>

    <div class=\"row-fluid \">
        <div class=\"box span12\">                               
               <div class=\"box-header well\">
                <h2><i class=\"icon-user\"></i> Comments</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content \">
            
                <ul class=\"dashboard-list\">
                    ";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 198
            echo "                    <li>
                        <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 200
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path") != null)) {
                // line 201
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path"), "html", null, true);
                echo "\">  
                            
                        ";
            } else {
                // line 204
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 206
            echo " 
             
                        <strong>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
            echo "</strong>
                        </a>         
                        ";
            // line 210
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))) {
                // line 211
                echo "                        <button url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_comment_delete", array("commentID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                        ";
            }
            // line 212
            echo " <br> 
                        ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "<br>
                         <span class=\"pull-right\"><h6>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></span><br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                    
                    <li>
                         <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))), "html", null, true);
        echo "\">
                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\">
                     
                        </a>
                        ";
        // line 223
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_start');
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "comment"), 'widget');
        echo "<br>
                        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "task"), 'widget', array("type" => "hidden"));
        echo "
                        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "project"), 'widget', array("type" => "hidden", "value" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id")));
        echo "
                        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary span2 pull-right")));
        echo "
                        ";
        // line 228
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_end');
        echo "
                        <br> <br>
                        </li>
                    
                </ul>


            </div>
        </div>



    </div>
</div>


";
    }

    // line 246
    public function block_delete($context, array $blocks = array())
    {
        // line 247
        echo "<div class=\"modal hide fade\" id=\"delete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Project? <br>This will delete all tasks and comments related to this project.                          \t\t
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

<div class=\"modal hide fade\" id=\"comment\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Comment?                          \t\t
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
        <p align=\"center\">Are you sure you want to complete this Project? <br>Once completed you cannot undo or assign new task under this project.                          \t\t
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

\t";
    }

    public function getTemplateName()
    {
        return "MoraspiritProjectBundle:Projects:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 247,  476 => 246,  455 => 228,  451 => 227,  447 => 226,  443 => 225,  439 => 224,  435 => 223,  429 => 220,  425 => 219,  421 => 217,  412 => 214,  408 => 213,  405 => 212,  397 => 211,  395 => 210,  388 => 208,  384 => 206,  379 => 204,  372 => 201,  370 => 200,  366 => 199,  363 => 198,  359 => 197,  333 => 173,  322 => 168,  318 => 167,  314 => 165,  309 => 163,  302 => 160,  300 => 159,  296 => 158,  293 => 157,  289 => 156,  267 => 136,  258 => 132,  253 => 129,  249 => 127,  247 => 126,  238 => 122,  230 => 119,  226 => 117,  222 => 115,  218 => 113,  214 => 111,  210 => 109,  208 => 108,  201 => 106,  198 => 105,  194 => 104,  180 => 92,  172 => 87,  168 => 85,  166 => 84,  134 => 54,  129 => 51,  124 => 49,  121 => 48,  119 => 47,  114 => 45,  110 => 44,  102 => 43,  91 => 35,  87 => 34,  83 => 33,  75 => 27,  65 => 22,  60 => 21,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  32 => 5,  29 => 4,);
    }
}
