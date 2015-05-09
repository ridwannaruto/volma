<?php

/* MoraspiritTaskBundle:Tasks:complete.html.twig */
class __TwigTemplate_802d50c3b188d784993cb7c8fab620d6dcce7e7e694d5355dcfd0ba9307cfda4 extends Twig_Template
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
        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Task</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td >
                                <h3>Task</h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "name"), "html", null, true);
        echo "<br><br>
                                <h3>Type</h3>
                                ";
        // line 23
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 1)) {
            // line 24
            echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 2)) {
            // line 26
            echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 3)) {
            // line 28
            echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 4)) {
            // line 30
            echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
        }
        // line 32
        echo "                                <br><br>

                                <h3>Assigned To</h3><a href=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Pillar</h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "pillar"), "html", null, true);
        echo "<br><br>
                                <h3>Due Date</h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "duetimestamp"), "html", null, true);
        echo "<br><br>

                                 <h3>Goal</h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "goals"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "description"), "html", null, true);
        echo "<br><br>


                            </td>
                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>

        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Feedback</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>

                            <td width =\"5%\"></td>
                            <td >
                                <form name=\"moraspirit_feedback\" method=\"POST\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_complete", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
        echo "\" class=\"form-horizontal center\">

                                    <div class=\"control-group\">
                                        <h3>Rate</h3>Please provide a rating from 1-10 for this specific task<br><br>

                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating1\" value=\"1\" required >
                                            Dissapointed
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating2\" value=\"2\">
                                            Very Poor
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating3\" value=\"3\">
                                            Poor
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating4\" value=\"4\">
                                            Average
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating5\" value=\"5\" >
                                            Normal
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating6\" value=\"6\">
                                            Satisfied
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating7\" value=\"7\" >
                                            Good
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating8\" value=\"8\">
                                            Very Good
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating9\" value=\"9\">
                                            Excellent
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating10\" value=\"10\">
                                            Marvelous
                                        </label><br>

                                    </div>
                                    <h3>Feedack</h3>
                                    Please provide a valuable feedback on the work carried out by ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo ". ( Work quality, professional behaviour, efficiency etc )

                                    <br><br>
                                    <div class=\"control-group primary\">                                      

                                        <textarea id=\"moraspirit_entitybundle_task_description\" name=\"feedback\" required=\"required\" placeholder=\"type your feedback here..\" class=\"span12\"></textarea>

                                    </div>

                                    <br><div class=\"controls\">
                                        <button type=\"submit\" id=\"moraspirit_submit\" name=\"complete\" class=\"btn btn-success span6\">Complete Task</button>
                                    </div>

                                </form>

                            </td>

                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>



";
    }

    // line 156
    public function block_delete($context, array $blocks = array())
    {
        // line 157
        echo "    <div class=\"modal hide fade\" id=\"delete\">
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

\t";
    }

    public function getTemplateName()
    {
        return "MoraspiritTaskBundle:Tasks:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 157,  224 => 156,  184 => 121,  128 => 68,  96 => 39,  92 => 38,  87 => 36,  83 => 35,  77 => 34,  73 => 32,  69 => 30,  65 => 28,  61 => 26,  57 => 24,  55 => 23,  50 => 21,  32 => 5,  29 => 4,);
    }
}
