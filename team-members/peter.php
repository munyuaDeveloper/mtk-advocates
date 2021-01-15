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
<section class="hero bg-cover bg-position py-4" style="background: url(img/gavel-hammer.jpg); background-size: cover">
    <div class="container py-5 index-forward text-white">
        <h1>Our Team</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-none mb-0 p-0">
                <li class="breadcrumb-item pl-0"><a href="index.php"> <i class="fas fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
            </ol>
        </nav>
    </div>
</section>
<div class="container">
    <section class="py-4">
        <!-- For demo purpose -->
        <div class="row">
            <div class="col-lg-12 mx-auto text-center pt-2">
                <h2 class="display-5">MEET THE DREAM TEAM</h2>
                <p class="lead mb-0">Our team is comprised of highly qualified and upstanding individuals with diverse skills and a combined experience of over 20 years in legal practice.</p>

            </div>
        </div><!-- End -->
        <div class="row py-3 px-4">
            <div class="col-sm-12 mx-auto">

                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 bg-primary">
                        <div class="media align-items-end profile-header">
                            <div class="profile mr-3"><img src="./img/festus.png" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">MR. FESTUS MURIMI KITHINJI</h4>
                                <!-- <p class="small mb-4">Partner</p> -->
                                <p>LL.B (Hons) Moi, Post Graduate Diploma, Law (KSL)</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item">

                                <a href="#" class="social-link">
                                    <img src="./img/facebook-brands.svg" alt="..." height="20" width="20">
                                </a>

                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/twitter-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/instagram-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/linkedin-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="py-2 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">About MR. Festus Murimi Kithinji</h5><a href="#" class="btn btn-link text-muted"></a>
                        </div>
                        <p class="text-muted">Festus Murimi Kithinji holds a Bachelor of Laws Degree (LL.B) from Jomo Ken-
                            yatta University of Agriculture and Technology and a Post-Graduate Diploma in
                            Law from the Kenya School of Law. He has over three years’ post admission
                            experience majoring in corporate/commercial law and conveyancing matters.</p>
                        <p class="display-5">Work Experience: </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2">Festus has worked with leading law firms in the country. He worked with the Firm
                                of Miller & Company Advocates where he completed his internship and pupillage. During his period of work there he actively participated in the successful
                                and high profile reparations Mau Mau case involving over 21,000 claimants
                                against the British government. He was also involved in key briefs on real estate
                                projects, debt recovery, drafting security documentation, preparation of debentures and banking law & practice.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Festus has subsequently worked with Capital Law Group (CLG), one of the leading firms in the area of corporate/commercial Law as Commercial lawyer. He has
                                undertaken many complex assignments in the area corporate/commercial law and
                                conveyancing and gained specialized experience in the areas of capital markets
                                and corporate finance.</li>
                        </ul>
                        <p class="display-5">Areas of Practice: </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2">Corporate and commercial law which includes drafting commercial documents for key financial institutions and insurance companies.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Commercial and civil mediation, comparative constitutional and human rights
                                law, judicial review and intellectual property law involving registration of intellectual property rights, patent and copyrights</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Probate and administration matters especially in drafting trusts and estates relating to wills, succession, probate and divorce.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Conveyance and property law especially drafting of security documents and
                                agreements for commercial banks in Kenya.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Advisory role in relation to contentious and non-contentious matters.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Criminal litigation and defence.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Representing local banks in secured financing transactions.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Representation in contested arbitration matters.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Legal advice and representation in relation to commercial and residential.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Legal advice to micro finance lending institutions and SACCOS.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Legal advice to individuals in relation to borrowing transactions.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Negotiations on behalf of a client in relation to a discharge and charge of property with a local financial institution.</li>
                        </ul>

                        <p class="display-5">Membership </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2 col-12">Member of the Law Society of Kenya</li>
                            <li class="text-small text-muted mb-2">Member of the East African Law Society</li>
                        </ul>
                    </div>
                </div><!-- End profile widget -->

            </div>
        </div>

        <div class="row py-3 px-4">
            <div class="col-sm-12 mx-auto">

                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 bg-primary">
                        <div class="media align-items-end profile-header">
                            <div class="profile mr-3"><img src="./img/charles_thiongo.png" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">MR. CHARLES THIONGO</h4>
                                <p class="small mb-4">LL.M (Cand.) UON, LL.B (Hons) UON, Post Graduate Diploma, Law (KSL)</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item">

                                <a href="#" class="social-link">
                                    <img src="./img/facebook-brands.svg" alt="..." height="20" width="20">
                                </a>

                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/twitter-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/instagram-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/linkedin-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="py-2 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">About MR. Charles Thiongo</h5><a href="#" class="btn btn-link text-muted"></a>
                        </div>
                        <p class="text-muted">Charles holds a Bachelor of Laws (LL.B) degree from the University of Nairobi
                            where he graduated in 2015 with Honours at Second Class, Upper Division.
                            Charles also holds a Post Graduate Diploma in Law from the Kenya School of
                            Law and is a practicing Advocate of the High Court of Kenya. He is currently
                            undertaking his masters of law degree in environment Law at The University of
                            Nairobi and is projected to complete in 2019. He undertook his pupilage at Capi-
                            tal Law Group one of the leading firms in the area of cooperate/commercial law.</p>
                        <p class="text-muted">
                            Charles has been working as the Head Internal Legal department at Ainushamsi
                            Energy Limited since 2015. He handled all the company’s legal matters and inter-
                            faced with retained company advocates to attend to all legal matters.
                        </p>
                        <p class="display-5">He specifically in charge of;</p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2">Drafting, negotiating, execution and registration of all the company’s service station leases.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Liaising with the company’s external advocates in preparing and executing all the company’s contracts and commercial agreements.</li>

                            <li class="text-small text-muted col-sm-12 mb-2">
                                Negotiation and registration of chattels for movable properties and charges/dis-charges for fixed properties.</li>

                            <li class="text-small text-muted col-sm-12 mb-2">Liaising with the external advocates in making the company’s annual returns.</li>

                            <li class="text-small text-muted col-sm-12 mb-2">Preparing and executing tenancy agreements for the various company’s facilities.</li>

                            <li class="text-small text-muted col-sm-12 mb-2">Registering the company’s intellectual property with the Kenya Industrial Property Institute (KIPI).</li>
                        </ul>
                        <p class="display-5">Work Experience: </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted col-sm-12 mb-2">
                                Charles has been working in the energy sector and particularly the oil and gas
                                sub-sector for the past 10 years. He is well versed with legislation and regulations
                                relating to the integrated oil sector incorporating upstream, midstream and downstream petroleum operations. His experience straddles oil exploration and
                                production, oil trading and shipping and supply and distribution and retail of
                                petroleum products. He has also specialized in the area of environment law and
                                is on course to certification as a lead expert in this area upon completion of the
                                Master of Laws program.
                            </li>
                            <li class="text-small text-muted col-sm-12 mb-2">
                                Charles has also established himself in the area of alternative dispute resolution
                                and is undertaking continuous training in this area covering mediation, arbitration,
                                negotiations and conciliations. These mechanisms are encouraged by the Constitution of Kenya to provide an alternative to litigation as a more expeditious ad less
                                adversarial means of resolving disputes between parties.
                            </li>
                            <li class="text-small text-muted col-sm-12 mb-2">
                                Charles has also contributed to the development of law in the country. His under-
                                graduate research paper titled ‘Formulation of a regulatory framework to guide in
                                the administration of the right to bail and bond pursuant to Article 49 (h) of the
                                Constitution’ was one of the reference materials used by the Judiciary in formulation of bail and policy guidelines in 2015. These guidelines have ensured that there
                                is clarity in granting of bail and bond to accused persons brought before courts.
                            </li>
                        </ul>
                        <p class="display-5">Membership </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2 col-12">Member of the Law Society of Kenya</li>
                            <li class="text-small text-muted mb-2">Member of the East African Law Society</li>
                        </ul>
                    </div>
                </div><!-- End profile widget -->
            </div><!-- End profile widget -->

        </div>
        <div class="row py-3 px-4">
            <div class="col-sm-12 mx-auto">

                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 bg-primary">
                        <div class="media align-items-end profile-header">
                            <div class="profile mr-3"><img src="./img/peter_kungu.png" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">MR. PETER KUNGU</h4>
                                <p class="small mb-4">LL.B (Hons) Moi, Post Graduate Diploma, Law (KSL)</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light p-4 d-flex justify-content-end text-center">
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item">

                                <a href="#" class="social-link">
                                    <img src="./img/facebook-brands.svg" alt="..." height="20" width="20">
                                </a>

                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/twitter-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/instagram-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <img src="./img/linkedin-brands.svg" alt="..." height="20" width="20">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="py-2 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">About MR. Charles Thiongo</h5><a href="#" class="btn btn-link text-muted"></a>
                        </div>
                        <p class="text-muted">Peter Mungai Kung’u holds a Bachelor of Laws Degree (LLB) from Moi University
                            and a Post Graduate Diploma from Kenya School of Law. He is a practicing Advocate with strong foundation in litigation and court processes having worked with
                            the judiciary as a legal researcher and aided in drafting and preparing of major
                            rulings and judgments.</p>

                        <p class="display-5">Work Experience: </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted col-sm-12 mb-2">He has worked with the law firm of Martha Maina & Associates for more
                                than two years specializing in conveyance and corporate law. While there, Peter
                                oversaw sale and purchase of some high value properties within the Republic
                                involving both corporate and individual clients. This entailed undertaking due
                                diligence from inception to completion of each transaction undertaken.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Peter has also been involved in registration of business entities including limited
                                liability companies, business names and societies. He has also prepared minutes
                                for various companies during Annual General Meetings (AGM’s) and Special
                                General Meetings (SGM’s) as well as filing annual returns with the Registrar of
                                Companies and of Kenya Revenue Authority on behalf of the corporate clients.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Peter has also worked with the firm of P.K.Njiiri & Co.Advocates for more than
                                4 years and has actively been involved in litigation, both civil and criminal. He is
                                therefore well versed with the entire court process including filings, submissions
                                and document processing. He has prepared pleadings and submitted in court and
                                tribunals matters of weighty jurisprudence. He has also handled conveyance and
                                corporate transactions as well as litigating on constitutional and administrative
                                matters.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">Mr. Kung’u also has also built vast experience in legal research, writing and draft-
                                ing. His thesis titled “The law and policy dealing with domestic violence; Practice,
                                challenges and prospects for reforms” was very instrumental in the drafting and
                                enactment of Protection against Domestic Violence Act 2015 that is the law deal-
                                ing with all domestic violence cases.</li>
                            <li class="text-small text-muted col-sm-12 mb-2">His critique on the new Land Laws in 2012 was also instrumental in advising
                                the National Land Commission in proper implementation of the land laws.
                                He has also authored and researched on a variety of legal issues including the
                                death penalty and conservation of environment which legal practitioners and
                                lobby groups have found to be quite resourceful.</li>
                        </ul>
                        <p class="display-5">Membership </p>
                        <ul class="list-check list-unstyled row px-3 mb-4">
                            <li class="text-small text-muted mb-2 col-12">Member of the Law Society of Kenya</li>
                            <li class="text-small text-muted mb-2">Member of the East African Law Society</li>
                        </ul>
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