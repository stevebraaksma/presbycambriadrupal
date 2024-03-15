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

/* themes/starterkitminimal/templates/content/node--calendar.html.twig */
class __TwigTemplate_f091832814f862caa7c930362b548f6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["classes"] = ["homepage-content-type", "node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "bundle", [], "any", false, false, true, 74), 74, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 75)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 76)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 77)) ? ("node--unpublished") : ("")), ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 78, $this->source)))) : (""))];
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("starterkitminimal/node"), "html", null, true);
        echo "


<article";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">

";
        // line 116
        echo "
<h1>Calendar</h1>



<p>divider</p>
";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_textfield1", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_textfield2", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "


<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>First Presbyterian Church, Cambria WI</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"robots\" content=\"all,follow\" />
    <!-- Google fonts-->
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Playfair+Display:500i&amp;display=swap\"
    />

    ";
        // line 153
        echo "
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"/";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 155, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 155, $this->source)), "html", null, true);
        echo "/images/pcusa-color-logo.gif\" />
    
  </head>
  <body
    class=\"scrollspy-example\"
    data-bs-spy=\"scroll\"
    data-bs-target=\"#navbar\"
    data-bs-offset=\"0\"
    tabindex=\"0\"
  >
    <!-- navbar-->
    <header class=\"header\">
      <nav
        class=\"navbar navbar-expand-lg navbar-dark position-absolute w-100\"
        id=\"navbar\"
      >
        <div class=\"container\">
          <a class=\"navbar-brand d-block d-lg-none ms-2 me-0\" href=\"#!\"
            ><img src=\"/";
        // line 173
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 173, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 173, $this->source)), "html", null, true);
        echo "/images/pcusa-color-logo.gif\" alt=\"...\" width=\"60\"
          /></a>
          <ul class=\"ps-0 pt-3\">
            <li class=\"navbar-nav d-block d-lg-none\">
              <span>First Presbyterian Church</span>
            </li>
            <li class=\"navbar-nav d-block d-lg-none\">
              <span>Cambria</span>
            </li>
          </ul>

          <button
            class=\"navbar-toggler navbar-toggler-end\"
            type=\"button\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\"
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\"
          >
            <span></span><span></span><span></span>
          </button>
          <div
            class=\"collapse navbar-collapse\"
            id=\"navbarSupportedContent\"
            style=\"padding-left: 0px\"
          >
            <ul class=\"navbar-nav ms-auto pb-lg-4\">
              <!-- <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#hero\">Home </a>
              </li> -->
              <li class=\"nav-item\" id=\"add-some-extra-spacing-here\">
                <a class=\"nav-link\" href=\"#services\">Worship</a>
              </li>
              <!-- <li class=\"nav-item\" id=\"hide-this-menu-item\">
                <a class=\"nav-link\" href=\"#events\">Events </a>
              </li> -->
            </ul>
            <ul class=\"navbar-nav d-none d-lg-block px-4 text-center ms-5\">
              <li class=\"nav-item m-0 pt-1 pb-1\">
                <a class=\"navbar-brand m-0\" href=\"#!\"
                  ><img src=\"/";
        // line 214
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 214, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 214, $this->source)), "html", null, true);
        echo "/images/pcusa-color-logo.gif\" alt=\"...\" width=\"60\"
                /></a>
              </li>
              <li class=\"nav-item m-0 lead text-white text-uppercase\">
                <span>First Presbyterian Church</span>
              </li>
              <li class=\"nav-item m-0 lead text-white text-uppercase\">
                <span>Cambria</span>
              </li>
            </ul>
            <ul class=\"navbar-nav me-auto pb-lg-4\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#works\">Food Pantry</a>
              </li>
              <!-- <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#sermons\">Sermons </a>
              </li> -->
              <!-- <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"text.html\">Text Page </a>
              </li> -->
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#contact\">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->
    <section class=\"text-center pt-lg-0 hero-home\" id=\"hero\">
      <div class=\"swiper hero-slider\">
        <div class=\"swiper-wrapper\">
          ";
        // line 250
        echo "          <div
            class=\"swiper-slide hero-slide bg-cover py-5 with-border-image d-flex align-items-center\"
            style=\"background: url(/";
        // line 252
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 252, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 252, $this->source)), "html", null, true);
        echo "/images/hero-68153-Reflection-1920x1144.jpg)\"
          >
            <div class=\"container text-white py-5 my-5 index-forward\">
              <h1 class=\"text-uppercase text-xl mt-5\">
                Calendar
              </h1>
              <div class=\"row\">
                <div class=\"col-lg-7 mx-auto\">
                  <p class=\"lead\">
                    SUNDAYS AT 10:00AM <br />
                    121 W FLORENCE ST, CAMBRIA, WI
                  </p>
                  <!-- <a class=\"btn btn-primary px-4\" href=\"text.html\">Read More</a> -->
                </div>

                ";
        // line 267
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("calendar_view", "block_1"), "html", null, true);
        echo "
              </div>
            </div>
          </div>

       

   
        </div>

        <!-- these are the next / prev buttons for hero  -->

        <!-- <div
          class=\"swiper-button-next swiper-nav-custom d-none d-lg-block\"
        ></div>
        <div
          class=\"swiper-button-prev swiper-nav-custom d-none d-lg-block\"
        ></div>
        <div class=\"swiper-pagination py-3 d-block d-lg-none\"></div> -->
      </div>
    </section>
    <!-- Features Section - maybe spinner (see bootstrap. Also, may want to fade in background. And, FB feature?)-->
    <section id=\"features\">
      <div class=\"container-fluid p-0\">
        <div class=\"row p-0 text-center align-items-stretch g-0\">
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"p-5 text-white h-100 bg-primary\">
              <h3 class=\"h4\">Worship Service</h3>
              <p class=\"mb-0 text-small\">Join us on Sunday at 10:00 a.m.</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"p-5 text-white h-100 bg-primary-shade\">
              <h3 class=\"h4\">Hospitality Hour</h3>
              <p class=\"mb-0 text-small\">Each Sunday after morning worship</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 order-lg-3\">
            <div class=\"p-5 text-white h-100 bg-primary\">
              <h3 class=\"h4\">Sunday School</h3>
              <p class=\"mb-0 text-small\">For all ages at 8:45 a.m.</p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 order-lg-4\">
            <div class=\"p-5 text-white h-100 bg-primary-shade\">
              <h3 class=\"h4\">Community Food Pantry</h3>
              <p class=\"mb-0 text-small\">Assisting local families</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section -->
    <section class=\"py-5\" id=\"services\">
      <div class=\"container py-5\">
        <header class=\"mb-4 text-center mb-5\">
          <p class=\"text-serif mb-0 text-primary\">Come worship with us</p>
          <h2 class=\"text-uppercase\">Worship</h2>
        </header>

        <!-- moved this from further below just copied paragraph styles  -->
        <div class=\"row\">
          <div class=\"col-lg-7 mx-auto text-center\">
            <p class=\"text\">
              First Presbyterian Church of Cambria, a congregation in Cambria,
              offers members - and visitors - a chance to become part of
              something greater. To grow in their love of God and for one
              another within our beautiful community. <br /><br />We are rooted
              in the stories of the Bible and believe worship is something that
              can be expressed in everything we do. Our philosophy is founded on
              the life and teachings of Jesus Christ. No matter who you are,
              there’s a special place for you at our church. Get in touch today
              or come and visit us in person.
            </p>
          </div>
        </div>

        <!-- <div class=\"row text-center gy-4\">
          <div class=\"col-lg-4\">
            <i class=\"fas text-primary mb-4 fa-3x fa-church\"></i>
            <h3 class=\"h5\">Tour the chapel</h3>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
          <div class=\"col-lg-4\">
            <i class=\"fas text-primary mb-4 fa-3x fa-bible\"></i>
            <h3 class=\"h5\">Chapel weddings</h3>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
          <div class=\"col-lg-4\">
            <i class=\"fas text-primary mb-4 fa-3x fa-praying-hands\"></i>
            <h3 class=\"h5\">Special events</h3>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Events Section-->
    <!-- <section class=\"py-5\" id=\"events\">
      <div class=\"container py-5\">
        <header class=\"mb-4 text-center mb-5\">
          <p class=\"text-serif mb-0 text-primary\">Community Happenings</p>
          <h2 class=\"text-uppercase\">Next Events</h2>
        </header>
        <div class=\"p-4 p-lg-5 bg-light text-center mb-4\">
          <div class=\"row gy-4 align-items-center\">
            <div class=\"col-lg-3\">
              <div
                class=\"d-flex align-items-center justify-content-center justify-content-lg-start\"
              >
                <p class=\"text-gray text-xl h1 mb-0\">17</p>
                <div class=\"ms-2\">
                  <h5 class=\"mb-0\">April</h5>
                  <p class=\"text-small mb-0 text-muted\">Saturday</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 text-center\">
              <h4 class=\"text-primary mb-1\"> -->
                <!-- <a class=\"reset-anchor\" href=\"text.html\"
                  >Building a Church Fellowship</a
                > -->
                <!-- <p>Building a Church Fellowship</p>
              </h4>
              <p class=\"text-serif mb-0 text-muted\">
                April 13, 2019 - October 14, 2022
              </p>
              <p class=\"text-serif mb-0 text-muted\">New York</p>
            </div> -->
            <!-- <div class=\"col-lg-3 text-lg-end\">
              <a class=\"btn btn-outline-primary px-4\" href=\"text.html\"
                >Find out more</a
              >
            </div> -->
          <!-- </div>
        </div>
        <div class=\"p-4 p-lg-5 bg-light text-center\">
          <div class=\"row gy-4 align-items-center\">
            <div class=\"col-lg-3\">
              <div
                class=\"d-flex align-items-center justify-content-center justify-content-lg-start\"
              >
                <p class=\"text-gray text-xl h1 mb-0\">25</p>
                <div class=\"ms-2\">
                  <h5 class=\"mb-0\">June</h5>
                  <p class=\"text-small mb-0 text-muted\">Monday</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 text-center\">
              <h4 class=\"text-primary mb-1\"> -->
                <!-- <a class=\"reset-anchor\" href=\"text.html\">Sermon: Hope For Us</a> -->
                <!-- <p>Sermon: Hope For Us</p>
              </h4>
              <p class=\"text-serif mb-0 text-muted\">
                April 13, 2019 - October 14, 2022
              </p>
              <p class=\"text-serif mb-0 text-muted\">New York</p>
            </div> -->
            <!-- <div class=\"col-lg-3 text-lg-end\">
              <a class=\"btn btn-outline-primary px-4\" href=\"text.html\"
                >Find out more</a
              >
            </div> -->
          <!-- </div>
        </div>
      </div>
    </section> -->

    <!-- Works Section-->
    <section id=\"works\">
      <div class=\"container-fluid px-0\">
        <div class=\"row align-items-stretch\">
          <div
            class=\"col-lg-6 half-page-banner bg-cover\"
            style=\"background: url(/";
        // line 451
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 451, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 451, $this->source)), "html", null, true);
        echo "/images/rice.jpg)\"
          ></div>
          <div class=\"col-lg-6 bg-light py-lg-5\">
            <div class=\"h-100 d-flex flex-column p-5 justify-content-center\">
              <!-- <p class=\"text-serif text-primary mb-0\">Community Bread Basket</p> -->
              <p class=\"text-serif text-primary mb-0\">The Cambria Bread Basket</p>
              <h2 class=\"text-uppercase\">Food Pantry</h2>
              <p class=\"text-muted\">
                Do your funds for food run short before the end of the month? We
                are here for you!
              </p>
              <!-- <ul class=\"list-check ps-0\"> -->
              <ul class=\"\">
                <li>
                  <!-- <p class=\"mb-0 text-muted mb-2\">
                    The Cambria Bread Basket Food Pantry provides food and
                    essentials for the families in need in the Cambria vicinity.
                  </p> -->
                  <p class=\"mb-0 text-muted mb-2\">
                    <span class=\"fw-bold\">What: </span>
                    We provide food and essentials for families in need in the Cambria vicinity
                  </p>
                  
                </li>
                <li>
                  <!-- <p class=\"mb-0 text-muted mb-2\">
                    We are located in the basement of the First Presbyterian
                    Church, 121 W. Florence St, Cambria. The pantry entrance is
                    on Towyn St.
                  </p> -->
                  <p class=\"mb-0 text-muted mb-0\">
                    <span class=\"fw-bold\">Where: </span>
                    Basement of the First Presbyterian Church, 121 W. Florence St, Cambria 
                    </p>
                  <ul>
                    <li>
                      <p class=\"mb-0 text-muted mb-2\">The pantry entrance on Towyn St.</p>
                    </li>
                  </ul>
                </li>
                <li>
                  <!-- <p class=\"mb-0 text-muted mb-2\">
                    No ID or registration required.
                  </p> -->
                  <p class=\"mb-0 text-muted mb-2\">
                    <span class=\"fw-bold\">When: </span>
                    Appointment only 
                  </p>
                </li>

                <li>
                  <!-- <p class=\"mb-0 text-muted mb-2\">
                    The Food Pantry will be open by appointment only for inside
                    shopping at the Towyn Street entrance (First Presbyterian
                    Church).
                  </p> -->
                  <p class=\"mb-0 text-muted mb-0\">
                    <span class=\"fw-bold\">How: </span>
                    Call Joanne Sanderson at 920-348-5568 or the Church Office at 920-348-5859 
                  </p>
                  <ul>
                    <li>
                      <p class=\"mb-0 text-muted mb-2\">If no answer please leave your name, number, and the number of people in your household, and your call will be returned. Thank you.</p>
                    </li>
                  </ul>
                </li>

                <li>
                  <!-- <p class=\"mb-0 text-muted mb-2\">
                    To make arrangements, please call one of the following:
                    Joanne Sanderson 920-348-5568 or Church Office 920-348-5859
                  </p> -->
                  <p class=\"mb-0 text-muted mb-2\">
                    No ID or registration required.
                  </p>
                </li>

                <!-- <li>
                  <p class=\"mb-0 text-muted mb-2\">
                    If no answer please leave your name, phone number and number
                    of people in your household and your call will be returned.
                    Thank you.
                  </p>
                </li> -->
              </ul>
              <!-- <img class=\"mb-3\" src=\"/";
        // line 536
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 536, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 536, $this->source)), "html", null, true);
        echo "/images/signature.png\" alt=\"...\" width=\"90\" /> -->
              <!-- <h6 class=\"text-uppercase mb-0\">Richard Wood</h6> -->
              <p class=\"text-serif text-primary text-small mb-0\">
                DONATIONS ARE ALWAYS WELCOMED & APPRECIATED
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Sermons Section -->
    <!-- <section class=\"py-5\" id=\"sermons\">
      <div class=\"container py-5\">
        <header class=\"mb-4 text-center mb-5\">
          <p class=\"text-serif mb-0 text-primary\">Watch our services online</p>
          <h2 class=\"text-uppercase\">Our latest sermons</h2>
        </header>
        <div class=\"row gy-5\">
          <div class=\"col-lg-4\">
            <a class=\"primary-overlay d-block mb-3\" href=\"text.html\">
              <div class=\"overlay-content\">
                <img
                  class=\"img-fluid w-100\"
                  src=\"/";
        // line 559
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 559, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 559, $this->source)), "html", null, true);
        echo "/images/sermon-1.jpg\"
                  alt=\"...\"
                /></div
            ></a>
            <h4 class=\"mb-0\">
              <a class=\"reset-anchor\" href=\"text.html\">Testing our faith</a>
            </h4>
            <p class=\"text-serif text-primary text-small\">Holiday</p>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
          <div class=\"col-lg-4\">
            <a class=\"primary-overlay d-block mb-3\" href=\"text.html\">
              <div class=\"overlay-content\">
                <img
                  class=\"img-fluid w-100\"
                  src=\"/";
        // line 577
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 577, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 577, $this->source)), "html", null, true);
        echo "/images/sermon-2.jpg\"
                  alt=\"...\"
                /></div
            ></a>
            <h4 class=\"mb-0\">
              <a class=\"reset-anchor\" href=\"text.html\">Peaceful day</a>
            </h4>
            <p class=\"text-serif text-primary text-small\">
              Holiday &amp; Faith
            </p>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
          <div class=\"col-lg-4\">
            <a class=\"primary-overlay d-block mb-3\" href=\"text.html\">
              <div class=\"overlay-content\">
                <img
                  class=\"img-fluid w-100\"
                  src=\"/";
        // line 597
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 597, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 597, $this->source)), "html", null, true);
        echo "/images/sermon-3.jpg\"
                  alt=\"...\"
                /></div
            ></a>
            <h4 class=\"mb-0\">
              <a class=\"reset-anchor\" href=\"text.html\">True connection</a>
            </h4>
            <p class=\"text-serif text-primary text-small\">
              Holiday &amp; Children
            </p>
            <p class=\"text-muted\">
              Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor
              incididunt labore.
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Become a Volunteer Section -->
    <!-- <section
      class=\"bg-cover bg-fixed shadow-inner\"
      id=\"volunteer\"
      style=\"background: url(/";
        // line 620
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 620, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 620, $this->source)), "html", null, true);
        echo "/images/divider-img.jpg)\"
    >
      <div class=\"primary-overlay py-5\">
        <div class=\"overlay-content z-index-20 position-relative py-5\">
          <div class=\"container py-5 text-white text-center\">
            <p class=\"lead text-serif mb-1\">
              You’ve been created with gifts and passions to use
            </p>
            <h2 class=\"text-xl text-shadow mb-4\">Become a Volunteer</h2>
            <a class=\"btn btn-primary px-4\" href=\"text.html\">Signup now</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Next Event Section-->
    <!-- <section class=\"bg-primary-shade text-white py-5\" id=\"events\">
      <div class=\"container text-center\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-3 text-lg-end mb-4 mb-lg-0\">
            <h2 class=\"mb-0 text-uppercase\">Next Event</h2>
          </div>
          <div class=\"col-lg-6 text-center mb-4 mb-lg-0\">
            <p class=\"text-serif\">Experience God’s Presence</p>
            <div
              class=\"p-2 counter event-counter d-flex align-items-center justify-content-center text-center\"
              data-counter=\".event-counter\"
              data-date=\"Sat Dec 26 2021 11:12:29 GMT\"
            >
              <div class=\"day counter-item text-center mx-3\">
                <p class=\"h2 num\"></p>
                <span class=\"word text-serif\">Days</span>
              </div>
              <div class=\"hour counter-item text-center mx-3\">
                <p class=\"h2 num\"></p>
                <span class=\"word text-serif\">Hours</span>
              </div>
              <div class=\"min counter-item text-center mx-3\">
                <p class=\"h2 num\"></p>
                <span class=\"word text-serif\">Minutes</span>
              </div>
              <div class=\"sec counter-item text-center mx-3\">
                <p class=\"h2 num\"></p>
                <span class=\"word text-serif\">Seconds</span>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 text-lg-end\">
            <a class=\"btn btn-outline-light px-4\" href=\"text.html\"
              >Learn more</a
            >
          </div>
        </div>
      </div>
    </section> -->

    <!-- Donation Section-->
    <!-- <section id=\"donation\">
      <div class=\"container-fluid px-0\">
        <div class=\"row align-items-stretch\">
          <div class=\"col-lg-6 bg-light py-lg-5 order-2 order-lg-1\">
            <div
              class=\"h-100 d-flex flex-column p-5 justify-content-center text-lg-end\"
            >
              <div class=\"w-100\">
                <p class=\"text-serif text-primary mb-0\">Sharing our faith</p>
                <h2 class=\"text-uppercase mb-0\">Donate now</h2>
                <div class=\"row\">
                  <div class=\"col-lg-10 ms-auto\">
                    <p class=\"text-muted mt-4 mb-0\">
                      At vero eos et accusamus et iusto odio dignissimos ducimus
                      qui blanditiis praesentium voluptatum deleniti atque
                      corrupti quos dolores et quas molestias excepturi sint
                      occaecati cupiditate non provident, similique.
                    </p>
                  </div>
                </div>
                <div
                  class=\"progress-circle position-relative my-3\"
                  id=\"pCircle\"
                >
                  <div
                    class=\"position-absolute text-center top-50 start-50 translate-middle d-flex flex-column\"
                  >
                    <h6 class=\"h5 text-primary mb-0\">70%</h6>
                    <p class=\"text-small text-serif mb-0 text-muted\">donate</p>
                  </div>
                </div>
                <div class=\"d-block\">
                  <a class=\"btn btn-primary px-4\" href=\"text.html\"
                    >Donate now</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div
            class=\"col-lg-6 half-page-banner bg-cover bg-center order-1 order-lg-2\"
            style=\"background: url(/";
        // line 717
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 717, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 717, $this->source)), "html", null, true);
        echo "/images/img-donation.jpg)\"
          ></div>
        </div>
      </div>
    </section> -->

    <!-- Watch Online Section -->
    <section class=\"py-5\" id=\"watch-online\">
      <div class=\"container py-5\">
        <header class=\"mb-4 text-center mb-5\">
          <p class=\"text-serif mb-0 text-primary\">Join us online</p>
          <h2 class=\"text-uppercase\">Watch Online</h2>
        </header>

        <!-- moved this from further below just copied paragraph styles  -->
        <div class=\"row\">
          <div class=\"col-lg-7 mx-auto text-center\">
            <p class=\"text\">
              Sundays Starting at 10 am<br /><br />
              We have our worship services both in-person and online. If joining
              online you can watch via Zoom, watch on Facebook Live, or on
              Facebook at your own time. 
              <br /><br />
              <h5 class=\"text-primary mb-2\">Zoom:</h5>
              <a
                class=\"btn btn-primary px-4 shrink-by-percentage-on-mobile\" target=\"_blank\" 
                href=\"https://us02web.zoom.us/j/2684171875\"
                >https://us02web.zoom.us/j/2684171875</a
              >
              <h5 class=\"text-primary mb-2 mt-4\">Facebook:</h5>
              <a
                class=\"btn btn-primary px-4 shrink-by-percentage-on-mobile\" target=\"_blank\" 
                href=\"https://www.facebook.com/presby.pastora.3\"
                >https://www.facebook.com/presby.pastora.3</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section-->
    <section class=\"py-5\" id=\"contact\">
      <div class=\"container py-5\">
        <header class=\"mb-4 mb-5 text-center\">
          <p class=\"text-serif mb-0 text-primary\">Where to find us</p>
          <h2 class=\"text-uppercase\">Reach us</h2>
          <div class=\"row\">
            <div class=\"col-lg-7 mx-auto\">
              <p class=\"text-muted\">
                <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. -->
              </p>
            </div>
          </div>
        </header>
        <div class=\"row align-items-stretch gx-0\">
          <div class=\"col-lg-6\">
            <div
              class=\"contact-img bg-center bg-cover\"
              style=\"height: 30rem; background: url(/";
        // line 777
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 777, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 777, $this->source)), "html", null, true);
        echo "/images/CambriaChurch.jpg)\"
            ></div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"bg-light px-2 py-5 p-md-5 h-100\">
              <h4>First Presbyterian Church</h4>
              <p class=\"text-muted\">Get in touch or come visit us:</p>
              <ul class=\"list-unstyled mb-0 text-muted\">
                <li class=\"mb-2\">
                  <a class=\"reset-anchor\" href=\"tel:(920) 348-5859\">
                    <i class=\"text-primary me-3 fas fa-phone\"></i
                    ><span>(920) 348-5859</span></a
                  >
                </li>
                <li class=\"mb-2\">
                  <a class=\"reset-anchor\" target=\"_blank\" href=\"https://goo.gl/maps/HbjxtBaVHNuKHLmD9\">
                    <i class=\"text-primary me-3 fas fa-globe-americas\"></i
                    ><span>121 W Florence St, Cambria, WI 53923</span></a
                  >
                </li>
                <li class=\"mb-2\">
                  <a
                    class=\"reset-anchor\"
                    href=\"mailto:firstpresbycambria@gmail.com\"
                  >
                    <i class=\"text-primary me-3 far fa-envelope\"></i
                    ><span>firstpresbycambria@gmail.com</span></a
                  >
                </li>
                <li class=\"mb-2\">
                  <a
                    class=\"reset-anchor\" target=\"_blank\" 
                    href=\"https://www.facebook.com/presby.pastora.3\"
                  >
                  <i class=\"text-primary ms-1 fab fa-facebook-f\" ></i><span style=\"margin-left:19px;\">Connect on Facebook</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <!-- just added this little section to embed a map  -->
      <iframe style=\"width:100%;margin:auto;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.0762036282376!2d-89.1088575!3d43.54245340000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8806c0bea96bc21b%3A0x15f4bdeca0d88b05!2s121%20W%20Florence%20St%2C%20Cambria%2C%20WI%2053923!5e0!3m2!1sen!2sus!4v1677559857572!5m2!1sen!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </section>





    <!-- Clients Section-->
    <!-- <section class=\"pb-5\">
      <div class=\"container pb-5\">
        <div class=\"row align-items-center text-center gy-2\">
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 835
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 835, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 835, $this->source)), "html", null, true);
        echo "/images/logo-1.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 838
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 838, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 838, $this->source)), "html", null, true);
        echo "/images/logo-2.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 841
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 841, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 841, $this->source)), "html", null, true);
        echo "/images/logo-3.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 844
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 844, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 844, $this->source)), "html", null, true);
        echo "/images/logo-4.svg\" alt=\"...\" width=\"120\" />
          </div>
        </div>
      </div>
    </section> -->
    <!-- Scroll Top Button-->
    <a class=\"scroll-top\" href=\"#\"><i class=\"fas fa-long-arrow-alt-up\"></i></a>

    <footer class=\"pt-5 text-white\" style=\"background: #111\">
      <div class=\"container pt-5\">
        <!-- <div class=\"row mb-5 pb-5\">
          <div class=\"col-md-4 col-sm-12\">
            <img class=\"mb-3\" src=\"/";
        // line 856
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 856, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 856, $this->source)), "html", null, true);
        echo "/images/logo-footer.svg\" alt=\"...\" width=\"140\" />
            <p class=\"text-small text-muted\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <h5 class=\"mb-4 mt-3\">Upcoming events</h5>
            <ul class=\"list-unstyled\">
              <li class=\"mb-2\">
                <h6 class=\"mb-1\">
                  <a class=\"reset-anchor text-primary\" href=\"#!\"
                    >Building a Church Fellowship</a
                  >
                </h6>
                <p class=\"text-muted text-small mb-0\">
                  New York, 18 April 2020
                </p>
              </li>
              <li class=\"mb-2\">
                <h6 class=\"mb-1\">
                  <a class=\"reset-anchor text-primary\" href=\"#!\"
                    >Sermon: Hope For Us</a
                  >
                </h6>
                <p class=\"text-muted text-small mb-0\">
                  New York, 18 April 2020
                </p>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <h5 class=\"mb-4 mt-3\">Newsletter</h5>
            <p class=\"text-small text-muted\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class=\"input-group\">
              <input
                class=\"form-control border-dark text-white rounded-0 bg-none\"
                type=\"search\"
                placeholder=\"Enter your email address\"
                aria-label=\"email address\"
                aria-describedby=\"button-addon2\"
              />
              <button
                class=\"btn btn-primary px-4\"
                id=\"button-addon2\"
                type=\"submit\"
              >
                <i class=\"fas fa-paper-plane\"></i>
              </button>
            </div>
          </div>
        </div> -->

        <div class=\"py-4 border-top border-dark text-center\">
          <p class=\"mb-0 text-muted\">
            Developed by 
            <a
              class=\"reset-anchor text-primary\"
              href=\"https://stevebraaksma.com\"
              >stevebraaksma.com</a
            >.
          </p>
          <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src=\"/";
        // line 926
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 926, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 926, $this->source)), "html", null, true);
        echo "/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 928
        echo "    <script src=\"/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 928, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 928, $this->source)), "html", null, true);
        echo "/js/countdown.js\"></script>
    <script src=\"/";
        // line 929
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 929, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 929, $this->source)), "html", null, true);
        echo "/vendor/progressbar.js/progressbar.js\"></script>
    <script src=\"/";
        // line 930
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 930, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 930, $this->source)), "html", null, true);
        echo "/js/front.js\"></script>
    <!-- <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
        var ajax = new XMLHttpRequest();
        ajax.open(\"GET\", path, true);
        ajax.send();
        ajax.onload = function (e) {
          var div = document.createElement(\"div\");
          div.className = \"d-none\";
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        };
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite(
        \"https://presbyycambria.com/files/icons/orion-svg-sprite.svg\"
      );
    </script> -->
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link
      rel=\"stylesheet\"
      href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\"
      integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
      crossorigin=\"anonymous\"
    />
  </body>
</html>




";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "base_path", "directory"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/starterkitminimal/templates/content/node--calendar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  934 => 930,  930 => 929,  925 => 928,  921 => 926,  848 => 856,  833 => 844,  827 => 841,  821 => 838,  815 => 835,  754 => 777,  691 => 717,  591 => 620,  565 => 597,  542 => 577,  521 => 559,  495 => 536,  407 => 451,  220 => 267,  202 => 252,  198 => 250,  163 => 214,  119 => 173,  98 => 155,  94 => 153,  69 => 123,  65 => 122,  57 => 116,  52 => 84,  46 => 81,  44 => 78,  43 => 77,  42 => 76,  41 => 75,  40 => 74,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/starterkitminimal/templates/content/node--calendar.html.twig", "/var/www/html/web/themes/starterkitminimal/templates/content/node--calendar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71);
        static $filters = array("clean_class" => 74, "escape" => 81);
        static $functions = array("attach_library" => 81, "drupal_view" => 267);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['attach_library', 'drupal_view']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
