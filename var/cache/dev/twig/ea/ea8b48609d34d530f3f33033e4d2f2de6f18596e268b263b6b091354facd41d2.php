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

/* back/user_pro/show.html.twig */
class __TwigTemplate_c404e6a6c58a04f4a5856676d0d29145533f7ed073776c3dc377d244066b4480 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user_pro/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user_pro/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/user_pro/show.html.twig", 1);
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

        echo "UserPro";
        
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
        echo "<h1>Utilisateur professionnel</h1>

<table class=\"table\">

    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><img class=\"logocompany\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 17, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 17, $this->source); })()), "imageFile", [], "any", false, false, false, 17), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th>Société</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 21, $this->source); })()), "society", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
        </tr>
    <tr>
            <th>SIRET</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 25, $this->source); })()), "SIRET", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <!--debut erreur insertion -->
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 30, $this->source); })()), "pro", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th>Prénom</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 35, $this->source); })()), "pro", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Adresse</th>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 40, $this->source); })()), "pro", [], "any", false, false, false, 40), "adresse", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Code postal</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 44, $this->source); })()), "pro", [], "any", false, false, false, 44), "codepostal", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th>Ville</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 49, $this->source); })()), "pro", [], "any", false, false, false, 49), "ville", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 54, $this->source); })()), "pro", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th>Téléphone</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 59, $this->source); })()), "pro", [], "any", false, false, false, 59), "tel", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th>Mot de passe</th>
            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 64, $this->source); })()), "pro", [], "any", false, false, false, 64), "password", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            <!--fin erreur insertion-->

        </tr>
    </tbody>
</table>

<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_index");
        echo "\">Retour à la liste</a>

<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user_pro"]) || array_key_exists("user_pro", $context) ? $context["user_pro"] : (function () { throw new RuntimeError('Variable "user_pro" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\">Edition</a>

";
        // line 75
        echo twig_include($this->env, $context, "back/user_pro/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/user_pro/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 75,  198 => 73,  193 => 71,  183 => 64,  175 => 59,  167 => 54,  159 => 49,  151 => 44,  144 => 40,  136 => 35,  128 => 30,  120 => 25,  113 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UserPro{% endblock %}

{% block body %}
<h1>Utilisateur professionnel</h1>

<table class=\"table\">

    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ user_pro.id }}</td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><img class=\"logocompany\" src=\"{{ vich_uploader_asset(user_pro,'imageFile') }}\" alt=\"{{ user_pro.imageFile }}\"></td>
        </tr>
        <tr>
            <th>Société</th>
            <td>{{ user_pro.society }}</td>
        </tr>
    <tr>
            <th>SIRET</th>
            <td>{{ user_pro.SIRET }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <!--debut erreur insertion -->
            <td>{{ user_pro.pro.nom }}</td>

        </tr>
        <tr>
            <th>Prénom</th>
            <td>{{ user_pro.pro.prenom }}</td>
        </tr>
        
        <tr>
            <th>Adresse</th>
            <td>{{ user_pro.pro.adresse }}</td>
        </tr>
        <tr>
            <th>Code postal</th>
            <td>{{ user_pro.pro.codepostal }}</td>

        </tr>
        <tr>
            <th>Ville</th>
            <td>{{ user_pro.pro.ville }}</td>

        </tr>
        <tr>
            <th>Email</th>
            <td>{{ user_pro.pro.email }}</td>

        </tr>
        <tr>
            <th>Téléphone</th>
            <td>{{ user_pro.pro.tel }}</td>

        </tr>
        <tr>
            <th>Mot de passe</th>
            <td>{{ user_pro.pro.password }}</td>
            <!--fin erreur insertion-->

        </tr>
    </tbody>
</table>

<a href=\"{{ path('user_pro_index') }}\">Retour à la liste</a>

<a href=\"{{ path('user_pro_edit', {'id': user_pro.id}) }}\">Edition</a>

{{ include('back/user_pro/_delete_form.html.twig') }}
{% endblock %}", "back/user_pro/show.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/user_pro/show.html.twig");
    }
}
