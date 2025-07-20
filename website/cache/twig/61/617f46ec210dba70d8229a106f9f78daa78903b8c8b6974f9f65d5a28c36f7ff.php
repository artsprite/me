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

/* partials/footer.html.twig */
class __TwigTemplate_1df9a3a8d92bc1f8030f7d9ae279abd136d548d031fc8fd7783343922bceb41c extends \Twig\Template
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
        echo "<div class=\"modular-row footer ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []), "html", null, true);
        echo "\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"";
        // line 5
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
                ";
        // line 6
        if (($context["social"] ?? null)) {
            // line 7
            echo "                    ";
            $this->displayBlock('social', $context, $blocks);
            // line 10
            echo "                ";
        }
        // line 11
        echo "
            </div>
            ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "about", []), "description", [])) {
            // line 14
            echo "                ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "about", []), "description", []));
            echo "
            ";
        }
        // line 16
        echo "
        </div>
        <div class=\"footer-module\"><h4>";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "contact_section_label", []);
        echo "</h4>
            <p>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                    <span>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </p>
            ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", [])) {
            echo "<p><strong>E-mail: </strong><a href=\"mailto:";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->safeEmailFilter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->safeEmailFilter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []));
            echo "</a></p>";
        }
        // line 25
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "gps", [])) {
            echo "<p><strong>
                ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "DELIVERNEXT.MISC.GPS_LOCATION"), "html", null, true);
            echo "<br>
                <a href=\"
                https://www.google.com/maps/search/?api=1&query=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "gps", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "gps", []), "html", null, true);
            echo "</a></strong></p>";
        }
        // line 29
        echo "        </div>
        
        <div class=\"footer-module\"><h4>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "quick_links_label", []), "html", null, true);
        echo "</h4>
         <ul class=\"quickmenu\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "quick_links_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["quicklink"]) {
            // line 34
            echo "                <li><i class=\"fa fa-chevron-right\"></i><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quicklink"], "url", []), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quicklink"], "target", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quicklink"], "text", []), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quicklink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </ul>
        </div>
    </div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "copyright_text", []);
        echo "
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "other_menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "       <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </ul>
    </div>
</div>

</div>";
    }

    // line 7
    public function block_social($context, array $blocks = [])
    {
        // line 8
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/footer.html.twig", 8)->display($context);
        // line 9
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 9,  185 => 8,  182 => 7,  174 => 49,  161 => 47,  157 => 46,  150 => 42,  142 => 36,  127 => 34,  123 => 33,  118 => 31,  114 => 29,  108 => 28,  103 => 26,  98 => 25,  90 => 24,  87 => 23,  78 => 21,  74 => 20,  69 => 18,  65 => 16,  59 => 14,  57 => 13,  53 => 11,  50 => 10,  47 => 7,  45 => 6,  39 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row footer {{ page.header.class}}\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title|raw }}</a></h3>
                {% if social %}
                    {% block social %}
                        {% include 'partials/social.html.twig' %}
                    {% endblock %}
                {% endif %}

            </div>
            {% if theme_config.footer.about.description %}
                {{ theme_config.footer.about.description|markdown|raw }}
            {% endif %}

        </div>
        <div class=\"footer-module\"><h4>{{ theme_config.footer.contact_section_label|raw }}</h4>
            <p>
                {% for item in theme_config.footer.address %}
                    <span>{{ item.line|raw }}</span>
                {% endfor %}
            </p>
            {% if site.author.email %}<p><strong>E-mail: </strong><a href=\"mailto:{{ site.author.email|safe_email }}\">{{ site.author.email|safe_email }}</a></p>{% endif %}
            {% if theme_config.footer.gps %}<p><strong>
                {{ 'DELIVERNEXT.MISC.GPS_LOCATION'|t }}<br>
                <a href=\"
                https://www.google.com/maps/search/?api=1&query={{ theme_config.gps }}\">{{ theme_config.footer.gps }}</a></strong></p>{% endif %}
        </div>
        
        <div class=\"footer-module\"><h4>{{ theme_config.footer.quick_links_label }}</h4>
         <ul class=\"quickmenu\">
            {% for quicklink in theme_config.footer.quick_links_items %}
                <li><i class=\"fa fa-chevron-right\"></i><a href=\"{{ base_url_absolute }}/{{quicklink.url}}\" target=\"{{ quicklink.target}}\">{{  quicklink.text }}</a></li>
            {% endfor %}
        </ul>
        </div>
    </div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        {{ theme_config.footer.copyright_text|raw }}
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    {% for item in theme_config.footer.other_menu %}
       <li><a href=\"{{ base_url_absolute }}/{{ item.url }}\">{{  item.text }}</a></li>
    {% endfor %}
    </ul>
    </div>
</div>

</div>", "partials/footer.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/footer.html.twig");
    }
}
