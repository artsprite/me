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

/* partials/head/assets.html.twig */
class __TwigTemplate_c2b2f867c29b2f68788a39f30af7c1e8e737a0db7119773a7fa375511c78d804 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- PAGE STYLES -->
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
<!-- PAGE SCRIPTS -->
";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('assets', $context, $blocks);
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://assets/css/nucleus" . ($context["compress"] ?? null)), 1 => 102], "method");
        // line 4
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://assets/css/template" . ($context["compress"] ?? null)), 1 => 101], "method");
        // line 5
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/font-awesome.min.css", 1 => 100], "method");
        // line 6
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/slidebars.min.css"], "method");
        // line 7
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/slideme.min.css"], "method");
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 99], "method");
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/modernizr.custom.71422.js", 1 => ["group" => "bottom"], 2 => 100], "method");
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/delivernext.js", 1 => ["group" => "bottom"]], "method");
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/slidebars.min.js", 1 => ["group" => "bottom"]], "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.slideme2.min.js"], "method");
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", []), "enabled", [])) {
            // line 18
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery-scrolltofixed-min.js", 1 => ["group" => "bottom"]], "method");
            // line 19
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/fixed-header.js", 1 => ["group" => "bottom"]], "method");
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        if ((($context["show_onpage_menu"] ?? null) == true)) {
            // line 22
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/simple-scrollspy.min.js", 1 => ["group" => "bottom"]], "method");
            // line 23
            echo "    ";
        }
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 26
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/head/assets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  122 => 27,  119 => 26,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  68 => 7,  65 => 6,  62 => 5,  59 => 4,  56 => 3,  53 => 2,  48 => 26,  45 => 25,  43 => 11,  39 => 9,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- PAGE STYLES -->
{% block stylesheets %}
    {% do assets.addCss('theme://assets/css/nucleus' ~ compress,102) %}
    {% do assets.addCss('theme://assets/css/template' ~ compress,101) %}
    {% do assets.addCss('theme://assets/css/font-awesome.min.css',100) %}
    {% do assets.addCss('theme://assets/css/slidebars.min.css') %}
    {% do assets.addCss('theme://assets/css/slideme.min.css') %}
{% endblock %}

<!-- PAGE SCRIPTS -->
{% block javascripts %}
    {% do assets.add('jquery', 99) %}
    {% do assets.addJs('theme://assets/js/modernizr.custom.71422.js', {group:'bottom'},100) %}
    {% do assets.addJs('theme://assets/js/delivernext.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://assets/js/slidebars.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://assets/js/jquery.slideme2.min.js') %}
    {% if theme_config.sticky_menu.enabled %}
        {% do assets.addJs('theme://assets/js/jquery-scrolltofixed-min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://assets/js/fixed-header.js', {group:'bottom'}) %}
    {% endif %}
    {% if show_onpage_menu == true %}
        {% do assets.addJs('theme://assets/js/simple-scrollspy.min.js', {group:'bottom'}) %}
    {% endif %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
", "partials/head/assets.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/head/assets.html.twig");
    }
    private $deferred;
}
