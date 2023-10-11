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

/* full_room/index.html.twig */
class __TwigTemplate_829f37be8e7950e0d73a0a7d3c98a09e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "full_room/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "full_room/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "full_room/index.html.twig", 1);
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

        echo "Hello FullRoomController!";
        
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
        color: darkblue;
        font-weight: bold;
        font-family: Arial, sans-serif;
    }


</style>


<p style=\"font-size: 20px; color: darkblue; font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    occupées : ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["nbrChambre"]) || array_key_exists("nbrChambre", $context) ? $context["nbrChambre"] : (function () { throw new RuntimeError('Variable "nbrChambre" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " </p>

<table class=\"table\">
    <thead>
        <tr>
            <th scope=\"col\">Numéro de la chambre</th>
            <th scope=\"col\">Tarif</th>
            <th scope=\"col\">État</th>
            <th scope=\"col\">User</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Téléphone</th>

            <th scope=\"col\">Dates de réservation</th>
        </tr>
    </thead>


    <tbody>
        <tr>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["FullRoom"]) || array_key_exists("FullRoom", $context) ? $context["FullRoom"] : (function () { throw new RuntimeError('Variable "FullRoom" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 41
            echo "            <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</th>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "tarif", [], "any", false, false, false, 42), "html", null, true);
            echo " euros</td>
            <td>";
            // line 43
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "etat", [], "any", false, false, false, 43)) ? ("libre") : ("occupée"));
            echo "</td>

        <td>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "reservationChambres", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["reservationChambre"]) {
                // line 47
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationChambre"], "reservation", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationChambre"], "reservation", [], "any", false, false, false, 47), "user", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationChambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </td>

        <td>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "reservationChambres", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["reservationChambre"]) {
                // line 53
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationChambre"], "reservation", [], "any", false, false, false, 53), "user", [], "any", false, false, false, 53), "email", [], "any", false, false, false, 53), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationChambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        </td>
        
        <td>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "reservationChambres", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["reservationChambre"]) {
                // line 59
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationChambre"], "reservation", [], "any", false, false, false, 59), "user", [], "any", false, false, false, 59), "telephone", [], "any", false, false, false, 59), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationChambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </td>


        <td>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chambre"], "reservationChambres", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["reservationChambre"]) {
                // line 66
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationChambre"], "reservation", [], "any", false, false, false, 66), "dateEntree", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 67
$context["reservationChambre"], "reservation", [], "any", false, false, false, 67), "dateSortie", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationChambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tbody>
    
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "full_room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 73,  219 => 69,  211 => 67,  207 => 66,  203 => 65,  197 => 61,  188 => 59,  184 => 58,  179 => 55,  170 => 53,  166 => 52,  161 => 49,  150 => 47,  146 => 46,  140 => 43,  136 => 42,  131 => 41,  127 => 40,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FullRoomController!{% endblock %}

{% block body %}

<style>

 h1 {
        font-size: 24px;
        color: darkblue;
        font-weight: bold;
        font-family: Arial, sans-serif;
    }


</style>


<p style=\"font-size: 20px; color: darkblue; font-weight: bold; font-family: Arial, sans-serif;\">Nombre de chambres
    occupées : {{ nbrChambre }} </p>

<table class=\"table\">
    <thead>
        <tr>
            <th scope=\"col\">Numéro de la chambre</th>
            <th scope=\"col\">Tarif</th>
            <th scope=\"col\">État</th>
            <th scope=\"col\">User</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Téléphone</th>

            <th scope=\"col\">Dates de réservation</th>
        </tr>
    </thead>


    <tbody>
        <tr>
            {% for chambre in FullRoom %}
            <th scope=\"row\">{{ chambre.id }}</th>
            <td>{{ chambre.tarif }} euros</td>
            <td>{{ chambre.etat ? 'libre' : 'occupée' }}</td>

        <td>
            {% for reservationChambre in chambre.reservationChambres %}
            {{ reservationChambre.reservation.user.nom }} {{ reservationChambre.reservation.user.prenom }}<br>
            {% endfor %}
        </td>

        <td>
            {% for reservationChambre in chambre.reservationChambres %}
            {{ reservationChambre.reservation.user.email }}<br>
            {% endfor %}
        </td>
        
        <td>
            {% for reservationChambre in chambre.reservationChambres %}
            {{ reservationChambre.reservation.user.telephone }}<br>
            {% endfor %}
        </td>


        <td>
            {% for reservationChambre in chambre.reservationChambres %}
            {{ reservationChambre.reservation.dateEntree|date('Y-m-d') }} - {{
            reservationChambre.reservation.dateSortie|date('Y-m-d') }}<br>
            {% endfor %}
        </td>

        </tr>
        {% endfor %}
    </tbody>
    
</table>
{% endblock %}

", "full_room/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\full_room\\index.html.twig");
    }
}
