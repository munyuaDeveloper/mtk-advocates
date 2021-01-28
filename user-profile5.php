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
                <li class="breadcrumb-item active" aria-current="page">Peter Njoroge</li>
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
                            <div class="profile mr-3"><img src="./img/njoroge.png" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">PETER NJOROGE NJONGE</h4>
                                <p>Court Clerk</p>
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
                            <h5 class="mb-0">About MR. Peter Njoroge</h5><a href="#" class="btn btn-link text-muted"></a>
                        </div>
                        <p class="text-small">Mr. Njonge is a trained clerk and has a vast experience in court processes such as;
                            filing, service of pleadings as well as general management of a law firm's registry.
                            He has over three decades of practice as a court clerk since he first joined the law
                            firm of Kaparo and Waweru Advocates in 1984, a position he held for more than
                            5 years actively engaged in the court process duties.
                            Mr Njonge left Kaparo and Waweru Advocates and joined Macharia Njeru Advocates in 1992 where he worked upto 1995. While there ,he was also actively
                            involved in clerical work such perusal of files at the court registry, filing, service,
                            management of the office registry, conducting searches at various lands and com-
                            pany registries as well as maintaining a proper diary for daily activities of the
                            office.</p>
                        <p class="text-muted">
                            Mr. Njonge then joined Cianda Estates as a farm manager,.overseeing operations
                            of a busy farm located within Kiambu County. He successfully managed the farm
                            ensuring that all the records were properly maintained and that the farm registered
                            profits in its turn over.
                        </p>
                        <p class="text-muted">
                            Mr. Njonge then joined the firm of P.K .Njiiri & Co.Advocates in 2009 as a Court
                            Clerk, a position he held upto 2016 when he joined the firm of Murimi, Thiongo
                            and Kungu Advocates in the same capacity of a Court Clerk.
                            His duties at the firm include but are not limited to maintaining the firm's registry,
                            perusal of files in court registry, filing,service of court documents as well as main-
                            taining a proper diary for daily activities of the office.
                        </p>
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
