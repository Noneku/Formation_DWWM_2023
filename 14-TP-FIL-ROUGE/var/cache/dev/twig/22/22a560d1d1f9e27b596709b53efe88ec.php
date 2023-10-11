<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* libre_chambre/index.html.twig */
class __TwigTemplate_44051c466fd7500a96b04108d6d89a67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libre_chambre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libre_chambre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "libre_chambre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello LibreChambreController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Liste des Chambres Libres</h1>

<p style=\"font-size: 20px; color: darkblue; font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    libres : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nbrChmabres"]) || array_key_exists("nbrChmabres", $context) ? $context["nbrChmabres"] : (function () { throw new RuntimeError('Variable "nbrChmabres" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " </p>


<table class=\"table\">
    <thead>
        <tr>
            <th scope=\"col\">numero de la chambre</th>
            <th scope=\"col\">Tarif</th>
            <th scope=\"col\">Superficie</th>
            <th scope=\"col\">Catégorie</th>
            <th scope=\"col\">État</th>
            ";
        // line 21
        echo "
        </tr>
    </thead>
    <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambresLibres"]) || array_key_exists("chambresLibres", $context) ? $context["chambresLibres"] : (function () { throw new RuntimeError('Variable "chambresLibres" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 26
            echo "        <tr>
            <th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "tarif", [], "any", false, false, false, 28), "html", null, true);
            echo " euros</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "superficie", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>

            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chambre"], "categorie", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "etat", [], "any", false, false, false, 32)) ? ("Libre") : ("Occupée"));
            echo "</td>
            ";
            // line 34
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

       
    </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "libre_chambre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  141 => 34,  137 => 32,  133 => 31,  128 => 29,  124 => 28,  120 => 27,  117 => 26,  113 => 25,  107 => 21,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LibreChambreController!{% endblock %}

{% block body %}
<h1>Liste des Chambres Libres</h1>

<p style=\"font-size: 20px; color: darkblue; font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    libres : {{ nbrChmabres }} </p>


<table class=\"table\">
    <thead>
        <tr>
            <th scope=\"col\">numero de la chambre</th>
            <th scope=\"col\">Tarif</th>
            <th scope=\"col\">Superficie</th>
            <th scope=\"col\">Catégorie</th>
            <th scope=\"col\">État</th>
            {# <th scope=\"col\">vue sur mer</th> #}

        </tr>
    </thead>
    <tbody>
        {% for chambre in chambresLibres %}
        <tr>
            <th scope=\"row\">{{ chambre.id }}</th>
            <td>{{ chambre.tarif }} euros</td>
            <td>{{ chambre.superficie }}</td>

            <td>{{ chambre.categorie.libelle }}</td>
            <td>{{ chambre.etat ? 'Libre' : 'Occupée' }}</td>
            {# <td> {% if chambre.vueSurMer %}Oui{% else %}Non{% endif %}</td> #}
        </tr>
        {% endfor %}


       
    </tbody>
</table>

{% endblock %}", "libre_chambre/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\libre_chambre\\index.html.twig");
    }
}
