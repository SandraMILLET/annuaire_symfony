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

/* back/author_pannel/index.html.twig */
class __TwigTemplate_22c5bdeadf2024b3d19a15909fd1d19cb7c026840976b7ab9e90c22813f8716c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/index.html.twig"));

        // line 3
        $context["authorPCreateUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_create");
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "back/author_pannel/index.html.twig", 1);
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

        echo "Panneau de Contrôle";
        
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
        echo "<div class=\"row container col-10 d-flex justify-content-end mt-3\">

\t<div class=\"container-fluid\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3 d-flex justify-content-start text-info\">Bienvenue</h1>
\t\t\t<p class=\"lead\">D'ici vous pouvez être en gestion de vos articles. En créer, en éditer, en supprimer, vous
\t\t\t\têtes aux commandes.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>A vous de jouer !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-info btn-lg mt-3\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["authorPCreateUrl"]) || array_key_exists("authorPCreateUrl", $context) ? $context["authorPCreateUrl"] : (function () { throw new RuntimeError('Variable "authorPCreateUrl" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" role=\"button\">Créer un article</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid d-flex justify-content-center\">
\t\t<table class=\"table table-hover\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t<th scope=\"col\">Articles</th>
\t\t\t\t\t<th scope=\"col\">Publication</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 36, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 37
            echo "
\t\t\t\t";
            // line 38
            $context["authorPUpdateUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38)]);
            // line 39
            echo "\t\t\t\t";
            $context["authorPDeleteUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 39)]);
            // line 40
            echo "\t\t\t\t";
            $context["articleUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40)]);
            // line 41
            echo "
\t\t\t\t<tr class=\"table-default\">
\t\t\t\t\t<td scope=\"row\" class=\"font-weight-bold\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publishDate", [], "any", false, false, false, 44), "\\L\\e d.m.Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["articleUrl"]) || array_key_exists("articleUrl", $context) ? $context["articleUrl"] : (function () { throw new RuntimeError('Variable "articleUrl" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>

\t\t\t\t\t";
            // line 48
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "status", [], "any", false, false, false, 48), 1)) {
                // line 49
                echo "
\t\t\t\t\t<td class=\"text-muted\">Brouillon</td>

\t\t\t\t\t";
            } else {
                // line 53
                echo "
\t\t\t\t\t<td class=\"text-info\">Publié</td>

\t\t\t\t\t";
            }
            // line 57
            echo "
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["authorPUpdateUrl"]) || array_key_exists("authorPUpdateUrl", $context) ? $context["authorPUpdateUrl"] : (function () { throw new RuntimeError('Variable "authorPUpdateUrl" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-info text-light\" role=\"button\">Editer</a>
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["authorPDeleteUrl"]) || array_key_exists("authorPDeleteUrl", $context) ? $context["authorPDeleteUrl"] : (function () { throw new RuntimeError('Variable "authorPDeleteUrl" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-danger text-light\" role=\"button\">Supprimer</a>
\t\t\t\t\t\t</tdBrouillon>
\t\t\t\t</tr>

\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
\t\t\t</tbody>
\t\t</table>
\t</div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/author_pannel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 65,  197 => 60,  193 => 59,  189 => 57,  183 => 53,  177 => 49,  175 => 48,  170 => 46,  164 => 45,  160 => 44,  156 => 43,  152 => 41,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  124 => 36,  103 => 18,  91 => 8,  81 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% set authorPCreateUrl = path('authorPannel_create') %}

{% block title %}Panneau de Contrôle{% endblock %}

{% block body %}
<div class=\"row container col-10 d-flex justify-content-end mt-3\">

\t<div class=\"container-fluid\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3 d-flex justify-content-start text-info\">Bienvenue</h1>
\t\t\t<p class=\"lead\">D'ici vous pouvez être en gestion de vos articles. En créer, en éditer, en supprimer, vous
\t\t\t\têtes aux commandes.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>A vous de jouer !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-info btn-lg mt-3\" href=\"{{ authorPCreateUrl }}\" role=\"button\">Créer un article</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"container-fluid d-flex justify-content-center\">
\t\t<table class=\"table table-hover\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t<th scope=\"col\">Articles</th>
\t\t\t\t\t<th scope=\"col\">Publication</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for article in articles %}

\t\t\t\t{% set authorPUpdateUrl = path('authorPannel_update', {'id': article.id}) %}
\t\t\t\t{% set authorPDeleteUrl = path('authorPannel_delete', {'id': article.id}) %}
\t\t\t\t{% set articleUrl = path('actus_show', {'id': article.id}) %}

\t\t\t\t<tr class=\"table-default\">
\t\t\t\t\t<td scope=\"row\" class=\"font-weight-bold\">{{ loop.index }}</td>
\t\t\t\t\t<td>{{ article.publishDate | date('\\\\L\\\\e d.m.Y') }}</td>
\t\t\t\t\t<td><a href=\"{{ articleUrl }}\">{{ article.title }}</a></td>
\t\t\t\t\t<td>{{ article.description }}</td>

\t\t\t\t\t{% if article.status != 1 %}

\t\t\t\t\t<td class=\"text-muted\">Brouillon</td>

\t\t\t\t\t{% else %}

\t\t\t\t\t<td class=\"text-info\">Publié</td>

\t\t\t\t\t{% endif %}

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ authorPUpdateUrl }}\" class=\"btn btn-info text-light\" role=\"button\">Editer</a>
\t\t\t\t\t\t<a href=\"{{ authorPDeleteUrl }}\" class=\"btn btn-danger text-light\" role=\"button\">Supprimer</a>
\t\t\t\t\t\t</tdBrouillon>
\t\t\t\t</tr>

\t\t\t\t{% endfor %}

\t\t\t</tbody>
\t\t</table>
\t</div>

</div>


{% endblock %}", "back/author_pannel/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/author_pannel/index.html.twig");
    }
}
