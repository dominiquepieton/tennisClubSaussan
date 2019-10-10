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

/* reservation/index.html.twig */
class __TwigTemplate_7a3eab6f19b4b0b174038003d1cfa12ead8c7ee99ffec496117df3c615d06881 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        echo "liste des reservation";
        
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
        echo "    
    <div class=\"container-fluid reservation-hero bg-hero\">    
        <h1 class=\"text-center h1\">liste des reservations :</h1>
        <p class=\"text-center\">Retrouvez toutes vos réservations effectués depuis votre inscription : </p>
    </div>    
    <div class=\"container\">
        <div class=\"table-wrapper-scroll-y my-custom-scrollbar\">
            <table class=\"table table-striped table-hover shadow p-3 mb-5 md-5 rounded\">
                <thead>
                    <tr>
                        <th class=\"text-center\">id</th>
                        <th class=\"text-center\">nom</th>
                        <th class=\"text-center\">Jours</th>
                        <th class=\"text-center\">Heure de debut</th>
                        <th class=\"text-center\">Heure de fin</th>
                        <th class=\"text-center\">semaine</th>
                        <th class=\"text-center\">terrain</th>
                        <th class=\"text-center\">Voir</th>
                    </tr>
                </thead>    
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 28
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "jour", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heuredebut", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heurefin", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "semaine", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "terrain", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>
                        <ul class=\"nav\">
                            <li class=\"mx-auto\">
                                <a class=\"btn btn-dark\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">show</a>
                            </li>
                        </ul>
                    </td> 
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  149 => 39,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}liste des reservation{% endblock %}

{% block body %}
    
    <div class=\"container-fluid reservation-hero bg-hero\">    
        <h1 class=\"text-center h1\">liste des reservations :</h1>
        <p class=\"text-center\">Retrouvez toutes vos réservations effectués depuis votre inscription : </p>
    </div>    
    <div class=\"container\">
        <div class=\"table-wrapper-scroll-y my-custom-scrollbar\">
            <table class=\"table table-striped table-hover shadow p-3 mb-5 md-5 rounded\">
                <thead>
                    <tr>
                        <th class=\"text-center\">id</th>
                        <th class=\"text-center\">nom</th>
                        <th class=\"text-center\">Jours</th>
                        <th class=\"text-center\">Heure de debut</th>
                        <th class=\"text-center\">Heure de fin</th>
                        <th class=\"text-center\">semaine</th>
                        <th class=\"text-center\">terrain</th>
                        <th class=\"text-center\">Voir</th>
                    </tr>
                </thead>    
                <tbody>
                {% for reservation in reservations %}
                <tr>
                    <td class=\"text-center\">{{ reservation.id }}</td>
                    <td class=\"text-center\">{{ reservation.nom }}</td>
                    <td class=\"text-center\">{{ reservation.jour }}</td>
                    <td class=\"text-center\">{{ reservation.heuredebut }}</td>
                    <td class=\"text-center\">{{ reservation.heurefin }}</td>
                    <td class=\"text-center\">{{ reservation.semaine }}</td>
                    <td class=\"text-center\">{{ reservation.terrain }}</td>
                    <td>
                        <ul class=\"nav\">
                            <li class=\"mx-auto\">
                                <a class=\"btn btn-dark\" href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                            </li>
                        </ul>
                    </td> 
                </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>        
    </div>
{% endblock %}
", "reservation/index.html.twig", "/var/www/site/tcs/templates/reservation/index.html.twig");
    }
}
