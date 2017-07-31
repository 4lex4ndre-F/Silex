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
        $__internal_86449e7a1f99758795d35566c9c7aba5295d349515d3b03d28a6f3b5a05156f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86449e7a1f99758795d35566c9c7aba5295d349515d3b03d28a6f3b5a05156f0->enter($__internal_86449e7a1f99758795d35566c9c7aba5295d349515d3b03d28a6f3b5a05156f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $__internal_232660e646c325faa85ca30d1723afac294cef36e271b6fced1bfcd0fa6258cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232660e646c325faa85ca30d1723afac294cef36e271b6fced1bfcd0fa6258cd->enter($__internal_232660e646c325faa85ca30d1723afac294cef36e271b6fced1bfcd0fa6258cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86449e7a1f99758795d35566c9c7aba5295d349515d3b03d28a6f3b5a05156f0->leave($__internal_86449e7a1f99758795d35566c9c7aba5295d349515d3b03d28a6f3b5a05156f0_prof);

        
        $__internal_232660e646c325faa85ca30d1723afac294cef36e271b6fced1bfcd0fa6258cd->leave($__internal_232660e646c325faa85ca30d1723afac294cef36e271b6fced1bfcd0fa6258cd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_54c870eff72a1a4356513d816cc346098da4739acb97296afb9bc27e8fcb73d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c870eff72a1a4356513d816cc346098da4739acb97296afb9bc27e8fcb73d2->enter($__internal_54c870eff72a1a4356513d816cc346098da4739acb97296afb9bc27e8fcb73d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_147d83e725e059e9f31dd30c36f4105292f51a35ff93fcb583bbc9275f7b7760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147d83e725e059e9f31dd30c36f4105292f51a35ff93fcb583bbc9275f7b7760->enter($__internal_147d83e725e059e9f31dd30c36f4105292f51a35ff93fcb583bbc9275f7b7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <p>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>
";
        
        $__internal_147d83e725e059e9f31dd30c36f4105292f51a35ff93fcb583bbc9275f7b7760->leave($__internal_147d83e725e059e9f31dd30c36f4105292f51a35ff93fcb583bbc9275f7b7760_prof);

        
        $__internal_54c870eff72a1a4356513d816cc346098da4739acb97296afb9bc27e8fcb73d2->leave($__internal_54c870eff72a1a4356513d816cc346098da4739acb97296afb9bc27e8fcb73d2_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}
", "hello.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\hello.html.twig");
    }
}
