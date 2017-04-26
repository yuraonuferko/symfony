<?php

/* base.html.twig */
class __TwigTemplate_6eed85c709b2708cb0130a0147a97e706cdd92b400dd509ad0e6f3bc2433acad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e083e89c33cc178357cd34ffc8768f82adb8f7bc9549682270d38433a878ac30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e083e89c33cc178357cd34ffc8768f82adb8f7bc9549682270d38433a878ac30->enter($__internal_e083e89c33cc178357cd34ffc8768f82adb8f7bc9549682270d38433a878ac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e083e89c33cc178357cd34ffc8768f82adb8f7bc9549682270d38433a878ac30->leave($__internal_e083e89c33cc178357cd34ffc8768f82adb8f7bc9549682270d38433a878ac30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae4a7e55e95210bff4f3c2490a56a4181f2daa5ea65b909ec4d2a1791fe10ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae4a7e55e95210bff4f3c2490a56a4181f2daa5ea65b909ec4d2a1791fe10ac->enter($__internal_fae4a7e55e95210bff4f3c2490a56a4181f2daa5ea65b909ec4d2a1791fe10ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fae4a7e55e95210bff4f3c2490a56a4181f2daa5ea65b909ec4d2a1791fe10ac->leave($__internal_fae4a7e55e95210bff4f3c2490a56a4181f2daa5ea65b909ec4d2a1791fe10ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5529c714311029d6e86974ce082400a4830e43fadc3e65d344eee269d93388a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5529c714311029d6e86974ce082400a4830e43fadc3e65d344eee269d93388a->enter($__internal_d5529c714311029d6e86974ce082400a4830e43fadc3e65d344eee269d93388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5529c714311029d6e86974ce082400a4830e43fadc3e65d344eee269d93388a->leave($__internal_d5529c714311029d6e86974ce082400a4830e43fadc3e65d344eee269d93388a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc03660890cf16f08e82a4266516f4f44b8f9c446cb561af2990ef554334b029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc03660890cf16f08e82a4266516f4f44b8f9c446cb561af2990ef554334b029->enter($__internal_dc03660890cf16f08e82a4266516f4f44b8f9c446cb561af2990ef554334b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc03660890cf16f08e82a4266516f4f44b8f9c446cb561af2990ef554334b029->leave($__internal_dc03660890cf16f08e82a4266516f4f44b8f9c446cb561af2990ef554334b029_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acad81a959a4dbf7715ca31fd32d1995a92d377881f3f6ef95f7379489497a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acad81a959a4dbf7715ca31fd32d1995a92d377881f3f6ef95f7379489497a38->enter($__internal_acad81a959a4dbf7715ca31fd32d1995a92d377881f3f6ef95f7379489497a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_acad81a959a4dbf7715ca31fd32d1995a92d377881f3f6ef95f7379489497a38->leave($__internal_acad81a959a4dbf7715ca31fd32d1995a92d377881f3f6ef95f7379489497a38_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\app\\Resources\\views\\base.html.twig");
    }
}
