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

/* default/index.html.twig */
class __TwigTemplate_b7be4fce74cbcf3638d57fa381245189b1f3d63a7b5a4fc574983f7d4a800054 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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

        echo "LaCasserai";
        
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
        echo "<body>

<aside id=\"colorlib-hero\">
    <div class=\"flexslider\">
        <ul class=\"slides\">

            <li style=\"background-image: url(images/img_bg_5.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Welcome to LaCasserai</h2>
                                <h1>A Luxury Hotel</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_1.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Discover &amp; Enjoy</h2>
                                <h1>Everything you need in LaCasserai</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_3.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluids\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>You are invited</h2>
                                <h1>We know how to please you</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_4.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Come &amp; enjoy the unforgetable nights</h2>
                                <h1>In the heart of LaCasserai</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id=\"colorlib-reservation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 search-wrap\">
                <form action=\"/rooms\" method=\"post\" class=\"colorlib-form\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label for=\"date\">Check-in:</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-calendar2\"></i>
                                    <input type=\"text\" id=\"date\" class=\"form-control date\" placeholder=\"Check-in date\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label for=\"date\">Check-out:</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-calendar2\"></i>
                                    <input type=\"text\" id=\"date\" class=\"form-control date\" placeholder=\"Check-out date\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <label for=\"adults\">Adults</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-arrow-down3\"></i>
                                    <select name=\"people\" id=\"people\" style=\"height: auto!important;\" class=\"form-control\">
                                        <option style=\"color: black;\" value=\"#\">1</option>
                                        <option style=\"color: black;\" value=\"#\">2</option>
                                        <option style=\"color: black;\" value=\"#\">3</option>
                                        <option style=\"color: black;\" value=\"#\">4</option>
                                        <option style=\"color: black;\" value=\"#\">5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <label for=\"children\">Children</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-arrow-down3\"></i>
                                    <select name=\"people\" id=\"people\" style=\"height: auto!important;\" class=\"form-control\">
                                        <option style=\"color: black;\" value=\"#\">1</option>
                                        <option style=\"color: black;\" value=\"#\">2</option>
                                        <option style=\"color: black;\" value=\"#\">3</option>
                                        <option style=\"color: black;\" value=\"#\">4</option>
                                        <option style=\"color: black;\" value=\"#\">5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Search\" class=\"btn btn-primary btn-block\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id=\"colorlib-services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-reception\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>24/7 Front Desk</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-herbs\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Spa Suites</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-car\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Transfer Services</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-cheers\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Restaurant &amp; Bar</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Rooms &amp; Suites</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 animate-box\">
                <div class=\"owl-carousel owl-carousel2\">
                    <div class=\"item\">
                        <a href=\"images/room-1.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-1.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Suite</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">99</span>
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
                    <div class=\"item\">
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
                    <div class=\"item\">
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
                    <div class=\"item\">
                        <a href=\"images/room-4.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-4.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Classic Double Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">150</span>
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
                    <div class=\"item\">
                        <a href=\"images/room-5.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-5.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Superior Double Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">200</span>
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
                    <div class=\"item\">
                        <a href=\"images/room-6.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-6.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Superior Family Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\"><small>\$</small></span>
                                <span class=\"price-room\">299</span>
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
            <div class=\"col-md-12 text-center animate-box\">
                <a href=\"/rooms\">View all rooms <i class=\"icon-arrow-right3\"></i></a>
            </div>
        </div>
    </div>
</div>


<div id=\"colorlib-dining-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Dining &amp; Bar</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"diningbar-flex\">
                <div class=\"half animate-box\">
                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#mains\" aria-controls=\"mains\" role=\"tab\" data-toggle=\"tab\">Mains</a></li>
                        <li role=\"presentation\"><a href=\"#desserts\" aria-controls=\"desserts\" role=\"tab\" data-toggle=\"tab\">Desserts</a></li>
                        <li role=\"presentation\"><a href=\"#drinks\" aria-controls=\"drinks\" role=\"tab\" data-toggle=\"tab\">Drinks</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"mains\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-1.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$25.99</span>
                                                <h3>Grilled Pork</h3>
                                                <p class=\"cat\">Meat / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-2.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$30.99</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$40.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.50</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"desserts\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-1.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$39.90</span>
                                                <h3>Fried Potatoes with Garlic</h3>
                                                <p class=\"cat\">Viggies / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.99</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$50.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$29.00</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"drinks\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-8.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$25.00</span>
                                                <h3>Fried Potatoes with Garlic</h3>
                                                <p class=\"cat\">Viggies / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-9.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.50</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$30.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$29.99</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end half -->
                <div class=\"half diningbar-img\" style=\"background-image: url(images/cover_img_1.jpg);\"></div><!-- end half -->
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

</body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LaCasserai{% endblock %}

{% block body %}
<body>

<aside id=\"colorlib-hero\">
    <div class=\"flexslider\">
        <ul class=\"slides\">

            <li style=\"background-image: url(images/img_bg_5.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Welcome to LaCasserai</h2>
                                <h1>A Luxury Hotel</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_1.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Discover &amp; Enjoy</h2>
                                <h1>Everything you need in LaCasserai</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_3.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluids\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>You are invited</h2>
                                <h1>We know how to please you</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style=\"background-image: url(images/img_bg_4.jpg);\">
                <div class=\"overlay\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 col-md-offset-3 slider-text\">
                            <div class=\"slider-text-inner text-center\">
                                <h2>Come &amp; enjoy the unforgetable nights</h2>
                                <h1>In the heart of LaCasserai</h1>
                                <p><a class=\"btn btn-primary btn-demo\" href=\"#\"></i> View Detail</a> <a class=\"btn btn-primary btn-learn\">Know More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id=\"colorlib-reservation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 search-wrap\">
                <form action=\"/rooms\" method=\"post\" class=\"colorlib-form\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label for=\"date\">Check-in:</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-calendar2\"></i>
                                    <input type=\"text\" id=\"date\" class=\"form-control date\" placeholder=\"Check-in date\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label for=\"date\">Check-out:</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-calendar2\"></i>
                                    <input type=\"text\" id=\"date\" class=\"form-control date\" placeholder=\"Check-out date\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <label for=\"adults\">Adults</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-arrow-down3\"></i>
                                    <select name=\"people\" id=\"people\" style=\"height: auto!important;\" class=\"form-control\">
                                        <option style=\"color: black;\" value=\"#\">1</option>
                                        <option style=\"color: black;\" value=\"#\">2</option>
                                        <option style=\"color: black;\" value=\"#\">3</option>
                                        <option style=\"color: black;\" value=\"#\">4</option>
                                        <option style=\"color: black;\" value=\"#\">5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"form-group\">
                                <label for=\"children\">Children</label>
                                <div class=\"form-field\">
                                    <i class=\"icon icon-arrow-down3\"></i>
                                    <select name=\"people\" id=\"people\" style=\"height: auto!important;\" class=\"form-control\">
                                        <option style=\"color: black;\" value=\"#\">1</option>
                                        <option style=\"color: black;\" value=\"#\">2</option>
                                        <option style=\"color: black;\" value=\"#\">3</option>
                                        <option style=\"color: black;\" value=\"#\">4</option>
                                        <option style=\"color: black;\" value=\"#\">5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Search\" class=\"btn btn-primary btn-block\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id=\"colorlib-services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-reception\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>24/7 Front Desk</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-herbs\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Spa Suites</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-car\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Transfer Services</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class=\"col-md-3 animate-box text-center\">
                <div class=\"services\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-cheers\"></i>
\t\t\t\t\t\t\t</span>
                    <h3>Restaurant &amp; Bar</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"colorlib-rooms\" class=\"colorlib-light-grey\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Rooms &amp; Suites</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 animate-box\">
                <div class=\"owl-carousel owl-carousel2\">
                    <div class=\"item\">
                        <a href=\"images/room-1.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-1.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Suite</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">99</span>
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
                    <div class=\"item\">
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
                    <div class=\"item\">
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
                    <div class=\"item\">
                        <a href=\"images/room-4.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-4.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Classic Double Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">150</span>
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
                    <div class=\"item\">
                        <a href=\"images/room-5.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-5.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Superior Double Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\">\$</span>
                                <span class=\"price-room\">200</span>
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
                    <div class=\"item\">
                        <a href=\"images/room-6.jpg\" class=\"room image-popup-link\" style=\"background-image: url(images/room-6.jpg);\"></a>
                        <div class=\"desc text-center\">
                            <span class=\"rate-star\"><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full full\"></i><i class=\"icon-star-full\"></i></span>
                            <h3><a href=\"rooms-suites.html\">Superior Family Room</a></h3>
                            <p class=\"price\">
                                <span class=\"currency\"><small>\$</small></span>
                                <span class=\"price-room\">299</span>
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
            <div class=\"col-md-12 text-center animate-box\">
                <a href=\"/rooms\">View all rooms <i class=\"icon-arrow-right3\"></i></a>
            </div>
        </div>
    </div>
</div>


<div id=\"colorlib-dining-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 text-center colorlib-heading animate-box\">
                <span><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i><i class=\"icon-star-full\"></i></span>
                <h2>Dining &amp; Bar</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"diningbar-flex\">
                <div class=\"half animate-box\">
                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#mains\" aria-controls=\"mains\" role=\"tab\" data-toggle=\"tab\">Mains</a></li>
                        <li role=\"presentation\"><a href=\"#desserts\" aria-controls=\"desserts\" role=\"tab\" data-toggle=\"tab\">Desserts</a></li>
                        <li role=\"presentation\"><a href=\"#drinks\" aria-controls=\"drinks\" role=\"tab\" data-toggle=\"tab\">Drinks</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"mains\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-1.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$25.99</span>
                                                <h3>Grilled Pork</h3>
                                                <p class=\"cat\">Meat / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-2.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$30.99</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$40.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.50</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"desserts\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-1.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$39.90</span>
                                                <h3>Fried Potatoes with Garlic</h3>
                                                <p class=\"cat\">Viggies / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.99</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$50.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$29.00</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"drinks\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <ul class=\"menu-dish\">
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-8.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$25.00</span>
                                                <h3>Fried Potatoes with Garlic</h3>
                                                <p class=\"cat\">Viggies / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-9.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$20.50</span>
                                                <h3>Tuna Roast Source</h3>
                                                <p class=\"cat\">Tuna / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-3.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$30.00</span>
                                                <h3>Roast Beef (4 sticks)</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                        <li>
                                            <figure class=\"image\"><img src=\"images/menu-4.jpg\" alt=\"Free Bootstrap Template by colorlib.com\"></figure>
                                            <div class=\"text\">
                                                <span class=\"price\">\$29.99</span>
                                                <h3>Salted Fried Chicken</h3>
                                                <p class=\"cat\">Crab / Potatoes / Rice</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end half -->
                <div class=\"half diningbar-img\" style=\"background-image: url(images/cover_img_1.jpg);\"></div><!-- end half -->
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

</body>


{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\Henry_Symfony\\LaCasserai\\templates\\default\\index.html.twig");
    }
}
