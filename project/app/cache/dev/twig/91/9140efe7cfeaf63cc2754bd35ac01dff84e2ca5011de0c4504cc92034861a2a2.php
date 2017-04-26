<?php

/* ::base.html.twig */
class __TwigTemplate_759f231882e5abad9b2fbbdcb7e800a5bcb411f0688141b8cf663bf039c26a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52294d40e1b8d25bdfce02178b98c0a0e853735dce43f5e1e07ac217a94925f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52294d40e1b8d25bdfce02178b98c0a0e853735dce43f5e1e07ac217a94925f0->enter($__internal_52294d40e1b8d25bdfce02178b98c0a0e853735dce43f5e1e07ac217a94925f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Symblog</title>
    <!--[if lt IE 9]>



    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 25
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "        </div>

        <hgroup>
            <h2>";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 38
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "    </div>
</section>

";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "</body>
</html>";
        
        $__internal_52294d40e1b8d25bdfce02178b98c0a0e853735dce43f5e1e07ac217a94925f0->leave($__internal_52294d40e1b8d25bdfce02178b98c0a0e853735dce43f5e1e07ac217a94925f0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_18826c2ed0f7687647ba4faf38799d05c087fdd551206f325fec1050bb17f3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18826c2ed0f7687647ba4faf38799d05c087fdd551206f325fec1050bb17f3eb->enter($__internal_18826c2ed0f7687647ba4faf38799d05c087fdd551206f325fec1050bb17f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_18826c2ed0f7687647ba4faf38799d05c087fdd551206f325fec1050bb17f3eb->leave($__internal_18826c2ed0f7687647ba4faf38799d05c087fdd551206f325fec1050bb17f3eb_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_165544d9174b85748983056828e19b4021441892ad13e5e4f8babf3a3de7c128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165544d9174b85748983056828e19b4021441892ad13e5e4f8babf3a3de7c128->enter($__internal_165544d9174b85748983056828e19b4021441892ad13e5e4f8babf3a3de7c128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_165544d9174b85748983056828e19b4021441892ad13e5e4f8babf3a3de7c128->leave($__internal_165544d9174b85748983056828e19b4021441892ad13e5e4f8babf3a3de7c128_prof);

    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5af93e5af7b87b74f0880ca89c3094ae9ab0e93dac34551910e73cc58610acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af93e5af7b87b74f0880ca89c3094ae9ab0e93dac34551910e73cc58610acc6->enter($__internal_5af93e5af7b87b74f0880ca89c3094ae9ab0e93dac34551910e73cc58610acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 26
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_5af93e5af7b87b74f0880ca89c3094ae9ab0e93dac34551910e73cc58610acc6->leave($__internal_5af93e5af7b87b74f0880ca89c3094ae9ab0e93dac34551910e73cc58610acc6_prof);

    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4efd70bb81b6805d7621d050c056a144be0d9b278a4f71d2192cf3ad5a169a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efd70bb81b6805d7621d050c056a144be0d9b278a4f71d2192cf3ad5a169a85->enter($__internal_4efd70bb81b6805d7621d050c056a144be0d9b278a4f71d2192cf3ad5a169a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Symblog</a>";
        
        $__internal_4efd70bb81b6805d7621d050c056a144be0d9b278a4f71d2192cf3ad5a169a85->leave($__internal_4efd70bb81b6805d7621d050c056a144be0d9b278a4f71d2192cf3ad5a169a85_prof);

    }

    // line 38
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8972fc797061e78175862ab66315cdc7cf53a566e9fcbcdca67261389ecc98b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8972fc797061e78175862ab66315cdc7cf53a566e9fcbcdca67261389ecc98b9->enter($__internal_8972fc797061e78175862ab66315cdc7cf53a566e9fcbcdca67261389ecc98b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_8972fc797061e78175862ab66315cdc7cf53a566e9fcbcdca67261389ecc98b9->leave($__internal_8972fc797061e78175862ab66315cdc7cf53a566e9fcbcdca67261389ecc98b9_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_1deb4be07912236a8b6290a259e14b8f26374917a8de1dc4b947e275f09afd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deb4be07912236a8b6290a259e14b8f26374917a8de1dc4b947e275f09afd9b->enter($__internal_1deb4be07912236a8b6290a259e14b8f26374917a8de1dc4b947e275f09afd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1deb4be07912236a8b6290a259e14b8f26374917a8de1dc4b947e275f09afd9b->leave($__internal_1deb4be07912236a8b6290a259e14b8f26374917a8de1dc4b947e275f09afd9b_prof);

    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36da2489e6cac5def9543baabe0918682b32aa287fa3e10a37af2c6a65c50705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36da2489e6cac5def9543baabe0918682b32aa287fa3e10a37af2c6a65c50705->enter($__internal_36da2489e6cac5def9543baabe0918682b32aa287fa3e10a37af2c6a65c50705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_36da2489e6cac5def9543baabe0918682b32aa287fa3e10a37af2c6a65c50705->leave($__internal_36da2489e6cac5def9543baabe0918682b32aa287fa3e10a37af2c6a65c50705_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_97ff2320dfeca7a368e939bb88b9dff572838ba630d996a465117d340ffdddb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff2320dfeca7a368e939bb88b9dff572838ba630d996a465117d340ffdddb4->enter($__internal_97ff2320dfeca7a368e939bb88b9dff572838ba630d996a465117d340ffdddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_97ff2320dfeca7a368e939bb88b9dff572838ba630d996a465117d340ffdddb4->leave($__internal_97ff2320dfeca7a368e939bb88b9dff572838ba630d996a465117d340ffdddb4_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f08acd8f3210b55018c62716144b5b4836e9f1b8fee570493195029ed0d66430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08acd8f3210b55018c62716144b5b4836e9f1b8fee570493195029ed0d66430->enter($__internal_f08acd8f3210b55018c62716144b5b4836e9f1b8fee570493195029ed0d66430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f08acd8f3210b55018c62716144b5b4836e9f1b8fee570493195029ed0d66430->leave($__internal_f08acd8f3210b55018c62716144b5b4836e9f1b8fee570493195029ed0d66430_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 56,  222 => 51,  216 => 50,  205 => 46,  194 => 43,  182 => 38,  170 => 37,  159 => 30,  155 => 29,  151 => 28,  147 => 26,  141 => 25,  132 => 16,  128 => 14,  122 => 13,  110 => 6,  102 => 57,  100 => 56,  95 => 53,  93 => 50,  88 => 47,  86 => 46,  82 => 44,  80 => 43,  72 => 38,  68 => 37,  63 => 34,  61 => 25,  50 => 18,  48 => 13,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}Symblog{% endblock %} - Symblog</title>
    <!--[if lt IE 9]>



    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"{{ path('BloggerBlogBundle_homepage') }}\">Home</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_about') }}\">About</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_contact') }}\">Contact</a></li>
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"#\">Symblog</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"#\">creating a blog in Symfony2</a>{% endblock %}</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "C:\\Users\\Onuf.Yur\\Desktop\\OpenServer\\domains\\symfony\\project\\app/Resources\\views/base.html.twig");
    }
}
