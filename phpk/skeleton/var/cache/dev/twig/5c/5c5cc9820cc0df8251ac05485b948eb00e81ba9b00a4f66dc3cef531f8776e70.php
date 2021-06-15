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

/* PHPKTemplateBundle:layout:footer.html.twig */

class __TwigTemplate_c186ce781928b01ad49775db0ed1f96931771e323142779d1d5d2190e462736b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:footer.html.twig"));

        // line 1
        $context["__internal_b78825615bdd6aa3c51f4da1742bd11c90dffbf7fb8a99d46857d387f5825222"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "PHPKTemplateBundle:layout:footer.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('footer', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "
    ";
        // line 5
        if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.menu_display") == "vertical")) {
            // line 6
            echo "        ";
            $context["style_pied_page"] = "text-align: center;padding-left: 210px;";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context["style_pied_page"] = "text-align: center;";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div id=\"pied-de-page\" style=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["style_pied_page"]) || array_key_exists("style_pied_page", $context) ? $context["style_pied_page"] : (function () {
            throw new RuntimeError('Variable "style_pied_page" does not exist.', 11, $this->source);
        })()), "html", null, true);
        echo "\">
       ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["phpk_app_name"]) || array_key_exists("phpk_app_name", $context) ? $context["phpk_app_name"] : (function () {
            throw new RuntimeError('Variable "phpk_app_name" does not exist.', 12, $this->source);
        })()), "html", null, true);
        echo " v.";
        echo twig_escape_filter($this->env, (isset($context["phpk_app_version"]) || array_key_exists("phpk_app_version", $context) ? $context["phpk_app_version"] : (function () {
            throw new RuntimeError('Variable "phpk_app_version" does not exist.', 12, $this->source);
        })()), "html", null, true);
        echo "
    </div>

";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:layout:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(89 => 12, 85 => 11, 82 => 10, 79 => 9, 76 => 8, 73 => 7, 70 => 6, 68 => 5, 65 => 4, 47 => 3, 44 => 2, 42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block footer %}

    {% if getParameter('phpk_template.menu_display') == 'vertical' %}
        {% set style_pied_page = \"text-align: center;padding-left: 210px;\" %}
    {% else %}
        {% set style_pied_page = \"text-align: center;\" %}
    {% endif %}

    <div id=\"pied-de-page\" style=\"{{ style_pied_page }}\">
       {{ phpk_app_name }} v.{{ phpk_app_version }}
    </div>

{% endblock %}
", "PHPKTemplateBundle:layout:footer.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/layout/footer.html.twig");
    }
}
