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

/* admin/show.html.twig */
class __TwigTemplate_a1af9df48356170a65b64db0d4d83ae78cb08478f5e90e324d7cbe8916534a8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        // line 3
        $context["indexAdmin"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        // line 4
        $context["edit"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]);
        // line 5
        $context["delete"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]);
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "admin/show.html.twig", 1);
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

        echo "User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1>User</h1>

<table class=\"table\">
\t<tbody>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Email</th>
\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Nom</th>
\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Prenom</th>
\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Adresse</th>
\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Codepostal</th>
\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "codepostal", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Ville</th>
\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "ville", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Tel</th>
\t\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "tel", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Roles</th>
\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "roles", [], "any", false, false, false, 48), 0, [], "array", false, false, false, 48), "html", null, true);
        echo "</td>

\t\t</tr>
\t</tbody>
</table>

<a class=\"btn btn-info\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["indexAdmin"]) || array_key_exists("indexAdmin", $context) ? $context["indexAdmin"] : (function () { throw new RuntimeError('Variable "indexAdmin" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\">Retour</a>
<a class=\"btn btn-info\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\">Modifier</a>
<a class=\"btn btn-info\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["delete"]) || array_key_exists("delete", $context) ? $context["delete"] : (function () { throw new RuntimeError('Variable "delete" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\">Supprimer</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 56,  172 => 55,  168 => 54,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  95 => 10,  85 => 9,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% set indexAdmin = path('users') %}
{% set edit = path('edit', {'id': user.id}) %}
{% set delete = path('delete', {'id': user.id}) %}

{% block title %}User{% endblock %}

{% block body %}
<h1>User</h1>

<table class=\"table\">
\t<tbody>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<td>{{ user.id }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Email</th>
\t\t\t<td>{{ user.email }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Nom</th>
\t\t\t<td>{{ user.nom }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Prenom</th>
\t\t\t<td>{{ user.prenom }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Adresse</th>
\t\t\t<td>{{ user.adresse }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Codepostal</th>
\t\t\t<td>{{ user.codepostal }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Ville</th>
\t\t\t<td>{{ user.ville }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Tel</th>
\t\t\t<td>{{ user.tel }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Roles</th>
\t\t\t<td>{{ user.roles[0] }}</td>

\t\t</tr>
\t</tbody>
</table>

<a class=\"btn btn-info\" href=\"{{ indexAdmin }}\">Retour</a>
<a class=\"btn btn-info\" href=\"{{ edit }}\">Modifier</a>
<a class=\"btn btn-info\" href=\"{{ delete }}\">Supprimer</a>

{% endblock %}", "admin/show.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/admin/show.html.twig");
    }
}
