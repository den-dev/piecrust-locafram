<?php

/* footer.html */
class __TwigTemplate_3cd7fec572ec55da72077f92d86888f9 extends Twig_Template
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
        echo "    ";
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "debug_info");
        echo "
    <footer id=\"copyright\">
\t<p>&copy; Untitled. All rights reserved. | Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a> | Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
\t\t<ul class=\"contact\">
\t\t\t<li><a href=\"#\" class=\"icon icon-twitter\"><span>Twitter</span></a></li>
\t\t\t<li><a href=\"#\" class=\"icon icon-facebook\"><span></span></a></li>
\t\t\t<li><a href=\"#\" class=\"icon icon-dribbble\"><span>Pinterest</span></a></li>
\t\t\t<li><a href=\"#\" class=\"icon icon-tumblr\"><span>Google+</span></a></li>
\t\t\t<li><a href=\"#\" class=\"icon icon-rss\"><span>Pinterest</span></a></li>
\t\t</ul>

    </footer>
    <!-- js -->
    <script src=\"assets/vendor/bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"assets/vendor/bower_components/foundation/js/foundation.min.js\"></script>
    <script src=\"assets/js/app.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  73 => 46,  62 => 38,  27 => 5,  25 => 5,  21 => 2,  19 => 1,);
    }
}
