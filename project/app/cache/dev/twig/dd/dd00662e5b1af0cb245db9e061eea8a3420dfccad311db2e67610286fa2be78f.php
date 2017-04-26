<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_006a8eaa5a3137050195ae88b071b770971383a0d0938b42331aa612afdf900e extends Twig_Template
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
        $__internal_46f400d317085677689de32281a0c62d90d49e54f25b0008757336b5aafe53ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f400d317085677689de32281a0c62d90d49e54f25b0008757336b5aafe53ec->enter($__internal_46f400d317085677689de32281a0c62d90d49e54f25b0008757336b5aafe53ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_46f400d317085677689de32281a0c62d90d49e54f25b0008757336b5aafe53ec->leave($__internal_46f400d317085677689de32281a0c62d90d49e54f25b0008757336b5aafe53ec_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BloggerBlogBundle:Default:index.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\src\\Blogger\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
