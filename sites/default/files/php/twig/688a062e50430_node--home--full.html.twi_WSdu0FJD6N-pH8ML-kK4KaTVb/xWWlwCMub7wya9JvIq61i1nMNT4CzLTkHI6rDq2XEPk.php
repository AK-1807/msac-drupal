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
\t\t\t\t\t\t\t\t<strong class=\"home-hero__cta-title\">";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 39, $this->source), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t\t<div class=\"home-hero__cta-description\">
\t\t\t\t\t\t\t\t\t<div class=\"home-hero__cta-description-inner\">
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<h3 class=\"home-directory-explorer__heading\">I want to…</h3>
\t\t\t\t\t\t\t<form class=\"home-directory-explorer__form\">
\t\t\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t\t\t<select class=\"home-directory-explorer__dropdown\" name=\"topic\" aria-label=\"Select a topic to explore\">
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
        // line 106
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
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalUrl("news", ["absolute" => true]), "html", null, true);
        echo "\" class=\"home-news-events__feed-view-all\">View All<span class=\"visible-for-screen-readers\">Arts News</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&nbsp;&gt;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 122
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
        // line 132
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 132), 0, [], "any", false, false, true, 132)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 132), 0, [], "any", false, false, true, 132)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 132), 0, [], "any", false, false, true, 132)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 132), "entity", [], "any", false, false, true, 132), "fileuri", [], "any", false, false, true, 132)))) {
            // line 133
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 133), 0, [], "any", false, false, true, 133)) {
                // line 134
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 134), 0, [], "any", false, false, true, 134)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 134), 0, [], "any", false, false, true, 134), "url", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 136), "entity", [], "any", false, false, true, 136), "fileuri", [], "any", false, false, true, 136), 136, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 138), 0, [], "any", false, false, true, 138)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 138), "value", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 139), 0, [], "any", false, false, true, 139)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 142
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 142), 0, [], "any", false, false, true, 142)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 142), 0, [], "any", false, false, true, 142)) {
                // line 143
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 148
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 148), 1, [], "any", false, false, true, 148)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 148), 1, [], "any", false, false, true, 148)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 148), 1, [], "any", false, false, true, 148)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 148), "entity", [], "any", false, false, true, 148), "fileuri", [], "any", false, false, true, 148)))) {
            // line 149
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 149), 1, [], "any", false, false, true, 149)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 149), 0, [], "any", false, false, true, 149)) {
                // line 150
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 150), 1, [], "any", false, false, true, 150)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 150), 0, [], "any", false, false, true, 150), "url", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 152), 1, [], "any", false, false, true, 152)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 152), "entity", [], "any", false, false, true, 152), "fileuri", [], "any", false, false, true, 152), 152, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 154), 1, [], "any", false, false, true, 154)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 154), "value", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 155), 1, [], "any", false, false, true, 155)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 155), "value", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 158
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 158), 1, [], "any", false, false, true, 158)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 158), 0, [], "any", false, false, true, 158)) {
                // line 159
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 164
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 164), 2, [], "any", false, false, true, 164)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 164), 2, [], "any", false, false, true, 164)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 164), 2, [], "any", false, false, true, 164)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 164), "entity", [], "any", false, false, true, 164), "fileuri", [], "any", false, false, true, 164)))) {
            // line 165
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 165), 2, [], "any", false, false, true, 165)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 165), 0, [], "any", false, false, true, 165)) {
                // line 166
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 166), 2, [], "any", false, false, true, 166)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 166), 0, [], "any", false, false, true, 166), "url", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 168), 2, [], "any", false, false, true, 168)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 168), "entity", [], "any", false, false, true, 168), "fileuri", [], "any", false, false, true, 168), 168, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 170), 2, [], "any", false, false, true, 170)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 171), 2, [], "any", false, false, true, 171)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 174
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 174), 2, [], "any", false, false, true, 174)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 174), 0, [], "any", false, false, true, 174)) {
                // line 175
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 180
        if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 180), 0, [], "any", false, false, true, 180)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 180), "value", [], "any", false, false, true, 180)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 180), 0, [], "any", false, false, true, 180)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 180), "value", [], "any", false, false, true, 180))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 180), 0, [], "any", false, false, true, 180)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 180)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[0] ?? null) : null), "title", [], "any", false, false, true, 180))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 180), 0, [], "any", false, false, true, 180)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 180)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[0] ?? null) : null), "uri", [], "any", false, false, true, 180)))) {
            // line 181
            echo "\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta\">
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-statistic\">
\t\t\t\t\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 79 77\">
\t\t\t\t\t\t\t\t\t\t<g stroke=\"#EC0000\" stroke-width=\"4\" fill=\"none\" fill-rule=\"evenodd\" stroke-linecap=\"square\"><path d=\"M59.912 3.097L36.006 73.903M43.578 3.097L19.673 73.903M76.245 3.097L52.34 73.903M27.245 3.097L3.34 73.903\"/></g>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<p>";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 186), 0, [], "any", false, false, true, 186)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 186), "value", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-impact\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 189), 0, [], "any", false, false, true, 189)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 189), "value", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 190), 0, [], "any", false, false, true, 190)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 190)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[0] ?? null) : null), "uri", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "\" class=\"button button--white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 190), 0, [], "any", false, false, true, 190)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 190)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[0] ?? null) : null), "title", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 194
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 196
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 196), 3, [], "any", false, false, true, 196)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 196), "value", [], "any", false, false, true, 196)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 196), 3, [], "any", false, false, true, 196)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 196), "value", [], "any", false, false, true, 196))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 196), 3, [], "any", false, false, true, 196)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 196), "entity", [], "any", false, false, true, 196), "fileuri", [], "any", false, false, true, 196)))) {
            // line 197
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_45 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 197), 3, [], "any", false, false, true, 197)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 197), 0, [], "any", false, false, true, 197)) {
                // line 198
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_46 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 198), 3, [], "any", false, false, true, 198)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 198), 0, [], "any", false, false, true, 198), "url", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_47 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 200), 3, [], "any", false, false, true, 200)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 200), "entity", [], "any", false, false, true, 200), "fileuri", [], "any", false, false, true, 200), 200, $this->source), "optimized"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 202), 3, [], "any", false, false, true, 202)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 202), "value", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 203), 3, [], "any", false, false, true, 203)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 203), "value", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 206
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 206), 3, [], "any", false, false, true, 206)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 206), 0, [], "any", false, false, true, 206)) {
                // line 207
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t";
        }
        // line 210
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 212
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 212), 4, [], "any", false, false, true, 212)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 212), "value", [], "any", false, false, true, 212)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 212), 4, [], "any", false, false, true, 212)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 212), "value", [], "any", false, false, true, 212))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_53 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 212), 4, [], "any", false, false, true, 212)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 212), "entity", [], "any", false, false, true, 212), "fileuri", [], "any", false, false, true, 212)))) {
            // line 213
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_54 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 213), 4, [], "any", false, false, true, 213)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 213), 0, [], "any", false, false, true, 213)) {
                // line 214
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 214), 4, [], "any", false, false, true, 214)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 214), 0, [], "any", false, false, true, 214), "url", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_56 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 216), 4, [], "any", false, false, true, 216)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 216), "entity", [], "any", false, false, true, 216), "fileuri", [], "any", false, false, true, 216), 216, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 218), 4, [], "any", false, false, true, 218)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 218), "value", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_58 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 219), 4, [], "any", false, false, true, 219)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 219), "value", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 222
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 222), 4, [], "any", false, false, true, 222)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 222), 0, [], "any", false, false, true, 222)) {
                // line 223
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-footer-cta\">
\t\t\t";
        // line 231
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 231)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 231)))) {
            // line 232
            echo "\t\t\t\t<div class=\"outer-pad\">
\t\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--align-center\">
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--1-1200 silc-grid__col--2-1440 silc-display--none silc-display--block-1200\"></div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200\">
\t\t\t\t\t\t\t";
            // line 236
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 236))) {
                // line 237
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__content\">
\t\t\t\t\t\t\t\t\t";
                // line 238
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200 silc-grid__col--4-1440\">
\t\t\t\t\t\t\t";
            // line 243
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 243))) {
                // line 244
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__governors-image\">
\t\t\t\t\t\t\t\t\t";
                // line 245
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 252
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
        return array (  528 => 252,  522 => 248,  516 => 245,  513 => 244,  511 => 243,  507 => 241,  501 => 238,  498 => 237,  496 => 236,  490 => 232,  488 => 231,  481 => 226,  478 => 225,  474 => 223,  472 => 222,  466 => 219,  462 => 218,  456 => 216,  450 => 214,  447 => 213,  445 => 212,  441 => 210,  438 => 209,  434 => 207,  432 => 206,  426 => 203,  422 => 202,  416 => 200,  410 => 198,  407 => 197,  405 => 196,  401 => 194,  392 => 190,  388 => 189,  382 => 186,  375 => 181,  373 => 180,  369 => 178,  366 => 177,  362 => 175,  360 => 174,  354 => 171,  350 => 170,  344 => 168,  338 => 166,  335 => 165,  333 => 164,  329 => 162,  326 => 161,  322 => 159,  320 => 158,  314 => 155,  310 => 154,  304 => 152,  298 => 150,  295 => 149,  293 => 148,  289 => 146,  286 => 145,  282 => 143,  280 => 142,  274 => 139,  270 => 138,  264 => 136,  258 => 134,  255 => 133,  253 => 132,  240 => 122,  234 => 119,  218 => 106,  181 => 71,  178 => 70,  172 => 68,  169 => 67,  163 => 65,  160 => 64,  158 => 63,  150 => 57,  146 => 56,  140 => 54,  134 => 50,  130 => 48,  118 => 42,  112 => 39,  106 => 38,  103 => 37,  99 => 36,  96 => 35,  94 => 34,  75 => 17,  69 => 14,  66 => 13,  64 => 12,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--home--full.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--home--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 36);
        static $filters = array("field_value" => 12, "escape" => 14, "default" => 38, "image_style" => 136);
        static $functions = array("drupal_url" => 106, "drupal_view" => 122);

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
