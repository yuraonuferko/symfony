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
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e662d30105e25fa0d0b95df5520caf03affa6328960a6d5b993f9b832d6dcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e662d30105e25fa0d0b95df5520caf03affa6328960a6d5b993f9b832d6dcda->enter($__internal_8e662d30105e25fa0d0b95df5520caf03affa6328960a6d5b993f9b832d6dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e662d30105e25fa0d0b95df5520caf03affa6328960a6d5b993f9b832d6dcda->leave($__internal_8e662d30105e25fa0d0b95df5520caf03affa6328960a6d5b993f9b832d6dcda_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_084296127b4e1b3c557cfbcb7b5478d4af3a2cbc519406d5ad677edea13090e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084296127b4e1b3c557cfbcb7b5478d4af3a2cbc519406d5ad677edea13090e7->enter($__internal_084296127b4e1b3c557cfbcb7b5478d4af3a2cbc519406d5ad677edea13090e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_084296127b4e1b3c557cfbcb7b5478d4af3a2cbc519406d5ad677edea13090e7->leave($__internal_084296127b4e1b3c557cfbcb7b5478d4af3a2cbc519406d5ad677edea13090e7_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b4e5677188916b4e7cb79843b0e7a7eea86511dd6cb885a981d1fe5d12c34a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e5677188916b4e7cb79843b0e7a7eea86511dd6cb885a981d1fe5d12c34a4c->enter($__internal_b4e5677188916b4e7cb79843b0e7a7eea86511dd6cb885a981d1fe5d12c34a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_b4e5677188916b4e7cb79843b0e7a7eea86511dd6cb885a981d1fe5d12c34a4c->leave($__internal_b4e5677188916b4e7cb79843b0e7a7eea86511dd6cb885a981d1fe5d12c34a4c_prof);

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
        return array (  61 => 10,  55 => 9,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
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

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/bloggerblog/css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}", "BloggerBlogBundle::layout.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
