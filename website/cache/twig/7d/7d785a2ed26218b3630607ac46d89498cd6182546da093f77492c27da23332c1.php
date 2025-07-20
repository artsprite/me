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

/* partials/head.html.twig */
class __TwigTemplate_7d0d986bb5e89456ae34491058239f20af648b8e4758b04596eff321616e9a15 extends \Twig\Template
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
        echo "<head> 
    ";
        // line 2
        $this->loadTemplate("partials/head/favicon.html.twig", "partials/head.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("partials/head/seo.html.twig", "partials/head.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("partials/head/assets.html.twig", "partials/head.html.twig", 4)->display($context);
        // line 5
        echo "</head>";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<head> 
    {% include 'partials/head/favicon.html.twig' %}
    {% include 'partials/head/seo.html.twig' %}
    {% include 'partials/head/assets.html.twig' %}
</head>", "partials/head.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/head.html.twig");
    }
}
