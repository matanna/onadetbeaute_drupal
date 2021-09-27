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

/* themes/custom/child_vani/templates/page.html.twig */
class __TwigTemplate_d55840313128b625c204d9fa37bcc56df5ef546af70b2a1d721aeaa9bd80b39b extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/child_vani/templates/page.html.twig"));

        // line 52
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/custom/child_vani/templates/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/custom/child_vani/templates/page.html.twig", 53)->display($context);
        // line 54
        echo "<div class=\"clear custom-container block-menu-photos\"> 
  <div id=\"menu-photos\">
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_photos", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
  </div>
</div>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"clear custom-container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 64
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/custom/child_vani/templates/page.html.twig", 64)->display($context);
        // line 65
        echo "      <div class=\"node-content\">
        ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 68
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/custom/child_vani/templates/page.html.twig", 68)->display($context);
        // line 69
        echo "    </main>
    ";
        // line 70
        $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/custom/child_vani/templates/page.html.twig", 70)->display($context);
        // line 71
        echo "    ";
        $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/custom/child_vani/templates/page.html.twig", 71)->display($context);
        // line 72
        echo "  </div> ";
        // line 73
        echo "  </div> ";
        // line 74
        echo "</div>";
        // line 75
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/child_vani/templates/page.html.twig", 75)->display($context);
        // line 76
        echo "<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0&appId=816116955749559&autoLogAppEvents=1\" nonce=\"C6uRDoSx\"></script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/child_vani/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 76,  87 => 75,  85 => 74,  83 => 73,  81 => 72,  78 => 71,  76 => 70,  73 => 69,  71 => 68,  66 => 66,  63 => 65,  60 => 64,  50 => 56,  46 => 54,  44 => 53,  42 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/child_vani/templates/page.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
