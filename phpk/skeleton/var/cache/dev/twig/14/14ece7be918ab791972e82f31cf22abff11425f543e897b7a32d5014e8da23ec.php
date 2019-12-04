<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:zone.html.twig */

class __TwigTemplate_7b5e2035eafae59dfa47120a6ac7aaa8a9bf1e67fd8f165811a8c5abb34ceb8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:zone.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:zone.html.twig"));

        // line 25
        echo "
";
        // line 35
        echo "
";
        // line 45
        echo "
";
        // line 55
        echo "
";
        // line 76
        echo "
";
        // line 87
        echo "
";
        // line 98
        echo "
";
        // line 252
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_message($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "message"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "message"));

            // line 2
            echo "    ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "type", []), "information")) : ("information"));
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 4, $this->source);
                })()) == "error")) {
                // line 5
                echo "            ";
                $context["__internal_bb1078f2f07404c32f47407fee3c80ab6776b15de608d3efb9838d0e254c3715"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 5);
                // line 6
                echo "            ";
                echo $context["__internal_bb1078f2f07404c32f47407fee3c80ab6776b15de608d3efb9838d0e254c3715"]->macro_error(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 6, $this->source);
                })()), "message", [])]);
                echo "
        ";
            } elseif ((            // line 7
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 7, $this->source);
                })()) == "success")) {
                // line 8
                echo "            ";
                $context["__internal_6843ff3b23c71278a5876a85292d4c026f1d7586aac52bc9b8e931c1f846ea6e"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 8);
                // line 9
                echo "            ";
                echo $context["__internal_6843ff3b23c71278a5876a85292d4c026f1d7586aac52bc9b8e931c1f846ea6e"]->macro_success(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 9, $this->source);
                })()), "message", [])]);
                echo "
        ";
            } elseif ((            // line 10
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 10, $this->source);
                })()) == "information")) {
                // line 11
                echo "            ";
                $context["__internal_bd3e8e834edf152859d6815f6376b048cb4fb1041c32b6807f2a9e47bfc66b41"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 11);
                // line 12
                echo "            ";
                echo $context["__internal_bd3e8e834edf152859d6815f6376b048cb4fb1041c32b6807f2a9e47bfc66b41"]->macro_information(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 12, $this->source);
                })()), "message", [])]);
                echo "
        ";
            } elseif ((            // line 13
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 13, $this->source);
                })()) == "attente")) {
                // line 14
                echo "            ";
                $context["__internal_7b1240d1a00452496d9cde49ba44cbb892a162e2e0b4647ffbcb9712dcca441a"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 14);
                // line 15
                echo "            ";
                echo $context["__internal_7b1240d1a00452496d9cde49ba44cbb892a162e2e0b4647ffbcb9712dcca441a"]->macro_attente(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 15, $this->source);
                })()), "message", [])]);
                echo "
        ";
            } elseif ((            // line 16
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 16, $this->source);
                })()) == "progression")) {
                // line 17
                echo "            ";
                $context["__internal_9fd60f122a7e1ac32f51cfdd985a11ae6c9d5cb74a3988955fc493c686270785"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 17);
                // line 18
                echo "            ";
                echo $context["__internal_9fd60f122a7e1ac32f51cfdd985a11ae6c9d5cb74a3988955fc493c686270785"]->macro_progress(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 18, $this->source);
                })()), "message", [])]);
                echo "
        ";
            } else {
                // line 20
                echo "            ";
                $context["__internal_1e243af4896609d8a2dbf248cdbe9a0db0ae80429d73c8e413bd6d6f7d51d7d1"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 20);
                // line 21
                echo "            ";
                echo $context["__internal_1e243af4896609d8a2dbf248cdbe9a0db0ae80429d73c8e413bd6d6f7d51d7d1"]->macro_information(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 21, $this->source);
                })()), "message", [])]);
                echo "
        ";
            }
            // line 23
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_information($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "information"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "information"));

            // line 27
            echo "    ";
            ob_start();
            // line 28
            echo "        <p ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 28, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"zone-info";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "class", [], "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 28, $this->source);
                })()), "class", []), "html", null, true);
            }
            echo "\">
            ";
            // line 30
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 30, $this->source);
            })()), "message", []);
            echo "
            ";
            // line 32
            echo "        </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_success($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "success"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "success"));

            // line 37
            echo "    ";
            ob_start();
            // line 38
            echo "        <p ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 38, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"zone-message";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "class", [], "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 38, $this->source);
                })()), "class", []), "html", null, true);
            }
            echo "\">
            ";
            // line 40
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 40, $this->source);
            })()), "message", []);
            echo "
            ";
            // line 42
            echo "        </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_error($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "error"));

            // line 47
            echo "    ";
            ob_start();
            // line 48
            echo "        <p ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"zone-alerte";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "class", [], "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                })()), "class", []), "html", null, true);
            }
            echo "\">
            ";
            // line 50
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 50, $this->source);
            })()), "message", []);
            echo "
            ";
            // line 52
            echo "        </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 56
    public function macro_flash($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash"));

            // line 57
            echo "    ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "type", []), "success")) : ("success"));
            // line 58
            echo "    ";
            $context["phpk_class"] = (((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "fade", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 58, $this->source);
                    })()), "fade", []) == "true"))) ? ("phpk-flash-fade") : ("phpk-flash"));
            // line 59
            echo "
    ";
            // line 60
            ob_start();
            // line 61
            echo "        ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 61, $this->source);
                })()) == "error")) {
                // line 62
                echo "            ";
                $context["__internal_8fc4169ee2d9f67e73d39cdaa8d73d52186356141f5315c4b2b826d2326166fd"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 62);
                // line 63
                echo "            ";
                echo $context["__internal_8fc4169ee2d9f67e73d39cdaa8d73d52186356141f5315c4b2b826d2326166fd"]->macro_error(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 63, $this->source);
                })()), "message", []), "class" => ((isset($context["phpk_class"]) || array_key_exists("phpk_class", $context) ? $context["phpk_class"] : (function () {
                        throw new RuntimeError('Variable "phpk_class" does not exist.', 63, $this->source);
                    })()) . " phpk-flash-alerte")]);
                echo "
        ";
            } elseif ((            // line 64
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 64, $this->source);
                })()) == "success")) {
                // line 65
                echo "            ";
                $context["__internal_2fdd6ebbbd5ccb7b0e8bada40f2ae6c66fadbeed210b2978c2ecb147ce905b79"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 65);
                // line 66
                echo "            ";
                echo $context["__internal_2fdd6ebbbd5ccb7b0e8bada40f2ae6c66fadbeed210b2978c2ecb147ce905b79"]->macro_success(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 66, $this->source);
                })()), "message", []), "class" => ((isset($context["phpk_class"]) || array_key_exists("phpk_class", $context) ? $context["phpk_class"] : (function () {
                        throw new RuntimeError('Variable "phpk_class" does not exist.', 66, $this->source);
                    })()) . " phpk-flash-message")]);
                echo "
        ";
            } elseif ((            // line 67
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 67, $this->source);
                })()) == "information")) {
                // line 68
                echo "            ";
                $context["__internal_389cd9ff494f56a45bdf55e9e68226570e8476fe814be24e7d5d760d3223ed28"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 68);
                // line 69
                echo "            ";
                echo $context["__internal_389cd9ff494f56a45bdf55e9e68226570e8476fe814be24e7d5d760d3223ed28"]->macro_information(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 69, $this->source);
                })()), "message", []), "class" => ((isset($context["phpk_class"]) || array_key_exists("phpk_class", $context) ? $context["phpk_class"] : (function () {
                        throw new RuntimeError('Variable "phpk_class" does not exist.', 69, $this->source);
                    })()) . " phpk-flash-info")]);
                echo "
        ";
            } else {
                // line 71
                echo "            ";
                $context["__internal_7092498610fc8084eae4b4007846132ba25d59c01b81830d08f5ffd8fa95e837"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 71);
                // line 72
                echo "            ";
                echo $context["__internal_7092498610fc8084eae4b4007846132ba25d59c01b81830d08f5ffd8fa95e837"]->macro_information(["message" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 72, $this->source);
                })()), "message", []), "class" => ((isset($context["phpk_class"]) || array_key_exists("phpk_class", $context) ? $context["phpk_class"] : (function () {
                        throw new RuntimeError('Variable "phpk_class" does not exist.', 72, $this->source);
                    })()) . " phpk-flash-message")]);
                echo "
        ";
            }
            // line 74
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
    public function macro_attente($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attente"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attente"));

            // line 78
            echo "    ";
            ob_start();
            // line 79
            echo "        <p ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 79, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"zone-attente\">
            <img alt=\"";
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 80, $this->source);
                })()), "title", []), "html", null, true);
            }
            echo "\" title=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 80, $this->source);
                })()), "title", []), "html", null, true);
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/phpktemplate/biblicnam/images/zoneMessage/roue-tempo.gif"), "html", null, true);
            echo "\" width=\"22\" height=\"22\">
            ";
            // line 82
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 82, $this->source);
            })()), "message", []);
            echo "
            ";
            // line 84
            echo "        </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_progress($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress"));

            // line 89
            echo "    ";
            ob_start();
            // line 90
            echo "        <p ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 90, $this->source);
                })()), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"zone-attente\">
            <img alt=\"";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 91, $this->source);
                })()), "title", []), "html", null, true);
            }
            echo "\" title=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 91, $this->source);
                })()), "title", []), "html", null, true);
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/phpktemplate/biblicnam/images/zoneMessage/barre-progress-rapide.gif"), "html", null, true);
            echo "\" width=\"200\" height=\"15\">
            ";
            // line 93
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 93, $this->source);
            })()), "message", []);
            echo "
            ";
            // line 95
            echo "        </p>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 99
    public function macro_consultation($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "consultation"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "consultation"));

            // line 100
            echo "    ";
            ob_start();
            // line 101
            echo "
        ";
            // line 102
            if (twig_test_iterable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 102, $this->source);
            })()))) {
                // line 103
                echo "            ";
                $context["args"] = twig_array_merge(["titre" => "", "fils" => [], "messages" => []],                 // line 105
                    (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 105, $this->source);
                    })()));
                // line 106
                echo "        ";
            }
            // line 107
            echo "
        ";
            // line 109
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 109, $this->source);
                })()), "titre", []) != "")) {
                // line 110
                echo "            <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 110, $this->source);
                })()), "titre", []), "html", null, true);
                echo "</h1>
        ";
            }
            // line 112
            echo "
        ";
            // line 114
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "messages", [], "any", true, true)) {
                // line 115
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 115, $this->source);
                })()), "messages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 116
                    echo "                ";
                    $context["__internal_64742093775bc909bf7bd2597d3dc199a241e1ffbbe194235b6c327dd330160f"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 116);
                    // line 117
                    echo "                ";
                    echo $context["__internal_64742093775bc909bf7bd2597d3dc199a241e1ffbbe194235b6c327dd330160f"]->macro_message($context["message"]);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "        ";
            }
            // line 120
            echo "
        ";
            // line 122
            echo "        <div class=\"section clear consultation\">
            ";
            // line 123
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 123, $this->source);
                })()), "fils", [])) > 0)) {
                // line 124
                echo "
                ";
                // line 125
                $context["i"] = 0;
                // line 126
                echo "
                ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 127, $this->source);
                })()), "fils", []));
                foreach ($context['_seq'] as $context["_key"] => $context["fils"]) {
                    // line 128
                    echo "
                    ";
                    // line 130
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["fils"], "type", []) == "bloc")) {
                        // line 131
                        echo "
                        ";
                        // line 132
                        $context["bloc"] = $context["fils"];
                        // line 133
                        echo "
                        ";
                        // line 134
                        if (twig_test_iterable((isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                            throw new RuntimeError('Variable "bloc" does not exist.', 134, $this->source);
                        })()))) {
                            // line 135
                            echo "                            ";
                            $context["bloc"] = twig_array_merge(["titre" => "", "fils" => [], "colonnes" => 1, "separateur" => true], (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                throw new RuntimeError('Variable "bloc" does not exist.', 135, $this->source);
                            })()));
                            // line 136
                            echo "                        ";
                        }
                        // line 137
                        echo "
                        ";
                        // line 138
                        $context["nb_donnees"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                            throw new RuntimeError('Variable "bloc" does not exist.', 138, $this->source);
                        })()), "fils", []));
                        // line 139
                        echo "                        ";
                        $context["nb_donnees_bloc"] = twig_round(((isset($context["nb_donnees"]) || array_key_exists("nb_donnees", $context) ? $context["nb_donnees"] : (function () {
                                throw new RuntimeError('Variable "nb_donnees" does not exist.', 139, $this->source);
                            })()) / twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                throw new RuntimeError('Variable "bloc" does not exist.', 139, $this->source);
                            })()), "colonnes", [])), 0, "ceil");
                        // line 140
                        echo "                        ";
                        $context["i_donnee"] = 0;
                        // line 141
                        echo "
                        ";
                        // line 143
                        echo "                        ";
                        $context["visible"] = false;
                        // line 144
                        echo "                        ";
                        $context["enable"] = false;
                        // line 145
                        echo "
                        ";
                        // line 146
                        if ((twig_get_attribute($this->env, $this->source, ($context["bloc"] ?? null), "habilitations", [], "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 146, $this->source);
                                })()), "habilitations", [])) > 0))) {
                            // line 147
                            echo "
                            ";
                            // line 148
                            $context["habilitations"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bloc"] ?? null), "habilitations", [], "any", false, true), "services", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                throw new RuntimeError('Variable "bloc" does not exist.', 148, $this->source);
                            })()), "habilitations", []), "services", [])) : (twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                throw new RuntimeError('Variable "bloc" does not exist.', 148, $this->source);
                            })()), "habilitations", [])));
                            // line 149
                            echo "
                            ";
                            // line 151
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bloc"] ?? null), "habilitations", [], "any", false, true), "visible", [], "any", true, true)) {
                                // line 152
                                echo "                                ";
                                $context["visible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 152, $this->source);
                                })()), "habilitations", []), "visible", []);
                                // line 153
                                echo "                            ";
                            }
                            // line 154
                            echo "
                            ";
                            // line 155
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () {
                                throw new RuntimeError('Variable "habilitations" does not exist.', 155, $this->source);
                            })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                                // line 156
                                echo "
                                ";
                                // line 157
                                if (((!(isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                            throw new RuntimeError('Variable "enable" does not exist.', 157, $this->source);
                                        })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                        throw new RuntimeError('Variable "app" does not exist.', 157, $this->source);
                                    })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                                    // line 158
                                    echo "                                    ";
                                    $context["visible"] = true;
                                    // line 159
                                    echo "                                    ";
                                    $context["enable"] = true;
                                    // line 160
                                    echo "                                ";
                                }
                                // line 161
                                echo "
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 163
                            echo "
                        ";
                        } else {
                            // line 165
                            echo "                            ";
                            $context["visible"] = true;
                            // line 166
                            echo "                            ";
                            $context["enable"] = true;
                            // line 167
                            echo "                        ";
                        }
                        // line 168
                        echo "
                        ";
                        // line 169
                        if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
                            throw new RuntimeError('Variable "visible" does not exist.', 169, $this->source);
                        })())) {
                            // line 170
                            echo "
                            ";
                            // line 172
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 172, $this->source);
                                })()), "titre", []) != "")) {
                                // line 173
                                echo "                                <h2>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 173, $this->source);
                                })()), "titre", []), "html", null, true);
                                echo "
                                ";
                                // line 174
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bloc"] ?? null), "titreOptions", [], "any", false, true), "aide", [], "array", true, true)) {
                                    // line 175
                                    echo "                                <span class=\"zone_champ_saisie\">
                                    <a class=\"aide\"
                                       title=\"Cliquez pour obtenir de l'aide\"
                                       data-title=\"Aide\"
                                       data-aide=\"";
                                    // line 179
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                        throw new RuntimeError('Variable "bloc" does not exist.', 179, $this->source);
                                    })()), "titreOptions", []), "aide", [], "array"), "html", null, true);
                                    echo "\"></a>
                                </span>
                                ";
                                }
                                // line 182
                                echo "                                </h2>
                            ";
                            }
                            // line 184
                            echo "
                            ";
                            // line 185
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                throw new RuntimeError('Variable "bloc" does not exist.', 185, $this->source);
                            })()), "colonnes", [])));
                            foreach ($context['_seq'] as $context["_key"] => $context["colonne"]) {
                                // line 186
                                echo "                                <div class=\"col";
                                echo twig_escape_filter($this->env, $context["colonne"], "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 186, $this->source);
                                })()), "colonnes", []), "html", null, true);
                                echo "\">

                                    ";
                                // line 188
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nb_donnees_bloc"]) || array_key_exists("nb_donnees_bloc", $context) ? $context["nb_donnees_bloc"] : (function () {
                                        throw new RuntimeError('Variable "nb_donnees_bloc" does not exist.', 188, $this->source);
                                    })()) - 1)));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    // line 189
                                    echo "
                                        ";
                                    // line 191
                                    echo "                                        ";
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bloc"] ?? null), "fils", [], "any", false, true), (isset($context["i_donnee"]) || array_key_exists("i_donnee", $context) ? $context["i_donnee"] : (function () {
                                        throw new RuntimeError('Variable "i_donnee" does not exist.', 191, $this->source);
                                    })()), [], "array", true, true)) {
                                        // line 192
                                        echo "
                                            ";
                                        // line 193
                                        $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                            throw new RuntimeError('Variable "bloc" does not exist.', 193, $this->source);
                                        })()), "fils", []), (isset($context["i_donnee"]) || array_key_exists("i_donnee", $context) ? $context["i_donnee"] : (function () {
                                            throw new RuntimeError('Variable "i_donnee" does not exist.', 193, $this->source);
                                        })()), [], "array");
                                        // line 194
                                        echo "
                                            ";
                                        // line 196
                                        echo "                                            ";
                                        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () {
                                                throw new RuntimeError('Variable "item" does not exist.', 196, $this->source);
                                            })()), "type", []) == "separateur")) {
                                            // line 197
                                            echo "                                                ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "libelle", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () {
                                                        throw new RuntimeError('Variable "item" does not exist.', 197, $this->source);
                                                    })()), "libelle", []) != ""))) {
                                                // line 198
                                                echo "                                                    <h4>";
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () {
                                                    throw new RuntimeError('Variable "item" does not exist.', 198, $this->source);
                                                })()), "libelle", []), "html", null, true);
                                                echo "</h4>
                                                ";
                                            } else {
                                                // line 200
                                                echo "                                                    <hr />
                                                ";
                                            }
                                            // line 202
                                            echo "                                            ";
                                            // line 203
                                            echo "                                            ";
                                        } else {
                                            // line 204
                                            echo "                                                ";
                                            $context["__internal_14c56aaa521119c4b71758a53f4a8b3111afa96c5cf10668c3c90ba6e568edc3"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 204);
                                            // line 205
                                            echo "                                                ";
                                            echo $context["__internal_14c56aaa521119c4b71758a53f4a8b3111afa96c5cf10668c3c90ba6e568edc3"]->macro_contenu((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () {
                                                throw new RuntimeError('Variable "item" does not exist.', 205, $this->source);
                                            })()), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", []), "defaut")) : ("defaut")));
                                            echo "
                                            ";
                                        }
                                        // line 207
                                        echo "
                                        ";
                                    } else {
                                        // line 209
                                        echo "                                            <div class=\"ligne\">&nbsp;</div>
                                        ";
                                    }
                                    // line 211
                                    echo "
                                        ";
                                    // line 212
                                    $context["i_donnee"] = ((isset($context["i_donnee"]) || array_key_exists("i_donnee", $context) ? $context["i_donnee"] : (function () {
                                            throw new RuntimeError('Variable "i_donnee" does not exist.', 212, $this->source);
                                        })()) + 1);
                                    // line 213
                                    echo "
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 215
                                echo "
                                </div>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colonne'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 218
                            echo "
                            <div style=\"clear:both\"></div>

                            ";
                            // line 221
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["bloc"]) || array_key_exists("bloc", $context) ? $context["bloc"] : (function () {
                                    throw new RuntimeError('Variable "bloc" does not exist.', 221, $this->source);
                                })()), "colonnes", []) > 1)) {
                                echo "&nbsp;";
                            }
                            // line 222
                            echo "
                            ";
                            // line 223
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () {
                                    throw new RuntimeError('Variable "i" does not exist.', 223, $this->source);
                                })()) + 1);
                            // line 224
                            echo "
                        ";
                        }
                        // line 226
                        echo "
                    ";
                        // line 228
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["fils"], "type", []) == "separateur")) {
                        // line 229
                        echo "
                        ";
                        // line 230
                        if ((twig_get_attribute($this->env, $this->source, $context["fils"], "libelle", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, $context["fils"], "libelle", []) != ""))) {
                            // line 231
                            echo "                            <h4>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fils"], "libelle", []), "html", null, true);
                            echo "</h4>
                        ";
                        } else {
                            // line 233
                            echo "                            <hr />
                        ";
                        }
                        // line 235
                        echo "
                    ";
                    }
                    // line 237
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fils'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                echo "
            ";
            }
            // line 241
            echo "
            ";
            // line 243
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "boutons", [], "any", true, true)) {
                // line 244
                echo "                ";
                $context["__internal_45554645ad81c3eddc59cf658395aa32706358b6c87daba7c2ed453368a9bac7"] = $this->loadTemplate("PHPKTemplateBundle:macro:bouton.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 244);
                // line 245
                echo "                ";
                echo $context["__internal_45554645ad81c3eddc59cf658395aa32706358b6c87daba7c2ed453368a9bac7"]->macro_boutons(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 245, $this->source);
                })()), "boutons", []));
                echo "
            ";
            }
            // line 247
            echo "
        </div>

    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 253
    public function macro_contenu($__args__ = null, $__decorator__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "decorator" => $__decorator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "contenu"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "contenu"));

            // line 254
            echo "    ";
            ob_start();
            // line 255
            echo "
        ";
            // line 256
            if (twig_test_iterable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 256, $this->source);
            })()))) {
                // line 257
                echo "            ";
                $context["args"] = twig_array_merge(["libelle" => "", "valeur" => "", "title" => "", "raw" => false],                 // line 260
                    (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 260, $this->source);
                    })()));
                // line 261
                echo "        ";
            }
            // line 262
            echo "
        ";
            // line 264
            echo "        ";
            $context["visible"] = false;
            // line 265
            echo "        ";
            $context["enable"] = false;
            // line 266
            echo "
        ";
            // line 267
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 267, $this->source);
                    })()), "habilitations", [])) > 0))) {
                // line 268
                echo "
            ";
                // line 269
                $context["habilitations"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", false, true), "services", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 269, $this->source);
                })()), "habilitations", []), "services", [])) : (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 269, $this->source);
                })()), "habilitations", [])));
                // line 270
                echo "
            ";
                // line 272
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "habilitations", [], "any", false, true), "visible", [], "any", true, true)) {
                    // line 273
                    echo "                ";
                    $context["visible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 273, $this->source);
                    })()), "habilitations", []), "visible", []);
                    // line 274
                    echo "            ";
                }
                // line 275
                echo "
            ";
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) || array_key_exists("habilitations", $context) ? $context["habilitations"] : (function () {
                    throw new RuntimeError('Variable "habilitations" does not exist.', 276, $this->source);
                })()));
                foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
                    // line 277
                    echo "
                ";
                    // line 278
                    if (((!(isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                throw new RuntimeError('Variable "enable" does not exist.', 278, $this->source);
                            })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "granted", [], "any", true, true)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                            throw new RuntimeError('Variable "app" does not exist.', 278, $this->source);
                        })()), "user", []), "granted", [0 => $context["habilitation"]], "method"))) {
                        // line 279
                        echo "                    ";
                        $context["visible"] = true;
                        // line 280
                        echo "                    ";
                        $context["enable"] = true;
                        // line 281
                        echo "                ";
                    }
                    // line 282
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "
        ";
            } else {
                // line 286
                echo "            ";
                $context["visible"] = true;
                // line 287
                echo "            ";
                $context["enable"] = true;
                // line 288
                echo "        ";
            }
            // line 289
            echo "
        ";
            // line 290
            if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
                throw new RuntimeError('Variable "visible" does not exist.', 290, $this->source);
            })())) {
                // line 291
                echo "
            ";
                // line 292
                if ((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                    throw new RuntimeError('Variable "enable" does not exist.', 292, $this->source);
                })())) {
                    // line 293
                    echo "
                ";
                    // line 294
                    if (((((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                    throw new RuntimeError('Variable "decorator" does not exist.', 294, $this->source);
                                })()) == "defaut") || ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                    throw new RuntimeError('Variable "decorator" does not exist.', 294, $this->source);
                                })()) == "shortdate")) || ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                                throw new RuntimeError('Variable "decorator" does not exist.', 294, $this->source);
                            })()) == "longdate"))) {
                        // line 295
                        echo "                    <div class=\"ligne\">
                        <span class=\"libelle\">";
                        // line 296
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 296, $this->source);
                        })()), "libelle", []), "html", null, true);
                        echo " : </span>
                        ";
                        // line 297
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", false, true), "raw", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                    throw new RuntimeError('Variable "args" does not exist.', 297, $this->source);
                                })()), "options", []), "raw", []) == true))) {
                            // line 298
                            echo "                            <span class=\"valeur raw\">";
                            echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 298, $this->source);
                            })()), "valeur", []));
                            echo "</span>
                        ";
                        } else {
                            // line 300
                            echo "                            <span class=\"valeur\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 300, $this->source);
                            })()), "valeur", []), "html", null, true);
                            echo "</span>
                        ";
                        }
                        // line 302
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", false, true), "aide", [], "any", true, true)) {
                            // line 303
                            echo "                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"";
                            // line 307
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 307, $this->source);
                            })()), "options", []), "aide", []), "html", null, true);
                            echo "\"></a>
                            </span>
                        ";
                        }
                        // line 310
                        echo "                    </div>
                ";
                    } elseif ((                    // line 311
                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                            throw new RuntimeError('Variable "decorator" does not exist.', 311, $this->source);
                        })()) == "lien")) {
                        // line 312
                        echo "                    ";
                        $context["__internal_1f93ffd81ba93ab03efcaa8b01117f5768bc148c9e9ea6e2e37759336c3b807a"] = $this->loadTemplate("PHPKTemplateBundle:macro:liens.html.twig", "PHPKTemplateBundle:macro:zone.html.twig", 312);
                        // line 313
                        echo "
                    ";
                        // line 314
                        $context["lien"] = twig_array_merge(["text" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 314, $this->source);
                        })()), "valeur", []), "title" => twig_get_attribute($this->env, $this->source,                         // line 315
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 315, $this->source);
                            })()), "title", []), "tabindex" => "", "image" => "", "url" => twig_get_attribute($this->env, $this->source,                         // line 318
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 318, $this->source);
                            })()), "valeur", []), "class" => ((!twig_test_empty(twig_get_attribute($this->env, $this->source,                         // line 319
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 319, $this->source);
                            })()), "title", []))) ? ("infobulle") : ("")), "disabled" => (                        // line 320
                            (isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () {
                                throw new RuntimeError('Variable "enable" does not exist.', 320, $this->source);
                            })()) == false), "id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("a_"), "javascript" => ""], twig_get_attribute($this->env, $this->source,                         // line 322
                            (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 322, $this->source);
                            })()), "options", []));
                        // line 323
                        echo "
                    <div class=\"ligne\">
                        <span class=\"libelle\">";
                        // line 325
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 325, $this->source);
                        })()), "libelle", []), "html", null, true);
                        echo " : </span>
                        <span class=\"valeur\">
                            ";
                        // line 327
                        echo $context["__internal_1f93ffd81ba93ab03efcaa8b01117f5768bc148c9e9ea6e2e37759336c3b807a"]->macro_a((isset($context["lien"]) || array_key_exists("lien", $context) ? $context["lien"] : (function () {
                            throw new RuntimeError('Variable "lien" does not exist.', 327, $this->source);
                        })()));
                        echo "
                        </span>
                        ";
                        // line 329
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", false, true), "aide", [], "any", true, true)) {
                            // line 330
                            echo "                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"";
                            // line 334
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 334, $this->source);
                            })()), "options", []), "aide", []), "html", null, true);
                            echo "\"></a>
                            </span>
                        ";
                        }
                        // line 337
                        echo "                    </div>
                ";
                    } elseif ((                    // line 338
                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                            throw new RuntimeError('Variable "decorator" does not exist.', 338, $this->source);
                        })()) == "paragraphe")) {
                        // line 339
                        echo "                    <p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 339, $this->source);
                        })()), "valeur", []), "html", null, true);
                        echo "</p>
                ";
                    } elseif ((                    // line 340
                        (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () {
                            throw new RuntimeError('Variable "decorator" does not exist.', 340, $this->source);
                        })()) == "couleur")) {
                        // line 341
                        echo "                    <div class=\"ligne\">
                        <span class=\"libelle\">";
                        // line 342
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 342, $this->source);
                        })()), "libelle", []), "html", null, true);
                        echo " : </span>
                        <span class=\"valeur phpk_consultation_couleur\"
                              title=\"";
                        // line 344
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 344, $this->source);
                        })()), "valeur", []), "html", null, true);
                        echo "\"
                              style=\"background-color:";
                        // line 345
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 345, $this->source);
                        })()), "valeur", []), "html", null, true);
                        echo "\">
                            &nbsp;
                        </span>
                        ";
                        // line 348
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", false, true), "aide", [], "any", true, true)) {
                            // line 349
                            echo "                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"";
                            // line 353
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 353, $this->source);
                            })()), "options", []), "aide", []), "html", null, true);
                            echo "\"></a>
                            </span>
                        ";
                        }
                        // line 356
                        echo "                    </div>
                ";
                    }
                    // line 358
                    echo "
            ";
                } else {
                    // line 360
                    echo "                <div class=\"ligne\">
                    <span class=\"libelle\">";
                    // line 361
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 361, $this->source);
                    })()), "libelle", []), "html", null, true);
                    echo " : </span>
                    <span class=\"valeur\">-</span>
                    ";
                    // line 363
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "options", [], "any", false, true), "aide", [], "any", true, true)) {
                        // line 364
                        echo "                        <span class=\"zone_champ_saisie\">
                            <a class=\"aide\"
                               title=\"Cliquez pour obtenir de l'aide\"
                               data-title=\"Aide\"
                               data-aide=\"";
                        // line 368
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 368, $this->source);
                        })()), "options", []), "aide", []), "html", null, true);
                        echo "\"></a>
                        </span>
                    ";
                    }
                    // line 371
                    echo "                </div>
            ";
                }
                // line 373
                echo "
        ";
            }
            // line 375
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
        return "PHPKTemplateBundle:macro:zone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(1253 => 375, 1249 => 373, 1245 => 371, 1239 => 368, 1233 => 364, 1231 => 363, 1226 => 361, 1223 => 360, 1219 => 358, 1215 => 356, 1209 => 353, 1203 => 349, 1201 => 348, 1195 => 345, 1191 => 344, 1186 => 342, 1183 => 341, 1181 => 340, 1176 => 339, 1174 => 338, 1171 => 337, 1165 => 334, 1159 => 330, 1157 => 329, 1152 => 327, 1147 => 325, 1143 => 323, 1141 => 322, 1140 => 320, 1139 => 319, 1138 => 318, 1137 => 315, 1136 => 314, 1133 => 313, 1130 => 312, 1128 => 311, 1125 => 310, 1119 => 307, 1113 => 303, 1110 => 302, 1104 => 300, 1098 => 298, 1096 => 297, 1092 => 296, 1089 => 295, 1087 => 294, 1084 => 293, 1082 => 292, 1079 => 291, 1077 => 290, 1074 => 289, 1071 => 288, 1068 => 287, 1065 => 286, 1061 => 284, 1054 => 282, 1051 => 281, 1048 => 280, 1045 => 279, 1043 => 278, 1040 => 277, 1036 => 276, 1033 => 275, 1030 => 274, 1027 => 273, 1024 => 272, 1021 => 270, 1019 => 269, 1016 => 268, 1014 => 267, 1011 => 266, 1008 => 265, 1005 => 264, 1002 => 262, 999 => 261, 997 => 260, 995 => 257, 993 => 256, 990 => 255, 987 => 254, 968 => 253, 949 => 247, 943 => 245, 940 => 244, 937 => 243, 934 => 241, 930 => 239, 923 => 237, 919 => 235, 915 => 233, 909 => 231, 907 => 230, 904 => 229, 901 => 228, 898 => 226, 894 => 224, 892 => 223, 889 => 222, 885 => 221, 880 => 218, 872 => 215, 865 => 213, 863 => 212, 860 => 211, 856 => 209, 852 => 207, 846 => 205, 843 => 204, 840 => 203, 838 => 202, 834 => 200, 828 => 198, 825 => 197, 822 => 196, 819 => 194, 817 => 193, 814 => 192, 811 => 191, 808 => 189, 804 => 188, 796 => 186, 792 => 185, 789 => 184, 785 => 182, 779 => 179, 773 => 175, 771 => 174, 766 => 173, 763 => 172, 760 => 170, 758 => 169, 755 => 168, 752 => 167, 749 => 166, 746 => 165, 742 => 163, 735 => 161, 732 => 160, 729 => 159, 726 => 158, 724 => 157, 721 => 156, 717 => 155, 714 => 154, 711 => 153, 708 => 152, 705 => 151, 702 => 149, 700 => 148, 697 => 147, 695 => 146, 692 => 145, 689 => 144, 686 => 143, 683 => 141, 680 => 140, 677 => 139, 675 => 138, 672 => 137, 669 => 136, 666 => 135, 664 => 134, 661 => 133, 659 => 132, 656 => 131, 653 => 130, 650 => 128, 646 => 127, 643 => 126, 641 => 125, 638 => 124, 636 => 123, 633 => 122, 630 => 120, 627 => 119, 618 => 117, 615 => 116, 610 => 115, 607 => 114, 604 => 112, 598 => 110, 595 => 109, 592 => 107, 589 => 106, 587 => 105, 585 => 103, 583 => 102, 580 => 101, 577 => 100, 559 => 99, 542 => 95, 537 => 93, 525 => 91, 516 => 90, 513 => 89, 495 => 88, 478 => 84, 473 => 82, 461 => 80, 452 => 79, 449 => 78, 431 => 77, 415 => 74, 409 => 72, 406 => 71, 400 => 69, 397 => 68, 395 => 67, 390 => 66, 387 => 65, 385 => 64, 380 => 63, 377 => 62, 374 => 61, 372 => 60, 369 => 59, 366 => 58, 363 => 57, 345 => 56, 328 => 52, 323 => 50, 309 => 48, 306 => 47, 288 => 46, 271 => 42, 266 => 40, 252 => 38, 249 => 37, 231 => 36, 214 => 32, 209 => 30, 195 => 28, 192 => 27, 174 => 26, 158 => 23, 152 => 21, 149 => 20, 143 => 18, 140 => 17, 138 => 16, 133 => 15, 130 => 14, 128 => 13, 123 => 12, 120 => 11, 118 => 10, 113 => 9, 110 => 8, 108 => 7, 103 => 6, 100 => 5, 97 => 4, 94 => 3, 91 => 2, 73 => 1, 62 => 252, 59 => 98, 56 => 87, 53 => 76, 50 => 55, 47 => 45, 44 => 35, 41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro message(args) %}
    {% set type = args.type|default('information') %}
    {% spaceless %}
        {% if type == \"error\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import error %}
            {{ error({\"message\": args.message}) }}
        {% elseif type == \"success\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import success %}
            {{ success({\"message\": args.message}) }}
        {% elseif type == \"information\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import information %}
            {{ information({\"message\": args.message}) }}
        {% elseif type == \"attente\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import attente %}
            {{ attente({\"message\": args.message}) }}
        {% elseif type == \"progression\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import progress %}
            {{ progress({\"message\": args.message}) }}
        {% else %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import information %}
            {{ information({\"message\": args.message}) }}
        {% endif %}
    {% endspaceless %}
{% endmacro %}

{% macro information(args) %}
    {% spaceless %}
        <p {% if args.id is defined %}id=\"{{ args.id }}\"{% endif %} class=\"zone-info{% if args.class is defined %} {{ args.class }}{% endif %}\">
            {% autoescape false %}
                {{ args.message|raw }}
            {% endautoescape %}
        </p>
    {% endspaceless %}
{% endmacro %}

{% macro success(args) %}
    {% spaceless %}
        <p {% if args.id is defined %}id=\"{{ args.id }}\"{% endif %} class=\"zone-message{% if args.class is defined %} {{ args.class }}{% endif %}\">
            {% autoescape false %}
                {{ args.message|raw }}
            {% endautoescape %}
        </p>
    {% endspaceless %}
{% endmacro %}

{% macro error(args) %}
    {% spaceless %}
        <p {% if args.id is defined %}id=\"{{ args.id }}\"{% endif %} class=\"zone-alerte{% if args.class is defined %} {{ args.class }}{% endif %}\">
            {% autoescape false %}
                {{ args.message|raw }}
            {% endautoescape %}
        </p>
    {% endspaceless %}
{% endmacro %}

{% macro flash(args) %}
    {% set type = args.type|default('success') %}
    {% set phpk_class = ( args.fade is defined and args.fade == \"true\" ) ? 'phpk-flash-fade' : 'phpk-flash' %}

    {% spaceless %}
        {% if type == \"error\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import error %}
            {{ error({\"message\": args.message , \"class\": phpk_class ~ \" phpk-flash-alerte\" }) }}
        {% elseif type == \"success\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import success %}
            {{ success({\"message\": args.message , \"class\": phpk_class ~ \" phpk-flash-message\"}) }}
        {% elseif type == \"information\" %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import information %}
            {{ information({\"message\": args.message , \"class\": phpk_class ~ \" phpk-flash-info\"}) }}
        {% else %}
            {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import information %}
            {{ information({\"message\": args.message , \"class\": phpk_class ~ \" phpk-flash-message\"}) }}
        {% endif %}
    {% endspaceless %}
{% endmacro %}

{% macro attente(args) %}
    {% spaceless %}
        <p {% if args.id is defined %}id=\"{{ args.id }}\"{% endif %} class=\"zone-attente\">
            <img alt=\"{% if args.title is defined %}{{ args.title }}{% endif %}\" title=\"{% if args.title is defined %}{{ args.title }}{% endif %}\" src=\"{{ asset('bundles/phpktemplate/biblicnam/images/zoneMessage/roue-tempo.gif') }}\" width=\"22\" height=\"22\">
            {% autoescape false %}
                {{ args.message|raw }}
            {% endautoescape %}
        </p>
    {% endspaceless %}
{% endmacro %}

{% macro progress(args) %}
    {% spaceless %}
        <p {% if args.id is defined %}id=\"{{ args.id }}\"{% endif %} class=\"zone-attente\">
            <img alt=\"{% if args.title is defined %}{{ args.title }}{% endif %}\" title=\"{% if args.title is defined %}{{ args.title }}{% endif %}\" src=\"{{ asset('bundles/phpktemplate/biblicnam/images/zoneMessage/barre-progress-rapide.gif') }}\" width=\"200\" height=\"15\">
            {% autoescape false %}
                {{ args.message|raw }}
            {% endautoescape %}
        </p>
    {% endspaceless %}
{% endmacro %}

{% macro consultation(args) %}
    {% spaceless %}

        {% if args is iterable %}
            {% set args = {titre:'',
                           fils:[],
                           messages: {} }|merge(args) %}
        {% endif %}

        {# Affichage du titre #}
        {% if args.titre != '' %}
            <h1>{{ args.titre }}</h1>
        {% endif %}

        {# Affichage des messages #}
        {% if args.messages is defined %}
            {% for message in args.messages %}
                {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import message %}
                {{ message(message) }}
            {% endfor %}
        {% endif %}

        {# Affichages des fils #}
        <div class=\"section clear consultation\">
            {% if args.fils|length > 0 %}

                {% set i = 0 %}

                {% for fils in args.fils %}

                    {# Dans le cas de l'affichage d'un bloc #}
                    {% if fils.type == \"bloc\" %}

                        {% set bloc = fils %}

                        {% if bloc is iterable %}
                            {% set bloc = {titre:'', fils:[], colonnes: 1, separateur: true }|merge(bloc) %}
                        {% endif %}

                        {% set nb_donnees = bloc.fils|length %}
                        {% set nb_donnees_bloc = ( nb_donnees / bloc.colonnes ) | round(0,'ceil') %}
                        {% set i_donnee = 0 %}

                        {# Gestion des habilitations #}
                        {% set visible = false %}
                        {% set enable = false %}

                        {% if bloc.habilitations is defined and bloc.habilitations|length > 0 %}

                            {% set habilitations = (bloc.habilitations.services is defined) ? bloc.habilitations.services : bloc.habilitations %}

                            {# Si l'option visible est définie. On indique si les boutons doivent toujours être affichés #}
                            {% if bloc.habilitations.visible is defined %}
                                {% set visible = bloc.habilitations.visible %}
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

                            {# Affichage du titre #}
                            {% if bloc.titre != '' %}
                                <h2>{{ bloc.titre }}
                                {% if bloc.titreOptions['aide'] is defined %}
                                <span class=\"zone_champ_saisie\">
                                    <a class=\"aide\"
                                       title=\"Cliquez pour obtenir de l'aide\"
                                       data-title=\"Aide\"
                                       data-aide=\"{{ bloc.titreOptions['aide'] }}\"></a>
                                </span>
                                {% endif %}
                                </h2>
                            {% endif %}

                            {% for colonne in 1..bloc.colonnes %}
                                <div class=\"col{{ colonne }}-{{ bloc.colonnes }}\">

                                    {% for i in 0..(nb_donnees_bloc-1) %}

                                        {# Affichage des différents fils #}
                                        {% if bloc.fils[i_donnee] is defined %}

                                            {% set item = bloc.fils[i_donnee] %}

                                            {# Séparateur #}
                                            {% if item.type == \"separateur\" %}
                                                {% if item.libelle is defined and item.libelle != \"\" %}
                                                    <h4>{{ item.libelle }}</h4>
                                                {% else %}
                                                    <hr />
                                                {% endif %}
                                            {# Affichage d'un autre type de contenu #}
                                            {% else %}
                                                {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import contenu %}
                                                {{ contenu( item , item.type|default('defaut') ) }}
                                            {% endif %}

                                        {% else %}
                                            <div class=\"ligne\">&nbsp;</div>
                                        {% endif %}

                                        {% set i_donnee = i_donnee + 1 %}

                                    {% endfor %}

                                </div>
                            {% endfor %}

                            <div style=\"clear:both\"></div>

                            {% if bloc.colonnes > 1 %}&nbsp;{% endif %}

                            {% set i = i + 1 %}

                        {% endif %}

                    {# Dans le cas de l'affichage d'un séparateur #}
                    {% elseif fils.type == \"separateur\" %}

                        {% if fils.libelle is defined and fils.libelle != \"\" %}
                            <h4>{{ fils.libelle }}</h4>
                        {% else %}
                            <hr />
                        {% endif %}

                    {% endif %}

                {% endfor %}

            {% endif %}

            {# Affichage du groupe de boutons #}
            {% if args.boutons is defined %}
                {% from \"PHPKTemplateBundle:macro:bouton.html.twig\" import boutons, bouton %}
                {{  boutons(args.boutons) }}
            {% endif %}

        </div>

    {% endspaceless %}
{% endmacro %}

{% macro contenu(args, decorator ) %}
    {% spaceless %}

        {% if args is iterable %}
            {% set args = {libelle:'',
                           valeur:'',
                           title:'',
                           raw:false }|merge(args) %}
        {% endif %}

        {# Gestion des habilitations #}
        {% set visible = false %}
        {% set enable = false %}

        {% if args.habilitations is defined and args.habilitations|length > 0 %}

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

            {% if enable %}

                {% if decorator == 'defaut' or decorator == 'shortdate' or decorator == 'longdate'  %}
                    <div class=\"ligne\">
                        <span class=\"libelle\">{{ args.libelle }} : </span>
                        {% if args.options.raw is defined and args.options.raw == true %}
                            <span class=\"valeur raw\">{{ args.valeur|raw|nl2br }}</span>
                        {% else %}
                            <span class=\"valeur\">{{ args.valeur }}</span>
                        {% endif %}
                        {% if args.options.aide is defined %}
                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"{{ args.options.aide }}\"></a>
                            </span>
                        {% endif %}
                    </div>
                {% elseif decorator == 'lien' %}
                    {% from \"PHPKTemplateBundle:macro:liens.html.twig\" import a %}

                    {% set lien = { text: args.valeur,
                                    title: args.title,
                                    tabindex: '' ,
                                    image: '',
                                    url:args.valeur,
                                    class: args.title is not empty ? 'infobulle' : '',
                                    disabled: (enable == false),
                                    id: uniqid(\"a_\"),
                                    javascript:\"\" } | merge(args.options) %}

                    <div class=\"ligne\">
                        <span class=\"libelle\">{{ args.libelle }} : </span>
                        <span class=\"valeur\">
                            {{ a(lien) }}
                        </span>
                        {% if args.options.aide is defined %}
                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"{{ args.options.aide }}\"></a>
                            </span>
                        {% endif %}
                    </div>
                {% elseif decorator == 'paragraphe' %}
                    <p>{{ args.valeur }}</p>
                {% elseif decorator == 'couleur' %}
                    <div class=\"ligne\">
                        <span class=\"libelle\">{{ args.libelle }} : </span>
                        <span class=\"valeur phpk_consultation_couleur\"
                              title=\"{{ args.valeur }}\"
                              style=\"background-color:{{ args.valeur }}\">
                            &nbsp;
                        </span>
                        {% if args.options.aide is defined %}
                            <span class=\"zone_champ_saisie\">
                                <a class=\"aide\"
                                   title=\"Cliquez pour obtenir de l'aide\"
                                   data-title=\"Aide\"
                                   data-aide=\"{{ args.options.aide }}\"></a>
                            </span>
                        {% endif %}
                    </div>
                {% endif %}

            {% else %}
                <div class=\"ligne\">
                    <span class=\"libelle\">{{ args.libelle }} : </span>
                    <span class=\"valeur\">-</span>
                    {% if args.options.aide is defined %}
                        <span class=\"zone_champ_saisie\">
                            <a class=\"aide\"
                               title=\"Cliquez pour obtenir de l'aide\"
                               data-title=\"Aide\"
                               data-aide=\"{{ args.options.aide }}\"></a>
                        </span>
                    {% endif %}
                </div>
            {% endif %}

        {% endif %}

    {% endspaceless %}
{% endmacro %}
", "PHPKTemplateBundle:macro:zone.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/zone.html.twig");
    }
}
