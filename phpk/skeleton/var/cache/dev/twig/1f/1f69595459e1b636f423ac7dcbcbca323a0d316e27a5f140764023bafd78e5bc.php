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

/* PHPKTemplateBundle:layout:meta.html.twig */

class __TwigTemplate_6a3b7fb4f496a5eac3ecce1ab6416e96b85bd441db4aeb174b5e38e87f196557 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:meta.html.twig"));

        // line 1
        $context["__internal_16b0d9379b10f92f20aa113931184c4f043c2db3cf66111fe498eaa82b162c8f"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "PHPKTemplateBundle:layout:meta.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('meta', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_meta($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "
    <meta charset=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    ";
        // line 8
        if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.x_ua_compatible")) {
            // line 9
            echo "        ";
            // line 10
            echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"";
            echo twig_escape_filter($this->env, $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.x_ua_compatible"), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:layout:meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(87 => 12, 81 => 10, 79 => 9, 77 => 8, 72 => 6, 68 => 5, 65 => 4, 47 => 3, 44 => 2, 42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block meta %}

    <meta charset=\"{{ _charset }}\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\"/>
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    {% if getParameter('phpk_template.x_ua_compatible') %}
        {# On force l'utilisation d'un moteur de rendu #}
        <meta http-equiv=\"X-UA-Compatible\" content=\"{{ getParameter('phpk_template.x_ua_compatible') }}\" />
    {% endif %}

{% endblock %}
", "PHPKTemplateBundle:layout:meta.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/layout/meta.html.twig");
    }
}
