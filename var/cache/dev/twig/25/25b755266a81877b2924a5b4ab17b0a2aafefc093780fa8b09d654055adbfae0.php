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

/* admin/ad/index.html.twig */
class __TwigTemplate_891d4d768e6d363c6e6494639e931c8545e20b6811718d94fe698eef44537e7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ad/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ad/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/index.html.twig", 1);
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

        echo "Administration des annonces";
        
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
        echo "
<h1 class=\"my-5\">Gestion des annonces</h1>
<table class=\"table table-hover\">
<thead>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th class=\"\">Auteur</th>
        <th>Réservation</th>
        <th>Note</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 21
            echo "    <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>
            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 25), "picture", [], "any", false, false, false, 25), "html", null, true);
            echo "\" alt=\"avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 25), "fullName", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"avatar avatar-micro mr-2\">
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ad"], "author", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            <span class=\"badge badge-primary rounded\">";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "bookings", [], "any", false, false, false, 29)), "html", null, true);
            echo "</span>
        </td>
        <td class=\"text-center\">
            <span class=\"badge badge-primary rounded\">";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "avgRatings", [], "any", false, false, false, 32), 1, ",", ""), "html", null, true);
            echo "</span>
        </td>
        <td class=\"text-center\">
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></aa>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</tbody>
</table>
<div class=\"d-flex justify-content-center\">
        <ul class = \"pagination\">
          <li class = \"élément de page désactivé\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> &laquo; </font> </font></a>
          </li>
          <li class = \"élément de page actif\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 1 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 2 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 3 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 4 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 5 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> &raquo; </font> </font></a>
          </li>
        </ul>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 40,  148 => 36,  144 => 35,  138 => 32,  132 => 29,  126 => 26,  120 => 25,  115 => 23,  111 => 22,  108 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des annonces{% endblock %}

{% block body %}

<h1 class=\"my-5\">Gestion des annonces</h1>
<table class=\"table table-hover\">
<thead>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th class=\"\">Auteur</th>
        <th>Réservation</th>
        <th>Note</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    {% for ad in ads %}
    <tr>
        <td>{{ad.id}}</td>
        <td>{{ad.title}}</td>
        <td>
            <img src=\"{{ad.author.picture}}\" alt=\"avatar de {{ad.author.fullName}}\" class=\"avatar avatar-micro mr-2\">
            {{ad.author.fullName}}
        </td>
        <td class=\"text-center\">
            <span class=\"badge badge-primary rounded\">{{ad.bookings|length}}</span>
        </td>
        <td class=\"text-center\">
            <span class=\"badge badge-primary rounded\">{{ad.avgRatings |number_format(1,',','')}}</span>
        </td>
        <td class=\"text-center\">
            <a href=\"{{path('admin_ads_edit', {'id': ad.id}) }}\"class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
            <a href=\"{{path('admin_ads_delete',{'id': ad.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></aa>
        </td>
    </tr>
    {% endfor %}
</tbody>
</table>
<div class=\"d-flex justify-content-center\">
        <ul class = \"pagination\">
          <li class = \"élément de page désactivé\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> &laquo; </font> </font></a>
          </li>
          <li class = \"élément de page actif\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 1 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 2 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 3 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 4 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> 5 </font> </font> </a>
          </li>
          <li class = \"page-item\">
            <a class=\"page-link\" href=\"#\"> <font style = \"vertical-align: inherit;\"> <font style = \"vertical-align: inherit;\"> &raquo; </font> </font></a>
          </li>
        </ul>
      </div>
{% endblock %}
", "admin/ad/index.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/admin/ad/index.html.twig");
    }
}
