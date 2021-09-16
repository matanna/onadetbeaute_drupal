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

/* themes/custom/child_vani/templates/footer.html.twig */
class __TwigTemplate_fb460f12427b1513fe13a2a3eb44649e3c81b5164c604cfe3116ab226b5b6728 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/child_vani/templates/footer.html.twig"));

        // line 1
        echo "<!-- Start: Footer -->
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            echo "  <section id=\"footer-top\" class=\"clear\">
    <div class=\"footer-top container clear\">
      ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 8
        echo "<!-- /footer-top -->
<footer class=\"footer clear\">
  ";
        // line 10
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 10))) {
            // line 11
            echo "    <section id=\"footer-blocks\" class=\"clear\">
      <div class=\"footer-container clear\">
        <div class=\"footer-block block-section\">
          ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 14)) {
                // line 15
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 17
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block block-section\">
          ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20)) {
                // line 21
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 23
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block block-section\">
          ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 26)) {
                // line 27
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 29
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block block-section last-footer-block\">
          ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 32)) {
                // line 33
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 35
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 38
        echo " ";
        // line 39
        echo "
  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40)) {
            // line 41
            echo "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container block-section clear\">
        ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 46
        echo "<!-- /footer-bottom -->

 ";
        // line 48
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 49
            echo "  <section id=\"footer-bottom-last\" class=\"clear\">
    <div class=\"container clear\">
    <div class=\"footer-bottom-last\">
      ";
            // line 52
            if (($context["copyright_text"] ?? null)) {
                // line 53
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 54, $this->source), "html", null, true);
                echo ", All rights reserved.
          </div>
      ";
            }
            // line 57
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 58
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 59
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/social-icons.html.twig"), "themes/custom/child_vani/templates/footer.html.twig", 59)->display($context);
                // line 60
                echo "        </div>
      ";
            }
            // line 62
            echo "      </div> <!--/.social icons -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 66
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 68
        if (($context["scrolltotop_on"] ?? null)) {
            // line 69
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 71
        echo "<!-- End: Footer -->
";
        // line 72
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 75
        if (($context["font_icon_material"] ?? null)) {
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/material"), "html", null, true);
            echo "
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/child_vani/templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 76,  203 => 75,  198 => 73,  196 => 72,  193 => 71,  189 => 69,  187 => 68,  183 => 66,  176 => 62,  172 => 60,  170 => 59,  167 => 58,  164 => 57,  156 => 54,  153 => 53,  151 => 52,  146 => 49,  144 => 48,  140 => 46,  133 => 43,  129 => 41,  127 => 40,  124 => 39,  122 => 38,  116 => 35,  110 => 33,  108 => 32,  103 => 29,  97 => 27,  95 => 26,  90 => 23,  84 => 21,  82 => 20,  77 => 17,  71 => 15,  69 => 14,  64 => 11,  62 => 10,  58 => 8,  51 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Start: Footer -->
{% if page.footer_top %}
  <section id=\"footer-top\" class=\"clear\">
    <div class=\"footer-top container clear\">
      {{ page.footer_top }}
    </div>
  </section>
{% endif %}<!-- /footer-top -->
<footer class=\"footer clear\">
  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
    <section id=\"footer-blocks\" class=\"clear\">
      <div class=\"footer-container clear\">
        <div class=\"footer-block block-section\">
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div> <!--/footer-first -->

        <div class=\"footer-block block-section\">
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div> <!--/footer-second -->

        <div class=\"footer-block block-section\">
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div> <!--/footer-three -->

        <div class=\"footer-block block-section last-footer-block\">
          {% if page.footer_fourth %}
            {{ page.footer_fourth }}
          {% endif %}
        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  {% endif %} {# end if for footer one, two, three, four blocks #}

  {% if page.footer_bottom %}
    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container block-section clear\">
        {{ page.footer_bottom }}
      </div> <!-- /.container -->
    </section>
  {% endif %}<!-- /footer-bottom -->

 {% if copyright_text or all_icons_show %}
  <section id=\"footer-bottom-last\" class=\"clear\">
    <div class=\"container clear\">
    <div class=\"footer-bottom-last\">
      {% if copyright_text %}
          <div class=\"copyright\">
            &copy; {{ \"now\"|date(\"Y\") }} {{ site_name }}, All rights reserved.
          </div>
      {% endif %}
      {% if all_icons_show %}
        <div class=\"footer-social-icons\">
          {% include directory ~ '/templates/social-icons.html.twig' %}
        </div>
      {% endif %}
      </div> <!--/.social icons -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  {% endif %} <!-- end condition if copyright or social icons -->
</footer>
{% if scrolltotop_on %}
<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
{% endif %}
<!-- End: Footer -->
{% if font_icon_fontawesome %}
{{ attach_library('vani/fontawesome') }}
{% endif %}
{% if font_icon_material %}
{{ attach_library('vani/material') }}
{% endif %}
", "themes/custom/child_vani/templates/footer.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 59);
        static $filters = array("escape" => 5, "date" => 54);
        static $functions = array("attach_library" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
