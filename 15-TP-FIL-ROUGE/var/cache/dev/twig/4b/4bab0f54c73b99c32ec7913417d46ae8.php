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

/* registration/register.html.twig */
class __TwigTemplate_e6fdc6b5f90f977048688746e182b6b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "inscription";
        
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

    #cgv {

        margin: 30px;
    }


    .boutonInscription {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    #btnInscription {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
        
    }
</style>


<div class=\"blocFormulaireInscription\">

    <div class='formulaire_Inscription'>


        <div class=\"blocInscriptionConnexion\">

            <div class=\"blocInscription\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">INSCRIPTION</a>
                </h4>

            </div>

            <div class=\"blocConnexion\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">CONNEXION</a></h4>

            </div>

        </div>

        <div class='form'>

            ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_start');
        echo "

            ";
        // line 116
        echo "            ";
        // line 117
        echo "            ";
        // line 118
        echo "            ";
        // line 119
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 119, $this->source); })()), "nom", [], "any", false, false, false, 119), 'label');
        echo "
            ";
        // line 121
        echo "            ";
        // line 122
        echo "            ";
        // line 123
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123), 'widget', ["attr" => ["placeholder" => "Votre contenu"]]);
        echo "
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "nom", [], "any", false, false, false, 124), 'errors');
        echo "


            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "prenom", [], "any", false, false, false, 127), 'label');
        echo "
            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "prenom", [], "any", false, false, false, 128), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 129, $this->source); })()), "prenom", [], "any", false, false, false, 129), 'errors');
        echo "
                
            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 131), 'label');
        echo "
            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 132), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 133), 'errors');
        echo "
                
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 135, $this->source); })()), "email", [], "any", false, false, false, 135), 'label');
        echo "
            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), 'errors');
        echo "

            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 139, $this->source); })()), "adresse", [], "any", false, false, false, 139), 'label');
        echo "
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 140, $this->source); })()), "adresse", [], "any", false, false, false, 140), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "adresse", [], "any", false, false, false, 141), 'errors');
        echo "
            <ul id=\"liste_adresse\"></ul>


            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "telephone", [], "any", false, false, false, 145), 'label');
        echo "
            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 146, $this->source); })()), "telephone", [], "any", false, false, false, 146), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 147, $this->source); })()), "telephone", [], "any", false, false, false, 147), 'errors');
        echo "
                
            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 149, $this->source); })()), "password", [], "any", false, false, false, 149), 'label', ["label" => "Mot de passe"]);
        echo "
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 150, $this->source); })()), "password", [], "any", false, false, false, 150), 'widget', ["attr" => ["placeholder" => "Votre contenu ici"]]);
        echo "
            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "password", [], "any", false, false, false, 151), 'errors');
        echo "

            <div class='form-check' id=\"cgv\">
                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 154, $this->source); })()), "Conditions", [], "any", false, false, false, 154), 'label', (twig_test_empty($_label_ = ["label_attr" => ["class" => "form-check-label"]]) ? [] : ["label" => $_label_]));
        echo "
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 155, $this->source); })()), "Conditions", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
            </div>

            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 162, $this->source); })()), 'form_end');
        echo "
        </div>

    </div>

</div>

<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/suggestionAdresse.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 169,  328 => 162,  318 => 155,  314 => 154,  308 => 151,  304 => 150,  300 => 149,  295 => 147,  291 => 146,  287 => 145,  280 => 141,  276 => 140,  272 => 139,  267 => 137,  263 => 136,  259 => 135,  254 => 133,  250 => 132,  246 => 131,  241 => 129,  237 => 128,  233 => 127,  227 => 124,  222 => 123,  220 => 122,  218 => 121,  213 => 119,  211 => 118,  209 => 117,  207 => 116,  202 => 113,  191 => 105,  181 => 98,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}inscription{% endblock %}


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

    #cgv {

        margin: 30px;
    }


    .boutonInscription {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    #btnInscription {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
        
    }
</style>


<div class=\"blocFormulaireInscription\">

    <div class='formulaire_Inscription'>


        <div class=\"blocInscriptionConnexion\">

            <div class=\"blocInscription\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_register') }}\">INSCRIPTION</a>
                </h4>

            </div>

            <div class=\"blocConnexion\">

                <h4><a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_login') }}\">CONNEXION</a></h4>

            </div>

        </div>

        <div class='form'>

            {{ form_start(registrationForm) }}

            {# {{ form_label(...) }}: 1er argument, génère une balise <label> pour le champ du formulaire. #}
            {# null: deuxieme argument, text: libellé du champs #}
            {# 'label_attr': souhaite ajouter des attributs au label du formulaire #}
            {# 'class' : 'form-label': , la classe CSS 'form-label' sera ajoutée à la balise <label> pour appliquer le style CSS #}
            {{form_label(registrationForm.nom) }}
            {# {{ form_widget(...) }} : affiche le champs du formulaire comme un champ de texte ou une zone de texte #}
            {# 'attr': souhaite ajouter des attributs au champs du formulaire #}
            {# 'class' : 'form-control': , la classe CSS 'form-control' sera ajoutée au champs du formulaire pour appliquer le style CSS #}
            {{form_widget(registrationForm.nom, {'attr': {'placeholder': 'Votre contenu'}})}}
            {{ form_errors(registrationForm.nom) }}


            {{form_label(registrationForm.prenom) }}
            {{form_widget(registrationForm.prenom, {'attr': {'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.prenom) }}
                
            {{form_label(registrationForm.date_de_naissance) }}
            {{form_widget(registrationForm.date_de_naissance, {'attr': {'placeholder':'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.date_de_naissance) }}
                
            {{form_label(registrationForm.email) }}
            {{form_widget(registrationForm.email, {'attr': {'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.email) }}

            {{form_label(registrationForm.adresse) }}
            {{form_widget(registrationForm.adresse, {'attr': {'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.adresse) }}
            <ul id=\"liste_adresse\"></ul>


            {{form_label(registrationForm.telephone) }}
            {{form_widget(registrationForm.telephone, {'attr': {'placeholder': 'Votre contenu ici'}}) }}
            {{ form_errors(registrationForm.telephone) }}
                
            {{form_label(registrationForm.password, 'Mot de passe',) }}
            {{form_widget(registrationForm.password, {'attr': {'placeholder': 'Votre contenu ici' }}) }}
            {{ form_errors(registrationForm.password) }}

            <div class='form-check' id=\"cgv\">
                {{form_label(registrationForm.Conditions, {'label_attr': {'class':'form-check-label'}}) }}
                {{form_widget(registrationForm.Conditions, {'attr': {'class':'form-check-input'}}) }}
            </div>

            <div class=\"boutonInscription\">
                <button type=\"submit\" id=\"btnInscription\">INSCRIPTION</button>
            </div>

            {{ form_end(registrationForm) }}
        </div>

    </div>

</div>

<script src=\"{{asset('assets/js/suggestionAdresse.js')}}\"></script>

{% endblock %}
", "registration/register.html.twig", "C:\\xampp_2\\htdocs\\TP_DWM\\TP-FIL-ROUGE\\templates\\registration\\register.html.twig");
    }
}
