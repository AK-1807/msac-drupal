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

/* themes/custom/msac/templates/node/node--alias--directory.html.twig */
class __TwigTemplate_78770036ad1b707ea2d72bcfecbc468b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_hero' => [$this, 'block_node_hero'],
            'node_heading' => [$this, 'block_node_heading'],
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
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/custom/msac/templates/node/node--alias--directory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_node_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_node_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"page-heading\" style=\"background-image:url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["assets_path"] ?? null), 6, $this->source), "html", null, true);
        echo "/img/AD_Hero.png)\">
      <div class=\"page-heading__title-wrap\" style=\"background-image:url(";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["assets_path"] ?? null), 7, $this->source), "html", null, true);
        echo "/img/AD_Hero.png)\">
          <div class=\"page-heading__title-wrap-inner\">
              <h1>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalTitle(), "html", null, true);
        echo "</h1>
              ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBreadcrumb(), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
          <div class=\"silc-grid__col silc-grid__col--10-800 silc-grid__col--8-1200\">
              <div class=\"page-heading__content\">
                  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
                  <div class=\"page-heading__signup-cta\">
                      <h3 class=\"h4\">Join the Directory Today!</h3>
                      <p>Artists, arts organizations, and arts businesses can create a free Arts Directory profile to highlight their work and offerings.</p>
                      <a href=\"/profile\" class=\"button\">Sign Up</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
";
    }

    // line 28
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"page-content\">
    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFunction('drupal_messages')->getCallable()(), "html", null, true);
        echo "
    <div id=\"arts-directory-root\">
      <arts-directory />
      <noscript>Please enable Javascript to explore the arts across Maryland.</noscript>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--alias--directory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  102 => 29,  98 => 28,  83 => 16,  74 => 10,  70 => 9,  65 => 7,  60 => 6,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--alias--directory.html.twig", "/Users/navneet/sites/msac-drupal/themes/custom/msac/templates/node/node--alias--directory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array("drupal_title" => 9, "drupal_breadcrumb" => 10, "drupal_messages" => 30);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_title', 'drupal_breadcrumb', 'drupal_messages']
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
