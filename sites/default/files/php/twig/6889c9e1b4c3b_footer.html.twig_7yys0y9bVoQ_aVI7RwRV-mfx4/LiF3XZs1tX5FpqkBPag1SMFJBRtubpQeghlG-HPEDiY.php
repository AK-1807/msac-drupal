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

/* themes/custom/msac/templates/_includes/global/footer.html.twig */
class __TwigTemplate_fe35611845154cd3d1dc11b37bc8241d extends Template
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
        echo "<footer class=\"site-footer\">
  <div class=\"outer-pad\">
    <div class=\"site-footer__inner\">
      <div class=\"site-footer__md-logo\">
        <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["assets_path"] ?? null), 5, $this->source), "html", null, true);
        echo "/img/footer-md-logo.svg\" alt=\"\" title=\"State of Maryland Logo\" tabindex=\"-1\">
      </div>
      <div class=\"site-footer__info\">
        <div class=\"site-footer__social\">
          <ul>
            <li>
              <a href=\"https://www.facebook.com/mdartscouncil/\" target=\"_blank\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 24 24\"><defs><path d=\"M22.675 0H1.325C.593 0 0 .593 0 1.325v21.35C0 23.407.593 24 1.325 24h11.494v-9.294H9.691v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.324 0 2.463.098 2.795.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.763v2.313h3.586l-.467 3.622h-3.12V24h6.116c.732 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0\" id=\"footer-fb-1\"/></defs><use fill=\"#FFF\" xlink:href=\"#footer-fb-1\" fill-rule=\"evenodd\"/></svg>
                <span class=\"visible-for-screen-readers\">MSAC Facebook Profile</span>
              </a>
            </li>
            <li>
              <a href=\"https://twitter.com/mdartscouncil\" target=\"_blank\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 20\"><path d=\"M24 2.385c-.897.384-1.794.692-2.841.769 1.047-.616 1.794-1.616 2.168-2.77-.972.616-2.019 1-3.14 1.231C19.29.615 18.019 0 16.673 0c-2.692 0-4.935 2.23-4.935 5.077 0 .385.075.77.15 1.154C7.776 6 4.187 4 1.72.923a4.948 4.948 0 00-.673 2.539c0 1.769.897 3.307 2.168 4.23a4.47 4.47 0 01-2.243-.615v.077c0 2.461 1.72 4.461 3.963 4.923-.449.077-.823.154-1.271.154-.3 0-.599 0-.898-.077.598 2 2.468 3.461 4.561 3.538-1.645 1.385-3.813 2.154-6.13 2.154-.375 0-.823 0-1.197-.077C2.243 19.154 4.86 20 7.626 20c9.047 0 13.981-7.692 13.981-14.385V5c.898-.77 1.72-1.615 2.393-2.615z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
                <span class=\"visible-for-screen-readers\">MSAC Twitter Profile</span>
              </a>
            </li>
            <li>
              <a href=\"https://www.instagram.com/mdartscouncil/?hl=en\" target=\"_blank\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
                <span class=\"visible-for-screen-readers\">MSAC Instagram Profile</span>
              </a>
            </li>
          </ul>
        </div>
        <nav class=\"site-footer__nav\" aria-label=\"Footer\">
          ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer"), "html", null, true);
        echo "
          <ul class=\"translation-menu\">
\t          <li><a href=\"#translation-modal\" data-micromodal-trigger=\"translation-modal\">Translate</a></li>
          </ul>
        </nav>
        <p class=\"site-footer__copyright\">&copy; ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Maryland State Arts Council</p>
      </div>
    </div>
  </div>
</footer>
";
        // line 41
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/_includes/global/translation-modal.html.twig"), "themes/custom/msac/templates/_includes/global/footer.html.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/_includes/global/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  82 => 36,  74 => 31,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/_includes/global/footer.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/_includes/global/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 41);
        static $filters = array("escape" => 5, "date" => 36);
        static $functions = array("drupal_menu" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 'date'],
                ['drupal_menu']
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
