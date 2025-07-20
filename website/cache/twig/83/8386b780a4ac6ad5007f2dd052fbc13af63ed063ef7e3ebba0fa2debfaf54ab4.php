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

/* partials/social.html.twig */
class __TwigTemplate_9dcc9c2d3aad3273c4a8c9453330cd0ce3eb984b4c093ecf8489946c32aa35b1 extends \Twig\Template
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
        echo "<ul class=\"social-icons\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if (($this->getAttribute($context["item"], "icon", []) != "mastodon")) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", []), "html", null, true);
                echo "\">
                    <i class=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i>
                </a>
            </li>
        ";
            } else {
                // line 10
                echo "            <li>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\" rel=\"me\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", []), "html", null, true);
                echo "\">
                    <i class=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i>
                </a>
            </li>
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>  
";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 16,  69 => 12,  61 => 11,  58 => 10,  51 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"social-icons\">
    {% for item in theme_config.social %}
        {% if item.icon != \"mastodon\" %}
            <li>
                <a href=\"{{ item.url }}\" title=\"{{ item.name }}\" target=\"{{ item.target }}\">
                    <i class=\"{{ item.icon }}\"></i>
                </a>
            </li>
        {% else %}
            <li>
                <a href=\"{{ item.url }}\" rel=\"me\" title=\"{{ item.name }}\" target=\"{{ item.target }}\">
                    <i class=\"{{ item.icon }}\"></i>
                </a>
            </li>
        {% endif %}
    {% endfor %}
</ul>  
", "partials/social.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/social.html.twig");
    }
}
