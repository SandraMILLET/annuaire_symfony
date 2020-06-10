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

/* front/company/show.html.twig */
class __TwigTemplate_a9390c797e7bc0e9490758def53dd6b92a667e6bb4c0579898e4d48df16e8cce extends Template
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
            'leaflet' => [$this, 'block_leaflet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/company/show.html.twig", 1);
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

        echo "Artisan";
        
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
        $this->displayBlock('leaflet', $context, $blocks);
        // line 14
        echo "<!--head-->
<div id=\"p1\">
    <div class=\"container-fluid\">
        <div class=\"row  d-flex justify-content-center\">
            <div class=\"col-md-12- text-center headArt\">
                <div class=\"nomA\">
                <img class=\"logocompany\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 20, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 20, $this->source); })()), "imageFile", [], "any", false, false, false, 20), "html", null, true);
        echo "\"><br>
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 21, $this->source); })()), "society", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
                    <!--marche pas-->
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 23, $this->source); })()), "activity", [], "any", false, false, false, 23), "metier", [], "any", false, false, false, 23), "html", null, true);
        echo "
                </div>
                <div>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 26, $this->source); })()), "responsable", [], "any", false, false, false, 26), "html", null, true);
        echo "

                    <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 28, $this->source); })()), "codepostal", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 28, $this->source); })()), "ville", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-12 coordonnes\">
                    <a class=\"tel\" href=\"tel:+33608000000\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
                    <a class=\"tel\" href=\"mailto:nullepart@gmail.com\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</a><br>
                </div>
                <div class=\"siret\">
                    <p>Enregistré sous le numéro SIRET :<span> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 35, $this->source); })()), "SIRET", [], "any", false, false, false, 35), "html", null, true);
        echo "</span></p>
                </div>
                <div class=\"col-md-12\">
                ";
        // line 38
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 38, $this->source); })()), "reseaux", [], "any", false, false, false, 38), null)) {
            // line 39
            echo "                
                ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 41, $this->source); })()), "reseaux", [], "any", false, false, false, 41), "facebook", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/facebook.png\" alt=\"facebook\"></a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 42, $this->source); })()), "reseaux", [], "any", false, false, false, 42), "instagram", [], "any", false, false, false, 42), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/instagram.png\" alt=\"instagram\"></a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 43, $this->source); })()), "reseaux", [], "any", false, false, false, 43), "linkedin", [], "any", false, false, false, 43), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/linkedin.png\" alt=\"linkedin\"></a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 44, $this->source); })()), "reseaux", [], "any", false, false, false, 44), "youtube", [], "any", false, false, false, 44), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/youtube.png\" alt=\"facebook\"></a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 45, $this->source); })()), "reseaux", [], "any", false, false, false, 45), "twitter", [], "any", false, false, false, 45), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/twitter.png\" alt=\"facebook\"></a>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 46, $this->source); })()), "reseaux", [], "any", false, false, false, 46), "pinterest", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><img class=\"logosocial\" src=\"/img/pinterest.png\" alt=\"facebook\"></a>
                ";
        }
        // line 48
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <!--end head-->

    <!--center page and aside-->
    <div class=\"container-fluid centerAside\">
        <div class=\"row\">
            <section class=\"col-sm-9 col-md-9\">
                <div class=\"row presentation\">
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Présentation</h2>
                    </div>
                    ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 64, $this->source); })()), "presentation", [], "any", false, false, false, 64);
        echo "

                    <!--Service-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Services proposés</h2>
                    </div>
                    ";
        // line 70
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 70, $this->source); })()), "service", [], "any", false, false, false, 70);
        echo "

                    <!--Book-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Projets réalisés</h2>
                    </div>
                    ";
        // line 76
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 76, $this->source); })()), "book", [], "any", false, false, false, 76);
        echo "

                    <!-- Tarifs-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Tarifs Fixes</h2>
                    </div>
                    ";
        // line 82
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 82, $this->source); })()), "tarif", [], "any", false, false, false, 82);
        echo "

                    <!-- insertion map leaflet-->


                    <!-- fin insertion map leaflet-->

            </section>
            <!--Aside-->
            <div class=\"col-md-3 border-left border-warning text-center aside\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">
                        <div class=\"col-md-12 horaire\">
                            <h3 class=\"h3Art\">Horaires</h3>
                        </div>
                        ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 97, $this->source); })()), "horaire", [], "any", false, false, false, 97);
        echo "

                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Rendez-vous</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Devis</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Offres d'emploi</button>
                            ";
        // line 107
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 107, $this->source); })()), "emploi", [], "any", false, false, false, 107);
        echo "
                        </div>
                        <h3 class=\"h3Art\">Fournisseurs</h3>
                        <p>";
        // line 110
        echo twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 110, $this->source); })()), "fournisseur", [], "any", false, false, false, 110);
        echo "</p>
                        <div class=\"col-md-12\">
                            <h3 class=\"h3Art\">Retrouvez-nous sur : </h3>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"pointmap\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"instagram\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"facebook\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"twitter\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"Linkedin\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"Pinterest\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"youtube\"></img></a>
                        </div>
                    </aside>
                </div>
            </div>
            <!--end aside-->
        </div>
        <!--container-fluid-->
    </div>
    <!--end center page and aside-->
    <div id=\"mapid\">

        <script>
            var mymap = L.map('mapid').setView([43.2167, 2.35], 13);

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                        '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                        'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(mymap);

            var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; Openstreetmap France | &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            });
        </script>
    </div>
    <!--bas center-->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_leaflet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leaflet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leaflet"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"
    integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\"
    crossorigin=\"\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 7,  322 => 6,  261 => 110,  255 => 107,  242 => 97,  224 => 82,  215 => 76,  206 => 70,  197 => 64,  179 => 48,  174 => 46,  170 => 45,  166 => 44,  162 => 43,  158 => 42,  153 => 41,  149 => 39,  147 => 38,  141 => 35,  135 => 32,  131 => 31,  121 => 28,  116 => 26,  110 => 23,  105 => 21,  99 => 20,  91 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artisan{% endblock %}

{% block body %}
{% block leaflet %}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"
    integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\"
    crossorigin=\"\"></script>
{% endblock %}
<!--head-->
<div id=\"p1\">
    <div class=\"container-fluid\">
        <div class=\"row  d-flex justify-content-center\">
            <div class=\"col-md-12- text-center headArt\">
                <div class=\"nomA\">
                <img class=\"logocompany\" src=\"{{ vich_uploader_asset(company,'imageFile') }}\" alt=\"{{ company.imageFile }}\"><br>
                    {{ company.society }}<br>
                    <!--marche pas-->
                    {{ company.activity.metier }}
                </div>
                <div>
                    {{ company.responsable}}

                    <p>{{ company.address }}<br>{{ company.codepostal }} {{ company.ville }}</p>
                </div>
                <div class=\"col-md-12 coordonnes\">
                    <a class=\"tel\" href=\"tel:+33608000000\">{{ company.phone }}</a>
                    <a class=\"tel\" href=\"mailto:nullepart@gmail.com\">{{ company.email }}</a><br>
                </div>
                <div class=\"siret\">
                    <p>Enregistré sous le numéro SIRET :<span> {{ company.SIRET }}</span></p>
                </div>
                <div class=\"col-md-12\">
                {% if company.reseaux == NULL %}
                
                {% else %}
                    <a href=\"{{ company.reseaux.facebook }}\"><img class=\"logosocial\" src=\"/img/facebook.png\" alt=\"facebook\"></a>
                    <a href=\"{{ company.reseaux.instagram }}\"><img class=\"logosocial\" src=\"/img/instagram.png\" alt=\"instagram\"></a>
                    <a href=\"{{ company.reseaux.linkedin }}\"><img class=\"logosocial\" src=\"/img/linkedin.png\" alt=\"linkedin\"></a>
                    <a href=\"{{ company.reseaux.youtube }}\"><img class=\"logosocial\" src=\"/img/youtube.png\" alt=\"facebook\"></a>
                    <a href=\"{{ company.reseaux.twitter }}\"><img class=\"logosocial\" src=\"/img/twitter.png\" alt=\"facebook\"></a>
                    <a href=\"{{ company.reseaux.pinterest }}\"><img class=\"logosocial\" src=\"/img/pinterest.png\" alt=\"facebook\"></a>
                {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <!--end head-->

    <!--center page and aside-->
    <div class=\"container-fluid centerAside\">
        <div class=\"row\">
            <section class=\"col-sm-9 col-md-9\">
                <div class=\"row presentation\">
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Présentation</h2>
                    </div>
                    {{ company.presentation | raw }}

                    <!--Service-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Services proposés</h2>
                    </div>
                    {{ company.service | raw }}

                    <!--Book-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Projets réalisés</h2>
                    </div>
                    {{ company.book | raw }}

                    <!-- Tarifs-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Tarifs Fixes</h2>
                    </div>
                    {{ company.tarif | raw }}

                    <!-- insertion map leaflet-->


                    <!-- fin insertion map leaflet-->

            </section>
            <!--Aside-->
            <div class=\"col-md-3 border-left border-warning text-center aside\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">
                        <div class=\"col-md-12 horaire\">
                            <h3 class=\"h3Art\">Horaires</h3>
                        </div>
                        {{ company.horaire | raw}}

                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Rendez-vous</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Devis</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Offres d'emploi</button>
                            {{ company.emploi | raw }}
                        </div>
                        <h3 class=\"h3Art\">Fournisseurs</h3>
                        <p>{{ company.fournisseur | raw }}</p>
                        <div class=\"col-md-12\">
                            <h3 class=\"h3Art\">Retrouvez-nous sur : </h3>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"pointmap\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"instagram\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"facebook\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"twitter\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"Linkedin\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"Pinterest\"></img></a>
                            <a href=\"https://placeholder.com/\" target=\"_blank\"><img class=\"reseaux\"
                                    src=\"https://via.placeholder.com/150\" alt=\"youtube\"></img></a>
                        </div>
                    </aside>
                </div>
            </div>
            <!--end aside-->
        </div>
        <!--container-fluid-->
    </div>
    <!--end center page and aside-->
    <div id=\"mapid\">

        <script>
            var mymap = L.map('mapid').setView([43.2167, 2.35], 13);

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                        '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                        'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(mymap);

            var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; Openstreetmap France | &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            });
        </script>
    </div>
    <!--bas center-->

    {% endblock %}", "front/company/show.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/company/show.html.twig");
    }
}
