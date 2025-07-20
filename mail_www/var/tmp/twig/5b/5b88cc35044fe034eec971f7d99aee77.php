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

/* @MauticAsset/Asset/list.html.twig */
class __TwigTemplate_4e352e6152b7c5aef96ec167b36d2d78 extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticAsset/Asset/list.html.twig", 4);
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

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.assets", [], "messages");
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "\t\t<div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 15
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 16
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 16, $this->source); })()), "action" =>             // line 17
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 17, $this->source); })()), "page_actions" => ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 20)], "routeBase" => "asset", "langVar" => "asset.asset"], "bulk_actions" => ["langVar" => "asset.asset", "routeBase" => "asset", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 29) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 29))]], "quickFilters" => [["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.search.quickfilter.is_uncategorized", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.available", "tooltip" => "mautic.core.search.quickfilter.is_published", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.unavailable", "tooltip" => "mautic.core.search.quickfilter.is_unpublished", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 59
            yield "<div class=\"page-list\">
\t\t\t\t";
            // line 60
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 64
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 69, $this->source); })()))) {
            // line 70
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover asset-list\" id=\"assetTable\">
            <thead>
            <tr>
                ";
            // line 74
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#assetTable"]);
            // line 78
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.title", "text" => "mautic.core.title", "class" => "col-asset-title"]);
            // line 87
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-asset-category"]);
            // line 96
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.downloadCount", "text" => "mautic.asset.asset.thead.download.count", "class" => "visible-md visible-lg col-asset-download-count"]);
            // line 105
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-asset-dateAdded"]);
            // line 114
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-asset-dateModified", "default" => true]);
            // line 124
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-asset-createdByUser"]);
            // line 133
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-asset-id"]);
            // line 142
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 145, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 146
                yield "                <tr>
                    <td>";
                // line 148
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 151
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 154
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 154, $this->source); })()), "asset:assets:editown", [], "array", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source,                 // line 155
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "asset:assets:editother", [], "array", false, false, false, 155), CoreExtension::getAttribute($this->env, $this->source,                 // line 156
$context["item"], "getCreatedBy", [], "method", false, false, false, 156)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 159
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 159, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 159), CoreExtension::getAttribute($this->env, $this->source,                 // line 160
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 160, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source,                 // line 161
$context["item"], "getCreatedBy", [], "method", false, false, false, 161)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 163
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 163, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 163)], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle", "customButtons" => [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#AssetPreviewModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 175
$context["item"], "getId", [], "method", false, false, false, 175)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.preview"), "iconClass" => "ri-image-circle-line"]]]);
                // line 184
                yield "</td>
                    <td>
                        <div>";
                // line 187
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 190
$context["item"], "model" => "asset.asset"]);
                // line 194
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 196
$context["item"], "getId", [], "method", false, false, false, 196)]), "html", null, true);
                // line 197
                yield "\"
                               data-toggle=\"ajax\">
                                ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 199), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 199), "html", null, true);
                yield ")
                            </a>
                            <i class=\"";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getIconClass", [], "method", false, false, false, 201), "html", null, true);
                yield "\"></i>
                            ";
                // line 202
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("asset.name", $context);
                yield "
                        </div>
                        ";
                // line 204
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 204);
                // line 205
                yield "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 205, $this->source); })())) {
                    // line 206
                    yield "                            <div class=\"text-secondary mt-4\">
                                <small>";
                    // line 207
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 207, $this->source); })()));
                    yield "</small>
                            </div>
                        ";
                }
                // line 210
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 212
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 212);
                // line 213
                yield "                        ";
                [$context["catName"], $context["color"]] =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 213, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 213, $this->source); })()), "getTitle", [], "method", false, false, false, 213)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 213, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 213, $this->source); })()), "getColor", [], "method", false, false, false, 213))) : (""))];
                // line 214
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 214, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 214, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDownloadCount", [], "method", false, false, false, 216), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 217
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 217)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 217))) : (""));
                yield "\">
                        ";
                // line 218
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 218)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 218))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 220
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 220)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 220))) : (""));
                yield "\">
                        ";
                // line 221
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 221)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 221))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 223), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 224), "html", null, true);
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
            unset($context['_seq'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            yield "            </tbody>
        </table>
    </div>

    <div class=\"panel-footer\">";
            // line 232
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 233
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 233, $this->source); })())), "page" =>             // line 234
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 234, $this->source); })()), "limit" =>             // line 235
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 235, $this->source); })()), "menuLinkId" => "mautic_asset_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_index"), "sessionVar" => "asset"]);
            // line 240
            yield "</div>
";
        } else {
            // line 242
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.asset.noresults.tip"]);
        }
        // line 245
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "AssetPreviewModal", "header" => false]);
        // line 250
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.assets.gating", "mautic.protip.assets.naming", "mautic.protip.assets.repurpose", "mautic.protip.assets.track"])]);
        // line 252
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Asset/list.html.twig";
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
        return array (  314 => 252,  312 => 250,  310 => 245,  307 => 242,  303 => 240,  301 => 235,  300 => 234,  299 => 233,  298 => 232,  292 => 227,  275 => 224,  271 => 223,  266 => 221,  262 => 220,  257 => 218,  253 => 217,  249 => 216,  241 => 214,  238 => 213,  236 => 212,  232 => 210,  226 => 207,  223 => 206,  220 => 205,  218 => 204,  213 => 202,  209 => 201,  202 => 199,  198 => 197,  196 => 196,  194 => 194,  192 => 190,  191 => 187,  187 => 184,  185 => 175,  184 => 163,  183 => 161,  182 => 160,  181 => 159,  180 => 156,  179 => 155,  178 => 154,  177 => 151,  176 => 148,  173 => 146,  156 => 145,  151 => 142,  149 => 133,  147 => 124,  145 => 114,  143 => 105,  141 => 96,  139 => 87,  137 => 78,  135 => 74,  129 => 70,  127 => 69,  120 => 68,  111 => 64,  104 => 60,  101 => 59,  99 => 29,  98 => 20,  97 => 17,  96 => 16,  95 => 15,  93 => 13,  90 => 12,  83 => 11,  77 => 8,  70 => 7,  58 => 5,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/list.html.twig", "/home/me/mail_www/app/bundles/AssetBundle/Resources/views/Asset/list.html.twig");
    }
}
