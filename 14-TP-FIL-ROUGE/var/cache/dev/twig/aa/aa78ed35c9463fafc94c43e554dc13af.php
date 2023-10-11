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

/* Navbar/footer.html.twig */
class __TwigTemplate_c163ddc12e126d87419c8ffd35c588af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Navbar/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Navbar/footer.html.twig"));

        // line 1
        echo "<div id=\"footer\" class=\"card text-center bg-dark\" data-bs-theme=\"dark\">
    <div class=\"card-header\">
      
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">Vice City Hôtel</h5>
      <p class=\"card-text\"> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.titre1"), "html", null, true);
        echo " </p>
      <a href=\"/vister/lhotel\" class=\"btn btn-primary\" >";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.visite"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"card-footer text-body-secondary\">
      ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyright"), "html", null, true);
        echo "
    </div>
  </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Navbar/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\" class=\"card text-center bg-dark\" data-bs-theme=\"dark\">
    <div class=\"card-header\">
      
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">Vice City Hôtel</h5>
      <p class=\"card-text\"> {{ 'footer.titre1'|trans }} </p>
      <a href=\"/vister/lhotel\" class=\"btn btn-primary\" >{{ 'navbar.visite'|trans }}</a>
    </div>
    <div class=\"card-footer text-body-secondary\">
      {{'footer.copyright'|trans }}
    </div>
  </div>
", "Navbar/footer.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\Navbar\\footer.html.twig");
    }
}
