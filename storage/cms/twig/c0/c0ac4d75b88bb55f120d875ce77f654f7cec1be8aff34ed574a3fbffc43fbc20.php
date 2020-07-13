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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/details.htm */
class __TwigTemplate_11dbd4223e1de8a0a61ee071c4909c5e77947f467fe3e67daf3c516894001e9a extends \Twig\Template
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

<h1 class=\"title\">Luxurious Suites</h1>

 <!-- RoomDetails -->
            <div id=\"RoomDetails\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/8.jpg");
        echo "\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/9.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/10.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#RoomDetails\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#RoomDetails\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class=\"room-features spacer\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5\">
          ";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("room/desc.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 22
        echo "      </div>
      <div class=\"col-sm-6 col-md-3 amenitites\">
          ";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("room/features.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 25
        echo "      </div>
        ";
        // line 26
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("room/prices.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 27
        echo "    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 26,  80 => 25,  76 => 24,  72 => 22,  68 => 21,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

<h1 class=\"title\">Luxurious Suites</h1>

 <!-- RoomDetails -->
            <div id=\"RoomDetails\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"{{ 'assets/images/photos/8.jpg'|theme }}\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/9.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/10.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#RoomDetails\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#RoomDetails\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class=\"room-features spacer\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5\">
          {% content 'room/desc.htm' %}
      </div>
      <div class=\"col-sm-6 col-md-3 amenitites\">
          {% content 'room/features.htm' %}
      </div>
        {% content 'room/prices.htm' %}
    </div>
</div>
</div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/details.htm", "");
    }
}
