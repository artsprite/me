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

/* partials/head/seo.html.twig */
class __TwigTemplate_6166cd4506f8d8d94322cea7b107bec8ad4bccdaf6cd1e68bdfe7ffb8bedd8c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

";
        // line 5
        if (($context["meta_title"] ?? null)) {
            // line 6
            echo "<title>";
            echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
            echo "</title>
<meta itemprop=\"name\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
            echo "\">
<meta property=\"og:title\" content=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
            echo "\">
<meta property=\"twitter:title\" content=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["meta_title"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 11
        echo "
";
        // line 13
        if (($context["canonical_url"] ?? null)) {
            // line 14
            echo "<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, ($context["canonical_url"] ?? null), "html", null, true);
            echo "\">
<meta property=\"og:url\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["canonical_url"] ?? null), "html", null, true);
            echo "\">
<meta property=\"twitter:url\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["canonical_url"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 18
        echo "
";
        // line 20
        if (($context["meta_description"] ?? null)) {
            // line 21
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
            echo "\">
<meta property=\"og:description\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
            echo "\">
<meta property=\"twitter:description\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
            echo "\">
<meta itemprop=\"description\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 26
        echo "
";
        // line 28
        $context["datePublished"] = twig_include($this->env, $context, "partials/page/date.html.twig");
        // line 29
        echo "
";
        // line 31
        $context["featured_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "featuredImage", []), [], "array")) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "featuredImage", []), [], "array")) : (twig_first($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->filterFunc($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "all", []), function ($__v__, $__k__) use ($context) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "avatarImage", [])) && (($this->getAttribute(($context["v"] ?? null), "type", []) == "image") || ($this->getAttribute(($context["v"] ?? null), "type", []) == "vector"))); }))));
        // line 32
        if (($context["featured_image"] ?? null)) {
            // line 33
            echo "<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["featuredImage"] ?? null), "url", []));
            echo "\">
<meta property=\"twitter:image\" content=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["featuredImage"] ?? null), "url", []));
            echo "\">
<meta itemprop=\"image\" content=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["featuredImage"] ?? null), "url", []));
            echo "\">
";
        }
        // line 37
        echo "
";
        // line 39
        echo "<meta property=\"og:type\" content=\"website\">
<meta property=\"twitter:card\" content=\"summary_large_image\">

";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 72
            echo "<meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", []));
                echo "\" ";
            }
            // line 73
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "http_equiv", []));
                echo "\" ";
            }
            // line 74
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "charset", []));
                echo "\" ";
            }
            // line 75
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "property", []));
                echo "\" ";
            }
            // line 76
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        // line 44
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((((((((((((((("
      {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BlogPosting\",
        \"mainEntityOfPage\": {
            \"@type\": \"WebPage\",
            \"@id\": \"" .         // line 50
($context["canonical_url"] ?? null)) . "\"
        },
        \"headline\": \"") .         // line 52
($context["page_title"] ?? null)) . "\",
        \"image\": {
            \"@type\": \"ImageObject\",
            \"url\": \"") .         // line 55
($context["canonical_url"] ?? null)) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "featuredImage", [])) . "\"
        },
        \"datePublished\": \"") .         // line 57
($context["datePublished"] ?? null)) . "\",
        \"inLanguage\": \"") .         // line 58
($context["lang"] ?? null)) . "\",
        \"wordCount\": \"") . call_user_func_array($this->env->getFilter('wordcount')->getCallable(), [$this->getAttribute(        // line 59
($context["page"] ?? null), "content", [])])) . "\",
        \"author\": {
            \"@type\": \"Person\",
            \"name\": \"") .         // line 62
($context["author"] ?? null)) . "\",
            \"description\": \"") .         // line 63
($context["author_bio"] ?? null)) . "\",
            \"url\": \"") .         // line 64
($context["author_twitter"] ?? null)) . "\"
        },
        \"description\": \"") .         // line 66
($context["meta_description"] ?? null)) . "\"
      }"), 1 => ["group" => "bottom", "type" => "application/ld+json"]], "method");
        // line 68
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/head/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 68,  217 => 66,  214 => 64,  212 => 63,  210 => 62,  206 => 59,  204 => 58,  202 => 57,  199 => 55,  195 => 52,  192 => 50,  184 => 44,  181 => 43,  167 => 76,  161 => 75,  155 => 74,  149 => 73,  142 => 72,  138 => 71,  135 => 69,  133 => 43,  128 => 39,  125 => 37,  120 => 35,  116 => 34,  111 => 33,  109 => 32,  107 => 31,  104 => 29,  102 => 28,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  81 => 21,  79 => 20,  76 => 18,  71 => 16,  67 => 15,  62 => 14,  60 => 13,  57 => 11,  52 => 9,  48 => 8,  44 => 7,  39 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

{% if meta_title %}
<title>{{ meta_title }}</title>
<meta itemprop=\"name\" content=\"{{ meta_title }}\">
<meta property=\"og:title\" content=\"{{ meta_title }}\">
<meta property=\"twitter:title\" content=\"{{ meta_title }}\">
{% endif %}

{# URLs #}
{% if canonical_url %}
<link rel=\"canonical\" href=\"{{ canonical_url }}\">
<meta property=\"og:url\" content=\"{{ canonical_url }}\">
<meta property=\"twitter:url\" content=\"{{ canonical_url }}\">
{% endif %}

{# Site Description #}
{% if meta_description %}
<meta name=\"description\" content=\"{{ meta_description }}\">
<meta property=\"og:description\" content=\"{{ meta_description }}\">
<meta property=\"twitter:description\" content=\"{{ meta_description }}\">
<meta itemprop=\"description\" content=\"{{ meta_description }}\">
{% endif %}

{# Date Published #}
{% set datePublished = include('partials/page/date.html.twig') %}

{# Featured image #}
{% set featured_image = page.media[page.header.featuredImage] ?: page.media.all|filter((v, k) => k != page.header.author.avatarImage and (v.type == 'image' or v.type == 'vector'))|first %}
{% if featured_image %}
<meta property=\"og:image\" content=\"{{ featuredImage.url|e }}\">
<meta property=\"twitter:image\" content=\"{{ featuredImage.url|e }}\">
<meta itemprop=\"image\" content=\"{{ featuredImage.url|e }}\">
{% endif %}

{# Social Media Type #}
<meta property=\"og:type\" content=\"website\">
<meta property=\"twitter:card\" content=\"summary_large_image\">

{# Basic Schema.org json #}
{% block javascripts %}
  {% do assets.addInlineJs('
      {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BlogPosting\",
        \"mainEntityOfPage\": {
            \"@type\": \"WebPage\",
            \"@id\": \"' ~ canonical_url ~ '\"
        },
        \"headline\": \"' ~ page_title|raw ~ '\",
        \"image\": {
            \"@type\": \"ImageObject\",
            \"url\": \"' ~ canonical_url ~ '/' ~ page.header.featuredImage ~ '\"
        },
        \"datePublished\": \"' ~ datePublished ~ '\",
        \"inLanguage\": \"' ~ lang ~ '\",
        \"wordCount\": \"' ~ page.content|wordcount ~ '\",
        \"author\": {
            \"@type\": \"Person\",
            \"name\": \"' ~ author|raw ~ '\",
            \"description\": \"' ~ author_bio|raw ~ '\",
            \"url\": \"' ~ author_twitter ~ '\"
        },
        \"description\": \"' ~ meta_description ~ '\"
      }', {group:'bottom', type: 'application/ld+json'}) %}
  {% endblock %}

{# Load Site and Page Specific Metadata Overloads #}
{% for meta in page.metadata %}
<meta {% if meta.name %}name=\"{{ meta.name|e }}\" {% endif %}
{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv|e }}\" {% endif %}
{% if meta.charset %}charset=\"{{ meta.charset|e }}\" {% endif %}
{% if meta.property %}property=\"{{ meta.property|e }}\" {% endif %}
{% if meta.content %}content=\"{{ meta.content|raw }}\" {% endif %}>
{% endfor %}", "partials/head/seo.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/head/seo.html.twig");
    }
}
