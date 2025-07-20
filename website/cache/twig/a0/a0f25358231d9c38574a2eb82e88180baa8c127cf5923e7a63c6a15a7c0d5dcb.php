<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/page/backtotop.html.twig */
class __TwigTemplate_3d149a530880830c8d36a3fea1caf9a676251bd9ad7efbff6c5cdf4bca9352c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a id=\"back-to-top\" href=\"#\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "DELIVERNEXT.MISC.BACK_TO_TOP"), "html", null, true);
        echo "\"
    title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "DELIVERNEXT.MISC.BACK_TO_TOP"), "html", null, true);
        echo "\">
    <i class=\"fa fa-chevron-up\"></i>
</a>";
    }

    public function getTemplateName()
    {
        return "partials/page/backtotop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"back-to-top\" href=\"#\" aria-label=\"{{ 'DELIVERNEXT.MISC.BACK_TO_TOP'|t }}\"
    title=\"{{ 'DELIVERNEXT.MISC.BACK_TO_TOP'|t }}\">
    <i class=\"fa fa-chevron-up\"></i>
</a>", "partials/page/backtotop.html.twig", "/home/me/website/user/themes/delivernext/templates/partials/page/backtotop.html.twig");
    }
}
