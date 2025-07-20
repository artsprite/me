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

/* modular/team.html.twig */
class __TwigTemplate_66ac096b971c5178001b1580152f6546a149062ddfa53409fc0b8ff85a71d5ff extends \Twig\Template
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
        echo "<div class=\"modular-row team ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []), "html", null, true);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "members", [])) {
            // line 5
            echo "    <div class=\"members\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "members", []));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 7
                echo "        <div class=\"member\">
            <img src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["member"], "image", []), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"\">
            <h4>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", []), "html", null, true);
                echo "</h4>
            <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "title", []), "html", null, true);
                echo "</span>
            <hr>
            <p>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "info", []), "html", null, true);
                echo "</p>
            <ul class=\"social-icons\">
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["member"], "social_media", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "                <li>
                    <a target=\"_blank\" 
                    href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                    echo "\" 
                    alt=\"";
                    // line 18
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "\" 
                    title=\"";
                    // line 19
                    echo twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "name", []));
                    echo "\">
                    <i class=\"fa fa-";
                    // line 20
                    echo twig_lower_filter($this->env, $this->getAttribute($context["item"], "name", []));
                    echo "\"></i>
                    </a>
                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </ul>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
    <div class=\"callout-line\"></div>
    ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  108 => 27,  100 => 24,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 15,  70 => 14,  65 => 12,  60 => 10,  56 => 9,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  40 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row team {{ page.header.module_classes }}\">
    {{ content|raw }}

    {% if page.header.members %}
    <div class=\"members\">
        {% for member in page.header.members %}
        <div class=\"member\">
            <img src=\"{{page.media[member.image].url}}\" alt=\"\">
            <h4>{{ member.name }}</h4>
            <span>{{ member.title }}</span>
            <hr>
            <p>{{ member.info }}</p>
            <ul class=\"social-icons\">
                {% for item in member.social_media %}
                <li>
                    <a target=\"_blank\" 
                    href=\"{{ item.url }}\" 
                    alt=\"{{ item.name|raw }}\" 
                    title=\"{{ item.name|capitalize|raw }}\">
                    <i class=\"fa fa-{{ item.name|lower|raw }}\"></i>
                    </a>
                </li>
                {% endfor %}
            </ul>
        </div>
        {% endfor %}
    </div>
    <div class=\"callout-line\"></div>
    {% endif %}
</div>
", "modular/team.html.twig", "/home/me/website/user/themes/delivernext/templates/modular/team.html.twig");
    }
}
