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

/* account/login.html.twig */
class __TwigTemplate_8a85b6fa8c70e0c6adf1e1bdb1d4de90a0011e94e474cd0e86bb0a6710d4945d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion au site";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3\">&nbsp;</div>
        <div class=\"col-md-6\">
            <div class=\"bg-light py-3 px-3\">
            <h1>Connectez-vous :</h1>
                ";
        // line 12
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">
                        <p><strong>Une erreur est survenue, l'email ou le mot de passe est invalide</strong></p>
                    </div>
                ";
        }
        // line 17
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Email :</label>
                    <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email...\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" required>  
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Mot de passe...\" required>
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  104 => 17,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion au site{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3\">&nbsp;</div>
        <div class=\"col-md-6\">
            <div class=\"bg-light py-3 px-3\">
            <h1>Connectez-vous :</h1>
                {% if hasError %}
                    <div class=\"alert alert-danger\">
                        <p><strong>Une erreur est survenue, l'email ou le mot de passe est invalide</strong></p>
                    </div>
                {% endif %}
            <form action=\"{{ path('account_login') }}\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Email :</label>
                    <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email...\" value=\"{{username}}\" required>  
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Mot de passe...\" required>
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>        
{% endblock %}
", "account/login.html.twig", "/var/www/site/tcs/templates/account/login.html.twig");
    }
}
