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

/* user/index.html.twig */
class __TwigTemplate_700786eab97afe151c8c0add9ca0d8c6b16e27efd545a8e2971d5eff82bdd0ad extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-3\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"avatar\" alt=\"avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        <br>
        <span class=\"badge badge-primary\">";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 10)), "html", null, true);
        echo " annonces</span>
    </div>
    <div class=\"col-9\">
        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
        ";
        // line 14
        if ((($context["user"] ?? null) === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14))) {
            // line 15
            echo "        <div class=\"mt-3\">
            <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mes informations</a>
            <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mon mot de passe
            </a>
        </div>
        ";
        }
        // line 21
        echo "    </div>
</div>
";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", [], "any", false, false, false, 23);
        echo "
<hr>
<h2>Les annonces de ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 25), "html", null, true);
        echo "</h2>

";
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            echo "<div class=\"row\">
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 29));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 30
                $this->loadTemplate("ad/_ad.html.twig", "user/index.html.twig", 30)->display($context);
                // line 31
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
</div>
";
        } else {
            // line 35
            echo "<div class=\"alert alert-warning\">
    <p>
        <strong>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 37), "html", null, true);
            echo "</strong>n'a pas encore d'annonce sur le site
    </p>
</div>
";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 41,  157 => 37,  153 => 35,  148 => 32,  134 => 31,  132 => 30,  115 => 29,  112 => 28,  110 => 27,  105 => 25,  100 => 23,  96 => 21,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  76 => 13,  70 => 10,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/user/index.html.twig");
    }
}
