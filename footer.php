<footer class="bg-dark">
  <!-- <div class="bg-primary py-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <h6 class="h1 mb-0">705</h6>
            <p class="ml-3 flex-grow-1 text-uppercase mb-0">Projects completed</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <h6 class="h1 mb-0">809</h6>
            <p class="ml-3 flex-grow-1 text-uppercase mb-0">Satisfied customers</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <h6 class="h1 mb-0">354</h6>
            <p class="ml-3 flex-grow-1 text-uppercase mb-0">Awards recieved</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <h6 class="h1 mb-0">35</h6>
            <p class="ml-3 flex-grow-1 text-uppercase mb-0">Years of experience</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="bg-dark py-5 text-white">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-4 col-md-6"><img class="mb-4" src="img/logo2.png" alt="" width="200">
          <p class="text-muted text-small mb-4">Business is our signature.</p>
          <p class="mb-1"><i class="fas fa-envelope mr-3 text-primary fa-fw"></i><span class="text-small text-muted">info@mtkadvocates.com</span></p>
          <p class="mb-1"><i class="fas fa-mobile mr-3 text-primary fa-fw"></i><span class="text-small text-muted">+254 725 109 587</span></p>
          <p class="mb-1"><i class="fas fa-map-marker-alt mr-3 text-primary fa-fw"></i><span class="text-small text-muted">Windsor House, 4th Floor , Room No. 403 University Way (Opposite
              Central Police Station)</span></p>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="mt-3 mb-4 font-weight-normal">Quick links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a class="footer-link" href="index.php">Home</a></li>
            <li class="mb-2"><a class="footer-link" href="about.php">About</a></li>
            <li class="mb-2"><a class="footer-link" href="index.php#services">Services</a></li>
            <li class="mb-2"><a class="footer-link" href="team.php">Our Team</a></li>
            <li class="mb-2"><a class="footer-link" href="contact.php">Contacts</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="mt-3 mb-4 font-weight-normal">Our services</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a class="footer-link" href="#">Property Law and Conveyancing</a></li>
            <li class="mb-2"><a class="footer-link" href="#">Employment and Labour matters</a></li>
            <li class="mb-2"><a class="footer-link" href="#">Energy, Mining and Oil and Gas</a></li>
            <li class="mb-2"><a class="footer-link" href="#">Our Case Studies</a></li>
            <li class="mb-2"><a class="footer-link" href="#">Free Consultation</a></li>
            <li class="mb-2"><a class="footer-link" href="#">Meet Our Experts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-darker py-4">
    <div class="container text-center">
      <p class="mb-0 text-muted text-small"> All rights reserved&copy; 2021 MTK Advocates. Developed by <a target="_blank" href="https://uptechpay.com">Uptech Payouts</a></p>
    </div>
  </div>
</footer>

<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
<script src="vendor/modal-video/js/modal-video.js"></script>
<script src="vendor/leaflet/leaflet.js"></script>
<script src="js/front.js"></script>
<script>
  // ------------------------------------------------------- //
  //   Inject SVG Sprite - 
  //   see more here 
  //   https://css-tricks.com/ajaxing-svg-sprite/
  // ------------------------------------------------------ //
  function injectSvgSprite(path) {

    var ajax = new XMLHttpRequest();
    ajax.open("GET", path, true);
    ajax.send();
    ajax.onload = function(e) {
      var div = document.createElement("div");
      div.className = 'd-none';
      div.innerHTML = ajax.responseText;
      document.body.insertBefore(div, document.body.childNodes[0]);
    }
  }
  // this is set to BootstrapTemple website as you cannot 
  // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
  // while using file:// protocol
  // pls don't forget to change to your domain :)
  injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">