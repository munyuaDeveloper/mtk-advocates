<!DOCTYPE html>
<html>
<?php

include('header.php')

?>
      <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
        <div class="container">
     <a class="navbar-brand" href="index.php">
        <img class="img-fluid" src="img/logo2.png" alt="" width="400" height="100">
        </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.php">About</a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
              <!-- <li class="nav-item ml-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item font-weight-bold text-small" href="index.html">Home</a><a class="dropdown-item font-weight-bold text-small" href="about.html">About</a><a class="dropdown-item font-weight-bold text-small" href="contact.html">Contact                </a></div>
              </li>
              <li class="nav-item ml-lg-3 pl-lg-3"><a class="btn btn-outline-primary btn-sm" href="contact.html">Request a quote</a></li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->
    <section>
      <div class="owl-carousel owl-theme-default hero-slider owl-nav-custom">
        <!-- Hero Slide-->
        <div class="hero-slide bg-size bg-center py-5" style="background: url(img/hero-banner-1.jpg)">
          <div class="container text-white py-5 index-forward">
            <div class="row">
              <div class="col-lg-7">
                <h1>Choose right solution for your business</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="btn btn-primary" href="#">Read More</a></li>
                  <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Our company</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Hero Slide -->
        <div class="hero-slide bg-size bg-center py-5" style="background: url(img/hero-banner-2.jpg)">
          <div class="container text-white py-5 index-forward">
            <div class="row">
              <div class="col-lg-7">
                <h1>We will help you to grow your business</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="btn btn-primary" href="#">Read More</a></li>
                  <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Our company</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Hero Slide -->
        <div class="hero-slide bg-size bg-center py-5" style="background: url(img/hero-banner-3.jpg)">
          <div class="container text-white py-5 index-forward">
            <div class="row">
              <div class="col-lg-7">
                <h1>You always get the best guidance</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="btn btn-primary" href="#">Read More</a></li>
                  <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Our company</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <p class="h6 mb-1 text-uppercase text-primary mb-3">Our main features</p>
            <h2 class="mb-4">We Work With You To Address Your Most Critical Business Priorities</h2>
            <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <ul class="list-check list-unstyled row px-3 mb-4">
              <li class="text-small text-muted col-lg-6 mb-2">Acquire live chat enables sales</li>
              <li class="text-small text-muted col-lg-6 mb-2">Learn from customer feedback</li>
              <li class="text-small text-muted col-lg-6 mb-2">Engage - marketing automation</li>
              <li class="text-small text-muted col-lg-6 mb-2">Support -customer support</li>
              <li class="text-small text-muted col-lg-6 mb-2">Acquire live chat enables sales</li>
              <li class="text-small text-muted col-lg-6 mb-2">Learn from customer feedback</li>
            </ul>
            <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">
              <li class="list-inline-item pr-4 mr-0"><img src="img/about-sign.png" alt="" width="80"></li>
              <li class="list-inline-item px-4 mr-0 border-left">
                <h5 class="mb-0">Jack Foxx</h5>
                <p class="small font-weight-normal text-muted mb-0">Chairnan and founder </p>
              </li>
              <li class="list-inline-item pl-4 border-left">
                <h5 class="mb-0">+420 754 6545 6564</h5>
                <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-5 ml-auto mb-4 mb-lg-0 order-1 order-lg-2">
            <div class="p-2 border"><img class="img-fluid" src="img/about-img.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section -->
    <section class="py-5" id="services">
      <div class="container py-5 text-center">
        <header class="mb-5">
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <p class="h6 text-uppercase text-primary mb-0">Our services</p>
              <h2>We Creating Solutions For Your Organization</h2>
            </div>
          </div>
        </header>
        <div class="row align-items-stretch">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#laptop-screen-1"> </use>
              </svg>
              <h3 class="h5">Business Finance Strategy</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#quality-1"> </use>
              </svg>
              <h3 class="h5">Portfolio &amp; Resource Allocation</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#survey-1"> </use>
              </svg>
              <h3 class="h5">Organization &amp; Decision Process</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#pie-chart-1"> </use>
              </svg>
              <h3 class="h5">Decision &amp; Risk Analytic</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#pay-1"> </use>
              </svg>
              <h3 class="h5">Banking &amp; Capital Markets</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="px-4 py-5 border border-width-md border-dash h-100">
              <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#stack-1"> </use>
              </svg>
              <h3 class="h5">Modern &amp; Tribe Workplace</h3>
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Divider Section -->
    <section class="bg-cover bg-center" style="background: url(img/hero-banner-2.jpg)">
      <div class="primary-overlay py-5">
        <div class="overlay-content">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
                <h2 class="text-white mb-2">You Always Get the Best Service</h2>
                <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-lg-3 ml-auto text-center text-lg-right"><a class="btn btn-outline-light" href="#">Contact Us</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5 px-lg-0">
            <div class="bg-primary pr-lg-3"><img class="img-fluid w-100" src="img/feature-img.jpg" alt=""></div>
          </div>
          <div class="col-lg-7 px-lg-0">
            <div class="p-4 p-md-5 shadow bg-white">
              <p class="h6 mb-1 text-uppercase text-primary mb-3">Why choose us</p>
              <h2 class="mb-5">We Provide Experts To Create A Great Value For Your Business</h2>
              <div class="row">
                <div class="col-lg-9">
                  <ol class="list-numbers mb-0">
                    <li class="mb-4">
                      <h5>We modify whole system</h5>
                      <p class="text-small text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
                    </li>
                    <li class="mb-4">
                      <h5>Safeguard for Your Business</h5>
                      <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </li>
                    <li class="mb-4">
                      <h5>Beneficial Strategies</h5>
                      <p class="text-small text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
                    </li>
                    <li>
                      <h5>Build Solid Human Resource</h5>
                      <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials Section-->
    <section class="py-5">
      <div class="container py-5">
        <p class="h6 mb-1 text-uppercase text-primary mb-3">Our clients say</p>
        <div class="row mb-5">
          <div class="col-lg-5">
            <h2 class="mb-5">The Best Solutions For Developing Your Business</h2>
          </div>
          <div class="col-lg-7">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
          <div class="testimonial p-5 shadow-sm m-2">
            <div class="d-flex align-items-center mb-4">
              <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-1.jpg" alt=""></div>
              <div class="ml-3">
                <h5 class="mb-0">Rodel Colez</h5>
                <p class="small text-muted mb-1">Businessman</p>
                <ul class="small list-inline text-primary mb-0">
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                </ul>
              </div>
            </div>
            <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.   </p>
          </div>
          <div class="testimonial p-5 shadow-sm m-2">
            <div class="d-flex align-items-center mb-4">
              <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-2.jpg" alt=""></div>
              <div class="ml-3">
                <h5 class="mb-0">Mark Huff</h5>
                <p class="small text-muted mb-1">Businessman</p>
                <ul class="small list-inline text-primary mb-0">
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                </ul>
              </div>
            </div>
            <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.   </p>
          </div>
          <div class="testimonial p-5 shadow-sm m-2">
            <div class="d-flex align-items-center mb-4">
              <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-1.jpg" alt=""></div>
              <div class="ml-3">
                <h5 class="mb-0">Rodel Colez</h5>
                <p class="small text-muted mb-1">Businessman</p>
                <ul class="small list-inline text-primary mb-0">
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                </ul>
              </div>
            </div>
            <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.   </p>
          </div>
          <div class="testimonial p-5 shadow-sm m-2">
            <div class="d-flex align-items-center mb-4">
              <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-2.jpg" alt=""></div>
              <div class="ml-3">
                <h5 class="mb-0">Mark Huff</h5>
                <p class="small text-muted mb-1">Businessman</p>
                <ul class="small list-inline text-primary mb-0">
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                </ul>
              </div>
            </div>
            <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.   </p>
          </div>
        </div>
      </div>
    </section>
    <?php
      include('footer.php')
    ?>
  </body>
</html>