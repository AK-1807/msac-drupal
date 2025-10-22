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

/* modules/contrib/idfive_paragraphs/modules/ip_views_embed/templates/paragraph--ip-views-embed.html.twig */
class __TwigTemplate_f84822ce40ed6d7932a10852b3cb7239 extends Template
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
            'content' => [$this, 'block_content'],
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
        // line 11
        $context["classes"] = [0 => "paragraph-widget", 1 => "paragraph-widget--ip_views_embed"];
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), "setAttribute", [0 => "id", 1 => ("ip_views_embed-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 18), 18, $this->source))], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
\t\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t</div>
\t";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 26, $this->source), "field_ip_ve_title", "field_ip_ve_view"), "html", null, true);
        echo "
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "      ";
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_ve_title", [], "any", false, false, true, 20)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) {
            // line 21
            echo "        <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_ve_title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h2>
      ";
        }
        // line 23
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_ve_view", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "modules/contrib/idfive_paragraphs/modules/ip_views_embed/templates/paragraph--ip-views-embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  79 => 21,  76 => 20,  72 => 19,  66 => 26,  63 => 25,  61 => 19,  56 => 18,  49 => 17,  46 => 16,  44 => 11,  41 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/idfive_paragraphs/modules/ip_views_embed/templates/paragraph--ip-views-embed.html.twig", "/Users/bb/sites/msac-drupal/modules/contrib/idfive_paragraphs/modules/ip_views_embed/templates/paragraph--ip-views-embed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 17, "if" => 20);
        static $filters = array("escape" => 18, "without" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
