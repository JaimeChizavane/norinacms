<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/gallery.htm */
class __TwigTemplate_7a2fbec2cb6e4de780bbc736fda34ea94e72be2913842a24732c248cddc932cf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">

       <h1 class=\"title\">Gallery</h1>
       <div class=\"row gallery\">
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/1.jpg");
        echo "\" title=\"Foods\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/1.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/2.jpg");
        echo "\" title=\"Coffee\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/2.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/3.jpg");
        echo "\" title=\"Travel\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/3.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/4.jpg");
        echo "\" title=\"Adventure\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/4.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/5.jpg");
        echo "\" title=\"Fruits\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/5.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/6.jpg");
        echo "\" title=\"Summer\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/6.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/7.jpg");
        echo "\" title=\"Bathroom\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/7.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/8.jpg");
        echo "\" title=\"Rooms\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/8.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/9.jpg");
        echo "\" title=\"Big Room\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/9.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/11.jpg");
        echo "\" title=\"Living Room\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/11.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/1.jpg");
        echo "\" title=\"Fruits\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/1.jpg");
        echo "\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/3.jpg");
        echo "\" title=\"Travel\" class=\"gallery-image\" data-gallery><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/3.jpg");
        echo "\" class=\"img-responsive\"></a></div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 16,  103 => 15,  97 => 14,  91 => 13,  85 => 12,  79 => 11,  73 => 10,  67 => 9,  61 => 8,  55 => 7,  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

       <h1 class=\"title\">Gallery</h1>
       <div class=\"row gallery\">
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/1.jpg'|theme }}\" title=\"Foods\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/1.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/2.jpg'|theme }}\" title=\"Coffee\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/2.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/3.jpg'|theme }}\" title=\"Travel\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/3.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/4.jpg'|theme }}\" title=\"Adventure\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/4.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/5.jpg'|theme }}\" title=\"Fruits\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/5.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/6.jpg'|theme }}\" title=\"Summer\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/6.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/7.jpg'|theme }}\" title=\"Bathroom\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/7.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/8.jpg'|theme }}\" title=\"Rooms\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/8.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/9.jpg'|theme }}\" title=\"Big Room\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/9.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/11.jpg'|theme }}\" title=\"Living Room\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/11.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/1.jpg'|theme }}\" title=\"Fruits\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/1.jpg'|theme }}\" class=\"img-responsive\"></a></div>
              <div class=\"col-sm-4 wowload fadeInUp\"><a href=\"{{ 'assets/images/photos/3.jpg'|theme }}\" title=\"Travel\" class=\"gallery-image\" data-gallery><img src=\"{{ 'assets/images/photos/3.jpg'|theme }}\" class=\"img-responsive\"></a></div>
       </div>
</div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/gallery.htm", "");
    }
}
