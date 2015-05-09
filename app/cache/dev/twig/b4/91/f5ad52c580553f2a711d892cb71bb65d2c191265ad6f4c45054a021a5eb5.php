<?php

/* TaskBundle:Tasks:index.html.twig */
class __TwigTemplate_b491f5ad52c580553f2a711d892cb71bb65d2c191265ad6f4c45054a021a5eb5 extends Twig_Template
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

        ";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Head") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Admin"))) {
            // line 8
            echo "    <div class=\"row-fluid\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("moraspirit_task_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add Task </button></a>
           
        </div>
    </div><br>
                ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-list-alt\"></i> Ongoing Tasks</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <br>

                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                                <th width=\"10%\">Project</th>
                                <th width=\"45%\">Details</th>
                                 <th width=\"15%\">Pillar</th>
                                <th width=\"15%\">Assigned To</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ITasks"]) ? $context["ITasks"] : $this->getContext($context, "ITasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 47
            echo "                    <tr>
                                <td>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "taskname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\">
                                     <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "project"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "projectname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
            echo "
                                </td>
                                 <td class=\"center\"> 
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "pillar"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "lastname"), "html", null, true);
            echo " </a> 

                                </td>                                       
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
                </table>            
            </div>

        </div>

        <div class=\"row-fluid\">
            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>
                    <h2><i class=\"icon-list-alt\"></i> Completed Tasks</h2>
                    <div class=\"box-icon\">

                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>
                <div class=\"box-content\">
                    <br>

                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                        <thead>
                            <tr>
                               <th width=\"15%\">Task</th>
                                <th width=\"10%\">Project</th>
                                <th width=\"45%\">Details</th>
                                 <th width=\"15%\">Pillar</th>
                                <th width=\"15%\">Assigned To</th> 

                            </tr>
                        </thead>   

                        <tbody>
\t\t\t\t\t\t\t   ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 100
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "taskname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\">
                                     <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "project"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "projectname"), "html", null, true);
            echo " </a>
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "pillar"), "html", null, true);
            echo "
                                </td>
                                <td class=\"center\"> 
                                <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "user"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "lastname"), "html", null, true);
            echo " </a>

                                </td>                                       
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </tbody>
                    </table>            
                </div>

            </div>


        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Tasks:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 146,  313 => 144,  274 => 131,  234 => 118,  180 => 77,  236 => 109,  222 => 101,  175 => 78,  53 => 16,  184 => 105,  65 => 28,  58 => 25,  606 => 340,  601 => 338,  592 => 334,  581 => 331,  563 => 315,  551 => 310,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  513 => 292,  509 => 290,  473 => 261,  467 => 260,  445 => 248,  443 => 247,  431 => 241,  416 => 235,  263 => 128,  244 => 119,  174 => 95,  172 => 100,  370 => 184,  359 => 179,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 117,  195 => 96,  129 => 64,  97 => 39,  81 => 42,  225 => 113,  197 => 88,  185 => 100,  346 => 189,  261 => 127,  249 => 132,  233 => 126,  218 => 106,  213 => 117,  188 => 82,  178 => 97,  153 => 69,  104 => 36,  76 => 39,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 358,  622 => 165,  617 => 163,  609 => 341,  604 => 156,  591 => 151,  588 => 333,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 201,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 145,  302 => 129,  297 => 155,  287 => 135,  272 => 117,  267 => 132,  262 => 336,  242 => 328,  200 => 290,  198 => 111,  181 => 273,  114 => 57,  90 => 49,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 141,  293 => 143,  271 => 130,  265 => 113,  253 => 123,  239 => 117,  211 => 96,  165 => 78,  161 => 70,  155 => 74,  124 => 51,  110 => 50,  100 => 49,  77 => 34,  70 => 37,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 348,  620 => 164,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 236,  412 => 234,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 207,  369 => 183,  364 => 197,  357 => 177,  353 => 63,  350 => 191,  348 => 174,  345 => 165,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 141,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 97,  207 => 107,  186 => 88,  160 => 64,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 332,  577 => 280,  568 => 273,  557 => 314,  552 => 135,  548 => 264,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 250,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 194,  354 => 166,  349 => 42,  342 => 164,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 159,  300 => 139,  295 => 138,  291 => 137,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 99,  210 => 97,  205 => 93,  192 => 108,  150 => 72,  148 => 64,  134 => 58,  126 => 53,  118 => 61,  84 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 209,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 160,  314 => 155,  312 => 133,  309 => 143,  305 => 142,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 132,  268 => 125,  264 => 124,  258 => 124,  252 => 125,  247 => 123,  241 => 118,  229 => 112,  220 => 120,  214 => 98,  177 => 84,  169 => 75,  140 => 53,  132 => 52,  128 => 68,  107 => 43,  61 => 20,  273 => 135,  269 => 139,  254 => 92,  243 => 113,  240 => 120,  238 => 119,  235 => 116,  230 => 106,  227 => 116,  224 => 156,  221 => 120,  219 => 110,  217 => 106,  208 => 92,  204 => 114,  179 => 79,  159 => 76,  143 => 61,  135 => 67,  119 => 59,  102 => 42,  71 => 25,  67 => 24,  63 => 29,  59 => 25,  93 => 47,  88 => 40,  78 => 25,  38 => 10,  28 => 4,  201 => 112,  196 => 90,  183 => 87,  171 => 81,  166 => 93,  163 => 67,  158 => 64,  156 => 63,  151 => 66,  142 => 70,  138 => 59,  136 => 68,  121 => 51,  117 => 60,  105 => 43,  91 => 42,  62 => 26,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 14,  31 => 5,  94 => 38,  89 => 34,  85 => 33,  75 => 32,  68 => 29,  56 => 19,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 22,  69 => 30,  47 => 18,  40 => 14,  37 => 8,  22 => 1,  246 => 90,  157 => 69,  145 => 63,  139 => 60,  131 => 65,  123 => 44,  120 => 43,  115 => 48,  111 => 38,  108 => 53,  101 => 47,  98 => 52,  96 => 39,  83 => 35,  74 => 38,  66 => 19,  55 => 23,  52 => 21,  50 => 17,  43 => 14,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 107,  203 => 106,  199 => 105,  193 => 87,  189 => 101,  187 => 84,  182 => 78,  176 => 102,  173 => 72,  168 => 99,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 54,  141 => 64,  133 => 66,  130 => 64,  125 => 52,  122 => 58,  116 => 41,  112 => 58,  109 => 44,  106 => 55,  103 => 42,  99 => 46,  95 => 34,  92 => 38,  86 => 47,  82 => 46,  80 => 30,  73 => 32,  64 => 27,  60 => 27,  57 => 24,  54 => 25,  51 => 14,  48 => 16,  45 => 15,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
