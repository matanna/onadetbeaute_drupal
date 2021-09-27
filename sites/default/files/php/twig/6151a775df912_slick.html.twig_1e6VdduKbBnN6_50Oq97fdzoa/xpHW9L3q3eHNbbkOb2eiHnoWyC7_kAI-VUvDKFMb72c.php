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

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_0b4acb89273031af48a84c2f27190647ed0db04478f5d401e72646eddc54af04 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/slick/templates/slick.html.twig"));

        // line 31
        $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "unslick", [], "any", false, false, true, 32)) ? ("unslick") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,         // line 33
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 33)) ? ("slick--vertical") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["settings"] ?? null), "attributes", [], "any", false, false, true, 34), "class", [], "any", false, false, true, 34)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 34), "class", [], "any", false, false, true, 34), 34, $this->source), " ")) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 35
($context["settings"] ?? null), "skin", [], "any", false, false, true, 35)) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 35), 35, $this->source)))) : ("")), 4 => ((twig_in_filter("boxed", twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "skin", [], "any", false, false, true, 36))) ? ("slick--skin--boxed") : ("")), 5 => ((twig_in_filter("split", twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "skin", [], "any", false, false, true, 37))) ? ("slick--skin--split") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "optionset", [], "any", false, false, true, 38)) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "optionset", [], "any", false, false, true, 38), 38, $this->source)))) : ("")), 7 => ((        // line 39
array_key_exists("arrow_down_attributes", $context)) ? ("slick--has-arrow-down") : ("")), 8 => ((twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "asNavFor", [], "any", false, false, true, 40)) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null), 40, $this->source)))) : ("")), 9 => (((twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "slidesToShow", [], "any", false, false, true, 41) > 1)) ? ("slick--multiple-view") : ("")), 10 => (((twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "count", [], "any", false, false, true, 42) <= twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "slidesToShow", [], "any", false, false, true, 42))) ? ("slick--less") : ("")), 11 => ((((        // line 43
($context["display"] ?? null) == "main") && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 43))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 43), 43, $this->source)))) : ("")), 12 => ((((        // line 44
($context["display"] ?? null) == "thumbnail") && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_caption", [], "any", false, false, true, 44))) ? ("slick--has-caption") : (""))];
        // line 48
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => ((twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 50)) ? ("slick__arrow--v") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 51)) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 51), 51, $this->source)))) : (""))];
        // line 54
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo ">
  ";
        // line 55
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "unslick", [], "any", false, false, true, 55)) {
            // line 56
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        $this->displayBlock('slick_content', $context, $blocks);
        // line 62
        echo "
  ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "unslick", [], "any", false, false, true, 63)) {
            // line 64
            echo "    </div>
    ";
            // line 65
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 78
            echo "  ";
        }
        // line 79
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 59
    public function block_slick_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slick_content"));

        // line 60
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 60, $this->source), "html", null, true);
        echo "
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 65
    public function block_slick_arrow($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slick_arrow"));

        // line 66
        echo "      <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo ">
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "prevArrow", [], "any", false, false, true, 67), 67, $this->source)));
        echo "\" tabindex=\"0\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "prevArrow", [], "any", false, false, true, 67), 67, $this->source)));
        echo "</button>
        ";
        // line 68
        if (array_key_exists("arrow_down_attributes", $context)) {
            // line 69
            echo "          <button";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method", false, false, true, 69), "setAttribute", [0 => "type", 1 => "button"], "method", false, false, true, 69), "setAttribute", [0 => "data-role", 1 => "none"], "method", false, false, true, 70), "setAttribute", [0 => "data-target", 1 => twig_get_attribute($this->env, $this->source,             // line 72
($context["settings"] ?? null), "downArrowTarget", [], "any", false, false, true, 72)], "method", false, false, true, 71), "setAttribute", [0 => "data-offset", 1 => twig_get_attribute($this->env, $this->source,             // line 73
($context["settings"] ?? null), "downArrowOffset", [], "any", false, false, true, 73)], "method", false, false, true, 72), 73, $this->source), "html", null, true);
            echo "></button>
        ";
        }
        // line 75
        echo "        <button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "nextArrow", [], "any", false, false, true, 75), 75, $this->source)));
        echo "\" tabindex=\"0\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "nextArrow", [], "any", false, false, true, 75), 75, $this->source)));
        echo "</button>
      </nav>
    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 75,  142 => 73,  141 => 72,  139 => 69,  137 => 68,  131 => 67,  126 => 66,  119 => 65,  109 => 60,  102 => 59,  94 => 79,  91 => 78,  89 => 65,  86 => 64,  84 => 63,  81 => 62,  79 => 59,  76 => 58,  70 => 56,  68 => 55,  63 => 54,  61 => 51,  60 => 50,  59 => 48,  57 => 44,  56 => 43,  55 => 42,  54 => 41,  53 => 40,  52 => 39,  51 => 38,  50 => 37,  49 => 36,  48 => 35,  47 => 34,  46 => 33,  45 => 32,  44 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/slick/templates/slick.html.twig", "/var/www/html/onadetbeaute/modules/slick/templates/slick.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 55, "block" => 59);
        static $filters = array("join" => 34, "clean_class" => 35, "escape" => 54, "t" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['join', 'clean_class', 'escape', 't'],
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
