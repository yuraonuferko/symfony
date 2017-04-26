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
        $__internal_fbd4b146d6fa4e13e8098abbd0f0c25bca9118fe20093071724e9cc652213b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd4b146d6fa4e13e8098abbd0f0c25bca9118fe20093071724e9cc652213b6f->enter($__internal_fbd4b146d6fa4e13e8098abbd0f0c25bca9118fe20093071724e9cc652213b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd4b146d6fa4e13e8098abbd0f0c25bca9118fe20093071724e9cc652213b6f->leave($__internal_fbd4b146d6fa4e13e8098abbd0f0c25bca9118fe20093071724e9cc652213b6f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbe5a6c6bdce328474512d86585e1eb01701f53649f0eb64a70e9a202d40f287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe5a6c6bdce328474512d86585e1eb01701f53649f0eb64a70e9a202d40f287->enter($__internal_cbe5a6c6bdce328474512d86585e1eb01701f53649f0eb64a70e9a202d40f287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_cbe5a6c6bdce328474512d86585e1eb01701f53649f0eb64a70e9a202d40f287->leave($__internal_cbe5a6c6bdce328474512d86585e1eb01701f53649f0eb64a70e9a202d40f287_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_57de706a937d0e551fdb1fc985a27ada9fd3ff4577f6fbcff6bae1407b67441b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57de706a937d0e551fdb1fc985a27ada9fd3ff4577f6fbcff6bae1407b67441b->enter($__internal_57de706a937d0e551fdb1fc985a27ada9fd3ff4577f6fbcff6bae1407b67441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"blogger-notice\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <p>Want to contact symblog?</p>

    ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'row');
        echo "

    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
        
        $__internal_57de706a937d0e551fdb1fc985a27ada9fd3ff4577f6fbcff6bae1407b67441b->leave($__internal_57de706a937d0e551fdb1fc985a27ada9fd3ff4577f6fbcff6bae1407b67441b_prof);

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
        return array (  104 => 25,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  82 => 18,  78 => 17,  74 => 15,  65 => 12,  62 => 11,  58 => 10,  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
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
    {% for flashMessage in app.session.flashbag.get('blogger-notice') %}
        <div class=\"blogger-notice\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    <p>Want to contact symblog?</p>

    {{ form_start(form, { 'action': path('BloggerBlogBundle_contact'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
    {{ form_errors(form) }}

    {{ form_row(form.name) }}
    {{ form_row(form.email) }}
    {{ form_row(form.subject) }}
    {{ form_row(form.body) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />

{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
