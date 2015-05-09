<?php

/* MoraspiritStyleBundle:Error:permission.html.twig */
class __TwigTemplate_b784a133b98c1bdc8feb8ebcf1d3b50f5970b63aaa5c1df38f1e85bca37822fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
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

    // line 3
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br><br><br><br><br><br>
<div class=\"alert alert-error center span8\">
    
    <strong>Access Denied!</strong> <br>you do not have permssion! <br>Please contact site admin.
</div>
<br>
<br><br><br><br><br><br>


";
    }

    public function getTemplateName()
    {
        return "MoraspiritStyleBundle:Error:permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  29 => 3,);
    }
}
