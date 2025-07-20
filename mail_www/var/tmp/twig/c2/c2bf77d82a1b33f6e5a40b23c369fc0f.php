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

/* @MauticDashboard/Dashboard/recentactivity.html.twig */
class __TwigTemplate_9f1729e115c8f951004e92553c706ecc extends Template
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
        $context["system_user"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.system");
        // line 2
        yield "
";
        // line 3
        if ((array_key_exists("logs", $context) && is_iterable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 3, $this->source); })())))) {
            // line 4
            yield "    <div class=\"pt-md pr-md pb-md pl-md\">
        <ul class=\"media-list media-list-feed\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 7
                yield "                <li class=\"media\">
                    <div class=\"media-object pull-left\">
                        <span class=\"figure featured ";
                // line 9
                if (("create" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 9))) {
                    yield "bg-success";
                }
                yield "\">
                            <span class=\"fa ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 10), [], "array", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 10, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 10), [], "array", false, false, false, 10), "")) : ("")), "html", null, true);
                yield "\"></span>
                        </span>
                    </div>
                    <div class=\"media-body\">
                        ";
                // line 14
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 14) || (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 14) == 0))) {
                    // line 15
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["system_user"]) || array_key_exists("system_user", $context) ? $context["system_user"] : (function () { throw new RuntimeError('Variable "system_user" does not exist.', 15, $this->source); })()), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 17
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 17)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 18
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 18), "html", null, true);
                    yield "
                            </a>
                        ";
                }
                // line 21
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.dashboard." . CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 21)) . ".past.tense")), "html", null, true);
                yield "

                        ";
                // line 23
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "route", [], "any", true, true, false, 23) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "route", [], "any", false, false, false, 23))) && (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 23) != 0))) {
                    // line 24
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "route", [], "any", false, false, false, 24), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                            </a>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 27
$context["log"], "objectName", [], "any", true, true, false, 27)) {
                    // line 28
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 28), "html", null, true);
                    yield "
                        ";
                }
                // line 30
                yield "                        <p class=\"fs-12 dark-sm\"><small> ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 30));
                yield "</small></p>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        </ul>
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
        return "@MauticDashboard/Dashboard/recentactivity.html.twig";
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
        return array (  130 => 34,  119 => 30,  113 => 28,  111 => 27,  106 => 25,  101 => 24,  99 => 23,  93 => 21,  87 => 18,  82 => 17,  76 => 15,  74 => 14,  67 => 10,  61 => 9,  57 => 7,  53 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/recentactivity.html.twig", "/home/me/mail_www/app/bundles/DashboardBundle/Resources/views/Dashboard/recentactivity.html.twig");
    }
}
