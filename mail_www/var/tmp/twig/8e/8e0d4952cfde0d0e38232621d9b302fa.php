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

/* @MauticDynamicContent/DynamicContent/_list.html.twig */
class __TwigTemplate_acd530f3f4a8197dfd1bffe2a116c40b extends Template
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
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover dwctable-list\" id=\"dwcTable\">
            <thead>
            <tr>
                ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#dwcTable"]);
            // line 20
            yield "

                ";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-dwc-name", "default" => true]);
            // line 28
            yield "

                ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.slotName", "text" => "mautic.dynamicContent.label.slot_name", "class" => "col-dwc-slotname visible-md visible-lg"]);
            // line 35
            yield "

                ";
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "col-dwc-category visible-md visible-lg"]);
            // line 42
            yield "

                ";
            // line 44
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-dwc-id visible-md visible-lg"]);
            // line 49
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 53, $this->source); })()));
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
                // line 54
                yield "                <tr>
                    <td>
                        ";
                // line 56
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 57
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 59
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 59, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 59, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 59)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 60
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 60, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 60), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 61
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 61))], "routeBase" => "dynamicContent", "nameGetter" => "getName"]);
                // line 65
                yield "
                    </td>
                    <td>
                        ";
                // line 68
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "dynamicContent"]);
                yield "
                        <a href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70), "html", null, true);
                yield "
                            ";
                // line 71
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 71) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 71)) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isCampaignBased", [], "any", false, false, false, 71))) {
                    // line 72
                    yield "                                <span>
                                  ";
                    // line 73
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 73)) {
                        // line 74
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-organization-chart\"></i></span>
                                    ";
                    }
                    // line 76
                    yield "                                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 76)) {
                        // line 77
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-translate\"></i></span>
                                ";
                    }
                    // line 79
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isCampaignBased", [], "any", false, false, false, 79)) {
                        // line 80
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dwc.form.is.campaign.tooltip"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-megaphone-line\"></i></span>
                                  ";
                    }
                    // line 82
                    yield "                                 </span>
                            ";
                }
                // line 84
                yield "                        </a>
                        ";
                // line 85
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("dynamiccontent.name", $context);
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slotName", [], "any", false, false, false, 87), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 89
                $context["catName"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 89))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 89), "title", [], "any", false, false, false, 89)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 90
                yield "                        ";
                $context["color"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 90))) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 90), "color", [], "any", false, false, false, 90))) : (""));
                // line 91
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 91, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 91, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 93), "html", null, true);
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
            // line 96
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 99
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 100
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 100, $this->source); })())), "page" =>             // line 101
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 101, $this->source); })()), "limit" =>             // line 102
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 102, $this->source); })()), "menuLinkId" => "mautic_dynamicContent_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_index"), "sessionVar" => "dynamicContent"]);
            // line 106
            yield "
        </div>
    </div>
";
        } else {
            // line 110
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
        return "@MauticDynamicContent/DynamicContent/_list.html.twig";
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
        return array (  220 => 110,  214 => 106,  212 => 102,  211 => 101,  210 => 100,  209 => 99,  204 => 96,  187 => 93,  179 => 91,  176 => 90,  174 => 89,  169 => 87,  164 => 85,  161 => 84,  157 => 82,  151 => 80,  148 => 79,  142 => 77,  139 => 76,  133 => 74,  131 => 73,  128 => 72,  126 => 71,  122 => 70,  118 => 69,  114 => 68,  109 => 65,  107 => 61,  106 => 60,  105 => 59,  104 => 57,  103 => 56,  99 => 54,  82 => 53,  76 => 49,  74 => 44,  70 => 42,  68 => 37,  64 => 35,  62 => 30,  58 => 28,  56 => 22,  52 => 20,  50 => 17,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/_list.html.twig", "/home/me/mail_www/app/bundles/DynamicContentBundle/Resources/views/DynamicContent/_list.html.twig");
    }
}
