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

/* admin/account/login.html.twig */
class __TwigTemplate_679948cdac0a02baf8b6d38b2e0ba546d419a9a831d96374fddcd887da84bfe8 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"x-ua-Compatible\" content=\"ie=edge\">

        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <!-- link icone -->
        <link rel=\"stylesheet\" href=\"/css/all.css\">

        <title></title>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"card bg-light w-75 mx-auto\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">
                        <i class=\"fas fa-lock fa-2x\"></i> Connexion Admin :
                    </h4>
                </div>
                <div class=\"card-body\">
                <!-- gestion des erreurs -->
                    ";
        // line 25
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                        <div class=\"alert alert-warning\">
                            <p>les informations fournis ne sont pas bonne...</p>
                        </div>   
                    ";
        }
        // line 30
        echo "                    <form  method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"_username\">Email :</label>
                            <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"placeholder=\"Adresse Email ...\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"_password\">Mot de passe :</label>
                            <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"mot de passe....\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-info\"><i class=\"fas fa-lock-open fa-2x\"></i>Connexion</button>
                            
                        </div>
                    </form>
                    <div class=\"mx-auto\">
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left fa-5x\"></i> Retour à l'Accueil</a>
                    </div>            
                </div>
                
            </div>
        </div>


        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/pooper.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/all.js\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 45,  82 => 33,  77 => 30,  71 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"x-ua-Compatible\" content=\"ie=edge\">

        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <!-- link icone -->
        <link rel=\"stylesheet\" href=\"/css/all.css\">

        <title></title>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"card bg-light w-75 mx-auto\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">
                        <i class=\"fas fa-lock fa-2x\"></i> Connexion Admin :
                    </h4>
                </div>
                <div class=\"card-body\">
                <!-- gestion des erreurs -->
                    {% if hasError %}
                        <div class=\"alert alert-warning\">
                            <p>les informations fournis ne sont pas bonne...</p>
                        </div>   
                    {% endif %}
                    <form  method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"_username\">Email :</label>
                            <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"{{username}}\"placeholder=\"Adresse Email ...\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"_password\">Mot de passe :</label>
                            <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"mot de passe....\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-info\"><i class=\"fas fa-lock-open fa-2x\"></i>Connexion</button>
                            
                        </div>
                    </form>
                    <div class=\"mx-auto\">
                    <a href=\"{{ path('homepage')}}\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left fa-5x\"></i> Retour à l'Accueil</a>
                    </div>            
                </div>
                
            </div>
        </div>


        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/pooper.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/all.js\"></script>
    </body>
</html>
", "admin/account/login.html.twig", "/var/www/site/tcs/templates/admin/account/login.html.twig");
    }
}
