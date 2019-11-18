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

/* ad/_collection.html.twig */
class __TwigTemplate_f9f94188965d18851408df87b2a49ab9d928d1a20caa2e2d1f326c5717da9d29 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_ajouter_annonce_images_widget' => [$this, 'block__ajouter_annonce_images_widget'],
            '_ajouter_annonce_images_entry_row' => [$this, 'block__ajouter_annonce_images_entry_row'],
            '_ajouter_annonce_images_entry_widget' => [$this, 'block__ajouter_annonce_images_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_ajouter_annonce_images_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_ajouter_annonce_images_entry_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ajouter_annonce_images_entry_widget', $context, $blocks);
    }

    // line 1
    public function block__ajouter_annonce_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<p>Ici, vous pouvez ajouter vos images</p>
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
<input type=\"hidden\" id=\"widgets-counter\" value=\"0\">
<div class=\"form-group\">
<button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">Ajouter une image</button>
</div>
";
    }

    // line 11
    public function block__ajouter_annonce_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "   ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
   ";
    }

    // line 15
    public function block__ajouter_annonce_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"form-group\" id=\"block_";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-10\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 21), 'widget');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 22), 'errors');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "caption", [], "any", false, false, false, 25), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "caption", [], "any", false, false, false, 26), 'errors');
        echo "
                </div>
            </div>
        </div>
<div class=\"col-2\">
    <button type=\"button\" data-action=\"delete\" data-target=\"#block_";
        // line 31
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-danger\">X</button>
</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ad/_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  110 => 26,  106 => 25,  100 => 22,  96 => 21,  87 => 16,  83 => 15,  76 => 12,  72 => 11,  62 => 4,  58 => 2,  54 => 1,  50 => 15,  47 => 14,  45 => 11,  42 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/_collection.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/ad/_collection.html.twig");
    }
}
