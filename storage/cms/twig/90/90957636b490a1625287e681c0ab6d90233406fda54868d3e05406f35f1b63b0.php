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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/intro.htm */
class __TwigTemplate_5358093d7b04d60e8935385892a109b3d6134b44964fbbcad3e7e8ede208a1b2 extends \Twig\Template
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

    ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("intro/about.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
    <div class=\"spacer\">

    <div class=\"embed-responsive embed-responsive-16by9\"><iframe  class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/55057393?title=0\" width=\"100%\" height=\"400\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    {% content 'intro/about.htm' %}

    <div class=\"spacer\">

    <div class=\"embed-responsive embed-responsive-16by9\"><iframe  class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/55057393?title=0\" width=\"100%\" height=\"400\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>

</div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/intro.htm", "");
    }
}
