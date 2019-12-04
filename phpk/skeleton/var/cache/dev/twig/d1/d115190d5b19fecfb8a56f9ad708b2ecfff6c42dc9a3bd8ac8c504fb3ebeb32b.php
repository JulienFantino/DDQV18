<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* AppBundle:Default:info.html.twig */

class __TwigTemplate_64f612a7f05d13ac336980cec1f5a7829a7d3e8c446febfaa7a8077bc95ec6b2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:info.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Default:info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Default:info.html.twig"));

        // line 2
        $context["__internal_f82b7a982adb40369c850fb68676d6da8edc880a8de6be7aa0c6a1b760ec23b4"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "AppBundle:Default:info.html.twig", 2);
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
        echo "    <h2>Organismes:</h2>
    <ul>
        ";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organismes"]) || array_key_exists("organismes", $context) ? $context["organismes"] : (function () {
            throw new RuntimeError('Variable "organismes" does not exist.', 8, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["organisme"]) {
            // line 9
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                    throw new RuntimeError('Variable "i" does not exist.', 9, $this->source);
                })()) + 1);
            // line 10
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                throw new RuntimeError('Variable "i" does not exist.', 10, $this->source);
            })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["organisme"], "nomComplet", []), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
    <h2>Sites:</h2>
    <ul>
        ";
        // line 15
        $context["i"] = 0;
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () {
            throw new RuntimeError('Variable "sites" does not exist.', 16, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 17
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                    throw new RuntimeError('Variable "i" does not exist.', 17, $this->source);
                })()) + 1);
            // line 18
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                throw new RuntimeError('Variable "i" does not exist.', 18, $this->source);
            })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nomSite", []), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
    <h2>Entites:</h2>
    <ul>
        ";
        // line 23
        $context["i"] = 0;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entites"]) || array_key_exists("entites", $context) ? $context["entites"] : (function () {
            throw new RuntimeError('Variable "entites" does not exist.', 24, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
            // line 25
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                    throw new RuntimeError('Variable "i" does not exist.', 25, $this->source);
                })()) + 1);
            // line 26
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                throw new RuntimeError('Variable "i" does not exist.', 26, $this->source);
            })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entite"], "idSite", []), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
    <h2>Agents:</h2>
    <table>
        ";
        // line 31
        $context["i"] = 0;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () {
            throw new RuntimeError('Variable "agents" does not exist.', 32, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 33
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                    throw new RuntimeError('Variable "i" does not exist.', 33, $this->source);
                })()) + 1);
            // line 34
            echo "            <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                throw new RuntimeError('Variable "i" does not exist.', 35, $this->source);
            })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "nomComplet", []), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "idOrganisme", []), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "idSite", []), "html", null, true);
            echo "</td> 
             <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "Contact", []), "html", null, true);
            echo "</td> 
            </tr>
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </table>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(188 => 43, 177 => 38, 173 => 37, 169 => 36, 163 => 35, 160 => 34, 157 => 33, 152 => 32, 150 => 31, 145 => 28, 134 => 26, 131 => 25, 126 => 24, 124 => 23, 119 => 20, 108 => 18, 105 => 17, 100 => 16, 98 => 15, 93 => 12, 82 => 10, 79 => 9, 74 => 8, 72 => 7, 68 => 5, 59 => 4, 49 => 1, 47 => 2, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block body %}
    <h2>Organismes:</h2>
    <ul>
        {% set i = 0 %}
        {% for organisme in organismes %}
            {% set i = i + 1 %}
            <li>{{i}} - {{organisme.nomComplet}}</li>
        {% endfor %}
    </ul>
    <h2>Sites:</h2>
    <ul>
        {% set i = 0 %}
        {% for site in sites %}
            {% set i = i + 1 %}
            <li>{{i}} - {{site.nomSite}}</li>
        {% endfor %}
    </ul>
    <h2>Entites:</h2>
    <ul>
        {% set i = 0 %}
        {% for entite in entites %}
            {% set i = i + 1 %}
            <li>{{i}} - {{entite.idSite}}</li>
        {% endfor %}
    </ul>
    <h2>Agents:</h2>
    <table>
        {% set i = 0 %}
        {% for agent in agents %}
            {% set i = i + 1 %}
            <tr>
            <td>{{i}} - {{agent.nomComplet}}</td>
            <td>{{agent.idOrganisme}}</td>
            <td>{{agent.idSite}}</td> 
             <td>{{agent.Contact}}</td> 
            </tr>
            
            
        {% endfor %}
    </table>
{% endblock %}", "AppBundle:Default:info.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/src/AppBundle/Resources/views/Default/info.html.twig");
    }
}
