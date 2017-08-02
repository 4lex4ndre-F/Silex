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
        $__internal_66637e1d357cb8abcf84a78d21685547a5e9bf3d24e948473da5d78d3c67747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66637e1d357cb8abcf84a78d21685547a5e9bf3d24e948473da5d78d3c67747c->enter($__internal_66637e1d357cb8abcf84a78d21685547a5e9bf3d24e948473da5d78d3c67747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/emprunt.html.twig"));

        $__internal_140319ab2471e5daf4cd37491f76e9dbd444796d947a20a4ea1ceda66b75d63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140319ab2471e5daf4cd37491f76e9dbd444796d947a20a4ea1ceda66b75d63a->enter($__internal_140319ab2471e5daf4cd37491f76e9dbd444796d947a20a4ea1ceda66b75d63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/emprunt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66637e1d357cb8abcf84a78d21685547a5e9bf3d24e948473da5d78d3c67747c->leave($__internal_66637e1d357cb8abcf84a78d21685547a5e9bf3d24e948473da5d78d3c67747c_prof);

        
        $__internal_140319ab2471e5daf4cd37491f76e9dbd444796d947a20a4ea1ceda66b75d63a->leave($__internal_140319ab2471e5daf4cd37491f76e9dbd444796d947a20a4ea1ceda66b75d63a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a840f8b01ba956fa8d81ceab7a14a9072951a219963ff79791b1cbfa0c868c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a840f8b01ba956fa8d81ceab7a14a9072951a219963ff79791b1cbfa0c868c8->enter($__internal_6a840f8b01ba956fa8d81ceab7a14a9072951a219963ff79791b1cbfa0c868c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_747a5bf2d45dbbb8cd4e0f13c8acb4d014a6d8a280401586d2a1285de534d3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747a5bf2d45dbbb8cd4e0f13c8acb4d014a6d8a280401586d2a1285de534d3bb->enter($__internal_747a5bf2d45dbbb8cd4e0f13c8acb4d014a6d8a280401586d2a1285de534d3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["emprunts"]) ? $context["emprunts"] : $this->getContext($context, "emprunts")));
        foreach ($context['_seq'] as $context["_key"] => $context["emprunt"]) {
            // line 17
            echo "            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "id_emprunt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date_sortie", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 24
            if ( !twig_test_empty($this->getAttribute($context["emprunt"], "date_rendu", array()))) {
                // line 25
                echo "                        ";
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date_rendu", array()), "d/m/Y"), "html", null, true);
                echo "
                    ";
            }
            // line 28
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_747a5bf2d45dbbb8cd4e0f13c8acb4d014a6d8a280401586d2a1285de534d3bb->leave($__internal_747a5bf2d45dbbb8cd4e0f13c8acb4d014a6d8a280401586d2a1285de534d3bb_prof);

        
        $__internal_6a840f8b01ba956fa8d81ceab7a14a9072951a219963ff79791b1cbfa0c868c8->leave($__internal_6a840f8b01ba956fa8d81ceab7a14a9072951a219963ff79791b1cbfa0c868c8_prof);

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
        return array (  109 => 31,  101 => 28,  95 => 26,  93 => 25,  91 => 24,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
        {% for emprunt in emprunts %}
            <tr>
                <td style=\"text-align: right; padding-right: 5px;\">{{ emprunt.id_emprunt }}</td>
                <td>{{ emprunt.prenom }}</td>
                <td>{{ emprunt.auteur }}</td>
                <td>{{ emprunt.titre }}</td>
                <td>{{ emprunt.date_sortie|date('d/m/Y') }}</td>
                <td>
                    {% if emprunt.date_rendu is not empty %}
                        {# /!\\ |date() renvoi la date actuelle si pas de valeur #}
                        {{ emprunt.date_rendu|date('d/m/Y') }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "bibliotheque/emprunt.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\emprunt.html.twig");
    }
}
