<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* AppBundle:Administration:SelectionCampagne.html.twig */

class __TwigTemplate_e89a82275708487ac3f738339e9998d5cf92d294362e6ec9fc91c40b8e8c51f9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Administration:SelectionCampagne.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Administration:SelectionCampagne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Administration:SelectionCampagne.html.twig"));

        // line 2
        $context["__internal_e74c9e1cf3f8983cc3cb2872607f39e5799e60b4941109dc1e3c14f03dfd6bd7"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Administration:SelectionCampagne.html.twig", 2);
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
        echo "    <h1>Sélection d'une Campagne</h1></br>
    <div class='zone-info'><h3>Sélectionner la Campagne souhaitée dans cette liste</h3></div>
    <div class='section'>
        ";
        // line 8
        echo $context["__internal_e74c9e1cf3f8983cc3cb2872607f39e5799e60b4941109dc1e3c14f03dfd6bd7"]->macro_phpk("formulaire", ["form" => (isset($context["formCampagne"]) || array_key_exists("formCampagne", $context) ? $context["formCampagne"] : (function () {
            throw new RuntimeError('Variable "formCampagne" does not exist.', 8, $this->source);
        })()), "center" => true]);
        echo "
             

    </div>
          
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Administration:SelectionCampagne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(73 => 8, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h1>Sélection d'une Campagne</h1></br>
    <div class='zone-info'><h3>Sélectionner la Campagne souhaitée dans cette liste</h3></div>
    <div class='section'>
        {{phpk('formulaire',  {form: formCampagne, center:true})}}
             

    </div>
          
{% endblock %}
", "AppBundle:Administration:SelectionCampagne.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Administration/SelectionCampagne.html.twig");
    }
}
