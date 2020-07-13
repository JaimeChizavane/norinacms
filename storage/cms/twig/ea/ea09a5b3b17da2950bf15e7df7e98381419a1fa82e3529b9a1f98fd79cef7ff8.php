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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/socials.htm */
class __TwigTemplate_8a29afb9acf65bfd268885e7899a24b74284862e0c0aeb41925d498bc5e9c3d0 extends \Twig\Template
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
        echo "<h4>Subscription</h4>
                    <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter email id here\">
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\">Get Notify</button>
                    </span>
                    </div>
                    <div class=\"social\">
                    <a href=\"#\"><i class=\"fa fa-facebook-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-instagram\"  data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"instragram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"pinterest\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-tumblr-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"tumblr\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-youtube-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"youtube\"></i></a>
                    </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/socials.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Subscription</h4>
                    <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter email id here\">
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\">Get Notify</button>
                    </span>
                    </div>
                    <div class=\"social\">
                    <a href=\"#\"><i class=\"fa fa-facebook-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-instagram\"  data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"instragram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"pinterest\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-tumblr-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"tumblr\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-youtube-square\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"youtube\"></i></a>
                    </div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/bottom/socials.htm", "");
    }
}
