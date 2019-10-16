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

/* admin/adherent/index.html.twig */
class __TwigTemplate_0c5999d6dca5444dd8fad8e3d508df2be9b99ea8cb4b66146eac80ee8a216194 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adherent/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adherent/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/adherent/index.html.twig", 1);
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

        echo "Les adhérents ";
        
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
        <h1 class=\"my-5\"> La liste des adhérents</h1>
         <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">firstName</th>
                    <th class=\"text-center\">lastname</th>
                    <th class=\"text-center\">email</th>
                    <th class=\"text-center\">picture</th>
                    <th class=\"text-center\">hash</th>
                    <th class=\"text-center\">reservations</th>
                </tr> 
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adherents"]) {
            // line 22
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "firstName", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "lastName", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "picture", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "hash", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    
                    
                    <td class=\"text-center\">
                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                        <a href=\"#\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "admin/adherent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Les adhérents {% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"my-5\"> La liste des adhérents</h1>
         <table class=\"table table-hover\">
            <thead class=\"bg-secondary\">
                <tr>
                    <th class=\"text-center\">id</th>
                    <th class=\"text-center\">firstName</th>
                    <th class=\"text-center\">lastname</th>
                    <th class=\"text-center\">email</th>
                    <th class=\"text-center\">picture</th>
                    <th class=\"text-center\">hash</th>
                    <th class=\"text-center\">reservations</th>
                </tr> 
            </thead>
            <tbody>
                {% for adherents in adherent %}
                <tr>
                    <td class=\"text-center\">{{adherents.id}}</td>
                    <td class=\"text-center\">{{adherents.firstName}}</td>
                    <td class=\"text-center\">{{adherents.lastName}}</td>
                    <td class=\"text-center\">{{adherents.email}}</td>
                    <td class=\"text-center\">{{adherents.picture}}</td>
                    <td class=\"text-center\">{{adherents.hash}}</td>
                    
                    
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
", "admin/adherent/index.html.twig", "/var/www/site/tcs/templates/admin/adherent/index.html.twig");
    }
}
