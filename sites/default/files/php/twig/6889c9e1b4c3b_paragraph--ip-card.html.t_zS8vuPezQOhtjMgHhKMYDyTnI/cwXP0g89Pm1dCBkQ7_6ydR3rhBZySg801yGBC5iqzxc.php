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

/* themes/custom/msac/templates/paragraphs/paragraph--ip-card.html.twig */
class __TwigTemplate_4e898e2543fcdeeb940314115f6fd226 extends Template
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
";
        // line 10
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_image", [], "any", false, false, true, 10))) {
            // line 11
            echo "\t";
            $context["thumbnail"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_image", [], "any", false, false, true, 11)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "uri", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "large"));
            // line 12
            echo "\t";
            $context["thumbnail_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_image", [], "any", false, false, true, 12)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 12), "alt", [], "any", false, false, true, 12);
        }
        // line 14
        echo "<div class=\"silc-grid__col ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ip_card_cols"] ?? null), 14, $this->source), "html", null, true);
        echo "\">
\t<div class=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ip_card_type"] ?? null), 15, $this->source), "html", null, true);
        echo "\" data-clickable=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ip_card_clickable"] ?? null), 15, $this->source), "html", null, true);
        echo "\">
\t\t";
        // line 16
        if (($context["thumbnail"] ?? null)) {
            // line 17
            echo "\t\t\t<div class=\"card__media\">
\t\t\t\t<img src=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thumbnail"] ?? null), 18, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["thumbnail_alt"] ?? null), 18, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\"/>
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t<div class=\"card__content\">
\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_ip_cd_title", [], "any", false, false, true, 22), 0, [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22)) {
            // line 23
            echo "\t\t\t\t<h2 class=\"card__title\">
\t\t\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h2>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        // line 29
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_link", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 30
            echo "\t\t\t";
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 31
                echo "\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_link", [], "any", false, false, true, 31)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 31, $this->source), "html", null, true);
                echo "\" class=\"card__cta button\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_link", [], "any", false, false, true, 31)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 31), "target", [], "any", false, false, true, 31)) {
                    echo " target=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_link", [], "any", false, false, true, 31)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 31), "target", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo ">
\t\t\t\t\t";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_cd_link", [], "any", false, false, true, 32)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#title"] ?? null) : null), 32, $this->source), "html", null, true);
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 35
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</div>
\t";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "field_ip_cd_title", "field_ip_cd_text", "field_ip_cd_image", "field_ip_cd_link"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/paragraphs/paragraph--ip-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  121 => 36,  115 => 35,  109 => 32,  98 => 31,  95 => 30,  90 => 29,  88 => 26,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  67 => 18,  64 => 17,  62 => 16,  56 => 15,  51 => 14,  47 => 12,  44 => 11,  42 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/paragraphs/paragraph--ip-card.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/paragraphs/paragraph--ip-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "set" => 11, "for" => 29);
        static $filters = array("field_value" => 10, "image_style" => 11, "escape" => 14, "first" => 30, "without" => 38);
        static $functions = array("file_url" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['field_value', 'image_style', 'escape', 'first', 'without'],
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
