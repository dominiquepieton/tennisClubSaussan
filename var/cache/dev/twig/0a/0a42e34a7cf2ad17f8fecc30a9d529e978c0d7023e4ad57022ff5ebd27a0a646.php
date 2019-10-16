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

/* admin/res/index.html.twig */
class __TwigTemplate_8586de0571b7fecc8d0f6fb72017048a1426930a36734a45688d072750029d7a extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/res/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/res/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/res/index.html.twig", 1);
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

        echo "Administration des réservation";
        
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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"my-5 text-center\">Gestion des réservations : </h1>
        <div class=\"container bg-light rounded shadow py-3 px-3\">
        <table class=\"table table-striped table-hover rounded shadow py-3 px-3\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">nom</th>
                    <th class=\"text-center\">jours</th>
                    <th class=\"text-center\">heure de debut</th>
                    <th class=\"text-center\">heure de fin</th>
                    <th class=\"text-center\">terrain</th>
                    <th class=\"text-center\">outil</th>
                </tr> 
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["re"]) {
            // line 23
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "jour", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "heureDebut", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "heureFin", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "terrain", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"#\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['re'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
        </div>        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/res/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 36,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  113 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des réservation{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"my-5 text-center\">Gestion des réservations : </h1>
        <div class=\"container bg-light rounded shadow py-3 px-3\">
        <table class=\"table table-striped table-hover rounded shadow py-3 px-3\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">nom</th>
                    <th class=\"text-center\">jours</th>
                    <th class=\"text-center\">heure de debut</th>
                    <th class=\"text-center\">heure de fin</th>
                    <th class=\"text-center\">terrain</th>
                    <th class=\"text-center\">outil</th>
                </tr> 
            </thead>
            <tbody>
                {% for re in res %}
                <tr>
                    <td class=\"text-center\">{{re.id}}</td>
                    <td class=\"text-center\">{{re.nom}}</td>
                    <td class=\"text-center\">{{re.jour | date('d/m/Y')}}</td>
                    <td class=\"text-center\">{{re.heureDebut}}</td>
                    <td class=\"text-center\">{{re.heureFin}}</td>
                    <td class=\"text-center\">{{re.terrain}}</td>
                    <td class=\"text-center\">
                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"#\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        </div>        
    </div>
{% endblock %}
", "admin/res/index.html.twig", "/var/www/site/tcs/templates/admin/res/index.html.twig");
    }
}
