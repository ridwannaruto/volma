<?php

/* CoreBundle:Home:head.html.twig */
class __TwigTemplate_8cd71d841b799086d18a833a4903b763ba2447e78ba79511cbaf19e985f8823b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle:Base:base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle:Base:base.html.twig";
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
                <h2><i class=\"icon-user\"></i> Member Activities</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 21
            echo "                        <li>

                            <div class =\"pull-right\">
                                ";
            // line 24
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 25
                echo "                                <span class=\"label label-warning\">Pending</span>   <br><br>
                                <button url=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Activate", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>\t
                                <button url=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_site_Reject", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>                           
                                ";
            } else {
                // line 29
                echo "                                <span class=\"label label-success\">Activated</span>   <br><br>
                                ";
            }
            // line 31
            echo "                            </div>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">
                                                                                ";
            // line 33
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path") == null)) {
                // line 34
                echo "                                <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 36
                echo "                                <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "path"), "html", null, true);
                echo "\">

                                                                                ";
            }
            // line 39
            echo "                                <strong>Name:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                            </a><br>
                            <strong>Department:</strong> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "department"), "html", null, true);
            echo "
                            <br>
                            <strong>Last Login:</strong> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastlogin"), "Y-m-d  H:i:s"), "html", null, true);
            echo "<br><br>
                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div>
    <div class=\"row-fluid sortable\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Ongoing Pillar Tasks </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 64
        if (((isset($context["taskList"]) ? $context["taskList"] : $this->getContext($context, "taskList")) != null)) {
            // line 65
            echo "                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Due Date</th>
                            <th>Details</th>
                            <th>Type</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taskList"]) ? $context["taskList"] : $this->getContext($context, "taskList")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 76
                echo "                        <tr>
                            <td width=\"20%\">
                                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                echo "</a>
                            </td>
                            <td width=\"10%\" class=\"center\">
                                ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"60%\" class=\"center\"> 
                                ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                echo "
                            </td>
                            <td  width=\"10%\" class=\"center\"> 
                                ";
                // line 87
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                    // line 88
                    echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                    // line 90
                    echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                    // line 92
                    echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                    // line 94
                    echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                }
                // line 96
                echo "
                            </td>                                       
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                    </tbody>
                </table>                 

                ";
        } else {
            // line 106
            echo "                <p align =\"center\">
                    you have no task to complete
                </p>

                ";
        }
        // line 111
        echo "            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>


<div class=\"modal hide fade\" id=\"delete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this User?<br>His/Her account will be deleted from the System.                         \t\t
        </p>


    </div>
    <div class=\"modal-footer\">

        <form action=\"empty\" id = \"continue-form\" method=\"POST\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
        </form>

    </div>
</div>

<div class=\"modal hide fade\" id=\"complete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure this is a member of your pillar?                           \t\t
        </p>


    </div>
    <div class=\"modal-footer\">

        <form action=\"empty\" id = \"continue-form\" method=\"POST\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
        </form>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Home:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 64,  97 => 45,  81 => 37,  225 => 111,  197 => 94,  185 => 88,  346 => 41,  261 => 112,  249 => 109,  233 => 102,  218 => 106,  213 => 94,  188 => 84,  178 => 80,  153 => 69,  104 => 36,  76 => 29,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 170,  622 => 165,  617 => 163,  609 => 158,  604 => 156,  591 => 151,  588 => 150,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 132,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 115,  502 => 114,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 379,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 127,  287 => 123,  272 => 117,  267 => 338,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 39,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 148,  293 => 143,  271 => 133,  265 => 113,  253 => 110,  239 => 116,  211 => 101,  165 => 78,  161 => 77,  155 => 75,  124 => 58,  110 => 38,  100 => 35,  77 => 34,  70 => 28,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 166,  620 => 164,  615 => 364,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 401,  412 => 203,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 191,  369 => 183,  364 => 181,  357 => 177,  353 => 63,  350 => 175,  348 => 171,  345 => 368,  332 => 141,  326 => 161,  315 => 158,  310 => 156,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 144,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 111,  207 => 106,  186 => 88,  160 => 64,  137 => 65,  34 => 5,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 289,  589 => 286,  585 => 352,  577 => 280,  568 => 273,  557 => 137,  552 => 135,  548 => 264,  543 => 262,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 253,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 75,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 168,  354 => 166,  349 => 42,  342 => 161,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 152,  300 => 139,  295 => 137,  291 => 135,  286 => 133,  279 => 130,  277 => 119,  256 => 119,  248 => 113,  237 => 108,  232 => 106,  228 => 100,  223 => 98,  216 => 99,  210 => 97,  205 => 94,  192 => 87,  150 => 65,  148 => 64,  134 => 58,  126 => 53,  118 => 41,  84 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 225,  457 => 221,  453 => 151,  444 => 149,  440 => 209,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 137,  314 => 99,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 146,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 81,  252 => 332,  247 => 330,  241 => 77,  229 => 112,  220 => 70,  214 => 98,  177 => 84,  169 => 73,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  61 => 18,  273 => 128,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 115,  230 => 318,  227 => 81,  224 => 117,  221 => 107,  219 => 76,  217 => 106,  208 => 92,  204 => 72,  179 => 234,  159 => 76,  143 => 65,  135 => 54,  119 => 42,  102 => 36,  71 => 28,  67 => 31,  63 => 29,  59 => 25,  93 => 43,  88 => 34,  78 => 30,  38 => 4,  28 => 4,  201 => 96,  196 => 90,  183 => 87,  171 => 81,  166 => 72,  163 => 78,  158 => 72,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 46,  117 => 44,  105 => 49,  91 => 33,  62 => 26,  49 => 19,  26 => 6,  87 => 40,  46 => 12,  44 => 14,  31 => 5,  94 => 34,  89 => 41,  85 => 35,  75 => 29,  68 => 27,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 28,  69 => 25,  47 => 18,  40 => 14,  37 => 6,  22 => 1,  246 => 90,  157 => 68,  145 => 63,  139 => 53,  131 => 52,  123 => 44,  120 => 43,  115 => 54,  111 => 38,  108 => 37,  101 => 47,  98 => 35,  96 => 34,  83 => 31,  74 => 29,  66 => 27,  55 => 24,  52 => 21,  50 => 17,  43 => 9,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 107,  203 => 90,  199 => 97,  193 => 92,  189 => 90,  187 => 84,  182 => 79,  176 => 64,  173 => 78,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 65,  144 => 63,  141 => 64,  133 => 55,  130 => 46,  125 => 44,  122 => 59,  116 => 41,  112 => 43,  109 => 34,  106 => 37,  103 => 36,  99 => 39,  95 => 34,  92 => 36,  86 => 33,  82 => 32,  80 => 30,  73 => 19,  64 => 26,  60 => 25,  57 => 24,  54 => 10,  51 => 14,  48 => 20,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
