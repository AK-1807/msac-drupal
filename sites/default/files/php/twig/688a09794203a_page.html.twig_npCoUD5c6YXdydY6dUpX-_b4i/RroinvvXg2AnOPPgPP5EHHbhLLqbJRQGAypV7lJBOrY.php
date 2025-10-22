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

/* themes/custom/msac/templates/page/page.html.twig */
class __TwigTemplate_62924eafdaf8aa6c5c78e7122e8de33b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content' => [$this, 'block_page_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"offcanvas-overlay\">
\t";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/header.html.twig"), "themes/custom/msac/templates/page/page.html.twig", 2)->display($context);
        // line 3
        echo "</div>
";
        // line 4
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/site-search.html.twig"), "themes/custom/msac/templates/page/page.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"max-bound\">
\t<main id=\"main-content\" class=\"main-content\">
\t\t";
        // line 7
        $this->displayBlock('page_content', $context, $blocks);
        // line 10
        echo "\t</main>
\t";
        // line 11
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/footer.html.twig"), "themes/custom/msac/templates/page/page.html.twig", 11)->display($context);
        // line 12
        echo "</div>

";
    }

    // line 7
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  67 => 7,  61 => 12,  59 => 11,  56 => 10,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/page/page.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "block" => 7);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'block'],
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
