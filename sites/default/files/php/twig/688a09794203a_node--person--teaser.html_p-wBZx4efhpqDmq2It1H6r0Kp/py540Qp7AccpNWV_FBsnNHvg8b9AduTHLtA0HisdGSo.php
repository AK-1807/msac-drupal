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

/* themes/custom/msac/templates/node/node--person--teaser.html.twig */
class __TwigTemplate_68cd22bb5f525135b99cbad9321ec773 extends Template
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
        echo "<div class=\"program-contact\">
\t<div class=\"program-contact__top\">
\t\t<div class=\"program-contact__photo\">
\t\t\t<img src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getTargetEntity($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_image", [], "any", false, false, true, 4), 4, $this->source)), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source), "optimized")), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_image", [], "any", false, false, true, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "alt", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"program-contact__heading\">Contact</div>
\t</div>
\t<div class=\"program-contact__content\">
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 9, $this->source), "html", null, true);
        echo "\" class=\"program-contact__name\">
\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 10, $this->source), "html", null, true);
        echo "
\t\t</a>
\t\t<p class=\"program-contact__title\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_title", [], "any", false, false, true, 12), 12, $this->source)), "html", null, true);
        echo "</p>

\t\t";
        // line 14
        ob_start(function () { return ''; });
        // line 15
        echo "\t\t\t<ul class=\"program-contact__contact-methods\">
\t\t\t\t";
        // line 16
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_email", [], "any", false, false, true, 16))) {
            // line 17
            echo "\t\t\t\t\t<li class=\"program-contact__contact-method\">
\t\t\t\t\t\t";
            // line 18
            $this->loadTemplate((($context["directory"] ?? null) . "/templates/helpers/icon.html.twig"), "themes/custom/msac/templates/node/node--person--teaser.html.twig", 18)->display(twig_array_merge($context, ["icon" => "mail"]));
            // line 19
            echo "\t\t\t\t\t\t<a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_email", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_email", [], "any", false, false, true, 19), 19, $this->source)), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_phone", [], "any", false, false, true, 22))) {
            // line 23
            echo "\t\t\t\t\t<li class=\"program-contact__contact-method\">
\t\t\t\t\t\t";
            // line 24
            $this->loadTemplate((($context["directory"] ?? null) . "/templates/helpers/icon.html.twig"), "themes/custom/msac/templates/node/node--person--teaser.html.twig", 24)->display(twig_array_merge($context, ["icon" => "phone"]));
            // line 25
            echo "\t\t\t\t\t\t<a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_phone", [], "any", false, false, true, 25), 25, $this->source)), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_person_phone", [], "any", false, false, true, 25), 25, $this->source)), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</ul>
\t\t";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        // line 30
        echo "\t\t<p class=\"program-contact__button\">
\t\t\t<a class=\"button\" href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 31, $this->source), "html", null, true);
        echo "\">See Bio  &gt;</a>
\t\t</p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--person--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  112 => 30,  110 => 14,  106 => 28,  97 => 25,  95 => 24,  92 => 23,  89 => 22,  80 => 19,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  68 => 14,  63 => 12,  58 => 10,  54 => 9,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--person--teaser.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--person--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 14, "if" => 16, "include" => 18);
        static $filters = array("escape" => 4, "image_style" => 4, "field_target_entity" => 4, "field_value" => 12, "spaceless" => 14);
        static $functions = array("file_url" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'include'],
                ['escape', 'image_style', 'field_target_entity', 'field_value', 'spaceless'],
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
