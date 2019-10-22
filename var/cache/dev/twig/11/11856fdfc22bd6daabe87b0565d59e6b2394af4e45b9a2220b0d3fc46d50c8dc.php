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
        echo "  <section class=\"container-fluid banner\">
    <div class=\"bann\">
    
    <div class=\"inner-banner\">
      <h1>Tennis Club Saussan</h1>
      <hr class=\"separator\">
      <p class=\"justify-content-center\">
      Rejoignez notre club de <strong>tennis</strong>,vous pourrez apprendre à jouer dans un cadre familliale ou progresser grâce au compétence de notre entraineur.<br>
      Nos cours commencent à partir de 17h, Génial pour vos enfants aprés l'école on pratique le tennis le tout dans la bonne humeur....
      </p>
      <button class=\"btn btn-banner\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_create");
        echo "\" class=\"text-dark\">Contactez-nous</a></button>
    </div>
    </div>
  </section>
  <section class=\"container-fluid about\">
    <hr class=\"separator\">
    <div class=\"container\">
        <h2>À propos de nous</h2>
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 city\">
                <img src=\"/img/ball.jpg\" alt=\"balle de tennis\">
            </div>
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 reprise\">
                <img src=\"/img/reprise.jpg\" alt=\"joueur de tennis\">
            </div>
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 texte\">
                <p>
                  Nous sommes une <strong>association sportive</strong> crée en 1983,notre nombre s'eleve à 80 adhérents.
                  Les enfants peuvent commencer à partir de 5 ans pour faire un an de découvert du tennis avec un apprentissage ludique.
                  Nous possédons 3 terrains (2 en dur et 1 en gazon synthétique) et il est possible de <strong>réserver le terrain</strong> 
                  à partir du site pour les adhérents du club, et bien sur en fonction des entrainements,il y aura toujours un terrain pour exercer
                  votre passion.
                  n'hesitez pas à nous <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_create");
        echo "\">contacter</a> pour avoir des renseignements complémentaire, on vous répondra .....   
                </p>
            </div> 
        </div>
    </div>
  </section>
  <section class=\"container-fluid contact\">
    <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-6 col-sx-12 col-sm-12 joie\">
            <img src=\"/img/joie.jpg\" alt=\"joueur de tennis\" >
          </div>
          <div class=\"col-md-5 col-lg-6 col-sx-12 col-sm-12 \">
            <div class=\"contact-text\">
              <h2>Contact :</h2>
                <ul>
                  <li>président: MR Raspaud Frédéric</li>
                  <li>Adresse :</li>
                  <li>  6 Allée de Maguelone</li>
                  <li>      34570 Saussan</li>
                  <li>Téléphone : <li>
                        <li>04/67/27/33/10</li>
              </p>
            </div>    
          </div>
        </div>
    </div>
  </section>
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
        return array (  127 => 40,  102 => 18,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Bienvenue sur tennis club saussan
{% endblock %}

{% block body %}
  <section class=\"container-fluid banner\">
    <div class=\"bann\">
    
    <div class=\"inner-banner\">
      <h1>Tennis Club Saussan</h1>
      <hr class=\"separator\">
      <p class=\"justify-content-center\">
      Rejoignez notre club de <strong>tennis</strong>,vous pourrez apprendre à jouer dans un cadre familliale ou progresser grâce au compétence de notre entraineur.<br>
      Nos cours commencent à partir de 17h, Génial pour vos enfants aprés l'école on pratique le tennis le tout dans la bonne humeur....
      </p>
      <button class=\"btn btn-banner\"><a href=\"{{ path('contact_create')}}\" class=\"text-dark\">Contactez-nous</a></button>
    </div>
    </div>
  </section>
  <section class=\"container-fluid about\">
    <hr class=\"separator\">
    <div class=\"container\">
        <h2>À propos de nous</h2>
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 city\">
                <img src=\"/img/ball.jpg\" alt=\"balle de tennis\">
            </div>
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 reprise\">
                <img src=\"/img/reprise.jpg\" alt=\"joueur de tennis\">
            </div>
            <div class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 texte\">
                <p>
                  Nous sommes une <strong>association sportive</strong> crée en 1983,notre nombre s'eleve à 80 adhérents.
                  Les enfants peuvent commencer à partir de 5 ans pour faire un an de découvert du tennis avec un apprentissage ludique.
                  Nous possédons 3 terrains (2 en dur et 1 en gazon synthétique) et il est possible de <strong>réserver le terrain</strong> 
                  à partir du site pour les adhérents du club, et bien sur en fonction des entrainements,il y aura toujours un terrain pour exercer
                  votre passion.
                  n'hesitez pas à nous <a href=\"{{ path('contact_create')}}\">contacter</a> pour avoir des renseignements complémentaire, on vous répondra .....   
                </p>
            </div> 
        </div>
    </div>
  </section>
  <section class=\"container-fluid contact\">
    <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-6 col-sx-12 col-sm-12 joie\">
            <img src=\"/img/joie.jpg\" alt=\"joueur de tennis\" >
          </div>
          <div class=\"col-md-5 col-lg-6 col-sx-12 col-sm-12 \">
            <div class=\"contact-text\">
              <h2>Contact :</h2>
                <ul>
                  <li>président: MR Raspaud Frédéric</li>
                  <li>Adresse :</li>
                  <li>  6 Allée de Maguelone</li>
                  <li>      34570 Saussan</li>
                  <li>Téléphone : <li>
                        <li>04/67/27/33/10</li>
              </p>
            </div>    
          </div>
        </div>
    </div>
  </section>
{% endblock %}", "home.html.twig", "/var/www/site/tcs/templates/home.html.twig");
    }
}
