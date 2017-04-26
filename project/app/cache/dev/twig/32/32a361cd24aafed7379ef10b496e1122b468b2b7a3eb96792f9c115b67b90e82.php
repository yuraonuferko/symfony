<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_6dfe34a1234bb350a43d8482de3de6df88e597f9f92ecd170d6afe3c67ba577a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44c83910abf1b5d9aee6ad8f1473082f4705e306eb169727e2a98ef3ce8558c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c83910abf1b5d9aee6ad8f1473082f4705e306eb169727e2a98ef3ce8558c7->enter($__internal_44c83910abf1b5d9aee6ad8f1473082f4705e306eb169727e2a98ef3ce8558c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c83910abf1b5d9aee6ad8f1473082f4705e306eb169727e2a98ef3ce8558c7->leave($__internal_44c83910abf1b5d9aee6ad8f1473082f4705e306eb169727e2a98ef3ce8558c7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac2e7ee8001cfb54dcf75f7bc6f641cedeb2337be4ab4b15cd680511e4f5c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac2e7ee8001cfb54dcf75f7bc6f641cedeb2337be4ab4b15cd680511e4f5c32->enter($__internal_aac2e7ee8001cfb54dcf75f7bc6f641cedeb2337be4ab4b15cd680511e4f5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_aac2e7ee8001cfb54dcf75f7bc6f641cedeb2337be4ab4b15cd680511e4f5c32->leave($__internal_aac2e7ee8001cfb54dcf75f7bc6f641cedeb2337be4ab4b15cd680511e4f5c32_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a85d87d1b94508e29645ff61b1d85e7288753d0b7f10e8c0360778b4d43b7b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85d87d1b94508e29645ff61b1d85e7288753d0b7f10e8c0360778b4d43b7b44->enter($__internal_a85d87d1b94508e29645ff61b1d85e7288753d0b7f10e8c0360778b4d43b7b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
";
        
        $__internal_a85d87d1b94508e29645ff61b1d85e7288753d0b7f10e8c0360778b4d43b7b44->leave($__internal_a85d87d1b94508e29645ff61b1d85e7288753d0b7f10e8c0360778b4d43b7b44_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}


{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
