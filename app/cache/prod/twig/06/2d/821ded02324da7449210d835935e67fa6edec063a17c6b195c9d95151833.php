<?php

/* AcmeUserBundle::layout.html.twig */
class __TwigTemplate_062d821ded02324da7449210d835935e67fa6edec063a17c6b195c9d95151833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo "\t
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  83 => 28,  77 => 17,  65 => 13,  58 => 11,  418 => 108,  358 => 191,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 108,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 92,  185 => 90,  181 => 89,  161 => 84,  127 => 67,  118 => 19,  100 => 52,  165 => 85,  114 => 55,  110 => 60,  84 => 48,  23 => 3,  34 => 5,  129 => 49,  113 => 41,  74 => 16,  70 => 26,  53 => 10,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 81,  252 => 115,  247 => 113,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 69,  128 => 60,  111 => 22,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 52,  131 => 52,  119 => 57,  108 => 36,  102 => 32,  71 => 23,  67 => 15,  63 => 36,  59 => 14,  47 => 8,  87 => 32,  55 => 21,  38 => 4,  29 => 2,  26 => 2,  94 => 28,  89 => 31,  85 => 29,  79 => 26,  75 => 17,  72 => 39,  68 => 14,  56 => 34,  50 => 8,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 72,  136 => 63,  123 => 58,  121 => 20,  117 => 43,  115 => 43,  105 => 40,  101 => 36,  91 => 32,  69 => 25,  66 => 15,  62 => 12,  49 => 19,  35 => 5,  31 => 4,  43 => 8,  41 => 5,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  44 => 12,  40 => 16,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 72,  164 => 59,  162 => 59,  154 => 82,  149 => 79,  147 => 78,  144 => 66,  141 => 65,  133 => 62,  130 => 41,  125 => 59,  122 => 65,  116 => 41,  112 => 61,  109 => 19,  106 => 18,  103 => 17,  99 => 31,  95 => 34,  92 => 50,  86 => 49,  82 => 31,  80 => 19,  73 => 19,  64 => 19,  60 => 35,  57 => 24,  54 => 10,  51 => 21,  48 => 11,  45 => 18,  42 => 8,  39 => 6,  36 => 4,  33 => 3,  30 => 1,);
    }
}
