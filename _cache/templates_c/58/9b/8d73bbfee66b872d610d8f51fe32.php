<?php

/* index.html */
class __TwigTemplate_589b8d73bbfee66b872d610d8f51fe32 extends Twig_Template
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
        <div id=\"three-column\" class=\"container row\">
            <div><span class=\"arrow-down\"></span></div>
            <div id=\"tbox1\" class='small-6 large-4 column'>
                <div class=\"title\">
                    <h2>Maecenas luctus</h2>
                </div>
                <p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
            <div id=\"tbox2\" class='small-6 large-4 column'>
                <div class=\"title\">
                    <h2>Integer gravida</h2>
                </div>
                <p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
            <div id=\"tbox3\" class='small-6 large-4 column'>
                <div class=\"title\">
                    <h2>Praesent mauris</h2>
                </div>
                <p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>
                <a href=\"#\" class=\"button\">Learn More</a> </div>
        </div>

        <!-- portfolio small || large -->
        <div class='row'>
            <div id=\"portfolio\" class=\"container hide-for-medium-up\">
                <ul class=\"example-orbit\" data-orbit data-options=\"animation:fade;pause_on_hover:false;animation_speed:500;navigation_arrows:false;bullets:true;timer_speed:2500;\" >
                      <li>
                            ";
        // line 35
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "
                      </li>
                      <li class=\"active\">
                            ";
        // line 38
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "
                      </li>
                      <li>
                            ";
        // line 41
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "
                      </li>
                      <li>
                            ";
        // line 44
        echo (isset($context["img4"]) ? $context["img4"] : null);
        echo "
                      </li>
                      <li>
                            ";
        // line 47
        echo (isset($context["img5"]) ? $context["img5"] : null);
        echo "
                      </li>
                      <li>
                            ";
        // line 50
        echo (isset($context["img6"]) ? $context["img6"] : null);
        echo "
                      </li>
                </ul> 
            </div>
            <div id=\"portfolio\" class=\"container hide-for-small-only\">
                <ul class=\"large-block-grid-3 clearing-thumbs clearing-feature\" data-clearing>
                    <li class=\"clearing-featured-img\">";
        // line 56
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "</li>
                    <li class=\"clearing-featured-img\">";
        // line 57
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "</li>
                    <li class=\"clearing-featured-img\">";
        // line 58
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                    <li>";
        // line 59
        echo (isset($context["img4"]) ? $context["img4"] : null);
        echo "</li>
                    <li>";
        // line 60
        echo (isset($context["img5"]) ? $context["img5"] : null);
        echo "</li>
                    <li>";
        // line 61
        echo (isset($context["img6"]) ? $context["img6"] : null);
        echo "</li>
                </ul>
            </div>
        </div>

    </div>


<!-- footer -->
";
        // line 70
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
        return array (  130 => 70,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  102 => 57,  98 => 56,  89 => 50,  83 => 47,  77 => 44,  71 => 41,  65 => 38,  59 => 35,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
