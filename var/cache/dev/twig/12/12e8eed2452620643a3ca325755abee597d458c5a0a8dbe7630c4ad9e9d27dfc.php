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

/* admin/registration/show.html.twig */
class __TwigTemplate_8da4670983e6e9193c7887eb6cacd1418bd421d290e03053158a82ff86f3d614 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/registration/show.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"title-reservation bg rounded mb-5\">
            <h1 class=\"text-center\">Pré-inscription n° : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"container w-25\">
            <table class=\"table table-borderless bg-light shadow p-3 mb-5 rounded\">
                <tbody>
                    <tr>
                        <th>prénom</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>nom</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>date d'anniversaire</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 23, $this->source); })()), "birthday", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>apte au sport</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 31, $this->source); })()), "aptSport", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>nom du responsable légale</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 35, $this->source); })()), "lastnameResponsable", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                    </tr>   
                </tbody>
            </table>
        </div>
        <div class=\"mx-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_index");
        echo "\">Retour</a>
                </li>
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">réedit</a>
                </li>
                <li class=\"nav-item\"> 
                    <a class=\"btn btn-danger\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["preRegistration"]) || array_key_exists("preRegistration", $context) ? $context["preRegistration"] : (function () { throw new RuntimeError('Variable "preRegistration" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
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
        return "admin/registration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  154 => 46,  148 => 43,  137 => 35,  130 => 31,  123 => 27,  116 => 23,  109 => 19,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Pré-inscription annuelle{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"title-reservation bg rounded mb-5\">
            <h1 class=\"text-center\">Pré-inscription n° : {{preRegistration.id}}</h1>
        </div>
        <div class=\"container w-25\">
            <table class=\"table table-borderless bg-light shadow p-3 mb-5 rounded\">
                <tbody>
                    <tr>
                        <th>prénom</th>
                        <td>{{ preRegistration.firstname }}</td>
                    </tr>
                    <tr>
                        <th>nom</th>
                        <td>{{ preRegistration.lastname }}</td>
                    </tr>
                    <tr>
                        <th>date d'anniversaire</th>
                        <td>{{ preRegistration.birthday | date('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>{{ preRegistration.email }}</td>
                    </tr>
                    <tr>
                        <th>apte au sport</th>
                        <td>{{ preRegistration.aptSport }}</td>
                    </tr>
                    <tr>
                        <th>nom du responsable légale</th>
                        <td>{{ preRegistration.lastnameResponsable }}</td>
                    </tr>   
                </tbody>
            </table>
        </div>
        <div class=\"mx-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"{{ path('admin_registration_index') }}\">Retour</a>
                </li>
                <li class=\"nav-item mx-auto\">
                    <a class=\"btn btn-dark\" href=\"{{ path('admin_registration_edit',{'id' : preRegistration.id}) }}\">réedit</a>
                </li>
                <li class=\"nav-item\"> 
                    <a class=\"btn btn-danger\" href=\"{{ path('admin_registration_delete',{'id' : preRegistration.id}) }}\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer la pré-inscription ?`)\">delete</a>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}", "admin/registration/show.html.twig", "/var/www/site/tcs/templates/admin/registration/show.html.twig");
    }
}
