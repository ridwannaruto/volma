<?php

/* ProjectBundle:Project:details.html.twig */
class __TwigTemplate_1e870999025eb08f0bf0579f8c0194bf9954375fde1798072025e28faca97894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle:Base:base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager"))) {
            // line 15
            echo "                    <div class=\"pull-right\">
                        ";
            // line 16
            if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 0)) {
                // line 17
                echo "                        <button class=\"btn btn-small btn-complete btn-success\" url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_complete", array("projectId" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
                echo "\" >complete </button>
                        <a href=\" ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("projectId" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
                echo "\"><button  class=\"btn btn-small btn-inverse\">edit</button></a>
                       ";
            }
            // line 20
            echo "                        <button class=\"btn btn-small btn-danger btn-delete\" url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_delete", array("projectId" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
            echo "\" > delete </button>

                        <br>
                    </div>
                ";
        }
        // line 25
        echo "
                    <br>
                    <table width=\"100%\">
                        <tr>
                            <td width =\"5%\"></td>
                            <td width =\"55%\" align=\"justify\">
                                <h3>Project</h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "name"), "html", null, true);
        echo "<br><br>                                
                                <h3>Objectives</h3>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "objectives"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "description"), "html", null, true);
        echo "<br><br>
                                
                                
                            </td>
                            <td width=\"5%\">

                            </td>
                            <td width =\"35%\">
                                <h3>Manager</h3><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Started</h3>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "start"), "html", null, true);
        echo "<br><br>
                                <h3>Due</h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "due"), "html", null, true);
        echo "<br><br>
                                 <h3>Status</h3>
                                ";
        // line 45
        if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 1)) {
            // line 46
            echo "                                 <span class=\"label label-success\">Completed</span>   <br><br>
                                 <h3>Ended</h3>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "end"), "Y-m-d"), "html", null, true);
            echo "<br><br>
                                ";
        } else {
            // line 49
            echo "                                <span class=\"label label-warning\">Not Completed</span>  <br>

                                ";
        }
        // line 52
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
        // line 82
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Head") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager")))) {
            // line 83
            echo "                        <div class=\"row-fluid\">
                            <div class=\"pull-right\">
                                <a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("task_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add Task </button></a>

                            </div>
                        </div><br>
                       ";
        }
        // line 90
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
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 103
            echo "  <tr>
                                    <td align=\"center\"><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_detail", array("taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 0, array(), "array"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 2, array(), "array"), "html", null, true);
            echo "</a></td>
                                    <td align=\"center\">
                                         ";
            // line 106
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 1)) {
                // line 107
                echo "                                        <span class=\"label label-info\">Normal</span>   
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 2)) {
                // line 109
                echo "                                        <span class=\"label label-warning\">Important</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 3)) {
                // line 111
                echo "                                        <span class=\"label label-inverse\">Can Wait</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 4)) {
                // line 113
                echo "                                        <span class=\"label label-important\">Urgent</span>  
                                ";
            }
            // line 115
            echo "
                                    </td>
                                    <td align=\"center\"><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 4, array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 5, array(), "array"), "html", null, true);
            echo "</a>

                                    </td>   
                                    <td align=\"center\"><a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 6, array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 7, array(), "array"), "html", null, true);
            echo "</a>

                                    </td> 
                                    <td align=\"center\">
                                    ";
            // line 124
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 1, array(), "array") == 1)) {
                // line 125
                echo "                                        <span class=\"label label-success\">Completed</span>   
                                ";
            } else {
                // line 127
                echo "                                        <span class=\"label label-warning\">Not Completed</span>  

                                ";
            }
            // line 130
            echo "                                    </td> 
                                  
                                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
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
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Members"]) ? $context["Members"] : $this->getContext($context, "Members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 155
            echo "                    <li>
                        <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 0, array(), "array"))), "html", null, true);
            echo "\">
                             ";
            // line 157
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array") != null)) {
                // line 158
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 161
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 163
            echo " 
                     
                        <strong>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 1, array(), "array"), "html", null, true);
            echo "</strong></a><br>
                        <span class=\"label label-inverse\">";
            // line 166
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
        // line 171
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
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 196
            echo "                    <li>
                        <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 198
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path") != null)) {
                // line 199
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path"), "html", null, true);
                echo "\">  
                            
                        ";
            } else {
                // line 202
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 204
            echo " 
             
                        <strong>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
            echo "</strong>
                        </a>         
                        ";
            // line 208
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method"))) {
                // line 209
                echo "                        <button url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_delete", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                        ";
            }
            // line 210
            echo " <br> 
                        ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "<br>
                         <span class=\"pull-right\"><h6>";
            // line 212
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></span><br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                    
                    <li>
                         <a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method"))), "html", null, true);
        echo "\">
                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\">
                     
                        </a>
                        ";
        // line 221
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_start');
        echo "
                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "comment"), 'widget');
        echo "<br>
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "task"), 'widget', array("type" => "hidden"));
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "project"), 'widget', array("type" => "hidden", "value" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id")));
        echo "
                        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary span2 pull-right")));
        echo "
                        ";
        // line 226
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

    // line 244
    public function block_delete($context, array $blocks = array())
    {
        // line 245
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
        return "ProjectBundle:Project:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 245,  474 => 244,  453 => 226,  449 => 225,  445 => 224,  441 => 223,  437 => 222,  433 => 221,  427 => 218,  423 => 217,  419 => 215,  410 => 212,  406 => 211,  403 => 210,  395 => 209,  393 => 208,  386 => 206,  382 => 204,  377 => 202,  370 => 199,  368 => 198,  364 => 197,  361 => 196,  357 => 195,  331 => 171,  320 => 166,  316 => 165,  312 => 163,  307 => 161,  300 => 158,  298 => 157,  294 => 156,  291 => 155,  287 => 154,  265 => 134,  256 => 130,  251 => 127,  247 => 125,  245 => 124,  236 => 120,  228 => 117,  224 => 115,  220 => 113,  216 => 111,  212 => 109,  208 => 107,  206 => 106,  199 => 104,  196 => 103,  192 => 102,  178 => 90,  170 => 85,  166 => 83,  164 => 82,  132 => 52,  127 => 49,  122 => 47,  119 => 46,  117 => 45,  112 => 43,  108 => 42,  100 => 41,  89 => 33,  85 => 32,  81 => 31,  73 => 25,  62 => 20,  57 => 18,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  32 => 5,  29 => 4,);
    }
}
