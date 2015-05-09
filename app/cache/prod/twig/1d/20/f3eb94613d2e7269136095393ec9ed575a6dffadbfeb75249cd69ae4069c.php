<?php

/* MoraspiritNotificationBundle:Register:confirm.html.twig */
class __TwigTemplate_1d20f3eb94613d2e7269136095393ec9ed575a6dffadbfeb75249cd69ae4069c extends Twig_Template
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
<title>Bundle Registration</title>
</head>

<body>
<table width=\"600px\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  
  <tr>
    <td align=\"center\" valign=\"top\" bgcolor=\"#f1f69d\" style=\"background-color:#f1f69d; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:10px;\"><table width=\"400px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-top:10px;\">
        <tr>
          <td align=\"left\" valign=\"top\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#525252;\">
          
          <div style=\"font-family:Georgia, 'Times New Roman', Times, serif; font-size:56px; color:#478730;\">Bundle System | <span style=\"color:red;\">Moraspirit</span></div>
          <img src=\"http://www.volma.moraspirit.com/web/bundles/moraspiritstyle/img/msplogo.png\" width=\"200\" height=\"200\" align=\"right\" style=\"margin-left:10px;\">
\t\t  <div style=\"font-size:28px;\"><br>
            Hi ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! <br> Your account is ready to be activated.</div>
            <div> <br><br><br><br>
                                Please click the following link to activate your account: <br><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["activate"]) ? $context["activate"] : $this->getContext($context, "activate")), "html", null, true);
        echo "\">Click Here</a>
              <br><br><br>
                          <font color=\"red\">If you didn't regsiter at Bundle | Moraspirit, please click the following link to delete this account. </font><br><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["delete"]) ? $context["delete"] : $this->getContext($context, "delete")), "html", null, true);
        echo "\">Click Here</a>
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
        return "MoraspiritNotificationBundle:Register:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  43 => 20,  38 => 18,  19 => 1,);
    }
}
