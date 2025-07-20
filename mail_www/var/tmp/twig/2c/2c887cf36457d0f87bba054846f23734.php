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

/* @MauticCore/Helper/toolbar_bulk_actions.html.twig */
class __TwigTemplate_ffd1808161d80e32ff51414f9fa88731 extends Template
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
        yield "<!-- Batch actions: always visible -->";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 5
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_TOOLBAR_BULK_ACTIONS"));
        // line 7
        yield "

";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 9) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 9, $this->source); })()), "delete", [], "any", false, false, false, 9)))) {
            // line 10
            yield "    ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["message" => (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((            // line 12
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 12, $this->source); })()) . ".form.confirmbatchdelete"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((            // line 13
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 13, $this->source); })()) . ".form.confirmbatchdelete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.confirmbatchdelete"))), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 15
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 15, $this->source); })()), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 15, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 15, $this->source); })()) != "tmpl"); }), ["objectAction" => "batchDelete"])), "template" => "batchdelete"], "priority" => 1]);
            // line 19
            yield "
";
        }
        // line 21
        yield "
";
        // line 22
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "

<!-- Batch actions: others, within the dropdown -->
";
        // line 25
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_BULK_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"));
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 33
        $context["dropdownButtons"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        // line 34
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["dropdownButtons"]) || array_key_exists("dropdownButtons", $context) ? $context["dropdownButtons"] : (function () { throw new RuntimeError('Variable "dropdownButtons" does not exist.', 34, $this->source); })()))) {
            // line 35
            yield "    <div class=\"dropdown ml-xs\">
        ";
            // line 36
            yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/toolbar_bulk_actions.html.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.options", "size" => "lg", "variant" => "primary", "icon" => "ri-more-2-line", "icon_only" => true, "spin" => false, "attributes" => ["class" => "dropdown-toggle bdr-rds-0 pa-0", "data-toggle" => "dropdown", "type" => "button"]]]]));
            // line 53
            yield "        <ul class=\"pull-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 53, $this->source); })()), "html", null, true);
            yield " page-list-actions dropdown-menu dropdown-menu-right\" role=\"menu\">
            ";
            // line 54
            yield (isset($context["dropdownButtons"]) || array_key_exists("dropdownButtons", $context) ? $context["dropdownButtons"] : (function () { throw new RuntimeError('Variable "dropdownButtons" does not exist.', 54, $this->source); })());
            yield "
        </ul>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/toolbar_bulk_actions.html.twig";
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
        return array (  101 => 54,  96 => 53,  94 => 36,  91 => 35,  89 => 34,  87 => 33,  82 => 31,  80 => 30,  78 => 25,  72 => 22,  69 => 21,  65 => 19,  63 => 15,  62 => 13,  61 => 12,  59 => 10,  57 => 9,  53 => 7,  51 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/toolbar_bulk_actions.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/toolbar_bulk_actions.html.twig");
    }
}
