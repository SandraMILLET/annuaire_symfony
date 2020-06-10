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

/* front/company/index.html.twig */
class __TwigTemplate_c4168c1ecaabc5c001a37162206e918c4a3750e73dcff86b231ad4d669273b72 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/company/index.html.twig", 1);
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

        echo "companies index";
        
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
        echo "<!-- remettre adminBase en extends quand css permet le slide vers la droite-->
<h1>Vos entreprises</h1>
<h3>Bienvenue dans votre tableau de bord, ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "prenom", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
<div class=\"crud\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Logo<br>
                    Société</th>
                <th>responsable</th>
                <th>Catégorie<br>
                    Activité<br>
                <th> SIRET</th>
                <th>adresse<br>
                    code postal<br>
                    ville</th>
                <th>téléphone<br>
                    email</th>
                <th>Réseaux sociaux</th>
                <th>presentation</th>
                <th>service</th>
                <th>tarif</th>
                <th>book</th>
                <th>horaire</th>
                <th>fournisseur</th>
                <th>emploi</th>
                <th>Vérifié ?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["company"], "imageFile"), "html", null, true);
            echo "<br>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "society", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "responsable", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "activity", [], "any", false, false, false, 44), "categorie", [], "any", false, false, false, 44), "html", null, true);
            echo " <br>
                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "activity", [], "any", false, false, false, 45), "metier", [], "any", false, false, false, 45), "html", null, true);
            echo "<br>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "SIRET", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "address", [], "any", false, false, false, 47), "html", null, true);
            echo "<br>
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "codepostal", [], "any", false, false, false, 48), "html", null, true);
            echo "<br>
                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "ville", [], "any", false, false, false, 49), "html", null, true);
            echo "<br>
                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "phone", [], "any", false, false, false, 50), "html", null, true);
            echo "<br>
                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 52), null)) {
                // line 53
                echo "                <p>Pas de réseaux remplis</p>
                ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 55), "facebook", [], "any", false, false, false, 55), "html", null, true);
                echo "<br>
                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 56), "twitter", [], "any", false, false, false, 56), "html", null, true);
                echo "<br>
                    ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 57), "instagram", [], "any", false, false, false, 57), "html", null, true);
                echo "<br>
                    ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 58), "pinterest", [], "any", false, false, false, 58), "html", null, true);
                echo "<br>
                    ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 59), "youtube", [], "any", false, false, false, 59), "html", null, true);
                echo "<br>
                    ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "reseaux", [], "any", false, false, false, 60), "linkedin", [], "any", false, false, false, 60), "html", null, true);
            }
            // line 61
            echo "                </td>
                <td>";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["company"], "presentation", [], "any", false, false, false, 62);
            echo "</td>
                <td>";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["company"], "service", [], "any", false, false, false, 63);
            echo "</td>
                <td>";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["company"], "tarif", [], "any", false, false, false, 64);
            echo "</td>
                <td>";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["company"], "book", [], "any", false, false, false, 65);
            echo "</td>
                <td>";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["company"], "horaire", [], "any", false, false, false, 66);
            echo "</td>
                <td>";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["company"], "fournisseur", [], "any", false, false, false, 67);
            echo "</td>
                <td>";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["company"], "emploi", [], "any", false, false, false, 68);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "verify", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_show", ["id" => twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">Voir</a>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "            <tr>
                <td colspan=\"11\">Pas de résultats trouvés</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>
</div>
<a type=\"button\" class=\"btn btn-warning\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_new");
        echo "\">Créer nouveau</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 85,  273 => 82,  264 => 78,  255 => 74,  250 => 72,  244 => 69,  240 => 68,  236 => 67,  232 => 66,  228 => 65,  224 => 64,  220 => 63,  216 => 62,  213 => 61,  210 => 60,  206 => 59,  202 => 58,  198 => 57,  194 => 56,  189 => 55,  185 => 53,  183 => 52,  179 => 51,  175 => 50,  171 => 49,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  132 => 39,  127 => 38,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}companies index{% endblock %}

{% block body %}
<!-- remettre adminBase en extends quand css permet le slide vers la droite-->
<h1>Vos entreprises</h1>
<h3>Bienvenue dans votre tableau de bord, {{ app.user.prenom }} {{ app.user.nom }}</h3>
<div class=\"crud\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Logo<br>
                    Société</th>
                <th>responsable</th>
                <th>Catégorie<br>
                    Activité<br>
                <th> SIRET</th>
                <th>adresse<br>
                    code postal<br>
                    ville</th>
                <th>téléphone<br>
                    email</th>
                <th>Réseaux sociaux</th>
                <th>presentation</th>
                <th>service</th>
                <th>tarif</th>
                <th>book</th>
                <th>horaire</th>
                <th>fournisseur</th>
                <th>emploi</th>
                <th>Vérifié ?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for company in companies %}
            <tr>
                <td>{{ company.id }}</td>
                <td>{{ vich_uploader_asset(company,'imageFile') }}<br>
                    {{ company.society }}</td>
                <td>{{ company.responsable }}</td>
                <td>{{ company.activity.categorie }} <br>
                    {{ company.activity.metier }}<br>
                <td>{{ company.SIRET }}</td>
                <td>{{ company.address }}<br>
                    {{ company.codepostal }}<br>
                    {{ company.ville }}<br>
                    {{ company.phone }}<br>
                    {{ company.email }}</td>
                <td>{% if company.reseaux == NULL %}
                <p>Pas de réseaux remplis</p>
                {% else %}
                    {{ company.reseaux.facebook }}<br>
                    {{ company.reseaux.twitter }}<br>
                    {{ company.reseaux.instagram }}<br>
                    {{ company.reseaux.pinterest }}<br>
                    {{ company.reseaux.youtube }}<br>
                    {{ company.reseaux.linkedin }}{% endif %}
                </td>
                <td>{{ company.presentation | raw  }}</td>
                <td>{{ company.service | raw  }}</td>
                <td>{{ company.tarif | raw  }}</td>
                <td>{{ company.book | raw  }}</td>
                <td>{{ company.horaire | raw  }}</td>
                <td>{{ company.fournisseur | raw  }}</td>
                <td>{{ company.emploi | raw  }}</td>
                <td>{{ company.verify }}</td>
                <td>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"{{ path('company_show', {'id': company.id}) }}\">Voir</a>
                    <a type=\"button\" class=\"btn btn-warning\"
                        href=\"{{ path('company_edit', {'id': company.id}) }}\">Editer</a>
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
<a type=\"button\" class=\"btn btn-warning\" href=\"{{ path('company_new') }}\">Créer nouveau</a>
{% endblock %}", "front/company/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/company/index.html.twig");
    }
}
