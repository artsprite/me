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

/* @MauticInstall/Install/content.html.twig */
class __TwigTemplate_b8414a426dd5e2bde0a1f3a4d6d72185 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 9
        return "@MauticInstall/Install/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "getRequest", [], "method", false, false, false, 8), "isXmlHttpRequest", [], "method", false, false, false, 8) && (false == ((array_key_exists("contentOnly", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contentOnly"]) || array_key_exists("contentOnly", $context) ? $context["contentOnly"] : (function () { throw new RuntimeError('Variable "contentOnly" does not exist.', 8, $this->source); })()), false)) : (false))))) {
        }
        // line 9
        $this->parent = $this->loadTemplate("@MauticInstall/Install/base.html.twig", "@MauticInstall/Install/content.html.twig", 9);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "
";
        // line 14
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/content.html.twig";
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
        return array (  65 => 14,  62 => 13,  55 => 12,  50 => 9,  47 => 8,  40 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/content.html.twig", "/home/me/mail_www/app/bundles/InstallBundle/Resources/views/Install/content.html.twig");
    }
}
