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

/* modular.html.twig */
class __TwigTemplate_70cf8038e1489da1531faced99157e6d6719b807475be5553216cc1bd266014d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
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
        // line 3
        $context["nav_macros"] = $this->loadTemplate("macros/macros.html.twig", "modular.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bottom($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 8
        if ((($context["show_onpage_menu"] ?? null) == true)) {
            // line 9
            echo "    <script defer>
        
        window.onload = function () {
            scrollSpy('#navbar', {
              sectionClass: '.scrollspy',
              menuActiveTarget: 'li > a.menu-item',
              offset: 100,
              // smooth scroll
              smoothScroll: true,
              smoothScrollBehavior: function(element) {
                element.scrollIntoView({ behavior: 'smooth' }) // default behavior
              }
            })
          }
    
      </script>
    ";
        }
    }

    // line 29
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        if ((($context["show_onpage_menu"] ?? null) == true)) {
            // line 31
            echo "        <ul class=\"navigation\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 33
                echo "                ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("active") : (""));
                // line 34
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_module"] ?? null), "html", null, true);
                echo "\"><a class=\"menu-item\" href=\"#";
                echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenus.enabled")) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenu"));
                foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                    // line 38
                    echo "                    <li>
                        <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "target", []), "html", null, true);
                    echo "\">
                        ";
                    // line 40
                    if ($this->getAttribute($context["mitem"], "icon", [])) {
                        // line 41
                        echo "                            <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                        echo "\"></i>
                        ";
                    }
                    // line 43
                    echo "                        ";
                    echo $this->getAttribute($context["mitem"], "text", []);
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            }
            // line 48
            echo "        </ul>
    ";
        } else {
            // line 50
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 57
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
            echo "\"></div>
        ";
            // line 58
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
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
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 4,  168 => 58,  163 => 57,  158 => 56,  155 => 55,  147 => 50,  143 => 48,  140 => 47,  129 => 43,  123 => 41,  121 => 40,  115 => 39,  112 => 38,  107 => 37,  104 => 36,  91 => 34,  88 => 33,  84 => 32,  81 => 31,  78 => 30,  75 => 29,  54 => 9,  52 => 8,  47 => 7,  44 => 6,  39 => 1,  37 => 3,  31 => 1,);
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

{% import 'macros/macros.html.twig' as nav_macros %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu == true %}
    <script defer>
        
        window.onload = function () {
            scrollSpy('#navbar', {
              sectionClass: '.scrollspy',
              menuActiveTarget: 'li > a.menu-item',
              offset: 100,
              // smooth scroll
              smoothScroll: true,
              smoothScrollBehavior: function(element) {
                element.scrollIntoView({ behavior: 'smooth' }) // default behavior
              }
            })
          }
    
      </script>
    {% endif %}
{% endblock %}


{% block header_navigation %}
    {% if show_onpage_menu == true %}
        <ul class=\"navigation\">
            {% for module in page.collection() %}
                {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_module }}\"><a class=\"menu-item\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a></li>
            {% endfor %}
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
        </ul>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}


{% block content %}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/home/me/website/user/themes/delivernext/templates/modular.html.twig");
    }
}
