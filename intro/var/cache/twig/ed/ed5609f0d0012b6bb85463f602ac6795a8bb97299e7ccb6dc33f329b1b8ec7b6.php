<?php

/* index.html.twig */
class __TwigTemplate_560d3ec365329c97b0eeffadce96baa72999160e36145f73249a62a9e4327e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $__internal_ee12acc777fb7ae87187a87b96ff5cf6849a6cee989d02475b35b5e8f793a2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee12acc777fb7ae87187a87b96ff5cf6849a6cee989d02475b35b5e8f793a2ee->enter($__internal_ee12acc777fb7ae87187a87b96ff5cf6849a6cee989d02475b35b5e8f793a2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_cdcfeb7fb938a56d52655b4a54cbfec9fdcda90f9f11c56f9a5089dff2e7c5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcfeb7fb938a56d52655b4a54cbfec9fdcda90f9f11c56f9a5089dff2e7c5f4->enter($__internal_cdcfeb7fb938a56d52655b4a54cbfec9fdcda90f9f11c56f9a5089dff2e7c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee12acc777fb7ae87187a87b96ff5cf6849a6cee989d02475b35b5e8f793a2ee->leave($__internal_ee12acc777fb7ae87187a87b96ff5cf6849a6cee989d02475b35b5e8f793a2ee_prof);

        
        $__internal_cdcfeb7fb938a56d52655b4a54cbfec9fdcda90f9f11c56f9a5089dff2e7c5f4->leave($__internal_cdcfeb7fb938a56d52655b4a54cbfec9fdcda90f9f11c56f9a5089dff2e7c5f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca648721dd7be347bc06fc7257206e82b2ed068f5e724df848281fde1f126ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca648721dd7be347bc06fc7257206e82b2ed068f5e724df848281fde1f126ce8->enter($__internal_ca648721dd7be347bc06fc7257206e82b2ed068f5e724df848281fde1f126ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5011b4910c594334d87f73e3755ef952ce75913f1bf8936d99b9ee4216173051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5011b4910c594334d87f73e3755ef952ce75913f1bf8936d99b9ee4216173051->enter($__internal_5011b4910c594334d87f73e3755ef952ce75913f1bf8936d99b9ee4216173051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application : ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !
";
        
        $__internal_5011b4910c594334d87f73e3755ef952ce75913f1bf8936d99b9ee4216173051->leave($__internal_5011b4910c594334d87f73e3755ef952ce75913f1bf8936d99b9ee4216173051_prof);

        
        $__internal_ca648721dd7be347bc06fc7257206e82b2ed068f5e724df848281fde1f126ce8->leave($__internal_ca648721dd7be347bc06fc7257206e82b2ed068f5e724df848281fde1f126ce8_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
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
    Welcome to your new Silex Application : {{ nom }} !
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\index.html.twig");
    }
}
