<?php

/* studio.html */
class __TwigTemplate_1f7e9d68ce86f04cc6c82aae01a33900 extends Twig_Template
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
            <!-- gallery studio -->
            <ul class=\"small-block-grid-3\">
                   ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) ? $context["assets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 16
            echo "                   <li><a href='";
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : null), "html", null, true);
            echo "'></a>iiii</li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo " 
            </ul>
        </div>
    </div>
</div>





<!-- footer -->
";
        // line 28
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
        return array (  68 => 28,  55 => 17,  46 => 16,  42 => 15,  34 => 10,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
