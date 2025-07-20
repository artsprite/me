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

/* partials/head/favicon.html.twig */
class __TwigTemplate_c964438fe8c60365147101828e982c7b8cd88c6c1c38c8ec8d4e495f22abe354 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["favicon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "favicon");
        // line 3
        echo "
";
        // line 5
        $context["default_favicon"] = "favicon.png";
        // line 6
        echo "
";
        // line 7
        if (($context["favicon"] ?? null)) {
            // line 8
            echo "    ";
            $context["favicon_file"] = $this->getAttribute(twig_first($this->env, ($context["favicon"] ?? null)), "name", []);
            // line 9
            echo "    <link rel=\"icon\" type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? null), "type", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/" . ($context["favicon_file"] ?? null))), "html", null, true);
            echo "\" />
";
        } else {
            // line 11
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/" . ($context["default_favicon"] ?? null))), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "partials/head/favicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  45 => 9,  42 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Favicon = favicon_file_url #}
{% set favicon = theme_var('favicon') %}

{# Default Favicon #}
{% set default_favicon = 'favicon.png' %}

{% if favicon %}
    {% set favicon_file = (favicon|first).name %}
    <link rel=\"icon\" type=\"{{ favicon.type }}\" href=\"{{ url('theme://images/' ~ favicon_file) }}\" />
{% else %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/' ~ default_favicon) }}\" />
{% endif %}", "partials/head/favicon.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/head/favicon.html.twig");
    }
}
