<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:navigation.html.twig */

class __TwigTemplate_24135c2edca223998be366f2370a6ca017572a050f6a1df13c30a33462e9c65c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:navigation.html.twig"));

        // line 1
        echo "
";
        // line 96
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function macro_onglets($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "onglets"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "onglets"));

            // line 4
            echo "
    ";
            // line 5
            $context["args"] = twig_array_merge(["id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("onglets_"), "selection" => "", "onglets" => [], "class" => "", "contentcontainer" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("container_"), "existingcontainer" => false],             // line 10
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 10, $this->source);
                })()));
            // line 11
            echo "
    ";
            // line 12
            $context["args"] = twig_array_merge(["name" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 12, $this->source);
            })()), "id", [])], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 12, $this->source);
            })()));
            // line 13
            echo "
    ";
            // line 14
            ob_start();
            // line 15
            echo "        <ul id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 15, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 15, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" class=\"onglets ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 15, $this->source);
            })()), "class", []), "html", null, true);
            echo "\" role=\"tablist\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 16, $this->source);
            })()), "onglets", []));
            foreach ($context['_seq'] as $context["i"] => $context["tab"]) {
                // line 17
                echo "
                ";
                // line 18
                $context["visible"] = false;
                // line 19
                echo "                ";
                $context["enable"] = false;
                // line 20
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", true, true)) {
                    // line 22
                    echo "
                    ";
                    // line 23
                    $context["habilitations"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", false, true), "services", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", []), "services", [])) : (twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [])));
                    // line 24
                    echo "
                    ";
                    // line 26
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", false, true), "visible", [], "any", true, true)) {
                        // line 27
                        echo "                        ";
                        $context["visible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", []), "visible", []);
                        // line 28
                        echo "                    ";
                    }
                    // line 29
                    echo "
                    ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () {
                        throw new RuntimeError('Variable "habilitations" does not exist.', 30, $this->source);
                    })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                        // line 31
                        echo "
                        ";
                        // line 32
                        if (((!(isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                    throw new RuntimeError('Variable "enable" does not exist.', 32, $this->source);
                                })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                throw new RuntimeError('Variable "app" does not exist.', 32, $this->source);
                            })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                            // line 33
                            echo "                            ";
                            $context["visible"] = true;
                            // line 34
                            echo "                            ";
                            $context["enable"] = true;
                            // line 35
                            echo "                        ";
                        }
                        // line 36
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "
                ";
                } else {
                    // line 40
                    echo "                    ";
                    $context["visible"] = true;
                    // line 41
                    echo "                    ";
                    $context["enable"] = true;
                    // line 42
                    echo "                ";
                }
                // line 43
                echo "
                ";
                // line 44
                if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
                    throw new RuntimeError('Variable "visible" does not exist.', 44, $this->source);
                })())) {
                    // line 45
                    echo "
                    ";
                    // line 46
                    $context["tab"] = twig_array_merge(["id" => ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 46, $this->source);
                            })()), "id", []) . "_") . $context["i"]), "text" => "", "title" => "", "url" => "", "disabled" => (                    // line 50
                        (isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                            throw new RuntimeError('Variable "enable" does not exist.', 50, $this->source);
                        })()) == false), "contentcontainer" => "", "existingcontainer" => false, "content" => "", "class" => "", "ajax" => false, "selected" => false],                     // line 56
                        $context["tab"]);
                    // line 57
                    echo "
                    ";
                    // line 58
                    if (((twig_get_attribute($this->env, $this->source, $context["tab"], "content", []) != "") && (twig_get_attribute($this->env, $this->source, $context["tab"], "url", []) != ""))) {
                        // line 59
                        echo "                        ";
                        $context["tab"] = twig_array_merge($context["tab"], ["url" => ""]);
                        // line 60
                        echo "                    ";
                    }
                    // line 61
                    echo "
                    ";
                    // line 62
                    $context["tab"] = twig_array_merge(["name" => twig_get_attribute($this->env, $this->source, $context["tab"], "id", [])], $context["tab"]);
                    // line 63
                    echo "                    ";
                    $context["selected"] = (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 63, $this->source);
                        })()), "selection", []) == twig_get_attribute($this->env, $this->source, $context["tab"], "id", []));
                    // line 64
                    echo "
                    <li role=\"presentation\">
                        <a  id=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", []), "html", null, true);
                    echo "\"
                            name=\"";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", []), "html", null, true);
                    echo "\"
                            role=\"tab\"
                            class=\"";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "class", []), "html", null, true);
                    echo "\"
                            ";
                    // line 70
                    if (((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () {
                            throw new RuntimeError('Variable "selected" does not exist.', 70, $this->source);
                        })()) || ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                    throw new RuntimeError('Variable "args" does not exist.', 70, $this->source);
                                })()), "selection", []) == "") && ($context["i"] == 0)))) {
                        echo " aria-selected=\"true\" ";
                    }
                    // line 71
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "disabled", [])) {
                        echo " aria-disabled=\"true\" ";
                    } else {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "url", []), "html", null, true);
                        echo "\" ";
                    }
                    // line 72
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["tab"], "content", []) != "")) {
                        echo "aria-content=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "content", []), "html", null, true);
                        echo "\" ";
                    }
                    // line 73
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "ajax", [])) {
                        echo "aria-ajax=\"true\" ";
                    }
                    // line 74
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 74, $this->source);
                        })()), "existingcontainer", []) == false)) {
                        echo "aria-controls=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 74, $this->source);
                        })()), "contentcontainer", []), "html", null, true);
                        echo "\" ";
                    }
                    // line 75
                    echo "                            title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", []), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "text", []);
                    echo "</a>
                    </li>

                ";
                }
                // line 79
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </ul>

        ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 83, $this->source);
                })()), "existingcontainer", []) == false)) {
                // line 84
                echo "            <div class=\"section\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 84, $this->source);
                })()), "contentcontainer", []), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 86
            echo "
        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                phpk_onglets('";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 89, $this->source);
            })()), "id", []), "html", null, true);
            echo "');
            });

        </script>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 94
            echo "
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 98
    public function macro_etapes($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "etapes"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "etapes"));

            // line 99
            echo "
    ";
            // line 100
            $context["args"] = twig_array_merge(["id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("etapes_"), "selection" => "", "class" => "", "etapes" => []],             // line 103
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 103, $this->source);
                })()));
            // line 104
            echo "
    ";
            // line 105
            $context["args"] = twig_array_merge(["name" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 105, $this->source);
            })()), "id", [])], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 105, $this->source);
            })()));
            // line 106
            echo "
    ";
            // line 107
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 107, $this->source);
                })()), "etapes", [])) <= 4)) {
                // line 108
                echo "        ";
                $context["args"] = twig_array_merge((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 108, $this->source);
                })()), ["class" => ("grand " . twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 108, $this->source);
                    })()), "class", []))]);
                // line 109
                echo "    ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 109, $this->source);
                })()), "etapes", [])) == 5)) {
                // line 110
                echo "        ";
                $context["args"] = twig_array_merge((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 110, $this->source);
                })()), ["class" => ("moyen " . twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 110, $this->source);
                    })()), "class", []))]);
                // line 111
                echo "    ";
            } else {
                // line 112
                echo "        ";
                $context["args"] = twig_array_merge((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 112, $this->source);
                })()), ["class" => ("petit " . twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 112, $this->source);
                    })()), "class", []))]);
                // line 113
                echo "    ";
            }
            // line 114
            echo "
    ";
            // line 115
            ob_start();
            // line 116
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 116, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 116, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" class=\"etapes ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 116, $this->source);
            })()), "class", []), "html", null, true);
            echo " \">
            <ul role=\"tablist\">
                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 118, $this->source);
            })()), "etapes", []));
            foreach ($context['_seq'] as $context["i"] => $context["tab"]) {
                // line 119
                echo "
                    ";
                // line 120
                $context["visible"] = false;
                // line 121
                echo "                    ";
                $context["enable"] = false;
                // line 122
                echo "
                    ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", true, true)) {
                    // line 124
                    echo "
                        ";
                    // line 125
                    $context["habilitations"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", false, true), "services", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", []), "services", [])) : (twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [])));
                    // line 126
                    echo "
                        ";
                    // line 128
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", [], "any", false, true), "visible", [], "any", true, true)) {
                        // line 129
                        echo "                            ";
                        $context["visible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "habilitations", []), "visible", []);
                        // line 130
                        echo "                        ";
                    }
                    // line 131
                    echo "
                        ";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () {
                        throw new RuntimeError('Variable "habilitations" does not exist.', 132, $this->source);
                    })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                        // line 133
                        echo "
                            ";
                        // line 134
                        if (((!(isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                    throw new RuntimeError('Variable "enable" does not exist.', 134, $this->source);
                                })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                throw new RuntimeError('Variable "app" does not exist.', 134, $this->source);
                            })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                            // line 135
                            echo "                                ";
                            $context["visible"] = true;
                            // line 136
                            echo "                                ";
                            $context["enable"] = true;
                            // line 137
                            echo "                            ";
                        }
                        // line 138
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "
                    ";
                } else {
                    // line 142
                    echo "                        ";
                    $context["visible"] = true;
                    // line 143
                    echo "                        ";
                    $context["enable"] = true;
                    // line 144
                    echo "                    ";
                }
                // line 145
                echo "
                    ";
                // line 146
                if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
                    throw new RuntimeError('Variable "visible" does not exist.', 146, $this->source);
                })())) {
                    // line 147
                    echo "
                        ";
                    // line 148
                    $context["position"] = ($context["i"] + 1);
                    // line 149
                    echo "                        ";
                    $context["tab"] = twig_array_merge(["text" => ("Etape " . (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () {
                            throw new RuntimeError('Variable "position" does not exist.', 149, $this->source);
                        })())), "title" => "", "url" => "#", "class" => "", "id" => ((twig_get_attribute($this->env, $this->source,                     // line 153
                                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                    throw new RuntimeError('Variable "args" does not exist.', 153, $this->source);
                                })()), "id", []) . "_") . $context["i"]), "disabled" => (                    // line 154
                        (isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                            throw new RuntimeError('Variable "enable" does not exist.', 154, $this->source);
                        })()) == false)], $context["tab"]);
                    // line 155
                    echo "
                        ";
                    // line 156
                    $context["tab"] = twig_array_merge(["name" => twig_get_attribute($this->env, $this->source, $context["tab"], "id", [])], $context["tab"]);
                    // line 157
                    echo "                        ";
                    $context["selected"] = (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 157, $this->source);
                        })()), "selection", []) == twig_get_attribute($this->env, $this->source, $context["tab"], "id", []));
                    // line 158
                    echo "
                        <li role=\"presentation\">
                            <a role=\"tab\"
                               id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", []), "html", null, true);
                    echo "\"
                               name=\"";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", []), "html", null, true);
                    echo "\"
                               class=\"";
                    // line 163
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 163, $this->source);
                        })()), "etapes", [])) == (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () {
                            throw new RuntimeError('Variable "position" does not exist.', 163, $this->source);
                        })()))) {
                        echo "derniere-etape";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "class", []), "html", null, true);
                    echo "\"
                               ";
                    // line 164
                    if ((twig_get_attribute($this->env, $this->source, $context["tab"], "disabled", []) == false)) {
                        // line 165
                        echo "                                   ";
                        if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () {
                            throw new RuntimeError('Variable "selected" does not exist.', 165, $this->source);
                        })())) {
                            // line 166
                            echo "                                       aria-selected=\"true\"
                                       tabindex=\"0\"
                                   ";
                        } else {
                            // line 169
                            echo "                                       tabindex=\"-1\"
                                       aria-selected=\"false\"
                                       href=\"";
                            // line 171
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "url", []), "html", null, true);
                            echo "\"
                                   ";
                        }
                        // line 173
                        echo "                               ";
                    }
                    // line 174
                    echo "                               title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", []), "html", null, true);
                    echo "\"
                               aria-disabled=\"";
                    // line 175
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "disabled", [])) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "\">
                                <span>
                                    <span>";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "text", []);
                    echo "</span>
                                </span>
                            </a>
                        </li>

                    ";
                }
                // line 183
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "            </ul>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 188
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
        return "PHPKTemplateBundle:macro:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(554 => 188, 549 => 185, 542 => 183, 533 => 177, 524 => 175, 519 => 174, 516 => 173, 511 => 171, 507 => 169, 502 => 166, 499 => 165, 497 => 164, 489 => 163, 485 => 162, 481 => 161, 476 => 158, 473 => 157, 471 => 156, 468 => 155, 466 => 154, 465 => 153, 463 => 149, 461 => 148, 458 => 147, 456 => 146, 453 => 145, 450 => 144, 447 => 143, 444 => 142, 440 => 140, 433 => 138, 430 => 137, 427 => 136, 424 => 135, 422 => 134, 419 => 133, 415 => 132, 412 => 131, 409 => 130, 406 => 129, 403 => 128, 400 => 126, 398 => 125, 395 => 124, 393 => 123, 390 => 122, 387 => 121, 385 => 120, 382 => 119, 378 => 118, 368 => 116, 366 => 115, 363 => 114, 360 => 113, 357 => 112, 354 => 111, 351 => 110, 348 => 109, 345 => 108, 343 => 107, 340 => 106, 338 => 105, 335 => 104, 333 => 103, 332 => 100, 329 => 99, 311 => 98, 295 => 94, 287 => 89, 282 => 86, 276 => 84, 274 => 83, 270 => 81, 263 => 79, 253 => 75, 246 => 74, 241 => 73, 234 => 72, 225 => 71, 221 => 70, 217 => 69, 212 => 67, 208 => 66, 204 => 64, 201 => 63, 199 => 62, 196 => 61, 193 => 60, 190 => 59, 188 => 58, 185 => 57, 183 => 56, 182 => 50, 181 => 46, 178 => 45, 176 => 44, 173 => 43, 170 => 42, 167 => 41, 164 => 40, 160 => 38, 153 => 36, 150 => 35, 147 => 34, 144 => 33, 142 => 32, 139 => 31, 135 => 30, 132 => 29, 129 => 28, 126 => 27, 123 => 26, 120 => 24, 118 => 23, 115 => 22, 113 => 21, 110 => 20, 107 => 19, 105 => 18, 102 => 17, 98 => 16, 89 => 15, 87 => 14, 84 => 13, 82 => 12, 79 => 11, 77 => 10, 76 => 5, 73 => 4, 55 => 3, 44 => 96, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# Création des onglets #}
{% macro onglets(args) %}

    {% set args = { id: uniqid(\"onglets_\"),
                    selection: '',
                    onglets:[],
                    class:'',
                    contentcontainer: uniqid(\"container_\") ,
                    existingcontainer: false } | merge(args) %}

    {% set args = {  name: args.id  } | merge(args) %}

    {% spaceless %}
        <ul id=\"{{ args.id }}\" name=\"{{ args.name }}\" class=\"onglets {{ args.class }}\" role=\"tablist\">
            {% for i, tab in args.onglets %}

                {% set visible = false %}
                {% set enable = false %}

                {% if tab.habilitations is defined %}

                    {% set habilitations = (tab.habilitations.services is defined) ? tab.habilitations.services : tab.habilitations %}

                    {# Si l'option visible est définie. On indique si les boutons doivent toujours être affichés #}
                    {% if tab.habilitations.visible is defined %}
                        {% set visible = tab.habilitations.visible %}
                    {% endif %}

                    {% for habilitation in habilitations %}

                        {% if not enable and app.user.granted is defined and app.user.granted(habilitation) %}
                            {% set visible = true %}
                            {% set enable = true %}
                        {% endif %}

                    {% endfor %}

                {% else %}
                    {% set visible = true %}
                    {% set enable = true %}
                {% endif %}

                {% if visible %}

                    {% set tab = {  id: args.id ~ '_' ~ i,
                                    text: '',
                                    title: '',
                                    url : '',
                                    disabled: (enable == false),
                                    contentcontainer: '',
                                    existingcontainer: false,
                                    content: '',
                                    class: '',
                                    ajax: false,
                                    selected: false  } | merge(tab) %}

                    {% if tab.content != '' and tab.url != '' %}
                        {% set tab = tab|merge({url:''}) %}
                    {% endif %}

                    {% set tab = {  name: tab.id  } | merge(tab) %}
                    {% set selected = args.selection == tab.id %}

                    <li role=\"presentation\">
                        <a  id=\"{{ tab.id }}\"
                            name=\"{{ tab.name }}\"
                            role=\"tab\"
                            class=\"{{ tab.class }}\"
                            {% if selected or (args.selection == \"\" and i == 0) %} aria-selected=\"true\" {% endif %}
                            {% if tab.disabled  %} aria-disabled=\"true\" {% else %} href=\"{{ tab.url }}\" {% endif %}
                            {% if tab.content != \"\" %}aria-content=\"{{ tab.content }}\" {% endif %}
                            {% if tab.ajax  %}aria-ajax=\"true\" {% endif %}
                            {% if args.existingcontainer == false  %}aria-controls=\"{{ args.contentcontainer }}\" {% endif %}
                            title=\"{{ tab.title }}\">{{ tab.text|raw }}</a>
                    </li>

                {% endif %}

            {% endfor %}
        </ul>

        {% if args.existingcontainer == false %}
            <div class=\"section\" id=\"{{ args.contentcontainer }}\"></div>
        {% endif %}

        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                phpk_onglets('{{ args.id }}');
            });

        </script>
    {% endspaceless %}

{% endmacro %}

{# Navigation par etape #}
{% macro etapes(args) %}

    {% set args = { id: uniqid(\"etapes_\"),
                    selection: '',
                    class: '',
                    etapes:[] } | merge(args) %}

    {% set args = {  name: args.id  } | merge(args) %}

    {% if args.etapes|length <= 4 %}
        {% set args =  args | merge({  class: \"grand \" ~ args.class }) %}
    {% elseif args.etapes|length == 5 %}
        {% set args =  args | merge({  class: \"moyen \" ~ args.class }) %}
    {% else %}
        {% set args =  args | merge({  class: \"petit \" ~ args.class }) %}
    {% endif %}

    {% spaceless %}
        <div id=\"{{ args.id }}\" name=\"{{ args.name }}\" class=\"etapes {{ args.class }} \">
            <ul role=\"tablist\">
                {% for i, tab in args.etapes %}

                    {% set visible = false %}
                    {% set enable = false %}

                    {% if tab.habilitations is defined %}

                        {% set habilitations = (tab.habilitations.services is defined) ? tab.habilitations.services : tab.habilitations %}

                        {# Si l'option visible est définie. On indique si les boutons doivent toujours être affichés #}
                        {% if tab.habilitations.visible is defined %}
                            {% set visible = tab.habilitations.visible %}
                        {% endif %}

                        {% for habilitation in habilitations %}

                            {% if not enable and app.user.granted is defined and app.user.granted(habilitation) %}
                                {% set visible = true %}
                                {% set enable = true %}
                            {% endif %}

                        {% endfor %}

                    {% else %}
                        {% set visible = true %}
                        {% set enable = true %}
                    {% endif %}

                    {% if visible %}

                        {% set position = i+1 %}
                        {% set tab = {  text: 'Etape ' ~ position,
                                        title: '',
                                        url:\"#\",
                                        class:'',
                                        id: args.id ~ '_' ~ i,
                                        disabled: (enable == false) } | merge(tab) %}

                        {% set tab = {  name: tab.id  } | merge(tab) %}
                        {% set selected = args.selection == tab.id %}

                        <li role=\"presentation\">
                            <a role=\"tab\"
                               id=\"{{ tab.id }}\"
                               name=\"{{ tab.name }}\"
                               class=\"{% if args.etapes|length == position %}derniere-etape{% endif %} {{ tab.class }}\"
                               {% if tab.disabled == false %}
                                   {% if selected %}
                                       aria-selected=\"true\"
                                       tabindex=\"0\"
                                   {% else %}
                                       tabindex=\"-1\"
                                       aria-selected=\"false\"
                                       href=\"{{ tab.url }}\"
                                   {% endif %}
                               {% endif %}
                               title=\"{{ tab.title }}\"
                               aria-disabled=\"{% if tab.disabled %}true{% else %}false{% endif %}\">
                                <span>
                                    <span>{{ tab.text|raw }}</span>
                                </span>
                            </a>
                        </li>

                    {% endif %}

                {% endfor %}
            </ul>
        </div>
    {% endspaceless %}

{% endmacro %}
", "PHPKTemplateBundle:macro:navigation.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/navigation.html.twig");
    }
}
