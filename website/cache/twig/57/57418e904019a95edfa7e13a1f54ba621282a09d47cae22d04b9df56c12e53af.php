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

/* @Var:{"title":"Contact Me","onpage_menu":"1","body_classes":"modular header-lite fullwidth","bg_color":"#B4B093","content":{"items":"@self.modular","order":{"by":"default","dir":"asc"}},"sitemap":{"lastmod":"28-01-2025 16:24"},"show_title":"1","title_bg_choice":"color","media_order":"blog-header.png,pic06.jpg","show_featured_image":true,"featured_image":"pic06.jpg","big_header":false,"title_text_color":"#ffffff","title_bg_color":"#b84e2b"} */
class __TwigTemplate_754d47e668a7f70175280d17272a0e25fc3fc84f87f2513ece2c3e2a426579e1 extends \Twig\Template
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
        echo "{\"title\":\"Contact Me\",\"onpage_menu\":\"1\",\"body_classes\":\"modular header-lite fullwidth\",\"bg_color\":\"#B4B093\",\"content\":{\"items\":\"@self.modular\",\"order\":{\"by\":\"default\",\"dir\":\"asc\"}},\"sitemap\":{\"lastmod\":\"28-01-2025 16:24\"},\"show_title\":\"1\",\"title_bg_choice\":\"color\",\"media_order\":\"blog-header.png,pic06.jpg\",\"show_featured_image\":true,\"featured_image\":\"pic06.jpg\",\"big_header\":false,\"title_text_color\":\"#ffffff\",\"title_bg_color\":\"#b84e2b\"}";
    }

    public function getTemplateName()
    {
        return "@Var:{\"title\":\"Contact Me\",\"onpage_menu\":\"1\",\"body_classes\":\"modular header-lite fullwidth\",\"bg_color\":\"#B4B093\",\"content\":{\"items\":\"@self.modular\",\"order\":{\"by\":\"default\",\"dir\":\"asc\"}},\"sitemap\":{\"lastmod\":\"28-01-2025 16:24\"},\"show_title\":\"1\",\"title_bg_choice\":\"color\",\"media_order\":\"blog-header.png,pic06.jpg\",\"show_featured_image\":true,\"featured_image\":\"pic06.jpg\",\"big_header\":false,\"title_text_color\":\"#ffffff\",\"title_bg_color\":\"#b84e2b\"}";
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
        return new Source("{\"title\":\"Contact Me\",\"onpage_menu\":\"1\",\"body_classes\":\"modular header-lite fullwidth\",\"bg_color\":\"#B4B093\",\"content\":{\"items\":\"@self.modular\",\"order\":{\"by\":\"default\",\"dir\":\"asc\"}},\"sitemap\":{\"lastmod\":\"28-01-2025 16:24\"},\"show_title\":\"1\",\"title_bg_choice\":\"color\",\"media_order\":\"blog-header.png,pic06.jpg\",\"show_featured_image\":true,\"featured_image\":\"pic06.jpg\",\"big_header\":false,\"title_text_color\":\"#ffffff\",\"title_bg_color\":\"#b84e2b\"}", "@Var:{\"title\":\"Contact Me\",\"onpage_menu\":\"1\",\"body_classes\":\"modular header-lite fullwidth\",\"bg_color\":\"#B4B093\",\"content\":{\"items\":\"@self.modular\",\"order\":{\"by\":\"default\",\"dir\":\"asc\"}},\"sitemap\":{\"lastmod\":\"28-01-2025 16:24\"},\"show_title\":\"1\",\"title_bg_choice\":\"color\",\"media_order\":\"blog-header.png,pic06.jpg\",\"show_featured_image\":true,\"featured_image\":\"pic06.jpg\",\"big_header\":false,\"title_text_color\":\"#ffffff\",\"title_bg_color\":\"#b84e2b\"}", "");
    }
}
