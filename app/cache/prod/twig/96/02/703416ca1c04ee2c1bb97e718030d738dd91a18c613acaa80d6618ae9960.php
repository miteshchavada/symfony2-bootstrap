<?php

/* AcmeInfoBundle:Default:testimonials.html.twig */
class __TwigTemplate_9602703416ca1c04ee2c1bb97e718030d738dd91a18c613acaa80d6618ae9960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Testimonials List</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Testimonials List
                        <div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"testiadd\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Testimonials</button></a></div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Post</th>
                                        <th>Description</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 33
            echo "                                        <tr class=\"gradeA\">
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "name"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "post"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "description"), "html", null, true);
            echo "</td>
                                            <td width=\"150px;\">
                                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_testiedit", array("id" => $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_testidel", array("id" => $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('are sure delete?')\">delete</a></li>
                                            </td>
                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                </tbody>
                                <!-- div>";
        // line 45
        echo (isset($context["paginator"]) ? $context["paginator"] : null);
        echo "</div--> 
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        ";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 143,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 45,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 25,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 13,  124 => 44,  137 => 51,  96 => 35,  81 => 22,  104 => 37,  152 => 47,  120 => 41,  97 => 30,  126 => 54,  83 => 22,  77 => 25,  65 => 21,  58 => 18,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 36,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 10,  129 => 46,  113 => 40,  74 => 18,  70 => 17,  53 => 16,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  111 => 39,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  131 => 44,  119 => 40,  108 => 39,  102 => 38,  71 => 32,  67 => 16,  63 => 15,  59 => 14,  47 => 12,  87 => 25,  55 => 9,  38 => 4,  29 => 2,  26 => 2,  94 => 29,  89 => 33,  85 => 33,  79 => 40,  75 => 21,  72 => 32,  68 => 20,  56 => 13,  50 => 11,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 51,  142 => 79,  138 => 57,  136 => 40,  123 => 43,  121 => 43,  117 => 40,  115 => 61,  105 => 34,  101 => 61,  91 => 34,  69 => 19,  66 => 16,  62 => 15,  49 => 43,  35 => 56,  31 => 3,  43 => 16,  41 => 4,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 28,  88 => 34,  78 => 30,  46 => 16,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 42,  122 => 35,  116 => 41,  112 => 38,  109 => 39,  106 => 35,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  86 => 56,  82 => 23,  80 => 21,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 12,  51 => 12,  48 => 15,  45 => 17,  42 => 4,  39 => 3,  36 => 15,  33 => 3,  30 => 9,);
    }
}
