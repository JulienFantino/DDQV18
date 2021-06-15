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

/* Emails/NotificationValidation.html.twig */

class __TwigTemplate_a62157b2843d8bd813ab91d57571458326cf7e7fd8e20c95d34b6ce732395375 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationValidation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationValidation.html.twig"));

        // line 1
        echo "<h3>Votre ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
            throw new RuntimeError('Variable "questionnaire" does not exist.', 1, $this->source);
        })()), "libelle", []), "html", null, true);
        echo " a été traité</h3>

";
        // line 3
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                throw new RuntimeError('Variable "statut" does not exist.', 3, $this->source);
            })()) == "validé")) {
            // line 4
            echo "    <p>Suite à votre demande d’une place de parking sur Mourey, vous pouvez bénéficier d’une place à compter du 1er
        octobre.

        Pour rappel, l’accès au parking est possible grâce à votre carte sécurisée.

        Enfin, merci de communiquer, par mail, à servicesgeneraux@cpam-ain.cnamts.fr, la marque et le numéro
        d’immatriculation du véhicule que vous serez amené(e) à garer sur le parking Mourey.

        Cordialement.
    </p>
";
        } elseif ((        // line 14
            (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                throw new RuntimeError('Variable "statut" does not exist.', 14, $this->source);
            })()) == "invalidé")) {
            // line 15
            echo "    <p>Suite à votre demande d’une place de parking sur Mourey, nous avons le regret de vous informer, qu’au vu des
        critères d’attribution, vous ne pouvez bénéficier d’un emplacement.

        Le service Ressources Humaines reste à votre disposition pour toute question.
        .</p>
";
        } elseif (((        // line 20
                (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
                    throw new RuntimeError('Variable "campagne" does not exist.', 20, $this->source);
                })()) == "RTT") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 20, $this->source);
                })()) == "validé N+1"))) {
            // line 21
            echo "    <p>Bonjour, <br></br>
        Votre manager émet un avis favorable concernant votre choix de formule RTT.
        Votre demande est actuellement en attente de validation auprès de la Direction.
        <br></br> Cordialement <br></br>,
        Le service des Ressources Humaines.
    </p>
";
        } elseif (((        // line 27
                (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
                    throw new RuntimeError('Variable "campagne" does not exist.', 27, $this->source);
                })()) == "RTT") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 27, $this->source);
                })()) == "invalidé N+1"))) {
            // line 28
            echo "    <p>Bonjour, <br></br>
        Votre manager émet un avis défavorable concernant votre choix de formule RTT.
        Nous vous invitons à revoir avec lui et à reformuler votre demande.
        <br></br> Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
";
        } elseif (((        // line 34
                (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
                    throw new RuntimeError('Variable "campagne" does not exist.', 34, $this->source);
                })()) == "RTT") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 34, $this->source);
                })()) == "validé N+2"))) {
            // line 35
            echo "    <p>Bonjour,</p><p>
    La direction valide votre choix de formule RTT.</p>
    <p>
        <br></br>Cordialement,
        Le service des Ressources Humaines.
        .</p>
";
        } elseif (((        // line 41
                (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
                    throw new RuntimeError('Variable "campagne" does not exist.', 41, $this->source);
                })()) == "RTT") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 41, $this->source);
                })()) == "invalidé N+2"))) {
            // line 42
            echo "    <p>Bonjour, <br></br>
        La direction refuse votre choix de formule RTT.
        Nous vous invitons à revoir votre manager et à reformuler votre demande.
        <br></br> Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
";
        } elseif (((        // line 48
                (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
                    throw new RuntimeError('Variable "campagne" does not exist.', 48, $this->source);
                })()) == "Temps_partiel") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 48, $this->source);
                })()) == "validé N+1"))) {
            // line 49
            echo "    <p>Bonjour, <br></br>
        Votre manager émet un avis favorable à votre demande de temps de partiel.
        Votre demande est actuellement en attente de validation auprès de la Direction.

        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
                    (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                        throw new RuntimeError('Variable "questionnaire" does not exist.', 56, $this->source);
                    })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 56, $this->source);
                })()) == "invalidé N+1"))) {
            // line 57
            echo "    <p>Bonjour,        Votre manager émet un avis défavorable à votre demande de temps de partiel.
        Nous vous invitons à revoir avec lui et à reformuler votre demande.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

    </p>
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
                    (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                        throw new RuntimeError('Variable "questionnaire" does not exist.', 63, $this->source);
                    })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 63, $this->source);
                })()) == "validé N+2"))) {
            // line 64
            echo "    <p>Bonjour, <br></br>
        La direction valide votre demande de temps de partiel.
        Votre nouveau contrat vous sera transmis prochainement. Pensez bien à remettre un exemplaire dûment signé au
        service ressources humaines.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

        .</p>
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
                    (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                        throw new RuntimeError('Variable "questionnaire" does not exist.', 72, $this->source);
                    })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel") && ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () {
                    throw new RuntimeError('Variable "statut" does not exist.', 72, $this->source);
                })()) == "invalidé N+2"))) {
            // line 73
            echo "    <p>Bonjour, <br></br>
        La direction refuse votre demande de temps de partiel.
        Nous vous invitons à revoir votre manager et à reformuler votre demande.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

    </p>
";
        } else {
            // line 81
            echo "    <p>!!! Erreur !!!</p>
";
        }
        // line 83
        echo "
<p>Vous pouvez consulter le statut de votre questionnaire à cette adresse :</p>

";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 86, $this->source);
            })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Parking")) {
            // line 87
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_parking");
            echo "\">Mes Campagnes Parking</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 88
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 88, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "RTT")) {
            // line 89
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_rtt");
            echo "\">Mes Campagnes RTT</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 90, $this->source);
                })()), "idDdqCampagne", []), "idDdqCategorie", []), "libelle", []) == "Temps_partiel")) {
            // line 91
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_tp");
            echo "\">Mes Campagnes Temps partiel</a>
";
        } else {
            // line 93
            echo "    <p>!!! Erreur !!!</p>
";
        }
        // line 94
        echo "   ";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificationValidation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(190 => 94, 186 => 93, 180 => 91, 178 => 90, 173 => 89, 171 => 88, 166 => 87, 164 => 86, 159 => 83, 155 => 81, 145 => 73, 143 => 72, 133 => 64, 131 => 63, 123 => 57, 121 => 56, 112 => 49, 110 => 48, 102 => 42, 100 => 41, 92 => 35, 90 => 34, 82 => 28, 80 => 27, 72 => 21, 70 => 20, 63 => 15, 61 => 14, 49 => 4, 47 => 3, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Votre {{ questionnaire.libelle }} a été traité</h3>

{% if statut == 'validé' %}
    <p>Suite à votre demande d’une place de parking sur Mourey, vous pouvez bénéficier d’une place à compter du 1er
        octobre.

        Pour rappel, l’accès au parking est possible grâce à votre carte sécurisée.

        Enfin, merci de communiquer, par mail, à servicesgeneraux@cpam-ain.cnamts.fr, la marque et le numéro
        d’immatriculation du véhicule que vous serez amené(e) à garer sur le parking Mourey.

        Cordialement.
    </p>
{% elseif statut == 'invalidé'  %}
    <p>Suite à votre demande d’une place de parking sur Mourey, nous avons le regret de vous informer, qu’au vu des
        critères d’attribution, vous ne pouvez bénéficier d’un emplacement.

        Le service Ressources Humaines reste à votre disposition pour toute question.
        .</p>
{% elseif campagne == 'RTT' and statut == 'validé N+1' %}
    <p>Bonjour, <br></br>
        Votre manager émet un avis favorable concernant votre choix de formule RTT.
        Votre demande est actuellement en attente de validation auprès de la Direction.
        <br></br> Cordialement <br></br>,
        Le service des Ressources Humaines.
    </p>
{% elseif campagne == 'RTT' and statut == 'invalidé N+1' %}
    <p>Bonjour, <br></br>
        Votre manager émet un avis défavorable concernant votre choix de formule RTT.
        Nous vous invitons à revoir avec lui et à reformuler votre demande.
        <br></br> Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
{% elseif campagne == 'RTT' and statut == 'validé N+2' %}
    <p>Bonjour,</p><p>
    La direction valide votre choix de formule RTT.</p>
    <p>
        <br></br>Cordialement,
        Le service des Ressources Humaines.
        .</p>
{% elseif campagne == 'RTT' and statut == 'invalidé N+2' %}
    <p>Bonjour, <br></br>
        La direction refuse votre choix de formule RTT.
        Nous vous invitons à revoir votre manager et à reformuler votre demande.
        <br></br> Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
{% elseif campagne == 'Temps_partiel' and statut == 'validé N+1' %}
    <p>Bonjour, <br></br>
        Votre manager émet un avis favorable à votre demande de temps de partiel.
        Votre demande est actuellement en attente de validation auprès de la Direction.

        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.
    </p>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' and statut == 'invalidé N+1' %}
    <p>Bonjour,        Votre manager émet un avis défavorable à votre demande de temps de partiel.
        Nous vous invitons à revoir avec lui et à reformuler votre demande.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

    </p>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' and statut == 'validé N+2' %}
    <p>Bonjour, <br></br>
        La direction valide votre demande de temps de partiel.
        Votre nouveau contrat vous sera transmis prochainement. Pensez bien à remettre un exemplaire dûment signé au
        service ressources humaines.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

        .</p>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' and statut == 'invalidé N+2' %}
    <p>Bonjour, <br></br>
        La direction refuse votre demande de temps de partiel.
        Nous vous invitons à revoir votre manager et à reformuler votre demande.
        <br></br>Cordialement, <br></br>
        Le service des Ressources Humaines.

    </p>
{% else %}
    <p>!!! Erreur !!!</p>
{% endif %}

<p>Vous pouvez consulter le statut de votre questionnaire à cette adresse :</p>

{% if questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Parking' %}
    <a href=\"{{ url('campagnes_parking') }}\">Mes Campagnes Parking</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'RTT' %}
    <a href=\"{{ url('campagnes_rtt') }}\">Mes Campagnes RTT</a>
{% elseif questionnaire.idDdqCampagne.idDdqCategorie.libelle == 'Temps_partiel' %}
    <a href=\"{{ url('campagnes_tp') }}\">Mes Campagnes Temps partiel</a>
{% else %}
    <p>!!! Erreur !!!</p>
{% endif %}   ", "Emails/NotificationValidation.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/app/Resources/views/Emails/NotificationValidation.html.twig");
    }
}
