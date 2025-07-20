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

/* @MauticForm/Form/_list.html.twig */
class __TwigTemplate_7456364fae272a72e7b12191885abcd3 extends Template
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
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"formTable\">
            <thead>
            <tr>
                ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#formTable"]);
            // line 20
            yield "

                ";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.name", "text" => "mautic.core.name", "class" => "col-form-name"]);
            // line 27
            yield "

                ";
            // line 29
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-form-category"]);
            // line 34
            yield "

                ";
            // line 36
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-form-submissions"]);
            // line 41
            yield "

                ";
            // line 43
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-form-dateAdded"]);
            // line 48
            yield "

                ";
            // line 50
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-form-dateModified", "default" => true]);
            // line 56
            yield "

                ";
            // line 58
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-form-createdby"]);
            // line 63
            yield "

                ";
            // line 65
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-form-id"]);
            // line 70
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 74, $this->source); })()));
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
                // line 75
                yield "                ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 75);
                // line 76
                yield "                <tr>
                    <td>
                        ";
                // line 78
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 79
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 81
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 81), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 81), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })()), "createdBy", [], "any", false, false, false, 81)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 82
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "form:forms:create", [], "array", false, false, false, 82), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 83
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "createdBy", [], "any", false, false, false, 83))], "routeBase" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 91
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)])], "iconClass" => "ri-eye-line", "btnText" => "mautic.form.form.preview"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)])], "iconClass" => "ri-list-view", "btnText" => "mautic.form.form.results"]]]);
                // line 105
                yield "
                    </td>
                    <td>
                        <div>
                            ";
                // line 109
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "model" => "form.form"]);
                yield "
                            <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\">
                                ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
                yield "
                                ";
                // line 112
                if (("campaign" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "formType", [], "any", false, false, false, 112))) {
                    // line 113
                    yield "                                    <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.icon_tooltip.campaign_form"), "html", null, true);
                    yield "\"><i class=\"ri-fw ri-megaphone-fill fs-14\"></i></span>
                                ";
                }
                // line 115
                yield "                            </a>
                            ";
                // line 116
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("form.name", $context);
                yield "
                        </div>
                        ";
                // line 118
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 118, $this->source); })()), "description", [], "any", false, false, false, 118)) {
                    // line 119
                    yield "                            <div class=\"text-secondary mt-4\">
                                <small>";
                    // line 120
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120));
                    yield "</small>
                            </div>
                        ";
                }
                // line 123
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 125
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 125, $this->source); })()), "category", [], "any", false, false, false, 125);
                // line 126
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 126, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 126, $this->source); })()), "title", [], "any", false, false, false, 126)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 127
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 127, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 127, $this->source); })()), "color", [], "any", false, false, false, 127))) : (""));
                // line 128
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 128, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 128, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" size=\"sm\" class=\"label label-gray\" ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 131))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "array", false, false, false, 132)]), "html", null, true);
                // line 133
                yield "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 135
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "dateAdded", [], "any", false, false, false, 135)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "dateAdded", [], "any", false, false, false, 135));
                }
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 136
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateModified", [], "any", false, false, false, 136)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateModified", [], "any", false, false, false, 136));
                }
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "createdByUser", [], "any", false, false, false, 137), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
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
            // line 141
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 144
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 145
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 145, $this->source); })()), "page" =>             // line 146
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })()), "limit" =>             // line 147
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 147, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_index"), "sessionVar" => "form"]);
            // line 150
            yield "
        </div>
    </div>
";
        } else {
            // line 154
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.form.noresults.tip"]);
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
        return "@MauticForm/Form/_list.html.twig";
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
        return array (  260 => 154,  254 => 150,  252 => 147,  251 => 146,  250 => 145,  249 => 144,  244 => 141,  227 => 138,  223 => 137,  217 => 136,  211 => 135,  207 => 133,  205 => 132,  198 => 131,  189 => 128,  186 => 127,  183 => 126,  181 => 125,  177 => 123,  171 => 120,  168 => 119,  166 => 118,  161 => 116,  158 => 115,  152 => 113,  150 => 112,  146 => 111,  142 => 110,  138 => 109,  132 => 105,  130 => 99,  129 => 91,  128 => 83,  127 => 82,  126 => 81,  125 => 79,  124 => 78,  120 => 76,  117 => 75,  100 => 74,  94 => 70,  92 => 65,  88 => 63,  86 => 58,  82 => 56,  80 => 50,  76 => 48,  74 => 43,  70 => 41,  68 => 36,  64 => 34,  62 => 29,  58 => 27,  56 => 22,  52 => 20,  50 => 17,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/_list.html.twig", "/home/me/mail_www/app/bundles/FormBundle/Resources/views/Form/_list.html.twig");
    }
}
