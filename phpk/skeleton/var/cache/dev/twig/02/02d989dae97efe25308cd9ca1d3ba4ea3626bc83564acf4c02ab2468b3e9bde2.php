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

/* PHPKTemplateBundle:macro:menu.html.twig */

class __TwigTemplate_9b345ff2bb2cb54a58ae17d034b99911f31844dfec1aa7371c210da33b124ae6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:menu.html.twig"));

        // line 31
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_build($__menus__ = null, $__route__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menus" => $__menus__,
            "route" => $__route__,
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
            echo "    ";
            if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.menu_display") == "horizontal")) {
                // line 4
                echo "        ";
                $context["direction"] = "horizontal";
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["direction"] = "vertical";
                // line 7
                echo "    ";
            }
            // line 8
            echo "    <div id=\"navigation\" class=\"nav-";
            echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () {
                throw new RuntimeError('Variable "direction" does not exist.', 8, $this->source);
            })()), "html", null, true);
            echo "\">
        ";
            // line 9
            $context["__internal_1ef635e1bb9f1f9eadbc5770fd6d2a14da4908184dcf7b44ceca805a1c5f1cda"] = $this->loadTemplate("PHPKTemplateBundle:macro:menu.html.twig", "PHPKTemplateBundle:macro:menu.html.twig", 9);
            // line 10
            echo "        ";
            echo $context["__internal_1ef635e1bb9f1f9eadbc5770fd6d2a14da4908184dcf7b44ceca805a1c5f1cda"]->macro_create((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () {
                throw new RuntimeError('Variable "menus" does not exist.', 10, $this->source);
            })()), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () {
                throw new RuntimeError('Variable "route" does not exist.', 10, $this->source);
            })()));
            echo "
    </div>

    <script type=\"text/javascript\">
        window.addEvent('load', function() {
            var elcourant = \$\$('#navigation a.courant');
            var activedescendant = elcourant.getParent('li').get('id');
            \$\$('#navigation ul.niveau1').set('aria-activedescendant', activedescendant);

            elcourant.getParents(\"ul.cacher\").each(function(el){
                el.removeClass('cacher');
            });

            elcourant.getParents(\"li\").each(function(el){
                el.getChildren('a.plier').each(function(elplie){
                    elplie.removeClass('plier').addClass('deplier');
                });
            });
        });
    </script>
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_create($__menus__ = null, $__route__ = null, $__parent__ = null, $__niveau__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menus" => $__menus__,
            "route" => $__route__,
            "parent" => $__parent__,
            "niveau" => $__niveau__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            // line 33
            echo "    ";
            $context["__internal_e426fe60cc5bc88292fd56768d00133c201dc6d236496547149de6afce52edb2"] = $this->loadTemplate("PHPKTemplateBundle:macro:menu.html.twig", "PHPKTemplateBundle:macro:menu.html.twig", 33);
            // line 34
            echo "
    ";
            // line 35
            $context["niveau"] = (((isset($context["niveau"]) || array_key_exists("niveau", $context))) ? (_twig_default_filter((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () {
                throw new RuntimeError('Variable "niveau" does not exist.', 35, $this->source);
            })()), 1)) : (1));
            // line 36
            echo "    ";
            $context["parent"] = (((isset($context["parent"]) || array_key_exists("parent", $context))) ? (_twig_default_filter((isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () {
                throw new RuntimeError('Variable "parent" does not exist.', 36, $this->source);
            })()), "")) : (""));
            // line 37
            echo "
    ";
            // line 38
            if ((twig_length_filter($this->env, (isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () {
                    throw new RuntimeError('Variable "menus" does not exist.', 38, $this->source);
                })())) > 0)) {
                // line 39
                echo "        <ul ";
                if (((isset($context["parent"]) || array_key_exists("parent", $context)) && ((isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () {
                            throw new RuntimeError('Variable "parent" does not exist.', 39, $this->source);
                        })()) != ""))) {
                    echo "id=\"ssMen_m";
                    echo twig_escape_filter($this->env, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () {
                        throw new RuntimeError('Variable "parent" does not exist.', 39, $this->source);
                    })()), "html", null, true);
                    echo "\"";
                }
                echo " class=\"niveau";
                echo twig_escape_filter($this->env, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () {
                    throw new RuntimeError('Variable "niveau" does not exist.', 39, $this->source);
                })()), "html", null, true);
                echo " ";
                if (((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () {
                        throw new RuntimeError('Variable "niveau" does not exist.', 39, $this->source);
                    })()) > 1)) {
                    echo "cacher";
                }
                echo "\" role=\"menu\" aria-activedescendant=\"\">
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () {
                    throw new RuntimeError('Variable "menus" does not exist.', 40, $this->source);
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 41
                    echo "
            ";
                    // line 42
                    $context["granted"] = false;
                    // line 43
                    echo "            ";
                    if (!twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "habilitations", []))) {
                        // line 44
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "habilitations", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                            // line 45
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                    throw new RuntimeError('Variable "app" does not exist.', 45, $this->source);
                                })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                                // line 46
                                echo "                        ";
                                $context["granted"] = true;
                                // line 47
                                echo "                    ";
                            }
                            // line 48
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "            ";
                    } else {
                        // line 50
                        echo "                ";
                        $context["granted"] = true;
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "
            ";
                    // line 53
                    if ((isset($context["granted"]) || array_key_exists("granted", $context) ? $context["granted"] : (function () {
                        throw new RuntimeError('Variable "granted" does not exist.', 53, $this->source);
                    })())) {
                        // line 54
                        echo "
                ";
                        // line 55
                        $context["id"] = ((isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () {
                                throw new RuntimeError('Variable "parent" does not exist.', 55, $this->source);
                            })()) . twig_get_attribute($this->env, $this->source, $context["loop"], "index", []));
                        // line 56
                        echo "
                ";
                        // line 57
                        $context["menuClass"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetMenuClassExtension']->getMenuClass($context["menu"], (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () {
                            throw new RuntimeError('Variable "route" does not exist.', 57, $this->source);
                        })()));
                        // line 58
                        echo "                ";
                        $context["courant"] = twig_get_attribute($this->env, $this->source, (isset($context["menuClass"]) || array_key_exists("menuClass", $context) ? $context["menuClass"] : (function () {
                            throw new RuntimeError('Variable "menuClass" does not exist.', 58, $this->source);
                        })()), "courant", []);
                        // line 59
                        echo "                ";
                        $context["depliable"] = twig_get_attribute($this->env, $this->source, (isset($context["menuClass"]) || array_key_exists("menuClass", $context) ? $context["menuClass"] : (function () {
                            throw new RuntimeError('Variable "menuClass" does not exist.', 59, $this->source);
                        })()), "depliable", []);
                        // line 60
                        echo "
                <li id=\"m";
                        // line 61
                        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                            throw new RuntimeError('Variable "id" does not exist.', 61, $this->source);
                        })()), "html", null, true);
                        echo "_menuitem\" role=\"menuitem\">
                    <a id=\"m";
                        // line 62
                        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                            throw new RuntimeError('Variable "id" does not exist.', 62, $this->source);
                        })()), "html", null, true);
                        echo "\"
                       href=\"";
                        // line 63
                        if (twig_get_attribute($this->env, $this->source, $context["menu"], "route", [], "any", true, true)) {
                            // line 64
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["menu"], "params", [], "any", true, true)) {
                                // line 65
                                echo "                                    ";
                                $context["params"] = twig_array_merge(twig_get_attribute($this->env, $this->source, $context["menu"], "params", []), ["init" => ""]);
                                // line 66
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu"], "route", []), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () {
                                    throw new RuntimeError('Variable "params" does not exist.', 66, $this->source);
                                })())), "html", null, true);
                                echo "
                                ";
                            } else {
                                // line 68
                                echo "                                    ";
                                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu"], "route", []));
                                echo "?init
                                ";
                            }
                            // line 70
                            echo "                             ";
                        } else {
                            echo "#";
                        }
                        echo "\"
                       class=\"";
                        // line 71
                        if (((isset($context["depliable"]) || array_key_exists("depliable", $context) ? $context["depliable"] : (function () {
                                throw new RuntimeError('Variable "depliable" does not exist.', 71, $this->source);
                            })()) && !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "fils", [])))) {
                            echo "plier";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) {
                            echo "premier";
                        }
                        // line 72
                        echo "                               ";
                        if ((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () {
                            throw new RuntimeError('Variable "courant" does not exist.', 72, $this->source);
                        })())) {
                            echo "courant";
                        }
                        echo "\">
                       ";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["menu"], "libelle", []);
                        echo "
                    </a>
                    ";
                        // line 75
                        if ((((isset($context["depliable"]) || array_key_exists("depliable", $context) ? $context["depliable"] : (function () {
                                    throw new RuntimeError('Variable "depliable" does not exist.', 75, $this->source);
                                })()) && !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "fils", []))) && !twig_get_attribute($this->env, $this->source, $context["menu"], "route", [], "any", true, true))) {
                            // line 76
                            echo "                        ";
                            echo $context["__internal_e426fe60cc5bc88292fd56768d00133c201dc6d236496547149de6afce52edb2"]->macro_create(twig_get_attribute($this->env, $this->source, $context["menu"], "fils", []), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () {
                                throw new RuntimeError('Variable "route" does not exist.', 76, $this->source);
                            })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                                throw new RuntimeError('Variable "id" does not exist.', 76, $this->source);
                            })()), ((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () {
                                    throw new RuntimeError('Variable "niveau" does not exist.', 76, $this->source);
                                })()) + 1));
                            echo "
                    ";
                        }
                        // line 78
                        echo "
                </li>

            ";
                    }
                    // line 82
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "        </ul>
    ";
            }
            // line 86
            echo "
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
        return "PHPKTemplateBundle:macro:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(346 => 86, 342 => 84, 327 => 82, 321 => 78, 315 => 76, 313 => 75, 308 => 73, 301 => 72, 295 => 71, 288 => 70, 282 => 68, 276 => 66, 273 => 65, 270 => 64, 268 => 63, 264 => 62, 260 => 61, 257 => 60, 254 => 59, 251 => 58, 249 => 57, 246 => 56, 244 => 55, 241 => 54, 239 => 53, 236 => 52, 233 => 51, 230 => 50, 227 => 49, 221 => 48, 218 => 47, 215 => 46, 212 => 45, 207 => 44, 204 => 43, 202 => 42, 199 => 41, 182 => 40, 167 => 39, 165 => 38, 162 => 37, 159 => 36, 157 => 35, 154 => 34, 151 => 33, 130 => 32, 93 => 10, 91 => 9, 86 => 8, 83 => 7, 80 => 6, 77 => 5, 74 => 4, 71 => 3, 52 => 2, 41 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création du menu #}
{% macro build(menus, route) %}
    {% if getParameter('phpk_template.menu_display') == 'horizontal' %}
        {% set direction = 'horizontal' %}
    {% else %}
        {% set direction = 'vertical' %}
    {% endif %}
    <div id=\"navigation\" class=\"nav-{{ direction }}\">
        {% from \"PHPKTemplateBundle:macro:menu.html.twig\" import create %}
        {{ create(menus, route) }}
    </div>

    <script type=\"text/javascript\">
        window.addEvent('load', function() {
            var elcourant = \$\$('#navigation a.courant');
            var activedescendant = elcourant.getParent('li').get('id');
            \$\$('#navigation ul.niveau1').set('aria-activedescendant', activedescendant);

            elcourant.getParents(\"ul.cacher\").each(function(el){
                el.removeClass('cacher');
            });

            elcourant.getParents(\"li\").each(function(el){
                el.getChildren('a.plier').each(function(elplie){
                    elplie.removeClass('plier').addClass('deplier');
                });
            });
        });
    </script>
{% endmacro %}

{% macro create(menus, route, parent, niveau) %}
    {% from \"PHPKTemplateBundle:macro:menu.html.twig\" import create %}

    {% set niveau = niveau|default(1) %}
    {% set parent = parent|default(\"\") %}

    {% if menus|length>0 %}
        <ul {% if parent is defined and parent != \"\" %}id=\"ssMen_m{{ parent }}\"{% endif %} class=\"niveau{{ niveau }} {% if niveau > 1 %}cacher{% endif %}\" role=\"menu\" aria-activedescendant=\"\">
        {% for menu in menus %}

            {% set granted = false %}
            {% if menu.habilitations is not empty %}
                {% for habilitation in menu.habilitations %}
                    {% if app.user.granted is defined and app.user.granted(habilitation) %}
                        {% set granted = true %}
                    {% endif %}
                {% endfor %}
            {% else %}
                {% set granted = true %}
            {% endif %}

            {% if granted %}

                {% set id = parent ~ loop.index %}

                {% set menuClass = getMenuClass(menu, route) %}
                {% set courant = menuClass.courant %}
                {% set depliable = menuClass.depliable %}

                <li id=\"m{{ id }}_menuitem\" role=\"menuitem\">
                    <a id=\"m{{ id }}\"
                       href=\"{% if menu.route is defined %}
                                {% if menu.params is defined %}
                                    {% set params = menu.params|merge({init:''}) %}
                                    {{ path(menu.route, params ) }}
                                {% else %}
                                    {{ path(menu.route) }}?init
                                {% endif %}
                             {% else %}#{% endif %}\"
                       class=\"{% if depliable and menu.fils is not empty %}plier{% elseif loop.index==1 %}premier{% endif %}
                               {% if courant %}courant{% endif %}\">
                       {{ menu.libelle|raw }}
                    </a>
                    {% if depliable and menu.fils is not empty and menu.route is not defined %}
                        {{ create(menu.fils, route,  id , niveau + 1) }}
                    {% endif %}

                </li>

            {% endif %}

        {% endfor %}
        </ul>
    {% endif %}

{% endmacro %}
", "PHPKTemplateBundle:macro:menu.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/menu.html.twig");
    }
}
