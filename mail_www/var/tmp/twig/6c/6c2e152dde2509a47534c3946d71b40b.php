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

/* @MauticPage/Page/_list.html.twig */
class __TwigTemplate_0a7f24a8440a9372510fef79052fe9b7 extends Template
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
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover pagetable-list\" id=\"pageTable\">
            <thead>
            <tr>
                ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pageTable"]);
            // line 21
            yield "

                ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.title", "text" => "mautic.core.title", "class" => "col-page-title"]);
            // line 28
            yield "

                ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-page-category"]);
            // line 35
            yield "

                ";
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.hits", "text" => "mautic.page.thead.hits", "class" => "col-page-hits visible-md visible-lg"]);
            // line 42
            yield "

                ";
            // line 44
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "col-page-dateAdded visible-md visible-lg"]);
            // line 49
            yield "

                ";
            // line 51
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "col-page-dateModified visible-md visible-lg", "default" => true]);
            // line 57
            yield "

                ";
            // line 59
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.createdByUser", "text" => "mautic.core.createdby", "class" => "col-page-createdByUser visible-md visible-lg"]);
            // line 64
            yield "

                ";
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-page-submissions"]);
            // line 71
            yield "

                ";
            // line 73
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "col-page-id visible-md visible-lg"]);
            // line 78
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 82, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                yield "                ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 83);
                // line 84
                yield "                <tr>
                    <td>
                        ";
                // line 86
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 87
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 87, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 89
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 89, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 89, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "createdBy", [], "any", false, false, false, 89)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "page:pages:create", [], "array", false, false, false, 90), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 91
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 91, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 91, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "createdBy", [], "any", false, false, false, 91))], "routeBase" => "page", "nameGetter" => "getTitle"]);
                // line 95
                yield "
                    </td>
                    <td>
                        ";
                // line 98
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "model" => "page.page"]);
                yield "
                        <a href=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "title", [], "any", false, false, false, 100), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "alias", [], "any", false, false, false, 100), "html", null, true);
                yield ")
                            ";
                // line 101
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "isVariant", [], "any", false, false, false, 101) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "isTranslation", [], "any", false, false, false, 101)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 101))) {
                    // line 102
                    yield "                                <span>
                                    ";
                    // line 103
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "isVariant", [], "any", false, false, false, 103)) {
                        // line 104
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-fw ri-organization-chart\"></i>
                                        </span>
                                    ";
                    }
                    // line 108
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 108, $this->source); })()), "isTranslation", [], "any", false, false, false, 108)) {
                        // line 109
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-fw ri-translate\"></i>
                                        </span>
                                    ";
                    }
                    // line 113
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 113)) {
                        // line 114
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-settings-5-line\"></i>
                                        </span>
                                    ";
                    }
                    // line 118
                    yield "                                </span>
                            ";
                }
                // line 120
                yield "                        </a>
                        ";
                // line 121
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("page.name", $context);
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 124
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 124, $this->source); })()), "category", [], "any", false, false, false, 124);
                // line 125
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 125, $this->source); })()), "title", [], "any", false, false, false, 125), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 126
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 126, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 126, $this->source); })()), "color", [], "any", false, false, false, 126))) : (""));
                // line 127
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 127, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 127, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "hits", [], "any", false, false, false, 129), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 130
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "dateAdded", [], "any", false, false, false, 130)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "dateAdded", [], "any", false, false, false, 130));
                }
                yield "\">
                        ";
                // line 131
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "dateAdded", [], "any", false, false, false, 131)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "dateAdded", [], "any", false, false, false, 131));
                }
                // line 132
                yield "                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 133
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateModified", [], "any", false, false, false, 133)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateModified", [], "any", false, false, false, 133));
                }
                yield "\">
                        ";
                // line 134
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "dateModified", [], "any", false, false, false, 134)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "dateModified", [], "any", false, false, false, 134));
                }
                // line 135
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "createdByUser", [], "any", false, false, false, 136), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" size=\"sm\" class=\"label label-gray\" ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 138))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 139)]), "html", null, true);
                // line 140
                yield "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142), "html", null, true);
                yield "</td>
                </tr>
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 148
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 149
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 149, $this->source); })())), "page" =>             // line 150
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 150, $this->source); })()), "limit" =>             // line 151
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 151, $this->source); })()), "menuLinkId" => "mautic_page_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_index"), "sessionVar" => "page"]);
            // line 155
            yield "
        </div>
    </div>
";
        } else {
            // line 159
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
        return "@MauticPage/Page/_list.html.twig";
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
        return array (  302 => 159,  296 => 155,  294 => 151,  293 => 150,  292 => 149,  291 => 148,  286 => 145,  269 => 142,  265 => 140,  263 => 139,  256 => 138,  251 => 136,  248 => 135,  244 => 134,  238 => 133,  235 => 132,  231 => 131,  225 => 130,  221 => 129,  213 => 127,  210 => 126,  207 => 125,  205 => 124,  199 => 121,  196 => 120,  192 => 118,  184 => 114,  181 => 113,  173 => 109,  170 => 108,  162 => 104,  160 => 103,  157 => 102,  155 => 101,  149 => 100,  145 => 99,  141 => 98,  136 => 95,  134 => 91,  133 => 90,  132 => 89,  131 => 87,  130 => 86,  126 => 84,  123 => 83,  106 => 82,  100 => 78,  98 => 73,  94 => 71,  92 => 66,  88 => 64,  86 => 59,  82 => 57,  80 => 51,  76 => 49,  74 => 44,  70 => 42,  68 => 37,  64 => 35,  62 => 30,  58 => 28,  56 => 23,  52 => 21,  50 => 18,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/_list.html.twig", "/home/me/mail_www/app/bundles/PageBundle/Resources/views/Page/_list.html.twig");
    }
}
