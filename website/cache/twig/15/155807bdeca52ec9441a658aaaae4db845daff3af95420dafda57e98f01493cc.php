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

/* modular/portfolio.html.twig */
class __TwigTemplate_a316b31ceb2c2b010e60f29591ea7a40e9569984202345350d1ec2903928866c extends \Twig\Template
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
        echo "<div class=\"modular-row portfolio ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []), "html", null, true);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", [])) {
            // line 4
            echo "        <div class=\"notebooks\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "                <div class=\"notebook-row\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                    // line 8
                    echo "                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>";
                    // line 10
                    echo $this->getAttribute($context["portfolio"], "title", []);
                    echo "</h4>
                                <p>";
                    // line 11
                    echo $this->getAttribute($context["portfolio"], "desc", []);
                    echo "</p>
                            </div>
                            <a href=\"#portfolioModal";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "modalid", []), "html", null, true);
                    echo "\" class=\"portfolio-link\" data-toggle=\"modal\" aria-label=\"";
                    echo $this->getAttribute($context["portfolio"], "title", []);
                    echo "\">
                                <div class='screen'>
                                    <div class=\"screen-content\" style=\"background-image: url(";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "cropZoom", [0 => 400, 1 => 250], "method"), "url", []), "html", null, true);
                    echo ")\"></div>
                                    <div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div>
                                </div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    ";
        }
        // line 26
        echo "</div>

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 29
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "modalid", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 33
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h1>
                <a href=\"";
            // line 34
            (($this->getAttribute($context["portfolio"], "url", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "url", []), "html", null, true))) : (print ("#")));
            echo "\">
                    <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "title", []), "html", null, true);
            echo "\">
                </a>
                <p>";
            // line 37
            echo $this->getAttribute($context["portfolio"], "desc", []);
            echo "</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"";
            // line 41
            (($this->getAttribute($context["portfolio"], "url", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "url", []), "html", null, true))) : (print ("#")));
            echo "\">";
            echo (($this->getAttribute($context["portfolio"], "client", [])) ? ($this->getAttribute($context["portfolio"], "client", [])) : ("Unknown Client"));
            echo "</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            ";
            // line 46
            (($this->getAttribute($context["portfolio"], "date", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "date", []), "html", null, true))) : (print ("No date provided")));
            echo "
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            ";
            // line 51
            (($this->getAttribute($context["portfolio"], "category", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["portfolio"], "category", []), "html", null, true))) : (print ("No category provided")));
            echo "
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  147 => 46,  137 => 41,  130 => 37,  123 => 35,  119 => 34,  115 => 33,  107 => 29,  103 => 28,  99 => 26,  95 => 24,  88 => 22,  75 => 15,  68 => 13,  63 => 11,  59 => 10,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  41 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row portfolio {{ page.header.module_classes }}\">
    {{ content|raw }}
    {% if page.header.portfolio %}
        <div class=\"notebooks\">
            {% for row in page.header.portfolio|batch(4) %}
                <div class=\"notebook-row\">
                    {% for portfolio in row %}
                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>{{ portfolio.title|raw }}</h4>
                                <p>{{ portfolio.desc|raw }}</p>
                            </div>
                            <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\" aria-label=\"{{ portfolio.title|raw }}\">
                                <div class='screen'>
                                    <div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].cropZoom(400,250).url }})\"></div>
                                    <div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div>
                                </div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>

{% for portfolio in page.header.portfolio %}
    <div class=\"portfolio-modal modal\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>{{ portfolio.title|raw }}</h1>
                <a href=\"{{ portfolio.url ?: '#' }}\">
                    <img src=\"{{ page.media[portfolio.image].url }}\" alt=\"{{ portfolio.title }}\">
                </a>
                <p>{{ portfolio.desc|raw }}</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"{{ portfolio.url ?: '#' }}\">{{ portfolio.client|raw ?: 'Unknown Client' }}</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            {{ portfolio.date ?: 'No date provided' }}
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            {{ portfolio.category ?: 'No category provided' }}
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
{% endfor %}
", "modular/portfolio.html.twig", "/home/me/website/user/themes/delivernext/templates/modular/portfolio.html.twig");
    }
}
