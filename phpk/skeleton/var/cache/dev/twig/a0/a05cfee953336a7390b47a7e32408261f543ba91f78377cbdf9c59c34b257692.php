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

/* PHPKTemplateBundle:macro:ariane.html.twig */

class __TwigTemplate_273a10464bf495b023c3c34cc7412a1cbdd7967d59b8731623399ce73e69d8e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:ariane.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:ariane.html.twig"));


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_build(...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build"));

            // line 3
            echo "    <ol id=\"fil-ariane-list\" aria-labelledby=\"fil-ariane-label\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.arborescence"));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 5
                echo "            ";
                $context["arianeClass"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetArianeClassExtension']->getArianeClass($context["menu"]);
                // line 6
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["arianeClass"] ?? null), "courant", [], "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["arianeClass"]) || array_key_exists("arianeClass", $context) ? $context["arianeClass"] : (function () {
                        throw new RuntimeError('Variable "arianeClass" does not exist.', 6, $this->source);
                    })()), "courant", []))) {
                    // line 7
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["arianeClass"] ?? null), "ariane", [], "any", true, true)) {
                        // line 8
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["arianeClass"]) || array_key_exists("arianeClass", $context) ? $context["arianeClass"] : (function () {
                            throw new RuntimeError('Variable "arianeClass" does not exist.', 8, $this->source);
                        })()), "ariane", []));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["ariane"]) {
                            // line 9
                            echo "                        <li>
                            ";
                            // line 10
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                                // line 11
                                echo "                                <span class=\"courant\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ariane"], "libelle", []);
                                echo "</span>
                            ";
                            } else {
                                // line 13
                                echo "                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["ariane"], "route", [], "any", true, true)) {
                                    // line 14
                                    echo "                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["ariane"], "route", []), $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetArianeRouteParamsExtension']->getArianeRouteParams(twig_get_attribute($this->env, $this->source, $context["ariane"], "route", []))), "html", null, true);
                                    echo "\"
                                       id=\"filariane";
                                    // line 15
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                                    echo "\"
                                       class=\"";
                                    // line 16
                                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                                        echo "premier";
                                    }
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ariane"], "libelle", []);
                                    echo "</a>
                                ";
                                } else {
                                    // line 18
                                    echo "                                    <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["ariane"], "libelle", []);
                                    echo "</span>
                                ";
                                }
                                // line 20
                                echo "                            ";
                            }
                            // line 21
                            echo "                        </li>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ariane'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "                ";
                    }
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ol>
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:macro:ariane.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(168 => 26, 162 => 25, 159 => 24, 156 => 23, 141 => 21, 138 => 20, 132 => 18, 123 => 16, 119 => 15, 114 => 14, 111 => 13, 105 => 11, 103 => 10, 100 => 9, 82 => 8, 79 => 7, 76 => 6, 73 => 5, 69 => 4, 66 => 3, 49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création du fil d'ariane #}
{% macro build() %}
    <ol id=\"fil-ariane-list\" aria-labelledby=\"fil-ariane-label\">
        {% for menu in getParameter('phpk_core.arborescence') %}
            {% set arianeClass = getArianeClass(menu) %}
            {% if arianeClass.courant is defined and arianeClass.courant %}
                {% if arianeClass.ariane is defined %}
                    {% for ariane in arianeClass.ariane %}
                        <li>
                            {% if loop.last %}
                                <span class=\"courant\">{{ ariane.libelle|raw }}</span>
                            {% else %}
                                {% if ariane.route is defined %}
                                    <a href=\"{{ path(ariane.route, getArianeRouteParams(ariane.route)) }}\"
                                       id=\"filariane{{ loop.index }}\"
                                       class=\"{% if loop.first %}premier{% endif %}\">{{ ariane.libelle|raw }}</a>
                                {% else %}
                                    <span>{{ ariane.libelle|raw }}</span>
                                {% endif %}
                            {% endif %}
                        </li>
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endfor %}
    </ol>
{% endmacro %}
", "PHPKTemplateBundle:macro:ariane.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/ariane.html.twig");
    }
}
