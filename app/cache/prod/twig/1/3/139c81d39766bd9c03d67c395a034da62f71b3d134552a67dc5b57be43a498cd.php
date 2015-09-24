<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_139c81d39766bd9c03d67c395a034da62f71b3d134552a67dc5b57be43a498cd extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<h3>Get result</h3>
\t\t<section>
\t\t\t
\t\t</section>
\t</div>
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
