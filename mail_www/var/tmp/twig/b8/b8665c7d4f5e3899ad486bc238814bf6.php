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

/* @MauticLead/Lead/_list.html.twig */
class __TwigTemplate_0451d37a4bac082de4e4d863df3ce9af extends Template
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
        yield "

";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadTable\">
            <thead>
                <tr>
                    ";
            // line 8
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadTable"]);
            // line 11
            yield "

                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 13, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["column"] => $context["label"]) {
                // line 14
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, [(("@MauticLead/Lead/_list_header_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_header_default.html.twig"], ["label" =>                 // line 15
$context["label"], "column" =>                 // line 16
$context["column"], "class" => ((CoreExtension::inFilter(                // line 17
$context["column"], Twig\Extension\CoreExtension::keys((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 17, $this->source); })())))) ? ("hidden-xs") : (""))]);
                // line 18
                yield "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['column'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                </tr>
            </thead>
            <tbody>
                ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_list_rows.html.twig", ["items" =>             // line 24
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })()), "columns" =>             // line 25
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 25, $this->source); })()), "security" =>             // line 26
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 26, $this->source); })()), "currentList" =>             // line 27
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 27, $this->source); })()), "permissions" =>             // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "noContactList" =>             // line 29
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 29, $this->source); })())]);
            // line 30
            yield "
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 35
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 36
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 36, $this->source); })()), "page" =>             // line 37
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "limit" =>             // line 38
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), "menuLinkId" => "mautic_contact_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index"), "tmpl" =>             // line 41
(isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 41, $this->source); })()), "sessionVar" => "lead"]);
            // line 43
            yield "
    </div>
";
        } else {
            // line 46
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
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
        return "@MauticLead/Lead/_list.html.twig";
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
        return array (  129 => 46,  124 => 43,  122 => 41,  121 => 38,  120 => 37,  119 => 36,  118 => 35,  111 => 30,  109 => 29,  108 => 28,  107 => 27,  106 => 26,  105 => 25,  104 => 24,  103 => 23,  98 => 20,  83 => 18,  81 => 17,  80 => 16,  79 => 15,  77 => 14,  60 => 13,  56 => 11,  54 => 8,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_list.html.twig", "/home/me/mail_www/app/bundles/LeadBundle/Resources/views/Lead/_list.html.twig");
    }
}
