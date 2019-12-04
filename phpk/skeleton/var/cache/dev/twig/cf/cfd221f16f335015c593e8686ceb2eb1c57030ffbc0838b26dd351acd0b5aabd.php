<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* PHPKTemplateBundle:layout:entete.html.twig */

class __TwigTemplate_19ebfd91111b58178628e56b96df587f673608e075aa6f3467891c32fe49608d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entete' => [$this, 'block_entete'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:entete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:entete.html.twig"));

        // line 1
        $context["__internal_e73524205faeb9a490f8962dca7ca6045c8852a87bfee772a84253d6071cc5e6"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "PHPKTemplateBundle:layout:entete.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["outils"] = $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.outils");
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('entete', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_entete($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 6
        echo "    <div id=\"entete\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/phpktemplate/biblicnam/images/entete/logo_cnam.png"), "html", null, true);
        echo "\"
             width=\"140\" height=\"60\" alt=\"L'assurance maladie\" class=\"logoCNAM\" />

        ";
        // line 10
        if (((((isset($context["phpk_app_indication_logo"]) || array_key_exists("phpk_app_indication_logo", $context))) ? (_twig_default_filter((isset($context["phpk_app_indication_logo"]) || array_key_exists("phpk_app_indication_logo", $context) ? $context["phpk_app_indication_logo"] : (function () {
                throw new RuntimeError('Variable "phpk_app_indication_logo" does not exist.', 10, $this->source);
            })()), "")) : ("")) != "")) {
            // line 11
            echo "            <div id=\"indication_logo\">
                ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["phpk_app_indication_logo"]) || array_key_exists("phpk_app_indication_logo", $context) ? $context["phpk_app_indication_logo"] : (function () {
                throw new RuntimeError('Variable "phpk_app_indication_logo" does not exist.', 12, $this->source);
            })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 15
        echo "
        <div class=\"nom-application\">
            <h1><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"app\">";
        echo twig_escape_filter($this->env, (isset($context["phpk_app_name"]) || array_key_exists("phpk_app_name", $context) ? $context["phpk_app_name"] : (function () {
            throw new RuntimeError('Variable "phpk_app_name" does not exist.', 17, $this->source);
        })()), "html", null, true);
        echo "</a></h1>
            <h2><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"app\">";
        echo twig_escape_filter($this->env, (isset($context["phpk_app_description"]) || array_key_exists("phpk_app_description", $context) ? $context["phpk_app_description"] : (function () {
            throw new RuntimeError('Variable "phpk_app_description" does not exist.', 18, $this->source);
        })()), "html", null, true);
        echo "</a></h2>
        </div>

        <div class=\"liens-entete\">
            <a id=\"lien-quitter\"  href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phpk_logout");
        echo "\"  class=\"btn-quitter\">Quitter</a>
            ";
        // line 23
        echo $context["__internal_e73524205faeb9a490f8962dca7ca6045c8852a87bfee772a84253d6071cc5e6"]->macro_phpk("interapplication");
        echo "
            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"lien\">Retour à l'accueil</a>
        </div>

        ";
        // line 27
        if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte")) {
            // line 28
            echo "            <ul class=\"liens-entete outils phpk-hc\">

                <li>
                    <span class=\"cnamts-zoomtexte\">
                        <span title=\"Agrandir le texte\" tabindex=\"0\" role=\"button\" class=\"zoom-agrandir\" aria-pressed=\"false\">
                            <i class=\"fa\">A</i>
                        </span>
                        <span title=\"Réduire le texte\" tabindex=\"0\" role=\"button\" class=\"zoom-reduire\" aria-pressed=\"false\">
                            <i class=\"fa\">A</i>
                        </span>
                    </span>
                    <script type=\"text/javascript\">ZoomTag.initZoomHorsCharte();</script>
                </li>
                <li>
                    <a class=\"btn\" title=\"Imprimer\" href=\"#\" id=\"lien-imprimer\">
                        <i class=\"fa fa-print\"></i>
                    </a>
                </li>
                ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "aide", [], "any", true, true)) {
                // line 47
                echo "                    <li>
                        <a id=\"lien-aide\" title=\"Aide\"
                           ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "aide", [], "any", false, true), "url", [], "any", true, true)) {
                    // line 50
                    echo "                               href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 50, $this->source);
                    })()), "aide", []), "url", []), "html", null, true);
                    echo "\"
                           ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 51
                    ($context["outils"] ?? null), "aide", [], "any", false, true), "route", [], "any", true, true)) {
                    // line 52
                    echo "                               href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 52, $this->source);
                    })()), "aide", []), "route", []));
                    echo "\"
                           ";
                }
                // line 54
                echo "                           class=\"btn\">
                            <i class=\"fa fa-question\"></i>
                        </a>
                    </li>
                ";
            }
            // line 59
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "contact", [], "any", true, true)) {
                // line 60
                echo "                    <li>
                        <a id=\"lien-contact\" title=\"Contact\"
                           ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "contact", [], "any", false, true), "url", [], "any", true, true)) {
                    // line 63
                    echo "                               href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 63, $this->source);
                    })()), "contact", []), "url", []), "html", null, true);
                    echo "\"
                           ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
                    ($context["outils"] ?? null), "contact", [], "any", false, true), "route", [], "any", true, true)) {
                    // line 65
                    echo "                               href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 65, $this->source);
                    })()), "contact", []), "route", []));
                    echo "\"
                           ";
                }
                // line 67
                echo "                           class=\"btn \">
                            <i class=\"fa fa-envelope-o\"></i>
                        </a>
                    </li>
                ";
            }
            // line 72
            echo "                <li>
                    <a class=\"btn\" id=\"lien-user-info\" title=\"Informations\">
                        <i class=\"fa fa-user\"></i>
                    </a>
                </li>
            </ul>
            <div id=\"phpk-hc-user-info\">
                ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "nom", [], "any", true, true)) {
                // line 80
                echo "                    <b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                    throw new RuntimeError('Variable "app" does not exist.', 80, $this->source);
                })()), "user", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                    throw new RuntimeError('Variable "app" does not exist.', 80, $this->source);
                })()), "user", []), "prenom", []), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                    throw new RuntimeError('Variable "app" does not exist.', 80, $this->source);
                })()), "user", []), "chrono", []), "html", null, true);
                echo ")</b>
                    ";
                // line 81
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                        throw new RuntimeError('Variable "app" does not exist.', 81, $this->source);
                    })()), "user", []), "roles", [])) > 0)) {
                    // line 82
                    echo "                        <hr />
                        <dl>
                            ";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "getSite", [], "method", true, true)) {
                        // line 85
                        echo "                                <dt>Numéro de site :</dt>
                                <dd>";
                        // line 86
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                            throw new RuntimeError('Variable "app" does not exist.', 86, $this->source);
                        })()), "user", []), "getSite", [], "method"), "html", null, true);
                        echo "</dd>
                            ";
                    }
                    // line 88
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true), "getSysteme", [], "method", true, true)) {
                        // line 89
                        echo "                                <dt>Habilitations (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                            throw new RuntimeError('Variable "app" does not exist.', 89, $this->source);
                        })()), "user", []), "getSysteme", [], "method"), "html", null, true);
                        echo ") :</dt>
                                <dd>
                                    <ul>
                                        ";
                        // line 92
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                            throw new RuntimeError('Variable "app" does not exist.', 92, $this->source);
                        })()), "user", []), "roles", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                            // line 93
                            echo "                                            <li>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "getRole", [], "method"), "html", null, true);
                            echo " :
                                                <ul>
                                                    ";
                            // line 95
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                                throw new RuntimeError('Variable "app" does not exist.', 95, $this->source);
                            })()), "user", []), "roleAttribute", [0 => twig_get_attribute($this->env, $this->source, $context["role"], "role", [])], "method"));
                            foreach ($context['_seq'] as $context["label"] => $context["attributs"]) {
                                // line 96
                                echo "                                                        <li>
                                                            <span>";
                                // line 97
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo " :</span>
                                                            ";
                                // line 98
                                if ((!twig_test_iterable($context["attributs"]) && (twig_length_filter($this->env, $context["attributs"]) > 0))) {
                                    // line 99
                                    echo "                                                                <ul>
                                                                    <li>";
                                    // line 100
                                    echo twig_escape_filter($this->env, $context["attributs"], "html", null, true);
                                    echo "</li>
                                                                </ul>
                                                            ";
                                } elseif (twig_test_iterable(                                // line 102
                                    $context["attributs"])) {
                                    // line 103
                                    echo "                                                                <ul>
                                                                    ";
                                    // line 104
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["attributs"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["attribut"]) {
                                        // line 105
                                        echo "                                                                        <li style=\"padding-bottom: 0px; padding-left: 5px;\">";
                                        echo twig_escape_filter($this->env, $context["attribut"], "html", null, true);
                                        echo "</li>
                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribut'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 107
                                    echo "                                                                </ul>
                                                            ";
                                } else {
                                    // line 109
                                    echo "                                                                <ul>
                                                                    <li>Aucun paramètre</li>
                                                                </ul>
                                                            ";
                                }
                                // line 113
                                echo "                                                        </li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['label'], $context['attributs'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "                                                </ul>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        echo "                                    </ul>
                                </dd>
                            ";
                    }
                    // line 121
                    echo "
                        </dl>
                    ";
                }
                // line 124
                echo "                ";
            } else {
                // line 125
                echo "                    <b>Non authentifié</b>
                ";
            }
            // line 127
            echo "            </div>
            <script type=\"text/javascript\">phpk_user_info();</script>
        ";
        } else {
            // line 130
            echo "            <ul class=\"liens-entete outils\">
                <li>
                    <span class=\"cnamts-zoomtexte\"></span>
                    <script type=\"text/javascript\" >ZoomTag.initZoom();</script>
                </li>

                <li>
                    <a href=\"#\" id=\"lien-imprimer\" class=\"btn imprimer\" title=\"Imprimer\"></a>
                </li>

                ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "aide", [], "any", true, true)) {
                // line 141
                echo "                    <li>
                        <a id=\"lien-aide\"
                           ";
                // line 143
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "aide", [], "any", false, true), "url", [], "any", true, true)) {
                    // line 144
                    echo "                               href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 144, $this->source);
                    })()), "aide", []), "url", []), "html", null, true);
                    echo "\"
                           ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 145
                    ($context["outils"] ?? null), "aide", [], "any", false, true), "route", [], "any", true, true)) {
                    // line 146
                    echo "                               href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 146, $this->source);
                    })()), "aide", []), "route", []));
                    echo "\"
                           ";
                }
                // line 148
                echo "                           class=\"lien dernier\">Aide</a>
                    </li>
                ";
            }
            // line 151
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "contact", [], "any", true, true)) {
                // line 152
                echo "                    <li>
                        <a id=\"lien-contact\"
                           ";
                // line 154
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["outils"] ?? null), "contact", [], "any", false, true), "url", [], "any", true, true)) {
                    // line 155
                    echo "                               href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 155, $this->source);
                    })()), "contact", []), "url", []), "html", null, true);
                    echo "\"
                           ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 156
                    ($context["outils"] ?? null), "contact", [], "any", false, true), "route", [], "any", true, true)) {
                    // line 157
                    echo "                               href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["outils"]) || array_key_exists("outils", $context) ? $context["outils"] : (function () {
                        throw new RuntimeError('Variable "outils" does not exist.', 157, $this->source);
                    })()), "contact", []), "route", []));
                    echo "\"
                           ";
                }
                // line 159
                echo "                           class=\"lien \">Contact</a>
                    </li>
                ";
            }
            // line 162
            echo "            </ul>
        ";
        }
        // line 164
        echo "
    </div>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:layout:entete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(413 => 164, 409 => 162, 404 => 159, 398 => 157, 396 => 156, 391 => 155, 389 => 154, 385 => 152, 382 => 151, 377 => 148, 371 => 146, 369 => 145, 364 => 144, 362 => 143, 358 => 141, 356 => 140, 344 => 130, 339 => 127, 335 => 125, 332 => 124, 327 => 121, 322 => 118, 314 => 115, 307 => 113, 301 => 109, 297 => 107, 288 => 105, 284 => 104, 281 => 103, 279 => 102, 274 => 100, 271 => 99, 269 => 98, 265 => 97, 262 => 96, 258 => 95, 252 => 93, 248 => 92, 241 => 89, 238 => 88, 233 => 86, 230 => 85, 228 => 84, 224 => 82, 222 => 81, 213 => 80, 211 => 79, 202 => 72, 195 => 67, 189 => 65, 187 => 64, 182 => 63, 180 => 62, 176 => 60, 173 => 59, 166 => 54, 160 => 52, 158 => 51, 153 => 50, 151 => 49, 147 => 47, 145 => 46, 125 => 28, 123 => 27, 117 => 24, 113 => 23, 109 => 22, 100 => 18, 94 => 17, 90 => 15, 84 => 12, 81 => 11, 79 => 10, 73 => 7, 70 => 6, 52 => 5, 49 => 4, 47 => 3, 44 => 2, 42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% set outils = getParameter('phpk_core.outils') %}

{% block entete %}
    <div id=\"entete\">
        <img src=\"{{ asset('bundles/phpktemplate/biblicnam/images/entete/logo_cnam.png') }}\"
             width=\"140\" height=\"60\" alt=\"L'assurance maladie\" class=\"logoCNAM\" />

        {% if phpk_app_indication_logo|default('') != '' %}
            <div id=\"indication_logo\">
                {{ phpk_app_indication_logo }}
            </div>
        {% endif %}

        <div class=\"nom-application\">
            <h1><a href=\"{{ path('app_index') }}\" class=\"app\">{{ phpk_app_name }}</a></h1>
            <h2><a href=\"{{ path('app_index') }}\" class=\"app\">{{ phpk_app_description }}</a></h2>
        </div>

        <div class=\"liens-entete\">
            <a id=\"lien-quitter\"  href=\"{{ path('phpk_logout') }}\"  class=\"btn-quitter\">Quitter</a>
            {{ phpk('interapplication') }}
            <a href=\"{{ path('app_index') }}\" class=\"lien\">Retour à l'accueil</a>
        </div>

        {% if getParameter('phpk_template.hors_charte') %}
            <ul class=\"liens-entete outils phpk-hc\">

                <li>
                    <span class=\"cnamts-zoomtexte\">
                        <span title=\"Agrandir le texte\" tabindex=\"0\" role=\"button\" class=\"zoom-agrandir\" aria-pressed=\"false\">
                            <i class=\"fa\">A</i>
                        </span>
                        <span title=\"Réduire le texte\" tabindex=\"0\" role=\"button\" class=\"zoom-reduire\" aria-pressed=\"false\">
                            <i class=\"fa\">A</i>
                        </span>
                    </span>
                    <script type=\"text/javascript\">ZoomTag.initZoomHorsCharte();</script>
                </li>
                <li>
                    <a class=\"btn\" title=\"Imprimer\" href=\"#\" id=\"lien-imprimer\">
                        <i class=\"fa fa-print\"></i>
                    </a>
                </li>
                {% if outils.aide is defined %}
                    <li>
                        <a id=\"lien-aide\" title=\"Aide\"
                           {% if outils.aide.url is defined %}
                               href=\"{{ outils.aide.url }}\"
                           {% elseif outils.aide.route is defined %}
                               href=\"{{ path(outils.aide.route) }}\"
                           {% endif %}
                           class=\"btn\">
                            <i class=\"fa fa-question\"></i>
                        </a>
                    </li>
                {% endif %}
                {% if outils.contact is defined %}
                    <li>
                        <a id=\"lien-contact\" title=\"Contact\"
                           {% if outils.contact.url is defined %}
                               href=\"{{ outils.contact.url }}\"
                           {% elseif outils.contact.route is defined %}
                               href=\"{{ path(outils.contact.route) }}\"
                           {% endif %}
                           class=\"btn \">
                            <i class=\"fa fa-envelope-o\"></i>
                        </a>
                    </li>
                {% endif %}
                <li>
                    <a class=\"btn\" id=\"lien-user-info\" title=\"Informations\">
                        <i class=\"fa fa-user\"></i>
                    </a>
                </li>
            </ul>
            <div id=\"phpk-hc-user-info\">
                {% if app.user.nom is defined %}
                    <b>{{ app.user.nom }} {{ app.user.prenom }} ({{ app.user.chrono }})</b>
                    {% if app.user.roles|length > 0 %}
                        <hr />
                        <dl>
                            {% if app.user.getSite() is defined %}
                                <dt>Numéro de site :</dt>
                                <dd>{{ app.user.getSite() }}</dd>
                            {% endif %}
                            {% if app.user.getSysteme() is defined %}
                                <dt>Habilitations ({{ app.user.getSysteme()  }}) :</dt>
                                <dd>
                                    <ul>
                                        {% for role in app.user.roles %}
                                            <li>{{ role.getRole() }} :
                                                <ul>
                                                    {% for label, attributs in app.user.roleAttribute(role.role) %}
                                                        <li>
                                                            <span>{{ label }} :</span>
                                                            {% if attributs is not iterable and attributs|length > 0 %}
                                                                <ul>
                                                                    <li>{{ attributs }}</li>
                                                                </ul>
                                                            {% elseif attributs is iterable %}
                                                                <ul>
                                                                    {% for attribut in attributs %}
                                                                        <li style=\"padding-bottom: 0px; padding-left: 5px;\">{{ attribut }}</li>
                                                                        {% endfor %}
                                                                </ul>
                                                            {% else %}
                                                                <ul>
                                                                    <li>Aucun paramètre</li>
                                                                </ul>
                                                            {% endif %}
                                                        </li>
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </dd>
                            {% endif %}

                        </dl>
                    {% endif %}
                {% else %}
                    <b>Non authentifié</b>
                {% endif %}
            </div>
            <script type=\"text/javascript\">phpk_user_info();</script>
        {% else %}
            <ul class=\"liens-entete outils\">
                <li>
                    <span class=\"cnamts-zoomtexte\"></span>
                    <script type=\"text/javascript\" >ZoomTag.initZoom();</script>
                </li>

                <li>
                    <a href=\"#\" id=\"lien-imprimer\" class=\"btn imprimer\" title=\"Imprimer\"></a>
                </li>

                {% if outils.aide is defined %}
                    <li>
                        <a id=\"lien-aide\"
                           {% if outils.aide.url is defined %}
                               href=\"{{ outils.aide.url }}\"
                           {% elseif outils.aide.route is defined %}
                               href=\"{{ path(outils.aide.route) }}\"
                           {% endif %}
                           class=\"lien dernier\">Aide</a>
                    </li>
                {% endif %}
                {% if outils.contact is defined %}
                    <li>
                        <a id=\"lien-contact\"
                           {% if outils.contact.url is defined %}
                               href=\"{{ outils.contact.url }}\"
                           {% elseif outils.contact.route is defined %}
                               href=\"{{ path(outils.contact.route) }}\"
                           {% endif %}
                           class=\"lien \">Contact</a>
                    </li>
                {% endif %}
            </ul>
        {% endif %}

    </div>
{% endblock %}", "PHPKTemplateBundle:layout:entete.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/layout/entete.html.twig");
    }
}
