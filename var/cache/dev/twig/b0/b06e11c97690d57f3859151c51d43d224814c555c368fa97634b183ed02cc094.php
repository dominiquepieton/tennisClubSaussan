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

/* ad/article.html.twig */
class __TwigTemplate_8cdc0021793f6f003ed50e089765c173e5bdc5fe06f4d06acff5a2aff2551f75 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/article.html.twig", 1);
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

        echo "Nos événements sur tcs";
        
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
        echo "    <div class=\"container-fluid header-article\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"/img/1.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"/img/3.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"/img/2.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>
        <div class=\"title-article\">
            <h1 class=\"text-center\">Les événements au Tennis Club Saussan :</h1>
            <p>
             Voici tous nos articles publiés depuis la créations du site bonne lecture.<br>
            Laissez-nous un petit commentaire cela pour amélioré le site....
            </p>    
        </div>            

    </div>
            <div class=\"container\">
            
                <div class=\"row mt-5\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
            echo "                    ";
            $context["lien"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 46)]);
            // line 47
            echo "                        <div class=\"col-md-4\">    
                            <div class=\"card mb-3\">
                                <div class=\"header text-center\">
                                    <h5 class=\"card-title\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["lien"]) || array_key_exists("lien", $context) ? $context["lien"] : (function () { throw new RuntimeError('Variable "lien" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</a></h5>
                                </div>
                                <img class=\"card-img-top\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 52), "html", null, true);
            echo "\" alt=\"image sport\" style=\"height: 200px; width: 100%; display: block\">
                                <div class=\"card-body\">
                                    <p class=\"card-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "intro", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["lien"]) || array_key_exists("lien", $context) ? $context["lien"] : (function () { throw new RuntimeError('Variable "lien" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-warning\">En savoir plus</a>
                                    <p class=\"card-text\"><small class=\"text-muted\">";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreated", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
            echo "</small></p>
                                </div>
                            </div>    
                        </div>       
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 61,  161 => 56,  157 => 55,  153 => 54,  148 => 52,  141 => 50,  136 => 47,  133 => 46,  129 => 45,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos événements sur tcs{% endblock %}

{% block body %}
    <div class=\"container-fluid header-article\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"/img/1.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"/img/3.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"/img/2.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>
        <div class=\"title-article\">
            <h1 class=\"text-center\">Les événements au Tennis Club Saussan :</h1>
            <p>
             Voici tous nos articles publiés depuis la créations du site bonne lecture.<br>
            Laissez-nous un petit commentaire cela pour amélioré le site....
            </p>    
        </div>            

    </div>
            <div class=\"container\">
            
                <div class=\"row mt-5\">
                    {% for article in articles %}
                    {% set lien = path('article_show', {'slug': article.slug}) %}
                        <div class=\"col-md-4\">    
                            <div class=\"card mb-3\">
                                <div class=\"header text-center\">
                                    <h5 class=\"card-title\"><a href=\"{{ lien }}\">{{ article.title }}</a></h5>
                                </div>
                                <img class=\"card-img-top\" src=\"{{ article.image }}\" alt=\"image sport\" style=\"height: 200px; width: 100%; display: block\">
                                <div class=\"card-body\">
                                    <p class=\"card-text\">{{ article.intro }}</p>
                                    <a href=\"{{ lien }}\" class=\"btn btn-warning\">En savoir plus</a>
                                    <p class=\"card-text\"><small class=\"text-muted\">{{ article.dateCreated | date('d/m/Y') }}</small></p>
                                </div>
                            </div>    
                        </div>       
                    {% endfor %}
                </div>
            </div>

{% endblock %}
", "ad/article.html.twig", "/var/www/site/tcs/templates/ad/article.html.twig");
    }
}
