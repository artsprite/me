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

/* @MauticUser/Profile/index.html.twig */
class __TwigTemplate_142ac2fe8b0e6cafa427be793720c98c extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/Profile/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.settings"), "html", null, true);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "user";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<!-- start: box layout -->
<div class=\"container\">
    <!-- step container -->
    <div class=\"row\">
        <div class=\"col-md-3 height-auto\">

            ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14)) {
            // line 15
            yield "            <div class=\"media\">
                <div class=\"pull-left\">
                    <img class=\"img-circle mt-md mb-xs img-bordered media-object\" src=\"";
            // line 17
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 17, $this->source); })()), "getEmail", [], "method", false, false, false, 17));
            yield "\"
                        alt=\"\" width=\"65px\">
                </div>
                <div class=\"media-body\">
                    <h3 class=\"fw-sb\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 21, $this->source); })()), "getName", [], "method", false, false, false, 21), "html", null, true);
            yield "</h3>
                    <span class=\"text-secondary\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 22, $this->source); })()), "getPosition", [], "method", false, false, false, 22), "html", null, true);
            yield "</span>
                </div>
            </div>
            <hr />
            ";
        }
        // line 27
        yield "
            <ul class=\"list-group list-group-tabs\">
                <li class=\"list-group-item active\">
                    <a href=\"#profile\" class=\"list-group-item-heading steps\" data-toggle=\"tab\">
                        ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.header.details"), "html", null, true);
        yield "
                    </a>
                </li>

                ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "apiAccess", [], "array", false, false, false, 35)) {
            // line 36
            yield "                <li class=\"list-group-item\">
                    <a href=\"#clients\" class=\"list-group-item-heading steps\" data-toggle=\"tab\">
                        ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.header.authorizedclients"), "html", null, true);
            yield "
                    </a>
                </li>
                ";
        }
        // line 42
        yield "
                <li class=\"list-group-item\">
                    <a href=\"#appearance\" class=\"list-group-item-heading steps\" data-toggle=\"tab\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance"), "html", null, true);
        // line 45
        yield "</a>
                </li>

                <li class=\"list-group-item\">
                    <a href=\"#accessibility\" class=\"list-group-item-heading steps\" data-toggle=\"tab\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility"), "html", null, true);
        // line 50
        yield "</a>
                </li>
            </ul>

        </div>
        <!--/ step container -->

        <!-- container -->
        <div class=\"col-md-9 height-auto\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade in active bdr-rds-0 bdr-w-0\" id=\"profile\">
                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 61, $this->source); })()), 'form_start');
        yield "
                    <div class=\"row pa-md bdr-b\">
                        <h4 class=\"fw-sb\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.header.details"), "html", null, true);
        yield "</h4>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h3 id=\"personal-info\" class=\"pt-20 mb-xs\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.get_to_know_you"), "html", null, true);
        yield "</h3>
                            <div class=\"text-secondary small pb-20\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.personalize.interface.helper"), "html", null, true);
        yield "</div>
                            ";
        // line 69
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 69, $this->source); })()), "editName", [], "any", false, false, false, 69)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 69, $this->source); })()), "firstName", [], "any", false, false, false, 69), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 69, $this->source); })()), "firstName_unbound", [], "any", false, false, false, 69), 'row')));
        yield "
                            ";
        // line 70
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "editName", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "lastName", [], "any", false, false, false, 70), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "lastName_unbound", [], "any", false, false, false, 70), 'row')));
        yield "
                            ";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "editPosition", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "position", [], "any", false, false, false, 71), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "position_unbound", [], "any", false, false, false, 71), 'row')));
        yield "
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 72, $this->source); })()), "signature", [], "any", false, false, false, 72), 'row');
        yield "

                            <h3 id=\"locale\" class=\"pt-20 mb-xs\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.locale"), "html", null, true);
        yield "</h3>
                            <div class=\"text-secondary small pb-20\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.region.preferences.helper"), "html", null, true);
        yield "</div>
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 76, $this->source); })()), "timezone", [], "any", false, false, false, 76), 'row');
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 77, $this->source); })()), "locale", [], "any", false, false, false, 77), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            <h3 id=\"security\" class=\"pt-20 mb-xs\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.account_data_security"), "html", null, true);
        yield "</h3>
                            <div class=\"text-secondary small pb-20\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.account.security.helper"), "html", null, true);
        yield "</div>
                            ";
        // line 82
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "editUsername", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 82, $this->source); })()), "username", [], "any", false, false, false, 82), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 82, $this->source); })()), "username_unbound", [], "any", false, false, false, 82), 'row')));
        yield "
                            ";
        // line 83
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), "editEmail", [], "any", false, false, false, 83)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 83, $this->source); })()), "email_unbound", [], "any", false, false, false, 83), 'row')));
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "password", [], "any", false, false, false, 84), 'row');
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), "confirm", [], "any", false, false, false, 85), 'row');
        yield "
                            <h3 id=\"learning\" class=\"pt-20 mb-xs\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.experience_and_learning"), "html", null, true);
        yield "</h3>
                            <div class=\"text-secondary small pb-20\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.experience_and_learning.description"), "html", null, true);
        yield "</div>
                            ";
        // line 88
        yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticUser/Profile/index.html.twig", 88)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.user.config.title.experience_and_learning.reset_dismissed", "variant" => "tertiary", "size" => "sm", "icon" => "ri-refresh-line", "danger" => true, "onclick" => "Mautic.resetDismissedElements()"]]]));
        // line 100
        yield "                        </div>
                    </div>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 102, $this->source); })()), "preferences", [], "any", false, false, false, 102), 'row');
        yield "
                    ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
                </div>

                ";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["permissions"] ?? null), "apiAccess", [], "any", true, true, false, 106) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 106, $this->source); })()), "apiAccess", [], "any", false, false, false, 106))) {
            // line 107
            yield "                <div class=\"tab-pane fade bdr-rds-0 bdr-w-0\" id=\"clients\">
                    <div class=\"row pa-md bdr-b\">
                        <h4 class=\"fw-sb\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.header.authorizedclients"), "html", null, true);
            yield "</h4>
                    </div>
                    <div class=\"row\">
                        ";
            // line 112
            yield (isset($context["authorizedClients"]) || array_key_exists("authorizedClients", $context) ? $context["authorizedClients"] : (function () { throw new RuntimeError('Variable "authorizedClients" does not exist.', 112, $this->source); })());
            yield "
                    </div>
                </div>
                ";
        }
        // line 116
        yield "
                <div class=\"tab-pane fade bdr-rds-0 bdr-w-0\" id=\"appearance\">
                    <div class=\"row pa-md bdr-b\">
                        <h4 class=\"fw-sb\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance"), "html", null, true);
        yield "</h4>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 mb-lg\">

                            <h3 class=\"pt-20\">
                                ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance.theme_preferences"), "html", null, true);
        yield "
                                ";
        // line 126
        yield from $this->loadTemplate("@MauticCore/Helper/toggletip.html.twig", "@MauticUser/Profile/index.html.twig", 126)->unwrap()->yield(CoreExtension::merge($context, ["title" => "mautic.user.account.appearance.theme_preferences.popover.title", "content" => "mautic.user.account.appearance.theme_preferences.popover.content"]));
        // line 130
        yield "                            </h3>
                            <div class=\"help-block mb-md\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance.theme_help"), "html", null, true);
        yield "</div>
                            <div class=\"radio-group radio-cards row\">
                                ";
        // line 133
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticUser/Helper/theme.html.twig", ["themes" => [["id" => "light", "name" => "mautic.user.account.appearance.theme_light", "description" => "mautic.user.account.appearance.theme_light_description", "preview" => "@MauticUser/Profile/images/_light_preview.html.twig", "checked" => true], ["id" => "dark", "name" => "mautic.user.account.appearance.theme_dark", "description" => "mautic.user.account.appearance.theme_dark_description", "preview" => "@MauticUser/Profile/images/_dark_preview.html.twig"], ["id" => "solarized-light", "name" => "mautic.user.account.appearance.theme_solarized_light", "description" => "mautic.user.account.appearance.theme_solarized_light_description", "preview" => "app/bundles/UserBundle/Resources/views/Profile/images/_solarized_light_preview.svg"], ["id" => "solarized-dark", "name" => "mautic.user.account.appearance.theme_solarized_dark", "description" => "mautic.user.account.appearance.theme_solarized_dark_description", "preview" => "app/bundles/UserBundle/Resources/views/Profile/images/_solarized_dark_preview.svg"], ["id" => "dark-freire", "name" => "mautic.user.account.appearance.theme_freire", "description" => "mautic.user.account.appearance.theme_freire_description", "preview" => "app/bundles/UserBundle/Resources/views/Profile/images/_freire_preview.svg"]]]);
        // line 167
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade bdr-rds-0 bdr-w-0\" id=\"accessibility\">
                    <div class=\"row pa-md bdr-b\">
                        <h4 class=\"fw-sb\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility"), "html", null, true);
        yield "</h4>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 mb-lg\">
                            <h3 class=\"pt-20 mb-md\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.appearance"), "html", null, true);
        yield "</h3>
                            <h4>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.smooth_color_transitions"), "html", null, true);
        yield "</h4>
                            <div class=\"help-block\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.smooth_color_transitions_help"), "html", null, true);
        yield "</div>
                            <div class=\"radio-group\">
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"transitions-enabled\" name=\"reduce-motion\" value=\"false\"
                                        data-attribute-toggle=\"reduce-motion\" data-attribute-value=\"false\" checked>
                                    <label for=\"transitions-enabled\">
                                        <strong>";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.enabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.transitions_enabled_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"transitions-disabled\" name=\"reduce-motion\" value=\"true\"
                                        data-attribute-toggle=\"reduce-motion\" data-attribute-value=\"true\">
                                    <label for=\"transitions-disabled\">
                                        <strong>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.disabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.transitions_disabled_description"), "html", null, true);
        yield "</div>
                                    </label>
                                </div>
                            </div>
                            <hr>

                            <h4>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.borders_outline_style"), "html", null, true);
        yield "</h4>
                            <div class=\"help-block\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.borders_outline_style_help"), "html", null, true);
        yield "</div>
                            <div class=\"radio-group\">
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"borders-disabled\" name=\"contrast-borders\" value=\"false\"
                                        data-attribute-toggle=\"contrast-borders\" data-attribute-value=\"false\" checked>
                                    <label for=\"borders-disabled\">
                                        <strong>";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.disabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.borders_disabled_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"borders-enabled\" name=\"contrast-borders\" value=\"true\"
                                        data-attribute-toggle=\"contrast-borders\" data-attribute-value=\"true\">
                                    <label for=\"borders-enabled\">
                                        <strong>";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.enabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.borders_enabled_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <h4>";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.reduce_transparency_blur"), "html", null, true);
        yield "</h4>
                            <div class=\"help-block\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.reduce_transparency_blur_help"), "html", null, true);
        yield "</div>
                            <div class=\"radio-group\">
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"transparency-normal\" name=\"reduce-transparency\"
                                        value=\"false\" data-attribute-toggle=\"reduce-transparency\"
                                        data-attribute-value=\"false\" checked>
                                    <label for=\"transparency-normal\">
                                        <strong>";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.normal"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.transparency_normal_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"transparency-reduced\" name=\"reduce-transparency\"
                                        value=\"true\" data-attribute-toggle=\"reduce-transparency\"
                                        data-attribute-value=\"true\">
                                    <label for=\"transparency-reduced\">
                                        <strong>";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.reduced"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.transparency_reduced_description"), "html", null, true);
        yield "</div>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <h3 class=\"pt-20 mb-md\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.content"), "html", null, true);
        yield "</h3>
                            <h4>";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.link_underlines"), "html", null, true);
        yield "</h4>
                            <div class=\"help-block\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.link_underlines_help"), "html", null, true);
        yield "
                            </div>
                            <div class=\"radio-group\">
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"underlines-disabled\" name=\"enable-underlines\" value=\"false\"
                                        data-attribute-toggle=\"enable-underlines\" data-attribute-value=\"false\" checked>
                                    <label for=\"underlines-disabled\">
                                        <strong>";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.disabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.underlines_disabled_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                                <div class=\"radio-option\">
                                    <input type=\"radio\" id=\"underlines-enabled\" name=\"enable-underlines\" value=\"true\"
                                        data-attribute-toggle=\"enable-underlines\" data-attribute-value=\"true\">
                                    <label for=\"underlines-enabled\">
                                        <strong>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.enabled"), "html", null, true);
        yield "</strong>
                                        <div class=\"text-help\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.accessibility.underlines_enabled_description"), "html", null, true);
        yield "
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ end: container -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Profile/index.html.twig";
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
        return array (  503 => 269,  499 => 268,  488 => 260,  484 => 259,  474 => 252,  470 => 251,  466 => 250,  458 => 245,  454 => 244,  442 => 235,  438 => 234,  428 => 227,  424 => 226,  415 => 220,  411 => 219,  400 => 211,  396 => 210,  387 => 204,  383 => 203,  374 => 197,  370 => 196,  359 => 188,  355 => 187,  346 => 181,  342 => 180,  338 => 179,  331 => 175,  321 => 167,  319 => 133,  314 => 131,  311 => 130,  309 => 126,  305 => 125,  296 => 119,  291 => 116,  284 => 112,  278 => 109,  274 => 107,  272 => 106,  266 => 103,  262 => 102,  258 => 100,  256 => 88,  252 => 87,  248 => 86,  244 => 85,  240 => 84,  236 => 83,  232 => 82,  228 => 81,  224 => 80,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  201 => 72,  197 => 71,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  174 => 63,  169 => 61,  156 => 50,  154 => 49,  148 => 45,  146 => 44,  142 => 42,  135 => 38,  131 => 36,  129 => 35,  122 => 31,  116 => 27,  108 => 22,  104 => 21,  97 => 17,  93 => 15,  91 => 14,  82 => 7,  75 => 6,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Profile/index.html.twig", "/home/me/mail_www/app/bundles/UserBundle/Resources/views/Profile/index.html.twig");
    }
}
