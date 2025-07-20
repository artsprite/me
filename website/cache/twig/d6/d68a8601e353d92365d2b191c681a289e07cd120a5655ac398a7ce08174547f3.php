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

/* modular_alt.html.twig */
class __TwigTemplate_6b01c24021d0b017b9e4eac8b9bd025d307b96d6b85395f4bd7435f05df6a0be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular_alt.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        if (((($context["title_choice"] ?? null) == "image") && ($context["show_featured_image"] ?? null))) {
            // line 7
            echo "    <div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo twig_escape_filter($this->env, ($context["title_bg_color"] ?? null), "html", null, true);
            echo " url(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["featured_image"] ?? null), "url", []), "html", null, true);
            echo ") no-repeat right;\">
";
        } else {
            // line 9
            echo "    <div class=\"flush-top blog-header\" style=\"background-color: ";
            echo twig_escape_filter($this->env, ($context["title_bg_color"] ?? null), "html", null, true);
            echo ";\">
";
        }
        // line 11
        echo "    <h1 style=\"color: ";
        echo twig_escape_filter($this->env, ($context["title_text_color"] ?? null), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
    </div>
    ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 15
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
            echo "\"></div>
        ";
            // line 16
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]), "html", null, true);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 3,  79 => 16,  74 => 15,  70 => 14,  66 => 13,  58 => 11,  52 => 9,  44 => 7,  42 => 6,  39 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block content %}
{% if title_choice == 'image' and show_featured_image %}
    <div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ title_bg_color }} url({{ featured_image.url }}) no-repeat right;\">
{% else %}
    <div class=\"flush-top blog-header\" style=\"background-color: {{ title_bg_color }};\">
{% endif %}
    <h1 style=\"color: {{ title_text_color }}\">{{ page.title|raw }}</h1>
    </div>
    {{ page.content|raw }}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular_alt.html.twig", "/home/me/website/user/themes/delivernext/templates/modular_alt.html.twig");
    }
}
