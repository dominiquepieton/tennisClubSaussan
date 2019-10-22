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

/* admin/partials/header.html.twig */
class __TwigTemplate_c4b8d8d1a607baad81c40785c8ea8a5d6bff9007ff623c6217db9eed753535ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 1
        echo "        <!--  navbar for the site -->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info shadow p-3 mb-5 border-bottom\">
            <a class=\"navbar-brand h2\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>Dashboard</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_index");
        echo "\">
                            <i class=\"fas fa-file-archive fa-2x\"></i>Reservation</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index");
        echo "\" class=\"nav-link\">
                            <i class=\"fas fa-comments fa-2x\"></i>Message reçu</a>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown1\">
                                <i class=\"fas fa-user-cog fa-2x\"></i>création Compte Adhérent</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown1\">
                            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adherent_index");
        echo "\" class=\"dropdown-item\">Toutes les adhérents</a> 
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_register");
        echo "\" class=\"dropdown-item\">Création d'adhérent site</a>                                                                    
                        </div>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown2\">
                            <i class=\"fas fa-newspaper fa-2x\"></i>Création d'évènements</a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown2\">
                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index_article");
        echo "\" class=\"dropdown-item\">Toutes les évènements</a> 
                            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_create");
        echo "\" class=\"dropdown-item\">Création d'évènement</a>                                                                    
                        </div>    
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adminDropdown\">
                                <i class=\"fas fa-edit fa-2x\"></i>Inscription Annuelles</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"adminDropdown\">
                            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_index");
        echo "\" class=\"dropdown-item\">Toutes les pre-inscriptions</a> 
                            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_create");
        echo "\" class=\"dropdown-item\">Créer une inscription</a>                                                                    
                        </div>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown\">
                                <i class=\"fas fa-edit fa-2x\"></i>Inscription stage</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown\">
                            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_index");
        echo "\" class=\"dropdown-item\">Toutes les inscriptions stages</a> 
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_create");
        echo "\" class=\"dropdown-item\">Créer une inscription stage</a>                                                                    
                        </div>
                    </li>        
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye fa-2x\"></i>Site</a>
                    </li>
                    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            echo "                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "picture", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "lastName", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "firstName", [], "any", false, false, false, 67), "html", null, true);
            echo "\">&nbsp;  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "lastName", [], "any", false, false, false, 67), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "firstName", [], "any", false, false, false, 67), "html", null, true);
            echo " 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_create");
            echo "\" class=\"dropdown-item\">réserver terrain</a>
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["firstName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "firstname", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                    <i class=\"fas fa-user fa-2x\"></i>Mon profil</a>                                                               
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-lock fa-2x\"></i>Déconnexion</a>
                            </div>
                        </li>   
                    ";
        }
        // line 78
        echo "            </div>
        </nav>

        <!-- error message -->
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 83
            echo "            <div class=\"container\">
                <div class=\"alert alert-";
            // line 84
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 86
                echo "                        <p>";
                echo $context["message"];
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 88,  205 => 86,  201 => 85,  197 => 84,  194 => 83,  190 => 82,  184 => 78,  177 => 74,  171 => 71,  167 => 70,  153 => 67,  149 => 65,  147 => 64,  141 => 61,  131 => 54,  127 => 53,  116 => 45,  112 => 44,  101 => 36,  97 => 35,  87 => 28,  83 => 27,  72 => 19,  65 => 15,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!--  navbar for the site -->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info shadow p-3 mb-5 border-bottom\">
            <a class=\"navbar-brand h2\" href=\"{{ path('admin_dashboard') }}\">TSC</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- lien navigation de base  -->
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>Dashboard</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('admin_res_index') }}\">
                            <i class=\"fas fa-file-archive fa-2x\"></i>Reservation</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a href=\"{{ path('admin_contact_index')}}\" class=\"nav-link\">
                            <i class=\"fas fa-comments fa-2x\"></i>Message reçu</a>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown1\">
                                <i class=\"fas fa-user-cog fa-2x\"></i>création Compte Adhérent</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown1\">
                            <a href=\"{{ path('admin_adherent_index') }}\" class=\"dropdown-item\">Toutes les adhérents</a> 
                            <a href=\"{{ path('admin_account_register') }}\" class=\"dropdown-item\">Création d'adhérent site</a>                                                                    
                        </div>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown2\">
                            <i class=\"fas fa-newspaper fa-2x\"></i>Création d'évènements</a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown2\">
                            <a href=\"{{ path('admin_index_article') }}\" class=\"dropdown-item\">Toutes les évènements</a> 
                            <a href=\"{{ path('admin_article_create') }}\" class=\"dropdown-item\">Création d'évènement</a>                                                                    
                        </div>    
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adminDropdown\">
                                <i class=\"fas fa-edit fa-2x\"></i>Inscription Annuelles</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"adminDropdown\">
                            <a href=\"{{ path('admin_registration_index') }}\" class=\"dropdown-item\">Toutes les pre-inscriptions</a> 
                            <a href=\"{{ path('admin_registration_create') }}\" class=\"dropdown-item\">Créer une inscription</a>                                                                    
                        </div>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"adDropdown\">
                                <i class=\"fas fa-edit fa-2x\"></i>Inscription stage</a>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"adDropdown\">
                            <a href=\"{{ path('admin_stage_index') }}\" class=\"dropdown-item\">Toutes les inscriptions stages</a> 
                            <a href=\"{{ path('admin_stage_create') }}\" class=\"dropdown-item\">Créer une inscription stage</a>                                                                    
                        </div>
                    </li>        
                </ul>
                <!-- lien si l'adhérent se connecte -->
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a href=\"{{ path('homepage') }}\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye fa-2x\"></i>Site</a>
                    </li>
                    {% if app.user %}
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdown\">
                                <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" alt=\"Avatar de {{app.user.lastName}} {{app.user.firstName}}\">&nbsp;  {{app.user.lastName}}  {{app.user.firstName}} 
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdown\">
                                <a href=\"{{ path('reservation_create') }}\" class=\"dropdown-item\">réserver terrain</a>
                                <a href=\"{{ path('user_show',{'firstName' : app.user.firstname }) }}\" class=\"dropdown-item\">
                                    <i class=\"fas fa-user fa-2x\"></i>Mon profil</a>                                                               
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('account_logout') }}\" class=\"dropdown-item\"><i class=\"fas fa-lock fa-2x\"></i>Déconnexion</a>
                            </div>
                        </li>   
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
        {% endfor %}", "admin/partials/header.html.twig", "/var/www/site/tcs/templates/admin/partials/header.html.twig");
    }
}
