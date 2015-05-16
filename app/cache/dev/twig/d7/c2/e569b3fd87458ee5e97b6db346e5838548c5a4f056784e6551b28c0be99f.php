<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d7c2e569b3fd87458ee5e97b6db346e5838548c5a4f056784e6551b28c0be99f extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  775 => 485,  727 => 476,  710 => 475,  706 => 473,  698 => 471,  686 => 468,  649 => 462,  634 => 456,  549 => 411,  517 => 404,  389 => 160,  378 => 157,  343 => 146,  334 => 141,  290 => 119,  281 => 114,  276 => 111,  152 => 46,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  631 => 327,  629 => 454,  626 => 325,  613 => 320,  602 => 317,  593 => 310,  569 => 300,  559 => 296,  545 => 291,  531 => 283,  519 => 278,  515 => 276,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  463 => 248,  459 => 246,  448 => 240,  438 => 236,  418 => 224,  400 => 214,  347 => 191,  170 => 84,  324 => 113,  288 => 118,  212 => 78,  202 => 94,  190 => 76,  462 => 202,  394 => 168,  380 => 158,  373 => 156,  351 => 192,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  303 => 106,  270 => 102,  20 => 1,  308 => 287,  113 => 48,  191 => 67,  146 => 62,  476 => 246,  455 => 228,  451 => 227,  447 => 226,  421 => 217,  405 => 212,  372 => 201,  318 => 111,  296 => 121,  226 => 84,  194 => 68,  127 => 35,  321 => 135,  313 => 183,  274 => 110,  234 => 118,  180 => 92,  236 => 109,  222 => 83,  175 => 58,  53 => 12,  184 => 63,  65 => 11,  58 => 25,  606 => 449,  601 => 446,  592 => 334,  581 => 305,  563 => 298,  551 => 310,  539 => 304,  535 => 302,  533 => 284,  527 => 408,  513 => 292,  509 => 272,  473 => 254,  467 => 260,  445 => 248,  443 => 225,  431 => 189,  416 => 235,  263 => 95,  244 => 119,  174 => 65,  172 => 57,  370 => 200,  359 => 197,  352 => 175,  328 => 139,  304 => 181,  259 => 103,  255 => 101,  231 => 83,  195 => 96,  129 => 51,  97 => 51,  81 => 23,  225 => 113,  197 => 69,  185 => 74,  346 => 189,  261 => 127,  249 => 127,  233 => 87,  218 => 113,  213 => 78,  188 => 90,  178 => 59,  153 => 77,  104 => 32,  76 => 34,  861 => 399,  858 => 398,  853 => 316,  849 => 289,  846 => 288,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 489,  794 => 248,  786 => 244,  774 => 240,  772 => 239,  766 => 235,  763 => 234,  750 => 224,  746 => 478,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 205,  707 => 200,  702 => 472,  697 => 196,  690 => 469,  687 => 193,  677 => 465,  672 => 345,  667 => 184,  642 => 172,  637 => 358,  622 => 452,  617 => 163,  609 => 319,  604 => 156,  591 => 309,  588 => 308,  586 => 149,  582 => 147,  576 => 144,  573 => 143,  567 => 414,  564 => 139,  561 => 138,  554 => 136,  547 => 308,  541 => 290,  538 => 129,  532 => 410,  529 => 409,  524 => 126,  522 => 406,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 88,  442 => 45,  439 => 195,  433 => 13,  428 => 230,  417 => 398,  411 => 395,  401 => 172,  396 => 389,  376 => 205,  371 => 156,  366 => 199,  361 => 152,  356 => 64,  333 => 173,  317 => 185,  302 => 125,  297 => 179,  287 => 135,  272 => 117,  267 => 101,  262 => 98,  242 => 328,  200 => 72,  198 => 105,  181 => 65,  114 => 47,  90 => 42,  426 => 210,  410 => 221,  403 => 199,  399 => 198,  375 => 186,  367 => 155,  344 => 119,  338 => 135,  330 => 162,  320 => 127,  307 => 128,  301 => 141,  293 => 120,  271 => 130,  265 => 105,  253 => 100,  239 => 117,  211 => 96,  165 => 83,  161 => 63,  155 => 47,  124 => 49,  110 => 44,  100 => 39,  77 => 20,  70 => 15,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 491,  802 => 278,  797 => 276,  788 => 486,  780 => 242,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 419,  749 => 479,  744 => 415,  739 => 413,  734 => 411,  729 => 409,  724 => 407,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 397,  694 => 470,  689 => 393,  682 => 467,  678 => 388,  674 => 387,  666 => 385,  660 => 464,  655 => 180,  650 => 378,  645 => 376,  635 => 372,  630 => 370,  625 => 453,  620 => 451,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 247,  487 => 242,  478 => 236,  471 => 253,  465 => 249,  454 => 244,  446 => 197,  441 => 196,  436 => 235,  425 => 219,  422 => 226,  419 => 236,  412 => 222,  395 => 210,  391 => 387,  388 => 208,  386 => 159,  383 => 207,  369 => 183,  364 => 197,  357 => 123,  353 => 149,  350 => 327,  348 => 140,  345 => 147,  332 => 116,  326 => 138,  315 => 131,  310 => 154,  306 => 107,  299 => 151,  292 => 125,  289 => 113,  282 => 121,  280 => 141,  275 => 105,  266 => 138,  260 => 137,  257 => 111,  250 => 134,  215 => 97,  207 => 75,  186 => 88,  160 => 97,  137 => 77,  34 => 5,  800 => 433,  795 => 432,  792 => 488,  695 => 336,  684 => 192,  679 => 466,  675 => 327,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 334,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 153,  594 => 335,  589 => 286,  585 => 307,  577 => 303,  568 => 273,  557 => 295,  552 => 293,  548 => 292,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 280,  521 => 295,  512 => 247,  504 => 241,  493 => 236,  488 => 234,  484 => 105,  479 => 256,  472 => 227,  470 => 226,  466 => 225,  449 => 198,  429 => 188,  424 => 202,  420 => 207,  415 => 180,  408 => 176,  406 => 393,  397 => 213,  385 => 190,  363 => 153,  358 => 151,  354 => 166,  349 => 42,  342 => 137,  340 => 145,  336 => 159,  331 => 140,  327 => 114,  319 => 159,  311 => 159,  300 => 180,  295 => 178,  291 => 102,  286 => 112,  279 => 130,  277 => 136,  256 => 96,  248 => 97,  237 => 117,  232 => 88,  228 => 100,  223 => 109,  216 => 79,  210 => 77,  205 => 108,  192 => 108,  150 => 55,  148 => 64,  134 => 39,  126 => 51,  118 => 49,  84 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 245,  453 => 199,  444 => 238,  440 => 209,  437 => 244,  435 => 223,  430 => 144,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 201,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 206,  381 => 383,  379 => 204,  374 => 185,  368 => 112,  365 => 197,  362 => 110,  360 => 69,  355 => 150,  341 => 189,  337 => 143,  322 => 168,  314 => 165,  312 => 130,  309 => 129,  305 => 142,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 125,  264 => 124,  258 => 94,  252 => 125,  247 => 126,  241 => 93,  229 => 87,  220 => 81,  214 => 111,  177 => 84,  169 => 75,  140 => 58,  132 => 52,  128 => 68,  107 => 43,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 113,  238 => 122,  235 => 89,  230 => 119,  227 => 86,  224 => 81,  221 => 120,  219 => 110,  217 => 106,  208 => 76,  204 => 114,  179 => 98,  159 => 90,  143 => 51,  135 => 59,  119 => 40,  102 => 24,  71 => 13,  67 => 14,  63 => 21,  59 => 16,  93 => 27,  88 => 25,  78 => 18,  38 => 7,  28 => 3,  201 => 106,  196 => 92,  183 => 87,  171 => 71,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 70,  138 => 59,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 27,  49 => 14,  26 => 3,  87 => 41,  46 => 13,  44 => 10,  31 => 4,  94 => 21,  89 => 30,  85 => 23,  75 => 19,  68 => 30,  56 => 16,  24 => 2,  27 => 3,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 48,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 38,  66 => 25,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 88,  203 => 73,  199 => 93,  193 => 87,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 99,  162 => 59,  154 => 60,  149 => 63,  147 => 75,  144 => 42,  141 => 73,  133 => 57,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 41,  99 => 23,  95 => 34,  92 => 43,  86 => 47,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}