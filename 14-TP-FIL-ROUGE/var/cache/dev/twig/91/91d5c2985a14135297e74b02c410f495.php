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

/* chambre_occupee/index.html.twig */
class __TwigTemplate_f27c41387cca15d811824a234215329b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre_occupee/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre_occupee/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre_occupee/index.html.twig", 1);
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

        echo "Chambres Occupées";
        
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
        echo "
<style>


    h1 {
    font-size: 24px;
    color: black;
    font-weight: bold;
    font-family: Arial, sans-serif;
}


</style>


<h1>L'état de l'Hotel</h1>

<h3>Liste des Chambres occupées</h3>

<p style=\"font-size: 20px; color: rgba(0, 0, 0, 0.738); font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    occupées : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbrfullRoom"]) || array_key_exists("nbrfullRoom", $context) ? $context["nbrfullRoom"] : (function () { throw new RuntimeError('Variable "nbrfullRoom" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " </p>

<table class=\"table\">
    <thead style=\"background-color:rgba(28, 96, 119, 0.585);\">
        <tr style=\"border: 1px solid black \" ;>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\" >Numéro de la chambre</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Numéro de la réservation</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Etat</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Nom</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Prénom</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Email</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Téléphone</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Date arrivée</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Date départ</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ChambreFull"]) || array_key_exists("ChambreFull", $context) ? $context["ChambreFull"] : (function () { throw new RuntimeError('Variable "ChambreFull" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 45
            echo "    <tr>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 49
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </td>
        <td>
            ";
            // line 53
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "etat", [], "any", false, false, false, 53)) ? ("Libre") : ("Occupée"));
            echo "</td>
        <td>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 56
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </td>
        <td>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 61
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 61), "prenom", [], "any", false, false, false, 61), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </td>
        <td>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 66
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </td>
        <td>
            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 71), "telephone", [], "any", false, false, false, 71), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        </td>
        <td>
            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 76
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateEntree", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </td>
        <td>
            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "chambre", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 81
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateSortie", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chambre_occupee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 86,  263 => 83,  254 => 81,  250 => 80,  246 => 78,  237 => 76,  233 => 75,  229 => 73,  220 => 71,  216 => 70,  212 => 68,  203 => 66,  199 => 65,  195 => 63,  186 => 61,  182 => 60,  178 => 58,  169 => 56,  165 => 55,  160 => 53,  156 => 51,  147 => 49,  143 => 48,  138 => 46,  135 => 45,  131 => 44,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chambres Occupées{% endblock %}

{% block body %}

<style>


    h1 {
    font-size: 24px;
    color: black;
    font-weight: bold;
    font-family: Arial, sans-serif;
}


</style>


<h1>L'état de l'Hotel</h1>

<h3>Liste des Chambres occupées</h3>

<p style=\"font-size: 20px; color: rgba(0, 0, 0, 0.738); font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    occupées : {{ nbrfullRoom }} </p>

<table class=\"table\">
    <thead style=\"background-color:rgba(28, 96, 119, 0.585);\">
        <tr style=\"border: 1px solid black \" ;>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\" >Numéro de la chambre</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Numéro de la réservation</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Etat</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Nom</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Prénom</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Email</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Téléphone</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Date arrivée</th>
            <th scope=\"col\" style =\"color: black; background-color:#E0B973;\">Date départ</th>
        </tr>
    </thead>

    <tbody>
    {% for chambre in ChambreFull %}
    <tr>
        <td>{{ chambre.id }}</td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.id }}<br>
            {% endfor %}
        </td>
        <td>
            {{ chambre.etat ? 'Libre' : 'Occupée' }}</td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.user.nom }}<br>
            {% endfor %}
        </td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.user.prenom }}<br>
            {% endfor %}
        </td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.user.email }}<br>
            {% endfor %}
        </td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.user.telephone }}<br>
            {% endfor %}
        </td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.DateEntree|date('Y-m-d') }}<br>
            {% endfor %}
        </td>
        <td>
            {% for reservation in chambre.chambre %}
            {{ reservation.DateSortie|date('Y-m-d') }}<br>
            {% endfor %}
        </td>
    </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}", "chambre_occupee/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\chambre_occupee\\index.html.twig");
    }
}
