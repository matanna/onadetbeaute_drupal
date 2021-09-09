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

/* themes/custom/child_vani/templates/page--front.html.twig */
class __TwigTemplate_26a8909f11618bc436ef359e8d1c631a39bda6bd24c2695452f227bba567a603 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/child_vani/templates/page--front.html.twig"));

        // line 11
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header.html.twig"), "themes/custom/child_vani/templates/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<section class=\"presentation-activity\">
  <div class=\"container\">
    <div class=\"presentation-text\">
      ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "presentation", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"presentation-slider-photos\">
      ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider_photos", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</section>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 24
        $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 24)->display($context);
        // line 25
        echo "  <div class=\"container clear\">
    ";
        // line 26
        if (($context["front_sidebar"] ?? null)) {
            // line 27
            echo "      <div class=\"main-container\">
    ";
        }
        // line 29
        echo "    <main id=\"main\" class=\"page-content home-content clear\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 31
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
      ";
        // line 34
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 34)->display($context);
        // line 35
        echo "    </main>
    ";
        // line 36
        if (($context["front_sidebar"] ?? null)) {
            // line 37
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 37)->display($context);
            // line 38
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 38)->display($context);
            // line 39
            echo "      </div> ";
            // line 40
            echo "    ";
        }
        // line 41
        echo "  </div> ";
        // line 42
        echo "</div>";
        // line 43
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 43)->display($context);
        // line 44
        if (($context["slider_show"] ?? null)) {
            // line 45
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            echo "
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/child_vani/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  112 => 44,  110 => 43,  108 => 42,  106 => 41,  103 => 40,  101 => 39,  98 => 38,  95 => 37,  93 => 36,  90 => 35,  87 => 34,  82 => 32,  79 => 31,  76 => 29,  72 => 27,  70 => 26,  67 => 25,  65 => 24,  57 => 19,  51 => 16,  46 => 13,  44 => 12,  42 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *Theme implementation to display front page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template.
 *
 */
#}
{% include directory ~ '/templates/header.html.twig' %}
{% include '@vani/template-parts/highlighted.html.twig' %}
<section class=\"presentation-activity\">
  <div class=\"container\">
    <div class=\"presentation-text\">
      {{ page.presentation }}
    </div>
    <div class=\"presentation-slider-photos\">
      {{ page.slider_photos }}
    </div>
  </div>
</section>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  {% include '@vani/template-parts/content_home.html.twig' %}
  <div class=\"container clear\">
    {% if front_sidebar %}
      <div class=\"main-container\">
    {% endif %}
    <main id=\"main\" class=\"page-content home-content clear\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      {% include '@vani/template-parts/content_top.html.twig' %}
      {{ page.content }}
      {# {% include '@vani/template-parts/content_home.html.twig' %} #}
      {% include '@vani/template-parts/content_bottom.html.twig' %}
    </main>
    {% if front_sidebar %}
      {% include '@vani/template-parts/sidebar_left.html.twig' %}
      {% include '@vani/template-parts/sidebar_right.html.twig' %}
      </div> {# /.main-container #}
    {% endif %}
  </div> {# /.container #}
</div>{# /main-wrapper #}
{% include '@vani/template-parts/footer.html.twig' %}
{% if slider_show %}
  {{ attach_library('vani/slider') }}
{% endif %}
", "themes/custom/child_vani/templates/page--front.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 26);
        static $filters = array("escape" => 16);
        static $functions = array("attach_library" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
