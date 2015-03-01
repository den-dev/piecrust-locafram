<?php

/* studio.html */
class __TwigTemplate_2282b6f91b528141c61757cde2faf0d5 extends Twig_Template
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
          ";
        // line 10
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
        <div class='row'>
            <div id=\"portfolio\" class=\"hide-for-small-only\">
                <ul class=\"large-block-grid-3 clearing-thumbs clearing-feature\" data-clearing>
                   ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) ? $context["assets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "                       <li>";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "</li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo " 
                </ul>
            </div>
        </div>
    </div>
</div>





<!-- footer -->
";
        // line 29
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
        return array (  69 => 29,  55 => 17,  46 => 16,  42 => 15,  34 => 10,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
