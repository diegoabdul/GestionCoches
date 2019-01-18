
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

    if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else {
    echo "Subiste: " . $_FILES["file"]["name"] . "<br />";
    echo "Tipo de archivo: " . $_FILES["file"]["type"] . "<br />";
    echo "Tamaño: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Almacenado en: " . $_FILES["file"]["tmp_name"];
    $contenidoImagen = file_get_contents($_FILES["file"]["tmp_name"]);
    $imagenBase64 = addslashes($contenidoImagen);
}
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`marca`,`descripcion`,`ano`,`precio`,`imagen`,`submittedby`)values
    ('$trn_date','$marca','$descripcion','$ano','$precio','$imagenBase64','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
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
</head>

<body>
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">Coches Caracas</a>
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
                                <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vehículos por Provincias
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="\Login\Gestion\index.html">Añadir</a>
                                    </li>
                                <<li class="nav-item">
                                        <a class="nav-link" href="#">Contacto</a>
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
                <div class="card-body">
                    <form enctype="multipart/form-data" name="form" method="post" action=""> 
                        <input type="hidden" name="new" value="1" />
                        <div class="form-row">
                            <div class="name">Marca - Modelo</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="marca"placeholder="Marca - Modelo" required>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Descripcion</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="descripcion" placeholder="Descripcion" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Precio</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="precio" placeholder="Precio" required>
                                </div>
                            </div>
                        </div>
                      <div class="form-row">
                            <div class="name">Año</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ano" placeholder="Año" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Imagen</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file" id="file"/><br><br>
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
     
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAHBCfFYMdSzcBdmEDKui4LHKVG3T9Xdkg"></script>
</body>

</html>
<!-- end document-->