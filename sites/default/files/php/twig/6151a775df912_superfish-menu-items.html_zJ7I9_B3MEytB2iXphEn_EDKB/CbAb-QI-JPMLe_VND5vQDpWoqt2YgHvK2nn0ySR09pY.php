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

/* modules/superfish/templates/superfish-menu-items.html.twig */
class __TwigTemplate_7e04a3f33bb0eaad87e4d134d9c6d78c5343f2ef9f23156cc1b94ec5618307ad extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/superfish/templates/superfish-menu-items.html.twig"));

        // line 21
        echo "
";
        // line 22
        $context["classes"] = [];
        // line 23
        ob_start(function () { return ''; });
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "
  ";
            // line 26
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 26))) {
                // line 27
                echo "    ";
                $context["item_class"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 27), 27, $this->source) . " menuparent");
                // line 28
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 28)) {
                    // line 29
                    echo "      ";
                    $context["item_class"] = ($this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 29, $this->source) . " sf-multicolumn-column");
                    // line 30
                    echo "    ";
                }
                // line 31
                echo "  ";
            }
            // line 32
            echo "
  <li";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 34)) {
                // line 35
                echo "    <div class=\"sf-multicolumn-column\">
    ";
            }
            // line 37
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 37))) {
                // line 38
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link_menuparent", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 40
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 42
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 42)) {
                echo "<ul class=\"sf-multicolumn\">
    <li class=\"sf-multicolumn-wrapper ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 45
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 45))) {
                // line 46
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 46)) {
                    echo "<ol>";
                } else {
                    echo "<ul>";
                }
                // line 47
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "
      ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 48)) {
                    echo "</ol>";
                } else {
                    echo "</ul>";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 50)) {
                echo "</li></ul>";
            }
            // line 51
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 51)) {
                echo "</div>";
            }
            // line 52
            echo "  </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/superfish/templates/superfish-menu-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  140 => 51,  135 => 50,  132 => 49,  126 => 48,  121 => 47,  114 => 46,  111 => 45,  106 => 43,  101 => 42,  95 => 40,  89 => 38,  86 => 37,  82 => 35,  80 => 34,  76 => 33,  73 => 32,  70 => 31,  67 => 30,  64 => 29,  61 => 28,  58 => 27,  56 => 26,  53 => 25,  49 => 24,  47 => 23,  45 => 22,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/superfish/templates/superfish-menu-items.html.twig", "/var/www/html/onadetbeaute/modules/superfish/templates/superfish-menu-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "spaceless" => 23, "for" => 24, "if" => 26);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'for', 'if'],
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
