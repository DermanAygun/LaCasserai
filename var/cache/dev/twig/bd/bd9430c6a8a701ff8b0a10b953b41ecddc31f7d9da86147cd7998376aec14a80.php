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

/* reservering/show.html.twig */
class __TwigTemplate_7428a8f9f9eeafcb525a21ee4ca160d7c37402d1ed4e86cd2c6c2a5873cc8da8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservering/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservering/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservering/show.html.twig"));

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

        echo "Reservering";
        
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
        echo "    <h1>Reservering</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CheckinDate</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 16, $this->source); })()), "checkinDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 16, $this->source); })()), "checkinDate", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CheckoutDate</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 20, $this->source); })()), "checkoutDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 20, $this->source); })()), "checkoutDate", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservering_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservering_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservering"]) || array_key_exists("reservering", $context) ? $context["reservering"] : (function () { throw new RuntimeError('Variable "reservering" does not exist.', 27, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "reservering/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservering/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  119 => 27,  114 => 25,  106 => 20,  99 => 16,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservering{% endblock %}

{% block body %}
    <h1>Reservering</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservering.id }}</td>
            </tr>
            <tr>
                <th>CheckinDate</th>
                <td>{{ reservering.checkinDate ? reservering.checkinDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>CheckoutDate</th>
                <td>{{ reservering.checkoutDate ? reservering.checkoutDate|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('reservering_index') }}\">back to list</a>

    <a href=\"{{ path('reservering_edit', {'id': reservering.id}) }}\">edit</a>

    {{ include('reservering/_delete_form.html.twig') }}
{% endblock %}
", "reservering/show.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\hotel_lacasserai\\templates\\reservering\\show.html.twig");
    }
}
