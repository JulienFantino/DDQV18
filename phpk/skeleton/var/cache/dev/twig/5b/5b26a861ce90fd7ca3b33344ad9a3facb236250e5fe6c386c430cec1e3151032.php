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

/* PHPKSecurityBundle::accessMaster.html.twig */

class __TwigTemplate_826e2d9a55bc3e878fef2eaaf07a26a576b50c84d2e08c1d30b0e2f01cf9e9d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKSecurityBundle::accessMaster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PHPKSecurityBundle::accessMaster.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"pragma\" content=\"no-cache\">
        <meta http-equiv=\"cache-control\" content=\"no-cache\">
        <meta http-equiv=\"expires\" content=\"0\">
        <title>Chargement de la sécurité...</title>
        <script language=\"javascript\">
            var etatComposant = null;
            var alea = 100000*(Math.random());
            var urlJS = \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["server_url"]) || array_key_exists("server_url", $context) ? $context["server_url"] : (function () {
            throw new RuntimeError('Variable "server_url" does not exist.', 12, $this->source);
        })()), "html", null, true);
        echo "testcomposant?\" + alea;

            document.write('<script language=\"javascript\" src=\"' + urlJS + '\"><\\/script>');
        </script>
    </head>

    <body>
        <form name=\"form_accessmaster_server\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["server_url"]) || array_key_exists("server_url", $context) ? $context["server_url"] : (function () {
            throw new RuntimeError('Variable "server_url" does not exist.', 19, $this->source);
        })()), "html", null, true);
        echo "secjava\" method=\"GET\">
            <input type=\"hidden\" name=\"SERVEUR\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["callback_url"]) || array_key_exists("callback_url", $context) ? $context["callback_url"] : (function () {
            throw new RuntimeError('Variable "callback_url" does not exist.', 20, $this->source);
        })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ALEA\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["alea"]) || array_key_exists("alea", $context) ? $context["alea"] : (function () {
            throw new RuntimeError('Variable "alea" does not exist.', 21, $this->source);
        })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"SYSTEM\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () {
            throw new RuntimeError('Variable "system" does not exist.', 22, $this->source);
        })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ATTRIBUTS\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () {
            throw new RuntimeError('Variable "attributes" does not exist.', 23, $this->source);
        })()), "html", null, true);
        echo "\">
        </form>
        <script language=\"javascript\">
            var url_accessmaster_server = document.form_accessmaster_server.SERVEUR;
            if (etatComposant != null) {
                url_accessmaster_server.value += etatComposant;
                document.form_accessmaster_server.submit();
            }
            else {
                document.location.href = url_accessmaster_server.value + \"null&Jeton=null\";
            }
        </script>
    </body>

</html>
";

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PHPKSecurityBundle::accessMaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(80 => 23, 76 => 22, 72 => 21, 68 => 20, 64 => 19, 54 => 12, 41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"pragma\" content=\"no-cache\">
        <meta http-equiv=\"cache-control\" content=\"no-cache\">
        <meta http-equiv=\"expires\" content=\"0\">
        <title>Chargement de la sécurité...</title>
        <script language=\"javascript\">
            var etatComposant = null;
            var alea = 100000*(Math.random());
            var urlJS = \"{{ server_url }}testcomposant?\" + alea;

            document.write('<script language=\"javascript\" src=\"' + urlJS + '\"><\\/script>');
        </script>
    </head>

    <body>
        <form name=\"form_accessmaster_server\" action=\"{{ server_url }}secjava\" method=\"GET\">
            <input type=\"hidden\" name=\"SERVEUR\" value=\"{{ callback_url }}\">
            <input type=\"hidden\" name=\"ALEA\" value=\"{{ alea }}\">
            <input type=\"hidden\" name=\"SYSTEM\" value=\"{{ system }}\">
            <input type=\"hidden\" name=\"ATTRIBUTS\" value=\"{{ attributes }}\">
        </form>
        <script language=\"javascript\">
            var url_accessmaster_server = document.form_accessmaster_server.SERVEUR;
            if (etatComposant != null) {
                url_accessmaster_server.value += etatComposant;
                document.form_accessmaster_server.submit();
            }
            else {
                document.location.href = url_accessmaster_server.value + \"null&Jeton=null\";
            }
        </script>
    </body>

</html>
", "PHPKSecurityBundle::accessMaster.html.twig", "/var/www/html/app/DDQV8/phpk/skeleton/vendor/cnamts/phpk/bundles/phpk-security-bundle/Resources/views/accessMaster.html.twig");
    }
}
