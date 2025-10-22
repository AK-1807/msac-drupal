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

/* modules/contrib/idfive_paragraphs/modules/ip_blockquote/templates/paragraph--ip-blockquote.html.twig */
class __TwigTemplate_2a001522ffc44742d371aff327e6014e extends Template
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
        $context["classes"] = [0 => "paragraph-widget", 1 => "paragraph-widget--ip_blockquote"];
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('paragraph', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 17
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), "setAttribute", [0 => "id", 1 => ("ip_blockquote-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 18), 18, $this->source))], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
\t\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t</div>
\t";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "field_ip_bq_quote", "field_ip_bq_source_url", "field_ip_bq_cite", "field_ip_bq_source", "field_ip_bq_author_photo"), "html", null, true);
        echo "
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t\t<blockquote class=\"blockquote\" ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_source_url", [], "any", false, false, true, 20))) {
            echo " cite=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_source_url", [], "any", false, false, true, 20)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 20, $this->source), "html", null, true);
        }
        echo "\">
\t\t\t\t<div class=\"blockquote__quote\">
\t\t\t\t\t<p>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_quote", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_source_url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<footer class=\"blockquote__footer\">
\t\t\t\t\t";
        // line 26
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_cite", [], "any", false, false, true, 26))) {
            // line 27
            echo "\t\t\t\t\t\t<cite>&mdash;";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_cite", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_source", [], "any", false, false, true, 29))) {
            // line 30
            echo "\t\t\t\t\t\t\t<span class=\"blockquote__source\">,
\t\t\t\t\t\t\t\t";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_source", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_cite", [], "any", false, false, true, 33))) {
            // line 34
            echo "\t\t\t\t\t\t</cite>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_author_photo", [], "any", false, false, true, 36))) {
            // line 37
            echo "\t\t\t\t\t\t<div class=\"blockquote__portrait\">
\t\t\t\t\t\t\t";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ip_bq_author_photo", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t</footer>
\t\t\t</blockquote>
\t\t";
    }

    public function getTemplateName()
    {
        return "modules/contrib/idfive_paragraphs/modules/ip_blockquote/templates/paragraph--ip-blockquote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  131 => 38,  128 => 37,  125 => 36,  121 => 34,  118 => 33,  113 => 31,  110 => 30,  107 => 29,  101 => 27,  99 => 26,  93 => 23,  89 => 22,  80 => 20,  76 => 19,  70 => 45,  67 => 44,  65 => 19,  60 => 18,  56 => 17,  51 => 47,  49 => 17,  46 => 16,  44 => 11,  41 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/idfive_paragraphs/modules/ip_blockquote/templates/paragraph--ip-blockquote.html.twig", "/Users/bb/sites/msac-drupal/modules/contrib/idfive_paragraphs/modules/ip_blockquote/templates/paragraph--ip-blockquote.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 17, "if" => 20);
        static $filters = array("escape" => 18, "without" => 45, "render" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'without', 'render'],
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
