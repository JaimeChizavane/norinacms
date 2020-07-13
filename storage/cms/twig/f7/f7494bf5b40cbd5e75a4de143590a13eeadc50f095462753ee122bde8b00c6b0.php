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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/nav.htm */
class __TwigTemplate_3b36796196d33847186773d74d69035004b7c3a2a122b90c5d19cdce63ee975a extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "rooms" => [0 => "samples/rooms", 1 => "Massage Rooms"], "intro" => [0 => "samples/intro", 1 => "About us"], "gallery" => [0 => "samples/gallery", 1 => "Our Massages"], "contact" => [0 => "samples/contact", 1 => "Contact"]];
        // line 11
        echo "
";
        // line 32
        echo "
";
        // line 33
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 34
        echo "
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\"  alt=\"holiday crown\"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse navbar-right\" id=\"bs-example-navbar-collapse-1\">
      
      <ul class=\"nav navbar-nav\">        
        ";
        // line 51
        echo twig_call_macro($macros["nav"], "macro_render_menu", [($context["links"] ?? null)], 51, $context, $this->getSourceContext());
        echo "
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->";
    }

    // line 12
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 14
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 14)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 16)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 16)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 17)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 18
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 18)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 20
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 20)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 21)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 22
                echo "            </a>
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 26
                    echo twig_call_macro($macros["_self"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
                    echo "
                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 29,  137 => 26,  133 => 24,  131 => 23,  128 => 22,  124 => 21,  120 => 20,  114 => 18,  110 => 17,  106 => 16,  98 => 14,  93 => 13,  80 => 12,  72 => 51,  60 => 44,  48 => 34,  46 => 33,  43 => 32,  40 => 11,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t    'home':      ['home', 'Home'],
\t\t'rooms':     ['samples/rooms', 'Massage Rooms'],
\t\t'intro':     ['samples/intro', 'About us'],
\t\t'gallery':   ['samples/gallery', 'Our Massages'],
        'contact':   ['samples/contact', 'Contact'],
    }
%}

{% macro render_menu(links) %}
    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ _self.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\"  alt=\"holiday crown\"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse navbar-right\" id=\"bs-example-navbar-collapse-1\">
      
      <ul class=\"nav navbar-nav\">        
        {{ nav.render_menu(links) }}
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/nav.htm", "");
    }
}
