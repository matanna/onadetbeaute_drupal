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
        echo "
";
        // line 12
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header.html.twig"), "themes/custom/child_vani/templates/page--front.html.twig", 12)->display($context);
        // line 13
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 13)->display($context);
        // line 14
        echo "
<section class=\"presentation-activity\">
  <div class=\"container\">
    <div class=\"presentation-text\">
      ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "presentation", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"presentation-slider-photos\">
      ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider_photos", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</section>
<div class=\"container\">
  <div class=\"presentation-link-photos node-readmore\"><a href=\"/photos\">Toutes les photos</a></div>
</div>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"clear\">
      ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
      ";
        // line 31
        $this->loadTemplate("/modules/call_facebook/templates/facebook_posts.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 31)->display(twig_array_merge($context, ["posts" => ($context["posts"] ?? null)]));
        // line 32
        echo "  </div> ";
        // line 33
        echo "</div>";
        // line 34
        echo "

<section class=\"qui-suis-je\">
  <div class=\"container\">
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "qui_suis_je", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 41
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/child_vani/templates/page--front.html.twig", 41)->display($context);
        // line 42
        if (($context["slider_show"] ?? null)) {
            // line 43
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            echo "
";
        }
        // line 45
        echo "

";
        
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
        return array (  105 => 45,  99 => 43,  97 => 42,  95 => 41,  89 => 38,  83 => 34,  81 => 33,  79 => 32,  77 => 31,  73 => 30,  61 => 21,  55 => 18,  49 => 14,  47 => 13,  45 => 12,  42 => 11,);
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
  <div class=\"clear\">
      {{ page.content }}
      {% include '/modules/call_facebook/templates/facebook_posts.html.twig' with {'posts': posts } %}
  </div> {# /.container #}
</div>{# /main-wrapper #}


<section class=\"qui-suis-je\">
  <div class=\"container\">
    {{ page.qui_suis_je}}
  </div>
</section>
{% include directory ~ '/templates/footer.html.twig' %}
{% if slider_show %}
  {{ attach_library('vani/slider') }}
{% endif %}


", "themes/custom/child_vani/templates/page--front.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 12, "if" => 42);
        static $filters = array("escape" => 18);
        static $functions = array("attach_library" => 43);

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
