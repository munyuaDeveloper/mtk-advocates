<!DOCTYPE html>
<html>
<?php

include('header.php')

?>
<nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img class="img-fluid big_logo" src="img/logo2.png" alt="" width="400" height="100">
      <img class="img-fluid small_logo" src="img/logo.png" alt="" width="80" height="80">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.php">About Us</a></li>
        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="team.php">Our Team</a></li>
        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
        <!-- <li class="nav-item ml-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item font-weight-bold " href="index.html">Home</a><a class="dropdown-item font-weight-bold " href="about.html">About</a><a class="dropdown-item font-weight-bold " href="contact.html">Contact                </a></div>
              </li>
              <li class="nav-item ml-lg-3 pl-lg-3"><a class="btn btn-outline-primary btn-sm" href="contact.html">Request a quote</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<style>
  .carousel-item {
    transition: (.1s ease-in-out left);
  }
</style>
</header>
<!-- Hero Slider -->
<section>

  <div id="carouselExample1" class="carousel carousel-fade slide z-depth-1-half" data-ride="carousel" data-interval="4500">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="hero-slide bg-size bg-center py-5" style="background: url(img/gavel-hammer.jpg); background-size: cover">
            <div class="container text-white py-5 index-forward">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Our mission</h1>
                  <p class="lead">To offer robust legal solutions guided by ethical resourcefulness and use of modern
                    technology to deliver value to all our clients and stakeholders.</p>
                  <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn btn-primary" href="about.php">Read More</a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light" href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <div class="hero-slide bg-size bg-center py-5" style="background: url(img/hammer-book.jpg); background-size: cover">
            <div class="container text-white py-5 index-forward">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Our experience </h1>
                  <p class="lead">Our team is comprised of highly qualified and upstanding individuals with diverse skills and a combined experience of over 20 years in legal practice.</p>
                  <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn btn-primary" href="about.php">Read More</a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light" href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <div class="hero-slide bg-size bg-center py-5" style="background: url(img/justice.jpg); background-size: cover">
      <div class="container text-white py-5 index-forward">
        <div class="row">
          <div class="col-lg-8">
            <h1>Our professional indemnity</h1>
            <p class="lead">The Firm undertakes to maintain sufficient professional indemnity cover to secure the transactions
              that we undertake on behalf of our clients. Each Partner also maintains a personal professional
              indemnity cover.</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="btn btn-primary" href="about.php">Read More</a></li>
              <li class="list-inline-item"><a class="btn btn-outline-light" href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</section>
<!-- Features Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-2 order-lg-1">
        <p class="h6 mb-1 text-uppercase text-primary mb-3">Our main features</p>
        <h2 class="mb-4">We Work With You To Address Your Most Critical Business Priorities</h2>
        <p class=" ">In keeping up with global trends,
          changing legal marketplace and client
          expectations, our mission is to develop
          long-term business relationships based
          on practical wisdom, legal expertise and
          trusted advice in offering legal
          solutions. Here are our core values;</p>

        <!-- Details 1 -->
        <div id="details" class="accordion">
          <div class="area-1">
          </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
          <div class="area-2">

            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">

              <div class="item">
                <div id="headingOne">
                  <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                    <span class="circle-numbering">1</span><span class="accordion-title">Professionalism</span>
                  </span>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                  <div class="accordion-body  ">
                    We strive for excellence in everything that we do.
                  </div>
                </div>
              </div> <!-- end of item -->

              <div class="item">
                <div id="headingTwo">
                  <span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" role="button">
                    <span class="circle-numbering">2</span><span class="accordion-title">Honouring commitments</span>
                  </span>

                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                  <div class="accordion-body  ">
                    Our word is our honour and bond as we continue to jealously guard our firm’s
                    image and reputation by being dependable and reliable while exhibiting the high-
                    est ethical standards.
                  </div>
                </div>
              </div> <!-- end of item -->

              <div class="item">
                <div id="headingThree">
                  <span data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" role="button">
                    <span class="circle-numbering">3</span><span class="accordion-title">Integrity and honesty</span>
                  </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                  <div class="accordion-body  ">
                    Character counts. We endeavor to be reliable, trustworthy, transparent, commit-
                    ted to fairness, honour and truth. We are honest enough to assess your needs and
                    give you an objective opinion in offering you a suitable solution.
                  </div>
                </div>
              </div> <!-- end of item -->
              <div class="item">
                <div id="headingFour">
                  <span data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" role="button">
                    <span class="circle-numbering">4</span><span class="accordion-title">Transparency and Accountability</span>
                  </span>

                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionOne">
                  <div class="accordion-body  ">
                    In engaging with us, we remain transparent and agree to be bound by reasonable
                    professional standards and expectations in decision-making processes and in
                    delivering on your instructions. We maintain a sufficient professional indemnity
                    insurance cover and have never had a claim on that cover. We are committed to
                    keeping our clients informed and at all times being accountable to our clients.
                  </div>
                </div>
              </div> <!-- end of item -->


            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

          </div> <!-- end of area-2 -->
        </div> <!-- end of accordion -->
        <!-- end of details 1 -->

      </div>
      <div class="col-lg-5 ml-auto mb-4 mb-lg-0 order-1 order-lg-2">
        <div class="p-2 border"><img class="img-fluid" src="img/big_logo.png" alt=""></div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->
<!-- <section class="py-5" id="services">
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
          <h3 class="h5">Property Law and Conveyancing</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#quality-1"> </use>
          </svg>
          <h3 class="h5">Employment and Labour matters</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#survey-1"> </use>
          </svg>
          <h3 class="h5">Energy, Mining and Oil and Gas</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#pie-chart-1"> </use>
          </svg>
          <h3 class="h5">Business and non- business entities registration and compliance</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#pay-1"> </use>
          </svg>
          <h3 class="h5">Environmental Compliance & Physical Planning</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#stack-1"> </use>
          </svg>
          <h3 class="h5">Capital Markets Insurance and Banking</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="px-4 py-5 border border-width-md border-dash h-100">
          <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
            <use xlink:href="#stack-1"> </use>
          </svg>
          <h3 class="h5">General Litigation</h3>
          <p class=" mb-0 "></p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Divider Section -->
<section class="bg-cover bg-center" style="background: url(img/hammer-balance.jpg); background-size: cover">
  <div class="primary-overlay py-5">
    <div class="overlay-content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
            <h2 class="text-white mb-2">You Always Get the Best Service</h2>
            <p class="text-white mb-0">Business is our signature. Your solutions start here.</p>
          </div>
          <div class="col-lg-3 ml-auto text-center text-lg-right"><a class="btn btn-outline-light" href="contact.php">Contact Us</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Features Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 px-lg-0">
        <div class="bg-primary pr-lg-3"><img class="w-100" src="img/legal.jpg" height="590" alt=""></div>
      </div>
      <div class="col-lg-7 px-lg-0">
        <div class="p-4 p-md-5 shadow bg-white">
          <p class="h6 mb-1 text-uppercase text-primary mb-3">CORE PRACTICE AREAS</p>
          <h3 class="mb-5">We Provide Experts To Create A Great Value For Your Business</h3>
          <div class="row">
            <div class="col-lg-12">
              <ol class="list-numbers mb-0">
                <li class="mb-4">
                  <p class="lead">Property Law and Conveyancing</p>
                </li>
                <li class="mb-4">
                  <p class="lead">Employment and Labour matters</p>
                </li>
                <li class="mb-4">
                  <p class="lead">Energy, Mining and Oil and Gas</p>
                </li>
                <li class="mb-4">
                  <p class="lead">Business and non- business entities registration and compliance</p>
                </li>
                <li class="mb-4">
                  <p class="lead">Environmental Compliance & Physical Planning</p>
                </li>
                <li class="mb-4">
                  <p class="lead">Capital Markets Insurance and Banking</p>
                </li>
                <li class="mb-4">
                 <p class="lead">General Litigation</p>
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
<section>
  <div class="container py-5">
    <p class="h6 mb-1 text-uppercase text-primary text-center mb-3">Our clients</p>
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="">A sample of our corporate clients.</h2>
        <p class="">In keeping up with global trends,
          changing legal marketplace and client
          expectations, our mission is to develop
          long-term business relationships based
          on practical wisdom, legal expertise and
          trusted advice in offering legal
          solutions.</p>
      </div>
    </div>
    <div class="container mx-md-5">
      <div class="row mx-md-5">
        <div class="col-sm-6">
          <ul class="list-check list-unstyled row mb-4">
            <li class="  mb-2 col-12">Trinity Credit Ltd</li>
            <li class="  mb-2">Sumac Microfinance Bank Limited</li>
            <li class="  mb-2 col-12">Fariji Sacco Society Limited</li>
            <li class="  mb-2">Diverse Cargo and Air Services</li>
            <li class="  mb-2 col-12">Caslam Ventures Limited</li>
            <li class="  mb-2">Kamsim Construction Ltd</li>
            <li class="  mb-2 col-12">Chantam Energy Limited</li>
            <li class="  mb-2">Dahable Energy Limited</li>
            <li class="  mb-2 col-12">Stryke Energy Solutions Limited</li>
            <li class="  mb-2">Haibal Hauliers Limited</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="list-check list-unstyled row mb-4">
            <li class="  mb-2 col-12">Gala Cereals Limited</li>
            <li class="  mb-2">Lewison Group Limited</li>
            <li class="  mb-2 col-12">Fredrick Fyle & Company Limited</li>
            <li class="  mb-2">Imara Dairy Limited</li>
            <li class="  mb-2 col-12">Riviera Investment Limited</li>
            <li class="  mb-2">Allison & Davis Group</li>
            <li class="  mb-2 col-12">Jumbo DAA Kenya Motors</li>
            <li class="  mb-2">Githunguri Jua Kali Sacco</li>
            <li class="  mb-2 col-12">Quarich Investment Group</li>
            <li class="  mb-2">Rash Energy Solutions Limited</li>
          </ul>
        </div>
      </div>
    </div>


  </div>
</section>
<?php
include('footer.php')
?>
</body>

</html>
