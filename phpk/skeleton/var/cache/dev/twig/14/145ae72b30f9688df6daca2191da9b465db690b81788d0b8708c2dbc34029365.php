<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* PHPKTemplateBundle::layout.html.twig */

class __TwigTemplate_263d52b3f782f5b2f2aa1269798fee8ec74c2e7009db9d61d3a753c5b398be8e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'entete' => [$this, 'block_entete'],
            'ariane' => [$this, 'block_ariane'],
            'switcher' => [$this, 'block_switcher'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle::layout.html.twig"));

        // line 1
        $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "PHPKTemplateBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "        <title>
            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["phpk_app_name"]) || array_key_exists("phpk_app_name", $context) ? $context["phpk_app_name"] : (function () {
            throw new RuntimeError('Variable "phpk_app_name" does not exist.', 12, $this->source);
        })()), "html", null, true);
        echo "
            ";
        // line 13
        if (!twig_test_empty($this->renderBlock("title", $context, $blocks))) {
            // line 14
            echo "                - ";
            $this->displayBlock('title', $context, $blocks);
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </title>
    </head>
    <body>

\t<script type=\"text/javascript\">
            document.body.className = \"js \" + document.body.className;
\t</script>

\t<div id=\"global\" class=\"phpk_core_mode_accessmaster\">

            ";
        // line 26
        $this->displayBlock('entete', $context, $blocks);
        // line 29
        echo "
            ";
        // line 31
        echo "            <div id=\"corps-de-page\">

                ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 33, $this->source);
            })()), "request", []), "get", [0 => "_route"], "method") != "phpk_bouchon")) {
            // line 34
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PHPKCoreBundle:Menus:displayMenus", ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
                (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                    throw new RuntimeError('Variable "app" does not exist.', 35, $this->source);
                })()), "request", []), "get", [0 => "_route"], "method")]));
            // line 36
            echo "
                ";
        }
        // line 38
        echo "
                ";
        // line 40
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
            throw new RuntimeError('Variable "app" does not exist.', 40, $this->source);
        })()), "session", []), "flashbag", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["notificationType"] => $context["flashMessage"]) {
            // line 41
            echo "                    ";
            echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("flash", ["message" => twig_get_attribute($this->env, $this->source, $context["flashMessage"], 0, [], "array"), "type" => $context["notificationType"], "fade" => $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.notification_fadeout")]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['notificationType'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                ";
        // line 45
        echo "                ";
        $this->displayBlock('ariane', $context, $blocks);
        // line 60
        echo "
                <br />

                ";
        // line 64
        echo "                <div id=\"coeur-de-page\">
                    ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "                </div>

            </div>

            ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "
        </div>

        <script type=\"text/javascript\">
        \$('lien-imprimer').addEvent('click', function(event) {event.preventDefault();window.print();});
        ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 78, $this->source);
            })()), "request", []), "get", [0 => "_route"], "method") != "phpk_bouchon")) {
            // line 79
            echo "            window.addEvent('domready', function(event) {
                if( \$\$('#navigation ul li').length > 0){
                    MenuTag.init(\$('navigation'), {menuover: '";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.menu_hover"), "html", null, true);
            echo "'});
                }
            });
        ";
        }
        // line 85
        echo "        </script>
        ";
        // line 86
        if ($this->hasBlock("javascript", $context, $blocks)) {
            // line 87
            echo "            <script type=\"text/javascript\">";
            $this->displayBlock('javascript', $context, $blocks);
            echo "</script>
        ";
        }
        // line 89
        echo "
        ";
        // line 94
        echo "        ";
        echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("fenetre", ["id" => "phpk_modale_aide", "title" => "Aide", "center" => false, "boutons" => [0 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "fermermodale"])]]);
        // line 101
        echo "

        ";
        // line 107
        echo "        ";
        echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("fenetre", ["id" => "phpk_modale_confirm", "title" => "Confirmation", "boutons" => [0 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "fermermodale", "label" => "Annuler"]), 1 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "valider", "type" => "link", "id" => "phpk_confirm_button", "label" => "Oui"])]]);
        // line 114
        echo "

        ";
        // line 120
        echo "        ";
        echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("fenetre", ["id" => "phpk_modale_prompt", "boutons" => [0 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "fermermodale", "label" => "Annuler"]), 1 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "valider", "type" => "link", "id" => "phpk_prompt_button"])]]);
        // line 126
        echo "

        ";
        // line 131
        echo "        ";
        echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("fenetre", ["id" => "phpk_modale_ajax", "texte" => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("message", ["message" => "Chargement du contenu en cours...", "type" => "attente"]), "center" => false, "boutons" => [0 => $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("bouton", ["predefined" => "fermermodale"])]]);
        // line 138
        echo "

        ";
        // line 144
        echo "        <div class=\"infobulle cnamts-hidden\"></div>
        <script type=\"text/javascript\">
            Infobulle.init(\$\$('.infobulle'));
        </script>
    </body>
</html>
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        $this->loadTemplate("PHPKTemplateBundle:layout:meta.html.twig", "PHPKTemplateBundle::layout.html.twig", 6)->display($context);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 9
        $this->loadTemplate("PHPKTemplateBundle:layout:head.html.twig", "PHPKTemplateBundle::layout.html.twig", 9)->display($context);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_entete($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 27
        echo "                ";
        $this->loadTemplate("PHPKTemplateBundle:layout:entete.html.twig", "PHPKTemplateBundle::layout.html.twig", 27)->display($context);
        // line 28
        echo "            ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_ariane($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ariane"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ariane"));

        // line 46
        echo "                    <div class=\"fil-ariane\" role=\"navigation\">
                        ";
        // line 47
        echo $context["__internal_ee877bdf9df1cae6d75fb5b85c1fff41558c2500023765bdfd654b9aee33b3a5"]->macro_phpk("ariane");
        echo "

                        ";
        // line 49
        if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.database_switcher") || $this->hasBlock("switcher", $context, $blocks))) {
            // line 50
            echo "                            <div style=\"float: right; margin-top: -5px;\" class=\"ligne\">
                                ";
            // line 51
            $this->displayBlock('switcher', $context, $blocks);
            // line 52
            echo "                                ";
            if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_core.database_switcher")) {
                // line 53
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PHPKCoreBundle:DatabaseSwitcher:displaySwitcher"));
                echo "
                                ";
            }
            // line 55
            echo "                            </div>
                        ";
        }
        // line 57
        echo "                    </div>
                    <div class=\"clear\"></div>
                ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_switcher($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switcher"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switcher"));


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "                ";
        $this->loadTemplate("PHPKTemplateBundle:layout:footer.html.twig", "PHPKTemplateBundle::layout.html.twig", 71)->display($context);
        // line 72
        echo "            ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(409 => 87, 399 => 72, 396 => 71, 387 => 70, 370 => 65, 353 => 51, 341 => 57, 337 => 55, 331 => 53, 328 => 52, 326 => 51, 323 => 50, 321 => 49, 316 => 47, 313 => 46, 304 => 45, 294 => 28, 291 => 27, 282 => 26, 265 => 14, 255 => 9, 246 => 8, 236 => 6, 227 => 5, 211 => 144, 207 => 138, 204 => 131, 200 => 126, 197 => 120, 193 => 114, 190 => 107, 186 => 101, 183 => 94, 180 => 89, 174 => 87, 172 => 86, 169 => 85, 162 => 81, 158 => 79, 156 => 78, 149 => 73, 147 => 70, 141 => 66, 139 => 65, 136 => 64, 131 => 60, 128 => 45, 125 => 43, 116 => 41, 111 => 40, 108 => 38, 104 => 36, 102 => 35, 100 => 34, 98 => 33, 94 => 31, 91 => 29, 89 => 26, 77 => 16, 74 => 15, 71 => 14, 69 => 13, 65 => 12, 62 => 11, 59 => 8, 57 => 5, 52 => 2, 50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}
<!DOCTYPE html>
<html>
    <head>
        {% block meta %}
            {%- include 'PHPKTemplateBundle:layout:meta.html.twig' -%}
        {% endblock %}
        {% block head %}
            {%- include 'PHPKTemplateBundle:layout:head.html.twig' -%}
        {% endblock %}
        <title>
            {{ phpk_app_name }}
            {% if block('title') is not empty %}
                - {% block title %}{% endblock title %}
            {% endif %}
        </title>
    </head>
    <body>

\t<script type=\"text/javascript\">
            document.body.className = \"js \" + document.body.className;
\t</script>

\t<div id=\"global\" class=\"phpk_core_mode_accessmaster\">

            {% block entete %}
                {% include 'PHPKTemplateBundle:layout:entete.html.twig' %}
            {% endblock %}

            {# Le contenu de la page #}
            <div id=\"corps-de-page\">

                {% if app.request.get('_route') != 'phpk_bouchon' %}
                    {{ render(controller('PHPKCoreBundle:Menus:displayMenus', {
                        route: app.request.get('_route')
                    } ))  }}
                {% endif %}

                {# Gestion des flash messages / notifications #}
                {% for notificationType, flashMessage in app.session.flashbag.all() %}
                    {{ phpk('flash', {message: flashMessage[0], type: notificationType, fade: getParameter('phpk_template.notification_fadeout') }) }}
                {% endfor %}

                {# Le fil d'Ariane est géré par le PHPK #}
                {% block ariane %}
                    <div class=\"fil-ariane\" role=\"navigation\">
                        {{ phpk('ariane') }}

                        {% if getParameter('phpk_core.database_switcher') or block('switcher') is defined %}
                            <div style=\"float: right; margin-top: -5px;\" class=\"ligne\">
                                {% block switcher %}{% endblock %}
                                {% if getParameter('phpk_core.database_switcher') %}
                                    {{ render(controller('PHPKCoreBundle:DatabaseSwitcher:displaySwitcher'))  }}
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"clear\"></div>
                {% endblock %}

                <br />

                {# Contenu \"métier\" de la page #}
                <div id=\"coeur-de-page\">
                    {% block body %}{% endblock %}
                </div>

            </div>

            {% block footer %}
                {% include 'PHPKTemplateBundle:layout:footer.html.twig' %}
            {% endblock %}

        </div>

        <script type=\"text/javascript\">
        \$('lien-imprimer').addEvent('click', function(event) {event.preventDefault();window.print();});
        {% if app.request.get('_route') != 'phpk_bouchon' %}
            window.addEvent('domready', function(event) {
                if( \$\$('#navigation ul li').length > 0){
                    MenuTag.init(\$('navigation'), {menuover: '{{ getParameter('phpk_template.menu_hover') }}'});
                }
            });
        {% endif %}
        </script>
        {% if block('javascript') is defined %}
            <script type=\"text/javascript\">{% block javascript %}{% endblock %}</script>
        {% endif %}

        {#
            Fenêtre d'aide générale, utilisable partout :
            Usage : phpk('aide')
        #}
        {{ phpk('fenetre', {
            id: 'phpk_modale_aide',
            title: 'Aide',
            center: false,
            boutons: [
                phpk('bouton', { predefined:'fermermodale' })
            ]
        }) }}

        {#
            Fenêtre de confirmation générale, utilisable partout :
            Usage : fenetre.confirm()
        #}
        {{ phpk('fenetre', {
            id: 'phpk_modale_confirm',
            title: 'Confirmation',
            boutons: [
                phpk('bouton', { predefined:'fermermodale',label:'Annuler' }),
                phpk('bouton', { predefined:'valider', type: 'link', id: 'phpk_confirm_button', label: 'Oui' })
            ]
        }) }}

        {#
            Fenêtre de prompt générale, utilisable partout :
            Usage : fenetre.prompt()
        #}
        {{ phpk('fenetre', {
            id: 'phpk_modale_prompt',
            boutons: [
                phpk('bouton', { predefined:'fermermodale',label:'Annuler' }),
                phpk('bouton', { predefined:'valider', type: 'link', id: 'phpk_prompt_button' })
            ]
        }) }}

        {#
            Fenêtre modale dont le contenu est à géré en ajax
        #}
        {{ phpk('fenetre', {
            id: 'phpk_modale_ajax',
            texte: phpk(\"message\", {message:\"Chargement du contenu en cours...\", type:\"attente\"} ),
            center: false,
            boutons: [
                phpk('bouton', { predefined:'fermermodale' })
            ]
        }) }}

        {#
            Gestion des infobulle.
            Il suffit de mettre la class=\"infobulle\" sur l'élément que l'on veut détailler, et un title=\"Description\"
        #}
        <div class=\"infobulle cnamts-hidden\"></div>
        <script type=\"text/javascript\">
            Infobulle.init(\$\$('.infobulle'));
        </script>
    </body>
</html>
", "PHPKTemplateBundle::layout.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/layout.html.twig");
    }
}
