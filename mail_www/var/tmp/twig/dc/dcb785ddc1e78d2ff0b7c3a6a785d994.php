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

/* @MauticCore/Helper/publishstatus_badge.html.twig */
class __TwigTemplate_12fc3f14bb1da66a93d2a1e68b08942e extends Template
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
        $context["statusColors"] = ["published" => ["icon" => "success", "text" => "green"], "unpublished" => ["icon" => "danger", "text" => "red"], "expired" => ["icon" => "info", "text" => "blue"], "pending" => ["icon" => "info", "text" => "blue"]];
        // line 7
        yield "
";
        // line 9
        $context["labelMappings"] = ["available" => ["published" => "mautic.core.form.available", "pending" => "mautic.core.form.not_yet_available", "expired" => "mautic.core.form.no_longer_available", "unpublished" => "mautic.core.form.unavailable"], "sending" => ["published" => "mautic.core.form.sending", "pending" => "mautic.core.form.scheduled_to_send", "expired" => "mautic.core.form.sending_expired", "unpublished" => "mautic.core.form.unavailable"], "active" => ["published" => "mautic.core.form.active", "pending" => "mautic.core.form.pending", "expired" => "mautic.core.form.expired", "unpublished" => "mautic.core.form.inactive"]];
        // line 29
        yield "
";
        // line 30
        $context["labelTextKey"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelMappings"]) || array_key_exists("labelMappings", $context) ? $context["labelMappings"] : (function () { throw new RuntimeError('Variable "labelMappings" does not exist.', 30, $this->source); })()), ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()), "active")) : ("active")), [], "array", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 30), [], "array", false, false, false, 30);
        // line 31
        yield "
<div class=\"label label-";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 32), [], "array", false, false, false, 32), "text", [], "any", false, false, false, 32), "html", null, true);
        yield " d-inline-flex ai-center gap-xs fw-b\"";
        if ((array_key_exists("simplified", $context) && (isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 32, $this->source); })()))) {
            yield " size=\"sm\"";
        }
        yield ">
    ";
        // line 33
        if ( !(array_key_exists("simplified", $context) && (isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "        <span aria-hidden=\"true\" focusable=\"false\" class=\"bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 34), [], "array", false, false, false, 34), "icon", [], "any", false, false, false, 34), "html", null, true);
            yield " publishstatus_pulse\">
        </span>
    ";
        }
        // line 37
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["labelTextKey"]) || array_key_exists("labelTextKey", $context) ? $context["labelTextKey"] : (function () { throw new RuntimeError('Variable "labelTextKey" does not exist.', 37, $this->source); })())), "html", null, true);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/publishstatus_badge.html.twig";
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
        return array (  74 => 37,  67 => 34,  65 => 33,  57 => 32,  54 => 31,  52 => 30,  49 => 29,  47 => 9,  44 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/publishstatus_badge.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/publishstatus_badge.html.twig");
    }
}
