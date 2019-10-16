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

/* home.html.twig */
class __TwigTemplate_aaa2bd187d50f2e138b1de86cbe22d7055ccd50791f2403d2265a0501a67d053 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        // line 4
        echo "  Bienvenue sur tennis club saussan
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"bg-home hv-100\">  
  <div class=\"container-fluid \">
    <div class=\"jumbotron mt-4 bg-transparent\">
      <h1 class=\"display-3 text-center\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>
        <p class=\"lead text-center\">Association sportif de tennis avec un esprit de famille, venez rejoindre le club pour passer un bon moment au club et jouer avec la bonne humeur.</p>
        <hr class=\"my-4\">
        <p class=\"text-center\">Vous pouvez aussi réserver un terrain directement de ce site.</p>
        <p class=\"lead text-center\">
          <a class=\"btn btn-warning btn-lg anime\" href=\"#\" role=\"button\">Venez</a>
        </p> 
      </div>
  </div>
  <div class=\"container\">
    <hr class=\"my-5\">
    <h2 class=\"h1 mt-3 mb-4 text-white\">Derniers événements :</h2>
    <div class=\"row\">
      <div class=\"col-md-4 py-5\">
        <div class=\"card border-primary mb-3 \" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
      <div class=\"col-md-4 py-5\">
        <div class=\"card mb-3\" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
      <div class=\"col-md-4 py-5\">
        <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Bienvenue sur tennis club saussan
{% endblock %}

{% block body %}
<div class=\"bg-home hv-100\">  
  <div class=\"container-fluid \">
    <div class=\"jumbotron mt-4 bg-transparent\">
      <h1 class=\"display-3 text-center\">{{ title }}</h1>
        <p class=\"lead text-center\">Association sportif de tennis avec un esprit de famille, venez rejoindre le club pour passer un bon moment au club et jouer avec la bonne humeur.</p>
        <hr class=\"my-4\">
        <p class=\"text-center\">Vous pouvez aussi réserver un terrain directement de ce site.</p>
        <p class=\"lead text-center\">
          <a class=\"btn btn-warning btn-lg anime\" href=\"#\" role=\"button\">Venez</a>
        </p> 
      </div>
  </div>
  <div class=\"container\">
    <hr class=\"my-5\">
    <h2 class=\"h1 mt-3 mb-4 text-white\">Derniers événements :</h2>
    <div class=\"row\">
      <div class=\"col-md-4 py-5\">
        <div class=\"card border-primary mb-3 \" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
      <div class=\"col-md-4 py-5\">
        <div class=\"card mb-3\" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
      <div class=\"col-md-4 py-5\">
        <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
          <div class=\"card-header text-center\"><h4 class=\"card-title\">Reprise des entrainements :</h4></div>
            <img src=\"http://placehold.it/200x200\" alt=\"Image de tennis\" style=\"height: 200px; width: 100%; display: block\"> 
            <div class=\"card-body\">
              <p class=\"card-text\">Voila l'annèe viens juste de debuter, <strong>n'oubliez pas vous inscrire</strong></p>
              <a href=\"#\" class=\"btn btn-info\">Plus d'info</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>      
{% endblock %}

", "home.html.twig", "/var/www/site/tcs/templates/home.html.twig");
    }
}
