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

/* @MauticPage/Page/list.html.twig */
class __TwigTemplate_a49a686a0e84521720993547d4e426ad extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 15
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 15, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPage/Page/list.html.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 13, $this->source); })()))) ? (true) : (false));
        // line 14
        $context["tmpl"] = "list";
        // line 15
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pages"), "html", null, true);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">
        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "action" =>             // line 26
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 26, $this->source); })()), "page_actions" => ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "page:pages:create", [], "array", false, false, false, 29)], "routeBase" => "page"], "bulk_actions" => ["routeBase" => "page", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 36) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 36))]], "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"], ["search" => "mautic.page.searchcommand.isprefcenter", "label" => "mautic.page.searchcommand.isprefcenter.label", "tooltip" => "mautic.page.searchcommand.isprefcenter.description", "icon" => "ri-settings-4-line"]]]);
            // line 71
            yield "
        <div class=\"page-list\">
  ";
        }
        // line 74
        yield "
  ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Page/_list.html.twig");
        yield "

  ";
        // line 77
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 77, $this->source); })())) {
            // line 78
            yield "        </div>
    </div>

    ";
            // line 81
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.pages.mobile", "mautic.protip.pages.forms"])]);
            // line 83
            yield "
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/Page/list.html.twig";
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
        return array (  120 => 83,  118 => 81,  113 => 78,  111 => 77,  106 => 75,  103 => 74,  98 => 71,  96 => 36,  95 => 29,  94 => 26,  93 => 25,  92 => 24,  89 => 23,  86 => 22,  79 => 21,  68 => 19,  57 => 17,  53 => 15,  51 => 14,  49 => 13,  42 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/list.html.twig", "/home/me/mail_www/app/bundles/PageBundle/Resources/views/Page/list.html.twig");
    }
}
