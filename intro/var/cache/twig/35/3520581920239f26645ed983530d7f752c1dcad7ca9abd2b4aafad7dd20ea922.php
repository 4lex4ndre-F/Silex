<?php

/* bibliotheque/abonne_modif.html.twig */
class __TwigTemplate_46561200e8ed012311ffa8cbf568ab8bf9c8745252333e5d31f27d616f25395a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne_modif.html.twig", 1);
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
        $__internal_be487ae166efe7b0ba586e5382790ed0263a3c9ebf78c81a31f9e4b56e9e1ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be487ae166efe7b0ba586e5382790ed0263a3c9ebf78c81a31f9e4b56e9e1ead->enter($__internal_be487ae166efe7b0ba586e5382790ed0263a3c9ebf78c81a31f9e4b56e9e1ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_modif.html.twig"));

        $__internal_a46693c43355782f599acba9ba2f081e239dcfbb385130ce49708e29d0794288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46693c43355782f599acba9ba2f081e239dcfbb385130ce49708e29d0794288->enter($__internal_a46693c43355782f599acba9ba2f081e239dcfbb385130ce49708e29d0794288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be487ae166efe7b0ba586e5382790ed0263a3c9ebf78c81a31f9e4b56e9e1ead->leave($__internal_be487ae166efe7b0ba586e5382790ed0263a3c9ebf78c81a31f9e4b56e9e1ead_prof);

        
        $__internal_a46693c43355782f599acba9ba2f081e239dcfbb385130ce49708e29d0794288->leave($__internal_a46693c43355782f599acba9ba2f081e239dcfbb385130ce49708e29d0794288_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd0c74bbb89a47d7d418b23446e8123026921d6a26b2675eb552e1656f2492ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0c74bbb89a47d7d418b23446e8123026921d6a26b2675eb552e1656f2492ac->enter($__internal_cd0c74bbb89a47d7d418b23446e8123026921d6a26b2675eb552e1656f2492ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_05cfd208d99d1c08c83ae6fcc844991a0842fc294b770c963eb56f11fdd5d7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cfd208d99d1c08c83ae6fcc844991a0842fc294b770c963eb56f11fdd5d7b4->enter($__internal_05cfd208d99d1c08c83ae6fcc844991a0842fc294b770c963eb56f11fdd5d7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form method=\"post\">
        Prénom : <input type=\"text\" name=\"prenom\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "prenom", array()), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"enregistrer\">
    </form>
";
        
        $__internal_05cfd208d99d1c08c83ae6fcc844991a0842fc294b770c963eb56f11fdd5d7b4->leave($__internal_05cfd208d99d1c08c83ae6fcc844991a0842fc294b770c963eb56f11fdd5d7b4_prof);

        
        $__internal_cd0c74bbb89a47d7d418b23446e8123026921d6a26b2675eb552e1656f2492ac->leave($__internal_cd0c74bbb89a47d7d418b23446e8123026921d6a26b2675eb552e1656f2492ac_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne_modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        Prénom : <input type=\"text\" name=\"prenom\" value=\"{{ abonne.prenom }}\">
        <input type=\"submit\" value=\"enregistrer\">
    </form>
{% endblock %}
", "bibliotheque/abonne_modif.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\abonne_modif.html.twig");
    }
}
