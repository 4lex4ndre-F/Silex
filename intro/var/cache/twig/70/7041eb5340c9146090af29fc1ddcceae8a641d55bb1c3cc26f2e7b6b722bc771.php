<?php

/* bibliotheque/abonnes.html.twig */
class __TwigTemplate_2eccb5f01fda36890dc7ab4d23b7700e96c1862d5c87981a8c6065420db4a032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonnes.html.twig", 1);
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
        $__internal_e1294e171028101c21a29a468012ba2f17cd8839f580ceb74f91adf5ed784d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1294e171028101c21a29a468012ba2f17cd8839f580ceb74f91adf5ed784d9a->enter($__internal_e1294e171028101c21a29a468012ba2f17cd8839f580ceb74f91adf5ed784d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes.html.twig"));

        $__internal_f3bf54e9e468713453d115a992ddb03b9ad2ebe262f7ff0c4a81f57657d58fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bf54e9e468713453d115a992ddb03b9ad2ebe262f7ff0c4a81f57657d58fdc->enter($__internal_f3bf54e9e468713453d115a992ddb03b9ad2ebe262f7ff0c4a81f57657d58fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1294e171028101c21a29a468012ba2f17cd8839f580ceb74f91adf5ed784d9a->leave($__internal_e1294e171028101c21a29a468012ba2f17cd8839f580ceb74f91adf5ed784d9a_prof);

        
        $__internal_f3bf54e9e468713453d115a992ddb03b9ad2ebe262f7ff0c4a81f57657d58fdc->leave($__internal_f3bf54e9e468713453d115a992ddb03b9ad2ebe262f7ff0c4a81f57657d58fdc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae93a9a40246336ce5b60ca16a81461990c23c8a301b6f676938982a0632742f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae93a9a40246336ce5b60ca16a81461990c23c8a301b6f676938982a0632742f->enter($__internal_ae93a9a40246336ce5b60ca16a81461990c23c8a301b6f676938982a0632742f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0be80344c64c0c521a380165ad34730333742d21dd16442b7e28c323a953c4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be80344c64c0c521a380165ad34730333742d21dd16442b7e28c323a953c4aa->enter($__internal_0be80344c64c0c521a380165ad34730333742d21dd16442b7e28c323a953c4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnes"]) ? $context["abonnes"] : $this->getContext($context, "abonnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["unAbonne"]) {
            // line 15
            echo "            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unAbonne"], "id_abonne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unAbonne"], "prenom", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_detail", array("id" => $this->getAttribute($context["unAbonne"], "id_abonne", array()))), "html", null, true);
            echo "\">Détail</a></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_modif", array("id" => $this->getAttribute($context["unAbonne"], "id_abonne", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_suppression", array("id" => $this->getAttribute($context["unAbonne"], "id_abonne", array()))), "html", null, true);
            echo "\">supprimer</a></td>
            <tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unAbonne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
    <p><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_ajout");
        echo "\">Ajouter un abonné</a></p>
";
        
        $__internal_0be80344c64c0c521a380165ad34730333742d21dd16442b7e28c323a953c4aa->leave($__internal_0be80344c64c0c521a380165ad34730333742d21dd16442b7e28c323a953c4aa_prof);

        
        $__internal_ae93a9a40246336ce5b60ca16a81461990c23c8a301b6f676938982a0632742f->leave($__internal_ae93a9a40246336ce5b60ca16a81461990c23c8a301b6f676938982a0632742f_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonnes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  95 => 23,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  67 => 15,  63 => 14,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {# <pre>{{ dump(abonnes) }}</pre> #}
    {# construire un tableau HTML contenant les abonnés #}
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
            </tr>
        </thead>
        <tbody>
        {% for unAbonne in abonnes %}
            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">{{ unAbonne.id_abonne }}</td>
                <td>{{ unAbonne.prenom }}</td>
                <td><a href=\"{{ path('abonne_detail', {id: unAbonne.id_abonne}) }}\">Détail</a></td>
                <td><a href=\"{{ path('abonne_modif', {id: unAbonne.id_abonne}) }}\">Modifier</a></td>
                <td><a href=\"{{ path('abonne_suppression', {id: unAbonne.id_abonne}) }}\">supprimer</a></td>
            <tr>
        {% endfor %}
        </tbody>
    </table>
    <p><a href=\"{{ path('abonne_ajout') }}\">Ajouter un abonné</a></p>
{% endblock %}", "bibliotheque/abonnes.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\abonnes.html.twig");
    }
}
