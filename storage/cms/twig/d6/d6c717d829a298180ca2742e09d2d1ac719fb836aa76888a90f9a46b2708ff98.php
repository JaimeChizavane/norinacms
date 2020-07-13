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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/about.htm */
class __TwigTemplate_5e41751c11b8ad70d88d3adc8b28ddcd608df30fb24a2f4f5577285e3cd3c088 extends \Twig\Template
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
        echo "<h4>Moya Body Clinic</h4>
                    <p>
                    Moya clinic is specialized in body healiness, we take care of your body. we have specialist that are trained to help to achive our customer expectations. 
                    </p>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Moya Body Clinic</h4>
                    <p>
                    Moya clinic is specialized in body healiness, we take care of your body. we have specialist that are trained to help to achive our customer expectations. 
                    </p>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/about.htm", "");
    }
}
