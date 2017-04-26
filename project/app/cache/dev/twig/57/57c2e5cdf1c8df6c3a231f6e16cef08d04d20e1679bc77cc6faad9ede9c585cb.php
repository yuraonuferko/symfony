<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99fd0df60bb6493e04ca4bdaf89cf518483592e3eec0d7e276f2d42fd9a8ea76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f868fe477106ca4cdca2e1af9a44a9f33a6dd06c2cb1ddc331dcf81c154d9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f868fe477106ca4cdca2e1af9a44a9f33a6dd06c2cb1ddc331dcf81c154d9ca->enter($__internal_7f868fe477106ca4cdca2e1af9a44a9f33a6dd06c2cb1ddc331dcf81c154d9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f868fe477106ca4cdca2e1af9a44a9f33a6dd06c2cb1ddc331dcf81c154d9ca->leave($__internal_7f868fe477106ca4cdca2e1af9a44a9f33a6dd06c2cb1ddc331dcf81c154d9ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ea1fa8e30de5697ab13946fa7f202c45deee4deaa493d209e6bdd28cb610f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea1fa8e30de5697ab13946fa7f202c45deee4deaa493d209e6bdd28cb610f7e->enter($__internal_3ea1fa8e30de5697ab13946fa7f202c45deee4deaa493d209e6bdd28cb610f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ea1fa8e30de5697ab13946fa7f202c45deee4deaa493d209e6bdd28cb610f7e->leave($__internal_3ea1fa8e30de5697ab13946fa7f202c45deee4deaa493d209e6bdd28cb610f7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_066078d1fab66f91dd8fa367d2aa7e40f5701e128e6c3dfbf4565a4b8bf91f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066078d1fab66f91dd8fa367d2aa7e40f5701e128e6c3dfbf4565a4b8bf91f72->enter($__internal_066078d1fab66f91dd8fa367d2aa7e40f5701e128e6c3dfbf4565a4b8bf91f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_066078d1fab66f91dd8fa367d2aa7e40f5701e128e6c3dfbf4565a4b8bf91f72->leave($__internal_066078d1fab66f91dd8fa367d2aa7e40f5701e128e6c3dfbf4565a4b8bf91f72_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48ad5a6934315d6e34095dcc1cfaa810f5c80ac2afa5b395cf926d7666fbf1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ad5a6934315d6e34095dcc1cfaa810f5c80ac2afa5b395cf926d7666fbf1dd->enter($__internal_48ad5a6934315d6e34095dcc1cfaa810f5c80ac2afa5b395cf926d7666fbf1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48ad5a6934315d6e34095dcc1cfaa810f5c80ac2afa5b395cf926d7666fbf1dd->leave($__internal_48ad5a6934315d6e34095dcc1cfaa810f5c80ac2afa5b395cf926d7666fbf1dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
