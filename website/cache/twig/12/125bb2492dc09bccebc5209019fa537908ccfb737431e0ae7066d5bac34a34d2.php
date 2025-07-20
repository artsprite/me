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

/* partials/base-root.html.twig */
class __TwigTemplate_d34289540020a0861600b06dbbe950930a78aeb2d43ad830fbe17251f814a30d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"";
            // line 3
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), "language", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "language", []), "en")) : ("en")), "html", null, true);
            echo "\">
    <head>
    ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 30
            echo "
    ";
            // line 31
            $this->displayBlock('assets', $context, $blocks);
            // line 35
            echo "
    <noscript>
        <style>
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    </head>
    ";
            // line 45
            $this->displayBlock('body', $context, $blocks);
            // line 159
            echo "    </html>
";
        }
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if (($context["title"] ?? null)) {
            echo strip_tags(($context["title"] ?? null));
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 16
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 18
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 22)->display($context);
        // line 23
        echo "        ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 27)->display($context);
        // line 28
        echo "        ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 31
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        // line 46
        echo "        ";
        $context["admin_route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "route", []);
        // line 47
        echo "        ";
        $context["is_theme_page"] = (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute(($context["uri"] ?? null), "path", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($context["admin_route"] ?? null) . "/themes/")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 48
        echo "        ";
        $context["current_theme"] = ((($context["is_theme_page"] ?? null)) ? ($this->getAttribute(twig_split_filter($this->env, twig_replace_filter($this->getAttribute(($context["uri"] ?? null), "path", []), [(($context["admin_route"] ?? null) . "/themes/") => ""]), "/"), 0, [], "array")) : (null));
        // line 49
        echo "    
        ";
        // line 50
        $context["sidebarStatus"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie("grav-admin-sidebar");
        // line 51
        echo "        ";
        $context["sidebarStatus"] = (((( !(null === ($context["sidebarStatus"] ?? null)) && (($context["sidebarStatus"] ?? null) == "false")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small"))) ? ("sidebar-closed") : (""));
        // line 52
        echo "    <body ";
        if (($context["current_theme"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["current_theme"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " class=\"ga-theme-17x ";
        echo twig_escape_filter($this->env, ($context["sidebarStatus"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 54
        if ( !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.login"])) {
            // line 55
            echo "        ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 55)->display($context);
            // line 56
            echo "    ";
        } else {
            // line 57
            echo "        ";
            $this->displayBlock('page', $context, $blocks);
            // line 151
            echo "
    ";
        }
        // line 153
        echo "
    ";
        // line 154
        $this->displayBlock('bottom', $context, $blocks);
        // line 157
        echo "    </body>
    ";
    }

    // line 57
    public function block_page($context, array $blocks = [])
    {
        // line 58
        echo "        <div class=\"remodal-bg\">

            ";
        // line 60
        $this->displayBlock('navigation', $context, $blocks);
        // line 63
        echo "
            <main id=\"admin-main\" >
                ";
        // line 65
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 65)->display($context);
        // line 66
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 67
        $this->displayBlock('titlebar', $context, $blocks);
        // line 68
        echo "                </div>

                ";
        // line 70
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 96
        echo "
                ";
        // line 97
        $this->displayBlock('modals', $context, $blocks);
        // line 146
        echo "
            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 60
    public function block_navigation($context, array $blocks = [])
    {
        // line 61
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 61)->display($context);
        // line 62
        echo "            ";
    }

    // line 67
    public function block_titlebar($context, array $blocks = [])
    {
    }

    // line 70
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 71
        echo "                <div data-simplebar class=\"content-wrapper\">
                    <div class=\"";
        // line 72
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 73
        $this->displayBlock('messages', $context, $blocks);
        // line 76
        echo "
                        ";
        // line 77
        $this->displayBlock('widgets', $context, $blocks);
        // line 78
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 79
        $this->displayBlock('content_top', $context, $blocks);
        // line 80
        echo "                            <div class=\"admin-block\">";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "</div>
                            ";
        // line 83
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 84
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 86
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 87
        echo "                        </div>
                        ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "                    </div>
                </div>
                ";
    }

    // line 73
    public function block_messages($context, array $blocks = [])
    {
        // line 74
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 74)->display($context);
        // line 75
        echo "                        ";
    }

    // line 77
    public function block_widgets($context, array $blocks = [])
    {
    }

    // line 79
    public function block_content_top($context, array $blocks = [])
    {
    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
    }

    // line 86
    public function block_content_bottom($context, array $blocks = [])
    {
    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        // line 89
        echo "                        <footer id=\"footer\">
                             ";
        // line 90
        $this->loadTemplate("partials/footer.html.twig", "partials/base-root.html.twig", 90)->display($context);
        // line 91
        echo "                        </footer>
                        ";
    }

    // line 97
    public function block_modals($context, array $blocks = [])
    {
        // line 98
        echo "                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"update-grav\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_UPDATE_GRAV_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                ";
    }

    // line 154
    public function block_bottom($context, array $blocks = [])
    {
        // line 155
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 155,  498 => 154,  489 => 141,  485 => 140,  478 => 136,  473 => 134,  464 => 128,  460 => 127,  453 => 123,  448 => 121,  439 => 115,  430 => 109,  421 => 103,  415 => 100,  411 => 98,  408 => 97,  403 => 91,  401 => 90,  398 => 89,  395 => 88,  390 => 86,  385 => 81,  380 => 79,  375 => 77,  371 => 75,  368 => 74,  365 => 73,  359 => 93,  357 => 88,  354 => 87,  351 => 86,  345 => 84,  343 => 83,  340 => 82,  338 => 81,  336 => 80,  334 => 79,  331 => 78,  329 => 77,  326 => 76,  324 => 73,  318 => 72,  315 => 71,  312 => 70,  307 => 67,  303 => 62,  300 => 61,  297 => 60,  289 => 146,  287 => 97,  284 => 96,  282 => 70,  278 => 68,  276 => 67,  273 => 66,  271 => 65,  267 => 63,  265 => 60,  261 => 58,  258 => 57,  253 => 157,  251 => 154,  248 => 153,  244 => 151,  241 => 57,  238 => 56,  235 => 55,  233 => 54,  217 => 52,  214 => 51,  212 => 50,  209 => 49,  206 => 48,  203 => 47,  200 => 46,  197 => 45,  190 => 33,  185 => 32,  182 => 31,  173 => 28,  170 => 27,  167 => 26,  163 => 23,  160 => 22,  157 => 21,  153 => 29,  150 => 26,  148 => 25,  145 => 24,  143 => 21,  137 => 19,  134 => 18,  130 => 16,  124 => 14,  121 => 13,  115 => 11,  109 => 9,  107 => 8,  94 => 7,  91 => 6,  88 => 5,  81 => 159,  79 => 45,  67 => 35,  65 => 31,  62 => 30,  60 => 5,  55 => 3,  52 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    <!DOCTYPE html>
    <html lang=\"{{ user.language|default( 'en' ) }}\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title|striptags|raw }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
        {% endblock %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

    <noscript>
        <style>
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    </head>
    {% block body %}
        {% set admin_route = config.plugins.admin.route %}
        {% set is_theme_page = uri.path starts with admin_route ~ '/themes/' %}
        {% set current_theme = is_theme_page ? uri.path|replace({(admin_route ~ '/themes/'): ''})|split('/')[0] : null %}
    
        {% set sidebarStatus = get_cookie('grav-admin-sidebar') %}
        {% set sidebarStatus = (sidebarStatus is not null and sidebarStatus == 'false') or config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' %}
    <body {% if current_theme %} id=\"{{ current_theme }}\"{% endif %} class=\"ga-theme-17x {{ sidebarStatus }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">

    {% if not authorize(['admin.login']) %}
        {% include 'partials/messages.html.twig' %}
    {% else %}
        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                {% block content_wrapper %}
                <div data-simplebar class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|t }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             {% include 'partials/footer.html.twig' %}
                        </footer>
                        {% endblock %}
                    </div>
                </div>
                {% endblock %}

                {% block modals %}
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|t }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|t }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|t }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|t }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|t }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|t }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"update-grav\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|t }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_UPDATE_GRAV_CONFIRMATION_REQUIRED_DESC\"|t }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>
                        </div>
                    </form>
                </div>
                {% endblock %}

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}

    {% endif %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "/home/me/website/user/themes/delivernext/admin/themes/grav/templates/partials/base-root.html.twig");
    }
    private $deferred;
}
