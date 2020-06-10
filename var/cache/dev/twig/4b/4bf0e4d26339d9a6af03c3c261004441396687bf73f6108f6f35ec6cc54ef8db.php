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

/* INC/header.html.twig */
class __TwigTemplate_28affcde7cfd7ba53dca80fe764acd050a0d8d1a36944e73dab0ea03f13e3f19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "INC/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "INC/header.html.twig"));

        // line 1
        $context["actusIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus_index");
        // line 2
        $context["rechercherIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_index");
        // line 3
        echo "
<div id=\"p1header\">
    <div class=\"container-fluid\">

        <div id=\"marg\" class=\"row\">

            <div class=\"col-3 col-sm-3 col-md-4 col-lg-5 col-xl-5 navga\">

                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ANNUAIRE DE L'AUDE</a>

            </div>
            <div class=\"col-9 col-sm-9 col-md-7 col-lg-6 col-xl-5 navmi\">
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["actusIndexUrl"]) || array_key_exists("actusIndexUrl", $context) ? $context["actusIndexUrl"] : (function () { throw new RuntimeError('Variable "actusIndexUrl" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">Actus</a>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>

                ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">S'inscrire</a>
                <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se Connecter</a>

                ";
        } else {
            // line 24
            echo "
                <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>

                ";
        }
        // line 28
        echo "
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\">Administration</a>

                ";
        }
        // line 34
        echo "
                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_index");
        echo "\">Company</a>

                ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 38
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_index");
            echo "\">Pro</a>
                ";
        }
        // line 40
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["rechercherIndexUrl"]) || array_key_exists("rechercherIndexUrl", $context) ? $context["rechercherIndexUrl"] : (function () { throw new RuntimeError('Variable "rechercherIndexUrl" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
                    <i class='lni lni-search-alt'></i>
                </a>
            </div>
            <div class=\"col-0 col-sm-0 col-md-1 col-lg-2 col-xl-2 navdr\"></div>
        </div>
        <div id=\"p1headerresp\">
            <div id=\"menuToggle\">
                <input type=\"checkbox\" />
                <span></span>
                <span></span>
                <span></span>
                <ul id=\"menu\">
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["actusIndexUrl"]) || array_key_exists("actusIndexUrl", $context) ? $context["actusIndexUrl"] : (function () { throw new RuntimeError('Variable "actusIndexUrl" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\">
                        <li>Actus</li>
                    </a>
                    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
                        <li>Contact</li>
                    </a>

                    ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "
                    <a href=\" ";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">
                        <li>Inscription</li>
                    </a>
                    <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        <li>Connexion</li>
                    </a>

                    ";
        } else {
            // line 70
            echo "
                    <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <li>Déconnexion</li>
                    </a>

                    ";
        }
        // line 76
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "
                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\"><li>Administration</li></a>

                ";
        }
        // line 81
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_index");
        echo "\"><li>Company</li></a>

                     ";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO")) {
            // line 84
            echo "
                    <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pro_index");
            echo "\"><li>Pro</li></a>
                    ";
        }
        // line 87
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["rechercherIndexUrl"]) || array_key_exists("rechercherIndexUrl", $context) ? $context["rechercherIndexUrl"] : (function () { throw new RuntimeError('Variable "rechercherIndexUrl" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\">
                        <li><i class='lni lni-search-alt'></i></li>
                    </a>
                </ul>
            </div>
            <div class=\"navga\"><a class =\"navga\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ANNUAIRE DE L'AUDE<a/></div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "INC/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 92,  215 => 87,  210 => 85,  207 => 84,  205 => 83,  199 => 81,  193 => 78,  190 => 77,  187 => 76,  179 => 71,  176 => 70,  168 => 65,  162 => 62,  159 => 61,  157 => 60,  150 => 56,  144 => 53,  127 => 40,  121 => 38,  119 => 37,  114 => 35,  111 => 34,  105 => 31,  102 => 30,  100 => 29,  97 => 28,  91 => 25,  88 => 24,  82 => 21,  78 => 20,  75 => 19,  73 => 18,  68 => 16,  64 => 15,  57 => 11,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set actusIndexUrl = path('actus_index') %}
{% set rechercherIndexUrl = path('rechercher_index') %}

<div id=\"p1header\">
    <div class=\"container-fluid\">

        <div id=\"marg\" class=\"row\">

            <div class=\"col-3 col-sm-3 col-md-4 col-lg-5 col-xl-5 navga\">

                <a href=\"{{ path('home')}}\">ANNUAIRE DE L'AUDE</a>

            </div>
            <div class=\"col-9 col-sm-9 col-md-7 col-lg-6 col-xl-5 navmi\">
                <a href=\"{{ actusIndexUrl }}\">Actus</a>
                <a href=\"{{ path('contact') }}\">Contact</a>

                {% if not app.user %}

                <a href=\"{{ path('security_registration') }}\">S'inscrire</a>
                <a href=\"{{ path('app_login') }}\">Se Connecter</a>

                {% else %}

                <a href=\"{{ path('app_logout') }}\">Déconnexion</a>

                {% endif %}

                {% if is_granted('ROLE_ADMIN') %}

                <a href=\"{{ path('users') }}\">Administration</a>

                {% endif %}

                <a href=\"{{ path('company_index') }}\">Company</a>

                {% if is_granted('ROLE_PRO') %}
                <a href=\"{{ path('user_pro_index') }}\">Pro</a>
                {% endif %}
                <a href=\"{{ rechercherIndexUrl }}\">
                    <i class='lni lni-search-alt'></i>
                </a>
            </div>
            <div class=\"col-0 col-sm-0 col-md-1 col-lg-2 col-xl-2 navdr\"></div>
        </div>
        <div id=\"p1headerresp\">
            <div id=\"menuToggle\">
                <input type=\"checkbox\" />
                <span></span>
                <span></span>
                <span></span>
                <ul id=\"menu\">
                    <a href=\"{{ actusIndexUrl }}\">
                        <li>Actus</li>
                    </a>
                    <a href=\"{{ path('contact') }}\">
                        <li>Contact</li>
                    </a>

                    {% if not app.user %}

                    <a href=\" {{path('security_registration')}}\">
                        <li>Inscription</li>
                    </a>
                    <a href=\"{{ path('app_login') }}\">
                        <li>Connexion</li>
                    </a>

                    {% else %}

                    <a href=\"{{ path('app_logout') }}\">
                        <li>Déconnexion</li>
                    </a>

                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}

                <a href=\"{{ path('users') }}\"><li>Administration</li></a>

                {% endif %}
                    <a href=\"{{ path('company_index') }}\"><li>Company</li></a>

                     {% if is_granted('ROLE_PRO') %}

                    <a href=\"{{ path('user_pro_index') }}\"><li>Pro</li></a>
                    {% endif %}
                    <a href=\"{{ rechercherIndexUrl }}\">
                        <li><i class='lni lni-search-alt'></i></li>
                    </a>
                </ul>
            </div>
            <div class=\"navga\"><a class =\"navga\" href=\"{{ path('home')}}\">ANNUAIRE DE L'AUDE<a/></div>
        </div>
    </div>
</div>", "INC/header.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/INC/header.html.twig");
    }
}
