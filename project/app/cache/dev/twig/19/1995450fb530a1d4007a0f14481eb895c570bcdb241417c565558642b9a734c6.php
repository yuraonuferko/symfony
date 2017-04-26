<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_0538ac8f76b467d363a958d3008207b4081293447dfc15707f4caf2c39cd5c50 extends Twig_Template
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
        $__internal_852c3a85e09433ee5107ad5546611e3043a6e65a4de35f6ab24a59c207e48eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852c3a85e09433ee5107ad5546611e3043a6e65a4de35f6ab24a59c207e48eb6->enter($__internal_852c3a85e09433ee5107ad5546611e3043a6e65a4de35f6ab24a59c207e48eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contactEmail.txt.twig"));

        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute(($context["enquiry"] ?? $this->getContext($context, "enquiry")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute(($context["enquiry"] ?? $this->getContext($context, "enquiry")), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute(($context["enquiry"] ?? $this->getContext($context, "enquiry")), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute(($context["enquiry"] ?? $this->getContext($context, "enquiry")), "body", array());
        echo "

";
        
        $__internal_852c3a85e09433ee5107ad5546611e3043a6e65a4de35f6ab24a59c207e48eb6->leave($__internal_852c3a85e09433ee5107ad5546611e3043a6e65a4de35f6ab24a59c207e48eb6_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  30 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig #}
A contact enquiry was made by {{ enquiry.name }} at {{ \"now\" | date(\"Y-m-d H:i\") }}.

Reply-To: {{ enquiry.email }}
Subject: {{ enquiry.subject }}
Body:
{{ enquiry.body }}

", "BloggerBlogBundle:Page:contactEmail.txt.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Page/contactEmail.txt.twig");
    }
}
