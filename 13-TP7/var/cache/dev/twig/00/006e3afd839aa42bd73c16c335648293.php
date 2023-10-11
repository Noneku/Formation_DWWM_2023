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
class __TwigTemplate_522617cdd1548be606f63f93b92ed3a9 extends Template
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

        echo "Log in!";
        
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

    .mdp{

    text-align: center;
    margin: 30px;

    }


    .boutonConnexion {
        display: flex;
        justify-content: center;
        margin-top: 50px;
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

</style>

<form method=\"post\">
    ";
        // line 89
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 89, $this->source); })())) {
            // line 90
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 90, $this->source); })()), "messageKey", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 90, $this->source); })()), "messageData", [], "any", false, false, false, 90), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)) {
            // line 94
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "userIdentifier", [], "any", false, false, false, 95), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 98
        echo "
<div class=\"blocFormulaireInscription\">

<div class='formulaire_Inscription'>


    <div class=\"blocInscriptionConnexion\">

        <div class=\"blocInscription\">

            <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">INSCRIPTION</a></h4>

        </div>

        <div class=\"blocConnexion\">

            <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a></h4>

        </div>

    </div>


    <div class='form' id=\"formulaireConnexion\">

    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <div class=\"mdp\">
    <h6><a class=\"nav-link active\" aria-current=\"page\" href=\"/reset-password\">Mot de passe oublié ?</a></h6>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    
    
    <div class=\"boutonConnexion\">
    <button  type=\"submit\" id=\"btnConnexion\"> CONNEXION </button>
    </div>

</form>


</div>

</div>

</div>

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
        return array (  242 => 132,  231 => 124,  218 => 114,  209 => 108,  197 => 98,  189 => 95,  186 => 94,  184 => 93,  181 => 92,  175 => 90,  173 => 89,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

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

    .mdp{

    text-align: center;
    margin: 30px;

    }


    .boutonConnexion {
        display: flex;
        justify-content: center;
        margin-top: 50px;
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

</style>

<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

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
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <div class=\"mdp\">
    <h6><a class=\"nav-link active\" aria-current=\"page\" href=\"/reset-password\">Mot de passe oublié ?</a></h6>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    
    
    <div class=\"boutonConnexion\">
    <button  type=\"submit\" id=\"btnConnexion\"> CONNEXION </button>
    </div>

</form>


</div>

</div>

</div>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\cmptp\\Desktop\\TP7\\formulaire\\templates\\security\\login.html.twig");
    }
}
