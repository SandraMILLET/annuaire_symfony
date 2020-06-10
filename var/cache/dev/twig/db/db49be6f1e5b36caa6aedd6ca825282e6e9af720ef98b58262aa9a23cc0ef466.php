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

/* front/company/_form.html.twig */
class __TwigTemplate_b5dce92f9bc53062344ffb01cdd21759389680494aed38e232fb2afa02ec548a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/company/_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/company/_form.html.twig", 1);
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

        echo "Page de présentation professionnel";
        
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
        echo "<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css\" rel=\"stylesheet\">

<!--head-->


<div id=\"p1\">
    <div class=\"container-fluid\">
        <div class=\"row col-md-12\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
            <h1> Page de présentation</h1>
            <p class=\"saisr\">Veuillez saisir les informations concernant votre activité afin que votre page soit créer
            </p>
            <div class=\"col-md-12 headArt\">
                <h2>Identité :</h2>
                <div class=\"row col-md-12 d-flex justify-content-around\">

                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "imageFile", [], "any", false, false, false, 23), 'row', ["label" => "", "attr" => ["placeholder" => ""]]);
        echo "</br>
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "society", [], "any", false, false, false, 24), 'row', ["label" => "Votre société", "attr" => ["placeholder" => "Nom de la société"]]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "responsable", [], "any", false, false, false, 25), 'row', ["label" => "Le nom et le prénom du responsable", "attr" => ["placeholder" => "Nom et Prénom"]]);
        echo "
                </div>
                <div class=\"row col-md-12 d-flex justify-content-around\">
                    <!-- insertion categorie et metiers de la table métiers-->

                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "activity", [], "any", false, false, false, 30), "categorie", [], "any", false, false, false, 30), 'row', ["label" => "Catégorie", "attr" => ["placeholder" => ""]]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "activity", [], "any", false, false, false, 31), "metier", [], "any", false, false, false, 31), 'row', ["label" => "Votre métier", "attr" => ["placeholder" => ""]]);
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "SIRET", [], "any", false, false, false, 32), 'row', ["label" => "Votre SIRET", "attr" => ["placeholder" => "Les 14 chiffres du numéro SIRET"]]);
        echo "
                </div>
                <div class=\"container-fluid d-flex justify-content-center\">
                    <h2>Localisation et contact:</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 justify-content-around\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "address", [], "any", false, false, false, 38), 'row', ["label" => "Adresse", "attr" => ["placeholder" => "Adresse de la société"]]);
        // line 39
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "codepostal", [], "any", false, false, false, 40), 'row', ["label" => "Code postal", "attr" => ["placeholder" => "Code postal à 5 chiffres"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ville", [], "any", false, false, false, 41), 'row', ["label" => "Ville", "attr" => ["placeholder" => "Ville"]]);
        echo "
                        </div>
                        <div class=\"col-md-6 justify-content-around coordonnes\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), 'row', ["label" => "Numéro de téléphone", "attr" => ["placeholder" => "Numéro de téléphone de la société"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'row', ["label" => "Email", "attr" => ["placeholder" => "Email de la société"]]);
        echo "
                        </div>
                    </div>
                </div>
                    <!-- table reseaux -->
                    <h2>Réseaux sociaux :</h2>
                    <div class=\"row col-md-12 d-flex justify-content-around\">

                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reseaux", [], "any", false, false, false, 53), "facebook", [], "any", false, false, false, 53), 'row', ["label" => "Facebook :", "attr" => ["placeholder" => "Insérer le lien : https://....."]]);
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "reseaux", [], "any", false, false, false, 54), "twitter", [], "any", false, false, false, 54), 'row', ["label" => "Twitter :", "attr" => ["placeholder" => "Insérer le lien : https://....."]]);
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "reseaux", [], "any", false, false, false, 55), "instagram", [], "any", false, false, false, 55), 'row', ["label" => "Instagram :", "attr" => ["placeholder" => "Insérer le  : https://....."]]);
        echo "
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "reseaux", [], "any", false, false, false, 56), "linkedin", [], "any", false, false, false, 56), 'row', ["label" => "Linkedin :", "attr" => ["placeholder" => "Insérer le lien : https://....."]]);
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "reseaux", [], "any", false, false, false, 57), "pinterest", [], "any", false, false, false, 57), 'row', ["label" => "Pinterest :", "attr" => ["placeholder" => "Insérer le lien : https://....."]]);
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "reseaux", [], "any", false, false, false, 58), "youtube", [], "any", false, false, false, 58), 'row', ["label" => "Youtube :", "attr" => ["placeholder" => "Insérer le lien : https://....."]]);
        echo "

                    </div>
                </div>
            </div>
        </div>
    </div>
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
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "presentation", [], "any", false, false, false, 75), 'row', ["label" => "Présentation de votre activité", "attr" => ["placeholder" => "Dites nous ce que vous faites, qui vous êtes ?", "class" => "summernote", "name" => "editordata"]]);
        echo "

                    <!--Service-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Services proposés</h2>
                    </div>
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "service", [], "any", false, false, false, 81), 'row', ["label" => "Services", "attr" => ["placeholder" => "Quels sont les services que vous proposez ?", "class" => "summernote", "name" => "editordata"]]);
        echo "

                    <!--Book-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Projets réalisés</h2>
                    </div>
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "book", [], "any", false, false, false, 87), 'row', ["label" => "Book", "attr" => ["placeholder" => "Montrez nous un exemple de services ou de travaux effectués", "class" => "summernote", "name" => "editordata"]]);
        echo "

                    <!-- Tarifs-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Tarifs Fixes</h2>
                    </div>
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "tarif", [], "any", false, false, false, 93), 'row', ["label" => "Tarifs", "attr" => ["placeholder" => "Indiquez vos tarifs fixes", "class" => "summernote", "name" => "editordata"]]);
        // line 94
        echo "
                </div>
            </section>
            <!--Aside-->
            <div class=\"col-md-3 border-left border-warning text-center aside\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">
                        <div class=\"col-md-12 horaire\">
                            <h3 class=\"h3Art\">Horaires</h3>
                        </div>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "horaire", [], "any", false, false, false, 104), 'row', ["label" => "Horaires", "attr" => ["placeholder" => "Indiquez vos horaires", "class" => "summernote", "name" => "editordata"]]);
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
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "emploi", [], "any", false, false, false, 114), 'row', ["label" => "Emploi", "attr" => ["placeholder" => "Recherchez vous un apprenti, un salarié.... Indiquez votre recherche", "class" => "summernote", "name" => "editordata"]]);
        echo "
                        </div>
                        <h3 class=\"h3Art\">Fournisseurs</h3>
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "fournisseur", [], "any", false, false, false, 117), 'row', ["label" => "Fournisseurs/Partenaires", "attr" => ["placeholder" => "Quels sont vos partenaires ou fournisseurs", "class" => "summernote", "name" => "editordata"]]);
        echo "

                    </aside>
                </div>
            </div>
            <!--end aside-->
        </div>
        <!--container-fluid-->
    </div>
    <!--end center page and aside-->

    <!--bas center-->

    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "save", [], "any", false, false, false, 130), 'widget', ["label" => "Enregistrer"]);
        echo "
    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_scriptPerso($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptPerso"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptPerso"));

        // line 137
        echo "    <!--bootstrap-->

    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
        integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
        integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
        integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js\"></script>
    <script>
        \$('.summernote').summernote();
    </script>

    </script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/company/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 137,  329 => 136,  311 => 135,  298 => 131,  294 => 130,  278 => 117,  272 => 114,  259 => 104,  247 => 94,  245 => 93,  236 => 87,  227 => 81,  218 => 75,  198 => 58,  194 => 57,  190 => 56,  186 => 55,  182 => 54,  178 => 53,  167 => 45,  163 => 44,  157 => 41,  153 => 40,  150 => 39,  148 => 38,  139 => 32,  135 => 31,  131 => 30,  123 => 25,  119 => 24,  115 => 23,  104 => 15,  100 => 14,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de présentation professionnel{% endblock %}

{% block body %}
<link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css\" rel=\"stylesheet\">

<!--head-->


<div id=\"p1\">
    <div class=\"container-fluid\">
        <div class=\"row col-md-12\">
            {{ form_start(form) }}
            {{ form_errors(form) }}
            <h1> Page de présentation</h1>
            <p class=\"saisr\">Veuillez saisir les informations concernant votre activité afin que votre page soit créer
            </p>
            <div class=\"col-md-12 headArt\">
                <h2>Identité :</h2>
                <div class=\"row col-md-12 d-flex justify-content-around\">

                    {{ form_row(form.imageFile, {'label':'','attr': {'placeholder':''}}) }}</br>
                    {{ form_row(form.society, {'label':'Votre société','attr': {'placeholder':'Nom de la société'}}) }}
                    {{ form_row(form.responsable, {'label':'Le nom et le prénom du responsable','attr': {'placeholder':'Nom et Prénom'}})}}
                </div>
                <div class=\"row col-md-12 d-flex justify-content-around\">
                    <!-- insertion categorie et metiers de la table métiers-->

                    {{ form_row(form.activity.categorie, {'label':'Catégorie','attr': {'placeholder':''}})}}
                    {{ form_row(form.activity.metier, {'label':'Votre métier','attr': {'placeholder':''}})}}
                    {{ form_row(form.SIRET, {'label':'Votre SIRET','attr': {'placeholder':'Les 14 chiffres du numéro SIRET'}})}}
                </div>
                <div class=\"container-fluid d-flex justify-content-center\">
                    <h2>Localisation et contact:</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 justify-content-around\">
                            {{ form_row(form.address, {'label':'Adresse','attr': {'placeholder':'Adresse de la société'}})
                            }}
                            {{ form_row(form.codepostal, {'label':'Code postal','attr': {'placeholder':'Code postal à 5 chiffres'}})}}
                            {{ form_row(form.ville, {'label':'Ville','attr': {'placeholder':'Ville'}})}}
                        </div>
                        <div class=\"col-md-6 justify-content-around coordonnes\">
                            {{ form_row(form.phone, {'label':'Numéro de téléphone','attr': {'placeholder':'Numéro de téléphone de la société'}})}}
                            {{ form_row(form.email, {'label':'Email','attr': {'placeholder':'Email de la société'}})}}
                        </div>
                    </div>
                </div>
                    <!-- table reseaux -->
                    <h2>Réseaux sociaux :</h2>
                    <div class=\"row col-md-12 d-flex justify-content-around\">

                        {{ form_row(form.reseaux.facebook, {'label':'Facebook :','attr': {'placeholder':'Insérer le lien : https://.....'}})}}
                        {{ form_row(form.reseaux.twitter, {'label':'Twitter :','attr': {'placeholder':'Insérer le lien : https://.....'}})}}
                        {{ form_row(form.reseaux.instagram, {'label':'Instagram :','attr': {'placeholder':'Insérer le  : https://.....'}})}}
                        {{ form_row(form.reseaux.linkedin, {'label':'Linkedin :','attr': {'placeholder':'Insérer le lien : https://.....'}})}}
                        {{ form_row(form.reseaux.pinterest, {'label':'Pinterest :','attr': {'placeholder':'Insérer le lien : https://.....'}})}}
                        {{ form_row(form.reseaux.youtube, {'label':'Youtube :','attr': {'placeholder':'Insérer le lien : https://.....'}})}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end head-->

    <!--center page and aside-->
    <div class=\"container-fluid centerAside\">
        <div class=\"row\">
            <section class=\"col-sm-9 col-md-9\">
                <div class=\"row presentation\">
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Présentation</h2>
                    </div>
                    {{ form_row(form.presentation, {'label':'Présentation de votre activité','attr': {'placeholder':'Dites nous ce que vous faites, qui vous êtes ?', 'class': \"summernote\", 'name': \"editordata\"}})}}

                    <!--Service-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Services proposés</h2>
                    </div>
                    {{ form_row(form.service, {'label':'Services','attr': {'placeholder':'Quels sont les services que vous proposez ?', 'class': \"summernote\", 'name': \"editordata\"}})}}

                    <!--Book-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Projets réalisés</h2>
                    </div>
                    {{ form_row(form.book, {'label':'Book','attr': {'placeholder':'Montrez nous un exemple de services ou de travaux effectués', 'class': \"summernote\", 'name': \"editordata\"}})}}

                    <!-- Tarifs-->
                    <div class=\"col-md-12 sstitreArt\">
                        <h2>Tarifs Fixes</h2>
                    </div>
                    {{ form_row(form.tarif, {'label':'Tarifs','attr': {'placeholder':'Indiquez vos tarifs fixes', 'class': \"summernote\", 'name': \"editordata\"}})
                    }}
                </div>
            </section>
            <!--Aside-->
            <div class=\"col-md-3 border-left border-warning text-center aside\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">
                        <div class=\"col-md-12 horaire\">
                            <h3 class=\"h3Art\">Horaires</h3>
                        </div>
                        {{ form_row(form.horaire, {'label':'Horaires','attr': {'placeholder':'Indiquez vos horaires', 'class': \"summernote\", 'name': \"editordata\"}})}}

                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Rendez-vous</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Devis</button>
                        </div>
                        <div class=\"col-md-12 buttn\">
                            <button class=\"btnArt\">Offres d'emploi</button>
                            {{ form_row(form.emploi, {'label':'Emploi','attr': {'placeholder':'Recherchez vous un apprenti, un salarié.... Indiquez votre recherche', 'class': \"summernote\", 'name': \"editordata\"}})}}
                        </div>
                        <h3 class=\"h3Art\">Fournisseurs</h3>
                        {{ form_row(form.fournisseur, {'label':'Fournisseurs/Partenaires','attr': {'placeholder':'Quels sont vos partenaires ou fournisseurs', 'class': \"summernote\", 'name': \"editordata\"}})}}

                    </aside>
                </div>
            </div>
            <!--end aside-->
        </div>
        <!--container-fluid-->
    </div>
    <!--end center page and aside-->

    <!--bas center-->

    {{ form_widget(form.save, { 'label': 'Enregistrer' }) }}
    {{ form_end(form) }}

    {% endblock %}

    {% block javascripts %}{% endblock %}
    {% block scriptPerso %}
    <!--bootstrap-->

    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
        integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
        integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
        integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js\"></script>
    <script>
        \$('.summernote').summernote();
    </script>

    </script>{% endblock %}", "front/company/_form.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/front/company/_form.html.twig");
    }
}
