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

/* @MauticCampaign/Campaign/list.html.twig */
class __TwigTemplate_2f4c3a91d87ae67a8ad5acc16a96a597 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCampaign/Campaign/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 12
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 13
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 13, $this->source); })()), "action" =>             // line 14
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 14, $this->source); })()), "actionRoute" =>             // line 15
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 15, $this->source); })()), "indexRoute" =>             // line 16
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 16, $this->source); })()), "translationBase" =>             // line 17
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()), "preCustomButtons" => ((            // line 18
array_key_exists("toolBarButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 18, $this->source); })()), null)) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 20, $this->source); })()) . ":delete"), [], "array", false, false, false, 20)], "filters" => ((            // line 22
array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), [])) : ([])), "page_actions" => ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 25
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 25, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 25)], "routeBase" => "campaign", "langVar" => "campaign.campaigns"], "bulk_actions" => ["routeBase" => "campaign", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 33
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 33) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 33))]], "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 63
            yield "<div class=\"page-list\">";
            // line 64
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
        }
        // line 66
        yield "
  ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 67, $this->source); })())) > 0)) {
            // line 68
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover campaign-list\" id=\"campaignTable\">
          <thead>
            <tr>
                ";
            // line 72
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#campaignTable"]);
            // line 77
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.name", "text" => "mautic.core.name", "class" => "col-campaign-name"]);
            // line 84
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-campaign-category"]);
            // line 91
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-campaign-dateAdded"]);
            // line 98
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-campaign-dateModified", "default" => true]);
            // line 106
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-campaign-createdByUser"]);
            // line 113
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-campaign-id"]);
            // line 119
            yield "</tr>
          </thead>
          <tbody>
            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 122, $this->source); })()));
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
                // line 123
                yield "                <tr>
                    <td>";
                // line 125
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 126
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 129
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 129, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source,                 // line 130
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 130, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source,                 // line 131
$context["item"], "createdBy", [], "any", false, false, false, 131)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 133
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 133, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 133), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 135
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 135, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 135), CoreExtension::getAttribute($this->env, $this->source,                 // line 136
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 136, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 136), CoreExtension::getAttribute($this->env, $this->source,                 // line 137
$context["item"], "createdBy", [], "any", false, false, false, 137))], "routeBase" => "campaign"]);
                // line 142
                yield "</td>
                    <td>
                        <div>
                          ";
                // line 145
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 146
$context["item"], "model" => "campaign", "onclick" => CoreExtension::getAttribute($this->env, $this->source,                 // line 148
$context["item"], "onclickMethod", [], "any", false, false, false, 148), "attributes" => CoreExtension::getAttribute($this->env, $this->source,                 // line 149
$context["item"], "dataAttributes", [], "any", false, false, false, 149), "transKeys" => CoreExtension::getAttribute($this->env, $this->source,                 // line 150
$context["item"], "translationKeysDataAttributes", [], "any", false, false, false, 150)]);
                // line 151
                yield "
                            <a href=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 153), "html", null, true);
                // line 154
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("campaign.name", Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]));
                // line 155
                yield "</a>
                        </div>";
                // line 157
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 157)) {
                    // line 158
                    yield "<div class=\"text-secondary mt-4\"><small>";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 158));
                    yield "</small></div>";
                }
                // line 160
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 162
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 162);
                // line 163
                yield "                        ";
                [$context["catName"], $context["color"]] =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })()), "title", [], "any", false, false, false, 163)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 163, $this->source); })()), "color", [], "any", false, false, false, 163))) : ("#"))];
                // line 164
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 164, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 164, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 166
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 166)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 166))) : (""));
                yield "\">
                        ";
                // line 167
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 167)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 167))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 169
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 169)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 169))) : (""));
                yield "\">
                        ";
                // line 170
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 170)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 170))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdByUser", [], "any", false, false, false, 172), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 173), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 180
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 181
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 181, $this->source); })())), "page" =>             // line 182
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 182, $this->source); })()), "limit" =>             // line 183
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "menuLinkId" => "mautic_campaign_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_index"), "sessionVar" => "campaign"]);
            // line 188
            yield "</div>
  ";
        } else {
            // line 190
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.campaign.noresults.tip"]);
        }
        // line 192
        yield "
  ";
        // line 193
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 193, $this->source); })())) {
            // line 194
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            // line 195
            yield "</div>
    </div>

    ";
            // line 198
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.campaigns.reengagement", "mautic.protip.campaigns.survey", "mautic.protip.campaigns.crosssell", "mautic.protip.campaigns.onboarding"])]);
            // line 200
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
        return "@MauticCampaign/Campaign/list.html.twig";
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
        return array (  274 => 200,  272 => 198,  267 => 195,  265 => 194,  263 => 193,  260 => 192,  257 => 190,  253 => 188,  251 => 183,  250 => 182,  249 => 181,  248 => 180,  243 => 176,  226 => 173,  222 => 172,  217 => 170,  213 => 169,  208 => 167,  204 => 166,  196 => 164,  193 => 163,  191 => 162,  187 => 160,  182 => 158,  180 => 157,  177 => 155,  175 => 154,  173 => 153,  170 => 152,  167 => 151,  165 => 150,  164 => 149,  163 => 148,  162 => 146,  161 => 145,  156 => 142,  154 => 137,  153 => 136,  152 => 135,  151 => 133,  150 => 131,  149 => 130,  148 => 129,  147 => 126,  146 => 125,  143 => 123,  126 => 122,  121 => 119,  119 => 113,  117 => 106,  115 => 98,  113 => 91,  111 => 84,  109 => 77,  107 => 72,  101 => 68,  99 => 67,  96 => 66,  93 => 64,  91 => 63,  89 => 33,  88 => 25,  87 => 22,  86 => 20,  85 => 18,  84 => 17,  83 => 16,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  77 => 11,  74 => 10,  67 => 9,  56 => 6,  52 => 4,  50 => 2,  48 => 1,  41 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/list.html.twig", "/home/me/mail_www/app/bundles/CampaignBundle/Resources/views/Campaign/list.html.twig");
    }
}
