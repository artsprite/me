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

/* modular/bottom.html.twig */
class __TwigTemplate_cbfe3fb81123a0d506acf93099836b851458e4f22d8901afd7d291c75a830a26 extends \Twig\Template
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
        echo "<div class=\"modular-row bottom ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []), "html", null, true);
        echo "\">

    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", [])) {
            // line 4
            echo "    <div class=\"services\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 6
                echo "        <div class=\"service\">
            <i class=\"fa fa-";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "icon", []), "html", null, true);
                echo "\"></i>
            <h4>";
                // line 8
                echo $this->getAttribute($context["service"], "title", []);
                echo "</h4>
            <p>";
                // line 9
                echo $this->getAttribute($context["service"], "desc", []);
                echo "</p>
        </div>    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </div>  
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 18
            echo "        <a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "style", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        if (twig_in_filter("borderbottom", $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []))) {
            // line 22
            echo "    <hr>
    ";
        }
        // line 24
        echo "   
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  99 => 22,  97 => 21,  94 => 20,  81 => 18,  77 => 17,  72 => 15,  69 => 14,  65 => 12,  56 => 9,  52 => 8,  48 => 7,  45 => 6,  41 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row bottom {{ page.header.module_classes }}\">

    {% if page.header.services %}
    <div class=\"services\">
        {% for service in page.header.services %}
        <div class=\"service\">
            <i class=\"fa fa-{{ service.icon }}\"></i>
            <h4>{{ service.title|raw }}</h4>
            <p>{{ service.desc|raw }}</p>
        </div>    
        {% endfor %}
    </div>  
    {% endif %}

    {{ content|raw }}

    {% for button in page.header.buttons %}
        <a class=\"{{ button.style }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    
    {% if 'borderbottom' in page.header.module_classes %}
    <hr>
    {% endif %}
   
</div>
", "modular/bottom.html.twig", "/home/me/website/user/themes/delivernext/templates/modular/bottom.html.twig");
    }
}
