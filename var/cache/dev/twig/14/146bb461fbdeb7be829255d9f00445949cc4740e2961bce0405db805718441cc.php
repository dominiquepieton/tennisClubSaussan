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

/* user/index.html.twig */
class __TwigTemplate_5680578af0a301f9341ee19d41d8c4f78d1ce89f2c84691f03d9a931fa8629a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Profile de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container\">
        <div class=\"row align-item-center\">
            <div class=\"col-md-3 text-center\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 9, $this->source); })()), "picture", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"mb-3 avatar avatar-meduim\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 9, $this->source); })()), "firstName", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
                <br>
                <!-- nbre de reservation faite -->
                <span class=\"badge badge-primary\">";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 12, $this->source); })()), "reservations", [], "any", false, false, false, 12)), "html", null, true);
        echo " réservations</span>
            </div>
            <div class=\"col-md-9\">
                <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 15, $this->source); })()), "lastName", [], "any", false, false, false, 15), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), "html", null, true);
        echo " :</h1>
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
        echo "\" class=\"nav-link\">Modifier mes données </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
        echo "\" class=\"nav-link\">Modifier mon password</a>
                    </li>
                </ul> 
            </div>
        </div>
        <hr>
        <h2>Vos réservations éffectuée :</h2>
            ";
        // line 28
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 28, $this->source); })()), "reservations", [], "any", false, false, false, 28)) > 0)) {
            // line 29
            echo "                <div class=\"container\">
                    <table class=\"table table-striped table-hover shadow p-3 mb-5 md-5 rounded\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">Jours</th>
                                <th class=\"text-center\">Heure de debut</th>
                                <th class=\"text-center\">Heure de fin</th>
                                <th class=\"text-center\">semaine</th>
                                <th class=\"text-center\">terrain</th>
                                <th class=\"text-center\">modifier</th>
                            </tr>
                        </thead>    
                        <tbody>
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 42, $this->source); })()), "reservations", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 43
                echo "                            <tr>
                                <td class=\"text-center\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "jour", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heuredebut", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heurefin", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "semaine", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "terrain", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                <td>
                                    <ul class=\"nav\">
                                        <li class=\"nav-item mx-auto\">
                                            <a class=\"btn btn-dark\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">réedit</a>
                                        </li>
                                    </ul>
                                </td>     
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 62
            echo "                <div class=\"alert alert-warning\">
                    <p>
                        <strong>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 64, $this->source); })()), "firstName", [], "any", false, false, false, 64), "html", null, true);
            echo "</strong>, vous n'avez pas encore fait de réservation....
                    </p>
                </div>
            ";
        }
        // line 68
        echo "    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  203 => 64,  199 => 62,  193 => 58,  181 => 52,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  155 => 43,  151 => 42,  136 => 29,  134 => 28,  124 => 21,  118 => 18,  110 => 15,  104 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile de {{adherent.lastName}}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row align-item-center\">
            <div class=\"col-md-3 text-center\">
                <img src=\"{{adherent.picture}}\" class=\"mb-3 avatar avatar-meduim\" alt=\"Avatar de {{adherent.lastName}} {{adherent.firstName}}\">
                <br>
                <!-- nbre de reservation faite -->
                <span class=\"badge badge-primary\">{{adherent.reservations | length }} réservations</span>
            </div>
            <div class=\"col-md-9\">
                <h1>{{adherent.lastName}} {{adherent.firstName}} :</h1>
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('account_profile') }}\" class=\"nav-link\">Modifier mes données </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('account_password') }}\" class=\"nav-link\">Modifier mon password</a>
                    </li>
                </ul> 
            </div>
        </div>
        <hr>
        <h2>Vos réservations éffectuée :</h2>
            {% if adherent.reservations | length > 0 %}
                <div class=\"container\">
                    <table class=\"table table-striped table-hover shadow p-3 mb-5 md-5 rounded\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">Jours</th>
                                <th class=\"text-center\">Heure de debut</th>
                                <th class=\"text-center\">Heure de fin</th>
                                <th class=\"text-center\">semaine</th>
                                <th class=\"text-center\">terrain</th>
                                <th class=\"text-center\">modifier</th>
                            </tr>
                        </thead>    
                        <tbody>
                            {% for reservation in adherent.reservations %}
                            <tr>
                                <td class=\"text-center\">{{ reservation.jour }}</td>
                                <td class=\"text-center\">{{ reservation.heuredebut }}</td>
                                <td class=\"text-center\">{{ reservation.heurefin }}</td>
                                <td class=\"text-center\">{{ reservation.semaine }}</td>
                                <td class=\"text-center\">{{ reservation.terrain }}</td>
                                <td>
                                    <ul class=\"nav\">
                                        <li class=\"nav-item mx-auto\">
                                            <a class=\"btn btn-dark\" href=\"{{ path('reservation_edit',{'id' : reservation.id}) }}\">réedit</a>
                                        </li>
                                    </ul>
                                </td>     
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <div class=\"alert alert-warning\">
                    <p>
                        <strong>{{adherent.firstName}}</strong>, vous n'avez pas encore fait de réservation....
                    </p>
                </div>
            {% endif %}
    </div>




{% endblock %}
", "user/index.html.twig", "/var/www/site/tcs/templates/user/index.html.twig");
    }
}
