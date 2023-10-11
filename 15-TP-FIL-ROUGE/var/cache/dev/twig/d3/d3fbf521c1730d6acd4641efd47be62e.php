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

/* cart/index.html.twig */
class __TwigTemplate_50dc5cdc45412cd178264a957e3a2df9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Reservation";
        
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/reservation.css\">
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
<div class=\"reservationChoix\">

    <div class=\"mareservation\">
        <h2><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\">Votre selection</a></h2>
    </div>

    <div class=\"mesreservations\">
        <h2><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">Mes reservations</h2></a>
    </div>

</div>

<div class=\"conteneur\">


    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["infoschambre"]) {
            // line 29
            echo "
    <div class=\"blocInfos\">

        <div class=\"infosUser\">

            <div class=\"blocTexte\">

                <ul>
                    <h2>INFORMATIONS CLIENT</h2>
                    <br>
                    <br>

                    <li><h4>Nom</h4></li>
                    <li>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
                    <li><h4>Prenom</h4></li>
                    <li>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</li>
                    <li><h4>Adresse e-mail</h4></li>
                    <li>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</li>
                    <li><h4>Numéro de téléphone</h4></li>
                    <li>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "telephone", [], "any", false, false, false, 48), "html", null, true);
            echo "</li>
                </ul>
            </div>
        </div>

        <div class='espace'></div>

        <div class=\"infosService\">

            <div class=\"blocTexte\">
                
                <ul>
                    <h4>Frais annulation</h4>

                    <li>20% du montant total</li>
                    <br>
                    <br>
                    <li><h4>Service gratuit fournit</h4></li>
                    <li>Nettoyage chambre 7j/7</li>
                    <li>Petit déjeuner</li>
                    <li>Salle de sport</li>
                    <li>Piscine</li>
                    <li>SPA</li>
                    <li>Pressing</li>
                </ul>
            </div>
        </div>

    </div>



    <div class='blocFormulaire'>

        <div class=\"infoschambre\">
            <h4>Recaptitulatif des informations de la chambre</h4><br>

            <ul>
                <li>Chambre n° ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infoschambre"], "chambre", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
            echo "</li>
                <li>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infoschambre"], "chambre", [], "any", false, false, false, 87), "libelle", [], "any", false, false, false, 87), "html", null, true);
            echo "</li>
                <li>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infoschambre"], "chambre", [], "any", false, false, false, 88), "superficie", [], "any", false, false, false, 88), "html", null, true);
            echo "</li>
                <li id=\"tarif\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infoschambre"], "chambre", [], "any", false, false, false, 89), "tarif", [], "any", false, false, false, 89), "html", null, true);
            echo " €/nuit</li>
            </ul>
        </div>

        <div class=\"formReservation\">

            ";
            // line 95
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
            echo "

            <h4>Date de reservation: ";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datereservation"]) || array_key_exists("datereservation", $context) ? $context["datereservation"] : (function () { throw new RuntimeError('Variable "datereservation" does not exist.', 97, $this->source); })()), "d-m-Y"), "html", null, true);
            echo " </h4>
            <br>
            <br>

            ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "DateEntree", [], "any", false, false, false, 101), 'label', ["label" => "Date d'entrée"]);
            echo "
            ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "DateEntree", [], "any", false, false, false, 102), 'widget');
            echo "
            ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "DateEntree", [], "any", false, false, false, 103), 'errors');
            echo "

            ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "DateSortie", [], "any", false, false, false, 105), 'label', ["label" => "Date de sortie"]);
            echo "
            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "DateSortie", [], "any", false, false, false, 106), 'widget');
            echo "
            ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "DateSortie", [], "any", false, false, false, 107), 'errors');
            echo "

            <p id=\"jours\" style=\"color: goldenrod\"></p>

        </div>

        <div class='espace'></div>

        <div class=\"montantTotal\">
            
            <h4>MONTANT TOTAL TTC: </h4>

            <h5 id=\"total\"></h5>

        </div>

        <div class=\"blocButton\">
            <button type=\"submit\" class=\"btn btn-outline-success\"><b>Confirmer votre selection</b></button>
            <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infoschambre"], "chambre", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\"><b>Vider ma selection</b></a>
        </div>

        ";
            // line 128
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
            echo "

    </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "
    <h2 colspan=\"5\" class=\"text-center\">Votre panier est vide</h2>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infoschambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
</div>


<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/affichageReservation.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 141,  310 => 137,  301 => 133,  291 => 128,  285 => 125,  264 => 107,  260 => 106,  256 => 105,  251 => 103,  247 => 102,  243 => 101,  236 => 97,  231 => 95,  222 => 89,  218 => 88,  214 => 87,  210 => 86,  169 => 48,  164 => 46,  159 => 44,  154 => 42,  139 => 29,  134 => 28,  123 => 20,  116 => 16,  110 => 12,  100 => 11,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/reservation.css\">
{% endblock %}


{% block body %}

<div class=\"reservationChoix\">

    <div class=\"mareservation\">
        <h2><a href=\"{{ path('reservation') }}\">Votre selection</a></h2>
    </div>

    <div class=\"mesreservations\">
        <h2><a href=\"{{ path('app_reservation_index') }}\">Mes reservations</h2></a>
    </div>

</div>

<div class=\"conteneur\">


    {% for infoschambre in dataPanier %}

    <div class=\"blocInfos\">

        <div class=\"infosUser\">

            <div class=\"blocTexte\">

                <ul>
                    <h2>INFORMATIONS CLIENT</h2>
                    <br>
                    <br>

                    <li><h4>Nom</h4></li>
                    <li>{{ app.user.prenom }}</li>
                    <li><h4>Prenom</h4></li>
                    <li>{{ app.user.nom }}</li>
                    <li><h4>Adresse e-mail</h4></li>
                    <li>{{ app.user.email}}</li>
                    <li><h4>Numéro de téléphone</h4></li>
                    <li>{{ app.user.telephone}}</li>
                </ul>
            </div>
        </div>

        <div class='espace'></div>

        <div class=\"infosService\">

            <div class=\"blocTexte\">
                
                <ul>
                    <h4>Frais annulation</h4>

                    <li>20% du montant total</li>
                    <br>
                    <br>
                    <li><h4>Service gratuit fournit</h4></li>
                    <li>Nettoyage chambre 7j/7</li>
                    <li>Petit déjeuner</li>
                    <li>Salle de sport</li>
                    <li>Piscine</li>
                    <li>SPA</li>
                    <li>Pressing</li>
                </ul>
            </div>
        </div>

    </div>



    <div class='blocFormulaire'>

        <div class=\"infoschambre\">
            <h4>Recaptitulatif des informations de la chambre</h4><br>

            <ul>
                <li>Chambre n° {{infoschambre.chambre.id}}</li>
                <li>{{infoschambre.chambre.libelle}}</li>
                <li>{{infoschambre.chambre.superficie}}</li>
                <li id=\"tarif\">{{infoschambre.chambre.tarif}} €/nuit</li>
            </ul>
        </div>

        <div class=\"formReservation\">

            {{form_start(form)}}

            <h4>Date de reservation: {{datereservation|date('d-m-Y')}} </h4>
            <br>
            <br>

            {{form_label(form.DateEntree, 'Date d\\'entrée') }}
            {{form_widget(form.DateEntree) }}
            {{ form_errors(form.DateEntree) }}

            {{form_label(form.DateSortie, 'Date de sortie') }}
            {{form_widget(form.DateSortie) }}
            {{ form_errors(form.DateSortie) }}

            <p id=\"jours\" style=\"color: goldenrod\"></p>

        </div>

        <div class='espace'></div>

        <div class=\"montantTotal\">
            
            <h4>MONTANT TOTAL TTC: </h4>

            <h5 id=\"total\"></h5>

        </div>

        <div class=\"blocButton\">
            <button type=\"submit\" class=\"btn btn-outline-success\"><b>Confirmer votre selection</b></button>
            <a href=\"{{ path('reservation_delete', {'id': infoschambre.chambre.id}) }}\" class=\"btn btn-outline-danger\"><b>Vider ma selection</b></a>
        </div>

        {{form_end(form)}}

    </div>

    {% else %}

    <h2 colspan=\"5\" class=\"text-center\">Votre panier est vide</h2>

    {% endfor %}

</div>


<script src=\"{{asset('assets/js/affichageReservation.js')}}\"></script>

{% endblock %}", "cart/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\cart\\index.html.twig");
    }
}
