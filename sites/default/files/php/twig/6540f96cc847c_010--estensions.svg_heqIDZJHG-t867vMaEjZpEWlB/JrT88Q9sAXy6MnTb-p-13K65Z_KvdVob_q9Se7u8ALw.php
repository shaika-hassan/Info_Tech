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

/* @webprofiler/Icon/010--estensions.svg */
class __TwigTemplate_8ada67b69b904bc16d5011752547bddd extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Icon/010--estensions.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 24 24\" style=\"enable-background:new 0 0 24 24;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#AAAAAA;}
</style>
<path class=\"st0\" d=\"M6.4,6.8L6.4,6.8l0,0.8c0,1.3,3.7,1.3,3.6,0V6.8C9.9,5.5,6.5,5.5,6.4,6.8z M9.3,6.9c0,0.3-0.5,0.5-1.1,0.5
\tc-0.6,0-1.1-0.2-1.1-0.5c0-0.3,0.5-0.5,1.1-0.5C8.8,6.4,9.3,6.7,9.3,6.9z M2.4,7.1L2.4,7.1L2.4,7.1L12,2l9.6,5.1v4.4l-9.2,4.8v-4.4
\tl8.2-4.3L12,3L3.4,7.5l8.2,4.4v4.4l-9.2-4.9C2.4,11.4,2.4,7.1,2.4,7.1z M21.6,12.4v4.8L12.4,22v-4.7C12.4,17.3,21.6,12.4,21.6,12.4z
\t M10.2,9.6c0,1.3,3.7,1.3,3.6,0V8.8c-0.1-1.3-3.5-1.3-3.6,0h0V9.6z M12,8.5c0.6,0,1.1,0.2,1.1,0.5c0,0.3-0.5,0.5-1.1,0.5
\ts-1.1-0.2-1.1-0.5S11.4,8.5,12,8.5z M13.8,5.7V4.9c-0.1-1.3-3.5-1.3-3.6,0h0v0.8C10.1,7,13.8,7,13.8,5.7z M12,4.5
\tc0.6,0,1.1,0.2,1.1,0.5c0,0.3-0.5,0.5-1.1,0.5c-0.6,0-1.1-0.2-1.1-0.5S11.4,4.5,12,4.5z M17.6,7.6V6.8c-0.1-1.3-3.5-1.3-3.6,0h0v0.8
\tC13.9,8.9,17.6,8.9,17.6,7.6z M14.6,6.9c0-0.3,0.5-0.5,1.1-0.5c0.6,0,1.1,0.2,1.1,0.5s-0.5,0.5-1.1,0.5C15.2,7.4,14.6,7.2,14.6,6.9z
\t M11.6,17.3V22l-9.2-4.7v-4.9L11.6,17.3z\"/>
</svg>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Icon/010--estensions.svg";
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Icon/010--estensions.svg", "C:\\xampp\\htdocs\\Activity\\modules\\contrib\\webprofiler\\templates\\Icon\\010--estensions.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
