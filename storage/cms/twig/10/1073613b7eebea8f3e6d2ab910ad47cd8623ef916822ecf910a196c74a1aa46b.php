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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/home.htm */
class __TwigTemplate_b69fc086f1c3d9a95a3687a7f27b78b3b56881f8019b1ef1b64f92520025fff9 extends \Twig\Template
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
        echo "<!-- banner -->
<div class=\"banner\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</div>
<!-- banner-->

<!-- reservation-information -->
<div id=\"information\" class=\"spacer reserve-info \">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reserve"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</div>
<!-- reservation-information -->

<!-- services -->
<div class=\"spacer services wowload fadeInUp\">
<div class=\"container\">
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</div>
</div>
<!-- services -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 16,  56 => 10,  52 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- banner -->
<div class=\"banner\">
    {% partial \"banner\" %}
</div>
<!-- banner-->

<!-- reservation-information -->
<div id=\"information\" class=\"spacer reserve-info \">
    {% partial \"reserve\" %}
</div>
<!-- reservation-information -->

<!-- services -->
<div class=\"spacer services wowload fadeInUp\">
<div class=\"container\">
    {% partial \"services\" %}
</div>
</div>
<!-- services -->", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/home.htm", "");
    }
}
