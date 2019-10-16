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

/* admin/registration/index.html.twig */
class __TwigTemplate_56c1ed9f684adc5ccd0558e9af09902e67395e20fb0406df2070cff0c59147d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/registration/index.html.twig", 1);
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

        echo "Pré-inscription annuelle";
        
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

    <h1></h1>
    <div class=\"container-fluid\">
        <h1 class=\"my-5\"> La liste des pré-inscrits :</h1>
         <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">firstName</th>
                    <th class=\"text-center\">lastname</th>
                    <th class=\"text-center\">email</th>
                    <th class=\"text-center\">birthday</th>
                    <th class=\"text-center\">apte au sport</th>
                    <th class=\"text-center\">nom du responsable légale</th>
                    <th class=\"text-center\">réediter / supprimer</th>
                </tr> 
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preRegistrations"]) {
            // line 26
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "firstname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "lastname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "birthday", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "aptSport", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "lastnameResponsable", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preRegistrations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "admin/registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  149 => 36,  145 => 35,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Pré-inscription annuelle{% endblock %}

{% block body %}


    <h1></h1>
    <div class=\"container-fluid\">
        <h1 class=\"my-5\"> La liste des pré-inscrits :</h1>
         <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">firstName</th>
                    <th class=\"text-center\">lastname</th>
                    <th class=\"text-center\">email</th>
                    <th class=\"text-center\">birthday</th>
                    <th class=\"text-center\">apte au sport</th>
                    <th class=\"text-center\">nom du responsable légale</th>
                    <th class=\"text-center\">réediter / supprimer</th>
                </tr> 
            </thead>
            <tbody>
                {% for preRegistrations in preRegistration %}
                <tr>
                    <td class=\"text-center\">{{preRegistrations.id}}</td>
                    <td class=\"text-center\">{{preRegistrations.firstname}}</td>
                    <td class=\"text-center\">{{preRegistrations.lastname}}</td>
                    <td class=\"text-center\">{{preRegistrations.email}}</td>
                    <td class=\"text-center\">{{preRegistrations.birthday | date('d/m/Y')}}</td>
                    <td class=\"text-center\">{{preRegistrations.aptSport}}</td>
                    <td class=\"text-center\">{{preRegistrations.lastnameResponsable}}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_registration_edit',{'id' : preRegistrations.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('admin_registration_delete',{'id' : preRegistrations.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        </div> 
    </div>
    
{% endblock %}
", "admin/registration/index.html.twig", "/var/www/site/tcs/templates/admin/registration/index.html.twig");
    }
}
