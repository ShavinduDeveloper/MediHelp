<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="doctors.php">Doctors</a>
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
</body>
</html>