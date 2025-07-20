<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticCore/GlobalSearch/globalsearch.html.twig */
class __TwigTemplate_4efbb8e9a4a6d325cc26f60b415e6ff7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"modal fade\" id=\"gsearchModal\" data-backdrop=\"true\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content gsearch--toolbar\">

\t\t\t<div aria-hidden=\"false\" class=\"gsearch--field d-flex ai-center gap-3 pr-md pl-md pt-sm pb-sm\">
\t\t\t\t<i class=\"gsearch--search-magnifier ri-search-2-line ri-xl\" tabindex=\"-1\"></i>
\t\t\t\t<input type=\"search\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 8, $this->source); })()));
        yield "\"
\t\t\t\t\tclass=\"gsearch--field__input form-control search fs-16\" id=\"globalSearchInput\" name=\"global_search\"
\t\t\t\t\tplaceholder=\"";
        // line 10
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search_everything", [], "messages");
        yield "\"
\t\t\t\t\tautocomplete=\"false\" data-toggle=\"livesearch\" data-target=\"#globalSearchResults\"
\t\t\t\t\tdata-action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax", ["action" => "globalSearch"]);
        yield "\" data-overlay=\"true\"
\t\t\t\t\tdata-overlay-text=\"";
        // line 13
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        yield "\" />
\t\t\t\t<span class=\"gsearch--field-addon\">
\t\t\t\t\t<kbd class=\"mr-2\">f</kbd><kbd>/</kbd>
\t\t\t\t</span>
\t\t\t</div>

\t\t</div>
\t\t<!-- end modal content -->
\t\t<!-- start results -->
\t\t<div class=\"modal-content gsearch--results hide mt-xs\">
\t\t\t<div class=\"pt-0 pb-xs pl-0 pr-0\">
\t\t\t\t<div class=\"gsearch--results-scroll scroll-content slimscroll\" id=\"globalSearchResults\">
\t\t\t\t\t";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/GlobalSearch/results.html.twig", ["results" => (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 25, $this->source); })())]);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end results -->
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/GlobalSearch/globalsearch.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  80 => 25,  65 => 13,  61 => 12,  56 => 10,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/GlobalSearch/globalsearch.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/GlobalSearch/globalsearch.html.twig");
    }
}
