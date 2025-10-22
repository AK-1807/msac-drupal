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

/* themes/custom/msac/templates/node/node--grant--teaser.html.twig */
class __TwigTemplate_c9c3f83a27c3dbf636ad46b495797eb3 extends Template
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
        $context["thumbnail"] = ($this->sandbox->ensureToStringAllowed(($context["assets_path"] ?? null), 1, $this->source) . "/img/MSAC_default_profile_image_square.jpg");
        // line 2
        $context["thumbnail_alt"] = ("Portrait of " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source));
        // line 3
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_image", [], "any", false, false, true, 3))) {
            // line 4
            echo "  ";
            $context["thumbnail"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getTargetEntity($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_image", [], "any", false, false, true, 4), 4, $this->source)), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source), "optimized"));
            // line 5
            echo "  ";
            $context["thumbnail_alt"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_image", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "alt", [], "any", false, false, true, 5);
        }
        // line 7
        echo "<div class=\"card card--hz\" data-clickable=\"true\" role=\"link\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 7, $this->source), "html", null, true);
        echo "\" tabindex=\"0\">
\t<div class=\"card__media\">
\t\t<img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thumbnail"] ?? null), 9, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thumbnail_alt"] ?? null), 9, $this->source), "html", null, true);
        echo "\" aria-hidden=\"true\" />
\t</div>
\t<div class=\"card__content\">
\t\t<div class=\"card__content-icon-lines\" role=\"presentation\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t<h2 class=\"card__title\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 16, $this->source), "html", null, true);
        echo "</h2>
\t\t<a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 17, $this->source), "html", null, true);
        echo "\" class=\"card__cta button\">Learn More</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--grant--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  70 => 16,  58 => 9,  52 => 7,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--grant--teaser.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--grant--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("field_value" => 3, "image_style" => 4, "field_target_entity" => 4, "escape" => 7);
        static $functions = array("file_url" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['field_value', 'image_style', 'field_target_entity', 'escape'],
                ['file_url']
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
