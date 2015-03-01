<?php

/* studio.html */
class __TwigTemplate_6b43b226c7a7caaf3516bddd4231d908 extends Twig_Template
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

<div class=\"wrapper\">
    <div class='container row'>
          ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</div>

<!-- footer -->
";
        // line 14
        $this->env->loadTemplate("footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "studio.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  33 => 9,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
