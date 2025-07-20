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

/* @MauticPoint/Point/_list.html.twig */
class __TwigTemplate_3d8c9efa0a41654257066b740de4596e extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover point-list\" id=\"pointTable\">
            <thead>
            <tr>
                ";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pointTable"]);
            // line 9
            yield "

                ";
            // line 11
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.name", "text" => "mautic.core.name", "class" => "col-point-name", "default" => true]);
            // line 17
            yield "

                ";
            // line 19
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-point-category"]);
            // line 24
            yield "

                ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "pl.name", "text" => "mautic.point.thead.group", "class" => "visible-md visible-lg col-point-group"]);
            // line 31
            yield "

                ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.delta", "text" => "mautic.point.thead.delta", "class" => "visible-md visible-lg col-point-delta"]);
            // line 38
            yield "

                <th class=\"col-point-action\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.thead.action"), "html", null, true);
            yield "</th>

                ";
            // line 42
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-point-id"]);
            // line 47
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 51, $this->source); })()));
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
                // line 52
                yield "                <tr>
                    <td>
                        ";
                // line 54
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 55
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 57
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "point:points:edit", [], "array", false, false, false, 57), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 58
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "point:points:create", [], "array", false, false, false, 58), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 59
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 59, $this->source); })()), "point:points:delete", [], "array", false, false, false, 59)], "routeBase" => "point"]);
                // line 62
                yield "
                    </td>
                    <td>
                        <div>
                            ";
                // line 66
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "point"]);
                yield "
                            ";
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 67, $this->source); })()), "point:points:edit", [], "array", false, false, false, 67)) {
                    // line 68
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                    ";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 69), "html", null, true);
                    yield "
                                </a>
                            ";
                } else {
                    // line 72
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 72), "html", null, true);
                    yield "
                            ";
                }
                // line 74
                yield "                            ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("point.name", $context);
                yield "
                        </div>
                        ";
                // line 76
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 76))) {
                    // line 77
                    yield "                            <div class=\"text-secondary mt-4\">
                                <small>";
                    // line 78
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 78));
                    yield "</small>
                            </div>
                        ";
                }
                // line 81
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 83
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 83);
                // line 84
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 84, $this->source); })()), "title", [], "any", false, false, false, 84), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 85
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })()), "color", [], "any", false, false, false, 85))) : (""));
                // line 86
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 86, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 89
                $context["group"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 89);
                // line 90
                yield "                        ";
                $context["groupName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup")));
                // line 91
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 91, $this->source); })()), "html", null, true);
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "delta", [], "any", false, false, false, 93), "html", null, true);
                yield "</td>
                    <td>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["actions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 94), [], "array", false, true, false, 94), "label", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 94, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 94), [], "array", false, false, false, 94), "label", [], "any", false, false, false, 94), "")) : (""))), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 95), "html", null, true);
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
            // line 98
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 102
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 103
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 103, $this->source); })())), "page" =>             // line 104
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()), "limit" =>             // line 105
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 105, $this->source); })()), "menuLinkId" => "mautic_point_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_index"), "sessionVar" => "point"]);
            // line 109
            yield "
    </div>
";
        } else {
            // line 112
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.point.action.noresults.tip"]);
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
        return "@MauticPoint/Point/_list.html.twig";
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
        return array (  239 => 112,  234 => 109,  232 => 105,  231 => 104,  230 => 103,  229 => 102,  223 => 98,  206 => 95,  202 => 94,  198 => 93,  192 => 91,  189 => 90,  187 => 89,  178 => 86,  175 => 85,  172 => 84,  170 => 83,  166 => 81,  160 => 78,  157 => 77,  155 => 76,  149 => 74,  143 => 72,  137 => 69,  132 => 68,  130 => 67,  126 => 66,  120 => 62,  118 => 59,  117 => 58,  116 => 57,  115 => 55,  114 => 54,  110 => 52,  93 => 51,  87 => 47,  85 => 42,  80 => 40,  76 => 38,  74 => 33,  70 => 31,  68 => 26,  64 => 24,  62 => 19,  58 => 17,  56 => 11,  52 => 9,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Point/_list.html.twig", "/home/me/mail_www/app/bundles/PointBundle/Resources/views/Point/_list.html.twig");
    }
}
