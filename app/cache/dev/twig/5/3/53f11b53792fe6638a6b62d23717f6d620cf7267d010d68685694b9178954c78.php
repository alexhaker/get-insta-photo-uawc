<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_8d0e9d0ede4e0bc131a17a400a5ac38db060403a48fb1fee6473bb2ffb950166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2ba52936cc4e799b9e7a408e1af0b68cea2884b13bcbfc71d2cfa1737729d1b = $this->env->getExtension("native_profiler");
        $__internal_d2ba52936cc4e799b9e7a408e1af0b68cea2884b13bcbfc71d2cfa1737729d1b->enter($__internal_d2ba52936cc4e799b9e7a408e1af0b68cea2884b13bcbfc71d2cfa1737729d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ba52936cc4e799b9e7a408e1af0b68cea2884b13bcbfc71d2cfa1737729d1b->leave($__internal_d2ba52936cc4e799b9e7a408e1af0b68cea2884b13bcbfc71d2cfa1737729d1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_216161254aa0b0be187089869a1ef32e3934889acee81cadd2bc3f9343dde271 = $this->env->getExtension("native_profiler");
        $__internal_216161254aa0b0be187089869a1ef32e3934889acee81cadd2bc3f9343dde271->enter($__internal_216161254aa0b0be187089869a1ef32e3934889acee81cadd2bc3f9343dde271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div id=\"wizard\">
\t\t<h3>Search user & select photos</h3>
\t\t<section>
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div id=\"search-user-box\">
\t\t\t\t\tSearch user: 
\t\t\t\t\t<select name=\"insta-user\" id=\"insta-user\">
\t\t\t\t\t\t  <option value=\"-1\" selected=\"selected\">Search instagram user</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div id=\"select-source-box\">
\t\t\t\t\tGet photos from:
\t\t\t\t\t<select name=\"photo-source\" id=\"photo-source\">
\t\t\t\t\t\t<option value=\"1\">user profile</option>
\t\t\t\t\t\t<option value=\"2\">user feed</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"photos\">
\t\t\t\t<select id=\"image-picker\" >

\t\t\t\t</select>
\t\t\t</div>
\t\t</section>
\t\t<h3>Get result</h3>
\t\t<section>
\t\t\t
\t\t</section>
\t</div>
";
        
        $__internal_216161254aa0b0be187089869a1ef32e3934889acee81cadd2bc3f9343dde271->leave($__internal_216161254aa0b0be187089869a1ef32e3934889acee81cadd2bc3f9343dde271_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div id="wizard">*/
/* 		<h3>Search user & select photos</h3>*/
/* 		<section>*/
/* 			<div class="clearfix">*/
/* 				<div id="search-user-box">*/
/* 					Search user: */
/* 					<select name="insta-user" id="insta-user">*/
/* 						  <option value="-1" selected="selected">Search instagram user</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div id="select-source-box">*/
/* 					Get photos from:*/
/* 					<select name="photo-source" id="photo-source">*/
/* 						<option value="1">user profile</option>*/
/* 						<option value="2">user feed</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="photos">*/
/* 				<select id="image-picker" >*/
/* */
/* 				</select>*/
/* 			</div>*/
/* 		</section>*/
/* 		<h3>Get result</h3>*/
/* 		<section>*/
/* 			*/
/* 		</section>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
