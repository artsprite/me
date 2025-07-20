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

/* partials/logo.html.twig */
class __TwigTemplate_3d79c9136420293ed2ae381b70bcb77cdfb5de8f3e6e9d18de1327c57f263897 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'social' => [$this, 'block_social'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["logo"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_logo_mobile")) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_logo_mobile")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_logo")));
        // line 2
        $context["logoImageHeader"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_logo_header"), "text");
        // line 3
        $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
        // line 4
        echo "
<div class=\"logo\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 7
        if ((($context["logoImageHeader"] ?? null) == "image")) {
            // line 8
            echo "        ";
            if (($context["logo"] ?? null)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["site"] ?? null), "title", []);
                echo "\" />";
            }
            // line 9
            echo "    ";
        } elseif ((($context["logoImageHeader"] ?? null) == "both")) {
            // line 10
            echo "    ";
            if (($context["logo"] ?? null)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["site"] ?? null), "title", []);
                echo "\" />";
            }
            // line 11
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "</h3>
    ";
        } else {
            // line 13
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "</h3>
    ";
        }
        // line 15
        echo "    </a>
    ";
        // line 16
        if (($context["social"] ?? null)) {
            // line 17
            echo "        ";
            $this->displayBlock('social', $context, $blocks);
            // line 20
            echo "    ";
        }
        // line 21
        echo "</div>
";
    }

    // line 17
    public function block_social($context, array $blocks = [])
    {
        // line 18
        echo "            ";
        $this->loadTemplate("partials/social.html.twig", "partials/logo.html.twig", 18)->display($context);
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  99 => 18,  96 => 17,  91 => 21,  88 => 20,  85 => 17,  83 => 16,  80 => 15,  74 => 13,  68 => 11,  59 => 10,  56 => 9,  47 => 8,  45 => 7,  41 => 6,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var('theme_logo_mobile') ?: theme_var('theme_logo') %}
{% set logoImageHeader = theme_var('type_logo_header')|defined('text') %}
{% set logo_file = (logo|first).name %}

<div class=\"logo\">
    <a href=\"{{ home_url }}\">
    {% if logoImageHeader == 'image' %}
        {% if logo %}<img src=\"{{ url('theme://images/logo/' ~ logo_file) }}\" alt=\"{{ site.title|raw }}\" />{% endif %}
    {% elseif logoImageHeader == 'both' %}
    {% if logo %}<img src=\"{{ url('theme://images/logo/' ~ logo_file) }}\" alt=\"{{ site.title|raw }}\" />{% endif %}
        <h3>{{ site.title }}</h3>
    {% else %}
        <h3>{{ site.title }}</h3>
    {% endif %}
    </a>
    {% if social %}
        {% block social %}
            {% include 'partials/social.html.twig' %}
        {% endblock %}
    {% endif %}
</div>
", "partials/logo.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/logo.html.twig");
    }
}
