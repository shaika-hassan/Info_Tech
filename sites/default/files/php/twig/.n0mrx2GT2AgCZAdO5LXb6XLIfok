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

/* modules/contrib/webprofiler/templates/Profiler/dashboard.html.twig */
class __TwigTemplate_6803a336fa45c76de5f66982dbab86c6 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webprofiler/templates/Profiler/dashboard.html.twig"));

        // line 1
        echo "<div class=\"webprofiler\">
  <div class=\"webprofiler__info\">
    <div><a href=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</a></div>
    <div>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Method: @method HTTP Status: @status IP: @ip Profiled on: @time Token: @token", ["@method" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, true, 4), "@status" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, true, 4), "@ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, true, 4), "@time" => $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, true, 4), 4, $this->source), "long"), "@token" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, true, 4)]));
        echo "</div>
  </div>

  <div class=\"webprofiler__dashboard\">
    <div class=\"webprofiler__collectors\">
      <h4>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collectors"));
        echo "</h4>
      <div class=\"webprofiler_collectors_list\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 12
            echo "          <div class=\"webprofiler__collector webprofiler__collector-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["collector"], "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\"><a
              href=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.panel", ["token" => ($context["token"] ?? null), "name" => twig_get_attribute($this->env, $this->source, $context["collector"], "name", [], "any", false, false, true, 13)]), "html", null, true);
            echo "\"
              class=\"use-ajax\" data-collector-name=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["collector"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["collector"], "name", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
            echo "</a></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </div>

      ";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 18)) > 0)) {
            // line 19
            echo "        <h4>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Children"));
            echo "</h4>
        <div class=\"webprofiler_collectors_list\">
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                // line 22
                echo "            <div class=\"webprofiler__collector\"><a
                href=\"";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.dashboard", ["token" => twig_get_attribute($this->env, $this->source, $context["children"], "token", [], "any", false, false, true, 23)]), "html", null, true);
                echo "\"
                >";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["children"], "token", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</a></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
      ";
        }
        // line 28
        echo "
      ";
        // line 29
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 29))) {
            // line 30
            echo "        <h4>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Parent"));
            echo "</h4>
        <div class=\"webprofiler_collectors_list\">
          <div class=\"webprofiler__collector\"><a
            href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.dashboard", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 33), "token", [], "any", false, false, true, 33)]), "html", null, true);
            echo "\"
          >";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, true, 34), "token", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</a></div>
        </div>
      ";
        }
        // line 37
        echo "    </div>

    <div class=\"webprofiler__panels\">
      <div class=\"webprofiler__panel\" id=\"js-webprofiler-panel\">
        <p>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Choose a panel on the left"));
        echo "</p>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webprofiler/templates/Profiler/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 41,  145 => 37,  139 => 34,  135 => 33,  128 => 30,  126 => 29,  123 => 28,  119 => 26,  111 => 24,  107 => 23,  104 => 22,  100 => 21,  94 => 19,  92 => 18,  88 => 16,  78 => 14,  74 => 13,  69 => 12,  65 => 11,  60 => 9,  52 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webprofiler/templates/Profiler/dashboard.html.twig", "C:\\xampp\\htdocs\\Activity\\modules\\contrib\\webprofiler\\templates\\Profiler\\dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "if" => 18);
        static $filters = array("escape" => 3, "t" => 4, "format_date" => 4, "capitalize" => 14, "length" => 18);
        static $functions = array("path" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't', 'format_date', 'capitalize', 'length'],
                ['path']
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
