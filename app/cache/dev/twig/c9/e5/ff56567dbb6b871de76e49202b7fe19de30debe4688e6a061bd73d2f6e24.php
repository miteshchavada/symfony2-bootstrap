<?php

/* AcmeImageBundle:Default:edit.html.twig */
class __TwigTemplate_c9e5ff56567dbb6b871de76e49202b7fe19de30debe4688e6a061bd73d2f6e24 extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Slider Edit</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
                <center>
                <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_image_edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" id=\"image_edit_form\" enctype=\"multipart/form-data\" name=\"image_edit_form\" class=\"form-group\">
                ";
        // line 13
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 14
            echo "                    <div class=\"alert alert-danger\">    
                    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'errors');
            echo "
                    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
            echo "
                    ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'errors');
            echo "
                    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
            echo "
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundimage"), 'errors');
            echo "
                    </div>
                ";
        }
        // line 22
        echo "                <div class=\"form-group col-lg-12\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Title: "));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Link: "));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Link")));
        echo "
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                    <div class=\"col-sm-10\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                    <div class=\"col-sm-2\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                    </div>
                </div> 
                <div class=\"form-group col-lg-12\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "File: "));
        echo "
                    <div class=\"col-sm-2\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundimage"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Background Image: "));
        echo "
                    <div class=\"col-sm-2\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/slider_background_image/", 1 => (isset($context["backgroundimage"]) ? $context["backgroundimage"] : $this->getContext($context, "backgroundimage"))))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                    </div>
                </div> 
                <div class=\"form-group col-lg-12\">
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundimage"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "File: "));
        echo "
                    <div class=\"col-sm-2\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundimage"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                    </div>
                </div>    
                <div class=\"form-group col-lg-12\">
                    <div class=\"col-sm-6\">
                    <input type=\"submit\" value=\"Edit\" name=\"edit\" class=\"btn btn-primary\" />
                    <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href='";
        // line 67
        echo $this->env->getExtension('routing')->getPath("acme_image");
        echo "'\"/>
                    </div>
                </div>
                </form>
                </center>
            </div>        
";
    }

    public function getTemplateName()
    {
        return "AcmeImageBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  137 => 51,  81 => 24,  104 => 38,  152 => 51,  97 => 37,  126 => 43,  77 => 17,  65 => 17,  58 => 13,  422 => 109,  391 => 218,  333 => 166,  288 => 127,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 97,  205 => 95,  198 => 93,  185 => 90,  181 => 89,  161 => 84,  127 => 67,  118 => 41,  100 => 29,  165 => 85,  114 => 42,  110 => 41,  84 => 25,  23 => 3,  34 => 5,  129 => 43,  113 => 39,  70 => 26,  53 => 15,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 192,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 141,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 49,  128 => 46,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 57,  102 => 32,  71 => 17,  67 => 16,  63 => 15,  59 => 17,  87 => 25,  38 => 4,  26 => 2,  94 => 29,  89 => 35,  85 => 22,  75 => 18,  68 => 14,  56 => 16,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 53,  138 => 72,  136 => 47,  121 => 20,  117 => 37,  105 => 39,  91 => 34,  62 => 12,  49 => 13,  31 => 4,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 36,  88 => 23,  78 => 30,  46 => 7,  44 => 12,  27 => 4,  79 => 22,  72 => 30,  69 => 18,  47 => 8,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 43,  120 => 43,  115 => 43,  111 => 37,  108 => 37,  101 => 38,  98 => 31,  96 => 31,  83 => 28,  74 => 16,  66 => 15,  55 => 21,  52 => 13,  50 => 8,  43 => 8,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 92,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 67,  164 => 59,  162 => 57,  154 => 59,  149 => 54,  147 => 55,  144 => 55,  141 => 49,  133 => 62,  130 => 47,  125 => 45,  122 => 65,  116 => 41,  112 => 35,  109 => 40,  106 => 35,  103 => 17,  99 => 31,  95 => 35,  92 => 50,  86 => 34,  82 => 23,  80 => 19,  73 => 19,  64 => 19,  60 => 14,  57 => 15,  54 => 14,  51 => 21,  48 => 12,  45 => 18,  42 => 8,  39 => 4,  36 => 4,  33 => 3,  30 => 1,);
    }
}
