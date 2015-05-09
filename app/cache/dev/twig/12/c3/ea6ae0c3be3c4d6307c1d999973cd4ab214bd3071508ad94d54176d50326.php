<?php

/* ProjectBundle:Project:list.html.twig */
class __TwigTemplate_12c3ea6ae0c3be3c4d6307c1d999973cd4ab214bd3071508ad94d54176d50326 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">

        ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access_level"), "method") == "Admin")) {
            // line 8
            echo "    <div class=\"row-fluid\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("project_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> New Project </button></a>
           
        </div>
    </div><br>
                ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-edit\"></i> Ongoing Projects</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <br>

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
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ongoingProjectList"]) ? $context["ongoingProjectList"] : $this->getContext($context, "ongoingProjectList")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 46
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_detail", array("projectId" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "objectives"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\"> 
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
            echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "due"), "html", null, true);
            echo "
                            </td>
                                                                 
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>            
            </div>

        </div>

        <div class=\"row-fluid\">
            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>
                    <h2><i class=\"icon-edit\"></i> Completed Projects</h2>
                    <div class=\"box-icon\">

                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>
                <div class=\"box-content\">
                    <br>

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
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["completedProjectList"]) ? $context["completedProjectList"] : $this->getContext($context, "completedProjectList")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 97
            echo "                           <tr>
                            <td>
                                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_detail", array("projectId" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "objectives"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\"> 
                                ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
            echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "end"), "Y-m-d"), "html", null, true);
            echo "
                            </td>
                                                                 
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        return "ProjectBundle:Project:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 115,  185 => 109,  178 => 105,  172 => 102,  164 => 99,  160 => 97,  156 => 96,  122 => 64,  110 => 58,  103 => 54,  97 => 51,  89 => 48,  85 => 46,  81 => 45,  49 => 15,  41 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
