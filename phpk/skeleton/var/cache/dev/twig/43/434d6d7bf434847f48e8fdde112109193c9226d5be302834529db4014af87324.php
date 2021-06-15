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

/* AppBundle:Validation:QuestionnaireTpN+1.html.twig */

class __TwigTemplate_6517a374edde8fecccb6fdfb38bb3e60f84800537e987d601144e0ade8bd8ebc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Validation:QuestionnaireTpN+1.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Validation:QuestionnaireTpN+1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Validation:QuestionnaireTpN+1.html.twig"));

        // line 2
        $context["__internal_7743cec73de9ed7cefd894f6bbe4db6e8875570801d284bf5d83466ee0034839"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Validation:QuestionnaireTpN+1.html.twig", 2);
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
        <h3>CONTRAT EN COURS : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 25, $this->source);
        })()), "idDdqContrat", []), "id", []), "html", null, true);
        echo "-";
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
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 45, $this->source);
        })()), "lundi", []), 'widget');
        echo "</div>
            <div>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 46, $this->source);
        })()), "mardi", []), 'widget');
        echo "</div>
            <div>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 47, $this->source);
        })()), "mercredi", []), 'widget');
        echo "</div>
            <div>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 48, $this->source);
        })()), "jeudi", []), 'widget');
        echo "</div>
            <div>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 49, $this->source);
        })()), "vendredi", []), 'widget');
        echo "</div>
        </div>
    </div>
    <div class=\"col2-2\">
        <div class=\"zone-info\">
            <h3>Du 1er Octobre ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
            throw new RuntimeError('Variable "year" does not exist.', 54, $this->source);
        })()), "html", null, true);
        echo " au 30 Septembre ";
        echo twig_escape_filter($this->env, ((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () {
                throw new RuntimeError('Variable "year" does not exist.', 54, $this->source);
            })()) + 1), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"section\">
            <h3>Choix du contrat :</h3>
            <p>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 58, $this->source);
        })()), "idDdqContrat", []), 'widget');
        echo "</p>
        </div>
        <div class=\"section\">
            </br></br>
            <div>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 62, $this->source);
        })()), "lundim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 62, $this->source);
        })()), "lundiam", []), 'widget');
        echo "</div>
            <div>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 63, $this->source);
        })()), "mardim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 63, $this->source);
        })()), "mardiam", []), 'widget');
        echo "</div>
            <div>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 64, $this->source);
        })()), "mercredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 64, $this->source);
        })()), "mercrediam", []), 'widget');
        echo "</div>
            <div>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 65, $this->source);
        })()), "jeudim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 65, $this->source);
        })()), "jeudiam", []), 'widget');
        echo "</div>
            <div>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 66, $this->source);
        })()), "vendredim", []), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 66, $this->source);
        })()), "vendrediam", []), 'widget');
        echo "</div>
        </div>
    </div>
    <div class=\"zone-info\">Fait à ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 69, $this->source);
        })()), "idsite", []), "ville", []), "html", null, true);
        echo " le ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 69, $this->source);
        })()), "datemodif", []), 'widget');
        echo "</div>
    <div class=\"zone-info\"><strong>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 70, $this->source);
        })()), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () {
            throw new RuntimeError('Variable "agent" does not exist.', 70, $this->source);
        })()), "nom", []), "html", null, true);
        echo "</strong></div>
    <div class='section'>
        <div>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 72, $this->source);
        })()), "signature", []), 'widget');
        echo "</div>
    </div>
    <div class=\"zone-info\"><strong>Avis du responsable de service :</strong></div>
    <div class=\"section\">
        ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                throw new RuntimeError('Variable "questionnaire" does not exist.', 76, $this->source);
            })()), "statut", []) == "validé N+1")) {
            // line 77
            echo "            <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"> Avis favorable</br>
            <input type=\"checkbox\" disabled=\"true\"> Avis défavorable
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 79
                (isset($context["questionnaire"]) || array_key_exists("questionnaire", $context) ? $context["questionnaire"] : (function () {
                    throw new RuntimeError('Variable "questionnaire" does not exist.', 79, $this->source);
                })()), "statut", []) == "invalidé N+1")) {
            // line 80
            echo "            <input type=\"checkbox\" disabled=\"true\"> Avis favorable</br>
            <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"> Avis défavorable
        ";
        } else {
            // line 83
            echo "            !!! Erreur !!!
        ";
        }
        // line 85
        echo "        <div>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 85, $this->source);
        })()), "CommentaireValideurN1", []), 'widget');
        echo "</div>
    </div>
    <div class=\"zone-info\"><strong>Avis du directeur de branche :</strong></div>
    <div class=\"section\">
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["validForm"]) || array_key_exists("validForm", $context) ? $context["validForm"] : (function () {
            throw new RuntimeError('Variable "validForm" does not exist.', 89, $this->source);
        })()), 'form_start');
        echo "
        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["validForm"]) || array_key_exists("validForm", $context) ? $context["validForm"] : (function () {
            throw new RuntimeError('Variable "validForm" does not exist.', 90, $this->source);
        })()), 'errors');
        echo "
        <div>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["validForm"]) || array_key_exists("validForm", $context) ? $context["validForm"] : (function () {
            throw new RuntimeError('Variable "validForm" does not exist.', 91, $this->source);
        })()), "avis", []), 'widget');
        echo "</div>
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["validForm"]) || array_key_exists("validForm", $context) ? $context["validForm"] : (function () {
            throw new RuntimeError('Variable "validForm" does not exist.', 92, $this->source);
        })()), 'form_end');
        echo "
    </div>
    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 94, $this->source);
        })()), 'form_end');
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Validation:QuestionnaireTpN+1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(282 => 94, 277 => 92, 273 => 91, 269 => 90, 265 => 89, 257 => 85, 253 => 83, 248 => 80, 246 => 79, 242 => 77, 240 => 76, 233 => 72, 226 => 70, 220 => 69, 212 => 66, 206 => 65, 200 => 64, 194 => 63, 188 => 62, 181 => 58, 172 => 54, 164 => 49, 160 => 48, 156 => 47, 152 => 46, 148 => 45, 129 => 29, 120 => 25, 114 => 22, 110 => 21, 106 => 20, 102 => 19, 92 => 12, 88 => 11, 84 => 10, 80 => 9, 75 => 7, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
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
        </div>
        <div class=\"section\">
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
        <div>{{ form_widget(form.signature) }}</div>
    </div>
    <div class=\"zone-info\"><strong>Avis du responsable de service :</strong></div>
    <div class=\"section\">
        {% if questionnaire.statut == 'validé N+1' %}
            <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"> Avis favorable</br>
            <input type=\"checkbox\" disabled=\"true\"> Avis défavorable
        {% elseif questionnaire.statut == 'invalidé N+1' %}
            <input type=\"checkbox\" disabled=\"true\"> Avis favorable</br>
            <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"> Avis défavorable
        {% else %}
            !!! Erreur !!!
        {% endif %}
        <div>{{ form_widget(form.CommentaireValideurN1) }}</div>
    </div>
    <div class=\"zone-info\"><strong>Avis du directeur de branche :</strong></div>
    <div class=\"section\">
        {{ form_start(validForm) }}
        {{ form_errors(validForm) }}
        <div>{{ form_widget(validForm.avis) }}</div>
        {{ form_end(validForm) }}
    </div>
    {{ form_end(form) }}
{% endblock %}

", "AppBundle:Validation:QuestionnaireTpN+1.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Validation/QuestionnaireTpN+1.html.twig");
    }
}
