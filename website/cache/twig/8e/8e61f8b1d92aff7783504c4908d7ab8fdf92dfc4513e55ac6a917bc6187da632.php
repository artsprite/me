<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_b65b843047ae6d26ae2ae7c577fb38f2e60148340485b2cf3b374e3e51eb5b95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["version"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "getBlueprint", [], "method"), "get", [0 => "version"], "method");
        // line 2
        echo "<!--
    DeliverNext Theme for Grav

    Fork from Deliver Grav theme by Pedro Moreno <https://github.com/pmoreno-rodriguez>
    https://github.com/pmoreno-rodriguez/grav-theme-delivernext
    
    ";
        // line 8
        if (($context["version"] ?? null)) {
            // line 9
            echo "        Grav theme version: v";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo " 
-->

";
        // line 14
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 15
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 16
        $context["logo_enabled"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_logo_enabled"), false);
        // line 17
        echo "
";
        // line 19
        $context["canonical_url"] = $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        // line 20
        echo "
";
        // line 22
        $context["show_title"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_title"), true);
        // line 23
        $context["page_title"] = $this->getAttribute(($context["page"] ?? null), "title", []);
        // line 24
        $context["title_text_color"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "title_text_color"), "#ffffff");
        // line 25
        $context["title_bg_color"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "title_bg_color"), "#b4b093");
        // line 26
        $context["title_choice"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "title_bg_choice"), "color");
        // line 27
        $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        // line 28
        $context["meta_title"] = ((array_key_exists("page_title", $context)) ? (((twig_escape_filter($this->env, ($context["page_title"] ?? null)) . " | ") . ($context["site_title"] ?? null))) : (($context["site_title"] ?? null)));
        // line 29
        echo "
";
        // line 31
        if ( !$this->getAttribute(($context["page"] ?? null), "home", [], "method")) {
            // line 32
            echo "    ";
            $context["meta_description"] = twig_escape_filter($this->env, strip_tags(twig_trim_filter($this->getAttribute(($context["page"] ?? null), "summary", []))), "html_attr");
        } elseif ($this->getAttribute($this->getAttribute(        // line 33
($context["site"] ?? null), "metadata", []), "description", [])) {
            // line 34
            echo "    ";
            $context["meta_description"] = $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
        } else {
            // line 36
            echo "    ";
            $context["meta_description"] = ($context["site_title"] ?? null);
        }
        // line 38
        echo "
";
        // line 40
        $context["show_featured_image"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_featured_image"), false);
        // line 41
        $context["featured_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["header"] ?? null), "featured_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["header"] ?? null), "featured_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 42
        $context["big_header"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "big_header"), true);
        // line 43
        echo "
";
        // line 45
        $context["social"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "social_enabled"), false);
        // line 46
        echo "
";
        // line 48
        $context["lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 49
        echo "
";
        // line 51
        $context["show_onpage_menu"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "onpage_menu"), false);
        // line 52
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\">
   
";
        // line 56
        $this->displayBlock('head', $context, $blocks);
        // line 59
        echo "
<body id=\"top\" ";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", [])) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
            echo "\"";
        }
        echo ">
    <div id=\"sb-site\">
        ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('showcase', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->loadTemplate("partials/page/backtotop.html.twig", "partials/base.html.twig", 90)->display($context);
        // line 91
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
            ";
        // line 95
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 95)->display($context);
        // line 96
        echo "        </div>
    </div>
    ";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 111
        echo "</body>

</html>";
    }

    // line 56
    public function block_head($context, array $blocks = [])
    {
        // line 57
        echo "    ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 57)->display($context);
    }

    // line 62
    public function block_header($context, array $blocks = [])
    {
        // line 63
        echo "        <header id=\"header\">
            ";
        // line 64
        if (($context["logo_enabled"] ?? null)) {
            // line 65
            echo "                ";
            $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 65)->display($context);
            // line 66
            echo "            ";
        }
        // line 67
        echo "            <div id=\"navbar\">
                ";
        // line 68
        $this->displayBlock('header_extra', $context, $blocks);
        // line 69
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 72
        echo "                ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 68
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 69
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 70
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "                ";
    }

    // line 78
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        // line 81
        echo "            <section id=\"body\" ";
        if (($context["bodyclass"] ?? null)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["bodyclass"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo ">
                ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "            </section>
        ";
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        // line 87
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 87)->display($context);
        // line 88
        echo "        ";
    }

    // line 98
    public function block_bottom($context, array $blocks = [])
    {
        // line 99
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        <script>
            \$(function () {
                \$(document).ready(function () {
                    \$.slidebars({
                        hideControlClasses: true,
                        scrollLock: true
                    });
                });
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 99,  291 => 98,  287 => 88,  284 => 87,  281 => 86,  276 => 82,  271 => 83,  269 => 82,  260 => 81,  257 => 80,  252 => 78,  248 => 71,  245 => 70,  242 => 69,  237 => 68,  230 => 73,  227 => 72,  224 => 69,  222 => 68,  219 => 67,  216 => 66,  213 => 65,  211 => 64,  208 => 63,  205 => 62,  200 => 57,  197 => 56,  191 => 111,  189 => 98,  185 => 96,  183 => 95,  177 => 91,  175 => 90,  172 => 89,  170 => 86,  167 => 85,  165 => 80,  162 => 79,  160 => 78,  157 => 77,  155 => 62,  146 => 60,  143 => 59,  141 => 56,  136 => 54,  132 => 52,  130 => 51,  127 => 49,  125 => 48,  122 => 46,  120 => 45,  117 => 43,  115 => 42,  113 => 41,  111 => 40,  108 => 38,  104 => 36,  100 => 34,  98 => 33,  95 => 32,  93 => 31,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  73 => 20,  71 => 19,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  57 => 10,  51 => 9,  49 => 8,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set version = (grav.theme.getBlueprint()).get('version') %}
<!--
    DeliverNext Theme for Grav

    Fork from Deliver Grav theme by Pedro Moreno <https://github.com/pmoreno-rodriguez>
    https://github.com/pmoreno-rodriguez/grav-theme-delivernext
    
    {% if version %}
        Grav theme version: v{{ version }}
    {% endif %} 
-->

{# SET THEME OPTIONS #}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% set logo_enabled = theme_var('theme_logo_enabled')|defined(false) %}

{# Canonical URL #}
{% set canonical_url = page.url(true, true) %}

{# Tile settings #}
{% set show_title = header_var('show_title')|defined(true) %}
{% set page_title = page.title %}
{% set title_text_color = header_var('title_text_color')|defined('#ffffff') %}
{% set title_bg_color = header_var('title_bg_color')|defined('#b4b093') %}
{% set title_choice = header_var('title_bg_choice')|defined('color') %}
{% set site_title = site.title|e('html') %}
{% set meta_title = page_title is defined ? page_title|e ~ ' | ' ~ site_title : site_title %}

{# Description #}
{% if not page.home() %}
    {% set meta_description = page.summary|trim|striptags|raw|e('html_attr') %}
{% elseif site.metadata.description %}
    {% set meta_description = site.metadata.description %}
{% else %}
    {% set meta_description = site_title %}
{% endif %}

{# Featured Image #}
{% set show_featured_image = header_var('show_featured_image')|defined(false) %}
{% set featured_image = page.media[header.featured_image] ?: page.media.images|first %}
{% set big_header = header_var('big_header')|defined(true) %}

{# Social Media #}
{% set social = theme_var('social_enabled')|defined(false) %}

{# SET DEFAULT GRAV LANGUAGE #}
{% set lang = grav.language.getActive ?: grav.config.site.default_lang %}

{# SET ONEPAGE_MENU #}
{% set show_onpage_menu = header_var('onpage_menu')|defined(false) %}

<!DOCTYPE html>
<html lang=\"{{ lang }}\">
   
{% block head %}
    {% include 'partials/head.html.twig' %}
{% endblock %}

<body id=\"top\" {% if page.header.body_classes %}class=\"{{ page.header.body_classes }}\"{% endif %}>
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
            {% if logo_enabled %}
                {% include 'partials/logo.html.twig' %}
            {% endif %}
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                {% include 'partials/search.html.twig' %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
            <section id=\"body\" {% if bodyclass %}class=\"{{ bodyclass }}\" {% endif %}>
                {% block content %}{% endblock %}
            </section>
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% include 'partials/page/backtotop.html.twig' %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
        {{ assets.js('bottom')|raw }}
        <script>
            \$(function () {
                \$(document).ready(function () {
                    \$.slidebars({
                        hideControlClasses: true,
                        scrollLock: true
                    });
                });
            });
        </script>
    {% endblock %}
</body>

</html>", "partials/base.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/base.html.twig");
    }
}
