<?php

/* helloworld.html.twig */
class __TwigTemplate_bd3fb229717c3193e5cc7c40bdf821fb8863fdef46064118907c3ee30c91bb44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "helloworld.html.twig", 2);
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
        $__internal_193cb2c1afa68adc63995a398650c2391a5de07d89f4081994ec838bb8336216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193cb2c1afa68adc63995a398650c2391a5de07d89f4081994ec838bb8336216->enter($__internal_193cb2c1afa68adc63995a398650c2391a5de07d89f4081994ec838bb8336216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld.html.twig"));

        $__internal_8612bdd8dd548dc6cf24803d8a6618b30984652f1820c55373f0856457dbe7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8612bdd8dd548dc6cf24803d8a6618b30984652f1820c55373f0856457dbe7e3->enter($__internal_8612bdd8dd548dc6cf24803d8a6618b30984652f1820c55373f0856457dbe7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193cb2c1afa68adc63995a398650c2391a5de07d89f4081994ec838bb8336216->leave($__internal_193cb2c1afa68adc63995a398650c2391a5de07d89f4081994ec838bb8336216_prof);

        
        $__internal_8612bdd8dd548dc6cf24803d8a6618b30984652f1820c55373f0856457dbe7e3->leave($__internal_8612bdd8dd548dc6cf24803d8a6618b30984652f1820c55373f0856457dbe7e3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7dd8309fa08471760ea0111bc9e575a12622d1b5f1037ca56d33c20b62494707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd8309fa08471760ea0111bc9e575a12622d1b5f1037ca56d33c20b62494707->enter($__internal_7dd8309fa08471760ea0111bc9e575a12622d1b5f1037ca56d33c20b62494707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_addee4b6e6c39c9985cf9f59819e82aef210aa2d4504f5e96ca968ab0e4d2d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addee4b6e6c39c9985cf9f59819e82aef210aa2d4504f5e96ca968ab0e4d2d3d->enter($__internal_addee4b6e6c39c9985cf9f59819e82aef210aa2d4504f5e96ca968ab0e4d2d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <p>Hello World</p>
    <p><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hello", array("name" => "Alex"));
        echo "\">Vers la page hello Alex</a></p>
";
        
        $__internal_addee4b6e6c39c9985cf9f59819e82aef210aa2d4504f5e96ca968ab0e4d2d3d->leave($__internal_addee4b6e6c39c9985cf9f59819e82aef210aa2d4504f5e96ca968ab0e4d2d3d_prof);

        
        $__internal_7dd8309fa08471760ea0111bc9e575a12622d1b5f1037ca56d33c20b62494707->leave($__internal_7dd8309fa08471760ea0111bc9e575a12622d1b5f1037ca56d33c20b62494707_prof);

    }

    public function getTemplateName()
    {
        return "helloworld.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends \"layout.html.twig\" %}

{% block content %}
    <p>Hello World</p>
    <p><a href=\"{{ path('hello', {name: 'Alex'}) }}\">Vers la page hello Alex</a></p>
{% endblock %}
", "helloworld.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\helloworld.html.twig");
    }
}
