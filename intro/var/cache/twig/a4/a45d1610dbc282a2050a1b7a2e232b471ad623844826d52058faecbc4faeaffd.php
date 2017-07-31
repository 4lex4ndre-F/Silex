<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7d6878e26011bd0e5f78bad39b3893e1f8003f7893d7a78d41a2ac2027e0e51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_98c014ca1e839839636369342a4f5f87d95b262df962fdf42629cd934a5eedb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c014ca1e839839636369342a4f5f87d95b262df962fdf42629cd934a5eedb1->enter($__internal_98c014ca1e839839636369342a4f5f87d95b262df962fdf42629cd934a5eedb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bd87563f3f7faa94979cfb195db2b47ce80a6f01f56a33404408a0ccce184811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd87563f3f7faa94979cfb195db2b47ce80a6f01f56a33404408a0ccce184811->enter($__internal_bd87563f3f7faa94979cfb195db2b47ce80a6f01f56a33404408a0ccce184811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c014ca1e839839636369342a4f5f87d95b262df962fdf42629cd934a5eedb1->leave($__internal_98c014ca1e839839636369342a4f5f87d95b262df962fdf42629cd934a5eedb1_prof);

        
        $__internal_bd87563f3f7faa94979cfb195db2b47ce80a6f01f56a33404408a0ccce184811->leave($__internal_bd87563f3f7faa94979cfb195db2b47ce80a6f01f56a33404408a0ccce184811_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39d8633c3383c73afcbe6212d2f0818464064bd5996d3716d602cf73934d1e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d8633c3383c73afcbe6212d2f0818464064bd5996d3716d602cf73934d1e5b->enter($__internal_39d8633c3383c73afcbe6212d2f0818464064bd5996d3716d602cf73934d1e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_87446a5faf2cb96a2b02310c5fd9a149e4cea99a0a0fda7e8b20e7a30b774420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87446a5faf2cb96a2b02310c5fd9a149e4cea99a0a0fda7e8b20e7a30b774420->enter($__internal_87446a5faf2cb96a2b02310c5fd9a149e4cea99a0a0fda7e8b20e7a30b774420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87446a5faf2cb96a2b02310c5fd9a149e4cea99a0a0fda7e8b20e7a30b774420->leave($__internal_87446a5faf2cb96a2b02310c5fd9a149e4cea99a0a0fda7e8b20e7a30b774420_prof);

        
        $__internal_39d8633c3383c73afcbe6212d2f0818464064bd5996d3716d602cf73934d1e5b->leave($__internal_39d8633c3383c73afcbe6212d2f0818464064bd5996d3716d602cf73934d1e5b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c087267f83191aad5298d6b25dc8148d5668e58ebb8193598c4e0cbe79574865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c087267f83191aad5298d6b25dc8148d5668e58ebb8193598c4e0cbe79574865->enter($__internal_c087267f83191aad5298d6b25dc8148d5668e58ebb8193598c4e0cbe79574865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a88ba45912537811de1d35e5001a562e2279d0f96d3516337c2928117fff19cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88ba45912537811de1d35e5001a562e2279d0f96d3516337c2928117fff19cb->enter($__internal_a88ba45912537811de1d35e5001a562e2279d0f96d3516337c2928117fff19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a88ba45912537811de1d35e5001a562e2279d0f96d3516337c2928117fff19cb->leave($__internal_a88ba45912537811de1d35e5001a562e2279d0f96d3516337c2928117fff19cb_prof);

        
        $__internal_c087267f83191aad5298d6b25dc8148d5668e58ebb8193598c4e0cbe79574865->leave($__internal_c087267f83191aad5298d6b25dc8148d5668e58ebb8193598c4e0cbe79574865_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8180ac32d6e8e98bd4689c4ddbf61ac369315ac46793d31928eaa53b514fdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8180ac32d6e8e98bd4689c4ddbf61ac369315ac46793d31928eaa53b514fdbd->enter($__internal_a8180ac32d6e8e98bd4689c4ddbf61ac369315ac46793d31928eaa53b514fdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62c5e0b657a1455a2bafecc7cd0ccffd2313b06c54a97ac7bcc56f328823aa2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c5e0b657a1455a2bafecc7cd0ccffd2313b06c54a97ac7bcc56f328823aa2e->enter($__internal_62c5e0b657a1455a2bafecc7cd0ccffd2313b06c54a97ac7bcc56f328823aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62c5e0b657a1455a2bafecc7cd0ccffd2313b06c54a97ac7bcc56f328823aa2e->leave($__internal_62c5e0b657a1455a2bafecc7cd0ccffd2313b06c54a97ac7bcc56f328823aa2e_prof);

        
        $__internal_a8180ac32d6e8e98bd4689c4ddbf61ac369315ac46793d31928eaa53b514fdbd->leave($__internal_a8180ac32d6e8e98bd4689c4ddbf61ac369315ac46793d31928eaa53b514fdbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
