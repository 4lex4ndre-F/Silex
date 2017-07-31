<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9fe7bad934dcb60d20456bc6993925619715ee5fee46d7b71b5253305ffaed47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_848b140a24613eb0ea3e045e4dd506e1f5b48e34b79bfc7a87c361e7aa0375b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848b140a24613eb0ea3e045e4dd506e1f5b48e34b79bfc7a87c361e7aa0375b2->enter($__internal_848b140a24613eb0ea3e045e4dd506e1f5b48e34b79bfc7a87c361e7aa0375b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b61d59bd80d1c3cf3244c571c7b8f8aadd1dcb5ff9d97acf6b956e4d60dd1013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61d59bd80d1c3cf3244c571c7b8f8aadd1dcb5ff9d97acf6b956e4d60dd1013->enter($__internal_b61d59bd80d1c3cf3244c571c7b8f8aadd1dcb5ff9d97acf6b956e4d60dd1013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848b140a24613eb0ea3e045e4dd506e1f5b48e34b79bfc7a87c361e7aa0375b2->leave($__internal_848b140a24613eb0ea3e045e4dd506e1f5b48e34b79bfc7a87c361e7aa0375b2_prof);

        
        $__internal_b61d59bd80d1c3cf3244c571c7b8f8aadd1dcb5ff9d97acf6b956e4d60dd1013->leave($__internal_b61d59bd80d1c3cf3244c571c7b8f8aadd1dcb5ff9d97acf6b956e4d60dd1013_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f4702e616fd43c49be020237a12b1919fd034be936a3e2fd4c5f4033787a845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4702e616fd43c49be020237a12b1919fd034be936a3e2fd4c5f4033787a845->enter($__internal_8f4702e616fd43c49be020237a12b1919fd034be936a3e2fd4c5f4033787a845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b005e9bfc31e42ffdbc797273b51dff0ba05d5533a590782b1a37a1419c991b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b005e9bfc31e42ffdbc797273b51dff0ba05d5533a590782b1a37a1419c991b0->enter($__internal_b005e9bfc31e42ffdbc797273b51dff0ba05d5533a590782b1a37a1419c991b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b005e9bfc31e42ffdbc797273b51dff0ba05d5533a590782b1a37a1419c991b0->leave($__internal_b005e9bfc31e42ffdbc797273b51dff0ba05d5533a590782b1a37a1419c991b0_prof);

        
        $__internal_8f4702e616fd43c49be020237a12b1919fd034be936a3e2fd4c5f4033787a845->leave($__internal_8f4702e616fd43c49be020237a12b1919fd034be936a3e2fd4c5f4033787a845_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
