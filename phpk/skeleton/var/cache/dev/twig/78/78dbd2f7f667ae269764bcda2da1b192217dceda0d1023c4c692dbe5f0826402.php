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

/* PHPKTemplateBundle::import.html.twig */

class __TwigTemplate_7f8cd549d44e6d90e85caa04db3f8457b9c542de3ffd869322976db571190f58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle::import.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle::import.html.twig"));

        // line 16
        echo "
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function macro_phpk($__type__ = null, $__args__ = null, $__args2__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "args" => $__args__,
            "args2" => $__args2__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "phpk"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "phpk"));

            // line 18
            echo "
    ";
            // line 19
            if (!(null === (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 19, $this->source);
                })()))) {
                // line 20
                echo "        ";
                $context["args"] = ((twig_test_iterable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
                })()))) ? (twig_array_merge([], (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
                })()))) : ((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 20, $this->source);
                })())));
                // line 21
                echo "    ";
            } else {
                // line 22
                echo "        ";
                $context["args"] = [];
                // line 23
                echo "    ";
            }
            // line 24
            echo "
    ";
            // line 25
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 25, $this->source);
                })()) == "accordeon")) {
                // line 26
                echo "        ";
                $context["__internal_85acd43f90fcb4e2ddee1e6c887bd0fd9e1e322a4469077c68c2e74bb31e9cd6"] = $this->loadTemplate("PHPKTemplateBundle:macro:accordeon.html.twig", "PHPKTemplateBundle::import.html.twig", 26);
                // line 27
                echo "        ";
                echo $context["__internal_85acd43f90fcb4e2ddee1e6c887bd0fd9e1e322a4469077c68c2e74bb31e9cd6"]->macro_build((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 27, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 28
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 28, $this->source);
                })()) == "aide")) {
                // line 29
                echo "        ";
                $context["__internal_bb793cd4e69f50e160084e6440260ccbc6f6e06713add37cbb4c31ad4b016bde"] = $this->loadTemplate("PHPKTemplateBundle:macro:aide.html.twig", "PHPKTemplateBundle::import.html.twig", 29);
                // line 30
                echo "        ";
                echo $context["__internal_bb793cd4e69f50e160084e6440260ccbc6f6e06713add37cbb4c31ad4b016bde"]->macro_icone((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 30, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 31
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 31, $this->source);
                })()) == "ariane")) {
                // line 32
                echo "        ";
                $context["__internal_989f6cc12c236081f0ea656e093825dbad3b926a39bd9215c89cff59a379e3e8"] = $this->loadTemplate("PHPKTemplateBundle:macro:ariane.html.twig", "PHPKTemplateBundle::import.html.twig", 32);
                // line 33
                echo "        ";
                echo $context["__internal_989f6cc12c236081f0ea656e093825dbad3b926a39bd9215c89cff59a379e3e8"]->macro_build();
                echo "
    ";
            } elseif ((            // line 34
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 34, $this->source);
                })()) == "bouton")) {
                // line 35
                echo "        ";
                $context["__internal_bc2a1cba81988d4a1cda04bd782befc159809697ef01a942220130d66fee0edd"] = $this->loadTemplate("PHPKTemplateBundle:macro:bouton.html.twig", "PHPKTemplateBundle::import.html.twig", 35);
                // line 36
                echo "        ";
                echo $context["__internal_bc2a1cba81988d4a1cda04bd782befc159809697ef01a942220130d66fee0edd"]->macro_bouton((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 36, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 37
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 37, $this->source);
                })()) == "boutons")) {
                // line 38
                echo "        ";
                $context["__internal_ebb8568fae4206c4399ebf07b059fdbc6b0dbfe2c347ca544245cc8d2d7557f4"] = $this->loadTemplate("PHPKTemplateBundle:macro:bouton.html.twig", "PHPKTemplateBundle::import.html.twig", 38);
                // line 39
                echo "        ";
                echo $context["__internal_ebb8568fae4206c4399ebf07b059fdbc6b0dbfe2c347ca544245cc8d2d7557f4"]->macro_boutons((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 39, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 40
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 40, $this->source);
                })()) == "etapes")) {
                // line 41
                echo "        ";
                $context["__internal_ab98b14166e24f305d30d3dc1090c8489910107aed81a4f45ee3cd4975492599"] = $this->loadTemplate("PHPKTemplateBundle:macro:navigation.html.twig", "PHPKTemplateBundle::import.html.twig", 41);
                // line 42
                echo "        ";
                echo $context["__internal_ab98b14166e24f305d30d3dc1090c8489910107aed81a4f45ee3cd4975492599"]->macro_etapes((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 42, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 43
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 43, $this->source);
                })()) == "fenetre")) {
                // line 44
                echo "        ";
                $context["__internal_9405829e62e0154569a773780d517b1d125b54554166a5c657b29d56c1647329"] = $this->loadTemplate("PHPKTemplateBundle:macro:fenetre.html.twig", "PHPKTemplateBundle::import.html.twig", 44);
                // line 45
                echo "        ";
                echo $context["__internal_9405829e62e0154569a773780d517b1d125b54554166a5c657b29d56c1647329"]->macro_modale((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 45, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 46
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 46, $this->source);
                })()) == "fenetre_ajax")) {
                // line 47
                echo "        ";
                $context["__internal_3d452f0cd91ea86d89944699d5fd4beb29050c6a09927507c0a5c735b87a3949"] = $this->loadTemplate("PHPKTemplateBundle:macro:fenetre.html.twig", "PHPKTemplateBundle::import.html.twig", 47);
                // line 48
                echo "        ";
                echo $context["__internal_3d452f0cd91ea86d89944699d5fd4beb29050c6a09927507c0a5c735b87a3949"]->macro_modale_ajax((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 48, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 49
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 49, $this->source);
                })()) == "flash")) {
                // line 50
                echo "        ";
                $context["__internal_4e7c834fd3f7c4f6052fc65b220dbaf580774405e254a2445a7af8022354e1f1"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle::import.html.twig", 50);
                // line 51
                echo "        ";
                echo $context["__internal_4e7c834fd3f7c4f6052fc65b220dbaf580774405e254a2445a7af8022354e1f1"]->macro_flash((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 51, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 52
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 52, $this->source);
                })()) == "formulaire")) {
                // line 53
                echo "        ";
                $context["__internal_6e1609a7c33356822cca544eada3156719e5a84de79f2d8c650c417166087bd9"] = $this->loadTemplate("PHPKTemplateBundle:macro:formulaire.html.twig", "PHPKTemplateBundle::import.html.twig", 53);
                // line 54
                echo "        ";
                echo $context["__internal_6e1609a7c33356822cca544eada3156719e5a84de79f2d8c650c417166087bd9"]->macro_build((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 54, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 55
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 55, $this->source);
                })()) == "graphique")) {
                // line 56
                echo "        ";
                $context["__internal_644f0b092321176e6523f7692091ea128879f48721b969dcd9cab82498165d2a"] = $this->loadTemplate("PHPKTemplateBundle:macro:graphes.html.twig", "PHPKTemplateBundle::import.html.twig", 56);
                // line 57
                echo "        ";
                if (twig_test_iterable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 57, $this->source);
                })()))) {
                    // line 58
                    echo "            ";
                    echo $context["__internal_644f0b092321176e6523f7692091ea128879f48721b969dcd9cab82498165d2a"]->macro_graphique((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 58, $this->source);
                    })()));
                    echo "
        ";
                } else {
                    // line 60
                    echo "            ";
                    echo $context["__internal_644f0b092321176e6523f7692091ea128879f48721b969dcd9cab82498165d2a"]->macro_graphique(twig_get_attribute($this->env, $this->source, (isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 60, $this->source);
                    })()), "render", []));
                    echo "
        ";
                }
                // line 62
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 62, $this->source);
                })()) == "lien")) {
                // line 63
                echo "        ";
                $context["__internal_ed479a46473ad80bd7188d1963b66cee122a18fe3fe1a65f946cd4250f7bf777"] = $this->loadTemplate("PHPKTemplateBundle:macro:liens.html.twig", "PHPKTemplateBundle::import.html.twig", 63);
                // line 64
                echo "        ";
                echo $context["__internal_ed479a46473ad80bd7188d1963b66cee122a18fe3fe1a65f946cd4250f7bf777"]->macro_a((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 64, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 65
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 65, $this->source);
                })()) == "menu")) {
                // line 66
                echo "        ";
                $context["__internal_7130666506dbbcc2250f1183a6dc6700fba6138e15766102857ba6bbd44b4187"] = $this->loadTemplate("PHPKTemplateBundle:macro:menu.html.twig", "PHPKTemplateBundle::import.html.twig", 66);
                // line 67
                echo "        ";
                echo $context["__internal_7130666506dbbcc2250f1183a6dc6700fba6138e15766102857ba6bbd44b4187"]->macro_build((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 67, $this->source);
                })()), (isset($context["args2"]) || array_key_exists("args2", $context) ? $context["args2"] : (function () {
                    throw new RuntimeError('Variable "args2" does not exist.', 67, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 68
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 68, $this->source);
                })()) == "message")) {
                // line 69
                echo "        ";
                $context["__internal_d51860de7a7cd8d7fd494bebd3eeb990dc7473c6cb89a9878cef20b4abfc4d75"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle::import.html.twig", 69);
                // line 70
                echo "        ";
                echo $context["__internal_d51860de7a7cd8d7fd494bebd3eeb990dc7473c6cb89a9878cef20b4abfc4d75"]->macro_message((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 70, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 71
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 71, $this->source);
                })()) == "consultation")) {
                // line 72
                echo "        ";
                $context["__internal_cfeea8c93edf3631b7e244aad276d20b70ba3efd300b672607de793992577a5b"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle::import.html.twig", 72);
                // line 73
                echo "        ";
                echo $context["__internal_cfeea8c93edf3631b7e244aad276d20b70ba3efd300b672607de793992577a5b"]->macro_consultation((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 73, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 74
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 74, $this->source);
                })()) == "onglets")) {
                // line 75
                echo "        ";
                $context["__internal_d0d28fcc35415143628a90667f18db25cb9bc77edcfb198fbed1d033cea96b32"] = $this->loadTemplate("PHPKTemplateBundle:macro:navigation.html.twig", "PHPKTemplateBundle::import.html.twig", 75);
                // line 76
                echo "        ";
                echo $context["__internal_d0d28fcc35415143628a90667f18db25cb9bc77edcfb198fbed1d033cea96b32"]->macro_onglets((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                    throw new RuntimeError('Variable "args" does not exist.', 76, $this->source);
                })()));
                echo "
    ";
            } elseif ((            // line 77
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 77, $this->source);
                })()) == "interapplication")) {
                // line 78
                echo "        ";
                $context["__internal_3ae1364600e99c1540f9cb4fd1ce333069ecd3640b36491136795f54d0d91cb7"] = $this->loadTemplate("PHPKTemplateBundle:macro:interapplication.html.twig", "PHPKTemplateBundle::import.html.twig", 78);
                // line 79
                echo "        ";
                echo $context["__internal_3ae1364600e99c1540f9cb4fd1ce333069ecd3640b36491136795f54d0d91cb7"]->macro_liens();
                echo "
    ";
            } elseif ((            // line 80
                (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                    throw new RuntimeError('Variable "type" does not exist.', 80, $this->source);
                })()) == "tableau")) {
                // line 81
                echo "        ";
                $context["__internal_8b2552436fc425796283e0fcd6a8b980916e053346b76606022d3874847c9774"] = $this->loadTemplate("PHPKTemplateBundle:macro:tableau.html.twig", "PHPKTemplateBundle::import.html.twig", 81);
                // line 82
                echo "        ";
                if ((isset($context["args2"]) || array_key_exists("args2", $context))) {
                    // line 83
                    echo "        ";
                    echo $context["__internal_8b2552436fc425796283e0fcd6a8b980916e053346b76606022d3874847c9774"]->macro_build((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 83, $this->source);
                    })()), (isset($context["args2"]) || array_key_exists("args2", $context) ? $context["args2"] : (function () {
                        throw new RuntimeError('Variable "args2" does not exist.', 83, $this->source);
                    })()));
                    echo "
        ";
                } else {
                    // line 85
                    echo "        ";
                    echo $context["__internal_8b2552436fc425796283e0fcd6a8b980916e053346b76606022d3874847c9774"]->macro_build((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () {
                        throw new RuntimeError('Variable "args" does not exist.', 85, $this->source);
                    })()));
                    echo "
        ";
                }
                // line 87
                echo "    ";
            } else {
                // line 88
                echo "        ";
                $context["__internal_15d913192b0e67edbed7b4f60d47aaf856cbe222817efb85fe0d5735ba6ae929"] = $this->loadTemplate("PHPKTemplateBundle:macro:zone.html.twig", "PHPKTemplateBundle::import.html.twig", 88);
                // line 89
                echo "        ";
                echo $context["__internal_15d913192b0e67edbed7b4f60d47aaf856cbe222817efb85fe0d5735ba6ae929"]->macro_error(["message" => (("La fonction TWIG <b>" .                 // line 90
                        (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () {
                            throw new RuntimeError('Variable "type" does not exist.', 90, $this->source);
                        })())) . "</b> n'existe pas dans le PHPK. Sont gérés :
                accordeon,
                aide,
                ariane,
                bouton,
                boutons,
                etapes,
                fenetre,
                fenetre_ajax,
                flash,
                formulaire,
                graphique,
                lien,
                menu,
                message,
                onglets,
                tableau")]);
                // line 107
                echo "
    ";
            }
            // line 109
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
        return "PHPKTemplateBundle::import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(323 => 109, 319 => 107, 301 => 90, 299 => 89, 296 => 88, 293 => 87, 287 => 85, 281 => 83, 278 => 82, 275 => 81, 273 => 80, 268 => 79, 265 => 78, 263 => 77, 258 => 76, 255 => 75, 253 => 74, 248 => 73, 245 => 72, 243 => 71, 238 => 70, 235 => 69, 233 => 68, 228 => 67, 225 => 66, 223 => 65, 218 => 64, 215 => 63, 212 => 62, 206 => 60, 200 => 58, 197 => 57, 194 => 56, 192 => 55, 187 => 54, 184 => 53, 182 => 52, 177 => 51, 174 => 50, 172 => 49, 167 => 48, 164 => 47, 162 => 46, 157 => 45, 154 => 44, 152 => 43, 147 => 42, 144 => 41, 142 => 40, 137 => 39, 134 => 38, 132 => 37, 127 => 36, 124 => 35, 122 => 34, 117 => 33, 114 => 32, 112 => 31, 107 => 30, 104 => 29, 102 => 28, 97 => 27, 94 => 26, 92 => 25, 89 => 24, 86 => 23, 83 => 22, 80 => 21, 77 => 20, 75 => 19, 72 => 18, 52 => 17, 41 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{# Import des macros pour la biblicnam
{% import \"PHPKTemplateBundle:macro:bouton.html.twig\" as boutons %}
{% import \"PHPKTemplateBundle:macro:menu.html.twig\" as menu %}
{% import \"PHPKTemplateBundle:macro:ariane.html.twig\" as ariane %}
{% import \"PHPKTemplateBundle:macro:input.html.twig\" as input %}
{% import \"PHPKTemplateBundle:macro:tableau.html.twig\" as tableau %}
{% import \"PHPKTemplateBundle:macro:fenetre.html.twig\" as fenetre %}
{% import \"PHPKTemplateBundle:macro:formulaire.html.twig\" as formulaire %}
{% import \"PHPKTemplateBundle:macro:aide.html.twig\" as aide %}
{% import \"PHPKTemplateBundle:macro:accordeon.html.twig\" as accordeon %}
{% import \"PHPKTemplateBundle:macro:zone.html.twig\" as zone %}
{% import \"PHPKTemplateBundle:macro:navigation.html.twig\" as navigation %}
{% import \"PHPKTemplateBundle:macro:liens.html.twig\" as lien %}
{% import \"PHPKTemplateBundle:macro:graphes.html.twig\" as graphe %}
#}

{% macro phpk(type, args, args2) %}

    {% if args is not null %}
        {% set args = args is iterable ? {}|merge(args) : args %}
    {% else %}
        {% set args = {} %}
    {% endif %}

    {% if type == 'accordeon' %}
        {% from \"PHPKTemplateBundle:macro:accordeon.html.twig\" import build as accordeon %}
        {{ accordeon(args) }}
    {% elseif type == 'aide' %}
        {% from \"PHPKTemplateBundle:macro:aide.html.twig\" import icone as aide %}
        {{ aide(args) }}
    {% elseif type == 'ariane' %}
        {% from \"PHPKTemplateBundle:macro:ariane.html.twig\" import build as ariane %}
        {{ ariane() }}
    {% elseif type == 'bouton' %}
        {% from \"PHPKTemplateBundle:macro:bouton.html.twig\" import bouton as bouton %}
        {{ bouton(args) }}
    {% elseif type == 'boutons' %}
        {% from \"PHPKTemplateBundle:macro:bouton.html.twig\" import boutons as boutons %}
        {{ boutons(args) }}
    {% elseif type == 'etapes' %}
        {% from \"PHPKTemplateBundle:macro:navigation.html.twig\" import etapes %}
        {{ etapes(args) }}
    {% elseif type == 'fenetre' %}
        {% from \"PHPKTemplateBundle:macro:fenetre.html.twig\" import modale as fenetre %}
        {{ fenetre(args) }}
    {% elseif type == 'fenetre_ajax' %}
        {% from \"PHPKTemplateBundle:macro:fenetre.html.twig\" import modale_ajax as fenetre_ajax %}
        {{ fenetre_ajax(args) }}
    {% elseif type == 'flash' %}
        {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import flash %}
        {{ flash(args) }}
    {% elseif type == 'formulaire' %}
        {% from \"PHPKTemplateBundle:macro:formulaire.html.twig\" import build as formulaire %}
        {{ formulaire(args) }}
    {% elseif type == 'graphique' %}
        {% from \"PHPKTemplateBundle:macro:graphes.html.twig\" import graphique as graphique %}
        {% if args is iterable %}
            {{ graphique(args) }}
        {% else %}
            {{ graphique(args.render) }}
        {% endif %}
    {% elseif type == 'lien' %}
        {% from \"PHPKTemplateBundle:macro:liens.html.twig\" import a %}
        {{ a(args) }}
    {% elseif type == 'menu' %}
        {% from \"PHPKTemplateBundle:macro:menu.html.twig\" import build as menu %}
        {{ menu(args, args2) }}
    {% elseif type == 'message' %}
        {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import message %}
        {{ message(args) }}
    {% elseif type == 'consultation' %}
        {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import consultation %}
        {{ consultation(args) }}
    {% elseif type == 'onglets' %}
        {% from \"PHPKTemplateBundle:macro:navigation.html.twig\" import onglets %}
        {{ onglets(args) }}
    {% elseif type == 'interapplication' %}
        {% from \"PHPKTemplateBundle:macro:interapplication.html.twig\" import liens as interapplication %}
        {{ interapplication() }}
    {% elseif type == 'tableau' %}
        {% from \"PHPKTemplateBundle:macro:tableau.html.twig\" import build as tableau %}
        {% if args2 is defined %}
        {{ tableau(args, args2) }}
        {% else %}
        {{ tableau(args) }}
        {% endif %}
    {% else %}
        {% from \"PHPKTemplateBundle:macro:zone.html.twig\" import error as error %}
        {{ error({
            message: \"La fonction TWIG <b>\"~type~\"</b> n'existe pas dans le PHPK. Sont gérés :
                accordeon,
                aide,
                ariane,
                bouton,
                boutons,
                etapes,
                fenetre,
                fenetre_ajax,
                flash,
                formulaire,
                graphique,
                lien,
                menu,
                message,
                onglets,
                tableau\"
        }) }}
    {% endif %}

{% endmacro %}
", "PHPKTemplateBundle::import.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/import.html.twig");
    }
}
