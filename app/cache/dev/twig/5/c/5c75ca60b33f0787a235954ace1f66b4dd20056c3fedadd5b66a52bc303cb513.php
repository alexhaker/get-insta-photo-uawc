<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d6fe9db00c4b0b72cd404f3a9e0572f23a5313c0f401a429b6ee4c7789407dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38c0daba2fc910db937c740f9787a8f84e9468a07c25dd1c260540e85e60a5d8 = $this->env->getExtension("native_profiler");
        $__internal_38c0daba2fc910db937c740f9787a8f84e9468a07c25dd1c260540e85e60a5d8->enter($__internal_38c0daba2fc910db937c740f9787a8f84e9468a07c25dd1c260540e85e60a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c0daba2fc910db937c740f9787a8f84e9468a07c25dd1c260540e85e60a5d8->leave($__internal_38c0daba2fc910db937c740f9787a8f84e9468a07c25dd1c260540e85e60a5d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4884563b7270fc78d441b1cf717a9e7efb77665d6d90fe825df23877aded20b8 = $this->env->getExtension("native_profiler");
        $__internal_4884563b7270fc78d441b1cf717a9e7efb77665d6d90fe825df23877aded20b8->enter($__internal_4884563b7270fc78d441b1cf717a9e7efb77665d6d90fe825df23877aded20b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4884563b7270fc78d441b1cf717a9e7efb77665d6d90fe825df23877aded20b8->leave($__internal_4884563b7270fc78d441b1cf717a9e7efb77665d6d90fe825df23877aded20b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e45349a952c3ccd8c238f79b8087711f5c8f1278bcb15001b66d294d3f0eaf94 = $this->env->getExtension("native_profiler");
        $__internal_e45349a952c3ccd8c238f79b8087711f5c8f1278bcb15001b66d294d3f0eaf94->enter($__internal_e45349a952c3ccd8c238f79b8087711f5c8f1278bcb15001b66d294d3f0eaf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e45349a952c3ccd8c238f79b8087711f5c8f1278bcb15001b66d294d3f0eaf94->leave($__internal_e45349a952c3ccd8c238f79b8087711f5c8f1278bcb15001b66d294d3f0eaf94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2088ef97201116b9b5a8306128ba341e669f187c22e84c568deadf1835ec131 = $this->env->getExtension("native_profiler");
        $__internal_b2088ef97201116b9b5a8306128ba341e669f187c22e84c568deadf1835ec131->enter($__internal_b2088ef97201116b9b5a8306128ba341e669f187c22e84c568deadf1835ec131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b2088ef97201116b9b5a8306128ba341e669f187c22e84c568deadf1835ec131->leave($__internal_b2088ef97201116b9b5a8306128ba341e669f187c22e84c568deadf1835ec131_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
