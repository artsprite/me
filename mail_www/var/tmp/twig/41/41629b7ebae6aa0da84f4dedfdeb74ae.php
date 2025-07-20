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

/* @MauticLead/Company/list.html.twig */
class __TwigTemplate_1b7b3e83f884c417f694d54f375d3a6f extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Company/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "company";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.companies.menu.root"), "html", null, true);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 23, $this->source); })())) {
            // line 24
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 25
            $context["pageButtons"] = [];
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 26)) {
                // line 27
                yield "    ";
                $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 27, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "companies", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"], ["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "companies"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]]);
            }
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 46
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 46, $this->source); })()), "action" =>             // line 47
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), "page_actions" => ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 49)], "routeBase" => "company", "customButtons" =>             // line 51
(isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 51, $this->source); })())], "bulk_actions" => ["routeBase" => "company", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 56
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 56, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 56)]], "quickFilters" => [["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 68
            yield "<div class=\"page-list\">
  ";
        }
        // line 70
        yield "
  ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 71, $this->source); })())) > 0)) {
            // line 72
            yield "      <div class=\"table-responsive page-list\">
          <table class=\"table table-hover company-list\" id=\"companyTable\">
              <thead>
              <tr>
                ";
            // line 76
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#companyTable"]);
            // line 79
            yield "
                  ";
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.name", "class" => "col-company-name", "orderBy" => "comp.companyname"]);
            // line 85
            yield "
                  ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.email", "class" => "visible-md visible-lg col-company-category", "orderBy" => "comp.companyemail"]);
            // line 91
            yield "
                  ";
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.website", "class" => "visible-md visible-lg col-company-website", "orderBy" => "comp.companywebsite"]);
            // line 97
            yield "
                  ";
            // line 98
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.score", "class" => "visible-md visible-lg col-company-score", "orderBy" => "comp.score"]);
            // line 103
            yield "
                  ";
            // line 104
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 108
            yield "
                  ";
            // line 109
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "orderBy" => "comp.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-company-id"]);
            // line 114
            yield "
              </tr>
              </thead>
              <tbody>
              ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 118, $this->source); })()));
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
                // line 119
                yield "                  ";
                $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 119);
                // line 120
                yield "                  <tr>
                      <td>
                          ";
                // line 122
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 123
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 125
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 125, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 125), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 126
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 126, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 126), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 127
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 127, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 127)], "routeBase" => "company"]);
                // line 130
                yield "
                      </td>
                      <td>
                          <div>
                          ";
                // line 134
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 134, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 134, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 134))) {
                    // line 135
                    yield "                              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 136
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 136), "companyname", [], "any", true, true, false, 136)) {
                        // line 137
                        yield "                                  ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 137, $this->source); })()), "core", [], "any", false, false, false, 137), "companyname", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137));
                        yield "
                                ";
                    }
                    // line 139
                    yield "                              </a>
                          ";
                } else {
                    // line 141
                    yield "                              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 141), "companyname", [], "any", true, true, false, 141)) {
                        // line 142
                        yield "                                ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 142, $this->source); })()), "core", [], "any", false, false, false, 142), "companyname", [], "any", false, false, false, 142), "value", [], "any", false, false, false, 142));
                        yield "
                              ";
                    }
                    // line 144
                    yield "                          ";
                }
                // line 145
                yield "                          </div>
                      </td>
                      <td>
                          ";
                // line 148
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 148), "companyemail", [], "any", true, true, false, 148)) {
                    // line 149
                    yield "                            ";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 149, $this->source); })()), "core", [], "any", false, false, false, 149), "companyemail", [], "any", false, false, false, 149), "value", [], "any", false, false, false, 149));
                    yield "
                          ";
                }
                // line 151
                yield "                      </td>

                      <td class=\"visible-md visible-lg\">
                          ";
                // line 154
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 154), "companywebsite", [], "any", true, true, false, 154)) {
                    // line 155
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::url(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 155, $this->source); })()), "core", [], "any", false, false, false, 155), "companywebsite", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155)), "html", null, true);
                    yield "
                          ";
                }
                // line 157
                yield "                      </td>
                      <td class=\"visible-md visible-lg\">
                          <span size=\"sm\" class=\"label label-gray\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 159), "html", null, true);
                yield "</span>
                      </td>
                      <td class=\"visible-md visible-lg\">
                          <a size=\"sm\" class=\"label label-gray\"
                             href=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.company_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 163))]), "html", null, true);
                yield "\"
                             data-toggle=\"ajax\"
                             ";
                // line 165
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 165, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 165), [], "array", false, false, false, 165))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">
                                  ";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 166, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 166), [], "array", false, false, false, 166)]), "html", null, true);
                yield "
                          </a>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 169), "html", null, true);
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
            // line 172
            yield "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 176
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 177
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 177, $this->source); })()), "page" =>             // line 178
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 178, $this->source); })()), "limit" =>             // line 179
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 179, $this->source); })()), "menuLinkId" => "mautic_company_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_index"), "sessionVar" => "company"]);
            // line 183
            yield "
      </div>
  ";
        } else {
            // line 186
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.company.action.noresults.tip"]);
            yield "
  ";
        }
        // line 188
        yield "
  ";
        // line 189
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 189, $this->source); })())) {
            // line 190
            yield "        </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Company/list.html.twig";
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
        return array (  324 => 190,  322 => 189,  319 => 188,  313 => 186,  308 => 183,  306 => 179,  305 => 178,  304 => 177,  303 => 176,  297 => 172,  280 => 169,  274 => 166,  268 => 165,  263 => 163,  256 => 159,  252 => 157,  246 => 155,  244 => 154,  239 => 151,  233 => 149,  231 => 148,  226 => 145,  223 => 144,  217 => 142,  214 => 141,  210 => 139,  204 => 137,  202 => 136,  197 => 135,  195 => 134,  189 => 130,  187 => 127,  186 => 126,  185 => 125,  184 => 123,  183 => 122,  179 => 120,  176 => 119,  159 => 118,  153 => 114,  151 => 109,  148 => 108,  146 => 104,  143 => 103,  141 => 98,  138 => 97,  136 => 92,  133 => 91,  131 => 86,  128 => 85,  126 => 80,  123 => 79,  121 => 76,  115 => 72,  113 => 71,  110 => 70,  106 => 68,  104 => 56,  103 => 51,  102 => 49,  101 => 47,  100 => 46,  99 => 45,  95 => 27,  93 => 26,  91 => 25,  89 => 24,  86 => 23,  79 => 22,  68 => 18,  57 => 16,  53 => 14,  51 => 13,  49 => 12,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/list.html.twig", "/home/me/mail_www/app/bundles/LeadBundle/Resources/views/Company/list.html.twig");
    }
}
