<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_07c04c58e3b2f77d815525655bef24e80f4fab31faa7e38ec305c5daec40d029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a545aee6208e6609050ba14731003070d83ea494702eb7609c0dd98d7ddda08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a545aee6208e6609050ba14731003070d83ea494702eb7609c0dd98d7ddda08a->enter($__internal_a545aee6208e6609050ba14731003070d83ea494702eb7609c0dd98d7ddda08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a545aee6208e6609050ba14731003070d83ea494702eb7609c0dd98d7ddda08a->leave($__internal_a545aee6208e6609050ba14731003070d83ea494702eb7609c0dd98d7ddda08a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf671ad4528e430c41b6880e830f91717c48060f4cf2bcd052c529e3de855eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf671ad4528e430c41b6880e830f91717c48060f4cf2bcd052c529e3de855eb1->enter($__internal_bf671ad4528e430c41b6880e830f91717c48060f4cf2bcd052c529e3de855eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf671ad4528e430c41b6880e830f91717c48060f4cf2bcd052c529e3de855eb1->leave($__internal_bf671ad4528e430c41b6880e830f91717c48060f4cf2bcd052c529e3de855eb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_732770c3abd409ff8a489e5b6a6b63b2c90c3194ad8d0a11527590fb6434a3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732770c3abd409ff8a489e5b6a6b63b2c90c3194ad8d0a11527590fb6434a3b3->enter($__internal_732770c3abd409ff8a489e5b6a6b63b2c90c3194ad8d0a11527590fb6434a3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_732770c3abd409ff8a489e5b6a6b63b2c90c3194ad8d0a11527590fb6434a3b3->leave($__internal_732770c3abd409ff8a489e5b6a6b63b2c90c3194ad8d0a11527590fb6434a3b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa554178385c7678bb2ce5b6dd5ba6b83ccc55e6b921f2fc1eb32eb91cc6cb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa554178385c7678bb2ce5b6dd5ba6b83ccc55e6b921f2fc1eb32eb91cc6cb95->enter($__internal_fa554178385c7678bb2ce5b6dd5ba6b83ccc55e6b921f2fc1eb32eb91cc6cb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa554178385c7678bb2ce5b6dd5ba6b83ccc55e6b921f2fc1eb32eb91cc6cb95->leave($__internal_fa554178385c7678bb2ce5b6dd5ba6b83ccc55e6b921f2fc1eb32eb91cc6cb95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
