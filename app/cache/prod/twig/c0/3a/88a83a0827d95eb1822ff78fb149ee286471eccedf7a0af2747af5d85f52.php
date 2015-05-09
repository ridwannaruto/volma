<?php

/* MoraspiritTaskBundle:Tasks:new.html.twig */
class __TwigTemplate_c03a88a83a0827d95eb1822ff78fb149ee286471eccedf7a0af2747af5d85f52 extends Twig_Template
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
    <div class=\"row-fluid\">

        <h2><i class=\"icon-locked\"></i> Assign New Task</h2>
        <hr>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"control-group primary\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Assign Task To"));
        echo "

            <div class=\"controls\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Task Manager"));
        echo "

            <div class=\"controls\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Task Name"));
        echo "

            <div class=\"controls\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

            <div class=\"controls\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Project"));
        echo "

            <div class=\"controls\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Difficulty"));
        echo "

            <div class=\"controls\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'errors');
        echo "</span>
            </div>
        </div>
        
         <div class=\"control-group primary\">
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

            <div class=\"controls\">
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Objectives"));
        echo "

            <div class=\"controls\">
                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Start Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Due Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'errors');
        echo "</span>
            </div>
        </div>
        
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endtimestamp"), 'widget', array("type" => "hidden"));
        echo "               
               
       
        
        <div class=\"control-group primary\">
                    

            <div class=\"controls\">
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "
       
            </div>
        </div>
        ";
        // line 113
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        

        


    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "MoraspiritTaskBundle:Tasks:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 113,  233 => 109,  222 => 101,  215 => 97,  211 => 96,  205 => 93,  197 => 88,  193 => 87,  187 => 84,  179 => 79,  175 => 78,  169 => 75,  161 => 70,  157 => 69,  151 => 66,  143 => 61,  139 => 60,  133 => 57,  125 => 52,  121 => 51,  115 => 48,  107 => 43,  103 => 42,  97 => 39,  89 => 34,  85 => 33,  79 => 30,  71 => 25,  67 => 24,  61 => 21,  53 => 16,  49 => 15,  43 => 12,  38 => 10,  31 => 5,  28 => 4,);
    }
}
