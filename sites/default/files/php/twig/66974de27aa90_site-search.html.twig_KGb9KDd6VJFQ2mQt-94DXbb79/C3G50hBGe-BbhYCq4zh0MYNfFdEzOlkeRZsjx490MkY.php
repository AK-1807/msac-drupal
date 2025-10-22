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

/* themes/custom/msac/templates/_includes/global/site-search.html.twig */
class __TwigTemplate_cef1d211ff788b011ccf952095c8cb91 extends Template
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
        echo "<div class=\"site-search\" id=\"site-search\">
    <div class=\"site-search__dismiss\">
        <a href=\"#main-content\" role=\"button\" tabindex=\"0\" class=\"site-search__close\">
            <span class=\"visible-for-screen-readers\">Close the sitewide search</span>
        </a>
        <form class=\"site-search__form\" role=\"search\" action=\"https://www.maryland.gov/pages/search.aspx\" method=\"GET\" accept-charset=\"UTF-8\">
            <label for=\"site-search-input\" class=\"visible-for-screen-readers\">Search</label>
            <input id=\"site-search-input\" name=\"q\" type=\"text\" class=\"site-search__input\" placeholder=\"Search…\">
            <button type=\"submit\" class=\"site-search__submit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 22 22\"><path d=\"M21.035 18.268c.478.479.691 1.117.16 1.596l-1.224 1.277c-.48.479-1.277.479-1.81 0l-5.053-5.054c-1.224.692-2.607 1.117-4.15 1.117C4.438 17.204.5 13.268.5 8.693.5 4.17 4.17.5 8.746.5c4.522 0 8.458 3.937 8.458 8.459a8.237 8.237 0 01-1.17 4.255l5 5.054zM3.054 8.693c0 3.138 2.766 5.958 5.905 5.958 3.191 0 5.745-2.554 5.745-5.692 0-3.14-2.82-5.959-5.958-5.959a5.699 5.699 0 00-5.692 5.693z\" fill-rule=\"evenodd\"/></svg>
                <span class=\"visible-for-screen-readers\">Submit search</span>
            </button>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/_includes/global/site-search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/_includes/global/site-search.html.twig", "/Users/navneet/sites/msac-drupal/themes/custom/msac/templates/_includes/global/site-search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
