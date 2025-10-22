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

/* themes/custom/msac/templates/paragraphs/paragraph--home-carousel-slide.html.twig */
class __TwigTemplate_11bceef7edebe6483ab410b5f1d002f3 extends Template
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
        // line 1
        echo "<div class=\"carousel__slide\">
\t<div class=\"carousel__slide-image\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_image", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
  </div>
\t<div class=\"carousel__slide-content\">
\t\t<div>
      ";
        // line 7
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_category", [], "any", false, false, true, 7))) {
            // line 8
            echo "\t\t\t  <span class=\"home-hero__carousel-slide-medium\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_category", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 10
        echo "      ";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_title", [], "any", false, false, true, 10))) {
            // line 11
            echo "\t\t\t  <span class=\"home-hero__carousel-slide-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "      ";
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_title", [], "any", false, false, true, 13)) && $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_location", [], "any", false, false, true, 13)))) {
            // line 14
            echo "\t\t\t  <span aria-hidden=\"true\">&nbsp;|&nbsp;</span>
      ";
        }
        // line 16
        echo "      ";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_location", [], "any", false, false, true, 16))) {
            // line 17
            echo "\t\t\t  <span class=\"home-hero__carousel-slide-location\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cs_location", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 19
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/paragraphs/paragraph--home-carousel-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  77 => 17,  74 => 16,  70 => 14,  67 => 13,  61 => 11,  58 => 10,  52 => 8,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/paragraphs/paragraph--home-carousel-slide.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/paragraphs/paragraph--home-carousel-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 3, "field_value" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'field_value'],
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
