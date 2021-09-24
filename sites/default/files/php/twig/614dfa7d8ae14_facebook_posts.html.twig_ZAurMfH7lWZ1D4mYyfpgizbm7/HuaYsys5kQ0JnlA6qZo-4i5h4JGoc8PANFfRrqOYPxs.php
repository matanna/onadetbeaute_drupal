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

/* /modules/call_facebook/templates/facebook_posts.html.twig */
class __TwigTemplate_10251e821d0a3876260a090bbd30d3cb37230893b6867235b301309ce6d4075c extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/modules/call_facebook/templates/facebook_posts.html.twig"));

        // line 1
        echo "
<section id=\"social_posts\">
    <div class=\"container\">
       <div class=\"block-section\"> 
            <span class=\"field-content block-title social_posts_title bold-word\">Mes derniers posts</span>
            
            ";
        // line 7
        if (($context["logged_in"] ?? null)) {
            // line 8
            echo "            <a href='https://www.facebook.com/v6.0/dialog/oauth?client_id=816116955749559&redirect_uri=https%3A%2F%2Flocalhost%2Fonadetbeaute%2F&state=987654321'>Connecter le site à facebook</a>
            ";
        }
        // line 10
        echo "        </div>
    </div>

    <div class=\"bloc-iframes\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "data", [], "any", false, false, true, 14), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "        ";
            $context["id"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 15), 15, $this->source), "_")) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null);
            // line 16
            echo "        <div class=\"posts-iframe\">
            <iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FONadetBeaute%2Fposts%2F";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 17, $this->source), "html", null, true);
            echo "&show_text=true\" scrolling=\"yes\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"footer-social-icons\">
        ";
        // line 22
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/social-icons.html.twig"), "/modules/call_facebook/templates/facebook_posts.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
</section>


";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "/modules/call_facebook/templates/facebook_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  85 => 22,  81 => 20,  72 => 17,  69 => 16,  66 => 15,  62 => 14,  56 => 10,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section id=\"social_posts\">
    <div class=\"container\">
       <div class=\"block-section\"> 
            <span class=\"field-content block-title social_posts_title bold-word\">Mes derniers posts</span>
            
            {% if logged_in %}
            <a href='https://www.facebook.com/v6.0/dialog/oauth?client_id=816116955749559&redirect_uri=https%3A%2F%2Flocalhost%2Fonadetbeaute%2F&state=987654321'>Connecter le site à facebook</a>
            {% endif %}
        </div>
    </div>

    <div class=\"bloc-iframes\">
    {% for post in posts.data|slice(0, 10) %}
        {% set id = (post.id|split('_'))[1] %}
        <div class=\"posts-iframe\">
            <iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FONadetBeaute%2Fposts%2F{{ id }}&show_text=true\" scrolling=\"yes\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>
        </div>
    {% endfor %}
    </div>
    <div class=\"footer-social-icons\">
        {% include directory ~ '/templates/social-icons.html.twig' %}
    </div>
</section>


", "/modules/call_facebook/templates/facebook_posts.html.twig", "/var/www/html/onadetbeaute/modules/call_facebook/templates/facebook_posts.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "for" => 14, "set" => 15, "include" => 22);
        static $filters = array("slice" => 14, "split" => 15, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include'],
                ['slice', 'split', 'escape'],
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
