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

/* home/index.html.twig */
class __TwigTemplate_b85fa6e384a82e2feb71ff7167c2e1b0efeecc42b44576f71de89e13e70fc08a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "Bienvenue sur le meilleur réseau d'appartement
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"jumbotron mt-5\">
    <h1 class=\"display-3\">Bienvenue</h1>
    <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaire qui veulent gagner de l'argent en proposant leur bien à la location.</p>
    <hr class=\"my-4\">
    <p>Vous êtes voyageur ? Et vous voulez voir oû vous pourrez loger pour votre prochain déplacement.</p>
    <p class=\"lead\">
      <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
    </p>
</div>
<h2 class=\"h1 mt-3 mb-4\">Nos appartement stars</h2>
<div class=\"row mt-5\">
  <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
               3 chambres,<strong>49&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
          </div>
          <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          <div class=\"card-bod\">
          <h4 class=\"card-title\">Appartement de ouf</h4>
          <p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempora labore aperiam. Libero aliquid officia aperiam molestias quod assumenda blanditiis.</p>
          <a href=\"\" class=\"btn btn-secondary\">En savoir plus</a>
          </div>
      </div>
  </div>  <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
               3 chambres,<strong>49&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
          </div>
          <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          <div class=\"card-bod\">
          <h4 class=\"card-title\">Appartement de ouf</h4>
          <p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempora labore aperiam. Libero aliquid officia aperiam molestias quod assumenda blanditiis.</p>
          <a href=\"\" class=\"btn btn-secondary\">En savoir plus</a>
          </div>
      </div>
  </div>  <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
          <div class=\"card-header text-center\">
               3 chambres,<strong>49&euro;/nuit</strong> <br>
               <small> Pas encore noté</small>
          </div>
          <img src=\"http://placehold.it/1000x400\" alt=\"image de l'appartement\" style=\"height: 200px;width: 100%; display: block\">
          <div class=\"card-bod\">
          <h4 class=\"card-title\">Appartement de ouf</h4>
          <p class=\"card-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempora labore aperiam. Libero aliquid officia aperiam molestias quod assumenda blanditiis.</p>
          <a href=\"\" class=\"btn btn-secondary\">En savoir plus</a>
          </div>
      </div>
  </div>
  
  <h2 class=\"h1 mt-3 mb-4\">Nos propriétaire stars</h2>
    <div class=\"row mt-5\">
      <div class=\"col-md-6\">
        <div class=\"card border-secondary mb-3\">
          <div class=\"card-body\">
            <h4 class=\"card-title\">Luc Bhorra</h4>
            <hr>
          <div class=\"card-text\">
            <img src=\"http://placehold.it/64x64\" alt=\"avatar\" class=\"float-left mr-3\">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere harum eligendi magnam, itaque culpa error recusandae ipsam quia, optio praesentium ipsum dolores doloremque iure corporis obcaecati repellat dicta et.20</p>
            <a href=\"\" class=\"btn btn-success float-right\"></a>
            </div>
          </div> 
        </div>
    </div>
        <div class=\"col-md-6\">
          <div class=\"card border-secondary mb-3\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">julien douhit</h4>
              <hr>
            <div class=\"card-text\">
              <img src=\"http://placehold.it/64x64\" alt=\"avatar\" class=\"float-left mr-3\">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere harum eligendi magnam, itaque culpa error recusandae ipsam quia, optio praesentium ipsum dolores doloremque iure corporis obcaecati repellat dicta et.20</p>
              <a href=\"\" class=\"btn btn-success float-right\"></a>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/macbook/Desktop/symfony-udemy/templates/home/index.html.twig");
    }
}
