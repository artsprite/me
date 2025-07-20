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

/* partials/navigation.html.twig */
class __TwigTemplate_2a5150d060164109198c15d8dbe6d2fefe7f8b3579756b14e71cd8fa12b40eb2 extends \Twig\Template
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
        // line 1
        $context["nav_macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul class=\"navigation\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 5
            echo "        ";
            echo $context["nav_macros"]->getnav_loop(($context["pages"] ?? null));
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 8
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", [])) {
                    // line 9
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 10
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\">
                        ";
                    // line 12
                    if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 13
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                }
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
        }
        // line 19
        echo "    
    ";
        // line 20
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenus.enabled")) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 22
                echo "        <li>
            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "target", []), "html", null, true);
                echo "\">
            ";
                // line 24
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 25
                    echo "                <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>
            ";
                }
                // line 27
                echo "            ";
                echo $this->getAttribute($context["mitem"], "text", []);
                echo "
            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        // line 32
        echo "</ul>           ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  125 => 31,  114 => 27,  108 => 25,  106 => 24,  100 => 23,  97 => 22,  92 => 21,  90 => 20,  87 => 19,  84 => 18,  78 => 17,  70 => 13,  64 => 12,  60 => 11,  55 => 10,  52 => 9,  49 => 8,  44 => 7,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as nav_macros %}

<ul class=\"navigation\">
    {% if theme_config.dropdown.enabled %}
        {{ nav_macros.nav_loop(pages) }}
    {% else %}
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
    {% endif %}
    
    {% if theme_var('custommenus.enabled') %}
        {% for mitem in theme_var('custommenu') %}
        <li>
            <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
            {% if mitem.icon %}
                <i class=\"fa fa-{{ mitem.icon }}\"></i>
            {% endif %}
            {{ mitem.text|raw }}
            </a>
        </li>
        {% endfor %}
    {% endif %}
</ul>           ", "partials/navigation.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/navigation.html.twig");
    }
}
