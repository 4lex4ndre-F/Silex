<?php

/* layout.html.twig */
class __TwigTemplate_de2e4546bde1650285569b153be427ff6898419d4466d4ac4442913495ed513d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a5916688e40d5785d2dd46541d3013b1b2e2c2ba62683aac339582e189ee70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a5916688e40d5785d2dd46541d3013b1b2e2c2ba62683aac339582e189ee70->enter($__internal_e5a5916688e40d5785d2dd46541d3013b1b2e2c2ba62683aac339582e189ee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_f2fa36895030a45254a4edf806ebedb3306f26c12e31950ea5f5902d67f2b7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fa36895030a45254a4edf806ebedb3306f26c12e31950ea5f5902d67f2b7d3->enter($__internal_f2fa36895030a45254a4edf806ebedb3306f26c12e31950ea5f5902d67f2b7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_e5a5916688e40d5785d2dd46541d3013b1b2e2c2ba62683aac339582e189ee70->leave($__internal_e5a5916688e40d5785d2dd46541d3013b1b2e2c2ba62683aac339582e189ee70_prof);

        
        $__internal_f2fa36895030a45254a4edf806ebedb3306f26c12e31950ea5f5902d67f2b7d3->leave($__internal_f2fa36895030a45254a4edf806ebedb3306f26c12e31950ea5f5902d67f2b7d3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_be1091e09988bf8b9918167bf995d4eb9aea92c35c5c00c8b3c5864546690262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1091e09988bf8b9918167bf995d4eb9aea92c35c5c00c8b3c5864546690262->enter($__internal_be1091e09988bf8b9918167bf995d4eb9aea92c35c5c00c8b3c5864546690262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0608ac959b15fe3234eaf40c03af82964fce3d32d2fc169a266299b79d99ada9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0608ac959b15fe3234eaf40c03af82964fce3d32d2fc169a266299b79d99ada9->enter($__internal_0608ac959b15fe3234eaf40c03af82964fce3d32d2fc169a266299b79d99ada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_0608ac959b15fe3234eaf40c03af82964fce3d32d2fc169a266299b79d99ada9->leave($__internal_0608ac959b15fe3234eaf40c03af82964fce3d32d2fc169a266299b79d99ada9_prof);

        
        $__internal_be1091e09988bf8b9918167bf995d4eb9aea92c35c5c00c8b3c5864546690262->leave($__internal_be1091e09988bf8b9918167bf995d4eb9aea92c35c5c00c8b3c5864546690262_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_439539c403da6ba5f5558f95284d1162d30e8b5763d64e86ad3200c3846c27bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439539c403da6ba5f5558f95284d1162d30e8b5763d64e86ad3200c3846c27bd->enter($__internal_439539c403da6ba5f5558f95284d1162d30e8b5763d64e86ad3200c3846c27bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf019dd347403763b0c15f76f745bfa48abfe99ac1f9132cbe71adba0e195704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf019dd347403763b0c15f76f745bfa48abfe99ac1f9132cbe71adba0e195704->enter($__internal_bf019dd347403763b0c15f76f745bfa48abfe99ac1f9132cbe71adba0e195704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            ";
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />          
        ";
        
        $__internal_bf019dd347403763b0c15f76f745bfa48abfe99ac1f9132cbe71adba0e195704->leave($__internal_bf019dd347403763b0c15f76f745bfa48abfe99ac1f9132cbe71adba0e195704_prof);

        
        $__internal_439539c403da6ba5f5558f95284d1162d30e8b5763d64e86ad3200c3846c27bd->leave($__internal_439539c403da6ba5f5558f95284d1162d30e8b5763d64e86ad3200c3846c27bd_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4487cf8dedf3c898d933e8f9a9cf2efad2d4320f00fe16d49e8fbf5efccc6041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4487cf8dedf3c898d933e8f9a9cf2efad2d4320f00fe16d49e8fbf5efccc6041->enter($__internal_4487cf8dedf3c898d933e8f9a9cf2efad2d4320f00fe16d49e8fbf5efccc6041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6e2ff1ff675103395d444a1dadc4c66f59aa550095dfc1bdfd6964daafdc063e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2ff1ff675103395d444a1dadc4c66f59aa550095dfc1bdfd6964daafdc063e->enter($__internal_6e2ff1ff675103395d444a1dadc4c66f59aa550095dfc1bdfd6964daafdc063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6e2ff1ff675103395d444a1dadc4c66f59aa550095dfc1bdfd6964daafdc063e->leave($__internal_6e2ff1ff675103395d444a1dadc4c66f59aa550095dfc1bdfd6964daafdc063e_prof);

        
        $__internal_4487cf8dedf3c898d933e8f9a9cf2efad2d4320f00fe16d49e8fbf5efccc6041->leave($__internal_4487cf8dedf3c898d933e8f9a9cf2efad2d4320f00fe16d49e8fbf5efccc6041_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 12,  87 => 7,  85 => 6,  76 => 5,  58 => 4,  46 => 13,  44 => 12,  39 => 9,  37 => 5,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - My Silex Application</title>
        {% block stylesheets %}
            {# asset() génère le chemin pour les fichiers qui se trouvent dans le répertoire web #}
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />          
        {% endblock %}

    </head>
    <body>
        {% block content %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\layout.html.twig");
    }
}
