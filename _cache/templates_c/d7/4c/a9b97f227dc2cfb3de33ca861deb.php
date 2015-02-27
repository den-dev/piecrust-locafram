<?php

/* header.html */
class __TwigTemplate_d74ca9b97f227dc2cfb3de33ca861deb extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</title>

    <!-- base -->
    <base href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "base_theme_url"), "html", null, true);
        echo "\">

    <!-- icon -->
    <link rel=\"icon\" href=\"assets/img/favicon.ico\">
    
    <!-- css -->
    <link rel=\"stylesheet\" href=\"assets/css/app.css\" />

    <!-- js -->
    <script src=\"assets/vendor/bower_components/modernizr/modernizr.js\"></script>
  </head>
  <body>

";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  19 => 1,);
    }
}
