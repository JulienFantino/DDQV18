<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* AppBundle:Questionnaires:QuestionnaireRtt.html.twig */

class __TwigTemplate_4ef624ef4189a2d373af21b1836dec4b6b23c79da2c8e7003c07d6d1f458b75a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Questionnaires:QuestionnaireRtt.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires:QuestionnaireRtt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Questionnaires:QuestionnaireRtt.html.twig"));

        // line 2
        $context["__internal_63aaf5173e731d0ef5b3b8e202d319cb032b5cb89b6c90ceef6deb7d6cd05a2d"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Questionnaires:QuestionnaireRtt.html.twig", 2);
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
        echo "    <h1>Questionnaire RTT</h1>
 ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
            throw new RuntimeError('Variable "campagne" does not exist.', 6, $this->source);
        })()), "html", null, true);
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 7, $this->source);
        })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 8, $this->source);
        })()), 'errors');
        echo "
           ";
        // line 9
        echo $context["__internal_63aaf5173e731d0ef5b3b8e202d319cb032b5cb89b6c90ceef6deb7d6cd05a2d"]->macro_phpk("etapes", ["selection" => "selection", "etapes" => [0 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_rtt", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
            (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 13, $this->source);
            })()), "request", []), "get", [0 => "_route_params"], "method")), "text" => "Étape 1", "id" => "selection"], 1 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_rtt1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
            (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 14, $this->source);
            })()), "request", []), "get", [0 => "_route_params"], "method")), "text" => "Étape 2"], 2 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionnaire_rtt2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
            (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 15, $this->source);
            })()), "request", []), "get", [0 => "_route_params"], "method")), "text" => "Étape 3"], 3 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
            (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 16, $this->source);
            })()), "request", []), "get", [0 => "_route"], "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
            throw new RuntimeError('Variable "app" does not exist.', 16, $this->source);
        })()), "request", []), "get", [0 => "_route_params"], "method")), "text" => "Étape 4"], 4 => ["text" => "Récapitulatif", "title" => "Finalisation", "disabled" => false]]]);
        // line 21
        echo " 
        <div class='zone-info'>
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
        echo "
        </div>
            ";
        // line 29
        echo "        ";
        echo " 
        
        <div class='zone-info'><strong>Temps partiel</strong></div>
        <div class='section'>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 33, $this->source);
        })()), "reprisetp", []), 'widget');
        echo "
        </div>
         
       
     
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 38, $this->source);
        })()), 'form_end');
        echo "
 
    ";
        // line 41
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            ";
        // line 44
        echo "            var reprisetp = parseInt(jQuery('#cnamts_ddq_bundle_ddqquestionnairertt_reprisetp').attr('value'));
            jQuery('#cnamts_ddq_bundle_ddqquestionnairertt_reprisetp').change(function(){
                console.log(formule);
                reprisetp += 1;
                if ((reprisetp) % 2 ) {
                    jQuery('#tempsplein').attr('hidden', false);
                }
                else {
                    jQuery('#tempsplein').attr('hidden', true);
                }
            }); 
        });   
    </script>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Questionnaires:QuestionnaireRtt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(134 => 44, 130 => 41, 125 => 38, 117 => 33, 110 => 29, 105 => 26, 101 => 25, 97 => 24, 93 => 23, 89 => 21, 87 => 16, 86 => 15, 85 => 14, 84 => 13, 83 => 9, 79 => 8, 75 => 7, 71 => 6, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Questionnaire RTT</h1>
 {{ campagne }}
    {{form_start(form)}}
        {{form_errors(form)}}
           {{
    phpk('etapes', {
        selection: 'selection',
        etapes: [
            {url: path('questionnaire_rtt', app.request.get('_route_params')), text: 'Étape 1',id:'selection'},
            {url: path('questionnaire_rtt1', app.request.get('_route_params')), text: 'Étape 2'},
            {url: path('questionnaire_rtt2', app.request.get('_route_params')), text: 'Étape 3'},
            {url: path(app.request.get('_route'), app.request.get('_route_params')), text: 'Étape 4'},
           
            {text: 'Récapitulatif', title: 'Finalisation', disabled: false}
        ]
    })
}} 
        <div class='zone-info'>
            <strong>N° Agent :</strong> {{agent.nomium}}</br>
            <strong>Nom :</strong> {{agent.nom}}</br>
            <strong>Prénom :</strong> {{agent.prenom}}</br>
            <strong>Service :</strong> {{agent.nomEntite}}
        </div>
            {#{ app.request.scheme ~ '://' ~ app.request.attributes.get('_route_params') }#}
        {#{ app.request.schemeAndHttpHost~path(app.request.attributes.get('_route')) }#} 
        
        <div class='zone-info'><strong>Temps partiel</strong></div>
        <div class='section'>
            {{form_widget(form.reprisetp)}}
        </div>
         
       
     
    {{form_end(form)}}
 
    {# on va utiliser ca {{render(controller(\"AppBundle:Default:setContrat\"))}} pour persist l'idcontrat en BDD #}
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            {# Recup de la checkbox reprise temps partiel #}
            var reprisetp = parseInt(jQuery('#cnamts_ddq_bundle_ddqquestionnairertt_reprisetp').attr('value'));
            jQuery('#cnamts_ddq_bundle_ddqquestionnairertt_reprisetp').change(function(){
                console.log(formule);
                reprisetp += 1;
                if ((reprisetp) % 2 ) {
                    jQuery('#tempsplein').attr('hidden', false);
                }
                else {
                    jQuery('#tempsplein').attr('hidden', true);
                }
            }); 
        });   
    </script>
{% endblock %}
", "AppBundle:Questionnaires:QuestionnaireRtt.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Questionnaires/QuestionnaireRtt.html.twig");
    }
}
