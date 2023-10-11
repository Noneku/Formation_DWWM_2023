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

/* Navbar/nav.html.twig */
class __TwigTemplate_c5ec655348a0c59904a5dd3f523ad305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Navbar/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Navbar/nav.html.twig"));

        // line 1
        echo "
";
        // line 13
        echo "

<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><img src=\"/img/VCH-removebg-preview_1.png\" alt=\"\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\"
      aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">

        <li class=\"nav-item dropdown\">
          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"#\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.hebergement"), "html", null, true);
        echo "</a>
          <div class=\"dropdown-menu\">


            <a class=\"  dropdown-item\" href=\"/deluxe\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre1"), "html", null, true);
        echo "</a>
            <a class=\"  dropdown-item\" href=\"/superieure\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre2"), "html", null, true);
        echo "</a>
            <a class=\"  dropdown-item\" href=\"/junior\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.chambre3"), "html", null, true);
        echo "</a>

          </div>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/vister/lhotel\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.visite"), "html", null, true);
        echo "</a>
        </li>

      </ul>
      <ul class=\"navbar-nav\">

        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" id=\"locales\">
            <img class=\"bl\" src=\"/img/Vector (8).png\" alt=\"\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
        echo "</span>
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"locales\" id=\"blocLangue\">

            <div class=\"divGB\">

              <div class=\"lienLangue\">
                <a class=\"dropdown-item\" id='lienLangague'
                  href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_traduction", ["_locale" => "en"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.english"), "html", null, true);
        echo "</a>
              </div>

              <div class=\"photoLangue\">
                <img class=\"bl\" src=\"/img/england-150397_1280.png\" id='GB' alt=\"GB\">
              </div>

            </div>

            <div class=\"divFR\">

              <div class=\"lienLangue\">
                <a class=\"dropdown-item\" id='lienLangague'
                  href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_traduction", ["_locale" => "fr"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.french"), "html", null, true);
        echo "</a>
              </div>

              <div class=\"photoLangue\">
                <img class=\"bl\" src=\"/img/drapeau_fr.png\" id='FR' alt=\"FR\">
              </div>

            </div>

        </li>


        ";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 84
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/admin/dashboard\"><img class=\"bl\" src=\"/img/Vector (2).png\" alt=\"\">Admin</a>

          ";
        }
        // line 88
        echo "

          ";
        // line 90
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link active \" href=\"/login\"><img class=\"bl\" src=\"/img/Vector.png\" alt=\"\">";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.connexion"), "html", null, true);
            // line 93
            echo "</a>
        </li>
        ";
        } else {
            // line 96
            echo "        <li class=\"nav-item dropdown\">
          ";
            // line 97
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "roles", [], "any", false, false, false, 97))) {
                // line 98
                echo "          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"/login\">
            <img class=\"bl\" src=\"/img/Vector.png\" alt=\"\">";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.admin"), "html", null, true);
                echo "
          </a>
          ";
            } else {
                // line 103
                echo "          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"/login\">
            <img class=\"bl\" src=\"/img/Vector.png\" alt=\"\"> ";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.user"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "prenom", [], "any", false, false, false, 105), "html", null, true);
                echo "
          </a>
          ";
            }
            // line 108
            echo "          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"/user\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.profil"), "html", null, true);
            echo "</a>
            <a class=\"dropdown-item\" href=\"/logout\" style=\"color:red\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.deconnexion"), "html", null, true);
            echo " ❌</a>
          </div>
        </li>
        ";
        }
        // line 114
        echo "

        ";
        // line 116
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116)) {
            // line 117
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/contact\"><img src=\"/img/Vector (3).png\" alt=\"\">";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.contact"), "html", null, true);
            // line 119
            echo "</a>
        </li>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 122
            echo "        <li class=\"nav-item\">
          ";
            // line 123
            if (!twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "roles", [], "any", false, false, false, 123))) {
                // line 124
                echo "          <a class=\"nav-link active\" href=\"/cart\"><img class=\"bl\" src=\"/img/Vector (1).png\" alt=\"\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.reservation"), "html", null, true);
                // line 125
                echo "</a>

          ";
            }
            // line 128
            echo "        </li>
        ";
        }
        // line 130
        echo "      </ul>
    </div>
  </div>

</nav>


";
        // line 147
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Navbar/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 147,  244 => 130,  240 => 128,  235 => 125,  232 => 124,  230 => 123,  227 => 122,  222 => 119,  220 => 118,  217 => 117,  215 => 116,  211 => 114,  204 => 110,  200 => 109,  197 => 108,  189 => 105,  185 => 103,  179 => 100,  175 => 98,  173 => 97,  170 => 96,  165 => 93,  163 => 92,  160 => 91,  158 => 90,  154 => 88,  148 => 84,  146 => 83,  129 => 71,  111 => 58,  99 => 49,  86 => 39,  77 => 33,  73 => 32,  69 => 31,  62 => 27,  46 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# <!-- Spinner Start -->

<div id=\"spinner\" class=\"spinner-overlay\">
  <div class=\"spinner\">
    <div class=\"spinner-grow text-primary\" role=\"status\">
      <span class=\"sr-only\">Chargement en cours...</span>
    </div>
  </div>
</div>

<!-- Spinner End --> #}


<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><img src=\"/img/VCH-removebg-preview_1.png\" alt=\"\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\"
      aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">

        <li class=\"nav-item dropdown\">
          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"#\">{{ 'navbar.hebergement'|trans }}</a>
          <div class=\"dropdown-menu\">


            <a class=\"  dropdown-item\" href=\"/deluxe\">{{ 'navbar.chambre1'|trans }}</a>
            <a class=\"  dropdown-item\" href=\"/superieure\">{{ 'navbar.chambre2'|trans }}</a>
            <a class=\"  dropdown-item\" href=\"/junior\">{{ 'navbar.chambre3'|trans }}</a>

          </div>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/vister/lhotel\">{{ 'navbar.visite'|trans }}</a>
        </li>

      </ul>
      <ul class=\"navbar-nav\">

        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" id=\"locales\">
            <img class=\"bl\" src=\"/img/Vector (8).png\" alt=\"\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"locales\" id=\"blocLangue\">

            <div class=\"divGB\">

              <div class=\"lienLangue\">
                <a class=\"dropdown-item\" id='lienLangague'
                  href=\"{{ path('app_traduction', {'_locale': 'en'}) }}\">{{'menu.english'|trans }}</a>
              </div>

              <div class=\"photoLangue\">
                <img class=\"bl\" src=\"/img/england-150397_1280.png\" id='GB' alt=\"GB\">
              </div>

            </div>

            <div class=\"divFR\">

              <div class=\"lienLangue\">
                <a class=\"dropdown-item\" id='lienLangague'
                  href=\"{{ path('app_traduction', {'_locale': 'fr'}) }}\">{{'menu.french'|trans }}</a>
              </div>

              <div class=\"photoLangue\">
                <img class=\"bl\" src=\"/img/drapeau_fr.png\" id='FR' alt=\"FR\">
              </div>

            </div>

        </li>


        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/admin/dashboard\"><img class=\"bl\" src=\"/img/Vector (2).png\" alt=\"\">Admin</a>

          {% endif %}


          {% if not app.user %}
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link active \" href=\"/login\"><img class=\"bl\" src=\"/img/Vector.png\" alt=\"\">{{
            'navbar.connexion'|trans }}</a>
        </li>
        {% else %}
        <li class=\"nav-item dropdown\">
          {% if 'ROLE_ADMIN' in app.user.roles %}
          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"/login\">
            <img class=\"bl\" src=\"/img/Vector.png\" alt=\"\">{{ 'navbar.admin'|trans }}
          </a>
          {% else %}
          <a class=\"nav-link active dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
            aria-expanded=\"false\" href=\"/login\">
            <img class=\"bl\" src=\"/img/Vector.png\" alt=\"\"> {{ 'navbar.user'|trans }} {{ app.user.prenom }}
          </a>
          {% endif %}
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"/user\">{{ 'navbar.profil'|trans }}</a>
            <a class=\"dropdown-item\" href=\"/logout\" style=\"color:red\">{{ 'navbar.deconnexion'|trans }} ❌</a>
          </div>
        </li>
        {% endif %}


        {% if not app.user %}
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/contact\"><img src=\"/img/Vector (3).png\" alt=\"\">{{ 'navbar.contact'|trans
            }}</a>
        </li>
        {% elseif is_granted('ROLE_USER') %}
        <li class=\"nav-item\">
          {% if 'ROLE_ADMIN' not in app.user.roles %}
          <a class=\"nav-link active\" href=\"/cart\"><img class=\"bl\" src=\"/img/Vector (1).png\" alt=\"\">{{
            'navbar.reservation'|trans }}</a>

          {% endif %}
        </li>
        {% endif %}
      </ul>
    </div>
  </div>

</nav>


{# //   // Spinner
//   document.addEventListener(\"DOMContentLoaded\", function () {
//     var spinner = document.getElementById(\"spinner\");
//     setTimeout(function () {
//       if (spinner) {
//         spinner.style.display = \"none\";
//       }
//     }, 000); // Masquez le spinner après 2 seconde
//   }); 
/ #}

", "Navbar/nav.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\Navbar\\nav.html.twig");
    }
}
