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

/* core/themes/claro/templates/navigation/details--vertical-tabs.html.twig */
class __TwigTemplate_88f032cefe9d44e57698e1b6f9cedbd4 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig"));

        // line 24
        $context["classes"] = [0 => "claro-details", 1 => "claro-details--vertical-tabs-item"];
        // line 30
        $context["content_wrapper_classes"] = [0 => "claro-details__wrapper", 1 => "details-wrapper", 2 => "claro-details__wrapper--vertical-tabs-item"];
        // line 37
        $context["inner_wrapper_classes"] = [0 => "claro-details__content", 1 => "claro-details__content--vertical-tabs-item"];
        // line 42
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">";
        // line 43
        if (($context["title"] ?? null)) {
            // line 45
            $context["summary_classes"] = [0 => "claro-details__summary", 1 => "claro-details__summary--vertical-tabs-item", 2 => ((            // line 48
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((            // line 49
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 52
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 53, $this->source), "html", null, true);
            // line 54
            echo "</summary>";
        }
        // line 56
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
    <div";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
        echo ">
      ";
        // line 58
        if (($context["errors"] ?? null)) {
            // line 59
            echo "        <div class=\"form-item form-item--error-message\">
          ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 60, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 63
        if (($context["description"] ?? null)) {
            // line 64
            echo "<div class=\"claro-details__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 64, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 66
        if (($context["children"] ?? null)) {
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 67, $this->source), "html", null, true);
        }
        // line 69
        if (($context["value"] ?? null)) {
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 70, $this->source), "html", null, true);
        }
        // line 72
        echo "</div>
  </div>
</details>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 72,  101 => 70,  99 => 69,  96 => 67,  94 => 66,  89 => 64,  87 => 63,  81 => 60,  78 => 59,  76 => 58,  72 => 57,  67 => 56,  64 => 54,  62 => 53,  58 => 52,  56 => 49,  55 => 48,  54 => 45,  52 => 43,  48 => 42,  46 => 37,  44 => 30,  42 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/navigation/details--vertical-tabs.html.twig", "C:\\xampp\\htdocs\\Activity\\core\\themes\\claro\\templates\\navigation\\details--vertical-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 43);
        static $filters = array("escape" => 42);
        static $functions = array("create_attribute" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute']
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
