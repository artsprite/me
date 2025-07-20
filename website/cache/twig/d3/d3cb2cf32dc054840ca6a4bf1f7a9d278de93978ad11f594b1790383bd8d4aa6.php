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

/* partials/page/date.html.twig */
class __TwigTemplate_a2aaf7665b81221d674d6424419b1faf7abec54db4c5135fada9c2b869564f76 extends \Twig\Template
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
        // line 5
        echo "
";
        // line 7
        ob_start();
        // line 8
        echo "
";
        // line 9
        $context["lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 10
        echo "
";
        // line 11
        $context["default_format"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "default", []);
        // line 12
        $context["short_format"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []);
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "translate-date", [], "array"), "enabled", [])) {
            // line 14
            echo "    ";
            $context["datePublished"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", [])) ? (call_user_func_array($this->env->getFilter('td')->getCallable(), [$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", []), ($context["lang"] ?? null), ($context["default_format"] ?? null)])) : ((($this->getAttribute(($context["page"] ?? null), "date", [])) ? (call_user_func_array($this->env->getFilter('td')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "date", []), ($context["lang"] ?? null), ($context["default_format"] ?? null)])) : (call_user_func_array($this->env->getFilter('td')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "modified", []), ($context["lang"] ?? null), ($context["default_format"] ?? null)])))));
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
($context["config"] ?? null), "plugins", []), "twig-extensions", [], "array"), "enabled", [])) {
            // line 16
            echo "    ";
            $context["datePublished"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", [])) ? (call_user_func_array($this->env->getFilter('localizeddate')->getCallable(), [$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", []), "medium", "none", ($context["lang"] ?? null)])) : ((($this->getAttribute(($context["page"] ?? null), "date", [])) ? (call_user_func_array($this->env->getFilter('localizeddate')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "date", []), "medium", "none", ($context["lang"] ?? null)])) : (call_user_func_array($this->env->getFilter('localizeddate')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "modified", []), "medium", "none", ($context["lang"] ?? null)])))));
        } else {
            // line 18
            echo "    ";
            $context["datePublished"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", [])) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", []), ($context["short_format"] ?? null))) : ((($this->getAttribute(($context["page"] ?? null), "date", [])) ? (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), ($context["short_format"] ?? null))) : (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "modified", []), ($context["short_format"] ?? null))))));
        }
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, ($context["datePublished"] ?? null), "html", null, true);
        echo "

";
        $___internal_1763e6b3d7c5d2a3981083181ef8b36a83497c4000d46f5e53ac781a289380bc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo twig_spaceless($___internal_1763e6b3d7c5d2a3981083181ef8b36a83497c4000d46f5e53ac781a289380bc_);
    }

    public function getTemplateName()
    {
        return "partials/page/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  65 => 21,  62 => 20,  58 => 18,  54 => 16,  52 => 15,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Set page datePublished in folowing order with support for translations #}
{# FIRST: Page publication date #}
{# SECOND: Page date #}
{# LAST: Page modification date #}

{# SET DEFAULT GRAV LANGUAGE #}
{% apply spaceless %}

{% set lang = grav.language.getActive ?: grav.config.site.default_lang %}

{% set default_format = system.pages.dateformat.default %}
{% set short_format = system.pages.dateformat.short %}
{% if config.plugins[\"translate-date\"].enabled %}
    {% set datePublished = (page.header.publish_date) ? (page.header.publish_date|td(lang,default_format)) : (page.date ? page.date|td(lang,default_format) : page.modified|td(lang,default_format)) %}
{% elseif config.plugins[\"twig-extensions\"].enabled %}
    {% set datePublished = (page.header.publish_date) ? (page.header.publish_date|localizeddate('medium', 'none', lang)) : (page.date ? page.date|localizeddate('medium', 'none', lang) : page.modified|localizeddate('medium', 'none', lang)) %}
{% else %}
    {% set datePublished = (page.header.publish_date) ? (page.header.publish_date|date(short_format)) : (page.date ? page.date|date(short_format) : page.modified|date(short_format)) %}
{% endif %}

{{ datePublished }}

{% endapply %}", "partials/page/date.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/page/date.html.twig");
    }
}
