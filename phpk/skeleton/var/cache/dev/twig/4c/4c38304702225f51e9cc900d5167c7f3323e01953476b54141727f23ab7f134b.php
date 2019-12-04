<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* PHPKTemplateBundle:form:button.html.twig */

class __TwigTemplate_16587ee1d0a277e4669a735911d8b9029dd2e7a4a3c5328f0579da6fea2e464d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("PHPKTemplateBundle:form:template.html.twig", "PHPKTemplateBundle:form:button.html.twig", 1);
        $this->blocks = [
            'boutons_row' => [$this, 'block_boutons_row'],
            'bouton_row' => [$this, 'block_bouton_row'],
            'button_widget' => [$this, 'block_button_widget'],
            'button_row' => [$this, 'block_button_row'],
            'collection_button_widget' => [$this, 'block_collection_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'form_rows' => [$this, 'block_form_rows'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PHPKTemplateBundle:form:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:form:button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:form:button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_boutons_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutons_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutons_row"));

        // line 5
        $context["__internal_bc41f368f5293395fd59c05948cc367902569d609839bc7be9def37bd265155a"] = $this->loadTemplate("PHPKTemplateBundle:macro:bouton.html.twig", "PHPKTemplateBundle:form:button.html.twig", 5);
        // line 6
        echo "
    ";
        // line 7
        $context["boutons"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "boutons", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "boutons", []), [])) : ([]));
        // line 8
        echo "    ";
        $context["position"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "position", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "position", []), "bas")) : ("bas"));
        // line 9
        echo "
    ";
        // line 10
        echo $context["__internal_bc41f368f5293395fd59c05948cc367902569d609839bc7be9def37bd265155a"]->macro_boutons(["boutons" => (isset($context["boutons"]) || array_key_exists("boutons", $context) ? $context["boutons"] : (function () {
            throw new RuntimeError('Variable "boutons" does not exist.', 10, $this->source);
        })()), "position" => (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () {
            throw new RuntimeError('Variable "position" does not exist.', 10, $this->source);
        })())]);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_bouton_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bouton_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bouton_row"));

        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 14, $this->source);
        })()), 'widget');

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () {
            throw new RuntimeError('Variable "visible" does not exist.', 18, $this->source);
        })())) {
            // line 19
            echo "        <";
            echo twig_escape_filter($this->env, (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () {
                throw new RuntimeError('Variable "balise" does not exist.', 19, $this->source);
            })()), "html", null, true);
            echo "
            class=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () {
                throw new RuntimeError('Variable "class" does not exist.', 20, $this->source);
            })()), "html", null, true);
            echo "\"
            type=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                throw new RuntimeError('Variable "type" does not exist.', 21, $this->source);
            })()), "html", null, true);
            echo "\"
            id=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () {
                throw new RuntimeError('Variable "id" does not exist.', 22, $this->source);
            })()), "html", null, true);
            echo "\"
            name=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () {
                throw new RuntimeError('Variable "name" does not exist.', 23, $this->source);
            })()), "html", null, true);
            echo "\"
            ";
            // line 24
            if ((isset($context["value"]) || array_key_exists("value", $context))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () {
                    throw new RuntimeError('Variable "value" does not exist.', 24, $this->source);
                })()), "html", null, true);
                echo "\"";
            }
            // line 25
            echo "            ";
            if ((isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () {
                throw new RuntimeError('Variable "focus" does not exist.', 25, $this->source);
            })())) {
                echo " autofocus ";
            }
            // line 26
            echo "            ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">
            <span class=\"btn_";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () {
                throw new RuntimeError('Variable "etat" does not exist.', 27, $this->source);
            })()), "html", null, true);
            echo "
                ";
            // line 28
            if (((isset($context["image"]) || array_key_exists("image", $context)) && ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                        throw new RuntimeError('Variable "image" does not exist.', 28, $this->source);
                    })()) != ""))) {
                // line 29
                echo "                    ";
                if ((twig_lower_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                        throw new RuntimeError('Variable "image" does not exist.', 29, $this->source);
                    })())) == "etapesuivante")) {
                    // line 30
                    echo "                        avec_img avec_img_drt
                    ";
                } else {
                    // line 32
                    echo "                        avec_img
                    ";
                }
                // line 34
                echo "                ";
            }
            // line 35
            echo "                \">
                <span>
                    <span>
                        <span
                            ";
            // line 39
            if (((isset($context["image"]) || array_key_exists("image", $context)) && (twig_slice($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                        throw new RuntimeError('Variable "image" does not exist.', 39, $this->source);
                    })()), 0, 3) != "fa-"))) {
                // line 40
                echo "                                class=\"btn_";
                echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                    throw new RuntimeError('Variable "image" does not exist.', 40, $this->source);
                })()), "html", null, true);
                echo "\"
                            ";
            }
            // line 42
            echo "                            >";
            // line 43
            if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte") && (twig_slice($this->env,             // line 44
                        (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                            throw new RuntimeError('Variable "image" does not exist.', 44, $this->source);
                        })()), 0, 3) == "fa-"))) {
                // line 46
                echo "<i class=\"fa ";
                echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () {
                    throw new RuntimeError('Variable "image" does not exist.', 46, $this->source);
                })()), "html", null, true);
                echo "\"></i>
                            ";
            }
            // line 48
            echo "                                ";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () {
                    throw new RuntimeError('Variable "translation_domain" does not exist.', 48, $this->source);
                })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 48, $this->source);
            })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () {
                throw new RuntimeError('Variable "label" does not exist.', 48, $this->source);
            })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () {
                throw new RuntimeError('Variable "translation_domain" does not exist.', 48, $this->source);
            })())))), "html", null, true);
            echo "
                        </span>
                    </span>
                </span>
            </span>
        </";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () {
                throw new RuntimeError('Variable "balise" does not exist.', 53, $this->source);
            })()), "html", null, true);
            echo ">
    ";
        }

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_button_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 58, $this->source);
        })()), 'widget');

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_collection_button_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_button_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_button_widget"));

        // line 62
        echo "<div class=\"zone-action-";
        echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () {
            throw new RuntimeError('Variable "position" does not exist.', 62, $this->source);
        })()), "html", null, true);
        echo "\">
        <div class=\"zone-liens\">
            <span class=\"barre-boutons\">
                ";
        // line 65
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
            </span>
        </div>
    </div>";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_submit_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 72
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
            throw new RuntimeError('Variable "type" does not exist.', 72, $this->source);
        })()), "submit")) : ("submit"));
        // line 73
        $this->displayBlock("button_widget", $context, $blocks);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_reset_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 77
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
            throw new RuntimeError('Variable "type" does not exist.', 77, $this->source);
        })()), "reset")) : ("reset"));
        // line 78
        $this->displayBlock("button_widget", $context, $blocks);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_collection_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 82
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 83
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () {
                throw new RuntimeError('Variable "attr" does not exist.', 83, $this->source);
            })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () {
                throw new RuntimeError('Variable "prototype" does not exist.', 83, $this->source);
            })()), 'row')]);
        }
        // line 85
        $this->displayBlock("form_widget", $context, $blocks);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_form_rows($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rows"));

        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
            throw new RuntimeError('Variable "form" does not exist.', 89, $this->source);
        })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:form:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(358 => 90, 354 => 89, 345 => 88, 335 => 85, 332 => 83, 330 => 82, 321 => 81, 311 => 78, 309 => 77, 300 => 76, 290 => 73, 288 => 72, 279 => 71, 265 => 65, 258 => 62, 249 => 61, 239 => 58, 230 => 57, 217 => 53, 208 => 48, 202 => 46, 200 => 44, 199 => 43, 197 => 42, 191 => 40, 189 => 39, 183 => 35, 180 => 34, 176 => 32, 172 => 30, 169 => 29, 167 => 28, 163 => 27, 158 => 26, 153 => 25, 147 => 24, 143 => 23, 139 => 22, 135 => 21, 131 => 20, 126 => 19, 124 => 18, 115 => 17, 105 => 14, 96 => 13, 86 => 10, 83 => 9, 80 => 8, 78 => 7, 75 => 6, 73 => 5, 64 => 4, 27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"PHPKTemplateBundle:form:template.html.twig\" %}

{# Modifié #}
{% block boutons_row -%}
    {% from \"PHPKTemplateBundle:macro:bouton.html.twig\" import boutons %}

    {% set boutons = attr.boutons|default([]) %}
    {% set position = attr.position|default('bas') %}

    {{ boutons({boutons:boutons,position:position}) }}
{%- endblock boutons_row %}

{% block bouton_row -%}
    {{- form_widget(form) -}}
{%- endblock bouton_row %}

{%- block button_widget -%}
    {% if visible %}
        <{{ balise }}
            class=\"{{ class }}\"
            type=\"{{ type }}\"
            id=\"{{ id }}\"
            name=\"{{ name }}\"
            {% if value is defined %} value=\"{{ value }}\"{% endif %}
            {% if focus %} autofocus {% endif %}
            {{ block('button_attributes') }}>
            <span class=\"btn_{{ etat }}
                {% if image is defined and image != '' %}
                    {% if image|lower == \"etapesuivante\" %}
                        avec_img avec_img_drt
                    {% else %}
                        avec_img
                    {% endif %}
                {% endif %}
                \">
                <span>
                    <span>
                        <span
                            {% if image is defined and image|slice(0,3) != 'fa-' %}
                                class=\"btn_{{ image }}\"
                            {% endif %}
                            >
                            {%- if getParameter('phpk_template.hors_charte')
                                and image|slice(0,3) == 'fa-'
                            -%}
                            <i class=\"fa {{ image }}\"></i>
                            {% endif %}
                                {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
                        </span>
                    </span>
                </span>
            </span>
        </{{ balise }}>
    {% endif %}
{%- endblock button_widget -%}

{%- block button_row -%}
    {{- form_widget(form) -}}
{%- endblock button_row -%}

{%- block collection_button_widget -%}
    <div class=\"zone-action-{{ position }}\">
        <div class=\"zone-liens\">
            <span class=\"barre-boutons\">
                {{ block('form_widget') }}
            </span>
        </div>
    </div>
{%- endblock -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block form_rows -%}
    {%- for child in form -%}
        {{ form_row(child) }}
    {%- endfor -%}
{%- endblock form_rows -%}", "PHPKTemplateBundle:form:button.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/form/button.html.twig");
    }
}
