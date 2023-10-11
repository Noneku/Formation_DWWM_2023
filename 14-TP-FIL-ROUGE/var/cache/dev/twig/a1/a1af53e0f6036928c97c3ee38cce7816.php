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

/* confirmation/index.html.twig */
class __TwigTemplate_56753b4953f043a381dae788baa32bfc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "confirmation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "confirmation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "confirmation/index.html.twig", 1);
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

        echo "Confirmation de Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"/assets/css/confirmation.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

    <div class=\"confirmationPage\">
        
        <div class=\"text-center\" id ='textConfirmation'>

            <h1 style=\"font-family: 'Arial', sans-serif; font-size: 36px; color: #333;\">C’EST CONFIRMÉ !</h1>

            ";
        // line 21
        echo "            <h2 style=\" font-size: 24px; color: #007BFF;\">Votre réservation n ° ";
        echo twig_escape_filter($this->env, (isset($context["id_reservation"]) || array_key_exists("id_reservation", $context) ? $context["id_reservation"] : (function () { throw new RuntimeError('Variable "id_reservation" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " a bien été enregistrée <span style=\"font-size: 32px; color: #28A745;\">✅</span></h2>
            ";
        // line 23
        echo "
            <p style=\"font-size: 18px; color: #555;\" id=\"pconfirmation\">Vous recevrez prochainement le récapitulatif de votre réservation sur votre adresse e-mail.</p>
        
            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_generator");
        echo "\" class=\"btn btn-primary\" style=\"font-size: 20px; background-color: #007BFF; border-color: #007BFF;\" target = \"_blank\"><small>Télécharger votre récapitulatif</small></a>

            <p id=\"pconfirmation\">Nous vous remercions pour votre confiance et attendons avec impatience votre venue.</p>

            ";
        // line 31
        echo "
            <p id=\"pconfirmation\"><a class=\"\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Retour à la page d'accueil</a></p>

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "confirmation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 32,  137 => 31,  130 => 26,  125 => 23,  120 => 21,  110 => 12,  100 => 11,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmation de Réservation{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/assets/css/confirmation.css\">
{% endblock %}


{% block body %}


    <div class=\"confirmationPage\">
        
        <div class=\"text-center\" id ='textConfirmation'>

            <h1 style=\"font-family: 'Arial', sans-serif; font-size: 36px; color: #333;\">C’EST CONFIRMÉ !</h1>

            {# {% for reservation in reservations %}  si on veut tuliser la boucle alors on affiche cette variable -> {{reservation.id}}  #}
            <h2 style=\" font-size: 24px; color: #007BFF;\">Votre réservation n ° {{id_reservation}} a bien été enregistrée <span style=\"font-size: 32px; color: #28A745;\">✅</span></h2>
            {# {% endfor %}  #}

            <p style=\"font-size: 18px; color: #555;\" id=\"pconfirmation\">Vous recevrez prochainement le récapitulatif de votre réservation sur votre adresse e-mail.</p>
        
            <a href=\"{{ path('app_pdf_generator') }}\" class=\"btn btn-primary\" style=\"font-size: 20px; background-color: #007BFF; border-color: #007BFF;\" target = \"_blank\"><small>Télécharger votre récapitulatif</small></a>

            <p id=\"pconfirmation\">Nous vous remercions pour votre confiance et attendons avec impatience votre venue.</p>

            {# <img src=\"/img/VCH-removebg-preview_1.png\" alt=\"logoViceCity\"> #}

            <p id=\"pconfirmation\"><a class=\"\" href=\"{{ path('home') }}\">Retour à la page d'accueil</a></p>

        </div>

    </div>

{% endblock %}
", "confirmation/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\confirmation\\index.html.twig");
    }
}
