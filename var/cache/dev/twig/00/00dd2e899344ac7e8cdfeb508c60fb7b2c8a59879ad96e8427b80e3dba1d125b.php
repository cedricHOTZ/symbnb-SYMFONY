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

/* booking/show.html.twig */
class __TwigTemplate_5abeab54e05d1d22f61f6b759e4ea5f22b9717d6b1d23a1241a817a6ea2456e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation (n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo ")";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "ad", [], "any", false, false, false, 6);
        // line 7
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "author", [], "any", false, false, false, 7);
        // line 8
        echo "
<h1 class=\"my-5\">Votre réservation (n°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo ")</h1>
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", [0 => "withAlert"], "method", false, false, false, 10)) {
            // line 11
            echo "<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">Bravo!</h4>
    <p>
        Votre réservation auprès de
        <strong>
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 16, $this->source); })()), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo "</a>
        </strong>
        Pour l'annonce
        <strong>
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
            echo " </a>
        </strong>a bien été prise en compte
    </p>
</div>
";
        }
        // line 25
        echo "<div class=\"row\">
    <div class=\"col\">
      <div class=\"alert alert-light\">
          <h2>Détails</h2>
          <dl class=\"row\">
              <dt class=\"col-md-4\">numéro</dt>
              <dd class=\"col-md-8\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</dd>
              <dt class=\"col-md-4\">Date d'arrivée</dt>
              <dd class=\"col-md-8\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 33, $this->source); })()), "startDate", [], "any", false, false, false, 33), "d/m/y"), "html", null, true);
        echo "</dd>
              <dt class=\"col-md-4\">Date de départ</dt>
              <dd class=\"col-md-8\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 35, $this->source); })()), "endDate", [], "any", false, false, false, 35), "d/m/y"), "html", null, true);
        echo "</dd>
              <dt class=\"col-md-4\">Nombre de nuit</dt>
              <dd class=\"col-md-8\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 37, $this->source); })()), "duration", [], "any", false, false, false, 37), "html", null, true);
        echo "</dd>
              <dt class=\"col-md-4\">Montant total</dt>
              <dd class=\"col-md-8\">";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 39, $this->source); })()), "amount", [], "any", false, false, false, 39), 2, ",", ""), "html", null, true);
        echo "&euro;</dd>
              <dt class=\"col-md-4\">Commentaire</dt>
              <dd class=\"col-md-8\">";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 41), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
          </dl>
          <hr>
          <h2 class=\"alert-heading\">Votre hôte</h2>
              <div class=\"row mb-3\">
                  <div class=\"col-3\">
<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "picture", [], "any", false, false, false, 47), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\" avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 47, $this->source); })()), "ad", [], "any", false, false, false, 47), "author", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                  </div>
                  <div class=\"col-9\">
<h4>
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 51, $this->source); })()), "slug", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 51, $this->source); })()), "fullName", [], "any", false, false, false, 51), "html", null, true);
        echo "</a>
</h4>
<span class=\"badge badge-primary\">";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 53, $this->source); })()), "ads", [], "any", false, false, false, 53)), "html", null, true);
        echo "annonces</span>
                  </div>
              </div>
              ";
        // line 56
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56);
        echo "
              <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'onfos sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 57, $this->source); })()), "firstName", [], "any", false, false, false, 57), "html", null, true);
        echo "</a>
        
      </div>
      <div class=\"alert alert-light\" id=\"comment\">
          <h2 class=\"alert-heading\">Votre avis compte !</h2>
        
          ";
        // line 64
        echo "           ";
        // line 65
        echo "          ";
        if ((twig_date_converter($this->env) > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 65, $this->source); })()), "endDate", [], "any", false, false, false, 65)))) {
            // line 66
            echo "          ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 66, $this->source); })()), "ad", [], "any", false, false, false, 66), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)], "method", false, false, false, 66);
            // line 67
            echo "          ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 67, $this->source); })()))) {
                // line 68
                echo "           <blockquote>
                ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 69, $this->source); })()), "content", [], "any", false, false, false, 69), "html", null, true);
                echo "
           </blockquote>
            <strong>Note:</strong>";
                // line 71
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 71)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 71, $this->source); })()), "rating", [], "any", false, false, false, 71)]));
                // line 72
                echo "          ";
            } else {
                // line 73
                echo "               ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_start');
                echo "
               ";
                // line 74
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'widget');
                echo "
               <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
               ";
                // line 76
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
                echo "
          ";
            }
            // line 78
            echo "
          ";
        } else {
            // line 80
            echo "          <p>Vous ne pourrai pas noter cette annonce tant que votre voyage ne sera pas complet</p>
          ";
        }
        // line 82
        echo "      </div>
    </div>

    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2 class=\"alert-heading\">Votre hébergement</h2>
            <h4>
             <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 89, $this->source); })()), "slug", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 89, $this->source); })()), "title", [], "any", false, false, false, 89), "html", null, true);
        echo "</a>
            </h4>
            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 91, $this->source); })()), "coverImage", [], "any", false, false, false, 91), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 91, $this->source); })()), "title", [], "any", false, false, false, 91), "html", null, true);
        echo "\"class=\"img-fluid\">
            ";
        // line 92
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 92, $this->source); })()), "content", [], "any", false, false, false, 92);
        echo "

            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\"class=\"btn btn-primary\">plus d'informations</a>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 94,  280 => 92,  274 => 91,  267 => 89,  258 => 82,  254 => 80,  250 => 78,  245 => 76,  240 => 74,  235 => 73,  232 => 72,  230 => 71,  225 => 69,  222 => 68,  219 => 67,  216 => 66,  213 => 65,  211 => 64,  200 => 57,  196 => 56,  190 => 53,  183 => 51,  174 => 47,  165 => 41,  160 => 39,  155 => 37,  150 => 35,  145 => 33,  140 => 31,  132 => 25,  122 => 20,  113 => 16,  106 => 11,  104 => 10,  100 => 9,  97 => 8,  95 => 7,  93 => 6,  90 => 5,  80 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Réservation (n°{{booking.id}}){% endblock %}

{% block body %}

{% set ad = booking.ad %}
{% set author = ad.author %}

<h1 class=\"my-5\">Votre réservation (n°{{booking.id}})</h1>
{% if app.request.query.get('withAlert') %}
<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">Bravo!</h4>
    <p>
        Votre réservation auprès de
        <strong>
            <a href=\"{{path(\"user_show\",{'slug': author.slug})}}\">{{author.fullName}}</a>
        </strong>
        Pour l'annonce
        <strong>
            <a href=\"{{path('ads_show',{'slug': ad.slug})}}\">{{ad.title}} </a>
        </strong>a bien été prise en compte
    </p>
</div>
{% endif %}
<div class=\"row\">
    <div class=\"col\">
      <div class=\"alert alert-light\">
          <h2>Détails</h2>
          <dl class=\"row\">
              <dt class=\"col-md-4\">numéro</dt>
              <dd class=\"col-md-8\">{{booking.id}}</dd>
              <dt class=\"col-md-4\">Date d'arrivée</dt>
              <dd class=\"col-md-8\">{{booking.startDate|date('d/m/y')}}</dd>
              <dt class=\"col-md-4\">Date de départ</dt>
              <dd class=\"col-md-8\">{{booking.endDate|date('d/m/y')}}</dd>
              <dt class=\"col-md-4\">Nombre de nuit</dt>
              <dd class=\"col-md-8\">{{booking.duration}}</dd>
              <dt class=\"col-md-4\">Montant total</dt>
              <dd class=\"col-md-8\">{{booking.amount|number_format(2,',','')}}&euro;</dd>
              <dt class=\"col-md-4\">Commentaire</dt>
              <dd class=\"col-md-8\">{{booking.comment | default('Aucun commentaire')}}</dd>
          </dl>
          <hr>
          <h2 class=\"alert-heading\">Votre hôte</h2>
              <div class=\"row mb-3\">
                  <div class=\"col-3\">
<img src=\"{{author.picture}}\" class=\"avatar avatar-medium\" alt=\" avatar de {{booking.ad.author.fullName}}\">
                  </div>
                  <div class=\"col-9\">
<h4>
    <a href=\"{{path('user_show',{'slug':author.slug}) }}\">{{author.fullName}}</a>
</h4>
<span class=\"badge badge-primary\">{{author.ads|length}}annonces</span>
                  </div>
              </div>
              {{author.description|raw}}
              <a href=\"{{path(\"user_show\",{'slug':author.slug})}}\" class=\"btn btn-primary\">Plus d'onfos sur {{author.firstName}}</a>
        
      </div>
      <div class=\"alert alert-light\" id=\"comment\">
          <h2 class=\"alert-heading\">Votre avis compte !</h2>
        
          {# affichage du formulaire de notation  apres la date de retour#}
           {# function date de php #}
          {% if date() > date(booking.endDate) %}
          {% set comment = booking.ad.commentFromAuthor(app.user) %}
          {% if comment is not null %}
           <blockquote>
                {{comment.content}}
           </blockquote>
            <strong>Note:</strong>{% include 'partials/rating.html.twig' with{'rating':comment.rating} %}
          {% else %}
               {{form_start(form)}}
               {{form_widget(form)}}
               <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
               {{form_end(form)}}
          {% endif %}

          {% else %}
          <p>Vous ne pourrai pas noter cette annonce tant que votre voyage ne sera pas complet</p>
          {% endif %}
      </div>
    </div>

    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2 class=\"alert-heading\">Votre hébergement</h2>
            <h4>
             <a href=\"{{path('ads_show',{'slug':ad.slug})}}\">{{ad.title}}</a>
            </h4>
            <img src=\"{{ad.coverImage}}\" alt=\"Image de {{ad.title}}\"class=\"img-fluid\">
            {{ad.content| raw}}

            <a href=\"{{path('ads_show',{'slug':ad.slug})}}\"class=\"btn btn-primary\">plus d'informations</a>
        </div>

    </div>
</div>
{% endblock %}", "booking/show.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/booking/show.html.twig");
    }
}
