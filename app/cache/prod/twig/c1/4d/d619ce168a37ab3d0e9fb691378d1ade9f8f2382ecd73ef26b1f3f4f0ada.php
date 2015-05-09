<?php

/* MoraspiritNotificationBundle:Task:allnotification.html.twig */
class __TwigTemplate_c14dd619ce168a37ab3d0e9fb691378d1ade9f8f2382ecd73ef26b1f3f4f0ada extends Twig_Template
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
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Your Notifications </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 18
        if (((isset($context["AllNotifications"]) ? $context["AllNotifications"] : $this->getContext($context, "AllNotifications")) != null)) {
            // line 19
            echo "                        <div class=\"box-content alerts\">
                            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["AllNotifications"]) ? $context["AllNotifications"] : $this->getContext($context, "AllNotifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 21
                echo "                             ";
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                    // line 22
                    echo "                                
                                <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\"><li>
\t\t\t\t
                                ";
                } else {
                    // line 26
                    echo "                          
                                <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\"> <li>
                                
                                ";
                }
                // line 30
                echo "                            
                           
                             ";
                // line 32
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                    // line 33
                    echo "                            <div class=\"alert alert-error\">
                                <button url=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                <div class = \"pull-right\">
                                ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>

                                <strong><h5>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                                
                                ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "
                                <br>
                            </div>

                            ";
                }
                // line 46
                echo "
                              ";
                // line 47
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                    // line 48
                    echo "                            <div class=\"alert alert-success\">
                                <button url=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
 \t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                               
                                ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>
                               
                               
                                
                            </div>

                            ";
                }
                // line 62
                echo "
                              ";
                // line 63
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                    // line 64
                    echo "                            <div class=\"alert alert-heading\">
                                <button url=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                          
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>
                            </div>

                            ";
                }
                // line 75
                echo "                              ";
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                    // line 76
                    echo "                            <div class=\"alert alert-info\">
                                <button url=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                         
                                ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>

                            </div>

                            ";
                }
                // line 88
                echo "\t\t\t\t</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </div>
                        ";
        } else {
            // line 92
            echo "                        <li align =\"center\">
                            no notifications
                        </li></a>
                        ";
        }
        // line 95
        echo "\t
            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>



";
    }

    public function getTemplateName()
    {
        return "MoraspiritNotificationBundle:Task:allnotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 95,  220 => 92,  216 => 90,  209 => 88,  201 => 83,  196 => 81,  191 => 79,  184 => 77,  181 => 76,  178 => 75,  171 => 71,  166 => 69,  161 => 67,  154 => 65,  151 => 64,  149 => 63,  146 => 62,  136 => 55,  131 => 53,  126 => 51,  119 => 49,  116 => 48,  114 => 47,  111 => 46,  103 => 41,  98 => 39,  92 => 36,  85 => 34,  82 => 33,  80 => 32,  76 => 30,  70 => 27,  67 => 26,  61 => 23,  58 => 22,  55 => 21,  51 => 20,  48 => 19,  46 => 18,  31 => 5,  28 => 4,);
    }
}
