<?php

/* localisation.html */
class __TwigTemplate_73e7264a627bd1eca913038f2ecdee3a extends Twig_Template
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
    <div class='container'>
        <div class='row'>
            <div id=\"localisation\"></div>
        </div>
    </div>
</div>

<!-- footer -->
<script src=\"assets/js/localisation.js\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true\"></script>
";
        // line 18
        $this->env->loadTemplate("footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "localisation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}