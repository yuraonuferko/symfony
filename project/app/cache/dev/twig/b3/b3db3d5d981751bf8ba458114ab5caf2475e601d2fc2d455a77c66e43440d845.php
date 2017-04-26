<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_6041dc8a3fc50f19bd3d2d790cc9571159e4d83393e266243516213ce16b3a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_1129e045ac1fa21e31a884df5bc279f5e295a00f6e32ba5d53e06a0da708e8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1129e045ac1fa21e31a884df5bc279f5e295a00f6e32ba5d53e06a0da708e8f8->enter($__internal_1129e045ac1fa21e31a884df5bc279f5e295a00f6e32ba5d53e06a0da708e8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1129e045ac1fa21e31a884df5bc279f5e295a00f6e32ba5d53e06a0da708e8f8->leave($__internal_1129e045ac1fa21e31a884df5bc279f5e295a00f6e32ba5d53e06a0da708e8f8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbeaf30336a978c0e804ddbcfaea1426de5041f9aee5606f568200bb5c77e3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeaf30336a978c0e804ddbcfaea1426de5041f9aee5606f568200bb5c77e3fc->enter($__internal_bbeaf30336a978c0e804ddbcfaea1426de5041f9aee5606f568200bb5c77e3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_bbeaf30336a978c0e804ddbcfaea1426de5041f9aee5606f568200bb5c77e3fc->leave($__internal_bbeaf30336a978c0e804ddbcfaea1426de5041f9aee5606f568200bb5c77e3fc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a8eba35d56bdcb49f4ab52770c03b85603e178ef04f0a32a5f4876be55b54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a8eba35d56bdcb49f4ab52770c03b85603e178ef04f0a32a5f4876be55b54e->enter($__internal_68a8eba35d56bdcb49f4ab52770c03b85603e178ef04f0a32a5f4876be55b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_68a8eba35d56bdcb49f4ab52770c03b85603e178ef04f0a32a5f4876be55b54e->leave($__internal_68a8eba35d56bdcb49f4ab52770c03b85603e178ef04f0a32a5f4876be55b54e_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
{% endblock %}
", "BloggerBlogBundle:Page:about.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Page/about.html.twig");
    }
}
