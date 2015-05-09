<?php

/* UserBundle:Account:Settings.html.twig */
class __TwigTemplate_e12901d6b7cf6a71708b41e5a022d26a486f13dccf8830ff897dda2fdcbc37ca extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
                    
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
\t\t
                        <div id=\"content\" class=\"span10 \">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
                            <div class=\"box span12\">
                                
\t\t\t\t\t<div class=\"box-header well\">
                                            
\t\t\t\t\t\t<h2><i class=\"icon-locked\"></i> Change Password</h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content span12 \">
                                            
                                            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  
                                             <div class=\"control-group error \">
                      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Current Password"));
        echo "
          
                         <div class=\"controls\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'errors');
        echo "</span>
                       </div></div>

  <div class=\"control-group success\">
      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "New Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'errors');
        echo "</span>
                       </div></div>
                                      
                                                     
                                                     <div class=\"control-group success\">
      ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirm Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'errors');
        echo "</span>
                       </div></div>
                               ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
                                             <div class=\"control-group primary\">         
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "   
                            <div class=\"controls\">
                                 ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "                           
                            </div></div>      
                                            
                                  ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                       </form>                 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t
                          
\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t\t
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
        return "UserBundle:Account:Settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 31,  606 => 340,  601 => 338,  592 => 334,  581 => 331,  563 => 315,  551 => 310,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  513 => 292,  509 => 290,  473 => 261,  467 => 260,  445 => 248,  443 => 247,  431 => 241,  416 => 235,  263 => 126,  244 => 119,  174 => 95,  172 => 94,  370 => 184,  359 => 179,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 114,  195 => 96,  129 => 64,  97 => 45,  81 => 42,  225 => 113,  197 => 94,  185 => 100,  346 => 189,  261 => 112,  249 => 123,  233 => 102,  218 => 106,  213 => 105,  188 => 84,  178 => 97,  153 => 69,  104 => 36,  76 => 39,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 358,  622 => 165,  617 => 163,  609 => 341,  604 => 156,  591 => 151,  588 => 333,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 44,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 201,  366 => 377,  361 => 375,  356 => 64,  333 => 365,  317 => 135,  302 => 129,  297 => 155,  287 => 123,  272 => 117,  267 => 132,  262 => 336,  242 => 328,  200 => 290,  198 => 88,  181 => 273,  114 => 57,  90 => 33,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 156,  293 => 143,  271 => 133,  265 => 113,  253 => 123,  239 => 117,  211 => 108,  165 => 78,  161 => 77,  155 => 74,  124 => 61,  110 => 50,  100 => 49,  77 => 34,  70 => 37,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 348,  620 => 164,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 1,  422 => 208,  419 => 236,  412 => 234,  395 => 195,  391 => 387,  388 => 193,  386 => 385,  383 => 207,  369 => 183,  364 => 197,  357 => 177,  353 => 63,  350 => 191,  348 => 174,  345 => 368,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 142,  282 => 121,  280 => 141,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 109,  207 => 107,  186 => 88,  160 => 64,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 332,  577 => 280,  568 => 273,  557 => 314,  552 => 135,  548 => 264,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 230,  472 => 227,  470 => 226,  466 => 225,  449 => 250,  429 => 210,  424 => 202,  420 => 207,  415 => 205,  408 => 195,  406 => 393,  397 => 190,  385 => 190,  363 => 70,  358 => 194,  354 => 166,  349 => 42,  342 => 188,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 159,  300 => 139,  295 => 145,  291 => 144,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 99,  210 => 97,  205 => 100,  192 => 87,  150 => 83,  148 => 64,  134 => 58,  126 => 53,  118 => 55,  84 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 209,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 121,  381 => 383,  379 => 119,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 160,  314 => 155,  312 => 133,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 86,  268 => 125,  264 => 124,  258 => 124,  252 => 332,  247 => 120,  241 => 118,  229 => 112,  220 => 70,  214 => 98,  177 => 84,  169 => 73,  140 => 55,  132 => 51,  128 => 59,  107 => 41,  61 => 35,  273 => 135,  269 => 139,  254 => 92,  243 => 106,  240 => 86,  238 => 104,  235 => 116,  230 => 318,  227 => 81,  224 => 117,  221 => 111,  219 => 110,  217 => 106,  208 => 92,  204 => 72,  179 => 86,  159 => 76,  143 => 80,  135 => 54,  119 => 59,  102 => 36,  71 => 28,  67 => 31,  63 => 29,  59 => 25,  93 => 47,  88 => 40,  78 => 40,  38 => 4,  28 => 5,  201 => 99,  196 => 90,  183 => 87,  171 => 81,  166 => 93,  163 => 78,  158 => 72,  156 => 65,  151 => 63,  142 => 59,  138 => 59,  136 => 56,  121 => 46,  117 => 44,  105 => 54,  91 => 46,  62 => 26,  49 => 19,  26 => 6,  87 => 45,  46 => 12,  44 => 14,  31 => 6,  94 => 34,  89 => 41,  85 => 42,  75 => 29,  68 => 27,  56 => 24,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 28,  69 => 25,  47 => 18,  40 => 14,  37 => 5,  22 => 1,  246 => 90,  157 => 86,  145 => 63,  139 => 53,  131 => 52,  123 => 44,  120 => 43,  115 => 54,  111 => 38,  108 => 53,  101 => 47,  98 => 35,  96 => 34,  83 => 31,  74 => 38,  66 => 37,  55 => 24,  52 => 24,  50 => 17,  43 => 9,  41 => 5,  35 => 5,  32 => 7,  29 => 2,  209 => 107,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 64,  173 => 83,  168 => 76,  164 => 66,  162 => 70,  154 => 64,  149 => 51,  147 => 69,  144 => 63,  141 => 64,  133 => 55,  130 => 64,  125 => 44,  122 => 59,  116 => 41,  112 => 43,  109 => 55,  106 => 49,  103 => 36,  99 => 51,  95 => 34,  92 => 41,  86 => 33,  82 => 37,  80 => 30,  73 => 39,  64 => 34,  60 => 27,  57 => 24,  54 => 25,  51 => 14,  48 => 20,  45 => 17,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
