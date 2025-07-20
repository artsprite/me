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

/* @MauticDashboard/Dashboard/upcomingemails.html.twig */
class __TwigTemplate_55f1ab376e33f5426c6bdf5b6a18ea5c extends Template
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
        if ((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    <ul class=\"list-group mb-0 bdr-w-0\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 3, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                // line 4
                yield "            <li class=\"mb-md\">
                <div class=\"box-layout\">
                    ";
                // line 6
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", true, true, false, 6) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 6, $this->source); })()), "email", [], "any", false, false, false, 6)))) {
                    // line 7
                    yield "                        <div class=\"col-md-1 va-m\">
                            <h3><span class=\"fa ";
                    // line 8
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
                    yield " fw-sb text-success\"></span></h3>
                        </div>
                    ";
                }
                // line 11
                yield "                    <div class=\"col-md-8 va-m\">
                        <h5 class=\"fw-sb text-primary\">
                            <a href=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_id", [], "any", false, false, false, 13)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_name", [], "any", false, false, false, 14), "html", null, true);
                yield "
                            </a>
                        </h5>
                        <span class=\"text-white dark-sm\">
                            ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "event_name", [], "any", false, false, false, 18), "html", null, true);
                yield "
                            ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.send.email.to")), "html", null, true);
                yield "
                            ";
                // line 20
                yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticDashboard/Dashboard/upcomingemails.html.twig", 20)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 23
$context["email"], "lead_name", [], "any", false, false, false, 23)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["email"], "lead_name", [], "any", false, false, false, 23)) : ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead") . " #") . CoreExtension::getAttribute($this->env, $this->source, $context["email"], "lead_id", [], "any", false, false, false, 23)))), "variant" => "tertiary", "size" => "xs", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 26
$context["email"], "lead_id", [], "any", false, false, false, 26)]), "attributes" => ["data-toggle" => "ajax", "class" => "pr-sm pl-sm fs-12 ml-3"]]]]));
                // line 34
                yield "                        </span>
                    </div>
                    <div class=\"col-md-4 va-m text-right small\">
                        ";
                // line 37
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "trigger_date", [], "any", false, false, false, 37));
                yield "
                    </div>
                </div>
            </li>
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
            unset($context['_seq'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "    </ul>
";
        } else {
            // line 44
            yield "    <div class=\"alert alert-warning\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.note.no.upcoming.emails"), "html", null, true);
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Dashboard/upcomingemails.html.twig";
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
        return array (  134 => 44,  130 => 42,  111 => 37,  106 => 34,  104 => 26,  103 => 23,  102 => 20,  98 => 19,  94 => 18,  87 => 14,  83 => 13,  79 => 11,  73 => 8,  70 => 7,  68 => 6,  64 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/upcomingemails.html.twig", "/home/me/mail_www/app/bundles/DashboardBundle/Resources/views/Dashboard/upcomingemails.html.twig");
    }
}
