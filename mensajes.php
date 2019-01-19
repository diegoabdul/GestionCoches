<?php
require('db.php');
include("auth.php");
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
<div style="width: 75%" style="height: 50%">
                    

<div class="table-responsive">

<table class="table table-striped">
<thead>
<tr>
<th><strong>Nombre</strong></th>
<th><strong>Email</strong></th>
<th><strong>Telefono</strong></th>
<th><strong>Asunto</strong></th>
<th><strong>Mensaje</strong></th>
<th><strong>Opciones</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from contact ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["telefono"]; ?></td>
<td align="center"><?php echo $row["subject"]; ?></td>
<td align="center"><?php echo $row["message"]; ?></td>
<td align="center">
<a href="delete1.php?id=<?php echo $row["id"]; ?>">Delete</a>

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
     <script>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com
        function myMap() {
            var maplat = $('#map').data('lat');
            var maplon = $('#map').data('lon');
            var mapzoom = $('#map').data('zoom');
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: maplat,
                    lng: maplon
                },
                zoom: mapzoom,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: maplat,
                    lng: maplon
                },
                map: map,
                title: 'We are here!'
            });
        }
    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAHBCfFYMdSzcBdmEDKui4LHKVG3T9Xdkg"></script>
</body>
</html>