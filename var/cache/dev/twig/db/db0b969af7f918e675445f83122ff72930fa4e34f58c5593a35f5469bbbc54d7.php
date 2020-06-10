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

/* front/test_map/index.html.twig */
class __TwigTemplate_e08fc01b4eca47fd4fcd5d067b99c5257df8c1ec404053eb4b46b838aef269d9 extends Template
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
            'scriptPerso' => [$this, 'block_scriptPerso'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/test_map/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/test_map/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/test_map/index.html.twig", 1);
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
        echo "MapTest
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
        echo "<div id=\"map\" class=\"container-fluid\" style=\"height: 65vh;\"></div>

<hr>

<div>
\t<p>Coordonnées : Lat : ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " / Lon : ";
        echo twig_escape_filter($this->env, (isset($context["lon"]) || array_key_exists("lon", $context) ? $context["lon"] : (function () { throw new RuntimeError('Variable "lon" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</p>
\t<p>Adresse : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["rue"]) || array_key_exists("rue", $context) ? $context["rue"] : (function () { throw new RuntimeError('Variable "rue" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</p>
\t<p>Code Postal : ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["codePostal"]) || array_key_exists("codePostal", $context) ? $context["codePostal"] : (function () { throw new RuntimeError('Variable "codePostal" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</p>
\t<p>Ville : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</p>
\t<p class=\"text-success\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</p>
</div>

<hr>

<div class=\"jumbotron\">
\t<h1 class=\"display-5 text-dark\">Bienvenu dans notre générateur d'adresses !</h1>
\t<hr class=\"my-4\">
\t<p>Ici se tiendra la liste des professionnels</p>
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-info\">
\t\t\t\t<th scope=\"col\">Nom/Prénom</th>
\t\t\t\t<th scope=\"col\">Société</th>
\t\t\t\t<th scope=\"col\">Adresse</th>
\t\t\t\t<th scope=\"col\">GPS</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pros"]) || array_key_exists("pros", $context) ? $context["pros"] : (function () { throw new RuntimeError('Variable "pros" does not exist.', 36, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 37
            echo "\t\t\t<tr class=\"table-active\">
\t\t\t\t<td scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pro"], "pro", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pro"], "pro", [], "any", false, false, false, 38), "prenom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "society", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pro"], "pro", [], "any", false, false, false, 40), "adresse", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["GPS"]) || array_key_exists("GPS", $context) ? $context["GPS"] : (function () { throw new RuntimeError('Variable "GPS" does not exist.', 41, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41), [], "array", false, false, false, 41), 0, [], "array", false, false, false, 41), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["GPS"]) || array_key_exists("GPS", $context) ? $context["GPS"] : (function () { throw new RuntimeError('Variable "GPS" does not exist.', 41, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41), [], "array", false, false, false, 41), 1, [], "array", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</tbody>
\t</table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_scriptPerso($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptPerso"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptPerso"));

        // line 51
        echo "<script>
\tlet map = L.map('map').setView([43.21186065673828, 2.351871967315674], 8);
\tL.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
\t\tmaxZoom: 20
\t}).addTo(map);


\tlet xhttp = XMLHttpRequest();
\t//xhttp.open('GET', );
\t/*
\tlet humphrey = L.marker([43.6036776, 2.2417954]).addTo(map);
\thumphrey.bindPopup(\"<p>Voici Humphrey... <br>(cliquez sur le cercle bleu oui oui)</p>\").openPopup();

\tlet egoHumphrey = L.circle([43.6036776, 2.2417954],
\t\t{
\t\t\tcolor: '#0032FF',
\t\t\tfillColor: '#00B2FF',
\t\t\tfillOpacity: '0.5',
\t\t\tradius: '65000'
\t\t}).addTo(map);
\tegoHumphrey.bindPopup(\"<p>... et voici son égo !<br>(blague de mauvais goût <3)</p>\");

\tlet kalvin = L.marker([43.21667, 2.35]).addTo(map);
\tkalvin.bindPopup(\"<p>Voici mon adorable personne ...</p>\");

\tlet egoKalvin = L.circle([43.21667, 2.35],
\t\t{
\t\t\tcolor: \"#FF0000\",
\t\t\tfillColor: \"#FF2300\",
\t\t\tfillOpacity: '0.5',
\t\t\tradius: '40000'
\t\t}).addTo(map);
\tegoKalvin.bindPopup(\"<p>...et mon amour inconditionnel pour Humphrey ~</p>\");*/

\t/*
\t\tEn ce qui concerne les markers, on pourrait créer un constructeur JS pour les générer à partir
\t\tdes coordonnées registered en db (il faudra faire ami ami avec PHP ici)

\t\tL'OSRM utilisé par Leaflet est down, j'ai trouvé que des OSRM payants au bout d'un moment, donc à voir
\t\ts'il y a des alternatives où si ça rentre dans le business plan.
\t\tDonc routing down pour le moment.
\t*/
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/test_map/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 51,  205 => 50,  191 => 44,  172 => 41,  168 => 40,  164 => 39,  158 => 38,  155 => 37,  138 => 36,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  98 => 13,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
MapTest
{% endblock %}

{% block body %}
<div id=\"map\" class=\"container-fluid\" style=\"height: 65vh;\"></div>

<hr>

<div>
\t<p>Coordonnées : Lat : {{ lat }} / Lon : {{ lon }}</p>
\t<p>Adresse : {{ rue }}</p>
\t<p>Code Postal : {{ codePostal }}</p>
\t<p>Ville : {{ ville }}</p>
\t<p class=\"text-success\">{{ content }}</p>
</div>

<hr>

<div class=\"jumbotron\">
\t<h1 class=\"display-5 text-dark\">Bienvenu dans notre générateur d'adresses !</h1>
\t<hr class=\"my-4\">
\t<p>Ici se tiendra la liste des professionnels</p>
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-info\">
\t\t\t\t<th scope=\"col\">Nom/Prénom</th>
\t\t\t\t<th scope=\"col\">Société</th>
\t\t\t\t<th scope=\"col\">Adresse</th>
\t\t\t\t<th scope=\"col\">GPS</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for pro in pros %}
\t\t\t<tr class=\"table-active\">
\t\t\t\t<td scope=\"row\">{{ pro.pro.nom }} {{ pro.pro.prenom }}</td>
\t\t\t\t<td>{{ pro.society }}</td>
\t\t\t\t<td>{{ pro.pro.adresse }}</td>
\t\t\t\t<td>{{ GPS[loop.index0][0] }} / {{ GPS[loop.index0][1] }}</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>

{% endblock %}

{% block scriptPerso %}
<script>
\tlet map = L.map('map').setView([43.21186065673828, 2.351871967315674], 8);
\tL.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
\t\tmaxZoom: 20
\t}).addTo(map);


\tlet xhttp = XMLHttpRequest();
\t//xhttp.open('GET', );
\t/*
\tlet humphrey = L.marker([43.6036776, 2.2417954]).addTo(map);
\thumphrey.bindPopup(\"<p>Voici Humphrey... <br>(cliquez sur le cercle bleu oui oui)</p>\").openPopup();

\tlet egoHumphrey = L.circle([43.6036776, 2.2417954],
\t\t{
\t\t\tcolor: '#0032FF',
\t\t\tfillColor: '#00B2FF',
\t\t\tfillOpacity: '0.5',
\t\t\tradius: '65000'
\t\t}).addTo(map);
\tegoHumphrey.bindPopup(\"<p>... et voici son égo !<br>(blague de mauvais goût <3)</p>\");

\tlet kalvin = L.marker([43.21667, 2.35]).addTo(map);
\tkalvin.bindPopup(\"<p>Voici mon adorable personne ...</p>\");

\tlet egoKalvin = L.circle([43.21667, 2.35],
\t\t{
\t\t\tcolor: \"#FF0000\",
\t\t\tfillColor: \"#FF2300\",
\t\t\tfillOpacity: '0.5',
\t\t\tradius: '40000'
\t\t}).addTo(map);
\tegoKalvin.bindPopup(\"<p>...et mon amour inconditionnel pour Humphrey ~</p>\");*/

\t/*
\t\tEn ce qui concerne les markers, on pourrait créer un constructeur JS pour les générer à partir
\t\tdes coordonnées registered en db (il faudra faire ami ami avec PHP ici)

\t\tL'OSRM utilisé par Leaflet est down, j'ai trouvé que des OSRM payants au bout d'un moment, donc à voir
\t\ts'il y a des alternatives où si ça rentre dans le business plan.
\t\tDonc routing down pour le moment.
\t*/
</script>
{% endblock scriptPerso %}", "front/test_map/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/test_map/index.html.twig");
    }
}
