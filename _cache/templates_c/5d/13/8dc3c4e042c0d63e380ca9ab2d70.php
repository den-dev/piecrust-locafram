<?php

/* index.html */
class __TwigTemplate_5d138dc3c4e042c0d63e380ca9ab2d70 extends Twig_Template
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
                            <div class=\"orbit-caption\">
                                Caption One.
                            </div>
                      </li>
                      <li class=\"active\">
                            ";
        // line 41
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "
                            <div class=\"orbit-caption\">
                                Caption Two.
                            </div>
                      </li>
                      <li>
                            ";
        // line 47
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "
                            <div class=\"orbit-caption\">
                                Caption Three.
                            </div>
                      </li>
                      <li>
                            ";
        // line 53
        echo (isset($context["img4"]) ? $context["img4"] : null);
        echo "
                            <div class=\"orbit-caption\">
                                Caption One.
                            </div>
                      </li>
                      <li class=\"active\">
                            ";
        // line 59
        echo (isset($context["img5"]) ? $context["img5"] : null);
        echo "
                            <div class=\"orbit-caption\">
                                Caption Two.
                            </div>
                      </li>
                      <li>
                            ";
        // line 65
        echo (isset($context["img6"]) ? $context["img6"] : null);
        echo "
                            <div class=\"orbit-caption\">
                                Caption Three.
                            </div>
                      </li>
                </ul> 
            </div>
            <div id=\"portfolio\" class=\"container hide-for-small-only\">
                <ul class=\"large-block-grid-3 clearing-thumbs clearing-feature\" data-clearing>
                    <li class=\"clearing-featured-img\">";
        // line 74
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "</li>
                    <li class=\"clearing-featured-img\">";
        // line 75
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "</li>
                    <li class=\"clearing-featured-img\">";
        // line 76
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                    <li>";
        // line 77
        echo (isset($context["img4"]) ? $context["img4"] : null);
        echo "</li>
                    <li>";
        // line 78
        echo (isset($context["img5"]) ? $context["img5"] : null);
        echo "</li>
                    <li>";
        // line 79
        echo (isset($context["img6"]) ? $context["img6"] : null);
        echo "</li>
                </ul>
            </div>
        </div>

    </div>


<!-- footer -->
";
        // line 88
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
        return array (  148 => 88,  136 => 79,  132 => 78,  128 => 77,  124 => 76,  120 => 75,  116 => 74,  104 => 65,  95 => 59,  86 => 53,  77 => 47,  68 => 41,  59 => 35,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
