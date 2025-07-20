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

/* @MauticLead/List/_list.html.twig */
class __TwigTemplate_1653f045b0a0d7f7236fffb8d28c1d80 extends Template
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
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadListTable\">
            <thead>
            <tr>
                ";
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadListTable"]);
            // line 16
            yield "
                ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.name", "text" => "mautic.core.name", "class" => "col-leadlist-name"]);
            // line 22
            yield "
                ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 27
            yield "
                ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-leadlist-dateAdded"]);
            // line 33
            yield "
                ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-leadlist-dateModified", "default" => true]);
            // line 40
            yield "
                ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-leadlist-createdByUser"]);
            // line 46
            yield "
                ";
            // line 47
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-leadlist-id"]);
            // line 52
            yield "
            </tr>
            </thead>
            <tbody>
              ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/List/_list_row.html.twig", ["item" => $context["item"]]);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 62
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 63
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 63, $this->source); })())), "page" =>             // line 64
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), "limit" =>             // line 65
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 65, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_index"), "sessionVar" => "lead.list"]);
            // line 68
            yield "
        </div>
    </div>
";
        } else {
            // line 72
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
        return "@MauticLead/List/_list.html.twig";
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
        return array (  138 => 72,  132 => 68,  130 => 65,  129 => 64,  128 => 63,  127 => 62,  122 => 59,  105 => 57,  88 => 56,  82 => 52,  80 => 47,  77 => 46,  75 => 41,  72 => 40,  70 => 34,  67 => 33,  65 => 28,  62 => 27,  60 => 23,  57 => 22,  55 => 17,  52 => 16,  50 => 13,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/_list.html.twig", "/home/me/mail_www/app/bundles/LeadBundle/Resources/views/List/_list.html.twig");
    }
}
