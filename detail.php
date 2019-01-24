<!DOCTYPE html>
<html lang="en">
<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
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
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
     <!-- Librerías para usar Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>

    <!-- Librerías para usar Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Librerías propias -->  
    <script src="scripts.js"></script>
</head>

<body>
<div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">Coches Caracas</a>
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
                                            <a class="dropdown-item" href="vercoches.php?id=<?php echo '0' ?>">Ver Disponibles</a>
                                        </div>
                                    </li>
                                
                                
                                <li class="nav-item active">
                                        <a class="nav-link" href="nosotros.php">Sobre Nosotros</a>
                                    </li>
                                <<li class="nav-item">
                                        <a class="nav-link" href="contacto.php">Contacto</a>
                                    </li>
                                    <li><a href="Login/login.php" class="btn btn-outline-light top-btn"><span class="ti-plus"></span>Login</a></li>
                                </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div>
        <!-- Swiper -->
        <div style="background-color: black;">
            <div align="center">
            <td align="center" height="100%" width="100%"><?php echo '<img height="25%" width="45%" src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'"/>'?></td>
        </div>
    </div>

    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <td align="center"><?php echo $row["marca"]; ?></td>
                    <br>
                    <td align="center"><?php echo $row["ano"]; ?></td>
                    <?php 
                    $otro= $row["precio"];
                    ?>
                    <?php if($otro>50000) : ?>
                               <p><span>$$$$$</span></p>
                            <?php elseif($otro>34999 and $otro<50000) : ?>
                                <p><span>$$$$</span>$</p>
                            <?php elseif($otro>19500 and $otro<34999) : ?>
                                <p><span>$$$</span>$$</p>
                            <?php else : ?>
                                <p><span>$$</span>$$$</p>
                            <?php endif; ?>
                             
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span><td align="center"><?php echo $row["precio"]; ?></td></span>
                            <font color="white">€</font>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 responsive-wrap">
                     <div id="map"></div>
                 </div>
                
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                             <td align="center"><?php echo $row["descripcion"]; ?></td> 
                
                       
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <a align="center"<?php echo $row["ubicacion"]; ?>">Ubicación</a>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p>+34652395778</p>
                        </div>                 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
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
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>
