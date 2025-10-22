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

/* themes/custom/msac/templates/node/node--program--full.html.twig */
class __TwigTemplate_6433bd807b122d530b8bdbe3387a1205 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_content' => [$this, 'block_node_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--full.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/custom/msac/templates/node/node--program--full.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div class=\"page-content outer-pad\">
    ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFunction('drupal_messages')->getCallable()(), "html", null, true);
        echo "
    <div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
      <div class=\"silc-grid__col silc-grid__col--10-800 silc-grid__col--8-1200\">
        <div class=\"text-content\">
          ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      ";
        // line 13
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_widgets", [], "any", false, false, true, 13))) {
            // line 14
            echo "        <div class=\"silc-grid__col silc-grid__col--12\">
          <div class=\"page-widgets\">
            ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_widgets", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
          </div>
        </div>
\t\t\t\t";
            // line 20
            echo "\t\t\t\t";
            // line 35
            echo "      ";
        }
        // line 36
        echo "    </div>
\t\t";
        // line 37
        ob_start(function () { return ''; });
        // line 38
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("program_grants", "embed_1"), "html", null, true);
        echo "
\t\t";
        $context["program_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "\t\t";
        if ( !twig_test_empty(($context["program_content"] ?? null))) {
            // line 41
            echo "\t\t\t<div class=\"widget-spacing\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--12\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["program_content"] ?? null), 45, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 51
        echo "  </div>

\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--program--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 51,  105 => 45,  99 => 41,  96 => 40,  90 => 38,  88 => 37,  85 => 36,  82 => 35,  80 => 20,  74 => 16,  70 => 14,  68 => 13,  62 => 10,  55 => 6,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--program--full.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--program--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "set" => 37);
        static $filters = array("escape" => 6, "field_value" => 13);
        static $functions = array("drupal_messages" => 6, "drupal_view" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'field_value'],
                ['drupal_messages', 'drupal_view']
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
