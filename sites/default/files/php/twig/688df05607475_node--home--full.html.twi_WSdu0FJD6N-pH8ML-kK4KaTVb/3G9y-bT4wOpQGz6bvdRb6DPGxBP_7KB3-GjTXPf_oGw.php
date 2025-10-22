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

/* themes/custom/msac/templates/node/node--home--full.html.twig */
class __TwigTemplate_ef7a8f9961dd04bd5d56f11b34fad4c5 extends Template
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
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/custom/msac/templates/node/node--home--full.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_node_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"home-hero\">
\t\t<h1 class=\"home-hero__heading\">Maryland
\t\t\t<span>State Arts</span>
\t\t\tCouncil</h1>
\t\t<span class=\"home-hero__heading home-hero__heading--fade\" aria-hidden=\"true\">Maryland<br>
\t\t\tState Arts<br>
\t\t\tCouncil</span>
\t\t<div class=\"home-hero__carousel\">
\t\t\t";
        // line 12
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_carousel", [], "any", false, false, true, 12))) {
            // line 13
            echo "\t\t\t\t<div class=\"carousel carousel--fade\">
\t\t\t\t\t";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_carousel", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<div class=\"carousel__nav\">
\t\t\t\t<div class=\"carousel__nav-sizer\"></div>
\t\t\t\t<button class=\"carousel__nav-previous\" aria-label=\"Previous\" tabindex=\"0\">
\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 14 21\"><path d=\"M3.297 0L14 10.5 3.297 21 0 17.766 7.407 10.5 0 3.234z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel__nav-next\" aria-label=\"Next\" tabindex=\"0\">
\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 14 21\"><path d=\"M3.297 0L14 10.5 3.297 21 0 17.766 7.407 10.5 0 3.234z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel__nav-play-pause\" aria-label=\"Pause carousel\" tabindex=\"0\">
\t\t\t\t\t<svg aria-hidden=\"true\" class=\"icon\" data-icon=\"play\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\"><path fill=\"#FFF\" d=\"M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z\"/></svg>
\t\t\t\t\t<svg aria-hidden=\"true\" class=\"icon\" data-icon=\"pause\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\"><path fill=\"#FFF\" d=\"M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z\"/></svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"home-hero__ctas\">
\t\t\t";
        // line 34
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_hero_links", [], "any", false, false, true, 34))) {
            // line 35
            echo "\t\t\t\t<ul>
\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_hero_links", [], "any", false, false, true, 36)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 38, $this->source), "html", null, true);
                echo "\" class=\"home-hero__cta\" target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "#options", [], "array", false, true, true, 38), "attributes", [], "any", false, true, true, 38), "target", [], "any", true, true, true, 38)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "#options", [], "array", false, true, true, 38), "attributes", [], "any", false, true, true, 38), "target", [], "any", false, false, true, 38), 38, $this->source), "_self")) : ("_self")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-title\"><strong>";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 39, $this->source), "html", null, true);
                echo "</strong></span>
\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-description\">
\t\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-description-inner\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 50
        echo "\t\t</div>
\t</div>
";
    }

    // line 54
    public function block_node_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 56
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "\t<div class=\"home-content-wrap\">
\t\t<section class=\"home-directory-section\" aria-labelledby=\"home-directory-section-heading\">
\t\t\t<div class=\"outer-pad\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024\">
\t\t\t\t\t\t<div class=\"home-directory-section__content\">
\t\t\t\t\t\t\t";
        // line 63
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 63)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 63)))) {
            // line 64
            echo "\t\t\t\t\t\t\t\t";
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 64))) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t<h2 class=\"home-directory-section__heading\" id=\"home-directory-section-heading\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 67)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t<p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--1-1024 silc-display--none silc-display--block-1024\" role=\"presentation\"></div>
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--8-800 silc-grid__col--5-1024 silc-grid__col--4-1440\">
\t\t\t\t\t\t<div class=\"home-directory-explorer\">
\t\t\t\t\t\t\t<h3 class=\"home-directory-explorer__heading\">Select a topic to explore</h3>
\t\t\t\t\t\t\t<form class=\"home-directory-explorer__form\">
\t\t\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t\t\t<select class=\"home-directory-explorer__dropdown\" name=\"topic\" aria-label=\"Select a topic to explore\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">I want to…</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"/directory/works\">Browse Artwork in Maryland</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"/directory/artists\">Find an Artist</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"/directory/organizations\">Find Arts Organizations and Businesses</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"/directory/districts\">Explore Arts &amp; Entertainment Districts</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"button button--reverse\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"home-directory-section__separator\">
\t\t\t\t<div role=\"presentation\"></div>
\t\t\t\t<div role=\"presentation\"></div>
\t\t\t\t<div role=\"presentation\"></div>
\t\t\t\t<div role=\"presentation\"></div>
\t\t\t</div>
\t\t</section>
\t\t<div class=\"home-news-events\">
\t\t\t<div class=\"outer-pad\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--2-1440 silc-display--none silc-display--block-1440\" role=\"presentation\"></div>
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--4-1440 silc-display--flex-1024\">
\t\t\t\t\t\t<div class=\"home-news-events__feed\">
\t\t\t\t\t\t\t<h2 class=\"home-news-events__feed-heading\">Arts Calendar</h2>
\t\t\t\t\t\t\t<a href=\"";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalUrl("calendar", ["absolute" => true]), "html", null, true);
        echo "\" class=\"home-news-events__feed-view-all\">View All<span class=\"visible-for-screen-readers\">Arts Events</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&nbsp;&gt;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div id=\"home-events-feed-root\">
\t\t\t\t\t\t\t\t<home-events-feed></home-events-feed>
\t\t\t\t\t\t\t\t<noscript>Please enable Javascript to view arts events across Maryland.</noscript>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--1-1440 silc-display--none silc-display--block-1440\" role=\"presentation\"></div>
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--4-1440 silc-display--flex-1024\">
\t\t\t\t\t\t<div class=\"home-news-events__feed\">
\t\t\t\t\t\t\t<h2 class=\"home-news-events__feed-heading\">Arts News</h2>
\t\t\t\t\t\t\t<a href=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalUrl("news", ["absolute" => true]), "html", null, true);
        echo "\" class=\"home-news-events__feed-view-all\">View All<span class=\"visible-for-screen-readers\">Arts News</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&nbsp;&gt;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("news_feed", "block_1"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-callouts-section\">
\t\t\t<div class=\"outer-pad\">
\t\t\t\t<div class=\"home-callout-grid\">
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 133
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 133), "entity", [], "any", false, false, true, 133), "fileuri", [], "any", false, false, true, 133)))) {
            // line 134
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 134), 0, [], "any", false, false, true, 134)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 134), 0, [], "any", false, false, true, 134)) {
                // line 135
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135), "url", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 137), 0, [], "any", false, false, true, 137)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 137), "entity", [], "any", false, false, true, 137), "fileuri", [], "any", false, false, true, 137), 137, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 139), 0, [], "any", false, false, true, 139)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 140), 0, [], "any", false, false, true, 140)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 143
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 143), 0, [], "any", false, false, true, 143)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 143), 0, [], "any", false, false, true, 143)) {
                // line 144
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 149
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 149), 1, [], "any", false, false, true, 149)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 149), 1, [], "any", false, false, true, 149)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 149), 1, [], "any", false, false, true, 149)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 149), "entity", [], "any", false, false, true, 149), "fileuri", [], "any", false, false, true, 149)))) {
            // line 150
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 150), 1, [], "any", false, false, true, 150)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 150), 0, [], "any", false, false, true, 150)) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 151), 1, [], "any", false, false, true, 151)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 151), 0, [], "any", false, false, true, 151), "url", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 153), 1, [], "any", false, false, true, 153)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 153), "entity", [], "any", false, false, true, 153), "fileuri", [], "any", false, false, true, 153), 153, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 155), 1, [], "any", false, false, true, 155)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 155), "value", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 156), 1, [], "any", false, false, true, 156)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 159
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 159), 1, [], "any", false, false, true, 159)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 159), 0, [], "any", false, false, true, 159)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 165
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 165), 2, [], "any", false, false, true, 165)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 165), 2, [], "any", false, false, true, 165)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 165), 2, [], "any", false, false, true, 165)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 165), "entity", [], "any", false, false, true, 165), "fileuri", [], "any", false, false, true, 165)))) {
            // line 166
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 166), 2, [], "any", false, false, true, 166)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 166), 0, [], "any", false, false, true, 166)) {
                // line 167
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 167), 2, [], "any", false, false, true, 167)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 167), 0, [], "any", false, false, true, 167), "url", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 169), 2, [], "any", false, false, true, 169)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 169), "entity", [], "any", false, false, true, 169), "fileuri", [], "any", false, false, true, 169), 169, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 171), 2, [], "any", false, false, true, 171)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 172), 2, [], "any", false, false, true, 172)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 172), "value", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 175
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 175), 2, [], "any", false, false, true, 175)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 175), 0, [], "any", false, false, true, 175)) {
                // line 176
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 181
        if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 181), 0, [], "any", false, false, true, 181)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 181), 0, [], "any", false, false, true, 181)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 181), 0, [], "any", false, false, true, 181)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 181)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[0] ?? null) : null), "title", [], "any", false, false, true, 181))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 181), 0, [], "any", false, false, true, 181)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 181)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[0] ?? null) : null), "uri", [], "any", false, false, true, 181)))) {
            // line 182
            echo "\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta\">
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-statistic\">
\t\t\t\t\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 79 77\">
\t\t\t\t\t\t\t\t\t\t<g stroke=\"#EC0000\" stroke-width=\"4\" fill=\"none\" fill-rule=\"evenodd\" stroke-linecap=\"square\"><path d=\"M59.912 3.097L36.006 73.903M43.578 3.097L19.673 73.903M76.245 3.097L52.34 73.903M27.245 3.097L3.34 73.903\"/></g>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<p>";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 187), 0, [], "any", false, false, true, 187)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 187), "value", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-impact\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 190), 0, [], "any", false, false, true, 190)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 190), "value", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 191), 0, [], "any", false, false, true, 191)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 191)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[0] ?? null) : null), "uri", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "\" class=\"button button--white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 191), 0, [], "any", false, false, true, 191)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 191)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[0] ?? null) : null), "title", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 197
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 197), 3, [], "any", false, false, true, 197)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 197), "value", [], "any", false, false, true, 197)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 197), 3, [], "any", false, false, true, 197)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 197), "value", [], "any", false, false, true, 197))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 197), 3, [], "any", false, false, true, 197)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 197), "entity", [], "any", false, false, true, 197), "fileuri", [], "any", false, false, true, 197)))) {
            // line 198
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_45 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 198), 3, [], "any", false, false, true, 198)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 198), 0, [], "any", false, false, true, 198)) {
                // line 199
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_46 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 199), 3, [], "any", false, false, true, 199)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 199), 0, [], "any", false, false, true, 199), "url", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_47 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 201), 3, [], "any", false, false, true, 201)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 201), "entity", [], "any", false, false, true, 201), "fileuri", [], "any", false, false, true, 201), 201, $this->source), "optimized"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 203), 3, [], "any", false, false, true, 203)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 203), "value", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 204), 3, [], "any", false, false, true, 204)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 204), "value", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 207
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 207), 3, [], "any", false, false, true, 207)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 207), 0, [], "any", false, false, true, 207)) {
                // line 208
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t\t";
        }
        // line 211
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 213
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 213), 4, [], "any", false, false, true, 213)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 213), "value", [], "any", false, false, true, 213)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 213), 4, [], "any", false, false, true, 213)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 213), "value", [], "any", false, false, true, 213))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_53 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 213), 4, [], "any", false, false, true, 213)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 213), "entity", [], "any", false, false, true, 213), "fileuri", [], "any", false, false, true, 213)))) {
            // line 214
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_54 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 214), 4, [], "any", false, false, true, 214)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 214), 0, [], "any", false, false, true, 214)) {
                // line 215
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 215), 4, [], "any", false, false, true, 215)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 215), 0, [], "any", false, false, true, 215), "url", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_56 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 217), 4, [], "any", false, false, true, 217)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 217), "entity", [], "any", false, false, true, 217), "fileuri", [], "any", false, false, true, 217), 217, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 219), 4, [], "any", false, false, true, 219)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 219), "value", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 220
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_58 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 220), 4, [], "any", false, false, true, 220)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 220), "value", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 223
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 223), 4, [], "any", false, false, true, 223)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 223), 0, [], "any", false, false, true, 223)) {
                // line 224
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-footer-cta\">
\t\t\t";
        // line 232
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 232)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 232)))) {
            // line 233
            echo "\t\t\t\t<div class=\"outer-pad\">
\t\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--align-center\">
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--1-1200 silc-grid__col--2-1440 silc-display--none silc-display--block-1200\"></div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200\">
\t\t\t\t\t\t\t";
            // line 237
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 237))) {
                // line 238
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__content\">
\t\t\t\t\t\t\t\t\t";
                // line 239
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200 silc-grid__col--4-1440\">
\t\t\t\t\t\t\t";
            // line 244
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 244))) {
                // line 245
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__governors-image\">
\t\t\t\t\t\t\t\t\t";
                // line 246
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 253
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--home--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 253,  523 => 249,  517 => 246,  514 => 245,  512 => 244,  508 => 242,  502 => 239,  499 => 238,  497 => 237,  491 => 233,  489 => 232,  482 => 227,  479 => 226,  475 => 224,  473 => 223,  467 => 220,  463 => 219,  457 => 217,  451 => 215,  448 => 214,  446 => 213,  442 => 211,  439 => 210,  435 => 208,  433 => 207,  427 => 204,  423 => 203,  417 => 201,  411 => 199,  408 => 198,  406 => 197,  402 => 195,  393 => 191,  389 => 190,  383 => 187,  376 => 182,  374 => 181,  370 => 179,  367 => 178,  363 => 176,  361 => 175,  355 => 172,  351 => 171,  345 => 169,  339 => 167,  336 => 166,  334 => 165,  330 => 163,  327 => 162,  323 => 160,  321 => 159,  315 => 156,  311 => 155,  305 => 153,  299 => 151,  296 => 150,  294 => 149,  290 => 147,  287 => 146,  283 => 144,  281 => 143,  275 => 140,  271 => 139,  265 => 137,  259 => 135,  256 => 134,  254 => 133,  241 => 123,  235 => 120,  219 => 107,  181 => 71,  178 => 70,  172 => 68,  169 => 67,  163 => 65,  160 => 64,  158 => 63,  150 => 57,  146 => 56,  140 => 54,  134 => 50,  130 => 48,  118 => 42,  112 => 39,  106 => 38,  103 => 37,  99 => 36,  96 => 35,  94 => 34,  75 => 17,  69 => 14,  66 => 13,  64 => 12,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--home--full.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--home--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 36);
        static $filters = array("field_value" => 12, "escape" => 14, "default" => 38, "image_style" => 137);
        static $functions = array("drupal_url" => 107, "drupal_view" => 123);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['field_value', 'escape', 'default', 'image_style'],
                ['drupal_url', 'drupal_view']
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
