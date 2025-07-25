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

/* @admin-images/grav-regular.svg */
class __TwigTemplate_c8840c9b51b5f5338c77f7c72e81006645b3fb5a454aa74b82b679352d933dbd extends \Twig\Template
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
        echo "<svg id=\"grav-logo-large\" class=\"grav-logo\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" viewBox=\"0 0 444 103\" clip-rule=\"evenodd\"><path d=\"M87.3 54.2H76.64c-1.6 0-2.93 1.3-2.93 2.94v20.43l-.2.18c-6.27 5.28-14.2 8.2-22.3 8.2-19.14-.02-34.7-15.6-34.7-34.73 0-19.14 15.56-34.7 34.7-34.7 7.44 0 14.56 2.34 20.58 6.8 1.17.87 2.8.75 3.83-.28l7.58-7.58c.6-.6.9-1.4.86-2.25-.04-.82-.44-1.6-1.1-2.12C73.94 3.94 62.66 0 51.22 0 22.98 0 0 22.98 0 51.22s22.98 51.22 51.22 51.22c14.58 0 28.53-6.27 38.26-17.22.48-.54.74-1.23.74-1.95V57.14c0-1.63-1.3-2.94-2.93-2.94M443.24 4.7c-.54-.8-1.47-1.3-2.45-1.3h-11.6c-1.16 0-2.22.68-2.68 1.76l-32.65 75.8-33.22-75.82c-.47-1.06-1.53-1.75-2.7-1.75h-11.6c-1 0-1.92.5-2.46 1.32-.55.83-.65 1.87-.24 2.78l40.24 91.8c.47 1.08 1.53 1.77 2.7 1.77h14.65c1.17 0 2.23-.7 2.7-1.77L443.5 7.48c.37-.9.28-1.95-.26-2.77\"/><path d=\"M291.1 5.14c-.48-1.06-1.53-1.75-2.7-1.75h-14.65c-1.17 0-2.23.68-2.7 1.76l-39.53 91.8c-.4.92-.3 1.96.24 2.78.54.83 1.46 1.33 2.45 1.33h11.6c1.16 0 2.22-.7 2.7-1.77l32.62-75.8 33.23 75.8c.47 1.08 1.52 1.77 2.68 1.77h11.63c1 0 1.92-.5 2.45-1.33.56-.83.64-1.88.25-2.8L291.1 5.15zM185.1 67.48l.65-.3c11.56-5.6 19.03-17.45 19.03-30.23 0-18.5-15.05-33.56-33.56-33.56h-42.5c-1.6 0-2.92 1.3-2.92 2.92v91.8c0 1.63 1.3 2.95 2.93 2.95h10.64c1.62 0 2.93-1.3 2.93-2.94V19.9h28.92c9.4 0 17.06 7.64 17.06 17.05 0 7.85-5.33 14.65-12.97 16.55-1.36.34-2.74.52-4.08.52h-10.64c-1.1 0-2.1.62-2.6 1.6-.5 1-.42 2.17.24 3.07l30.16 41.17c.55.75 1.42 1.2 2.36 1.2h13.22c1.1 0 2.12-.62 2.6-1.6.52-1 .42-2.18-.24-3.07l-21.2-28.92z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "@admin-images/grav-regular.svg";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<svg id=\"grav-logo-large\" class=\"grav-logo\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" viewBox=\"0 0 444 103\" clip-rule=\"evenodd\"><path d=\"M87.3 54.2H76.64c-1.6 0-2.93 1.3-2.93 2.94v20.43l-.2.18c-6.27 5.28-14.2 8.2-22.3 8.2-19.14-.02-34.7-15.6-34.7-34.73 0-19.14 15.56-34.7 34.7-34.7 7.44 0 14.56 2.34 20.58 6.8 1.17.87 2.8.75 3.83-.28l7.58-7.58c.6-.6.9-1.4.86-2.25-.04-.82-.44-1.6-1.1-2.12C73.94 3.94 62.66 0 51.22 0 22.98 0 0 22.98 0 51.22s22.98 51.22 51.22 51.22c14.58 0 28.53-6.27 38.26-17.22.48-.54.74-1.23.74-1.95V57.14c0-1.63-1.3-2.94-2.93-2.94M443.24 4.7c-.54-.8-1.47-1.3-2.45-1.3h-11.6c-1.16 0-2.22.68-2.68 1.76l-32.65 75.8-33.22-75.82c-.47-1.06-1.53-1.75-2.7-1.75h-11.6c-1 0-1.92.5-2.46 1.32-.55.83-.65 1.87-.24 2.78l40.24 91.8c.47 1.08 1.53 1.77 2.7 1.77h14.65c1.17 0 2.23-.7 2.7-1.77L443.5 7.48c.37-.9.28-1.95-.26-2.77\"/><path d=\"M291.1 5.14c-.48-1.06-1.53-1.75-2.7-1.75h-14.65c-1.17 0-2.23.68-2.7 1.76l-39.53 91.8c-.4.92-.3 1.96.24 2.78.54.83 1.46 1.33 2.45 1.33h11.6c1.16 0 2.22-.7 2.7-1.77l32.62-75.8 33.23 75.8c.47 1.08 1.52 1.77 2.68 1.77h11.63c1 0 1.92-.5 2.45-1.33.56-.83.64-1.88.25-2.8L291.1 5.15zM185.1 67.48l.65-.3c11.56-5.6 19.03-17.45 19.03-30.23 0-18.5-15.05-33.56-33.56-33.56h-42.5c-1.6 0-2.92 1.3-2.92 2.92v91.8c0 1.63 1.3 2.95 2.93 2.95h10.64c1.62 0 2.93-1.3 2.93-2.94V19.9h28.92c9.4 0 17.06 7.64 17.06 17.05 0 7.85-5.33 14.65-12.97 16.55-1.36.34-2.74.52-4.08.52h-10.64c-1.1 0-2.1.62-2.6 1.6-.5 1-.42 2.17.24 3.07l30.16 41.17c.55.75 1.42 1.2 2.36 1.2h13.22c1.1 0 2.12-.62 2.6-1.6.52-1 .42-2.18-.24-3.07l-21.2-28.92z\"/></svg>
", "@admin-images/grav-regular.svg", "/home/me/website/user/plugins/admin/themes/grav/images/grav-regular.svg");
    }
}
