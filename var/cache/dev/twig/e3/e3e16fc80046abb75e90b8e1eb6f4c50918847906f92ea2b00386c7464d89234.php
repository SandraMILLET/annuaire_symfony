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

/* admin/index.html.twig */
class __TwigTemplate_750d390811971e3dcc390dedfecaede1948008b8b2e7b19ccc9b07328fbe3c35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 3
        $context["newUser"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new");
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "admin/index.html.twig", 1);
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

        echo "Admin";
        
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
<div id=\"center\" class=\"col-md-9 offset-md-1\">

\t<table class=\"container\">
\t\t<thead class=\"table\">
\t\t\t<tr>
\t\t\t\t<th class=\"space\">Id</th>
\t\t\t\t<th class=\"space\">Email</th>
\t\t\t\t<th class=\"space\">Nom</th>
\t\t\t\t<th class=\"space\">Prenom</th>
\t\t\t\t<th class=\"space\">Adresse<br>
\t\t\t\tCodepostal<br>
\t\t\t\tVille</th>
\t\t\t\t<th class=\"space\">Tel</th>
\t\t\t\t<th class=\"space\">Roles</th>
\t\t\t\t<th class=\"space\">actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody class=\"table table-striped\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "
\t\t\t";
            // line 29
            $context["readUser"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("read", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]);
            // line 30
            echo "\t\t\t";
            $context["editUser"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]);
            // line 31
            echo "\t\t\t";
            $context["deleteUser"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]);
            // line 32
            echo "
\t\t\t<tr>
\t\t\t\t<td class=\"space\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["readUser"]) || array_key_exists("readUser", $context) ? $context["readUser"] : (function () { throw new RuntimeError('Variable "readUser" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
\t\t\t\t<td class=\"space\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"space\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"space\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"space\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "<br>
\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "codepostal", [], "any", false, false, false, 39), "html", null, true);
            echo "<br>
\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ville", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"space\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 41), "html", null, true);
            echo "</td><br>
\t\t\t\t<td class=\"space\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42), 0, [], "array", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"space\">
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["editUser"]) || array_key_exists("editUser", $context) ? $context["editUser"] : (function () { throw new RuntimeError('Variable "editUser" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["deleteUser"]) || array_key_exists("deleteUser", $context) ? $context["deleteUser"] : (function () { throw new RuntimeError('Variable "deleteUser" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</tbody>
\t</table>
\t<a id=\"marg\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["newUser"]) || array_key_exists("newUser", $context) ? $context["newUser"] : (function () { throw new RuntimeError('Variable "newUser" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\"><button id=\"marg2\" class=\"btn btn-warning\">Ajouter</button></a>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 51,  184 => 49,  174 => 45,  170 => 44,  165 => 42,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  131 => 34,  127 => 32,  124 => 31,  121 => 30,  119 => 29,  116 => 28,  112 => 27,  91 => 8,  81 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% set newUser = path(\"new\") %}

{% block title %}Admin{% endblock %}

{% block body %}

<div id=\"center\" class=\"col-md-9 offset-md-1\">

\t<table class=\"container\">
\t\t<thead class=\"table\">
\t\t\t<tr>
\t\t\t\t<th class=\"space\">Id</th>
\t\t\t\t<th class=\"space\">Email</th>
\t\t\t\t<th class=\"space\">Nom</th>
\t\t\t\t<th class=\"space\">Prenom</th>
\t\t\t\t<th class=\"space\">Adresse<br>
\t\t\t\tCodepostal<br>
\t\t\t\tVille</th>
\t\t\t\t<th class=\"space\">Tel</th>
\t\t\t\t<th class=\"space\">Roles</th>
\t\t\t\t<th class=\"space\">actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody class=\"table table-striped\">
\t\t\t{% for user in user %}

\t\t\t{% set readUser = path(\"read\", {'id': user.id}) %}
\t\t\t{% set editUser = path(\"edit\", {'id': user.id}) %}
\t\t\t{% set deleteUser = path(\"delete\", {'id': user.id}) %}

\t\t\t<tr>
\t\t\t\t<td class=\"space\"><a href=\"{{ readUser }}\">{{ user.id }}</a></td>
\t\t\t\t<td class=\"space\">{{ user.email }}</td>
\t\t\t\t<td class=\"space\">{{ user.nom }}</td>
\t\t\t\t<td class=\"space\">{{ user.prenom }}</td>
\t\t\t\t<td class=\"space\">{{ user.adresse }}<br>
\t\t\t\t{{ user.codepostal }}<br>
\t\t\t\t{{ user.ville }}</td>
\t\t\t\t<td class=\"space\">{{ user.tel }}</td><br>
\t\t\t\t<td class=\"space\">{{ user.roles[0]}}</td>
\t\t\t\t<td class=\"space\">
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"{{ editUser }}\">Modifier</a>
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"{{ deleteUser }}\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<a id=\"marg\" href=\"{{ newUser }}\"><button id=\"marg2\" class=\"btn btn-warning\">Ajouter</button></a>

</div>
{% endblock %}", "admin/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/admin/index.html.twig");
    }
}
