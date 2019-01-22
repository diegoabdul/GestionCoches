
<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $marca =$_REQUEST['marca'];
	$descripcion =$_REQUEST['descripcion'];
    $ano = $_REQUEST['ano'];
    $precio = $_REQUEST['precio'];
    $Latitud =$_REQUEST['Latitud'];
    $Longitud =$_REQUEST['Longitud'];
    $Ubicacion = "onclick=\"ver(".$Latitud.",".$Longitud.");";
    if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else {
    $contenidoImagen = file_get_contents($_FILES["file"]["tmp_name"]);
    $imagenBase64 = addslashes($contenidoImagen);
}
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`marca`,`descripcion`,`ano`,`precio`,`imagen`,`ubicacion`,`submittedby`)values
    ('$trn_date','$marca','$descripcion','$ano','$precio','$imagenBase64','$Ubicacion','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "Correctamente Añadido.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Añadir</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
                                <<li class="nav-item">
                                        <a class="nav-link" href="mensajes.php">Ver Mensajes</a>
                                    </li>
                                    <li><a href="logout.php" class="btn btn-outline-light top-btn"><span class="ti-plus"></span>Logout</a></li>
                                </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="map-fix" >
         <div id="map"></div>
       </div>
                <div style="width: 55%" style="height: 55%" class="card-body">
                    <form enctype="multipart/form-data" name="form" method="post" action=""> 
                        <input type="hidden" name="new" value="1" />
                        <div class="form-row">
                            <div class="name">Marca - Modelo</div>
                            <div class="value">
                                <input maxlength="30" class="input--style-6" type="text" name="marca"placeholder="Marca - Modelo" required>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Descripcion</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="40" class="input--style-6" type="text" name="descripcion" placeholder="Descripcion" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Precio</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="5" class="input--style-6" type="text" name="precio" placeholder="Precio" required>
                                </div>
                            </div>
                        </div>
                      <div class="form-row">
                            <div class="name">Año</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="4" class="input--style-6" type="date" name="ano" placeholder="Año" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Imagen</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file" id="file" required>
                                </div>
                                <div class="label--desc"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ubicacion</div>
                            <div class="value">
                                        <input type="text" name="Latitud" id="Latitud" required> Latitud<br>
                                        <input type="text" name="Longitud" id="Longitud" required> Longitud<br>
                                </div>
                                <div class="label--desc"></div>
                            </div>
                        </div>

                        <button class="btn btn--radius-2 btn--blue-2" type="submit" value="Upload">Añadir</button>
                        
                    </form>

                    <p style="color:#FF0000;"><?php echo $status; ?></p>
                </div>
                
                    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>
<!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
<!-- end document-->