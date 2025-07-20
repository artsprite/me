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

/* @MauticCore/Helper/list_toolbar.html.twig */
class __TwigTemplate_b10613907ab62ead00ef7cb3148260e7 extends Template
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
        $context["wrap"] = true;
        // line 2
        yield "
<div class=\"panel-heading pa-0 toolbar--table-toolbar\">

    <div class=\"toolbar--batch-actions d-flex jc-space-between bg-primary fd-column fd-row-sm\">
        <div class=\"toolbar--batch-summary d-flex\">
            <span class=\"toolbar--batch-summary__count\" data-singular=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.item_selected")), "html", null, true);
        yield "\"
            data-plural=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.items_selected")), "html", null, true);
        yield "\">0 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.items_selected")), "html", null, true);
        yield "</span>
        </div>
        <div class=\"toolbar--action-list d-flex fw-wrap fw-nowrap-sm\">
            ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_bulk_actions.html.twig", ((array_key_exists("bulk_actions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["bulk_actions"]) || array_key_exists("bulk_actions", $context) ? $context["bulk_actions"] : (function () { throw new RuntimeError('Variable "bulk_actions" does not exist.', 11, $this->source); })()), [])) : ([])));
        yield "
            <span class=\"toolbar--batch-summary__divider\">|</span>
            ";
        // line 13
        yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/list_toolbar.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.form.cancel", "variant" => "primary", "size" => "lg", "attributes" => ["type" => "button", "class" => "bdr-rds-0", "data-toggle" => "cancel-checkall"]]]]));
        // line 27
        yield "        </div>
    </div>

    <div class=\"d-flex ai-center list-toolbar toolbar--toolbar-content h-48\">
        ";
        // line 31
        if (array_key_exists("searchValue", $context)) {
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/search.html.twig", ["searchId" => ((            // line 33
array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 33, $this->source); })()), null)) : (null)), "searchValue" =>             // line 34
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 34, $this->source); })()), "action" => ((            // line 35
array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "")) : ("")), "searchHelp" => ((            // line 36
array_key_exists("searchHelp", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 36, $this->source); })()), "")) : ("")), "target" => ((            // line 37
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 37, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 38
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 38, $this->source); })()), null)) : (null)), "overlayDisabled" => ((            // line 39
array_key_exists("overlayDisabled", $context)) ? ((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 39, $this->source); })())) : (null))]);
        }
        // line 42
        yield "
        ";
        // line 43
        yield from $this->loadTemplate("@MauticCore/Helper/toolbar_actions.html.twig", "@MauticCore/Helper/list_toolbar.html.twig", 43)->unwrap()->yield($context);
        // line 44
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ((array_key_exists("page_actions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_actions"]) || array_key_exists("page_actions", $context) ? $context["page_actions"] : (function () { throw new RuntimeError('Variable "page_actions" does not exist.', 44, $this->source); })()), [])) : ([])));
        yield "
    </div>

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/list_toolbar.html.twig";
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
        return array (  93 => 44,  91 => 43,  88 => 42,  85 => 39,  84 => 38,  83 => 37,  82 => 36,  81 => 35,  80 => 34,  79 => 33,  78 => 32,  76 => 31,  70 => 27,  68 => 13,  63 => 11,  55 => 8,  51 => 7,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_toolbar.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/list_toolbar.html.twig");
    }
}
