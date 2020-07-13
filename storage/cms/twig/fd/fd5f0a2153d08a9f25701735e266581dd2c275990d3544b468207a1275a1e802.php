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

/* /Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/reserve.htm */
class __TwigTemplate_8ba802038499902d2a2c03740a4f4fe2b7bf86e3985a76c449c7138f4d2f8161 extends \Twig\Template
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
<div class=\"col-sm-7 col-md-8\">
    <div class=\"embed-responsive embed-responsive-16by9 wowload fadeInLeft\"><iframe  class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/55057393?title=0\" width=\"100%\" height=\"400\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class=\"col-sm-5 col-md-4\">
<h3>Reservation</h3>
    <form role=\"form\" class=\"wowload fadeInRight\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Name\">
        </div>
        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\"  placeholder=\"Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"Phone\" class=\"form-control\"  placeholder=\"Phone\">
        </div>        
        <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-xs-6\">
            <select class=\"form-control\">
              <option>No. of Persons</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class=\"col-xs-6\">
            <select class=\"form-control\">
              <option>No. of Sessions</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-xs-4\">
              <select class=\"form-control col-sm-2\" name=\"expiry-month\" id=\"expiry-month\">
                <option>Date</option>
                <option value=\"01\">1</option>
                <option value=\"02\">2</option>
                <option value=\"03\">Mar (03)</option>
                <option value=\"04\">Apr (04)</option>
                <option value=\"05\">May (05)</option>
                <option value=\"06\">June (06)</option>
                <option value=\"07\">July (07)</option>
                <option value=\"08\">Aug (08)</option>
                <option value=\"09\">Sep (09)</option>
                <option value=\"10\">Oct (10)</option>
                <option value=\"11\">Nov (11)</option>
                <option value=\"12\">Dec (12)</option>
              </select>
            </div>
            <div class=\"col-xs-4\">
              <select class=\"form-control col-sm-2\" name=\"expiry-month\" id=\"expiry-month\">
                <option>Month</option>
                <option value=\"01\" selected>Jan (01)</option>
                <option value=\"02\">Feb (02)</option>
                <option value=\"03\">Mar (03)</option>
                <option value=\"04\">Apr (04)</option>
                <option value=\"05\">May (05)</option>
                <option value=\"06\">June (06)</option>
                <option value=\"07\">July (07)</option>
                <option value=\"08\">Aug (08)</option>
                <option value=\"09\">Sep (09)</option>
                <option value=\"10\">Oct (10)</option>
                <option value=\"11\">Nov (11)</option>
                <option value=\"12\">Dec (12)</option>
              </select>
            </div>
            <div class=\"col-xs-4\">
              <select class=\"form-control\" name=\"expiry-year\">
                <option value=\"13\">2013</option>
                <option value=\"14\">2014</option>
                <option value=\"15\" selected>2015</option>
                <option value=\"16\">2016</option>
                <option value=\"17\">2017</option>
                <option value=\"18\">2018</option>
                <option value=\"19\">2019</option>
                <option value=\"20\">2020</option>
                <option value=\"21\">2021</option>
                <option value=\"22\">2022</option>
                <option value=\"23\">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\"  placeholder=\"Message\" rows=\"4\"></textarea>
        </div>
        <button class=\"btn btn-default\">Submit</button>
    </form>    
</div>
</div>  
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/reserve.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-7 col-md-8\">
    <div class=\"embed-responsive embed-responsive-16by9 wowload fadeInLeft\"><iframe  class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/55057393?title=0\" width=\"100%\" height=\"400\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class=\"col-sm-5 col-md-4\">
<h3>Reservation</h3>
    <form role=\"form\" class=\"wowload fadeInRight\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Name\">
        </div>
        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\"  placeholder=\"Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"Phone\" class=\"form-control\"  placeholder=\"Phone\">
        </div>        
        <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-xs-6\">
            <select class=\"form-control\">
              <option>No. of Persons</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class=\"col-xs-6\">
            <select class=\"form-control\">
              <option>No. of Sessions</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class=\"form-group\">
            <div class=\"row\">
            <div class=\"col-xs-4\">
              <select class=\"form-control col-sm-2\" name=\"expiry-month\" id=\"expiry-month\">
                <option>Date</option>
                <option value=\"01\">1</option>
                <option value=\"02\">2</option>
                <option value=\"03\">Mar (03)</option>
                <option value=\"04\">Apr (04)</option>
                <option value=\"05\">May (05)</option>
                <option value=\"06\">June (06)</option>
                <option value=\"07\">July (07)</option>
                <option value=\"08\">Aug (08)</option>
                <option value=\"09\">Sep (09)</option>
                <option value=\"10\">Oct (10)</option>
                <option value=\"11\">Nov (11)</option>
                <option value=\"12\">Dec (12)</option>
              </select>
            </div>
            <div class=\"col-xs-4\">
              <select class=\"form-control col-sm-2\" name=\"expiry-month\" id=\"expiry-month\">
                <option>Month</option>
                <option value=\"01\" selected>Jan (01)</option>
                <option value=\"02\">Feb (02)</option>
                <option value=\"03\">Mar (03)</option>
                <option value=\"04\">Apr (04)</option>
                <option value=\"05\">May (05)</option>
                <option value=\"06\">June (06)</option>
                <option value=\"07\">July (07)</option>
                <option value=\"08\">Aug (08)</option>
                <option value=\"09\">Sep (09)</option>
                <option value=\"10\">Oct (10)</option>
                <option value=\"11\">Nov (11)</option>
                <option value=\"12\">Dec (12)</option>
              </select>
            </div>
            <div class=\"col-xs-4\">
              <select class=\"form-control\" name=\"expiry-year\">
                <option value=\"13\">2013</option>
                <option value=\"14\">2014</option>
                <option value=\"15\" selected>2015</option>
                <option value=\"16\">2016</option>
                <option value=\"17\">2017</option>
                <option value=\"18\">2018</option>
                <option value=\"19\">2019</option>
                <option value=\"20\">2020</option>
                <option value=\"21\">2021</option>
                <option value=\"22\">2022</option>
                <option value=\"23\">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\"  placeholder=\"Message\" rows=\"4\"></textarea>
        </div>
        <button class=\"btn btn-default\">Submit</button>
    </form>    
</div>
</div>  
</div>", "/Applications/MAMP/htdocs/norinacms/themes/jtherczeg-holidaycrown/partials/reserve.htm", "");
    }
}
