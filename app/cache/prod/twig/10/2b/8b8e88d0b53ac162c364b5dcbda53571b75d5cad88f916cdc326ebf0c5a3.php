<?php

/* MoraspiritSiteBundle:Members:index.html.twig */
class __TwigTemplate_102b8b8e88d0b53ac162c364b5dcbda53571b75d5cad88f916cdc326ebf0c5a3 extends Twig_Template
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
    
    <div class=\"row-fluid sortable\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Spiriters </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 18
        if (((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")) != null)) {
            // line 19
            echo "                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Batch</th>
                            <th>Pillar</th>
                            <th>Type</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 31
                echo "                        <tr>
                            <td width=\"30%\">
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
                echo "</a>
                            </td>
                            <td width=\"20%\" class=\"center\">
                                ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "department"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "batch"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"20%\" class=\"center\"> 
                                ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "pillar"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                ";
                // line 45
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "accesslevel") == "Admin")) {
                    // line 46
                    echo "                                <span class=\"label label-important\">Administrator</span>   
                                ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "accesslevel") == "Head")) {
                    // line 48
                    echo "                                <span class=\"label label-warning\">Pillar Head</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "accesslevel") == "Spiriter")) {
                    // line 50
                    echo "                                <span class=\"label label-info\">Spiriter</span>  
                            
                                ";
                }
                // line 53
                echo "
                            </td>                                       
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
                    </tbody>
                </table>                 

                ";
        } else {
            // line 63
            echo "                <p align =\"center\">
                    you have no task to complete
                </p>

                ";
        }
        // line 68
        echo "            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>



";
    }

    public function getTemplateName()
    {
        return "MoraspiritSiteBundle:Members:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  129 => 63,  122 => 58,  112 => 53,  107 => 50,  103 => 48,  99 => 46,  97 => 45,  91 => 42,  85 => 39,  79 => 36,  69 => 33,  65 => 31,  61 => 30,  48 => 19,  46 => 18,  31 => 5,  28 => 4,);
    }
}
