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

/* PHPKTemplateBundle:layout:head.html.twig */

class __TwigTemplate_110fdb947a3767e875c12c344508672e2fb3e2d1ae2c24b619162209e780322e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKTemplateBundle:layout:head.html.twig"));

        // line 1
        $context["__internal_9ba6a238ee35fdbfeab561ade2b3fd140f813bbc28fef2cafc00b58a3d9880b8"] = $this->loadTemplate("PHPKTemplateBundle::import.html.twig", "PHPKTemplateBundle:layout:head.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('head', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 8
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                throw new RuntimeError('Variable "app" does not exist.', 8, $this->source);
            })()), "request", []), "get", [0 => "_route"], "method") == "phpk_bouchon")) {
            // line 9
            echo "        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7405caa_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7405caa_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/7405caa_biblicnam-structure-sans.min_1.css");
                // line 13
                echo "        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 13, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" />
        ";
                // asset "7405caa_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7405caa_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/7405caa_main_2.css");
                echo "        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 13, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" />
        ";
            } else {
                // asset "7405caa"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7405caa") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/7405caa.css");
                echo "        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 13, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" />
        ";
            }
            unset($context["asset_url"]);
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            if (($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.menu_display") == "horizontal")) {
                // line 17
                echo "            ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "873e6ac_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_873e6ac_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/873e6ac_biblicnam-structure-h.min_1.css");
                    // line 22
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 22, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                    // asset "873e6ac_1"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_873e6ac_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/873e6ac_main_2.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 22, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                    // asset "873e6ac_2"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_873e6ac_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/873e6ac_fontawesome_3.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 22, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                } else {
                    // asset "873e6ac"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_873e6ac") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/873e6ac.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 22, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                }
                unset($context["asset_url"]);
                // line 24
                echo "
            ";
                // line 26
                echo "        ";
            } else {
                // line 27
                echo "            ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "d86c6bf_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_d86c6bf_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/d86c6bf_biblicnam-structure-v.min_1.css");
                    // line 32
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 32, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                    // asset "d86c6bf_1"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_d86c6bf_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/d86c6bf_main_2.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 32, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                    // asset "d86c6bf_2"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_d86c6bf_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/d86c6bf_fontawesome_3.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 32, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                } else {
                    // asset "d86c6bf"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_d86c6bf") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/d86c6bf.css");
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                        throw new RuntimeError('Variable "asset_url" does not exist.', 32, $this->source);
                    })()), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                }
                unset($context["asset_url"]);
                // line 34
                echo "        ";
            }
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 38
        echo "    ";
        if ($this->extensions['CNAMTS\PHPK\TemplateBundle\Twig\Extension\GetParameterExtension']->getParameter("phpk_template.hors_charte")) {
            // line 39
            echo "        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "5e11a80_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5e11a80_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/5e11a80_font-awesome_1.css");
                // line 43
                echo "        <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 43, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
                // asset "5e11a80_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5e11a80_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/5e11a80_main_2.css");
                echo "        <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 43, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
            } else {
                // asset "5e11a80"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5e11a80") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/5e11a80.css");
                echo "        <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                    throw new RuntimeError('Variable "asset_url" does not exist.', 43, $this->source);
                })()), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
            }
            unset($context["asset_url"]);
            // line 45
            echo "    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "771f35c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_771f35c_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/771f35c_impression.min_1.css");
            // line 50
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 50, $this->source);
            })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"print\" />
    ";
        } else {
            // asset "771f35c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_771f35c") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/771f35c.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 50, $this->source);
            })()), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"print\" />
    ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "

    ";
        // line 55
        echo "    ";
        $context["phpk_reset_table"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
            throw new RuntimeError('Variable "app" does not exist.', 55, $this->source);
        })()), "session", []), "flashbag", []), "get", [0 => "phpk_reset_table"], "method");
        // line 56
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["phpk_reset_table"]) || array_key_exists("phpk_reset_table", $context) ? $context["phpk_reset_table"] : (function () {
                throw new RuntimeError('Variable "phpk_reset_table" does not exist.', 56, $this->source);
            })())) > 0)) {
            // line 57
            echo "        <script type=\"text/javascript\">
            var phpk_reset_table = '";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["phpk_reset_table"]) || array_key_exists("phpk_reset_table", $context) ? $context["phpk_reset_table"] : (function () {
                throw new RuntimeError('Variable "phpk_reset_table" does not exist.', 58, $this->source);
            })()), 0, [], "array"), "html", null, true);
            echo "';
        </script>
    ";
        }
        // line 61
        echo "
    ";
        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5ebbab_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_e5ebbab_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/e5ebbab_biblicnam-standalone.min_1.js");
            // line 71
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
            // asset "e5ebbab_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_e5ebbab_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/e5ebbab_phpk_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
            // asset "e5ebbab_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_e5ebbab_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/e5ebbab_table_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
            // asset "e5ebbab_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_e5ebbab_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/e5ebbab_util_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        } else {
            // asset "e5ebbab"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_e5ebbab") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/e5ebbab.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () {
                throw new RuntimeError('Variable "asset_url" does not exist.', 71, $this->source);
            })()), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 73
        echo "
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PHPKTemplateBundle:layout:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(303 => 73, 271 => 71, 267 => 65, 263 => 64, 258 => 63, 255 => 61, 249 => 58, 246 => 57, 243 => 56, 240 => 55, 236 => 52, 222 => 50, 218 => 47, 215 => 46, 212 => 45, 192 => 43, 187 => 39, 184 => 38, 181 => 36, 178 => 35, 175 => 34, 149 => 32, 144 => 27, 141 => 26, 138 => 24, 112 => 22, 107 => 17, 104 => 16, 101 => 15, 81 => 13, 76 => 9, 73 => 8, 68 => 5, 65 => 4, 47 => 3, 44 => 2, 42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"PHPKTemplateBundle::import.html.twig\" import phpk %}

{% block head %}

    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />

    {# Chargement des fichiers CSS pour le mode bouchon #}
    {% if app.request.get('_route') == 'phpk_bouchon' %}
        {% stylesheets
                'bundles/phpktemplate/biblicnam/css/biblicnam-structure-sans.min.css' filter='cssrewrite'
                'bundles/phpktemplate/less/phpk/main.less' filter='cssrewrite'
        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
    {% else %}
        {% if getParameter('phpk_template.menu_display') == 'horizontal' %}
            {% stylesheets
                    'bundles/phpktemplate/biblicnam/css/biblicnam-structure-h.min.css' filter='cssrewrite'
                    'bundles/phpktemplate/less/phpk/main.less' filter='cssrewrite'
                    'css/fontawesome.css' filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}

            {# Chargement des fichiers CSS pour le menu horizontal #}
        {% else %}
            {% stylesheets
                    'bundles/phpktemplate/biblicnam/css/biblicnam-structure-v.min.css' filter='cssrewrite'
                    'bundles/phpktemplate/less/phpk/main.less' filter='cssrewrite'
                    'css/fontawesome.css' filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
        {% endif %}
    {% endif %}

    {# Chargement des fichiers CSS Hors charte si le mode horscharte est activé #}
    {% if getParameter('phpk_template.hors_charte') %}
        {% stylesheets
                'bundles/phpktemplate/css/font-awesome.css' filter='cssrewrite'
                'bundles/phpktemplate/less/horscharte/main.less'
        %}
        <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endstylesheets %}
    {% endif %}

    {% stylesheets
                'bundles/phpktemplate/biblicnam/css/impression.min.css' filter='cssrewrite'
    %}
    <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"print\" />
    {% endstylesheets %}


    {# Récupération du flash message provenant du TableauService, permettant le reset d'un tableau #}
    {% set phpk_reset_table = app.session.flashbag.get('phpk_reset_table') %}
    {% if phpk_reset_table|length > 0 %}
        <script type=\"text/javascript\">
            var phpk_reset_table = '{{ phpk_reset_table[0] }}';
        </script>
    {% endif %}

    {# Chargement des fichiers Javascript #}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
    {% javascripts
            '@PHPKTemplateBundle/Resources/public/biblicnam/js/biblicnam-standalone.min.js'
            '@PHPKTemplateBundle/Resources/public/js/phpk.js'
            '@PHPKCoreBundle/Resources/public/js/table.js'
            '@PHPKCoreBundle/Resources/public/js/util.js'
    %}
    <script src=\"{{ asset_url }}\" charset=\"UTF-8\"></script>
    {% endjavascripts %}

{% endblock %}
", "PHPKTemplateBundle:layout:head.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-template-bundle/Resources/views/layout/head.html.twig");
    }
}
