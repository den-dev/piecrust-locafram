<?php

/* studio.html */
class __TwigTemplate_a50b08bc95d23c3bf68368f128cfd717 extends Twig_Template
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
            <ul class=\"small-block-grid-3\">
                   ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) ? $context["assets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 15
            echo "                       <li><a href='";
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : null), "html", null, true);
            echo "'></a></li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo " 
            </ul>
        </div>
    </div>
</div>





<!-- footer -->
";
        // line 27
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
        return array (  67 => 27,  54 => 16,  45 => 15,  41 => 14,  34 => 10,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
