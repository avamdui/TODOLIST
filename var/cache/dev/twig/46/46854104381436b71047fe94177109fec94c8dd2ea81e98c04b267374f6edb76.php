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

/* task/list.html.twig */
class __TwigTemplate_2e91626dbe78a456878c7e0decdf5138988c91b0f5c5a914a10dd720a36ff900 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_img' => [$this, 'block_header_img'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_img"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_img"));

        echo "<img class=\"slide-image\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/todolist_content.jpg"), "html", null, true);
        echo "\" alt=\"todo list\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
        echo "\" class=\"btn btn-info pull-right\">Créer une tâche</a>
\t<div class=\"row\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 10
            echo "\t\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4 class=\"pull-right\">
\t\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"text-muted small mb-0\">Tache créer par :
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>

\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm pull-right\">
\t\t\t\t\t\t\t\t";
            // line 32
            if ( !twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 32)) {
                echo "Marquer comme faite";
            } else {
                echo "Marquer non terminée
\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\tIl n'y a pas encore de tâche enregistrée.
\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
            echo "\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 48,  174 => 45,  170 => 43,  158 => 36,  154 => 34,  147 => 32,  142 => 30,  135 => 26,  130 => 24,  122 => 21,  118 => 19,  114 => 17,  110 => 15,  108 => 14,  102 => 10,  97 => 9,  91 => 7,  81 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header_img %}<img class=\"slide-image\" src=\"{{ asset('img/todolist_content.jpg') }}\" alt=\"todo list\">
{% endblock %}

{% block body %}
\t<a href=\"{{ path('task_create') }}\" class=\"btn btn-info pull-right\">Créer une tâche</a>
\t<div class=\"row\">
\t\t{% for task in tasks %}
\t\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4 class=\"pull-right\">
\t\t\t\t\t\t\t{% if task.isDone %}
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<a href=\"{{ path('task_edit', {'id' : task.id }) }}\">{{ task.title }}</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"text-muted small mb-0\">Tache créer par :
\t\t\t\t\t\t\t{{ task.user.username}}</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p>{{ task.content }}</p>

\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<form action=\"{{ path('task_toggle', {'id' : task.id }) }}\">
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm pull-right\">
\t\t\t\t\t\t\t\t{% if not task.isDone %}Marquer comme faite{% else %}Marquer non terminée
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form action=\"{{ path('task_delete', {'id' : task.id }) }}\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\tIl n'y a pas encore de tâche enregistrée.
\t\t\t\t<a href=\"{{ path('task_create') }}\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "task/list.html.twig", "C:\\Users\\NMPROOT\\Documents\\OPENCLASSROOM\\p8\\TODOLIST\\templates\\task\\list.html.twig");
    }
}
