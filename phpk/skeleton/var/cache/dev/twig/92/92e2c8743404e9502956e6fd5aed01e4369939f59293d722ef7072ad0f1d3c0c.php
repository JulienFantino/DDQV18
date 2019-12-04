<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:graphes.html.twig */

class __TwigTemplate_88087040078c588e49c192d9ede081732ce392b9ed37bc97626306b8104091d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:graphes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:graphes.html.twig"));

        // line 6
        echo "
";
        // line 46
        echo "
";
        // line 113
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_build($__graphe__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "graphe" => $__graphe__,
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
            $context["__internal_5b3fe614fa275f557ff1972a0a8b560b802260696a3f541ca83193882006621b"] = $this->loadTemplate("PHPKTemplateBundle:macro:graphes.html.twig", "PHPKTemplateBundle:macro:graphes.html.twig", 3);
            // line 4
            echo "    ";
            echo $context["__internal_5b3fe614fa275f557ff1972a0a8b560b802260696a3f541ca83193882006621b"]->macro_graphique(twig_get_attribute($this->env, $this->source, (isset($context["graphe"]) || array_key_exists("graphe", $context) ? $context["graphe"] : (function () {
                throw new RuntimeError('Variable "graphe" does not exist.', 4, $this->source);
            })()), "render", []));
            echo "
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_graphique($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique"));

            // line 8
            echo "
    ";
            // line 9
            ob_start();
            // line 10
            echo "
        ";
            // line 11
            $context["formatter"] = twig_array_merge(["decimal" => 2, "decimalPoint" => ",", "thousandSep" => " "], ((twig_get_attribute($this->env, $this->source,             // line 13
                ($context["args"] ?? null), "formatter", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 13, $this->source);
            })()), "formatter", [])) : ([])));
            // line 14
            echo "
        ";
            // line 15
            $context["graphique"] = twig_array_merge(["width" => 600, "height" => 400, "type" => "columns", "legend" => "right"], ((twig_get_attribute($this->env, $this->source,             // line 18
                ($context["args"] ?? null), "graphique", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 18, $this->source);
            })()), "graphique", [])) : ([])));
            // line 19
            echo "
        ";
            // line 20
            $context["table"] = twig_array_merge(["display" => false], ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "table", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
            })()), "table", [])) : ([])));
            // line 21
            echo "
        ";
            // line 22
            $context["data"] = twig_array_merge(["xAxis" => "", "yAxis" => "", "categories" => [], "series" => []], ((twig_get_attribute($this->env, $this->source,             // line 25
                ($context["args"] ?? null), "data", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 25, $this->source);
            })()), "data", [])) : ([])));
            // line 26
            echo "
        ";
            // line 27
            $context["args"] = twig_array_merge(["id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("graphe_"), "title" => "", "formatter" =>             // line 30
                (isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () {
                    throw new RuntimeError('Variable "formatter" does not exist.', 30, $this->source);
                })()), "graphique" =>             // line 31
                (isset($context["graphique"]) || array_key_exists("graphique", $context) ? $context["graphique"] : (function () {
                    throw new RuntimeError('Variable "graphique" does not exist.', 31, $this->source);
                })()), "table" =>             // line 32
                (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () {
                    throw new RuntimeError('Variable "table" does not exist.', 32, $this->source);
                })()), "data" =>             // line 33
                (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () {
                    throw new RuntimeError('Variable "data" does not exist.', 33, $this->source);
                })())],             // line 34
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 34, $this->source);
                })()));
            // line 35
            echo "
        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "data", [], "any", false, true), "categories", [], "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 36, $this->source);
                    })()), "data", []), "categories", [])) > 0))) {
                // line 37
                echo "            ";
                $context["__internal_8a8dd7e3186da3d0b43854d508a20e6961da834386e5760da9464aee0d1f79af"] = $this->loadTemplate("PHPKTemplateBundle:macro:graphes.html.twig", "PHPKTemplateBundle:macro:graphes.html.twig", 37);
                // line 38
                echo "            ";
                echo $context["__internal_8a8dd7e3186da3d0b43854d508a20e6961da834386e5760da9464aee0d1f79af"]->macro_graphique_complexe((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 38, $this->source);
                })()));
                echo "
        ";
            } else {
                // line 40
                echo "            ";
                $context["__internal_5baf4d2f8f2623f639635c43b3cbf4b369003dc88a4c0e6037e2735bec9ae1da"] = $this->loadTemplate("PHPKTemplateBundle:macro:graphes.html.twig", "PHPKTemplateBundle:macro:graphes.html.twig", 40);
                // line 41
                echo "            ";
                echo $context["__internal_5baf4d2f8f2623f639635c43b3cbf4b369003dc88a4c0e6037e2735bec9ae1da"]->macro_graphique_simple((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 41, $this->source);
                })()));
                echo "
        ";
            }
            // line 43
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_graphique_simple($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique_simple"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique_simple"));

            // line 48
            echo "    ";
            ob_start();
            // line 49
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 49, $this->source);
            })()), "id", []), "html", null, true);
            echo "\"
             class=\"graphe\">
            <div id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 51, $this->source);
            })()), "id", []), "html", null, true);
            echo "_graphique\"
                 class=\"graphique ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 52, $this->source);
            })()), "graphique", []), "type", []), "html", null, true);
            echo "\"
                 aria-width=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 53, $this->source);
            })()), "graphique", []), "width", []), "html", null, true);
            echo "\"
                 aria-height=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 54, $this->source);
            })()), "graphique", []), "height", []), "html", null, true);
            echo "\"
                 aria-describedby=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 55, $this->source);
            })()), "id", []), "html", null, true);
            echo "_donnees\"
                 aria-legend=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 56, $this->source);
            })()), "graphique", []), "legend", []), "html", null, true);
            echo "\">
            </div>
            <div id=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 58, $this->source);
            })()), "id", []), "html", null, true);
            echo "_donnees\"
                 class=\"graphe-donnees tab-box ";
            // line 59
            if (!twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 59, $this->source);
            })()), "table", []), "display", [])) {
                echo "js-invisible";
            }
            echo "\">
                <table>
                    <caption>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 61, $this->source);
            })()), "title", []), "html", null, true);
            echo "</caption>
                    <tbody>
                        <tr";
            // line 63
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 63, $this->source);
                    })()), "data", []), "xAxis", []) == "") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 63, $this->source);
                    })()), "data", []), "yAxis", []) == ""))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                            <th scope=\"col\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 64, $this->source);
            })()), "data", []), "xAxis", []), "html", null, true);
            echo "</th>
                            <th scope=\"col\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 65, $this->source);
            })()), "data", []), "yAxis", []), "html", null, true);
            echo "</th>
                        </tr>
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
            })()), "data", []), "series", []));
            foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                // line 68
                echo "                            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "pair", 1 => "impair"], $context["i"]), "html", null, true);
                echo "\">
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", []), "html", null, true);
                echo "</td>
                                <td class=\"colnum\"
                                    ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", [], "any", false, true), 0, [], "array", true, true)) {
                    // line 72
                    echo "                                        data-value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", []), 0, [], "array"), "html", null, true);
                    echo "\">
                                        ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", []), 0, [], "array"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                    })()), "formatter", []), "decimal", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 74
                        (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 74, $this->source);
                        })()), "formatter", []), "decimalPoint", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 75
                        (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 75, $this->source);
                        })()), "formatter", []), "thousandSep", [])), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 77
                    echo "                                        >
                                    ";
                }
                // line 79
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {

                var colors = new Array();
                ";
            // line 91
            $context["changeColors"] = false;
            // line 92
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 92, $this->source);
            })()), "data", []), "series", []));
            foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                // line 93
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "color", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, $context["row"], "color", [])))) {
                    // line 94
                    echo "                        colors[";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "] = '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "color", []), "html", null, true);
                    echo "';
                        ";
                    // line 95
                    $context["changeColors"] = true;
                    // line 96
                    echo "                    ";
                }
                // line 97
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
                ";
            // line 99
            if ((isset($context["changeColors"]) || array_key_exists("changeColors", $context) ? $context["changeColors"] : (function () {
                throw new RuntimeError('Variable "changeColors" does not exist.', 99, $this->source);
            })())) {
                // line 100
                echo "                    var getColor = Graphe.getColor;
                    Graphe.getColor = function(num) {
                        return colors[num];
                    }
                ";
            }
            // line 105
            echo "                phpk_graphes('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 105, $this->source);
            })()), "id", []), "html", null, true);
            echo "', 'simple');
                ";
            // line 106
            if ((isset($context["changeColors"]) || array_key_exists("changeColors", $context) ? $context["changeColors"] : (function () {
                throw new RuntimeError('Variable "changeColors" does not exist.', 106, $this->source);
            })())) {
                // line 107
                echo "                    Graphe.getColor = getColor;
                ";
            }
            // line 109
            echo "            });
        </script>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 114
    public function macro_graphique_complexe($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique_complexe"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "graphique_complexe"));

            // line 115
            echo "    ";
            ob_start();
            // line 116
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 116, $this->source);
            })()), "id", []), "html", null, true);
            echo "\"
             class=\"graphe\">
            <div id=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 118, $this->source);
            })()), "id", []), "html", null, true);
            echo "_graphique\"
                 class=\"graphique ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 119, $this->source);
            })()), "graphique", []), "type", []), "html", null, true);
            echo "\"
                 aria-width=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 120, $this->source);
            })()), "graphique", []), "width", []), "html", null, true);
            echo "\"
                 aria-height=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 121, $this->source);
            })()), "graphique", []), "height", []), "html", null, true);
            echo "\"
                 aria-describedby=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 122, $this->source);
            })()), "id", []), "html", null, true);
            echo "_donnees\"
                 aria-legend=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 123, $this->source);
            })()), "graphique", []), "legend", []), "html", null, true);
            echo "\">
            </div>
            <div id=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 125, $this->source);
            })()), "id", []), "html", null, true);
            echo "_donnees\"
                 class=\"graphe-donnees tab-box ";
            // line 126
            if (!twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 126, $this->source);
            })()), "table", []), "display", [])) {
                echo "js-invisible";
            }
            echo "\">
                <table>
                    <caption>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 128, $this->source);
            })()), "title", []), "html", null, true);
            echo "</caption>
                    <tbody>
                        <tr>
                            <td></td>
                            <th scope=\"col\" colspan=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 132, $this->source);
            })()), "data", []), "series", [])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 132, $this->source);
            })()), "data", []), "yAxis", []), "html", null, true);
            echo "</th>
                        </tr>
                        <tr>
                           <th scope=\"col\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 135, $this->source);
            })()), "data", []), "xAxis", []), "html", null, true);
            echo "</th>
                           ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 136, $this->source);
            })()), "data", []), "series", []));
            foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                // line 137
                echo "                                <th scope=\"col\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", []), "html", null, true);
                echo "</th>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                        </tr>
                        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 140, $this->source);
            })()), "data", []), "categories", []));
            foreach ($context['_seq'] as $context["j"] => $context["categorie"]) {
                // line 141
                echo "                            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "pair", 1 => "impair"], $context["j"]), "html", null, true);
                echo "\">
                                <th scope=\"row\">";
                // line 142
                echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
                echo "</th>
                                ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 143, $this->source);
                })()), "data", []), "series", []));
                foreach ($context['_seq'] as $context["k"] => $context["serie"]) {
                    // line 144
                    echo "                                    <td class=\"colnum\"
                                        ";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["serie"], "data", [], "any", false, true), $context["j"], [], "array", true, true)) {
                        // line 146
                        echo "                                             data-value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["serie"], "data", []), $context["j"], [], "array"), "html", null, true);
                        echo "\">
                                            ";
                        // line 147
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["serie"], "data", []), $context["j"], [], "array"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 147, $this->source);
                        })()), "formatter", []), "decimal", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 148
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 148, $this->source);
                            })()), "formatter", []), "decimalPoint", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 149
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 149, $this->source);
                            })()), "formatter", []), "thousandSep", [])), "html", null, true);
                        echo "
                                        ";
                    } else {
                        // line 151
                        echo "                                            >
                                        ";
                    }
                    // line 153
                    echo "                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['serie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['j'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                var colors = new Array();
                ";
            // line 165
            $context["changeColors"] = false;
            // line 166
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 166, $this->source);
            })()), "data", []), "series", []));
            foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                // line 167
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "color", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, $context["row"], "color", [])))) {
                    // line 168
                    echo "                        colors[";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "] = '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "color", []), "html", null, true);
                    echo "';
                        ";
                    // line 169
                    $context["changeColors"] = true;
                    // line 170
                    echo "                    ";
                }
                // line 171
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "
                ";
            // line 173
            if ((isset($context["changeColors"]) || array_key_exists("changeColors", $context) ? $context["changeColors"] : (function () {
                throw new RuntimeError('Variable "changeColors" does not exist.', 173, $this->source);
            })())) {
                // line 174
                echo "                    var getColor = Graphe.getColor;
                    Graphe.getColor = function(num) {
                        return colors[num];
                    }
                ";
            }
            // line 179
            echo "                phpk_graphes('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 179, $this->source);
            })()), "id", []), "html", null, true);
            echo "', 'complexe');
                ";
            // line 180
            if ((isset($context["changeColors"]) || array_key_exists("changeColors", $context) ? $context["changeColors"] : (function () {
                throw new RuntimeError('Variable "changeColors" does not exist.', 180, $this->source);
            })())) {
                // line 181
                echo "                    Graphe.getColor = getColor;
                ";
            }
            // line 183
            echo "            });
        </script>
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
        return "PHPKTemplateBundle:macro:graphes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(607 => 183, 603 => 181, 601 => 180, 596 => 179, 589 => 174, 587 => 173, 584 => 172, 578 => 171, 575 => 170, 573 => 169, 566 => 168, 563 => 167, 558 => 166, 556 => 165, 546 => 157, 539 => 155, 532 => 153, 528 => 151, 523 => 149, 522 => 148, 521 => 147, 516 => 146, 514 => 145, 511 => 144, 507 => 143, 503 => 142, 498 => 141, 494 => 140, 491 => 139, 482 => 137, 478 => 136, 474 => 135, 466 => 132, 459 => 128, 452 => 126, 448 => 125, 443 => 123, 439 => 122, 435 => 121, 431 => 120, 427 => 119, 423 => 118, 417 => 116, 414 => 115, 396 => 114, 378 => 109, 374 => 107, 372 => 106, 367 => 105, 360 => 100, 358 => 99, 355 => 98, 349 => 97, 346 => 96, 344 => 95, 337 => 94, 334 => 93, 329 => 92, 327 => 91, 316 => 82, 308 => 79, 304 => 77, 299 => 75, 298 => 74, 297 => 73, 292 => 72, 290 => 71, 285 => 69, 280 => 68, 276 => 67, 271 => 65, 267 => 64, 261 => 63, 256 => 61, 249 => 59, 245 => 58, 240 => 56, 236 => 55, 232 => 54, 228 => 53, 224 => 52, 220 => 51, 214 => 49, 211 => 48, 193 => 47, 176 => 43, 170 => 41, 167 => 40, 161 => 38, 158 => 37, 156 => 36, 153 => 35, 151 => 34, 150 => 33, 149 => 32, 148 => 31, 147 => 30, 146 => 27, 143 => 26, 141 => 25, 140 => 22, 137 => 21, 135 => 20, 132 => 19, 130 => 18, 129 => 15, 126 => 14, 124 => 13, 123 => 11, 120 => 10, 118 => 9, 115 => 8, 97 => 7, 79 => 4, 76 => 3, 58 => 2, 47 => 113, 44 => 46, 41 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création d'un histograme #}
{% macro build(graphe) %}
    {% from \"PHPKTemplateBundle:macro:graphes.html.twig\" import graphique %}
    {{ graphique(graphe.render) }}
{% endmacro %}

{% macro graphique(args) %}

    {% spaceless %}

        {% set formatter = { decimal: 2,
                             decimalPoint: ',',
                             thousandSep: ' ' } | merge(( args.formatter is defined ) ? args.formatter : {} ) %}

        {% set graphique = { width: 600,
                             height: 400,
                             type: 'columns',
                             legend: 'right' } | merge(( args.graphique is defined ) ? args.graphique : {} ) %}

        {% set table = { display: false} | merge(( args.table is defined ) ? args.table : {} ) %}

        {% set data = { xAxis: '',
                        yAxis: '',
                        categories: [],
                        series: [] } | merge(( args.data is defined ) ? args.data : {} ) %}

        {% set args = {
                    id: uniqid(\"graphe_\"),
                    title: '',
                    formatter: formatter,
                    graphique: graphique,
                    table: table,
                    data: data
                  } | merge(args) %}

        {% if args.data.categories is defined and args.data.categories|length > 0 %}
            {% from \"PHPKTemplateBundle:macro:graphes.html.twig\" import graphique_complexe %}
            {{ graphique_complexe(args) }}
        {% else %}
            {% from \"PHPKTemplateBundle:macro:graphes.html.twig\" import graphique_simple %}
            {{ graphique_simple(args) }}
        {% endif %}

    {% endspaceless %}
{% endmacro %}

{% macro graphique_simple(args) %}
    {% spaceless %}
        <div id=\"{{ args.id }}\"
             class=\"graphe\">
            <div id=\"{{ args.id }}_graphique\"
                 class=\"graphique {{ args.graphique.type }}\"
                 aria-width=\"{{ args.graphique.width }}\"
                 aria-height=\"{{ args.graphique.height }}\"
                 aria-describedby=\"{{ args.id }}_donnees\"
                 aria-legend=\"{{ args.graphique.legend }}\">
            </div>
            <div id=\"{{ args.id }}_donnees\"
                 class=\"graphe-donnees tab-box {% if not args.table.display %}js-invisible{% endif %}\">
                <table>
                    <caption>{{ args.title }}</caption>
                    <tbody>
                        <tr{% if args.data.xAxis == '' and args.data.yAxis == '' %} style=\"display: none;\"{% endif %}>
                            <th scope=\"col\">{{ args.data.xAxis }}</th>
                            <th scope=\"col\">{{ args.data.yAxis }}</th>
                        </tr>
                        {% for i, row in args.data.series %}
                            <tr class=\"{{ cycle(['pair', 'impair'], i) }}\">
                                <td>{{ row.name }}</td>
                                <td class=\"colnum\"
                                    {% if row.data[0] is defined %}
                                        data-value=\"{{ row.data[0] }}\">
                                        {{ row.data[0] | number_format( args.formatter.decimal ,
                                                                                       args.formatter.decimalPoint ,
                                                                                       args.formatter.thousandSep ) }}
                                    {% else %}
                                        >
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {

                var colors = new Array();
                {% set changeColors = false %}
                {% for i, row in args.data.series %}
                    {% if row.color is defined and row.color is not null %}
                        colors[{{ i }}] = '{{ row.color }}';
                        {% set changeColors = true %}
                    {% endif %}
                {% endfor %}

                {% if changeColors %}
                    var getColor = Graphe.getColor;
                    Graphe.getColor = function(num) {
                        return colors[num];
                    }
                {% endif %}
                phpk_graphes('{{ args.id }}', 'simple');
                {% if changeColors %}
                    Graphe.getColor = getColor;
                {% endif %}
            });
        </script>
    {% endspaceless %}
{% endmacro %}

{% macro graphique_complexe(args) %}
    {% spaceless %}
        <div id=\"{{ args.id }}\"
             class=\"graphe\">
            <div id=\"{{ args.id }}_graphique\"
                 class=\"graphique {{ args.graphique.type }}\"
                 aria-width=\"{{ args.graphique.width }}\"
                 aria-height=\"{{ args.graphique.height }}\"
                 aria-describedby=\"{{ args.id }}_donnees\"
                 aria-legend=\"{{ args.graphique.legend }}\">
            </div>
            <div id=\"{{ args.id }}_donnees\"
                 class=\"graphe-donnees tab-box {% if not args.table.display %}js-invisible{% endif %}\">
                <table>
                    <caption>{{ args.title }}</caption>
                    <tbody>
                        <tr>
                            <td></td>
                            <th scope=\"col\" colspan=\"{{ args.data.series|length }}\">{{ args.data.yAxis }}</th>
                        </tr>
                        <tr>
                           <th scope=\"col\">{{ args.data.xAxis }}</th>
                           {% for i, row in args.data.series %}
                                <th scope=\"col\">{{ row.name }}</th>
                           {% endfor %}
                        </tr>
                        {% for j, categorie in args.data.categories %}
                            <tr class=\"{{ cycle(['pair', 'impair'], j) }}\">
                                <th scope=\"row\">{{ categorie }}</th>
                                {% for k, serie in args.data.series %}
                                    <td class=\"colnum\"
                                        {% if serie.data[j] is defined %}
                                             data-value=\"{{ serie.data[j] }}\">
                                            {{ serie.data[j] | number_format( args.formatter.decimal ,
                                                                                           args.formatter.decimalPoint ,
                                                                                           args.formatter.thousandSep ) }}
                                        {% else %}
                                            >
                                        {% endif %}
                                    </td>
                                {% endfor %}
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                var colors = new Array();
                {% set changeColors = false %}
                {% for i, row in args.data.series %}
                    {% if row.color is defined and row.color is not null %}
                        colors[{{ i }}] = '{{ row.color }}';
                        {% set changeColors = true %}
                    {% endif %}
                {% endfor %}

                {% if changeColors %}
                    var getColor = Graphe.getColor;
                    Graphe.getColor = function(num) {
                        return colors[num];
                    }
                {% endif %}
                phpk_graphes('{{ args.id }}', 'complexe');
                {% if changeColors %}
                    Graphe.getColor = getColor;
                {% endif %}
            });
        </script>
    {% endspaceless %}
{% endmacro %}
", "PHPKTemplateBundle:macro:graphes.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/graphes.html.twig");
    }
}
