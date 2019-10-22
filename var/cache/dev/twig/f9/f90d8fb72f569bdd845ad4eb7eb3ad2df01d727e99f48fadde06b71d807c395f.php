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
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_article");
        echo "\">Événements</a>
                    </li>
                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_create");
        echo "\">Contact</a>
                    <li>  
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_create");
            echo "\" class=\"nav-link\">réserver terrain</a>
                        </li>    
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "picture", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "lastName", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29), "html", null, true);
            echo "\">&nbsp;  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "lastName", [], "any", false, false, false, 29), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29), "html", null, true);
            echo " 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["firstName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "firstname", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"dropdown-item\">Mon profil</a>
                                <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profile</a>
                                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\" class=\"dropdown-item\">Modifier mon password</a>                                                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"nav-link\">Déconnexion</a>
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
                        <li>
                            <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_login");
            echo "\" class=\"nav-link\">Admin</a>
                        </li>
                    </ul>    
                    ";
        }
        // line 49
        echo "            </div>
        </nav>

        <!-- error message -->
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 54
            echo "            <div class=\"container\">
                <div class=\"alert alert-";
            // line 55
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                echo "                        <p>";
                echo $context["message"];
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return array (  180 => 62,  172 => 59,  163 => 57,  159 => 56,  155 => 55,  152 => 54,  148 => 53,  142 => 49,  135 => 45,  129 => 42,  125 => 40,  118 => 36,  113 => 34,  109 => 33,  105 => 32,  91 => 29,  84 => 25,  81 => 24,  79 => 23,  71 => 18,  64 => 14,  58 => 11,  47 => 3,  43 => 1,);
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
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('index_article') }}\">Événements</a>
                    </li>
                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('contact_create')}}\">Contact</a>
                    <li>  
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    {% if app.user %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('reservation_create') }}\" class=\"nav-link\">réserver terrain</a>
                        </li>    
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" alt=\"Avatar de {{app.user.lastName}} {{app.user.firstName}}\">&nbsp;  {{app.user.lastName}}  {{app.user.firstName}} 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"{{ path('user_show',{'firstName' : app.user.firstname }) }}\" class=\"dropdown-item\">Mon profil</a>
                                <a href=\"{{ path('account_profile')}}\" class=\"dropdown-item\">Modifier mon profile</a>
                                <a href=\"{{ path('account_password')}}\" class=\"dropdown-item\">Modifier mon password</a>                                                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('account_logout') }}\" class=\"nav-link\">Déconnexion</a>
                            </div>
                        </li>
                    {% else %}
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                                <a href=\"{{ path('account_login') }}\" class=\"nav-link\">Connexion</a>     
                        </li>
                        <li>
                            <a href=\"{{ path('admin_account_login') }}\" class=\"nav-link\">Admin</a>
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
