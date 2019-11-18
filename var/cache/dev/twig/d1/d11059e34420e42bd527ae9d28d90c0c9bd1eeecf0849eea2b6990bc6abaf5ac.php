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

/* ad/show.html.twig */
class __TwigTemplate_4f59a3cb28a89122e0a16731bc656593d6539187143bbcc64d7363924fbbb691 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
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
        echo "  <div class=\"ad-title\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "coverImage", [], "any", false, false, false, 8), "html", null, true);
        echo ")\">
    <div class=\"container\">
      <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
      <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "introduction", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
      <p class=\"h2\">
        <strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "rooms", [], "any", false, false, false, 13), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13), "html", null, true);
        echo "&euro;</strong> par nuit
      </p>
      <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Réservez</a>

   
       
      ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 19, $this->source); })()), "author", [], "any", false, false, false, 19)))) {
            // line 20
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer l'annonce</a>
      ";
        }
        // line 23
        echo "    </div>
  </div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 mb-3\">
      ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29);
        echo "
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 32, $this->source); })()), "images", [], "any", false, false, false, 32));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            echo "    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 33), "html", null, true);
            echo " \" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 33)) {
                echo " class=\"active\" ";
            }
            echo "></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </ol>
  <div class=\"carousel-inner\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 37, $this->source); })()), "images", [], "any", false, false, false, 37));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 38
            echo "    <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                echo " active ";
            }
            echo "\">
  
      <img class=\"d-block w-100\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 40), "html", null, true);
            echo "\"  alt=\"First slide \">
      <div class=\"carousel-caption d-none d-md-block\">
       <h5>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
       <p>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>

<hr>
";
        // line 60
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 60, $this->source); })()), "comments", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            echo "<h2 class=\"mb-3\">Commentaires de nos voyageurs:</h2>

<div class=\"alert alert-info\">
  <h4 class=\"alert-heading text-center\">
    <div class=\"row align-items-center\">
      <div class=\"col\">
               Note globale donnée par nos voyageurs
      </div>
      <div class=\"col\">
            ";
            // line 70
            $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 70)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 70, $this->source); })()), "avgRatings", [], "any", false, false, false, 70)]));
            // line 71
            echo "            <br>
               <small> calculée sur ";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "comments", [], "any", false, false, false, 72)), "html", null, true);
            echo " avis</small>
      </div>
    </div>
  </h4>
</div>
";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 77, $this->source); })()), "comments", [], "any", false, false, false, 77));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 78
                echo "<div class=\"bg-light rounded mb-3 py-3 px-3\">
  <strong>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 79), "fullName", [], "any", false, false, false, 79), "html", null, true);
                echo "</strong> a dit:
  <blockquote>
    ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 81), "html", null, true);
                echo "
  </blockquote>
  <strong>Note donnée par ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 83), "fullName", [], "any", false, false, false, 83), "html", null, true);
                echo " : </strong>


";
                // line 86
                $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 86)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 86)]));
                // line 87
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 90
            echo "<h2>Cette annonce n'a pas encore recu de commentaires</h2>
";
        }
        // line 92
        echo "
</div>
    <div class=\"col\">
      ";
        // line 95
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 95, $this->source); })()), "author", [], "any", false, false, false, 95);
        // line 96
        echo "      <div class=\"row mb-3 align-items-center\">
        <div class=\"col-3\">
          <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 98, $this->source); })()), "slug", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">
          <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 99, $this->source); })()), "picture", [], "any", false, false, false, 99), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 99, $this->source); })()), "fullName", [], "any", false, false, false, 99), "html", null, true);
        echo "\">
          </a>
        </div>
          <div class=\"col\">
            <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 103, $this->source); })()), "slug", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\">
            <h3>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 104, $this->source); })()), "fullName", [], "any", false, false, false, 104), "html", null, true);
        echo "</h3>
            </a>
            <span class=\"badge badge-primary\">";
        // line 106
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 106, $this->source); })()), "ads", [], "any", false, false, false, 106)), "html", null, true);
        echo " annonces</span>
          </div>
        </div>
       ";
        // line 109
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 109, $this->source); })()), "description", [], "any", false, false, false, 109);
        echo "
      </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 109,  372 => 106,  367 => 104,  363 => 103,  354 => 99,  350 => 98,  346 => 96,  344 => 95,  339 => 92,  335 => 90,  319 => 87,  317 => 86,  311 => 83,  306 => 81,  301 => 79,  298 => 78,  281 => 77,  273 => 72,  270 => 71,  268 => 70,  257 => 61,  255 => 60,  241 => 48,  222 => 43,  218 => 42,  213 => 40,  205 => 38,  188 => 37,  184 => 35,  163 => 33,  146 => 32,  140 => 29,  132 => 23,  127 => 21,  122 => 20,  120 => 19,  113 => 15,  106 => 13,  101 => 11,  97 => 10,  91 => 8,  81 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
{{ad.title }}
{% endblock %}

{% block body %}
  <div class=\"ad-title\" style=\"background-image: url({{ad.coverImage}})\">
    <div class=\"container\">
      <h1>{{ ad.title }}</h1>
      <p>{{ad.introduction }}</p>
      <p class=\"h2\">
        <strong>{{ad.rooms}} chambres</strong> pour <strong>{{ad.price}}&euro;</strong> par nuit
      </p>
      <a href=\"{{path('booking_create',{'slug': ad.slug}) }}\" class=\"btn btn-primary\">Réservez</a>

   
       
      {% if app.user and app.user == ad.author %}
      <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
      <a href=\"{{ path('ads_delete', {'slug': ad.slug}) }}\" class=\"btn btn-danger\">Supprimer l'annonce</a>
      {% endif %}
    </div>
  </div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 mb-3\">
      {{ad.content | raw }}
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
  {% for image in ad.images %}
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }} \" {% if loop.first %} class=\"active\" {% endif %}></li>
   {% endfor %}
  </ol>
  <div class=\"carousel-inner\">
    {% for image in ad.images %}
    <div class=\"carousel-item {% if loop.first %} active {% endif %}\">
  
      <img class=\"d-block w-100\" src=\"{{ image.url }}\"  alt=\"First slide \">
      <div class=\"carousel-caption d-none d-md-block\">
       <h5>{{ad.title}}</h5>
       <p>{{image.caption}}</p>

      </div>
    </div>
    {% endfor %}
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

<hr>
{% if ad.comments|length > 0 %}
<h2 class=\"mb-3\">Commentaires de nos voyageurs:</h2>

<div class=\"alert alert-info\">
  <h4 class=\"alert-heading text-center\">
    <div class=\"row align-items-center\">
      <div class=\"col\">
               Note globale donnée par nos voyageurs
      </div>
      <div class=\"col\">
            {% include 'partials/rating.html.twig' with{'rating': ad.avgRatings} %}
            <br>
               <small> calculée sur {{ad.comments|length}} avis</small>
      </div>
    </div>
  </h4>
</div>
{% for comment in ad.comments %}
<div class=\"bg-light rounded mb-3 py-3 px-3\">
  <strong>{{comment.author.fullName}}</strong> a dit:
  <blockquote>
    {{comment.content}}
  </blockquote>
  <strong>Note donnée par {{comment.author.fullName}} : </strong>


{% include 'partials/rating.html.twig' with{'rating':comment.rating} %}
</div>
{% endfor %}
{% else %}
<h2>Cette annonce n'a pas encore recu de commentaires</h2>
{% endif %}

</div>
    <div class=\"col\">
      {% set a = ad.author %}
      <div class=\"row mb-3 align-items-center\">
        <div class=\"col-3\">
          <a href=\"{{ path('user_show',{'slug': a.slug}) }}\">
          <img src=\"{{a.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{a.fullName}}\">
          </a>
        </div>
          <div class=\"col\">
            <a href=\"{{ path('user_show',{'slug': a.slug}) }}\">
            <h3>{{a.fullName}}</h3>
            </a>
            <span class=\"badge badge-primary\">{{a.ads | length }} annonces</span>
          </div>
        </div>
       {{a.description | raw }}
      </div>
    </div>
</div>


{% endblock %}", "ad/show.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/ad/show.html.twig");
    }
}
