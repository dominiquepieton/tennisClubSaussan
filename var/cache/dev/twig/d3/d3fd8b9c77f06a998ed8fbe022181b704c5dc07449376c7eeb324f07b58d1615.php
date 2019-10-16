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

/* admin/stage/index.html.twig */
class __TwigTemplate_97de13d5c8850a2f90287604b91381a56a4ec399ce6959ba2e6730baa26ea4b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stage/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/stage/index.html.twig", 1);
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

        echo "inscription stage";
        
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
        echo "    <h1>Inscription d'un adhérent au stage :</h1>
    <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">nom du stage</th>
                    <th class=\"text-center\">prénom</th>
                    <th class=\"text-center\">nom</th>
                    <th class=\"text-center\">age</th>
                    <th class=\"text-center\">réediter / supprimer</th>
                </tr> 
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["registrationStages"]) {
            // line 20
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "titleStage", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "age", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrationStages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/stage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 32,  135 => 28,  131 => 27,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}inscription stage{% endblock %}

{% block body %}
    <h1>Inscription d'un adhérent au stage :</h1>
    <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">nom du stage</th>
                    <th class=\"text-center\">prénom</th>
                    <th class=\"text-center\">nom</th>
                    <th class=\"text-center\">age</th>
                    <th class=\"text-center\">réediter / supprimer</th>
                </tr> 
            </thead>
            <tbody>
                {% for registrationStages in registrationStage %}
                <tr>
                    <td class=\"text-center\">{{registrationStages.id}}</td>
                    <td class=\"text-center\">{{registrationStages.titleStage}}</td>
                    <td class=\"text-center\">{{registrationStages.firstname}}</td>
                    <td class=\"text-center\">{{registrationStages.lastname}}</td>
                    <td class=\"text-center\">{{registrationStages.age}}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_stage_edit',{'id' : registrationStages.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('admin_stage_delete',{'id' : registrationStages.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>    
{% endblock %}
", "admin/stage/index.html.twig", "/var/www/site/tcs/templates/admin/stage/index.html.twig");
    }
}
