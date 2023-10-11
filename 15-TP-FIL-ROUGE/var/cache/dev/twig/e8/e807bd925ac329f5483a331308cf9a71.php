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

/* chambre/chambreJunior.html.twig */
class __TwigTemplate_47db115aab24f444f8796fe337f48251 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/chambreJunior.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/chambreJunior.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/chambreJunior.html.twig", 1);
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

        echo "Chambre Suite Junior";
        
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
        echo "
<link rel=\"stylesheet\" href=\"/assets/css/chambre.css\">


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

<h1 id='titrePrincipal'> Chambres Junior</h1>
<h6 id=\"descriptionPage\">Nos suites Junior est l'incarnation du confort, du style et de l'espace. Conçue pour répondre aux besoins des voyageurs exigeants, cette suite offre un refuge paisible où vous pourrez vous détendre et vous ressourcer.</h6>

<div class=\"conteneur\">

    <ul id=\"listeChambre\">


        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 28
            echo "
        <div class=\"photo\">


            ";
            // line 33
            echo "            ";
            $context["image"] = twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 33, $this->source); })()));
            // line 34
            echo "            ";
            // line 35
            echo "
            ";
            // line 37
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./image/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 37, $this->source); })()))), "html", null, true);
            echo "\" alt=\"photo\" style=\"width: 100%; height: auto;\">

            <h1 id=\"titre\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "libelle", [], "any", false, false, false, 39), "html", null, true);
            echo "</h1>


            <div class=\"detailsEtreserver\">

            ";
            // line 45
            echo "            <button type=\"button\" id=\"button\" onclick=\"afficherDetails('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 45), "html", null, true);
            echo "')\"><img src=\"./img/bouton +.png\" alt=\"bouton+\" id=\"imageButton\"> Afficher les détails de la chambre</button>
            
            ";
            // line 48
            echo "            ";
            // line 49
            echo "            ";
            // line 50
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 51
                echo "            
            ";
                // line 53
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>
    
            ";
                // line 56
                echo "            ";
            } else {
                // line 57
                echo "
            <a href=\"/login\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>

            ";
            }
            // line 61
            echo "            
            </div>

            <ul id=\"details\">
                
                    ";
            // line 67
            echo "                    <div class=\"descriptionChambre\" id=\"description-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" >

                        <h6>N° ID de chambre : ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 69), "html", null, true);
            echo "</h6>
                        <p>Superficie : ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Superficie", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
                        <p>Tarif : ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "tarif", [], "any", false, false, false, 71), "html", null, true);
            echo " € / nuit(s)</p>
                        <p>Etat : ";
            // line 72
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "etat", [], "any", false, false, false, 72)) ? ("Libre") : ("Occupée"));
            echo "</p>

                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 75
                echo "
                        ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 76) == "Suite Junior")) {
                    // line 77
                    echo "                        <p>Type de chambre: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 77), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 79
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                    </div>


                    ";
            // line 86
            echo "                    <div class=\"options\" id='options-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 86), "html", null, true);
            echo "'>

                        <h6>Options: </h6>

                        <option value=\"vue-mer\">Vue sur mer : ";
            // line 90
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "vueSurMer", [], "any", false, false, false, 90)) ? ("oui") : ("non"));
            echo "</option>
                        <option value=\"chaines-carte\">Chaine à la carte: ";
            // line 91
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "ChaineaLaCarte", [], "any", false, false, false, 91)) ? ("oui") : ("non "));
            echo " </option>
                        <option value=\"climatisation\">Climatisation : ";
            // line 92
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "climatisation", [], "any", false, false, false, 92)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"tv-ecran-plat\">Télévision à écran plat : ";
            // line 93
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "televisionaEcranPlat", [], "any", false, false, false, 93)) ? ("oui") : ("non"));
            echo "</option>
                        <option value=\"telephone\">Téléphone : ";
            // line 94
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "telephone", [], "any", false, false, false, 94)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"chaines-satellite\">Chaînes satellite: ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "chainesSatellite", [], "any", false, false, false, 95)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"chaines-cable\">Chaînes du câble : ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "chainesSatellite", [], "any", false, false, false, 96)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"coffre-fort\">Coffre-fort : ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "CoffreFort", [], "any", false, false, false, 97)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"materiel-repassage\">Matériel de repassage : ";
            // line 98
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "MaterielDeRepassage", [], "any", false, false, false, 98)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"wifi-gratuit\">Wi-Fi Gratuit : ";
            // line 99
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "WifiGratuit", [], "any", false, false, false, 99)) ? ("oui") : ("non"));
            echo " </option>

                    </div> 
            </ul>

        </div>

        
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "
        <h6 colspan=\"5\" class=\"text-center\" style=\"color:red\">Veuillez-nous excuser, toutes nos chambres Junior sont réservées 🚫</h6>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
    </ul>

</div>

<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/affichageDetailsChambre.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chambre/chambreJunior.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 118,  318 => 113,  308 => 108,  294 => 99,  290 => 98,  286 => 97,  282 => 96,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  250 => 86,  244 => 81,  237 => 79,  231 => 77,  229 => 76,  226 => 75,  222 => 74,  217 => 72,  213 => 71,  209 => 70,  205 => 69,  199 => 67,  192 => 61,  186 => 57,  183 => 56,  177 => 53,  174 => 51,  171 => 50,  169 => 49,  167 => 48,  161 => 45,  153 => 39,  147 => 37,  144 => 35,  142 => 34,  139 => 33,  133 => 28,  127 => 27,  125 => 26,  113 => 15,  103 => 14,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chambre Suite Junior{% endblock %}


{% block stylesheets %}

<link rel=\"stylesheet\" href=\"/assets/css/chambre.css\">


{% endblock %}


{% block body %}


<h1 id='titrePrincipal'> Chambres Junior</h1>
<h6 id=\"descriptionPage\">Nos suites Junior est l'incarnation du confort, du style et de l'espace. Conçue pour répondre aux besoins des voyageurs exigeants, cette suite offre un refuge paisible où vous pourrez vous détendre et vous ressourcer.</h6>

<div class=\"conteneur\">

    <ul id=\"listeChambre\">


        {# chambre = clé #}
        {# chambres = 'chambres' dans le render qui contient la variable \$chambres #}
        {% for chambre in chambres %}

        <div class=\"photo\">


            {# génère une image aléatoire contenu dans le tableau #}
            {% set image = random(images) %}
            {# {{ dump(image) }} #}

            {# ~ concatenation #}
            <img src=\"{{ asset('./image/' ~ image) }}\" alt=\"photo\" style=\"width: 100%; height: auto;\">

            <h1 id=\"titre\">{{chambre.libelle}}</h1>


            <div class=\"detailsEtreserver\">

            {# lors du click on va faire appel à la fonction avec en parametre l'id de la chambre #}
            <button type=\"button\" id=\"button\" onclick=\"afficherDetails('{{ chambre.Id }}')\"><img src=\"./img/bouton +.png\" alt=\"bouton+\" id=\"imageButton\"> Afficher les détails de la chambre</button>
            
            {# condition si l'utilisateur est connecté alors renvoi vers la page panier #}
            {# is_granted: vérifier si un certain accès (une autorisation) est accordé à l'utilisateur actuel dans l'application. #}
            {# \"ROLE_USER\" : vérifier si l'utilisateur actuel possède le rôle \"ROLE_USER\" #}
            {% if is_granted('ROLE_USER') %}
            
            {# bouton pour reserver avec en paremetre l'id de la chambre #}
            <a href=\"{{ path('cart_add', {'id': chambre.Id}) }}\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>
    
            {# s'il n'est pas connecté alors renvoi vers la page login #}
            {% else %}

            <a href=\"/login\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>

            {% endif %}
            
            </div>

            <ul id=\"details\">
                
                    {# Pour chaque tour de boucle, la div va prendre comme id le numero id de la chambre #}
                    <div class=\"descriptionChambre\" id=\"description-{{ chambre.Id }}\" >

                        <h6>N° ID de chambre : {{chambre.Id}}</h6>
                        <p>Superficie : {{chambre.Superficie}}</p>
                        <p>Tarif : {{chambre.tarif}} € / nuit(s)</p>
                        <p>Etat : {{ chambre.etat ? 'Libre' : 'Occupée' }}</p>

                        {% for categorie in categories %}

                        {% if categorie.libelle == 'Suite Junior'%}
                        <p>Type de chambre: {{categorie.libelle}}</p>
                        {% endif %}

                        {% endfor %}

                    </div>


                    {# Pour chaque tour de boucle, la div va prendre comme id le numero id de la chambre #}
                    <div class=\"options\" id='options-{{ chambre.Id }}'>

                        <h6>Options: </h6>

                        <option value=\"vue-mer\">Vue sur mer : {{chambre.vueSurMer ? 'oui' : 'non' }}</option>
                        <option value=\"chaines-carte\">Chaine à la carte: {{ chambre.ChaineaLaCarte ? 'oui' : 'non '}} </option>
                        <option value=\"climatisation\">Climatisation : {{ chambre.climatisation ? 'oui' : 'non' }} </option>
                        <option value=\"tv-ecran-plat\">Télévision à écran plat : {{ chambre.televisionaEcranPlat ? 'oui' : 'non' }}</option>
                        <option value=\"telephone\">Téléphone : {{ chambre.telephone ? 'oui' : 'non'}} </option>
                        <option value=\"chaines-satellite\">Chaînes satellite: {{ chambre.chainesSatellite ? 'oui' : 'non'}} </option>
                        <option value=\"chaines-cable\">Chaînes du câble : {{ chambre.chainesSatellite ? 'oui' : 'non'}} </option>
                        <option value=\"coffre-fort\">Coffre-fort : {{ chambre.CoffreFort ? 'oui' : 'non'}} </option>
                        <option value=\"materiel-repassage\">Matériel de repassage : {{ chambre.MaterielDeRepassage ? 'oui' : 'non'}} </option>
                        <option value=\"wifi-gratuit\">Wi-Fi Gratuit : {{ chambre.WifiGratuit ? 'oui' : 'non'}} </option>

                    </div> 
            </ul>

        </div>

        
        {% else %}

        <h6 colspan=\"5\" class=\"text-center\" style=\"color:red\">Veuillez-nous excuser, toutes nos chambres Junior sont réservées 🚫</h6>


        {% endfor %}

    </ul>

</div>

<script src=\"{{asset('assets/js/affichageDetailsChambre.js')}}\"></script>

{% endblock %}", "chambre/chambreJunior.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\chambre\\chambreJunior.html.twig");
    }
}
