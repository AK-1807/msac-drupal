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

/* node--full.html.twig */
class __TwigTemplate_588721e621abad8cfae89eb605b670fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'node_hero' => [$this, 'block_node_hero'],
            'node_heading' => [$this, 'block_node_heading'],
            'node_content' => [$this, 'block_node_content'],
            'node_footer' => [$this, 'block_node_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('node_hero', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('node_heading', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('node_content', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('node_footer', $context, $blocks);
    }

    // line 1
    public function block_node_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 2))) {
            // line 3
            echo "\t\t<div class=\"hero\">
\t\t\t<figure class=\"hero__media\">
\t\t\t\t<div class=\"hero__media-image\">
\t\t\t\t\t";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 8
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_caption", [], "any", false, false, true, 8))) {
                // line 9
                echo "\t\t\t\t\t<figcaption class=\"hero__media-caption";
                if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_logo", [], "any", false, false, true, 9)) {
                    echo " hero__media-caption-w-logo";
                }
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_caption", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "</figcaption>
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t</figure>
\t\t\t";
            // line 12
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_logo", [], "any", false, false, true, 12))) {
                // line 13
                echo "\t\t\t\t<figure class=\"hero__logo\">
\t\t\t\t\t";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_logo", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
\t\t\t\t</figure>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t";
        }
    }

    // line 21
    public function block_node_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t<div class=\"page-heading outer-pad\">
\t\t<div class=\"silc-grid silc-grid--collapse\">
\t\t\t<div class=\"silc-grid__col silc-grid__col--12\">
\t\t\t\t<h1>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
        echo "</h1>
\t\t\t\t";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("system_breadcrumb_block"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 32
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t<div class=\"page-content outer-pad\">
\t\t";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFunction('drupal_messages')->getCallable()(), "html", null, true);
        echo "
\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t<div class=\"silc-grid__col silc-grid__col--10-800 silc-grid__col--8-1200\">
\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 41
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_widgets", [], "any", false, false, true, 41))) {
            // line 42
            echo "\t\t\t\t<div class=\"silc-grid__col silc-grid__col--12\">
\t\t\t\t\t<div class=\"page-widgets\">
\t\t\t\t\t\t";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_widgets", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 48
        echo "\t\t</div>
\t</div>
";
    }

    // line 52
    public function block_node_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "node--full.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  166 => 48,  159 => 44,  155 => 42,  153 => 41,  147 => 38,  140 => 34,  137 => 33,  133 => 32,  124 => 26,  120 => 25,  115 => 22,  111 => 21,  105 => 17,  99 => 14,  96 => 13,  94 => 12,  91 => 11,  81 => 9,  79 => 8,  74 => 6,  69 => 3,  66 => 2,  62 => 1,  58 => 52,  55 => 51,  53 => 32,  50 => 31,  48 => 21,  45 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--full.html.twig", "themes/custom/msac/templates/node/node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 2);
        static $filters = array("field_value" => 2, "escape" => 6);
        static $functions = array("drupal_block" => 26, "drupal_messages" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['field_value', 'escape'],
                ['drupal_block', 'drupal_messages']
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
