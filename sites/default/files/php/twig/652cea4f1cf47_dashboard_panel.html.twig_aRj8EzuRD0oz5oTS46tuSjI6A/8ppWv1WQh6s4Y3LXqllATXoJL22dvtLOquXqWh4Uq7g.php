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

/* modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig */
class __TwigTemplate_7a0ef4c4708aedd00c425409428b1bf4 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig"));

        // line 1
        echo "<h2>Collector: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 1, $this->source), "html", null, true);
        echo "</h2>

<hr/>

";
        // line 5
        if (        $this->loadTemplate(($context["template"] ?? null), "modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig", 5)->hasBlock("panel", $context)) {
            // line 6
            echo "  ";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["collector" => ((            // line 7
($context["profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => ($context["name"] ?? null)], "method", false, false, true, 7)) : (null)), "token" => ((            // line 8
$context["token"]) ?? (((($context["profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, true, 8)) : (null)))), "name" =>             // line 9
($context["name"] ?? null)];
            if (!twig_test_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 7, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            // line 11
            echo "    ";
            $this->loadTemplate(($context["template"] ?? null), "modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig", 11)->displayBlock("panel", $context);
            echo "
  ";
            $context = $__internal_compile_0;
        }
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  57 => 9,  56 => 8,  55 => 7,  52 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webprofiler/templates/Profiler/dashboard_panel.html.twig", "C:\\xampp\\htdocs\\Activity\\modules\\contrib\\webprofiler\\templates\\Profiler\\dashboard_panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "with" => 6);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'with'],
                ['escape'],
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
