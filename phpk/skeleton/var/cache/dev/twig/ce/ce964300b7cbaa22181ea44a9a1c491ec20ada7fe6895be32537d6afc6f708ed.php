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

/* PHPKTemplateBundle:macro:input.html.twig */

class __TwigTemplate_97c28110a392e1fa5c4e311d5e7bac2fbb02d38a972a5cfa6c9ae32cd75f9b5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:input.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:input.html.twig"));

        // line 50
        echo "
";
        // line 62
        echo "
";
        // line 74
        echo "
";
        // line 80
        echo "
";
        // line 137
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_date($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "date"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "date"));

            // line 3
            echo "    ";
            $context["options"] = ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", []), [])) : ([]));
            // line 4
            echo "    ";
            $context["options"] = twig_array_merge(["minDate" => null, "maxDate" => null],             // line 5
                (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 5, $this->source);
                })()));
            // line 6
            echo "
    ";
            // line 7
            $context["args"] = twig_array_merge(["id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("phpk_date_"), "value" => "", "name" => "", "datePicker" => true],             // line 10
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 10, $this->source);
                })()));
            // line 11
            echo "
    ";
            // line 13
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 13, $this->source);
                })()), "value", [])) == 3)) {
                // line 14
                echo "        ";
                // line 15
                echo "        ";
                $context["value"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 15, $this->source);
                    })()), "value", []), "day", []) != "")) ? (((((sprintf("%02d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 16
                                    (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                        throw new RuntimeError('Variable "args" does not exist.', 16, $this->source);
                                    })()), "value", []), "day", [])) . "/") . sprintf("%02d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 16, $this->source);
                            })()), "value", []), "month", []))) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 16, $this->source);
                    })()), "value", []), "year", []))) : (""));
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
                })()), "value", []);
                // line 21
                echo "    ";
            }
            // line 22
            echo "    <input id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 22, $this->source);
            })()), "id", []), "html", null, true);
            echo "\"
           type=\"text\"
           value=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
                throw new RuntimeError('Variable "value" does not exist.', 24, $this->source);
            })()), "html", null, true);
            echo "\"
           ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "minDate", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                        throw new RuntimeError('Variable "options" does not exist.', 25, $this->source);
                    })()), "minDate", [])))) {
                echo "data-mindate=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 25, $this->source);
                })()), "minDate", []), "html", null, true);
                echo "\"";
            }
            // line 26
            echo "           ";
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxDate", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                        throw new RuntimeError('Variable "options" does not exist.', 26, $this->source);
                    })()), "maxDate", [])))) {
                echo "data-maxdate=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 26, $this->source);
                })()), "maxDate", []), "html", null, true);
                echo "\"";
            }
            // line 27
            echo "           ";
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "disabled", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 27, $this->source);
                    })()), "disabled", []) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 28
            echo "           autocomplete=\"off\"
           maxlength=\"10\"
           placeholder=\"jj/mm/aaaa\"
           size=\"10\"
           name=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 32, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" />

    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 34, $this->source);
            })()), "datePicker", [])) {
                // line 35
                echo "        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                new DatePicker('";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 37, $this->source);
                })()), "id", []), "html", null, true);
                echo "', {
                    toggle: '";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 38, $this->source);
                })()), "id", []), "html", null, true);
                echo "_calendrier',
                    pickerClass: 'datepicker dpmetier',
                    linkTitle: 'Aide à la saisie de date'});
                ;
            });
            \$('";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 43, $this->source);
                })()), "id", []), "html", null, true);
                echo "').addEvent('blur', function (event) {
                if (!ChampSaisieTag.controleDate(this))
                    return;
            });
        </script>
    ";
            }

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_ps($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ps"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ps"));

            // line 53
            echo "    ";
            $context["taille"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "cle", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 53, $this->source);
                    })()), "form", []), "vars", []), "attr", []), "cle", []) == true))) ? (9) : (8));
            // line 54
            echo "    <input id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 54, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" 
           name=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 55, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" 
           value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 56, $this->source);
            })()), "value", []), "html", null, true);
            echo "\" 
           type=\"text\" 
           maxlength=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 58, $this->source);
            })()), "html", null, true);
            echo "\" 
           size=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 59, $this->source);
            })()), "html", null, true);
            echo "\" 
           ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "disabled", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 60, $this->source);
                    })()), "disabled", []) == true))) {
                echo "disabled=\"disabled\"";
            }
            echo " />
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_rpps($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "rpps"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "rpps"));

            // line 65
            echo "    ";
            $context["taille"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "cle", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 65, $this->source);
                    })()), "form", []), "vars", []), "attr", []), "cle", []) == true))) ? (12) : (11));
            // line 66
            echo "    <input id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 66, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" 
           name=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" 
           value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 68, $this->source);
            })()), "value", []), "html", null, true);
            echo "\" 
           type=\"text\" 
           maxlength=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 70, $this->source);
            })()), "html", null, true);
            echo "\" 
           size=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\"
           ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "disabled", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 72, $this->source);
                    })()), "disabled", []) == true))) {
                echo "disabled=\"disabled\"";
            }
            echo " />
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 76
    public function macro_nir($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nir"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nir"));

            // line 77
            echo "    ";
            $context["taille"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "cle", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 77, $this->source);
                    })()), "form", []), "vars", []), "attr", []), "cle", []) == true))) ? (15) : (13));
            // line 78
            echo "    <input id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 78, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 78, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 78, $this->source);
            })()), "value", []), "html", null, true);
            echo "\" type=\"text\" maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 78, $this->source);
            })()), "html", null, true);
            echo "\" size=\"";
            echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () {
                throw new RuntimeError('Variable "taille" does not exist.', 78, $this->source);
            })()), "html", null, true);
            echo "\" />
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_autocompletion($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "autocompletion"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "autocompletion"));

            // line 92
            echo "
    ";
            // line 93
            $context["options"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "options", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "options", []), [])) : ([]));
            // line 94
            echo "    ";
            $context["options"] = twig_array_merge(["minChars" => 1, "maxVisibleItems" => 10, "valueField" => "", "filter" => ["type" => "contains", "path" => "text"], "urlOptions" => ["queryVarName" => "saisie"]],             // line 98
                (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 98, $this->source);
                })()));
            // line 99
            echo "
    ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "data", [], "any", true, true)) {
                // line 101
                echo "        ";
                $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 101, $this->source);
                })()), "form", []), "vars", []), "attr", []), "data", []);
                // line 102
                echo "        ";
                if (twig_test_iterable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () {
                    throw new RuntimeError('Variable "data" does not exist.', 102, $this->source);
                })()))) {
                    // line 103
                    echo "            ";
                    $context["data"] = json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () {
                        throw new RuntimeError('Variable "data" does not exist.', 103, $this->source);
                    })()));
                    // line 104
                    echo "        ";
                } else {
                    // line 105
                    echo "            ";
                    $context["data"] = "''";
                    // line 106
                    echo "        ";
                }
                // line 107
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", false, true), "vars", [], "any", false, true), "attr", [], "any", false, true), "url", [], "any", true, true)) {
                // line 108
                echo "        ";
                $context["data"] = (("'" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 108, $this->source);
                        })()), "form", []), "vars", []), "attr", []), "url", [])) . "'");
                // line 109
                echo "    ";
            } else {
                // line 110
                echo "        ";
                $context["data"] = "''";
                // line 111
                echo "    ";
            }
            // line 112
            echo "
    <input id=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 113, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" 
           name=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 114, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" 
           value=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 115, $this->source);
            })()), "value", []), "html", null, true);
            echo "\" 
           type=\"text\" 
           data-selected=\"\" 
           ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "disabled", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 118, $this->source);
                    })()), "disabled", []) == true))) {
                echo "disabled=\"disabled\"";
            }
            echo " />
    <script type=\"text/javascript\">
        window.addEvent('domready', function (event) {
            var phpk_autocompletion_";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 121, $this->source);
            })()), "id", []), "html", null, true);
            echo " = new Meio.Autocomplete.Select('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 121, $this->source);
            })()), "id", []), "html", null, true);
            echo "',
                                                                                  ";
            // line 122
            echo(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () {
                throw new RuntimeError('Variable "data" does not exist.', 122, $this->source);
            })());
            echo ",
                                                                                  {
                                                                                      'minChars' : ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 124, $this->source);
            })()), "minChars", []), "html", null, true);
            echo ",
                                                                                      'maxVisibleItems' : ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 125, $this->source);
            })()), "maxVisibleItems", []), "html", null, true);
            echo ",
                                                                                      'valueField': \$('";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 126, $this->source);
            })()), "valueField", []), "html", null, true);
            echo "'),
                                                                                      'valueFilter' : function(data) {
                                                                                          \$('";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 128, $this->source);
            })()), "id", []), "html", null, true);
            echo "').set('data-selected', data.value);
                                                                                          return data.value;
                                                                                      },
                                                                                      'filter': ";
            // line 131
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 131, $this->source);
            })()), "filter", []));
            echo ",
                                                                                      'urlOptions': ";
            // line 132
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 132, $this->source);
            })()), "urlOptions", []));
            echo "
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

    // line 139
    public function macro_color($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "color"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "color"));

            // line 140
            echo "
    ";
            // line 141
            $context["options"] = ["defaultColor" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 141, $this->source);
            })()), "value", [])];
            // line 142
            echo "
    ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "colors", [], "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 143, $this->source);
                    })()), "colors", [])) > 1))) {
                // line 144
                echo "        ";
                $context["options"] = twig_array_merge(["colors" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 144, $this->source);
                })()), "colors", [])], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 144, $this->source);
                })()));
                // line 145
                echo "    ";
            }
            // line 146
            echo "
    <input id=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 147, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 147, $this->source);
            })()), "name", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 147, $this->source);
            })()), "value", []), "html", null, true);
            echo "\" type=\"hidden\" />
    <script type=\"text/javascript\">
        window.addEvent('domready', function (event) {
            ColorPickerTag.init('";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 150, $this->source);
            })()), "id", []), "html", null, true);
            echo "', ";
            echo json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                throw new RuntimeError('Variable "options" does not exist.', 150, $this->source);
            })()));
            echo " );
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

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:macro:input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(557 => 150, 547 => 147, 544 => 146, 541 => 145, 538 => 144, 536 => 143, 533 => 142, 531 => 141, 528 => 140, 510 => 139, 490 => 132, 486 => 131, 480 => 128, 475 => 126, 471 => 125, 467 => 124, 462 => 122, 456 => 121, 448 => 118, 442 => 115, 438 => 114, 434 => 113, 431 => 112, 428 => 111, 425 => 110, 422 => 109, 419 => 108, 416 => 107, 413 => 106, 410 => 105, 407 => 104, 404 => 103, 401 => 102, 398 => 101, 396 => 100, 393 => 99, 391 => 98, 389 => 94, 387 => 93, 384 => 92, 366 => 91, 340 => 78, 337 => 77, 319 => 76, 300 => 72, 296 => 71, 292 => 70, 287 => 68, 283 => 67, 278 => 66, 275 => 65, 257 => 64, 238 => 60, 234 => 59, 230 => 58, 225 => 56, 221 => 55, 216 => 54, 213 => 53, 195 => 52, 173 => 43, 165 => 38, 161 => 37, 157 => 35, 155 => 34, 150 => 32, 144 => 28, 139 => 27, 132 => 26, 126 => 25, 122 => 24, 116 => 22, 113 => 21, 110 => 20, 107 => 19, 105 => 16, 103 => 15, 101 => 14, 98 => 13, 95 => 11, 93 => 10, 92 => 7, 89 => 6, 87 => 5, 85 => 4, 82 => 3, 64 => 2, 53 => 137, 50 => 80, 47 => 74, 44 => 62, 41 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création d'un champ Date #}
{% macro date(args) %}
    {% set options = args.options|default({}) %}
    {% set options = {minDate: null,
                      maxDate: null } | merge(options) %}

    {% set args = {id:uniqid('phpk_date_'),
                   value: '',
                   name: '',
                   datePicker: true}|merge(args) %}

    {# Si args.value|length == 3, c'est un objet \\DateTime #}
    {% if args.value|length == 3 %}
        {# Si args.value.days est une chaîne vide, c'est que le \\DateTime est null #}
        {% set value = args.value.day != \"\" ?
            \"%02d\"|format(args.value.day)~'/'~\"%02d\"|format(args.value.month)~'/'~args.value.year
            :
            '' %}
    {% else %}
        {% set value = args.value %}
    {% endif %}
    <input id=\"{{ args.id }}\"
           type=\"text\"
           value=\"{{ value }}\"
           {% if options.minDate is defined and options.minDate is not null %}data-mindate=\"{{ options.minDate }}\"{% endif %}
           {% if options.maxDate is defined and options.maxDate is not null %}data-maxdate=\"{{ options.maxDate }}\"{% endif %}
           {% if args.disabled is defined and args.disabled == true %}disabled=\"disabled\"{% endif %}
           autocomplete=\"off\"
           maxlength=\"10\"
           placeholder=\"jj/mm/aaaa\"
           size=\"10\"
           name=\"{{ args.name }}\" />

    {% if args.datePicker %}
        <script type=\"text/javascript\">
            window.addEvent('domready', function (event) {
                new DatePicker('{{ args.id }}', {
                    toggle: '{{ args.id }}_calendrier',
                    pickerClass: 'datepicker dpmetier',
                    linkTitle: 'Aide à la saisie de date'});
                ;
            });
            \$('{{ args.id }}').addEvent('blur', function (event) {
                if (!ChampSaisieTag.controleDate(this))
                    return;
            });
        </script>
    {% endif %}
{% endmacro %}

{# Création d'un champ numéro de PS #}
{% macro ps(args) %}
    {% set taille = (args.form.vars.attr.cle is defined and args.form.vars.attr.cle == true) ? 9 : 8 %}
    <input id=\"{{ args.id }}\" 
           name=\"{{ args.name }}\" 
           value=\"{{ args.value }}\" 
           type=\"text\" 
           maxlength=\"{{ taille }}\" 
           size=\"{{ taille }}\" 
           {% if args.disabled is defined and args.disabled == true %}disabled=\"disabled\"{% endif %} />
{% endmacro %}

{# Création d'un champ numéro de RPPS #}
{% macro rpps(args) %}
    {% set taille = (args.form.vars.attr.cle is defined and args.form.vars.attr.cle == true) ? 12 : 11 %}
    <input id=\"{{ args.id }}\" 
           name=\"{{ args.name }}\" 
           value=\"{{ args.value }}\" 
           type=\"text\" 
           maxlength=\"{{ taille }}\" 
           size=\"{{ taille }}\"
           {% if args.disabled is defined and args.disabled == true %}disabled=\"disabled\"{% endif %} />
{% endmacro %}

{# Création d'un champ NIR #}
{% macro nir(args) %}
    {% set taille = (args.form.vars.attr.cle is defined and args.form.vars.attr.cle == true) ? 15 : 13 %}
    <input id=\"{{ args.id }}\" name=\"{{ args.name }}\" value=\"{{ args.value }}\" type=\"text\" maxlength=\"{{ taille }}\" size=\"{{ taille }}\" />
{% endmacro %}

{# Création d'un champ autocompletion

   attr.data : tableau de données à utiliser dans le cadre d'une autocompletion avec liste.
   attr.url  : lien utilisé dans le cadre d'une autocompletion avec requête ajax.

   Le format des données est [{value:'',text:'',domaine:''}]

   attr.options  : tableau indiquant les différentes options relatives à ce champ

#}
{% macro autocompletion(args) %}

    {% set options = args.form.vars.attr.options|default({}) %}
    {% set options = {minChars:1,
                      maxVisibleItems: 10,
                      valueField: '',
                      filter: {type:'contains',path: 'text'},
                      urlOptions: { queryVarName: 'saisie' } } | merge(options) %}

    {% if args.form.vars.attr.data is defined %}
        {% set data = args.form.vars.attr.data %}
        {% if data is iterable %}
            {% set data = data|json_encode() %}
        {% else %}
            {% set data = \"''\" %}
        {% endif %}
    {% elseif args.form.vars.attr.url is defined %}
        {% set data = \"'\" ~ args.form.vars.attr.url ~ \"'\" %}
    {% else %}
        {% set data = \"''\" %}
    {% endif %}

    <input id=\"{{ args.id }}\" 
           name=\"{{ args.name }}\" 
           value=\"{{ args.value }}\" 
           type=\"text\" 
           data-selected=\"\" 
           {% if args.disabled is defined and args.disabled == true %}disabled=\"disabled\"{% endif %} />
    <script type=\"text/javascript\">
        window.addEvent('domready', function (event) {
            var phpk_autocompletion_{{ args.id }} = new Meio.Autocomplete.Select('{{ args.id }}',
                                                                                  {{ data|raw }},
                                                                                  {
                                                                                      'minChars' : {{ options.minChars }},
                                                                                      'maxVisibleItems' : {{ options.maxVisibleItems }},
                                                                                      'valueField': \$('{{options.valueField}}'),
                                                                                      'valueFilter' : function(data) {
                                                                                          \$('{{ args.id }}').set('data-selected', data.value);
                                                                                          return data.value;
                                                                                      },
                                                                                      'filter': {{ options.filter|json_encode()|raw }},
                                                                                      'urlOptions': {{ options.urlOptions|json_encode()|raw }}
                                                                                  });
        });
    </script>
{% endmacro %}

{# Création d'un champ colorpicker #}
{% macro color(args) %}

    {% set options = {defaultColor: args.value} %}

    {% if args.colors is defined and args.colors|length > 1 %}
        {% set options = {colors: args.colors }|merge(options) %}
    {% endif %}

    <input id=\"{{ args.id }}\" name=\"{{ args.name }}\" value=\"{{ args.value }}\" type=\"hidden\" />
    <script type=\"text/javascript\">
        window.addEvent('domready', function (event) {
            ColorPickerTag.init('{{ args.id }}', {{ options|json_encode|raw }} );
        });
    </script>
{% endmacro %}
", "PHPKTemplateBundle:macro:input.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/input.html.twig");
    }
}
