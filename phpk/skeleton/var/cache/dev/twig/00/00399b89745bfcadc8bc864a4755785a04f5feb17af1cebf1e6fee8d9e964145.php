<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* Emails/NotificationCreationCampagne.html.twig */

class __TwigTemplate_c9e3f1a43396f14bf7b6cfbce1927e04220cdc436879168fd7348f3e102ed421 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationCreationCampagne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificationCreationCampagne.html.twig"));

        // line 1
        echo "<h3>Ouverture de la Campagne ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
            throw new RuntimeError('Variable "campagne" does not exist.', 1, $this->source);
        })()), "idDdqCategorie", []), "libelle", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
            throw new RuntimeError('Variable "campagne" does not exist.', 1, $this->source);
        })()), "datedebut", []), "Y"), "html", null, true);
        echo "</h3>

<p>Bonjour,</p>
<p>Vous pouvez dès à présent soumettre une demande d'attribution de place sur le parking Mourey au service Ressources Humaines en vous rendant à cette adresse :</p>
<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("campagnes_parking");
        echo "\">Votre campagne Parking</a>
<p>Vous avez jusqu'au ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
            throw new RuntimeError('Variable "campagne" does not exist.', 6, $this->source);
        })()), "datefin", []), "d-m-Y"), "html", null, true);
        echo ", date de clôture de la campagne, pour soumettre votre demande</p>
<p>Vous recevrez ue notification par email lorsque votre demande aura été soumise, puis traitée.</p>

";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificationCreationCampagne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(55 => 6, 51 => 5, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Ouverture de la Campagne {{campagne.idDdqCategorie.libelle}} {{campagne.datedebut|date('Y')}}</h3>

<p>Bonjour,</p>
<p>Vous pouvez dès à présent soumettre une demande d'attribution de place sur le parking Mourey au service Ressources Humaines en vous rendant à cette adresse :</p>
<a href=\"{{url('campagnes_parking')}}\">Votre campagne Parking</a>
<p>Vous avez jusqu'au {{campagne.datefin|date('d-m-Y')}}, date de clôture de la campagne, pour soumettre votre demande</p>
<p>Vous recevrez ue notification par email lorsque votre demande aura été soumise, puis traitée.</p>

", "Emails/NotificationCreationCampagne.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/app/Resources/views/Emails/NotificationCreationCampagne.html.twig");
    }
}
