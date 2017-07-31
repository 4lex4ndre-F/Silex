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
        $__internal_89e375ed437ba9a5fecc6f0b55be1e565ea373793b9b902a3a2963c206dd0af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e375ed437ba9a5fecc6f0b55be1e565ea373793b9b902a3a2963c206dd0af8->enter($__internal_89e375ed437ba9a5fecc6f0b55be1e565ea373793b9b902a3a2963c206dd0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld.html.twig"));

        $__internal_c3b43bcfd3732efd06c0f850a86f3e97d1d4e79be8ce12c8bd8a76068696760a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b43bcfd3732efd06c0f850a86f3e97d1d4e79be8ce12c8bd8a76068696760a->enter($__internal_c3b43bcfd3732efd06c0f850a86f3e97d1d4e79be8ce12c8bd8a76068696760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e375ed437ba9a5fecc6f0b55be1e565ea373793b9b902a3a2963c206dd0af8->leave($__internal_89e375ed437ba9a5fecc6f0b55be1e565ea373793b9b902a3a2963c206dd0af8_prof);

        
        $__internal_c3b43bcfd3732efd06c0f850a86f3e97d1d4e79be8ce12c8bd8a76068696760a->leave($__internal_c3b43bcfd3732efd06c0f850a86f3e97d1d4e79be8ce12c8bd8a76068696760a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b81fa0bffb29852c716ebe3db63ef3546e82abe8a8e85fcc8f91e5f50357934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b81fa0bffb29852c716ebe3db63ef3546e82abe8a8e85fcc8f91e5f50357934->enter($__internal_0b81fa0bffb29852c716ebe3db63ef3546e82abe8a8e85fcc8f91e5f50357934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1c51d643fd37e49bea02eeae4c0725c147cf75d641a97e6bbb4fe3a7cec68123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c51d643fd37e49bea02eeae4c0725c147cf75d641a97e6bbb4fe3a7cec68123->enter($__internal_1c51d643fd37e49bea02eeae4c0725c147cf75d641a97e6bbb4fe3a7cec68123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <p>Hello World</p>
";
        
        $__internal_1c51d643fd37e49bea02eeae4c0725c147cf75d641a97e6bbb4fe3a7cec68123->leave($__internal_1c51d643fd37e49bea02eeae4c0725c147cf75d641a97e6bbb4fe3a7cec68123_prof);

        
        $__internal_0b81fa0bffb29852c716ebe3db63ef3546e82abe8a8e85fcc8f91e5f50357934->leave($__internal_0b81fa0bffb29852c716ebe3db63ef3546e82abe8a8e85fcc8f91e5f50357934_prof);

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
        return array (  49 => 5,  40 => 4,  11 => 2,);
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
{% endblock %}
", "helloworld.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\helloworld.html.twig");
    }
}
