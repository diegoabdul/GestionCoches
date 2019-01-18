<?php
require('db.php');
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
                                            <a class="dropdown-item" href="vercoches.php">Ver Disponibles</a>
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
                                <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ofertas
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Ver Ofertas</a>
                                        </div>
                                    </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="#">Sobre Nosotros</a>
                                    </li>
                                <<li class="nav-item">
                                        <a class="nav-link" href="">Contacto</a>
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
<div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- Google Map Inicial  -->
                        <div id="map" data-lat="40.37" data-lon="-3.917" data-zoom="12"></div>
                    </div>

<div>

<table width="138%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Imagen</strong></th>
<th><strong>Marca - Modelo</strong></th>
<th><strong>Año</strong></th>
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

  

<td align="center" height="25%" width="25%"><?php echo '<img height="100%" width="100%" src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'"/>'?></td>

<td align="center"><?php echo $row["marca"]; ?></td>
<td align="center"><?php echo $row["ano"]; ?></td>
<td align="center"><?php echo $row["precio"]; ?></td>
<td align="center">
<a href="detail.html?id=<?php echo $row["id"]; ?>">View</a>
<a href="id=<?php echo $row["id"]; ?>">Ubicación</a>
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
    </script>
     
         <meta charset="UTF-8">
    
    <!-- Librerías para usar Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>

    <!-- Librerías para usar Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Librerías propias -->
    <link rel="stylesheet" href="estilo.css">
    <script src="scripts.js"></script>

    <div class="row">
      <div class="col-sm-8">
        <div id="map"></div>
      </div>
      <div class="col-sm-4">
       
        <form>
            <input type="text" id="Latitud"> Latitud<br>
            <input type="text" id="Longitud"> Longitud<br>
            <input type="button" value="Guardar" id="Guardar">      
        </form>
        
        <br>
    
        <div id="tabla"> </div>

      </div>
    </div>




</body>
</html>