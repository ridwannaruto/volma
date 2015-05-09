<?php

/* MoraspiritUserBundle:Profile:photo.html.twig */
class __TwigTemplate_26a06147b3c83d6551c59dd9fac2f1376c4e5daf15a5f7ed9acb9fdf1ab689c8 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t
\t\t\t
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
                        <div id=\"content\" class=\"span10\">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
                            <div class=\"box span6 center\">
                                
\t\t\t\t\t<div class=\"box-header well\">
                                            
\t\t\t\t\t\t<h2> Upload Photo</h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content span12 center\">
\t\t\t\t\t\t
                                       
\t\t\t\t\t
                                                <div class=\"propic\" >
                                            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path"), "html", null, true);
        echo "\" width=\"300\" height=\"300\"></h2>
                                                </div> <br>
                                                <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("moraspirit_profile_picture");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                                    please upload a high quality photo in the resolution of 400 x 400<br>
                                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                                    <br>
                                                   <input type=\"submit\" class='btn btn-success' value=\"Update\" />
                                                   
                                                </form>         
                                               
                                           
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t
                          
\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
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
        return "MoraspiritUserBundle:Profile:photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 39,  66 => 37,  61 => 35,  31 => 7,  28 => 6,);
    }
}
