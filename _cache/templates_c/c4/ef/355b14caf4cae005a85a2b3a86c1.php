<?php

/* footer.html */
class __TwigTemplate_c4ef355b14caf4cae005a85a2b3a86c1 extends Twig_Template
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
        echo "    <footer>
      ";
        // line 2
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "debug_info");
        echo "
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
        return array (  22 => 2,  26 => 3,  21 => 2,  19 => 1,);
    }
}
