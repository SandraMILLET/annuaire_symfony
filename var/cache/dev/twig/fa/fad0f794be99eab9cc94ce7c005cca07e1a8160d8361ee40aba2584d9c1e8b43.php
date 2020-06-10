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

/* front/actu/index.html.twig */
class __TwigTemplate_61402cfe9f8f5eb504ac19ea2923ccf918470d276bddbc31d8a633708a537605 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/actu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/actu/index.html.twig"));

        // line 3
        $context["authorPIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_index");
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/actu/index.html.twig", 1);
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

        // line 6
        echo "Conseils et astuces
";
        
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
        echo "<div id=\"p1\">

\t";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-info\">Admin Blog</a>
\t";
        }
        // line 15
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<div class=\"respmod mb-5\">Vous avez frappé à la bonne porte !
\t\t\t\t\t<br>
\t\t\t\t\t<p class=\"h6\">Découvrez nos guides et astuces pour tous vos projets.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid mt-5\">
\t<div class=\"row d-flex justify-content-around\">

\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "
\t\t";
            // line 33
            $context["actusShowUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]);
            // line 34
            echo "
\t\t<div class=\"col-md-3 col-sm-12 text-center card mr-1 ml-1 mb-5\">
\t\t\t<h3 class=\"card-header\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</h5>
\t\t\t</div>
\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 40), "html", null, true);
            echo "\" style=\"width: 100%; height:200px;\" alt=\"Post image\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h6 class=\"card-subtitle text-muted\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</h6>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["actusShowUrl"]) || array_key_exists("actusShowUrl", $context) ? $context["actusShowUrl"] : (function () { throw new RuntimeError('Variable "actusShowUrl" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
\t\t\t</div>
\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publishDate", [], "any", false, false, false, 48), "\\l\\e d.m.Y"), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
\t</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/actu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 53,  163 => 48,  157 => 45,  151 => 42,  146 => 40,  141 => 38,  136 => 36,  132 => 34,  130 => 33,  127 => 32,  123 => 31,  105 => 15,  99 => 13,  97 => 12,  93 => 10,  83 => 9,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set authorPIndexUrl = path('authorPannel_index') %}

{% block title %}
Conseils et astuces
{% endblock %}

{% block body %}
<div id=\"p1\">

\t{% if is_granted('ROLE_ADMIN') %}
\t<a href=\"{{ authorPIndexUrl }}\" class=\"btn btn-info\">Admin Blog</a>
\t{% endif %}

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<div class=\"respmod mb-5\">Vous avez frappé à la bonne porte !
\t\t\t\t\t<br>
\t\t\t\t\t<p class=\"h6\">Découvrez nos guides et astuces pour tous vos projets.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid mt-5\">
\t<div class=\"row d-flex justify-content-around\">

\t\t{% for article in articles %}

\t\t{% set actusShowUrl = path('actus_show', {'id': article.id}) %}

\t\t<div class=\"col-md-3 col-sm-12 text-center card mr-1 ml-1 mb-5\">
\t\t\t<h3 class=\"card-header\">{{ article.id }}</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">{{ article.title }}</h5>
\t\t\t</div>
\t\t\t<img src=\"{{ article.image }}\" style=\"width: 100%; height:200px;\" alt=\"Post image\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h6 class=\"card-subtitle text-muted\">{{ article.description }}</h6>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<a href=\"{{ actusShowUrl }}\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
\t\t\t</div>
\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t{{ article.publishDate | date('\\\\l\\\\e d.m.Y') }}
\t\t\t</div>
\t\t</div>

\t\t{% endfor %}

\t</div>
</div>

{% endblock %}", "front/actu/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/actu/index.html.twig");
    }
}
