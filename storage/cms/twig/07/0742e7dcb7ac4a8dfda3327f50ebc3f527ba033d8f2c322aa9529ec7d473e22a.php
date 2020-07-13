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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/contact.htm */
class __TwigTemplate_d0587ae642160767a4ec31dac1f607a7c8a3c951da6cdb85c9e8e8f6286c4a12 extends \Twig\Template
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

<h1 class=\"title\">Contact</h1>

<!-- form -->
<div class=\"contact\">

       <div class=\"row\">
       \t
       \t<div class=\"col-sm-12\">
       \t<div class=\"map\">
       \t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.460884430251!2d-0.13301252240929382!3d51.50651527467666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2snp!4v1414314152341\" width=\"100%\" height=\"300\" frameborder=\"0\"></iframe>\t
       \t</div>


\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t<div class=\"spacer\">   \t\t

       \t\t<h4>Write to us</h4>
\t\t\t<form role=\"form\" name=\"contact-form\" method=\"post\" action=\"#\">
\t\t\t<div class=\"form-group\">\t
\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Enter your email\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<input type=\"phone\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"Phone\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<textarea type=\"email\" class=\"form-control\" name=\"message\" placeholder=\"Message\" rows=\"4\" required></textarea>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Send</button>
\t\t\t</form>
\t\t\t</div>


       \t</div>

       </div>
</div>
</div>
<!-- form -->

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

<h1 class=\"title\">Contact</h1>

<!-- form -->
<div class=\"contact\">

       <div class=\"row\">
       \t
       \t<div class=\"col-sm-12\">
       \t<div class=\"map\">
       \t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.460884430251!2d-0.13301252240929382!3d51.50651527467666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2snp!4v1414314152341\" width=\"100%\" height=\"300\" frameborder=\"0\"></iframe>\t
       \t</div>


\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t<div class=\"spacer\">   \t\t

       \t\t<h4>Write to us</h4>
\t\t\t<form role=\"form\" name=\"contact-form\" method=\"post\" action=\"#\">
\t\t\t<div class=\"form-group\">\t
\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Enter your email\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<input type=\"phone\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"Phone\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<textarea type=\"email\" class=\"form-control\" name=\"message\" placeholder=\"Message\" rows=\"4\" required></textarea>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Send</button>
\t\t\t</form>
\t\t\t</div>


       \t</div>

       </div>
</div>
</div>
<!-- form -->

</div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/pages/samples/contact.htm", "");
    }
}
