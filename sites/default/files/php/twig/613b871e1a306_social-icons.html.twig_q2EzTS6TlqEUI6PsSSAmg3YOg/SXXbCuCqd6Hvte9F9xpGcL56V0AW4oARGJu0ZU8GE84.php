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

/* @vani/template-parts/social-icons.html.twig */
class __TwigTemplate_a4739b99771ee333a7d553d14f88a47c57c945de3328a7bcbf476ccc2a5631c5 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@vani/template-parts/social-icons.html.twig"));

        // line 1
        echo "<ul class=\"social-icons\">
  ";
        // line 2
        if ((($context["facebook_url"] ?? null) != "")) {
            // line 3
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 3, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
  ";
        }
        // line 5
        echo "  ";
        if ((($context["twitter_url"] ?? null) != "")) {
            // line 6
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 6, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
  ";
        }
        // line 8
        echo "  ";
        if ((($context["instagram_url"] ?? null) != "")) {
            // line 9
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 9, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
  ";
        }
        // line 11
        echo "  ";
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 12
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 12, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
  ";
        }
        // line 14
        echo "  ";
        if ((($context["youtube_url"] ?? null) != "")) {
            // line 15
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 15, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
  ";
        }
        // line 17
        echo "  ";
        if ((($context["vimeo_url"] ?? null) != "")) {
            // line 18
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 18, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-vimeo\"></i></a></li>
  ";
        }
        // line 20
        echo "  ";
        if ((($context["telegram_url"] ?? null) != "")) {
            // line 21
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
  ";
        }
        // line 23
        echo "  ";
        if ((($context["whatsapp_url"] ?? null) != "")) {
            // line 24
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
  ";
        }
        // line 26
        echo "  ";
        if ((($context["github_url"] ?? null) != "")) {
            // line 27
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 27, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-github\"></i></a></li>
  ";
        }
        // line 29
        echo "  ";
        if ((($context["vk_url"] ?? null) != "")) {
            // line 30
            echo "    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vk_url"] ?? null), 30, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-vk\" aria-hidden=\"true\"></i></a></li>
  ";
        }
        // line 32
        echo "</ul>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@vani/template-parts/social-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  128 => 30,  125 => 29,  119 => 27,  116 => 26,  110 => 24,  107 => 23,  101 => 21,  98 => 20,  92 => 18,  89 => 17,  83 => 15,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"social-icons\">
  {% if facebook_url != '' %}
    <li><a href=\"{{ facebook_url }}\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
  {% endif %}
  {% if twitter_url != '' %}
    <li><a href=\"{{ twitter_url }}\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
  {% endif %}
  {% if instagram_url != '' %}
    <li><a href=\"{{ instagram_url }}\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
  {% endif %}
  {% if linkedin_url != '' %}
    <li><a href=\"{{ linkedin_url }}\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
  {% endif %}
  {% if youtube_url != '' %}
    <li><a href=\"{{ youtube_url }}\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
  {% endif %}
  {% if vimeo_url != '' %}
    <li><a href=\"{{ vimeo_url }}\" target=\"_blank\"><i class=\"icon-vimeo\"></i></a></li>
  {% endif %}
  {% if telegram_url != '' %}
    <li><a href=\"{{ telegram_url }}\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
  {% endif %}
  {% if whatsapp_url != '' %}
    <li><a href=\"{{ whatsapp_url }}\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
  {% endif %}
  {% if github_url != '' %}
    <li><a href=\"{{ github_url }}\" target=\"_blank\"><i class=\"icon-github\"></i></a></li>
  {% endif %}
  {% if vk_url != '' %}
    <li><a href=\"{{ vk_url }}\" target=\"_blank\"><i class=\"icon-vk\" aria-hidden=\"true\"></i></a></li>
  {% endif %}
</ul>
", "@vani/template-parts/social-icons.html.twig", "/var/www/html/onadetbeaute/themes/contrib/vani/templates/template-parts/social-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
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
