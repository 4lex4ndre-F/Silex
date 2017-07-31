<?php

/* included.html.twig */
class __TwigTemplate_33fb4756e446c1d89b00205fb8f6f5b9e2c2061b9a4838a8b7fa41b2514d9ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adb8ed098e5c7ebce2f6b024a7330c81af0eed2d7089adf720004094a9b901ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb8ed098e5c7ebce2f6b024a7330c81af0eed2d7089adf720004094a9b901ef->enter($__internal_adb8ed098e5c7ebce2f6b024a7330c81af0eed2d7089adf720004094a9b901ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "included.html.twig"));

        $__internal_0224f23674a846766acc7f2e33a6169b071c728bf3d99beda8881b844050de78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0224f23674a846766acc7f2e33a6169b071c728bf3d99beda8881b844050de78->enter($__internal_0224f23674a846766acc7f2e33a6169b071c728bf3d99beda8881b844050de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "included.html.twig"));

        // line 1
        echo "<p>Fichier inclus</p>

<p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
        echo "</p>
<p>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["bla"]) ? $context["bla"] : $this->getContext($context, "bla")), "html", null, true);
        echo "</p>
";
        
        $__internal_adb8ed098e5c7ebce2f6b024a7330c81af0eed2d7089adf720004094a9b901ef->leave($__internal_adb8ed098e5c7ebce2f6b024a7330c81af0eed2d7089adf720004094a9b901ef_prof);

        
        $__internal_0224f23674a846766acc7f2e33a6169b071c728bf3d99beda8881b844050de78->leave($__internal_0224f23674a846766acc7f2e33a6169b071c728bf3d99beda8881b844050de78_prof);

    }

    public function getTemplateName()
    {
        return "included.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Fichier inclus</p>

<p>{{ var }}</p>
<p>{{ bla }}</p>
", "included.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\included.html.twig");
    }
}
