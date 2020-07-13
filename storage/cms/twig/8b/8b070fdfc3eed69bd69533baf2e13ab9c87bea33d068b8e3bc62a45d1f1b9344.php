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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/links.htm */
class __TwigTemplate_f6146d116f7d0511ad75e5c04e817738bd84233d3c24604d29d5cd41736134b7 extends \Twig\Template
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
        echo "<h4>Quick Links</h4>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/rooms");
        echo "\">Massage Rooms</a></li>        
                        <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/intro");
        echo "\">About us</a></li>
                        <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/gallery");
        echo "\">Our Massages</a></li>
                        <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour");
        echo "\">Packages</a></li>
                        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contact</a></li>
                    </ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Quick Links</h4>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{ 'samples/rooms'|page }}\">Massage Rooms</a></li>        
                        <li><a href=\"{{ 'samples/intro'|page }}\">About us</a></li>
                        <li><a href=\"{{ 'samples/gallery'|page }}\">Our Massages</a></li>
                        <li><a href=\"{{ 'tour'|page }}\">Packages</a></li>
                        <li><a href=\"{{ 'samples/contact'|page }}\">Contact</a></li>
                    </ul>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/links.htm", "");
    }
}
