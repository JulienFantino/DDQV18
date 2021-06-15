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

/* PHPKTemplateBundle:macro:liens.html.twig */

class __TwigTemplate_5664d0a038d1e879572a7c4d90fd9ac9246f568a448293c7a51fe086d0efa965 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:liens.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:liens.html.twig"));


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_a($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "a"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "a"));

            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "
        ";
            // line 5
            $context["visible"] = false;
            // line 6
            echo "        ";
            $context["enable"] = false;
            // line 7
            echo "
        ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 8, $this->source);
                    })()), "habilitations", [])))) {
                // line 9
                echo "
            ";
                // line 10
                $context["habilitations"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", false, true), "services", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 10, $this->source);
                })()), "habilitations", []), "services", [])) : (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 10, $this->source);
                })()), "habilitations", [])));
                // line 11
                echo "
            ";
                // line 13
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", false, true), "visible", [], "any", true, true)) {
                    // line 14
                    echo "                ";
                    $context["visible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 14, $this->source);
                    })()), "habilitations", []), "visible", []);
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () {
                    throw new RuntimeError('Variable "habilitations" does not exist.', 17, $this->source);
                })()));
                foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                    // line 18
                    echo "
                ";
                    // line 19
                    if (((!(isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                throw new RuntimeError('Variable "enable" does not exist.', 19, $this->source);
                            })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                            throw new RuntimeError('Variable "app" does not exist.', 19, $this->source);
                        })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                        // line 20
                        echo "                    ";
                        $context["visible"] = true;
                        // line 21
                        echo "                    ";
                        $context["enable"] = true;
                        // line 22
                        echo "                ";
                    }
                    // line 23
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "
        ";
            } else {
                // line 27
                echo "            ";
                $context["visible"] = true;
                // line 28
                echo "            ";
                $context["enable"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
                throw new RuntimeError('Variable "visible" does not exist.', 31, $this->source);
            })())) {
                // line 32
                echo "
            ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "route", [], "any", true, true) && !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 33, $this->source);
                        })()), "path", []), "route", [])))) {
                    // line 34
                    echo "                ";
                    $context["args"] = twig_array_merge((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 34, $this->source);
                    })()), ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 34, $this->source);
                    })()), "path", []), "route", []), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "param", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "param", []), [])) : ([])))]);
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "
            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "url", [], "any", true, true)) {
                    // line 38
                    echo "
                ";
                    // line 39
                    $context["extension"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\PathInfoExtension']->getPathInfo(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 39, $this->source);
                    })()), "url", []), "extension");
                    // line 40
                    echo "                ";
                    $context["filename"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\PathInfoExtension']->getPathInfo(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 40, $this->source);
                    })()), "url", []), "filename");
                    // line 41
                    echo "
                ";
                    // line 42
                    if ((twig_length_filter($this->env, (isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                            throw new RuntimeError('Variable "extension" does not exist.', 42, $this->source);
                        })())) > 0)) {
                        // line 43
                        echo "                    ";
                        if ((((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                                    throw new RuntimeError('Variable "extension" does not exist.', 43, $this->source);
                                })()) == "xls") || ((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                                    throw new RuntimeError('Variable "extension" does not exist.', 43, $this->source);
                                })()) == "xlsx"))) {
                            // line 44
                            echo "                        ";
                            $context["args"] = twig_array_merge(["image" => "doc-excel", "text" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () {
                                throw new RuntimeError('Variable "filename" does not exist.', 44, $this->source);
                            })())], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 44, $this->source);
                            })()));
                            // line 45
                            echo "                    ";
                        } elseif ((((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                                    throw new RuntimeError('Variable "extension" does not exist.', 45, $this->source);
                                })()) == "doc") || ((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                                    throw new RuntimeError('Variable "extension" does not exist.', 45, $this->source);
                                })()) == "docx"))) {
                            // line 46
                            echo "                        ";
                            $context["args"] = twig_array_merge(["image" => "doc-word", "text" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () {
                                throw new RuntimeError('Variable "filename" does not exist.', 46, $this->source);
                            })())], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 46, $this->source);
                            })()));
                            // line 47
                            echo "                    ";
                        } elseif (((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () {
                                throw new RuntimeError('Variable "extension" does not exist.', 47, $this->source);
                            })()) == "pdf")) {
                            // line 48
                            echo "                        ";
                            $context["args"] = twig_array_merge(["image" => "doc-pdf", "text" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () {
                                throw new RuntimeError('Variable "filename" does not exist.', 48, $this->source);
                            })())], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                            })()));
                            // line 49
                            echo "                    ";
                        } else {
                            // line 50
                            echo "                        ";
                            $context["args"] = twig_array_merge(["image" => "doc-tout-format", "text" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () {
                                throw new RuntimeError('Variable "filename" does not exist.', 50, $this->source);
                            })())], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 50, $this->source);
                            })()));
                            // line 51
                            echo "                    ";
                        }
                        // line 52
                        echo "                ";
                    } else {
                        // line 53
                        echo "                    ";
                        $context["args"] = twig_array_merge(["text" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () {
                            throw new RuntimeError('Variable "filename" does not exist.', 53, $this->source);
                        })())], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 53, $this->source);
                        })()));
                        // line 54
                        echo "                ";
                    }
                    // line 55
                    echo "
            ";
                }
                // line 57
                echo "
            ";
                // line 58
                $context["args"] = twig_array_merge(["text" => "", "title" => "", "tabindex" => "", "image" => "", "url" => "", "target" => "_self", "class" => "", "couleur" => "noir", "disabled" => (                // line 66
                    (isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                        throw new RuntimeError('Variable "enable" does not exist.', 66, $this->source);
                    })()) == false), "id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("a_"), "javascript" => ""],                 // line 68
                    (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 68, $this->source);
                    })()));
                // line 69
                echo "
            ";
                // line 70
                $context["args"] = twig_array_merge(["name" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 70, $this->source);
                })()), "id", [])], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 70, $this->source);
                })()));
                // line 71
                echo "
            ";
                // line 72
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 72, $this->source);
                })()), "image", []))) {
                    // line 73
                    echo "                ";
                    $context["args"] = twig_array_merge((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                    })()), ["image" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                    })()), "image", []), "icone", []), "couleur" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                    })()), "image", []), "couleur", [])]);
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <a  ";
                // line 76
                ob_start();
                // line 77
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 77, $this->source);
                    })()), "disabled", []) == true)) {
                    // line 78
                    echo "                        data-href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 78, $this->source);
                    })()), "url", []), "html", null, true);
                    echo "\"
                        aria-disabled=\"true\"
                    ";
                } else {
                    // line 81
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 81, $this->source);
                        })()), "url", []) != "")) {
                        // line 82
                        echo "                        href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 82, $this->source);
                        })()), "url", []), "html", null, true);
                        echo "\"
                        ";
                    }
                    // line 84
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 84, $this->source);
                        })()), "javascript", []) != "")) {
                        // line 85
                        echo "                            onClick=\"javascript:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 85, $this->source);
                        })()), "javascript", []), "html", null, true);
                        echo ";\"
                        ";
                    }
                    // line 87
                    echo "                    ";
                }
                // line 88
                echo "                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 89
                echo "                target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 89, $this->source);
                })()), "target", []), "html", null, true);
                echo "\"
                id=\"";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 90, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"
                name=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 91, $this->source);
                })()), "name", []), "html", null, true);
                echo "\"
                title=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 92, $this->source);
                })()), "title", []), "html", null, true);
                echo "\"
                class=\"lien ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 93, $this->source);
                })()), "image", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 93, $this->source);
                })()), "class", []), "html", null, true);
                echo " lien-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 93, $this->source);
                })()), "couleur", []), "html", null, true);
                echo "\"
                tabindex=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 94, $this->source);
                })()), "tabindex", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 94, $this->source);
                })()), "text", []), "html", null, true);
                echo "</a>

        ";
            }
            // line 97
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

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:macro:liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(310 => 97, 302 => 94, 294 => 93, 290 => 92, 286 => 91, 282 => 90, 277 => 89, 274 => 88, 271 => 87, 265 => 85, 262 => 84, 256 => 82, 253 => 81, 246 => 78, 243 => 77, 241 => 76, 238 => 75, 235 => 74, 232 => 73, 230 => 72, 227 => 71, 225 => 70, 222 => 69, 220 => 68, 219 => 66, 218 => 58, 215 => 57, 211 => 55, 208 => 54, 205 => 53, 202 => 52, 199 => 51, 196 => 50, 193 => 49, 190 => 48, 187 => 47, 184 => 46, 181 => 45, 178 => 44, 175 => 43, 173 => 42, 170 => 41, 167 => 40, 165 => 39, 162 => 38, 160 => 37, 157 => 36, 154 => 35, 151 => 34, 149 => 33, 146 => 32, 144 => 31, 141 => 30, 138 => 29, 135 => 28, 132 => 27, 128 => 25, 121 => 23, 118 => 22, 115 => 21, 112 => 20, 110 => 19, 107 => 18, 103 => 17, 100 => 16, 97 => 15, 94 => 14, 91 => 13, 88 => 11, 86 => 10, 83 => 9, 81 => 8, 78 => 7, 75 => 6, 73 => 5, 70 => 4, 67 => 3, 49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création d'un bouton sous forme de balise <a> #}
{% macro a(args) %}
    {% spaceless %}

        {% set visible = false %}
        {% set enable = false %}

        {% if args.habilitations is defined and args.habilitations is not null %}

            {% set habilitations = (args.habilitations.services is defined) ? args.habilitations.services : args.habilitations %}

            {# Si l'option visible est définie. On indique si les boutons doivent toujours être affichés #}
            {% if args.habilitations.visible is defined %}
                {% set visible = args.habilitations.visible %}
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

            {% if args.path.route is defined and args.path.route is not null %}
                {% set args = args|merge({url: path(args.path.route, args.path.param|default({}) ) }) %}
            {% endif %}

            {% if args.url is defined %}

                {% set extension = pathInfo(args.url,'extension') %}
                {% set filename  = pathInfo(args.url,'filename') %}

                {% if extension|length > 0 %}
                    {% if extension == 'xls' or extension == 'xlsx' %}
                        {% set args = { image: 'doc-excel', text: filename } | merge(args) %}
                    {% elseif extension == 'doc' or extension == 'docx' %}
                        {% set args = { image: 'doc-word', text: filename } | merge(args) %}
                    {% elseif extension == 'pdf' %}
                        {% set args = { image: 'doc-pdf', text: filename } | merge(args) %}
                    {% else %}
                        {% set args = { image: 'doc-tout-format', text: filename } | merge(args) %}
                    {% endif %}
                {% else %}
                    {% set args = { text: filename } | merge(args) %}
                {% endif %}

            {% endif %}

            {% set args = { text: '',
                            title:'',
                            tabindex: '' ,
                            image: '',
                            url:'',
                            target:'_self',
                            class:'',
                            couleur: 'noir',
                            disabled: (enable == false),
                            id: uniqid(\"a_\"),
                            javascript:\"\" } | merge(args) %}

            {% set args = { name: args.id } |merge(args) %}

            {% if args.image is iterable %}
                {% set args = args | merge({ image: args.image.icone , couleur: args.image.couleur }) %}
            {% endif %}

            <a  {% spaceless %}
                    {% if args.disabled == true %}
                        data-href=\"{{ args.url }}\"
                        aria-disabled=\"true\"
                    {% else %}
                        {% if args.url != \"\" %}
                        href=\"{{ args.url }}\"
                        {% endif %}
                        {% if args.javascript != \"\" %}
                            onClick=\"javascript:{{ args.javascript }};\"
                        {% endif %}
                    {% endif %}
                {% endspaceless %}
                target=\"{{ args.target }}\"
                id=\"{{ args.id }}\"
                name=\"{{ args.name }}\"
                title=\"{{ args.title }}\"
                class=\"lien {{ args.image }} {{ args.class }} lien-{{ args.couleur }}\"
                tabindex=\"{{ args.tabindex }}\">{{ args.text }}</a>

        {% endif %}

    {% endspaceless %}
{% endmacro %}
", "PHPKTemplateBundle:macro:liens.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/liens.html.twig");
    }
}
