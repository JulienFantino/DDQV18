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

/* AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig */

class __TwigTemplate_32455571b863d1cb806b1ab6d44972ec1469460cf9ff63d88a1046419e0b25ea extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig"));

        // line 2
        $context["__internal_8f5a2462098b30895869150acfca016e593969b3428958c71b08f1a196d033d2"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig", 2);
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
        echo $context["__internal_8f5a2462098b30895869150acfca016e593969b3428958c71b08f1a196d033d2"]->macro_phpk("bouton", ["predefined" => "question", "text" => "Question", "questiontitle" => "Question Mathématiques. Un indice chez vous..", "questiontext" => "Combien font 6x7 ?", "questionvalue" => "42 !", "questioncallback" => "testQuestion"]);
        // line 13
        echo "

    <script type='text/javascript'>
        function testQuestion(reponse) {
            alert('Vous avez répondu : ' + reponse);
        }
    </script>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 20, $this->source);
        })()), 'form_start');
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 21, $this->source);
        })()), 'errors');
        echo "
    <div class=\"zone-info\">
        <strong>N° Agent :</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 23, $this->source);
        })()), "nomium", []), "html", null, true);
        echo "</br>
        <strong>Nom :</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 24, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</br>
        <strong>Prénom :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 25, $this->source);
        })()), "prenom", []), "html", null, true);
        echo "</br>
        <strong>Service :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 26, $this->source);
        })()), "nomEntite", []), "html", null, true);
        echo "</br>
        <strong>Qualification :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 27, $this->source);
        })()), "libelleemploi", []), "html", null, true);
        echo "</br>
    </div>
    <div class=\"zone-info\">
        <h3>ENFANTS A CHARGE :</h3>
    </div>
    <div class=\"section\">
        <div>Date de naissance Enfant 1 : ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 33, $this->source);
        })()), "dateenfant1", []), 'widget');
        echo " Date de naissance Enfant 2
            : ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 34, $this->source);
        })()), "dateenfant2", []), 'widget');
        echo "</div>
        <div>Date de naissance Enfant 3 : ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 35, $this->source);
        })()), "dateenfant3", []), 'widget');
        echo " Date de naissance Enfant 4
            : ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 36, $this->source);
        })()), "dateenfant4", []), 'widget');
        echo "</div>
    </div>
    <div class=\"zone-info\">
        <h3>CONTRAT EN COURS : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 39, $this->source);
        })()), "idDdqContrat", []), "id", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 39, $this->source);
        })()), "idDdqContrat", []), "nbHeures", []), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 43, $this->source);
        })()), "motif", []), 'widget');
        echo "</div>

    </div>

    <div class=\"col1-2\">
        <div class=\"zone-info\">
            <h3>PERIODE DU CONTRAT</h3>
            <p>Période réglementaire de conclusion</p>
        </div>

        <div class=\"zone-info\">
            <h3>HORAIRE HEBDOMADAIRE SOUHAITE</h3>
            <p>Conformément aux types de contrats prévus</p>
        </div>
        <div class=\"section\">
            <h3>REPARTITION HEBDOMADAIRE SOUHAITEE</h3>
            <p>Conformément aux différentes répartitions prévues</p>
            <div>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 60, $this->source);
        })()), "lundi", []), 'widget');
        echo "</div>
            <div>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 61, $this->source);
        })()), "mardi", []), 'widget');
        echo "</div>
            <div>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 62, $this->source);
        })()), "mercredi", []), 'widget');
        echo "</div>
            <div>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 63, $this->source);
        })()), "jeudi", []), 'widget');
        echo "</div>
            <div>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 64, $this->source);
        })()), "vendredi", []), 'widget');
        echo "</div>
        </div>
    </div>
    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Du 1er Octobre ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
            throw new RuntimeError('Variable "year" does not exist.', 69, $this->source);
        })()), "html", null, true);
        echo " au 30 Septembre ";
        echo twig_escape_filter($this->env, ((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
                throw new RuntimeError('Variable "year" does not exist.', 69, $this->source);
            })()) + 1), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"section\">
            <h3>Choix du contrat :</h3>
            <p>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 73, $this->source);
        })()), "idDdqContrat", []), 'widget');
        echo "</p>
            <h3>Horraire du contrat :</h3>
            <p>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["horraire"]) || array_key_exists("horraire", $context) ? $context["horraire"] : (function () {
            throw new RuntimeError('Variable "horraire" does not exist.', 75, $this->source);
        })()), "html", null, true);
        echo "</p>
            <p>";
        // line 76
        echo "</p>
            ";
        // line 78
        echo "
            <p>
                ";
        // line 80
        echo "</p>


        </div>


        <div class=\"section\">
            <h3> Vous pouvez selectionner ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 87, $this->source);
        })()), "idDdqContrat", []), 'widget');
        echo "</h3>
            </br></br>
            <div>";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 89, $this->source);
        })()), "lundim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 89, $this->source);
        })()), "lundiam", []), 'widget');
        echo "</div>
            <div>";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 90, $this->source);
        })()), "mardim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 90, $this->source);
        })()), "mardiam", []), 'widget');
        echo "</div>
            <div>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 91, $this->source);
        })()), "mercredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 91, $this->source);
        })()), "mercrediam", []), 'widget');
        echo "</div>
            <div>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 92, $this->source);
        })()), "jeudim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 92, $this->source);
        })()), "jeudiam", []), 'widget');
        echo "</div>
            <div>";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 93, $this->source);
        })()), "vendredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 93, $this->source);
        })()), "vendrediam", []), 'widget');
        echo "</div>
        </div>
    </div>

    <div class=\"zone-info\">Fait à ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 97, $this->source);
        })()), "idsite", []), "ville", []), "html", null, true);
        echo " le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 97, $this->source);
        })()), "datemodif", []), 'widget');
        echo "</div>
    <div class=\"zone-info\"><strong>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 98, $this->source);
        })()), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 98, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</strong></div>
    <div class='section'>
        <div>
            <script></script>";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 101, $this->source);
        })()), "signature", []), 'widget');
        echo "</div>
    </div>
    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 103, $this->source);
        })()), 'form_end');
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(278 => 103, 273 => 101, 265 => 98, 259 => 97, 250 => 93, 244 => 92, 238 => 91, 232 => 90, 226 => 89, 221 => 87, 212 => 80, 208 => 78, 205 => 76, 201 => 75, 196 => 73, 187 => 69, 179 => 64, 175 => 63, 171 => 62, 167 => 61, 163 => 60, 143 => 43, 134 => 39, 128 => 36, 124 => 35, 120 => 34, 116 => 33, 107 => 27, 103 => 26, 99 => 25, 95 => 24, 91 => 23, 86 => 21, 82 => 20, 73 => 13, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Demande de travail à temps partiel choisi</h1>
    {{ phpk('bouton',{
        predefined: 'question',
        text: 'Question',
        questiontitle: 'Question Mathématiques. Un indice chez vous..',
        questiontext: 'Combien font 6x7 ?',
        questionvalue: '42 !',
        questioncallback: 'testQuestion'
    }) }}

    <script type='text/javascript'>
        function testQuestion(reponse) {
            alert('Vous avez répondu : ' + reponse);
        }
    </script>
    {{ form_start(form) }}
    {{ form_errors(form) }}
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
        <h3>CONTRAT EN COURS : {{ agent.idDdqContrat.id }}-{{ agent.idDdqContrat.nbHeures }}</h3>
    </div>
    <div class=\"section\">
        <h3>MOTIF :</h3></br>
        <div>{{ form_widget(form.motif) }}</div>

    </div>

    <div class=\"col1-2\">
        <div class=\"zone-info\">
            <h3>PERIODE DU CONTRAT</h3>
            <p>Période réglementaire de conclusion</p>
        </div>

        <div class=\"zone-info\">
            <h3>HORAIRE HEBDOMADAIRE SOUHAITE</h3>
            <p>Conformément aux types de contrats prévus</p>
        </div>
        <div class=\"section\">
            <h3>REPARTITION HEBDOMADAIRE SOUHAITEE</h3>
            <p>Conformément aux différentes répartitions prévues</p>
            <div>{{ form_widget(form.lundi) }}</div>
            <div>{{ form_widget(form.mardi) }}</div>
            <div>{{ form_widget(form.mercredi) }}</div>
            <div>{{ form_widget(form.jeudi) }}</div>
            <div>{{ form_widget(form.vendredi) }}</div>
        </div>
    </div>
    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Du 1er Octobre {{ year }} au 30 Septembre {{ year+1 }}</h3>
        </div>
        <div class=\"section\">
            <h3>Choix du contrat :</h3>
            <p>{{ form_widget(form.idDdqContrat) }}</p>
            <h3>Horraire du contrat :</h3>
            <p>{{ horraire }}</p>
            <p>{#{ form_widget(form.idDdqRepartition) }}#}</p>
            {#    <h3>Choix de la repartition :</h3>#}

            <p>
                {#{form_widget(form.idDdqRepartition) }#######}</p>


        </div>


        <div class=\"section\">
            <h3> Vous pouvez selectionner {{ form_widget(form.idDdqContrat) }}</h3>
            </br></br>
            <div>{{ form_widget(form.lundim) }} {{ form_widget(form.lundiam) }}</div>
            <div>{{ form_widget(form.mardim) }} {{ form_widget(form.mardiam) }}</div>
            <div>{{ form_widget(form.mercredim) }} {{ form_widget(form.mercrediam) }}</div>
            <div>{{ form_widget(form.jeudim) }} {{ form_widget(form.jeudiam) }}</div>
            <div>{{ form_widget(form.vendredim) }} {{ form_widget(form.vendrediam) }}</div>
        </div>
    </div>

    <div class=\"zone-info\">Fait à {{ agent.idsite.ville }} le {{ form_widget(form.datemodif) }}</div>
    <div class=\"zone-info\"><strong>{{ agent.prenom }} {{ agent.nom }}</strong></div>
    <div class='section'>
        <div>
            <script></script>{{ form_widget(form.signature) }}</div>
    </div>
    {{ form_end(form) }}
{% endblock %}", "AppBundle:Questionnaires/TP:QuestionnaireTp.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Questionnaires/TP/QuestionnaireTp.html.twig");
    }
}
