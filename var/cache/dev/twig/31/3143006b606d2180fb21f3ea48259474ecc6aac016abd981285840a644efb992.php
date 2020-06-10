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

/* front/home/index.html.twig */
class __TwigTemplate_931654c2d161ce6bdfed72ad6a2be3d1bfdce960484d363f1dfac6dba5b652ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        // line 3
        $context["rechercherIndexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_index");
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/home/index.html.twig", 1);
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

        echo "Annuaire de l'Aude";
        
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
        echo "


<div id=\"p1\">
    ";
        // line 17
        echo "    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-sm-12 headmi\">

                <span class=\"respmod\">ANNUAIRE PROFESSIONNEL<br>
                    Trouvez un artisan proche de chez vous !<br></span>

                <div class=\"form-group\">

                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

                </div>

            </div>
        </div>
    </div>
</div>

<div id=\"p2\">

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"card-deck\">
                <div class=\"card\">
                    <img src=\"./img/cci1.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_batiment");
        echo "\">
                            <h5 class=\"card-title\">Bâtiment</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/beauté.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_beaute");
        echo "\">
                            <h5 class=\"card-title\">Beauté</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/cci3.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_restauration");
        echo "\">
                            <h5 class=\"card-title\">Restauration</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/santé.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_sante");
        echo "\">
                            <h5 class=\"card-title\">Santé</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"card-deck\">
                <div class=\"card\">
                    <img src=\"./img/serviceperso.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_serviceperso");
        echo "\">
                            <h5 class=\"card-title\">Service à la personne</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/sevicepro.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_servicepro");
        echo "\">
                            <h5 class=\"card-title\">Service aux professionnels</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/sport.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_sport");
        echo "\">
                            <h5 class=\"card-title\">Sport</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/cci3.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercher_association");
        echo "\">
                            <h5 class=\"card-title\">Association</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"p3\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 servl\"></div>
            <div class=\"col-sm-8 servr\">

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-eye bigicon'></i>
                        <br>
                        VISIBILITÉ
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <br>

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-thumbs-up bigicon'></i>
                        <br>
                        PRATIQUE
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <br>

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-notepad bigicon'></i>
                        <br>
                        ACTUS
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id=\"p4\">


    <div class=\"row\" style=\"margin:0\">
        <div class=\"col-sm-4 actulist\">

            <ul class=\"list-unstyled\">
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media my-4\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
            </ul>

        </div>
        <div class=\"col-sm-4 actulist\">

            <ul class=\"list-unstyled\">
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media my-4\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
            </ul>

        </div>
        <div class=\"col-sm-4 actusnormes\"></div>

    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 125,  220 => 114,  206 => 103,  192 => 92,  175 => 78,  161 => 67,  147 => 56,  133 => 45,  113 => 28,  109 => 27,  97 => 17,  91 => 8,  81 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set rechercherIndexUrl = path('rechercher_index') %}

{% block title %}Annuaire de l'Aude{% endblock %}

{% block body %}



<div id=\"p1\">
    {#
    <div class=\"col-md-12\">
        <div id=\"js\" onclick=\"display()\" style=\"visibility: hidden\"></div>
    </div>
    #}
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-sm-12 headmi\">

                <span class=\"respmod\">ANNUAIRE PROFESSIONNEL<br>
                    Trouvez un artisan proche de chez vous !<br></span>

                <div class=\"form-group\">

                    {{ form_start(search_form) }}
                    {{ form_end(search_form) }}

                </div>

            </div>
        </div>
    </div>
</div>

<div id=\"p2\">

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"card-deck\">
                <div class=\"card\">
                    <img src=\"./img/cci1.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_batiment') }}\">
                            <h5 class=\"card-title\">Bâtiment</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/beauté.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_beaute') }}\">
                            <h5 class=\"card-title\">Beauté</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/cci3.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_restauration') }}\">
                            <h5 class=\"card-title\">Restauration</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/santé.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_sante') }}\">
                            <h5 class=\"card-title\">Santé</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"card-deck\">
                <div class=\"card\">
                    <img src=\"./img/serviceperso.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_serviceperso') }}\">
                            <h5 class=\"card-title\">Service à la personne</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/sevicepro.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_servicepro') }}\">
                            <h5 class=\"card-title\">Service aux professionnels</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/sport.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_sport') }}\">
                            <h5 class=\"card-title\">Sport</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"./img/cci3.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"{{ path('rechercher_association') }}\">
                            <h5 class=\"card-title\">Association</h5>
                        </a>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"p3\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 servl\"></div>
            <div class=\"col-sm-8 servr\">

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-eye bigicon'></i>
                        <br>
                        VISIBILITÉ
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <br>

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-thumbs-up bigicon'></i>
                        <br>
                        PRATIQUE
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <br>

                <div class=\"servbloc\">
                    <div class=\"servblocicon\">
                        <i class='lni lni-notepad bigicon'></i>
                        <br>
                        ACTUS
                    </div>
                    <div class=\"servdesc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id=\"p4\">


    <div class=\"row\" style=\"margin:0\">
        <div class=\"col-sm-4 actulist\">

            <ul class=\"list-unstyled\">
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media my-4\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
            </ul>

        </div>
        <div class=\"col-sm-4 actulist\">

            <ul class=\"list-unstyled\">
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media my-4\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
                <li class=\"media\">
                    <img src=\"./img/actus.png\" class=\"mr-3 imgactussize\" alt=\"...\">
                    <div class=\"media-body\">
                        <h5 class=\"mt-0 mb-1\">Dernière Norme</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin.
                        <b>Consulter</b>
                    </div>
                </li>
            </ul>

        </div>
        <div class=\"col-sm-4 actusnormes\"></div>

    </div>

</div>
{#
<script src=\"js/geo.js\"></script>
#}
{% endblock %}", "front/home/index.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/home/index.html.twig");
    }
}
