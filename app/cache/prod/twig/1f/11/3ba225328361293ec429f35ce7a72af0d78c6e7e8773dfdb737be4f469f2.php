<?php

/* MoraspiritUserBundle:Account:ForgotPassword.html.twig */
class __TwigTemplate_1f113ba225328361293ec429f35ce7a72af0d78c6e7e8773dfdb737be4f469f2 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row-fluid\">

        <br><br>

        <div class=\"row-fluid\">
            <div class=\"well span4 center login-box\">
                <!--<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moraspiritstyle/img/msplogo.png"), "html", null, true);
        echo " \" width = \"150px\"/><br><br><br><br>-->
                ";
        // line 13
        if (array_key_exists("details", $context)) {
            // line 14
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 18
        echo "                <div><label class=\"control-label required\">Enter your Email Address</label></div>
                <form class=\"form-horizontal\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("moraspirit_forgot_password");
        echo "\" method=\"post\">  
                    <div class=\"control-group\">
                         <div>
                        <input type=\"email\" name=\"email\" required=\"required\" />
                       </div>
                    <button type=\"submit\" class=\"btn\">Continue</button> </p>
                </form>

            </div><!--/span-->
            

        </div><!--/row-->
       
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

";
    }

    public function getTemplateName()
    {
        return "MoraspiritUserBundle:Account:ForgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  37 => 5,  34 => 4,  29 => 2,);
    }
}
