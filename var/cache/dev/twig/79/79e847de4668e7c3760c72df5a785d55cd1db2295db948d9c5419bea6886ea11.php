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

/* kamers/index.html.twig */
class __TwigTemplate_49ae29d05f82eba9a7962d4c1c9e45c3264c3b2ca4b17a4fb9fc38d79c665d84 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "kamers/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kamers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kamers/index.html.twig"));

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
                                    <h2>Choose our Best</h2>
                                    <h1>Rooms &amp; Suites</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-1.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-1.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Suite</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">149</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Only 10 rooms are available</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-2.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-2.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">199</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-3.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-3.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Family Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">249</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Two double beds</li>
                            <li><i class=\"icon-check\"></i> Babysitting facilities</li>
                            <li><i class=\"icon-check\"></i> 1 free bed available on request</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-4.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-4.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Classic Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">179</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Only 10 rooms are available</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-5.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-5.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Superior Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">270</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-6.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-6.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Superior Family Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\"><small>\$</small></span>
                            <span class=\"price-room\">270</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
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
        return "kamers/index.html.twig";
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
                                    <h2>Choose our Best</h2>
                                    <h1>Rooms &amp; Suites</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-1.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-1.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Suite</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">149</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Only 10 rooms are available</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-2.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-2.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">199</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-3.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-3.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Family Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">249</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Two double beds</li>
                            <li><i class=\"icon-check\"></i> Babysitting facilities</li>
                            <li><i class=\"icon-check\"></i> 1 free bed available on request</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-4.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-4.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Classic Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">179</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Only 10 rooms are available</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-5.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-5.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Superior Double Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\">\$</span>
                            <span class=\"price-room\">270</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
                <div class=\"col-md-4 room-wrap animate-box\">
                    <a href=\"images/room-6.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-6.jpg);\"></a>
                    <div class=\"desc text-center\">
                        <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                        <h3><a href=\"rooms-suites.html\">Superior Family Room</a></h3>
                        <p class=\"price\">
                            <span class=\"currency\"><small>\$</small></span>
                            <span class=\"price-room\">270</span>
                            <span class=\"per\">/ per night</span>
                        </p>
                        <ul>
                            <li><i class=\"icon-check\"></i> Perfect for traveling couples</li>
                            <li><i class=\"icon-check\"></i> Breakfast included</li>
                            <li><i class=\"icon-check\"></i> Price does not include VAT &amp; services fee</li>
                        </ul>
                        <p><a class=\"btn btn-primary btn-book\">Book now!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{#<div>#}
    {#<div class=\"image_gallery\" style=\"display: flex;\">#}
        {#{% for image in images %}#}
            {#<div class=\"card\" style=\"width: 18rem; margin: 0 10px;\">#}
                {#<img src=\"{{ vich_uploader_asset(image, 'imagefile') }}\" class=\"card-img-top\">#}
                {#<div class=\"card-body\">#}
                    {#<h5 class=\"card-title\">Kamer Naam</h5>#}
                    {#<p class=\"card-text\">85\$ p/n</p>#}
                    {#<hr>#}
                    {#<p class=\"card-text\">Extra's</p>#}
                    {#<p class=\"card-text\">- Double Sized Bed<br>- Fast Wifi</p>#}
                    {#<a href=\"#\" class=\"btn btn-primary\">Book Now</a>#}
                {#</div>#}
            {#</div>#}
        {#{% endfor %}#}
    {#</div>#}
{#</div>#}", "kamers/index.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\LaCasserai\\templates\\kamers\\index.html.twig");
    }
}
