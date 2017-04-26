<?php

/* test/number.html.twig */
class __TwigTemplate_0dc8624f4f22a76ed20138d8757531b3ade265e1948303554d4a93a252982203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e31ae5ad1553c63a92bca930c8c67b89013948190478f65c3f65239228799d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e31ae5ad1553c63a92bca930c8c67b89013948190478f65c3f65239228799d->enter($__internal_a4e31ae5ad1553c63a92bca930c8c67b89013948190478f65c3f65239228799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/number.html.twig"));

        // line 2
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_a4e31ae5ad1553c63a92bca930c8c67b89013948190478f65c3f65239228799d->leave($__internal_a4e31ae5ad1553c63a92bca930c8c67b89013948190478f65c3f65239228799d_prof);

    }

    public function getTemplateName()
    {
        return "test/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}

<h1>Your lucky number is {{ number }}</h1>", "test/number.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\app\\Resources\\views\\test\\number.html.twig");
    }
}
