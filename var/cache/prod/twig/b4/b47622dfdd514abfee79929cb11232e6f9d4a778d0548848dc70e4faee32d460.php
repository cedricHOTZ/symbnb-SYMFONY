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

/* partials/header.html.twig */
class __TwigTemplate_58c5b6a91c7020edb9c83b7c70e94daf24866a192ac0b164d88a34e1f497fbdb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo " <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
           <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">SYMBNB</a>
           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
           <span class=\"navbar-toggler-icon\"></span>
         </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">ACCUEIL</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">ANNONCES</a>
            </li>
            
            </ul>
            <ul class=\"navbar-nav ml-auto\">
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <li class=\"nav-item dropdown\">
                <a href=\"\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"id=\"accountDropdownLink\">
                    
                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "picture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"avatarde ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "fullName", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "fullName", [], "any", false, false, false, 22), "html", null, true);
            echo "    
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                        <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\" class=\"dropdown-item\">Créer une annonce</a>
                        <div class=\"dropdown-divider\"></div>
                    <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"dropdown-item\">Mon compte</a>
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profil</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                </div>
            </li>
            ";
        } else {
            // line 34
            echo "                <li class=\"nav-item\">
                    <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"nav-link\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\">Connexion</a>
                    </li>
             ";
        }
        // line 41
        echo "            </ul>
    
  </div>
</nav>
        <!-- flash -->
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 47
            echo "        <div class=\"container\">
        <div class=\"alert alert-";
            // line 48
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 50
                echo "               <p>";
                echo $context["message"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  143 => 50,  139 => 49,  135 => 48,  132 => 47,  128 => 46,  121 => 41,  115 => 38,  109 => 35,  106 => 34,  99 => 30,  94 => 28,  90 => 27,  85 => 25,  75 => 22,  70 => 19,  68 => 18,  60 => 13,  54 => 10,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
           <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">SYMBNB</a>
           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
           <span class=\"navbar-toggler-icon\"></span>
         </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">ACCUEIL</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('ads_index')}}\">ANNONCES</a>
            </li>
            
            </ul>
            <ul class=\"navbar-nav ml-auto\">
            {% if app.user %}
            <li class=\"nav-item dropdown\">
                <a href=\"\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"id=\"accountDropdownLink\">
                    
                <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" alt=\"avatarde {{app.user.fullName}}\">{{app.user.fullName}}    
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                        <a href=\"{{path('ads_create') }}\" class=\"dropdown-item\">Créer une annonce</a>
                        <div class=\"dropdown-divider\"></div>
                    <a href=\"{{path('account_index')}}\" class=\"dropdown-item\">Mon compte</a>
                    <a href=\"{{path('account_profile')}}\" class=\"dropdown-item\">Modifier mon profil</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{{path('account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
                </div>
            </li>
            {% else %}
                <li class=\"nav-item\">
                    <a href=\"{{path('account_register')}}\" class=\"nav-link\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                        <a href=\"{{path('account_login')}}\" class=\"nav-link\">Connexion</a>
                    </li>
             {% endif %}
            </ul>
    
  </div>
</nav>
        <!-- flash -->
        {% for label, messages in app.flashes %}
        <div class=\"container\">
        <div class=\"alert alert-{{ label }}\">
        {% for message in messages %}
               <p>{{message | raw}}</p>
        {% endfor %}
        </div>
        </div>
        {% endfor %}", "partials/header.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/partials/header.html.twig");
    }
}
