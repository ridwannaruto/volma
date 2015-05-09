<?php

/* TaskBundle:Tasks:complete.html.twig */
class __TwigTemplate_c7dadde0a88b26acb62eb446955112ce359899b293c276b87f80616887cafc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:Base:Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
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
        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Task</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td >
                                <h3>Task</h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "name"), "html", null, true);
        echo "<br><br>
                                <h3>Type</h3>
                                ";
        // line 23
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 1)) {
            // line 24
            echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 2)) {
            // line 26
            echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 3)) {
            // line 28
            echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 4)) {
            // line 30
            echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
        }
        // line 32
        echo "                                <br><br>

                                <h3>Assigned To</h3><a href=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Pillar</h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "pillar"), "html", null, true);
        echo "<br><br>
                                <h3>Due Date</h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "duetimestamp"), "html", null, true);
        echo "<br><br>

                                 <h3>Goal</h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "goals"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "description"), "html", null, true);
        echo "<br><br>


                            </td>
                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>

        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Feedback</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>

                            <td width =\"5%\"></td>
                            <td >
                                <form name=\"moraspirit_feedback\" method=\"POST\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_complete", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
        echo "\" class=\"form-horizontal center\">

                                    <div class=\"control-group\">
                                        <h3>Rate</h3>Please provide a rating from 1-10 for this specific task<br><br>

                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating1\" value=\"1\" required >
                                            Dissapointed
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating2\" value=\"2\">
                                            Very Poor
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating3\" value=\"3\">
                                            Poor
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating4\" value=\"4\">
                                            Average
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating5\" value=\"5\" >
                                            Normal
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating6\" value=\"6\">
                                            Satisfied
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating7\" value=\"7\" >
                                            Good
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating8\" value=\"8\">
                                            Very Good
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating9\" value=\"9\">
                                            Excellent
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating10\" value=\"10\">
                                            Marvelous
                                        </label><br>

                                    </div>
                                    <h3>Feedack</h3>
                                    Please provide a valuable feedback on the work carried out by ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo ". ( Work quality, professional behaviour, efficiency etc )

                                    <br><br>
                                    <div class=\"control-group primary\">                                      

                                        <textarea id=\"moraspirit_entitybundle_task_description\" name=\"feedback\" required=\"required\" placeholder=\"type your feedback here..\" class=\"span12\"></textarea>

                                    </div>

                                    <br><div class=\"controls\">
                                        <button type=\"submit\" id=\"moraspirit_submit\" name=\"complete\" class=\"btn btn-success span6\">Complete Task</button>
                                    </div>

                                </form>

                            </td>

                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>



";
    }

    // line 156
    public function block_delete($context, array $blocks = array())
    {
        // line 157
        echo "    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to delete this Task?                          \t\t
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

\t";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Tasks:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 121,  65 => 28,  58 => 25,  606 => 340,  601 => 338,  592 => 334,  581 => 331,  563 => 315,  551 => 310,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  513 => 292,  509 => 290,  473 => 261,  467 => 260,  445 => 248,  443 => 247,  431 => 241,  416 => 235,  263 => 126,  244 => 119,  174 => 95,  172 => 94,  370 => 184,  359 => 179,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 114,  195 => 96,  129 => 64,  97 => 45,  81 => 42,  225 => 113,  197 => 111,  185 => 100,  346 => 189,  261 => 112,  249 => 132,  233 => 126,  218 => 106,  213 => 117,  188 => 84,  178 => 97,  153 => 69,  104 => 36,  76 => 39,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 358,  622 => 165,  617 => 163,  609 => 341,  604 => 156,  591 => 151,  588 => 333,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 201,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 155,  287 => 123,  272 => 117,  267 => 132,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 57,  90 => 31,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 156,  293 => 143,  271 => 133,  265 => 113,  253 => 123,  239 => 117,  211 => 108,  165 => 78,  161 => 77,  155 => 74,  124 => 61,  110 => 50,  100 => 49,  77 => 34,  70 => 37,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 348,  620 => 164,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 236,  412 => 234,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 207,  369 => 183,  364 => 197,  357 => 177,  353 => 63,  350 => 191,  348 => 174,  345 => 368,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 141,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 109,  207 => 107,  186 => 88,  160 => 64,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 332,  577 => 280,  568 => 273,  557 => 314,  552 => 135,  548 => 264,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 250,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 194,  354 => 166,  349 => 42,  342 => 188,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 159,  300 => 139,  295 => 145,  291 => 144,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 99,  210 => 97,  205 => 114,  192 => 87,  150 => 72,  148 => 64,  134 => 58,  126 => 53,  118 => 55,  84 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 209,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 160,  314 => 155,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 124,  252 => 332,  247 => 120,  241 => 118,  229 => 112,  220 => 70,  214 => 98,  177 => 84,  169 => 73,  140 => 55,  132 => 51,  128 => 68,  107 => 50,  61 => 26,  273 => 135,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 116,  230 => 318,  227 => 157,  224 => 156,  221 => 120,  219 => 110,  217 => 106,  208 => 92,  204 => 72,  179 => 86,  159 => 76,  143 => 80,  135 => 67,  119 => 59,  102 => 36,  71 => 28,  67 => 31,  63 => 29,  59 => 25,  93 => 47,  88 => 40,  78 => 25,  38 => 18,  28 => 4,  201 => 112,  196 => 90,  183 => 87,  171 => 81,  166 => 93,  163 => 78,  158 => 72,  156 => 65,  151 => 63,  142 => 70,  138 => 59,  136 => 68,  121 => 61,  117 => 60,  105 => 54,  91 => 42,  62 => 26,  49 => 19,  26 => 6,  87 => 36,  46 => 18,  44 => 14,  31 => 5,  94 => 39,  89 => 41,  85 => 39,  75 => 32,  68 => 29,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 36,  72 => 22,  69 => 30,  47 => 18,  40 => 14,  37 => 5,  22 => 1,  246 => 90,  157 => 86,  145 => 63,  139 => 53,  131 => 65,  123 => 44,  120 => 43,  115 => 54,  111 => 38,  108 => 53,  101 => 47,  98 => 35,  96 => 39,  83 => 35,  74 => 38,  66 => 19,  55 => 23,  52 => 21,  50 => 21,  43 => 20,  41 => 5,  35 => 5,  32 => 5,  29 => 4,  209 => 107,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 64,  173 => 83,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 63,  141 => 64,  133 => 55,  130 => 64,  125 => 63,  122 => 58,  116 => 41,  112 => 53,  109 => 55,  106 => 49,  103 => 48,  99 => 46,  95 => 34,  92 => 38,  86 => 33,  82 => 37,  80 => 30,  73 => 32,  64 => 27,  60 => 27,  57 => 24,  54 => 25,  51 => 14,  48 => 20,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
