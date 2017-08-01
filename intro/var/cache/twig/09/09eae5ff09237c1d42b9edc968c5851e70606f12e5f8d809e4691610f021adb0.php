<?php

/* bibliotheque/abonne.html.twig */
class __TwigTemplate_527d7454343c0158c3fed1642e759f0f242a58d8ee32a6bf5f74756fae55235e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne.html.twig", 1);
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
        $__internal_cd2f19557c893a7128c4677e3d72215642dbb8c86c80d90a1f278c665182de05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2f19557c893a7128c4677e3d72215642dbb8c86c80d90a1f278c665182de05->enter($__internal_cd2f19557c893a7128c4677e3d72215642dbb8c86c80d90a1f278c665182de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne.html.twig"));

        $__internal_1d0d79eb8d8d64df6e0e19ca15d525f2684d13301528cd7d55f1a3a942355b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0d79eb8d8d64df6e0e19ca15d525f2684d13301528cd7d55f1a3a942355b8f->enter($__internal_1d0d79eb8d8d64df6e0e19ca15d525f2684d13301528cd7d55f1a3a942355b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2f19557c893a7128c4677e3d72215642dbb8c86c80d90a1f278c665182de05->leave($__internal_cd2f19557c893a7128c4677e3d72215642dbb8c86c80d90a1f278c665182de05_prof);

        
        $__internal_1d0d79eb8d8d64df6e0e19ca15d525f2684d13301528cd7d55f1a3a942355b8f->leave($__internal_1d0d79eb8d8d64df6e0e19ca15d525f2684d13301528cd7d55f1a3a942355b8f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_32083ca292b277cc55413435e232685176cf6e66020ae06bb5f1a96be77cbc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32083ca292b277cc55413435e232685176cf6e66020ae06bb5f1a96be77cbc0e->enter($__internal_32083ca292b277cc55413435e232685176cf6e66020ae06bb5f1a96be77cbc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e032bf7a348a2635b41652409c03460009cde2d018fd21a411b66cd96ecb9d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e032bf7a348a2635b41652409c03460009cde2d018fd21a411b66cd96ecb9d01->enter($__internal_e032bf7a348a2635b41652409c03460009cde2d018fd21a411b66cd96ecb9d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    id de l'abonné : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "id_abonne", array()), "html", null, true);
        echo "<br/>
    prénom de l'abonné : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "prenom", array()), "html", null, true);
        echo "<br/>
    <td><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnes");
        echo "\">Vers la liste</a></td>
";
        
        $__internal_e032bf7a348a2635b41652409c03460009cde2d018fd21a411b66cd96ecb9d01->leave($__internal_e032bf7a348a2635b41652409c03460009cde2d018fd21a411b66cd96ecb9d01_prof);

        
        $__internal_32083ca292b277cc55413435e232685176cf6e66020ae06bb5f1a96be77cbc0e->leave($__internal_32083ca292b277cc55413435e232685176cf6e66020ae06bb5f1a96be77cbc0e_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    id de l'abonné : {{ abonne.id_abonne }}<br/>
    prénom de l'abonné : {{ abonne.prenom }}<br/>
    <td><a href=\"{{ path('abonnes') }}\">Vers la liste</a></td>
{% endblock %}
", "bibliotheque/abonne.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\abonne.html.twig");
    }
}
