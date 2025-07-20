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

/* @MauticInstall/Install/base.html.twig */
class __TwigTemplate_b5c08641611bd3f3cd8c42a4841c7b23 extends Template
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
        $context["headerTitle"] = "Install";
        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 5
        $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScript("app/bundles/InstallBundle/Assets/install/install.js");
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/head.html.twig");
        // line 7
        yield "<body>
        <!-- start: app-wrapper -->
        <section id=\"app-wrapper\">
            <div class=\"container\">
                <div class=\"row mt-20\">
                    <div class=\"text-center\">
                        <img src=\"";
        // line 13
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/mautic_logo_lb200.png");
        yield "\" height=\"50px\" alt=\"Mautic\" />
                    </div>

                    <div class=\"mt-20 col-lg-6 col-lg-offset-3\">
                        <div id=\"app-content\" class=\"panel panel-default\">";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        // line 19
        yield from         $this->unwrap()->yieldBlock("content", $context, $blocks);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ end: app-content -->
    </body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/base.html.twig";
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
        return array (  70 => 19,  68 => 18,  61 => 13,  53 => 7,  51 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/base.html.twig", "/home/me/mail_www/app/bundles/InstallBundle/Resources/views/Install/base.html.twig");
    }
}
