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

/* themes/custom/msac/templates/paragraphs/paragraph--ip-cards-group.html.twig */
class __TwigTemplate_17c8a99766a8816b1b9f5cd998534be3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context["classes"] = [0 => "paragraph-widget", 1 => "paragraph-widget--ip_cards"];
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), "setAttribute", [0 => "id", 1 => ("ip_cards-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 17), 17, $this->source))], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
\t\t<section class=\"card-group\">
\t\t\t<div class=\"silc-grid silc-grid--justify-center\">
\t\t\t\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cg_item", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t\t\t</div>

\t\t\t";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "field_ip_cg_item", "field_ip_cg_columns", "field_ip_cg_type"), "html", null, true);
        echo "
\t\t</section>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/paragraphs/paragraph--ip-cards-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  59 => 20,  52 => 17,  45 => 16,  42 => 15,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/paragraphs/paragraph--ip-cards-group.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/paragraphs/paragraph--ip-cards-group.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "block" => 16);
        static $filters = array("escape" => 17, "without" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['escape', 'without'],
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
