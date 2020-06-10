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

/* @KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig */
class __TwigTemplate_5d04c5c6481332c02f0f291a3c1ae0a2a3d23fee2e32e20ac11be60d15102b87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'karser_recaptcha3_widget' => [$this, 'block_karser_recaptcha3_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig"));

        // line 1
        $this->displayBlock('karser_recaptcha3_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_karser_recaptcha3_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "karser_recaptcha3_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "karser_recaptcha3_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()), "hidden")) : ("hidden"));
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "enabled", [], "any", false, false, false, 6)) {
            // line 7
            echo "<script>
                var recaptchaCallback_";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " = function() {
                    grecaptcha.execute('";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "site_key", [], "any", false, false, false, 9), "html", null, true);
            echo "', {action: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "action_name", [], "any", false, false, false, 9), "html", null, true);
            echo "'}).then(function(token) {
                        document.getElementById('";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "').value = token;
                    });
                    setTimeout(recaptchaCallback_";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
            echo ", 100000);
                };
            </script>
            <script src=\"https://www.google.com/recaptcha/api.js?render=";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "site_key", [], "any", false, false, false, 15), "html", null, true);
            echo "&onload=recaptchaCallback_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" async defer></script>";
        }
        // line 18
        echo "    ";
        $___internal_5f9e840cf478a48c19fd066c8528fdfad499214a9b42cb9e93cb94d09db40dff_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_5f9e840cf478a48c19fd066c8528fdfad499214a9b42cb9e93cb94d09db40dff_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 2,  105 => 18,  99 => 15,  93 => 12,  88 => 10,  82 => 9,  78 => 8,  75 => 7,  73 => 6,  68 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block karser_recaptcha3_widget %}
    {% apply spaceless %}
        {%- set type = type|default('hidden') -%}
        {{ block('form_widget_simple') }}

        {% if form.vars.enabled -%}
            <script>
                var recaptchaCallback_{{ id }} = function() {
                    grecaptcha.execute('{{ form.vars.site_key }}', {action: '{{ form.vars.action_name }}'}).then(function(token) {
                        document.getElementById('{{ id }}').value = token;
                    });
                    setTimeout(recaptchaCallback_{{ id }}, 100000);
                };
            </script>
            <script src=\"https://www.google.com/recaptcha/api.js?render={{ form.vars.site_key }}&onload=recaptchaCallback_{{ id }}\" async defer></script>

        {%- endif %}
    {% endapply %}
{% endblock %}
", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/vendor/karser/karser-recaptcha3-bundle/Resources/views/Form/karser_recaptcha3_widget.html.twig");
    }
}
