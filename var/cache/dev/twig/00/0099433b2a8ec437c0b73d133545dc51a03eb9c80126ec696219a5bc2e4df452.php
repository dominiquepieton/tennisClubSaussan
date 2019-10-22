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
        <h1 class=\"my-5 text-center\"> La liste des adhérents</h1>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <img src=\"/img/logo.jpg\" alt=\"logo\">
            </div>
            <div class=\"col-md-7\">    
                <table class=\"table table-hover shadow p-3 mb-5 rounded\">
                    <thead class=\"bg-secondary\">
                        <tr>
                            <th class=\"text-center\">id</th>
                            <th class=\"text-center\">firstName</th>
                            <th class=\"text-center\">lastname</th>
                            <th class=\"text-center\">email</th>
                            <th class=\"text-center\">picture</th>
                            <th class=\"text-center\">hash</th>
                            <th class=\"text-center\">Supprimer</th>
                        </tr> 
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new RuntimeError('Variable "adherent" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adherents"]) {
            // line 27
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "firstName", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "lastName", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "picture", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherents"], "hash", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adherent_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["adherents"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\">&nbsp;</div>
        </div>
        <div class=\"d-flex justify-content-center\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
        // line 46
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 46, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adherent_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 47, $this->source); })()) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
                </li>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 49, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "                <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()) == $context["i"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adherent_index", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()))) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adherent_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) + 1)]), "html", null, true);
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
        return "admin/adherent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 55,  194 => 54,  183 => 51,  176 => 50,  172 => 49,  167 => 47,  161 => 46,  152 => 39,  142 => 35,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Les adhérents {% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"my-5 text-center\"> La liste des adhérents</h1>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <img src=\"/img/logo.jpg\" alt=\"logo\">
            </div>
            <div class=\"col-md-7\">    
                <table class=\"table table-hover shadow p-3 mb-5 rounded\">
                    <thead class=\"bg-secondary\">
                        <tr>
                            <th class=\"text-center\">id</th>
                            <th class=\"text-center\">firstName</th>
                            <th class=\"text-center\">lastname</th>
                            <th class=\"text-center\">email</th>
                            <th class=\"text-center\">picture</th>
                            <th class=\"text-center\">hash</th>
                            <th class=\"text-center\">Supprimer</th>
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
                                <a href=\"{{ path('admin_adherent_delete', {'id': adherents.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\">&nbsp;</div>
        </div>
        <div class=\"d-flex justify-content-center\">
            <ul class=\"pagination\">
                <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_adherent_index', {'page': page - 1 }) }}\">&laquo;</a>
                </li>
                {% for i in 1..pages %}
                <li class=\"page-item {% if page == i %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_adherent_index', {'page': i }) }}\">{{ i }}</a>
                </li>
                {% endfor %}
                <li class=\"page-item {% if page == pages %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_adherent_index', {'page': page + 1 }) }}\">&raquo;</a>
                </li>
            </ul>
        </div>  
    </div>

{% endblock %}
", "admin/adherent/index.html.twig", "/var/www/site/tcs/templates/admin/adherent/index.html.twig");
    }
}
