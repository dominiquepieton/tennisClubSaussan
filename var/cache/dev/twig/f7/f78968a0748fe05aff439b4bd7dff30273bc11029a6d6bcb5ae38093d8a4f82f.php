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

/* admin/stage/show.html.twig */
class __TwigTemplate_89c1d43ea0a99943b3956a235b1615a0f82ca35ff45e1477c09f52cfa238bbf9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stage/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/stage/show.html.twig", 1);
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

        echo " Vue de l'Inscription ";
        
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
         <div class=\"title-reservation bg rounded mb-5\">
            <h1 class=\"text-center\">Inscription au stage n° : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"container w-25\">
            <table class=\"table table-borderless bg-light shadow p-3 mb-5 rounded\">
                <tbody>
                    <tr>
                        <th>titre du stage</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 15, $this->source); })()), "titleStage", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>prénom</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>nom</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 23, $this->source); })()), "lastname", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>date d'anniversaire</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 27, $this->source); })()), "age", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                    </tr>   
                </tbody>
            </table>
        </div>
        <div class=\"mx-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_index");
        echo "\">Retour</a>
                </li>
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">réedit</a>
                </li>
                <li class=\"nav-item\"> 
                    <a class=\"btn btn-danger\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer la pré-inscription ?`)\">delete</a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/stage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 41,  140 => 38,  134 => 35,  123 => 27,  116 => 23,  109 => 19,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %} Vue de l'Inscription {% endblock %}

{% block body %}
    <div class=\"container\">
         <div class=\"title-reservation bg rounded mb-5\">
            <h1 class=\"text-center\">Inscription au stage n° : {{registrationStage.id}}</h1>
        </div>
        <div class=\"container w-25\">
            <table class=\"table table-borderless bg-light shadow p-3 mb-5 rounded\">
                <tbody>
                    <tr>
                        <th>titre du stage</th>
                        <td>{{ registrationStage.titleStage }}</td>
                    </tr>
                    <tr>
                        <th>prénom</th>
                        <td>{{ registrationStage.firstname }}</td>
                    </tr>
                    <tr>
                        <th>nom</th>
                        <td>{{ registrationStage.lastname }}</td>
                    </tr>
                    <tr>
                        <th>date d'anniversaire</th>
                        <td>{{ registrationStage.age }}</td>
                    </tr>   
                </tbody>
            </table>
        </div>
        <div class=\"mx-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"{{ path('admin_stage_index') }}\">Retour</a>
                </li>
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"{{ path('admin_stage_edit',{'id' : registrationStage.id}) }}\">réedit</a>
                </li>
                <li class=\"nav-item\"> 
                    <a class=\"btn btn-danger\" href=\"{{ path('admin_stage_delete',{'id' : registrationStage.id}) }}\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer la pré-inscription ?`)\">delete</a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}", "admin/stage/show.html.twig", "/var/www/site/tcs/templates/admin/stage/show.html.twig");
    }
}
