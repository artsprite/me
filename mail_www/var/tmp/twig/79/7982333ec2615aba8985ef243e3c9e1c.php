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

/* @MauticLead/KeyboardShortcuts/lead_shortcuts.html.twig */
class __TwigTemplate_f33f0e6a16f3dee48b2cc8b540af29d6 extends Template
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
        $context["shortcuts"] = ["contacts" => ["a" => "mautic.keyboard.quick_add_contact", "v" => "mautic.keyboard.toggle_view"]];
        // line 7
        yield "
";
        // line 8
        yield from $this->loadTemplate("@MauticCore/Helper/keyboard_shortcuts_helper.html.twig", "@MauticLead/KeyboardShortcuts/lead_shortcuts.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["shortcuts" => (isset($context["shortcuts"]) || array_key_exists("shortcuts", $context) ? $context["shortcuts"] : (function () { throw new RuntimeError('Variable "shortcuts" does not exist.', 8, $this->source); })())]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/KeyboardShortcuts/lead_shortcuts.html.twig";
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
        return array (  47 => 8,  44 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/KeyboardShortcuts/lead_shortcuts.html.twig", "/home/me/mail_www/app/bundles/LeadBundle/Resources/views/KeyboardShortcuts/lead_shortcuts.html.twig");
    }
}
