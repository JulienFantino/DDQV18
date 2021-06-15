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

/* AppBundle:Questionnaires:QuestionnaireParking.html.twig */

class __TwigTemplate_a819578ec6ee2cd072a98e2aff829a15c908f377cca7f61445a1f47daf9cd192 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Questionnaires:QuestionnaireParking.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires:QuestionnaireParking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires:QuestionnaireParking.html.twig"));

        // line 2
        $context["__internal_9f054b0fc20c47c84d06356c90a7b12e1355d4a8e851867d35fae25832c182d3"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Questionnaires:QuestionnaireParking.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Demande d'attribution d'une place sur le parking Mourey</h1>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 6, $this->source);
        })()), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 7, $this->source);
        })()), 'errors');
        echo "
    <div class='zone-info'><strong>N° agent :</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 8, $this->source);
        })()), "nomium", []), "html", null, true);
        echo "</br></br>
        <strong>Nom :</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 9, $this->source);
        })()), "nom", []), "html", null, true);
        echo " <strong>Prénom :</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 9, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "
    </div>
    <div class='zone-info'>sollicite une place sur le parking Mourey :</div>
    <div class='section'>
        <div>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 13, $this->source);
        })()), "enfants", []), 'widget');
        echo "</div>
        <div>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 14, $this->source);
        })()), "handicap", []), 'widget');
        echo "</div>
        <div>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 15, $this->source);
        })()), "emploi", []), 'widget');
        echo "</div>
    </div>
    <div class='zone-info'>Je soussigné(e) ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 17, $this->source);
        })()), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 17, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "</div>
    <div class='zone-info'>Domicilié(e) au :</div>
    <div class=\"section\"> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 19, $this->source);
        })()), "adresse", []), 'widget');
        echo " </div>

    <div class='zone-info'>Certifie sur l'honneur avoir à ma charge, au sens fiscal :</div>
    <div class='section'>
        <div>Enfant 1 : ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 23, $this->source);
        })()), "enfant1", []), 'widget');
        echo " né(e) le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 23, $this->source);
        })()), "datenaissance1", []), 'widget');
        echo "</div>
        <div>Enfant 2 : ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 24, $this->source);
        })()), "enfant2", []), 'widget');
        echo " né(e) le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 24, $this->source);
        })()), "datenaissance2", []), 'widget');
        echo "</div>
        <div>Enfant 3 : ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 25, $this->source);
        })()), "enfant3", []), 'widget');
        echo " né(e) le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 25, $this->source);
        })()), "datenaissance3", []), 'widget');
        echo "</div>
        <div>Enfant 4 : ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 26, $this->source);
        })()), "enfant4", []), 'widget');
        echo " né(e) le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 26, $this->source);
        })()), "datenaissance4", []), 'widget');
        echo "</div>
    </div>
    <div class='zone-info'>Fait à ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 28, $this->source);
        })()), "idsite", []), "ville", []), "html", null, true);
        echo " le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 28, $this->source);
        })()), "datemodif", []), 'widget');
        echo "</div>
    <div class='zone-info'><strong>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 29, $this->source);
        })()), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 29, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</strong></div>
    <div class='section'>
        <div>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 31, $this->source);
        })()), "signature", []), 'widget');
        echo "</div>
    </div>
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 33, $this->source);
        })()), 'form_end');
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Questionnaires:QuestionnaireParking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(162 => 33, 157 => 31, 150 => 29, 144 => 28, 137 => 26, 131 => 25, 125 => 24, 119 => 23, 112 => 19, 105 => 17, 100 => 15, 96 => 14, 92 => 13, 83 => 9, 79 => 8, 75 => 7, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Demande d'attribution d'une place sur le parking Mourey</h1>
    {{ form_start(form) }}
    {{ form_errors(form) }}
    <div class='zone-info'><strong>N° agent :</strong> {{ agent.nomium }}</br></br>
        <strong>Nom :</strong> {{ agent.nom }} <strong>Prénom :</strong> {{ agent.prenom }}
    </div>
    <div class='zone-info'>sollicite une place sur le parking Mourey :</div>
    <div class='section'>
        <div>{{ form_widget(form.enfants) }}</div>
        <div>{{ form_widget(form.handicap) }}</div>
        <div>{{ form_widget(form.emploi) }}</div>
    </div>
    <div class='zone-info'>Je soussigné(e) {{ agent.nom }} {{ agent.prenom }}</div>
    <div class='zone-info'>Domicilié(e) au :</div>
    <div class=\"section\"> {{ form_widget(form.adresse) }} </div>

    <div class='zone-info'>Certifie sur l'honneur avoir à ma charge, au sens fiscal :</div>
    <div class='section'>
        <div>Enfant 1 : {{ form_widget(form.enfant1) }} né(e) le {{ form_widget(form.datenaissance1) }}</div>
        <div>Enfant 2 : {{ form_widget(form.enfant2) }} né(e) le {{ form_widget(form.datenaissance2) }}</div>
        <div>Enfant 3 : {{ form_widget(form.enfant3) }} né(e) le {{ form_widget(form.datenaissance3) }}</div>
        <div>Enfant 4 : {{ form_widget(form.enfant4) }} né(e) le {{ form_widget(form.datenaissance4) }}</div>
    </div>
    <div class='zone-info'>Fait à {{ agent.idsite.ville }} le {{ form_widget(form.datemodif) }}</div>
    <div class='zone-info'><strong>{{ agent.prenom }} {{ agent.nom }}</strong></div>
    <div class='section'>
        <div>{{ form_widget(form.signature) }}</div>
    </div>
    {{ form_end(form) }}
{% endblock %}", "AppBundle:Questionnaires:QuestionnaireParking.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Questionnaires/QuestionnaireParking.html.twig");
    }
}
