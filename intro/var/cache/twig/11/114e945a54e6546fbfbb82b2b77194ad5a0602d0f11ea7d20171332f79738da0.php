<?php

/* twig.html.twig */
class __TwigTemplate_f2a66eae4a93305fe465490f71aa7fcb5d155dd1c367c43edf02d1ce9d585487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "twig.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289dbba8297b0827ec71eeab6338d84fbd87a1f7746bbd9112a2c9c699565ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289dbba8297b0827ec71eeab6338d84fbd87a1f7746bbd9112a2c9c699565ece->enter($__internal_289dbba8297b0827ec71eeab6338d84fbd87a1f7746bbd9112a2c9c699565ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig.html.twig"));

        $__internal_611c832fb4219ca8fe84e4d2fab02a05b6a7dd4f647e51ae4ca7bd4d069fb5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611c832fb4219ca8fe84e4d2fab02a05b6a7dd4f647e51ae4ca7bd4d069fb5d8->enter($__internal_611c832fb4219ca8fe84e4d2fab02a05b6a7dd4f647e51ae4ca7bd4d069fb5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289dbba8297b0827ec71eeab6338d84fbd87a1f7746bbd9112a2c9c699565ece->leave($__internal_289dbba8297b0827ec71eeab6338d84fbd87a1f7746bbd9112a2c9c699565ece_prof);

        
        $__internal_611c832fb4219ca8fe84e4d2fab02a05b6a7dd4f647e51ae4ca7bd4d069fb5d8->leave($__internal_611c832fb4219ca8fe84e4d2fab02a05b6a7dd4f647e51ae4ca7bd4d069fb5d8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28f525d1a6ff76669a56058a0924f2c95a128dbcae19c12e556e33e8c2339257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f525d1a6ff76669a56058a0924f2c95a128dbcae19c12e556e33e8c2339257->enter($__internal_28f525d1a6ff76669a56058a0924f2c95a128dbcae19c12e556e33e8c2339257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76ba248b2ea55e3ef0c0d68b8e394b05272b0e4599352f17ee900ebf453a1576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ba248b2ea55e3ef0c0d68b8e394b05272b0e4599352f17ee900ebf453a1576->enter($__internal_76ba248b2ea55e3ef0c0d68b8e394b05272b0e4599352f17ee900ebf453a1576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/test.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_76ba248b2ea55e3ef0c0d68b8e394b05272b0e4599352f17ee900ebf453a1576->leave($__internal_76ba248b2ea55e3ef0c0d68b8e394b05272b0e4599352f17ee900ebf453a1576_prof);

        
        $__internal_28f525d1a6ff76669a56058a0924f2c95a128dbcae19c12e556e33e8c2339257->leave($__internal_28f525d1a6ff76669a56058a0924f2c95a128dbcae19c12e556e33e8c2339257_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_3216e38da137fdcbdbcaa91878086e6e1eb85154557c2a2124695630949a98f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3216e38da137fdcbdbcaa91878086e6e1eb85154557c2a2124695630949a98f6->enter($__internal_3216e38da137fdcbdbcaa91878086e6e1eb85154557c2a2124695630949a98f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d3e2c9b9ba346a5109610a09705fd79088a085e3f633513081964c033cb7b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3e2c9b9ba346a5109610a09705fd79088a085e3f633513081964c033cb7b0e->enter($__internal_8d3e2c9b9ba346a5109610a09705fd79088a085e3f633513081964c033cb7b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <p class=\"test\"><b>Page de test - twig.html.twig</b></p>
    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    <p>";
        echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
        echo "</p>
    
    ";
        // line 18
        echo "    ";
        $context["newVar"] = "Autre variable";
        // line 19
        echo "    
    <p>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")), "html", null, true);
        echo "</p>
    
    ";
        // line 23
        echo "    <p>";
        echo twig_escape_filter($this->env, ((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) . "!"), "html", null, true);
        echo "</p>
    
    ";
        // line 25
        $context["vrai"] = true;
        echo "    
    
    ";
        // line 28
        echo "    ";
        if ((isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai"))) {
            // line 29
            echo "        <p>C'est vrai</p>
    ";
        } else {
            // line 31
            echo "        <p>C'est faux</p>
    ";
        }
        // line 33
        echo "    
    ";
        // line 35
        echo "    ";
        if (((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) == "Autre variable")) {
            // line 36
            echo "        <p>newVar vaut 'Autre variable'</p>
    ";
        }
        // line 38
        echo "    
    ";
        // line 40
        echo "    ";
        if ((((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) == "Autre variable") && (isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai")))) {
            // line 41
            echo "        <p>newVar vaut 'Autre variable' et vrai est true</p>
    ";
        }
        // line 43
        echo "    
    ";
        // line 45
        echo "    ";
        if ( !(isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai"))) {
            // line 46
            echo "        <p>C'est faux</p>
    ";
        }
        // line 48
        echo "    
    ";
        // line 50
        echo "    ";
        $context["tab"] = array(0 => 1, 1 => 2, 2 => 3, 3 => 4);
        // line 51
        echo "    
    <p>
    ";
        // line 54
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 55
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </p>
        
    <p>
    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 63
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </p>
    
    ";
        // line 68
        echo "    ";
        // line 69
        echo "    ";
        $context["hash"] = array("foo" => "Foo", "bar" => "Bar");
        // line 70
        echo "    <p>
    ";
        // line 72
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 73
            echo "        ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </p>
    
    ";
        // line 77
        $context["emptyArray"] = array();
        // line 78
        echo "    
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emptyArray"]) ? $context["emptyArray"] : $this->getContext($context, "emptyArray")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 80
            echo "        ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "        <p>Le tableau emptyArray est vide</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    
    <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "foo", array(), "array"), "html", null, true);
        echo "</p>";
        // line 86
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "foo", array()), "html", null, true);
        echo "</p>";
        // line 87
        echo "        
    ";
        // line 89
        echo "    ";
        if (twig_test_empty((isset($context["emptyArray"]) ? $context["emptyArray"] : $this->getContext($context, "emptyArray")))) {
            // line 90
            echo "        <p>Le tableau emptyArray est vide</p>
    ";
        }
        // line 91
        echo "        
    ";
        // line 92
        if ( !twig_test_empty((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")))) {
            // line 93
            echo "        <p>Le tableau hash n'est pas vide</p>
    ";
        }
        // line 95
        echo "    
    ";
        // line 96
        $context["dix"] = 10;
        // line 97
        echo "    ";
        if ((0 == (isset($context["dix"]) ? $context["dix"] : $this->getContext($context, "dix")) % 5)) {
            // line 98
            echo "        <p>dix est divisible par cinq</p>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        if (((isset($context["dix"]) ? $context["dix"] : $this->getContext($context, "dix")) % 2 == 0)) {
            // line 102
            echo "        <p>dix est pair</p>
    ";
        }
        // line 104
        echo "
    <p>
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 107
            echo "        ";
            // line 108
            echo "        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 109
                echo "            1er tour de boucle : 
        ";
            }
            // line 111
            echo "        ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 112
                echo "            dernier tour de boucle : 
        ";
            }
            // line 114
            echo "        
        ";
            // line 115
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 116
                echo "            tour impair : 
        ";
            }
            // line 118
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </p>
    
    ";
        // line 123
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash"))), "html", null, true);
        echo "</p>
    
    ";
        // line 126
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))), "html", null, true);
        echo "</p>    
    <p>";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "d/m/Y"), "html", null, true);
        echo "</p>
    
    ";
        // line 129
        $context["html"] = "<p>Paragraphe</p>";
        echo "    
    ";
        // line 131
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")), "html", null, true);
        echo "
    ";
        // line 133
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    
    ";
        // line 136
        echo "    ";
        // line 137
        echo "    ";
        // line 138
        echo "    ";
        $this->loadTemplate("included.html.twig", "twig.html.twig", 138)->display(array_merge($context, array("bla" => "Blabla")));
        // line 139
        echo "    
    
    
    
";
        
        $__internal_8d3e2c9b9ba346a5109610a09705fd79088a085e3f633513081964c033cb7b0e->leave($__internal_8d3e2c9b9ba346a5109610a09705fd79088a085e3f633513081964c033cb7b0e_prof);

        
        $__internal_3216e38da137fdcbdbcaa91878086e6e1eb85154557c2a2124695630949a98f6->leave($__internal_3216e38da137fdcbdbcaa91878086e6e1eb85154557c2a2124695630949a98f6_prof);

    }

    public function getTemplateName()
    {
        return "twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 139,  406 => 138,  404 => 137,  402 => 136,  396 => 133,  391 => 131,  387 => 129,  382 => 127,  377 => 126,  371 => 123,  367 => 120,  350 => 118,  346 => 116,  344 => 115,  341 => 114,  337 => 112,  334 => 111,  330 => 109,  327 => 108,  325 => 107,  308 => 106,  304 => 104,  300 => 102,  298 => 101,  295 => 100,  291 => 98,  288 => 97,  286 => 96,  283 => 95,  279 => 93,  277 => 92,  274 => 91,  270 => 90,  267 => 89,  264 => 87,  260 => 86,  257 => 85,  254 => 84,  247 => 82,  239 => 80,  234 => 79,  231 => 78,  229 => 77,  225 => 75,  214 => 73,  209 => 72,  206 => 70,  203 => 69,  201 => 68,  197 => 65,  188 => 63,  183 => 62,  181 => 61,  176 => 57,  167 => 55,  162 => 54,  158 => 51,  155 => 50,  152 => 48,  148 => 46,  145 => 45,  142 => 43,  138 => 41,  135 => 40,  132 => 38,  128 => 36,  125 => 35,  122 => 33,  118 => 31,  114 => 29,  111 => 28,  106 => 25,  100 => 23,  95 => 20,  92 => 19,  89 => 18,  83 => 15,  81 => 14,  79 => 13,  76 => 11,  67 => 10,  54 => 7,  50 => 6,  41 => 5,  11 => 1,);
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


{# surcharge du bloc stylesheet #}
{% block stylesheets %}
    {{ parent() }} {# reprend le contenu du bloc parent #}
    <link href=\"{{ asset('css/test.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <p class=\"test\"><b>Page de test - twig.html.twig</b></p>
    {# pour l'affichage : {{}} #}
    {# affiche la variable var qui a été passé à la vue par le controlleur #}
    {# en PHP : <?= \$var; ?> #}
    <p>{{ var }}</p>
    
    {# défini une variable dans la vue #}
    {% set newVar = 'Autre variable' %}
    
    <p>{{ newVar }}</p>
    
    {# pour concaténer #}
    <p>{{ newVar ~ '!' }}</p>
    
    {% set vrai = true %}    
    
    {# condition sur un booleen #}
    {% if vrai %}
        <p>C'est vrai</p>
    {% else %}
        <p>C'est faux</p>
    {% endif %}
    
    {# même opérateurs de comparaison qu'en PHP #}
    {% if newVar == 'Autre variable' %}
        <p>newVar vaut 'Autre variable'</p>
    {% endif %}
    
    {# and et or pour && et || #}
    {% if newVar == 'Autre variable' and vrai %}
        <p>newVar vaut 'Autre variable' et vrai est true</p>
    {% endif %}
    
    {# not pour ! #}
    {% if not vrai %}
        <p>C'est faux</p>
    {% endif %}
    
    {# tableau indexé #}
    {% set tab = [1, 2, 3, 4] %}
    
    <p>
    {#en PHP : foreach (\$tab as \$nb) #}
    {% for nb in tab %}
        {{ nb }}<br />
    {% endfor %}
    </p>
        
    <p>
    {# .. pour créer une séquence à la volée #}
    {#en PHP : for (\$nb = 0; \$nb <=5; \$nb++ #}
    {% for nb in 0..5 %}
        {{ nb }}<br />
    {% endfor %}
    </p>
    
    {# tableau associatif #}
    {# \$hash = ['foo' => 'Foo', 'bar' => 'Bar']; #}
    {% set hash = {foo: \"Foo\", bar: \"Bar\"} %}
    <p>
    {# en PHP : foreach (\$hash as \$key => \$value #}
    {% for key, value in hash %}
        {{ key }} : {{ value }}<br>
    {% endfor %}
    </p>
    
    {% set emptyArray = [] %}
    
    {% for val in emptyArray %}
        {{ val }}
    {% else %}{# on rentre dans le else si le tableau est vide #}
        <p>Le tableau emptyArray est vide</p>
    {% endfor %}
    
    <p>{{ hash['foo'] }}</p>{# élément d'un tableau #}
    <p>{{ hash.foo }}</p>{# notation courte #}
        
    {# test avec is/is not #}
    {% if emptyArray is empty %}
        <p>Le tableau emptyArray est vide</p>
    {% endif %}        
    {% if hash is not empty %}
        <p>Le tableau hash n'est pas vide</p>
    {% endif %}
    
    {% set dix = 10 %}
    {% if dix is divisibleby(5) %}
        <p>dix est divisible par cinq</p>
    {% endif %}

    {% if dix is even %}{# even/odd : pair/impair #}
        <p>dix est pair</p>
    {% endif %}

    <p>
    {% for nb in 0..5 %}
        {# loop donne des informations sur l'état de la boucle #}
        {% if loop.first %}
            1er tour de boucle : 
        {% endif %}
        {% if loop.last %}
            dernier tour de boucle : 
        {% endif %}
        
        {% if loop.index is odd %}
            tour impair : 
        {% endif %}
        {{ nb }}<br>
    {% endfor %}
    </p>
    
    {# var_dump(\$hash) #}
    <p>{{ dump(hash) }}</p>
    
    {# application d'un filtre avec | #}
    <p>{{ var|upper }}</p>    
    <p>{{ now|date('d/m/Y') }}</p>
    
    {% set html = '<p>Paragraphe</p>' %}    
    {# par défaut, twig échappe le html #}
    {{ html }}
    {# pour ne pas échapper le html #}
    {{ html|raw }}
    
    {# inclusion #}
    {#% include 'included.html.twig' %#}
    {#% include 'included.html.twig' only %#}
    {% include 'included.html.twig' with {bla: 'Blabla'} %}
    
    
    
    
{% endblock %}

", "twig.html.twig", "C:\\xampp\\htdocs\\Silex\\intro\\templates\\twig.html.twig");
    }
}
