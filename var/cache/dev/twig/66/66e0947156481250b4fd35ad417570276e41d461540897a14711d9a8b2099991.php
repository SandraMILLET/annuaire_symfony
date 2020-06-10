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

/* front/recherche/index.html.twig */
class __TwigTemplate_2ecbfaf211ce63ad2b15949ca459b3910579112b4daedd89a22a007122395ddb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/recherche/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/recherche/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/recherche/index.html.twig", 1);
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

        // line 4
        echo "Votre recherche
";
        
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
";
        // line 9
        $context["actusIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        // line 10
        $context["rechercherIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_index");
        // line 11
        echo "
<div id=\"p1\">
\t<div class=\"container-fluid\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<!--filtre de recherche depuis le home-->
\t\t\t\t";
        // line 23
        echo "
\t\t\t\t<!--affichage des requetes si existante sinon afficher \"aucun resultat\"-->
\t\t\t\t";
        // line 28
        echo "

\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 31
            echo "\t\t\t\t<div class=\"respmod mb-5\">Résultat pour ";
            echo "\"categorie\" à
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "ville", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t<!--métiers et catégorie, ne marche pas dans la requete All-->
\t\t\t\t\t<br>
\t\t\t\t\t<p class=\"h6\">";
            // line 35
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 35, $this->source); })())), "html", null, true);
            echo " professionnel(s) trouvé(s)</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid mt-5 d-flex justify-content-around\">
\t<div class=\"row col-11 d-flex justify-content-around\">
\t\t<div class=\"card mb-5 border-primary\">
\t\t\t<h4 class=\"card-header\">";
            // line 45
            echo " - Aude</h4>
\t\t\t<div class=\"card-body\">
\t\t\t<img class=\"logocompany\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["company"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "imageFile", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
\t\t\t\t<h6 class=\"card-title\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "society", [], "any", false, false, false, 48), "html", null, true);
            echo "</h6>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "address", [], "any", false, false, false, 49), "html", null, true);
            echo "
\t\t\t\t\t<br>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "codepostal", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["company"], "presentation", [], "any", false, false, false, 55);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 58), "html", null, true);
            echo "\" id=\"telUser\" class=\"btn tel mr-3\" role=\"button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 59), "html", null, true);
            echo "\" id=\"telUser\" class=\"btn tel mr-3\" role=\"button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_show", ["id" => twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn consulterBtn\"
\t\t\t\t\trole=\"button\">Consulter</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
\t\t<!-- endif %}-->
\t</div>
\t<!-- endif %}-->
</div>
";
        // line 71
        echo "<div id=\"callToAction\" class=\"container-fluid\">
\t<div class=\"p1 jumbotron bg-primary text-center\">
\t\t<h1 class=\"display-3\">Besoin d'un conseil ?</h1>
\t\t<p class=\"lead\" style=\"color: white;\">Consultez notre page
\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["actusIndexUrl"]) || array_key_exists("actusIndexUrl", $context) ? $context["actusIndexUrl"] : (function () { throw new RuntimeError('Variable "actusIndexUrl" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\">Actus</a>
\t\t</p>
\t\t<p><a class=\"btn btn-lg\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["actusIndexUrl"]) || array_key_exists("actusIndexUrl", $context) ? $context["actusIndexUrl"] : (function () { throw new RuntimeError('Variable "actusIndexUrl" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\" role=\"button\"
\t\t\t\tstyle=\"background-color: #E58900; color: white;\">En savoir plus
\t\t\t\t!</a>
\t\t</p>
\t</div>
</div>

";
        // line 85
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/recherche/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 85,  214 => 77,  209 => 75,  203 => 71,  196 => 65,  185 => 60,  179 => 59,  173 => 58,  167 => 55,  159 => 50,  155 => 49,  151 => 48,  145 => 47,  141 => 45,  128 => 35,  122 => 32,  118 => 31,  114 => 30,  110 => 28,  106 => 23,  97 => 11,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Votre recherche
{% endblock %}

{% block body %}

{% set actusIndexUrl = path('actus_index') %}
{% set rechercherIndexUrl = path('rechercher_index') %}

<div id=\"p1\">
\t<div class=\"container-fluid\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<!--filtre de recherche depuis le home-->
\t\t\t\t{#{% if app.request.method == 'POST' %}
\t\t\t{% if recherche|length > 0 %}
\t\t\t<h1>Aucun résultat pour votre recherche</h1>
\t\t\telse %}
\t\t\t<h2>Résultat de la recherche</h2>-->#}

\t\t\t\t<!--affichage des requetes si existante sinon afficher \"aucun resultat\"-->
\t\t\t\t{#{% if company in companies > 0 %}
\t\t\t<h2> Aucun résultat</h2>
\t\t\t{% else %}#}


\t\t\t\t{% for company in companies %}
\t\t\t\t<div class=\"respmod mb-5\">Résultat pour {#{{ company.activity.categorie }}#}\"categorie\" à
\t\t\t\t\t{{ company.ville }}
\t\t\t\t\t<!--métiers et catégorie, ne marche pas dans la requete All-->
\t\t\t\t\t<br>
\t\t\t\t\t<p class=\"h6\">{{ companies|length }} professionnel(s) trouvé(s)</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid mt-5 d-flex justify-content-around\">
\t<div class=\"row col-11 d-flex justify-content-around\">
\t\t<div class=\"card mb-5 border-primary\">
\t\t\t<h4 class=\"card-header\">{#{{ company.activity.categorie }}#} - Aude</h4>
\t\t\t<div class=\"card-body\">
\t\t\t<img class=\"logocompany\" src=\"{{ vich_uploader_asset(company,'imageFile') }}\" alt=\"{{ company.imageFile }}\">
\t\t\t\t<h6 class=\"card-title\">{{ company.society }}</h6>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">{{ company.address }}
\t\t\t\t\t<br>{{ company.codepostal }}
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">{{ company.presentation | raw  }}</p>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<a href=\"{{ company.phone }}\" id=\"telUser\" class=\"btn tel mr-3\" role=\"button\">{{ company.phone }}</a>
\t\t\t\t<a href=\"{{ company.email }}\" id=\"telUser\" class=\"btn tel mr-3\" role=\"button\">{{ company.email }}</a>
\t\t\t\t<a href=\"{{ path('company_show', {'id':company.id}) }}\" class=\"btn consulterBtn\"
\t\t\t\t\trole=\"button\">Consulter</a>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}

\t\t<!-- endif %}-->
\t</div>
\t<!-- endif %}-->
</div>
{#{% endif %}#}
<div id=\"callToAction\" class=\"container-fluid\">
\t<div class=\"p1 jumbotron bg-primary text-center\">
\t\t<h1 class=\"display-3\">Besoin d'un conseil ?</h1>
\t\t<p class=\"lead\" style=\"color: white;\">Consultez notre page
\t\t\t<a href=\"{{ actusIndexUrl }}\">Actus</a>
\t\t</p>
\t\t<p><a class=\"btn btn-lg\" href=\"{{ actusIndexUrl }}\" role=\"button\"
\t\t\t\tstyle=\"background-color: #E58900; color: white;\">En savoir plus
\t\t\t\t!</a>
\t\t</p>
\t</div>
</div>

{# --- IMPLEMENTATION MAPS ICI DES QUE LE SOUCIS DE LAYOUT SERA REGLE --- #}

{% endblock %}", "front/recherche/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/recherche/index.html.twig");
    }
}
