<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:tableau.html.twig */

class __TwigTemplate_59799732a7d33b4f09611ec0774fa62dd26ee4ea21b5444eb471ba51cd588776 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:tableau.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:tableau.html.twig"));

        // line 678
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function macro_build($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build"));

            // line 7
            echo "    ";
            $context["__internal_084ade2a38830bcdee2dc4dba6e22b775a0a2a7a853952b853e0730bf6874728"] = $this->loadTemplate("PHPKTemplateBundle:macro:tableau.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 7);
            // line 8
            echo "
    ";
            // line 9
            $context["args"] = (((null === (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 9, $this->source);
                })()))) ? ([]) : ((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 9, $this->source);
            })())));
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            $context["args"] = twig_array_merge(["tableau" => null, "formTag" => true, "filter" => true, "export" => [], "affichageLignesTrouvees" => true, "pagination" => "header"],             // line 18
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 18, $this->source);
                })()));
            // line 19
            echo "
    ";
            // line 20
            if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                        throw new RuntimeError('Variable "app" does not exist.', 20, $this->source);
                    })()), "environment", []) == "dev") && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
                })()), "pagination", []), [0 => "header", 1 => "footer", 2 => "both", 3 => false]))) {
                // line 21
                echo "        ";
                $context["__internal_f628667de74c24cb8ff30f12b2f1b8845cc36b7af3a21e44557202b36b7d8d4d"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 21);
                // line 22
                echo "        ";
                echo $context["__internal_f628667de74c24cb8ff30f12b2f1b8845cc36b7af3a21e44557202b36b7d8d4d"]->macro_error(["message" => "L'attribut <b>pagination</b> accepte les valeurs suivantes : 'header', 'footer', 'both', false"]);
                // line 24
                echo "
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            $context["tableau"] = ((!(null === twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 27, $this->source);
                })()), "tableau", []))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 27, $this->source);
            })()), "tableau", []), "render", [])) : (null));
            // line 28
            echo "
    ";
            // line 29
            if (!(null === (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                    throw new RuntimeError('Variable "tableau" does not exist.', 29, $this->source);
                })()))) {
                // line 30
                echo "
    ";
                // line 32
                echo "    ";
                $context["tableId"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tableau"] ?? null), "metadata", [], "any", false, true), "tableId", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tableau"] ?? null), "metadata", [], "any", false, true), "tableId", []), $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("tableau_"))) : ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("tableau_")));
                // line 33
                echo "    ";
                // line 34
                echo "    ";
                $context["post"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "phpk_table"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "phpk_table"], "method"), [])) : ([]));
                // line 35
                echo "    ";
                $context["checkboxDisplayed"] = [];
                echo " ";
                // line 36
                echo "
    ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 37, $this->source);
                })()), "formTag", [])) {
                    // line 38
                    echo "        <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                        throw new RuntimeError('Variable "app" does not exist.', 38, $this->source);
                    })()), "request", []), "attributes", []), "get", [0 => "_route"], "method"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "attributes", [], "any", false, true), "get", [0 => "_route_params"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true), "attributes", [], "any", false, true), "get", [0 => "_route_params"], "method"), [])) : ([]))), "html", null, true);
                    echo "\">
    ";
                }
                // line 40
                echo "    <div class=\"tab-box\">

        ";
                // line 43
                echo "        <div class=\"tab-interpage\">
            <div class=\"resultat\">
                ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 45, $this->source);
                })()), "affichageLignesTrouvees", [])) {
                    // line 46
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 46, $this->source);
                        })()), "metadata", []), "nbResultsFiltered", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 46, $this->source);
                        })()), "metadata", []), "nbResults", []))) {
                        // line 47
                        echo "                        <b>";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 47, $this->source);
                        })()), "metadata", []), "nbResultsFiltered", []), 0, "", " "), "html", null, true);
                        echo "</b>
                        ";
                        // line 48
                        echo(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                throw new RuntimeError('Variable "tableau" does not exist.', 48, $this->source);
                            })()), "metadata", []), "nbResultsFiltered", []) > 1)) ? ("lignes filtrées") : ("ligne filtrée"));
                        echo " sur ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 48, $this->source);
                        })()), "metadata", []), "nbResults", []), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 50
                        echo "                        <b>";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 50, $this->source);
                        })()), "metadata", []), "nbResults", []), 0, "", " "), "html", null, true);
                        echo "</b>
                        ";
                        // line 51
                        echo(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                throw new RuntimeError('Variable "tableau" does not exist.', 51, $this->source);
                            })()), "metadata", []), "nbResults", []) > 1)) ? ("lignes trouvées") : ("ligne trouvée"));
                        echo "
                    ";
                    }
                    // line 53
                    echo "                ";
                } else {
                    // line 54
                    echo "                    &nbsp;
                ";
                }
                // line 56
                echo "            </div>
            ";
                // line 57
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 57, $this->source);
                })()), "pagination", []), [0 => "header", 1 => "both"])) {
                    // line 58
                    echo "                ";
                    echo $context["__internal_084ade2a38830bcdee2dc4dba6e22b775a0a2a7a853952b853e0730bf6874728"]->macro_pagination(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 59
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 59, $this->source);
                        })()), "metadata", []), "paginator", []), "page", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 60
                        (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 60, $this->source);
                        })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "pageSize"], "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 61
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 61, $this->source);
                        })()), "metadata", []), "nbResults", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 62
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 62, $this->source);
                        })()), "metadata", []), "nbResultsFiltered", []));
                    echo "
            ";
                }
                // line 64
                echo "            ";
                if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.table.pageSize.display")) {
                    // line 65
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 65, $this->source);
                    })()), "affichageLignesTrouvees", [])) {
                        // line 66
                        echo "                        <div class=\"pagination\">
                            <label class=\"lignePage\" for=\"phpk_table[";
                        // line 67
                        echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                            throw new RuntimeError('Variable "tableId" does not exist.', 67, $this->source);
                        })()), "html", null, true);
                        echo "][pageSize]\">nb. de lignes par page</label>
                            <select id=\"phpk_table[";
                        // line 68
                        echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                            throw new RuntimeError('Variable "tableId" does not exist.', 68, $this->source);
                        })()), "html", null, true);
                        echo "][pageSize]\" name=\"phpk_table[";
                        echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                            throw new RuntimeError('Variable "tableId" does not exist.', 68, $this->source);
                        })()), "html", null, true);
                        echo "][pageSize]\"
                                    class=\"phpk_pageSize\">
                                ";
                        // line 70
                        $context["availableOptions"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.table.pageSize.availableOptions");
                        // line 71
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["availableOptions"]) || array_key_exists("availableOptions", $context) ? $context["availableOptions"] : (function () {
                            throw new RuntimeError('Variable "availableOptions" does not exist.', 71, $this->source);
                        })()));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 72
                            echo "                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"
                                        ";
                            // line 73
                            if (($context["key"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                    throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                                })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "pageSize"], "method"))) {
                                // line 74
                                echo "                                            selected=\"selected\"
                                        ";
                            }
                            // line 76
                            echo "                                    >";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                            </select>
                        </div>
                ";
                    }
                    // line 81
                    echo "            ";
                } else {
                    // line 82
                    echo "                <input type=\"hidden\" id=\"phpk_table[";
                    echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                        throw new RuntimeError('Variable "tableId" does not exist.', 82, $this->source);
                    })()), "html", null, true);
                    echo "][pageSize]\" name=\"phpk_table[";
                    echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                        throw new RuntimeError('Variable "tableId" does not exist.', 82, $this->source);
                    })()), "html", null, true);
                    echo "][pageSize]\"
                       value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 83, $this->source);
                    })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "pageSize"], "method"), "html", null, true);
                    echo "\" />
            ";
                }
                // line 85
                echo "        </div>

        <div class=\"tab-body\">
            <div class=\"center\">
                <table id=\"";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 89, $this->source);
                })()), "html", null, true);
                echo "\" class=\"phpk_table\">
                    ";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 90, $this->source);
                    })()), "title", []) != "")) {
                    // line 91
                    echo "                        <caption>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 91, $this->source);
                    })()), "title", []), "html", null, true);
                    echo "</caption>
                    ";
                }
                // line 93
                echo "
                    ";
                // line 95
                echo "                    <thead>

                        ";
                // line 100
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 100, $this->source);
                    })()), "filter", []) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 100, $this->source);
                        })()), "export", [])) > 0))) {
                    // line 101
                    echo "                            <tr class=\"filtre top\">
                                <td class=\"premier\" colspan=\"";
                    // line 102
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 102, $this->source);
                    })()), "columns", [])), "html", null, true);
                    echo "\">
                                    ";
                    // line 103
                    if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 103, $this->source);
                    })()), "filter", [])) {
                        // line 104
                        echo "                                    ";
                        $context["__internal_f02f82ec700ef0d56a36de42307ec4bc25899f17a63edea17b263aabb25d3553"] = $this->loadTemplate("PHPKTemplateBundle:macro:bouton.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 104);
                        // line 105
                        echo "
                                    ";
                        // line 107
                        echo "                                    ";
                        $context["filterSet"] = false;
                        // line 108
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 108, $this->source);
                        })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "filtre"], "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                            // line 109
                            echo "                                        ";
                            if ((($context["filter"] != "") && !twig_test_iterable($context["filter"]))) {
                                // line 110
                                echo "                                            ";
                                $context["filterSet"] = true;
                                // line 111
                                echo "                                        ";
                            }
                            // line 112
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                                    ";
                        echo $context["__internal_f02f82ec700ef0d56a36de42307ec4bc25899f17a63edea17b263aabb25d3553"]->macro_bouton(["id" => (("phpk_table[" .                         // line 114
                                (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                    throw new RuntimeError('Variable "tableId" does not exist.', 114, $this->source);
                                })())) . "][filtre][bouton][restore]"), "name" => (("phpk_table[" .                         // line 115
                                (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                    throw new RuntimeError('Variable "tableId" does not exist.', 115, $this->source);
                                })())) . "][filtre][bouton][restore]"), "class" => "phpk_btn_restore", "role" => "actionintermediaire", "label" => "Rétablir", "type" => "submit", "disabled" => !                        // line 120
                        (isset($context["filterSet"]) || array_key_exists("filterSet", $context) ? $context["filterSet"] : (function () {
                            throw new RuntimeError('Variable "filterSet" does not exist.', 120, $this->source);
                        })())]);
                        // line 121
                        echo "

                                    ";
                        // line 123
                        echo $context["__internal_f02f82ec700ef0d56a36de42307ec4bc25899f17a63edea17b263aabb25d3553"]->macro_bouton(["id" => (("phpk_table[" .                         // line 124
                                (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                    throw new RuntimeError('Variable "tableId" does not exist.', 124, $this->source);
                                })())) . "][filtre][bouton][filter]"), "name" => (("phpk_table[" .                         // line 125
                                (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                    throw new RuntimeError('Variable "tableId" does not exist.', 125, $this->source);
                                })())) . "][filtre][bouton][filter]"), "role" => "actionintermediaire", "label" => "Filtrer", "type" => "submit"]);
                        // line 129
                        echo "
                                    ";
                        // line 130
                        $context["__internal_10d9ddd9de512c33e5b728cbb4b618cb7c5739b6d542b4aa8d214ae2ec3a2e67"] = $this->loadTemplate("PHPKTemplateBundle:macro:aide.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 130);
                        // line 131
                        echo "                                    ";
                        echo $context["__internal_10d9ddd9de512c33e5b728cbb4b618cb7c5739b6d542b4aa8d214ae2ec3a2e67"]->macro_icone(["texte" => (((((("
    <div class=\"infopopup\">
        <div class=\"section\">
            <h2>Liste des opérateurs de filtrage numériques</h2>
            <dl><dt>=</dt><dd>: égal à</dd></dl>
            <dl><dt>!=</dt><dd>: différent de</dd></dl>
            <dl><dt>&lt;&gt;</dt><dd>: différent de</dd></dl>
            <dl><dt>&lt;</dt><dd>: inférieur à</dd></dl>
            <dl><dt>&lt;=</dt><dd>: inférieur ou égal à</dd></dl>
            <dl><dt>&gt;</dt><dd>: supérieur à</dd></dl>
            <dl><dt>&gt;=</dt><dd>: supérieur ou égal à</dd></dl>
        </div>

        <div class=\"section\">
            <h2>Liste des opérateurs sur les textes</h2>
            <dl><dt>\"texte\"</dt><dd>: Texte exact tenant compte des accents et majuscules</dd></dl>
        </div>

        <div class=\"section\">
            <h2>Exemples</h2>
            <dl><dt>&lt;10</dt><dd>veut dire tous les nombres inférieurs à 10.</dd></dl>
            <dl><dt>p</dt><dd>veut dire tous les mots qui commencent par la lettre <b>p</b>.</dd></dl>
            <dl><dt>\"TeSt\"</dt><dd>veut dire tous les mots TeSt en respectant les majuscules et les accents</dd></dl>
        </div>

    <div class=\"section\">
        <h2>Fonctionnement</h2>
        <p>Il n" . "'") . "est possible d") . "'") . "écrire qu") . "'") . "un opérateur par colonne.<br/>
        Il est possible de filtrer sur plusieurs colonnes.<br/>
        Le filtrage texte est insensible à la casse et aux accents, il est cependant possible
        de tenir compte des accents et de la casse en encadrant le texte recherché par des
        guillemets.<br/>
        Les caractères spéciaux sont utilisés uniquement pour le filtrage texte
        (hors opérateurs inférieur et supérieur).
        </p>
    </div>

        <div class=\"section\">
            <h2>Tri des colonnes</h2>
            <p>Pour trier une colonne il suffit de cliquer sur son entête.<br/>
            Il est possible d'effectuer un tri sur plusieurs colonnes en maintenant la touche <b>CTRL</b> enfoncée. Celui-ci s'effectuera au relâchement de la touche.
            </p>
        </div>

    </div>")]);
                        // line 177
                        echo "
                                    ";
                    }
                    // line 179
                    echo "
                                    ";
                    // line 180
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 180, $this->source);
                        })()), "export", [])) > 0)) {
                        // line 181
                        echo "                                    <span class=\"phpk_table_export\">
                                        ";
                        // line 182
                        $context["__internal_4a0ff3c2d37f5ab43faf2c459b7f0d11ac3bc1cb8862477bb7f10509ef8d76e6"] = $this->loadTemplate("PHPKTemplateBundle:macro:liens.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 182);
                        // line 183
                        echo "                                        <input type=\"hidden\" id=\"phpk_table_export_hidden\" name=\"\" />
                                        ";
                        // line 184
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 184, $this->source);
                        })()), "export", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["export"]) {
                            // line 185
                            echo "                                            ";
                            if ((twig_lower_filter($this->env, $context["export"]) == "pdf")) {
                                // line 186
                                echo "                                                ";
                                echo $context["__internal_4a0ff3c2d37f5ab43faf2c459b7f0d11ac3bc1cb8862477bb7f10509ef8d76e6"]->macro_a(["text" => "PDF", "image" => "doc-pdf", "title" => "Télécharger le tableau en PDF", "javascript" => (("phpk_table_export(this,\"phpk_table[" .                                 // line 189
                                        (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                            throw new RuntimeError('Variable "tableId" does not exist.', 189, $this->source);
                                        })())) . "][export][pdf]\")")]);
                                echo "
                                            ";
                            }
                            // line 191
                            echo "                                            ";
                            if ((twig_lower_filter($this->env, $context["export"]) == "csv")) {
                                // line 192
                                echo "                                                ";
                                echo $context["__internal_4a0ff3c2d37f5ab43faf2c459b7f0d11ac3bc1cb8862477bb7f10509ef8d76e6"]->macro_a(["text" => "CSV", "image" => "doc-excel", "title" => "Télécharger le tableau en CSV", "javascript" => (("phpk_table_export(this,\"phpk_table[" .                                 // line 195
                                        (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                            throw new RuntimeError('Variable "tableId" does not exist.', 195, $this->source);
                                        })())) . "][export][csv]\")")]);
                                echo "
                                            ";
                            }
                            // line 197
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['export'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 198
                        echo "                                    </span>
                                    ";
                    }
                    // line 200
                    echo "
                                </td>
                            </tr>
                            ";
                    // line 203
                    if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 203, $this->source);
                    })()), "filter", [])) {
                        // line 204
                        echo "                            <tr class=\"filtre ligne2\">
                                ";
                        // line 205
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 205, $this->source);
                        })()), "columns", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["colonne"]) {
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 205, $this->source);
                            })()), "tableau", []), "view", []), twig_get_attribute($this->env, $this->source, $context["colonne"], "visibility", []))) {
                                // line 206
                                echo "                                    <td>
                                        ";
                                // line 207
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "filtrable", [])) {
                                    // line 208
                                    echo "                                            ";
                                    if (!(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "filter", []))) {
                                        // line 209
                                        echo "                                                ";
                                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PHPKCoreBundle:Tableaux:filter", ["name" => (((("phpk_table[" .                                         // line 210
                                                        (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                            throw new RuntimeError('Variable "tableId" does not exist.', 210, $this->source);
                                                        })())) . "][filtre][") . twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [])) . "]"), "id" => ((                                        // line 211
                                                (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                    throw new RuntimeError('Variable "tableId" does not exist.', 211, $this->source);
                                                })()) . "_filtre_") . twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [])), "value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                         // line 212
                                            ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")), "filter" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                         // line 213
                                            $context["colonne"], "metadata", []), "filter", [])]));
                                        // line 214
                                        echo "
                                            ";
                                    } else {
                                        // line 216
                                        echo "                                                ";
                                        $context["decorator"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "decorator", []);
                                        // line 217
                                        echo "                                                ";
                                        if (((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                throw new RuntimeError('Variable "decorator" does not exist.', 217, $this->source);
                                            })()) == "boolean")) {
                                            // line 218
                                            echo "                                                    <select name=\"phpk_table[";
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 218, $this->source);
                                            })()), "html", null, true);
                                            echo "][filtre][";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "]\"
                                                        id=\"";
                                            // line 219
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 219, $this->source);
                                            })()), "html", null, true);
                                            echo "_filtre_";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "\">

                                                        <option value=\"\"></option>
                                                        <option value=\"0\"
                                                            ";
                                            // line 223
                                            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")) == "0")) {
                                                // line 224
                                                echo "                                                                selected=\"selected\"
                                                            ";
                                            }
                                            // line 226
                                            echo "                                                        >";
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", [], "any", false, true), "decoratorOptions", [], "any", false, true), "booleans", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                             // line 227
                                                $context["colonne"], "metadata", []), "decoratorOptions", []), "booleans", []), false, [], "array")) : ("N")), "html", null, true);
                                            echo "</option>
                                                        <option value=\"1\"
                                                            ";
                                            // line 229
                                            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")) == "1")) {
                                                // line 230
                                                echo "                                                                selected=\"selected\"
                                                            ";
                                            }
                                            // line 232
                                            echo "                                                        >";
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", [], "any", false, true), "decoratorOptions", [], "any", false, true), "booleans", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                             // line 233
                                                $context["colonne"], "metadata", []), "decoratorOptions", []), "booleans", []), true, [], "array")) : ("O")), "html", null, true);
                                            echo "</option>

                                                    </select>
                                                ";
                                        } elseif (((((                                        // line 236
                                                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                            throw new RuntimeError('Variable "decorator" does not exist.', 236, $this->source);
                                                        })()) == "text") || (                                        // line 237
                                                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                            throw new RuntimeError('Variable "decorator" does not exist.', 237, $this->source);
                                                        })()) == "longtext")) || (                                        // line 238
                                                    (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                        throw new RuntimeError('Variable "decorator" does not exist.', 238, $this->source);
                                                    })()) == "integer")) || (                                        // line 239
                                                (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                    throw new RuntimeError('Variable "decorator" does not exist.', 239, $this->source);
                                                })()) == "float"))) {
                                            // line 240
                                            echo "                                                    <input
                                                        name=\"phpk_table[";
                                            // line 241
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 241, $this->source);
                                            })()), "html", null, true);
                                            echo "][filtre][";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "]\"
                                                        id=\"";
                                            // line 242
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 242, $this->source);
                                            })()), "html", null, true);
                                            echo "_filtre_";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "\"
                                                        type=\"text\"
                                                        title=\"Filtre sur la colonne ";
                                            // line 244
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "name", []), "html", null, true);
                                            echo "\"
                                                        class=\"champ_filtre\"
                                                        value=\"";
                                            // line 246
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")), "html", null, true);
                                            echo "\"
                                                    />
                                                ";
                                        } elseif ((                                        // line 248
                                            (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                throw new RuntimeError('Variable "decorator" does not exist.', 248, $this->source);
                                            })()) == "color")) {
                                            // line 249
                                            echo "                                                    <input
                                                        name=\"phpk_table[";
                                            // line 250
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 250, $this->source);
                                            })()), "html", null, true);
                                            echo "][filtre][";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "]\"
                                                        id=\"";
                                            // line 251
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 251, $this->source);
                                            })()), "html", null, true);
                                            echo "_filtre_";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "\"
                                                        type=\"hidden\"
                                                        value=\"";
                                            // line 253
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")), "html", null, true);
                                            echo "\"
                                                    />
                                                    <script type=\"text/javascript\">
                                                        window.addEvent('domready', function(event) {
                                                            ColorPickerTag.init('";
                                            // line 257
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 257, $this->source);
                                            })()), "html", null, true);
                                            echo "_filtre_";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                            echo "',
                                                                                {defaultColor:\"";
                                            // line 258
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")), "html", null, true);
                                            echo "\"});
                                                        ;});
                                                    </script>
                                                ";
                                        } elseif (((                                        // line 261
                                                (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                    throw new RuntimeError('Variable "decorator" does not exist.', 261, $this->source);
                                                })()) == "shortdate") || ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                    throw new RuntimeError('Variable "decorator" does not exist.', 261, $this->source);
                                                })()) == "longdate"))) {
                                            // line 262
                                            echo "                                                    ";
                                            $context["input"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 262);
                                            // line 263
                                            echo "                                                    ";
                                            echo $context["input"]->macro_date(["id" => ((                                            // line 264
                                                    (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                        throw new RuntimeError('Variable "tableId" does not exist.', 264, $this->source);
                                                    })()) . "_filtre_") . twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [])), "name" => (((("phpk_table[" .                                             // line 265
                                                            (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                                throw new RuntimeError('Variable "tableId" does not exist.', 265, $this->source);
                                                            })())) . "][filtre][") . twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [])) . "]"), "value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                             // line 266
                                                ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "filtre"], "method", false, true), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array"), "")) : ("")), "datePicker" => true]);
                                            // line 268
                                            echo "
                                                ";
                                        }
                                        // line 270
                                        echo "                                            ";
                                    }
                                    // line 271
                                    echo "                                        ";
                                }
                                // line 272
                                echo "                                    </td>
                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colonne'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 274
                        echo "                            </tr>
                            ";
                    }
                    // line 276
                    echo "                        ";
                }
                // line 277
                echo "                        ";
                // line 280
                echo "                        <tr>

                            ";
                // line 283
                echo "                            ";
                $context["tableauColonnes"] = twig_split_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "colonne", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "colonne", [], "array"), "")) : ("")), ",");
                // line 284
                echo "                            ";
                $context["tableauSens"] = twig_split_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "sens", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "sens", [], "array"), "")) : ("")), ",");
                // line 285
                echo "                            ";
                $context["tableauTri"] = [];
                // line 286
                echo "
                            ";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tableauColonnes"]) || array_key_exists("tableauColonnes", $context) ? $context["tableauColonnes"] : (function () {
                    throw new RuntimeError('Variable "tableauColonnes" does not exist.', 287, $this->source);
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
                foreach ($context['_seq'] as $context["_key"] => $context["nomColonne"]) {
                    // line 288
                    echo "                                ";
                    $context["tableauTri"] = twig_array_merge((isset($context["tableauTri"]) || array_key_exists("tableauTri", $context) ? $context["tableauTri"] : (function () {
                        throw new RuntimeError('Variable "tableauTri" does not exist.', 288, $this->source);
                    })()), [$context["nomColonne"] => twig_get_attribute($this->env, $this->source, (isset($context["tableauSens"]) || array_key_exists("tableauSens", $context) ? $context["tableauSens"] : (function () {
                        throw new RuntimeError('Variable "tableauSens" does not exist.', 288, $this->source);
                    })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), [], "array")]);
                    // line 289
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomColonne'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                echo "
                            ";
                // line 292
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                    throw new RuntimeError('Variable "tableau" does not exist.', 292, $this->source);
                })()), "columns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["colonne"]) {
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 292, $this->source);
                    })()), "tableau", []), "view", []), twig_get_attribute($this->env, $this->source, $context["colonne"], "visibility", []))) {
                        // line 293
                        echo "                                ";
                        $context["decorator"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "decorator", []);
                        // line 294
                        echo "                                ";
                        if (((((((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                throw new RuntimeError('Variable "decorator" does not exist.', 294, $this->source);
                                            })()) == "loupe") || (                        // line 295
                                            (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                                throw new RuntimeError('Variable "decorator" does not exist.', 295, $this->source);
                                            })()) == "radio")) || (                        // line 296
                                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                            throw new RuntimeError('Variable "decorator" does not exist.', 296, $this->source);
                                        })()) == "action")) || (                        // line 297
                                    (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                        throw new RuntimeError('Variable "decorator" does not exist.', 297, $this->source);
                                    })()) == "pictogramme")) || (                        // line 298
                                (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                    throw new RuntimeError('Variable "decorator" does not exist.', 298, $this->source);
                                })()) == "separator"))) {
                            // line 299
                            echo "                                    <th scope=\"col\" class=\"pictogramme phpk_decorator_";
                            echo twig_escape_filter($this->env, (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                throw new RuntimeError('Variable "decorator" does not exist.', 299, $this->source);
                            })()), "html", null, true);
                            echo "\"></th>
                                ";
                        } elseif ((                        // line 300
                            (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                throw new RuntimeError('Variable "decorator" does not exist.', 300, $this->source);
                            })()) == "checkbox")) {
                            // line 301
                            echo "                                    <th scope=\"col\" class=\"pictogramme phpk_decorator_";
                            echo twig_escape_filter($this->env, (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                throw new RuntimeError('Variable "decorator" does not exist.', 301, $this->source);
                            })()), "html", null, true);
                            echo "\">
                                        <input type=\"checkbox\" class=\"phpk_check_table\" />
                                    </th>
                                ";
                        } else {
                            // line 305
                            echo "                                    <th scope=\"col\"
                                        ";
                            // line 306
                            if (twig_get_attribute($this->env, $this->source, $context["colonne"], "width", [])) {
                                // line 307
                                echo "                                            style=\"width:";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "width", []), "html", null, true);
                                echo "px\"
                                        ";
                            }
                            // line 309
                            echo "                                        class=\"
                                        phpk_decorator_";
                            // line 310
                            echo twig_escape_filter($this->env, (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                throw new RuntimeError('Variable "decorator" does not exist.', 310, $this->source);
                            })()), "html", null, true);
                            echo "

                                        ";
                            // line 312
                            if (twig_in_filter(((twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "")) : ("")), twig_get_array_keys_filter((isset($context["tableauTri"]) || array_key_exists("tableauTri", $context) ? $context["tableauTri"] : (function () {
                                throw new RuntimeError('Variable "tableauTri" does not exist.', 312, $this->source);
                            })())))) {
                                // line 313
                                echo "                                            tri-";
                                echo(((twig_get_attribute($this->env, $this->source, (isset($context["tableauTri"]) || array_key_exists("tableauTri", $context) ? $context["tableauTri"] : (function () {
                                        throw new RuntimeError('Variable "tableauTri" does not exist.', 313, $this->source);
                                    })()), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array") == "SORT_ASC")) ? ("asc") : ("desc"));
                                echo "
                                        ";
                            } else {
                                // line 314
                                echo "tri";
                            }
                            // line 315
                            echo "
                                        ";
                            // line 316
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "triable", [])) {
                                echo " triable";
                            }
                            echo "\">
                                        ";
                            // line 317
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["colonne"], "metadata", []), "triable", [])) {
                                // line 318
                                echo "                                            ";
                                if (twig_in_filter(((twig_get_attribute($this->env, $this->source, $context["colonne"], "id", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "")) : ("")), twig_get_array_keys_filter((isset($context["tableauTri"]) || array_key_exists("tableauTri", $context) ? $context["tableauTri"] : (function () {
                                    throw new RuntimeError('Variable "tableauTri" does not exist.', 318, $this->source);
                                })())))) {
                                    // line 319
                                    echo "                                                <a class=\"phpk_tri\" href=\"#\"
                                                   data-sens=\"";
                                    // line 320
                                    echo(((twig_get_attribute($this->env, $this->source, (isset($context["tableauTri"]) || array_key_exists("tableauTri", $context) ? $context["tableauTri"] : (function () {
                                            throw new RuntimeError('Variable "tableauTri" does not exist.', 320, $this->source);
                                        })()), twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), [], "array") == "SORT_ASC")) ? ("SORT_DESC") : ("SORT_ASC"));
                                    echo "\"
                                                   data-colonne=\"";
                                    // line 321
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                    echo "\">
                                                    ";
                                    // line 322
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "name", []), "html", null, true);
                                    echo "
                                                </a>
                                            ";
                                } else {
                                    // line 325
                                    echo "                                                <a class=\"phpk_tri\" href=\"#\" data-sens=\"SORT_ASC\"
                                                   data-colonne=\"";
                                    // line 326
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "id", []), "html", null, true);
                                    echo "\">
                                                    ";
                                    // line 327
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "name", []), "html", null, true);
                                    echo "
                                                </a>
                                            ";
                                }
                                // line 330
                                echo "                                        ";
                            } else {
                                // line 331
                                echo "                                            ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colonne"], "name", []), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 333
                            echo "                                    </th>
                                ";
                        }
                        // line 335
                        echo "                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colonne'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                echo "                        </tr>
                    </thead>

                    ";
                // line 340
                echo "                    <tbody>
                        ";
                // line 341
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 341, $this->source);
                    })()), "rows", [])) > 0)) {
                    // line 342
                    echo "
                        ";
                    // line 344
                    echo "                        ";
                    $context["defaultOptions"] = ["backgroundColor" => "default", "checked" => false, "class" => null, "cliquable" => true, "colspan" => 1, "couleur" => "noir", "data" => null, "decorator" => "text", "decoratorOptions" => [], "disabled" => false, "display" => true, "habilitations" => [], "id" => null, "image" => "", "infobulle" => null, "javascript" => "", "name" => null, "path" => ["route" => null, "param" => []], "pictogramme" => null, "replaceBy" => null, "tabIndex" => null, "target" => "_self", "title" => "", "url" => null];
                    // line 370
                    echo "
                        ";
                    // line 372
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 372, $this->source);
                    })()), "rows", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                        // line 373
                        echo "                            ";
                        // line 375
                        echo "                            ";
                        $context["colspanIgnoreNext"] = 0;
                        // line 376
                        echo "
                            <tr ";
                        // line 377
                        if (!(null === twig_get_attribute($this->env, $this->source, $context["ligne"], "id", []))) {
                            echo "id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "id", []), "html", null, true);
                            echo "\" ";
                        }
                        // line 378
                        echo "                                class=\"";
                        echo((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) == 1)) ? ("impair") : ("pair"));
                        echo "
                                ";
                        // line 379
                        if (!(null === twig_get_attribute($this->env, $this->source, $context["ligne"], "class", []))) {
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "class", []), "html", null, true);
                        }
                        echo "\">
                                ";
                        // line 381
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ligne"], "data", []));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                            // line 382
                            echo "
                                    ";
                            // line 384
                            echo "                                    ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 384, $this->source);
                            })()), "tableau", []), "view", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                throw new RuntimeError('Variable "tableau" does not exist.', 384, $this->source);
                            })()), "columns", []), ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) - 1) % twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                    throw new RuntimeError('Variable "tableau" does not exist.', 384, $this->source);
                                })()), "columns", []))), [], "array"), "visibility", []))) {
                                // line 385
                                echo "
                                        ";
                                // line 386
                                if (((isset($context["colspanIgnoreNext"]) || array_key_exists("colspanIgnoreNext", $context) ? $context["colspanIgnoreNext"] : (function () {
                                        throw new RuntimeError('Variable "colspanIgnoreNext" does not exist.', 386, $this->source);
                                    })()) == 0)) {
                                    // line 387
                                    echo "
                                        ";
                                    // line 389
                                    echo "                                        ";
                                    if (twig_get_attribute($this->env, $this->source, $context["cell"], "render", [], "any", true, true)) {
                                        // line 390
                                        echo "                                            ";
                                        // line 391
                                        echo "                                            ";
                                        $context["cell"] = twig_array_merge((isset($context["defaultOptions"]) || array_key_exists("defaultOptions", $context) ? $context["defaultOptions"] : (function () {
                                            throw new RuntimeError('Variable "defaultOptions" does not exist.', 391, $this->source);
                                        })()), twig_get_attribute($this->env, $this->source, $context["cell"], "render", [], "method"));
                                        // line 392
                                        echo "                                        ";
                                    } else {
                                        // line 393
                                        echo "                                            ";
                                        // line 394
                                        echo "                                            ";
                                        $context["cell"] = twig_array_merge((isset($context["defaultOptions"]) || array_key_exists("defaultOptions", $context) ? $context["defaultOptions"] : (function () {
                                            throw new RuntimeError('Variable "defaultOptions" does not exist.', 394, $this->source);
                                        })()), ["data" => $context["cell"]]);
                                        // line 395
                                        echo "                                        ";
                                    }
                                    // line 396
                                    echo "
                                        ";
                                    // line 400
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["cell"], "colspan", []) == 1)) {
                                        // line 401
                                        echo "                                            ";
                                        $context["cell"] = twig_array_merge($context["cell"], ["decorator" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                         // line 403
                                            (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                                throw new RuntimeError('Variable "tableau" does not exist.', 403, $this->source);
                                            })()), "columns", []), ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) - 1) % twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                                throw new RuntimeError('Variable "tableau" does not exist.', 403, $this->source);
                                            })()), "columns", []))), [], "array"), "metadata", []), "decorator", []), "decoratorOptions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                         // line 404
                                            (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                                throw new RuntimeError('Variable "tableau" does not exist.', 404, $this->source);
                                            })()), "columns", []), ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) - 1) % twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                                                throw new RuntimeError('Variable "tableau" does not exist.', 404, $this->source);
                                            })()), "columns", []))), [], "array"), "metadata", []), "decoratorOptions", [])]);
                                        // line 406
                                        echo "                                        ";
                                    }
                                    // line 407
                                    echo "
                                        ";
                                    // line 409
                                    echo "
                                        <td
                                        ";
                                    // line 411
                                    if (!(null === twig_get_attribute($this->env, $this->source, $context["cell"], "id", []))) {
                                        echo "id=\"";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "id", []), "html", null, true);
                                        echo "\" ";
                                    }
                                    // line 412
                                    echo "                                        ";
                                    // line 413
                                    echo "                                        ";
                                    $context["class"] = [0 => ("phpk_decorator_" . twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []))];
                                    // line 414
                                    echo "                                        ";
                                    if (((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "longtext") && twig_get_attribute($this->env, $this->source, $context["cell"], "display", []))) {
                                        // line 415
                                        echo "                                            ";
                                        $context["class"] = twig_array_merge((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                                            throw new RuntimeError('Variable "class" does not exist.', 415, $this->source);
                                        })()), [0 => "infobulle", 1 => "longText"]);
                                        // line 416
                                        echo "                                        ";
                                    } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "separator")) {
                                        // line 417
                                        echo "                                            ";
                                        $context["class"] = twig_array_merge((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                                            throw new RuntimeError('Variable "class" does not exist.', 417, $this->source);
                                        })()), [0 => "separator"]);
                                        // line 418
                                        echo "                                        ";
                                    }
                                    // line 419
                                    echo "
                                        ";
                                    // line 421
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["cell"], "backgroundColor", []) != "default")) {
                                        // line 422
                                        echo "                                            ";
                                        $context["class"] = twig_array_merge((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                                            throw new RuntimeError('Variable "class" does not exist.', 422, $this->source);
                                        })()), [0 => ("bg-" . twig_get_attribute($this->env, $this->source, $context["cell"], "backgroundColor", []))]);
                                        // line 423
                                        echo "                                        ";
                                    }
                                    // line 424
                                    echo "                                        ";
                                    if (!(null === twig_get_attribute($this->env, $this->source, $context["cell"], "class", []))) {
                                        // line 425
                                        echo "                                            ";
                                        $context["class"] = twig_array_merge((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                                            throw new RuntimeError('Variable "class" does not exist.', 425, $this->source);
                                        })()), [0 => twig_get_attribute($this->env, $this->source, $context["cell"], "class", [])]);
                                        // line 426
                                        echo "                                        ";
                                    }
                                    // line 427
                                    echo "
                                        class=\"";
                                    // line 428
                                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                                        throw new RuntimeError('Variable "class" does not exist.', 428, $this->source);
                                    })()), " "), "html", null, true);
                                    echo "\"

                                        ";
                                    // line 430
                                    if ((twig_get_attribute($this->env, $this->source, $context["cell"], "colspan", []) > 1)) {
                                        // line 431
                                        echo "                                            colspan=\"";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "colspan", []), "html", null, true);
                                        echo "\"
                                            ";
                                        // line 432
                                        $context["colspanIgnoreNext"] = (twig_get_attribute($this->env, $this->source, $context["cell"], "colspan", []) - 1);
                                        // line 433
                                        echo "                                        ";
                                    }
                                    // line 434
                                    echo "
                                        ";
                                    // line 436
                                    echo "                                        ";
                                    if (((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "longtext") && twig_get_attribute($this->env, $this->source, $context["cell"], "display", []))) {
                                        // line 437
                                        echo "                                            ";
                                        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["cell"], "data", []))) {
                                            // line 438
                                            echo "                                                title=\"<ul>
                                                ";
                                            // line 439
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cell"], "data", []));
                                            foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
                                                // line 440
                                                echo "                                                    <li style='list-style-type:none; margin-left: 0px;'>";
                                                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                                                echo "</li>
                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 442
                                            echo "                                                </ul>\"
                                            ";
                                            // line 444
                                            echo "                                            ";
                                        } else {
                                            // line 445
                                            echo "                                                title=\"";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                            echo "\"
                                            ";
                                        }
                                        // line 447
                                        echo "                                        ";
                                    }
                                    // line 448
                                    echo "                                        >
                                            ";
                                    // line 449
                                    if (twig_get_attribute($this->env, $this->source, $context["cell"], "display", [])) {
                                        // line 450
                                        echo "                                            <div
                                                ";
                                        // line 452
                                        echo "                                                ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "boolean")) {
                                            // line 453
                                            echo "                                                    data-value=\"";
                                            echo((twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])) ? ("true") : ("false"));
                                            echo "\">
                                                    ";
                                            // line 454
                                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "decoratorOptions", [], "any", false, true), "booleans", [], "any", true, true)) {
                                                // line 455
                                                echo "                                                        ";
                                                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "decoratorOptions", []), "booleans", []), true, [], "array")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                                 // line 456
                                                    $context["cell"], "decoratorOptions", []), "booleans", []), false, [], "array"))), "html", null, true);
                                                echo "
                                                    ";
                                            } else {
                                                // line 458
                                                echo "                                                        ";
                                                echo((twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])) ? ("O") : ("N"));
                                                echo "
                                                    ";
                                            }
                                            // line 460
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "checkbox")) {
                                            // line 461
                                            echo "                                                    ><input type=\"checkbox\"
                                                           name=\"phpk_table[";
                                            // line 462
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 462, $this->source);
                                            })()), "html", null, true);
                                            echo "][checkbox][";
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cell"], "name", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["cell"], "name", []), "")) : ("")), "html", null, true);
                                            echo "]\"
                                                           value=\"";
                                            // line 463
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                            echo "\"
                                                    ";
                                            // line 464
                                            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                             // line 465
                                                    (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                                        throw new RuntimeError('Variable "args" does not exist.', 465, $this->source);
                                                    })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "checkbox"], "method")) || twig_get_attribute($this->env, $this->source, $context["cell"], "checked", []))) {
                                                // line 466
                                                echo "                                                        checked=\"checked\"
                                                    ";
                                            }
                                            // line 468
                                            echo "                                                    />
                                                    ";
                                            // line 469
                                            $context["checkboxDisplayed"] = twig_array_merge((isset($context["checkboxDisplayed"]) || array_key_exists("checkboxDisplayed", $context) ? $context["checkboxDisplayed"] : (function () {
                                                throw new RuntimeError('Variable "checkboxDisplayed" does not exist.', 469, $this->source);
                                            })()), [0 => twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])]);
                                            // line 470
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "radio")) {
                                            // line 471
                                            echo "                                                    ><input type=\"radio\"
                                                           name=\"phpk_table[";
                                            // line 472
                                            echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                                                throw new RuntimeError('Variable "tableId" does not exist.', 472, $this->source);
                                            })()), "html", null, true);
                                            echo "][radio][";
                                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cell"], "name", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["cell"], "name", []), "")) : ("")), "html", null, true);
                                            echo "]\"
                                                           value=\"";
                                            // line 473
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                            echo "\"
                                                    ";
                                            // line 474
                                            if (twig_get_attribute($this->env, $this->source, $context["cell"], "checked", [])) {
                                                // line 475
                                                echo "                                                        checked=\"checked\"
                                                    ";
                                            }
                                            // line 477
                                            echo "                                                    />
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 478
                                                $context["cell"], "decorator", []) == "link")) {
                                            // line 479
                                            echo "                                                    ";
                                            $context["__internal_c32baef884a6ce7751781ebe60096a32e9a8b8469f56c8d1aa39a44ae7681753"] = $this->loadTemplate("PHPKTemplateBundle:macro:liens.html.twig", "PHPKTemplateBundle:macro:tableau.html.twig", 479);
                                            // line 480
                                            echo "                                                    >";
                                            echo $context["__internal_c32baef884a6ce7751781ebe60096a32e9a8b8469f56c8d1aa39a44ae7681753"]->macro_a($context["cell"]);
                                            echo "
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 481
                                                $context["cell"], "decorator", []) == "modaleajax")) {
                                            // line 482
                                            echo "                                                    ";
                                            echo(((null === twig_get_attribute($this->env, $this->source, $context["cell"], "pictogramme", []))) ? ("") : ("style=\"height:inherit\""));
                                            echo ">

                                                    ";
                                            // line 485
                                            echo "                                                    ";
                                            if (twig_get_attribute($this->env, $this->source, $context["cell"], "cliquable", [])) {
                                                // line 486
                                                echo "                                                        <a href=\"#\"
                                                           data-url=\"";
                                                // line 487
                                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "path", []), "route", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "path", []), "param", [])), "html", null, true);
                                                echo "\"
                                                           data-title=\"";
                                                // line 488
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "title", []), "html", null, true);
                                                echo "\"
                                                           ";
                                                // line 489
                                                if ((null === twig_get_attribute($this->env, $this->source, $context["cell"], "pictogramme", []))) {
                                                    // line 490
                                                    echo "                                                               class=\"lien doc-tout-format modale_ajax\">";
                                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                                    echo "</a>
                                                           ";
                                                } else {
                                                    // line 492
                                                    echo "                                                               class=\"icone-pictogramme icone-pictogramme-";
                                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "pictogramme", []), "html", null, true);
                                                    echo " modale_ajax\">";
                                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                                    echo "</a>
                                                           ";
                                                }
                                                // line 494
                                                echo "                                                    ";
                                            } else {
                                                // line 495
                                                echo "                                                        ";
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                                echo "
                                                    ";
                                            }
                                            // line 497
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "action")) {
                                            // line 498
                                            echo "                                                    >
                                                    ";
                                            // line 499
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cell"], "actions", []));
                                            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                                                // line 500
                                                echo "                                                        ";
                                                // line 501
                                                echo "                                                        ";
                                                $context["authorized"] = false;
                                                // line 502
                                                echo "                                                        ";
                                                if ((twig_get_attribute($this->env, $this->source, $context["action"], "habilitations", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, $context["action"], "habilitations", [])))) {
                                                    // line 503
                                                    echo "                                                            ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "habilitations", []));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                                                        // line 504
                                                        echo "                                                                ";
                                                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                                                throw new RuntimeError('Variable "app" does not exist.', 504, $this->source);
                                                            })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                                                            // line 505
                                                            echo "                                                                    ";
                                                            $context["authorized"] = true;
                                                            // line 506
                                                            echo "                                                                ";
                                                        }
                                                        // line 507
                                                        echo "                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 508
                                                    echo "                                                        ";
                                                } else {
                                                    // line 509
                                                    echo "                                                            ";
                                                    $context["authorized"] = true;
                                                    // line 510
                                                    echo "                                                        ";
                                                }
                                                // line 511
                                                echo "
                                                        ";
                                                // line 512
                                                if ((isset($context["authorized"]) || array_key_exists("authorized", $context) ? $context["authorized"] : (function () {
                                                    throw new RuntimeError('Variable "authorized" does not exist.', 512, $this->source);
                                                })())) {
                                                    // line 513
                                                    echo "                                                            <a href=\"";
                                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["action"], "route", []), twig_get_attribute($this->env, $this->source, $context["action"], "param", [])), "html", null, true);
                                                    echo "\"
                                                               class=\"
                                                            ";
                                                    // line 515
                                                    if (!(null === twig_get_attribute($this->env, $this->source, $context["action"], "pictogramme", []))) {
                                                        // line 516
                                                        echo "                                                                ";
                                                        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["action"], "pictogramme", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "fa-") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                                                            // line 517
                                                            echo "                                                                    fa fa-165x ";
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "pictogramme", []), "html", null, true);
                                                            echo "
                                                                ";
                                                        } else {
                                                            // line 519
                                                            echo "                                                                    icone-pictogramme icone-pictogramme-";
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "pictogramme", []), "html", null, true);
                                                            echo "
                                                                ";
                                                        }
                                                        // line 521
                                                        echo "                                                            ";
                                                    }
                                                    // line 522
                                                    echo "                                                            ";
                                                    if (!(null === twig_get_attribute($this->env, $this->source, $context["action"], "infobulle", []))) {
                                                        // line 523
                                                        echo "                                                                infobulle\" title=\"";
                                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "infobulle", []), "html", null, true);
                                                        echo "
                                                            ";
                                                    }
                                                    // line 525
                                                    echo "                                                            \"
                                                            >
                                                            </a>
                                                        ";
                                                }
                                                // line 529
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 530
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "color")) {
                                            // line 531
                                            echo "                                                    ><div
                                                    ";
                                            // line 532
                                            if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])) && !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "infobulle", [])))) {
                                                // line 533
                                                echo "                                                        class=\"phpk_champ_color infobulle\"
                                                        style=\"background-color:";
                                                // line 534
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "color", []), "html", null, true);
                                                echo "\"
                                                        title=\"";
                                                // line 535
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "infobulle", []), "html", null, true);
                                                echo "\"
                                                    ";
                                            } else {
                                                // line 537
                                                echo "                                                        class=\"phpk_champ_color\"
                                                        style=\"background-color:";
                                                // line 538
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                                echo "\"
                                                        title=\"";
                                                // line 539
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                                echo "\"
                                                    ";
                                            }
                                            // line 541
                                            echo "                                                 ></div>
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 542
                                                $context["cell"], "decorator", []) == "shortdate")) {
                                            // line 543
                                            echo "                                                    >
                                                    ";
                                            // line 544
                                            if ((null === twig_get_attribute($this->env, $this->source, $context["cell"], "data", []))) {
                                                // line 545
                                                echo "                                                        -
                                                    ";
                                            } else {
                                                // line 547
                                                echo "                                                        ";
                                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "d/m/Y"), "html", null, true);
                                                echo "
                                                    ";
                                            }
                                            // line 549
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "longdate")) {
                                            // line 550
                                            echo "                                                    >
                                                    ";
                                            // line 551
                                            if ((null === twig_get_attribute($this->env, $this->source, $context["cell"], "data", []))) {
                                                // line 552
                                                echo "                                                        -
                                                    ";
                                            } else {
                                                // line 554
                                                echo "                                                        ";
                                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "d/m/Y H:i:s"), "html", null, true);
                                                echo "
                                                    ";
                                            }
                                            // line 556
                                            echo "                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["cell"], "decorator", []) == "integer")) {
                                            // line 557
                                            echo "                                                    data-value=\"";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                            echo "\">
                                                    ";
                                            // line 558
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])), "html", null, true);
                                            echo "
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 559
                                                $context["cell"], "decorator", []) == "float")) {
                                            // line 560
                                            echo "                                                    data-value=\"";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), "html", null, true);
                                            echo "\">
                                                    ";
                                            // line 561
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "data", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "decoratorOptions", []), "decimal", []), ",", " "), "html", null, true);
                                            echo "
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 562
                                                $context["cell"], "decorator", []) == "separator")) {
                                            // line 563
                                            echo "                                                    >
                                                ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 564
                                                $context["cell"], "decorator", []) == "pictogramme")) {
                                            // line 565
                                            echo "                                                    >
                                                    ";
                                            // line 566
                                            $context["pictogramme"] = ((!(null === twig_get_attribute($this->env, $this->source, $context["cell"], "pictogramme", []))) ? (twig_get_attribute($this->env, $this->source, $context["cell"], "pictogramme", [])) : (twig_get_attribute($this->env, $this->source, $context["cell"], "data", [])));
                                            // line 567
                                            echo "
                                                    ";
                                            // line 568
                                            if (!(null === (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                    throw new RuntimeError('Variable "pictogramme" does not exist.', 568, $this->source);
                                                })()))) {
                                                // line 569
                                                if ((twig_slice($this->env, (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                        throw new RuntimeError('Variable "pictogramme" does not exist.', 569, $this->source);
                                                    })()), 0, 3) == "fa-")) {
                                                    // line 570
                                                    if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte")) {
                                                        // line 571
                                                        if (twig_get_attribute($this->env, $this->source, $context["cell"], "infobulle", [], "any", true, true)) {
                                                            // line 572
                                                            echo "                                                                    <i class=\"fa ";
                                                            echo twig_escape_filter($this->env, (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                                throw new RuntimeError('Variable "pictogramme" does not exist.', 572, $this->source);
                                                            })()), "html", null, true);
                                                            echo " ";
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "couleur", []), "html", null, true);
                                                            echo " infobulle\" title=\"";
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "infobulle", []), "html", null, true);
                                                            echo "\"></i>
                                                                ";
                                                        } else {
                                                            // line 574
                                                            echo "                                                                    <i class=\"fa ";
                                                            echo twig_escape_filter($this->env, (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                                throw new RuntimeError('Variable "pictogramme" does not exist.', 574, $this->source);
                                                            })()), "html", null, true);
                                                            echo " ";
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "couleur", []), "html", null, true);
                                                            echo "\"></i>
                                                                ";
                                                        }
                                                        // line 576
                                                        echo "                                                            ";
                                                    }
                                                    // line 577
                                                    echo "                                                        ";
                                                } else {
                                                    // line 578
                                                    echo "
                                                            ";
                                                    // line 579
                                                    if (!(null === twig_get_attribute($this->env, $this->source, $context["cell"], "infobulle", []))) {
                                                        // line 580
                                                        echo "                                                                <i class=\"icone-pictogramme infobulle icone-pictogramme-";
                                                        echo twig_escape_filter($this->env, (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                            throw new RuntimeError('Variable "pictogramme" does not exist.', 580, $this->source);
                                                        })()), "html", null, true);
                                                        echo "\" title=\"";
                                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "infobulle", []), "html", null, true);
                                                        echo "\">&nbsp;</i>
                                                            ";
                                                    } else {
                                                        // line 582
                                                        echo "                                                                <i class=\"icone-pictogramme icone-pictogramme-";
                                                        echo twig_escape_filter($this->env, (isset($context["pictogramme"]) || array_key_exists("pictogramme", $context) ? $context["pictogramme"] : (function () {
                                                            throw new RuntimeError('Variable "pictogramme" does not exist.', 582, $this->source);
                                                        })()), "html", null, true);
                                                        echo "\">&nbsp;</i>
                                                            ";
                                                    }
                                                    // line 584
                                                    echo "                                                        ";
                                                }
                                                // line 585
                                                echo "                                                    ";
                                            }
                                            // line 586
                                            echo "                                                ";
                                        } else {
                                            // line 587
                                            echo "                                                    >
                                                    ";
                                            // line 589
                                            echo "                                                    ";
                                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["cell"], "data", []))) {
                                                // line 590
                                                echo "                                                        <ul>
                                                        ";
                                                // line 591
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cell"], "data", []));
                                                foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
                                                    // line 592
                                                    echo "                                                            <li style=\"list-style-type:none; margin-left: 0px;\">";
                                                    echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                                                    echo "</li>
                                                        ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 594
                                                echo "                                                        </ul>
                                                    ";
                                                // line 596
                                                echo "                                                    ";
                                            } else {
                                                // line 597
                                                echo "                                                        ";
                                                echo twig_get_attribute($this->env, $this->source, $context["cell"], "data", []);
                                                echo "
                                                    ";
                                            }
                                            // line 599
                                            echo "                                                ";
                                        }
                                        // line 600
                                        echo "                                            </div>
                                            ";
                                    } elseif (!(null === twig_get_attribute($this->env, $this->source,                                     // line 601
                                            $context["cell"], "replaceBy", []))) {
                                        // line 602
                                        echo "                                                ";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "replaceBy", []), "html", null, true);
                                        echo "
                                            ";
                                    }
                                    // line 604
                                    echo "                                        </td>
                                        ";
                                } else {
                                    // line 606
                                    echo "                                            ";
                                    $context["colspanIgnoreNext"] = ((isset($context["colspanIgnoreNext"]) || array_key_exists("colspanIgnoreNext", $context) ? $context["colspanIgnoreNext"] : (function () {
                                            throw new RuntimeError('Variable "colspanIgnoreNext" does not exist.', 606, $this->source);
                                        })()) - 1);
                                    // line 607
                                    echo "                                        ";
                                }
                                // line 608
                                echo "                                    ";
                            }
                            // line 609
                            echo "                                ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 610
                        echo "
                                ";
                        // line 612
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 612, $this->source);
                        })()), "metadata", []), "isDetaillable", [])) {
                            // line 613
                            echo "                                    <td class=\"pictogramme phpk_decorator_loupe\">
                                        ";
                            // line 614
                            if ((twig_get_attribute($this->env, $this->source, $context["ligne"], "path", [], "any", true, true) && !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ligne"], "path", [])))) {
                                // line 615
                                echo "                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "path", []), "route", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "path", []), "param", [])), "html", null, true);
                                echo "\"
                                           class=\"vue-detail\"
                                           alt=\"Détail ligne ";
                                // line 617
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                                echo "\"
                                           title=\"Détail ligne ";
                                // line 618
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                                echo "\">
                                        </a>
                                        ";
                            }
                            // line 621
                            echo "                                    </td>
                                ";
                        }
                        // line 623
                        echo "                            </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 625
                    echo "                        ";
                } else {
                    // line 626
                    echo "                            <tr>
                                <td colspan=\"";
                    // line 627
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                        throw new RuntimeError('Variable "tableau" does not exist.', 627, $this->source);
                    })()), "columns", [])), "html", null, true);
                    echo "\" class=\"impair center\">
                                    Aucun résultat
                                </td>
                            </tr>
                        ";
                }
                // line 632
                echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"tab-footer\"> </div>

        ";
                // line 639
                echo "        <div class=\"tab-interpage\">
            <div class=\"resultat\">&nbsp;</div>
            ";
                // line 641
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 641, $this->source);
                })()), "pagination", []), [0 => "footer", 1 => "both"])) {
                    // line 642
                    echo "                ";
                    echo $context["__internal_084ade2a38830bcdee2dc4dba6e22b775a0a2a7a853952b853e0730bf6874728"]->macro_pagination(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 643
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 643, $this->source);
                        })()), "metadata", []), "paginator", []), "page", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 644
                        (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 644, $this->source);
                        })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "pageSize"], "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 645
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 645, $this->source);
                        })()), "metadata", []), "nbResults", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 646
                        (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                            throw new RuntimeError('Variable "tableau" does not exist.', 646, $this->source);
                        })()), "metadata", []), "nbResultsFiltered", []));
                    echo "
            ";
                }
                // line 648
                echo "        </div>
    </div>
    <input type=\"hidden\" name=\"phpk_table[";
                // line 650
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 650, $this->source);
                })()), "html", null, true);
                echo "][type]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () {
                    throw new RuntimeError('Variable "tableau" does not exist.', 650, $this->source);
                })()), "metadata", []), "tableName", []), "html", null, true);
                echo "\" />
    <input type=\"hidden\"
           name=\"phpk_table[";
                // line 652
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 652, $this->source);
                })()), "html", null, true);
                echo "][tri][colonne]\"
           id=\"phpk_table[";
                // line 653
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 653, $this->source);
                })()), "html", null, true);
                echo "][tri][colonne]\"
           value=\"";
                // line 654
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "colonne", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "colonne", [], "array"), "")) : ("")), "html", null, true);
                echo "\" />
    <input type=\"hidden\"
           name=\"phpk_table[";
                // line 656
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 656, $this->source);
                })()), "html", null, true);
                echo "][tri][sens]\"
           id=\"phpk_table[";
                // line 657
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 657, $this->source);
                })()), "html", null, true);
                echo "][tri][sens]\"
           value=\"";
                // line 658
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "sens", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "tableau", [], "any", false, true), "getDataHandler", [], "any", false, true), "getFromRequest", [0 => "tri"], "method", false, true), "sens", [], "array"), "")) : ("")), "html", null, true);
                echo "\" />
    <input type=\"hidden\"
           name=\"phpk_table[";
                // line 660
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 660, $this->source);
                })()), "html", null, true);
                echo "][page]\"
           id=\"phpk_table[";
                // line 661
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 661, $this->source);
                })()), "html", null, true);
                echo "][page]\"
           value=\"";
                // line 662
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 662, $this->source);
                })()), "tableau", []), "getDataHandler", []), "getPage", [], "method"), "html", null, true);
                echo "\" />
    <input type=\"hidden\"
           name=\"phpk_table[";
                // line 664
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 664, $this->source);
                })()), "html", null, true);
                echo "][filtered]\"
           id=\"phpk_table[";
                // line 665
                echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                    throw new RuntimeError('Variable "tableId" does not exist.', 665, $this->source);
                })()), "html", null, true);
                echo "][filtered]\"
           value=\"";
                // line 666
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 666, $this->source);
                })()), "tableau", []), "getDataHandler", []), "getFiltered", [], "method"), "html", null, true);
                echo "\" />

    ";
                // line 668
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 668, $this->source);
                })()), "tableau", []), "getDataHandler", []), "getFromRequest", [0 => "checkbox"], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    if (!twig_in_filter($context["value"], (isset($context["checkboxDisplayed"]) || array_key_exists("checkboxDisplayed", $context) ? $context["checkboxDisplayed"] : (function () {
                        throw new RuntimeError('Variable "checkboxDisplayed" does not exist.', 668, $this->source);
                    })()))) {
                        // line 669
                        echo "        <input type=\"hidden\" name=\"phpk_table[";
                        echo twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () {
                            throw new RuntimeError('Variable "tableId" does not exist.', 669, $this->source);
                        })()), "html", null, true);
                        echo "][checkbox][]\" value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" />
    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 671
                echo "
    ";
                // line 672
                if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 672, $this->source);
                })()), "formTag", [])) {
                    // line 673
                    echo "        </form>
    ";
                }
                // line 675
                echo "
    ";
            }

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 679
    public function macro_pagination($__page__ = null, $__pageSize__ = null, $__nbResults__ = null, $__nbResultsFiltered__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "pageSize" => $__pageSize__,
            "nbResults" => $__nbResults__,
            "nbResultsFiltered" => $__nbResultsFiltered__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pagination"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pagination"));

            // line 680
            echo "
    ";
            // line 682
            echo "    ";
            if (((isset($context["nbResultsFiltered"]) || array_key_exists("nbResultsFiltered", $context) ? $context["nbResultsFiltered"] : (function () {
                    throw new RuntimeError('Variable "nbResultsFiltered" does not exist.', 682, $this->source);
                })()) > (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () {
                    throw new RuntimeError('Variable "pageSize" does not exist.', 682, $this->source);
                })()))) {
                // line 683
                echo "
        ";
                // line 684
                $context["precedente"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                        throw new RuntimeError('Variable "page" does not exist.', 684, $this->source);
                    })()) - 1);
                // line 685
                echo "        ";
                $context["suivante"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                        throw new RuntimeError('Variable "page" does not exist.', 685, $this->source);
                    })()) + 1);
                // line 686
                echo "        ";
                $context["derniere"] = twig_round(((isset($context["nbResultsFiltered"]) || array_key_exists("nbResultsFiltered", $context) ? $context["nbResultsFiltered"] : (function () {
                        throw new RuntimeError('Variable "nbResultsFiltered" does not exist.', 686, $this->source);
                    })()) / (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () {
                        throw new RuntimeError('Variable "pageSize" does not exist.', 686, $this->source);
                    })())), 0, "ceil");
                // line 687
                echo "
        <div id=\"tabinterpagetableau\" class=\"tabinterfiche\" role=\"navigation\">
            <ol class=\"navigation-interpage\" aria-labelledby=\"pagenamelabeltableau\">
                ";
                // line 691
                echo "                ";
                if (((isset($context["precedente"]) || array_key_exists("precedente", $context) ? $context["precedente"] : (function () {
                        throw new RuntimeError('Variable "precedente" does not exist.', 691, $this->source);
                    })()) <= 0)) {
                    // line 692
                    echo "                    <li><a class=\"precedentinactif\"></a></li>
                ";
                } else {
                    // line 694
                    echo "                    <li><a href=\"#\" class=\"phpk_page precedent\" data-page=\"";
                    echo twig_escape_filter($this->env, (isset($context["precedente"]) || array_key_exists("precedente", $context) ? $context["precedente"] : (function () {
                        throw new RuntimeError('Variable "precedente" does not exist.', 694, $this->source);
                    })()), "html", null, true);
                    echo "\"></a></li>
                ";
                }
                // line 696
                echo "
                ";
                // line 698
                echo "                <li id=\"pagenamelabeltableau\" class=\"pagename\">Page</li>

                ";
                // line 701
                echo "                ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                        throw new RuntimeError('Variable "page" does not exist.', 701, $this->source);
                    })()) == 1)) {
                    // line 702
                    echo "                    <li><a class=\"page courant premier\" tabindex=\"0\">1</a></li>
                ";
                } else {
                    // line 704
                    echo "                    <li><a href=\"#\" class=\"phpk_page page premier\" data-page=\"1\">1</a></li>
                ";
                }
                // line 706
                echo "
                ";
                // line 708
                echo "                ";
                if (((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 708, $this->source);
                    })()) > 4)) {
                    // line 709
                    echo "                    ";
                    if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 709, $this->source);
                        })()) < 3)) {
                        // line 710
                        echo "                        <li><a href=\"#\" class=\"phpk_page page";
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 710, $this->source);
                            })()) == 2)) {
                            echo " courant";
                        }
                        echo "\" data-page=\"2\">2</a></li>
                        <li><a href=\"#\" class=\"phpk_page page";
                        // line 711
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 711, $this->source);
                            })()) == 3)) {
                            echo " courant";
                        }
                        echo "\" data-page=\"3\">3</a></li>
                        <li><a href=\"#\" class=\"phpk_page page";
                        // line 712
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 712, $this->source);
                            })()) == 4)) {
                            echo " courant";
                        }
                        echo "\" data-page=\"4\">4</a></li>
                        <li><span class=\"dbl\">&hellip;</span></li>
                    ";
                    } elseif ((                    // line 714
                        (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 714, $this->source);
                        })()) > ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 714, $this->source);
                            })()) - 3))) {
                        // line 715
                        echo "                        <li><span class=\"dbl\">&hellip;</span></li>
                        <li><a href=\"#\" class=\"phpk_page page";
                        // line 716
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 716, $this->source);
                            })()) == ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                    throw new RuntimeError('Variable "derniere" does not exist.', 716, $this->source);
                                })()) - 3))) {
                            echo " courant";
                        }
                        echo "\" data-page=\"";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 716, $this->source);
                            })()) - 3), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 716, $this->source);
                            })()) - 3), "html", null, true);
                        echo "</a></li>
                        <li><a href=\"#\" class=\"phpk_page page";
                        // line 717
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 717, $this->source);
                            })()) == ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                    throw new RuntimeError('Variable "derniere" does not exist.', 717, $this->source);
                                })()) - 2))) {
                            echo " courant";
                        }
                        echo "\" data-page=\"";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 717, $this->source);
                            })()) - 2), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 717, $this->source);
                            })()) - 2), "html", null, true);
                        echo "</a></li>
                        <li><a href=\"#\" class=\"phpk_page page";
                        // line 718
                        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 718, $this->source);
                            })()) == ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                    throw new RuntimeError('Variable "derniere" does not exist.', 718, $this->source);
                                })()) - 1))) {
                            echo " courant";
                        }
                        echo "\" data-page=\"";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 718, $this->source);
                            })()) - 1), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                                throw new RuntimeError('Variable "derniere" does not exist.', 718, $this->source);
                            })()) - 1), "html", null, true);
                        echo "</a></li>
                    ";
                    } else {
                        // line 720
                        echo "                        <li><span class=\"dbl\">&hellip;</span></li>
                        <li><a href=\"#\" class=\"phpk_page page\" data-page=\"";
                        // line 721
                        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 721, $this->source);
                            })()) - 1), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 721, $this->source);
                            })()) - 1), "html", null, true);
                        echo "</a></li>
                        <li><a href=\"#\" class=\"phpk_page page courant\" data-page=\"";
                        // line 722
                        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 722, $this->source);
                        })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 722, $this->source);
                        })()), "html", null, true);
                        echo "</a></li>
                        <li><a href=\"#\" class=\"phpk_page page\" data-page=\"";
                        // line 723
                        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 723, $this->source);
                            })()) + 1), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                                throw new RuntimeError('Variable "page" does not exist.', 723, $this->source);
                            })()) + 1), "html", null, true);
                        echo "</a></li>
                        <li><span class=\"dbl\">&hellip;</span></li>
                    ";
                    }
                    // line 726
                    echo "                ";
                } elseif (((isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 726, $this->source);
                    })()) == 3)) {
                    // line 727
                    echo "                    <li><a href=\"#\" class=\"phpk_page page";
                    if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 727, $this->source);
                        })()) == 2)) {
                        echo " courant";
                    }
                    echo "\" data-page=\"2\">2</a></li>
                ";
                } elseif ((                // line 728
                    (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 728, $this->source);
                    })()) == 4)) {
                    // line 729
                    echo "                    <li><a href=\"#\" class=\"phpk_page page";
                    if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 729, $this->source);
                        })()) == 2)) {
                        echo " courant";
                    }
                    echo "\" data-page=\"2\">2</a></li>
                    <li><a href=\"#\" class=\"phpk_page page";
                    // line 730
                    if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                            throw new RuntimeError('Variable "page" does not exist.', 730, $this->source);
                        })()) == 3)) {
                        echo " courant";
                    }
                    echo "\" data-page=\"3\">3</a></li>
                ";
                }
                // line 732
                echo "
                ";
                // line 734
                echo "                ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () {
                        throw new RuntimeError('Variable "page" does not exist.', 734, $this->source);
                    })()) == (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 734, $this->source);
                    })()))) {
                    // line 735
                    echo "                    <li><a class=\"page courant dernier\" tabindex=\"0\">";
                    echo twig_escape_filter($this->env, (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 735, $this->source);
                    })()), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 737
                    echo "                    <li><a href=\"#\" class=\"phpk_page page dernier\" data-page=\"";
                    echo twig_escape_filter($this->env, (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 737, $this->source);
                    })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 737, $this->source);
                    })()), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 739
                echo "
                ";
                // line 741
                echo "                ";
                if (((isset($context["suivante"]) || array_key_exists("suivante", $context) ? $context["suivante"] : (function () {
                        throw new RuntimeError('Variable "suivante" does not exist.', 741, $this->source);
                    })()) > (isset($context["derniere"]) || array_key_exists("derniere", $context) ? $context["derniere"] : (function () {
                        throw new RuntimeError('Variable "derniere" does not exist.', 741, $this->source);
                    })()))) {
                    // line 742
                    echo "                    <li><a class=\"suivantinactif\"></a></li>
                ";
                } else {
                    // line 744
                    echo "                    <li><a href=\"#\" class=\"phpk_page suivant\" data-page=\"";
                    echo twig_escape_filter($this->env, (isset($context["suivante"]) || array_key_exists("suivante", $context) ? $context["suivante"] : (function () {
                        throw new RuntimeError('Variable "suivante" does not exist.', 744, $this->source);
                    })()), "html", null, true);
                    echo "\"></a></li>
                ";
                }
                // line 746
                echo "            </ol>
        </div>

    ";
            }

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:macro:tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(1948 => 746, 1942 => 744, 1938 => 742, 1935 => 741, 1932 => 739, 1924 => 737, 1918 => 735, 1915 => 734, 1912 => 732, 1905 => 730, 1898 => 729, 1896 => 728, 1889 => 727, 1886 => 726, 1878 => 723, 1872 => 722, 1866 => 721, 1863 => 720, 1852 => 718, 1842 => 717, 1832 => 716, 1829 => 715, 1827 => 714, 1820 => 712, 1814 => 711, 1807 => 710, 1804 => 709, 1801 => 708, 1798 => 706, 1794 => 704, 1790 => 702, 1787 => 701, 1783 => 698, 1780 => 696, 1774 => 694, 1770 => 692, 1767 => 691, 1762 => 687, 1759 => 686, 1756 => 685, 1754 => 684, 1751 => 683, 1748 => 682, 1745 => 680, 1724 => 679, 1707 => 675, 1703 => 673, 1701 => 672, 1698 => 671, 1686 => 669, 1681 => 668, 1676 => 666, 1672 => 665, 1668 => 664, 1663 => 662, 1659 => 661, 1655 => 660, 1650 => 658, 1646 => 657, 1642 => 656, 1637 => 654, 1633 => 653, 1629 => 652, 1622 => 650, 1618 => 648, 1613 => 646, 1612 => 645, 1611 => 644, 1610 => 643, 1608 => 642, 1606 => 641, 1602 => 639, 1594 => 632, 1586 => 627, 1583 => 626, 1580 => 625, 1565 => 623, 1561 => 621, 1555 => 618, 1551 => 617, 1545 => 615, 1543 => 614, 1540 => 613, 1537 => 612, 1534 => 610, 1520 => 609, 1517 => 608, 1514 => 607, 1511 => 606, 1507 => 604, 1501 => 602, 1499 => 601, 1496 => 600, 1493 => 599, 1487 => 597, 1484 => 596, 1481 => 594, 1472 => 592, 1468 => 591, 1465 => 590, 1462 => 589, 1459 => 587, 1456 => 586, 1453 => 585, 1450 => 584, 1444 => 582, 1436 => 580, 1434 => 579, 1431 => 578, 1428 => 577, 1425 => 576, 1417 => 574, 1407 => 572, 1405 => 571, 1403 => 570, 1401 => 569, 1399 => 568, 1396 => 567, 1394 => 566, 1391 => 565, 1389 => 564, 1386 => 563, 1384 => 562, 1380 => 561, 1375 => 560, 1373 => 559, 1369 => 558, 1364 => 557, 1361 => 556, 1355 => 554, 1351 => 552, 1349 => 551, 1346 => 550, 1343 => 549, 1337 => 547, 1333 => 545, 1331 => 544, 1328 => 543, 1326 => 542, 1323 => 541, 1318 => 539, 1314 => 538, 1311 => 537, 1306 => 535, 1302 => 534, 1299 => 533, 1297 => 532, 1294 => 531, 1291 => 530, 1285 => 529, 1279 => 525, 1273 => 523, 1270 => 522, 1267 => 521, 1261 => 519, 1255 => 517, 1252 => 516, 1250 => 515, 1244 => 513, 1242 => 512, 1239 => 511, 1236 => 510, 1233 => 509, 1230 => 508, 1224 => 507, 1221 => 506, 1218 => 505, 1215 => 504, 1210 => 503, 1207 => 502, 1204 => 501, 1202 => 500, 1198 => 499, 1195 => 498, 1192 => 497, 1186 => 495, 1183 => 494, 1175 => 492, 1169 => 490, 1167 => 489, 1163 => 488, 1159 => 487, 1156 => 486, 1153 => 485, 1147 => 482, 1145 => 481, 1140 => 480, 1137 => 479, 1135 => 478, 1132 => 477, 1128 => 475, 1126 => 474, 1122 => 473, 1116 => 472, 1113 => 471, 1110 => 470, 1108 => 469, 1105 => 468, 1101 => 466, 1099 => 465, 1098 => 464, 1094 => 463, 1088 => 462, 1085 => 461, 1082 => 460, 1076 => 458, 1071 => 456, 1069 => 455, 1067 => 454, 1062 => 453, 1059 => 452, 1056 => 450, 1054 => 449, 1051 => 448, 1048 => 447, 1042 => 445, 1039 => 444, 1036 => 442, 1027 => 440, 1023 => 439, 1020 => 438, 1017 => 437, 1014 => 436, 1011 => 434, 1008 => 433, 1006 => 432, 1001 => 431, 999 => 430, 994 => 428, 991 => 427, 988 => 426, 985 => 425, 982 => 424, 979 => 423, 976 => 422, 973 => 421, 970 => 419, 967 => 418, 964 => 417, 961 => 416, 958 => 415, 955 => 414, 952 => 413, 950 => 412, 944 => 411, 940 => 409, 937 => 407, 934 => 406, 932 => 404, 931 => 403, 929 => 401, 926 => 400, 923 => 396, 920 => 395, 917 => 394, 915 => 393, 912 => 392, 909 => 391, 907 => 390, 904 => 389, 901 => 387, 899 => 386, 896 => 385, 893 => 384, 890 => 382, 872 => 381, 865 => 379, 860 => 378, 854 => 377, 851 => 376, 848 => 375, 846 => 373, 828 => 372, 825 => 370, 822 => 344, 819 => 342, 817 => 341, 814 => 340, 809 => 336, 802 => 335, 798 => 333, 792 => 331, 789 => 330, 783 => 327, 779 => 326, 776 => 325, 770 => 322, 766 => 321, 762 => 320, 759 => 319, 756 => 318, 754 => 317, 748 => 316, 745 => 315, 742 => 314, 736 => 313, 734 => 312, 729 => 310, 726 => 309, 720 => 307, 718 => 306, 715 => 305, 707 => 301, 705 => 300, 700 => 299, 698 => 298, 697 => 297, 696 => 296, 695 => 295, 693 => 294, 690 => 293, 684 => 292, 681 => 290, 667 => 289, 664 => 288, 647 => 287, 644 => 286, 641 => 285, 638 => 284, 635 => 283, 631 => 280, 629 => 277, 626 => 276, 622 => 274, 614 => 272, 611 => 271, 608 => 270, 604 => 268, 602 => 266, 601 => 265, 600 => 264, 598 => 263, 595 => 262, 593 => 261, 587 => 258, 581 => 257, 574 => 253, 567 => 251, 561 => 250, 558 => 249, 556 => 248, 551 => 246, 546 => 244, 539 => 242, 533 => 241, 530 => 240, 528 => 239, 527 => 238, 526 => 237, 525 => 236, 519 => 233, 517 => 232, 513 => 230, 511 => 229, 506 => 227, 504 => 226, 500 => 224, 498 => 223, 489 => 219, 482 => 218, 479 => 217, 476 => 216, 472 => 214, 470 => 213, 469 => 212, 468 => 211, 467 => 210, 465 => 209, 462 => 208, 460 => 207, 457 => 206, 452 => 205, 449 => 204, 447 => 203, 442 => 200, 438 => 198, 432 => 197, 427 => 195, 425 => 192, 422 => 191, 417 => 189, 415 => 186, 412 => 185, 408 => 184, 405 => 183, 403 => 182, 400 => 181, 398 => 180, 395 => 179, 391 => 177, 344 => 131, 342 => 130, 339 => 129, 337 => 125, 336 => 124, 335 => 123, 331 => 121, 329 => 120, 328 => 115, 327 => 114, 325 => 113, 319 => 112, 316 => 111, 313 => 110, 310 => 109, 305 => 108, 302 => 107, 299 => 105, 296 => 104, 294 => 103, 290 => 102, 287 => 101, 284 => 100, 280 => 95, 277 => 93, 271 => 91, 269 => 90, 265 => 89, 259 => 85, 254 => 83, 247 => 82, 244 => 81, 239 => 78, 230 => 76, 226 => 74, 224 => 73, 219 => 72, 214 => 71, 212 => 70, 205 => 68, 201 => 67, 198 => 66, 195 => 65, 192 => 64, 187 => 62, 186 => 61, 185 => 60, 184 => 59, 182 => 58, 180 => 57, 177 => 56, 173 => 54, 170 => 53, 165 => 51, 160 => 50, 153 => 48, 148 => 47, 145 => 46, 143 => 45, 139 => 43, 135 => 40, 129 => 38, 127 => 37, 124 => 36, 120 => 35, 117 => 34, 115 => 33, 112 => 32, 109 => 30, 107 => 29, 104 => 28, 102 => 27, 99 => 26, 95 => 24, 92 => 22, 89 => 21, 87 => 20, 84 => 19, 82 => 18, 80 => 11, 78 => 10, 76 => 9, 73 => 8, 70 => 7, 52 => 6, 41 => 678,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Création d'un tableau
    Ne gère pas le \"select\" < Nombre de lignes par page >
        formTag: true, # Faut-il ou non intégrer la balise <form> ?
#}
{% macro build(args) %}
    {% from \"PHPKTemplateBundle:macro:tableau.html.twig\" import pagination %}

    {% set args = args is null ? {} : args %}
    {# Valeurs par défaut #}
    {% set args = {
        tableau: null,
        formTag: true,
        filter: true,
        export: [],
        affichageLignesTrouvees: true,
        pagination: 'header'
    }|merge(args) %}

    {% if app.environment == 'dev' and args.pagination not in [ 'header', 'footer', 'both', false ] %}
        {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import error as error %}
        {{ error({
            message: \"L'attribut <b>pagination</b> accepte les valeurs suivantes : 'header', 'footer', 'both', false\"
        }) }}
    {% endif %}

    {% set tableau = args.tableau is not null ? args.tableau.render : null %}

    {% if tableau is not null %}

    {# À partir de maintenant, tab contient les données après exécution de la requête #}
    {% set tableId = tableau.metadata.tableId|default(uniqid('tableau_')) %}
    {# Récupération des données en post ou en session #}
    {% set post = app.request.get('phpk_table')|default({}) %}
    {% set checkboxDisplayed = [] %} {# Utilisé dans le cas où un décorateur CHECKBOX est présent #}

    {% if args.formTag %}
        <form method=\"post\" action=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|default({})) }}\">
    {% endif %}
    <div class=\"tab-box\">

        {# Pagination haut #}
        <div class=\"tab-interpage\">
            <div class=\"resultat\">
                {% if args.affichageLignesTrouvees %}
                    {% if tableau.metadata.nbResultsFiltered != tableau.metadata.nbResults %}
                        <b>{{ tableau.metadata.nbResultsFiltered|number_format(0, '', ' ') }}</b>
                        {{ tableau.metadata.nbResultsFiltered > 1 ? 'lignes filtrées' : 'ligne filtrée' }} sur {{ tableau.metadata.nbResults }}
                    {% else %}
                        <b>{{ tableau.metadata.nbResults|number_format(0, '', ' ') }}</b>
                        {{ tableau.metadata.nbResults > 1 ? 'lignes trouvées' : 'ligne trouvée' }}
                    {% endif %}
                {% else %}
                    &nbsp;
                {% endif %}
            </div>
            {% if args.pagination in [ 'header', 'both' ] %}
                {{ pagination(
                    tableau.metadata.paginator.page,
                    args.tableau.getDataHandler.getFromRequest('pageSize'),
                    tableau.metadata.nbResults,
                    tableau.metadata.nbResultsFiltered) }}
            {% endif %}
            {% if getParameter('phpk_template.table.pageSize.display') %}
                    {% if args.affichageLignesTrouvees %}
                        <div class=\"pagination\">
                            <label class=\"lignePage\" for=\"phpk_table[{{ tableId }}][pageSize]\">nb. de lignes par page</label>
                            <select id=\"phpk_table[{{ tableId }}][pageSize]\" name=\"phpk_table[{{ tableId }}][pageSize]\"
                                    class=\"phpk_pageSize\">
                                {% set availableOptions = getParameter('phpk_template.table.pageSize.availableOptions') %}
                                {% for key, value in availableOptions %}
                                    <option value=\"{{ value }}\"
                                        {% if key == args.tableau.getDataHandler.getFromRequest('pageSize') %}
                                            selected=\"selected\"
                                        {% endif %}
                                    >{{ key }}</option>
                                {% endfor %}
                            </select>
                        </div>
                {% endif %}
            {% else %}
                <input type=\"hidden\" id=\"phpk_table[{{ tableId }}][pageSize]\" name=\"phpk_table[{{ tableId }}][pageSize]\"
                       value=\"{{ args.tableau.getDataHandler.getFromRequest('pageSize') }}\" />
            {% endif %}
        </div>

        <div class=\"tab-body\">
            <div class=\"center\">
                <table id=\"{{ tableId }}\" class=\"phpk_table\">
                    {% if tableau.title != '' %}
                        <caption>{{ tableau.title }}</caption>
                    {% endif %}

                    {# Header du tableau #}
                    <thead>

                        {#
                            Filtre
                        #}
                        {% if args.filter or args.export|length > 0 %}
                            <tr class=\"filtre top\">
                                <td class=\"premier\" colspan=\"{{ tableau.columns|length }}\">
                                    {% if args.filter %}
                                    {% from \"PHPKTemplateBundle:macro:bouton.html.twig\" import bouton %}

                                    {# Y'a-t-il des filtres définis ou pas ? Si oui, le bouton Rétablir doit être dispo #}
                                    {% set filterSet = false %}
                                    {% for filter in args.tableau.getDataHandler.getFromRequest('filtre') %}
                                        {% if filter != \"\" and filter is not iterable %}
                                            {% set filterSet = true %}
                                        {% endif %}
                                    {% endfor %}
                                    {{ bouton({
                                        id: 'phpk_table['~tableId~\"][filtre][bouton][restore]\",
                                        name: 'phpk_table['~tableId~\"][filtre][bouton][restore]\",
                                        class: 'phpk_btn_restore',
                                        role: \"actionintermediaire\",
                                        label: \"Rétablir\",
                                        type: \"submit\",
                                        disabled: not filterSet
                                    }) }}

                                    {{ bouton({
                                        id: 'phpk_table['~tableId~\"][filtre][bouton][filter]\",
                                        name: 'phpk_table['~tableId~\"][filtre][bouton][filter]\",
                                        role: \"actionintermediaire\",
                                        label: \"Filtrer\",
                                        type: \"submit\"
                                    }) }}
                                    {% from \"PHPKTemplateBundle:macro:aide.html.twig\" import icone as aide %}
                                    {{ aide({
                                        texte: '
    <div class=\"infopopup\">
        <div class=\"section\">
            <h2>Liste des opérateurs de filtrage numériques</h2>
            <dl><dt>=</dt><dd>: égal à</dd></dl>
            <dl><dt>!=</dt><dd>: différent de</dd></dl>
            <dl><dt>&lt;&gt;</dt><dd>: différent de</dd></dl>
            <dl><dt>&lt;</dt><dd>: inférieur à</dd></dl>
            <dl><dt>&lt;=</dt><dd>: inférieur ou égal à</dd></dl>
            <dl><dt>&gt;</dt><dd>: supérieur à</dd></dl>
            <dl><dt>&gt;=</dt><dd>: supérieur ou égal à</dd></dl>
        </div>

        <div class=\"section\">
            <h2>Liste des opérateurs sur les textes</h2>
            <dl><dt>\"texte\"</dt><dd>: Texte exact tenant compte des accents et majuscules</dd></dl>
        </div>

        <div class=\"section\">
            <h2>Exemples</h2>
            <dl><dt>&lt;10</dt><dd>veut dire tous les nombres inférieurs à 10.</dd></dl>
            <dl><dt>p</dt><dd>veut dire tous les mots qui commencent par la lettre <b>p</b>.</dd></dl>
            <dl><dt>\"TeSt\"</dt><dd>veut dire tous les mots TeSt en respectant les majuscules et les accents</dd></dl>
        </div>

    <div class=\"section\">
        <h2>Fonctionnement</h2>
        <p>Il n'~\"'\"~'est possible d'~\"'\"~'écrire qu'~\"'\"~'un opérateur par colonne.<br/>
        Il est possible de filtrer sur plusieurs colonnes.<br/>
        Le filtrage texte est insensible à la casse et aux accents, il est cependant possible
        de tenir compte des accents et de la casse en encadrant le texte recherché par des
        guillemets.<br/>
        Les caractères spéciaux sont utilisés uniquement pour le filtrage texte
        (hors opérateurs inférieur et supérieur).
        </p>
    </div>

        <div class=\"section\">
            <h2>Tri des colonnes</h2>
            <p>Pour trier une colonne il suffit de cliquer sur son entête.<br/>
            Il est possible d\\'effectuer un tri sur plusieurs colonnes en maintenant la touche <b>CTRL</b> enfoncée. Celui-ci s\\'effectuera au relâchement de la touche.
            </p>
        </div>

    </div>'
                                    }) }}
                                    {% endif %}

                                    {% if args.export|length > 0 %}
                                    <span class=\"phpk_table_export\">
                                        {% from \"PHPKTemplateBundle:macro:liens.html.twig\" import a as lien %}
                                        <input type=\"hidden\" id=\"phpk_table_export_hidden\" name=\"\" />
                                        {% for export in args.export %}
                                            {% if export|lower == 'pdf' %}
                                                {{ lien({text:'PDF',
                                                         image:'doc-pdf',
                                                         title:'Télécharger le tableau en PDF',
                                                         javascript:'phpk_table_export(this,\"phpk_table['~tableId~'][export][pdf]\")'}) }}
                                            {% endif %}
                                            {% if export|lower == 'csv' %}
                                                {{ lien({text:'CSV',
                                                         image:'doc-excel',
                                                         title:'Télécharger le tableau en CSV',
                                                         javascript:'phpk_table_export(this,\"phpk_table['~tableId~'][export][csv]\")'}) }}
                                            {% endif %}
                                        {% endfor %}
                                    </span>
                                    {% endif %}

                                </td>
                            </tr>
                            {% if args.filter %}
                            <tr class=\"filtre ligne2\">
                                {% for colonne in tableau.columns if args.tableau.view in colonne.visibility %}
                                    <td>
                                        {% if colonne.metadata.filtrable %}
                                            {% if colonne.metadata.filter is not null %}
                                                {{ render(controller('PHPKCoreBundle:Tableaux:filter', {
                                                    name: 'phpk_table[' ~ tableId ~ '][filtre][' ~ colonne.id ~ ']',
                                                    id: tableId ~ '_filtre_' ~ colonne.id,
                                                    value: args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default(''),
                                                    filter: colonne.metadata.filter
                                                } ))  }}
                                            {% else %}
                                                {% set decorator = colonne.metadata.decorator %}
                                                {% if decorator == \"boolean\" %}
                                                    <select name=\"phpk_table[{{ tableId }}][filtre][{{ colonne.id }}]\"
                                                        id=\"{{ tableId }}_filtre_{{ colonne.id }}\">

                                                        <option value=\"\"></option>
                                                        <option value=\"0\"
                                                            {% if args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default('') == \"0\" %}
                                                                selected=\"selected\"
                                                            {% endif %}
                                                        >{{ colonne.metadata.decoratorOptions.booleans is defined ?
                                                            colonne.metadata.decoratorOptions.booleans[false] : 'N' }}</option>
                                                        <option value=\"1\"
                                                            {% if args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default('') == \"1\" %}
                                                                selected=\"selected\"
                                                            {% endif %}
                                                        >{{ colonne.metadata.decoratorOptions.booleans is defined ?
                                                            colonne.metadata.decoratorOptions.booleans[true] : 'O' }}</option>

                                                    </select>
                                                {% elseif decorator == \"text\" or
                                                          decorator == \"longtext\" or
                                                          decorator == \"integer\" or
                                                          decorator == \"float\" %}
                                                    <input
                                                        name=\"phpk_table[{{ tableId }}][filtre][{{ colonne.id }}]\"
                                                        id=\"{{ tableId }}_filtre_{{ colonne.id }}\"
                                                        type=\"text\"
                                                        title=\"Filtre sur la colonne {{ colonne.name }}\"
                                                        class=\"champ_filtre\"
                                                        value=\"{{ args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default('') }}\"
                                                    />
                                                {% elseif decorator == \"color\" %}
                                                    <input
                                                        name=\"phpk_table[{{ tableId }}][filtre][{{ colonne.id }}]\"
                                                        id=\"{{ tableId }}_filtre_{{ colonne.id }}\"
                                                        type=\"hidden\"
                                                        value=\"{{ args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default('') }}\"
                                                    />
                                                    <script type=\"text/javascript\">
                                                        window.addEvent('domready', function(event) {
                                                            ColorPickerTag.init('{{ tableId }}_filtre_{{ colonne.id }}',
                                                                                {defaultColor:\"{{ args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default('') }}\"});
                                                        ;});
                                                    </script>
                                                {% elseif decorator == \"shortdate\" or decorator == \"longdate\" %}
                                                    {% import \"PHPKTemplateBundle:macro:input.html.twig\" as input %}
                                                    {{ input.date({
                                                        id: tableId~'_filtre_'~colonne.id,
                                                        name: 'phpk_table['~tableId~'][filtre]['~colonne.id~']',
                                                        value: args.tableau.getDataHandler.getFromRequest('filtre')[colonne.id]|default(''),
                                                        datePicker: true
                                                    }) }}
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    </td>
                                {% endfor %}
                            </tr>
                            {% endif %}
                        {% endif %}
                        {#
                            Noms des colonnes
                        #}
                        <tr>

                            {# Creation d'un tableau contenant le nom des colonnes triees ainsi que le sens de tri #}
                            {% set tableauColonnes = args.tableau.getDataHandler.getFromRequest('tri')['colonne']|default('')|split(',') %}
                            {% set tableauSens = args.tableau.getDataHandler.getFromRequest('tri')['sens']|default('')|split(',') %}
                            {% set tableauTri = [] %}

                            {% for nomColonne in tableauColonnes %}
                                {% set tableauTri = tableauTri|merge({ (nomColonne) : tableauSens[loop.index0]}) %}
                            {% endfor %}

                            {# On parcourt l'ensemble des colonnes #}
                            {% for colonne in tableau.columns if args.tableau.view in colonne.visibility %}
                                {% set decorator = colonne.metadata.decorator %}
                                {% if   decorator == \"loupe\" or
                                        decorator == \"radio\" or
                                        decorator == \"action\" or
                                        decorator == \"pictogramme\" or
                                        decorator == \"separator\" %}
                                    <th scope=\"col\" class=\"pictogramme phpk_decorator_{{ decorator }}\"></th>
                                {% elseif decorator == \"checkbox\" %}
                                    <th scope=\"col\" class=\"pictogramme phpk_decorator_{{ decorator }}\">
                                        <input type=\"checkbox\" class=\"phpk_check_table\" />
                                    </th>
                                {% else %}
                                    <th scope=\"col\"
                                        {% if colonne.width %}
                                            style=\"width:{{ colonne.width }}px\"
                                        {% endif %}
                                        class=\"
                                        phpk_decorator_{{ decorator }}

                                        {% if colonne.id|default('') in tableauTri|keys %}
                                            tri-{{ tableauTri[colonne.id] == 'SORT_ASC' ? 'asc' : 'desc' }}
                                        {% else %}tri{% endif %}

                                        {% if colonne.metadata.triable %} triable{% endif %}\">
                                        {% if colonne.metadata.triable %}
                                            {% if colonne.id|default('') in tableauTri|keys %}
                                                <a class=\"phpk_tri\" href=\"#\"
                                                   data-sens=\"{{ tableauTri[colonne.id] == 'SORT_ASC' ? 'SORT_DESC' : 'SORT_ASC' }}\"
                                                   data-colonne=\"{{ colonne.id }}\">
                                                    {{ colonne.name }}
                                                </a>
                                            {% else %}
                                                <a class=\"phpk_tri\" href=\"#\" data-sens=\"SORT_ASC\"
                                                   data-colonne=\"{{ colonne.id }}\">
                                                    {{ colonne.name }}
                                                </a>
                                            {% endif %}
                                        {% else %}
                                            {{ colonne.name }}
                                        {% endif %}
                                    </th>
                                {% endif %}
                            {% endfor %}
                        </tr>
                    </thead>

                    {# Corps du tableau #}
                    <tbody>
                        {% if tableau.rows|length > 0 %}

                        {# Options par défaut pour toutes les cellules #}
                        {% set defaultOptions = {
                            'backgroundColor': 'default',
                            'checked': false,
                            'class': null,
                            'cliquable': true,
                            'colspan': 1,
                            'couleur': 'noir',
                            'data': null,
                            'decorator': 'text',
                            'decoratorOptions': {},
                            'disabled': false,
                            'display': true,
                            'habilitations': {},
                            'id': null,
                            'image': '',
                            'infobulle': null,
                            'javascript': '',
                            'name': null,
                            'path': { 'route': null, 'param': {} },
                            'pictogramme': null,
                            'replaceBy': null,
                            'tabIndex': null,
                            'target': '_self',
                            'title': '',
                            'url': null
                        } %}

                        {# On parcourt chaque ligne du tableau #}
                        {% for ligne in tableau.rows %}
                            {#  Variable servant à stocker le nombre de cellules à ignorer suite à un colspan
                                Se décrémente à chaque loop, quand il vaut 0, c'est qu'il faut afficher la cellule #}
                            {% set colspanIgnoreNext = 0 %}

                            <tr {% if ligne.id is not null %}id=\"{{ ligne.id }}\" {% endif %}
                                class=\"{{ loop.index % 2 == 1 ? 'impair' : 'pair' }}
                                {% if ligne.class is not null %} {{ ligne.class }}{% endif %}\">
                                {# On parcourt chaque cellule de la ligne #}
                                {% for cell in ligne.data %}

                                    {# Si la colonne doit être affichée #}
                                    {% if args.tableau.view in tableau.columns[(loop.index-1)%tableau.columns|length].visibility %}

                                        {% if colspanIgnoreNext == 0 %}

                                        {# Si render est defined, c'est qu'on a un objet Cell() #}
                                        {% if attribute(cell, 'render') is defined %}
                                            {# On surcharge les options par défaut avec ce qui est set par render() #}
                                            {% set cell = defaultOptions|merge(cell.render()) %}
                                        {% else %}
                                            {# On surcharge uniquement l'attribut data #}
                                            {% set cell = defaultOptions|merge({ 'data': cell }) %}
                                        {% endif %}

                                        {#  Gestion du décorateur de la cellule
                                            Si le colspan est > 1, on ne peut pas déduire le décorateur.
                                            On le laisse par défaut #}
                                        {% if cell.colspan == 1 %}
                                            {% set cell = cell|merge(
                                            {
                                'decorator': tableau.columns[(loop.index-1)%tableau.columns|length].metadata.decorator,
                                'decoratorOptions': tableau.columns[(loop.index-1)%tableau.columns|length].metadata.decoratorOptions
                                            }) %}
                                        {% endif %}

                                        {# Nous avons maintenant un tableau cell avec tous les attributs corrects #}

                                        <td
                                        {% if cell.id is not null %}id=\"{{ cell.id }}\" {% endif %}
                                        {# Gestion des classes à appliquer à la cellule #}
                                        {% set class = [ 'phpk_decorator_'~cell.decorator ] %}
                                        {% if cell.decorator == 'longtext' and cell.display %}
                                            {% set class = class|merge(['infobulle', 'longText']) %}
                                        {% elseif cell.decorator == 'separator' %}
                                            {% set class = class|merge(['separator']) %}
                                        {% endif %}

                                        {# Ajout de la couleur de fond si nécessaire #}
                                        {% if cell.backgroundColor != 'default' %}
                                            {% set class = class|merge([ 'bg-'~cell.backgroundColor ]) %}
                                        {% endif %}
                                        {% if cell.class is not null %}
                                            {% set class = class|merge([ cell.class ]) %}
                                        {% endif %}

                                        class=\"{{ class|join(' ') }}\"

                                        {% if cell.colspan > 1 %}
                                            colspan=\"{{ cell.colspan }}\"
                                            {% set colspanIgnoreNext = cell.colspan - 1 %}
                                        {% endif %}

                                        {# Decorator = longtext, alors on affiche une infobulle contenant l'intégralité de la cellule #}
                                        {% if cell.decorator == 'longtext' and cell.display %}
                                            {% if cell.data is iterable %}
                                                title=\"<ul>
                                                {% for object in cell.data %}
                                                    <li style='list-style-type:none; margin-left: 0px;'>{{ object }}</li>
                                                {% endfor %}
                                                </ul>\"
                                            {# Sinon, affichage brut des données #}
                                            {% else %}
                                                title=\"{{ cell.data }}\"
                                            {% endif %}
                                        {% endif %}
                                        >
                                            {% if cell.display %}
                                            <div
                                                {# Données de la cellule #}
                                                {% if cell.decorator == \"boolean\" %}
                                                    data-value=\"{{ cell.data ? 'true' : 'false' }}\">
                                                    {% if cell.decoratorOptions.booleans is defined %}
                                                        {{ cell.data ? cell.decoratorOptions.booleans[true] :
                                                        cell.decoratorOptions.booleans[false] }}
                                                    {% else %}
                                                        {{ cell.data ? 'O' : 'N' }}
                                                    {% endif %}
                                                {% elseif cell.decorator == \"checkbox\" %}
                                                    ><input type=\"checkbox\"
                                                           name=\"phpk_table[{{ tableId }}][checkbox][{{ cell.name|default('') }}]\"
                                                           value=\"{{ cell.data }}\"
                                                    {% if cell.data in
                                                        args.tableau.getDataHandler.getFromRequest('checkbox') or cell.checked %}
                                                        checked=\"checked\"
                                                    {% endif %}
                                                    />
                                                    {% set checkboxDisplayed = checkboxDisplayed|merge([cell.data]) %}
                                                {% elseif cell.decorator == \"radio\" %}
                                                    ><input type=\"radio\"
                                                           name=\"phpk_table[{{ tableId }}][radio][{{ cell.name|default('') }}]\"
                                                           value=\"{{ cell.data }}\"
                                                    {% if cell.checked %}
                                                        checked=\"checked\"
                                                    {% endif %}
                                                    />
                                                {% elseif cell.decorator == \"link\" %}
                                                    {% from \"PHPKTemplateBundle:macro:liens.html.twig\" import a %}
                                                    >{{ a(cell) }}
                                                {% elseif cell.decorator == \"modaleajax\" %}
                                                    {{(cell.pictogramme is null)? '' : 'style=\"height:inherit\"' }}>

                                                    {# L'attribut \"cliquable\" est facultatif, par défaut : true #}
                                                    {% if cell.cliquable %}
                                                        <a href=\"#\"
                                                           data-url=\"{{ path(cell.path.route, cell.path.param) }}\"
                                                           data-title=\"{{ cell.title }}\"
                                                           {% if(cell.pictogramme is null) %}
                                                               class=\"lien doc-tout-format modale_ajax\">{{ cell.data }}</a>
                                                           {% else %}
                                                               class=\"icone-pictogramme icone-pictogramme-{{ cell.pictogramme }} modale_ajax\">{{ cell.data }}</a>
                                                           {% endif %}
                                                    {% else %}
                                                        {{ cell.data }}
                                                    {% endif %}
                                                {% elseif cell.decorator == \"action\" %}
                                                    >
                                                    {% for action in cell.actions %}
                                                        {# Gestion des habilitations#}
                                                        {% set authorized = false %}
                                                        {% if action.habilitations is defined and action.habilitations is not null %}
                                                            {% for habilitation in action.habilitations %}
                                                                {% if app.user.granted is defined and app.user.granted(habilitation) %}
                                                                    {% set authorized = true %}
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            {% set authorized = true %}
                                                        {% endif %}

                                                        {% if authorized %}
                                                            <a href=\"{{ path(action.route, action.param) }}\"
                                                               class=\"
                                                            {% if action.pictogramme is not null %}
                                                                {% if action.pictogramme starts with 'fa-' %}
                                                                    fa fa-165x {{ action.pictogramme }}
                                                                {% else %}
                                                                    icone-pictogramme icone-pictogramme-{{ action.pictogramme }}
                                                                {% endif %}
                                                            {% endif %}
                                                            {% if action.infobulle is not null %}
                                                                infobulle\" title=\"{{ action.infobulle }}
                                                            {% endif %}
                                                            \"
                                                            >
                                                            </a>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% elseif cell.decorator == \"color\" %}
                                                    ><div
                                                    {% if cell.data is iterable and cell.data.infobulle is not empty %}
                                                        class=\"phpk_champ_color infobulle\"
                                                        style=\"background-color:{{ cell.data.color }}\"
                                                        title=\"{{ cell.data.infobulle }}\"
                                                    {% else %}
                                                        class=\"phpk_champ_color\"
                                                        style=\"background-color:{{ cell.data }}\"
                                                        title=\"{{ cell.data }}\"
                                                    {% endif %}
                                                 ></div>
                                                {% elseif cell.decorator == \"shortdate\" %}
                                                    >
                                                    {% if cell.data is null %}
                                                        -
                                                    {% else %}
                                                        {{ cell.data|date(\"d/m/Y\") }}
                                                    {% endif %}
                                                {% elseif cell.decorator == \"longdate\" %}
                                                    >
                                                    {% if cell.data is null %}
                                                        -
                                                    {% else %}
                                                        {{ cell.data|date(\"d/m/Y H:i:s\") }}
                                                    {% endif %}
                                                {% elseif cell.decorator == \"integer\" %}
                                                    data-value=\"{{ cell.data }}\">
                                                    {{ cell.data|number_format }}
                                                {% elseif cell.decorator == \"float\" %}
                                                    data-value=\"{{ cell.data }}\">
                                                    {{ cell.data|number_format(cell.decoratorOptions.decimal, ',', ' ') }}
                                                {% elseif cell.decorator == \"separator\" %}
                                                    >
                                                {% elseif cell.decorator == \"pictogramme\" %}
                                                    >
                                                    {% set pictogramme = cell.pictogramme is not null ? cell.pictogramme : cell.data %}

                                                    {% if pictogramme is not null %}
                                                        {%- if pictogramme|slice(0,3) == 'fa-' %}
                                                            {%- if getParameter('phpk_template.hors_charte') -%}
                                                                {% if cell.infobulle is defined %}
                                                                    <i class=\"fa {{ pictogramme }} {{ cell.couleur }} infobulle\" title=\"{{ cell.infobulle }}\"></i>
                                                                {% else %}
                                                                    <i class=\"fa {{ pictogramme }} {{ cell.couleur }}\"></i>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% else %}

                                                            {% if cell.infobulle is not null %}
                                                                <i class=\"icone-pictogramme infobulle icone-pictogramme-{{ pictogramme }}\" title=\"{{ cell.infobulle }}\">&nbsp;</i>
                                                            {% else %}
                                                                <i class=\"icone-pictogramme icone-pictogramme-{{ pictogramme }}\">&nbsp;</i>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% else %}
                                                    >
                                                    {# Si c'est une collection, on affiche une liste #}
                                                    {% if cell.data is iterable %}
                                                        <ul>
                                                        {% for object in cell.data %}
                                                            <li style=\"list-style-type:none; margin-left: 0px;\">{{ object }}</li>
                                                        {% endfor %}
                                                        </ul>
                                                    {# Sinon, affichage brut des données, interpretation de l'HTML #}
                                                    {% else %}
                                                        {{ cell.data | raw }}
                                                    {% endif %}
                                                {% endif %}
                                            </div>
                                            {% elseif cell.replaceBy is not null %}
                                                {{ cell.replaceBy }}
                                            {% endif %}
                                        </td>
                                        {% else %}
                                            {% set colspanIgnoreNext = colspanIgnoreNext - 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}

                                {# Affichage de la loupe si le tableau est détaillable #}
                                {% if tableau.metadata.isDetaillable %}
                                    <td class=\"pictogramme phpk_decorator_loupe\">
                                        {% if ligne.path is defined and ligne.path is not empty %}
                                        <a href=\"{{ path(ligne.path.route, ligne.path.param) }}\"
                                           class=\"vue-detail\"
                                           alt=\"Détail ligne {{ loop.index }}\"
                                           title=\"Détail ligne {{ loop.index }}\">
                                        </a>
                                        {% endif %}
                                    </td>
                                {% endif %}
                            </tr>
                        {% endfor %}
                        {% else %}
                            <tr>
                                <td colspan=\"{{ tableau.columns|length }}\" class=\"impair center\">
                                    Aucun résultat
                                </td>
                            </tr>
                        {% endif %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"tab-footer\"> </div>

        {# Pagination bas #}
        <div class=\"tab-interpage\">
            <div class=\"resultat\">&nbsp;</div>
            {% if args.pagination in [ 'footer', 'both' ] %}
                {{ pagination(
                    tableau.metadata.paginator.page,
                    args.tableau.getDataHandler.getFromRequest('pageSize'),
                    tableau.metadata.nbResults,
                    tableau.metadata.nbResultsFiltered) }}
            {% endif %}
        </div>
    </div>
    <input type=\"hidden\" name=\"phpk_table[{{ tableId }}][type]\" value=\"{{ tableau.metadata.tableName }}\" />
    <input type=\"hidden\"
           name=\"phpk_table[{{ tableId }}][tri][colonne]\"
           id=\"phpk_table[{{ tableId }}][tri][colonne]\"
           value=\"{{ args.tableau.getDataHandler.getFromRequest('tri')['colonne']|default('') }}\" />
    <input type=\"hidden\"
           name=\"phpk_table[{{ tableId }}][tri][sens]\"
           id=\"phpk_table[{{ tableId }}][tri][sens]\"
           value=\"{{ args.tableau.getDataHandler.getFromRequest('tri')['sens']|default('') }}\" />
    <input type=\"hidden\"
           name=\"phpk_table[{{ tableId }}][page]\"
           id=\"phpk_table[{{ tableId }}][page]\"
           value=\"{{ args.tableau.getDataHandler.getPage() }}\" />
    <input type=\"hidden\"
           name=\"phpk_table[{{ tableId }}][filtered]\"
           id=\"phpk_table[{{ tableId }}][filtered]\"
           value=\"{{ args.tableau.getDataHandler.getFiltered() }}\" />

    {% for value in args.tableau.getDataHandler.getFromRequest('checkbox') if (value not in checkboxDisplayed) %}
        <input type=\"hidden\" name=\"phpk_table[{{ tableId }}][checkbox][]\" value=\"{{ value }}\" />
    {% endfor %}

    {% if args.formTag %}
        </form>
    {% endif %}

    {% endif %}
{% endmacro %}

{% macro pagination(page, pageSize, nbResults, nbResultsFiltered) %}

    {# Si il y a plus d'une page, on pagine. Sinon c'est inutile #}
    {% if nbResultsFiltered > pageSize %}

        {% set precedente = page-1 %}
        {% set suivante = page+1 %}
        {% set derniere = (nbResultsFiltered/pageSize)|round(0, 'ceil') %}

        <div id=\"tabinterpagetableau\" class=\"tabinterfiche\" role=\"navigation\">
            <ol class=\"navigation-interpage\" aria-labelledby=\"pagenamelabeltableau\">
                {# Page précédente #}
                {% if precedente <= 0 %}
                    <li><a class=\"precedentinactif\"></a></li>
                {% else %}
                    <li><a href=\"#\" class=\"phpk_page precedent\" data-page=\"{{ precedente }}\"></a></li>
                {% endif %}

                {# Liste des pages #}
                <li id=\"pagenamelabeltableau\" class=\"pagename\">Page</li>

                {# Première page #}
                {% if page == 1 %}
                    <li><a class=\"page courant premier\" tabindex=\"0\">1</a></li>
                {% else %}
                    <li><a href=\"#\" class=\"phpk_page page premier\" data-page=\"1\">1</a></li>
                {% endif %}

                {# Pages intermédiaires #}
                {% if derniere > 4 %}
                    {% if page < 3 %}
                        <li><a href=\"#\" class=\"phpk_page page{% if page == 2 %} courant{% endif %}\" data-page=\"2\">2</a></li>
                        <li><a href=\"#\" class=\"phpk_page page{% if page == 3 %} courant{% endif %}\" data-page=\"3\">3</a></li>
                        <li><a href=\"#\" class=\"phpk_page page{% if page == 4 %} courant{% endif %}\" data-page=\"4\">4</a></li>
                        <li><span class=\"dbl\">&hellip;</span></li>
                    {% elseif page > derniere-3 %}
                        <li><span class=\"dbl\">&hellip;</span></li>
                        <li><a href=\"#\" class=\"phpk_page page{% if page == derniere-3 %} courant{% endif %}\" data-page=\"{{ derniere-3 }}\">{{ derniere-3 }}</a></li>
                        <li><a href=\"#\" class=\"phpk_page page{% if page == derniere-2 %} courant{% endif %}\" data-page=\"{{ derniere-2 }}\">{{ derniere-2 }}</a></li>
                        <li><a href=\"#\" class=\"phpk_page page{% if page == derniere-1 %} courant{% endif %}\" data-page=\"{{ derniere-1 }}\">{{ derniere-1 }}</a></li>
                    {% else %}
                        <li><span class=\"dbl\">&hellip;</span></li>
                        <li><a href=\"#\" class=\"phpk_page page\" data-page=\"{{ page-1 }}\">{{ page-1 }}</a></li>
                        <li><a href=\"#\" class=\"phpk_page page courant\" data-page=\"{{ page }}\">{{ page }}</a></li>
                        <li><a href=\"#\" class=\"phpk_page page\" data-page=\"{{ page+1 }}\">{{ page+1 }}</a></li>
                        <li><span class=\"dbl\">&hellip;</span></li>
                    {% endif %}
                {% elseif derniere == 3 %}
                    <li><a href=\"#\" class=\"phpk_page page{% if page == 2 %} courant{% endif %}\" data-page=\"2\">2</a></li>
                {% elseif derniere == 4 %}
                    <li><a href=\"#\" class=\"phpk_page page{% if page == 2 %} courant{% endif %}\" data-page=\"2\">2</a></li>
                    <li><a href=\"#\" class=\"phpk_page page{% if page == 3 %} courant{% endif %}\" data-page=\"3\">3</a></li>
                {% endif %}

                {# Dernière page #}
                {% if page == derniere %}
                    <li><a class=\"page courant dernier\" tabindex=\"0\">{{ derniere }}</a></li>
                {% else %}
                    <li><a href=\"#\" class=\"phpk_page page dernier\" data-page=\"{{ derniere }}\">{{ derniere }}</a></li>
                {% endif %}

                {# Page suivante #}
                {% if suivante > derniere %}
                    <li><a class=\"suivantinactif\"></a></li>
                {% else %}
                    <li><a href=\"#\" class=\"phpk_page suivant\" data-page=\"{{ suivante }}\"></a></li>
                {% endif %}
            </ol>
        </div>

    {% endif %}
{% endmacro %}
", "PHPKTemplateBundle:macro:tableau.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/tableau.html.twig");
    }
}
