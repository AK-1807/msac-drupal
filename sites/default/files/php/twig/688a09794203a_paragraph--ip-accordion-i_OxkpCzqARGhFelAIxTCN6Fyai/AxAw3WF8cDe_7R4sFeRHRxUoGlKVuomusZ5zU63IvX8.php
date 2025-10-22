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

/* themes/custom/msac/templates/paragraphs/paragraph--ip-accordion-item.html.twig */
class __TwigTemplate_af3047d2288347652d4a25ec85e7c541 extends Template
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
        // line 9
        echo "
<div class=\"silc-accordion__section\">
\t<button id=\"accordion-";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null), 11, $this->source), "html", null, true);
        echo "-section-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_id"] ?? null), 11, $this->source), "html", null, true);
        echo "-label\" class=\"silc-accordion__label\" aria-controls=\"accordion-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null), 11, $this->source), "html", null, true);
        echo "-section-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_id"] ?? null), 11, $this->source), "html", null, true);
        echo "-content\">
\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_ac_title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
\t\t<svg class=\"silc-accordion__label-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\">
\t\t\t<g fill-rule=\"evenodd\"><path d=\"M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z\"/><path d=\"M10.907 6v4.908H6v2.185h4.907V18h2.185v-4.907H18v-2.185h-4.908V6z\"/></g>
\t\t</svg>
\t</button>
\t<div class=\"silc-accordion__content\" id=\"accordion-";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null), 17, $this->source), "html", null, true);
        echo "-section-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_id"] ?? null), 17, $this->source), "html", null, true);
        echo "-content\" aria-labelledby=\"accordion-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null), 17, $this->source), "html", null, true);
        echo "-section-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_id"] ?? null), 17, $this->source), "html", null, true);
        echo "-label\">
\t\t<div class=\"silc-accordion__content-compartment\">
\t\t\t<div class=\"text-content\">
\t\t\t\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_ac_body", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/paragraphs/paragraph--ip-accordion-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  61 => 17,  53 => 12,  43 => 11,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/paragraphs/paragraph--ip-accordion-item.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/paragraphs/paragraph--ip-accordion-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
