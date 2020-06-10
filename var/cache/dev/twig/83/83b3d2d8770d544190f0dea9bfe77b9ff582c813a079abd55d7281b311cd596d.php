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

/* back/author_pannel/form.html.twig */
class __TwigTemplate_d251348a9fc6ea5d5926a5d5a31a30ad7c3a6db041217620672fb22ff25e942b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'articleStyle' => [$this, 'block_articleStyle'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/author_pannel/form.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 5
        $context["authorPIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_index");
        // line 1
        $this->parent = $this->loadTemplate("adminBase.html.twig", "back/author_pannel/form.html.twig", 1);
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

        // line 8
        echo "
";
        // line 9
        if ((isset($context["articleId"]) || array_key_exists("articleId", $context) ? $context["articleId"] : (function () { throw new RuntimeError('Variable "articleId" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "Mise à jour d'un article
";
        } else {
            // line 12
            echo "Création d'un article
";
        }
        // line 14
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_articleStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleStyle"));

        // line 18
        echo "
<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "<div class=\"row container col-10 d-flex justify-content-end mt-3 mb-5\">

\t<div class=\"container-fluid\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3 d-flex justify-content-start text-info\">Bienvenue</h1>
\t\t\t<p class=\"lead\">D'ici vous pouvez être en gestion de vos articles. En créer, en éditer, en supprimer, vous
\t\t\t\têtes aux commandes.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>A vous de jouer !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-info btn-lg mt-3\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" role=\"button\">Retour</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div id=\"formArticle\" class=\"container-fluid d-flex justify-content-center\">

\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 41, $this->source); })()), 'form_start');
        echo "

\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), 'row', ["label" => "Titre", "attr" => ["placeholder" => "Le titre de votre article"]]);
        echo "

\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'row', ["label" => "Description", "attr" => ["placeholder" => "Sa description"]]);
        // line 46
        echo "

\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 48, $this->source); })()), "content", [], "any", false, false, false, 48), 'row', ["label" => "Contenu", "attr" => ["placeholder" => "Son contenu", "class" => "summernote", "name" => "editordata"]]);
        // line 49
        echo "

\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'row', ["label" => "Image miniature", "attr" => ["placeholder" => "Et enfin sa miniature"]]);
        // line 52
        echo "

\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), 'row', ["label" => "Publier l'article"]);
        echo "

\t\t";
        // line 56
        if ((isset($context["articleId"]) || array_key_exists("articleId", $context) ? $context["articleId"] : (function () { throw new RuntimeError('Variable "articleId" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "\t\t<button type=\"submit\" class=\"btn btn-info\">Editer l'article</button>
\t\t";
        } else {
            // line 59
            echo "\t\t<button type=\"submit\" class=\"btn btn-info\">Créer un article</button>
\t\t";
        }
        // line 61
        echo "
\t\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 62, $this->source); })()), 'form_end');
        echo "

\t</div>

</div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
\tintegrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
\tintegrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
\tintegrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js\"></script>
<script>
\t\$('.summernote').summernote();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/author_pannel/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  197 => 61,  193 => 59,  189 => 57,  187 => 56,  182 => 54,  178 => 52,  176 => 51,  172 => 49,  170 => 48,  166 => 46,  164 => 45,  159 => 43,  154 => 41,  144 => 34,  132 => 24,  122 => 23,  109 => 18,  99 => 17,  88 => 14,  84 => 12,  80 => 10,  78 => 9,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminBase.html.twig' %}

{% form_theme formArticle 'bootstrap_4_layout.html.twig' %}

{% set authorPIndexUrl = path('authorPannel_index') %}

{% block title %}

{% if articleId %}
Mise à jour d'un article
{% else %}
Création d'un article
{% endif %}

{% endblock %}

{% block articleStyle %}

<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css\" rel=\"stylesheet\">

{% endblock %}

{% block body %}
<div class=\"row container col-10 d-flex justify-content-end mt-3 mb-5\">

\t<div class=\"container-fluid\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3 d-flex justify-content-start text-info\">Bienvenue</h1>
\t\t\t<p class=\"lead\">D'ici vous pouvez être en gestion de vos articles. En créer, en éditer, en supprimer, vous
\t\t\t\têtes aux commandes.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>A vous de jouer !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-info btn-lg mt-3\" href=\"{{ authorPIndexUrl }}\" role=\"button\">Retour</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div id=\"formArticle\" class=\"container-fluid d-flex justify-content-center\">

\t\t{{ form_start(formArticle) }}

\t\t{{ form_row(formArticle.title, {'label': \"Titre\", 'attr': {'placeholder': \"Le titre de votre article\"}}) }}

\t\t{{ form_row(formArticle.description, {'label': \"Description\", 'attr': {'placeholder': \"Sa description\"}})
\t\t}}

\t\t{{ form_row(formArticle.content, {'label': \"Contenu\", 'attr': {'placeholder': \"Son contenu\", 'class': \"summernote\", 'name': \"editordata\"}})
\t\t}}

\t\t{{ form_row(formArticle.image, {'label': \"Image miniature\", 'attr': {'placeholder': \"Et enfin sa miniature\"}})
\t\t}}

\t\t{{ form_row(formArticle.status, {'label': \"Publier l'article\"}) }}

\t\t{% if articleId %}
\t\t<button type=\"submit\" class=\"btn btn-info\">Editer l'article</button>
\t\t{% else %}
\t\t<button type=\"submit\" class=\"btn btn-info\">Créer un article</button>
\t\t{% endif %}

\t\t{{ form_end(formArticle) }}

\t</div>

</div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
\tintegrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
\tintegrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
\tintegrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
\tcrossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js\"></script>
<script>
\t\$('.summernote').summernote();
</script>
{% endblock %}", "back/author_pannel/form.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/back/author_pannel/form.html.twig");
    }
}
