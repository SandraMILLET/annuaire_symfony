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

/* front/security/registration.html.twig */
class __TwigTemplate_56dae2281c7eb73d39e2d4e0aac6c28dfd36b856af563f98ea177c8ee7595661 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"p1\">

    <h1>Inscription</h1>
    <div class=\"row justify-content-center checkbox\">
        <p>Etes-vous un professionnel ?</p>
    </div>
    <div class=\"row justify-content-center checklabel\">
        <input type=\"checkbox\" id=\"checkPro\" name=\"drone\" value=\"oui\">
        <label for=\"oui\">Cochez si vous êtes un pro</label>
    </div>
    <div class=\"row justify-content-center formRreg\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors');
        echo "
        <!--insertion input pro society et caché les autres-->
        <div id=\"inputPro\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "pro", [], "any", false, false, false, 21), "society", [], "any", false, false, false, 21), 'widget', ["label" => "Votre société", "attr" => ["placeholder" => "Nom de la société"]]);
        echo "
<br>
            <!-- permet de ne pas afficher les labels des champs demandés mais reste les inputs champs not null a passer null-->
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "pro", [], "any", false, false, false, 24), "imageFile", [], "any", false, false, false, 24), 'row', ["label" => "Logo", "attr" => ["class" => "hidden-row"]]);
        echo "
            
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "pro", [], "any", false, false, false, 26), "SIRET", [], "any", false, false, false, 26), 'row', ["label" => "SIRET", "attr" => ["class" => "hidden-row"], "attr" => ["placeholder" => "Votre numéro SIRET"]]);
        echo "
        </div>

        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row', ["label" => "Adresse électronique", "attr" => ["placeholder" => "Votre adresse email"]]);
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'row', ["label" => "Votre nom", "attr" => ["placeholder" => "Nom de famille"]]);
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'row', ["label" => "Votre prénom", "attr" => ["placeholder" => "Saisir votre prénom"]]);
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'row', ["label" => "Votre mot de passe : 8 caractères minimum", "attr" => ["placeholder" => "Saisir mot de passe"]]);
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "confirm_password", [], "any", false, false, false, 33), 'row', ["label" => "Confirmez votre mot de passe", "attr" => ["placeholder" => "Veuillez confirmer votre mot de passe "]]);
        echo "

        <script>
            //captcha3
            const SITEKEY = '6LenNu0UAAAAAE5rXV2DFhJv0VMS4Ofe9VwLA8jH';
            //either on page load
            grecaptcha.ready(function () {
                grecaptcha.execute(SITEKEY, {
                    action: 'security_registration'
                }).then(function (token) {
                    //the token will be sent on form submit
                    \$('[name=\"captcha\"]').val(token);
                    //keep in mind that token expires in 120 seconds so it's better to add setTimeout.
                });
            });

            //or on form post:
            grecaptcha.ready(function () {
                grecaptcha.execute(SITEKEY, {
                    action: 'security_registration'
                }).then(function (token) {
                    //submit the form
                    return http.post(url, {
                        email,
                        captcha: token
                    });
                });
            });

            //display input pro
            let radio = document.getElementById(\"checkPro\");
            let formPro = document.getElementById(\"inputPro\");
            formPro.style.display = \"none\";
            radio.addEventListener(\"change\", function (event) {
                if (event.target.checked) {
                    formPro.style.display = \"block\";
                } else {
                    formPro.style.display = \"none\";
                }
            });
        </script>
        <div class=\"row justify-content-center\">
            <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
        </div>
        <div class=\"row justify-content-center\">
            <p>Vous avez déjà un compte ? <a class=\"linklog\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous</a></p>
        </div>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 80,  193 => 78,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  129 => 29,  123 => 26,  118 => 24,  112 => 21,  106 => 18,  102 => 17,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}
{% block body %}

<div class=\"p1\">

    <h1>Inscription</h1>
    <div class=\"row justify-content-center checkbox\">
        <p>Etes-vous un professionnel ?</p>
    </div>
    <div class=\"row justify-content-center checklabel\">
        <input type=\"checkbox\" id=\"checkPro\" name=\"drone\" value=\"oui\">
        <label for=\"oui\">Cochez si vous êtes un pro</label>
    </div>
    <div class=\"row justify-content-center formRreg\">
        {{ form_start(form) }}
        {{ form_errors(form) }}
        <!--insertion input pro society et caché les autres-->
        <div id=\"inputPro\">
            {{ form_widget(form.pro.society, {'label':'Votre société','attr': {'placeholder':'Nom de la société'}}) }}
<br>
            <!-- permet de ne pas afficher les labels des champs demandés mais reste les inputs champs not null a passer null-->
            {{ form_row(form.pro.imageFile, {'label':'Logo','attr': {'class': 'hidden-row' }}) }}
            
            {{ form_row(form.pro.SIRET,  {'label':'SIRET', 'attr': {'class': 'hidden-row'},'attr': {'placeholder':'Votre numéro SIRET'} }) }}
        </div>

        {{ form_row(form.email, {'label':'Adresse électronique','attr': {'placeholder':'Votre adresse email'}}) }}
        {{ form_row(form.nom, {'label':'Votre nom','attr': {'placeholder':'Nom de famille'}}) }}
        {{ form_row(form.prenom, {'label':'Votre prénom','attr': {'placeholder':'Saisir votre prénom'}}) }}
        {{ form_row(form.password, {'label':'Votre mot de passe : 8 caractères minimum','attr': {'placeholder':'Saisir mot de passe'}})}}
        {{ form_row(form.confirm_password, {'label':'Confirmez votre mot de passe','attr': {'placeholder':'Veuillez confirmer votre mot de passe '}})}}

        <script>
            //captcha3
            const SITEKEY = '6LenNu0UAAAAAE5rXV2DFhJv0VMS4Ofe9VwLA8jH';
            //either on page load
            grecaptcha.ready(function () {
                grecaptcha.execute(SITEKEY, {
                    action: 'security_registration'
                }).then(function (token) {
                    //the token will be sent on form submit
                    \$('[name=\"captcha\"]').val(token);
                    //keep in mind that token expires in 120 seconds so it's better to add setTimeout.
                });
            });

            //or on form post:
            grecaptcha.ready(function () {
                grecaptcha.execute(SITEKEY, {
                    action: 'security_registration'
                }).then(function (token) {
                    //submit the form
                    return http.post(url, {
                        email,
                        captcha: token
                    });
                });
            });

            //display input pro
            let radio = document.getElementById(\"checkPro\");
            let formPro = document.getElementById(\"inputPro\");
            formPro.style.display = \"none\";
            radio.addEventListener(\"change\", function (event) {
                if (event.target.checked) {
                    formPro.style.display = \"block\";
                } else {
                    formPro.style.display = \"none\";
                }
            });
        </script>
        <div class=\"row justify-content-center\">
            <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
        </div>
        <div class=\"row justify-content-center\">
            <p>Vous avez déjà un compte ? <a class=\"linklog\" href=\"{{ path('app_login') }}\">Connectez-vous</a></p>
        </div>
        {{ form_end(form) }}

    </div>
</div>
{% endblock %}", "front/security/registration.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/security/registration.html.twig");
    }
}
