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

/* admin/partials/header.html.twig */
class __TwigTemplate_59f1d8b1b7d795458913ac301663c0afe2ea4bcaa367a3b2ad48a083e8284f73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark     bg-primary\">
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
        echo "\"><i class=\"fas fa-chart-line\"></i>DASCHBOARD</a>
         </li>
         <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\"><i class=\"fas fa-hotel\"></i>ANNONCES</a>
         </li>

         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\"><i class=\"fas fa-folder\"></i>RESERVATIONS</a>
            </li>

            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\"><i class=\"fas fa-comments\"></i>COMMENTAIRES</a>
                </li>
                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\"><i class=\"fas fa-users\"></i>UTILISATEURS</a>
                    </li>
         
         </ul>
         <ul class=\"navbar-nav ml-auto\">
             <li class=\"nav-item\">
                 <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\" class=\"nav-link\"><i class=\"fas fa-eye\"></i>Voir le site
                    </a>
             </li>
         ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "         <li class=\"nav-item dropdown\">
             <a href=\"\" class=\"nav-link dropdown-toggle\" 
             
             data-toggle=\"dropdown\"id=\"accountDropdownLink\">
                 
             <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "picture", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"avatarde ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "fullName", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "fullName", [], "any", false, false, false, 39), "html", null, true);
            echo "    
             </a>
             <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                   
                 <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
             </div>
         </li>
        
          ";
        }
        // line 48
        echo "         </ul>
 
</div>
</nav>
     <!-- flash -->
     ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 54
            echo "     <div class=\"container\">
     <div class=\"alert alert-";
            // line 55
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
     ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                echo "            <p>";
                echo $context["message"];
                echo "</p>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "     </div>
     </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 59,  148 => 57,  144 => 56,  140 => 55,  137 => 54,  133 => 53,  126 => 48,  118 => 43,  107 => 39,  100 => 34,  98 => 33,  92 => 30,  83 => 24,  77 => 21,  70 => 17,  63 => 13,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark     bg-primary\">
        <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">SYMBNB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

     <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
         <ul class=\"navbar-nav mr-auto\">
         <li class=\"nav-item \">
             <a class=\"nav-link\" href=\"{{ path('homepage') }}\"><i class=\"fas fa-chart-line\"></i>DASCHBOARD</a>
         </li>
         <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"{{ path('ads_index')}}\"><i class=\"fas fa-hotel\"></i>ANNONCES</a>
         </li>

         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('ads_index')}}\"><i class=\"fas fa-folder\"></i>RESERVATIONS</a>
            </li>

            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('ads_index')}}\"><i class=\"fas fa-comments\"></i>COMMENTAIRES</a>
                </li>
                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('ads_index')}}\"><i class=\"fas fa-users\"></i>UTILISATEURS</a>
                    </li>
         
         </ul>
         <ul class=\"navbar-nav ml-auto\">
             <li class=\"nav-item\">
                 <a href=\"{{ path('homepage') }}\" target=\"_blank\" class=\"nav-link\"><i class=\"fas fa-eye\"></i>Voir le site
                    </a>
             </li>
         {% if app.user %}
         <li class=\"nav-item dropdown\">
             <a href=\"\" class=\"nav-link dropdown-toggle\" 
             
             data-toggle=\"dropdown\"id=\"accountDropdownLink\">
                 
             <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" alt=\"avatarde {{app.user.fullName}}\">{{app.user.fullName}}    
             </a>
             <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                   
                 <a href=\"{{path('admin_account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
             </div>
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
     {% endfor %}", "admin/partials/header.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/admin/partials/header.html.twig");
    }
}
