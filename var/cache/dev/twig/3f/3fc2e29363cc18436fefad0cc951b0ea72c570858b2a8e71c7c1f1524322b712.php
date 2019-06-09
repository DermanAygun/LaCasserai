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

/* seizoen/show.html.twig */
class __TwigTemplate_437e96a7744dc40d5401e98f9631893b5ed82e5b58c018911e00429b715451cb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "seizoen/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seizoen/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seizoen/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Seizoen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Seizoen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Omschrijving</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 16, $this->source); })()), "omschrijving", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BeginDatum</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 20, $this->source); })()), "beginDatum", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 20, $this->source); })()), "beginDatum", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EindDate</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 24, $this->source); })()), "eindDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 24, $this->source); })()), "eindDate", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Korting</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 28, $this->source); })()), "korting", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seizoen_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seizoen_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["seizoen"]) || array_key_exists("seizoen", $context) ? $context["seizoen"] : (function () { throw new RuntimeError('Variable "seizoen" does not exist.', 35, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "seizoen/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "seizoen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  133 => 35,  128 => 33,  120 => 28,  113 => 24,  106 => 20,  99 => 16,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Seizoen{% endblock %}

{% block body %}
    <h1>Seizoen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ seizoen.id }}</td>
            </tr>
            <tr>
                <th>Omschrijving</th>
                <td>{{ seizoen.omschrijving }}</td>
            </tr>
            <tr>
                <th>BeginDatum</th>
                <td>{{ seizoen.beginDatum ? seizoen.beginDatum|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>EindDate</th>
                <td>{{ seizoen.eindDate ? seizoen.eindDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Korting</th>
                <td>{{ seizoen.korting }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('seizoen_index') }}\">back to list</a>

    <a href=\"{{ path('seizoen_edit', {'id': seizoen.id}) }}\">edit</a>

    {{ include('seizoen/_delete_form.html.twig') }}
{% endblock %}
", "seizoen/show.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\hotel_lacasserai\\templates\\seizoen\\show.html.twig");
    }
}
