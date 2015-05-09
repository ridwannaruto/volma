<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_6710a5c937f23f61c1370db3c9e2babafc72c183ff22aecdd6e80ac7572440d6 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  191 => 79,  146 => 62,  476 => 246,  455 => 228,  451 => 227,  447 => 226,  421 => 217,  405 => 212,  372 => 201,  318 => 167,  296 => 158,  226 => 95,  194 => 104,  127 => 54,  321 => 146,  313 => 144,  274 => 131,  234 => 118,  180 => 92,  236 => 109,  222 => 115,  175 => 78,  53 => 17,  184 => 77,  65 => 22,  58 => 22,  606 => 340,  601 => 338,  592 => 334,  581 => 331,  563 => 315,  551 => 310,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  513 => 292,  509 => 290,  473 => 261,  467 => 260,  445 => 248,  443 => 225,  431 => 241,  416 => 235,  263 => 128,  244 => 119,  174 => 95,  172 => 87,  370 => 200,  359 => 197,  352 => 175,  328 => 163,  304 => 151,  259 => 127,  255 => 126,  231 => 117,  195 => 96,  129 => 51,  97 => 51,  81 => 32,  225 => 113,  197 => 115,  185 => 109,  346 => 189,  261 => 127,  249 => 127,  233 => 109,  218 => 113,  213 => 117,  188 => 82,  178 => 75,  153 => 69,  104 => 37,  76 => 30,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 249,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 222,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 198,  697 => 196,  690 => 194,  687 => 193,  677 => 188,  672 => 186,  667 => 184,  642 => 172,  637 => 358,  622 => 165,  617 => 163,  609 => 341,  604 => 156,  591 => 151,  588 => 333,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 140,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 130,  538 => 129,  532 => 128,  529 => 127,  524 => 126,  522 => 125,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 224,  433 => 13,  428 => 2,  417 => 398,  411 => 395,  401 => 391,  396 => 389,  376 => 381,  371 => 201,  366 => 199,  361 => 375,  356 => 64,  333 => 173,  317 => 145,  302 => 160,  297 => 155,  287 => 135,  272 => 117,  267 => 136,  262 => 336,  242 => 328,  200 => 290,  198 => 105,  181 => 76,  114 => 47,  90 => 49,  426 => 210,  410 => 203,  403 => 199,  399 => 198,  375 => 186,  367 => 181,  344 => 170,  338 => 167,  330 => 162,  320 => 158,  307 => 131,  301 => 141,  293 => 157,  271 => 130,  265 => 113,  253 => 129,  239 => 117,  211 => 96,  165 => 78,  161 => 67,  155 => 70,  124 => 49,  110 => 44,  100 => 36,  77 => 25,  70 => 27,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 256,  802 => 278,  797 => 276,  788 => 270,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 417,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 395,  689 => 393,  682 => 389,  678 => 388,  674 => 387,  666 => 385,  660 => 182,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 348,  620 => 164,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 231,  465 => 227,  454 => 223,  446 => 74,  441 => 216,  436 => 214,  425 => 219,  422 => 208,  419 => 236,  412 => 214,  395 => 210,  391 => 387,  388 => 208,  386 => 385,  383 => 207,  369 => 183,  364 => 197,  357 => 177,  353 => 63,  350 => 191,  348 => 174,  345 => 165,  332 => 164,  326 => 161,  315 => 158,  310 => 154,  306 => 154,  299 => 151,  292 => 125,  289 => 156,  282 => 121,  280 => 141,  275 => 134,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 97,  207 => 107,  186 => 88,  160 => 97,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 431,  695 => 336,  684 => 192,  679 => 329,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 374,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 332,  577 => 280,  568 => 273,  557 => 314,  552 => 135,  548 => 264,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 254,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 247,  472 => 227,  470 => 226,  466 => 225,  449 => 250,  429 => 220,  424 => 202,  420 => 207,  415 => 205,  408 => 213,  406 => 393,  397 => 211,  385 => 190,  363 => 198,  358 => 194,  354 => 166,  349 => 42,  342 => 164,  340 => 160,  336 => 159,  331 => 156,  327 => 139,  319 => 159,  311 => 159,  300 => 159,  295 => 138,  291 => 137,  286 => 133,  279 => 130,  277 => 136,  256 => 119,  248 => 113,  237 => 117,  232 => 106,  228 => 100,  223 => 109,  216 => 90,  210 => 109,  205 => 93,  192 => 108,  150 => 72,  148 => 64,  134 => 54,  126 => 51,  118 => 61,  84 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 209,  437 => 244,  435 => 223,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 199,  398 => 129,  393 => 195,  387 => 122,  384 => 206,  381 => 383,  379 => 204,  374 => 185,  368 => 112,  365 => 111,  362 => 110,  360 => 69,  355 => 106,  341 => 367,  337 => 143,  322 => 168,  314 => 165,  312 => 133,  309 => 163,  305 => 142,  298 => 91,  294 => 90,  285 => 141,  283 => 139,  278 => 132,  268 => 125,  264 => 124,  258 => 132,  252 => 125,  247 => 126,  241 => 118,  229 => 112,  220 => 92,  214 => 111,  177 => 84,  169 => 75,  140 => 53,  132 => 52,  128 => 68,  107 => 43,  61 => 23,  273 => 135,  269 => 139,  254 => 92,  243 => 113,  240 => 113,  238 => 122,  235 => 116,  230 => 119,  227 => 116,  224 => 156,  221 => 120,  219 => 110,  217 => 106,  208 => 108,  204 => 114,  179 => 79,  159 => 76,  143 => 61,  135 => 59,  119 => 49,  102 => 43,  71 => 25,  67 => 26,  63 => 29,  59 => 25,  93 => 47,  88 => 40,  78 => 25,  38 => 18,  28 => 6,  201 => 83,  196 => 81,  183 => 87,  171 => 71,  166 => 69,  163 => 67,  158 => 64,  156 => 96,  151 => 64,  142 => 70,  138 => 59,  136 => 55,  121 => 48,  117 => 50,  105 => 44,  91 => 34,  62 => 21,  49 => 15,  26 => 6,  87 => 33,  46 => 18,  44 => 14,  31 => 5,  94 => 38,  89 => 48,  85 => 34,  75 => 27,  68 => 25,  56 => 19,  24 => 1,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 8,  22 => 1,  246 => 90,  157 => 69,  145 => 63,  139 => 60,  131 => 53,  123 => 53,  120 => 43,  115 => 48,  111 => 46,  108 => 53,  101 => 47,  98 => 39,  96 => 35,  83 => 33,  74 => 38,  66 => 19,  55 => 21,  52 => 21,  50 => 16,  43 => 20,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 106,  199 => 105,  193 => 87,  189 => 101,  187 => 84,  182 => 78,  176 => 102,  173 => 72,  168 => 77,  164 => 99,  162 => 70,  154 => 65,  149 => 63,  147 => 69,  144 => 54,  141 => 62,  133 => 57,  130 => 64,  125 => 52,  122 => 64,  116 => 48,  112 => 58,  109 => 45,  106 => 55,  103 => 41,  99 => 41,  95 => 34,  92 => 36,  86 => 47,  82 => 33,  80 => 32,  73 => 23,  64 => 27,  60 => 20,  57 => 19,  54 => 25,  51 => 20,  48 => 22,  45 => 14,  42 => 14,  39 => 9,  36 => 9,  33 => 3,  30 => 7,);
    }
}
