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

/* @MauticUser/Profile/images/_light_preview.html.twig */
class __TwigTemplate_a049059a1765ec6354156a09dd040470 extends Template
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
        yield "<svg class=\"mb-sm\" viewBox=\"0 0 228 120\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
    <g clip-path=\"url(#clip0_794_43)\">
    <path d=\"M0 0H228V120H0V0Z\" fill=\"white\"/>
    <path d=\"M75 39H47C45.8954 39 45 39.8954 45 41V73C45 74.1046 45.8954 75 47 75H75C76.1046 75 77 74.1046 77 73V41C77 39.8954 76.1046 39 75 39Z\" fill=\"#F4F4F4\"/>
    <path d=\"M0 0H40V120H0V0Z\" fill=\"#F4F4F4\"/>
    <path d=\"M90 20H48C46.3431 20 45 21.3431 45 23C45 24.6569 46.3431 26 48 26H90C91.6569 26 93 24.6569 93 23C93 21.3431 91.6569 20 90 20Z\" fill=\"#DADADA\"/>
    <path d=\"M214.153 39H84.8472C83.827 39 83 40.132 83 41.5283V103.472C83 104.868 83.827 106 84.8472 106H214.153C215.173 106 216 104.868 216 103.472V41.5283C216 40.132 215.173 39 214.153 39Z\" fill=\"#F4F4F4\"/>
    <path opacity=\"0.3\" d=\"M216 44H83V56H216V44Z\" fill=\"var(--primary-60)\"/>
    <path d=\"M143.958 47H90.389C88.8587 47 87.6182 48.3431 87.6182 50C87.6182 51.6569 88.8587 53 90.389 53H143.958C145.489 53 146.729 51.6569 146.729 50C146.729 48.3431 145.489 47 143.958 47Z\" fill=\"var(--primary-60)\"/>
    <g clip-path=\"url(#clip1_794_43)\">
    <path d=\"M213 20H209C208.448 20 208 20.4477 208 21V25C208 25.5523 208.448 26 209 26H213C213.552 26 214 25.5523 214 25V21C214 20.4477 213.552 20 213 20Z\" fill=\"#161616\"/>
    </g>
    <g clip-path=\"url(#clip2_794_43)\">
    <path d=\"M205 20H201C200.448 20 200 20.4477 200 21V25C200 25.5523 200.448 26 201 26H205C205.552 26 206 25.5523 206 25V21C206 20.4477 205.552 20 205 20Z\" fill=\"var(--primary-60)\"/>
    </g>
    <path d=\"M213 9H187C185.343 9 184 10.3431 184 12C184 13.6569 185.343 15 187 15H213C214.657 15 216 13.6569 216 12C216 10.3431 214.657 9 213 9Z\" fill=\"#DADADA\"/>
    </g>
    <defs>
    <clipPath id=\"clip0_794_43\">
    <rect width=\"228\" height=\"120\" fill=\"white\"/>
    </clipPath>
    <clipPath id=\"clip1_794_43\">
    <rect x=\"208\" y=\"20\" width=\"6\" height=\"6\" rx=\"3\" fill=\"white\"/>
    </clipPath>
    <clipPath id=\"clip2_794_43\">
    <rect x=\"200\" y=\"20\" width=\"6\" height=\"6\" rx=\"3\" fill=\"white\"/>
    </clipPath>
    </defs>
    </svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Profile/images/_light_preview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Profile/images/_light_preview.html.twig", "/home/me/mail_www/app/bundles/UserBundle/Resources/views/Profile/images/_light_preview.html.twig");
    }
}
