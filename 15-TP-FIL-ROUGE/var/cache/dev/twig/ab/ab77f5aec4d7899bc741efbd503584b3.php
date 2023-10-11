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

/* security/login.html.twig */
class __TwigTemplate_33305fc3b905dae106f15a9a697c7bee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<style>
    .blocFormulaireInscription {
        display: flex;
        padding: 100px;
        justify-content: center;

    }

    .blocInscriptionConnexion {

        display: flex;
        padding: 20px;
        border: solid black 2px;
        background-color: black;
    }

    .formulaire_Inscription {
        display: inline-block;
        padding: 40px;
        border-radius: 30px;
        border: solid #E0B973 10px;
        background-color: black;
        width: 50%;
    }

    .form {
        display: inline-block;
        padding: 50px;
        color: white;
        background-color: black;
        border: solid black 2px;
        width: 100%;
    }

    .blocInscription {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-right: solid #E0B973 3px;
        width: 50%;
    }

    .blocConnexion {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-left: solid #E0B973 3px;
        width: 50%;
    }

    .mdp {

        text-align: center;
        margin: 30px;

    }

    .boutonConnexion {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    #btnConnexion {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
    }

    .googleAUTH {

        display: flex;
        justify-content: center;
        border: solid #E0B973;
    }

</style>

<form method=\"post\">

    ";
        // line 98
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageKey", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageData", [], "any", false, false, false, 99), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 101
        echo "
   ";
        // line 107
        echo "
    <div class=\"blocFormulaireInscription\">

        <div class='formulaire_Inscription'>

            
            <div class=\"blocInscriptionConnexion\">

                <div class=\"blocInscription\">
                    <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">INSCRIPTION</a></h4>
                </div>

                <div class=\"blocConnexion\">
                    <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a></h4>
                </div>

            </div>



            <div class='form' id=\"formulaireConnexion\">

                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>


                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>


                <div class=\"mdp\">
                    <h6><a class=\"nav-link active\" aria-current=\"page\" href=\"/reset-password\">Mot de passe oublié ?</a></h6>
                </div>


                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


                <div class=\"boutonConnexion\">
                    <button type=\"submit\" id=\"btnConnexion\"> CONNEXION </button>
                </div>


                <div class=\"googleAUTH\">
                    <a class=\"nav-link active\" href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        echo "\"><img  src=\"/img/LogoGoogleAuth.png\" style=' width:30px; 'alt=\"LogoGoogleAUTH\">Google connexion</a>
                </div>


            </div>

        </div>

    </div>

</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 151,  238 => 142,  223 => 130,  210 => 120,  203 => 116,  192 => 107,  189 => 101,  183 => 99,  181 => 98,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}


{% block body %}

<style>
    .blocFormulaireInscription {
        display: flex;
        padding: 100px;
        justify-content: center;

    }

    .blocInscriptionConnexion {

        display: flex;
        padding: 20px;
        border: solid black 2px;
        background-color: black;
    }

    .formulaire_Inscription {
        display: inline-block;
        padding: 40px;
        border-radius: 30px;
        border: solid #E0B973 10px;
        background-color: black;
        width: 50%;
    }

    .form {
        display: inline-block;
        padding: 50px;
        color: white;
        background-color: black;
        border: solid black 2px;
        width: 100%;
    }

    .blocInscription {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-right: solid #E0B973 3px;
        width: 50%;
    }

    .blocConnexion {
        display: flex;
        justify-content: center;
        color: white;
        padding: 30px;
        border-bottom: solid #E0B973 3px;
        border-left: solid #E0B973 3px;
        width: 50%;
    }

    .mdp {

        text-align: center;
        margin: 30px;

    }

    .boutonConnexion {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    #btnConnexion {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
    }

    .googleAUTH {

        display: flex;
        justify-content: center;
        border: solid #E0B973;
    }

</style>

<form method=\"post\">

    {% if error %}
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

   {#  {% if app.user %}
    <div class=\"mb-3\">
        Bonjour, {{ app.user.userIdentifier }}! <a href=\"{{ path('app_logout') }}\">Deconnexion</a>
    </div>
    {% endif %} #}

    <div class=\"blocFormulaireInscription\">

        <div class='formulaire_Inscription'>

            
            <div class=\"blocInscriptionConnexion\">

                <div class=\"blocInscription\">
                    <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_register') }}\">INSCRIPTION</a></h4>
                </div>

                <div class=\"blocConnexion\">
                    <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_login') }}\">CONNEXION</a></h4>
                </div>

            </div>



            <div class='form' id=\"formulaireConnexion\">

                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>


                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>


                <div class=\"mdp\">
                    <h6><a class=\"nav-link active\" aria-current=\"page\" href=\"/reset-password\">Mot de passe oublié ?</a></h6>
                </div>


                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


                <div class=\"boutonConnexion\">
                    <button type=\"submit\" id=\"btnConnexion\"> CONNEXION </button>
                </div>


                <div class=\"googleAUTH\">
                    <a class=\"nav-link active\" href=\"{{ path('connect_google') }}\"><img  src=\"/img/LogoGoogleAuth.png\" style=' width:30px; 'alt=\"LogoGoogleAUTH\">Google connexion</a>
                </div>


            </div>

        </div>

    </div>

</form>

{% endblock %}", "security/login.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\security\\login.html.twig");
    }
}
