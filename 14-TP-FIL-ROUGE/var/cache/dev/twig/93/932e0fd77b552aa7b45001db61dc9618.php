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

/* chiffre_daffaires/index.html.twig */
class __TwigTemplate_43dafc2a0af2a7fe4d111244427948f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chiffre_daffaires/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chiffre_daffaires/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chiffre_daffaires/index.html.twig", 1);
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

        echo "Chiffre d'Affaires";
        
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
        echo "<style>
  body {
    font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    background: #cecece;
  }

  h1 {
    font-size: 60px;
    color: #505050;
    letter-spacing: 2px;
    margin: 25px 0;
    text-align: center;
  }

  /* p {

    font-size: 35px;
    color: #505050;
    letter-spacing: 2px;

    box-shadow: #E0B973;
    margin: 25px 0;
    border-radius: 4px;
  } */


  body {
    font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    background: #cecece;
  }

  h1 {
    font-size: 60px;
    color: #505050;
    letter-spacing: 2px;
    margin: 25px 0;
    text-align: center;
  }

  .charts {
    width: 800px;
    position: relative;
  }

  .mtd {
    display: inline-block;
    margin: 10px 20px;
  }

  #doughnut {
    width: 100%;
    height: 100%;
  }

  ul.doughnut-legend {
    margin-left: 0;
    height: 40px;
  }

  .chart-legend {
    margin-top: 40px;
  }

  .chart-legend li {
    display: inline-block;
    font-size: 20px;
    text-transform: uppercase;
    margin-right: 20px;
  }

  .chart-legend li span {
    display: inline-block;
    position: relative;
    width: 26px;
    height: 22px;
    top: 4px;
    margin-right: 8px;
  }

  #chartjs-tooltip {
    opacity: 1;
    position: absolute;
    background: none;
    color: #FFFFFF;
    font-size: 40px;
    padding: 3px;
  }

  #chartjs-tooltip.below {
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
  }

  #chartjs-tooltip.below:before {
    border: solid;
    border-color: #111 transparent;
    border-color: rgba(255, 255, 255, .8) transparent;
    border-width: 0 8px 8px 8px;
    bottom: 1em;
    content: \"\";
    display: block;
    left: 50%;
    position: absolute;
    z-index: 99;
    -webkit-transform: translate(-50%, -100%);
    transform: translate(-50%, -100%);
  }

  #chartjs-tooltip.above {
    -webkit-transform: translate(-50%, -100%);
    transform: translate(-50%, -100%);
  }

  #chartjs-tooltip.above:before {
    border: solid;
    border-color: #111 transparent;
    border-color: rgba(255, 255, 255, .8) transparent;
    border-width: 8px 8px 0 8px;
    bottom: 1em;
    content: \"\";
    display: block;
    left: 50%;
    top: 100%;
    position: absolute;
    z-index: 99;
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
  }

 #MAF {
    background-color: #E0B973;
    border-color: #111;
    color: #111;
    font-size: 24px;


  }

 #MAF:hover {
    background-color: #ee901dfa;
  }

  .Post {
    box-shadow: 15px 15px 15px 20px #dfe8ed;
  }
</style>

<div class=\"mtd charts\">
  <h1 class=\"example-wrapper\">Chiffre d'Affaires</h1>


  <h2>Période analysée</h2>
  <form method=\"POST\" class=\"Post\">
    ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_start');
        echo "
    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\" id=\"MAF\">Valider</button>
    ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'form_end');
        echo "
  </form>

  <div>
    <canvas id=\"myChart\"></canvas>
  </div>
  <div id=\"chartjs-tooltip\"></div>
  <div id=\"doughnut-legend\" class=\"chart-legend\"></div>
  ";
        // line 171
        echo "
</div>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


<script>

  document.addEventListener('DOMContentLoaded', function () {
    var chiffreDaffaireForMonths = ";
        // line 181
        echo json_encode((isset($context["chiffreDaffaireForMonths"]) || array_key_exists("chiffreDaffaireForMonths", $context) ? $context["chiffreDaffaireForMonths"] : (function () { throw new RuntimeError('Variable "chiffreDaffaireForMonths" does not exist.', 181, $this->source); })()));
        // line 182
        echo ";
  
  //recuperer lannee et le mois les mettre dans une variable
  var labels = chiffreDaffaireForMonths.map(function (data) {
    return data.annee + '-' + data.mois;
  });
  //recuperer le chiffre et le mettre dans une variable
  var datasetValues = chiffreDaffaireForMonths.map(function (data) {
    return parseFloat(data.chiffre);
  });


  var affaire = document.getElementById('myChart').getContext('2d');

  var chart = new Chart(affaire, {
    type: 'bar',//(bar, line, pie,doughnut, etc.)
    data: {
      labels: labels,

      datasets: [{
        label: 'Chiffre d\\'Affaires en euros',
        data: datasetValues,
        backgroundColor: '#E0B973',
        borderWidth: 100,
        borderColor: 'black',
        color: '#FFFFFF',
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top',
        },

        tooltip: {
          callbacks: {
            label: function (context) {
              var label = context.dataset.label || '';
              if (label) {
                label += ': ';
              }
              label += context.parsed.toFixed(2);
              label += ' %';
              return label;
            },
          },
        },
      },

      title: {
        display: true,
        text: 'Répartition du Chiffre d\\'Affaires',
      },
      animation: {
        animateScale: true,
      },
      responsive: true,



      layout: {
        padding: 20
      }
    },
  });

  });

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chiffre_daffaires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 182,  275 => 181,  263 => 171,  252 => 162,  247 => 160,  243 => 159,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chiffre d'Affaires{% endblock %}

{% block body %}
<style>
  body {
    font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    background: #cecece;
  }

  h1 {
    font-size: 60px;
    color: #505050;
    letter-spacing: 2px;
    margin: 25px 0;
    text-align: center;
  }

  /* p {

    font-size: 35px;
    color: #505050;
    letter-spacing: 2px;

    box-shadow: #E0B973;
    margin: 25px 0;
    border-radius: 4px;
  } */


  body {
    font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    background: #cecece;
  }

  h1 {
    font-size: 60px;
    color: #505050;
    letter-spacing: 2px;
    margin: 25px 0;
    text-align: center;
  }

  .charts {
    width: 800px;
    position: relative;
  }

  .mtd {
    display: inline-block;
    margin: 10px 20px;
  }

  #doughnut {
    width: 100%;
    height: 100%;
  }

  ul.doughnut-legend {
    margin-left: 0;
    height: 40px;
  }

  .chart-legend {
    margin-top: 40px;
  }

  .chart-legend li {
    display: inline-block;
    font-size: 20px;
    text-transform: uppercase;
    margin-right: 20px;
  }

  .chart-legend li span {
    display: inline-block;
    position: relative;
    width: 26px;
    height: 22px;
    top: 4px;
    margin-right: 8px;
  }

  #chartjs-tooltip {
    opacity: 1;
    position: absolute;
    background: none;
    color: #FFFFFF;
    font-size: 40px;
    padding: 3px;
  }

  #chartjs-tooltip.below {
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
  }

  #chartjs-tooltip.below:before {
    border: solid;
    border-color: #111 transparent;
    border-color: rgba(255, 255, 255, .8) transparent;
    border-width: 0 8px 8px 8px;
    bottom: 1em;
    content: \"\";
    display: block;
    left: 50%;
    position: absolute;
    z-index: 99;
    -webkit-transform: translate(-50%, -100%);
    transform: translate(-50%, -100%);
  }

  #chartjs-tooltip.above {
    -webkit-transform: translate(-50%, -100%);
    transform: translate(-50%, -100%);
  }

  #chartjs-tooltip.above:before {
    border: solid;
    border-color: #111 transparent;
    border-color: rgba(255, 255, 255, .8) transparent;
    border-width: 8px 8px 0 8px;
    bottom: 1em;
    content: \"\";
    display: block;
    left: 50%;
    top: 100%;
    position: absolute;
    z-index: 99;
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
  }

 #MAF {
    background-color: #E0B973;
    border-color: #111;
    color: #111;
    font-size: 24px;


  }

 #MAF:hover {
    background-color: #ee901dfa;
  }

  .Post {
    box-shadow: 15px 15px 15px 20px #dfe8ed;
  }
</style>

<div class=\"mtd charts\">
  <h1 class=\"example-wrapper\">Chiffre d'Affaires</h1>


  <h2>Période analysée</h2>
  <form method=\"POST\" class=\"Post\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <button type=\"submit\" class=\"btn btn-primary\" id=\"MAF\">Valider</button>
    {{ form_end(form) }}
  </form>

  <div>
    <canvas id=\"myChart\"></canvas>
  </div>
  <div id=\"chartjs-tooltip\"></div>
  <div id=\"doughnut-legend\" class=\"chart-legend\"></div>
  {# <p class=\"example-wrapper\">Le chiffre d'affaires total est : {{ chiffreDaffaireForm[0].chiffre }} euros.</p> #}

</div>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


<script>

  document.addEventListener('DOMContentLoaded', function () {
    var chiffreDaffaireForMonths = {{ chiffreDaffaireForMonths | json_encode | raw
  }};
  
  //recuperer lannee et le mois les mettre dans une variable
  var labels = chiffreDaffaireForMonths.map(function (data) {
    return data.annee + '-' + data.mois;
  });
  //recuperer le chiffre et le mettre dans une variable
  var datasetValues = chiffreDaffaireForMonths.map(function (data) {
    return parseFloat(data.chiffre);
  });


  var affaire = document.getElementById('myChart').getContext('2d');

  var chart = new Chart(affaire, {
    type: 'bar',//(bar, line, pie,doughnut, etc.)
    data: {
      labels: labels,

      datasets: [{
        label: 'Chiffre d\\'Affaires en euros',
        data: datasetValues,
        backgroundColor: '#E0B973',
        borderWidth: 100,
        borderColor: 'black',
        color: '#FFFFFF',
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top',
        },

        tooltip: {
          callbacks: {
            label: function (context) {
              var label = context.dataset.label || '';
              if (label) {
                label += ': ';
              }
              label += context.parsed.toFixed(2);
              label += ' %';
              return label;
            },
          },
        },
      },

      title: {
        display: true,
        text: 'Répartition du Chiffre d\\'Affaires',
      },
      animation: {
        animateScale: true,
      },
      responsive: true,



      layout: {
        padding: 20
      }
    },
  });

  });

</script>
{% endblock %}", "chiffre_daffaires/index.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\chiffre_daffaires\\index.html.twig");
    }
}
