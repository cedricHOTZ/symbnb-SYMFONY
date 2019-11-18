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
class __TwigTemplate_ae6d6685b709465d56de1464115f0745912f94b2ad49db6c499ae4f833488dc6 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7), "html", null, true);
        echo "&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
          </div>
          <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">
          <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "coverImage", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          </a>
          <div class=\"card-bod\">
          <h4 class=\"card-title\">
          <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
          ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></h4>
          <p class=\"card-text\">
          ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "introduction", [], "any", false, false, false, 18), "html", null, true);
        echo "
          </p>
          <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-secondary\">En savoir plus</a>

       
          ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "author", [], "any", false, false, false, 23)))) {
            // line 24
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier lannonce</a>
          ";
        }
        // line 26
        echo "
          </div>
        </div>
       </div>";
        
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
        return array (  97 => 26,  91 => 24,  89 => 23,  83 => 20,  78 => 18,  73 => 16,  69 => 15,  62 => 11,  58 => 10,  50 => 7,  45 => 4,  43 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# déclarer une varible pour les path}{#}
{% set url = path('ads_show', {'slug': ad.slug})%}
<div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
              {{ ad.rooms}}<strong>{{ad.price}}&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
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
          <a href=\"{{ url }}\" class=\"btn btn-secondary\">En savoir plus</a>

       
          {% if app.user and app.user == ad.author %}
          <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier lannonce</a>
          {% endif %}

          </div>
        </div>
       </div>", "ad/_ad.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/ad/_ad.html.twig");
    }
}
