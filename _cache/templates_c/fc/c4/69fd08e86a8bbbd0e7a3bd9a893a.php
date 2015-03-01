<?php

/* studio.html */
class __TwigTemplate_fcc469fd08e86a8bbbd0e7a3bd9a893a extends Twig_Template
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
            <div class='container hide-for-medium-up'>
                <ul class=\"example-orbit\" data-orbit data-options=\"animation:fade;pause_on_hover:false;animation_speed:500;navigation_arrows:false;bullets:true;timer_speed:2500;\" >
                        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) ? $context["assets"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 17
            echo "                        <li><img src='";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "base_url") . (isset($context["image_url"]) ? $context["image_url"] : null)), "html", null, true);
            echo "' alt='photo studio ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "'></li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo " 
                    </ul> 
            </div>
            <ul class=\"small-block-grid-3 clearing-thumbs hide-for-small-only\" data-clearing>
                   ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) ? $context["assets"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 23
            echo "                   <li><img src='";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "base_url") . (isset($context["image_url"]) ? $context["image_url"] : null)), "html", null, true);
            echo "' alt='photo studio ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "'></li>
                   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo " 
            </ul>
        </div>
    </div>
</div>





<!-- footer -->
";
        // line 35
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
        return array (  134 => 35,  121 => 24,  102 => 23,  85 => 22,  79 => 18,  60 => 17,  43 => 16,  34 => 10,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
