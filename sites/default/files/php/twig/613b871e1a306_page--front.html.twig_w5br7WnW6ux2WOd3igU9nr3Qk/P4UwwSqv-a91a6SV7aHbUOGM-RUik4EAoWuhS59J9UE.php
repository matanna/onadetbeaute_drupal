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
<div class=\"container\">
  <div class=\"presentation-link-photos node-readmore\"><a href=\"/photos\">Toutes les photos</a></div>
</div>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 27
        $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 27)->display($context);
        // line 28
        echo "  <div class=\"container clear\">
    ";
        // line 29
        if (($context["front_sidebar"] ?? null)) {
            // line 30
            echo "      <div class=\"main-container\">
    ";
        }
        // line 32
        echo "    <main id=\"main\" class=\"page-content home-content clear\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 34
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 34)->display($context);
        // line 35
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
      ";
        // line 37
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 37)->display($context);
        // line 38
        echo "    </main>
    ";
        // line 39
        if (($context["front_sidebar"] ?? null)) {
            // line 40
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 40)->display($context);
            // line 41
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 41)->display($context);
            // line 42
            echo "      </div> ";
            // line 43
            echo "    ";
        }
        // line 44
        echo "  </div> ";
        // line 45
        echo "</div>";
        // line 46
        echo "<section class=\"qui-suis-je\">
  <div class=\"container\">
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "qui_suis_je", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 51
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 51)->display($context);
        // line 52
        if (($context["slider_show"] ?? null)) {
            // line 53
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
        return array (  127 => 53,  125 => 52,  123 => 51,  117 => 48,  113 => 46,  111 => 45,  109 => 44,  106 => 43,  104 => 42,  101 => 41,  98 => 40,  96 => 39,  93 => 38,  90 => 37,  85 => 35,  82 => 34,  79 => 32,  75 => 30,  73 => 29,  70 => 28,  68 => 27,  57 => 19,  51 => 16,  46 => 13,  44 => 12,  42 => 11,);
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
<div class=\"container\">
  <div class=\"presentation-link-photos node-readmore\"><a href=\"/photos\">Toutes les photos</a></div>
</div>
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
<section class=\"qui-suis-je\">
  <div class=\"container\">
    {{ page.qui_suis_je}}
  </div>
</section>
{% include '@vani/template-parts/footer.html.twig' %}
{% if slider_show %}
  {{ attach_library('vani/slider') }}
{% endif %}
", "themes/custom/child_vani/templates/page--front.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 29);
        static $filters = array("escape" => 16);
        static $functions = array("attach_library" => 53);

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
