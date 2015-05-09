<?php

/* MoraspiritTaskBundle:Tasks:index.html.twig */
class __TwigTemplate_4997345e9a35a667f299d5753e3e5772cb664bd5692147d3219938d5796bd490 extends Twig_Template
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

        ";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Head") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Admin"))) {
            // line 8
            echo "    <div class=\"row-fluid\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("moraspirit_task_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add Task </button></a>
           
        </div>
    </div><br>
                ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-list-alt\"></i> Ongoing Tasks</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <br>

                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                                <th width=\"10%\">Project</th>
                                <th width=\"45%\">Details</th>
                                 <th width=\"15%\">Pillar</th>
                                <th width=\"15%\">Assigned To</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ITasks"]) ? $context["ITasks"] : $this->getContext($context, "ITasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 47
            echo "                    <tr>
                                <td>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "taskname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\">
                                     <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "project"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "projectname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
            echo "
                                </td>
                                 <td class=\"center\"> 
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "pillar"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "lastname"), "html", null, true);
            echo " </a> 

                                </td>                                       
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
                </table>            
            </div>

        </div>

        <div class=\"row-fluid\">
            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>
                    <h2><i class=\"icon-list-alt\"></i> Completed Tasks</h2>
                    <div class=\"box-icon\">

                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>
                <div class=\"box-content\">
                    <br>

                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                        <thead>
                            <tr>
                               <th width=\"15%\">Task</th>
                                <th width=\"10%\">Project</th>
                                <th width=\"45%\">Details</th>
                                 <th width=\"15%\">Pillar</th>
                                <th width=\"15%\">Assigned To</th> 

                            </tr>
                        </thead>   

                        <tbody>
\t\t\t\t\t\t\t   ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 100
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "taskname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\">
                                     <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "project"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "projectname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "pillar"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "lastname"), "html", null, true);
            echo " </a>

                                </td>                                       
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </tbody>
                    </table>            
                </div>

            </div>


        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "MoraspiritTaskBundle:Tasks:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 120,  204 => 114,  198 => 111,  192 => 108,  184 => 105,  176 => 102,  172 => 100,  168 => 99,  133 => 66,  118 => 61,  112 => 58,  106 => 55,  98 => 52,  90 => 49,  86 => 47,  82 => 46,  49 => 15,  41 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
