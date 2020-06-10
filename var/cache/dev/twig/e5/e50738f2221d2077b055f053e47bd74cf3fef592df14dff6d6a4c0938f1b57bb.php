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

/* admin/delete.html.twig */
class __TwigTemplate_a0661410aef97733b90113bcfdd4a8a0285af85b49ad7574731edaced6954484 extends Template
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
        return "adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/delete.html.twig"));

        // line 3
        $context["indexAdmin"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "admin/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Delete User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"jumbotron\">
    <h1 class=\"display-3 text-danger\">Supprimer cet utilisateur ?</h1>
    <hr class=\"my-4\">
    <div class=\"row d-flex justify-content-center col-12\">
        <div class=\"col-8 text-center card mb-5\">
            <h3 class=\"card-header\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</h3>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"card-body\">
                <h6 class=\"card-subtitle text-muted\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h6>
                ";
        // line 20
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), null)) {
            // line 21
            echo "                <h6 class=\"card-subtitle text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "adresse", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
                ";
        }
        // line 23
        echo "                ";
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "codepostal", [], "any", false, false, false, 23), null)) {
            // line 24
            echo "                <h6 class=\"card-subtitle text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "codepostal", [], "any", false, false, false, 24), "html", null, true);
            echo "</h6>
                ";
        }
        // line 26
        echo "                ";
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "ville", [], "any", false, false, false, 26), null)) {
            // line 27
            echo "                <h6 class=\"card-subtitle text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "ville", [], "any", false, false, false, 27), "html", null, true);
            echo "</h6>
                ";
        }
        // line 29
        echo "                ";
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "tel", [], "any", false, false, false, 29), null)) {
            // line 30
            echo "                <h6 class=\"card-subtitle text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "tel", [], "any", false, false, false, 30), "html", null, true);
            echo "</h6>
                ";
        }
        // line 32
        echo "            </div>
            ";
        // line 33
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33), 0, [], "array", false, false, false, 33), null)) {
            // line 34
            echo "            <div class=\"card-footer text-muted\">
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "roles", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 38
        echo "        </div>
        <form action=\"\" method=\"post\" class=\"lead d-flex justify-content-center align-items-center col-12 m-0\">
            <div class=\"form-group mr-5\">
                <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["indexAdmin"]) || array_key_exists("indexAdmin", $context) ? $context["indexAdmin"] : (function () { throw new RuntimeError('Variable "indexAdmin" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-info btn\">Annuler</a>
            </div>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 44,  175 => 43,  170 => 41,  165 => 38,  159 => 35,  156 => 34,  154 => 33,  151 => 32,  145 => 30,  142 => 29,  136 => 27,  133 => 26,  127 => 24,  124 => 23,  118 => 21,  116 => 20,  110 => 19,  104 => 16,  99 => 14,  91 => 8,  81 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% set indexAdmin = path('users') %}

{% block title %}Delete User{% endblock %}

{% block body %}

<div class=\"jumbotron\">
    <h1 class=\"display-3 text-danger\">Supprimer cet utilisateur ?</h1>
    <hr class=\"my-4\">
    <div class=\"row d-flex justify-content-center col-12\">
        <div class=\"col-8 text-center card mb-5\">
            <h3 class=\"card-header\">{{ user.id }}</h3>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ user.email }}</h5>
            </div>
            <div class=\"card-body\">
                <h6 class=\"card-subtitle text-muted\">{{ user.nom }} {{ user.prenom }}</h6>
                {% if user.adresse != null %}
                <h6 class=\"card-subtitle text-muted\">{{ user.adresse }}</h6>
                {% endif %}
                {% if user.codepostal != null %}
                <h6 class=\"card-subtitle text-muted\">{{ user.codepostal }}</h6>
                {% endif %}
                {% if user.ville != null %}
                <h6 class=\"card-subtitle text-muted\">{{ user.ville }}</h6>
                {% endif %}
                {% if user.tel != null %}
                <h6 class=\"card-subtitle text-muted\">{{ user.tel }}</h6>
                {% endif %}
            </div>
            {% if user.roles[0] != null %}
            <div class=\"card-footer text-muted\">
                {{ user.roles[0] }}
            </div>
            {% endif %}
        </div>
        <form action=\"\" method=\"post\" class=\"lead d-flex justify-content-center align-items-center col-12 m-0\">
            <div class=\"form-group mr-5\">
                <a href=\"{{ indexAdmin }}\" role=\"button\" class=\"btn btn-info btn\">Annuler</a>
            </div>
            {{ form_start(formDelete) }}
            {{ form_end(formDelete) }}
        </form>
    </div>
</div>

{% endblock %}", "admin/delete.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/admin/delete.html.twig");
    }
}
