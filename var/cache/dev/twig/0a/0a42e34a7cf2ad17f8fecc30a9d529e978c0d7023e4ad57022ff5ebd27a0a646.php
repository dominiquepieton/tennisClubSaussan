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
        <h1 class=\"text-center\">Gestion des réservations :</h1>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo club\">
            </div>
            <div class=\"col-md-8 bg-light rounded shadow py-1 px-3\">
                <table class=\"table table-striped table-hover rounded shadow py-3 px-3 mt-2\">
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["re"]) {
            // line 27
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "jour", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "heureDebut", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "heureFin", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "terrain", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['re'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-1\">&nbsp;</div>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
        // line 47
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 47, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
                </li>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 50, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "                <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()) == $context["i"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_index", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 55, $this->source); })()))) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_res_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) + 1)]), "html", null, true);
        echo "\">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>


























        <div class=\"container bg-light rounded shadow py-1 px-3\">
            
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
        return array (  205 => 56,  198 => 55,  187 => 52,  180 => 51,  176 => 50,  171 => 48,  165 => 47,  156 => 40,  146 => 36,  142 => 35,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des réservation{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"text-center\">Gestion des réservations :</h1>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo club\">
            </div>
            <div class=\"col-md-8 bg-light rounded shadow py-1 px-3\">
                <table class=\"table table-striped table-hover rounded shadow py-3 px-3 mt-2\">
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
                                <a href=\"{{ path('admin_res_edit', { 'id': re.id }) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                                <a href=\"{{ path('admin_res_delete', { 'id': re.id }) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-1\">&nbsp;</div>
        </div>
        <div class=\"d-flex justify-content-center mt-2\">
            <ul class=\"pagination\">
                <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_res_index', {'page': page - 1 }) }}\">&laquo;</a>
                </li>
                {% for i in 1..pages %}
                <li class=\"page-item {% if page == i %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_res_index', {'page': i }) }}\">{{ i }}</a>
                </li>
                {% endfor %}
                <li class=\"page-item {% if page == pages %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_res_index', {'page': page + 1 }) }}\">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>


























        <div class=\"container bg-light rounded shadow py-1 px-3\">
            
        </div>
                
    </div>
{% endblock %}
", "admin/res/index.html.twig", "/var/www/site/tcs/templates/admin/res/index.html.twig");
    }
}
