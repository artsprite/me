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

/* @MauticCore/Helper/toggletip.html.twig */
class __TwigTemplate_46fc238d5475b8b7ea7be01832fdd4cb extends Template
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
        // line 2
        $context["classes"] = ["btn", "btn-nospin", "btn-ghost"];
        // line 3
        $context["is_icon_only"] =  !(array_key_exists("label", $context) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })()));
        // line 4
        $context["size_class"] = ((((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 4, $this->source); })()) &&  !(array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })())))) ? ("btn-toggletip") : ((((array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })()))) ? (("btn-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })()))) : ("btn-xs"))));
        // line 5
        $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 5, $this->source); })()), [(isset($context["size_class"]) || array_key_exists("size_class", $context) ? $context["size_class"] : (function () { throw new RuntimeError('Variable "size_class" does not exist.', 5, $this->source); })())]);
        // line 6
        yield "
";
        // line 7
        if ((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "    ";
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 8, $this->source); })()), ["btn-icon", ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 8, $this->source); })()), "ri-information-2-line")) : ("ri-information-2-line")), "ri-1x"]);
        } else {
            // line 10
            yield "    ";
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 10, $this->source); })()), ["gap-5"]);
        }
        // line 12
        yield "
<span data-toggle=\"tooltip\" title=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("tooltip", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 13, $this->source); })()), "mautic.core.toggletip")) : ("mautic.core.toggletip"))), "html", null, true);
        yield "\" data-placement=\"top\">
    <button type=\"button\"
        class=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 15, $this->source); })()), " "), "html", null, true);
        yield "\"
        data-toggle=\"popover\"
        data-container=\"body\"
        data-placement=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 18, $this->source); })()), "right")) : ("right")), "html", null, true);
        yield "\"
        data-html=\"";
        // line 19
        yield (((array_key_exists("html", $context) && (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 19, $this->source); })()))) ? ("true") : ("false"));
        yield "\"
        data-trigger=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("trigger", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 20, $this->source); })()), "focus")) : ("focus")), "html", null, true);
        yield "\"
        ";
        // line 21
        if ((array_key_exists("selector", $context) && (isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 21, $this->source); })()))) {
            yield " data-selector=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\" ";
        }
        // line 22
        yield "        ";
        if ((array_key_exists("title", $context) && (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()))) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })())), "html", null, true);
            yield "\" ";
        }
        // line 23
        yield "        ";
        if ((array_key_exists("content", $context) && (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 23, $this->source); })()))) {
            yield " data-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 23, $this->source); })())), "html", null, true);
            yield "\" ";
        }
        // line 24
        yield "        aria-haspopup=\"true\"
        aria-label=\"";
        // line 25
        if ((( !(isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 25, $this->source); })()) && array_key_exists("label", $context)) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())), "html", null, true);
        } elseif ((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 25, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.toggletip"), "html", null, true);
        }
        yield "\"
    >
        ";
        // line 27
        if ( !(isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "            <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 28, $this->source); })()), "ri-information-2-line")) : ("ri-information-2-line")), "html", null, true);
            yield " ri-1x\"></i>
        ";
        }
        // line 30
        yield "        ";
        if ((array_key_exists("label", $context) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })()))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })())), "html", null, true);
            yield " ";
        }
        // line 31
        yield "    </button>
</span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/toggletip.html.twig";
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
        return array (  136 => 31,  129 => 30,  123 => 28,  121 => 27,  112 => 25,  109 => 24,  102 => 23,  95 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  71 => 15,  66 => 13,  63 => 12,  59 => 10,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/toggletip.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/toggletip.html.twig");
    }
}
