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

/* chambre/chambreDeluxe.html.twig */
class __TwigTemplate_57da1d443541e518d7d2db3af4577ae0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/chambreDeluxe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/chambreDeluxe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/chambreDeluxe.html.twig", 1);
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

        echo "Chambre Double Deluxe";
        
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
        echo "<link rel=\"stylesheet\" href=\"/assets/css/chambre.css\">
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

<h1 id='titrePrincipal'> Chambres Deluxe</h1>
<h6 id=\"descriptionPage\"> Plongez dans le luxe et le confort de notre chambre Deluxe. Conçue pour satisfaire les voyageurs les plus exigeants, cette chambre offre un espace élégant et des équipements haut de gamme pour rendre votre séjour inoubliable.</h6>

<div class=\"conteneur\">

    <ul id=\"listeChambre\">


        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 25
            echo "
        <div class=\"photo\">


            ";
            // line 30
            echo "            ";
            $context["image"] = twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 30, $this->source); })()));
            // line 31
            echo "            ";
            // line 32
            echo "
            ";
            // line 34
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("./image/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 34, $this->source); })()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "libelle", [], "any", false, false, false, 34), "html", null, true);
            echo "\" style=\"width: 100%; height: auto;\">

            <h1 id=\"titre\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "libelle", [], "any", false, false, false, 36), "html", null, true);
            echo "</h1>


            <div class=\"detailsEtreserver\">

            ";
            // line 42
            echo "            <button type=\"button\" id=\"button\" onclick=\"afficherDetails('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 42), "html", null, true);
            echo "')\"><img src=\"./img/bouton +.png\" alt=\"bouton+\" id=\"imageButton\"> Afficher les détails de la chambre</button>
            
            
            ";
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            // line 48
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 49
                echo "            
            ";
                // line 51
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>
    
            ";
                // line 54
                echo "            ";
            } else {
                // line 55
                echo "
            <a href=\"/login\" class=\"btn btn-outline-warning\"><b>Réserver</b></a>

            ";
            }
            // line 59
            echo "
            </div>

            <ul id=\"details\">
                
                    ";
            // line 65
            echo "                    <div class=\"descriptionChambre\" id=\"description-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" >

                        <h6>N° ID de chambre : ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 67), "html", null, true);
            echo "</h6>
                        <p>Superficie : ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Superficie", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                        <p>Tarif : ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "tarif", [], "any", false, false, false, 69), "html", null, true);
            echo " € / nuit(s)</p>
                        <p>Etat : ";
            // line 70
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "etat", [], "any", false, false, false, 70)) ? ("Libre") : ("Occupée"));
            echo "</p>
                        
                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 73
                echo "
                        ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 74) == "Chambre double deluxe")) {
                    // line 75
                    echo "
                        <p>Type de chambre: ";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 76), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 78
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
                    </div>


                    ";
            // line 85
            echo "                    <div class=\"options\" id='options-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "Id", [], "any", false, false, false, 85), "html", null, true);
            echo "'>

                        <h6>Options: </h6>

                        <option value=\"vue-mer\">Vue sur mer : ";
            // line 89
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "vueSurMer", [], "any", false, false, false, 89)) ? ("oui") : ("non"));
            echo "</option>
                        <option value=\"chaines-carte\">Chaine à la carte: ";
            // line 90
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "ChaineaLaCarte", [], "any", false, false, false, 90)) ? ("oui") : ("non "));
            echo " </option>
                        <option value=\"climatisation\">Climatisation : ";
            // line 91
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "climatisation", [], "any", false, false, false, 91)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"tv-ecran-plat\">Télévision à écran plat : ";
            // line 92
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "televisionaEcranPlat", [], "any", false, false, false, 92)) ? ("oui") : ("non"));
            echo "</option>
                        <option value=\"telephone\">Téléphone : ";
            // line 93
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "telephone", [], "any", false, false, false, 93)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"chaines-satellite\">Chaînes satellite: ";
            // line 94
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "chainesSatellite", [], "any", false, false, false, 94)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"chaines-cable\">Chaînes du câble : ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "chainesSatellite", [], "any", false, false, false, 95)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"coffre-fort\">Coffre-fort : ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "CoffreFort", [], "any", false, false, false, 96)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"materiel-repassage\">Matériel de repassage : ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "MaterielDeRepassage", [], "any", false, false, false, 97)) ? ("oui") : ("non"));
            echo " </option>
                        <option value=\"wifi-gratuit\">Wi-Fi Gratuit : ";
            // line 98
            echo ((twig_get_attribute($this->env, $this->source, $context["chambre"], "WifiGratuit", [], "any", false, false, false, 98)) ? ("oui") : ("non"));
            echo " </option>

                    </div> 
            </ul>

        </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "
        <h6 colspan=\"5\" class=\"text-center\" style=\"color:red\">Veuillez-nous excuser, toutes nos chambres Deluxe sont réservées 🚫</h6>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
    </ul>

</div>

<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/affichageDetailsChambre.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chambre/chambreDeluxe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 115,  318 => 110,  309 => 106,  296 => 98,  292 => 97,  288 => 96,  284 => 95,  280 => 94,  276 => 93,  272 => 92,  268 => 91,  264 => 90,  260 => 89,  252 => 85,  246 => 80,  239 => 78,  234 => 76,  231 => 75,  229 => 74,  226 => 73,  222 => 72,  217 => 70,  213 => 69,  209 => 68,  205 => 67,  199 => 65,  192 => 59,  186 => 55,  183 => 54,  177 => 51,  174 => 49,  171 => 48,  169 => 47,  167 => 46,  160 => 42,  152 => 36,  144 => 34,  141 => 32,  139 => 31,  136 => 30,  130 => 25,  124 => 24,  122 => 23,  110 => 12,  100 => 11,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chambre Double Deluxe{% endblock %}


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/assets/css/chambre.css\">
{% endblock %}


{% block body %}


<h1 id='titrePrincipal'> Chambres Deluxe</h1>
<h6 id=\"descriptionPage\"> Plongez dans le luxe et le confort de notre chambre Deluxe. Conçue pour satisfaire les voyageurs les plus exigeants, cette chambre offre un espace élégant et des équipements haut de gamme pour rendre votre séjour inoubliable.</h6>

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
            <img src=\"{{ asset('./image/' ~ image) }}\" alt=\"{{chambre.libelle}}\" style=\"width: 100%; height: auto;\">

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

                        {% if categorie.libelle == 'Chambre double deluxe'%}

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

        <h6 colspan=\"5\" class=\"text-center\" style=\"color:red\">Veuillez-nous excuser, toutes nos chambres Deluxe sont réservées 🚫</h6>

        {% endfor %}

    </ul>

</div>

<script src=\"{{asset('assets/js/affichageDetailsChambre.js')}}\"></script>

{% endblock %}", "chambre/chambreDeluxe.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\chambre\\chambreDeluxe.html.twig");
    }
}
