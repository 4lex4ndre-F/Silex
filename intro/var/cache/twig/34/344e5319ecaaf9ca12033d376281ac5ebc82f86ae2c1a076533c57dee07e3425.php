<?php

/* bibliotheque/abonne.html.twig */
class __TwigTemplate_5ecfd4a0a32f9e74b5d90b5c30aa5914b463d0a78204eab845567433eac97ee8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    id de l'abonné : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : null), "id_abonne", array()), "html", null, true);
        echo "<br/>
    prénom de l'abonné : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : null), "prenom", array()), "html", null, true);
        echo "
";
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
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bibliotheque/abonne.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\bibliotheque\\abonne.html.twig");
    }
}
