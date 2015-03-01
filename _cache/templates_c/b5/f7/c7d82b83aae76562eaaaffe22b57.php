<?php

/* localisation.html */
class __TwigTemplate_b5f7c7d82b83aae76562eaaaffe22b57 extends Twig_Template
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
        <div class='row'>
            <ul class=\"small-block-grid-3\">
                <li><!-- Your content goes here --></li>
                <li><!-- Your content goes here --></li>
                <li><!-- Your content goes here --></li>
            </ul>
        </div>
    </div>
</div>

<!-- footer -->
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true\"></script>
<script src=\"assets/js/localisation.js\"></script>
";
        // line 25
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
        return array (  49 => 25,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
