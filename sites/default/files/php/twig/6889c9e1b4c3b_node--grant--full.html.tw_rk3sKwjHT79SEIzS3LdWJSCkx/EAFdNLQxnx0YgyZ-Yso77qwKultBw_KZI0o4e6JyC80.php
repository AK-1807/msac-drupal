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

/* themes/custom/msac/templates/node/node--grant--full.html.twig */
class __TwigTemplate_c51924189362e281cf1b57736b37aa3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_hero' => [$this, 'block_node_hero'],
            'node_content' => [$this, 'block_node_content'],
            'node_footer' => [$this, 'block_node_footer'],
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
        $this->parent = $this->loadTemplate("node--full.html.twig", "themes/custom/msac/templates/node/node--grant--full.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_node_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"page-content outer-pad\">
\t\t<div class=\"widget-spacing\">
\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center silc-grid--justify-right-1024 silc-grid--justify-center-1600\">
\t\t\t\t<div class=\"silc-grid__col silc-grid__col silc-grid__col--8-1024 silc-grid__col--6-1440\">
\t\t\t\t\t<div class=\"text-content\">
\t\t\t\t\t\t";
        // line 11
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_lead_in", [], "any", false, false, true, 11))) {
            // line 12
            echo "\t\t\t\t\t\t\t<h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_lead_in", [], "any", false, false, true, 12), 12, $this->source)), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"silc-grid__col silc-grid__col--10-600 silc-grid__col--8-800 silc-grid__col--4-1024\">
\t\t\t\t\t<aside class=\"aside\">
\t\t\t\t\t\t<h2 class=\"aside__heading\">Quick Resources</h2>
\t\t\t\t\t\t<div class=\"aside__content\">
\t\t\t\t\t\t\t";
        // line 21
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_application", [], "any", false, false, true, 21))) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_application", [], "any", false, false, true, 25)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_document", [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "uri", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_application", [], "any", false, false, true, 26)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#media"] ?? null) : null), "field_media_document_title", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_type", [], "any", false, false, true, 32))) {
            // line 33
            echo "\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t<h3 class=\"aside__section-heading\">For…</h3>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_type", [], "any", false, false, true, 37)));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 39, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_funding", [], "any", false, false, true, 46))) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t<h3 class=\"aside__section-heading\">Funding Amount</h3>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_funding", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grant_application_closed", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54)) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t<h3 class=\"aside__section-heading\">Application Closed</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grant_rolling_deadline", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"aside__section-heading\">Rolling Deadline</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            } elseif (($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source,             // line 63
($context["content"] ?? null), "field_grant_ql_deadline", [], "any", false, false, true, 63)) || $this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_deadline_text", [], "any", false, false, true, 63)))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"aside__section-heading\">Deadline</h3>
\t\t\t\t\t\t\t\t\t\t";
                // line 66
                if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_deadline", [], "any", false, false, true, 66))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_deadline", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_deadline_text", [], "any", false, false, true, 71))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_deadline_text", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t";
            if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_apply_link", [], "any", false, false, true, 78))) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t<div class=\"aside__section\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"button\" target=\"_blank\" href=\"";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_apply_link", [], "any", false, false, true, 81), 0, [], "any", false, false, true, 81)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 81, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_ql_apply_link", [], "any", false, false, true, 81), 0, [], "any", false, false, true, 81)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 81, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 91
        ob_start(function () { return ''; });
        // line 92
        echo "\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_accordion", [], "any", false, false, true, 92))) {
            // line 93
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_accordion", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 95
        echo "\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_resources", [], "any", false, false, true, 95))) {
            // line 96
            echo "\t\t\t<div class=\"widget-spacing\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--10-800 silc-grid__col--8-1200\">
\t\t\t\t\t\t<div class=\"editor-widget text-content\">
\t\t\t\t\t\t\t<h2>Resources</h2>
\t\t\t\t\t\t\t<ul class=\"unstyled-list\">
\t\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_resources", [], "any", false, false, true, 102)));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#media"] ?? null) : null), "field_media_document", [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "uri", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source)), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["item"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#media"] ?? null) : null), "field_media_document_title", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 115
        echo "\t\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_contacts", [], "any", false, false, true, 115))) {
            // line 116
            echo "\t\t\t<ul class=\"program-contacts\">
\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_contacts", [], "any", false, false, true, 117)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 118
                echo "\t\t\t\t\t<li class=\"program-contacts__item\">
\t\t\t\t\t\t";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 119, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t</ul>
\t\t";
        }
        // line 124
        echo "\t\t";
        $context["grant_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "\t\t";
        if ( !twig_test_empty(($context["grant_content"] ?? null))) {
            // line 126
            echo "\t\t\t<div class=\"widget-spacing\">
\t\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t\t\t<div class=\"silc-grid__col silc-grid__col--12\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["grant_content"] ?? null), 130, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 136
        echo "\t</div>
";
    }

    // line 139
    public function block_node_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "\t";
        $context["background"] = ($this->sandbox->ensureToStringAllowed(($context["assets_path"] ?? null), 140, $this->source) . "/img/individual-grant-sketch-bg.png");
        // line 141
        echo "\t";
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_background", [], "any", false, false, true, 141))) {
            // line 142
            echo "\t\t";
            $context["background"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_background", [], "any", false, false, true, 142)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 142), "entity", [], "any", false, false, true, 142), "uri", [], "any", false, false, true, 142), "value", [], "any", false, false, true, 142), 142, $this->source), "optimized"));
            // line 143
            echo "\t";
        }
        // line 144
        echo "
\t<div class=\"page-background\" role=\"presentation\" style=\"background-image:url(";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 145, $this->source), "html", null, true);
        echo ")\"></div>

\t<div class=\"footer-cta related-grants outer-pad\">
\t\t";
        // line 148
        if ($this->extensions['Drupal\twig_field_value\Twig\Extension\FieldValueExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_related_grants", [], "any", false, false, true, 148))) {
            // line 149
            echo "\t\t\t<div class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t\t<div class=\"silc-grid__col silc-grid__col--12\">
\t\t\t\t\t<h2 class=\"footer-cta__heading\">Similar Funding Opportunities</h2>
\t\t\t\t\t<ul class=\"silc-grid silc-grid--collapse silc-grid--justify-center\">
\t\t\t\t\t\t";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_grant_related_grants", [], "any", false, false, true, 153));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 154
                echo "\t\t\t\t\t\t";
                if ((twig_first($this->env, $context["key"]) != "#")) {
                    // line 155
                    echo "\t\t\t\t\t\t\t<li class=\"silc-grid__col silc-grid__col--10-550 silc-grid__col--6-1200\">
\t\t\t\t\t\t\t\t";
                    // line 156
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 156, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 164
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/node/node--grant--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 164,  386 => 160,  380 => 159,  374 => 156,  371 => 155,  368 => 154,  364 => 153,  358 => 149,  356 => 148,  350 => 145,  347 => 144,  344 => 143,  341 => 142,  338 => 141,  335 => 140,  331 => 139,  326 => 136,  317 => 130,  311 => 126,  308 => 125,  305 => 124,  301 => 122,  292 => 119,  289 => 118,  285 => 117,  282 => 116,  279 => 115,  271 => 109,  261 => 105,  257 => 104,  254 => 103,  250 => 102,  242 => 96,  239 => 95,  233 => 93,  230 => 92,  228 => 91,  221 => 86,  218 => 85,  209 => 81,  205 => 79,  202 => 78,  198 => 76,  192 => 73,  189 => 72,  186 => 71,  180 => 68,  177 => 67,  175 => 66,  171 => 64,  169 => 63,  164 => 60,  161 => 59,  155 => 55,  152 => 54,  145 => 50,  140 => 47,  137 => 46,  131 => 42,  122 => 39,  119 => 38,  115 => 37,  109 => 33,  106 => 32,  97 => 26,  93 => 25,  88 => 22,  86 => 21,  75 => 14,  69 => 12,  67 => 11,  60 => 6,  56 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/node/node--grant--full.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/node/node--grant--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 37, "set" => 91);
        static $filters = array("field_value" => 11, "escape" => 12, "image_style" => 142, "first" => 154);
        static $functions = array("file_url" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['field_value', 'escape', 'image_style', 'first'],
                ['file_url']
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
