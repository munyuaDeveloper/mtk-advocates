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
        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.php">About</a></li>
        <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
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
<section class="hero bg-cover bg-position py-4" style="background: url(img/hero-banner-3.jpg)">
  <div class="container py-5 index-forward text-white">
    <h1>Contact Us</h1>
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-none mb-0 p-0">
        <li class="breadcrumb-item pl-0"><a href="index.php"> <i class="fas fa-home mr-2"></i>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
      </ol>
    </nav>
  </div>
</section>
<section class="py-5 shadow-sm index-forward">
  <div class="container py-5">
    <header>
      <h2>GET IN TOUCH</h2>
      <p>BUSINESS IS OUR SIGNATURE. YOUR SOLUTIONS START HERE</p>
    </header>
    <div class="row">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="pt-1 bg-primary">
          <div class="p-4 p-lg-5 bg-white shadow-sm">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-6">
                  <input class="form-control" type="text" name="firstname" placeholder="First name">
                </div>
                <div class="form-group col-lg-6">
                  <input class="form-control" type="text" name="lastname" placeholder="Last name">
                </div>
                <div class="form-group col-lg-6">
                  <input class="form-control" type="tel" name="phone" placeholder="Phone number">
                </div>
                <div class="form-group col-lg-6">
                  <input class="form-control" type="text" name="subject" placeholder="Subject">
                </div>
                <div class="form-group col-lg-12">
                  <input class="form-control" type="email" name="email" placeholder="Email address">
                </div>
                <div class="form-group col-lg-12">
                  <textarea class="form-control" name="message" rows="5" placeholder="Leave your message"></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <button class="btn btn-outline-primary" type="submit">Submit now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h3>Have a quesion?</h3>
        <p class="text-muted mb-5">MURIMI, THIONGO, KUNGU & COMPANY ADVOCATES.</p>
        <ul class="list-unstyled">
          <li class="d-flex mb-3">
            <!-- <div class="icon bg-primary"><i class="fas fa-map-marker-alt text-white fa-fw"></i></div> -->
            <div class="ml-3">
              <h5 class="mb-0">Head Office;</h5>
              <p class="text-muted text-small">
                Windsor House, 4th Floor , Room No. 403 University Way (Opposite
                Central Police Station)</p>
            </div>
          </li>
          <li class="d-flex mb-3">
            <!-- <div class="icon bg-primary"><i class="fas fa-envelope text-white fa-fw"></i></div> -->
            <div class="ml-3">
              <h5 class="mb-0">Githunguri Branch;</h5>
              <p class="text-muted text-small">Jubilee House, 1st Floor Room No. 3 (Behind Family Bank)</p>
              <p class="text-muted text-small">P.O Box 23528-00625 Nairobi</p>
              <p class="text-muted text-small">Pilot: +254 725 109 587</p>
              <p class="text-muted text-small">Mobile: +254 725 109 587</p>
              <p class="text-muted text-small">Email: info@mtkadvocates.com</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Map Section -->
<!-- <section class="gmap" id="map"></section> -->
<?php
include('footer.php')
?>

</body>

</html>