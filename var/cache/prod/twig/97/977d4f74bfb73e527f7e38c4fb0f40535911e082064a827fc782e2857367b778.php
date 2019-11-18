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
class __TwigTemplate_fec60ddb740017332a0f520853ea74cfd208e827ba97c31807df6cbe80d809f5 extends \Twig\Template
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
        // line 1
        echo "
";
        // line 3
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 3)]);
        // line 4
        echo "<div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
              ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "rooms", [], "any", false, false, false, 7), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "price", [], "any", false, false, false, 7), "html", null, true);
        echo "&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
          </div>
          <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
          <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "coverImage", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          </a>
          <div class=\"card-bod\">
          <h4 class=\"card-title\">
          <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
          ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></h4>
          <p class=\"card-text\">
          ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "introduction", [], "any", false, false, false, 18), "html", null, true);
        echo "
          </p>
          <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-secondary\">En savoir plus</a>

       
          ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 23)))) {
            // line 24
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier lannonce</a>
          ";
        }
        // line 26
        echo "
          </div>
        </div>
       </div>";
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
        return array (  94 => 26,  88 => 24,  86 => 23,  80 => 20,  75 => 18,  70 => 16,  66 => 15,  59 => 11,  55 => 10,  47 => 7,  42 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/_ad.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/ad/_ad.html.twig");
    }
}
