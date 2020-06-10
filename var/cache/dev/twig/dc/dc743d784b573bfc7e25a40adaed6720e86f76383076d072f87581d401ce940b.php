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

/* back/author_pannel/delete.html.twig */
class __TwigTemplate_a9a14467e0505ff5a32f954b5c374f96240341e0ca845b92a2507cbb6e479bf4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/delete.html.twig"));

        // line 3
        $context["authorPIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_index");
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "back/author_pannel/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "Suppression d'article
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<div class=\"row container col-10 d-flex justify-content-end mt-3\">

\t<div class=\"jumbotron\">
\t\t<h1 class=\"display-3 text-danger\">Supprimer cet article ?</h1>
\t\t<hr class=\"my-4\">
\t\t<div class=\"row d-flex justify-content-center col-12\">
\t\t\t<div class=\"col-8 text-center card mb-5\">
\t\t\t\t<h3 class=\"card-header\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
\t\t\t\t</div>
\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), "html", null, true);
        echo "\" style=\"width: 100%; height:200px;\" alt=\"Post image\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "publishDate", [], "any", false, false, false, 29), "\\l\\e d.m.Y"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form action=\"\" method=\"post\" class=\"lead d-flex justify-content-center align-items-center col-12 m-0\">
\t\t\t\t<div class=\"form-group mr-5\">
\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-info btn-lg\">Annuler</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/author_pannel/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 37,  137 => 36,  132 => 34,  124 => 29,  118 => 26,  113 => 24,  108 => 22,  103 => 20,  93 => 12,  83 => 11,  72 => 8,  62 => 7,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% set authorPIndexUrl = path('authorPannel_index') %}

{# Encore une fois, impossible de réagencer la card comme je le voudrai #}

{% block title %}
Suppression d'article
{% endblock %}

{% block body %}

<div class=\"row container col-10 d-flex justify-content-end mt-3\">

\t<div class=\"jumbotron\">
\t\t<h1 class=\"display-3 text-danger\">Supprimer cet article ?</h1>
\t\t<hr class=\"my-4\">
\t\t<div class=\"row d-flex justify-content-center col-12\">
\t\t\t<div class=\"col-8 text-center card mb-5\">
\t\t\t\t<h3 class=\"card-header\">{{ article.id }}</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">{{ article.title }}</h5>
\t\t\t\t</div>
\t\t\t\t<img src=\"{{ article.image }}\" style=\"width: 100%; height:200px;\" alt=\"Post image\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">{{ article.description }}</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t{{ article.publishDate | date('\\\\l\\\\e d.m.Y') }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form action=\"\" method=\"post\" class=\"lead d-flex justify-content-center align-items-center col-12 m-0\">
\t\t\t\t<div class=\"form-group mr-5\">
\t\t\t\t\t<a href=\"{{ authorPIndexUrl }}\" role=\"button\" class=\"btn btn-info btn-lg\">Annuler</a>
\t\t\t\t</div>
\t\t\t\t{{ form_start(formDelete) }}
\t\t\t\t{{ form_end(formDelete) }}
\t\t\t</form>
\t\t</div>
\t</div>

</div>

{% endblock %}", "back/author_pannel/delete.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/author_pannel/delete.html.twig");
    }
}
