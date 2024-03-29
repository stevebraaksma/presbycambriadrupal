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

/* themes/starterkitminimal/templates/content/node--homepage.html.twig */
class __TwigTemplate_a82eaefd1031df483fa534dd3c37f040 extends Template
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
<h1>Here is where to put the page</h1>

";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("testing_the_view", "block_1"), "html", null, true);
        echo "

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


  <div class=\"modal fade\" id=\"bulletinModal\" tabindex=\"-1\" aria-labelledby=\"bulletinModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"bulletinModalLabel\">Bulletin</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body mt-3\">
          ";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("duplicate_of_calendar_view", "block_1"), "html", null, true);
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"calendarModal\" tabindex=\"-1\" aria-labelledby=\"calendarModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"calendarModalLabel\">Calendar</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body mt-3\">
          ";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("calendar_view", "block_1"), "html", null, true);
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>


    <!-- navbar-->
    <header class=\"header\">
      <nav
        class=\"navbar navbar-expand-lg navbar-dark position-absolute w-100\"
        id=\"navbar\"
      >
        <div class=\"container\">
          <a class=\"navbar-brand d-block d-lg-none ms-2 me-0\" href=\"#!\"
            ><img src=\"/";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 210, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 210, $this->source)), "html", null, true);
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
        // line 251
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 251, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 251, $this->source)), "html", null, true);
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
        // line 287
        echo "          <div
            class=\"swiper-slide hero-slide bg-cover py-5 with-border-image d-flex align-items-center\"
            style=\"background: url(/";
        // line 289
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 289, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 289, $this->source)), "html", null, true);
        echo "/images/hero-68153-Reflection-1920x1144.jpg)\"
          >
            <div class=\"container text-white py-5 my-5 index-forward\">
              <h1 class=\"text-uppercase text-xl mt-5\">
                Join Us This<br />Sunday!
              </h1>
              <div class=\"row\">
                <div class=\"col-lg-7 mx-auto\">
                  <p class=\"lead\">
                    SUNDAYS AT 10:00AM <br />
                    121 W FLORENCE ST, CAMBRIA, WI
                  </p>
                  
                </div>

                <div class=\"col-lg-7 mx-auto\">
                  <a class=\"btn btn-primary px-4 min-width-240 mb-4\" href=\"#watch-online\"
                    >Watch Online</a
                  >
                </div>
         
                <div class=\"col-lg-7 mx-auto\">
                  <button type=\"button\" class=\"btn btn-outline-light px-4 min-width-240 mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#bulletinModal\">
                    Bulletin
                  </button>
                </div>
                <div class=\"col-lg-7 mx-auto\">
                  <button type=\"button\" class=\"btn btn-outline-light px-4 min-width-240 mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#calendarModal\">
                    Calendar
                  </button>
                </div>



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


    <!-- Ministries Section-->

    <div class=\"accordion\" id=\"accordionExample\">
      <div class=\"accordion-item\">
        <h2 class=\"accordion-header\" id=\"headingOne\">
          <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
            Accordion Item #1
          </button>
        </h2>
        <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
          <div class=\"accordion-body\">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class=\"accordion-item\">
        <h2 class=\"accordion-header\" id=\"headingTwo1\">
          <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo1\" aria-expanded=\"false\" aria-controls=\"collapseTwo1\">
            Accordion Item #2
          </button>
        </h2>
        <div id=\"collapseTwo1\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo1\" data-bs-parent=\"#accordionExample\">
          <div class=\"accordion-body\">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class=\"accordion-item\">
        <h2 class=\"accordion-header\" id=\"headingThree\">
          <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
            Accordion Item #3
          </button>
        </h2>
        <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
          <div class=\"accordion-body\">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>

<section class=\"py-5\">
      <div class=\"container py-5\">
        <header class=\"mb-5\">
          <p class=\"text-serif text-primary mb-0\">Ministries</p>
          <h2 class=\"mb-3\">Get Involved</h2>
          <p class=\"mb-4\">Dicit partem indoctum duo te, eum suas singulis omitt eu. In nec tation graecis vivendo, at quo illud omnesqe.</p>
        </header>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"accordion pb-5\" id=\"accordion\">
              <div class=\"accordion-item border-0 rounded-0 mb-2\">
                <div class=\"accordion-header p-0 border-0\" id=\"headingOne\">
                  <h6 class=\"mb-0\"><a class=\"accordion-button py-3 px-4 collapsed\" data-bs-toggle=\"collapse\" href=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">Kids Ministries</a></h6>
                </div>
                <div class=\"collapse\" id=\"collapseOne\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\" style=\"\">
                  <div class=\"pb-3 px-4 bg-primary text-white\">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt. Anim pariatur cliche reprehenderit, enim eiusmod high lif</div>
                </div>
              </div>
              <div class=\"accordion-item border-0 rounded-0 mb-2\">
                <div class=\"accordion-header p-0 border-0\" id=\"headingTwo\">
                  <h6 class=\"mb-0\"><a class=\"accordion-button py-3 px-4 collapsed\" data-bs-toggle=\"collapse\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">Youth Ministries</a></h6>
                </div>
                <div class=\"collapse\" id=\"collapseTwo\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\" style=\"\">
                  <div class=\"pb-3 px-4 bg-primary text-white\">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt Nihil anim keffiyeh helvetica.</div>
                </div>
              </div>
              <div class=\"accordion border-0 rounded-0\">
                <div class=\"accordion-header p-0 border-0\" id=\"headingThree\">
                  <h6 class=\"mb-0\"><a class=\"accordion-button py-3 px-4 collapsed\" data-bs-toggle=\"collapse\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">Other Ministries</a></h6>
                </div>
                <div class=\"collapse\" id=\"collapseThree\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\" style=\"\">
                  <div class=\"pb-3 px-4 bg-primary text-white\">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt Nihil anim keffiyeh helvetica. Anim pariatur cliche reprehenderit, enim eiusmod high lif</div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6\">    
            <div class=\"row gy-4\">
              <div class=\"col-lg-6\">
                <p class=\"text-serif mb-0 text-primary text-small\">Heading level five</p>
                <h5> <span class=\"text-primary\">1.</span>We Come To Serve</h5>
                <p class=\"text-small mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><a class=\"btn btn-link px-0 text-decoration-none\" href=\"\">Learn more<i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a>
              </div>
              <div class=\"col-lg-6\">
                <p class=\"text-serif mb-0 text-primary text-small\">Heading level five</p>
                <h5> <span class=\"text-primary\">2.</span>Church Belief</h5>
                <p class=\"text-small mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><a class=\"btn btn-link px-0 text-decoration-none\" href=\"\">Learn more<i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a>
              </div>
              <div class=\"col-lg-6\">
                <p class=\"text-serif mb-0 text-primary text-small\">Heading level five</p>
                <h5> <span class=\"text-primary\">3.</span>Church Mission</h5>
                <p class=\"text-small mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><a class=\"btn btn-link px-0 text-decoration-none\" href=\"\">Learn more<i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a>
              </div>
              <div class=\"col-lg-6\">
                <p class=\"text-serif mb-0 text-primary text-small\">Heading level five</p>
                <h5> <span class=\"text-primary\">4.</span>Church Community</h5>
                <p class=\"text-small mb-0\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><a class=\"btn btn-link px-0 text-decoration-none\" href=\"\">Learn more<i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
        <figure class=\"p-4 p-lg-5 text-center bg-light mb-5\">
          <blockquote class=\"blockquote mb-4\">
            <p class=\"text-serif\">My soul is weary with sorrow; strengthen me according to your word.</p>
          </blockquote>
          <figcaption class=\"blockquote-footer mb-0\">
            <cite class=\"text-small\" title=\"Psalm 119:28 NIV\">Psalm 119:28 NIV</cite>
          </figcaption>
        </figure>
        <div class=\"row align-items-stretch gx-0 demo-rounded overflow-hidden gy-lg-0 gy-2\">
          <div class=\"col-lg-4 col-md-6 bg-center bg-cover\" style=\"min-height: 200px; background: url(https://d19m59y37dris4.cloudfront.net/church/2-0/img/about-img-1.289beb64.jpg)\"></div>
          <div class=\"col-lg-4 col-md-6 p-5 bg-light\">
            <h3 class=\"h4 mb-3\">Sanctuary</h3>
            <p class=\"mb-0 text-small text-muted mb-4\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p><a class=\"btn btn-outline-primary btn-sm\" href=\"#!\">Read more</a>
          </div>
          <div class=\"col-lg-4 col-md-6 bg-center bg-cover\" style=\"min-height: 200px; background: url(https://d19m59y37dris4.cloudfront.net/church/2-0/img/about-img-2.4a49b989.jpg)\"></div>
          <div class=\"col-lg-4 col-md-6 p-5 bg-light\">
            <h3 class=\"h4 mb-3\">Classics</h3>
            <p class=\"mb-0 text-small text-muted mb-4\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p><a class=\"btn btn-outline-primary btn-sm\" href=\"#!\">Read more</a>
          </div>
          <div class=\"col-lg-4 col-md-6 bg-center bg-cover\" style=\"min-height: 200px; background: url(https://d19m59y37dris4.cloudfront.net/church/2-0/img/about-img-3.97fbc3d9.jpg)\"></div>
          <div class=\"col-lg-4 col-md-6 p-5 bg-light\">
            <h3 class=\"h4 mb-3\">Infants-Preschool</h3>
            <p class=\"mb-0 text-small text-muted mb-4\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p><a class=\"btn btn-outline-primary btn-sm\" href=\"#!\">Read more</a>
          </div>
        </div>
      </div>
    </section>

    <p>
      <a class=\"btn btn-primary\" data-bs-toggle=\"collapse\" href=\"#multiCollapseExample1\" role=\"button\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Toggle first element</a>
      <button class=\"btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Toggle second element</button>
      <button class=\"btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".multi-collapse\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1 multiCollapseExample2\">Toggle both elements</button>
    </p>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">
          <div class=\"card card-body\">
            Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
          <div class=\"card card-body\">
            Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>
    </div>



    <!-- Works Section-->
    <section id=\"works\">
      <div class=\"container-fluid px-0\">
        <div class=\"row align-items-stretch\">
          <div
            class=\"col-lg-6 half-page-banner bg-cover\"
            style=\"background: url(/";
        // line 661
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 661, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 661, $this->source)), "html", null, true);
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
        // line 746
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 746, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 746, $this->source)), "html", null, true);
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
        // line 769
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 769, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 769, $this->source)), "html", null, true);
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
        // line 787
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 787, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 787, $this->source)), "html", null, true);
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
        // line 807
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 807, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 807, $this->source)), "html", null, true);
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
        // line 830
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 830, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 830, $this->source)), "html", null, true);
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
        // line 927
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 927, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 927, $this->source)), "html", null, true);
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
        // line 987
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 987, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 987, $this->source)), "html", null, true);
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
        // line 1045
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1045, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1045, $this->source)), "html", null, true);
        echo "/images/logo-1.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 1048
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1048, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1048, $this->source)), "html", null, true);
        echo "/images/logo-2.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 1051
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1051, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1051, $this->source)), "html", null, true);
        echo "/images/logo-3.svg\" alt=\"...\" width=\"120\" />
          </div>
          <div class=\"col-lg-3 col-sm-6\">
            <img src=\"/";
        // line 1054
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1054, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1054, $this->source)), "html", null, true);
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
        // line 1066
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1066, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1066, $this->source)), "html", null, true);
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
    ";
        // line 1137
        echo "    ";
        // line 1138
        echo "    ";
        // line 1139
        echo "    <script src=\"/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1139, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1139, $this->source)), "html", null, true);
        echo "/js/countdown.js\"></script>
    <script src=\"/";
        // line 1140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1140, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1140, $this->source)), "html", null, true);
        echo "/vendor/progressbar.js/progressbar.js\"></script>
    <script src=\"/";
        // line 1141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1141, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1141, $this->source)), "html", null, true);
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
        return "themes/starterkitminimal/templates/content/node--homepage.html.twig";
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
        return array (  1150 => 1141,  1146 => 1140,  1141 => 1139,  1139 => 1138,  1137 => 1137,  1064 => 1066,  1049 => 1054,  1043 => 1051,  1037 => 1048,  1031 => 1045,  970 => 987,  907 => 927,  807 => 830,  781 => 807,  758 => 787,  737 => 769,  711 => 746,  623 => 661,  248 => 289,  244 => 287,  209 => 251,  165 => 210,  144 => 192,  124 => 175,  101 => 155,  97 => 153,  72 => 123,  68 => 122,  62 => 119,  57 => 116,  52 => 84,  46 => 81,  44 => 78,  43 => 77,  42 => 76,  41 => 75,  40 => 74,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/starterkitminimal/templates/content/node--homepage.html.twig", "/var/www/html/web/themes/starterkitminimal/templates/content/node--homepage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71);
        static $filters = array("clean_class" => 74, "escape" => 81);
        static $functions = array("attach_library" => 81, "drupal_view" => 119);

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
