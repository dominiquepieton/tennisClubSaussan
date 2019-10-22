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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"my-5 text-center\"> La liste des pré-inscrits :</h1>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo tennis club\">
            </div>
            <div col=\"col-md-7\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preRegistrations"]) {
            // line 28
            echo "                    <tr>
                        <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "lastname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "birthday", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "aptSport", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "lastnameResponsable", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["preRegistrations"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                        </td>
                    </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preRegistrations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-2\">&nbsp;</div>
        </div>    
        <div class=\"d-flex justify-content-center\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
        // line 49
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
                </li>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 52, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            echo "                <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 53, $this->source); })()) == $context["i"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_index", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 57, $this->source); })()))) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()) + 1)]), "html", null, true);
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
        return "admin/registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 58,  203 => 57,  192 => 54,  185 => 53,  181 => 52,  176 => 50,  170 => 49,  161 => 42,  151 => 38,  147 => 37,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Pré-inscription annuelle{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"my-5 text-center\"> La liste des pré-inscrits :</h1>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo tennis club\">
            </div>
            <div col=\"col-md-7\">
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
                            <a href=\"{{ path('admin_registration_delete',{'id' : preRegistrations.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\"><i class=\"fas fa-trash\"></i></a>
                        </td>
                    </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-2\">&nbsp;</div>
        </div>    
        <div class=\"d-flex justify-content-center\">
            <ul class=\"pagination\">
                <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_registration_index', {'page': page - 1 }) }}\">&laquo;</a>
                </li>
                {% for i in 1..pages %}
                <li class=\"page-item {% if page == i %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_registration_index', {'page': i }) }}\">{{ i }}</a>
                </li>
                {% endfor %}
                <li class=\"page-item {% if page == pages %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_registration_index', {'page': page + 1 }) }}\">&raquo;</a>
                </li>
            </ul>
        </div> 
    </div>
    
{% endblock %}
", "admin/registration/index.html.twig", "/var/www/site/tcs/templates/admin/registration/index.html.twig");
    }
}
