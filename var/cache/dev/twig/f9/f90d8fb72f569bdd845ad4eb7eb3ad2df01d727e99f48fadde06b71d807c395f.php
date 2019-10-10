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

/* partials/header.html.twig */
class __TwigTemplate_b617ae2ae32544141570e653ee74ff326129f1fc7bcbacf3212fdc8d10a20e71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "        <!--  navbar for the site -->
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"navbar-brand h2\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">TSC</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- lien navigation de base  -->
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\">Reservation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
        echo "\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    <li>  
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "picture", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"avatar\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "lastName", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "\">&nbsp;  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "lastName", [], "any", false, false, false, 28), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo " 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["firstName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"dropdown-item\">Mon profil</a>
                                <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profile</a>
                                <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\" class=\"dropdown-item\">Modifier mon password</a>                                
                                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_create");
            echo "\" class=\"dropdown-item\">réserver terrain</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"nav-link\">Déconnection</a>
                            </div>
                        </li>
                    ";
        } else {
            // line 40
            echo "                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\">Connexion</a>
                        </li>
                    </ul>    
                    ";
        }
        // line 46
        echo "            </div>
        </nav>
        <!-- error message -->
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 50
            echo "            <div class=\"container\">
                <div class=\"alert alert-";
            // line 51
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                echo "                        <p>";
                echo $context["message"];
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  165 => 55,  156 => 53,  152 => 52,  148 => 51,  145 => 50,  141 => 49,  136 => 46,  129 => 42,  125 => 40,  118 => 36,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  87 => 28,  83 => 26,  81 => 25,  70 => 17,  64 => 14,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!--  navbar for the site -->
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"navbar-brand h2\" href=\"{{ path('homepage') }}\">TSC</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- lien navigation de base  -->
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('reservation') }}\">Reservation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('account_register') }}\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    <li>  
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    {% if app.user %}
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"{{app.user.picture}}\" class=\"avatar\" alt=\"Avatar de {{app.user.lastName}} {{app.user.firstName}}\">&nbsp;  {{app.user.lastName}}  {{app.user.firstName}} 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"{{ path('user_show',{'firstName' : app.user.firstname }) }}\" class=\"dropdown-item\">Mon profil</a>
                                <a href=\"{{ path('account_profile')}}\" class=\"dropdown-item\">Modifier mon profile</a>
                                <a href=\"{{ path('account_password')}}\" class=\"dropdown-item\">Modifier mon password</a>                                
                                <a href=\"{{ path('reservation_create') }}\" class=\"dropdown-item\">réserver terrain</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('account_logout') }}\" class=\"nav-link\">Déconnection</a>
                            </div>
                        </li>
                    {% else %}
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('account_login') }}\" class=\"nav-link\">Connexion</a>
                        </li>
                    </ul>    
                    {% endif %}
            </div>
        </nav>
        <!-- error message -->
        {% for label, messages in app.flashes %}
            <div class=\"container\">
                <div class=\"alert alert-{{ label }}\">
                    {% for message in messages %}
                        <p>{{ message | raw }}</p>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}

       ", "partials/header.html.twig", "/var/www/site/tcs/templates/partials/header.html.twig");
    }
}
