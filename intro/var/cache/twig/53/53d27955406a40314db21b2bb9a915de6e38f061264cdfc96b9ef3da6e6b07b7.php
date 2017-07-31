<?php

/* hello.html.twig */
class __TwigTemplate_817e7dc436179a7e0b857cff0c67ccaa329b6e8324b808d37e91fea6e65260bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "hello.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19da4c501b388ccd6ee20bdd35750d6b7a0b74be188a6acedcdf681bfd72ecc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19da4c501b388ccd6ee20bdd35750d6b7a0b74be188a6acedcdf681bfd72ecc2->enter($__internal_19da4c501b388ccd6ee20bdd35750d6b7a0b74be188a6acedcdf681bfd72ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $__internal_b1d9b8a93582da0c95a1279e37b60864aa618a5b4efe66501e058112574e5396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d9b8a93582da0c95a1279e37b60864aa618a5b4efe66501e058112574e5396->enter($__internal_b1d9b8a93582da0c95a1279e37b60864aa618a5b4efe66501e058112574e5396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19da4c501b388ccd6ee20bdd35750d6b7a0b74be188a6acedcdf681bfd72ecc2->leave($__internal_19da4c501b388ccd6ee20bdd35750d6b7a0b74be188a6acedcdf681bfd72ecc2_prof);

        
        $__internal_b1d9b8a93582da0c95a1279e37b60864aa618a5b4efe66501e058112574e5396->leave($__internal_b1d9b8a93582da0c95a1279e37b60864aa618a5b4efe66501e058112574e5396_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b9d2828ea16135b1e2f2da627df89e293e34e7f4271e6e093f3987840b1e35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9d2828ea16135b1e2f2da627df89e293e34e7f4271e6e093f3987840b1e35a->enter($__internal_1b9d2828ea16135b1e2f2da627df89e293e34e7f4271e6e093f3987840b1e35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_63c11628c16d97452f34d25508b2406ebdf4931bc034bc0b9097ae0a415c321f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c11628c16d97452f34d25508b2406ebdf4931bc034bc0b9097ae0a415c321f->enter($__internal_63c11628c16d97452f34d25508b2406ebdf4931bc034bc0b9097ae0a415c321f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <p>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hello_world");
        echo "\">Vers la page hello world</a></p>
";
        
        $__internal_63c11628c16d97452f34d25508b2406ebdf4931bc034bc0b9097ae0a415c321f->leave($__internal_63c11628c16d97452f34d25508b2406ebdf4931bc034bc0b9097ae0a415c321f_prof);

        
        $__internal_1b9d2828ea16135b1e2f2da627df89e293e34e7f4271e6e093f3987840b1e35a->leave($__internal_1b9d2828ea16135b1e2f2da627df89e293e34e7f4271e6e093f3987840b1e35a_prof);

    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <p>Hello {{ name }}</p>
    <p><a href=\"{{ path('hello_world') }}\">Vers la page hello world</a></p>
{% endblock %}
", "hello.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\hello.html.twig");
    }
}
