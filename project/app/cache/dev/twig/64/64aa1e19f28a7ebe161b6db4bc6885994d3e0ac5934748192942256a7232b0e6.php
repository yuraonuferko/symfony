<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_25aadd8a34143641228e7846d8342ac68cc45cfc82c3a41d3508610109e6f168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9b43814b635923f648c5033b115297927413ff15056558f91d5881aea85c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9b43814b635923f648c5033b115297927413ff15056558f91d5881aea85c24->enter($__internal_2e9b43814b635923f648c5033b115297927413ff15056558f91d5881aea85c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9b43814b635923f648c5033b115297927413ff15056558f91d5881aea85c24->leave($__internal_2e9b43814b635923f648c5033b115297927413ff15056558f91d5881aea85c24_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_db002483287f9446a3cbb8c28176d3953cad642547d35f1368e283b4c3279039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db002483287f9446a3cbb8c28176d3953cad642547d35f1368e283b4c3279039->enter($__internal_db002483287f9446a3cbb8c28176d3953cad642547d35f1368e283b4c3279039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_db002483287f9446a3cbb8c28176d3953cad642547d35f1368e283b4c3279039->leave($__internal_db002483287f9446a3cbb8c28176d3953cad642547d35f1368e283b4c3279039_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    Blog homepage
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
