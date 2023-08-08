<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MediHelp</title>

        <!--Title bar icon-->
        <link rel ="icon" href ="src/img/favicon.png" type ="image/x-icon">


        <!--Bootstrap Css file-->
        <link href="src/vendor/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!--jquery file-->
        <script src="src/vendor/bootstrap-5.3.0-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="src/vendor/bootstrap-5.3.0-dist/js/jquery.min.js" type="text/javascript"></script>

        <!--Bootstrap js file-->
        <script src="src/vendor/bootstrap-5.3.0-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <!--Fonts-->
        <link href="src/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="src/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css"/>
        <link href="src/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css"/>

        <!--CSS file-->
        <link href="src/Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="preloader"></div>

        <!-- Navigation Bar -->
        <nav id="nav" class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a href="#">
                        <img src="src/img/logo.png" class="nav-image" alt=""/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div id="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <button></button>
                        <img src="src/img/01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="src/img/02.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="src/img/03.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="heddings">
                <hr>
                <h1>Welcome</h1>
                <p>
                    At <span>MediHelp</span>, we believe that healthcare should be accessible to everyone, no matter where they are. We are delighted to have you here, where we bring medical expertise and care right to your fingertips.
                    With our user-friendly telemedicine platform, you can connect with qualified healthcare professionals from the comfort of your own home. Whether you have a medical concern, need a prescription refill, or simply seek professional advice, our dedicated team is ready to assist you.
                </p>
                <hr>
            </div>

            <!-- Banner Area Starts -->
            <section class="banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="src/img/banner-bg.jpg" alt=""/>
                        </div>
                        <div class="col-lg-7">
                            <h4>Caring for better life</h4>
                            <h1>Leading the way in medical excellence</h1>
                            <p> It is important to take care of our health not only for ourselves, but also for our loved ones.health and wellness advice that’s inclusive and rooted in medical expertise.</p>
                            <a href="appoinment.html" class="template-btn">take appointment</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area End -->
        </div>


        <!-- Feature Area Starts -->
        <section class="feature-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature text-center item-padding">
                            <img src="src/img/feature1.png" alt="">
                            <h3>advance technology</h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature text-center item-padding mt-4 mt-md-0">
                            <img src="src/img/feature2.png" alt="">
                            <h3>comfortable place</h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                            <img src="src/img/feature3.png" alt="">
                            <h3>quality equipment</h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                            <img src="src/img/feature4.png" alt="">
                            <h3>friendly staff</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Area End -->

        <!-- Hotline Area Starts -->
        <section class="hotline-area text-center section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Emergency hotline</h2>
                        <span>+94 34 545 5454</span>
                        <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hotline Area End -->

        <!-- Footer Area Starts -->
        <footer class="footer-area spft">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 align-content-center">
                        <span>

                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <b>Medi Help </b><a href="https://colorlib.com" target="_blank"></a>

                        </span>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 align-content-center">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <script>

//          Code of the Preloader 

        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })

//         ----------------------
    </script>
</body>
</html>
