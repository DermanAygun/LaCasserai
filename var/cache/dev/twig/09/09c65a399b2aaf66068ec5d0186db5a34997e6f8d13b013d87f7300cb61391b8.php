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

/* contact/index.html.twig */
class __TwigTemplate_a4e65f95ebdef91332d927313b90b9ce7555e4c352370fd06c08151651824707 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <aside id=\"colorlib-hero\">
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li style=\"background-image: url(images/img_bg_5.jpg);\">
                    <div class=\"overlay\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                                <div class=\"slider-text-inner slider-text-inner2 text-center\">
                                    <h2>Get in touch</h2>
                                    <h1>Contact Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id=\"colorlib-contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 animate-box\">
                    <h3>Contact Information</h3>
                    <div class=\"row contact-info-wrap\">
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-location-2\"></i></span> 025 West 55th Street, <br> New York 48775</p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-phone3\"></i></span> <a href=\"tel://1234567920\">+ 1235 2355 98</a></p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-paperplane\"></i></span> <a href=\"mailto:info@yoursite.com\">info@LaCasserai.com</a></p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-globe\"></i></span> <a href=\"#\">LaCasserai.com</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10 col-md-offset-1 animate-box\">
                    <h3>Get In Touch</h3>
                    <form action=\"#\">
                        <div class=\"row form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"fname\">First Name</label>
                                <input type=\"text\" id=\"fname\" class=\"form-control\" placeholder=\"Your firstname\">
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\">Last Name</label>
                                <input type=\"text\" id=\"lname\" class=\"form-control\" placeholder=\"Your lastname\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"email\">Email</label>
                                <input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Your email address\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"subject\">Subject</label>
                                <input type=\"text\" id=\"subject\" class=\"form-control\" placeholder=\"Your subject of this message\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"message\">Message</label>
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Say something about us\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group text-center\">
                            <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <aside id=\"colorlib-hero\">
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li style=\"background-image: url(images/img_bg_5.jpg);\">
                    <div class=\"overlay\"></div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                                <div class=\"slider-text-inner slider-text-inner2 text-center\">
                                    <h2>Get in touch</h2>
                                    <h1>Contact Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id=\"colorlib-contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 animate-box\">
                    <h3>Contact Information</h3>
                    <div class=\"row contact-info-wrap\">
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-location-2\"></i></span> 025 West 55th Street, <br> New York 48775</p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-phone3\"></i></span> <a href=\"tel://1234567920\">+ 1235 2355 98</a></p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-paperplane\"></i></span> <a href=\"mailto:info@yoursite.com\">info@LaCasserai.com</a></p>
                        </div>
                        <div class=\"col-md-3\">
                            <p><span><i class=\"icon-globe\"></i></span> <a href=\"#\">LaCasserai.com</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10 col-md-offset-1 animate-box\">
                    <h3>Get In Touch</h3>
                    <form action=\"#\">
                        <div class=\"row form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"fname\">First Name</label>
                                <input type=\"text\" id=\"fname\" class=\"form-control\" placeholder=\"Your firstname\">
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\">Last Name</label>
                                <input type=\"text\" id=\"lname\" class=\"form-control\" placeholder=\"Your lastname\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"email\">Email</label>
                                <input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Your email address\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"subject\">Subject</label>
                                <input type=\"text\" id=\"subject\" class=\"form-control\" placeholder=\"Your subject of this message\">
                            </div>
                        </div>

                        <div class=\"row form-group\">
                            <div class=\"col-md-12\">
                                <label for=\"message\">Message</label>
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Say something about us\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group text-center\">
                            <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "contact/index.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\LaCasserai\\templates\\contact\\index.html.twig");
    }
}
