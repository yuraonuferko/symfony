<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_0241fe4f81d79076dfe041bf3ceef13c4906c4d70ac968dd3234c045fc3091cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22224acb72b2dcf11f7e63e932e19c3a3440c21e19a1a44888139224d119d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22224acb72b2dcf11f7e63e932e19c3a3440c21e19a1a44888139224d119d91->enter($__internal_b22224acb72b2dcf11f7e63e932e19c3a3440c21e19a1a44888139224d119d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22224acb72b2dcf11f7e63e932e19c3a3440c21e19a1a44888139224d119d91->leave($__internal_b22224acb72b2dcf11f7e63e932e19c3a3440c21e19a1a44888139224d119d91_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bb7b4797ddea8bb8e9a4a48f9ef5aa31b5eb64973583e3d64239675ab5cc8150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7b4797ddea8bb8e9a4a48f9ef5aa31b5eb64973583e3d64239675ab5cc8150->enter($__internal_bb7b4797ddea8bb8e9a4a48f9ef5aa31b5eb64973583e3d64239675ab5cc8150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_bb7b4797ddea8bb8e9a4a48f9ef5aa31b5eb64973583e3d64239675ab5cc8150->leave($__internal_bb7b4797ddea8bb8e9a4a48f9ef5aa31b5eb64973583e3d64239675ab5cc8150_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
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
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    Sidebar content
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
