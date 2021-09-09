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

/* core/themes/stable/templates/content/off-canvas-page-wrapper.html.twig */
class __TwigTemplate_2a6fa4ee7f39085d7f659b9b872e9e17d6dbc45508e95ab338b78adacb129a4f extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/stable/templates/content/off-canvas-page-wrapper.html.twig"));

        // line 20
        if (($context["children"] ?? null)) {
            // line 21
            echo "  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 22, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content/off-canvas-page-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 22,  44 => 21,  42 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a page wrapper.
 *
 * For consistent wrapping to {{ page }} render in all themes. The
 * \"data-off-canvas-main-canvas\" attribute is required by the off-canvas dialog.
 * This is used by the core/drupal.dialog.off_canvas library to select the
 * \"main canvas\" page element as opposed to the \"off canvas\" which is the dialog
 * itself. The \"main canvas\" element must be resized according to the width of
 * the \"off canvas\" dialog so that no portion of the \"main canvas\" is obstructed
 * by the off-canvas dialog. The off-canvas dialog can vary in width when opened
 * and can be resized by the user. The \"data-off-canvas-main-canvas\" attribute
 * cannot be removed without breaking the off-canvas dialog functionality.
 *
 * Available variables:
 * - children: Contains the child elements of the page.
 */
#}
{% if children %}
  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    {{ children }}
  </div>
{% endif %}
", "core/themes/stable/templates/content/off-canvas-page-wrapper.html.twig", "/var/www/html/onadetbeaute/core/themes/stable/templates/content/off-canvas-page-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
