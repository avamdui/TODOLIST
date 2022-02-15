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

/* security/login.html.twig */
class __TwigTemplate_8451d00451ec5beaddcf55a823b51b48341de5538de5ec68413bbb54a10a66ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<br>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-10 col-md-offset-1 mb-4\">
\t\t\t<h1>Connexion</h1>
\t\t\t<form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" placeholder=\" Adresse email...\" type=\"text\" name=\"_username\" requiered>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" placeholder=\" Mot de passe...\" type=\"password\" name=\"_password\" requiered>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\tConnexion !
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<br>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-10 col-md-offset-1 mb-4\">
\t\t\t<h1>Connexion</h1>
\t\t\t<form action=\"{{ path('login') }}\" method=\"POST\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" placeholder=\" Adresse email...\" type=\"text\" name=\"_username\" requiered>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" placeholder=\" Mot de passe...\" type=\"password\" name=\"_password\" requiered>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">
\t\t\t\t\t\tConnexion !
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\NMPROOT\\Documents\\OPENCLASSROOM\\p8\\TODOLIST\\templates\\security\\login.html.twig");
    }
}
