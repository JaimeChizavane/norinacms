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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/meta.htm */
class __TwigTemplate_46d1f3c098bcfca2fa29f73dea033c6c40ebef22a49ff4b2a43418d469ab3d09 extends \Twig\Template
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
        echo "<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_description", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_keywords", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_author", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "site_name", [], "any", false, false, false, 8), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<!-- bootstrap -->
<link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/uniform/css/uniform.default.min.css", 2 => "assets/vendor/wow/animate.css", 3 => "assets/vendor/gallery/blueimp-gallery.min.css", 4 => "assets/css/style.css"]);
        // line 22
        echo "\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" type=\"image/x-icon\">

</head>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  74 => 24,  70 => 22,  68 => 16,  55 => 8,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
<meta name=\"author\" content=\"{{ this.page.meta_author }}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>{{ this.theme.site_name }} | {{ this.page.title }}</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<!-- bootstrap -->
<link href=\"{{ [
            'assets/vendor/bootstrap/css/bootstrap.min.css',
            'assets/vendor/uniform/css/uniform.default.min.css',
            'assets/vendor/wow/animate.css',
            'assets/vendor/gallery/blueimp-gallery.min.css',
            'assets/css/style.css',
        ]|theme }}\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" type=\"image/x-icon\">

</head>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/meta.htm", "");
    }
}
