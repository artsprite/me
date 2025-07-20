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

/* @MauticCore/FormTheme/mautic_form_layout.html.twig */
class __TwigTemplate_d696c7a88034217ecf47c9e13d5c2b61 extends Template
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
            'button_attributes' => [$this, 'block_button_attributes'],
            'button_group_row' => [$this, 'block_button_group_row'],
            'button_group_widget' => [$this, 'block_button_group_widget'],
            'button_row' => [$this, 'block_button_row'],
            'button_widget' => [$this, 'block_button_widget'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'choice_attributes' => [$this, 'block_choice_attributes'],
            'choice_row' => [$this, 'block_choice_row'],
            'dynamiclist_entry_row' => [$this, 'block_dynamiclist_entry_row'],
            'dynamiclist_row' => [$this, 'block_dynamiclist_row'],
            'form_buttons_row' => [$this, 'block_form_buttons_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_label' => [$this, 'block_form_label'],
            'form_row' => [$this, 'block_form_row'],
            'form_start' => [$this, 'block_form_start'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'sortable_value_label_list_widget' => [$this, 'block_sortable_value_label_list_widget'],
            'sortablelist_entry_row' => [$this, 'block_sortablelist_entry_row'],
            'sortablelist_errors' => [$this, 'block_sortablelist_errors'],
            'sortablelist_row' => [$this, 'block_sortablelist_row'],
            'standalone_button_row' => [$this, 'block_standalone_button_row'],
            'standalone_button_widget' => [$this, 'block_standalone_button_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'yesno_button_group_widget' => [$this, 'block_yesno_button_group_widget'],
            'attributes' => [$this, 'block_attributes'],
            'form_help' => [$this, 'block_form_help'],
            'alert_widget' => [$this, 'block_alert_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 18
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('button_group_row', $context, $blocks);
        // line 47
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('button_group_widget', $context, $blocks);
        // line 62
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 67
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 81
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 98
        yield "
";
        // line 100
        yield from $this->unwrap()->yieldBlock('choice_attributes', $context, $blocks);
        // line 109
        yield "
";
        // line 111
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 152
        yield "
";
        // line 154
        yield from $this->unwrap()->yieldBlock('dynamiclist_entry_row', $context, $blocks);
        // line 160
        yield "
";
        // line 162
        yield from $this->unwrap()->yieldBlock('dynamiclist_row', $context, $blocks);
        // line 188
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('form_buttons_row', $context, $blocks);
        // line 201
        yield "
";
        // line 203
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 218
        yield "
";
        // line 220
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 238
        yield "
";
        // line 240
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 268
        yield "

";
        // line 271
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 291
        yield "
";
        // line 293
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 304
        yield "
";
        // line 306
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 373
        yield "
";
        // line 375
        yield from $this->unwrap()->yieldBlock('sortable_value_label_list_widget', $context, $blocks);
        // line 405
        yield "
";
        // line 407
        yield from $this->unwrap()->yieldBlock('sortablelist_entry_row', $context, $blocks);
        // line 413
        yield "
";
        // line 415
        yield from $this->unwrap()->yieldBlock('sortablelist_errors', $context, $blocks);
        // line 437
        yield "
";
        // line 439
        yield from $this->unwrap()->yieldBlock('sortablelist_row', $context, $blocks);
        // line 470
        yield "
";
        // line 472
        yield from $this->unwrap()->yieldBlock('standalone_button_row', $context, $blocks);
        // line 479
        yield "
";
        // line 481
        yield from $this->unwrap()->yieldBlock('standalone_button_widget', $context, $blocks);
        // line 493
        yield "
";
        // line 495
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 499
        yield "
";
        // line 501
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 527
        yield "
";
        // line 529
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 553
        yield "
";
        // line 555
        yield from $this->unwrap()->yieldBlock('yesno_button_group_widget', $context, $blocks);
        // line 617
        yield "
";
        // line 618
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        // line 633
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 650
        yield "
";
        // line 651
        yield from $this->unwrap()->yieldBlock('alert_widget', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()));
        yield "\" ";
        yield (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 7, $this->source); })())) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 9
            if (CoreExtension::inFilter($context["v"], ["placeholder", "title"])) {
                // line 10
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()))));
                yield "
";
            } elseif ((            // line 11
$context["v"] === true)) {
                // line 12
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 13
$context["v"] === false)) {
                // line 14
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        // line 22
        $context["feedbackClass"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "getMethod", [], "method", false, false, false, 22) === "POST") && ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 22, $this->source); })()) > 0))) ? (" has-error") : (""));
        // line 23
        yield "<div class=\"row form-group\">
    ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 24), "id", [], "any", true, true, false, 24) && CoreExtension::inFilter("config_", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)))) {
            // line 25
            yield "    ";
            // line 26
            yield "    <div class=\"col-md-4\">
        ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 27, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
        ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'help');
            yield "
    </div>
    <div class=\"col-md-8\">
        <div class=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'widget');
            yield "
            ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'errors');
            yield "
        </div>
    </div>
    ";
        } else {
            // line 37
            yield "    <div class=\"col-xs-12";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 38, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
        <div class=\"choice-wrapper\">
            ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'widget');
            yield "
            ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'errors');
            yield "
        </div>
    </div>
    ";
        }
        // line 45
        yield "</div>
";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "attr", [], "any", false, false, false, 51);
        // line 52
        yield "<div class=\"btn-group list-group nav-justified btn-block d-flex fw-nowrap-sm ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonBlockClass"]) || array_key_exists("buttonBlockClass", $context) ? $context["buttonBlockClass"] : (function () { throw new RuntimeError('Variable "buttonBlockClass" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"buttons\">
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 54
            yield "        ";
            $context["class"] = ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 54), "checked", [], "any", false, false, false, 54))) ? (" active") : ("")) . ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 54), "disabled", [], "any", false, false, false, 54)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 54) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 54, $this->source); })()), "readonly", [], "any", false, false, false, 54))))) ? (" disabled") : ("")));
            // line 55
            yield "        <label class=\"btn ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 55, $this->source); })()), "html", null, true);
            yield " btn-block mt-0 list-group-item\">
            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 56, $this->source); })())]);
            yield "
            <span class=\"list-group-item-heading btn-block text-left\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 57), "label", [], "any", false, false, false, 57)), "html", null, true);
            yield "</span>
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "</div>
";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 70, $this->source); })())) {
            // line 71
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 71, $this->source); })()));
        }
        // line 73
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 73, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 74
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 75), "attr", [], "any", false, true, false, 75), "icon", [], "any", true, true, false, 75) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "attr", [], "any", false, false, false, 75), "icon", [], "any", false, false, false, 75)))) {
            // line 76
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "attr", [], "any", false, false, false, 76), "icon", [], "any", false, false, false, 76), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 78
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 78, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 78, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84));
        // line 85
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 85, $this->source); })()))) ? (" has-error") : (""));
        // line 86
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"checkbox\">
            <label>
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'widget');
        yield "
                ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "label", [], "any", false, false, false, 91)), "html", null, true);
        yield "
            </label>
        </div>
        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'errors');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choice_attr"]) || array_key_exists("choice_attr", $context) ? $context["choice_attr"] : (function () { throw new RuntimeError('Variable "choice_attr" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 102
            if (($context["v"] === true)) {
                // line 103
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 104
$context["v"] === false)) {
                // line 105
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        $context["hasErrors"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "vars", [], "any", false, false, false, 112), "errors", [], "any", false, false, false, 112));
        // line 113
        $context["feedbackClass"] = (((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 113, $this->source); })())) ? (" has-error") : (""));
        // line 115
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "vars", [], "any", false, false, false, 115), "attr", [], "any", false, false, false, 115);
        // line 116
        yield "<div class=\"row form-group\">
";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 117), "id", [], "any", true, true, false, 117) && CoreExtension::inFilter("config_", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117)))) {
            // line 118
            yield "    ";
            // line 119
            yield "    <div class=\"col-md-4\">
        ";
            // line 120
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 120, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
        ";
            // line 121
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'help');
            yield "
    </div>
    <div class=\"col-md-8\">
        <div class=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 124, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'widget');
            yield "
            ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'errors');
            yield "
        </div>
    </div>
    ";
        } else {
            // line 130
            yield "    <div class=\"col-xs-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 130, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 131
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 131, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
        <div class=\"choice-wrapper\">
            ";
            // line 133
            if (((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 133, $this->source); })()) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 133, $this->source); })()))) {
                // line 134
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "children", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 135
                    yield "                <div class=\"checkbox\">
                    <label>
                        ";
                    // line 137
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 137, $this->source); })())]);
                    yield "
                        ";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 138), "label", [], "any", false, false, false, 138)), "html", null, true);
                    yield "
                    </label>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                yield "            ";
            } else {
                // line 143
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'widget');
                yield "
            ";
            }
            // line 145
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'help');
            yield "
            ";
            // line 146
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'errors');
            yield "
        </div>
    </div>
    ";
        }
        // line 150
        yield "</div>
";
        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 155
        yield "<div class=\"sortable\">
    ";
        // line 156
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
    ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "children", [], "any", false, false, false, 163);
        // line 164
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vars", [], "any", false, false, false, 164), "errors", [], "any", false, false, false, 164));
        // line 165
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 165, $this->source); })()))) ? (" has-error") : (""));
        // line 166
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 166), "prototype", [], "any", true, true, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "prototype", [], "any", false, false, false, 166), 'widget')) . "</div>"))) : (""));
        // line 167
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "vars", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168), "html", null, true);
        yield "\" class=\"form-group col-xs-12";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 168, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "vars", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168), "html", null, true);
        yield "_list\">
        ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 169, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a  data-prototype=\"";
        // line 170
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 170, $this->source); })());
        yield "\"
           class=\"btn btn-tertiary btn-sm btn-warning btn-add-item\" href=\"#\" id=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
        yield "_additem\">
            ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.list.additem"), "html", null, true);
        yield "
        </a>
        ";
        // line 174
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 174, $this->source); })())) {
            // line 175
            yield "        <div class=\"list-sortable\">
        ";
        }
        // line 177
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 177, $this->source); })()), "children", [], "any", false, false, false, 177));
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
            // line 178
            yield "          ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
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
        // line 180
        yield "        </div>
        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 181, $this->source); })()), 'errors');
        yield "
        ";
        // line 182
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 182, $this->source); })())) {
            // line 183
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 183, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 185
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_buttons_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 191, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 192
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "parent", [], "any", false, false, false, 192) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 192, $this->source); })()))) {
            // line 193
            yield "        <div class=\"has-error\">
            ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'errors');
            yield "
        </div>
    ";
        }
        // line 197
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 204, $this->source); })())) > 0)) {
            // line 205
            yield "    <div class=\"help-block\">
    ";
            // line 206
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 206, $this->source); })())) > 1)) {
                // line 207
                yield "        <ul>
            ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 208, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 209
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 209));
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "        </ul>
    ";
            } else {
                // line 213
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 213, $this->source); })())), "getMessage", [], "method", false, false, false, 213));
                yield "
    ";
            }
            // line 215
            yield "    </div>
";
        }
        yield from [];
    }

    // line 220
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 221
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 221, $this->source); })()) === false)) {
            // line 222
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 222, $this->source); })())) {
                // line 223
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 223, $this->source); })()), ["class" => (Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 223)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 223, $this->source); })()), "class", [], "any", false, false, false, 223)) : (""))) . " required")]);
            }
            // line 225
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 225, $this->source); })())) {
                // line 226
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 226, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 226, $this->source); })())]);
            }
            // line 228
            if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 228, $this->source); })())) {
                // line 229
                yield "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 229, $this->source); })()));
            }
            // line 231
            $context["tooltip"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 231), "attr", [], "any", false, true, false, 231), "tooltip", [], "any", true, true, false, 231) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "vars", [], "any", false, false, false, 231), "attr", [], "any", false, false, false, 231), "tooltip", [], "any", false, false, false, 231)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "vars", [], "any", false, false, false, 231), "attr", [], "any", false, false, false, 231), "tooltip", [], "any", false, false, false, 231))) : (false));
            // line 232
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 233
                yield "    ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 234, $this->source); })())) ? (Twig\Extension\CoreExtension::sprintf("data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"%s\"", (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 234, $this->source); })()))) : (""));
            yield ">
";
            // line 235
            yield (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 235, $this->source); })())) ? ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 235, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 235, $this->source); })())))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 235, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 235, $this->source); })())))));
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 235, $this->source); })())) ? (" <i class=\"ri-question-line\"></i>") : (""));
            yield "</label>
";
        }
        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 241
        yield "    ";
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "vars", [], "any", false, false, false, 241), "errors", [], "any", false, false, false, 241));
        // line 242
        yield "    ";
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 242, $this->source); })()) > 0)) ? (" has-error") : (""));
        // line 243
        yield "
    <div class=\"row form-group\">
    ";
        // line 245
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 245), "id", [], "any", true, true, false, 245) && CoreExtension::inFilter("config_", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "vars", [], "any", false, false, false, 245), "id", [], "any", false, false, false, 245)))) {
            // line 246
            yield "        ";
            // line 247
            yield "        <div class=\"col-md-4\">
            ";
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 248, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
            ";
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), 'help');
            yield "
        </div>
        <div class=\"col-md-8\">
            <div class=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 252, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 253
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'widget');
            yield "
                ";
            // line 254
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), 'errors');
            yield "
            </div>
        </div>
    ";
        } else {
            // line 258
            yield "        ";
            // line 259
            yield "            <div class=\"col-xs-12";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 259, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 260
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 260, $this->source); })())) ? [] : ["label" => $_label_]));
            yield "
                ";
            // line 261
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), 'widget');
            yield "
                ";
            // line 262
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), 'errors');
            yield "
                ";
            // line 263
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), 'help');
            yield "
            </div>
            ";
        }
        // line 266
        yield "        </div>
";
        yield from [];
    }

    // line 271
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 272
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 272, $this->source); })()));
        // line 273
        $context["form_method"] = (((((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 273, $this->source); })()) === "GET") || ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 273, $this->source); })()) === "POST"))) ? ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 273, $this->source); })())) : ("POST"));
        // line 274
        yield "<form novalidate autocomplete=\"false\" data-toggle=\"ajax\" role=\"form\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "vars", [], "any", false, false, false, 274), "name", [], "any", false, false, false, 274), "html", null, true);
        yield "\" method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 274, $this->source); })())), "html", null, true);
        yield "\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 274, $this->source); })()), "html", null, true);
        yield "\"";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 275
            yield "    ";
            yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield (((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 276, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
";
        // line 277
        if ( !((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 277, $this->source); })()) === (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 277, $this->source); })()))) {
            // line 278
            yield "    <input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 278, $this->source); })()));
            yield "\" />
";
        }
        // line 280
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "vars", [], "any", false, false, false, 280), "errors", [], "any", false, false, false, 280)) > 0)) {
            // line 281
            yield "<div class=\"has-error pa-10\">
    ";
            // line 282
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), 'errors');
            yield "
</div>
";
        }
        // line 285
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "vars", [], "any", false, false, false, 285), "help", [], "any", false, false, false, 285)) > 0)) {
            // line 286
            yield "<div class=\"pa-10\">
    ";
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), 'help');
            yield "
</div>
";
        }
        yield from [];
    }

    // line 293
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 294
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 295
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "parent", [], "any", false, false, false, 295) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 295, $this->source); })()))) {
            // line 296
            yield "    <div class=\"has-error\">
        ";
            // line 297
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), 'errors');
            yield "
    </div>
    ";
        }
        // line 300
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 306
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 307
        $context["preaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_attr", [], "any", true, true, false, 307)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 307, $this->source); })()), "preaddon_attr", [], "any", false, false, false, 307)) : ([]));
        // line 308
        $context["postaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_attr", [], "any", true, true, false, 308)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 308, $this->source); })()), "postaddon_attr", [], "any", false, false, false, 308)) : ([]));
        // line 309
        yield "
";
        // line 310
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 310) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 310, $this->source); })()), "preaddon", [], "any", false, false, false, 310))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 311
($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 311) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 311, $this->source); })()), "postaddon", [], "any", false, false, false, 311)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 312
($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 312) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 312, $this->source); })()), "preaddon_text", [], "any", false, false, false, 312)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 313
($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 313) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 313, $this->source); })()), "postaddon_text", [], "any", false, false, false, 313))))) {
            // line 314
            yield "    <div class=\"input-group\">
        ";
            // line 315
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 315) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 315, $this->source); })()), "preaddon", [], "any", false, false, false, 315)))) {
                // line 316
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 316, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 317
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                yield ">
            <i class=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 319, $this->source); })()), "preaddon", [], "any", false, false, false, 319), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 322
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 322) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 322, $this->source); })()), "preaddon_text", [], "any", false, false, false, 322)))) {
                // line 323
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 323, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 324
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                yield ">
            <span>";
                // line 326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 326, $this->source); })()), "preaddon_text", [], "any", false, false, false, 326), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 329
            yield "        <input autocomplete=\"false\" type=\"";
            yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 329, $this->source); })()))) : ("text"));
            yield "\"
            ";
            // line 330
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 330, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 330, $this->source); })())))) {
                // line 331
                yield "            value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 331, $this->source); })()));
                yield "\"";
            }
            yield " />

        ";
            // line 333
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 333) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 333, $this->source); })()), "postaddon", [], "any", false, false, false, 333)))) {
                // line 334
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 334, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 335
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                yield ">
            <i class=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 337, $this->source); })()), "postaddon", [], "any", false, false, false, 337), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 340
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 340) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 340, $this->source); })()), "postaddon_text", [], "any", false, false, false, 340)))) {
                // line 341
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 341, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 342
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                yield ">
            <span>";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 344, $this->source); })()), "postaddon_text", [], "any", false, false, false, 344), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 347
            yield "    </div>
    ";
        } else {
            // line 349
            yield "    ";
            if ((array_key_exists("id", $context) && CoreExtension::inFilter("publish", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 349, $this->source); })())))) {
                // line 350
                yield "    <div class=\"d-flex gap-3\">
        <label class=\"btn btn-tertiary btn-icon btn-nospin btn-datepicker\" size=\"sm\" for=\"";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 351, $this->source); })()));
                yield "\">
            ";
                // line 352
                if (CoreExtension::inFilter("publishUp", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 352, $this->source); })()))) {
                    // line 353
                    yield "                <i class=\"ri-calendar-check-line ri-1x\"></i>
            ";
                } elseif (CoreExtension::inFilter("publishDown",                 // line 354
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 354, $this->source); })()))) {
                    // line 355
                    yield "                <i class=\"ri-calendar-close-line ri-1x\"></i>
            ";
                }
                // line 357
                yield "        </label>

        <input type=\"";
                // line 359
                yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 359, $this->source); })()))) : ("text"));
                yield "\"
               ";
                // line 360
                yield from                 $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
                yield "
               ";
                // line 361
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 361, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 361, $this->source); })())))) {
                    // line 362
                    yield "               value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 362, $this->source); })()));
                    yield "\"
               ";
                }
                // line 363
                yield " />
    </div>

    ";
            } else {
                // line 367
                yield "    <input type=\"";
                yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 367, $this->source); })()))) : ("text"));
                yield "\"
        ";
                // line 368
                yield from                 $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 368, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 368, $this->source); })())))) {
                    // line 369
                    yield "        value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 369, $this->source); })()));
                    yield "\"";
                }
                yield " />
    ";
            }
            // line 371
            yield "    ";
        }
        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortable_value_label_list_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 376
        if (( !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "label", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "value", [], "any", false, false, false, 376)) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "value", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "value", [], "any", false, false, false, 376)))) {
            // line 377
            yield "<div class=\"input-group sortable-no-reorder\">
    ";
            // line 378
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 378, $this->source); })()))) {
                // line 379
                yield "    <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 379, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 380
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                yield ">
    <i class=\"";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 382, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 385
            yield "    <div>
        <div class=\"row\">
            <div class=\"col-xs-6 mr-0 pr-0 bdr-r-wdh-0\">
            ";
            // line 388
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "label", [], "any", false, false, false, 388), 'widget', ["attr" => ["class" => "form-control sortable-label", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "label", [], "any", false, false, false, 388), "vars", [], "any", false, false, false, 388), "label", [], "any", false, false, false, 388)]]);
            yield "
            </div>
            <div class=\"col-xs-6 ml-0 pl-0\">
            ";
            // line 391
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "value", [], "any", false, false, false, 391), 'widget', ["attr" => ["class" => "form-control sortable-value", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "value", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "label", [], "any", false, false, false, 391)]]);
            yield "
            </div>
        </div>
    </div>
    ";
            // line 395
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 395, $this->source); })()))) {
                // line 396
                yield "    <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 396, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 397
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                yield ">
        <i class=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 399, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 402
            yield "</div>
";
        }
        yield from [];
    }

    // line 407
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 408
        yield "<div class=\"sortable\">
    ";
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 409, $this->source); })()), 'widget');
        yield "
    ";
        // line 410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 410, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 415
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 416
        $context["errorMessages"] = [];
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 417, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 418
            yield "    ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 418), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 418, $this->source); })()))) {
                // line 419
                yield "        ";
                $context["errorMessages"] = Twig\Extension\CoreExtension::merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 419, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 419)]);
                // line 420
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        yield "
";
        // line 423
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 423, $this->source); })())) > 0)) {
            // line 424
            yield "    <div class=\"help-block\">
        ";
            // line 425
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 425, $this->source); })())) > 1)) {
                // line 426
                yield "            <ul>
                ";
                // line 427
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 427, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 428
                    yield "                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["errorMessage"]);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['errorMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 430
                yield "            </ul>
        ";
            } else {
                // line 432
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 432, $this->source); })())));
                yield "
        ";
            }
            // line 434
            yield "    </div>
";
        }
        yield from [];
    }

    // line 439
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 440
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "children", [], "any", false, false, false, 440), "list", [], "any", false, false, false, 440);
        // line 441
        if (((($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "parent", [], "any", false, false, false, 441), 'errors') && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 441, $this->source); })()), "vars", [], "any", false, false, false, 441), "value", [], "any", false, false, false, 441))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 441), "children", [], "any", false, true, false, 441), "properties", [], "any", false, true, false, 441), "list", [], "any", true, true, false, 441)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "parent", [], "any", false, false, false, 441), "vars", [], "any", false, false, false, 441), "data", [], "any", false, false, false, 441), "getId", [], "method", false, false, false, 441) === null))) {
            // line 442
            yield "    ";
            // line 443
            yield "    ";
            $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "parent", [], "any", false, false, false, 443), "children", [], "any", false, false, false, 443), "properties", [], "any", false, false, false, 443), "list", [], "any", false, false, false, 443);
        }
        // line 445
        $context["feedbackClass"] = (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 445, $this->source); })()), 'errors')) ? (" has-error") : (""));
        // line 446
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 446), "prototype", [], "any", true, true, false, 446)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 446, $this->source); })()), "vars", [], "any", false, false, false, 446), "prototype", [], "any", false, false, false, 446), 'widget')) . "</div>"))) : (""));
        // line 447
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "vars", [], "any", false, false, false, 448), "id", [], "any", false, false, false, 448), "html", null, true);
        yield "\" class=\"form-group col-xs-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 448, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "vars", [], "any", false, false, false, 448), "id", [], "any", false, false, false, 448), "html", null, true);
        yield "_list\" style=\"overflow:auto\">
        ";
        // line 449
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 449, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a data-prototype=\"";
        // line 450
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 450, $this->source); })());
        yield "\"
           class=\"btn btn-tertiary btn-sm btn-add-item\" href=\"#\" id=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "vars", [], "any", false, false, false, 451), "id", [], "any", false, false, false, 451), "html", null, true);
        yield "_additem\">
            ";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["addValueButton"]) || array_key_exists("addValueButton", $context) ? $context["addValueButton"] : (function () { throw new RuntimeError('Variable "addValueButton" does not exist.', 452, $this->source); })())), "html", null, true);
        yield "
        </a>
        ";
        // line 454
        yield from         $this->unwrap()->yieldBlock("sortablelist_errors", $context, $blocks);
        yield "
        ";
        // line 455
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 455, $this->source); })())) {
            // line 456
            yield "        <div id=\"sortable-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "vars", [], "any", false, false, false, 456), "id", [], "any", false, false, false, 456), "html", null, true);
            yield "\" class=\"list-sortable\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 456, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 457
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            yield ">
        ";
        }
        // line 460
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 460, $this->source); })()), "children", [], "any", false, false, false, 460));
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
            // line 461
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
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
        // line 463
        yield "        </div>
        ";
        // line 464
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 464, $this->source); })())) {
            // line 465
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "vars", [], "any", false, false, false, 465), "id", [], "any", false, false, false, 465), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 465, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 467
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 472
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 473
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
        ";
        // line 475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), 'widget');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 481
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 482
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 482, $this->source); })())) {
            // line 483
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 483, $this->source); })()));
        }
        // line 485
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 485, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 486
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 487
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 487), "attr", [], "any", false, true, false, 487), "icon", [], "any", true, true, false, 487) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "vars", [], "any", false, false, false, 487), "attr", [], "any", false, false, false, 487), "icon", [], "any", false, false, false, 487)))) {
            // line 488
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "vars", [], "any", false, false, false, 488), "attr", [], "any", false, false, false, 488), "icon", [], "any", false, false, false, 488), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 490
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 490, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 490, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 495
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tel_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 497
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 501
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 502
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 502, $this->source); })()) === "single_text")) {
            // line 503
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
";
        } else {
            // line 505
            yield "    ";
            $context["size"] = 4;
            // line 506
            yield "    ";
            if (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 506, $this->source); })()) &&  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 506, $this->source); })()))) {
                // line 507
                yield "        ";
                $context["size"] = 12;
                // line 508
                yield "    ";
            } elseif (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 508, $this->source); })()) ||  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 508, $this->source); })()))) {
                // line 509
                yield "        ";
                $context["size"] = 6;
                // line 510
                yield "    ";
            }
            // line 511
            yield "    ";
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 511, $this->source); })()) === "text")) ? (["attr" => ["size" => 1, "class" => "not-chosen"]]) : (["attr" => ["class" => "not-chosen"]]));
            // line 512
            yield "    <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
        ";
            // line 515
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "hour", [], "any", false, false, false, 515), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 515, $this->source); })()));
            yield "

        ";
            // line 517
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 517, $this->source); })())) {
                // line 518
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "minute", [], "any", false, false, false, 518), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 518, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 520
            yield "
        ";
            // line 521
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 521, $this->source); })())) {
                // line 522
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "second", [], "any", false, false, false, 522), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 522, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 524
            yield "    </div>
";
        }
        yield from [];
    }

    // line 529
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 530
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 530, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 530, $this->source); })()));
        yield "\"
";
        // line 531
        yield ((((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 531, $this->source); })()), false)) : (false))) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 532
        yield ((((array_key_exists("required", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 532, $this->source); })()), false)) : (false))) ? ("required=\"required\"") : (""));
        yield "

";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 535, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["tooltip", "preaddon", "preaddon_attr", "postaddon_attr", "help_icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 536
            yield "    ";
            if (CoreExtension::inFilter($context["k"], ["placeholder", "title"])) {
                // line 537
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 537, $this->source); })()))));
                yield "
    ";
            } elseif (((            // line 538
$context["k"] === "data-order") && $this->env->getTest('string')->getCallable()($context["v"]))) {
                // line 539
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $context["v"];
                yield "\"
    ";
            } elseif (((is_string($_v0 =             // line 540
$context["k"]) && is_string($_v1 = "data-") && str_starts_with($_v0, $_v1)) && CoreExtension::matches("/data-(none|start|both|end)/", $context["k"]))) {
                // line 541
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\"", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            } elseif ((            // line 542
$context["v"] === true)) {
                // line 543
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
    ";
            } elseif (is_iterable(            // line 544
$context["v"])) {
                // line 545
                yield "        ";
                $context["v"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->formatList(Twig\Extension\CoreExtension::constant("Mautic\\FormBundle\\Helper\\FormFieldHelper::FORMAT_BAR"), $context["v"]);
                // line 546
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            } elseif ( !(            // line 547
$context["v"] === false)) {
                // line 548
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "autocomplete", [], "any", true, true, false, 551)) ? ("autocomplete=\"false\" ") : (""));
        yield "
";
        yield from [];
    }

    // line 555
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_yesno_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 556
        yield "    ";
        // line 557
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(((array_key_exists("attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 557, $this->source); })()), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 557), "attr", [], "any", true, true, false, 557)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 557, $this->source); })()), "vars", [], "any", false, false, false, 557), "attr", [], "any", false, false, false, 557), [])) : ([])));
        // line 558
        yield "    ";
        // line 559
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 559, $this->source); })()), ["onchange" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 560
($context["attr"] ?? null), "onchange", [], "any", true, true, false, 560)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 560, $this->source); })()), "onchange", [], "any", false, false, false, 560), "")) : ("")) . "; Mautic.toggleYesNo(this);"))]);
        // line 562
        yield "    ";
        $context["id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "vars", [], "any", false, false, false, 562), "id", [], "any", false, false, false, 562);
        // line 563
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "vars", [], "any", false, false, false, 563), "full_name", [], "any", false, false, false, 563);
        // line 564
        yield "    ";
        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "vars", [], "any", false, false, false, 564), "value", [], "any", false, false, false, 564);
        // line 565
        yield "    ";
        $context["size"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 565), "attr", [], "any", false, true, false, 565), "size", [], "any", true, true, false, 565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), "vars", [], "any", false, false, false, 565), "attr", [], "any", false, false, false, 565), "size", [], "any", false, false, false, 565), null)) : (null));
        // line 566
        yield "
    ";
        // line 567
        $context["yes_choice"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "vars", [], "any", false, false, false, 567), "choices", [], "any", false, false, false, 567), 1, [], "array", false, false, false, 567);
        // line 568
        yield "    ";
        $context["no_choice"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 568, $this->source); })()), "vars", [], "any", false, false, false, 568), "choices", [], "any", false, false, false, 568), 0, [], "array", false, false, false, 568);
        // line 569
        yield "
    <div class=\"toggle\"
         data-yes=\"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 571, $this->source); })()), "label", [], "any", false, false, false, 571)), "html", null, true);
        yield "\"
         data-no=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 572, $this->source); })()), "label", [], "any", false, false, false, 572)), "html", null, true);
        yield "\"
         data-yes-value=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 573, $this->source); })()), "value", [], "any", false, false, false, 573), "html", null, true);
        yield "\"
         data-no-value=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 574, $this->source); })()), "value", [], "any", false, false, false, 574), "html", null, true);
        yield "\"
         ";
        // line 575
        if ((array_key_exists("id", $context) && CoreExtension::inFilter("Publish", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 575, $this->source); })())))) {
            // line 576
            yield "            data-none=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-none", [], "array", true, true, false, 576)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 576, $this->source); })()), "data-none", [], "array", false, false, false, 576), "mautic.core.form.inactive_regardless_of_scheduling")) : ("mautic.core.form.inactive_regardless_of_scheduling"))), "html", null, true);
            yield "\"
            data-start=\"";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-start", [], "array", true, true, false, 577)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 577, $this->source); })()), "data-start", [], "array", false, false, false, 577), "mautic.core.form.active_on_scheduled_date")) : ("mautic.core.form.active_on_scheduled_date"))), "html", null, true);
            yield "\"
            data-both=\"";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-both", [], "array", true, true, false, 578)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 578, $this->source); })()), "data-both", [], "array", false, false, false, 578), "mautic.core.form.active_during_scheduled_period")) : ("mautic.core.form.active_during_scheduled_period"))), "html", null, true);
            yield "\"
            data-end=\"";
            // line 579
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-end", [], "array", true, true, false, 579)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 579, $this->source); })()), "data-end", [], "array", false, false, false, 579), "mautic.core.form.active_until_scheduled_end")) : ("mautic.core.form.active_until_scheduled_end"))), "html", null, true);
            yield "\"
        ";
        }
        // line 580
        yield " >

        ";
        // line 583
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([(isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 583, $this->source); })()), (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 583, $this->source); })())]);
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 584
            yield "            <input type=\"radio\"
                   id=\"";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 585, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 585), "html", null, true);
            yield "\"
                   name=\"";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 586, $this->source); })()), "html", null, true);
            yield "\"
                   value=\"";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 587), "html", null, true);
            yield "\"
                   ";
            // line 588
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 588, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 588))) {
                yield "checked";
            }
            // line 589
            yield "                   style=\"display: none;\"
                   ";
            // line 590
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 590, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                // line 591
                yield "                       ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            yield ">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        yield "
        <label id=\"";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 595, $this->source); })()), "html", null, true);
        yield "_label\"
               class=\"toggle__label\"
               data-yes-id=\"";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 597, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 597, $this->source); })()), "value", [], "any", false, false, false, 597), "html", null, true);
        yield "\"
               data-no-id=\"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 598, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 598, $this->source); })()), "value", [], "any", false, false, false, 598), "html", null, true);
        yield "\"
               onclick=\"Mautic.toggleYesNo(this);\"
               role=\"switch\"
               tabindex=\"0\"
               onkeydown=\"Mautic.handleKeyDown(event, this)\"
               aria-checked=\"";
        // line 603
        yield ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 603, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 603, $this->source); })()), "value", [], "any", false, false, false, 603))) ? ("true") : ("false"));
        yield "\">
            <div class=\"toggle__appearance\" ";
        // line 604
        if ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 604, $this->source); })())) {
            yield "size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 604, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                <div class=\"toggle__switch ";
        // line 605
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 605, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 605, $this->source); })()), "value", [], "any", false, false, false, 605))) {
            yield "toggle__switch--checked";
        }
        yield "\">
                    <svg class=\"toggle__check\" width=\"6px\" height=\"5px\" viewBox=\"0 0 6 5\">
                        <path d=\"M2.2 2.7L5 0 6 1 2.2 5 0 2.7 1 1.5z\"></path>
                    </svg>
                </div>
                <span class=\"toggle__text\" aria-hidden=\"true\">
                    ";
        // line 611
        yield ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 611, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 611, $this->source); })()), "value", [], "any", false, false, false, 611))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 611, $this->source); })()), "label", [], "any", false, false, false, 611)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 611, $this->source); })()), "label", [], "any", false, false, false, 611)), "html", null, true)));
        yield "
                </span>
            </div>
        </label>
    </div>
";
        yield from [];
    }

    // line 618
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 619, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 620
            yield " ";
            // line 621
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 622
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 622, $this->source); })()) === false) || (null === $context["attrvalue"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 622, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 622, $this->source); })())), "html", null, true)));
                yield "\"";
            } elseif (CoreExtension::inFilter(            // line 623
$context["attrname"], ["data-filter-definitions", "data-filter-operators"])) {
                // line 624
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $context["attrvalue"];
                yield "\"";
            } elseif ((            // line 625
$context["attrvalue"] === true)) {
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 627
$context["attrvalue"] === false)) {
                // line 628
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 633
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 634
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 634, $this->source); })())) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 634), "attr", [], "any", false, true, false, 634), "help_icon", [], "any", true, true, false, 634))) {
            // line 635
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 635, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 635)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 635, $this->source); })()), "class", [], "any", false, false, false, 635), "")) : ("")) . " help-block"))]);
            // line 636
            yield "<p id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 636, $this->source); })()), "html", null, true);
            yield "_help\"";
            $_v2 = $context;
            $_v3 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 636, $this->source); })())];
            if (!is_iterable($_v3)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 636, $this->getSourceContext());
            }
            $_v3 = CoreExtension::toArray($_v3);
            $context = $_v3 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v2;
            yield ">";
            // line 637
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 637), "attr", [], "any", false, true, false, 637), "help_icon", [], "any", true, true, false, 637) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 637, $this->source); })()), "vars", [], "any", false, false, false, 637), "attr", [], "any", false, false, false, 637), "help_icon", [], "any", false, false, false, 637)))) {
                // line 638
                yield "<i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 638, $this->source); })()), "vars", [], "any", false, false, false, 638), "attr", [], "any", false, false, false, 638), "help_icon", [], "any", false, false, false, 638), "html", null, true);
                yield " ri-lg mr-xs\"></i>";
            }
            // line 640
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 640, $this->source); })()))) {
                // line 641
                if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 641, $this->source); })()) === false)) {
                    // line 642
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 642, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 642, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 642, $this->source); })())), "html", null, true);
                } else {
                    // line 644
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 644, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 644, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 644, $this->source); })())));
                }
            }
            // line 647
            yield "</p>";
        }
        yield from [];
    }

    // line 651
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_alert_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 652
        yield "    <div class=\"row\">
        <div ";
        // line 653
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(["class" => "col-sm-12"], (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 653, $this->source); })()))];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 653, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield " ";
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">
            <div class=\"alert alert-";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 654, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 655, $this->source); })()), "html", null, true);
        yield "
            </div>
        </div>
    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/mautic_form_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2137 => 655,  2133 => 654,  2120 => 653,  2117 => 652,  2110 => 651,  2104 => 647,  2100 => 644,  2097 => 642,  2095 => 641,  2093 => 640,  2088 => 638,  2086 => 637,  2072 => 636,  2070 => 635,  2068 => 634,  2061 => 633,  2048 => 628,  2046 => 627,  2041 => 626,  2039 => 625,  2034 => 624,  2032 => 623,  2027 => 622,  2025 => 621,  2023 => 620,  2019 => 619,  2012 => 618,  2001 => 611,  1990 => 605,  1982 => 604,  1978 => 603,  1968 => 598,  1962 => 597,  1957 => 595,  1954 => 594,  1947 => 592,  1936 => 591,  1932 => 590,  1929 => 589,  1925 => 588,  1921 => 587,  1917 => 586,  1911 => 585,  1908 => 584,  1903 => 583,  1899 => 580,  1894 => 579,  1890 => 578,  1886 => 577,  1881 => 576,  1879 => 575,  1875 => 574,  1871 => 573,  1867 => 572,  1863 => 571,  1859 => 569,  1856 => 568,  1854 => 567,  1851 => 566,  1848 => 565,  1845 => 564,  1842 => 563,  1839 => 562,  1837 => 560,  1835 => 559,  1833 => 558,  1830 => 557,  1828 => 556,  1821 => 555,  1814 => 551,  1804 => 548,  1802 => 547,  1797 => 546,  1794 => 545,  1792 => 544,  1787 => 543,  1785 => 542,  1780 => 541,  1778 => 540,  1771 => 539,  1769 => 538,  1764 => 537,  1761 => 536,  1757 => 535,  1752 => 532,  1748 => 531,  1741 => 530,  1734 => 529,  1727 => 524,  1721 => 522,  1719 => 521,  1716 => 520,  1710 => 518,  1708 => 517,  1702 => 515,  1697 => 512,  1694 => 511,  1691 => 510,  1688 => 509,  1685 => 508,  1682 => 507,  1679 => 506,  1676 => 505,  1670 => 503,  1668 => 502,  1661 => 501,  1654 => 497,  1647 => 495,  1638 => 490,  1632 => 488,  1630 => 487,  1626 => 486,  1621 => 485,  1618 => 483,  1616 => 482,  1609 => 481,  1600 => 475,  1596 => 473,  1589 => 472,  1582 => 467,  1574 => 465,  1572 => 464,  1569 => 463,  1552 => 461,  1534 => 460,  1530 => 458,  1521 => 457,  1514 => 456,  1512 => 455,  1508 => 454,  1503 => 452,  1499 => 451,  1495 => 450,  1491 => 449,  1483 => 448,  1480 => 447,  1478 => 446,  1476 => 445,  1472 => 443,  1470 => 442,  1468 => 441,  1466 => 440,  1459 => 439,  1452 => 434,  1446 => 432,  1442 => 430,  1433 => 428,  1429 => 427,  1426 => 426,  1424 => 425,  1421 => 424,  1419 => 423,  1416 => 422,  1409 => 420,  1406 => 419,  1403 => 418,  1399 => 417,  1397 => 416,  1390 => 415,  1382 => 410,  1378 => 409,  1375 => 408,  1368 => 407,  1361 => 402,  1355 => 399,  1352 => 398,  1343 => 397,  1338 => 396,  1336 => 395,  1329 => 391,  1323 => 388,  1318 => 385,  1312 => 382,  1309 => 381,  1300 => 380,  1295 => 379,  1293 => 378,  1290 => 377,  1288 => 376,  1281 => 375,  1275 => 371,  1267 => 369,  1264 => 368,  1259 => 367,  1253 => 363,  1247 => 362,  1245 => 361,  1241 => 360,  1237 => 359,  1233 => 357,  1229 => 355,  1227 => 354,  1224 => 353,  1222 => 352,  1218 => 351,  1215 => 350,  1212 => 349,  1208 => 347,  1202 => 344,  1199 => 343,  1190 => 342,  1185 => 341,  1182 => 340,  1176 => 337,  1173 => 336,  1164 => 335,  1159 => 334,  1157 => 333,  1149 => 331,  1146 => 330,  1141 => 329,  1135 => 326,  1132 => 325,  1123 => 324,  1118 => 323,  1115 => 322,  1109 => 319,  1106 => 318,  1097 => 317,  1092 => 316,  1090 => 315,  1087 => 314,  1085 => 313,  1084 => 312,  1083 => 311,  1082 => 310,  1079 => 309,  1077 => 308,  1075 => 307,  1068 => 306,  1060 => 301,  1055 => 300,  1049 => 297,  1046 => 296,  1044 => 295,  1039 => 294,  1032 => 293,  1023 => 287,  1020 => 286,  1018 => 285,  1012 => 282,  1009 => 281,  1007 => 280,  1001 => 278,  999 => 277,  995 => 276,  986 => 275,  975 => 274,  973 => 273,  971 => 272,  964 => 271,  958 => 266,  952 => 263,  948 => 262,  944 => 261,  940 => 260,  935 => 259,  933 => 258,  926 => 254,  922 => 253,  918 => 252,  912 => 249,  908 => 248,  905 => 247,  903 => 246,  901 => 245,  897 => 243,  894 => 242,  891 => 241,  884 => 240,  875 => 235,  871 => 234,  862 => 233,  857 => 232,  855 => 231,  851 => 229,  849 => 228,  845 => 226,  843 => 225,  839 => 223,  837 => 222,  835 => 221,  828 => 220,  821 => 215,  815 => 213,  811 => 211,  802 => 209,  798 => 208,  795 => 207,  793 => 206,  790 => 205,  788 => 204,  781 => 203,  773 => 198,  771 => 197,  765 => 194,  762 => 193,  760 => 192,  753 => 191,  746 => 190,  739 => 185,  731 => 183,  729 => 182,  725 => 181,  722 => 180,  705 => 178,  687 => 177,  683 => 175,  681 => 174,  676 => 172,  672 => 171,  668 => 170,  664 => 169,  656 => 168,  653 => 167,  651 => 166,  649 => 165,  647 => 164,  645 => 163,  638 => 162,  630 => 157,  626 => 156,  623 => 155,  616 => 154,  610 => 150,  603 => 146,  598 => 145,  592 => 143,  589 => 142,  579 => 138,  575 => 137,  571 => 135,  566 => 134,  564 => 133,  559 => 131,  554 => 130,  547 => 126,  543 => 125,  539 => 124,  533 => 121,  529 => 120,  526 => 119,  524 => 118,  522 => 117,  519 => 116,  517 => 115,  515 => 113,  513 => 112,  506 => 111,  494 => 105,  492 => 104,  488 => 103,  486 => 102,  482 => 101,  475 => 100,  466 => 94,  460 => 91,  456 => 90,  450 => 87,  447 => 86,  445 => 85,  443 => 84,  436 => 83,  427 => 78,  421 => 76,  419 => 75,  415 => 74,  410 => 73,  407 => 71,  405 => 70,  398 => 69,  391 => 65,  384 => 64,  378 => 60,  369 => 57,  365 => 56,  360 => 55,  357 => 54,  353 => 53,  348 => 52,  346 => 51,  339 => 49,  333 => 45,  326 => 41,  322 => 40,  317 => 38,  312 => 37,  305 => 33,  301 => 32,  297 => 31,  291 => 28,  287 => 27,  284 => 26,  282 => 25,  280 => 24,  277 => 23,  275 => 22,  273 => 21,  266 => 20,  254 => 14,  252 => 13,  248 => 12,  246 => 11,  242 => 10,  240 => 9,  236 => 8,  227 => 7,  220 => 6,  215 => 651,  212 => 650,  210 => 633,  208 => 618,  205 => 617,  203 => 555,  200 => 553,  198 => 529,  195 => 527,  193 => 501,  190 => 499,  188 => 495,  185 => 493,  183 => 481,  180 => 479,  178 => 472,  175 => 470,  173 => 439,  170 => 437,  168 => 415,  165 => 413,  163 => 407,  160 => 405,  158 => 375,  155 => 373,  153 => 306,  150 => 304,  148 => 293,  145 => 291,  143 => 271,  139 => 268,  137 => 240,  134 => 238,  132 => 220,  129 => 218,  127 => 203,  124 => 201,  122 => 190,  119 => 188,  117 => 162,  114 => 160,  112 => 154,  109 => 152,  107 => 111,  104 => 109,  102 => 100,  99 => 98,  97 => 83,  94 => 81,  92 => 69,  89 => 67,  87 => 64,  84 => 62,  82 => 49,  79 => 47,  77 => 20,  74 => 18,  72 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/mautic_form_layout.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/FormTheme/mautic_form_layout.html.twig");
    }
}
