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

/* chambres/show.html.twig */
class __TwigTemplate_a2b3e4a1edd5c24229f4dc348feaae33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambres/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambres/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambres/show.html.twig", 1);
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

        echo "Chambre";
        
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
        echo "    <h1>Chambre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 16, $this->source); })()), "tarif", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Superficie</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 20, $this->source); })()), "superficie", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>VueSurMer</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 24, $this->source); })()), "vueSurMer", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chaine_à_laCarte</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 28, $this->source); })()), "ChaineàLaCarte", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 32, $this->source); })()), "climatisation", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Television_à_ecranPlat</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 36, $this->source); })()), "televisionàEcranPlat", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ChainesSatellite</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 44, $this->source); })()), "chainesSatellite", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ChainesDuCable</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 48, $this->source); })()), "chainesDuCable", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CoffreFort</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 52, $this->source); })()), "coffreFort", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MaterielDeRepassage</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 56, $this->source); })()), "materielDeRepassage", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>WifiGratuit</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 60, $this->source); })()), "wifiGratuit", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 64
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 64, $this->source); })()), "etat", [], "any", false, false, false, 64)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 68, $this->source); })()), "libelle", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambres_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambres_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 77
        echo twig_include($this->env, $context, "chambres/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chambres/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 77,  207 => 75,  202 => 73,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chambre{% endblock %}

{% block body %}
    <h1>Chambre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chambre.id }}</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>{{ chambre.tarif }}</td>
            </tr>
            <tr>
                <th>Superficie</th>
                <td>{{ chambre.superficie }}</td>
            </tr>
            <tr>
                <th>VueSurMer</th>
                <td>{{ chambre.vueSurMer }}</td>
            </tr>
            <tr>
                <th>Chaine_à_laCarte</th>
                <td>{{ chambre.ChaineàLaCarte }}</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>{{ chambre.climatisation }}</td>
            </tr>
            <tr>
                <th>Television_à_ecranPlat</th>
                <td>{{ chambre.televisionàEcranPlat }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ chambre.telephone }}</td>
            </tr>
            <tr>
                <th>ChainesSatellite</th>
                <td>{{ chambre.chainesSatellite }}</td>
            </tr>
            <tr>
                <th>ChainesDuCable</th>
                <td>{{ chambre.chainesDuCable }}</td>
            </tr>
            <tr>
                <th>CoffreFort</th>
                <td>{{ chambre.coffreFort }}</td>
            </tr>
            <tr>
                <th>MaterielDeRepassage</th>
                <td>{{ chambre.materielDeRepassage }}</td>
            </tr>
            <tr>
                <th>WifiGratuit</th>
                <td>{{ chambre.wifiGratuit }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ chambre.etat ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ chambre.libelle }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_chambres_index') }}\">back to list</a>

    <a href=\"{{ path('app_chambres_edit', {'id': chambre.id}) }}\">edit</a>

    {{ include('chambres/_delete_form.html.twig') }}
{% endblock %}
", "chambres/show.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\chambres\\show.html.twig");
    }
}
