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

/* themes/custom/msac/templates/layout/html.html.twig */
class __TwigTemplate_fa79fa9fb4a008ea2fe70c1a44616669 extends Template
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
        // line 29
        $context["classes"] = [0 => (((        // line 30
($context["node_type"] ?? null) == "grant")) ? ("individual-grant") : (($context["node_type"] ?? null))), 1 => (((        // line 31
($context["node_type"] ?? null) == "organization")) ? ("profile-page") : (($context["node_type"] ?? null))), 2 => (((        // line 32
($context["node_type"] ?? null) == "artist")) ? ("profile-page") : (($context["node_type"] ?? null)))];
        // line 35
        echo "
<!DOCTYPE html>
<html";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
        echo ">
\t<head>
\t\t<head-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source), "html", null, true);
        echo "\">
\t\t<title>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 40, $this->source), " | "));
        echo "</title>
\t\t<css-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
\t\t<js-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source), "html", null, true);
        echo "\">
\t\t<script>
\t\t\tdocument.documentElement.classList.add('js');
\t\t</script>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 48
        echo "\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 48, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-57x57.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 49, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-114x114.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 50, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-72x72.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 51, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-144x144.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"60x60\" href=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 52, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-60x60.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"120x120\" href=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 53, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-120x120.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"76x76\" href=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 54, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-76x76.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 55, $this->source), "html", null, true);
        echo "/favicons/apple-touch-icon-152x152.png\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 56, $this->source), "html", null, true);
        echo "/favicons/favicon-196x196.png\" sizes=\"196x196\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 57, $this->source), "html", null, true);
        echo "/favicons/favicon-96x96.png\" sizes=\"96x96\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 58, $this->source), "html", null, true);
        echo "/favicons/favicon-32x32.png\" sizes=\"32x32\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 59, $this->source), "html", null, true);
        echo "/favicons/favicon-16x16.png\" sizes=\"16x16\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 60, $this->source), "html", null, true);
        echo "/favicons/favicon-128.png\" sizes=\"128x128\">
\t\t<meta name=\"application-name\" content=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 61, $this->source), "html", null, true);
        echo "\"/>
\t\t<meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
\t\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 63, $this->source), "html", null, true);
        echo "/favicons/mstile-144x144.png\">
\t\t<meta name=\"msapplication-square70x70logo\" content=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 64, $this->source), "html", null, true);
        echo "/favicons/mstile-70x70.png\">
\t\t<meta name=\"msapplication-square150x150logo\" content=\"";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 65, $this->source), "html", null, true);
        echo "/favicons/mstile-150x150.png\">
\t\t<meta name=\"msapplication-wide310x150logo\" content=\"";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 66, $this->source), "html", null, true);
        echo "/favicons/mstile-310x150.png\">
\t\t<meta name=\"msapplication-square310x310logo\" content=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 67, $this->source), "html", null, true);
        echo "/favicons/mstile-310x310.png\">
\t\t";
        // line 69
        echo "
\t\t<meta name=\"google-site-verification\" content=\"CmiJi3NebiIce_9zilnobjeHuVFwzc_F8MS9MSbFSnQ\" />
\t\t
\t\t<link rel=\"dns-prefetch\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,700|Red+Hat+Text:400,400i,500,700&display=swap\" rel=\"stylesheet\">
\t</head>
\t<body";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
\t\t";
        // line 80
        echo "\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-to-main-content\">
\t\t\t";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
\t\t</a>

\t\t";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 84, $this->source), "html", null, true);
        echo "
\t\t";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 85, $this->source), "html", null, true);
        echo "
\t\t";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 86, $this->source), "html", null, true);
        echo "

\t\t<js-bottom-placeholder token=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 88, $this->source), "html", null, true);
        echo "\">
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 88,  181 => 86,  177 => 85,  173 => 84,  167 => 81,  164 => 80,  160 => 76,  151 => 69,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  131 => 63,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  110 => 57,  106 => 56,  102 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  78 => 49,  73 => 48,  65 => 42,  61 => 41,  57 => 40,  53 => 39,  48 => 37,  44 => 35,  42 => 32,  41 => 31,  40 => 30,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/layout/html.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array("escape" => 37, "safe_join" => 40, "t" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'safe_join', 't'],
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
