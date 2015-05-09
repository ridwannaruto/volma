<?php

/* TaskBundle:Task:detail.html.twig */
class __TwigTemplate_283eb7f886a97724f99aba92c51b83633e84863491251664c128020231d49309 extends Twig_Template
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
                    <h2>Task Details</h2>
                    <hr>
                     ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method") == $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "leader"))) {
            // line 15
            echo "                    <div class=\"pull-right\">
                        ";
            // line 16
            if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 0)) {
                // line 17
                echo "                        <a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_completePage", array("taskId" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
                echo "\"><button  class=\"btn btn-small btn-success\">complete</button></a>
                         ";
            }
            // line 19
            echo "                        <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("taskId" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
            echo "\"><button  class=\"btn btn-small btn-inverse\">edit</button></a>
                        <button class=\"btn btn-small btn-danger btn-delete\" url=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_delete", array("taskId" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"), "html", null, true);
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
                            <td width =\"55%\">
                                <h3>Task</h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "name"), "html", null, true);
        echo "<br><br>
                                <h3>Type</h3>
                                ";
        // line 33
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 1)) {
            // line 34
            echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 2)) {
            // line 36
            echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 3)) {
            // line 38
            echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 4)) {
            // line 40
            echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
        }
        // line 42
        echo "                                <br><br>
                                <h3>Goal</h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "goals"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "description"), "html", null, true);
        echo "<br><br>
                            </td>
                            <td width=\"5%\">

                            </td>
                            <td width =\"35%\">
                                <h3>Project</h3><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_detail", array("projectId" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "name"), "html", null, true);
        echo "</a><br><br>
                                <h3>Manager</h3><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Assigned To</h3><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Pillar</h3>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "pillar"), "html", null, true);
        echo "<br><br>
                                <h3>Due</h3>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "duetimestamp"), "html", null, true);
        echo "<br><br>

                            </td>
                        </tr>
                        <tr><td width=\"5%\">

                            </td>
                            <td width=\"20%\">
                                <h3>Status</h3>
                                ";
        // line 63
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 1)) {
            // line 64
            echo "                                <span class=\"label label-success\">Completed</span>   
                                 <br><br>
                                 <h3>Rating</h3>
                                <span class=\"label label-info\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "rate"), "html", null, true);
            echo "</span> /10  
                                ";
        } else {
            // line 69
            echo "                                <span class=\"label label-warning\">Not Completed</span>  

                                ";
        }
        // line 72
        echo "                                
                               
                            </td>
                            
                                
                                ";
        // line 77
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 1)) {
            // line 78
            echo "                                  <td width=\"5%\">

                            </td><td>
                                <h3>Ended</h3>
                                ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "endtimestamp"), "Y-m-d"), "html", null, true);
            echo "
                              
                              
                            </td>
                         
                                ";
        }
        // line 88
        echo "                                <br>
                          

                        </tr>
                    </table>
                    <br>


                </div>
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
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 117
            echo "                    <li>
                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 119
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path") != null)) {
                // line 120
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 123
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 125
            echo "   
                        <strong>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
            echo "</strong>
                        </a>";
            // line 127
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method"))) {
                // line 128
                echo "                        <button url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_delete", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                        ";
            }
            // line 130
            echo "                        <br>
                        ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "<br>
                         <span class=\"pull-right\"><h6>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></span><br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    
                    <li>
                         <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_id"), "method"))), "html", null, true);
        echo "\">
                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\">     
                            
                        </a>
                        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_start');
        echo "
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "comment"), 'widget');
        echo "<br><br>
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "task"), 'widget', array("type" => "hidden", "value" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id")));
        echo "
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "project"), 'widget', array("type" => "hidden"));
        echo "
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary span2 pull-right")));
        echo "
                         ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_end');
        echo "
                        <br>
                        </li>
                    
                </ul>


            </div>
        </div>



    </div>
</div>


";
    }

    // line 164
    public function block_delete($context, array $blocks = array())
    {
        // line 165
        echo "<div class=\"modal hide fade\" id=\"delete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Task?                          \t\t
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

\t";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Task:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 165,  342 => 164,  321 => 146,  317 => 145,  313 => 144,  309 => 143,  305 => 142,  301 => 141,  295 => 138,  291 => 137,  287 => 135,  278 => 132,  274 => 131,  271 => 130,  263 => 128,  261 => 127,  255 => 126,  252 => 125,  247 => 123,  240 => 120,  238 => 119,  234 => 118,  231 => 117,  227 => 116,  197 => 88,  188 => 82,  182 => 78,  180 => 77,  173 => 72,  168 => 69,  163 => 67,  158 => 64,  156 => 63,  144 => 54,  140 => 53,  132 => 52,  124 => 51,  118 => 50,  109 => 44,  105 => 43,  102 => 42,  98 => 40,  94 => 38,  90 => 36,  86 => 34,  84 => 33,  79 => 31,  71 => 25,  61 => 20,  56 => 19,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  32 => 5,  29 => 4,);
    }
}
