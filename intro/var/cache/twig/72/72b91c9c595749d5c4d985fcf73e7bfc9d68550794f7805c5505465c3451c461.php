<?php

/* bibliotheque/emprunt.html.twig */
class __TwigTemplate_4701b71d7829c33926f75a477b8fdcfe8c1ada34e2b6c253705f123e1f0a80a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/emprunt.html.twig", 1);
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
        $__internal_6b5d1d7bb30703af43ac8f95a10ebae6f8103c8cc87cbbac982fc75eb81e99bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5d1d7bb30703af43ac8f95a10ebae6f8103c8cc87cbbac982fc75eb81e99bb->enter($__internal_6b5d1d7bb30703af43ac8f95a10ebae6f8103c8cc87cbbac982fc75eb81e99bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/emprunt.html.twig"));

        $__internal_e9064667373be9f901c8c738f9b024df9b878a7e4d50fb0b48611f37c902fdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9064667373be9f901c8c738f9b024df9b878a7e4d50fb0b48611f37c902fdd5->enter($__internal_e9064667373be9f901c8c738f9b024df9b878a7e4d50fb0b48611f37c902fdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/emprunt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5d1d7bb30703af43ac8f95a10ebae6f8103c8cc87cbbac982fc75eb81e99bb->leave($__internal_6b5d1d7bb30703af43ac8f95a10ebae6f8103c8cc87cbbac982fc75eb81e99bb_prof);

        
        $__internal_e9064667373be9f901c8c738f9b024df9b878a7e4d50fb0b48611f37c902fdd5->leave($__internal_e9064667373be9f901c8c738f9b024df9b878a7e4d50fb0b48611f37c902fdd5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe89c8a0f7af14c4aec59b7275683d77ae03370bd6ca49bbe9cbe22ec5204b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe89c8a0f7af14c4aec59b7275683d77ae03370bd6ca49bbe9cbe22ec5204b55->enter($__internal_fe89c8a0f7af14c4aec59b7275683d77ae03370bd6ca49bbe9cbe22ec5204b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fcffb612520fb5693668144c55c93ff38bcd8976c7bb111b37a424730c19879b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcffb612520fb5693668144c55c93ff38bcd8976c7bb111b37a424730c19879b->enter($__internal_fcffb612520fb5693668144c55c93ff38bcd8976c7bb111b37a424730c19879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
                <th>auteur</th>
                <th>titre</th>
                <th>sortie</th>
                <th>rendu</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emprunt"]) ? $context["emprunt"] : $this->getContext($context, "emprunt")));
        foreach ($context['_seq'] as $context["_key"] => $context["emprunts"]) {
            // line 17
            echo "            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunts"], "id_emprunt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunts"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunts"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunts"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunts"], "date_sortie", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ( !twig_test_empty($this->getAttribute($context["emprunts"], "date_rendu", array()))) {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunts"], "date_rendu", array()), "d/m/Y"), "html", null, true);
                echo "
                    ";
            } else {
                // line 26
                echo "                        ";
                echo "";
                echo "                
                    ";
            }
            // line 28
            echo "                </td>          
            <tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_fcffb612520fb5693668144c55c93ff38bcd8976c7bb111b37a424730c19879b->leave($__internal_fcffb612520fb5693668144c55c93ff38bcd8976c7bb111b37a424730c19879b_prof);

        
        $__internal_fe89c8a0f7af14c4aec59b7275683d77ae03370bd6ca49bbe9cbe22ec5204b55->leave($__internal_fe89c8a0f7af14c4aec59b7275683d77ae03370bd6ca49bbe9cbe22ec5204b55_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/emprunt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  104 => 28,  98 => 26,  92 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
                <th>auteur</th>
                <th>titre</th>
                <th>sortie</th>
                <th>rendu</th>
            </tr>
        </thead>
        <tbody>
        {% for emprunts in emprunt %}
            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">{{ emprunts.id_emprunt }}</td>
                <td>{{ emprunts.prenom }}</td>
                <td>{{ emprunts.auteur }}</td>
                <td>{{ emprunts.titre }}</td>
                <td>{{ emprunts.date_sortie|date('d/m/Y') }}</td>
                <td>{% if emprunts.date_rendu is not empty %}
                        {{ emprunts.date_rendu|date('d/m/Y') }}
                    {% else %}
                        {{ \"\" }}                
                    {% endif %}
                </td>          
            <tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "bibliotheque/emprunt.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\emprunt.html.twig");
    }
}
