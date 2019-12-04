<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:interapplication.html.twig */

class __TwigTemplate_2045520d20c73a83ac7ccd393822c3910ae635ccd3ad9b6fabec9cbd8248531f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:interapplication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:interapplication.html.twig"));


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_liens(...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liens"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liens"));

            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "    <div id=\"liens-interapplication\" class=\"ia-link\" >
        ";
            // line 5
            if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.interapplications")) {
                // line 6
                echo "            ";
                $context["liens"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.interapplications");
                // line 7
                echo "            <ul>
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) || array_key_exists("liens", $context) ? $context["liens"] : (function () {
                    throw new RuntimeError('Variable "liens" does not exist.', 8, $this->source);
                })()));
                $context['loop'] = [
                    'parent' => $context['_parent'],
                    'index0' => 0,
                    'index' => 1,
                    'first' => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
                    // line 9
                    echo "                    <li>
                        <a id=\"ia-lien";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
                    echo "\"
                           href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "url", []), "html", null, true);
                    echo "\"
                           title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "libelle", []), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lien"], "libelle", []), "html", null, true);
                    echo "</a>
                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            </ul>
        ";
            }
            // line 17
            echo "    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:macro:interapplication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(131 => 17, 127 => 15, 108 => 12, 104 => 11, 100 => 10, 97 => 9, 80 => 8, 77 => 7, 74 => 6, 72 => 5, 69 => 4, 66 => 3, 49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création des liens inter applications #}
{% macro liens() %}
    {% spaceless %}
    <div id=\"liens-interapplication\" class=\"ia-link\" >
        {% if getParameter('phpk_core.interapplications') %}
            {% set liens = getParameter('phpk_core.interapplications') %}
            <ul>
                {% for lien in liens %}
                    <li>
                        <a id=\"ia-lien{{ loop.index0 }}\"
                           href=\"{{ lien.url }}\"
                           title=\"{{ lien.libelle }}\" >{{ lien.libelle }}</a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    {% endspaceless %}
{% endmacro %}
", "PHPKTemplateBundle:macro:interapplication.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/interapplication.html.twig");
    }
}
