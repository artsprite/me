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

/* @MauticCore/Menu/quick_help.html.twig */
class __TwigTemplate_c12343edf83fab6f86a94f42cc07125f extends Template
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
        yield "<li class=\"dropdown quick-help\">
    <a class=\"dropdown-toggle quick-help\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"ri-question-line ri-xl\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <a data-toggle=\"modal\" data-target=\"#keyboardShortcutsModal\">
                <span>
                    <i class=\"ri-keyboard-box-line\"></i>
                    <span>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.shortcuts"), "html", null, true);
        yield "</span>
                </span>
            </a>
        </li>
        <li>
            <a data-toggle=\"modal\" data-target=\"#searchCommandsModal\">
                <span>
                    <i class=\"ri-menu-search-line\"></i>
                    <span>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.help.searchcommands.title"), "html", null, true);
        yield "</span>
                </span>
            </a>
        </li>
        <li>
            <a data-toggle=\"modal\" data-target=\"#tokenPlaceholdersModal\">
                <span>
                    <i class=\"ri-braces-line\"></i>
                    <span>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.placeholder_tokens"), "html", null, true);
        yield "</span>
                </span>
            </a>
        </li>
    </ul>
</li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/quick_help.html.twig";
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
        return array (  75 => 26,  64 => 18,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/quick_help.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Menu/quick_help.html.twig");
    }
}
