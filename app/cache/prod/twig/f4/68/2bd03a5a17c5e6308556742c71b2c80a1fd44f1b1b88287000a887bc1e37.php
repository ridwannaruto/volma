<?php

/* MoraspiritStyleBundle:Error:error.html.twig */
class __TwigTemplate_f4682bd03a5a17c5e6308556742c71b2c80a1fd44f1b1b88287000a887bc1e37 extends Twig_Template
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

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<br><br><br><br><br><br>
<div class=\"alert alert-error center span8\">
    
    <strong>Error</strong> <br>Ops! Something went wrong. Please contact admin if problem persists. <br><br>
    <strong>Message:</strong>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
</div>
<br>
<br><br><br><br><br><br>


";
    }

    public function getTemplateName()
    {
        return "MoraspiritStyleBundle:Error:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 5,  34 => 4,  29 => 2,);
    }
}
