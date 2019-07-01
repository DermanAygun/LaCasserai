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

/* about/index.html.twig */
class __TwigTemplate_5853fb5d32f7a8b8421d1bb74dbc2becb06d4927f0277e6f89e93d66af9f4b3e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

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
                                    <h2>Information</h2>
                                    <h1>About Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id=\"colorlib-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about animate-box\">
                        <h2>Welcome to our Hotel</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive\" src=\"images/img_bg_5.jpg\" alt=\"Free HTML5 Bootstrap Template by colorlib.com\">
                </div>
            </div>
        </div>
        <hr style=\"width: 70%;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <img class=\"img-responsive\" src=\"images/img_bg_5.jpg\" alt=\"Free HTML5 Bootstrap Template by colorlib.com\">
                </div>
                <div class=\"col-md-6\">
                    <div class=\"about animate-box\">
                        <h2>We are not an ordinary Hotel</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id=\"colorlib-testimony\" class=\"colorlib-light-grey\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                    <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                    <h2>Our Satisfied Guests says</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person2.jpg);\"></span>
                        <span class=\"user\">Brian Doe</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person1.jpg);\"></span>
                        <span class=\"user\">Nathalie Miller</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person3.jpg);\"></span>
                        <span class=\"user\">Shara Jones</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
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
        return "about/index.html.twig";
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
                                    <h2>Information</h2>
                                    <h1>About Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id=\"colorlib-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about animate-box\">
                        <h2>Welcome to our Hotel</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive\" src=\"images/img_bg_5.jpg\" alt=\"Free HTML5 Bootstrap Template by colorlib.com\">
                </div>
            </div>
        </div>
        <hr style=\"width: 70%;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <img class=\"img-responsive\" src=\"images/img_bg_5.jpg\" alt=\"Free HTML5 Bootstrap Template by colorlib.com\">
                </div>
                <div class=\"col-md-6\">
                    <div class=\"about animate-box\">
                        <h2>We are not an ordinary Hotel</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id=\"colorlib-testimony\" class=\"colorlib-light-grey\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                    <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                    <h2>Our Satisfied Guests says</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person2.jpg);\"></span>
                        <span class=\"user\">Brian Doe</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person1.jpg);\"></span>
                        <span class=\"user\">Nathalie Miller</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"testimony text-center\">
                        <span class=\"img-user\" style=\"background-image: url(images/person3.jpg);\"></span>
                        <span class=\"user\">Shara Jones</span>
                        <small>Satisfied Customer</small>
                        <blockquote>
                            <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "about/index.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\LaCasserai\\templates\\about\\index.html.twig");
    }
}
