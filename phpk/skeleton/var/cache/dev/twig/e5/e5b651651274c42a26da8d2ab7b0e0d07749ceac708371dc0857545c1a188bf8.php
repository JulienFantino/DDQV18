<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* Emails/NotificationSoumission.html.twig */

class __TwigTemplate_1bca17d4b89f64afa03e1c1aebf4650aab0d13e5c21a036259356c20542ec00d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationSoumission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationSoumission.html.twig"));

        // line 1
        echo "<h3>Votre demande a bien été prise en compte</h3>

<p>Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 3, $this->source);
        })()), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 3, $this->source);
        })()), "nom", []), "html", null, true);
        echo ", et merci !</p>

";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 5, $this->source);
            })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Parking")) {
            // line 6
            echo "    <p>Votre demande concernant une demande d'attribution de place sur le parking Mourey a bien été transmise au service Ressources Humaines.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_parking");
            echo "\">Votre campagne Parking</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 10, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "RTT")) {
            // line 11
            echo "    <p>Votre choix de formule RTT a bien été transmise à votre chef de service.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_rtt");
            echo "\">Votre campagne RTT</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 15, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel")) {
            // line 16
            echo "    <p>Votre demande Temps partiel a bien été transmise à votre chef de service.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_tp");
            echo "\">Votre campagne Temps partiel</a>
";
        } else {
            // line 21
            echo "    <p>!!! Erreur !!!</p>
";
        }
        // line 23
        echo "

";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificationSoumission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(90 => 23, 86 => 21, 81 => 19, 76 => 16, 74 => 15, 70 => 14, 65 => 11, 63 => 10, 59 => 9, 54 => 6, 52 => 5, 45 => 3, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Votre demande a bien été prise en compte</h3>

<p>Bonjour {{agent.prenom}} {{agent.nom}}, et merci !</p>

{% if questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Parking' %}
    <p>Votre demande concernant une demande d'attribution de place sur le parking Mourey a bien été transmise au service Ressources Humaines.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"{{url('campagnes_parking')}}\">Votre campagne Parking</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'RTT' %}
    <p>Votre choix de formule RTT a bien été transmise à votre chef de service.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"{{url('campagnes_rtt')}}\">Votre campagne RTT</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' %}
    <p>Votre demande Temps partiel a bien été transmise à votre chef de service.</p>
    <p>Vous recevrez une notification par email lorsque votre demande aura été traitée.</p>
    <p>Tant que votre demande n'a pas été traitée, vous avez toujours la possibilité de la modifier via cette adresse :</p>
    <a href=\"{{url('campagnes_tp')}}\">Votre campagne Temps partiel</a>
{% else %}
    <p>!!! Erreur !!!</p>
{% endif %}


", "Emails/NotificationSoumission.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/app/Resources/views/Emails/NotificationSoumission.html.twig");
    }
}
