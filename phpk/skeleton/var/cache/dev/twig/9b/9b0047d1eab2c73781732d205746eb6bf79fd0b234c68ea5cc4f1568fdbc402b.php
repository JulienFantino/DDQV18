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

/* Emails/NotificationValider.html.twig */

class __TwigTemplate_d00ef814da44592be241526d37ddaf0873546505d92087eb7a0f042ee4360d1c extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationValider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationValider.html.twig"));

        // line 1
        echo "<h3>Nouveau ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
            throw new RuntimeError('Variable "questionnaire" does not exist.', 1, $this->source);
        })()), "libelle", []), "html", null, true);
        echo " à valider</h3>

<p>Soumis par :</p>

<p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 5, $this->source);
        })()), "nomium", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 5, $this->source);
        })()), "nom", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 5, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "</p>

<p>Le questionnaire est directement disponible à cette adresse :</p>

";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 9, $this->source);
            })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Parking")) {
            // line 10
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("validation_parking", ["idQuestionnaire" => twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 10, $this->source);
            })()), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 10, $this->source);
            })()), "libelle", []), "html", null, true);
            echo "
        de ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 11, $this->source);
            })()), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 11, $this->source);
            })()), "nom", []), "html", null, true);
            echo "</a>
    <p>La liste de tous les questionnaires Parking ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_questionnaires_parking");
            echo "\">Liste Questionnaires Parking</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 14, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "RTT")) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("validation_rtt", ["idQuestionnaire" => twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 15, $this->source);
            })()), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 15, $this->source);
            })()), "libelle", []), "html", null, true);
            echo "
        de ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 16, $this->source);
            })()), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 16, $this->source);
            })()), "nom", []), "html", null, true);
            echo "</a>
    <p>La liste de tous les questionnaires RTT ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_questionnaires_rtt");
            echo "\">Liste Questionnaires RTT</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 19, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel")) {
            // line 20
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("validation_tp", ["idQuestionnaire" => twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 20, $this->source);
            })()), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 20, $this->source);
            })()), "libelle", []), "html", null, true);
            echo "
        de ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 21, $this->source);
            })()), "prenom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
                throw new RuntimeError('Variable "agent" does not exist.', 21, $this->source);
            })()), "nom", []), "html", null, true);
            echo "</a>
    <p>La liste de tous les questionnaires Temps partiel ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_questionnaires_tp");
            echo "\">Liste Questionnaires Temps partiel</a>
";
        } else {
            // line 25
            echo "    <p>!!! Erreur !!!</p>
";
        }
        // line 26
        echo " ";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificationValider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(125 => 26, 121 => 25, 116 => 23, 109 => 21, 102 => 20, 100 => 19, 96 => 18, 89 => 16, 82 => 15, 80 => 14, 76 => 13, 69 => 11, 62 => 10, 60 => 9, 49 => 5, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Nouveau {{ questionnaire.libelle }} à valider</h3>

<p>Soumis par :</p>

<p>{{ agent.nomium }} / {{ agent.nom }} / {{ agent.prenom }}</p>

<p>Le questionnaire est directement disponible à cette adresse :</p>

{% if questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Parking' %}
    <a href=\"{{ url('validation_parking', {'idQuestionnaire': questionnaire.id}) }}\">{{ questionnaire.libelle }}
        de {{ agent.prenom }} {{ agent.nom }}</a>
    <p>La liste de tous les questionnaires Parking ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"{{ url('liste_questionnaires_parking') }}\">Liste Questionnaires Parking</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'RTT' %}
    <a href=\"{{ url('validation_rtt', {'idQuestionnaire': questionnaire.id}) }}\">{{ questionnaire.libelle }}
        de {{ agent.prenom }} {{ agent.nom }}</a>
    <p>La liste de tous les questionnaires RTT ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"{{ url('liste_questionnaires_rtt') }}\">Liste Questionnaires RTT</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' %}
    <a href=\"{{ url('validation_tp', {'idQuestionnaire': questionnaire.id}) }}\">{{ questionnaire.libelle }}
        de {{ agent.prenom }} {{ agent.nom }}</a>
    <p>La liste de tous les questionnaires Temps partiel ayant déjà été soumis est disponible à cette adresse :</p>
    <a href=\"{{ url('liste_questionnaires_tp') }}\">Liste Questionnaires Temps partiel</a>
{% else %}
    <p>!!! Erreur !!!</p>
{% endif %} ", "Emails/NotificationValider.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/app/Resources/views/Emails/NotificationValider.html.twig");
    }
}
