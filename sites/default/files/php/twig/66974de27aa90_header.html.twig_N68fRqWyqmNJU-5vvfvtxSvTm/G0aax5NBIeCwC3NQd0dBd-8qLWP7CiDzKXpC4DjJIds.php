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

/* themes/custom/msac/templates/_includes/global/header.html.twig */
class __TwigTemplate_87ef55e5efc59777f3210ed200c3d368 extends Template
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
        echo "<header class=\"site-header";
        if (($context["hero_image"] ?? null)) {
            echo " has-hero";
        }
        echo "\">
  <div class=\"site-header__bar\">
    <div class=\"max-bound\">
      <div class=\"site-header__bar-inner\">
        <a href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"site-header__logo-link\">
          <svg class=\"site-header__logo site-header__logo--mobile\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 131 38\"><defs><path id=\"site-header-mobile-logo-a\" d=\"M.222.096h40.975V25.88H.222z\"/><path id=\"site-header-mobile-logo-c\" d=\"M.127.028h12.265V20.45H.127z\"/></defs><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"#000\"><path d=\"M73.869 13.4l-3.766 15.45L66.31 13.4h-6.475v24.15h4.389V26.93l-.135-4.83 3.766 15.45h4.469L76.09 22.1l-.108 4.83v10.62h4.388V13.4zM82.303 20.291v-.344c0-4.41 2.623-7.257 7.436-7.257 5.193 0 7.464 2.659 7.464 8.384v.656h-4.382c0-3.19-.837-4.66-3.055-4.66h-.243c-1.757 0-2.786 1.126-2.786 2.69v.157c0 1.782.623 2.72 3.706 3.19 4.596.72 6.922 2.534 6.922 7.07v.313c0 4.693-2.677 7.414-7.626 7.414-4.975 0-7.598-2.565-7.598-8.446v-.282h4.38c0 3.066 1.082 4.349 3.11 4.349h.244c2.028 0 3.028-1.252 3.028-2.878v-.157c0-1.752-.784-2.721-3.84-3.19-4.597-.72-6.76-2.597-6.76-7.009M104.643 27.898h3.474l-1.738-8.993-1.736 8.993zm4.777-14.853l5.294 24.504h-4.697l-1.031-5.264H103.8l-1.005 5.264h-4.723l5.293-24.504h6.054zM123.401 33.525h.246c2.15 0 2.94-1.72 2.94-4.348H131v.28c0 6.007-2.56 8.447-7.599 8.447-5.53 0-7.98-3.535-7.98-11.981v-1.251c0-8.447 2.45-11.982 7.98-11.982 5.039 0 7.599 2.44 7.599 8.54v1.126h-4.413c0-3.347-.626-5.287-2.94-5.287h-.246c-2.832 0-3.513 2.722-3.513 7.603v1.25c0 4.88.68 7.603 3.513 7.603\"/></g><g transform=\"translate(0 .26)\"><mask id=\"site-header-mobile-log-b\" fill=\"#fff\"><use xlink:href=\"#site-header-mobile-logo-a\"/></mask><path d=\"M18.29 23.29h1.92v-2.2a2.602 2.602 0 012.598-2.606 2.601 2.601 0 012.597 2.606v2.2h13.272v-4.806h-2.194a2.601 2.601 0 01-2.598-2.605 2.602 2.602 0 012.598-2.605h2.194v-1.815a2.597 2.597 0 012.52-2.597V2.875C37.55 1.338 32.943.218 27.168.095h-2.47 2.38C5.924.393.221 13.38.221 13.38l.007 12.5h15.466a2.6 2.6 0 012.596-2.59\" fill=\"#FFC838\" mask=\"url(#site-header-mobile-logo-b)\"/></g><path d=\"M16.46 24.308l.02-.016a2.61 2.61 0 01.363-.299c.034-.023.072-.037.107-.058a2.59 2.59 0 01.332-.18c.083-.036.173-.055.26-.082.076-.023.148-.054.226-.07a2.61 2.61 0 01.522-.053h1.92V21.35a2.601 2.601 0 012.598-2.605 2.6 2.6 0 012.596 2.605v2.201h1.54v-5.498l9.163 5.498h2.57v-4.806h-2.194a2.602 2.602 0 01-2.598-2.605 2.602 2.602 0 012.598-2.606h2.194V11.72a2.602 2.602 0 012.597-2.606l.009.001V3.167C37.62 1.612 32.985.478 27.169.356h-.274.182c-.062 0-.12.005-.182.006l.007 17.633-14.149-8.562V26.14h2.942a2.601 2.601 0 01.765-1.83M12.7 3.037v6.414l-5.554-3.41A28.317 28.317 0 0112.7 3.038\" fill=\"#000\"/><path d=\"M34.196 37.383H.112V26.139h15.583l-.002.017a2.601 2.601 0 002.598 2.605h1.92v2.2a2.601 2.601 0 002.597 2.606 2.6 2.6 0 002.597-2.605V28.76h13.272v4.806h-2.194a2.602 2.602 0 00-2.598 2.605c0 .44.119.848.31 1.21M43.871 28.76v4.807h2.195a2.601 2.601 0 012.597 2.606c0 .439-.119.847-.31 1.21h5.106V28.76H43.87z\" fill=\"#C8122C\"/><g transform=\"translate(41.07 3.1)\"><mask id=\"site-header-mobile-logo-d\" fill=\"#fff\"><use xlink:href=\"#site-header-mobile-logo-c\"/></mask><path d=\"M.204 6.013a2.601 2.601 0 012.597 2.605v1.814h2.194a2.601 2.601 0 012.598 2.606 2.6 2.6 0 01-2.598 2.605H2.801v4.807h9.591V10.439S9.328 3.899.127.028V6.02c.026-.001.05-.008.077-.008\" fill=\"#C8122C\" mask=\"url(#site-header-mobile-logo-d)\"/></g></g></svg>
          <svg class=\"site-header__logo site-header__logo--desktop\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 88 97\"><defs><path id=\"site-header-desktop-logo-a\" d=\"M.362.152h66.715v41.069H.362z\"/><path id=\"site-header-desktop-logo-c\" d=\"M.206.044h19.97v32.528H.206z\"/></defs><g fill=\"none\" fill-rule=\"evenodd\"><path fill=\"#000\" d=\"M17.756 66.745l-4.58 18.547-4.613-18.547H.688v28.99h5.338V82.989l-.164-5.798 4.58 18.546h5.435l4.58-18.546-.131 5.798v12.748h5.337v-28.99zM28.4 75.294v-.41c0-5.24 3.197-8.622 9.061-8.622 6.327 0 9.095 3.16 9.095 9.96v.781h-5.339c0-3.79-1.02-5.538-3.722-5.538h-.297c-2.141 0-3.394 1.339-3.394 3.197v.186c0 2.118.758 3.233 4.515 3.79 5.6.856 8.434 3.011 8.434 8.4v.373c0 5.575-3.262 8.809-9.292 8.809-6.061 0-9.258-3.048-9.258-10.036v-.335h5.338c0 3.643 1.318 5.167 3.789 5.167h.297c2.47 0 3.69-1.487 3.69-3.42v-.185c0-2.082-.955-3.234-4.679-3.791-5.6-.855-8.237-3.085-8.237-8.326M55.52 84.288h4.216l-2.108-10.666-2.109 10.666zm5.798-17.618l6.425 29.066h-5.7l-1.252-6.244h-6.293l-1.22 6.244h-5.732L53.97 66.67h7.348zM78.355 91.016h.297c2.602 0 3.558-2.044 3.558-5.166h5.338v.334c0 7.136-3.098 10.036-9.193 10.036-6.689 0-9.653-4.201-9.653-14.236v-1.486c0-10.036 2.964-14.236 9.653-14.236 6.095 0 9.193 2.9 9.193 10.148v1.337H82.21c0-3.977-.758-6.282-3.558-6.282h-.297c-3.427 0-4.25 3.234-4.25 9.033v1.486c0 5.798.823 9.032 4.25 9.032\"/><g transform=\"translate(.688 .057)\"><mask id=\"site-header-desktop-logo-b\" fill=\"#fff\"><use xlink:href=\"#site-header-desktop-logo-a\"/></mask><path d=\"M29.78 37.097h3.126v-3.506c0-2.292 1.893-4.15 4.23-4.15 2.335 0 4.228 1.858 4.228 4.15v3.506h21.61v-7.656H59.4c-2.335 0-4.23-1.857-4.23-4.15 0-2.29 1.895-4.149 4.23-4.149h3.572v-2.89c0-2.25 1.828-4.07 4.104-4.137V4.58C61.138 2.13 53.637.347 44.236.152h-4.024 3.875C9.647.626.362 21.31.362 21.31l.011 19.91h25.181c.015-2.28 1.9-4.124 4.227-4.124\" fill=\"#FFC838\" mask=\"url(#site-header-desktop-logo-b)\"/></g><path d=\"M27.488 38.362c.01-.01.023-.017.034-.027.183-.174.377-.336.59-.476.055-.036.118-.059.174-.092.175-.105.35-.209.54-.288.136-.056.283-.086.425-.129.123-.036.24-.086.367-.112.275-.055.56-.083.85-.083h3.126v-3.507c0-2.291 1.893-4.15 4.23-4.15 2.335 0 4.228 1.859 4.228 4.15v3.507h2.506v-8.759l14.92 8.759h4.184v-7.656h-3.573c-2.335 0-4.23-1.858-4.23-4.15 0-2.291 1.895-4.15 4.23-4.15h3.573v-2.89c0-2.291 1.894-4.15 4.228-4.15l.015.002V4.687C61.943 2.211 54.394.405 44.925.21h-.446.296c-.1 0-.196.008-.296.01l.012 28.087-23.038-13.638v26.61h4.79a4.099 4.099 0 011.245-2.917m-6.12-33.88V14.7l-9.045-5.431c2.501-1.71 5.486-3.366 9.044-4.785\" fill=\"#000\"/><path d=\"M56.366 59.186H.87V41.278h25.373c0 .009-.004.017-.004.026 0 2.292 1.894 4.15 4.23 4.15h3.125v3.505c0 2.293 1.894 4.15 4.23 4.15 2.335 0 4.228-1.857 4.228-4.15v-3.506h21.61v7.656h-3.573c-2.335 0-4.229 1.858-4.229 4.15 0 .699.193 1.35.506 1.927M72.12 45.453v7.656h3.572c2.337 0 4.23 1.858 4.23 4.15 0 .699-.194 1.349-.506 1.928h8.314V45.453H72.12z\" fill=\"#C8122C\"/><g transform=\"translate(67.559 4.583)\"><mask id=\"site-header-desktop-logo-d\" fill=\"#fff\"><use xlink:href=\"#site-header-desktop-logo-c\"/></mask><path d=\"M.332 9.577c2.336 0 4.229 1.858 4.229 4.149v2.89h3.573c2.336 0 4.229 1.859 4.229 4.15 0 2.292-1.893 4.15-4.23 4.15H4.562v7.656h15.616V16.627S15.189 6.211.206.044V9.59c.043-.002.083-.013.126-.013\" fill=\"#C8122C\" mask=\"url(#site-header-desktop-logo-d)\"/></g></g></svg>
          <span class=\"visible-for-screen-readers\">Maryland State Arts Council</span>
        </a>
        <strong class=\"site-header__dept\">
          <span>Department of Commerce</span>
          <svg class=\"site-header__dept-separator\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 64 54\"><defs><path id=\"site-header-dept-separator-a\" d=\"M0 0h68v53.969H0z\"/></defs><g transform=\"translate(-2)\" fill=\"none\" fill-rule=\"evenodd\"><mask id=\"site-header-dept-separator-b\" fill=\"#fff\"><use xlink:href=\"#site-header-dept-separator-a\"/></mask><g mask=\"url(#site-header-dept-separator-b)\" fill=\"#FFF\" fill-rule=\"nonzero\"><path d=\"M48.805-2.944L28.31 56.544l4.04 1.35L52.846-1.594zM35.65-2.944L15.154 56.544l4.04 1.35L39.69-1.594zM61.96-2.944L41.465 56.544l4.04 1.35L66-1.594zM22.494-2.944L2 56.544l4.04 1.35L26.535-1.594z\"/></g></g></svg>
          <span>Advancing the Arts Across Maryland</span>
        </strong>
        <div class=\"site-header__utility\">
          ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("utility"), "html", null, true);
        echo "
          ";
        // line 17
        if (($context["logged_in"] ?? null)) {
            // line 18
            echo "            ";
            // line 19
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalLink(t("Sign Out"), "user/logout"), "html", null, true);
            echo "
          ";
        } else {
            // line 21
            echo "            ";
            // line 22
            echo "          ";
        }
        // line 23
        echo "          <a href=\"#site-search\" class=\"site-header__search-toggle\" role=\"button\" aria-controls=\"site-search\" aria-label=\"Search\" tabindex=\"0\">
            <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 22 22\"><path d=\"M21.035 18.268c.478.479.691 1.117.16 1.596l-1.224 1.277c-.48.479-1.277.479-1.81 0l-5.053-5.054c-1.224.692-2.607 1.117-4.15 1.117C4.438 17.204.5 13.268.5 8.693.5 4.17 4.17.5 8.746.5c4.522 0 8.458 3.937 8.458 8.459a8.237 8.237 0 01-1.17 4.255l5 5.054zM3.054 8.693c0 3.138 2.766 5.958 5.905 5.958 3.191 0 5.745-2.554 5.745-5.692 0-3.14-2.82-5.959-5.958-5.959a5.699 5.699 0 00-5.692 5.693z\" fill-rule=\"evenodd\"/></svg>
            <span class=\"visible-for-screen-readers\">Search</span>
          </a>
        </div>
        <a href=\"#site-header-offcanvas\" class=\"site-header__offcanvas-toggle\" role=\"button\" aria-controls=\"site-search\" aria-label=\"Main menu\" tabindex=\"0\">
          <span class=\"visible-for-screen-readers\">Main menu</span>
          <svg class=\"icon icon--open\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 23 21\"><path d=\"M10 12v2H0v-2h10zm11-6v2H0V6h21zm0-6v2H0V0h21zm1.283 18.972c.226.226.327.528.075.755l-.578.603c-.226.227-.604.227-.855 0l-2.39-2.39a3.941 3.941 0 01-1.962.529c-2.137 0-3.999-1.861-3.999-4.024a3.88 3.88 0 013.899-3.874c2.138 0 3.999 1.861 3.999 4 0 .729-.201 1.433-.553 2.012l2.364 2.389zm-8.501-4.527c0 1.484 1.307 2.817 2.791 2.817a2.7 2.7 0 002.717-2.692c0-1.484-1.333-2.817-2.817-2.817a2.694 2.694 0 00-2.691 2.692z\" fill-rule=\"evenodd\"/></svg>
          <svg class=\"icon icon--close\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18 18\"><path d=\"M17.485 1.929L10.415 9l7.07 7.071-1.414 1.414L9 10.415l-7.071 7.07-1.414-1.414L7.586 9 .515 1.93 1.929.515 9 7.585l7.07-7.07 1.414 1.414z\" fill-rule=\"evenodd\"/></svg>
        </a>
      </div>
    </div>
  </div>
  <nav class=\"site-header__nav\" aria-label=\"Main\">
    <div class=\"max-bound silc-position--relative\">
      <div class=\"site-header__nav-primary\">
        ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main"), "html", null, true);
        echo "
      </div>
    </div>
  </nav>
  <div id=\"site-header-offcanvas\" class=\"site-header__offcanvas\">
    <nav class=\"site-header__offcanvas-nav\" aria-label=\"Main\">
      <div class=\"site-header__offcanvas-primary\">
        <div class=\"site-header__offcanvas-root\">
          <div class=\"outer-pad\">
            ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main"), "html", null, true);
        echo "
            <form class=\"site-header__offcanvas-search\" role=\"search\" action=\"https://www.maryland.gov/pages/search.aspx\" method=\"GET\" accept-charset=\"UTF-8\">
              <div class=\"form-input\">
                <label for=\"site-header-search-input\" class=\"form-label\">Search</label>
                <input id=\"site-header-search-input\" name=\"q\" type=\"text\" class=\"text-input\">
              </div>
              <button class=\"button\" type=\"submit\" aria-label=\"Submit search\">Go</button>
            </form>
          </div>
        </div>
      </div>
      <div class=\"site-header__offcanvas-utility\">
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("utility"), "html", null, true);
        echo "
        ";
        // line 61
        if (($context["logged_in"] ?? null)) {
            // line 62
            echo "          ";
            // line 63
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalLink(t("Sign Out"), "user/logout"), "html", null, true);
            echo "
        ";
        } else {
            // line 65
            echo "          ";
            // line 66
            echo "        ";
        }
        // line 67
        echo "      </div>
    </nav>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/_includes/global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  143 => 66,  141 => 65,  135 => 63,  133 => 62,  131 => 61,  127 => 60,  112 => 48,  100 => 39,  82 => 23,  79 => 22,  77 => 21,  71 => 19,  69 => 18,  67 => 17,  63 => 16,  49 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/_includes/global/header.html.twig", "/Users/navneet/sites/msac-drupal/themes/custom/msac/templates/_includes/global/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 16, "t" => 19);
        static $functions = array("path" => 5, "drupal_menu" => 16, "drupal_link" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path', 'drupal_menu', 'drupal_link']
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
