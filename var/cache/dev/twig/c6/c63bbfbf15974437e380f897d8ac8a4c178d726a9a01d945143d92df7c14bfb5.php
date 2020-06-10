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

/* front/actu/show.html.twig */
class __TwigTemplate_4ed1c8b162dd7009d6d4447426ef8e8c2590cb983ac2db8757c8df9d046deb77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/actu/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/actu/show.html.twig"));

        // line 3
        $context["authorPIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_index");
        // line 4
        $context["authorPUpdate"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/actu/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div id=\"p1\">

\t";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-info mr-2\">Admin Article</a>
\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["authorPUpdate"]) || array_key_exists("authorPUpdate", $context) ? $context["authorPUpdate"] : (function () { throw new RuntimeError('Variable "authorPUpdate" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-success\">Editer</a>
\t";
        }
        // line 18
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<div class=\"respmod mb-5\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"jumbotron\">
\t<div class=\"d-flex justify-content-center\">
\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "image", [], "any", false, false, false, 30), "html", null, true);
        echo "\" alt=\"Image de l'article\">
\t</div>
\t<p class=\"lead text-muted mt-3 mb-3 text-center\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
\t<hr>
\t<p class=\"lead mt-5\">";
        // line 34
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34);
        echo "</p>
\t<p class=\"lead col-12 text-center\">Ecrit le ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "publishDate", [], "any", false, false, false, 35), "\\l\\e d.m.Y"), "html", null, true);
        echo "</p>
</div>
<div class=\"row mt-5 mb-5 col-12 d-flex justify-content-center\">
\t<p class=\"com-sm-10 col-md-8 h2 text-center\">Cet article vous a été utile ?</p>
\t<div class=\"col-sm-10 com-md-8 d-flex justify-content-center mt-4\">
\t\t<button type=\"button\" class=\"btn btn-primary mr-5\">Oui</button>
\t\t<button type=\"button\" class=\"btn btn-danger\">Non</button>
\t</div>
</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/actu/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 35,  140 => 34,  135 => 32,  130 => 30,  119 => 22,  113 => 18,  108 => 16,  103 => 15,  101 => 14,  96 => 11,  86 => 10,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set authorPIndexUrl = path('authorPannel_index') %}
{% set authorPUpdate = path('authorPannel_update', {'id': article.id}) %}

{% block title %}
{{ article.title }}
{% endblock %}

{% block body %}

<div id=\"p1\">

\t{% if is_granted('ROLE_ADMIN') %}
\t<a href=\"{{ authorPIndexUrl }}\" class=\"btn btn-info mr-2\">Admin Article</a>
\t<a href=\"{{ authorPUpdate }}\" class=\"btn btn-success\">Editer</a>
\t{% endif %}

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 headmi\">
\t\t\t\t<div class=\"respmod mb-5\">{{ article.title }}</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"jumbotron\">
\t<div class=\"d-flex justify-content-center\">
\t\t<img src=\"{{ article.image }}\" alt=\"Image de l'article\">
\t</div>
\t<p class=\"lead text-muted mt-3 mb-3 text-center\">{{ article.description }}</p>
\t<hr>
\t<p class=\"lead mt-5\">{{ article.content | raw }}</p>
\t<p class=\"lead col-12 text-center\">Ecrit le {{ article.publishDate | date('\\\\l\\\\e d.m.Y') }}</p>
</div>
<div class=\"row mt-5 mb-5 col-12 d-flex justify-content-center\">
\t<p class=\"com-sm-10 col-md-8 h2 text-center\">Cet article vous a été utile ?</p>
\t<div class=\"col-sm-10 com-md-8 d-flex justify-content-center mt-4\">
\t\t<button type=\"button\" class=\"btn btn-primary mr-5\">Oui</button>
\t\t<button type=\"button\" class=\"btn btn-danger\">Non</button>
\t</div>
</div>
</div>


{% endblock %}", "front/actu/show.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/actu/show.html.twig");
    }
}
