<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* AppBundle:MesCampagnes:MesCampagnesRtt.html.twig */

class __TwigTemplate_546cbad92a60643141319a03be5c09ff79bdd6736e6ff022106638d21a139e30 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig"));

        // line 2
        $context["__internal_d775beb09269351a7165136d8d33183f5cd8c88cbd1af1d49c4d57389f10c879"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig", 2);
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
        echo "    <h1>Mes Campagnes RTT</h1></br>
    <div class=\"zone-info\"><h3>Bonjour ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 6, $this->source);
        })()), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 6, $this->source);
        })()), "nom", []), "html", null, true);
        echo ", voici le questionnaire auquel vous pouvez/devez répondre.</h3></div>
    <div>";
        // line 7
        echo $context["__internal_d775beb09269351a7165136d8d33183f5cd8c88cbd1af1d49c4d57389f10c879"]->macro_phpk("tableau", ["tableau" => (isset($context["tabAgentQuestionnaire"]) || array_key_exists("tabAgentQuestionnaire", $context) ? $context["tabAgentQuestionnaire"] : (function () {
            throw new RuntimeError('Variable "tabAgentQuestionnaire" does not exist.', 7, $this->source);
        })()), "filter" => false, "affichageLignesTrouvees" => false]);
        echo "</div>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(77 => 7, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Mes Campagnes RTT</h1></br>
    <div class=\"zone-info\"><h3>Bonjour {{agent.prenom}} {{agent.nom}}, voici le questionnaire auquel vous pouvez/devez répondre.</h3></div>
    <div>{{ phpk('tableau', {tableau: tabAgentQuestionnaire, filter: false, affichageLignesTrouvees: false}) }}</div>
{% endblock %}
", "AppBundle:MesCampagnes:MesCampagnesRtt.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/MesCampagnes/MesCampagnesRtt.html.twig");
    }
}
