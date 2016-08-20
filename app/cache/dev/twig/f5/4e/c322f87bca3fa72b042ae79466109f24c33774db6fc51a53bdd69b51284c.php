<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_f54ec322f87bca3fa72b042ae79466109f24c33774db6fc51a53bdd69b51284c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_demo_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 75,  167 => 54,  148 => 50,  160 => 58,  317 => 164,  313 => 163,  301 => 160,  297 => 159,  195 => 137,  178 => 55,  174 => 105,  155 => 52,  192 => 73,  188 => 76,  184 => 75,  180 => 67,  206 => 21,  194 => 18,  172 => 12,  150 => 50,  134 => 45,  90 => 32,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 141,  202 => 20,  190 => 17,  186 => 57,  76 => 28,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 45,  137 => 45,  81 => 22,  104 => 34,  152 => 47,  97 => 41,  126 => 48,  77 => 22,  65 => 17,  58 => 17,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 143,  205 => 80,  198 => 62,  185 => 69,  181 => 58,  161 => 57,  127 => 60,  118 => 99,  100 => 32,  165 => 85,  114 => 38,  110 => 22,  84 => 29,  23 => 2,  34 => 10,  129 => 43,  113 => 33,  70 => 31,  53 => 10,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 125,  140 => 47,  132 => 43,  128 => 74,  107 => 38,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 167,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 140,  179 => 69,  159 => 9,  143 => 56,  135 => 62,  119 => 40,  102 => 17,  71 => 17,  67 => 16,  63 => 19,  59 => 13,  87 => 21,  38 => 6,  26 => 9,  94 => 34,  89 => 32,  85 => 32,  75 => 18,  68 => 20,  56 => 11,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 124,  163 => 62,  158 => 79,  156 => 55,  151 => 51,  142 => 47,  138 => 57,  136 => 45,  121 => 43,  117 => 19,  105 => 18,  91 => 28,  62 => 15,  49 => 13,  31 => 3,  28 => 2,  24 => 6,  25 => 35,  21 => 2,  19 => 1,  93 => 24,  88 => 31,  78 => 26,  46 => 10,  44 => 12,  27 => 5,  79 => 19,  72 => 19,  69 => 18,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 294,  157 => 56,  145 => 49,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 40,  111 => 38,  108 => 19,  101 => 43,  98 => 35,  96 => 25,  83 => 20,  74 => 27,  66 => 16,  55 => 13,  52 => 14,  50 => 13,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 96,  203 => 78,  199 => 67,  193 => 74,  189 => 135,  187 => 134,  182 => 56,  176 => 61,  173 => 63,  168 => 61,  164 => 10,  162 => 44,  154 => 59,  149 => 51,  147 => 49,  144 => 49,  141 => 115,  133 => 43,  130 => 45,  125 => 39,  122 => 35,  116 => 40,  112 => 39,  109 => 40,  106 => 45,  103 => 37,  99 => 32,  95 => 30,  92 => 28,  86 => 26,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 17,  57 => 12,  54 => 12,  51 => 12,  48 => 9,  45 => 8,  42 => 7,  39 => 4,  36 => 5,  33 => 4,  30 => 3,);
    }
}
