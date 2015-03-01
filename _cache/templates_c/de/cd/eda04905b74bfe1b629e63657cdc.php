<?php

/* index.html */
class __TwigTemplate_decdeda04905b74bfe1b629e63657cdc extends Twig_Template
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
        <div id=\"portfolio\" class=\"container hide-for-medium-up\">
            <ul class=\"example-orbit\" data-orbit>
                  <li>
                        <img src=\"";
        // line 34
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "\" alt=\"slide 1\" />
                        <div class=\"orbit-caption\">
                            Caption One.
                        </div>
                  </li>
                  <li class=\"active\">
                      <img src=\"";
        // line 40
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "\" alt=\"slide 2\" />
                        <div class=\"orbit-caption\">
                            Caption Two.
                        </div>
                  </li>
                  <li>
                        <img src=\"";
        // line 46
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "\" alt=\"slide 3\" />
                        <div class=\"orbit-caption\">
                            Caption Three.
                        </div>
                  </li>
            </ul> 
        </div>
        <div id=\"portfolio\" class=\"container hide-for-small-only\">
            <ul class=\"large-block-grid-3 clearing-thumbs clearing-feature\" data-clearing>
                <li class=\"clearing-featured-img\">";
        // line 55
        echo (isset($context["img1"]) ? $context["img1"] : null);
        echo "</li>
                <li class=\"clearing-featured-img\">";
        // line 56
        echo (isset($context["img2"]) ? $context["img2"] : null);
        echo "</li>
                <li class=\"clearing-featured-img\">";
        // line 57
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                <li>";
        // line 58
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
                <li>";
        // line 59
        echo (isset($context["img3"]) ? $context["img3"] : null);
        echo "</li>
            </ul>
        </div>

    </div>


<!-- footer -->
";
        // line 67
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
        return array (  115 => 67,  104 => 59,  100 => 58,  96 => 57,  92 => 56,  88 => 55,  76 => 46,  67 => 40,  58 => 34,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
