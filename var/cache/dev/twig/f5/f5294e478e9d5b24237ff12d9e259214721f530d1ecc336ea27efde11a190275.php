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

/* admin/contact/index.html.twig */
class __TwigTemplate_b636d47b2567b1843262cbfa4acfe124a7484f2490ce1108664dc86b1002d617 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/contact/index.html.twig", 1);
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

        echo "Message reçus";
        
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
        echo "    <h1>Message reçu :</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <img src=\"/img/logo.jpg\" alt=\"logo club\"> 
            </div>
            <div class=\"col-md-10\">
            <div class=\"row\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contacts"]) {
            // line 15
            echo "                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <div class=\"card-header text-center\">
                            <h5 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacts"], "firstname", [], "any", false, false, false, 18), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacts"], "lastname", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacts"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "</h6>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacts"], "date", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacts"], "message", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                        
                            <a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">OUVRIR</a>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contacts"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\">supprimer</a>
                        </div>
                    </div>
 
                    <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h1 class=\"modal-title\" id=\"exampleModalCenterTitle\">votre message</h1>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    ";
            // line 40
            $this->loadTemplate("contact/show.html.twig", "admin/contact/index.html.twig", 40)->display($context);
            // line 41
            echo "                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "         
            </div>
            </div> 
        </div>
        <div class=\"d-flex justify-content-center mt-4\">
            <ul class=\"pagination\">
                <li class=\"page-item ";
        // line 56
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) == 1)) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
                </li>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 59, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            echo "                <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()) == $context["i"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 64, $this->source); })()))) {
            echo "disabled";
        }
        echo "\">
                    <a class=\"page-link\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 65, $this->source); })()) + 1)]), "html", null, true);
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
        return "admin/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 65,  225 => 64,  214 => 61,  207 => 60,  203 => 59,  198 => 57,  192 => 56,  184 => 50,  161 => 41,  159 => 40,  142 => 26,  136 => 23,  132 => 22,  126 => 19,  120 => 18,  115 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Message reçus{% endblock %}

{% block body %}
    <h1>Message reçu :</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <img src=\"/img/logo.jpg\" alt=\"logo club\"> 
            </div>
            <div class=\"col-md-10\">
            <div class=\"row\">
                {% for contacts in contact %}
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <div class=\"card-header text-center\">
                            <h5 class=\"card-title\">{{ contacts.firstname }}  {{ contacts.lastname }}</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\">{{ contacts.email }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">{{ contacts.date | date('d/m/Y')}}</p>
                            <p class=\"card-text\">{{ contacts.message }}</p>
                        
                            <a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">OUVRIR</a>
                            <a href=\"{{ path('admin_contact_delete' ,{'id': contacts.id }) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sur de vouloir supprimer le message ?`)\">supprimer</a>
                        </div>
                    </div>
 
                    <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h1 class=\"modal-title\" id=\"exampleModalCenterTitle\">votre message</h1>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    {% include('contact/show.html.twig') %}
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {% endfor %}         
            </div>
            </div> 
        </div>
        <div class=\"d-flex justify-content-center mt-4\">
            <ul class=\"pagination\">
                <li class=\"page-item {% if page == 1 %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_contact_index', {'page': page - 1 }) }}\">&laquo;</a>
                </li>
                {% for i in 1..pages %}
                <li class=\"page-item {% if page == i %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_contact_index', {'page': i }) }}\">{{ i }}</a>
                </li>
                {% endfor %}
                <li class=\"page-item {% if page == pages %}disabled{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('admin_contact_index', {'page': page + 1 }) }}\">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>    
{% endblock %}
", "admin/contact/index.html.twig", "/var/www/site/tcs/templates/admin/contact/index.html.twig");
    }
}
