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

/* back/contact/contact.html.twig */
class __TwigTemplate_7afe77b706ac92e6a3d607aa70ae91c846b9085d97fe92857ff33e6bd68308c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/contact/contact.html.twig", 1);
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

        echo "CONTACT";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"p1\">
    <h1> CONTACT </h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "    <div class=\"alert alert-success\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "

    <div class=\"row\">


        <div class=\"col-md-6\">


            <div class=\"envoyer\">
                <p class=\"txt\">Vous avez des questions ou <br>peut-être rencontrez-vous <br>un problème sur notre
                    site ?
                    <br><br>Contactez-nous</p>

            </div>
        </div>

        <div id=\"center\" class=\"col-md-6\">


            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'row', ["label" => "Adresse éléctronique", "attr" => ["placeholder" => "Votre adresse email"]]);
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'row', ["label" => "Votre Nom et Prénom", "attr" => ["placeholder" => "Nom/Prénom"]]);
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "tel", [], "any", false, false, false, 35), 'row', ["label" => "Votre Numéro de Téléphone", "attr" => ["placeholder" => "06 ** ** ** **"]]);
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "object", [], "any", false, false, false, 36), 'row', ["label" => "Sujet de votre Message", "attr" => ["placeholder" => "Sujet"]]);
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'row', ["label" => "Votre Message", "attr" => ["placeholder" => "Veulliez écrire votre message"]]);
        // line 38
        echo "


            <div class=\"envoyer\">


                <button type=\"submit\" class=\"btn btn-warning\">Envoyer</button>
            </div>


            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

        </div>


    </div>

</div>

<script>
    //captcha3
    const SITEKEY = '6LenNu0UAAAAAE5rXV2DFhJv0VMS4Ofe9VwLA8jH';
    //either on page load
    grecaptcha.ready(function () {
        grecaptcha.execute(SITEKEY, {
            action: 'contact_form'
        }).then(function (token) {
            //the token will be sent on form submit
            \$('[name=\"captcha\"]').val(token);
            //keep in mind that token expires in 120 seconds so it's better to add setTimeout.
        });
    });

    //or on form post:
    grecaptcha.ready(function () {
        grecaptcha.execute(SITEKEY, {
            action: 'contact_form'
        }).then(function (token) {
            //submit the form
            return http.post(url, {
                email,
                captcha: token
            });
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  151 => 38,  149 => 37,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CONTACT{% endblock %}

{% block body %}
<div id=\"p1\">
    <h1> CONTACT </h1>
    {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
    {% endfor %}


    <div class=\"row\">


        <div class=\"col-md-6\">


            <div class=\"envoyer\">
                <p class=\"txt\">Vous avez des questions ou <br>peut-être rencontrez-vous <br>un problème sur notre
                    site ?
                    <br><br>Contactez-nous</p>

            </div>
        </div>

        <div id=\"center\" class=\"col-md-6\">


            {{ form_start(form) }}
            {{ form_row(form.email, {'label':'Adresse éléctronique','attr': {'placeholder':'Votre adresse email'}}) }}
            {{ form_row(form.name, {'label':'Votre Nom et Prénom','attr': {'placeholder':'Nom/Prénom'}}) }}
            {{ form_row(form.tel, {'label':'Votre Numéro de Téléphone','attr': {'placeholder':'06 ** ** ** **'}}) }}
            {{ form_row(form.object, {'label':'Sujet de votre Message','attr': {'placeholder':'Sujet'}}) }}
            {{ form_row(form.message, {'label':'Votre Message','attr': {'placeholder':'Veulliez écrire votre message'}})
            }}


            <div class=\"envoyer\">


                <button type=\"submit\" class=\"btn btn-warning\">Envoyer</button>
            </div>


            {{ form_end(form) }}

        </div>


    </div>

</div>

<script>
    //captcha3
    const SITEKEY = '6LenNu0UAAAAAE5rXV2DFhJv0VMS4Ofe9VwLA8jH';
    //either on page load
    grecaptcha.ready(function () {
        grecaptcha.execute(SITEKEY, {
            action: 'contact_form'
        }).then(function (token) {
            //the token will be sent on form submit
            \$('[name=\"captcha\"]').val(token);
            //keep in mind that token expires in 120 seconds so it's better to add setTimeout.
        });
    });

    //or on form post:
    grecaptcha.ready(function () {
        grecaptcha.execute(SITEKEY, {
            action: 'contact_form'
        }).then(function (token) {
            //submit the form
            return http.post(url, {
                email,
                captcha: token
            });
        });
    });
</script>
{% endblock %}", "back/contact/contact.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/contact/contact.html.twig");
    }
}
