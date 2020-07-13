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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/layouts/default.htm */
class __TwigTemplate_3811fe3cb28dd2853b86142657dabee428bf408f8b79fc9fb91ee00397c2f0e0 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\">

<!-- header -->
<nav class=\"navbar  navbar-default\" role=\"navigation\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</nav>
<!-- header -->
    
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 15
        echo "
<!--bottom-->
<footer class=\"spacer\">
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</footer>
<!--bottom-->

<!--footer-->
<div class=\"text-center copyright\">
    ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "</div>
<!--footer-->

<a href=\"#home\" class=\"toTop scroll\"><i class=\"fa fa-angle-up\"></i></a>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\">
    <!-- The container for the modal slides -->
    <div class=\"slides\"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class=\"title\">title</h3>
    <a class=\"prev\">‹</a>
    <a class=\"next\">›</a>
    <a class=\"close\">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

<script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<!-- wow script -->
<script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow/wow.min.js");
        echo "\"></script>
<!-- uniform -->
<script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/uniform/js/jquery.uniform.js");
        echo "\"></script>
<!-- boostrap -->
<script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.js");
        echo "\" type=\"text/javascript\" ></script>
<!-- jquery mobile -->
<script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/mobile/touchSwipe.min.js");
        echo "\"></script>
<!-- jquery mobile -->
<script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/respond/respond.js");
        echo "\"></script>
<!-- gallery -->
<script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
<!-- custom script -->
<script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
";
        // line 57
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 59
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  153 => 58,  142 => 57,  138 => 56,  133 => 54,  128 => 52,  123 => 50,  118 => 48,  113 => 46,  108 => 44,  103 => 42,  84 => 25,  80 => 24,  73 => 19,  69 => 18,  64 => 15,  62 => 14,  57 => 11,  53 => 10,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% partial \"meta\" %}


<body id=\"home\">

<!-- header -->
<nav class=\"navbar  navbar-default\" role=\"navigation\">
    {% partial \"nav\" %}
</nav>
<!-- header -->
    
{% page %}

<!--bottom-->
<footer class=\"spacer\">
    {% partial \"bottom\" %}
</footer>
<!--bottom-->

<!--footer-->
<div class=\"text-center copyright\">
    {% partial \"footer\" %}
</div>
<!--footer-->

<a href=\"#home\" class=\"toTop scroll\"><i class=\"fa fa-angle-up\"></i></a>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\">
    <!-- The container for the modal slides -->
    <div class=\"slides\"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class=\"title\">title</h3>
    <a class=\"prev\">‹</a>
    <a class=\"next\">›</a>
    <a class=\"close\">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

<script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
<!-- wow script -->
<script src=\"{{ 'assets/vendor/wow/wow.min.js'|theme }}\"></script>
<!-- uniform -->
<script src=\"{{ 'assets/vendor/uniform/js/jquery.uniform.js'|theme }}\"></script>
<!-- boostrap -->
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.js'|theme }}\" type=\"text/javascript\" ></script>
<!-- jquery mobile -->
<script src=\"{{ 'assets/vendor/mobile/touchSwipe.min.js'|theme }}\"></script>
<!-- jquery mobile -->
<script src=\"{{ 'assets/vendor/respond/respond.js'|theme }}\"></script>
<!-- gallery -->
<script src=\"{{ 'assets/vendor/gallery/jquery.blueimp-gallery.min.js'|theme }}\"></script>
<!-- custom script -->
<script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}


</body>
</html>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/layouts/default.htm", "");
    }
}
