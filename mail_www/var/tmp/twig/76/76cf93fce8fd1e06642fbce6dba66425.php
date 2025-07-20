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

/* @MauticCore/Default/base.html.twig */
class __TwigTemplate_d079c97341545f09858c64decb81a858 extends Template
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
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html theme=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, true, false, 2), "getPreferences", [], "method", false, true, false, 2), "theme", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "getUser", [], "method", false, false, false, 2), "getPreferences", [], "method", false, false, false, 2), "theme", [], "any", false, false, false, 2), "light")) : ("light")), "html", null, true);
        yield "\" accent=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get(Twig\Extension\CoreExtension::default("accent", "01")), "html", null, true);
        yield "\" reduce-transparency=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, true, false, 2), "getPreferences", [], "method", false, true, false, 2), "reduce_transparency", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "getUser", [], "method", false, false, false, 2), "getPreferences", [], "method", false, false, false, 2), "reduce_transparency", [], "any", false, false, false, 2), "false")) : ("false")), "html", null, true);
        yield "\" reduce-motion=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, true, false, 2), "getPreferences", [], "method", false, true, false, 2), "reduce_motion", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "getUser", [], "method", false, false, false, 2), "getPreferences", [], "method", false, false, false, 2), "reduce_motion", [], "any", false, false, false, 2), "false")) : ("false")), "html", null, true);
        yield "\" contrast-borders=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, true, false, 2), "getPreferences", [], "method", false, true, false, 2), "contrast_borders", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "getUser", [], "method", false, false, false, 2), "getPreferences", [], "method", false, false, false, 2), "contrast_borders", [], "any", false, false, false, 2), "false")) : ("false")), "html", null, true);
        yield "\" enable-underlines=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "getUser", [], "method", false, true, false, 2), "getPreferences", [], "method", false, true, false, 2), "enable_underlines", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "getUser", [], "method", false, false, false, 2), "getPreferences", [], "method", false, false, false, 2), "enable_underlines", [], "any", false, false, false, 2), "false")) : ("false")), "html", null, true);
        yield "\">
    ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/head.html.twig", ["headerTitle" => ((        $this->unwrap()->hasBlock("headerTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("headerTitle", $context, $blocks)) : (((        // line 4
array_key_exists("headerTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()), "")) : ("")))), "pageTitle" => ((        $this->unwrap()->hasBlock("pageTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("pageTitle", $context, $blocks)) : ("Mautic"))]);
        // line 7
        yield "
    <body class=\"header-fixed\">
        <section id=\"app-wrapper\">
            ";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        yield "

            ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        yield "
            ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/tokens_help.html.twig");
        yield "
            ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/keyboard_shortcuts.html.twig");
        yield "
            ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/search_commands.html.twig");
        yield "
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::globalSearchAction"));
        yield "

            <aside class=\"app-sidebar sidebar-left\">
                ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/LeftPanel/index.html.twig");
        yield "
            </aside>

            <header id=\"app-header\" class=\"navbar\">
                ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/navbar.html.twig");
        yield "
            </header>

            <!-- start: app-footer(need to put on top of #app-content)-->
            <footer id=\"app-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 text-secondary\">";
        // line 30
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.copyright", ["%date%" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")], "messages");
        yield "</div>
                        <div class=\"col-xs-6 text-secondary text-right small\">v";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\VersionExtension']->getVersion(), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </footer>
            <!--/ end: app-footer -->

            <section id=\"app-content\">
                ";
        // line 38
        yield from $this->unwrap()->yieldBlock('_content', $context, $blocks);
        // line 41
        yield "            </section>

            <script>
                Mautic.onPageLoad('body');
                ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "environment", [], "any", false, false, false, 45) === "dev")) {
            // line 46
            yield "                mQuery( document ).ajaxComplete(function(event, XMLHttpRequest, ajaxOption){
                    if(XMLHttpRequest.responseJSON && typeof XMLHttpRequest.responseJSON.ignore_wdt == 'undefined' && XMLHttpRequest.getResponseHeader('x-debug-token')) {
                        if (mQuery('[class*=\"sf-tool\"]').length) {
                            mQuery('[class*=\"sf-tool\"]').remove();
                        }

                        mQuery.get(mauticBaseUrl + '_wdt/'+XMLHttpRequest.getResponseHeader('x-debug-token'),function(data){
                            mQuery('body').append('<div class=\"sf-toolbar-reload\">'+data+'</div>');
                        });
                    }
                });
                ";
        }
        // line 58
        yield "            </script>
            ";
        // line 59
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        yield "
            ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 63
        yield "
        </section>
    </body>
</html>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/output.html.twig");
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/base.html.twig";
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
        return array (  175 => 39,  168 => 38,  159 => 63,  157 => 60,  153 => 59,  150 => 58,  136 => 46,  134 => 45,  128 => 41,  126 => 38,  116 => 31,  112 => 30,  102 => 23,  95 => 19,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  68 => 10,  63 => 7,  61 => 4,  60 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/base.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Default/base.html.twig");
    }
}
