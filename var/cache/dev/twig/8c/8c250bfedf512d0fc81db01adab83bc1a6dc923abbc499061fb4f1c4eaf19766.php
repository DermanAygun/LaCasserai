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

/* base.html.twig */
class __TwigTemplate_f80fafd72b8912fc84d498bfc478d21949fe5577e2b4f243949b4c3c6cf8c384 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>


<nav class=\"navbar navbar-expand-lg\">
    <div class=\"nav_wrapper\">

        <a class=\"navbar-brand\" href=\"/\">LaCasserai</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"nav_second_section\">
            <div class=\"crud_section\">
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Admin Panel
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Users</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservering_index");
            echo "\">reservering</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seizoen_index");
            echo "\">seizoen</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soort_index");
            echo "\">soort</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kamer_index");
            echo "\">kamer</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
            echo "\">image</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("extras_index");
            echo "\">extras</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betaal_index");
            echo "\">Betaal</a>
                        </div>
                    </li>
                ";
        }
        // line 50
        echo "            </div>
            <div class=\"log_section\">

                ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [])) {
            // line 54
            echo "                ";
        } else {
            // line 55
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Register</a>
                    </li>
                ";
        }
        // line 62
        echo "
                ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 64
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"color: red;\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                    </li>
                ";
        }
        // line 68
        echo "            </div>



        </div>
    </div>
</nav>

";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LaCasserai";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 78,  261 => 77,  244 => 76,  227 => 10,  209 => 6,  188 => 79,  186 => 78,  184 => 77,  182 => 76,  172 => 68,  166 => 65,  163 => 64,  161 => 63,  158 => 62,  152 => 59,  146 => 56,  143 => 55,  140 => 54,  138 => 53,  133 => 50,  126 => 46,  121 => 44,  116 => 42,  111 => 40,  106 => 38,  101 => 36,  96 => 34,  91 => 32,  83 => 26,  81 => 25,  65 => 11,  63 => 10,  59 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}LaCasserai{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% block stylesheets %}{% endblock %}
</head>
<body>


<nav class=\"navbar navbar-expand-lg\">
    <div class=\"nav_wrapper\">

        <a class=\"navbar-brand\" href=\"/\">LaCasserai</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"nav_second_section\">
            <div class=\"crud_section\">
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Admin Panel
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('user_index') }}\">Users</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('reservering_index') }}\">reservering</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('seizoen_index') }}\">seizoen</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('soort_index') }}\">soort</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('kamer_index') }}\">kamer</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('image_index') }}\">image</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('extras_index') }}\">extras</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('betaal_index') }}\">Betaal</a>
                        </div>
                    </li>
                {% endif %}
            </div>
            <div class=\"log_section\">

                {% if app.user %}
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\">Register</a>
                    </li>
                {% endif %}

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"color: red;\" href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                    </li>
                {% endif %}
            </div>



        </div>
    </div>
</nav>

{% block body %}{% endblock %}
{% block fos_user_content %}{% endblock fos_user_content %}
{% block javascripts %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\hotel_lacasserai\\templates\\base.html.twig");
    }
}
