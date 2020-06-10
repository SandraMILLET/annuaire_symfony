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

/* INC/footer.html.twig */
class __TwigTemplate_f1f50952e8d71412339fa947fb1873e9bf0b209ed772c6cb98467c2e6258292e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "INC/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "INC/footer.html.twig"));

        // line 1
        echo "<footer>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Inscrivez-vous à notre newsletter</div>

                <button type=\"button\" class=\"btn btn-outline-light\">Votre e-mail</button><br>

                <button type=\"button\" class=\"btn btn-outline-light\">Je m'inscris</button>

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Nos solutions</div>
                Lorem ipsum dolor sit amet, consectetur adipiagna ultrices iaculis. Vestibulum,
                felis, libero, ac lacinia dictumst eget amet ut. Imperdiet pellentesque
                fermentum lacinia nibh nulla morbi a.

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">A propos</div>
                Lorem ipsum dolor sit amet, consectetur adipiagna ultrices iaculis. Vestibulum,
                felis, libero, ac lacinia dictumst eget amet ut. Imperdiet pellentesque
                fermentum lacinia nibh nulla morbi a.

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Support et Contact</div>
                04 68 56 67 11
                Suivez-nous !

            </div>
        </div>
    </div>

</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "INC/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Inscrivez-vous à notre newsletter</div>

                <button type=\"button\" class=\"btn btn-outline-light\">Votre e-mail</button><br>

                <button type=\"button\" class=\"btn btn-outline-light\">Je m'inscris</button>

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Nos solutions</div>
                Lorem ipsum dolor sit amet, consectetur adipiagna ultrices iaculis. Vestibulum,
                felis, libero, ac lacinia dictumst eget amet ut. Imperdiet pellentesque
                fermentum lacinia nibh nulla morbi a.

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">A propos</div>
                Lorem ipsum dolor sit amet, consectetur adipiagna ultrices iaculis. Vestibulum,
                felis, libero, ac lacinia dictumst eget amet ut. Imperdiet pellentesque
                fermentum lacinia nibh nulla morbi a.

            </div>
            <div class=\"col-sm-3 footerorg\">

                <div class=\"footertitle\">Support et Contact</div>
                04 68 56 67 11
                Suivez-nous !

            </div>
        </div>
    </div>

</footer>", "INC/footer.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/INC/footer.html.twig");
    }
}
