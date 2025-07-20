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

/* modular/showcase.html.twig */
class __TwigTemplate_b5996c9c5774231eeaafde44c8e50e9d03e90cc877d7da158e0c3f304563c2b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'showcase' => [$this, 'block_showcase'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('showcase', $context, $blocks);
    }

    public function block_showcase($context, array $blocks = [])
    {
        // line 2
        echo "<div id=\"content-slide\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullscreen", [])) {
            echo "style=\"height: 100vh;\"";
        }
        echo ">
  <div class=\"slideme\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "      <div class=\"modular-row showcase flush-top\"
        ";
            // line 6
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullscreen", [])) {
                echo "style=\"height: 100vh;\"";
            }
            // line 7
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["slide"], "image", []), [], "array")) {
                // line 8
                echo "          data-bg=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["slide"], "image", []), [], "array"), "url", []), "html", null, true);
                echo "\"
          data-blend=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "blend", []), "html", null, true);
                echo "\"
          data-backcolor=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "backcolor", []), "html", null, true);
                echo "\"
        ";
            }
            // line 12
            echo "      >
        ";
            // line 13
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullscreen", [])) {
                // line 14
                echo "          <div class=\"showcase-content-fullscreen\">
        ";
            } else {
                // line 16
                echo "          <div class=\"showcase-content\">
        ";
            }
            // line 18
            echo "            <h1>";
            echo $this->getAttribute($context["slide"], "heading", []);
            echo "</h1>
            <h2>";
            // line 19
            echo $this->getAttribute($context["slide"], "subheading", []);
            echo "</h2>
            ";
            // line 20
            if ($this->getAttribute($context["slide"], "button_text", [])) {
                // line 21
                echo "              <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "button_url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "button_text", []), "html", null, true);
                echo "</a>
            ";
            }
            // line 23
            echo "          </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
</div>

";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "arrows", []), "html", null, true);
        echo ",
  autoslide: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "autoslide", []), "html", null, true);
        echo ",
  autoslideHoverStop: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "autoslideHoverStop", []), "html", null, true);
        echo ",
  interval: ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "interval", []), "html", null, true);
        echo ",
  loop: ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "loop", []), "html", null, true);
        echo ",
  pagination: \"numbers\",
  transition: '";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "transition", []), "html", null, true);
        echo "',
  itemsForSlide: ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "itemsForSlide", []), "html", null, true);
        echo ",
  touch: ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "touch", []), "html", null, true);
        echo ",
  swipe: ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slide_settings", []), "swipe", []), "html", null, true);
        echo "
});
</script>
<script>
  const prevBtn = document.querySelector('.arrow.prev');
  const nextBtn = document.querySelector('.arrow.next');

  if (prevBtn) {
    prevBtn.setAttribute('aria-label', '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "DELIVERNEXT.SHOWCASE.ARROW_PREV"), "html", null, true);
        echo "');
  }
  if (nextBtn) {
    nextBtn.setAttribute('aria-label', '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "DELIVERNEXT.SHOWCASE.ARROW_NEXT"), "html", null, true);
        echo "');
  }
</script>

";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "<div class=\"content-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "module_classes", []), "html", null, true);
        echo "\">
  ";
        // line 31
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 31,  188 => 30,  185 => 29,  176 => 57,  170 => 54,  159 => 46,  155 => 45,  151 => 44,  147 => 43,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  121 => 34,  119 => 29,  114 => 26,  106 => 23,  98 => 21,  96 => 20,  92 => 19,  87 => 18,  83 => 16,  79 => 14,  77 => 13,  74 => 12,  69 => 10,  65 => 9,  60 => 8,  57 => 7,  53 => 6,  50 => 5,  46 => 4,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block showcase %}
<div id=\"content-slide\"{% if page.header.fullscreen %}style=\"height: 100vh;\"{% endif %}>
  <div class=\"slideme\">
    {% for slide in page.header.slides %}
      <div class=\"modular-row showcase flush-top\"
        {% if page.header.fullscreen %}style=\"height: 100vh;\"{% endif %}
        {% if page.media[slide.image] %}
          data-bg=\"{{ page.media[slide.image].url }}\"
          data-blend=\"{{ slide.blend }}\"
          data-backcolor=\"{{ slide.backcolor }}\"
        {% endif %}
      >
        {% if page.header.fullscreen %}
          <div class=\"showcase-content-fullscreen\">
        {% else %}
          <div class=\"showcase-content\">
        {% endif %}
            <h1>{{ slide.heading|raw }}</h1>
            <h2>{{ slide.subheading|raw }}</h2>
            {% if slide.button_text %}
              <a class=\"button\" href=\"{{ slide.button_url }}\">{{ slide.button_text }}</a>
            {% endif %}
          </div>
      </div>
    {% endfor %}
  </div>
</div>

{% block content %}
<div class=\"content-wrapper {{ page.header.module_classes }}\">
  {{ page.content|raw }}
</div>
{% endblock %}

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: {{ page.header.slide_settings.arrows }},
  autoslide: {{ page.header.slide_settings.autoslide }},
  autoslideHoverStop: {{ page.header.slide_settings.autoslideHoverStop }},
  interval: {{ page.header.slide_settings.interval }},
  loop: {{ page.header.slide_settings.loop }},
  pagination: \"numbers\",
  transition: '{{ page.header.slide_settings.transition }}',
  itemsForSlide: {{ page.header.slide_settings.itemsForSlide }},
  touch: {{ page.header.slide_settings.touch }},
  swipe: {{ page.header.slide_settings.swipe }}
});
</script>
<script>
  const prevBtn = document.querySelector('.arrow.prev');
  const nextBtn = document.querySelector('.arrow.next');

  if (prevBtn) {
    prevBtn.setAttribute('aria-label', '{{ \"DELIVERNEXT.SHOWCASE.ARROW_PREV\"|t }}');
  }
  if (nextBtn) {
    nextBtn.setAttribute('aria-label', '{{ \"DELIVERNEXT.SHOWCASE.ARROW_NEXT\"|t }}');
  }
</script>

{% endblock %}", "modular/showcase.html.twig", "/home/me/website/user/themes/delivernext/templates/modular/showcase.html.twig");
    }
}
