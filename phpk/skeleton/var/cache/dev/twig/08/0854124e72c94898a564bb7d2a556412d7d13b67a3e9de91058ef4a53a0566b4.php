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

/* AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig */

class __TwigTemplate_1ddccffa25e74ff84607b93646d49ed137f35b4aecb8ff87b5f3d81256b06804 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig"));

        // line 2
        $context["__internal_ab3de4bedb3301bf2bc919ed50d6e766ff2d4fb447d9b370c1b038c5381c6e8a"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig", 2);
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
    <div class=\"zone-info\">
        <strong>N° Agent :</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 8, $this->source);
        })()), "nomium", []), "html", null, true);
        echo "</br>
        <strong>Nom :</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 9, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</br>
        <strong>Prénom :</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 10, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "</br>
        <strong>Service :</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 11, $this->source);
        })()), "nomEntite", []), "html", null, true);
        echo "</br>
        <strong>Qualification :</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 12, $this->source);
        })()), "libelleemploi", []), "html", null, true);
        echo "</br>
    </div>
    <div class=\"zone-info\">
        <h3>ENFANTS A CHARGE :</h3>
    </div>
    <div class=\"section\">
        <div>Date de naissance Enfant 1 : ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 18, $this->source);
        })()), "dateenfant1", []), 'widget');
        echo " Date de naissance Enfant 2
            : ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 19, $this->source);
        })()), "dateenfant2", []), 'widget');
        echo "</div>
        <div>Date de naissance Enfant 3 : ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 20, $this->source);
        })()), "dateenfant3", []), 'widget');
        echo " Date de naissance Enfant 4
            : ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 21, $this->source);
        })()), "dateenfant4", []), 'widget');
        echo "</div>
    </div>
    <div class=\"zone-info\">
        <h3>CONTRAT EN COURS : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 24, $this->source);
        })()), "idDdqContrat", []), "nbHeures", []), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 28, $this->source);
        })()), "motif", []), 'widget');
        echo "</div>
    </div>
    <div class=\"section\">
        <div class=\"zone-info\">
            <h3>Choix du contrat :</h3>
        </div>
        <p>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 34, $this->source);
        })()), "idDdqContrat", []), 'widget');
        echo "</p>
        <div class=\"zone-info\">
            <h3>Horraire du contrat :</h3></div>
        <p>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["horraire"]) || array_key_exists("horraire", $context) ? $context["horraire"] : (function () {
            throw new RuntimeError('Variable "horraire" does not exist.', 37, $this->source);
        })()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col1-2\">

        <div class=\"section\">
            <div class=\"zone-info\"><h3>REPARTITION HEBDOMADAIRE SOUHAITEE</h3>
                <p>Conformément aux différentes répartitions prévues</p></div>
            <div>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 44, $this->source);
        })()), "lundi", []), 'widget');
        echo "</div>
            <div>";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 45, $this->source);
        })()), "mardi", []), 'widget');
        echo "</div>
            <div>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 46, $this->source);
        })()), "mercredi", []), 'widget');
        echo "</div>
            <div>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 47, $this->source);
        })()), "jeudi", []), 'widget');
        echo "</div>
            <div>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 48, $this->source);
        })()), "vendredi", []), 'widget');
        echo "</div>
        </div>
    </div>

    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Choix Horraire</h3>
        </div>
        <div class=\"section\">

            <div>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 58, $this->source);
        })()), "lundim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 58, $this->source);
        })()), "lundiam", []), 'widget');
        echo "</div>
            <div>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 59, $this->source);
        })()), "mardim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 59, $this->source);
        })()), "mardiam", []), 'widget');
        echo "</div>
            <div>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 60, $this->source);
        })()), "mercredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 60, $this->source);
        })()), "mercrediam", []), 'widget');
        echo "</div>
            <div>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 61, $this->source);
        })()), "jeudim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 61, $this->source);
        })()), "jeudiam", []), 'widget');
        echo "</div>
            <div>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 62, $this->source);
        })()), "vendredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 62, $this->source);
        })()), "vendrediam", []), 'widget');
        echo "</div>
        </div>
    </div>
    <p> Merci de bien cocher le nombre de demis journées exactes</p>
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 66, $this->source);
        })()), 'form_end');
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(213 => 66, 204 => 62, 198 => 61, 192 => 60, 186 => 59, 180 => 58, 167 => 48, 163 => 47, 159 => 46, 155 => 45, 151 => 44, 141 => 37, 135 => 34, 126 => 28, 119 => 24, 113 => 21, 109 => 20, 105 => 19, 101 => 18, 92 => 12, 88 => 11, 84 => 10, 80 => 9, 76 => 8, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Demande de travail à temps partiel choisi</h1>
    {{ form_start(form) }}
    <div class=\"zone-info\">
        <strong>N° Agent :</strong> {{ agent.nomium }}</br>
        <strong>Nom :</strong> {{ agent.nom }}</br>
        <strong>Prénom :</strong> {{ agent.prenom }}</br>
        <strong>Service :</strong> {{ agent.nomEntite }}</br>
        <strong>Qualification :</strong> {{ agent.libelleemploi }}</br>
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
        <h3>CONTRAT EN COURS : {{ agent.idDdqContrat.nbHeures }}</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>{{ form_widget(form.motif) }}</div>
    </div>
    <div class=\"section\">
        <div class=\"zone-info\">
            <h3>Choix du contrat :</h3>
        </div>
        <p>{{ form_widget(form.idDdqContrat) }}</p>
        <div class=\"zone-info\">
            <h3>Horraire du contrat :</h3></div>
        <p>{{ horraire }}</p>
    </div>
    <div class=\"col1-2\">

        <div class=\"section\">
            <div class=\"zone-info\"><h3>REPARTITION HEBDOMADAIRE SOUHAITEE</h3>
                <p>Conformément aux différentes répartitions prévues</p></div>
            <div>{{ form_widget(form.lundi) }}</div>
            <div>{{ form_widget(form.mardi) }}</div>
            <div>{{ form_widget(form.mercredi) }}</div>
            <div>{{ form_widget(form.jeudi) }}</div>
            <div>{{ form_widget(form.vendredi) }}</div>
        </div>
    </div>

    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Choix Horraire</h3>
        </div>
        <div class=\"section\">

            <div>{{ form_widget(form.lundim) }} {{ form_widget(form.lundiam) }}</div>
            <div>{{ form_widget(form.mardim) }} {{ form_widget(form.mardiam) }}</div>
            <div>{{ form_widget(form.mercredim) }} {{ form_widget(form.mercrediam) }}</div>
            <div>{{ form_widget(form.jeudim) }} {{ form_widget(form.jeudiam) }}</div>
            <div>{{ form_widget(form.vendredim) }} {{ form_widget(form.vendrediam) }}</div>
        </div>
    </div>
    <p> Merci de bien cocher le nombre de demis journées exactes</p>
    {{ form_end(form) }}
{% endblock %}", "AppBundle:Questionnaires/TP:QuestionnaireTPEtape4.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Questionnaires/TP/QuestionnaireTPEtape4.html.twig");
    }
}
