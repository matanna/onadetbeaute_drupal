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
class __TwigTemplate_205190bb6cf74205d7a1d77da66e81c2f60e910239a0336a99585bf089e92a85 extends \Twig\Template
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
      ";
        // line 22
        if (($context["logged_in"] ?? null)) {
            // line 23
            echo "      <div class=\"text-center\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.photos_prevus_pour_le_slider.page_1"));
            echo "\">Gérer les photos du slider</a></div>
      ";
        }
        // line 25
        echo "    </div>
  </div>
</section>
<div class=\"container\">
  <div class=\"presentation-link-photos node-readmore\"><a href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.toutes_les_photos.page_1"));
        echo "\">Toutes les photos</a></div>
</div>
<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"clear\">
      ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
      ";
        // line 34
        $this->loadTemplate("/modules/call_facebook/templates/facebook_posts.html.twig", "themes/custom/child_vani/templates/page--front.html.twig", 34)->display(twig_array_merge($context, ["posts" => ($context["posts"] ?? null)]));
        // line 35
        echo "  </div> ";
        // line 36
        echo "</div>";
        // line 37
        echo "

<section class=\"qui-suis-je\">

  <div class=\"container\">
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "qui_suis_je", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 45
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/child_vani/templates/page--front.html.twig", 45)->display($context);
        // line 46
        if (($context["slider_show"] ?? null)) {
            // line 47
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
        return array (  113 => 47,  111 => 46,  109 => 45,  103 => 42,  96 => 37,  94 => 36,  92 => 35,  90 => 34,  86 => 33,  79 => 29,  73 => 25,  67 => 23,  65 => 22,  61 => 21,  55 => 18,  49 => 14,  47 => 13,  45 => 12,  42 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/child_vani/templates/page--front.html.twig", "/var/www/html/onadetbeaute/themes/custom/child_vani/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 12, "if" => 22);
        static $filters = array("escape" => 18);
        static $functions = array("path" => 23, "attach_library" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['path', 'attach_library']
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
