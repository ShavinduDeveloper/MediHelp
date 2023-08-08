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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  active" aria-current="page" href="department.php">Department</a>
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
        <!-- Banner Area -->
        <section class="banner-area other-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="src/img/doctor.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col container-doctor">
                <div class=" img-doctor text-center">
                    <img src="src/img/doc.png" alt="" class="img-fluid">
                </div>
                <div class="doctor-head">
                    <div class="text-center">
                        <h3>ethel davis</h3>
                        <h6>DEPARTMENT OF DENTAL</h6>
                    </div>
                </div>
                <div class="text-center">
                    <p>ensuring that each individual receives tailored treatment plans that address their unique oral health needs.</p>
                </div>
            </div>
            <div class="col container-doctor">
                <div class=" img-doctor text-center">
                    <img src="src/img/doc.png" alt="" class="img-fluid">
                </div>
                <div class="doctor-head">
                    <div class="text-center">
                        <h3>ethel davis</h3>
                        <h6>DEPARTMENT OF DENTAL</h6>
                    </div>
                </div>
                <div class="text-center">
                    <p>ensuring that each individual receives tailored treatment plans that address their unique oral health needs.</p>
                </div>
            </div>

            <div class="col container-doctor">
                <div class=" img-doctor text-center">
                    <img src="src/img/doc.png" alt="" class="img-fluid">
                </div>
                <div class="doctor-head">
                    <div class="text-center">
                        <h3>ethel davis</h3>
                        <h6>DEPARTMENT OF DENTAL</h6>
                    </div>
                </div>
                <div class="text-center">
                    <p>ensuring that each individual receives tailored treatment plans that address their unique oral health needs.</p>
                </div>
            </div>

            <div class="col container-doctor">
                <div class=" img-doctor text-center">
                    <img src="src/img/doc.png" alt="" class="img-fluid">
                </div>
                <div class="doctor-head">
                    <div class="text-center">
                        <h3>ethel davis</h3>
                        <h6>DEPARTMENT OF DENTAL</h6>
                    </div>
                </div>
                <div class="text-center">
                    <p>ensuring that each individual receives tailored treatment plans that address their unique oral health needs.</p>
                </div>
            </div>
        </div>


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