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

/* ad/_ad.html.twig */
class __TwigTemplate_f9a0941bd32ef56b5cb071ab79c989b401a49616687df4fec094a759a9c421fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        echo "
";
        // line 3
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]);
        // line 4
        echo "<div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
              ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "rooms", [], "any", false, false, false, 7), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7), 2, ",", ""), "html", null, true);
        echo "&euro;/nuit</strong> <br>
         
              ";
        // line 10
        echo "               ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "comments", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            echo "              ";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 11)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "avgRatings", [], "any", false, false, false, 11)]));
            // line 12
            echo "               ";
        } else {
            // line 13
            echo "               <small>Pas encore noté</small>
               ";
        }
        // line 15
        echo "          
          </div>
          <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
          <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "coverImage", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          </a>
          <div class=\"card-bod\">
          <h4 class=\"card-title\">
          <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
          ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></h4>
          <p class=\"card-text\">
          ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "introduction", [], "any", false, false, false, 25), "html", null, true);
        echo "
          </p>
          <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir plus</a>

       
          ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30)))) {
            // line 31
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 31, $this->source); })()), "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier lannonce</a>
          ";
        }
        // line 33
        echo "
          </div>
        </div>
       </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  110 => 31,  108 => 30,  102 => 27,  97 => 25,  92 => 23,  88 => 22,  81 => 18,  77 => 17,  73 => 15,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  53 => 7,  48 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# déclarer une varible pour les path}{#}
{% set url = path('ads_show', {'slug': ad.slug})%}
<div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
              {{ ad.rooms}}<strong>{{ad.price| number_format(2, ',','')}}&euro;/nuit</strong> <br>
         
              {# affichage des notations étoile #}
               {% if ad.comments|length > 0 %}
              {% include 'partials/rating.html.twig'with{'rating':ad.avgRatings}%}
               {% else %}
               <small>Pas encore noté</small>
               {% endif %}
          
          </div>
          <a href=\"{{ url }}\">
          <img src=\"{{ ad.coverImage }}\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          </a>
          <div class=\"card-bod\">
          <h4 class=\"card-title\">
          <a href=\"{{ url }}\">
          {{ad.title}}</a></h4>
          <p class=\"card-text\">
          {{ad.introduction}}
          </p>
          <a href=\"{{ url }}\" class=\"btn btn-primary\">En savoir plus</a>

       
          {% if app.user and app.user == ad.author %}
          <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier lannonce</a>
          {% endif %}

          </div>
        </div>
       </div>", "ad/_ad.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/ad/_ad.html.twig");
    }
}
