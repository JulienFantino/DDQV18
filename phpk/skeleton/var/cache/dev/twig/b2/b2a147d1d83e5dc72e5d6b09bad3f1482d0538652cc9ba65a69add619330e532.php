<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;

/* PHPKTemplateBundle:macro:formulaire.html.twig */

class __TwigTemplate_c4ea04138d71a368609f404e0b22442c13e709d39586fffe3b88767b2c9eedf7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:formulaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:formulaire.html.twig"));

        // line 20
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
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

            // line 22
            echo "    ";
            $context["args"] = twig_array_merge(["formTag" => true, "inline" => false, "center" => false, "required" => false, "fieldsDisplayOnly" => [], "fieldsHide" => []],             // line 29
                (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 29, $this->source);
                })()));
            // line 30
            echo "    ";
            $context["options"] = [];
            // line 31
            echo "
    <div class=\"section\"> ";
            // line 33
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 33, $this->source);
            })()), "required", [])) {
                // line 34
                echo "            <span class=\"mention-obligatoire\"><span>*</span> Champs obligatoires</span>
        ";
            }
            // line 36
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) {
                // line 37
                echo "            <h2>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 37, $this->source);
                })()), "title", []);
                echo "
                ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "help", [], "any", true, true)) {
                    // line 39
                    echo "                    ";
                    $context["__internal_0dfe1b455070ae5bab9a136f32f78ac439864388c72b05acbb9e47f04660e384"] = $this->loadTemplate("PHPKTemplateBundle:macro:aide.html.twig", "PHPKTemplateBundle:macro:formulaire.html.twig", 39);
                    // line 40
                    echo "                    ";
                    echo $context["__internal_0dfe1b455070ae5bab9a136f32f78ac439864388c72b05acbb9e47f04660e384"]->macro_icone(["texte" => twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 40, $this->source);
                    })()), "help", [])]);
                    echo "
                ";
                }
                // line 42
                echo "            </h2>
        ";
            }
            // line 44
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "center", [], "any", true, true) && (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 44, $this->source);
                    })()), "center", []) == true))) {
                // line 45
                echo "            ";
                $context["options"] = twig_array_merge(["attr" => ["class" => "form_center"]], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 45, $this->source);
                })()));
                // line 46
                echo "        ";
            }
            // line 47
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 47, $this->source);
            })()), "formTag", [])) {
                // line 48
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                })()), "form", []), 'form_start', (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () {
                    throw new RuntimeError('Variable "options" does not exist.', 48, $this->source);
                })()));
                echo "
        ";
            }
            // line 50
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 50, $this->source);
            })()), "inline", [])) {
                echo "<div class=\"phpk_form_inline\">";
            }
            // line 51
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 51, $this->source);
            })()), "form", []), 'errors');
            echo "

            ";
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 59, $this->source);
            })()), "form", []));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 60
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "captionBefore", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "captionBefore", []), [0 => ["champ" => "", "caption" => ""]])) : ([0 => ["champ" => "", "caption" => ""]])));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 61
                    echo "                    ";
                    if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["section"], "champ", []))) {
                        // line 62
                        echo "                        <br/>
                        <h4>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "caption", []), "html", null, true);
                        echo "</h4>
                    ";
                    }
                    // line 65
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
                ";
                // line 67
                if ((($context["key"] != "boutons") && (twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                            throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
                        })()), "fieldsHide", [])) || ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                    throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
                                })()), "fieldsDisplayOnly", [])) > 0) && !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                                throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
                            })()), "fieldsDisplayOnly", [])))))) {
                    // line 68
                    echo "                    ";
                    // line 69
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true), "checked", [], "any", true, true)) {
                        // line 70
                        echo "                        <span style=\"display: none;\">";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "</span>
                    ";
                    } else {
                        // line 72
                        echo "                        <input type=\"hidden\" name=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "full_name", []), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", []), "value", []), "html", null, true);
                        echo "\" />
                    ";
                    }
                    // line 74
                    echo "                ";
                } else {
                    // line 75
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                ";
                }
                // line 77
                echo "
                ";
                // line 78
                if (twig_in_filter($context["key"], ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "separateAfter", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "separateAfter", []), [])) : ([])))) {
                    // line 79
                    echo "                    <hr class=\"separateur\">
                ";
                }
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
        ";
            // line 84
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 84, $this->source);
            })()), "formTag", [])) {
                // line 85
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 85, $this->source);
                })()), "form", []), 'form_end', ["render_rest" => false]);
                echo "
        ";
            }
            // line 87
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 87, $this->source);
            })()), "inline", [])) {
                echo "</div>";
            }
            // line 88
            echo "    </div>
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
        return "PHPKTemplateBundle:macro:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(231 => 88, 226 => 87, 220 => 85, 217 => 84, 214 => 82, 208 => 81, 204 => 79, 202 => 78, 199 => 77, 193 => 75, 190 => 74, 182 => 72, 176 => 70, 173 => 69, 171 => 68, 169 => 67, 166 => 66, 160 => 65, 155 => 63, 152 => 62, 149 => 61, 144 => 60, 139 => 59, 133 => 51, 128 => 50, 122 => 48, 119 => 47, 116 => 46, 113 => 45, 110 => 44, 106 => 42, 100 => 40, 97 => 39, 95 => 38, 90 => 37, 87 => 36, 83 => 34, 80 => 33, 77 => 31, 74 => 30, 72 => 29, 70 => 22, 52 => 21, 41 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Formulaires

    phpk('formulaire', {
        form: form, # Le formulaire
        formTag: true, # Faut-il ou non intégrer la balise <form> ?
        inline: false, # Champs affichés sur une seule ligne (true) ou bien un par ligne (false)
        title: 'chaîne', # Nom du formulaire
        center: false, # Centrage du formulaire
        required: false, # Indique si il y a des champs obligatoires ou non
        help: 'chaîne', # Texte d'aide à la saisie, affiché dans une icône d'aide
        fieldsHide: [ 'champ' ], # Tableau de champs à passer en \"hidden\"
        fieldsDisplayOnly: [ 'champ' ], # Tableau de champs à passer en \"hidden\"
        separateAfter: [ 'champ' ] # Tableau de champs après lesquels insérer un séparateur
        captionBefore: [ # Tableau de champs après lesquels insérer un titre de section
            {champ: 'nom_du_champ'},
            {caption: 'nom de la section'} ]
    })
#}

{% macro build(args) %}
    {% set args = {
        formTag: true,
        inline: false,
        center: false,
        required: false,
        fieldsDisplayOnly: {},
        fieldsHide: {}
    }|merge(args) %}
    {% set options = {} %}

    <div class=\"section\"> {# Ajout Biblicnam #}
        {% if args.required %}
            <span class=\"mention-obligatoire\"><span>*</span> Champs obligatoires</span>
        {% endif %}
        {% if args.title is defined %}
            <h2>{{ args.title|raw }}
                {% if args.help is defined %}
                    {% from \"PHPKTemplateBundle:macro:aide.html.twig\" import icone as aide %}
                    {{ aide({ 'texte': args.help }) }}
                {% endif %}
            </h2>
        {% endif %}
        {% if args.center is defined and args.center == true %}
            {% set options = {attr:{class:'form_center'}}|merge(options) %}
        {% endif %}
        {% if args.formTag %}
            {{ form_start(args.form, options) }}
        {% endif %}
        {% if args.inline %}<div class=\"phpk_form_inline\">{% endif %}
            {{ form_errors(args.form) }}

            {#
                Pour permettre d'avoir plusieurs fois un même formulaire dans une même page
                En affichant des champs différents (via args.fieldsHide ou args.fieldsDisplayOnly)
                Il faut tout de même qu'à la soumission, toutes les données soient présentes.
                Pour ce faire, on utilise des input hidden
            #}
            {% for key, field in args.form %}
                {% for section in args.captionBefore|default([{champ: '', caption: ''}]) %}
                    {% if key == section.champ %}
                        <br/>
                        <h4>{{ section.caption }}</h4>
                    {% endif %}
                {% endfor %}

                {% if key != 'boutons' and (key in args.fieldsHide or (args.fieldsDisplayOnly|length > 0 and key not in args.fieldsDisplayOnly)) %}
                    {# Cas d'une checkbox #}
                    {% if field.vars.checked is defined %}
                        <span style=\"display: none;\">{{ form_row(field) }}</span>
                    {% else %}
                        <input type=\"hidden\" name=\"{{ field.vars.full_name }}\" value=\"{{ field.vars.value }}\" />
                    {% endif %}
                {% else %}
                    {{ form_row(field) }}
                {% endif %}

                {% if key in args.separateAfter|default({}) %}
                    <hr class=\"separateur\">
                {% endif %}
            {% endfor %}

        {# Par défaut, les champs qui n'ont pas été affichés sont affichés à la fin #}
        {% if args.formTag %}
        {{ form_end(args.form, {'render_rest': false}) }}
        {% endif %}
        {% if args.inline %}</div>{% endif %}
    </div>
{% endmacro %}
", "PHPKTemplateBundle:macro:formulaire.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/formulaire.html.twig");
    }
}
