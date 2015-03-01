<?php

/* index.html */
class __TwigTemplate_e29e37ae2f6a646d2d56d4b7536bee85 extends Twig_Template
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
    <!-- content -->
    <div class=\"wrapper\">
        <div id=\"three-column\" class=\"container\">
            <div><span class=\"arrow-down\"></span></div>
            <div id=\"tbox1\">
                <div class=\"title\">
                    <h2>Maecenas luctus</h2>
                </div>
                <p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
            <div id=\"tbox2\">
                <div class=\"title\">
                    <h2>Integer gravida</h2>
                </div>
                <p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
            <div id=\"tbox3\">
                <div class=\"title\">
                    <h2>Praesent mauris</h2>
                </div>
                <p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
        </div>

        <!-- portfolio small || large -->
        <div id=\"portfolio\" class=\"container\">
            <ul class=\"small-block-grid-1 large-block-grid-3 clearing-thumbs\" data-clearing>
                <li class=\"\">";
        // line 33
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "</li>
                <li class=\"\">";
        // line 34
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "</li>
                <li class=\"\">";
        // line 35
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                <li class=\"hide-for-medium-up\">";
        // line 36
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                <li class=\"hide-for-medium-up\">";
        // line 37
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
            </ul>
        </div>

    </div>


<!-- footer -->
";
        // line 45
        $this->env->loadTemplate("footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  73 => 37,  69 => 36,  65 => 35,  61 => 34,  57 => 33,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
