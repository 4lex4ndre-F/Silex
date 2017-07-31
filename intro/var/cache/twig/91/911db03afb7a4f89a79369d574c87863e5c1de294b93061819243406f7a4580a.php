<?php

/* test.html.twig */
class __TwigTemplate_ec908abe97f0cac45055d17dd6cae4292955ff018b95294d0e513f3ada8b480f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "test.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ff87e05c99b938c1f3f625f33195182067e1a942e5c789d62f9f51e1c9209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ff87e05c99b938c1f3f625f33195182067e1a942e5c789d62f9f51e1c9209e->enter($__internal_f7ff87e05c99b938c1f3f625f33195182067e1a942e5c789d62f9f51e1c9209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_dff251efc2129b26bb67cb1a392baabbbf6a179d67595e55a0c4102f5c0de03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff251efc2129b26bb67cb1a392baabbbf6a179d67595e55a0c4102f5c0de03b->enter($__internal_dff251efc2129b26bb67cb1a392baabbbf6a179d67595e55a0c4102f5c0de03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ff87e05c99b938c1f3f625f33195182067e1a942e5c789d62f9f51e1c9209e->leave($__internal_f7ff87e05c99b938c1f3f625f33195182067e1a942e5c789d62f9f51e1c9209e_prof);

        
        $__internal_dff251efc2129b26bb67cb1a392baabbbf6a179d67595e55a0c4102f5c0de03b->leave($__internal_dff251efc2129b26bb67cb1a392baabbbf6a179d67595e55a0c4102f5c0de03b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4a21a5fe78a27d1159051f5091f618e9dbea0064b29784ede030393fc6625c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a21a5fe78a27d1159051f5091f618e9dbea0064b29784ede030393fc6625c9->enter($__internal_e4a21a5fe78a27d1159051f5091f618e9dbea0064b29784ede030393fc6625c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1610693bedae454e0383f976d46b6d44238ca38bfe14bd21cb6f7800d0fff8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1610693bedae454e0383f976d46b6d44238ca38bfe14bd21cb6f7800d0fff8aa->enter($__internal_1610693bedae454e0383f976d46b6d44238ca38bfe14bd21cb6f7800d0fff8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <p class=\"test\"><b>Page de test - test.html.twig</b></p>
";
        
        $__internal_1610693bedae454e0383f976d46b6d44238ca38bfe14bd21cb6f7800d0fff8aa->leave($__internal_1610693bedae454e0383f976d46b6d44238ca38bfe14bd21cb6f7800d0fff8aa_prof);

        
        $__internal_e4a21a5fe78a27d1159051f5091f618e9dbea0064b29784ede030393fc6625c9->leave($__internal_e4a21a5fe78a27d1159051f5091f618e9dbea0064b29784ede030393fc6625c9_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0901ce249c4a0ecbbd2b3cfb5d1412b8a910eaa884872320b934e4d7d511cf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0901ce249c4a0ecbbd2b3cfb5d1412b8a910eaa884872320b934e4d7d511cf02->enter($__internal_0901ce249c4a0ecbbd2b3cfb5d1412b8a910eaa884872320b934e4d7d511cf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90164f9b315e29b9cbf72cd599c47ea213bc5a31317468adbc8cd19cfada889b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90164f9b315e29b9cbf72cd599c47ea213bc5a31317468adbc8cd19cfada889b->enter($__internal_90164f9b315e29b9cbf72cd599c47ea213bc5a31317468adbc8cd19cfada889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test";
        
        $__internal_90164f9b315e29b9cbf72cd599c47ea213bc5a31317468adbc8cd19cfada889b->leave($__internal_90164f9b315e29b9cbf72cd599c47ea213bc5a31317468adbc8cd19cfada889b_prof);

        
        $__internal_0901ce249c4a0ecbbd2b3cfb5d1412b8a910eaa884872320b934e4d7d511cf02->leave($__internal_0901ce249c4a0ecbbd2b3cfb5d1412b8a910eaa884872320b934e4d7d511cf02_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# La page hérite de layout.html.twig #}
{% extends \"layout.html.twig\" %}

{# surcharge du bloc 'content' défini dans le layout #}
{% block content %}
    <p class=\"test\"><b>Page de test - test.html.twig</b></p>
{% endblock %}

{# surcharge du bloc 'titre' défini dans le layout #}
{% block title 'Test' %}

{# équivaut à :
{% block title %}Test{% enblock %}
#}
", "test.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\test.html.twig");
    }
}
