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

/* AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig */

class __TwigTemplate_a402f2c9b5ecc1b6ad43886f4e52c08d3e0db33c924e4e092298323864f9659f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig"));

        // line 2
        $context["__internal_b312147fc4cf348aba5ab695235f19695293b9f84946081d8696aead6c368f83"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig", 2);
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
        echo "    <h1>Demande de travail à temps partiel choisi</h1>
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
    <div class=\"zone-info\">
        <strong>N° Agent :</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 9, $this->source);
        })()), "nomium", []), "html", null, true);
        echo "</br>
        <strong>Nom :</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 10, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</br>
        <strong>Prénom :</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 11, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "</br>
        <strong>Service :</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 12, $this->source);
        })()), "nomEntite", []), "html", null, true);
        echo "</br>
        <strong>Qualification :</strong>
    </div>
    <div class=\"zone-info\">
        <h3>ENFANTS A CHARGE :</h3>
    </div>
    <div class=\"section\">
        <div>Date de naissance Enfant 1 : ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 19, $this->source);
        })()), "dateenfant1", []), 'widget');
        echo " Date de naissance Enfant 2
            : ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 20, $this->source);
        })()), "dateenfant2", []), 'widget');
        echo "</div>
        <div>Date de naissance Enfant 3 : ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 21, $this->source);
        })()), "dateenfant3", []), 'widget');
        echo " Date de naissance Enfant 4
            : ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 22, $this->source);
        })()), "dateenfant4", []), 'widget');
        echo "</div>
    </div>
    <div class=\"zone-info\">
        <h3>CONTRAT EN COURS :";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 25, $this->source);
        })()), "idDdqContrat", []), "nbHeures", []), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 29, $this->source);
        })()), "motif", []), 'widget');
        echo "</div>
    </div>

    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Du 1er Octobre ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
            throw new RuntimeError('Variable "year" does not exist.', 34, $this->source);
        })()), "html", null, true);
        echo " au 30 Septembre ";
        echo twig_escape_filter($this->env, ((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
                throw new RuntimeError('Variable "year" does not exist.', 34, $this->source);
            })()) + 1), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"section\">
            <h3>Choix du contrat :</h3>
            <p>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 38, $this->source);
        })()), "idDdqContrat", []), 'widget');
        echo "</p>
        </div>

    </div>

    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 43, $this->source);
        })()), 'form_end');
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(152 => 43, 144 => 38, 135 => 34, 127 => 29, 120 => 25, 114 => 22, 110 => 21, 106 => 20, 102 => 19, 92 => 12, 88 => 11, 84 => 10, 80 => 9, 75 => 7, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Demande de travail à temps partiel choisi</h1>
    {{ form_start(form) }}
    {{ form_errors(form) }}
    <div class=\"zone-info\">
        <strong>N° Agent :</strong> {{ agent.nomium }}</br>
        <strong>Nom :</strong> {{ agent.nom }}</br>
        <strong>Prénom :</strong> {{ agent.prenom }}</br>
        <strong>Service :</strong> {{ agent.nomEntite }}</br>
        <strong>Qualification :</strong>
    </div>
    <div class=\"zone-info\">
        <h3>ENFANTS A CHARGE :</h3>
    </div>
    <div class=\"section\">
        <div>Date de naissance Enfant 1 : {{ form_widget(form.dateenfant1) }} Date de naissance Enfant 2
            : {{ form_widget(form.dateenfant2) }}</div>
        <div>Date de naissance Enfant 3 : {{ form_widget(form.dateenfant3) }} Date de naissance Enfant 4
            : {{ form_widget(form.dateenfant4) }}</div>
    </div>
    <div class=\"zone-info\">
        <h3>CONTRAT EN COURS :{{ agent.idDdqContrat.nbHeures }}</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>{{ form_widget(form.motif) }}</div>
    </div>

    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Du 1er Octobre {{ year }} au 30 Septembre {{ year+1 }}</h3>
        </div>
        <div class=\"section\">
            <h3>Choix du contrat :</h3>
            <p>{{ form_widget(form.idDdqContrat) }}</p>
        </div>

    </div>

    {{ form_end(form) }}
{% endblock %}", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape2.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Questionnaires/TP/QuestionnaireTPEtape2.html.twig");
    }
}
