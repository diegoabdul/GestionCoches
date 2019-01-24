<?php
require('db.php');
?>

<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT ubicacion from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row2 = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
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
    <div class="map-fix" >
         <div id="map"></div>
       </div>
<div style="width: 55%" style="height: 55%">
            
<div class="table-responsive">

<table  class="table table-striped">
<thead>
<tr>
<th><strong>Imagen</strong></th>
<th><strong>Marca - Modelo</strong></th>
<th><strong>Matriculación</strong></th>
<th><strong>Precio €</strong></th>
<th><strong>Opciones</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>


<td align="center" class="table-responsive"><?php echo '<img height="100%" width="100%" src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'"/>'?></td>

<td align="center"><?php echo $row["marca"]; ?></td>
<td align="center" ><?php echo $row["ano"]; ?></td>
<td align="center"><?php echo $row["precio"]; ?></td>
<td align="center">
<a href="detail.php?id=<?php echo $row["id"]; ?>">View</a>
<a align="center"<?php echo $row["ubicacion"]; ?>"><span style="font-size:180%" class="icon-location-pin"></span></a>


</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

</div>

 <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
   
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