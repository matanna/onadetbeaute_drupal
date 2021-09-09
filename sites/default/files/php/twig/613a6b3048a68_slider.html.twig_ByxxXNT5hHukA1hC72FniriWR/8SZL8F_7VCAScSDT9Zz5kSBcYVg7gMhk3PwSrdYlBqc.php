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

/* themes/custom/child_vani/templates/slider.html.twig */
class __TwigTemplate_2c06c53f79d50df62c652a898780b69ed863c36f797b5d7269e4b76bd2d3d3a1 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/child_vani/templates/slider.html.twig"));

        // line 1
        echo "<section class=\"slider\">
  <div class=\"container slider-container\">
    <div class=\"slider-text\">
      <ul class=\"js-rotating\">
        ";
        // line 5
        if ((($context["slider_code"] ?? null) != "")) {
            // line 6
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 6, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            echo "
        ";
        } else {
            // line 8
            echo "        <li>
      
  \t\t\t\t<h1>Prothesiste Ongulaire <em>Nail Art</em> </h1>
  \t\t\t\t<p>Accroche pour le nail art</p>
  \t\t\t\t<a class=\"button-link\" href=\"/nail-art\">En savoir plus</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Extensions de <em>Cils</em> </h1>
  \t\t\t\t<p>Accroche pour les extensions de cils</p>
  \t\t\t\t<a class=\"button-link\" href=\"/cils\">En savoir plus</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Vente de <em>Bijoux</em> et <em>Maquillage</em></h1>
  \t\t\t\t<p>Phrase d'accroche vente de bijoux / maquillage</p>
  \t\t\t\t<a class=\"button-link\" href=\"/bijoux\">En savoir plus</a>
  \t\t\t</li>
        ";
        }
        // line 25
        echo "      </ul> <!--/.home-slider -->
    </div><!-- /slider-text -->
    <div class=\"slider-image\">
      ";
        // line 28
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 29
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image_path"] ?? null), 29, $this->source), "html", null, true);
            echo "\" alt=\"slider image\" />
      ";
        } else {
            // line 31
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source), "html", null, true);
            echo "/images/slider.svg\" alt=\"slider image\" />
      ";
        }
        // line 33
        echo "    </div><!-- /slider-image -->
  </div> <!--/.container -->
</section>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/child_vani/templates/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  80 => 28,  75 => 25,  56 => 8,  50 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slider\">
  <div class=\"container slider-container\">
    <div class=\"slider-text\">
      <ul class=\"js-rotating\">
        {% if slider_code != '' %}
          {{ slider_code | striptags('<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>') | raw }}
        {% else %}
        <li>
      
  \t\t\t\t<h1>Prothesiste Ongulaire <em>Nail Art</em> </h1>
  \t\t\t\t<p>Accroche pour le nail art</p>
  \t\t\t\t<a class=\"button-link\" href=\"/nail-art\">En savoir plus</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Extensions de <em>Cils</em> </h1>
  \t\t\t\t<p>Accroche pour les extensions de cils</p>
  \t\t\t\t<a class=\"button-link\" href=\"/cils\">En savoir plus</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Vente de <em>Bijoux</em> et <em>Maquillage</em></h1>
  \t\t\t\t<p>Phrase d'accroche vente de bijoux / maquillage</p>
  \t\t\t\t<a class=\"button-link\" href=\"/bijoux\">En savoir plus</a>
  \t\t\t</li>
        {% endif %}
      </ul> <!--/.home-slider -->
    </div><!-- /slider-text -->
    <div class=\"slider-image\">
      {% if slider_image_path != '' %}
        <img src=\"{{ slider_image_path }}\" alt=\"slider image\" />
      {% else %}
        <img src=\"{{ directory }}/images/slider.svg\" alt=\"slider image\" />
      {% endif %}
    </div><!-- /slider-image -->
  </div> <!--/.container -->
</section>
", "themes/custom/child_vani/templates/slider.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("raw" => 6, "striptags" => 6, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags', 'escape'],
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
