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

/* modular/features.html.twig */
class __TwigTemplate_35130a0e87236c86982c7694f6909d5b728c84d523019dc78cafc9c988e0b24d extends \Twig\Template
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
        echo "<div class=\"modular-row features ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []), "html", null, true);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "        <a ";
            if (($this->getAttribute($context["button"], "style", []) != "none")) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "style", []), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <div class=\"feature-items\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "           <div class=\"feature\">
            ";
            // line 9
            if ($this->getAttribute($context["feature"], "icon", [])) {
                // line 10
                echo "            <i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", []), "html", null, true);
                echo "\"></i>
            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 13
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", [])) {
                // line 16
                echo "            <h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "header", []), "html", null, true);
                echo "</h4>
            ";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["feature"], "text", [])) {
                // line 19
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "text", []), "html", null, true);
                echo "</p>
            <p><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "linkurl", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["feature"], "linkstyle", []) != "none")) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "linkstyle", []), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "linktext", []), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 22
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  113 => 22,  100 => 20,  95 => 19,  92 => 18,  86 => 16,  83 => 15,  79 => 13,  72 => 10,  70 => 9,  67 => 8,  63 => 7,  60 => 6,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row features {{ page.header.module_classes}}\">
    {{ content|raw }}
    {% for button in page.header.buttons %}
        <a {% if button.style != 'none' %}class=\"{{ button.style }}\"{% endif %} href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    <div class=\"feature-items\">
    {% for feature in page.header.features %}
           <div class=\"feature\">
            {% if feature.icon %}
            <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
            <div class=\"feature-content icon-offset\">
            {% else %}
            <div class=\"feature-content\">
            {% endif %}
            {% if feature.header %}
            <h4>{{ feature.header }}</h4>
            {% endif %}
            {% if feature.text %}
            <p>{{ feature.text }}</p>
            <p><a href=\"{{ feature.linkurl }}\" {% if feature.linkstyle != 'none' %}class=\"{{ feature.linkstyle }}\"{% endif %}>{{ feature.linktext }}</a></p>
            {% endif %}
            </div>
        </div>
    {% endfor %}
    </div>
</div>
", "modular/features.html.twig", "/home/me/website/user/themes/delivernext/templates/modular/features.html.twig");
    }
}
