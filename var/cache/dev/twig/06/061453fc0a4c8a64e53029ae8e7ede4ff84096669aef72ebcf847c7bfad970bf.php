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

/* back/user_pro/index.html.twig */
class __TwigTemplate_e61aabb9b99e68132f9360dc39e0d3394eed1a2c54d046c0c861dc539e002087 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user_pro/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user_pro/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/user_pro/index.html.twig", 1);
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

        echo "UserPro index";
        
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
        echo "<h1>UserPro index</h1>
<!-- remettre adminBase en extends quand css permet le slide vers la droite-->

<!-- faire passer les infos du form Registration si clic pro-->
<div class=\"crud\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Logo<br>
                    Société</th>
                <th>Nom<br>
                    Prénom</th>
                <th>SIRET</th>
                <th>Adresse<br>
                    Code postal<br>
                    Ville</th>
                <th>Email<br>
                    Téléphone</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_pros"]) || array_key_exists("user_pros", $context) ? $context["user_pros"] : (function () { throw new RuntimeError('Variable "user_pros" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["user"], "imageFile"), "html", null, true);
            echo "<br>
                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "society", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "<br>
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "SIRET", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 38), "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "<br>
                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 39), "codepostal", [], "any", false, false, false, 39), "html", null, true);
            echo "<br>
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 40), "ville", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
            echo "<br>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 42), "tel", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 43), "password", [], "any", false, false, false, 43)), "html", null, true);
            echo "</td>
                <td>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Voir</a>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pro", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"11\">Pas de résultats trouvés</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
</div>
<a type=\"button\" class=\"btn btn-warning\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_new");
        echo "\">Créer nouveau</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/user_pro/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 59,  195 => 56,  186 => 52,  177 => 48,  172 => 46,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  119 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UserPro index{% endblock %}

{% block body %}
<h1>UserPro index</h1>
<!-- remettre adminBase en extends quand css permet le slide vers la droite-->

<!-- faire passer les infos du form Registration si clic pro-->
<div class=\"crud\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Logo<br>
                    Société</th>
                <th>Nom<br>
                    Prénom</th>
                <th>SIRET</th>
                <th>Adresse<br>
                    Code postal<br>
                    Ville</th>
                <th>Email<br>
                    Téléphone</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for user in user_pros %}
            <tr>
                <td>{{ user.pro.id }}</td>
                <td>{{ vich_uploader_asset(user,'imageFile') }}<br>
                    {{ user.society }}</td>
                <td>{{ user.pro.nom }}<br>
                    {{ user.pro.prenom }}</td>
                <td>{{ user.SIRET }}</td>
                <td>{{ user.pro.adresse }}<br>
                    {{ user.pro.codepostal }}<br>
                    {{ user.pro.ville }}</td>
                <td>{{ user.pro.email }}<br>
                    {{ user.pro.tel }}</td>
                <td>{{ user.pro.password|length }}</td>
                <td>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"{{ path('user_pro_show', {'id': user.pro.id}) }}\">Voir</a>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"{{ path('user_pro_edit', {'id': user.pro.id}) }}\">Editer</a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"11\">Pas de résultats trouvés</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<a type=\"button\" class=\"btn btn-warning\" href=\"{{ path('user_pro_new') }}\">Créer nouveau</a>
{% endblock %}", "back/user_pro/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/user_pro/index.html.twig");
    }
}
