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

/* AppBundle:Resultats:Parking.html.twig */

class __TwigTemplate_0926b1c907d7ee85c63d6758f773f0af3a4ec9ad89cc340ca02d8a0bd86afddf extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Resultats:Parking.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultats:Parking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultats:Parking.html.twig"));

        // line 2
        $context["__internal_a3a99b00d7aa254a57477d1d2dd35f962ac582f1b0a9c90c7ff255f170303540"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Resultats:Parking.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "28e7250_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_28e7250_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/28e7250_biblicnam-graphe.min_1.js");
            // line 8
            echo "        <script src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 8, $this->source);
            })()), "html", null, true);
            echo "' charset='UTF-8'></script>
    ";
        } else {
            // asset "28e7250"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_28e7250") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/28e7250.js");
            echo "        <script src='";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 8, $this->source);
            })()), "html", null, true);
            echo "' charset='UTF-8'></script>
    ";
        }
        unset($context["asset_url"]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <h1>Résultats de la Campagne : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campagne"]) || array_key_exists("campagne", $context) ? $context["campagne"] : (function () {
            throw new RuntimeError('Variable "campagne" does not exist.', 13, $this->source);
        })()), "libelle", []), "html", null, true);
        echo "</h1>
    <div>
        <h3 class=\"zone-info\">Fig1 : Répartition des demandes validées/invalidées</h3>
        <div>";
        // line 16
        echo $context["__internal_a3a99b00d7aa254a57477d1d2dd35f962ac582f1b0a9c90c7ff255f170303540"]->macro_phpk("graphique", (isset($context["dataPie"]) || array_key_exists("dataPie", $context) ? $context["dataPie"] : (function () {
            throw new RuntimeError('Variable "dataPie" does not exist.', 16, $this->source);
        })()));
        echo "</div>
        </br>
    </div></br>
    <div>
        <h3 class=\"zone-info\">Fig2 : Répartition des demandes selon le motif</h3>
        <div>
            ";
        // line 22
        echo $context["__internal_a3a99b00d7aa254a57477d1d2dd35f962ac582f1b0a9c90c7ff255f170303540"]->macro_phpk("graphique", ["graphique" => ["width" => 600, "height" => 400, "type" => "columns", "legend" => "right"], "data" => ["xAxis" => "Motif", "yAxis" => "Nombre de demandes", "series" => [0 => ["name" => "Enfants à charge", "data" => [0 =>         // line 33
            (isset($context["enfants"]) || array_key_exists("enfants", $context) ? $context["enfants"] : (function () {
                throw new RuntimeError('Variable "enfants" does not exist.', 33, $this->source);
            })())]], 1 => ["name" => "Travailleur handicapé", "data" => [0 =>         // line 34
            (isset($context["handicap"]) || array_key_exists("handicap", $context) ? $context["handicap"] : (function () {
                throw new RuntimeError('Variable "handicap" does not exist.', 34, $this->source);
            })())]], 2 => ["name" => "Emploi Téléconseiller au Accueil", "data" => [0 =>         // line 35
            (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () {
                throw new RuntimeError('Variable "emploi" does not exist.', 35, $this->source);
            })())]]]]]);
        // line 38
        echo "
        </div>
        </br>
    </div>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resultats:Parking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(130 => 38, 128 => 35, 127 => 34, 126 => 33, 125 => 22, 116 => 16, 109 => 13, 100 => 12, 78 => 8, 74 => 6, 69 => 5, 60 => 4, 50 => 1, 48 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block head %}
    {{ parent() }}
    {% javascripts
        '@PHPKTemplateBundle/Resources/public/biblicnam/js/biblicnam-graphe.min.js' %}
        <script src='{{ asset_url }}' charset='UTF-8'></script>
    {% endjavascripts %}
{% endblock %}

{% block body %}
    <h1>Résultats de la Campagne : {{ campagne.libelle }}</h1>
    <div>
        <h3 class=\"zone-info\">Fig1 : Répartition des demandes validées/invalidées</h3>
        <div>{{ phpk('graphique', dataPie) }}</div>
        </br>
    </div></br>
    <div>
        <h3 class=\"zone-info\">Fig2 : Répartition des demandes selon le motif</h3>
        <div>
            {{ phpk('graphique',{
                graphique: {
                    width:600,
                    height:400,
                    type: 'columns',
                    legend: 'right'
                },
                data: {
                    xAxis: 'Motif',
                    yAxis: 'Nombre de demandes',
                    series: [
                        { name: 'Enfants à charge' , data: [enfants]},
                        { name: 'Travailleur handicapé' , data: [handicap]},
                        { name: 'Emploi Téléconseiller au Accueil'  , data: [emploi]},
                    ],
                }
            }) }}
        </div>
        </br>
    </div>
{% endblock %}

", "AppBundle:Resultats:Parking.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Resultats/Parking.html.twig");
    }
}
