<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d5a4d0e0c7b4a3fb4cef349c310f8cf7e14fab815e811dcb0589be697378ddc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f98f6d72a5b79cb060df417db70835a16e3a7d7323980ad9103682de4d586e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98f6d72a5b79cb060df417db70835a16e3a7d7323980ad9103682de4d586e72->enter($__internal_f98f6d72a5b79cb060df417db70835a16e3a7d7323980ad9103682de4d586e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_12cb71ff4d72a5b1bd90086bc54e67f3b180fa17586d29c74884eea7a4abb50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cb71ff4d72a5b1bd90086bc54e67f3b180fa17586d29c74884eea7a4abb50f->enter($__internal_12cb71ff4d72a5b1bd90086bc54e67f3b180fa17586d29c74884eea7a4abb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98f6d72a5b79cb060df417db70835a16e3a7d7323980ad9103682de4d586e72->leave($__internal_f98f6d72a5b79cb060df417db70835a16e3a7d7323980ad9103682de4d586e72_prof);

        
        $__internal_12cb71ff4d72a5b1bd90086bc54e67f3b180fa17586d29c74884eea7a4abb50f->leave($__internal_12cb71ff4d72a5b1bd90086bc54e67f3b180fa17586d29c74884eea7a4abb50f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ce819d7287d17194a6475b7515242e37b18df757a49cff7447c547ead1c6fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce819d7287d17194a6475b7515242e37b18df757a49cff7447c547ead1c6fd4->enter($__internal_9ce819d7287d17194a6475b7515242e37b18df757a49cff7447c547ead1c6fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c2bb5bd89031b51cbe9c3f54a2f85026f411f2e86e8cbd10564f1c6ed4d5b9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bb5bd89031b51cbe9c3f54a2f85026f411f2e86e8cbd10564f1c6ed4d5b9b7->enter($__internal_c2bb5bd89031b51cbe9c3f54a2f85026f411f2e86e8cbd10564f1c6ed4d5b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c2bb5bd89031b51cbe9c3f54a2f85026f411f2e86e8cbd10564f1c6ed4d5b9b7->leave($__internal_c2bb5bd89031b51cbe9c3f54a2f85026f411f2e86e8cbd10564f1c6ed4d5b9b7_prof);

        
        $__internal_9ce819d7287d17194a6475b7515242e37b18df757a49cff7447c547ead1c6fd4->leave($__internal_9ce819d7287d17194a6475b7515242e37b18df757a49cff7447c547ead1c6fd4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8322565a1d4c3640bd4669e4ebcf1d1741c66856300e2fa3d3f8f99caa4de9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8322565a1d4c3640bd4669e4ebcf1d1741c66856300e2fa3d3f8f99caa4de9c9->enter($__internal_8322565a1d4c3640bd4669e4ebcf1d1741c66856300e2fa3d3f8f99caa4de9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0dacec7e2aa3b009449cf1e4a63f5fce8d425e195aa380fbd8dcd08a0ec37d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dacec7e2aa3b009449cf1e4a63f5fce8d425e195aa380fbd8dcd08a0ec37d08->enter($__internal_0dacec7e2aa3b009449cf1e4a63f5fce8d425e195aa380fbd8dcd08a0ec37d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0dacec7e2aa3b009449cf1e4a63f5fce8d425e195aa380fbd8dcd08a0ec37d08->leave($__internal_0dacec7e2aa3b009449cf1e4a63f5fce8d425e195aa380fbd8dcd08a0ec37d08_prof);

        
        $__internal_8322565a1d4c3640bd4669e4ebcf1d1741c66856300e2fa3d3f8f99caa4de9c9->leave($__internal_8322565a1d4c3640bd4669e4ebcf1d1741c66856300e2fa3d3f8f99caa4de9c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa839ec5ba572191dfc2107adcfef44d859fc1c8ec7795b0fb68d8be21d2703f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa839ec5ba572191dfc2107adcfef44d859fc1c8ec7795b0fb68d8be21d2703f->enter($__internal_aa839ec5ba572191dfc2107adcfef44d859fc1c8ec7795b0fb68d8be21d2703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_412f7faaac754d12322141bf261ff224fb51c758446876e49b1e3bf459d1b542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412f7faaac754d12322141bf261ff224fb51c758446876e49b1e3bf459d1b542->enter($__internal_412f7faaac754d12322141bf261ff224fb51c758446876e49b1e3bf459d1b542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_412f7faaac754d12322141bf261ff224fb51c758446876e49b1e3bf459d1b542->leave($__internal_412f7faaac754d12322141bf261ff224fb51c758446876e49b1e3bf459d1b542_prof);

        
        $__internal_aa839ec5ba572191dfc2107adcfef44d859fc1c8ec7795b0fb68d8be21d2703f->leave($__internal_aa839ec5ba572191dfc2107adcfef44d859fc1c8ec7795b0fb68d8be21d2703f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
