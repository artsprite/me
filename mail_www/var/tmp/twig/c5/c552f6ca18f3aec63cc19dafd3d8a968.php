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

/* @MauticCore/Default/navbar.html.twig */
class __TwigTemplate_3f3799fe95ecd7e2bbe6e003c1b82c66 extends Template
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
        yield "<div class=\"loading-bar\">
    ";
        // line 2
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 3
        yield "</div>

<div class=\"navbar-nocollapse\">
    <!-- start: left nav -->
    <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"visible-xs\">
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"ltr\">
                <i class=\"ri-menu-line fs-16\"></i>
            </a>
        </li>
        <!-- brand -->
         <li>
            <a class=\"mautic-brand\" href=\"#\">
                <!-- logo figure -->
                <svg version=\"1.1\" class=\"mautic-logo-figure\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 128 128\" enable-background=\"new 0 0 128 128\" xml:space=\"preserve\">
                    <path class=\"circle\" d=\"M64,119.843c-30.937,0-56.108-25.17-56.108-56.108C7.893,32.799,33.063,7.629,64,7.629
                    c7.474,0,14.734,1.446,21.578,4.301c1.936,0.807,2.85,3.03,2.041,4.964c-0.805,1.937-3.029,2.849-4.963,2.043
                    C76.742,16.472,70.465,15.221,64,15.221c-26.751,0-48.514,21.763-48.514,48.514c0,26.752,21.763,48.516,48.514,48.516
                    c26.751,0,48.513-21.764,48.513-48.516c0-5.735-0.988-11.345-2.939-16.677c-0.723-1.968,0.289-4.149,2.258-4.869
                    c1.971-0.721,4.15,0.291,4.871,2.259c2.258,6.171,3.404,12.661,3.404,19.287C120.107,94.673,94.938,119.843,64,119.843\"/>
                    <polygon class=\"m\" points=\"88.545,57.987 79.807,67.055 84.664,87.332 95.621,87.332 \"/>
                    <polygon class=\"m-arrow\" points=\"84.982,31.157 88.004,34.176 63.933,59.605 43.446,38.475 31.664,87.332 42.621,87.332
                    49.122,60.198 63.933,76.399 95.699,41.815 98.738,44.875 101.75,27.784 \"/>
                </svg>
                <!--/ logo figure -->
                <!-- logo text -->
                <svg version=\"1.1\" class=\"mautic-logo-text mnl-3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 260 65\" enable-background=\"new 0 0 260 65\" xml:space=\"preserve\">
                    <g>
                        <path class=\"m\" d=\"M39.336,57.983V37.951c0-4.932-2.58-9.409-7.664-9.409
                        c-5.008,0-7.967,4.477-7.967,9.409v20.032h-9.258V20.498h8.575l0.683,4.553c1.972-3.794,6.298-5.16,9.864-5.16
                        c4.477,0,8.955,1.822,11.079,6.981c3.339-5.311,7.664-6.829,12.521-6.829c10.623,0,15.859,6.526,15.859,17.756v20.185H63.77V37.799
                        c0-4.932-2.049-9.106-7.057-9.106s-8.119,4.326-8.119,9.258v20.032H39.336z\"/>
                        <path class=\"a\" d=\"M109.031,20.574h8.879v37.41h-8.728l-0.456-5.464
                        c-2.124,4.402-7.967,6.527-12.14,6.604c-11.079,0.074-19.275-6.754-19.275-19.883c0-12.898,8.575-19.652,19.502-19.577
                        c5.01,0,9.789,2.352,11.913,6.07L109.031,20.574z M86.569,39.24c0,7.134,4.934,11.384,11.079,11.384
                        c14.569,0,14.569-22.689,0-22.689C91.503,27.935,86.569,32.108,86.569,39.24\"/>
                        <path class=\"u\" d=\"M133.101,20.574v19.578c0,5.69,3.11,10.016,9.03,10.016
                        c5.69,0,9.561-4.781,9.561-10.471V20.574h9.181v37.486h-8.27l-0.607-5.084c-3.871,3.794-7.437,5.614-12.672,5.614
                        c-8.954,0-15.48-6.754-15.48-18.363V20.574H133.101z\"/>
                        <path class=\"t\" d=\"M182.123,10.026V20.65h10.319v7.967h-10.396V44.78
                        c0,3.567,1.973,5.313,4.855,5.313c1.443,0,3.112-0.455,4.479-1.14l2.58,7.893c-2.656,1.062-4.857,1.518-7.664,1.594
                        c-8.12,0.303-13.432-4.326-13.432-13.659V28.617h-6.98V20.65h6.98v-9.637L182.123,10.026z\"/>
                        <path class=\"i\" d=\"M209.441,10.026c0,7.209-10.929,7.209-10.929,0 C198.513,2.818,209.441,2.818,209.441,10.026 M199.348,57.984h9.259V20.422h-9.259V57.984z\"/>
                        <path class=\"c\" d=\"M247.803,53.203c-4.326,4.249-8.879,5.92-14.418,5.92
                        c-10.853,0-19.881-6.526-19.881-19.807c0-13.279,9.028-19.805,19.881-19.805c5.312,0,9.409,1.518,13.507,5.54l-5.843,6.146
                        c-2.2-1.973-4.934-2.959-7.514-2.959c-6.221,0-10.773,4.553-10.773,11.078c0,7.133,4.855,10.927,10.623,10.927
                        c2.959,0,5.919-0.834,8.194-3.11L247.803,53.203z\"/>
                    </g>
                </svg>
                <!--/ logo text -->
            </a>
            <!--/ brand -->
         </li>
        ";
        // line 56
        yield from $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Default/navbar.html.twig", 56)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.search_everything", "tooltip_placement" => "right", "variant" => "ghost", "icon" => "ri-search-line ri-xl", "icon_only" => true, "attributes" => ["type" => "button", "data-toggle" => "modal", "data-target" => "#gsearchModal", "class" => "search-button"]]]]));
        // line 73
        yield "
    </ul>
    <!--/ end: left nav -->

    <!-- start: right nav -->
    <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::notificationsAction"));
        yield "
        ";
        // line 80
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Menu/quick_help.html.twig");
        yield "
        ";
        // line 81
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("admin");
        yield "
        ";
        // line 82
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Menu/profile.html.twig");
        yield "
    </ul>
    <div class=\"navbar-toolbar pull-right mt-15 mr-10\">
    ";
        // line 85
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_NAVBAR"));
        yield "
    ";
        // line 86
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
    </div>

    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/navbar.html.twig";
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
        return array (  134 => 86,  130 => 85,  124 => 82,  120 => 81,  116 => 80,  112 => 79,  104 => 73,  102 => 56,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/navbar.html.twig", "/home/me/mail_www/app/bundles/CoreBundle/Resources/views/Default/navbar.html.twig");
    }
}
