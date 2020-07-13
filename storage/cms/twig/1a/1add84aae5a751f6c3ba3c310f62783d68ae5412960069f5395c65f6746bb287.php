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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/banner.htm */
class __TwigTemplate_c04383e822dbc6b818f5982afddc79dbd2d180df0017675d4d7cc6b48e68b6b0 extends \Twig\Template
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
        echo "<img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photos/banner.jpg");
        echo "\"  class=\"img-responsive\" alt=\"slide\">
    <div class=\"welcome-message\">
        <div class=\"wrap-info\">
            <div class=\"information\">
                <h1  class=\"animated fadeInDown\">We care about your body</h1>
                <p class=\"animated fadeInUp\">Let you body with professionals we will ensure that we give all of our love.</p>                
            </div>
            <a href=\"#information\" class=\"arrow-nav scroll wowload fadeInDownBig\"><i class=\"fa fa-angle-down\"></i></a>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img src=\"{{ 'assets/images/photos/banner.jpg'|theme }}\"  class=\"img-responsive\" alt=\"slide\">
    <div class=\"welcome-message\">
        <div class=\"wrap-info\">
            <div class=\"information\">
                <h1  class=\"animated fadeInDown\">We care about your body</h1>
                <p class=\"animated fadeInUp\">Let you body with professionals we will ensure that we give all of our love.</p>                
            </div>
            <a href=\"#information\" class=\"arrow-nav scroll wowload fadeInDownBig\"><i class=\"fa fa-angle-down\"></i></a>
        </div>
    </div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/banner.htm", "");
    }
}
