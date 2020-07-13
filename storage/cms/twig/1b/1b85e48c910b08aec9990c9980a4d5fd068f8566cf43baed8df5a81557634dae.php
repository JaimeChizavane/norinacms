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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom.htm */
class __TwigTemplate_3051da821ec7c2f708614daa6185bda096c4c765e41a480117c9be6c19384ba4 extends \Twig\Template
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
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "                </div>
                 
                <div class=\"col-sm-3\">
                    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom/links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "                </div>

                <div class=\"col-sm-4 subscribe\">
                    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom/socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  55 => 9,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    {% partial \"bottom/about\" %}
                </div>
                 
                <div class=\"col-sm-3\">
                    {% partial \"bottom/links\" %}
                </div>

                <div class=\"col-sm-4 subscribe\">
                    {% partial \"bottom/socials\" %}
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom.htm", "");
    }
}
