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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <a class="nav-link" href="#">Contact</a>
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
            <div class = "heddings">
                <h1>Welcome</h1>
                <p>
                    At MediHelp, we believe that healthcare should be accessible to everyone, no matter where they are. We are delighted to have you here, where we bring medical expertise and care right to your fingertips.
                    With our user-friendly telemedicine platform, you can connect with qualified healthcare professionals from the comfort of your own home. Whether you have a medical concern, need a prescription refill, or simply seek professional advice, our dedicated team is ready to assist you.
                </p>
            </div>
        </div>



        <!-- Footer -->
        <!-- <div id="footer" class="bg-dark fixed-bottom">
            <div class="container-fluid">
                Under Construction by - <b>STS Software Development</b>
            </div>
        </div> -->

    </body>
</html>
