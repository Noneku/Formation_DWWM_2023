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

/* reset_password/request.html.twig */
class __TwigTemplate_416cf2160389dce80b63dcdd312c4fba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
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

        echo "Réinitialiser son mot de passe";
        
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

    .conteneur {

        display: flex;
        justify-content: center;
        padding: 100px;

    }

    .formulaireReinitialisation{
        
        display: flex;
        justify-content: center;
        margin-top: 50px;

    }

    .blocReinitialisation {

        align-items: center;
        padding: 50px;
    }

    .boutonReinitialisation {
        display: flex;
        justify-content: center;
        margin-top: 50px;

    }

    #btnReinit {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;

    }
</style>

";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 53
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

<div class=\"conteneur\">

    <div class=\"blocReinitialisation\">

        <h1>Réinitialisez votre mot de passe</h1>

        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 63, $this->source); })()), 'form_start');
        echo "

        <div class=\"formulaireReinitialisation\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'row');
        echo "
        </div>

        <div class=\"texteReinit\">
            <small>
                Entrez votre adresse e-mail et nous vous enverrons un
                lien pour réinitialiser votre mot de passe.
            </small>
        </div>

        <div class=\"boutonReinitialisation\">
            <button id=\"btnReinit\">Envoyer un e-mail de réinitialisation du mot de passe</button>
        </div>

        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 80, $this->source); })()), 'form_end');
        echo "

    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  165 => 66,  159 => 63,  149 => 55,  140 => 53,  136 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialiser son mot de passe{% endblock %}

{% block body %}


<style>

    .conteneur {

        display: flex;
        justify-content: center;
        padding: 100px;

    }

    .formulaireReinitialisation{
        
        display: flex;
        justify-content: center;
        margin-top: 50px;

    }

    .blocReinitialisation {

        align-items: center;
        padding: 50px;
    }

    .boutonReinitialisation {
        display: flex;
        justify-content: center;
        margin-top: 50px;

    }

    #btnReinit {

        border: solid #E0B973;
        color: black;
        font-weight: bold;
        background-color: #E0B973;
        border-radius: 5px;
        padding: 10px;
        width: 50%;

    }
</style>

{% for flash_error in app.flashes('reset_password_error') %}
<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
{% endfor %}


<div class=\"conteneur\">

    <div class=\"blocReinitialisation\">

        <h1>Réinitialisez votre mot de passe</h1>

        {{ form_start(requestForm) }}

        <div class=\"formulaireReinitialisation\">
            {{ form_row(requestForm.email) }}
        </div>

        <div class=\"texteReinit\">
            <small>
                Entrez votre adresse e-mail et nous vous enverrons un
                lien pour réinitialiser votre mot de passe.
            </small>
        </div>

        <div class=\"boutonReinitialisation\">
            <button id=\"btnReinit\">Envoyer un e-mail de réinitialisation du mot de passe</button>
        </div>

        {{ form_end(requestForm) }}

    </div>

</div>

{% endblock %}", "reset_password/request.html.twig", "C:\\Users\\cmptp\\Desktop\\TP7\\formulaire\\templates\\reset_password\\request.html.twig");
    }
}
