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

/* admin/article/index.html.twig */
class __TwigTemplate_950f0548abeeb73b77209df9bd4bb7ba125ab640a9271a544417c54b574d7e75 extends \Twig\Template
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
        return "/admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article/index.html.twig"));

        $this->parent = $this->loadTemplate("/admin/base.html.twig", "admin/article/index.html.twig", 1);
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

        echo " Création d'article ";
        
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
        echo "    <h1 class=\"text-center\"> liste d'évènements publiés :</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo tennis club\">
            </div>
            <div class=\"col-md-8\">
                <div class=\"bg-transparent shadow p-3 mb-5\">
                    <table class=\"table table-striped\">
                        <thead class=\"bg-secondary\">
                            <tr>
                                <th class=\"text-center\">id</th>
                                <th class=\"text-center\">titre</th>
                                <th class=\"text-center\">resumer</th>
                                <th class=\"text-center\">date creation</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr> 
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "intro", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreated", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer l'adhérent ?`)\"><i class=\"fas fa-trash\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </tbody>
                        </table>
                </div>
            </div>
            <div class=\"col-md-1\">&nbsp;</div>
        </div>
    </div> 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  133 => 32,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/base.html.twig' %}

{% block title %} Création d'article {% endblock %}

{% block body %}
    <h1 class=\"text-center\"> liste d'évènements publiés :</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <img src=\"/img/logo.jpg\" alt=\"logo tennis club\">
            </div>
            <div class=\"col-md-8\">
                <div class=\"bg-transparent shadow p-3 mb-5\">
                    <table class=\"table table-striped\">
                        <thead class=\"bg-secondary\">
                            <tr>
                                <th class=\"text-center\">id</th>
                                <th class=\"text-center\">titre</th>
                                <th class=\"text-center\">resumer</th>
                                <th class=\"text-center\">date creation</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr> 
                        </thead>
                        <tbody>
                        {% for article in articles %}
                            <tr>
                                <td class=\"text-center\">{{article.id}}</td>
                                <td class=\"text-center\">{{article.title}}</td>
                                <td class=\"text-center\">{{article.intro}}</td>
                                <td class=\"text-center\">{{article.dateCreated | date('d/m/Y')}}</td>
                                <td class=\"text-center\">
                                    <a href=\"{{ path('admin_article_delete', {'id': article.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer l'adhérent ?`)\"><i class=\"fas fa-trash\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        </table>
                </div>
            </div>
            <div class=\"col-md-1\">&nbsp;</div>
        </div>
    </div> 
    {% endblock %}", "admin/article/index.html.twig", "/var/www/site/tcs/templates/admin/article/index.html.twig");
    }
}
