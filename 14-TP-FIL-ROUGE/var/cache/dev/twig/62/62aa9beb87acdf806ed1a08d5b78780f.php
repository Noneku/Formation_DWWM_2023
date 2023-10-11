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

/* pdf_generator/index.html.twig */
class __TwigTemplate_8b9d65cbf63d90131bd77f00b11a12c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
<style>
    * {
        list-style: none;
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
    }


    h3 {

        margin-top: 50px;
        margin-bottom: 40px;
    }

    .titre {

        display:flex;
        text-align: center;
        color: #E0B973;
        border-bottom: solid #E0B973 2px;
        margin-bottom: 50px;
    }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" style=\"width: 200px;\" alt=\"LogoViceCity\">

<div class=\"titre\">
    <h1>RECAPITULATIF DE RESERVATION</h1>
</div>

<div class=\"pdf\">

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 44
            echo "
    <h2>Cher, ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo " </h2>

    <p>Nous vous remercions d'avoir choisi Vice City Hôtel pour votre séjour.</p>

    <p>Votre réservation est maintenant confirmée.</p>

    <h3><u>Récapitulatif de votre réservation :</u></h3>

    <p><b>Numéro de réservation:</b> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
    <p><b>Date de réservation:</b> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateReservation", [], "any", false, false, false, 54), "d-m-y"), "html", null, true);
            echo "</p>
    <p><b>Date d'entrée:</b> ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateEntree", [], "any", false, false, false, 55), "d-m-y"), "html", null, true);
            echo "</p>
    <p><b>Date de sortie:</b> ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateSortie", [], "any", false, false, false, 56), "d-m-y"), "html", null, true);
            echo "</p>
    <p><b>Numéro de chambre:</b> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
    <p><b>Libelle chambre:</b> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 58), "libelle", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
    <p><b>Tarif/nuit:</b> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 59), "tarif", [], "any", false, false, false, 59), "html", null, true);
            echo " €</p>
    <p><b>Coordonées de l'hotel:</b>

    <ul>
        <li>Vice City Hotel</li>
        <li>123 Ocean Boulevard</li>
        <li>Miami, FL 33123</li>
        <li>USA</li>
    </ul>

    </p>

    <h3><U>Montant total du séjour : </U></h3>
    <p><b>Montant total de la réservation:</b> ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 72, $this->source); })()), "html", null, true);
            echo " €</p>
    <p><b>Moyen de paiement :</b> Carte bancaire</p>
    <br>


    <p>Cordialement</p>
    <h4>Vice City Hotel</h4>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pdf_generator/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 81,  215 => 72,  199 => 59,  195 => 58,  191 => 57,  187 => 56,  183 => 55,  179 => 54,  175 => 53,  162 => 45,  159 => 44,  155 => 43,  144 => 35,  141 => 34,  131 => 33,  96 => 5,  86 => 4,  68 => 1,  58 => 33,  54 => 31,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}{% endblock %}


{% block stylesheets %}

<style>
    * {
        list-style: none;
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
    }


    h3 {

        margin-top: 50px;
        margin-bottom: 40px;
    }

    .titre {

        display:flex;
        text-align: center;
        color: #E0B973;
        border-bottom: solid #E0B973 2px;
        margin-bottom: 50px;
    }

</style>
{% endblock %}


{% block body %}

<img src=\"{{ imageSrc }}\" style=\"width: 200px;\" alt=\"LogoViceCity\">

<div class=\"titre\">
    <h1>RECAPITULATIF DE RESERVATION</h1>
</div>

<div class=\"pdf\">

    {% for reservation in reservations %}

    <h2>Cher, {{reservation.user.nom}} {{reservation.user.prenom}} </h2>

    <p>Nous vous remercions d'avoir choisi Vice City Hôtel pour votre séjour.</p>

    <p>Votre réservation est maintenant confirmée.</p>

    <h3><u>Récapitulatif de votre réservation :</u></h3>

    <p><b>Numéro de réservation:</b> {{reservation.id}}</p>
    <p><b>Date de réservation:</b> {{reservation.DateReservation|date('d-m-y')}}</p>
    <p><b>Date d'entrée:</b> {{reservation.DateEntree|date('d-m-y')}}</p>
    <p><b>Date de sortie:</b> {{reservation.DateSortie|date('d-m-y')}}</p>
    <p><b>Numéro de chambre:</b> {{reservation.chambre.id}}</p>
    <p><b>Libelle chambre:</b> {{reservation.chambre.libelle}}</p>
    <p><b>Tarif/nuit:</b> {{reservation.chambre.tarif}} €</p>
    <p><b>Coordonées de l'hotel:</b>

    <ul>
        <li>Vice City Hotel</li>
        <li>123 Ocean Boulevard</li>
        <li>Miami, FL 33123</li>
        <li>USA</li>
    </ul>

    </p>

    <h3><U>Montant total du séjour : </U></h3>
    <p><b>Montant total de la réservation:</b> {{montantTotal}} €</p>
    <p><b>Moyen de paiement :</b> Carte bancaire</p>
    <br>


    <p>Cordialement</p>
    <h4>Vice City Hotel</h4>

    {% endfor %}

</div>

{% endblock %}", "pdf_generator/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\pdf_generator\\index.html.twig");
    }
}
