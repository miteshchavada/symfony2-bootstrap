<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_549c003786ba01911f9f2e5e8833367d3e787f3f01311bb496848247cac708df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  129 => 49,  113 => 41,  70 => 26,  53 => 20,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 52,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  87 => 32,  38 => 6,  26 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 43,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  31 => 4,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  44 => 12,  27 => 6,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 46,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 36,  98 => 31,  96 => 31,  83 => 25,  74 => 28,  66 => 15,  55 => 21,  52 => 21,  50 => 8,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 40,  144 => 39,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 28,  82 => 31,  80 => 19,  73 => 19,  64 => 23,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 15,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
