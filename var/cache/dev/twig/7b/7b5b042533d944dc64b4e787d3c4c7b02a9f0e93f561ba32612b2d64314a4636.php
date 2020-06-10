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

/* admin/adminMenu.html.twig */
class __TwigTemplate_6a49d2876c022ff1a59071cc53b50f0763a4c12b2ba6a844695481f2440a02ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminMenu.html.twig"));

        // line 1
        echo "<div class=\"main-content\">
\t<!--Left Menu-->
\t<div class=\"sidebar\" role=\"navigation\">
\t\t<div class=\"navbar-collapse\">
\t\t\t<nav class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar\"
\t\t\t\tid=\"cbp-spmenu-s1\">
\t\t\t\t<div class=\"scrollbar scrollbar1\">
\t\t\t\t\t<ul class=\"nav\" id=\"side-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["userIndex"]) || array_key_exists("userIndex", $context) ? $context["userIndex"] : (function () { throw new RuntimeError('Variable "userIndex" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" class=\"active\">Utilisateurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"active\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["companyIndex"]) || array_key_exists("companyIndex", $context) ? $context["companyIndex"] : (function () { throw new RuntimeError('Variable "companyIndex" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">Entreprises & Associations</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"active\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["authorPIndexUrl"]) || array_key_exists("authorPIndexUrl", $context) ? $context["authorPIndexUrl"] : (function () { throw new RuntimeError('Variable "authorPIndexUrl" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- //sidebar-collapse -->
\t\t\t</nav>
\t\t</div>
\t</div>

\t<!--left-fixed -navigation-->
\t<!-- header-starts -->
\t<div class=\"sticky-header header-section \">
\t\t<div class=\"header-left\">
\t\t\t<!--logo -->
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t<ul>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h1>Annuaire</h1>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<div class=\"col-md-12\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!--//logo-->



\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<!--search-box-->

\t\t<!--//end-search-box-->
\t\t<div class=\"header-right\">

\t\t\t<!--notification menu end -->
\t\t\t<div class=\"profile_details\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown profile_details_drop\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drp-mnu\">
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a> </li>
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--toggle button start-->

\t\t\t<!--toggle button end-->
\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<div class=\"col-md-12\"> </div>
\t</div>
\t<!-- //header-ends -->
\t<!-- main content start-->
\t<div id=\"page-wrapper\">
\t\t<div class=\"main-page\">

\t\t\t<!-- four-grids -->

\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<!-- //four-grids -->
\t\t<!--row-->
\t\t<div class=\"row\">





\t\t</div>


\t</div>


\t<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
<!--row-->

<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
<!--row-->
<div class=\"row\">


\t<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
</div>
</div>
<!--footer-->

<!--//footer-->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  66 => 16,  60 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-content\">
\t<!--Left Menu-->
\t<div class=\"sidebar\" role=\"navigation\">
\t\t<div class=\"navbar-collapse\">
\t\t\t<nav class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar\"
\t\t\t\tid=\"cbp-spmenu-s1\">
\t\t\t\t<div class=\"scrollbar scrollbar1\">
\t\t\t\t\t<ul class=\"nav\" id=\"side-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ userIndex }}\" class=\"active\">Utilisateurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"active\" href=\"{{ companyIndex }}\">Entreprises & Associations</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"active\" href=\"{{ authorPIndexUrl }}\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- //sidebar-collapse -->
\t\t\t</nav>
\t\t</div>
\t</div>

\t<!--left-fixed -navigation-->
\t<!-- header-starts -->
\t<div class=\"sticky-header header-section \">
\t\t<div class=\"header-left\">
\t\t\t<!--logo -->
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"{{ path('home') }}\">
\t\t\t\t\t<ul>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h1>Annuaire</h1>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<div class=\"col-md-12\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!--//logo-->



\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<!--search-box-->

\t\t<!--//end-search-box-->
\t\t<div class=\"header-right\">

\t\t\t<!--notification menu end -->
\t\t\t<div class=\"profile_details\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"dropdown profile_details_drop\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drp-mnu\">
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a> </li>
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
\t\t\t\t\t\t\t<li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--toggle button start-->

\t\t\t<!--toggle button end-->
\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<div class=\"col-md-12\"> </div>
\t</div>
\t<!-- //header-ends -->
\t<!-- main content start-->
\t<div id=\"page-wrapper\">
\t\t<div class=\"main-page\">

\t\t\t<!-- four-grids -->

\t\t\t<div class=\"col-md-12\"> </div>
\t\t</div>
\t\t<!-- //four-grids -->
\t\t<!--row-->
\t\t<div class=\"row\">





\t\t</div>


\t</div>


\t<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
<!--row-->

<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
<!--row-->
<div class=\"row\">


\t<div class=\"col-md-12\"> </div>
</div>
<!--//row-->
</div>
</div>
<!--footer-->

<!--//footer-->
</div>", "admin/adminMenu.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/admin/adminMenu.html.twig");
    }
}
