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

/* @MauticCore/Helper/confirm.html.twig */
class __TwigTemplate_89b321d216f1d9c40bc58838c4aca1ee extends Template
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
        if (array_key_exists("template", $context)) {
            // line 2
            $context["btnClass"] = ((array_key_exists("btnClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 2, $this->source); })()), "btn btn-primary bdr-rds-0")) : ("btn btn-primary bdr-rds-0"));
            // line 3
            if (((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 3, $this->source); })()) === "batchdelete")) {
                // line 4
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 4, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 5
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 5, $this->source); })()), "ri-delete-bin-line text-danger")) : ("ri-delete-bin-line text-danger"));
                // line 6
                $context["btnText"] = ((array_key_exists("btnText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 6, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected")));
                // line 7
                $context["confirmCallback"] = ((array_key_exists("confirmCallback", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 7, $this->source); })()), "executeBatchAction")) : ("executeBatchAction"));
                // line 8
                yield "        ";
                $context["wrapOpeningTag"] = ((array_key_exists("wrapOpeningTag", $context)) ? ((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 8, $this->source); })())) : (""));
                // line 9
                yield "        ";
                $context["wrapClosingTag"] = ((array_key_exists("wrapClosingTag", $context)) ? ((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 9, $this->source); })())) : (""));
                // line 10
                $context["precheck"] = ((array_key_exists("precheck", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 10, $this->source); })()), "batchActionPrecheck")) : ("batchActionPrecheck"));
            } elseif ((            // line 11
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 11, $this->source); })()) === "delete")) {
                // line 12
                $context["btnClass"] = "danger";
                // line 13
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 13, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 14
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 14, $this->source); })()), "ri-delete-bin-line")) : ("ri-delete-bin-line"));
                // line 15
                $context["btnText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("btnText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 15, $this->source); })()), "mautic.core.form.delete")) : ("mautic.core.form.delete")));
            }
        }
        // line 19
        $context["btnClass"] = (((array_key_exists("btnClass", $context) &&  !(null === $context["btnClass"]))) ? ($context["btnClass"]) : ("btn btn-ghost"));
        // line 21
        $context["btnTextAttr"] = ((array_key_exists("btnTextAttr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 21, $this->source); })()), "")) : (""));
        // line 23
        if (array_key_exists("btnTextClass", $context)) {
            // line 24
            $context["btnTextAttr"] = ((((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 24, $this->source); })()) . " class=\"") . (isset($context["btnTextClass"]) || array_key_exists("btnTextClass", $context) ? $context["btnTextClass"] : (function () { throw new RuntimeError('Variable "btnTextClass" does not exist.', 24, $this->source); })())) . "\"");
        }
        // line 27
        $context["confirmAction"] = ((array_key_exists("confirmAction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 27, $this->source); })()), "javascript:void(0);")) : ("javascript:void(0);"));
        // line 29
        if (( !array_key_exists("confirmCallback", $context) &&  !((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 29, $this->source); })()) === "javascript:void(0);"))) {
            // line 30
            $context["confirmCallback"] = "executeAction";
        }
        // line 33
        $context["cancelText"] = ((array_key_exists("cancelText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 33, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel")));
        // line 35
        $context["cancelCallback"] = ((array_key_exists("cancelCallback", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 35, $this->source); })()), "dismissConfirmation")) : ("dismissConfirmation"));
        // line 37
        $context["attr"] = ((array_key_exists("attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), [])) : ([]));
        // line 38
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 38, $this->source); })()))) {
            // line 39
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), ["data-confirm-callback" => (isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 39, $this->source); })())]);
        }
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 41, $this->source); })()))) {
            // line 42
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()), ["data-cancel-text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 42, $this->source); })()), "js")]);
        }
        // line 44
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 44, $this->source); })()))) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["data-confirm-text" => (isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 45, $this->source); })())]);
        }
        // line 47
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 47, $this->source); })()))) {
            // line 48
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 48, $this->source); })()), ["data-cancel-callback" => (isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 48, $this->source); })())]);
        }
        // line 50
        if ((array_key_exists("target", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 50, $this->source); })())))) {
            // line 51
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 51, $this->source); })()), ["data-target" => (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 51, $this->source); })())]);
        }
        // line 54
        $context["tag"] = ((array_key_exists("tag", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 54, $this->source); })()), "a")) : ("a"));
        // line 55
        $context["buttonType"] = ((("button" === (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 55, $this->source); })()))) ? (" type=\"button\"") : (""));
        // line 57
        if ( !array_key_exists("wrapOpeningTag", $context)) {
            // line 58
            yield "    ";
            $context["wrapOpeningTag"] = "";
            // line 59
            yield "    ";
            $context["wrapClosingTag"] = "";
        }
        // line 62
        $context["tooltipAttr"] = "";
        // line 63
        if (array_key_exists("tooltip", $context)) {
            // line 64
            yield "    ";
            if ( !array_key_exists("tooltipPosition", $context)) {
                // line 65
                yield "        ";
                $context["tooltipPosition"] = "left";
                // line 66
                yield "    ";
            }
            // line 67
            yield "    ";
            $context["tooltipAttr"] = ((((" data-toogle=\"tooltip\" title=\"" . (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 67, $this->source); })())) . "\" data-placement=\"") . (isset($context["tooltipPosition"]) || array_key_exists("tooltipPosition", $context) ? $context["tooltipPosition"] : (function () { throw new RuntimeError('Variable "tooltipPosition" does not exist.', 67, $this->source); })())) . "\"");
        }
        // line 70
        $context["precheck"] = ((array_key_exists("precheck", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 70, $this->source); })()), "")) : (""));
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "
<";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 72, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "
    id=\"delete\"
    class=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\"
    href=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "\"
    data-toggle=\"confirmation\"
    data-precheck=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\"
    data-message=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 78, $this->source); })()));
        yield "\"
    ";
        // line 79
        if (!CoreExtension::inFilter("data-confirm-text", Twig\Extension\CoreExtension::keys((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 79, $this->source); })())))) {
            yield "data-confirm-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 79, $this->source); })()));
            yield "\"";
        }
        // line 80
        yield "    ";
        yield Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 80, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 80, $this->source); })())); }), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 80, $this->source); })()) . "=\"") . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())) . "\""); }), " ");
        yield ">
    ";
        // line 81
        if (array_key_exists("iconClass", $context)) {
            // line 82
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 82, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltipAttr"]) || array_key_exists("tooltipAttr", $context) ? $context["tooltipAttr"] : (function () { throw new RuntimeError('Variable "tooltipAttr" does not exist.', 82, $this->source); })()), "html", null, true);
            yield "\"></i>
    ";
        }
        // line 84
        yield "    ";
        if (array_key_exists("btnText", $context)) {
            // line 85
            yield "        <span";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 85, $this->source); })()), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "</span>
    ";
        }
        // line 87
        yield "</";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 87, $this->source); })()), "html", null, true);
        yield ">
";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 88, $this->source); })()), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/confirm.html.twig";
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
        return array (  218 => 88,  213 => 87,  205 => 85,  202 => 84,  195 => 82,  193 => 81,  188 => 80,  182 => 79,  178 => 78,  174 => 77,  169 => 75,  165 => 74,  159 => 72,  155 => 71,  153 => 70,  149 => 67,  146 => 66,  143 => 65,  140 => 64,  138 => 63,  136 => 62,  132 => 59,  129 => 58,  127 => 57,  125 => 55,  123 => 54,  120 => 51,  118 => 50,  115 => 48,  113 => 47,  110 => 45,  108 => 44,  105 => 42,  103 => 41,  100 => 39,  98 => 38,  96 => 37,  94 => 35,  92 => 33,  89 => 30,  87 => 29,  85 => 27,  82 => 24,  80 => 23,  78 => 21,  76 => 19,  72 => 15,  70 => 14,  68 => 13,  66 => 12,  64 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/confirm.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/confirm.html.twig");
    }
}
