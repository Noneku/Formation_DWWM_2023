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

/* vister_lhotel/visite.html.twig */
class __TwigTemplate_275b63c4250783668d21bb6f0d05fe3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vister_lhotel/visite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vister_lhotel/visite.html.twig"));

        // line 1
        echo "<div class=\"card text-bg-dark\">
    <img src=\"/img/palm-trees-at-night.png\" class=\"card-img\" alt=\"image de welcome\">
    <div class=\"card-img-overlay\">
        <div class=\"container\">
            <h5 class=\"card-titleo\">BIENVENUE À</h5>
            <h3 class=\"card-title1\">VICE CITY </h3>
            <h5 class=\"card-title2\">HOTEL</h5>
        </div>
        <p class=\"card-text1\">Réservez votre séjour et profitez d'un luxe redéfini à des tarifs des plus abordables.</p>
    </div>
    
    
</div>
<div class=\"arrow-down\">
<button id=\"scroll-button\" style=\"cursor: pointer;\"><span class=\"sp\">Cliquer pour visiter</span></button>
</div>
<div class=\"image-container\" id=\"image-container\">
    <ul>
        <li class=\"li\"><img class=\"img\" src=\"/img/fitness_centre-2 1.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/polsideBar.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/spa.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/swimingpool.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/restaurant.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/laundorry.png\" alt=\"\"></li>
    
    </ul> 
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "vister_lhotel/visite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card text-bg-dark\">
    <img src=\"/img/palm-trees-at-night.png\" class=\"card-img\" alt=\"image de welcome\">
    <div class=\"card-img-overlay\">
        <div class=\"container\">
            <h5 class=\"card-titleo\">BIENVENUE À</h5>
            <h3 class=\"card-title1\">VICE CITY </h3>
            <h5 class=\"card-title2\">HOTEL</h5>
        </div>
        <p class=\"card-text1\">Réservez votre séjour et profitez d'un luxe redéfini à des tarifs des plus abordables.</p>
    </div>
    
    
</div>
<div class=\"arrow-down\">
<button id=\"scroll-button\" style=\"cursor: pointer;\"><span class=\"sp\">Cliquer pour visiter</span></button>
</div>
<div class=\"image-container\" id=\"image-container\">
    <ul>
        <li class=\"li\"><img class=\"img\" src=\"/img/fitness_centre-2 1.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/polsideBar.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/spa.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/swimingpool.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/restaurant.png\" alt=\"\"></li>
        <li class=\"li\"><img class=\"img\" src=\"/img/laundorry.png\" alt=\"\"></li>
    
    </ul> 
</div>

", "vister_lhotel/visite.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\vister_lhotel\\visite.html.twig");
    }
}
