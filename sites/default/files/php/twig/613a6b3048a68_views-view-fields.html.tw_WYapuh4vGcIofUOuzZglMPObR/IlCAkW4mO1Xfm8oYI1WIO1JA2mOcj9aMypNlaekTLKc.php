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

/* core/themes/stable/templates/views/views-view-fields.html.twig */
class __TwigTemplate_acdd85aa596c5427055508d268a6fa19b75ea9230837d58c2887ac3e2612d8dc extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/stable/templates/views/views-view-fields.html.twig"));

        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "separator", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 34)) {
                // line 35
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_attributes", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo ">";
            }
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 37)) {
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 38)) {
                    // line 39
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                }
            }
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 44)) {
                // line 45
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_attributes", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            }
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 49)) {
                // line 50
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/views/views-view-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 50,  91 => 49,  88 => 47,  78 => 45,  76 => 44,  71 => 41,  60 => 39,  58 => 38,  56 => 37,  50 => 35,  48 => 34,  46 => 33,  42 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}
{% for field in fields -%}
  {{ field.separator }}
  {%- if field.wrapper_element -%}
    <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>
  {%- endif %}
  {%- if field.label -%}
    {%- if field.label_element -%}
      <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>
    {%- else -%}
      {{ field.label }}{{ field.label_suffix }}
    {%- endif %}
  {%- endif %}
  {%- if field.element_type -%}
    <{{ field.element_type }}{{ field.element_attributes }}>{{ field.content }}</{{ field.element_type }}>
  {%- else -%}
    {{ field.content }}
  {%- endif %}
  {%- if field.wrapper_element -%}
    </{{ field.wrapper_element }}>
  {%- endif %}
{%- endfor %}
", "core/themes/stable/templates/views/views-view-fields.html.twig", "/var/www/html/onadetbeaute/core/themes/stable/templates/views/views-view-fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 32, "if" => 34);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
