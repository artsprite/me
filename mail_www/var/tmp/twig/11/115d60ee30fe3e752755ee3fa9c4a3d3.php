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

/* @MauticCore/Helper/tableheader.html.twig */
class __TwigTemplate_e55bf971760acb17bd3e23f346789452 extends Template
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
        $context["target"] = ((array_key_exists("target", $context)) ? ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })())) : (".page-list"));
        // line 2
        yield "
";
        // line 3
        if ((array_key_exists("checkall", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["checkall"]) || array_key_exists("checkall", $context) ? $context["checkall"] : (function () { throw new RuntimeError('Variable "checkall" does not exist.', 3, $this->source); })())))) {
            // line 4
            yield "<th class=\"col-actions\" ";
            if ((array_key_exists("tooltip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 4, $this->source); })())))) {
                yield " data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 4, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield ">
    <div class=\"input-group input-group-sm\">
        <span class=\"input-group-addon\">
            <input type=\"checkbox\" id=\"customcheckbox-one0\" value=\"1\" data-toggle=\"checkall\" data-target=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\">
        </span>

        ";
            // line 10
            if (((array_key_exists("templateButtons", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 10, $this->source); })()))) || (array_key_exists("customButtons", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 10, $this->source); })()))))) {
                // line 11
                yield "
        ";
                // line 12
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_BULK_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"));
                // line 17
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
                // line 19
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
                yield "

        ";
                // line 21
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 21) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 21, $this->source); })()), "delete", [], "any", false, false, false, 21)))) {
                    // line 22
                    yield "            ";
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["message" => (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((                    // line 24
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 24, $this->source); })()) . ".form.confirmbatchdelete"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((                    // line 25
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 25, $this->source); })()) . ".form.confirmbatchdelete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.confirmbatchdelete"))), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                    // line 27
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 27, $this->source); })()), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 27, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 27, $this->source); })()) != "tmpl"); }), ["objectAction" => "batchDelete"])), "template" => "batchdelete"], "priority" =>  -1]);
                    // line 31
                    yield "
        ";
                }
                // line 33
                yield "        
        <div class=\"ml-xs\">
            ";
                // line 35
                yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/tableheader.html.twig", 35)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.options", "size" => "sm", "variant" => "ghost", "icon" => "ri-more-2-line", "icon_only" => true, "spin" => false, "attributes" => ["class" => "dropdown-toggle", "data-toggle" => "dropdown", "type" => "button", "disabled" => ""]]]]));
                // line 53
                yield "            <ul class=\"pull-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 53, $this->source); })()), "html", null, true);
                yield " page-list-actions dropdown-menu\" role=\"menu\">
                ";
                // line 54
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
                yield "
            </ul>
        </div>
        ";
            }
            // line 58
            yield "    </div>
</th>
";
        } elseif (( !        // line 60
array_key_exists("sessionVar", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 60, $this->source); })())))) {
            // line 61
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 61, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 61, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">
    <span>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 62, $this->source); })())), "html", null, true);
            yield "</span>
</th>
";
        } else {
            // line 65
            $context["defaultOrder"] = (((array_key_exists("default", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 65, $this->source); })())))) ? ((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 65, $this->source); })())) : (""));
            // line 66
            $context["order"] = ((array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, false, 66), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 66, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 66, $this->source); })())], "method", false, false, false, 66))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, false, 66), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 66, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 66, $this->source); })())], "method", false, false, false, 66)));
            // line 67
            $context["dir"] = ((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 67, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "session", [], "any", false, false, false, 67), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 67, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 67))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "session", [], "any", false, false, false, 67), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 67, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 67)));
            // line 68
            $context["filters"] = ((array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 68, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 68, $this->source); })())) . ".filters"), []], "method", false, false, false, 68))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 68, $this->source); })())) . ".filters"), []], "method", false, false, false, 68)));
            // line 69
            $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 69, $this->source); })()), "list")) : ("list"));
            // line 70
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 70, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 70, $this->source); })()), "html", null, true);
                yield " pa-0\"";
            }
            // line 71
            yield "    scope=\"col\"
    aria-sort=\"";
            // line 72
            if (((array_key_exists("orderBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 72, $this->source); })()))) && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 72, $this->source); })())))) {
                if (((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 72, $this->source); })()) == "ASC")) {
                    yield "ascending";
                } else {
                    yield "descending";
                }
            } else {
                yield "none";
            }
            yield "\">
    ";
            // line 73
            if ((array_key_exists("orderBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 73, $this->source); })())))) {
                // line 74
                yield "    <a aria-label=\"";
                if ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 74, $this->source); })())) && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 74, $this->source); })()) == "ASC"))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.sort.descending.description", ["%header%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 74, $this->source); })()))]), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.sort.ascending.description", ["%header%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 74, $this->source); })()))]), "html", null, true);
                }
                yield "\" class=\"btn btn-ghost btn-block jc-space-between table-sort\" href=\"javascript: void(0);\" onclick=\"Mautic.reorderTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\">
        <span class=\"fw-b\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 75, $this->source); })())), "html", null, true);
                yield "</span>
        ";
                // line 76
                if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 76, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 76, $this->source); })()))) {
                    // line 77
                    yield "            ";
                    if (((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 77, $this->source); })()) == "ASC")) {
                        // line 78
                        yield "                <i class=\"ri-arrow-up-line ri-lg fw-n\" aria-hidden=\"true\" focusable=\"false\"></i>
            ";
                    } else {
                        // line 80
                        yield "                <i class=\"ri-arrow-down-line ri-lg fw-n\" aria-hidden=\"true\" focusable=\"false\"></i>
            ";
                    }
                    // line 82
                    yield "        ";
                } else {
                    // line 83
                    yield "        <i class=\"ri-arrow-up-down-line ri-lg fw-n table-sort__icon-unsorted\" aria-hidden=\"true\" focusable=\"false\"></i>
        ";
                }
                // line 85
                yield "    </a>
    ";
            } else {
                // line 87
                yield "    <span class=\"pa-md\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 87, $this->source); })())), "html", null, true);
                yield "</span>
    ";
            }
            // line 89
            yield "
    <div class=\"thead-filter\">
        ";
            // line 91
            if ((array_key_exists("filterBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 91, $this->source); })())))) {
                // line 92
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 92, $this->source); })()), [], "array", true, true, false, 92)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 92, $this->source); })()), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 92, $this->source); })()), [], "array", false, false, false, 92), "value", [], "any", false, false, false, 92)) : (""));
                // line 93
                yield "        <div class=\"input-group input-group-sm\">
            <input
                type=\"text\"
                placeholder=\"";
                // line 96
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.form.thead.filter", [], "messages");
                yield "\"
                autocomplete=\"false\"
                class=\"form-control input-sm\"
                value=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 99, $this->source); })()));
                yield "\"
                ";
                // line 100
                if ((array_key_exists("dataToggle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 100, $this->source); })())))) {
                    yield " data-toggle=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 101
                yield "                onchange=\"Mautic.filterTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 101, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 101, $this->source); })()), "html", null, true);
                yield "',this.value,'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 101, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 101, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 101, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 101, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"
            />
            <span class=\"input-group-btn\">
                <button
                    class=\"btn btn-ghost btn-icon btn-xs\"
                    onclick=\"Mautic.filterTableData('";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "',";
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 106, $this->source); })())))) ? ("'',") : ("mQuery(this).parent().prev().val(),"));
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 106, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 106, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"                >
                    <i class=\"ri-fw ri-lg ";
                // line 107
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 107, $this->source); })())))) ? ("ri-close-line") : ("ri-filter-2-fill"));
                yield "\"></i>
                </button>
            </span>
        </div>
        ";
            }
            // line 112
            yield "    </div>
</th>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/tableheader.html.twig";
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
        return array (  300 => 112,  292 => 107,  274 => 106,  253 => 101,  247 => 100,  243 => 99,  237 => 96,  232 => 93,  229 => 92,  227 => 91,  223 => 89,  217 => 87,  213 => 85,  209 => 83,  206 => 82,  202 => 80,  198 => 78,  195 => 77,  193 => 76,  189 => 75,  166 => 74,  164 => 73,  152 => 72,  149 => 71,  142 => 70,  140 => 69,  138 => 68,  136 => 67,  134 => 66,  132 => 65,  126 => 62,  117 => 61,  115 => 60,  111 => 58,  104 => 54,  99 => 53,  97 => 35,  93 => 33,  89 => 31,  87 => 27,  86 => 25,  85 => 24,  83 => 22,  81 => 21,  75 => 19,  73 => 17,  71 => 12,  68 => 11,  66 => 10,  60 => 7,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/tableheader.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Helper/tableheader.html.twig");
    }
}
