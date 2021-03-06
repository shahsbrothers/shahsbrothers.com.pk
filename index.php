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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">

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
                    <li class="active"><a href="index.php">Home</a></li>
                    <!-- Dynamic Content here -->
                    <?php
                        include_once('catagories.php');
                    ?>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php include_once('core/get_slider.php') ?>
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(<?php echo $slider['slider1']; ?>)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Shah's Brothers</span></h2>
                                <p class="animate__animated animate__fadeInUp">We provide services in the areas of Solar System, Renewable Energy, diagnostic and therapeutic imaging, laboratory diagnostics and molecular medicine as well as digital health and enterprise services.</p>
                                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(<?php echo $slider['slider2']; ?>">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown">Welcome to <span>Shah's Brothers</span></h2>
                                <p class="animate__animated animate__fadeInUp">We provide services in the areas of Solar System, Renewable Energy, diagnostic and therapeutic imaging, laboratory diagnostics and molecular medicine as well as digital health and enterprise services.</p>
                                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(<?php echo $slider['slider3']; ?>)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Shah's Brothers</span></h2>
                                <p class="animate__animated animate__fadeInUp">We provide services in the areas of Solar System, Renewable Energy, diagnostic and therapeutic imaging, laboratory diagnostics and molecular medicine as well as digital health and enterprise services.</p>
                                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container" id="services">
                <div class="section-title" data-aos="fade-up">
                    <h2>Our Services </h2>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-4">
                        <div class="icon-box" style="padding-bottom: 65px;">
                            <p class="text-center">
                                <i class="fas fa-heartbeat"></i>
                                <h3 class="text-center"><a href="contact.php#contact">Health Care</a></h3>
                            </p>
                            <p class="text-justify">
                                Our purpose is to enable healthcare providers to increase value by empowering them on their journey towards expanding precision medicine, transforming care delivery, and improving patient experience, all enabled by digitizing healthcare.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <p class="text-center">
                                <i class="fas fa-solar-panel"></i>
                                <h3 class="text-center"><a href="contact.php#contact">Renewable Energy</a></h3>
                            </p>

                            <p>
                                To create an entire sustainable energy ecosystem, by providing a unique set of energy solutions, Powerwall, Powerpack and Solar Roof, enabling homeowners, businesses, and utilities to manage renewable energy generation, storage, and consumption
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box" style="padding-bottom: 60px;">
                            <p class="text-center">
                                <i class="fas fa-server"></i>
                                <h3 class="text-center"><a href="contact.php#contact">IT Solutions</a></h3>
                            </p>
                            <p>
                                To enhance the business operation of its clients by developing and/or implementing premium IT products and services and Providing high quality software development services, professional consulting and development outsourcing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <p class="text-center">
                                <i class="fas fa-fish"></i>
                                <h3 class="text-center"><a href="contact.php#contact">Aquaculture</a></h3>
                            </p>
                            <p>
                                To strengthen livelihoods and enhance food and nutrition security by improving fisheries and aquaculture. We pursue this through research partnerships focused on helping those who stand to benefit the most—poor producers and consumers, women and children.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <p class="text-center">
                                <i class="bx bx-cctv"></i>
                                <h3 class="text-center"><a href="contact.php#contact">CCTV Installation </a></h3>
                            </p>

                            <p>
                                We have a growing team of security contractors, suppliers and engineers to plan, configure and install your surveillance cameras and related products. We have been serving the commercial industry and businesses with surveillance related products for nearly
                                ten years.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <p class="text-center">
                                <i class="fas fa-hospital"></i>
                                <h3 class="text-center"><a href="contact.php#contact"> Design & Construction</a></h3>
                            </p>

                            <p class="text-center" >
                            Our firm employs a dynamic team of engineers, architects, and technically trained employees with a broad range of experience. This allows us to provide first-rate multidisciplinary services.
                            We provide world-class building design and construction consultancy.

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Featured Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>About Us </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about_1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <p class="text-justify">
                            We Shah’s Brother & Co are a wholesaler and distributor of high quality IT, Medical and Lab Equipment, Solar Systems, other renewable energy sources, aqua-culture, and Furniture, Stationary and general items. We supply high quality systems all over Khyber
                            Pakhtunkhwa, with variety of brands and category; traditional systems, modern lab wares and much more. Along with it we provide consultancy, commissioning, import and after sale services in the fields of our expertise.
                        </p>


                        <p class="text-justify">
                            We deliver unbiased expertise through our comprehensive portfolio of managed services across applications, data, security and infrastructure on the best platforms with proven results.
                        </p>
                        <p class="text-center">
                            <a href="about.html" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                        </p>



                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <?php
        include_once('portfolio.php');
        ?>
        <!-- End Portfolio Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="owl-carousel clients-carousel">
                    <img src="assets/img/clients/client-1.png" alt="">
                    <img src="assets/img/clients/client-2.png" alt="">
                    <img src="assets/img/clients/client-3.png" alt="">
                    <img src="assets/img/clients/client-4.png" alt="">
                    <img src="assets/img/clients/client-5.png" alt="">
                    <img src="assets/img/clients/client-6.png" alt="">
                    <img src="assets/img/clients/client-7.png" alt="">
                    <img src="assets/img/clients/client-8.png" alt="">
                </div>

            </div>
        </section>
        <!-- End Clients Section -->

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/products.js"></script> -->
</body>

</html>