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

/* account/login.html.twig */
class __TwigTemplate_2356bab983e7cf64203ef214252fb2b573a5ddabfee839a38575e36f2fe694ab extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion au site";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-3\">&nbsp;</div>
        <div class=\"col-md-6\">
            <div class=\"bg-light py-3 px-3\">
                <h1>Connectez vous</h1>
                ";
        // line 11
        if (($context["hasError"] ?? null)) {
            // line 12
            echo "                <div class=\"alert alert-danger\">
                    Une erreur est survenue ou le mot de passe est invalide
                </div>
                ";
        }
        // line 16
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\" >
                <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"adresse email\" required value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\">
                </div>
                
                <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Mot de passe\" class=\"form-control\" required>
                </div>
                
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                </div>
                
                
                </form>
            </div>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  73 => 16,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/login.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/account/login.html.twig");
    }
}
