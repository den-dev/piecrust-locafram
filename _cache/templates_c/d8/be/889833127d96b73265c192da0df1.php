<?php

/* nav.html */
class __TwigTemplate_d8be889833127d96b73265c192da0df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- menu -->
<div id=\"header-wrapper\">
\t<div id=\"header\" class=\"container\">
\t\t<div id=\"logo\">
          <h1><a href=\"#\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</a></h1>
\t\t\t<div id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"active\"><a href=\"#\" accesskey=\"2\" title=\"\">Le Studio</a></li>
\t\t\t\t\t<li><a href=\"#\" accesskey=\"3\" title=\"\">Localisation</a></li>
\t\t\t\t\t<li><a href=\"#\" accesskey=\"4\" title=\"\">Modalités</a></li>
\t\t\t\t\t<li><a href=\"#\" accesskey=\"5\" title=\"\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- description -->
<div id=\"page-wrapper\">
\t<div id=\"welcome\" class=\"container\">
\t\t<p>This is <strong>Lambent</strong>, a free, fully standards-compliant CSS template designed by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. The photos in this template are from <a href=\"http://fotogrph.com/\"> Fotogrph</a>. This free template is released under the <a href=\"http://templated.co/license\">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  73 => 46,  62 => 38,  27 => 5,  25 => 5,  21 => 2,  19 => 1,);
    }
}
