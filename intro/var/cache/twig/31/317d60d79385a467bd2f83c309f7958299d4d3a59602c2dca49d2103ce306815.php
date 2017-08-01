<?php

/* bibliotheque/abonne_ajout.html.twig */
class __TwigTemplate_9781142d7c4943c86970ba253483aeabeef5e880be0d5e43c919b2f91da90e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne_ajout.html.twig", 1);
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
        $__internal_659b923fba85ce80b95eb3fd862f19fb5c4684851932c5e1e2bf92dcf4e89ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659b923fba85ce80b95eb3fd862f19fb5c4684851932c5e1e2bf92dcf4e89ff6->enter($__internal_659b923fba85ce80b95eb3fd862f19fb5c4684851932c5e1e2bf92dcf4e89ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_ajout.html.twig"));

        $__internal_19f32c9ce9a7d2da5523e96d39b0880c9325b0b31f87937902c24d076788ea4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f32c9ce9a7d2da5523e96d39b0880c9325b0b31f87937902c24d076788ea4c->enter($__internal_19f32c9ce9a7d2da5523e96d39b0880c9325b0b31f87937902c24d076788ea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659b923fba85ce80b95eb3fd862f19fb5c4684851932c5e1e2bf92dcf4e89ff6->leave($__internal_659b923fba85ce80b95eb3fd862f19fb5c4684851932c5e1e2bf92dcf4e89ff6_prof);

        
        $__internal_19f32c9ce9a7d2da5523e96d39b0880c9325b0b31f87937902c24d076788ea4c->leave($__internal_19f32c9ce9a7d2da5523e96d39b0880c9325b0b31f87937902c24d076788ea4c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d085b8f18346db77b3c8dff1967d66ddacd3ddf29d8a5364d3d2734725d48d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d085b8f18346db77b3c8dff1967d66ddacd3ddf29d8a5364d3d2734725d48d8c->enter($__internal_d085b8f18346db77b3c8dff1967d66ddacd3ddf29d8a5364d3d2734725d48d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6decf3aba20c712db160c158a2c08ad229c6d919a00d3c1dbabdc21a9100faf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6decf3aba20c712db160c158a2c08ad229c6d919a00d3c1dbabdc21a9100faf0->enter($__internal_6decf3aba20c712db160c158a2c08ad229c6d919a00d3c1dbabdc21a9100faf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form method=\"post\">
        Prénom : <input type=\"text\" name=\"prenom\">
        <input type=\"submit\" value=\"enregistrer\">
    </form>
";
        
        $__internal_6decf3aba20c712db160c158a2c08ad229c6d919a00d3c1dbabdc21a9100faf0->leave($__internal_6decf3aba20c712db160c158a2c08ad229c6d919a00d3c1dbabdc21a9100faf0_prof);

        
        $__internal_d085b8f18346db77b3c8dff1967d66ddacd3ddf29d8a5364d3d2734725d48d8c->leave($__internal_d085b8f18346db77b3c8dff1967d66ddacd3ddf29d8a5364d3d2734725d48d8c_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne_ajout.html.twig";
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
    <form method=\"post\">
        Prénom : <input type=\"text\" name=\"prenom\">
        <input type=\"submit\" value=\"enregistrer\">
    </form>
{% endblock %}
", "bibliotheque/abonne_ajout.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\abonne_ajout.html.twig");
    }
}
