<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Coches Caracas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
require('db.php');
require('auth.php');
session_start();
    ?>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index2.php">Coches Caracas</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Vehículos de Ocasión
                     <span class="icon-arrow-down"></span>
                   </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="view.php">Ver Disponibles</a>
                                        </div>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a class="nav-link" href="anadir.php">Añadir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mensajes.php">Ver Mensajes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Login/registration.php">Registro Nuevo Usuario</a>
                                    </li>
                                    <li><a href="logout.php" class="btn btn-outline-light top-btn"><span class="ti-plus"></span>Logout</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Los mejores coches de España</h1>
                                    
                                </div>
                            </div>
                        </div>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>
<footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Esta aplicación fue realizada por Diego Abdul y Zoran Cerrillo, derechos reservados &copy;</a></p>
                        <ul>
                            <p>Diego Abdul</p>
                            <li><a href="https://www.linkedin.com/in/diego-abdul-massih-lopez-b4867316a/" target=”_blank”><span class="ti-linkedin"></span></a></li>
                            <li><a href="https://www.instagram.com/diegoabdul/" target=”_blank”><span class="ti-instagram" ></span></a></li>
                            <br>
                            <p>Zoran Cerrillo</p>
                            <li><a href="https://www.instagram.com/zorancerrillo9/" target=”_blank”><span class="ti-instagram" ></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>
