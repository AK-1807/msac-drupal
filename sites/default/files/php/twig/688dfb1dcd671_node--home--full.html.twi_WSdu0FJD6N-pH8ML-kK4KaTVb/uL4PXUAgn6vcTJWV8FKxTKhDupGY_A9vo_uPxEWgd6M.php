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
\t\t\t\t<ul>
\t\t\t\t<li><button class=\"carousel__nav-previous\" aria-label=\"Previous\" tabindex=\"0\">
\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 14 21\"><path d=\"M3.297 0L14 10.5 3.297 21 0 17.766 7.407 10.5 0 3.234z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
\t\t\t\t</button></li>
\t\t\t\t<li><button class=\"carousel__nav-next\" aria-label=\"Next\" tabindex=\"0\">
\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 14 21\"><path d=\"M3.297 0L14 10.5 3.297 21 0 17.766 7.407 10.5 0 3.234z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>
\t\t\t\t</button></li>
\t\t\t\t<li><button class=\"carousel__nav-play-pause\" aria-label=\"Pause carousel\" tabindex=\"0\">
\t\t\t\t\t<svg aria-hidden=\"true\" class=\"icon\" data-icon=\"play\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\"><path fill=\"#FFF\" d=\"M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z\"/></svg>
\t\t\t\t\t<svg aria-hidden=\"true\" class=\"icon\" data-icon=\"pause\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\"><path fill=\"#FFF\" d=\"M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z\"/></svg>
\t\t\t\t</button></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"home-hero__ctas\">
\t\t\t";
        // line 36
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_hero_links", [], "any", false, false, true, 36))) {
            // line 37
            echo "\t\t\t\t<ul>
\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_hero_links", [], "any", false, false, true, 38)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 40, $this->source), "html", null, true);
                echo "\" class=\"home-hero__cta\" target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "#options", [], "array", false, true, true, 40), "attributes", [], "any", false, true, true, 40), "target", [], "any", true, true, true, 40)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "#options", [], "array", false, true, true, 40), "attributes", [], "any", false, true, true, 40), "target", [], "any", false, false, true, 40), 40, $this->source), "_self")) : ("_self")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-title\"><strong>";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 41, $this->source), "html", null, true);
                echo "</strong></span>
\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-description\">
\t\t\t\t\t\t\t\t\t<span class=\"home-hero__cta-description-inner\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#options"] ?? null) : null), "attributes", [], "any", false, false, true, 44), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
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
            // line 50
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 52
        echo "\t\t</div>
\t</div>
";
    }

    // line 56
    public function block_node_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "\t<div class=\"home-content-wrap\">
\t\t<section class=\"home-directory-section\" aria-labelledby=\"home-directory-section-heading\">
\t\t\t<div class=\"outer-pad\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024\">
\t\t\t\t\t\t<div class=\"home-directory-section__content\">
\t\t\t\t\t\t\t";
        // line 65
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 65)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 65)))) {
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 66))) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t<h2 class=\"home-directory-section__heading\" id=\"home-directory-section-heading\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 69)) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t<p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_intro_text", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t";
        }
        // line 73
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
        // line 109
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
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalUrl("news", ["absolute" => true]), "html", null, true);
        echo "\" class=\"home-news-events__feed-view-all\">View All<span class=\"visible-for-screen-readers\">Arts News</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&nbsp;&gt;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 125
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
        // line 135
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 135), 0, [], "any", false, false, true, 135)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 135), "entity", [], "any", false, false, true, 135), "fileuri", [], "any", false, false, true, 135)))) {
            // line 136
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 137), 0, [], "any", false, false, true, 137)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 137), 0, [], "any", false, false, true, 137), "url", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 139), 0, [], "any", false, false, true, 139)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 139), "entity", [], "any", false, false, true, 139), "fileuri", [], "any", false, false, true, 139), 139, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 141), 0, [], "any", false, false, true, 141)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 141), "value", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 142), 0, [], "any", false, false, true, 142)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 142), "value", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 145
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 145), 0, [], "any", false, false, true, 145)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 145), 0, [], "any", false, false, true, 145)) {
                // line 146
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 151
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 151), 1, [], "any", false, false, true, 151)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 151), 1, [], "any", false, false, true, 151)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 151), "value", [], "any", false, false, true, 151))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 151), 1, [], "any", false, false, true, 151)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 151), "entity", [], "any", false, false, true, 151), "fileuri", [], "any", false, false, true, 151)))) {
            // line 152
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 152), 1, [], "any", false, false, true, 152)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 152), 0, [], "any", false, false, true, 152)) {
                // line 153
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 153), 1, [], "any", false, false, true, 153)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 153), 0, [], "any", false, false, true, 153), "url", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 155), 1, [], "any", false, false, true, 155)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 155), "entity", [], "any", false, false, true, 155), "fileuri", [], "any", false, false, true, 155), 155, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 157), 1, [], "any", false, false, true, 157)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 158), 1, [], "any", false, false, true, 158)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 158), "value", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 161
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 161), 1, [], "any", false, false, true, 161)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 161), 0, [], "any", false, false, true, 161)) {
                // line 162
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 167
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 167), 2, [], "any", false, false, true, 167)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 167), 2, [], "any", false, false, true, 167)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 167), 2, [], "any", false, false, true, 167)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 167), "entity", [], "any", false, false, true, 167), "fileuri", [], "any", false, false, true, 167)))) {
            // line 168
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 168), 2, [], "any", false, false, true, 168)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 168), 0, [], "any", false, false, true, 168)) {
                // line 169
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 169), 2, [], "any", false, false, true, 169)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 169), 0, [], "any", false, false, true, 169), "url", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 171), 2, [], "any", false, false, true, 171)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 171), "entity", [], "any", false, false, true, 171), "fileuri", [], "any", false, false, true, 171), 171, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 173), 2, [], "any", false, false, true, 173)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 173), "value", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 174), 2, [], "any", false, false, true, 174)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 174), "value", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 177
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 177), 2, [], "any", false, false, true, 177)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 177), 0, [], "any", false, false, true, 177)) {
                // line 178
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t";
        }
        // line 181
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 183
        if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 183), 0, [], "any", false, false, true, 183)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 183), "value", [], "any", false, false, true, 183)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 183), 0, [], "any", false, false, true, 183)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 183), "value", [], "any", false, false, true, 183))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 183), 0, [], "any", false, false, true, 183)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 183)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[0] ?? null) : null), "title", [], "any", false, false, true, 183))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 183), 0, [], "any", false, false, true, 183)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 183)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[0] ?? null) : null), "uri", [], "any", false, false, true, 183)))) {
            // line 184
            echo "\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta\">
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-statistic\">
\t\t\t\t\t\t\t\t\t<svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 79 77\">
\t\t\t\t\t\t\t\t\t\t<g stroke=\"#EC0000\" stroke-width=\"4\" fill=\"none\" fill-rule=\"evenodd\" stroke-linecap=\"square\"><path d=\"M59.912 3.097L36.006 73.903M43.578 3.097L19.673 73.903M76.245 3.097L52.34 73.903M27.245 3.097L3.34 73.903\"/></g>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<p>";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 189), 0, [], "any", false, false, true, 189)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["#paragraph"] ?? null) : null), "field_cta_head", [], "any", false, false, true, 189), "value", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__cta-impact\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 192), 0, [], "any", false, false, true, 192)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#paragraph"] ?? null) : null), "field_cta_subhead", [], "any", false, false, true, 192), "value", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 193), 0, [], "any", false, false, true, 193)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 193)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[0] ?? null) : null), "uri", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "\" class=\"button button--white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_cta", [], "any", false, false, true, 193), 0, [], "any", false, false, true, 193)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#paragraph"] ?? null) : null), "field_cta_link", [], "any", false, false, true, 193)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[0] ?? null) : null), "title", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 199
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 199), 3, [], "any", false, false, true, 199)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 199), "value", [], "any", false, false, true, 199)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 199), 3, [], "any", false, false, true, 199)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 199), "value", [], "any", false, false, true, 199))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 199), 3, [], "any", false, false, true, 199)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 199), "entity", [], "any", false, false, true, 199), "fileuri", [], "any", false, false, true, 199)))) {
            // line 200
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_45 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 200), 3, [], "any", false, false, true, 200)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 200), 0, [], "any", false, false, true, 200)) {
                // line 201
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_46 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 201), 3, [], "any", false, false, true, 201)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 201), 0, [], "any", false, false, true, 201), "url", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_47 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 203), 3, [], "any", false, false, true, 203)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 203), "entity", [], "any", false, false, true, 203), "fileuri", [], "any", false, false, true, 203), 203, $this->source), "optimized"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 205), 3, [], "any", false, false, true, 205)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 205), "value", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 206), 3, [], "any", false, false, true, 206)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 206), "value", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 209
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 209), 3, [], "any", false, false, true, 209)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 209), 0, [], "any", false, false, true, 209)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-callout-grid__item\">
\t\t\t\t\t\t";
        // line 215
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 215), 4, [], "any", false, false, true, 215)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 215), "value", [], "any", false, false, true, 215)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 215), 4, [], "any", false, false, true, 215)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 215), "value", [], "any", false, false, true, 215))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_53 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 215), 4, [], "any", false, false, true, 215)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 215), "entity", [], "any", false, false, true, 215), "fileuri", [], "any", false, false, true, 215)))) {
            // line 216
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_54 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 216), 4, [], "any", false, false, true, 216)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 216), 0, [], "any", false, false, true, 216)) {
                // line 217
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 217), 4, [], "any", false, false, true, 217)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 217), 0, [], "any", false, false, true, 217), "url", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_56 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 219), 4, [], "any", false, false, true, 219)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["#paragraph"] ?? null) : null), "field_home_feature_image", [], "any", false, false, true, 219), "entity", [], "any", false, false, true, 219), "fileuri", [], "any", false, false, true, 219), 219, $this->source), "homepage_feature"), "html", null, true);
            echo ")\">
\t\t\t\t\t\t\t\t\t<div class=\"home-callout-grid__feature-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-category\">";
            // line 221
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 221), 4, [], "any", false, false, true, 221)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["#paragraph"] ?? null) : null), "field_home_feature_category", [], "any", false, false, true, 221), "value", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"home-callout-grid__feature-title\">";
            // line 222
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_58 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 222), 4, [], "any", false, false, true, 222)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["#paragraph"] ?? null) : null), "field_home_feature_content", [], "any", false, false, true, 222), "value", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 225
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_features", [], "any", false, false, true, 225), 4, [], "any", false, false, true, 225)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["#paragraph"] ?? null) : null), "field_home_feature_link", [], "any", false, false, true, 225), 0, [], "any", false, false, true, 225)) {
                // line 226
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 228
            echo "\t\t\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-footer-cta\">
\t\t\t";
        // line 234
        if (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 234)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 234)))) {
            // line 235
            echo "\t\t\t\t<div class=\"outer-pad\">
\t\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--align-center\">
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--1-1200 silc-grid__col--2-1440 silc-display--none silc-display--block-1200\"></div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200\">
\t\t\t\t\t\t\t";
            // line 239
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 239))) {
                // line 240
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__content\">
\t\t\t\t\t\t\t\t\t";
                // line 241
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_text", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 244
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--6-1024 silc-grid__col--5-1200 silc-grid__col--4-1440\">
\t\t\t\t\t\t\t";
            // line 246
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 246))) {
                // line 247
                echo "\t\t\t\t\t\t\t\t<div class=\"home-footer-cta__governors-image\">
\t\t\t\t\t\t\t\t\t";
                // line 248
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_home_footer_image", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 255
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
        return array (  531 => 255,  525 => 251,  519 => 248,  516 => 247,  514 => 246,  510 => 244,  504 => 241,  501 => 240,  499 => 239,  493 => 235,  491 => 234,  484 => 229,  481 => 228,  477 => 226,  475 => 225,  469 => 222,  465 => 221,  459 => 219,  453 => 217,  450 => 216,  448 => 215,  444 => 213,  441 => 212,  437 => 210,  435 => 209,  429 => 206,  425 => 205,  419 => 203,  413 => 201,  410 => 200,  408 => 199,  404 => 197,  395 => 193,  391 => 192,  385 => 189,  378 => 184,  376 => 183,  372 => 181,  369 => 180,  365 => 178,  363 => 177,  357 => 174,  353 => 173,  347 => 171,  341 => 169,  338 => 168,  336 => 167,  332 => 165,  329 => 164,  325 => 162,  323 => 161,  317 => 158,  313 => 157,  307 => 155,  301 => 153,  298 => 152,  296 => 151,  292 => 149,  289 => 148,  285 => 146,  283 => 145,  277 => 142,  273 => 141,  267 => 139,  261 => 137,  258 => 136,  256 => 135,  243 => 125,  237 => 122,  221 => 109,  183 => 73,  180 => 72,  174 => 70,  171 => 69,  165 => 67,  162 => 66,  160 => 65,  152 => 59,  148 => 58,  142 => 56,  136 => 52,  132 => 50,  120 => 44,  114 => 41,  108 => 40,  105 => 39,  101 => 38,  98 => 37,  96 => 36,  75 => 17,  69 => 14,  66 => 13,  64 => 12,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--home--full.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--home--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 38);
        static $filters = array("field_value" => 12, "escape" => 14, "default" => 40, "image_style" => 139);
        static $functions = array("drupal_url" => 109, "drupal_view" => 125);

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
