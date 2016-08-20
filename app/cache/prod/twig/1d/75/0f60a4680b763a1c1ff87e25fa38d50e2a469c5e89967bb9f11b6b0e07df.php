<?php

/* ::header.html.twig */
class __TwigTemplate_1d750f60a4680b763a1c1ff87e25fa38d50e2a469c5e89967bb9f11b6b0e07df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>SVIPL</title>    
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "</head>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/wow.min.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  37 => 11,  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 54,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 45,  90 => 32,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 49,  52 => 15,  124 => 45,  137 => 46,  96 => 32,  81 => 22,  104 => 34,  152 => 47,  120 => 41,  97 => 30,  126 => 48,  83 => 19,  77 => 17,  65 => 14,  58 => 38,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 32,  165 => 85,  114 => 38,  110 => 37,  84 => 24,  23 => 2,  34 => 10,  129 => 43,  113 => 40,  74 => 20,  70 => 30,  53 => 11,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 47,  132 => 44,  128 => 74,  111 => 26,  107 => 25,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 56,  143 => 53,  135 => 48,  131 => 44,  119 => 40,  108 => 39,  102 => 76,  71 => 43,  67 => 16,  63 => 21,  59 => 14,  47 => 10,  87 => 26,  55 => 13,  38 => 4,  29 => 9,  26 => 2,  94 => 74,  89 => 46,  85 => 26,  79 => 22,  75 => 20,  72 => 20,  68 => 19,  56 => 12,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 51,  142 => 79,  138 => 47,  136 => 40,  123 => 41,  121 => 43,  117 => 42,  115 => 27,  105 => 34,  101 => 52,  91 => 21,  69 => 15,  66 => 16,  62 => 15,  49 => 11,  35 => 3,  31 => 3,  43 => 16,  41 => 4,  28 => 2,  24 => 6,  25 => 4,  21 => 2,  19 => 1,  98 => 75,  93 => 31,  88 => 27,  78 => 22,  46 => 10,  44 => 12,  40 => 9,  32 => 3,  27 => 5,  22 => 1,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 48,  133 => 45,  130 => 44,  125 => 42,  122 => 35,  116 => 40,  112 => 39,  109 => 40,  106 => 77,  103 => 24,  99 => 23,  95 => 22,  92 => 28,  86 => 20,  82 => 27,  80 => 22,  73 => 16,  64 => 18,  60 => 17,  57 => 14,  54 => 15,  51 => 12,  48 => 11,  45 => 17,  42 => 29,  39 => 19,  36 => 15,  33 => 10,  30 => 9,);
    }
}
