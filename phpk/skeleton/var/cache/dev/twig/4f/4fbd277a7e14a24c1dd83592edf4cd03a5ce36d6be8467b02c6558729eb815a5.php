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

/* PHPKTemplateBundle:macro:fenetre.html.twig */

class __TwigTemplate_6fee5013a69ab20bf508744769452eb5c4bb66a40d95c8da420ea054b460b69f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:fenetre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:macro:fenetre.html.twig"));

        // line 109
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function macro_modale($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modale"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modale"));

            // line 3
            echo "
    ";
            // line 4
            $context["args"] = twig_array_merge(["id" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\UniqIdExtension']->uniqid("fenetre_modale_"), "title" => "", "center" => true], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 4, $this->source);
            })()));
            // line 5
            echo "
    <div id=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 6, $this->source);
            })()), "id", []), "html", null, true);
            echo "\" class=\"fenetre invisible\"
         ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "width", [], "any", true, true)) {
                echo " style=\"width:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 7, $this->source);
                })()), "width", []), "html", null, true);
                echo "\" ";
            }
            // line 8
            echo "         tabindex=\"0\" role=\"alert\" aria-labelledby=\"fenetre_modale_title\">
        <div class=\"fenetre-header\">
                <span id=\"fenetre_modale_title\" class=\"fenetre-title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 10, $this->source);
            })()), "title", []), "html", null, true);
            echo "</span>
                <span id=\"fenetre_modale_close\" class=\"fenetre-button\" role=\"button\">
                        <span class=\"label-close\">Fermer</span>
                </span>
        </div>

        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "form", [], "any", true, true)) {
                // line 17
                echo "            <div class=\"fenetre-content\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 17, $this->source);
                })()), "id", []), "html", null, true);
                echo "_contenu\">
                ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 18, $this->source);
                })()), "form", []), "html", null, true);
                echo "
            </div>
        ";
            } else {
                // line 21
                echo "            <div class=\"section\">
                <div class=\"fenetre-content ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 22, $this->source);
                })()), "center", [])) {
                    echo "center";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 22, $this->source);
                })()), "id", []), "html", null, true);
                echo "_contenu\">
                    ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "texte", [], "any", true, true)) {
                    // line 24
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 24, $this->source);
                    })()), "texte", []), "html", null, true);
                    echo "</p>
                    ";
                }
                // line 26
                echo "                </div>
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "boutons", [], "any", true, true)) {
                    // line 28
                    echo "                    <div class=\"zone-liens\">
                        <span class=\"barre-boutons\">
                            ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 30, $this->source);
                    })()), "boutons", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["bouton"]) {
                        // line 31
                        echo "                                ";
                        echo twig_escape_filter($this->env, $context["bouton"], "html", null, true);
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouton'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                        </span>
                    </div>
                ";
                }
                // line 36
                echo "            </div>
        ";
            }
            // line 38
            echo "    </div>
    <script type=\"text/javascript\">
        var ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 40, $this->source);
            })()), "id", []), "html", null, true);
            echo ";
        window.addEvent('domready', function(event) {
            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 42, $this->source);
            })()), "id", []), "html", null, true);
            echo " = Fenetre.initModale('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 42, $this->source);
            })()), "id", []), "html", null, true);
            echo "', {onload: false});
            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "onload", [], "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 43, $this->source);
                })()), "onload", []))) {
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 44, $this->source);
                })()), "id", []), "html", null, true);
                echo ".open();
            ";
            }
            // line 46
            echo "
            ";
            // line 47
            if (((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "noreset", [], "any", true, true) && !twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 47, $this->source);
                    })()), "noreset", [])) || !twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "noreset", [], "any", true, true))) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                })()), "id", []), "html", null, true);
                echo ".element.addEvent('close', function(event) {
                    var form = ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 49, $this->source);
                })()), "id", []), "html", null, true);
                echo ".element.getChildren('.fenetre-content').getElements('form');
                    form.each( function(f){
                        // On reinitialise les champs
                        var input = f.getElements('input,select,textarea');

                        if(input.length>0){
                            input[0].each( function(el){
                                var type_champ = el.type.toLowerCase();
                                switch (type_champ){
                                    case \"text\":
                                    case \"password\":
                                    case \"textarea\":
                                        el.set('value',null);
                                        break;
                                    case \"radio\":
                                    case \"checkbox\":
                                        el.set('checked',false);
                                        break;
                                    case \"select-one\":
                                    case \"select-multiple\":
                                        el.selectedIndex = 0;
                                        break;
                                    case \"hidden\":
                                        break;
                                    default:
                                        break;
                                }
                            });
                        }

                        // On supprime les messages d'erreur
                        var erreur = f.getElements('.erreur_champ');
                        if(erreur.length>0){
                            erreur[0].each( function(el){
                                el.removeClass('erreur_champ');
                            });
                        }
                        var msg = f.getElements('.message_erreur');
                        if(msg.length>0){
                            msg[0].each( function(el){
                                el.destroy();
                            });
                        }
                    });
                });
            ";
            }
            // line 95
            echo "
        });
        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "idOuverture", [], "any", true, true)) {
                // line 98
                echo "            \$(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 98, $this->source);
                })()), "idOuverture", []), "html", null, true);
                echo ").addEvent('click', function(event) {
                ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 99, $this->source);
                })()), "id", []), "html", null, true);
                echo ".open();
            });
        ";
            }
            // line 102
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "classOuverture", [], "any", true, true)) {
                // line 103
                echo "            \$\$('.";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 103, $this->source);
                })()), "classOuverture", []), "html", null, true);
                echo "').addEvent('click', function(event) {
                ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 104, $this->source);
                })()), "id", []), "html", null, true);
                echo ".open();
            });
        ";
            }
            // line 107
            echo "    </script>
";

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 110
    public function macro_modale_ajax($__args__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modale_ajax"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modale_ajax"));

            // line 111
            echo "    ";
            ob_start();
            // line 112
            echo "
        ";
            // line 113
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "route", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "route", []), "")) : ("")), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "param", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "path", [], "any", false, true), "param", []), [])) : ([])));
            // line 114
            echo "        ";
            $context["args"] = twig_array_merge(["content" => "", "icon" => true, "title" => ""], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 114, $this->source);
            })()));
            // line 115
            echo "
        <a class=\"modale_ajax\"
           data-url=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () {
                throw new RuntimeError('Variable "url" does not exist.', 117, $this->source);
            })()), "html", null, true);
            echo "\"
           data-title=\"";
            // line 118
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["args"] ?? null), "title", []), "")) : ("")), "html", null, true);
            echo "\"
           href=\"#\">
            ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 120, $this->source);
            })()), "icon", [])) {
                // line 121
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/phpktemplate/images/picto/picto_document.gif"), "html", null, true);
                echo "\" />
            ";
            }
            // line 123
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                throw new RuntimeError('Variable "args" does not exist.', 123, $this->source);
            })()), "content", []), "html", null, true);
            echo "
        </a>

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
        return "PHPKTemplateBundle:macro:fenetre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(343 => 123, 337 => 121, 335 => 120, 330 => 118, 326 => 117, 322 => 115, 319 => 114, 317 => 113, 314 => 112, 311 => 111, 293 => 110, 277 => 107, 271 => 104, 266 => 103, 263 => 102, 257 => 99, 252 => 98, 250 => 97, 246 => 95, 197 => 49, 192 => 48, 190 => 47, 187 => 46, 181 => 44, 179 => 43, 173 => 42, 168 => 40, 164 => 38, 160 => 36, 155 => 33, 146 => 31, 142 => 30, 138 => 28, 136 => 27, 133 => 26, 127 => 24, 125 => 23, 117 => 22, 114 => 21, 108 => 18, 103 => 17, 101 => 16, 92 => 10, 88 => 8, 82 => 7, 78 => 6, 75 => 5, 73 => 4, 70 => 3, 52 => 2, 41 => 109,);
    }

    public function getSourceContext()
    {
        return new Source("{# Création de fenêtres #}
{% macro modale(args) %}

    {% set args = {id: uniqid('fenetre_modale_'), title: '', center: true }|merge(args) %}

    <div id=\"{{ args.id }}\" class=\"fenetre invisible\"
         {% if args.width is defined %} style=\"width:{{ args.width }}\" {% endif %}
         tabindex=\"0\" role=\"alert\" aria-labelledby=\"fenetre_modale_title\">
        <div class=\"fenetre-header\">
                <span id=\"fenetre_modale_title\" class=\"fenetre-title\">{{ args.title }}</span>
                <span id=\"fenetre_modale_close\" class=\"fenetre-button\" role=\"button\">
                        <span class=\"label-close\">Fermer</span>
                </span>
        </div>

        {% if args.form is defined %}
            <div class=\"fenetre-content\" id=\"{{ args.id }}_contenu\">
                {{ args.form }}
            </div>
        {% else %}
            <div class=\"section\">
                <div class=\"fenetre-content {% if args.center %}center{% endif %}\" id=\"{{ args.id }}_contenu\">
                    {% if args.texte is defined %}
                        <p>{{ args.texte }}</p>
                    {% endif %}
                </div>
                {% if args.boutons is defined %}
                    <div class=\"zone-liens\">
                        <span class=\"barre-boutons\">
                            {% for bouton in args.boutons %}
                                {{ bouton }}
                            {% endfor %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endif %}
    </div>
    <script type=\"text/javascript\">
        var {{ args.id }};
        window.addEvent('domready', function(event) {
            {{ args.id }} = Fenetre.initModale('{{ args.id }}', {onload: false});
            {% if args.onload is defined and args.onload %}
                    {{ args.id }}.open();
            {% endif %}

            {% if (args.noreset is defined and not args.noreset) or args.noreset is not defined %}
                {{ args.id }}.element.addEvent('close', function(event) {
                    var form = {{ args.id }}.element.getChildren('.fenetre-content').getElements('form');
                    form.each( function(f){
                        // On reinitialise les champs
                        var input = f.getElements('input,select,textarea');

                        if(input.length>0){
                            input[0].each( function(el){
                                var type_champ = el.type.toLowerCase();
                                switch (type_champ){
                                    case \"text\":
                                    case \"password\":
                                    case \"textarea\":
                                        el.set('value',null);
                                        break;
                                    case \"radio\":
                                    case \"checkbox\":
                                        el.set('checked',false);
                                        break;
                                    case \"select-one\":
                                    case \"select-multiple\":
                                        el.selectedIndex = 0;
                                        break;
                                    case \"hidden\":
                                        break;
                                    default:
                                        break;
                                }
                            });
                        }

                        // On supprime les messages d'erreur
                        var erreur = f.getElements('.erreur_champ');
                        if(erreur.length>0){
                            erreur[0].each( function(el){
                                el.removeClass('erreur_champ');
                            });
                        }
                        var msg = f.getElements('.message_erreur');
                        if(msg.length>0){
                            msg[0].each( function(el){
                                el.destroy();
                            });
                        }
                    });
                });
            {% endif %}

        });
        {% if args.idOuverture is defined %}
            \$({{ args.idOuverture }}).addEvent('click', function(event) {
                {{ args.id }}.open();
            });
        {% endif %}
        {% if args.classOuverture is defined %}
            \$\$('.{{ args.classOuverture }}').addEvent('click', function(event) {
                {{ args.id }}.open();
            });
        {% endif %}
    </script>
{% endmacro %}

{% macro modale_ajax(args) %}
    {% spaceless %}

        {% set url = path( args.path.route|default(''), args.path.param|default({}) ) %}
        {% set args = { content: \"\", icon: true, title: \"\" } | merge(args) %}

        <a class=\"modale_ajax\"
           data-url=\"{{ url }}\"
           data-title=\"{{ args.title|default('') }}\"
           href=\"#\">
            {% if args.icon %}
                <img src=\"{{ asset('bundles/phpktemplate/images/picto/picto_document.gif') }}\" />
            {% endif %}
            {{ args.content }}
        </a>

    {% endspaceless %}
{% endmacro %}
", "PHPKTemplateBundle:macro:fenetre.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/macro/fenetre.html.twig");
    }
}
