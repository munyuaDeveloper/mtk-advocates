<!DOCTYPE html>
<html>
<?php

include('header.php')

?>
<nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img class="img-fluid big_logo" src="./img/logo2.png" alt="" width="400" height="100">
            <img class="img-fluid small_logo" src="./img/logo.png" alt="" width="80" height="80">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
                <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.php">About Us</a></li>
                <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="team.php">Our Team</a></li>
                <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>
<!-- Hero Slider -->
<section class="hero bg-cover bg-position py-4" style="background: url(./img/gavel-hammer.jpg); background-size: cover">
    <div class="container py-5 index-forward text-white">
        <h1>Our Team</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-none mb-0 p-0">
                <li class="breadcrumb-item pl-0"><a href="index.php"> <i class="fas fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item pl-0"><a href="team.php"> <i class="fas fa-group mr-2"></i>Our Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tabitha Gachoka</li>
            </ol>
        </nav>
    </div>
</section>
<div class="container">
    <section class="py-4">
        <div class="row py-3 px-sm-4">
            <div class="col-sm-12 mx-auto">

                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 bg-primary">
                        <div class="media align-items-end profile-header">
                            <div class="profile mr-3"><img src="./img/tabitha.png" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">TABITHA GACHOKA</h4>
                                <p>Human Resource & Administration Officer</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                       <ul class="social mb-0 list-inline mt-3">
                           <li class="list-inline-item">

                               <a href="#"  target="_blank" class="social-link">
                                   <img src="./img/facebook-brands.svg" alt="..." height="20" width="20">
                               </a>

                           </li>
                           <li class="list-inline-item">
                               <a href="#"  target="_blank" class="social-link">
                                   <img src="./img/twitter-brands.svg" alt="..." height="20" width="20">
                               </a>
                           </li>
                           <li class="list-inline-item">
                               <a href="#" target="_blank"  class="social-link">
                                   <img src="./img/whatsapp-brands.svg" alt="..." height="20" width="20">
                               </a>
                           </li>
                           <li class="list-inline-item">
                               <a href="#" target="_blank" class="social-link">
                                   <img src="./img/linkedin-brands.svg" alt="..." height="20" width="20">
                               </a>
                           </li>
                       </ul>
                    </div>

                    <div class="py-2 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">About MRs. Tabitha Gachoka</h5><a href="#" class="btn btn-link text-muted"></a>
                        </div>
                        <p class="text-small">Tabitha handles the firm’s human resource and administration affairs. She is a
                            holder of a Diploma in Human Resource and Admninistration from Kiambu
                            Institute of Science and Technology (KIST). She has also worked with various
                            organizations including Kenya Broadcasting Corporation (KBC), Safaricom PLC,
                            and Ministry of Lands & Housing. She has also worked with Hallmark Advertising Agency as a marketing and brand positioning officer. Her key skills include
                            professionalism, excellent customer service skills and a keen attention to detail.
                            These skills serve her in good stead in execution of her duties at the Firm.</p>
                    </div>
                </div><!-- End profile widget -->

            </div>
        </div>
</div>
</section>
</div>


<?php
include('footer.php')
?>
</body>

</html>
