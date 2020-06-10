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

/* adminBase.html.twig */
class __TwigTemplate_6d58d03ee2d074fbfb0e35a0b71c275e898273277e20f35e0a9d989ea664ba69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'articleStyle' => [$this, 'block_articleStyle'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminBase.html.twig"));

        // line 1
        $context["authorPIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorPannel_index");
        // line 2
        $context["companyIndex"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_index");
        // line 3
        $context["userIndex"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        // line 4
        echo "
<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "\t";
        $this->displayBlock('articleStyle', $context, $blocks);
        // line 30
        echo "</head>

<body>
\t";
        // line 36
        echo "
\t<div class=\"Home\">
\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t<h1>Annuaire</h1>
\t\t</a>
\t</div>

\t";
        // line 43
        $this->displayBlock('nav', $context, $blocks);
        // line 58
        echo "\t";
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
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

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t";
        // line 22
        echo "
\t";
        // line 24
        echo "\t<!--bootstrap-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_articleStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleStyle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleStyle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 44
        echo "\t<div class=\"container col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2\" id=\"right-menu\">
\t\t<ul class=\"list-group list-group-flush\">
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["userIndex"]) || array_key_exists("userIndex", $context) ? $context["userIndex"] : (function () { throw new RuntimeError('Variable "userIndex" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\">Utilisateurs</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["companyIndex"]) || array_key_exists("companyIndex", $context) ? $context["companyIndex"] : (function () { throw new RuntimeError('Variable "companyIndex" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\">Entreprises &
\t\t\t\t\tAssociations</a></li>
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\">Blog</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adminBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 59,  219 => 58,  204 => 53,  198 => 50,  192 => 47,  187 => 44,  177 => 43,  159 => 29,  147 => 27,  142 => 24,  139 => 22,  137 => 14,  127 => 13,  108 => 10,  95 => 61,  92 => 58,  90 => 43,  82 => 38,  78 => 36,  73 => 30,  70 => 29,  68 => 13,  62 => 10,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set authorPIndexUrl = path('authorPannel_index') %}
{% set companyIndex = path('company_index') %}
{% set userIndex = path('users') %}

<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\">
\t<title>{% block title %}Admin{% endblock %}</title>


\t{% block stylesheets %}
\t{#
\t\tLiens du template implémenté de Lucas, je vais en faire un manuel pour avoir quelque chose de fonctionnel et permissif un minimum
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/bootstrap.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/font-awesome.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/animate.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/custom.css') }} \">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/style.css') }}\">
\t#}

\t{# IMPLEMENTATION TEMPLATE KEY #}
\t<!--bootstrap-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/admin/style.css') }}\">
\t{% endblock %}
\t{% block articleStyle %}{% endblock %}
</head>

<body>
\t{#
\t{% include('admin/adminMenu.html.twig') %}
\t#}

\t<div class=\"Home\">
\t\t<a href=\"{{ path('home') }}\">
\t\t\t<h1>Annuaire</h1>
\t\t</a>
\t</div>

\t{% block nav %}
\t<div class=\"container col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2\" id=\"right-menu\">
\t\t<ul class=\"list-group list-group-flush\">
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"{{ userIndex }}\">Utilisateurs</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"{{ companyIndex }}\">Entreprises &
\t\t\t\t\tAssociations</a></li>
\t\t\t<li class=\"list-group-item menu-links text-center\"><a class=\"text-white\"
\t\t\t\t\thref=\"{{ authorPIndexUrl }}\">Blog</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t{% endblock %}
\t{% block body %}

\t{% endblock %}

</body>

</html>", "adminBase.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/adminBase.html.twig");
    }
}
