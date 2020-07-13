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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/services.htm */
class __TwigTemplate_57ebea3d62a2c254517ede820ed863760a57a2e69f4b9cd5c5c4653cb1d04814 extends \Twig\Template
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
        echo "<div class=\"row\">
        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"RoomCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/8.jpg");
        echo "\" class=\"img-responsive\" alt=\"slide\"></div>                
                <div class=\"item  height-full\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/9.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/10.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#RoomCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#RoomCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Massages<a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/rooms");
        echo "\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>


        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"TourCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/6.jpg");
        echo "\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/3.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/4.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#TourCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#TourCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Physiotherapy<a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/gallery");
        echo "\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>


        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"FoodCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/1.jpg");
        echo "\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/2.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/5.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#FoodCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#FoodCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Body Services<a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/gallery");
        echo "\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  110 => 42,  106 => 41,  102 => 40,  91 => 32,  81 => 25,  77 => 24,  73 => 23,  62 => 15,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"RoomCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"{{ 'assets/images/photos/8.jpg'|theme }}\" class=\"img-responsive\" alt=\"slide\"></div>                
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/9.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/10.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#RoomCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#RoomCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Massages<a href=\"{{ 'samples/rooms'|page }}\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>


        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"TourCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"{{ 'assets/images/photos/6.jpg'|theme }}\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/3.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/4.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#TourCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#TourCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Physiotherapy<a href=\"{{ 'samples/gallery'|page }}\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>


        <div class=\"col-sm-4\">
            <!-- RoomCarousel -->
            <div id=\"FoodCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                <div class=\"item active\"><img src=\"{{ 'assets/images/photos/1.jpg'|theme }}\" class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/2.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                <div class=\"item  height-full\"><img src=\"{{ 'assets/images/photos/5.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\"></div>
                </div>
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#FoodCarousel\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a class=\"right carousel-control\" href=\"#FoodCarousel\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class=\"caption\">Body Services<a href=\"{{ 'samples/gallery'|page }}\" class=\"pull-right\"><i class=\"fa fa-edit\"></i></a></div>
        </div>
    </div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/services.htm", "");
    }
}
