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

/* @MauticCore/GlobalSearch/results.html.twig */
class __TwigTemplate_f5f65a6615e20fbe5bab59947e41ae48 extends Template
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
        yield "<div aria-hidden=\"true\"
    class=\"gsearch--interaction-helper d-flex jc-space-between pr-md pl-md pt-sm pb-sm text-secondary\">
    <div class=\"gsearch--interaction-navigate d-flex ai-center gap-5\">
        <span class=\"fs-16\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.navigate"), "html", null, true);
        yield "</span>
        <kbd><i class=\"ri-arrow-up-line\"></i></kbd>
        <kbd><i class=\"ri-arrow-down-line\"></i></kbd>
        <span class=\"fs-16\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.or"), "html", null, true);
        yield "</span>
        <kbd>tab</kbd>
    </div>
    <div class=\"gsearch--interaction-close d-flex ai-center gap-5\">
        <span class=\"fs-16\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "</span>
        <kbd>esc</kbd>
    </div>
</div>

<div class=\"pa-sm\" id=\"globalSearchPanel\">
    ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 17, $this->source); })()))) {
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 18, $this->source); })()));
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
            foreach ($context['_seq'] as $context["header"] => $context["result"]) {
                // line 19
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 19)) {
                    // line 20
                    yield "                <hr class=\"mr-sm ml-sm\">
            ";
                }
                // line 22
                yield "
            <div class=\"text-secondary pl-sm pr-sm ml-2 mr-2 mb-xs d-flex gap-xs";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 23)) {
                    yield " mt-md";
                }
                yield "\">
                ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["header"], "html", null, true);
                yield "
                ";
                // line 25
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", true, true, false, 25) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 25)))) {
                    // line 26
                    yield "                    <span class=\"label label-gray fs-10 gs-count-badge\" size=\"sm\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 26), "html", null, true);
                    yield "</span>
                ";
                }
                // line 28
                yield "            </div>

            <div class=\"np\">
                <ul class=\"pa-0\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["result"]);
                foreach ($context['_seq'] as $context["k"] => $context["r"]) {
                    // line 33
                    yield "                        ";
                    if ( !("count" === $context["k"])) {
                        // line 34
                        yield "                            <li class=\"list-group-item gsearch--results-item mb-3\">
                                ";
                        // line 35
                        yield $context["r"];
                        yield "
                            </li>
                        ";
                    }
                    // line 38
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['r'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                </ul>
            </div>";
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
            unset($context['_seq'], $context['header'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "    ";
        } else {
            // line 43
            yield "        <!-- No results message -->
        <div class=\"text-center text-secondary mt-sm\">
            ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.core.search_everything.no_results.nothing_found", "mautic.core.search_everything.no_results.nothing_yet", "mautic.core.search_everything.no_results.no_results", "mautic.core.search_everything.no_results.hang_tight"])), "html", null, true);
            // line 50
            yield "
        </div>
    ";
        }
        // line 53
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/GlobalSearch/results.html.twig";
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
        return array (  173 => 53,  168 => 50,  166 => 45,  162 => 43,  159 => 42,  144 => 39,  138 => 38,  132 => 35,  129 => 34,  126 => 33,  122 => 32,  116 => 28,  110 => 26,  108 => 25,  104 => 24,  98 => 23,  95 => 22,  91 => 20,  88 => 19,  71 => 18,  69 => 17,  60 => 11,  53 => 7,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/GlobalSearch/results.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/GlobalSearch/results.html.twig");
    }
}
