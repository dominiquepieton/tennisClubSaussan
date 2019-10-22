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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <img src=\"/img/logo.jpg\" alt=\"logo club\">
        </div>
        <div class=\"col-md-8\">
            <h1>Inscription d'un adhérent au stage :</h1>
            <div class=\"bg-transparent shadow p-3 mb-5\">
            <table class=\"table table-hover shadow p-3 mb-5\">
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registrationStage"]) || array_key_exists("registrationStage", $context) ? $context["registrationStage"] : (function () { throw new RuntimeError('Variable "registrationStage" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["registrationStages"]) {
            // line 27
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "titleStage", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "lastname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationStages"], "age", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" ><i class=\"fas fa-edit\"></i></a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationStages"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrationStages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
            </table>
            </div>
        </div>
        <div class=\"col-md-1\">
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 48
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
            </li>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 51, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "            <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()) == $context["i"])) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_index", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 56, $this->source); })()))) {
            echo "disabled";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stage_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) + 1)]), "html", null, true);
        echo "\">&raquo;</a>
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
        return "admin/stage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 57,  196 => 56,  185 => 53,  178 => 52,  174 => 51,  169 => 49,  163 => 48,  152 => 39,  142 => 35,  138 => 34,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}inscription stage{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <img src=\"/img/logo.jpg\" alt=\"logo club\">
        </div>
        <div class=\"col-md-8\">
            <h1>Inscription d'un adhérent au stage :</h1>
            <div class=\"bg-transparent shadow p-3 mb-5\">
            <table class=\"table table-hover shadow p-3 mb-5\">
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
                        <a href=\"{{ path('admin_stage_edit',{'id' : registrationStages.id}) }}\" class=\"btn btn-primary\" ><i class=\"fas fa-edit\"></i></a>
                        <a href=\"{{ path('admin_stage_delete',{'id' : registrationStages.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
            </table>
            </div>
        </div>
        <div class=\"col-md-1\">
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <ul class=\"pagination\">
            <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('admin_stage_index', {'page': page - 1 }) }}\">&laquo;</a>
            </li>
            {% for i in 1..pages %}
            <li class=\"page-item {% if page == i %}active{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('admin_stage_index', {'page': i }) }}\">{{ i }}</a>
            </li>
            {% endfor %}
            <li class=\"page-item {% if page == pages %}disabled{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('admin_stage_index', {'page': page + 1 }) }}\">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
{% endblock %}", "admin/stage/index.html.twig", "/var/www/site/tcs/templates/admin/stage/index.html.twig");
    }
}
