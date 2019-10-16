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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_3de32ec1154e0387175a1b2f4e46936dea826e61d924066ae9a4ecadb48d4771 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        echo "TABLEAU DE BORD";
        
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
        <div class=\"row\">
            <div class=\"col\">  
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-users fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "adherent", [], "any", false, false, false, 16), "html", null, true);
        echo " Adhérents au site</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-secondary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-file-archive fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "reservation", [], "any", false, false, false, 30), "html", null, true);
        echo " Réservation de terrains</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-info text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-comments fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "contact", [], "any", false, false, false, 44), "html", null, true);
        echo " Messages reçus</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-newspaper fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "article", [], "any", false, false, false, 58), "html", null, true);
        echo " Articles publiés</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-secondary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-edit fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 72, $this->source); })()), "registration", [], "any", false, false, false, 72), "html", null, true);
        echo " Pré-inscrits pour l'année</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-info text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-edit fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 86, $this->source); })()), "stage", [], "any", false, false, false, 86), "html", null, true);
        echo " Inscrit au stage</h4>
                            </div>
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
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 86,  168 => 72,  151 => 58,  134 => 44,  117 => 30,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}TABLEAU DE BORD{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">  
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-users fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.adherent }} Adhérents au site</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-secondary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-file-archive fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.reservation}} Réservation de terrains</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-info text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-comments fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.contact }} Messages reçus</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-newspaper fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.article }} Articles publiés</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-secondary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-edit fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.registration }} Pré-inscrits pour l'année</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class=\"col\">  
                <div class=\"card bg-info text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fas fa-edit fa-4x\"></i>   
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">{{ stats.stage }} Inscrit au stage</h4>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/dashboard/index.html.twig", "/var/www/site/tcs/templates/admin/dashboard/index.html.twig");
    }
}
