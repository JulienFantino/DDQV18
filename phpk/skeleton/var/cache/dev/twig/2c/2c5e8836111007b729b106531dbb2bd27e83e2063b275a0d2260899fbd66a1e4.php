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

/* PHPKTemplateBundle:form:template.html.twig */

class __TwigTemplate_445ef7938d0d8b2a0791225c25ec07ed489f54a98a9e57dc262ce638505939d8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "PHPKTemplateBundle:form:template.html.twig", 1);
        $this->blocks = [
            'date_widget' => [$this, 'block_date_widget'],
            'form_label' => [$this, 'block_form_label'],
            'form_row' => [$this, 'block_form_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'color_widget' => [$this, 'block_color_widget'],
            'ps_widget' => [$this, 'block_ps_widget'],
            'rpps_widget' => [$this, 'block_rpps_widget'],
            'nir_widget' => [$this, 'block_nir_widget'],
            'file_widget' => [$this, 'block_file_widget'],
            'autocompletion_widget' => [$this, 'block_autocompletion_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:form:template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:form:template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_date_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 5
        $context["input"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 5);
        // line 6
        echo "    ";
        echo $context["input"]->macro_date(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 6, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 6, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 6, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 6, $this->source);
        })()), "disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () {
            throw new RuntimeError('Variable "disabled" does not exist.', 6, $this->source);
        })()), "options" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
            throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (!((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 11, $this->source);
            })()) === false)) {
            // line 12
            echo "        ";
            // line 13
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () {
                throw new RuntimeError('Variable "label_attr" does not exist.', 13, $this->source);
            })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " w150px"))]);
            // line 14
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () {
                throw new RuntimeError('Variable "label_attr" does not exist.', 14, $this->source);
            })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                throw new RuntimeError('Variable "id" does not exist.', 14, $this->source);
            })())]);
            // line 16
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 16, $this->source);
            })()))) {
                // line 18
                if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 19
                        ($context["attr"] ?? null), "icons", [], "any", false, true), "before", [], "any", true, true))) {
                    // line 21
                    $context["label"] = "";
                    // line 22
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () {
                        throw new RuntimeError('Variable "label_attr" does not exist.', 22, $this->source);
                    })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " phpk-hc-just-icon"))]);
                } else {
                    // line 24
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () {
                        throw new RuntimeError('Variable "name" does not exist.', 24, $this->source);
                    })()));
                }
            }
            // line 28
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () {
                throw new RuntimeError('Variable "label_attr" does not exist.', 28, $this->source);
            })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 29
            if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "before", [], "any", true, true))) {
                // line 30
                echo "                <i ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "before", [], "any", false, true), "id", [], "any", true, true)) {
                    echo "id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                        throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source);
                    })()), "icons", []), "before", []), "id", []), "html", null, true);
                    echo "\"";
                }
                // line 31
                echo "                                                           class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                    throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source);
                })()), "icons", []), "before", []), "tag", []), "html", null, true);
                echo "
                                                                  ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "before", [], "any", false, true), "class", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                        throw new RuntimeError('Variable "attr" does not exist.', 32, $this->source);
                    })()), "icons", []), "before", []), "class", []), "html", null, true);
                }
                echo "\">
                </i>
            ";
            }
            // line 35
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 35, $this->source);
            })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () {
                throw new RuntimeError('Variable "translation_domain" does not exist.', 35, $this->source);
            })()));
            echo "
            ";
            // line 36
            if ((($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte") && !twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                        throw new RuntimeError('Variable "label" does not exist.', 36, $this->source);
                    })()))) && (twig_slice($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                        throw new RuntimeError('Variable "label" does not exist.', 36, $this->source);
                    })()), -1, 1) != ":"))) {
                echo ":";
            }
            // line 37
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () {
                throw new RuntimeError('Variable "required" does not exist.', 37, $this->source);
            })())) {
                // line 38
                echo "&nbsp;<span class=\"obligatoire\">*</span>";
            }
            // line 40
            echo "</label>";
        }

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, [], "array", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                    throw new RuntimeError('Variable "form" does not exist.', 50, $this->source);
                })()), "vars", []), "block_prefixes", []), 1, [], "array") == "collection_button"))) {
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                throw new RuntimeError('Variable "form" does not exist.', 51, $this->source);
            })()), 'widget');
        } else {
            // line 53
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () {
                    throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source);
                })())) > 0)) {
                // line 54
                echo "            ";
                $context["error"] = true;
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        <div class=\"ligne ";
            // line 57
            if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte")) {
                echo "phpk-hc-input-group";
            }
            echo "\">";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                throw new RuntimeError('Variable "form" does not exist.', 58, $this->source);
            })()), 'label');
            // line 59
            echo "<span class=\"zone_champ_saisie\">
                ";
            // line 60
            if ((isset($context["error"]) || array_key_exists("error", $context))) {
                echo "<b class=\"erreur_champ\">";
            }
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                throw new RuntimeError('Variable "form" does not exist.', 61, $this->source);
            })()), 'widget');
            // line 62
            if ((isset($context["error"]) || array_key_exists("error", $context))) {
                echo "</b>";
            }
            // line 63
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "aide", [], "any", true, true)) {
                // line 64
                echo "                    ";
                $context["__internal_1c35bac9cdcc41e873d4e844d9b3e7e4d6cfcbf27eeb1a400f08aeb2d02f15d4"] = $this->loadTemplate("PHPKTemplateBundle:macro:aide.html.twig", "PHPKTemplateBundle:form:template.html.twig", 64);
                // line 65
                echo "                    ";
                echo $context["__internal_1c35bac9cdcc41e873d4e844d9b3e7e4d6cfcbf27eeb1a400f08aeb2d02f15d4"]->macro_icone(["texte" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                    throw new RuntimeError('Variable "form" does not exist.', 65, $this->source);
                })()), "vars", []), "attr", []), "aide", []), "class" => "listesupp"]);
                echo "
                ";
            }
            // line 67
            echo "            </span>
            ";
            // line 68
            if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "after", [], "any", true, true))) {
                // line 69
                echo "                <label ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "after", [], "any", false, true), "id", [], "any", true, true)) {
                    echo "id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                        throw new RuntimeError('Variable "attr" does not exist.', 69, $this->source);
                    })()), "icons", []), "after", []), "id", []), "html", null, true);
                    echo "\"";
                }
                echo ">
                    <i class=\"fa fa-";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                    throw new RuntimeError('Variable "attr" does not exist.', 70, $this->source);
                })()), "icons", []), "after", []), "tag", []), "html", null, true);
                echo "
                             ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "after", [], "any", false, true), "class", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                        throw new RuntimeError('Variable "attr" does not exist.', 71, $this->source);
                    })()), "icons", []), "after", []), "class", []), "html", null, true);
                }
                // line 72
                echo "                             ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icons", [], "any", false, true), "after", [], "any", false, true), "spin", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                            throw new RuntimeError('Variable "attr" does not exist.', 72, $this->source);
                        })()), "icons", []), "after", []), "spin", []) == true))) {
                    echo "fa-spin";
                }
                // line 73
                echo "                             \"></i>
                </label>
            ";
            }
            // line 76
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "exemple", [], "any", true, true)) {
                // line 77
                echo "                <span class=\"exemple\">
                    ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "exemple_prefixe", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                        throw new RuntimeError('Variable "form" does not exist.', 78, $this->source);
                    })()), "vars", []), "attr", []), "exemple_prefixe", []), "html", null, true);
                } else {
                    echo "ex :";
                }
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                    throw new RuntimeError('Variable "form" does not exist.', 78, $this->source);
                })()), "vars", []), "attr", []), "exemple", []), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if ((isset($context["error"]) || array_key_exists("error", $context))) {
                // line 83
                echo "                <br />";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                    throw new RuntimeError('Variable "form" does not exist.', 84, $this->source);
                })()), 'errors');
            }
            // line 86
            echo "
        </div>
    ";
        }

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_form_errors($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 92
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () {
                throw new RuntimeError('Variable "errors" does not exist.', 92, $this->source);
            })())) > 0)) {
            // line 93
            echo "<span class=\"w150px\">&nbsp;</span>
        <span class=\"message_erreur\">";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () {
                throw new RuntimeError('Variable "errors" does not exist.', 95, $this->source);
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 96
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [])) > 0)) {
                    // line 97
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) > 1)) {
                        echo "<br />";
                    }
                    // line 98
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                    echo "
                ";
                } else {
                    // line 100
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                    echo "
                ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "</span>";
        }

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 109
        $context["direction"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "direction", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "direction", []), "horizontal")) : ("horizontal"));
        // line 110
        echo "
    ";
        // line 111
        ob_start();
        // line 112
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"";
        if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () {
                throw new RuntimeError('Variable "direction" does not exist.', 112, $this->source);
            })()) == "horizontal")) {
            echo "choix-nav-h";
        } else {
            echo "choix-nav-v";
        }
        echo "\">
        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 113, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 114
            echo "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () {
                    throw new RuntimeError('Variable "direction" does not exist.', 114, $this->source);
                })()) == "vertical")) {
                echo "<div>";
            }
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 116
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () {
                    throw new RuntimeError('Variable "direction" does not exist.', 116, $this->source);
                })()) == "vertical")) {
                echo "</div>";
            }
            // line 117
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 124
        echo "<input ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " type=\"checkbox\" ";
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
                throw new RuntimeError('Variable "value" does not exist.', 124, $this->source);
            })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () {
            throw new RuntimeError('Variable "checked" does not exist.', 124, $this->source);
        })())) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        // line 125
        if ((!twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "displaylabel", [], "any", true, true) || (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                    throw new RuntimeError('Variable "attr" does not exist.', 125, $this->source);
                })()), "displaylabel", []) != false))) {
            echo "<label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                throw new RuntimeError('Variable "id" does not exist.', 125, $this->source);
            })()), "html", null, true);
            echo "\" class=\"etiquette\">";
            echo(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 125, $this->source);
            })());
            echo "</label>";
        }

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        echo "<input ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " type=\"radio\" ";
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
                throw new RuntimeError('Variable "value" does not exist.', 129, $this->source);
            })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () {
            throw new RuntimeError('Variable "checked" does not exist.', 129, $this->source);
        })())) {
            echo " checked=\"checked\"";
        }
        echo " />
    <label for=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 130, $this->source);
        })()), "html", null, true);
        echo "\" class=\"etiquette\">";
        echo(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 130, $this->source);
        })());
        echo "</label>";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 135
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () {
                        throw new RuntimeError('Variable "required" does not exist.', 135, $this->source);
                    })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () {
                            throw new RuntimeError('Variable "placeholder" does not exist.', 135, $this->source);
                        })()))) && !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () {
                    throw new RuntimeError('Variable "placeholder_in_choices" does not exist.', 135, $this->source);
                })())) && !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () {
                throw new RuntimeError('Variable "multiple" does not exist.', 135, $this->source);
            })()))) {
            // line 136
            $context["required"] = false;
        }
        // line 139
        ob_start();
        // line 140
        echo "    <div class=\"zone_combo \">
        <select data-width='";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "width", [], "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                throw new RuntimeError('Variable "attr" does not exist.', 141, $this->source);
            })()), "width", []), "html", null, true);
        }
        echo "'
                data-search='";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "search", [], "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                throw new RuntimeError('Variable "attr" does not exist.', 142, $this->source);
            })()), "search", []), "html", null, true);
        }
        echo "'
                data-placeholder='";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                throw new RuntimeError('Variable "attr" does not exist.', 143, $this->source);
            })()), "placeholder", []), "html", null, true);
        }
        echo "'
                data-no_result_text='";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "no_results_text", [], "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                throw new RuntimeError('Variable "attr" does not exist.', 144, $this->source);
            })()), "no_results_text", []), "html", null, true);
        }
        echo "'
                ";
        // line 145
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () {
            throw new RuntimeError('Variable "multiple" does not exist.', 145, $this->source);
        })())) {
            echo " multiple=\"multiple\"";
        }
        echo " name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 145, $this->source);
        })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 145, $this->source);
        })()), "html", null, true);
        echo "\" style=\"display: none;\">";
        // line 146
        if (!(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () {
                throw new RuntimeError('Variable "placeholder" does not exist.', 146, $this->source);
            })()))) {
            // line 147
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () {
                    throw new RuntimeError('Variable "required" does not exist.', 147, $this->source);
                })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
                    throw new RuntimeError('Variable "value" does not exist.', 147, $this->source);
                })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () {
                throw new RuntimeError('Variable "placeholder" does not exist.', 147, $this->source);
            })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () {
                throw new RuntimeError('Variable "translation_domain" does not exist.', 147, $this->source);
            })())), "html", null, true);
            echo "</option>";
        }
        // line 149
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () {
                throw new RuntimeError('Variable "preferred_choices" does not exist.', 149, $this->source);
            })())) > 0)) {
            // line 150
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () {
                throw new RuntimeError('Variable "preferred_choices" does not exist.', 150, $this->source);
            })());
            // line 151
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 152
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () {
                        throw new RuntimeError('Variable "choices" does not exist.', 152, $this->source);
                    })())) > 0) && !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () {
                        throw new RuntimeError('Variable "separator" does not exist.', 152, $this->source);
                    })())))) {
                // line 153
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () {
                    throw new RuntimeError('Variable "separator" does not exist.', 153, $this->source);
                })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 156
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () {
            throw new RuntimeError('Variable "choices" does not exist.', 156, $this->source);
        })());
        // line 157
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 158
        echo "</select>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_color_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_widget"));

        // line 165
        echo "    ";
        $context["__internal_056df7407f89db5461ee4d7687871a4d5a2465e71d04ad16dbb8721fac0856f2"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 165);
        // line 166
        echo "
    ";
        // line 167
        $context["colors"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "colors", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "colors", []), null)) : (null));
        // line 168
        echo "
    ";
        // line 169
        echo $context["__internal_056df7407f89db5461ee4d7687871a4d5a2465e71d04ad16dbb8721fac0856f2"]->macro_color(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 169, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 169, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 169, $this->source);
        })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 169, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 169, $this->source);
        })()), "colors" => (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () {
            throw new RuntimeError('Variable "colors" does not exist.', 169, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_ps_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ps_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ps_widget"));

        // line 173
        echo "    ";
        $context["__internal_9d220894acc23d5096e8131b60d29bb4928e2a42f79efd14d974a68c529060f3"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 173);
        // line 174
        echo "    ";
        echo $context["__internal_9d220894acc23d5096e8131b60d29bb4928e2a42f79efd14d974a68c529060f3"]->macro_ps(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 174, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 174, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 174, $this->source);
        })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 174, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 174, $this->source);
        })()), "disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () {
            throw new RuntimeError('Variable "disabled" does not exist.', 174, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_rpps_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rpps_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rpps_widget"));

        // line 178
        echo "    ";
        $context["__internal_40b50666446f1e91fdcb316b298164df82b27726c89ac082030aef7c543055a9"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 178);
        // line 179
        echo "    ";
        echo $context["__internal_40b50666446f1e91fdcb316b298164df82b27726c89ac082030aef7c543055a9"]->macro_rpps(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 179, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 179, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 179, $this->source);
        })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 179, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 179, $this->source);
        })()), "disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () {
            throw new RuntimeError('Variable "disabled" does not exist.', 179, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_nir_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nir_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nir_widget"));

        // line 183
        echo "    ";
        $context["__internal_da1569513a074b4ae4a39bc3c7a82e96cff47fdc74a89ac592b8fa5645c55105"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 183);
        // line 184
        echo "    ";
        echo $context["__internal_da1569513a074b4ae4a39bc3c7a82e96cff47fdc74a89ac592b8fa5645c55105"]->macro_nir(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 184, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 184, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 184, $this->source);
        })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 184, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 184, $this->source);
        })()), "disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () {
            throw new RuntimeError('Variable "disabled" does not exist.', 184, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_file_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 188
        echo "    ";
        $context["__internal_ec2d2e4b6057a17c851d0bbcfd34722b80085a30a9fd59c65a975cb333edcecd"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 188);
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 189, $this->source);
        })()), 'widget');

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_autocompletion_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "autocompletion_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "autocompletion_widget"));

        // line 193
        echo "    ";
        $context["__internal_b391950afd965839276753737d4f158e32828d651615612af7b3de5fc678912e"] = $this->loadTemplate("PHPKTemplateBundle:macro:input.html.twig", "PHPKTemplateBundle:form:template.html.twig", 193);
        // line 194
        echo "    ";
        echo $context["__internal_b391950afd965839276753737d4f158e32828d651615612af7b3de5fc678912e"]->macro_autocompletion(["label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
            throw new RuntimeError('Variable "label" does not exist.', 194, $this->source);
        })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
            throw new RuntimeError('Variable "id" does not exist.', 194, $this->source);
        })()), "name" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () {
            throw new RuntimeError('Variable "full_name" does not exist.', 194, $this->source);
        })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 194, $this->source);
        })()), "value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
            throw new RuntimeError('Variable "value" does not exist.', 194, $this->source);
        })()), "disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () {
            throw new RuntimeError('Variable "disabled" does not exist.', 194, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:form:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(755 => 194, 752 => 193, 743 => 192, 733 => 189, 730 => 188, 721 => 187, 710 => 184, 707 => 183, 698 => 182, 687 => 179, 684 => 178, 675 => 177, 664 => 174, 661 => 173, 652 => 172, 642 => 169, 639 => 168, 637 => 167, 634 => 166, 631 => 165, 622 => 164, 609 => 158, 607 => 157, 605 => 156, 599 => 153, 597 => 152, 595 => 151, 593 => 150, 591 => 149, 582 => 147, 580 => 146, 570 => 145, 564 => 144, 558 => 143, 552 => 142, 546 => 141, 543 => 140, 541 => 139, 538 => 136, 536 => 135, 527 => 133, 514 => 130, 500 => 129, 491 => 128, 475 => 125, 461 => 124, 452 => 123, 440 => 118, 434 => 117, 430 => 116, 428 => 115, 423 => 114, 419 => 113, 408 => 112, 406 => 111, 403 => 110, 401 => 109, 392 => 107, 381 => 103, 363 => 100, 357 => 98, 352 => 97, 350 => 96, 333 => 95, 330 => 93, 328 => 92, 319 => 91, 306 => 86, 303 => 84, 301 => 83, 299 => 82, 296 => 81, 284 => 78, 281 => 77, 278 => 76, 273 => 73, 268 => 72, 264 => 71, 260 => 70, 251 => 69, 249 => 68, 246 => 67, 240 => 65, 237 => 64, 234 => 63, 230 => 62, 228 => 61, 224 => 60, 221 => 59, 219 => 58, 214 => 57, 211 => 56, 208 => 55, 205 => 54, 202 => 53, 199 => 51, 197 => 50, 188 => 48, 177 => 40, 174 => 38, 172 => 37, 168 => 36, 163 => 35, 155 => 32, 150 => 31, 143 => 30, 141 => 29, 125 => 28, 121 => 24, 117 => 22, 115 => 21, 113 => 19, 112 => 18, 110 => 16, 107 => 14, 104 => 13, 102 => 12, 100 => 11, 91 => 10, 80 => 6, 78 => 5, 69 => 4, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"form_div_layout.html.twig\" %}

{# Modifié #}
{% block date_widget -%}
    {% import \"PHPKTemplateBundle:macro:input.html.twig\" as input %}
    {{ input.date( { label: label, id: id, name: full_name, value: value, disabled: disabled, options: attr } ) }}
{%- endblock date_widget %}

{# Modifié #}
{% block form_label -%}
    {% if label is not same as(false) %}
        {# Ajout Biblicnam #}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' w150px')|trim}) %}
        {% set label_attr = label_attr|merge({'for': id}) %}

        {%- if label is empty -%}
            {# Dans le cas du style hors charte #}
            {%- if getParameter('phpk_template.hors_charte')
                and attr.icons.before is defined
              -%}
                    {% set label = '' %}
                    {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' phpk-hc-just-icon')|trim}) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}

        <label {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if getParameter('phpk_template.hors_charte') and attr.icons.before is defined %}
                <i {% if attr.icons.before.id is defined %}id=\"{{ attr.icons.before.id }}\"{% endif %}
                                                           class=\"fa fa-{{ attr.icons.before.tag }}
                                                                  {% if attr.icons.before.class is defined %}{{ attr.icons.before.class }}{% endif %}\">
                </i>
            {% endif %}
            {{ label|trans({}, translation_domain)|raw }}
            {% if getParameter('phpk_template.hors_charte') and label is not empty and label|slice(-1, 1) != \":\" %}:{% endif %}
            {%- if required -%}
                &nbsp;<span class=\"obligatoire\">*</span>
            {%- endif -%}
        </label>
    {%- endif %}
{%- endblock form_label %}

{#
    Modifié pour la gestion des erreurs
    Si erreurs, on affiche chaque ligne en mode \"tableau\" pour plus de facilité
#}
{% block form_row -%}

    {% if form.vars.block_prefixes[1] is defined and form.vars.block_prefixes[1] == 'collection_button' %}
        {{- form_widget(form) -}}
    {% else %}
        {% if errors|length > 0 %}
            {% set error = true %}
        {% endif %}

        <div class=\"ligne {% if getParameter('phpk_template.hors_charte') %}phpk-hc-input-group{% endif %}\">
            {{- form_label(form) -}}
            <span class=\"zone_champ_saisie\">
                {% if error is defined %}<b class=\"erreur_champ\">{% endif %}
                    {{- form_widget(form) -}}
                {% if error is defined %}</b>{% endif %}
                {% if form.vars.attr.aide is defined %}
                    {% from \"PHPKTemplateBundle:macro:aide.html.twig\" import icone as aide %}
                    {{ aide({ texte: form.vars.attr.aide, class: 'listesupp' }) }}
                {% endif %}
            </span>
            {% if getParameter('phpk_template.hors_charte') and attr.icons.after is defined %}
                <label {% if attr.icons.after.id is defined %}id=\"{{ attr.icons.after.id }}\"{% endif %}>
                    <i class=\"fa fa-{{ attr.icons.after.tag }}
                             {% if attr.icons.after.class is defined %}{{ attr.icons.after.class }}{% endif %}
                             {% if attr.icons.after.spin is defined and attr.icons.after.spin == true %}fa-spin{% endif %}
                             \"></i>
                </label>
            {% endif %}
            {%if form.vars.attr.exemple is defined %}
                <span class=\"exemple\">
                    {%if form.vars.attr.exemple_prefixe is defined %}{{form.vars.attr.exemple_prefixe}}{% else %}ex :{% endif %} {{ form.vars.attr.exemple }}
                </span>
            {% endif %}

            {% if error is defined %}
                <br />
                {{- form_errors(form) -}}
            {% endif %}

        </div>
    {% endif %}
{%- endblock form_row %}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        <span class=\"w150px\">&nbsp;</span>
        <span class=\"message_erreur\">
            {%- for error in errors -%}
                {% if error.messageParameters|length > 0 %}
                    {% if loop.index > 1 %}<br />{% endif %}
                    {{ error.message }}
                {% else %}
                    {{ error.message }}
                {% endif %}
            {%- endfor -%}
        </span>
    {%- endif %}
{%- endblock form_errors %}

{%- block choice_widget_expanded -%}

    {% set direction = attr.direction|default('horizontal') %}

    {% spaceless %}
        <div {{ block('widget_container_attributes') }} class=\"{% if direction == \"horizontal\" %}choix-nav-h{% else %}choix-nav-v{% endif %}\">
        {% for child in form %}
            {% if direction == \"vertical\" %}<div>{% endif %}
                {{- form_widget(child) -}}
            {% if direction == \"vertical\" %}</div>{% endif %}
        {% endfor %}
        </div>
    {% endspaceless %}

{%- endblock choice_widget_expanded -%}

{%- block checkbox_widget -%}
    <input {{ block('widget_attributes') }} type=\"checkbox\" {% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    {% if attr.displaylabel is not defined or attr.displaylabel != false %}<label for=\"{{ id }}\" class=\"etiquette\">{{ label|raw }}</label>{% endif %}
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input {{ block('widget_attributes') }} type=\"radio\" {% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    <label for=\"{{ id }}\" class=\"etiquette\">{{ label|raw }}</label>
{%- endblock radio_widget -%}

{% block choice_widget_collapsed  -%}

    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}

    {% spaceless %}
    <div class=\"zone_combo \">
        <select data-width='{% if attr.width is defined %}{{ attr.width }}{% endif %}'
                data-search='{% if attr.search is defined %}{{ attr.search }}{% endif %}'
                data-placeholder='{% if attr.placeholder is defined %}{{ attr.placeholder }}{% endif %}'
                data-no_result_text='{% if attr.no_results_text is defined %}{{ attr.no_results_text }}{% endif %}'
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} name=\"{{ full_name }}\" id=\"{{id}}\" style=\"display: none;\">
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder|trans({}, translation_domain) }}</option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </div>
    {% endspaceless %}

{%- endblock choice_widget_collapsed  %}

{% block color_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import color %}

    {% set colors = attr.colors|default(null) %}

    {{ color( { label: label, id: id, name:full_name, form: form, value: value, colors: colors } ) }}
{%- endblock color_widget %}

{% block ps_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import ps %}
    {{ ps( { label: label, id: id, name:full_name, form: form, value: value, disabled: disabled } ) }}
{%- endblock ps_widget %}

{% block rpps_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import rpps %}
    {{ rpps( { label: label, id: id, name:full_name, form: form, value: value, disabled: disabled } ) }}
{%- endblock rpps_widget %}

{% block nir_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import nir %}
    {{ nir( { label: label, id: id, name:full_name, form: form, value: value, disabled: disabled } ) }}
{%- endblock nir_widget %}

{% block file_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import file %}
    {{- form_widget(form) -}}
{%- endblock file_widget %}

{% block autocompletion_widget %}
    {% from \"PHPKTemplateBundle:macro:input.html.twig\" import autocompletion %}
    {{ autocompletion({ label: label, id: id, name:full_name, form: form, value: value, disabled: disabled }) }}
{%- endblock autocompletion_widget %}
", "PHPKTemplateBundle:form:template.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/form/template.html.twig");
    }
}
