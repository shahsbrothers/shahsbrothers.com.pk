<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shah's Brothers & Co</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/logo.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i><a href="mailto:info@shahsbrothers.com.pk">info@shahsbrothers.com.pk</a>
                <i class="icofont-phone"></i> (+92) 345 9119072
                <!--, 0332 8004762 , 091 2245745 -->
            </div>
            <div class="social-links">
                <a href="#" class="twitter"     target="_blank"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"    target="_blank"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"   target="_blank"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"       target="_blank"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"    target="_blank"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <a href="index.php"><img src="assets/img/logo-removebg.png" alt="" class="img-fluid rotate"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <!-- Dynamic Content here -->
                    <?php
                        include_once('catagories.php');
                    ?>
                    <li><a href="about.php">About Us</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>Contact</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>House # 29, Zareen Colony, near Green Mart, Dalazak Road, Peshawar, Khyber Pakhtunkhwa</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p><a href="mailto:info@shahsbrothers.com.pk">info@shahsbrothers.com.pk</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>(+92) 345 9119072</p>
                            <p>(+92) 332 8004762</p>
                            <p>(+92) 091 2245745</p>
                        </div>
                    </div>

                </div>

                <div class="row" id="contact">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps?q=34.03169250488281%2071.60331726074219&z=14&t=&ie=UTF8&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form id="contact_form" class="">
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <!-- <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> -->
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#"> Health Care</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Renewable Energy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">IT Solutions</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Aquaculture</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <i class="fas fa-location"> </i> House # 29, Zareen Colony, near Green Mart, Dalazak Road, Peshawar, Khyber Pakhtunkhwa <br><br>
                            <strong>Phone:</strong> <br> (+92) 345 9119072 <br> (+92) 332 8004762 <br> (+92) 091 2245745 <br>
                            <strong>Email:</strong> <a href="mailto:info@shahsbrothers.com.pk">info@shahsbrothers.com.pk</a><br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="assets/img/logo.png" class="img-fluid">
                        <p class="text-justify">
                            We provide services in the areas of Solar System, Renewable Energy, diagnostic and therapeutic imaging, laboratory diagnostics and molecular medicine as well as digital health and enterprise services.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"     target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"    target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"   target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="skype"       target="_blank"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"    target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Shahsbrothers</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://github.com/khaalidi/" target="_blank"> Khaalidi </a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/js/social.js"></script>
    <script src="assets/js/contact.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>