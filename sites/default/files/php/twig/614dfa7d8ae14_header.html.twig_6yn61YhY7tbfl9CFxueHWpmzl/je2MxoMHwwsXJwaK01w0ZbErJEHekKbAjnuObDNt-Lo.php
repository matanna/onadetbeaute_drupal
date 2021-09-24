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

/* @vani/template-parts/header.html.twig */
class __TwigTemplate_53e28376997639f78c4c0387e5f68f04f801f06778f9de00022fefcb4b9c4b40 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@vani/template-parts/header.html.twig"));

        // line 1
        echo "<header class=\"header clear\">
  <div class=\"header-cicle header-cicle1\"></div>
  <div class=\"header-cicle header-cicle3\"></div>
  <div class=\"header-cicle header-cicle4\"></div>
  <div class=\"header-cicle header-cicle6\"></div>
  <div class=\"header-cicle header-cicle7\"></div>
  <div class=\"header-cicle header-cicle8\"></div>
  <div class=\"header-cicle header-cicle10\"></div>
  ";
        // line 9
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 10
            echo "  <div class=\"header-cicle header-cicle2\"></div>
  <div class=\"header-cicle header-cicle5\"></div>
  <div class=\"header-cicle header-cicle9\"></div>
  ";
        }
        // line 14
        echo "  <div class=\"container\">
  <div class=\"header-main\">
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16)) {
            // line 17
            echo "      <div class=\"site-brand\">
        ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 21) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 21))) {
            // line 22
            echo "      <div class=\"header-main-right\">
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 23)) {
                // line 24
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 25
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 32
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 32)) {
                // line 33
                echo "          ";
                $this->loadTemplate("@vani/template-parts/search.html.twig", "@vani/template-parts/header.html.twig", 33)->display($context);
                // line 34
                echo "        ";
            }
            // line 35
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 37
        echo "  </div><!-- /header-main -->
  </div><!-- /container -->
  ";
        // line 39
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 40
            echo "    ";
            $this->loadTemplate("@vani/template-parts/slider.html.twig", "@vani/template-parts/header.html.twig", 40)->display($context);
            // line 41
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 42
            echo "    ";
            $this->loadTemplate("@vani/template-parts/page_header.html.twig", "@vani/template-parts/header.html.twig", 42)->display($context);
            // line 43
            echo "  ";
        }
        // line 44
        echo "</header>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@vani/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  125 => 43,  122 => 42,  119 => 41,  116 => 40,  114 => 39,  110 => 37,  106 => 35,  103 => 34,  100 => 33,  97 => 32,  90 => 28,  85 => 25,  83 => 24,  81 => 23,  78 => 22,  75 => 21,  69 => 18,  66 => 17,  64 => 16,  60 => 14,  54 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header clear\">
  <div class=\"header-cicle header-cicle1\"></div>
  <div class=\"header-cicle header-cicle3\"></div>
  <div class=\"header-cicle header-cicle4\"></div>
  <div class=\"header-cicle header-cicle6\"></div>
  <div class=\"header-cicle header-cicle7\"></div>
  <div class=\"header-cicle header-cicle8\"></div>
  <div class=\"header-cicle header-cicle10\"></div>
  {% if is_front and slider_show %}
  <div class=\"header-cicle header-cicle2\"></div>
  <div class=\"header-cicle header-cicle5\"></div>
  <div class=\"header-cicle header-cicle9\"></div>
  {% endif %}
  <div class=\"container\">
  <div class=\"header-main\">
    {% if page.site_branding %}
      <div class=\"site-brand\">
        {{ page.site_branding }}
      </div> <!--/.site-branding -->
    {% endif %}
    {% if page.primary_menu or page.search_box %}
      <div class=\"header-main-right\">
        {% if page.primary_menu %}
          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> {# mobile-menu #}
          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              {{ page.primary_menu }}
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        {% endif %}
        {% if page.search_box %}
          {% include '@vani/template-parts/search.html.twig' %}
        {% endif %}
      </div> <!-- /.header-right -->
    {% endif %}
  </div><!-- /header-main -->
  </div><!-- /container -->
  {% if is_front and slider_show %}
    {% include '@vani/template-parts/slider.html.twig' %}
  {% elseif not is_front %}
    {% include '@vani/template-parts/page_header.html.twig' %}
  {% endif %}
</header>
", "@vani/template-parts/header.html.twig", "/var/www/html/onadetbeaute/themes/contrib/vani/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "include" => 33);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
