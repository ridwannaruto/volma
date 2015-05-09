<?php

/* MoraspiritUserBundle:Account:Settings.html.twig */
class __TwigTemplate_0e3d41304519636a52c2ce8a89f3a018752df92ff227e09d456739040779703c extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
                    
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
\t\t
                        <div id=\"content\" class=\"span10 \">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
                            <div class=\"box span12\">
                                
\t\t\t\t\t<div class=\"box-header well\">
                                            
\t\t\t\t\t\t<h2><i class=\"icon-locked\"></i> Change Password</h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content span12 \">
                                            
                                            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  
                                             <div class=\"control-group error \">
                      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Current Password"));
        echo "
          
                         <div class=\"controls\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'errors');
        echo "</span>
                       </div></div>

  <div class=\"control-group success\">
      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "New Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'errors');
        echo "</span>
                       </div></div>
                                      
                                                     
                                                     <div class=\"control-group success\">
      ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirm Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'errors');
        echo "</span>
                       </div></div>
                               ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
                                             <div class=\"control-group primary\">         
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "   
                            <div class=\"controls\">
                                 ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "                           
                            </div></div>      
                                            
                                  ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                       </form>                 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t
                          
\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t\t
\t\t\t
\t\t\t\t\t<!-- content ends -->
\t\t\t</div><!--/#content.span10-->
\t\t\t
\t\t\t\t</div><!--/fluid-row-->
\t\t
\t</div><!--/.fluid-container-->
        
       
    
        



";
    }

    public function getTemplateName()
    {
        return "MoraspiritUserBundle:Account:Settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 64,  124 => 61,  119 => 59,  114 => 57,  109 => 55,  105 => 54,  99 => 51,  91 => 46,  87 => 45,  81 => 42,  74 => 38,  70 => 37,  64 => 34,  58 => 31,  31 => 6,  28 => 5,);
    }
}
