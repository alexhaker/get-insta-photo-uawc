<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_03ccbecc9b99f5232bb74e0f8deb9ac36d726a3fac4a3b44780f93a4ac3245d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ea220dfe73f95b87e62036dfcc16fd0b2f1f365c1351165922151f6ab424201 = $this->env->getExtension("native_profiler");
        $__internal_4ea220dfe73f95b87e62036dfcc16fd0b2f1f365c1351165922151f6ab424201->enter($__internal_4ea220dfe73f95b87e62036dfcc16fd0b2f1f365c1351165922151f6ab424201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t<title>UAWC Instagram collage creator</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/jquery.steps.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/normalize.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/helpers.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/select2.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/image-picker.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/image-picker.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/init.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
\t<h1>UAWC Instagram collage creator</h1>
\t";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "</body>
</html>";
        
        $__internal_4ea220dfe73f95b87e62036dfcc16fd0b2f1f365c1351165922151f6ab424201->leave($__internal_4ea220dfe73f95b87e62036dfcc16fd0b2f1f365c1351165922151f6ab424201_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_007e5ba9d1b64f07a3697b2dfd5637f25afc2e106fdde95bb943084bdbfed2dc = $this->env->getExtension("native_profiler");
        $__internal_007e5ba9d1b64f07a3697b2dfd5637f25afc2e106fdde95bb943084bdbfed2dc->enter($__internal_007e5ba9d1b64f07a3697b2dfd5637f25afc2e106fdde95bb943084bdbfed2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_007e5ba9d1b64f07a3697b2dfd5637f25afc2e106fdde95bb943084bdbfed2dc->leave($__internal_007e5ba9d1b64f07a3697b2dfd5637f25afc2e106fdde95bb943084bdbfed2dc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  79 => 21,  77 => 20,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">*/
/* 	<title>UAWC Instagram collage creator</title>*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/styles.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/jquery.steps.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/normalize.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/helpers.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/select2.min.css') }}">*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/app/css/image-picker.css') }}">*/
/* 	<script src="{{ asset('bundles/app/js/jquery-1.11.3.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/app/js/jquery.steps.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/app/js/select2.full.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/app/js/image-picker.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/app/js/init.js') }}"></script>*/
/* </head>*/
/* <body>*/
/* 	<h1>UAWC Instagram collage creator</h1>*/
/* 	{% block body %}{% endblock %}*/
/* </body>*/
/* </html>*/
