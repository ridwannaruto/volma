<?php

/* MoraspiritUserBundle:Account:resetmail.html.twig */
class __TwigTemplate_d25832da9951e5def7616b6ca8084c319136fc65a3000081909f30eb2189a23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Bundle Password Reset</title>
</head>

<body>
<table width=\"600px\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  
  <tr>
    <td align=\"center\" valign=\"top\" bgcolor=\"#f1f69d\" style=\"background-color:#f1f69d; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:10px;\"><table width=\"400px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-top:10px;\">
        <tr>
          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#525252;\">
          
          <div style=\"font-family:Georgia, 'Times New Roman', Times, serif; font-size:56px; color:#478730;\">Bundle System | <span style=\"color:red;\">Moraspirit</span></div>
          <img src=\"http://www.pixelzexplorer.org/Moraspirit/web/bundles/moraspiritstyle/img/msplogo.png\" width=\"200\" height=\"200\" align=\"right\" style=\"margin-left:10px;\">
\t\t  <div style=\"font-size:28px;\"><br>
            Hi ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! <br> You recently requested a password reset</div>
            <div> <br><br><br><br>
                                Please click the following link to change your password : <br><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">Click Here</a>
              <br><br>
           </div></td>
        </tr>
      </table></td>
  </tr>
 
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoraspiritUserBundle:Account:resetmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  38 => 18,  19 => 1,);
    }
}
