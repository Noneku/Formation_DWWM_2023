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

/* paiement/index.html.twig */
class __TwigTemplate_fed0c54ed601d72ddcfe9686b53af570 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/index.html.twig", 1);
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

        echo "Paiement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/paiement.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<body>

    <div class=\"blocpaiement\">

        <div class=\"infosrecap\">

            <div class=\"container_infosrecap\">

                <h2 id=\"titreRecap\">Récapitulatif de réservation</h2>

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "                <li><b>Reservation n° :</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</li>
                <li><b>Date de réservation :</b> ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateReservation", [], "any", false, false, false, 24), "d-m-y"), "html", null, true);
            echo "</li>
                <li><b>Date d'entrée :</b> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateEntree", [], "any", false, false, false, 25), "d-m-y"), "html", null, true);
            echo "</li>
                <li><b>Date de sortie :</b> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "DateSortie", [], "any", false, false, false, 26), "d-m-y"), "html", null, true);
            echo "</li>
                <li><b>Chambre n° :</b> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</li>
                <li><b>Tarif/nuit :</b> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 28), "tarif", [], "any", false, false, false, 28), "html", null, true);
            echo " €</li>

            <div class=\"montantTotal\">

                <h4><b>TOTAL:  ";
            // line 32
            echo twig_escape_filter($this->env, ((isset($context["nombreJours"]) || array_key_exists("nombreJours", $context) ? $context["nombreJours"] : (function () { throw new RuntimeError('Variable "nombreJours" does not exist.', 32, $this->source); })()) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "chambre", [], "any", false, false, false, 32), "tarif", [], "any", false, false, false, 32)), "html", null, true);
            echo " €</b></h4>
                ";
            // line 34
            echo "                ";
            // line 37
            echo "
            </div>

            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        </div>

        <div class=\"container\">

            <h2 id=\"titrePaiement\">Paiement par carte bancaire</h2>

            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "

            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), 'row', ["label" => "Nom Prénom:"]);
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "card_number", [], "any", false, false, false, 53), 'row', ["label" => "N° de carte:"]);
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "date_expiration", [], "any", false, false, false, 54), 'row', ["label" => "Date d'expiration:", "attr" => ["placeholder" => "MM/YY"]]);
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "CVV", [], "any", false, false, false, 55), 'row', ["label" => "CVV:"]);
        echo "

            <div class=\"bouton\">
                <button type=\"submit\">Payer</button>
            </div>

            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "

            <h4 id=\"titreMethodePaiement\">Autres méthodes de paiement</h4>

            <div class=\"payment-options\">

                <a href=\"https://www.paypal.com\" target=\"_blank\" id=\"lienpaiement\"><img src=\"/img/Paypal-logo.png\"
                        alt=\"PayPal\" style=\"width: 100px; height: auto;\"></a>
                <a href=\"https://www.mastercard.com\" target=\"_blank\" id=\"lienpaiement\"><img
                        src=\"/img/MasterCard_Logo.svg.webp\" alt=\"MasterCard\" style=\"width: 100px; height: auto;\"></a>
                <a href=\"https://www.visa.com\" target=\"_blank\" id=\"lienpaiement\"><img src=\"/img/Old_Visa_Logo.svg.png\"
                        alt=\"Visa\" style=\"width: 100px; height: auto;\"></a>

            </div>

        </div>

    </div>

    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/paiement.js"), "html", null, true);
        echo "\"></script>

</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "paiement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 80,  207 => 61,  198 => 55,  194 => 54,  190 => 53,  186 => 52,  181 => 50,  172 => 43,  161 => 37,  159 => 34,  155 => 32,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 24,  127 => 23,  123 => 22,  110 => 11,  100 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/paiement.css\">
{% endblock %}


{% block body %}

<body>

    <div class=\"blocpaiement\">

        <div class=\"infosrecap\">

            <div class=\"container_infosrecap\">

                <h2 id=\"titreRecap\">Récapitulatif de réservation</h2>

                {% for reservation in reservations %}
                <li><b>Reservation n° :</b> {{ reservation.id }}</li>
                <li><b>Date de réservation :</b> {{ reservation.DateReservation|date('d-m-y') }}</li>
                <li><b>Date d'entrée :</b> {{ reservation.DateEntree|date('d-m-y') }}</li>
                <li><b>Date de sortie :</b> {{ reservation.DateSortie|date('d-m-y') }}</li>
                <li><b>Chambre n° :</b> {{ reservation.chambre.id }}</li>
                <li><b>Tarif/nuit :</b> {{ reservation.chambre.tarif }} €</li>

            <div class=\"montantTotal\">

                <h4><b>TOTAL:  {{ nombreJours * reservation.chambre.tarif }} €</b></h4>
                {# autre methode pour calculer le nombre de jour entre deux date directement sur le twig #}
                {# {% set dateDiff = reservation.DateSortie|date('U') - reservation.DateEntree|date('U') %}
                {% set nbJours = dateDiff / (60 * 60 * 24) %}
                <li><b>Nombre de jours :</b> {{ nbJours }} </li> #}

            </div>

            </div>

            {% endfor %}

        </div>

        <div class=\"container\">

            <h2 id=\"titrePaiement\">Paiement par carte bancaire</h2>

            {{form_start(form)}}

            {{ form_row(form.name, {'label': 'Nom Prénom:'}) }}
            {{ form_row(form.card_number, {'label': 'N° de carte:'}) }}
            {{ form_row(form.date_expiration, {'label': 'Date d\\'expiration:', 'attr': {'placeholder': 'MM/YY'}}) }}
            {{ form_row(form.CVV, {'label': 'CVV:'}) }}

            <div class=\"bouton\">
                <button type=\"submit\">Payer</button>
            </div>

            {{ form_end(form) }}

            <h4 id=\"titreMethodePaiement\">Autres méthodes de paiement</h4>

            <div class=\"payment-options\">

                <a href=\"https://www.paypal.com\" target=\"_blank\" id=\"lienpaiement\"><img src=\"/img/Paypal-logo.png\"
                        alt=\"PayPal\" style=\"width: 100px; height: auto;\"></a>
                <a href=\"https://www.mastercard.com\" target=\"_blank\" id=\"lienpaiement\"><img
                        src=\"/img/MasterCard_Logo.svg.webp\" alt=\"MasterCard\" style=\"width: 100px; height: auto;\"></a>
                <a href=\"https://www.visa.com\" target=\"_blank\" id=\"lienpaiement\"><img src=\"/img/Old_Visa_Logo.svg.png\"
                        alt=\"Visa\" style=\"width: 100px; height: auto;\"></a>

            </div>

        </div>

    </div>

    <script src=\"{{asset('assets/js/paiement.js')}}\"></script>

</body>

{% endblock %}", "paiement/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\paiement\\index.html.twig");
    }
}
