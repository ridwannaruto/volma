<?php

/* CoreBundle:Home:admin.html.twig */
class __TwigTemplate_31e371372b357151138ebaa7f902fd8d4b7e8542ce2a2a133d73b491f62b579e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle:Base:base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "    <div id=\"content\" class=\"span10\">

        <div class=\"row-fluid\">
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 21
            echo "                                <li>

                                    <div class =\"pull-right\">
                                        ";
            // line 24
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 25
                echo "                                            <span class=\"label label-warning\">Pending</span>   <br><br>
                                            <button url=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Activate", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>
                                            <button url=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Reject", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>
                                        ";
            } else {
                // line 29
                echo "                                            <span class=\"label label-success\">Activated</span>   <br><br>
                                        ";
            }
            // line 31
            echo "                                    </div>
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">
                                        ";
            // line 33
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") == null)) {
                // line 34
                echo "                                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">
                                        ";
            } else {
                // line 36
                echo "                                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">

                                        ";
            }
            // line 39
            echo "                                        <strong>Name:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                                    </a><br>
                                    <strong>Department:</strong> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "department"), "html", null, true);
            echo "
                                    <br>
                                    <strong>Last Login:</strong> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastlogin"), "Y-m-d  H:i:s"), "html", null, true);
            echo "<br><br>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        // line 64
        if (((isset($context["taskList"]) ? $context["taskList"] : $this->getContext($context, "taskList")) != null)) {
            // line 65
            echo "                        <table class=\"table table-striped\">
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
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taskList"]) ? $context["taskList"] : $this->getContext($context, "taskList")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 76
                echo "                                <tr>
                                    <td width=\"20%\">
                                        <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                echo "</a>
                                    </td>
                                    <td width=\"10%\" class=\"center\">
                                        ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                echo "
                                    </td>
                                    <td  width=\"60%\" class=\"center\">
                                        ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                echo "
                                    </td>
                                    <td  width=\"10%\" class=\"center\">
                                        ";
                // line 87
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                    // line 88
                    echo "                                            <span class=\"label label-info\">Normal</span>
                                        ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                    // line 90
                    echo "                                            <span class=\"label label-warning\">Important</span>
                                        ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                    // line 92
                    echo "                                            <span class=\"label label-inverse\">Can Wait</span>
                                        ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                    // line 94
                    echo "                                            <span class=\"label label-important\">Urgent</span>
                                        ";
                }
                // line 96
                echo "
                                    </td>
                                </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                            </tbody>
                        </table>

                    ";
        } else {
            // line 106
            echo "                        <p align =\"center\">
                            you have no task to complete
                        </p>

                    ";
        }
        // line 111
        echo "                </div>
            </div><!--/span-->
        </div><!--/row-->

    </div>


    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to delete this User?<br>His/Her account will be deleted from the System.
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
            <p align=\"center\">Are you sure this is a member of your pillar?
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
        return "CoreBundle:Home:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 111,  218 => 106,  211 => 101,  201 => 96,  197 => 94,  193 => 92,  189 => 90,  185 => 88,  183 => 87,  177 => 84,  171 => 81,  163 => 78,  159 => 76,  155 => 75,  143 => 65,  141 => 64,  121 => 46,  112 => 43,  107 => 41,  99 => 39,  92 => 36,  88 => 34,  86 => 33,  82 => 32,  79 => 31,  75 => 29,  68 => 27,  62 => 26,  59 => 25,  57 => 24,  52 => 21,  48 => 20,  31 => 5,  28 => 4,);
    }
}
