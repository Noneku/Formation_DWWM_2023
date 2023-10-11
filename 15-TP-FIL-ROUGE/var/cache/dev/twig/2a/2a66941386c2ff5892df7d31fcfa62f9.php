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

/* home/room.html.twig */
class __TwigTemplate_010fcfb95a9cd795203297e6475bea51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/room.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/room.html.twig"));

        // line 2
        echo "
<div class=\"conteneurHistoireViceCity\">

  <div class=\"photo\">
    <img src=\"img/reception_vice_city.jpg\" alt=\"receptionVCH\">
  </div>

  <div class=\"texte\">

    <p style=\"font-size: 20px;\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("creation.titre"), "html", null, true);
        echo "</p>

    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("creation.texte"), "html", null, true);
        echo "</p>

  </div>

</div>


";
        // line 21
        echo "
<div class=\"caroussel\">

  <div class=\"titrecaroussel\">
    <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre.titre1"), "html", null, true);
        echo "</h2>
  </div>

  <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">

    <div class=\"carousel-inner\">

      <div class=\"carousel-item active\">
        <a href=\"/deluxe\"><img src=\"img/chambre.png\" class=\"d-block w-100\" alt=\"chambreDeluxe\"></a>
        <h2 class=\"titr\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre1"), "html", null, true);
        echo "</h2>
        <p class=\"para\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caroussel.titre1"), "html", null, true);
        echo "</p>
      </div>

      <div class=\"carousel-item\">
        <a href=\"/superieure\"><img src=\"img/chambre1.png\" class=\"d-block w-100\" alt=\"chambreSuperieure\"></a>
        <h2 class=\"titr\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre2"), "html", null, true);
        echo "</h2>
        <p class=\"para\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caroussel.titre1"), "html", null, true);
        echo "</p>
      </div>


      <div class=\"carousel-item\">
        <a href=\"/junior\"><img src=\"img/chambre2.png\" class=\"d-block w-100\" alt=\"SuiteJunior\"></a>
        <h2 class=\"titr\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre3"), "html", null, true);
        echo "</h2>
        <p class=\"para\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caroussel.titre1"), "html", null, true);
        echo "</p>
      </div>

    </div>

    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>

    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>

    <p class=\"poi\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("caroussel.titre2"), "html", null, true);
        echo "</p>

    ";
        // line 68
        echo "
  </div>

</div>


";
        // line 75
        echo "
<div class=\"localisationVCH\">

  <div class=\"titrePosition\">
    <h2>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre.titre2"), "html", null, true);
        echo "</h2>
  </div>

  <div class=\"conteneurMaps\">

    <div class=\"maps\">
      <ul>
        <li>Vice City Hotel</li>
        <li>123 Ocean Boulevard</li>
        <li>Miami, FL 33123</li>
        <li>USA</li>
      </ul>

      <iframe
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.39567728035!2d-80.31186043936601!3d25.782538873740435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Floride%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1696860777324!5m2!1sfr!2sfr\"
        width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

    </div>

  </div>
  
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 79,  147 => 75,  139 => 68,  134 => 63,  116 => 48,  112 => 47,  103 => 41,  99 => 40,  91 => 35,  87 => 34,  75 => 25,  69 => 21,  59 => 13,  54 => 11,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# PARTIE CREATION DE L'HOTEL #}

<div class=\"conteneurHistoireViceCity\">

  <div class=\"photo\">
    <img src=\"img/reception_vice_city.jpg\" alt=\"receptionVCH\">
  </div>

  <div class=\"texte\">

    <p style=\"font-size: 20px;\">{{'creation.titre'|trans }}</p>

    <p>{{'creation.texte'|trans }}</p>

  </div>

</div>


{# PARTIE CAROUSSEL #}

<div class=\"caroussel\">

  <div class=\"titrecaroussel\">
    <h2>{{ 'titre.titre1'|trans }}</h2>
  </div>

  <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">

    <div class=\"carousel-inner\">

      <div class=\"carousel-item active\">
        <a href=\"/deluxe\"><img src=\"img/chambre.png\" class=\"d-block w-100\" alt=\"chambreDeluxe\"></a>
        <h2 class=\"titr\">{{ 'navbar.chambre1'|trans }}</h2>
        <p class=\"para\">{{ 'caroussel.titre1'|trans }}</p>
      </div>

      <div class=\"carousel-item\">
        <a href=\"/superieure\"><img src=\"img/chambre1.png\" class=\"d-block w-100\" alt=\"chambreSuperieure\"></a>
        <h2 class=\"titr\">{{ 'navbar.chambre2'|trans }}</h2>
        <p class=\"para\">{{ 'caroussel.titre1'|trans }}</p>
      </div>


      <div class=\"carousel-item\">
        <a href=\"/junior\"><img src=\"img/chambre2.png\" class=\"d-block w-100\" alt=\"SuiteJunior\"></a>
        <h2 class=\"titr\">{{ 'navbar.chambre3'|trans }}</h2>
        <p class=\"para\">{{ 'caroussel.titre1'|trans }}</p>
      </div>

    </div>

    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>

    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>

    <p class=\"poi\">{{ 'caroussel.titre2'|trans }}</p>

    {# <div class=\"azer\">
      <button class=\"btna\">EXPLORATION</button>
    </div> #}

  </div>

</div>


{# PARTIE GOOGLE MAPS #}

<div class=\"localisationVCH\">

  <div class=\"titrePosition\">
    <h2>{{ 'titre.titre2'|trans }}</h2>
  </div>

  <div class=\"conteneurMaps\">

    <div class=\"maps\">
      <ul>
        <li>Vice City Hotel</li>
        <li>123 Ocean Boulevard</li>
        <li>Miami, FL 33123</li>
        <li>USA</li>
      </ul>

      <iframe
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.39567728035!2d-80.31186043936601!3d25.782538873740435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Floride%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1696860777324!5m2!1sfr!2sfr\"
        width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

    </div>

  </div>
  
</div>", "home/room.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\home\\room.html.twig");
    }
}
