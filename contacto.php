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

        <div class="card-body">
      <form class="card-body" method="POST">
        <h2 class="form-row">Contacta con Coches Caracas</h2>
        <label for="inputName" class="sr-only">Name</label>
          <input type="name" name="name" id="inputName" class="form-control" placeholder="Nombre" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="nombre@email.com" required>
        <label for="inputSubject" class="sr-only">Subject</label>
          <input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Asunto" required>
        <label for="inputMessage" class="sr-only" >Message</label>
        <textarea class="form-control" id="inputMessage" rows="3"placeholder="Introduzca su mensaje, si le gusto algun coche indique tambien el modelo."></textarea>
        <button class="btn" type="submit">Enviar</button>
      </form>
      </div>
      <?php
      if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
 
  
  }
?>


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
    </div>
  </form>
</body>
  </html>