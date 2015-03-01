<?php

/* default.html */
class __TwigTemplate_7ac7c975de696cc101b4de3f7aab3db5 extends Twig_Template
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
        $this->env->loadTemplate("header.html")->display($context);
        // line 2
        echo "
<!-- nav -->
";
        // line 4
        $this->env->loadTemplate("nav.html")->display($context);
        // line 5
        echo "
  ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

<!-- footer -->
";
        // line 9
        $this->env->loadTemplate("footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
