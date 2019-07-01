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
            'footer' => [$this, 'block_footer'],
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

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    ";
        // line 14
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>
<body>

<div class=\"colorlib-loader\"></div>

<div id=\"page\">

<nav class=\"colorlib-nav\" role=\"navigation\">
    <div class=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [])) {
            // line 40
            echo "                ";
        } else {
            // line 41
            echo "                <div class=\"col-xs-4\">
                    <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"site\">Login</a>
                    <span>/</span>
                    <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\" class=\"site\">Register</a>
                </div>
                ";
        }
        // line 47
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 48
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\" class=\"site\">Logout</a>
                ";
        }
        // line 50
        echo "                <div class=\"col-xs-8 text-right\">
                    <ul class=\"colorlib-social\">
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"top-menu\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-2\">
                    <div id=\"colorlib-logo\"><a href=\"/\">LaCasserai</a></div>
                </div>
                <div class=\"col-xs-10 text-right menu-1\">
                    <ul>
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/rooms\">Rooms</a></li>
                        <li><a href=\"/about\">About</a></li>
                        <li><a href=\"/contact\">Contact</a></li>
                        ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 74
            echo "                        <li class=\"has-dropdown\">
                            <a href=\"#\">Admin Panel</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Users</a></li>
                                <li><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservering_index");
            echo "\">Reservering</a></li>
                                <li><a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seizoen_index");
            echo "\">Seizoen</a></li>
                                <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soort_index");
            echo "\">Soort</a></li>
                                <li><a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kamer_index");
            echo "\">Kamer</a></li>
                                <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
            echo "\">Image</a></li>
                                <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("extras_index");
            echo "\">Extras</a></li>
                                <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("betaal_index");
            echo "\">Betaal</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 88
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

</div>

";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "<div id=\"colorlib-subscribe\" style=\"background-image: url(images/img_bg_2.jpg);\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Sign Up for a Newsletter</h2>
                <p>Get A 50% Discounts in every Rooms, Book now!</p>
                <form class=\"form-inline qbstp-header-subscribe\" style=\"display: block !important;\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-md-offset-0\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" autocomplete=\"off\" id=\"email\" placeholder=\"Enter your email\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top: 5%\">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer id=\"colorlib-footer\" role=\"contentinfo\">
    <div class=\"container\">
        <div class=\"row row-pb-md\">
            <div class=\"col-md-3 colorlib-widget\">
                <h4>LaCasserai</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <p>
                <ul class=\"colorlib-social-icons\">
                    <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                </ul>
                </p>
            </div>
            <div class=\"col-md-3 colorlib-widget\">
                <h4>Quick Links</h4>
                <p>
                <ul class=\"colorlib-footer-links\">
                    <li><a href=\"#\">Accomodation</a></li>
                    <li><a href=\"#\">Dining &amp; Bar</a></li>
                    <li><a href=\"#\">Restaurants</a></li>
                    <li><a href=\"#\">Beach &amp; Resorts</a></li>
                </ul>
                </p>
            </div>
            <div class=\"col-md-3\">
                <h4>Recents Blog Post</h4>
                <ul class=\"colorlib-footer-links\">
                    <li><a href=\"#\">The Ultimate Packing List For Female Travelers</a></li>
                    <li><a href=\"#\">How These 5 People Found The Path to Their Dream Trip</a></li>
                    <li><a href=\"#\">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                </ul>
            </div>

            <div class=\"col-md-3 col-md-push-1\">
                <h4>Contact Information</h4>
                <ul class=\"colorlib-footer-links\">
                    <li> 025 West 55th Street, <br> New York 48775</li>
                    <li><a href=\"tel://1234567920\">+ 1235 2355 98</a></li>
                    <li><a href=\"mailto:info@yoursite.com\">info@LaCasserai.com</a></li>
                    <li><a href=\"http://LaCasserai.com\">LaCasserai.com</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p>
                    <small class=\"block\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Derman Aygun</small>
                </p>
            </div>
        </div>
    </div>
</footer>
";
        // line 174
        $this->displayBlock('footer', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 178
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>

<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

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

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
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
        return array (  471 => 177,  454 => 176,  437 => 174,  420 => 97,  403 => 27,  385 => 6,  370 => 197,  366 => 196,  362 => 195,  358 => 194,  354 => 193,  350 => 192,  346 => 191,  342 => 190,  338 => 189,  334 => 188,  322 => 178,  320 => 177,  318 => 176,  315 => 175,  313 => 174,  235 => 98,  233 => 97,  222 => 88,  215 => 84,  211 => 83,  207 => 82,  203 => 81,  199 => 80,  195 => 79,  191 => 78,  187 => 77,  182 => 74,  180 => 73,  155 => 50,  149 => 48,  146 => 47,  140 => 44,  135 => 42,  132 => 41,  129 => 40,  127 => 39,  114 => 28,  112 => 27,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}LaCasserai{% endblock %}</title>

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    {#<link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">#}

    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/flaticon/font/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <script src=\"{{ asset('js/modernizr-2.6.2.min.js') }}\"></script>

    {% block stylesheets %}{% endblock %}
</head>
<body>

<div class=\"colorlib-loader\"></div>

<div id=\"page\">

<nav class=\"colorlib-nav\" role=\"navigation\">
    <div class=\"top\">
        <div class=\"container\">
            <div class=\"row\">
                {% if app.user %}
                {% else %}
                <div class=\"col-xs-4\">
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"site\">Login</a>
                    <span>/</span>
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"site\">Register</a>
                </div>
                {% endif %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"site\">Logout</a>
                {% endif %}
                <div class=\"col-xs-8 text-right\">
                    <ul class=\"colorlib-social\">
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"top-menu\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-2\">
                    <div id=\"colorlib-logo\"><a href=\"/\">LaCasserai</a></div>
                </div>
                <div class=\"col-xs-10 text-right menu-1\">
                    <ul>
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/rooms\">Rooms</a></li>
                        <li><a href=\"/about\">About</a></li>
                        <li><a href=\"/contact\">Contact</a></li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"has-dropdown\">
                            <a href=\"#\">Admin Panel</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"{{ path('user_index') }}\">Users</a></li>
                                <li><a href=\"{{ path('reservering_index') }}\">Reservering</a></li>
                                <li><a href=\"{{ path('seizoen_index') }}\">Seizoen</a></li>
                                <li><a href=\"{{ path('soort_index') }}\">Soort</a></li>
                                <li><a href=\"{{ path('kamer_index') }}\">Kamer</a></li>
                                <li><a href=\"{{ path('image_index') }}\">Image</a></li>
                                <li><a href=\"{{ path('extras_index') }}\">Extras</a></li>
                                <li><a href=\"{{ path('betaal_index') }}\">Betaal</a></li>
                            </ul>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

</div>

{% block body %}{% endblock %}
<div id=\"colorlib-subscribe\" style=\"background-image: url(images/img_bg_2.jpg);\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Sign Up for a Newsletter</h2>
                <p>Get A 50% Discounts in every Rooms, Book now!</p>
                <form class=\"form-inline qbstp-header-subscribe\" style=\"display: block !important;\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-md-offset-0\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" autocomplete=\"off\" id=\"email\" placeholder=\"Enter your email\">
                                <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top: 5%\">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer id=\"colorlib-footer\" role=\"contentinfo\">
    <div class=\"container\">
        <div class=\"row row-pb-md\">
            <div class=\"col-md-3 colorlib-widget\">
                <h4>LaCasserai</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <p>
                <ul class=\"colorlib-social-icons\">
                    <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                </ul>
                </p>
            </div>
            <div class=\"col-md-3 colorlib-widget\">
                <h4>Quick Links</h4>
                <p>
                <ul class=\"colorlib-footer-links\">
                    <li><a href=\"#\">Accomodation</a></li>
                    <li><a href=\"#\">Dining &amp; Bar</a></li>
                    <li><a href=\"#\">Restaurants</a></li>
                    <li><a href=\"#\">Beach &amp; Resorts</a></li>
                </ul>
                </p>
            </div>
            <div class=\"col-md-3\">
                <h4>Recents Blog Post</h4>
                <ul class=\"colorlib-footer-links\">
                    <li><a href=\"#\">The Ultimate Packing List For Female Travelers</a></li>
                    <li><a href=\"#\">How These 5 People Found The Path to Their Dream Trip</a></li>
                    <li><a href=\"#\">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                </ul>
            </div>

            <div class=\"col-md-3 col-md-push-1\">
                <h4>Contact Information</h4>
                <ul class=\"colorlib-footer-links\">
                    <li> 025 West 55th Street, <br> New York 48775</li>
                    <li><a href=\"tel://1234567920\">+ 1235 2355 98</a></li>
                    <li><a href=\"mailto:info@yoursite.com\">info@LaCasserai.com</a></li>
                    <li><a href=\"http://LaCasserai.com\">LaCasserai.com</a></li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p>
                    <small class=\"block\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Derman Aygun</small>
                </p>
            </div>
        </div>
    </div>
</footer>
{% block footer %}{% endblock %}

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

<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.flexslider-min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/magnific-popup-options.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>

</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\LaCasserai\\templates\\base.html.twig");
    }
}
