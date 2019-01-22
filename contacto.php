<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $phone =$_REQUEST['phone'];

  $ins_query="insert into contact
    (`name`,`email`,`telefono`,`subject`,`message`)values
    ('$name','$email','$phone','$subject','$message')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    
    $status = "Correctamente Insertado.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
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
       <form enctype="multipart/form-data" name="form" method="post" action=""> 
                        <input type="hidden" name="new" value="1" />
        <h2 class="form-row">Contacta con Coches Caracas</h2>
        <label for="inputName" class="sr-only">Nombre</label>
          <input type="name" name="name" id="inputName" class="form-control" placeholder="Nombre" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="nombre@email.com" required>
        <label for="inputSubject" class="sr-only">Asunto</label>
          <input type="message" name="subject" id="inputSubject" class="form-control" placeholder="Asunto" required>
          <label for="inputSubject" class="sr-only">Telefono</label>
          <input type="number" name="phone" id="inputNumber" class="form-control" placeholder="Telefono" required>
        <label for="inputMessage" class="sr-only" >Mensaje</label>
        <textarea class="form-control" name="message" id="inputMessage" rows="3"placeholder="Introduzca su mensaje, si le gusto algun coche indique tambien el modelo."></textarea>
        <button class="btn" type="submit">Enviar</button>
      </form>
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
    </div>
  </form>
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